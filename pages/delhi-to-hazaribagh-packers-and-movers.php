<?php
/**
 * Page Name: Delhi to Hazaribagh Packers and Movers
 * Route Slug: delhi-to-hazaribagh-packers-and-movers
 * Description: Dedicated long-distance moving route page from Delhi NCR (National Capital Region) to Hazaribagh (Jharkhand).
 * Focus Keywords: delhi to hazaribagh packers and movers, packers and movers delhi to hazaribagh, house shifting delhi to hazaribagh, delhi to hazaribagh luggage parcel, delhi to hazaribagh car carrier, delhi to hazaribagh bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Delhi to Hazaribagh Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Delhi to Hazaribagh packers and movers. Express 24-36 hr GT Road transit, 5-layer packing, enclosed car carrier, central govt & defense GST bills. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/delhi-to-hazaribagh-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="delhi to hazaribagh packers and movers, packers and movers delhi to hazaribagh, house shifting delhi to hazaribagh, delhi to hazaribagh luggage parcel, delhi to hazaribagh car carrier, delhi to hazaribagh bike parcel">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-DL">
    <meta name="geo.placename" content="Delhi">

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

    <!-- Scoped CSS for Route 18 (Delhi to Hazaribagh) -->
    <style>
        :root {
            --del2hzb-primary: #1e1b4b;
            --del2hzb-secondary: #059669;
            --del2hzb-accent: #b45309;
            --del2hzb-accent-light: #fef3c7;
            --del2hzb-dark: #0f172a;
            --del2hzb-gray-bg: #f8fafc;
            --del2hzb-border: #e2e8f0;
        }

        .del2hzb-wrapper {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            line-height: 1.7;
        }

        .del2hzb-hero {
            background: linear-gradient(135deg, rgba(30,27,75,0.95) 0%, rgba(5,150,105,0.92) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 20px 75px;
            text-align: center;
            position: relative;
        }
        .del2hzb-hero-content {
            max-width: 980px;
            margin: 0 auto;
        }
        .del2hzb-badge {
            display: inline-block;
            background: rgba(180,83,9,0.25);
            border: 1px solid rgba(245,158,11,0.45);
            color: #fef3c7;
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 20px;
        }
        .del2hzb-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .del2hzb-hero h1 span {
            color: #fbbf24;
            display: inline-block;
        }
        .del2hzb-hero p {
            font-size: 1.15rem;
            color: #e2e8f0;
            max-width: 820px;
            margin: 0 auto 30px;
            line-height: 1.7;
        }
        .del2hzb-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 15px;
            margin: 35px 0 30px;
        }
        .del2hzb-stat-card {
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.15);
            padding: 18px 12px;
            border-radius: 12px;
        }
        .del2hzb-stat-card strong {
            display: block;
            font-size: 1.6rem;
            font-family: 'Outfit', sans-serif;
            color: #fbbf24;
        }
        .del2hzb-stat-card span {
            font-size: 0.85rem;
            color: #cbd5e1;
        }

        .del2hzb-btn-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .del2hzb-btn-phone {
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
        .del2hzb-btn-phone:hover {
            background: #d97706;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .del2hzb-btn-whatsapp {
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
        .del2hzb-btn-whatsapp:hover {
            background: #059669;
            transform: translateY(-2px);
        }

        .del2hzb-section {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .del2hzb-section-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }
        .del2hzb-section-header h2 {
            font-family: 'Outfit', sans-serif;
            color: var(--del2hzb-primary);
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 12px;
        }
        .del2hzb-section-header p {
            font-size: 1.05rem;
            color: #64748b;
        }

        .del2hzb-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
            align-items: center;
            margin-bottom: 45px;
        }
        .del2hzb-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
            gap: 25px;
        }

        .del2hzb-card {
            background: #ffffff;
            border: 1px solid var(--del2hzb-border);
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 4px 12px rgba(15,23,42,0.04);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .del2hzb-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(15,23,42,0.08);
        }
        .del2hzb-card h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--del2hzb-primary);
            font-size: 1.3rem;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .del2hzb-card p {
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.65;
            margin-bottom: 0;
        }

        .del2hzb-feature-img {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(15,23,42,0.08);
        }
        .del2hzb-feature-img img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .del2hzb-feature-img:hover img {
            transform: scale(1.03);
        }
        .del2hzb-img-caption {
            background: #f1f5f9;
            padding: 10px 15px;
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            font-style: italic;
        }

        .del2hzb-table-wrapper {
            background: #ffffff;
            border: 1px solid var(--del2hzb-border);
            border-radius: 12px;
            overflow-x: auto;
            box-shadow: 0 8px 20px rgba(15,23,42,0.05);
        }
        .del2hzb-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.98rem;
        }
        .del2hzb-table th {
            background: var(--del2hzb-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            white-space: nowrap;
        }
        .del2hzb-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--del2hzb-border);
            color: #475569;
        }
        .del2hzb-table tr:last-child td {
            border-bottom: none;
        }
        .del2hzb-table tr:hover td {
            background-color: #f1f5f9;
        }

        .del2hzb-matrix-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 15px;
        }
        .del2hzb-matrix-card {
            background: #ffffff;
            border: 1px solid var(--del2hzb-border);
            border-radius: 10px;
            padding: 16px;
            border-left: 4px solid var(--del2hzb-accent);
        }
        .del2hzb-matrix-card h4 {
            color: var(--del2hzb-primary);
            font-size: 1.05rem;
            margin: 0 0 6px;
            font-weight: 700;
        }
        .del2hzb-matrix-card p {
            color: #64748b;
            font-size: 0.9rem;
            margin: 0;
            line-height: 1.5;
        }

        .del2hzb-process-step {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
            align-items: flex-start;
        }
        .del2hzb-step-num {
            background: var(--del2hzb-accent);
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
            box-shadow: 0 6px 14px rgba(180,83,9,0.3);
        }
        .del2hzb-step-content {
            background: #ffffff;
            border: 1px solid var(--del2hzb-border);
            border-radius: 10px;
            padding: 18px 22px;
            flex-grow: 1;
        }
        .del2hzb-step-content h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--del2hzb-primary);
            margin: 0 0 6px;
            font-size: 1.25rem;
        }
        .del2hzb-step-content p {
            margin: 0;
            color: #475569;
            font-size: 0.95rem;
        }

        .del2hzb-faq-item {
            background: #ffffff;
            border: 1px solid var(--del2hzb-border);
            border-radius: 10px;
            margin-bottom: 15px;
            overflow: hidden;
        }
        .del2hzb-faq-q {
            padding: 18px 22px;
            font-weight: 700;
            color: var(--del2hzb-primary);
            font-size: 1.08rem;
            background: #f8fafc;
            border-bottom: 1px solid var(--del2hzb-border);
        }
        .del2hzb-faq-a {
            padding: 18px 22px;
            color: #475569;
            line-height: 1.7;
            font-size: 0.96rem;
        }

        .del2hzb-cta-banner {
            background: linear-gradient(135deg, var(--del2hzb-dark) 0%, var(--del2hzb-primary) 100%);
            color: #ffffff;
            padding: 55px 25px;
            border-radius: 16px;
            text-align: center;
            margin: 50px auto 30px;
            max-width: 1050px;
        }
        .del2hzb-cta-banner h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 12px;
        }
        .del2hzb-cta-banner p {
            font-size: 1.1rem;
            color: #cbd5e1;
            max-width: 700px;
            margin: 0 auto 25px;
        }

        .del2hzb-cluster-links {
            background: #f1f5f9;
            padding: 30px;
            border-radius: 12px;
            margin-top: 40px;
        }
        .del2hzb-cluster-links h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--del2hzb-primary);
            font-size: 1.25rem;
            margin-bottom: 15px;
            font-weight: 700;
        }
        .del2hzb-tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .del2hzb-tag-link {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 7px 15px;
            border-radius: 20px;
            font-size: 0.88rem;
            color: #334155;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .del2hzb-tag-link:hover {
            background: var(--del2hzb-primary);
            color: #ffffff;
            border-color: var(--del2hzb-primary);
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Delhi to Hazaribagh",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "telephone": "+918409531615",
        "url": "<?php echo $canonical_url; ?>",
        "priceRange": "₹12,000 - ₹68,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Transport Nagar, Outer Ring Road",
            "addressLocality": "Delhi",
            "addressRegion": "Delhi",
            "postalCode": "110036",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.6139,
            "longitude": 77.2090
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
                "name": "Delhi"
            },
            {
                "@type": "City",
                "name": "Hazaribagh"
            }
        ],
        "description": "Nationwide inter-state relocation services from Delhi NCR to Hazaribagh spanning 1,120 km via GT Road (NH-19) passing Agra, Kanpur, Prayagraj, Varanasi, and Barhi. Heavy-duty 5-layer packing, sealed containerized vehicles, central government & defense transfer billing, enclosed car carriers, and guaranteed 24 to 36-hour delivery."
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
                "name": "Packers and Movers in Delhi",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-delhi"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Delhi to Hazaribagh",
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
                "name": "How much time does household goods shifting take from Delhi to Hazaribagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Delhi NCR and Hazaribagh is approximately 1,120 to 1,150 km via the multi-lane Grand Trunk Road (NH-19 / AH1) passing Yamuna Expressway, Agra, Kanpur, Prayagraj, Varanasi, Sasaram, and Dobhi into Barhi. Driving transit requires about 22 to 26 hours. For dedicated container trucks, we ensure delivery within 24 to 36 hours. Consolidated shared container shipments arrive within 3 to 4 days."
                }
            },
            {
                "@type": "Question",
                "name": "What are the packers and movers charges from Delhi to Hazaribagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Tariffs depend on inventory volume and moving schedule: 1 BHK apartment shifting costs ₹22,000 to ₹30,000; 2 BHK household moving ranges from ₹28,000 to ₹40,000; 3 BHK flat/villa shifting costs ₹36,000 to ₹52,000; two-wheeler bike transport costs ₹4,500 to ₹7,000; and dedicated enclosed car transport ranges from ₹12,000 to ₹18,500."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide authentic GST bills for central government, defense, and PSU reimbursement?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Shree Ashirwad Packers and Movers provides 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized inventory packing lists, and insurance certificates accepted by central government ministries, defense forces (Army, BSF, CRPF), NTPC, Coal India, nationalized banks, and private corporations."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect delicate household furniture over a 1,120 km highway journey?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We apply an impenetrable 5-layer protective system featuring EPE foam sheets, heavy bubble wrap, rigid corrugated corner protectors, 7-ply cartons, and waterproof stretch wrapping. Inside our closed container trucks, goods are secured with high-tensile ratchet lashing straps to eliminate load shifting during highway transit."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport personal cars and motorcycles from Delhi NCR to Hazaribagh?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer specialized hydraulic car carriers and secured two-wheeler parcel services. Vehicles undergo a thorough digital condition inspection with photos before departure, feature wheel-chock locking, and carry full transit insurance protection with door delivery within 2 to 3 days."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Delhi NCR and Hazaribagh do you cover?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Delhi NCR, we pick up across Dwarka, Rohini, South Delhi, Janakpuri, Noida, Greater Noida, Gurgaon (Cyber City, DLF, Sohna Road), and Ghaziabad (Indirapuram, Vaishali). In Hazaribagh, we deliver to Canary Hill Road, Korrah, Matwari, Nawabganj, Okni, Hurhuru, Babugaon, Demotand, BSF Meru Camp, and Indrapuri."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="del2hzb-wrapper">
    <!-- Hero Section -->
    <section class="del2hzb-hero">
        <div class="del2hzb-hero-content">
            <span class="del2hzb-badge">&#128666; National Capital to Jharkhand Corridor Specialist</span>
            <h1>Delhi to Hazaribagh <span>Packers and Movers</span></h1>
            <p>Seamless 1,120 km long-distance relocation from Delhi NCR to Hazaribagh. Swift 24-36 hour express transit via GT Road (NH-19), defensive 5-layer packing armor, sealed container vehicles, and 100% compliant GST reimbursement bills for central government, defense, and corporate transfers.</p>

            <div class="del2hzb-hero-stats">
                <div class="del2hzb-stat-card">
                    <strong>1,120 KM</strong>
                    <span>Express GT Road Corridor</span>
                </div>
                <div class="del2hzb-stat-card">
                    <strong>24 - 36 HRS</strong>
                    <span>Express Transit Duration</span>
                </div>
                <div class="del2hzb-stat-card">
                    <strong>5 LAYERS</strong>
                    <span>Protective Packaging Armor</span>
                </div>
                <div class="del2hzb-stat-card">
                    <strong>100% GST</strong>
                    <span>Defense &amp; PSU Claim Invoices</span>
                </div>
            </div>

            <div class="del2hzb-btn-group">
                <a href="tel:8409531615" class="del2hzb-btn-phone">&#128222; Call 084095 31615</a>
                <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20free%20quote%20for%20Delhi%20to%20Hazaribagh%20shifting." target="_blank" class="del2hzb-btn-whatsapp">&#128172; WhatsApp Instant Quote</a>
            </div>
        </div>
    </section>

    <!-- Section 1: Route Overview & Highway Engineering -->
    <section class="del2hzb-section">
        <div class="del2hzb-grid-2">
            <div>
                <span class="del2hzb-badge" style="background:#eff6ff; color:#1e1b4b; border-color:#cbd5e1;">National Highway Express Route</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--del2hzb-primary); font-size:2.2rem; margin:15px 0;">Safe Delhi to Hazaribagh Relocation via GT Road (NH-19)</h2>
                <p>Relocating across 1,120 km from the National Capital Region to Hazaribagh requires extraordinary logistical discipline, heavy-duty commercial vehicles, and drivers who understand long-haul national highways. The freight corridor spans the state boundaries of Delhi, Uttar Pradesh, Bihar, and Jharkhand along the multi-lane National Highway 19 (formerly NH-2 / Grand Trunk Road). The route flows via Yamuna Expressway or Mathura Road, continuing through Agra, Kanpur, Prayagraj bypass, Varanasi, Mohania, Sasaram, and Dobhi before turning onto NH-20 at Barhi into Hazaribagh.</p>
                <p>At Shree Ashirwad Packers and Movers, our long-distance moving fleet utilizes dedicated weatherproof containerized trucks. Every vehicle features dual-driver rotations, air-ride or multi-leaf suspension systems, interior perimeter tie-down anchors, and real-time GPS tracking. Driving transit requires about 22 to 26 hours, with dedicated trucks arriving within 24 to 36 hours and consolidated container loads reaching within 3 to 4 days.</p>
                <p>Whether you are a central government employee on rotational posting, a defense or paramilitary personnel stationed at BSF Meru Camp or Police Academy, an NTPC or Coal India engineer, an IT professional returning to your native home in Jharkhand, or a retired officer settling in Hazaribagh, our white-glove relocation service ensures completely stress-free moving.</p>
            </div>
            <div class="del2hzb-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed container transport truck for Delhi to Hazaribagh household shifting" loading="lazy">
                <div class="del2hzb-img-caption">Dedicated sealed container trucks operating nationwide on the Delhi-Hazaribagh interstate highway route</div>
            </div>
        </div>
    </section>

    <!-- Section 2: Why Choose Shree Ashirwad Packers -->
    <section class="del2hzb-section" style="background: var(--del2hzb-gray-bg);">
        <div class="del2hzb-section-header">
            <h2>Why Families &amp; Armed Forces Officers Choose Us from Delhi NCR</h2>
            <p>Engineered long-haul logistics, permanent packing crews, and complete accountability across 1,120 km.</p>
        </div>

        <div class="del2hzb-grid-3">
            <div class="del2hzb-card">
                <h3>&#128666; All-Weather Container Trucks</h3>
                <p>Our dedicated closed-body containers completely seal your household belongings against highway soot, monsoonal rain, and dust storms across Uttar Pradesh, Bihar, and Jharkhand highways.</p>
            </div>
            <div class="del2hzb-card">
                <h3>&#128104;&#8205;&#128295; Expert In-House Crew</h3>
                <p>We deploy trained full-time packing craftsmen who understand how to disassemble modular beds, wrap high-end kitchen appliances, and pad delicate home decor with surgical care.</p>
            </div>
            <div class="del2hzb-card">
                <h3>&#128205; GPS Real-Time Consignment Tracking</h3>
                <p>Every long-distance container vehicle is equipped with live GPS tracking systems. You receive continuous progress milestones from Delhi NCR departure right up to your Hazaribagh destination.</p>
            </div>
            <div class="del2hzb-card">
                <h3>&#128196; 100% Tax-Compliant GST Bills</h3>
                <p>We provide authentic GST tax invoices, IBA-approved consignment notes (bilty), transit insurance policies, and itemized inventory lists for effortless employer reimbursement across state departments, PSUs, and private MNCs.</p>
            </div>
            <div class="del2hzb-card">
                <h3>&#128737;&#65039; Comprehensive All-Risk Insurance</h3>
                <p>Enjoy total peace of mind with our optional comprehensive transit insurance policies underwritten by leading national insurance corporations, protecting your assets against fire, road accidents, or unforeseen road contingencies.</p>
            </div>
            <div class="del2hzb-card">
                <h3>&#9989; Transparent Pricing Guarantee</h3>
                <p>Our written quotations clearly itemize packaging materials, labor, highway toll fees, diesel surcharges, and destination handling. The price quoted before your move is the exact amount you pay upon delivery.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: 5-Layer Defensive Packaging Standards -->
    <section class="del2hzb-section">
        <div class="del2hzb-grid-2">
            <div class="del2hzb-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5-layer protective packing for furniture and electronics before Delhi to Hazaribagh transit" loading="lazy">
                <div class="del2hzb-img-caption">Multi-layer protective bubble wrap, corrugated sheets, and foam edge guards for furniture and fragile items</div>
            </div>
            <div>
                <span class="del2hzb-badge" style="background:#fef3c7; color:#92400e; border-color:#fde68a;">Elite Armor Shield</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--del2hzb-primary); font-size:2.2rem; margin:15px 0;">Our Specialized 5-Layer Packaging Armor</h2>
                <p>A 1,120 km highway journey across northern India involves continuous road vibrations, variable weather conditions, and multiple state tolls. Shree Ashirwad Packers and Movers implements a rigorous 5-layer packaging standard designed to protect your household treasures against any transit adversity.</p>
                <ul style="padding-left: 20px; line-height: 1.8; color: #475569;">
                    <li><strong>Layer 1 - Scratch-Proof Poly Film:</strong> Direct protective cling wrap applied to wooden wardrobes, polished dining tables, and painted metallic surfaces prevents rub-marks and surface friction.</li>
                    <li><strong>Layer 2 - Multi-Cell Air Bubble Cushioning:</strong> High-density bubble wrap absorbs shock waves and cushions LED televisions, microwave ovens, crystal tableware, and decorative chandeliers.</li>
                    <li><strong>Layer 3 - Dense Corrugated Edge Protectors:</strong> Rigid heavy-duty corner guards protect vulnerable tabletop edges, cabinet corners, and picture frames from impact pressures.</li>
                    <li><strong>Layer 4 - 7-Ply Heavy Duty Outer Cartons:</strong> Heavy-duty virgin kraft paper corrugated boxes packed with dish-pack dividers hold crockeries, books, kitchenware, and fine decorative ornaments.</li>
                    <li><strong>Layer 5 - Weatherproof Cross-Tension Stretch Wrap:</strong> High-tensile moisture-proof stretch wrap seals all cartons and furniture bundles tightly, creating an impervious barrier against dust, moisture, and road humidity.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff & Cost Estimates -->
    <section class="del2hzb-section" style="background: var(--del2hzb-gray-bg);">
        <div class="del2hzb-section-header">
            <h2>Delhi to Hazaribagh Relocation Rate Matrix</h2>
            <p>Clear, competitive, and honest pricing estimates tailored for apartments, individual houses, and automotive transport.</p>
        </div>

        <div class="del2hzb-table-wrapper">
            <table class="del2hzb-table">
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
                        <td>24 - 36 Hours (Dedicated)</td>
                        <td><strong style="color:var(--del2hzb-accent);">₹22,000 - ₹30,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Home Relocation</strong></td>
                        <td>17-ft Closed Container</td>
                        <td>Premium 5-Layer Armor</td>
                        <td>24 - 36 Hours (Dedicated)</td>
                        <td><strong style="color:var(--del2hzb-accent);">₹28,000 - ₹40,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Spacious Residence / Villa</strong></td>
                        <td>19-ft to 22-ft Container</td>
                        <td>Executive Heavy-Duty Armor</td>
                        <td>24 - 48 Hours</td>
                        <td><strong style="color:var(--del2hzb-accent);">₹36,000 - ₹52,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Bungalow Move</strong></td>
                        <td>24-ft Multi-Axle Container</td>
                        <td>Custom Crating &amp; 5-Layer</td>
                        <td>Dedicated Fast-Track</td>
                        <td><strong style="color:var(--del2hzb-accent);">₹48,000 - ₹68,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Bike / Scooter</strong></td>
                        <td>Shared Enclosed Carrier</td>
                        <td>Bubble Wrap &amp; Wooden Crate</td>
                        <td>2 - 3 Days</td>
                        <td><strong style="color:var(--del2hzb-accent);">₹4,500 - ₹7,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler Car Carrier</strong></td>
                        <td>Hydraulic Closed Car Carrier</td>
                        <td>Wheel-Chocks &amp; Safety Covers</td>
                        <td>2 - 3 Days</td>
                        <td><strong style="color:var(--del2hzb-accent);">₹12,000 - ₹18,500</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; margin-top: 15px; font-size: 0.9rem; color: #64748b;">* Tariffs are indicative and vary based on exact consignment volume, packing material grade, floor elevations, elevator access, and optional comprehensive transit insurance (3% of declared asset value).</p>
    </section>

    <!-- Section 5: Vehicle Transport & Automotive Logistics -->
    <section class="del2hzb-section">
        <div class="del2hzb-grid-2">
            <div>
                <span class="del2hzb-badge" style="background:#ecfdf5; color:#047857; border-color:#a7f3d0;">Automotive Transport Specialists</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--del2hzb-primary); font-size:2.2rem; margin:15px 0;">Safe Car Carrier &amp; Bike Parcel Services from Delhi NCR</h2>
                <p>Driving your personal automobile across 1,120 km of highway through three states subjects your car to severe mechanical fatigue, excessive tyre wear, stone chip windshield damage, and high toll and fuel costs. Shree Ashirwad Packers and Movers delivers specialized automotive transport solutions ensuring your car or bike arrives in Hazaribagh in immaculate showroom condition.</p>
                <ul style="padding-left: 20px; line-height: 1.8; color: #475569;">
                    <li><strong>Pre-Dispatch Condition Audit:</strong> Complete digital photography and mechanical inspection documenting existing odometer readings, body panels, and fuel levels prior to loading in Delhi.</li>
                    <li><strong>Enclosed Hydraulic Carriers:</strong> Vehicles are loaded onto specialized car carriers utilizing gradual-angle hydraulic ramps to safeguard low-clearance bumpers and delicate side skirts.</li>
                    <li><strong>Suspension-Safe Wheel Chocks:</strong> Sturdy industrial wheel chocks and over-the-wheel heavy-duty polyester straps secure your automobile without putting unnecessary stress on suspension struts.</li>
                    <li><strong>Dedicated Two-Wheeler Armor:</strong> Handlebars, rearview mirrors, fuel tanks, and body fairings receive double-bubble cushioning and corrugated shields with battery disconnection for fire safety.</li>
                </ul>
            </div>
            <div class="del2hzb-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Enclosed car transport carrier for Delhi to Hazaribagh vehicle relocation" loading="lazy">
                <div class="del2hzb-img-caption">Hydraulic enclosed car carrier securing vehicles for safe transit between Delhi NCR and Hazaribagh</div>
            </div>
        </div>
    </section>

    <!-- Section 6: Step-by-Step Relocation Process -->
    <section class="del2hzb-section" style="background: var(--del2hzb-gray-bg);">
        <div class="del2hzb-section-header">
            <h2>Our 5-Stage Systematic Relocation Workflow</h2>
            <p>From the initial pre-move assessment in Delhi NCR to setting up your living room in Hazaribagh, our end-to-end relocation process ensures complete peace of mind.</p>
        </div>

        <div style="max-width: 850px; margin: 0 auto;">
            <div class="del2hzb-process-step">
                <div class="del2hzb-step-num">1</div>
                <div class="del2hzb-step-content">
                    <h3>Free Pre-Move Survey &amp; Transparent Quote</h3>
                    <p>Our relocation supervisor conducts an in-person physical survey or virtual video assessment across your Delhi NCR residence to compute goods volume, parking clearance, fragile packing requirements, and provide a binding written estimate.</p>
                </div>
            </div>
            <div class="del2hzb-process-step">
                <div class="del2hzb-step-num">2</div>
                <div class="del2hzb-step-content">
                    <h3>Defensive 5-Layer Packing at Your Residence</h3>
                    <p>On shifting day, our experienced crew arrives punctually with virgin materials, disassembles double beds, dining tables, and wardrobes, bubble-wraps glassware and electronics, and systematically labels every carton by room.</p>
                </div>
            </div>
            <div class="del2hzb-process-step">
                <div class="del2hzb-step-num">3</div>
                <div class="del2hzb-step-content">
                    <h3>Container Loading &amp; Security Sealing</h3>
                    <p>Goods are stacked using weight-balanced principles inside our closed container trucks, anchored with heavy-duty ratchet tie-downs, and locked with a unique tamper-evident numbered bolt seal in your presence.</p>
                </div>
            </div>
            <div class="del2hzb-process-step">
                <div class="del2hzb-step-num">4</div>
                <div class="del2hzb-step-content">
                    <h3>Swift 1,120 km Highway Transit</h3>
                    <p>Our experienced commercial drivers navigate the 1,120 km highway corridor via GT Road (NH-19) passing Agra, Kanpur, Prayagraj, Varanasi, and Barhi smoothly, bypassing city congestions to reach your Hazaribagh address within 24 to 36 hours.</p>
                </div>
            </div>
            <div class="del2hzb-process-step">
                <div class="del2hzb-step-num">5</div>
                <div class="del2hzb-step-content">
                    <h3>Unloading, Room Placement &amp; Furniture Setup</h3>
                    <p>At your Hazaribagh residence in Matwari, Canary Hill Road, Korrah, or Hurhuru, the crew breaks the security seal, carefully carries all items inside, reassembles furniture, positions heavy appliances, and collects packing debris.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7: Unpacking & Destination Services -->
    <section class="del2hzb-section">
        <div class="del2hzb-grid-2">
            <div class="del2hzb-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and furniture room setup service in Hazaribagh residence" loading="lazy">
                <div class="del2hzb-img-caption">Dedicated room setup, furniture reassembly, and debris removal in Hazaribagh residences</div>
            </div>
            <div>
                <span class="del2hzb-badge" style="background:#ede9fe; color:#6d28d9; border-color:#ddd6fe;">Turnkey Destination Assistance</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--del2hzb-primary); font-size:2.2rem; margin:15px 0;">Complete Unpacking &amp; Room Setup in Hazaribagh</h2>
                <p>Moving is not complete until your new house feels like home. Unlike transport brokers who merely dump carton boxes in the living room and leave, Shree Ashirwad Packers and Movers provides comprehensive destination services across all Hazaribagh sectors.</p>
                <p>Our crew unpacks cartons, places kitchen utensils in overhead cabinets, installs study desks, reattaches bed frames, and positions heavy refrigerators and washing machines in their allocated spots. We ensure you can sleep comfortably on your freshly set-up bed on the very first night of your relocation.</p>
                <p>Finally, our team cleans up and carries away all used cardboard boxes, bubble wrap scraps, and plastic film, leaving your new residence tidy and ready for comfortable living.</p>
            </div>
        </div>
    </section>

    <!-- Section 8: Dual-City Locality Coverage Matrix -->
    <section class="del2hzb-section" style="background: var(--del2hzb-gray-bg);">
        <div class="del2hzb-section-header">
            <h2>Delhi NCR &amp; Hazaribagh Complete Locality Network</h2>
            <p>Direct doorstep pickup across every neighborhood of Delhi NCR with guaranteed doorstep delivery throughout Hazaribagh urban and cantonment zones.</p>
        </div>

        <div class="del2hzb-grid-2">
            <div class="del2hzb-matrix-card">
                <h4>&#128205; Delhi NCR Pickup Sectors</h4>
                <p style="margin-bottom: 12px;">Full door-to-door packing coverage across Delhi NCR commercial and residential perimeters:</p>
                <div style="display:flex; flex-wrap:wrap; gap:6px;">
                    <span class="del2hzb-tag-link">Dwarka (Sectors 1 to 23)</span>
                    <span class="del2hzb-tag-link">Rohini &amp; Pitampura</span>
                    <span class="del2hzb-tag-link">South Delhi (Vasant Kunj, Saket)</span>
                    <span class="del2hzb-tag-link">Janakpuri &amp; West Delhi</span>
                    <span class="del2hzb-tag-link">Noida (Sectors 62, 137, 150)</span>
                    <span class="del2hzb-tag-link">Greater Noida &amp; Pari Chowk</span>
                    <span class="del2hzb-tag-link">Gurgaon (DLF Phase 1-5)</span>
                    <span class="del2hzb-tag-link">Sohna Road &amp; Golf Course Ext</span>
                    <span class="del2hzb-tag-link">Indirapuram &amp; Vaishali</span>
                    <span class="del2hzb-tag-link">Faridabad Green Belt</span>
                </div>
            </div>

            <div class="del2hzb-matrix-card">
                <h4>&#128205; Hazaribagh Delivery Destinations</h4>
                <p style="margin-bottom: 12px;">Complete unloading, room placement, and unpacking across Hazaribagh residential sectors:</p>
                <div style="display:flex; flex-wrap:wrap; gap:6px;">
                    <span class="del2hzb-tag-link">Canary Hill Road</span>
                    <span class="del2hzb-tag-link">Matwari Chowk</span>
                    <span class="del2hzb-tag-link">Korrah</span>
                    <span class="del2hzb-tag-link">Nawabganj</span>
                    <span class="del2hzb-tag-link">Okni</span>
                    <span class="del2hzb-tag-link">Hurhuru</span>
                    <span class="del2hzb-tag-link">Babugaon</span>
                    <span class="del2hzb-tag-link">Dipugarha</span>
                    <span class="del2hzb-tag-link">Pugmil</span>
                    <span class="del2hzb-tag-link">Demotand</span>
                    <span class="del2hzb-tag-link">BSF Meru Camp</span>
                    <span class="del2hzb-tag-link">Indrapuri Colony</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Institutional Reimbursement Documentation -->
    <section class="del2hzb-section">
        <div class="del2hzb-section-header">
            <h2>100% Compliant Bills for Central Government, Defense &amp; PSU Transfers</h2>
            <p>Hassle-free relocation allowance claims with verified GST invoices and official documentation.</p>
        </div>

        <div class="del2hzb-grid-3">
            <div class="del2hzb-card">
                <h3>&#128196; Computerized GST Tax Invoices</h3>
                <p>Official tax invoices bearing our verified GSTIN and proper SAC service accounting codes (SAC 9965 / 9967) for freight and cargo handling services, matching the exact format required by public sector auditors.</p>
            </div>
            <div class="del2hzb-card">
                <h3>&#128221; Consignment Bilty &amp; Packing Lists</h3>
                <p>Standard IBA-pattern consignment notes (bilty) detailing vehicle number, driver credentials, pickup/delivery addresses, and an itemized serial-numbered inventory packing list.</p>
            </div>
            <div class="del2hzb-card">
                <h3>&#128176; Money Receipts &amp; Transit Policies</h3>
                <p>Formal stamped advance and final payment money receipts accompanied by the official transit insurance certificate copy to ensure fast, seamless reimbursement from your accounts department.</p>
            </div>
        </div>
    </section>

    <!-- Section 10: Verified Customer Testimonials -->
    <section class="del2hzb-section" style="background: var(--del2hzb-gray-bg);">
        <div class="del2hzb-section-header">
            <h2>Verified Client Experiences on the Delhi-Hazaribagh Route</h2>
            <p>Discover how central government officers, defense personnel, and relocated families rate our relocation service.</p>
        </div>

        <div class="del2hzb-grid-3">
            <div class="del2hzb-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Relocated upon my posting from BSF Headquarters CGO Complex New Delhi to BSF Training Centre and School at Meru Camp Hazaribagh. Shree Ashirwad Packers packed our Dwarka Sector 11 flat with extreme care. The container arrived in Hazaribagh within 30 hours, sealed and spotless. Defense claims were processed smoothly with their verified GST bills."</p>
                <p style="font-weight: 700; color: var(--del2hzb-primary); margin: 0;">&ndash; Commandant R. K. Mishra, BSF Meru Camp Hazaribagh</p>
            </div>

            <div class="del2hzb-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Moved our 3 BHK flat and Honda City car from Sector 62 Noida to Canary Hill Road Hazaribagh. Their team in Noida executed multi-layer packing flawlessly. Both household items and car carrier reached Hazaribagh safely within 3 days. Professional management and punctual delivery!"</p>
                <p style="font-weight: 700; color: var(--del2hzb-primary); margin: 0;">&ndash; Anupam Shrivastava, Deputy Director (Canary Hill Road)</p>
            </div>

            <div class="del2hzb-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Relocated home from Gurgaon DLF Phase 3 to Matwari Hazaribagh after choosing remote corporate employment. Shree Ashirwad Packers handled all electronics, heavy wooden furniture, and kitchen crockeries without a single broken glass piece. Highly recommend their long-distance moving service!"</p>
                <p style="font-weight: 700; color: var(--del2hzb-primary); margin: 0;">&ndash; Priya Nair, Senior Program Manager (Matwari Hazaribagh)</p>
            </div>
        </div>
    </section>

    <!-- Section 11: Frequently Asked Questions (FAQ) -->
    <section class="del2hzb-section">
        <div class="del2hzb-section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Clear, practical answers about scheduling, transit durations, vehicle transport, and institutional claims.</p>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="del2hzb-faq-item">
                <div class="del2hzb-faq-q">How much time does household goods shifting take from Delhi to Hazaribagh?</div>
                <div class="del2hzb-faq-a">The highway distance between Delhi NCR and Hazaribagh is approximately 1,120 to 1,150 km via the multi-lane Grand Trunk Road (NH-19 / AH1) passing Yamuna Expressway, Agra, Kanpur, Prayagraj, Varanasi, Sasaram, and Dobhi into Barhi. Driving transit requires about 22 to 26 hours. For dedicated container trucks, we ensure delivery within 24 to 36 hours. Consolidated shared container shipments arrive within 3 to 4 days.</div>
            </div>
            <div class="del2hzb-faq-item">
                <div class="del2hzb-faq-q">What are the packers and movers charges from Delhi to Hazaribagh?</div>
                <div class="del2hzb-faq-a">Tariffs depend on inventory volume and moving schedule: 1 BHK apartment shifting costs ₹22,000 to ₹30,000; 2 BHK household moving ranges from ₹28,000 to ₹40,000; 3 BHK flat/villa shifting costs ₹36,000 to ₹52,000; two-wheeler bike transport costs ₹4,500 to ₹7,000; and dedicated enclosed car transport ranges from ₹12,000 to ₹18,500.</div>
            </div>
            <div class="del2hzb-faq-item">
                <div class="del2hzb-faq-q">Do you provide authentic GST bills for central government, defense, and PSU reimbursement?</div>
                <div class="del2hzb-faq-a">Yes. Shree Ashirwad Packers and Movers provides 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized inventory packing lists, and insurance certificates accepted by central government ministries, defense forces (Army, BSF, CRPF), NTPC, Coal India, nationalized banks, and private corporations.</div>
            </div>
            <div class="del2hzb-faq-item">
                <div class="del2hzb-faq-q">How do you protect delicate household furniture over a 1,120 km highway journey?</div>
                <div class="del2hzb-faq-a">We apply an impenetrable 5-layer protective system featuring EPE foam sheets, heavy bubble wrap, rigid corrugated corner protectors, 7-ply cartons, and waterproof stretch wrapping. Inside our closed container trucks, goods are secured with high-tensile ratchet lashing straps to eliminate load shifting during highway transit.</div>
            </div>
            <div class="del2hzb-faq-item">
                <div class="del2hzb-faq-q">Can you transport personal cars and motorcycles from Delhi NCR to Hazaribagh?</div>
                <div class="del2hzb-faq-a">Yes. We offer specialized hydraulic car carriers and secured two-wheeler parcel services. Vehicles undergo a thorough digital condition inspection with photos before departure, feature wheel-chock locking, and carry full transit insurance protection with door delivery within 2 to 3 days.</div>
            </div>
            <div class="del2hzb-faq-item">
                <div class="del2hzb-faq-q">Which areas in Delhi NCR and Hazaribagh do you cover?</div>
                <div class="del2hzb-faq-a">In Delhi NCR, we pick up across Dwarka, Rohini, South Delhi, Janakpuri, Noida, Greater Noida, Gurgaon (Cyber City, DLF, Sohna Road), and Ghaziabad (Indirapuram, Vaishali). In Hazaribagh, we deliver to Canary Hill Road, Korrah, Matwari, Nawabganj, Okni, Hurhuru, Babugaon, Demotand, BSF Meru Camp, and Indrapuri.</div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="del2hzb-cta-banner">
        <h2>Book Your Delhi to Hazaribagh Move Today</h2>
        <p>Experience seamless, express relocation across the Grand Trunk Road. Free home survey, binding transparent quotes, and full transit insurance coverage.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="tel:8409531615" class="del2hzb-btn-phone" style="font-size: 1.1rem; padding: 14px 30px;">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Delhi%20to%20Hazaribagh%20shifting." target="_blank" class="del2hzb-btn-whatsapp" style="font-size: 1.1rem; padding: 14px 30px;">&#128172; WhatsApp Inquiry</a>
        </div>
    </div>

    <!-- Section 12: Cluster Navigation Links -->
    <section class="del2hzb-section" style="padding-top: 10px;">
        <div class="del2hzb-cluster-links">
            <h3>Explore Connected Delhi &amp; Regional Relocation Routes</h3>
            <div class="del2hzb-tag-cloud">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-delhi" class="del2hzb-tag-link">Delhi Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-delhi-packers-and-movers" class="del2hzb-tag-link">Hazaribagh to Delhi Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazaribagh" class="del2hzb-tag-link">Hazaribagh Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-patna-packers-and-movers" class="del2hzb-tag-link">Hazaribagh to Patna Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/hazaribagh-to-gaya-packers-and-movers" class="del2hzb-tag-link">Hazaribagh to Gaya Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="del2hzb-tag-link">Cost Calculator &amp; Rates</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
