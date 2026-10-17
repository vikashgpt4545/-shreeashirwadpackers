<?php
/**
 * Page Name: Patna to Hazaribagh Packers and Movers
 * Route Slug: patna-to-hazaribagh-packers-and-movers
 * Description: Dedicated inter-state moving route page from Patna (Bihar Capital) to Hazaribagh (Jharkhand Plateau).
 * Focus Keywords: patna to hazaribagh packers and movers, packers and movers patna to hazaribagh, house shifting patna to hazaribagh, patna to hazaribagh luggage parcel, patna to hazaribagh car carrier, patna to hazaribagh bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Patna to Hazaribagh Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Reliable Patna to Hazaribagh packers and movers. Same-day 5-6 hr transit via NH-20, Rajauli Ghat safety, 5-layer packing, car transport, GST bills. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/patna-to-hazaribagh-packers-and-movers";
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
    <meta name="geo.region" content="IN-BR">
    <meta name="geo.placename" content="Patna">

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

    <!-- Scoped CSS for Route 16 (Patna to Hazaribagh) -->
    <style>
        :root {
            --p2hzb-primary: #1e3a8a;
            --p2hzb-secondary: #0d9488;
            --p2hzb-accent: #d97706;
            --p2hzb-accent-light: #fef3c7;
            --p2hzb-dark: #0f172a;
            --p2hzb-gray-bg: #f8fafc;
            --p2hzb-border: #e2e8f0;
        }

        .p2hzb-wrapper {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            line-height: 1.7;
        }

        .p2hzb-hero {
            background: linear-gradient(135deg, rgba(30,58,138,0.95) 0%, rgba(13,148,136,0.92) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 20px 75px;
            text-align: center;
            position: relative;
        }
        .p2hzb-hero-content {
            max-width: 980px;
            margin: 0 auto;
        }
        .p2hzb-badge {
            display: inline-block;
            background: rgba(217,119,6,0.25);
            border: 1px solid rgba(251,191,36,0.45);
            color: #fef3c7;
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 20px;
        }
        .p2hzb-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .p2hzb-hero h1 span {
            color: #fbbf24;
            display: inline-block;
        }
        .p2hzb-hero p {
            font-size: 1.15rem;
            color: #e2e8f0;
            max-width: 820px;
            margin: 0 auto 30px;
            line-height: 1.7;
        }
        .p2hzb-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 15px;
            margin: 35px 0 30px;
        }
        .p2hzb-stat-card {
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.15);
            padding: 18px 12px;
            border-radius: 12px;
        }
        .p2hzb-stat-card strong {
            display: block;
            font-size: 1.6rem;
            font-family: 'Outfit', sans-serif;
            color: #fbbf24;
        }
        .p2hzb-stat-card span {
            font-size: 0.85rem;
            color: #cbd5e1;
        }

        .p2hzb-btn-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .p2hzb-btn-phone {
            background: #f59e0b;
            color: #0f172a;
            padding: 13px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 14px rgba(245,158,11,0.35);
            transition: all 0.25s ease;
        }
        .p2hzb-btn-phone:hover {
            background: #d97706;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .p2hzb-btn-whatsapp {
            background: #10b981;
            color: #ffffff;
            padding: 13px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 14px rgba(16,185,129,0.35);
            transition: all 0.25s ease;
        }
        .p2hzb-btn-whatsapp:hover {
            background: #059669;
            transform: translateY(-2px);
        }

        .p2hzb-section {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .p2hzb-section-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }
        .p2hzb-section-header h2 {
            font-family: 'Outfit', sans-serif;
            color: var(--p2hzb-primary);
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 12px;
        }
        .p2hzb-section-header p {
            font-size: 1.05rem;
            color: #64748b;
        }

        .p2hzb-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
            align-items: center;
            margin-bottom: 45px;
        }
        .p2hzb-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
            gap: 25px;
        }

        .p2hzb-card {
            background: #ffffff;
            border: 1px solid var(--p2hzb-border);
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 4px 12px rgba(15,23,42,0.04);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .p2hzb-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(15,23,42,0.08);
        }
        .p2hzb-card h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--p2hzb-primary);
            font-size: 1.3rem;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .p2hzb-card p {
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.65;
            margin-bottom: 0;
        }

        .p2hzb-feature-img {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(15,23,42,0.08);
        }
        .p2hzb-feature-img img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .p2hzb-feature-img:hover img {
            transform: scale(1.03);
        }
        .p2hzb-img-caption {
            background: #f1f5f9;
            padding: 10px 15px;
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            font-style: italic;
        }

        .p2hzb-table-wrapper {
            background: #ffffff;
            border: 1px solid var(--p2hzb-border);
            border-radius: 12px;
            overflow-x: auto;
            box-shadow: 0 8px 20px rgba(15,23,42,0.05);
        }
        .p2hzb-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.98rem;
        }
        .p2hzb-table th {
            background: var(--p2hzb-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            white-space: nowrap;
        }
        .p2hzb-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--p2hzb-border);
            color: #475569;
        }
        .p2hzb-table tr:last-child td {
            border-bottom: none;
        }
        .p2hzb-table tr:hover td {
            background-color: #f1f5f9;
        }

        .p2hzb-matrix-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 15px;
        }
        .p2hzb-matrix-card {
            background: #ffffff;
            border: 1px solid var(--p2hzb-border);
            border-radius: 10px;
            padding: 16px;
            border-left: 4px solid var(--p2hzb-accent);
        }
        .p2hzb-matrix-card h4 {
            color: var(--p2hzb-primary);
            font-size: 1.05rem;
            margin: 0 0 6px;
            font-weight: 700;
        }
        .p2hzb-matrix-card p {
            color: #64748b;
            font-size: 0.9rem;
            margin: 0;
            line-height: 1.5;
        }

        .p2hzb-process-step {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
            align-items: flex-start;
        }
        .p2hzb-step-num {
            background: var(--p2hzb-accent);
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
            box-shadow: 0 6px 14px rgba(217,119,6,0.3);
        }
        .p2hzb-step-content {
            background: #ffffff;
            border: 1px solid var(--p2hzb-border);
            border-radius: 10px;
            padding: 18px 22px;
            flex-grow: 1;
        }
        .p2hzb-step-content h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--p2hzb-primary);
            margin: 0 0 6px;
            font-size: 1.25rem;
        }
        .p2hzb-step-content p {
            margin: 0;
            color: #475569;
            font-size: 0.95rem;
        }

        .p2hzb-faq-item {
            background: #ffffff;
            border: 1px solid var(--p2hzb-border);
            border-radius: 10px;
            margin-bottom: 15px;
            overflow: hidden;
        }
        .p2hzb-faq-q {
            padding: 18px 22px;
            font-weight: 700;
            color: var(--p2hzb-primary);
            font-size: 1.08rem;
            background: #f8fafc;
            border-bottom: 1px solid var(--p2hzb-border);
        }
        .p2hzb-faq-a {
            padding: 18px 22px;
            color: #475569;
            line-height: 1.7;
            font-size: 0.96rem;
        }

        .p2hzb-cta-banner {
            background: linear-gradient(135deg, var(--p2hzb-dark) 0%, var(--p2hzb-primary) 100%);
            color: #ffffff;
            padding: 55px 25px;
            border-radius: 16px;
            text-align: center;
            margin: 50px auto 30px;
            max-width: 1050px;
        }
        .p2hzb-cta-banner h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 12px;
        }
        .p2hzb-cta-banner p {
            font-size: 1.1rem;
            color: #cbd5e1;
            max-width: 700px;
            margin: 0 auto 25px;
        }

        .p2hzb-cluster-links {
            background: #f1f5f9;
            padding: 30px;
            border-radius: 12px;
            margin-top: 40px;
        }
        .p2hzb-cluster-links h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--p2hzb-primary);
            font-size: 1.25rem;
            margin-bottom: 15px;
            font-weight: 700;
        }
        .p2hzb-tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .p2hzb-tag-link {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 7px 15px;
            border-radius: 20px;
            font-size: 0.88rem;
            color: #334155;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .p2hzb-tag-link:hover {
            background: var(--p2hzb-primary);
            color: #ffffff;
            border-color: var(--p2hzb-primary);
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Patna to Hazaribagh",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "telephone": "+918409531615",
        "url": "<?php echo $canonical_url; ?>",
        "priceRange": "₹6,000 - ₹38,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bailey Road, Near Saguna More",
            "addressLocality": "Patna",
            "addressRegion": "Bihar",
            "postalCode": "800001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.5941,
            "longitude": 85.1376
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
        "serviceType": "Inter-State Relocation & Packers and Movers",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Patna"
            },
            {
                "@type": "City",
                "name": "Hazaribagh"
            }
        ],
        "description": "Professional inter-state relocation services from Patna to Hazaribagh across 235 km via NH-20 through Bakhtiyarpur, Nawada, Rajauli Ghati, and Barhi. Dedicated 5-layer packing, closed container vehicles, government & PSU transfer claim invoices, car carriers, and same-day delivery."
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
                "name": "Packers and Movers in Patna",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-patna"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Patna to Hazaribagh",
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
                "name": "How much time does household shifting take from Patna to Hazaribagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Patna and Hazaribagh is approximately 235 to 245 km via the four-lane NH-20 highway passing Bakhtiyarpur, Bihar Sharif, Nawada, the scenic Rajauli Ghati border, and Barhi. Driving transit requires about 5.0 to 6.0 hours. For dedicated vehicle bookings, we provide guaranteed same-day shifting: loading in Patna at 7 AM and completing unloading and room positioning in Hazaribagh by evening."
                }
            },
            {
                "@type": "Question",
                "name": "What are the packers and movers charges from Patna to Hazaribagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Standard tariffs depend on household size and volume: 1 BHK apartment shifting costs ₹11,000 to ₹16,500; 2 BHK household moving ranges from ₹15,500 to ₹22,500; 3 BHK flat/bungalow shifting costs ₹21,000 to ₹30,000; two-wheeler bike transport ranges from ₹2,500 to ₹4,000; and dedicated enclosed car transport ranges from ₹7,000 to ₹11,000."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide authentic GST bills for government and PSU employee reimbursement?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Shree Ashirwad Packers and Movers provides 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, detailed inventory packing lists, and insurance certificates accepted by Bihar & Jharkhand state departments, CCL, NTPC, BSF, banks, railways, and central ministries."
                }
            },
            {
                "@type": "Question",
                "name": "How are delicate household goods protected across Rajauli Ghati curves?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We apply an impenetrable 5-layer protective system featuring EPE foam sheets, heavy bubble wrap, rigid corrugated corner protectors, 7-ply cartons, and waterproof stretch wrapping. Inside our closed container trucks, goods are secured with high-tensile ratchet lashing straps to eliminate load shifting during mountain and ghati transit."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport cars and two-wheelers from Patna to Hazaribagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer specialized hydraulic car carriers and secured two-wheeler parcel services. Vehicles undergo a thorough digital condition inspection with photos before departure, feature wheel-chock locking, and carry full transit insurance protection."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Patna and Hazaribagh do you cover?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Patna, we pick up across Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur, Rajendra Nagar, Ashiana Nagar, Anisabad, Fraser Road, and Saguna More. In Hazaribagh, we deliver to Canary Hill Road, Korrah, Matwari, Nawabganj, Okni, Hurhuru, Babugaon, Demotand, BSF Meru Camp, and Indrapuri."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="p2hzb-wrapper">
    <!-- Hero Section -->
    <section class="p2hzb-hero">
        <div class="p2hzb-hero-content">
            <span class="p2hzb-badge">&#128666; Inter-State Capital Corridor Specialist</span>
            <h1>Patna to Hazaribagh <span>Packers and Movers</span></h1>
            <p>Direct 235 km highway relocation from Bihar’s capital to the serene Chotanagpur Plateau. Fast 5-6 hour transit via NH-20, defensive 5-layer packing armor, sealed container vehicles, and 100% compliant GST reimbursement bills for government and corporate transfers.</p>

            <div class="p2hzb-hero-stats">
                <div class="p2hzb-stat-card">
                    <strong>235 KM</strong>
                    <span>NH-20 Express Corridor</span>
                </div>
                <div class="p2hzb-stat-card">
                    <strong>5 - 6 HRS</strong>
                    <span>Express Transit Time</span>
                </div>
                <div class="p2hzb-stat-card">
                    <strong>5 LAYERS</strong>
                    <span>Packaging Armor</span>
                </div>
                <div class="p2hzb-stat-card">
                    <strong>100% GST</strong>
                    <span>Claim-Ready Invoices</span>
                </div>
            </div>

            <div class="p2hzb-btn-group">
                <a href="tel:8409531615" class="p2hzb-btn-phone">&#128222; Call 084095 31615</a>
                <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20free%20quote%20for%20Patna%20to%20Hazaribagh%20shifting." target="_blank" class="p2hzb-btn-whatsapp">&#128172; WhatsApp Instant Quote</a>
            </div>
        </div>
    </section>

    <!-- Section 1: Route Overview & Highway Engineering -->
    <section class="p2hzb-section">
        <div class="p2hzb-grid-2">
            <div>
                <span class="p2hzb-badge" style="background:#eff6ff; color:#1e3a8a; border-color:#bfdbfe;">Direct Inter-State Highway Corridor</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--p2hzb-primary); font-size:2.2rem; margin:15px 0;">Safe Patna to Hazaribagh Relocation via NH-20</h2>
                <p>Relocating household effects and personal vehicles between Patna and Hazaribagh involves traversing two distinct geographic regions: the fertile Gangetic plains of central Bihar and the ascending forested plateaus of northern Jharkhand. The primary transport route spans approximately 235 to 245 km along the upgraded National Highway 20 (NH-20), passing through Bakhtiyarpur, Bihar Sharif, Nawada, the winding forest curves of Rajauli Ghati, and into Barhi before entering Hazaribagh town.</p>
                <p>At Shree Ashirwad Packers and Movers, our drivers possess extensive experience navigating this specific inter-state arterial corridor. The ascent through Rajauli Ghati requires specialized vehicle handling to prevent load shifting on hairpin turns. We utilize custom heavy-duty nylon ratchet lashing belts and interior container wall cushioning to ensure that delicate glassware, electronic LED televisions, and heavy solid wood furniture stay completely motionless throughout the 5 to 6-hour highway journey.</p>
                <p>Whether you are a state administrative official moving from Patna Secretariat, a medical professional relocating from PMCH or AIIMS Patna to Sheikh Bhikhari Medical College Hazaribagh, a bank executive on rotational posting, or an academic joining Vinoba Bhave University, our dedicated relocation team handles every stage with absolute precision and punctuality.</p>
            </div>
            <div class="p2hzb-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed container transport truck for Patna to Hazaribagh household shifting" loading="lazy">
                <div class="p2hzb-img-caption">Dedicated all-weather sealed container trucks operating daily on the Patna-Hazaribagh highway route</div>
            </div>
        </div>
    </section>

    <!-- Section 2: Why Choose Shree Ashirwad Packers -->
    <section class="p2hzb-section" style="background: var(--p2hzb-gray-bg);">
        <div class="p2hzb-section-header">
            <h2>Why Families &amp; Professionals Trust Our Patna to Hazaribagh Relocation</h2>
            <p>Engineered logistics, trained permanent crews, and uncompromising customer care make us the premier mover connecting Bihar and Jharkhand.</p>
        </div>

        <div class="p2hzb-grid-3">
            <div class="p2hzb-card">
                <h3>&#128666; Sealed Weatherproof Containers</h3>
                <p>Our fleet features dedicated closed-body container trucks that seal out rain, road dust, and highway humidity. Your goods remain fully protected and dry regardless of weather variations between Patna and Hazaribagh.</p>
            </div>
            <div class="p2hzb-card">
                <h3>&#128104;&#8205;&#128295; Trained In-House Packaging Crew</h3>
                <p>We never outsource your precious possessions to casual daily laborers. Our full-time packing specialists possess technical training in dismantling modular furniture, packing delicate bone china, and handling bulky double-door refrigerators.</p>
            </div>
            <div class="p2hzb-card">
                <h3>&#128205; GPS Real-Time Consignment Tracking</h3>
                <p>Every long-distance container vehicle is equipped with live GPS tracking systems. You receive real-time location updates from Patna departure across Rajauli Ghati toll checkpoints right up to your doorstep in Hazaribagh.</p>
            </div>
            <div class="p2hzb-card">
                <h3>&#128196; 100% Tax-Compliant GST Bills</h3>
                <p>We provide authentic GST tax invoices, IBA-approved consignment notes (bilty), transit insurance policies, and itemized inventory lists for effortless employer reimbursement across state departments, PSUs, and private MNCs.</p>
            </div>
            <div class="p2hzb-card">
                <h3>&#128737;&#65039; Comprehensive All-Risk Insurance</h3>
                <p>Enjoy total peace of mind with our optional comprehensive transit insurance policies underwritten by leading national insurance corporations, protecting your assets against fire, road accidents, or unforeseen road contingencies.</p>
            </div>
            <div class="p2hzb-card">
                <h3>&#9989; Zero Hidden Fees Guarantee</h3>
                <p>Our written quotations clearly itemize packaging materials, labor, highway toll fees, diesel surcharges, and destination handling. The price quoted before your move is the exact amount you pay upon delivery.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: 5-Layer Defensive Packaging Standards -->
    <section class="p2hzb-section">
        <div class="p2hzb-grid-2">
            <div class="p2hzb-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5-layer protective packing for furniture and electronics before Patna to Hazaribagh transit" loading="lazy">
                <div class="p2hzb-img-caption">Multi-layer protective bubble wrap, corrugated sheets, and foam edge guards for furniture and fragile items</div>
            </div>
            <div>
                <span class="p2hzb-badge" style="background:#fef3c7; color:#92400e; border-color:#fde68a;">Superior Damage Protection</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--p2hzb-primary); font-size:2.2rem; margin:15px 0;">Our Specialized 5-Layer Packaging Armor</h2>
                <p>Highway transit over 235 km across state borders introduces constant micro-vibrations, road rumble, and variable gradient shifts along Rajauli Ghati. Standard cardboard boxing is simply insufficient. Shree Ashirwad Packers and Movers implements a battle-tested 5-layer packaging standard that guarantees zero abrasion, zero denting, and zero breakage.</p>
                <ul style="padding-left: 20px; line-height: 1.8; color: #475569;">
                    <li><strong>Layer 1 - Anti-Scratch Foam &amp; Film:</strong> Virgin polyethylene cling film directly adheres to polished wooden finishes, leather couches, and metallic refrigerator surfaces to prevent surface abrasions.</li>
                    <li><strong>Layer 2 - Heavy-Gauge Air Bubble Wrap:</strong> Double-laminated air bubble sheets absorb external shocks and protect fragile electronics, marble table tops, mirrors, and home theater equipment.</li>
                    <li><strong>Layer 3 - Dense Corrugated Edge Guards:</strong> Reinforced L-shaped corrugated corner guards protect vulnerable furniture corners, wardrobe doors, and large television bezels against collision impact.</li>
                    <li><strong>Layer 4 - 7-Ply Heavy Duty Outer Cartons:</strong> Heavy-duty virgin kraft paper corrugated boxes packed with dish-pack dividers hold crockeries, books, kitchenware, and fine decorative ornaments.</li>
                    <li><strong>Layer 5 - Weatherproof Cross-Tension Stretch Wrap:</strong> High-tensile moisture-proof stretch wrap seals all cartons and furniture bundles tightly, creating an impervious barrier against dust, moisture, and road humidity.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff & Cost Estimates -->
    <section class="p2hzb-section" style="background: var(--p2hzb-gray-bg);">
        <div class="p2hzb-section-header">
            <h2>Patna to Hazaribagh Relocation Rate Matrix</h2>
            <p>Clear, competitive, and honest pricing estimates tailored for apartments, individual houses, and automotive transport.</p>
        </div>

        <div class="p2hzb-table-wrapper">
            <table class="p2hzb-table">
                <thead>
                    <tr>
                        <th>Consignment / Household Configuration</th>
                        <th>Recommended Vehicle Type</th>
                        <th>Packing Material Grade</th>
                        <th>Estimated Highway Transit</th>
                        <th>Standard Price Bracket</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment Shifting</strong></td>
                        <td>14-ft Closed Container</td>
                        <td>Standard 3-Layer Defensive</td>
                        <td>5 - 6 Hours (Same Day)</td>
                        <td><strong style="color:var(--p2hzb-accent);">₹11,000 - ₹16,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Home Relocation</strong></td>
                        <td>17-ft Closed Container</td>
                        <td>Premium 5-Layer Armor</td>
                        <td>5 - 6 Hours (Same Day)</td>
                        <td><strong style="color:var(--p2hzb-accent);">₹15,500 - ₹22,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Spacious Residence / Villa</strong></td>
                        <td>19-ft to 22-ft Container</td>
                        <td>Executive Heavy-Duty Armor</td>
                        <td>Same-Day Delivery</td>
                        <td><strong style="color:var(--p2hzb-accent);">₹21,000 - ₹30,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Bungalow Move</strong></td>
                        <td>24-ft Multi-Axle Container</td>
                        <td>Custom Crating &amp; 5-Layer</td>
                        <td>Same-Day / Next-Morning</td>
                        <td><strong style="color:var(--p2hzb-accent);">₹28,000 - ₹38,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Bike / Scooter</strong></td>
                        <td>Shared Enclosed Carrier</td>
                        <td>Bubble Wrap &amp; Wooden Crate</td>
                        <td>24 - 48 Hours</td>
                        <td><strong style="color:var(--p2hzb-accent);">₹2,500 - ₹4,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler Car Carrier</strong></td>
                        <td>Hydraulic Closed Car Carrier</td>
                        <td>Wheel-Chocks &amp; Safety Covers</td>
                        <td>24 - 48 Hours</td>
                        <td><strong style="color:var(--p2hzb-accent);">₹7,000 - ₹11,000</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; margin-top: 15px; font-size: 0.9rem; color: #64748b;">* Tariffs are indicative and vary based on exact consignment volume, packing material grade, floor elevations, elevator access, and optional comprehensive transit insurance (3% of declared asset value).</p>
    </section>

    <!-- Section 5: Vehicle Transport & Automotive Logistics -->
    <section class="p2hzb-section">
        <div class="p2hzb-grid-2">
            <div>
                <span class="p2hzb-badge" style="background:#ecfdf5; color:#047857; border-color:#a7f3d0;">Automotive Transport Specialists</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--p2hzb-primary); font-size:2.2rem; margin:15px 0;">Safe Car Carrier &amp; Bike Parcel Services from Patna</h2>
                <p>Driving your personal sedan, SUV, or motorbike across the busy Patna-Bakhtiyarpur bypass and through the winding truck routes of Rajauli Ghati exposes your vehicle to road hazard wear, high fuel expenses, and driver exhaustion. Shree Ashirwad Packers and Movers delivers professional automotive transport solutions ensuring your car or bike arrives in Hazaribagh in immaculate showroom condition.</p>
                <ul style="padding-left: 20px; line-height: 1.8; color: #475569;">
                    <li><strong>Pre-Dispatch Condition Audit:</strong> Complete digital photography and mechanical inspection documenting existing odometer readings, body panels, and fuel levels prior to loading in Patna.</li>
                    <li><strong>Enclosed Hydraulic Carriers:</strong> Vehicles are loaded onto specialized car carriers utilizing gradual-angle hydraulic ramps to safeguard low-clearance bumpers and delicate side skirts.</li>
                    <li><strong>Suspension-Safe Wheel Chocks:</strong> Sturdy industrial wheel chocks and over-the-wheel heavy-duty polyester straps secure your automobile without putting unnecessary stress on suspension struts.</li>
                    <li><strong>Dedicated Two-Wheeler Armor:</strong> Handlebars, rearview mirrors, fuel tanks, and body fairings receive double-bubble cushioning and corrugated shields with battery disconnection for fire safety.</li>
                </ul>
            </div>
            <div class="p2hzb-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Enclosed car transport carrier for Patna to Hazaribagh vehicle relocation" loading="lazy">
                <div class="p2hzb-img-caption">Hydraulic enclosed car carrier securing vehicles for safe transit between Patna and Hazaribagh</div>
            </div>
        </div>
    </section>

    <!-- Section 6: Step-by-Step Relocation Process -->
    <section class="p2hzb-section" style="background: var(--p2hzb-gray-bg);">
        <div class="p2hzb-section-header">
            <h2>Our 5-Stage Systematic Relocation Workflow</h2>
            <p>From the initial pre-move assessment in Patna to setting up your living room in Hazaribagh, our end-to-end relocation process ensures complete peace of mind.</p>
        </div>

        <div style="max-width: 850px; margin: 0 auto;">
            <div class="p2hzb-process-step">
                <div class="p2hzb-step-num">1</div>
                <div class="p2hzb-step-content">
                    <h3>Free Pre-Move Survey &amp; Transparent Quote</h3>
                    <p>Our relocation supervisor conducts an in-person physical survey or virtual video assessment across your Patna residence to compute goods volume, parking clearance, fragile packing requirements, and provide a binding written estimate.</p>
                </div>
            </div>
            <div class="p2hzb-process-step">
                <div class="p2hzb-step-num">2</div>
                <div class="p2hzb-step-content">
                    <h3>Defensive 5-Layer Packing at Your Residence</h3>
                    <p>On shifting day, our experienced crew arrives punctually with virgin materials, disassembles double beds, dining tables, and wardrobes, bubble-wraps glassware and electronics, and systematically labels every carton by room.</p>
                </div>
            </div>
            <div class="p2hzb-process-step">
                <div class="p2hzb-step-num">3</div>
                <div class="p2hzb-step-content">
                    <h3>Container Loading &amp; Security Sealing</h3>
                    <p>Goods are stacked using weight-balanced principles inside our closed container trucks, anchored with heavy-duty ratchet tie-downs, and locked with a unique tamper-evident numbered bolt seal in your presence.</p>
                </div>
            </div>
            <div class="p2hzb-process-step">
                <div class="p2hzb-step-num">4</div>
                <div class="p2hzb-step-content">
                    <h3>Swift 235 km Highway Transit</h3>
                    <p>Our experienced commercial drivers navigate the 235 km highway corridor via NH-20 passing Bihar Sharif, Nawada, and Rajauli Ghati smoothly, bypassing city congestions to reach your Hazaribagh address within 5 to 6 hours.</p>
                </div>
            </div>
            <div class="p2hzb-process-step">
                <div class="p2hzb-step-num">5</div>
                <div class="p2hzb-step-content">
                    <h3>Unloading, Room Placement &amp; Furniture Setup</h3>
                    <p>At your Hazaribagh residence in Matwari, Canary Hill Road, Korrah, or Hurhuru, the crew breaks the security seal, carefully carries all items inside, reassembles furniture, positions heavy appliances, and collects packing debris.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7: Unpacking & Destination Services -->
    <section class="p2hzb-section">
        <div class="p2hzb-grid-2">
            <div class="p2hzb-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and furniture room setup service in Hazaribagh residence" loading="lazy">
                <div class="p2hzb-img-caption">Dedicated room setup, furniture reassembly, and debris removal in Hazaribagh residences</div>
            </div>
            <div>
                <span class="p2hzb-badge" style="background:#ede9fe; color:#6d28d9; border-color:#ddd6fe;">Turnkey Destination Assistance</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--p2hzb-primary); font-size:2.2rem; margin:15px 0;">Complete Unpacking &amp; Room Setup in Hazaribagh</h2>
                <p>Moving is not complete until your new house feels like home. Unlike transport brokers who merely dump carton boxes in the living room and leave, Shree Ashirwad Packers and Movers provides comprehensive destination services across all Hazaribagh sectors.</p>
                <p>Our crew unpacks cartons, places kitchen utensils in overhead cabinets, installs study desks, reattaches bed frames, and positions heavy refrigerators and washing machines in their allocated spots. We ensure you can sleep comfortably on your freshly set-up bed on the very first night of your relocation.</p>
                <p>Finally, our team cleans up and carries away all used cardboard boxes, bubble wrap scraps, and plastic film, leaving your new residence tidy and ready for comfortable living.</p>
            </div>
        </div>
    </section>

    <!-- Section 8: Dual-City Locality Coverage Matrix -->
    <section class="p2hzb-section" style="background: var(--p2hzb-gray-bg);">
        <div class="p2hzb-section-header">
            <h2>Patna &amp; Hazaribagh Complete Locality Network</h2>
            <p>Direct doorstep pickup across every neighborhood of Patna with guaranteed doorstep delivery throughout Hazaribagh urban and cantonment zones.</p>
        </div>

        <div class="p2hzb-grid-2">
            <div class="p2hzb-matrix-card">
                <h4>&#128205; Patna Pickup Sectors</h4>
                <p style="margin-bottom: 12px;">Full door-to-door packing coverage across Patna commercial and residential perimeters:</p>
                <div style="display:flex; flex-wrap:wrap; gap:6px;">
                    <span class="p2hzb-tag-link">Kankarbagh Colony</span>
                    <span class="p2hzb-tag-link">Boring Road &amp; Canal Road</span>
                    <span class="p2hzb-tag-link">Bailey Road Corridor</span>
                    <span class="p2hzb-tag-link">Patliputra Colony</span>
                    <span class="p2hzb-tag-link">Danapur Cantt &amp; Khagaul</span>
                    <span class="p2hzb-tag-link">Rajendra Nagar</span>
                    <span class="p2hzb-tag-link">Ashiana Nagar &amp; Digha</span>
                    <span class="p2hzb-tag-link">Anisabad &amp; Phulwari Sharif</span>
                    <span class="p2hzb-tag-link">Fraser Road &amp; Exhibition Road</span>
                    <span class="p2hzb-tag-link">Saguna More &amp; Gola Road</span>
                </div>
            </div>

            <div class="p2hzb-matrix-card">
                <h4>&#128205; Hazaribagh Delivery Destinations</h4>
                <p style="margin-bottom: 12px;">Complete unloading, room placement, and unpacking across Hazaribagh residential sectors:</p>
                <div style="display:flex; flex-wrap:wrap; gap:6px;">
                    <span class="p2hzb-tag-link">Canary Hill Road</span>
                    <span class="p2hzb-tag-link">Matwari Chowk</span>
                    <span class="p2hzb-tag-link">Korrah</span>
                    <span class="p2hzb-tag-link">Nawabganj</span>
                    <span class="p2hzb-tag-link">Okni</span>
                    <span class="p2hzb-tag-link">Hurhuru</span>
                    <span class="p2hzb-tag-link">Babugaon</span>
                    <span class="p2hzb-tag-link">Dipugarha</span>
                    <span class="p2hzb-tag-link">Pugmil</span>
                    <span class="p2hzb-tag-link">Demotand</span>
                    <span class="p2hzb-tag-link">BSF Meru Camp</span>
                    <span class="p2hzb-tag-link">Indrapuri Colony</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Institutional Reimbursement Documentation -->
    <section class="p2hzb-section">
        <div class="p2hzb-section-header">
            <h2>100% Compliant Bills for Government, PSU &amp; Bank Transfers</h2>
            <p>Hassle-free relocation allowance claims with verified GST invoices and official documentation.</p>
        </div>

        <div class="p2hzb-grid-3">
            <div class="p2hzb-card">
                <h3>&#128196; Computerized GST Tax Invoices</h3>
                <p>Official tax invoices bearing our verified GSTIN and proper SAC service accounting codes (SAC 9965 / 9967) for freight and cargo handling services, matching the exact format required by public sector auditors.</p>
            </div>
            <div class="p2hzb-card">
                <h3>&#128221; Consignment Bilty &amp; Packing Lists</h3>
                <p>Standard IBA-pattern consignment notes (bilty) detailing vehicle number, driver credentials, pickup/delivery addresses, and an itemized serial-numbered inventory packing list.</p>
            </div>
            <div class="p2hzb-card">
                <h3>&#128176; Money Receipts &amp; Transit Policies</h3>
                <p>Formal stamped advance and final payment money receipts accompanied by the official transit insurance certificate copy to ensure fast, seamless reimbursement from your accounts department.</p>
            </div>
        </div>
    </section>

    <!-- Section 10: Verified Customer Testimonials -->
    <section class="p2hzb-section" style="background: var(--p2hzb-gray-bg);">
        <div class="p2hzb-section-header">
            <h2>Verified Client Experiences on the Patna-Hazaribagh Route</h2>
            <p>Discover how government officers, doctors, and relocated families rate our relocation service.</p>
        </div>

        <div class="p2hzb-grid-3">
            <div class="p2hzb-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Transferred from PMCH Patna to Sheikh Bhikhari Medical College Hospital in Hazaribagh. Shree Ashirwad Packers arrived punctually at our Boring Road flat at 7 AM. The entire 3 BHK was packed meticulously using 5-layer materials, and arrived in Hazaribagh by 4 PM. Every piece of medical glassware and heavy furniture arrived undamaged. Exceptional service!"</p>
                <p style="font-weight: 700; color: var(--p2hzb-primary); margin: 0;">&ndash; Dr. Alok Kumar Sinha, Associate Professor (Canary Hill Road Hazaribagh)</p>
            </div>

            <div class="p2hzb-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Relocated our home from Kankarbagh Patna to Matwari Hazaribagh upon my bank transfer. Their team dismantled our modular beds and packaged all delicate appliances in air bubble wrap. The container truck negotiated Rajauli Ghati safely, and their GST invoice was cleared by SBI administrative office without a single objection."</p>
                <p style="font-weight: 700; color: var(--p2hzb-primary); margin: 0;">&ndash; Manoj Pandey, Senior Branch Manager (SBI Matwari)</p>
            </div>

            <div class="p2hzb-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Moved my 2 BHK household goods and Hyundai i20 car from Saguna More Patna to Hurhuru Hazaribagh. Both the household container and car carrier arrived on schedule. The car was loaded using hydraulic ramps with zero bumper scratches. Transparent quote with no surprise fees. Highly recommended!"</p>
                <p style="font-weight: 700; color: var(--p2hzb-primary); margin: 0;">&ndash; Saurabh Verma, Software Consultant (Hurhuru Hazaribagh)</p>
            </div>
        </div>
    </section>

    <!-- Section 11: Frequently Asked Questions (FAQ) -->
    <section class="p2hzb-section">
        <div class="p2hzb-section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Clear, practical answers about scheduling, transit durations, vehicle transport, and institutional claims.</p>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="p2hzb-faq-item">
                <div class="p2hzb-faq-q">How much time does household shifting take from Patna to Hazaribagh?</div>
                <div class="p2hzb-faq-a">The highway distance between Patna and Hazaribagh is approximately 235 to 245 km via the four-lane NH-20 highway passing Bakhtiyarpur, Bihar Sharif, Nawada, the scenic Rajauli Ghati border, and Barhi. Driving transit requires about 5.0 to 6.0 hours. For dedicated vehicle bookings, we provide guaranteed same-day shifting: loading in Patna at 7 AM and completing unloading and room positioning in Hazaribagh by evening.</div>
            </div>
            <div class="p2hzb-faq-item">
                <div class="p2hzb-faq-q">What are the packers and movers charges from Patna to Hazaribagh?</div>
                <div class="p2hzb-faq-a">Standard tariffs depend on household size and volume: 1 BHK apartment shifting costs ₹11,000 to ₹16,500; 2 BHK household moving ranges from ₹15,500 to ₹22,500; 3 BHK flat/bungalow shifting costs ₹21,000 to ₹30,000; two-wheeler bike transport ranges from ₹2,500 to ₹4,000; and dedicated enclosed car transport ranges from ₹7,000 to ₹11,000.</div>
            </div>
            <div class="p2hzb-faq-item">
                <div class="p2hzb-faq-q">Do you provide authentic GST bills for government and PSU employee reimbursement?</div>
                <div class="p2hzb-faq-a">Yes. Shree Ashirwad Packers and Movers provides 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, detailed inventory packing lists, and insurance certificates accepted by Bihar & Jharkhand state departments, CCL, NTPC, BSF, banks, railways, and central ministries.</div>
            </div>
            <div class="p2hzb-faq-item">
                <div class="p2hzb-faq-q">How are delicate household goods protected across Rajauli Ghati curves?</div>
                <div class="p2hzb-faq-a">We apply an impenetrable 5-layer protective system featuring EPE foam sheets, heavy bubble wrap, rigid corrugated corner protectors, 7-ply cartons, and waterproof stretch wrapping. Inside our closed container trucks, goods are secured with high-tensile ratchet lashing straps to eliminate load shifting during mountain and ghati transit.</div>
            </div>
            <div class="p2hzb-faq-item">
                <div class="p2hzb-faq-q">Can you transport cars and two-wheelers from Patna to Hazaribagh?</div>
                <div class="p2hzb-faq-a">Yes. We offer specialized hydraulic car carriers and secured two-wheeler parcel services. Vehicles undergo a thorough digital condition inspection with photos before departure, feature wheel-chock locking, and carry full transit insurance protection.</div>
            </div>
            <div class="p2hzb-faq-item">
                <div class="p2hzb-faq-q">Which areas in Patna and Hazaribagh do you cover?</div>
                <div class="p2hzb-faq-a">In Patna, we pick up across Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur, Rajendra Nagar, Ashiana Nagar, Anisabad, Fraser Road, and Saguna More. In Hazaribagh, we deliver to Canary Hill Road, Korrah, Matwari, Nawabganj, Okni, Hurhuru, Babugaon, Demotand, BSF Meru Camp, and Indrapuri.</div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="p2hzb-cta-banner">
        <h2>Book Your Patna to Hazaribagh Move Today</h2>
        <p>Experience seamless, same-day relocation across the NH-20 inter-state corridor. Free home survey, binding transparent quotes, and full transit insurance coverage.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="tel:8409531615" class="p2hzb-btn-phone" style="font-size: 1.1rem; padding: 14px 30px;">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Patna%20to%20Hazaribagh%20shifting." target="_blank" class="p2hzb-btn-whatsapp" style="font-size: 1.1rem; padding: 14px 30px;">&#128172; WhatsApp Inquiry</a>
        </div>
    </div>

    <!-- Section 12: Cluster Navigation Links -->
    <section class="p2hzb-section" style="padding-top: 10px;">
        <div class="p2hzb-cluster-links">
            <h3>Explore Connected Patna &amp; Regional Relocation Routes</h3>
            <div class="p2hzb-tag-cloud">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-patna" class="p2hzb-tag-link">Patna Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-patna-packers-and-movers" class="p2hzb-tag-link">Hazaribagh to Patna Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazaribagh" class="p2hzb-tag-link">Hazaribagh Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-ranchi-packers-and-movers" class="p2hzb-tag-link">Hazaribagh to Ranchi Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-hazaribagh-packers-and-movers" class="p2hzb-tag-link">Ranchi to Hazaribagh Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-gaya-packers-and-movers" class="p2hzb-tag-link">Hazaribagh to Gaya Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="p2hzb-tag-link">Cost Calculator &amp; Rates</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
