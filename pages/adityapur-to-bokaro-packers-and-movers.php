<?php
/**
 * Page Name: Adityapur to Bokaro Packers and Movers
 * Route Slug: adityapur-to-bokaro-packers-and-movers
 * Group: Route 3 - Adityapur Industrial Corridor
 * Meta Title: Packers and Movers Adityapur to Bokaro | Safe Shifting
 * Meta Description: Reliable packers and movers from Adityapur to Bokaro. 125 km via NH-18, 5-layer packing, household & steel plant cargo moving. Call 8409531615.
 * Focus Keywords: adityapur to bokaro packers and movers, packers and movers adityapur to bokaro, house shifting adityapur to bokaro, steel plant transfer packers adityapur bokaro, car transport adityapur to bokaro, bike parcel adityapur bokaro
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Packers and Movers Adityapur to Bokaro | Safe Shifting";
$page_desc = "Reliable packers and movers from Adityapur to Bokaro. 125 km via NH-18, 5-layer packing, household & steel plant cargo moving. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/adityapur-to-bokaro-packers-and-movers";
$route_origin = "Adityapur";
$route_destination = "Bokaro Steel City";

// Open Graph
$og_title = "Packers and Movers Adityapur to Bokaro | Safe Shifting";
$og_description = "Reliable packers and movers from Adityapur to Bokaro. 125 km via NH-18, 5-layer packing, household & steel plant cargo moving. Call 8409531615.";
$og_url = $canonical_url;
$og_image = "https://www.shreeashirwadpackers.com/images/safe-transit-container-truck-ranchi.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="adityapur to bokaro packers and movers, packers and movers adityapur to bokaro, house shifting adityapur to bokaro, steel plant transfer packers adityapur bokaro, car transport adityapur to bokaro, bike parcel adityapur bokaro">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Adityapur">

    <!-- Open Graph Metadata -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="<?php echo htmlspecialchars($og_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($og_description); ?>">
    <meta property="og:url" content="<?php echo $og_url; ?>">
    <meta property="og:image" content="<?php echo $og_image; ?>">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($og_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($og_description); ?>">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">

    <!-- Preload Critical Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Adityapur",
        "image": "https://www.shreeashirwadpackers.com/images/safe-transit-container-truck-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "₹6,800 - ₹35,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Road, Near Kharkai Bridge & Tata Kandra Road, Adityapur Industrial Area",
            "addressLocality": "Adityapur",
            "addressRegion": "Jharkhand",
            "postalCode": "831013",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "22.7885",
            "longitude": "86.1664"
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "218"
        },
        "areaServed": [
            { "@type": "City", "name": "Adityapur" },
            { "@type": "City", "name": "Bokaro Steel City" },
            { "@type": "City", "name": "Chas" },
            { "@type": "AdministrativeArea", "name": "Seraikela-Kharsawan" },
            { "@type": "AdministrativeArea", "name": "Bokaro" }
        ]
    }
    </script>

    <!-- Schema 2: BreadcrumbList Schema -->
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
                "name": "Adityapur Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-adityapur"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Adityapur to Bokaro",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- Schema 3: FAQPage Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the shifting charge from Adityapur to Bokaro Steel City?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Household relocation charges from Adityapur to Bokaro Steel City start at approximately ₹6,800 to ₹12,500 for a 1 BHK flat, ₹10,500 to ₹18,000 for a 2 BHK apartment, and ₹15,500 to ₹25,500 for a 3 BHK home. Costs include full 5-layer packing, loading, transit via NH-18, toll taxes, and doorstep placement."
                }
            },
            {
                "@type": "Question",
                "name": "How much travel time is required for goods delivery between Adityapur and Bokaro?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance is 125 km via Tata-Kandra Road, Chandil, Balarampur, Purulia bypass, and Chas. Dedicated closed container trucks take roughly 3 to 4 hours under normal traffic, enabling convenient same-day door-to-door shifting."
                }
            },
            {
                "@type": "Question",
                "name": "Do you handle transfers for SAIL Bokaro Steel Plant and BSL employees?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we specialize in corporate and public-sector employee relocations for SAIL, BSL Township, Vedanta ESL, and ancillaries. We provide 100% IBA-approved consignment bills, computerized inventory sheets, GST invoices, and transit insurance certificates for smooth employer claim reimbursement."
                }
            },
            {
                "@type": "Question",
                "name": "How are wooden furniture and delicate wardrobes protected during NH-18 transit?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our carpentry specialists carefully dismantle modular beds, dining tables, and wardrobes. Wooden components are wrapped in thick cellular bubble wrap, covered with quilted moving blankets, reinforced with corrugated edge corner guards, and wrapped in water-resistant stretch film."
                }
            },
            {
                "@type": "Question",
                "name": "Can I transport my motorcycle or scooter from Adityapur to Bokaro?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, two-wheelers are securely packed using 3 layers of protective bubble wrap and foam sheeting over headlamps, fuel tanks, and rearview mirrors. They are safely loaded and lashed with ratchet tie-down straps inside covered transport carriers."
                }
            },
            {
                "@type": "Question",
                "name": "Do you deliver to all sectors in Bokaro Steel City and Chas?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our delivery network covers all residential sectors of Bokaro Steel City including Sector 1, 2, 3, 4, 5, 6, 8, 9, 11, 12, Co-operative Colony, City Centre, as well as Chas municipal area and Balidih Industrial Area."
                }
            }
        ]
    }
    </script>

    <!-- Schema 4: Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Intercity Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            { "@type": "City", "name": "Adityapur" },
            { "@type": "City", "name": "Bokaro Steel City" },
            { "@type": "City", "name": "Chas" }
        ],
        "description": "Comprehensive intercity relocation connecting the Adityapur auto-ancillary belt to Bokaro Steel City. Household shifting, SAIL employee transfers, industrial spare logistics, and vehicle transport.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "6800",
            "priceValidUntil": "2027-12-31"
        }
    }
    </script>

    <style>
        /* Scoped styles for Adityapur to Bokaro Route */
        :root {
            --adi-bok-primary: #0f3460;
            --adi-bok-secondary: #16213e;
            --adi-bok-accent: #e94560;
            --adi-bok-accent-hover: #c82d47;
            --adi-bok-bg: #f8fafc;
            --adi-bok-card: #ffffff;
            --adi-bok-border: #e2e8f0;
            --adi-bok-text: #1e293b;
            --adi-bok-muted: #64748b;
        }

        .adi-bok-wrapper {
            font-family: 'Inter', sans-serif;
            color: var(--adi-bok-text);
            background-color: var(--adi-bok-bg);
            line-height: 1.7;
        }

        .adi-bok-hero {
            background: linear-gradient(135deg, rgba(15, 52, 96, 0.95), rgba(22, 33, 62, 0.92)), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 65px 0 55px;
        }

        .adi-bok-hero-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .adi-bok-badge-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .adi-bok-badge {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(8px);
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 0.82rem;
            font-weight: 600;
            color: #fde68a;
            border: 1px solid rgba(255, 255, 255, 0.2);
            display: inline-flex;
            align-items: center;
            gap: 6px;
        }

        .adi-bok-hero h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .adi-bok-hero p {
            font-size: 1.12rem;
            max-width: 840px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .adi-bok-cta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .btn-adi-bok-call {
            background: var(--adi-bok-accent);
            color: #ffffff;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px rgba(233, 69, 96, 0.35);
        }

        .btn-adi-bok-call:hover {
            background: var(--adi-bok-accent-hover);
            transform: translateY(-2px);
            color: #ffffff;
        }

        .btn-adi-bok-wa {
            background: #25d366;
            color: #ffffff;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }

        .btn-adi-bok-wa:hover {
            background: #1eb855;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .adi-bok-section {
            padding: 60px 0;
        }

        .adi-bok-section-white {
            background-color: #ffffff;
        }

        .adi-bok-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .adi-bok-sec-heading {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--adi-bok-primary);
            margin-bottom: 15px;
            text-align: center;
        }

        .adi-bok-sec-sub {
            text-align: center;
            max-width: 750px;
            margin: 0 auto 40px;
            color: #475569;
            font-size: 1.05rem;
        }

        .adi-bok-logistics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
            margin-bottom: 45px;
        }

        .adi-bok-logistics-card {
            background: #ffffff;
            border: 1px solid var(--adi-bok-border);
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }

        .adi-bok-logistics-icon {
            background: #eef2ff;
            color: var(--adi-bok-primary);
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .adi-bok-logistics-info h3 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 6px;
            color: var(--adi-bok-primary);
        }

        .adi-bok-logistics-info p {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }

        .adi-bok-two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            margin-top: 30px;
        }

        .adi-bok-two-col-text h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.85rem;
            font-weight: 700;
            color: var(--adi-bok-primary);
            margin-bottom: 18px;
            line-height: 1.3;
        }

        .adi-bok-two-col-text p {
            margin-bottom: 16px;
            color: #334155;
            font-size: 1rem;
        }

        .adi-bok-img-box {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--adi-bok-border);
        }

        .adi-bok-img-box img {
            width: 100%;
            height: 340px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .adi-bok-img-box img:hover {
            transform: scale(1.02);
        }

        /* Pricing Table */
        .adi-bok-table-wrapper {
            overflow-x: auto;
            border-radius: 12px;
            border: 1px solid var(--adi-bok-border);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
            margin-bottom: 30px;
        }

        .adi-bok-pricing-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            text-align: left;
            font-size: 0.95rem;
        }

        .adi-bok-pricing-table th {
            background: var(--adi-bok-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
        }

        .adi-bok-pricing-table td {
            padding: 16px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
        }

        .adi-bok-pricing-table tr:hover {
            background-color: #f8fafc;
        }

        .adi-bok-pricing-badge {
            background: #ecfdf5;
            color: #065f46;
            padding: 4px 10px;
            border-radius: 6px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        /* Services Grid */
        .adi-bok-services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            margin-bottom: 45px;
        }

        .adi-bok-service-card {
            background: #ffffff;
            border: 1px solid var(--adi-bok-border);
            border-radius: 14px;
            padding: 30px 24px;
            transition: all 0.3s ease;
        }

        .adi-bok-service-card:hover {
            transform: translateY(-5px);
            border-color: var(--adi-bok-accent);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .adi-bok-service-card h3 {
            font-size: 1.25rem;
            color: var(--adi-bok-primary);
            margin: 15px 0 10px;
            font-weight: 700;
        }

        .adi-bok-service-card p {
            font-size: 0.95rem;
            color: #475569;
            line-height: 1.6;
        }

        /* Process Steps */
        .adi-bok-process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .adi-bok-process-step {
            background: #ffffff;
            border-radius: 12px;
            padding: 24px;
            border-left: 4px solid var(--adi-bok-accent);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.03);
        }

        .adi-bok-step-num {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--adi-bok-accent);
            margin-bottom: 8px;
        }

        .adi-bok-process-step h4 {
            font-size: 1.1rem;
            color: var(--adi-bok-primary);
            margin-bottom: 8px;
            font-weight: 700;
        }

        .adi-bok-process-step p {
            font-size: 0.92rem;
            color: #64748b;
            margin: 0;
        }

        /* FAQ Accordion */
        .adi-bok-faq-list {
            max-width: 900px;
            margin: 0 auto;
        }

        .adi-bok-faq-item {
            background: #ffffff;
            border: 1px solid var(--adi-bok-border);
            border-radius: 10px;
            margin-bottom: 14px;
            overflow: hidden;
        }

        .adi-bok-faq-question {
            padding: 18px 22px;
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--adi-bok-primary);
            background: #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .adi-bok-faq-answer {
            padding: 0 22px 20px;
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.7;
        }

        /* Cluster Navigation */
        .adi-bok-cluster-nav {
            background: #f0fdf4;
            border-radius: 14px;
            padding: 30px;
            margin-top: 30px;
            border: 1px solid #bbf7d0;
        }

        .adi-bok-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .adi-bok-cluster-link {
            background: #ffffff;
            border: 1px solid #86efac;
            padding: 12px 18px;
            border-radius: 8px;
            text-decoration: none;
            color: #166534;
            font-weight: 600;
            font-size: 0.92rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.25s ease;
        }

        .adi-bok-cluster-link:hover {
            background: #166534;
            color: #ffffff;
            border-color: #166534;
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .adi-bok-hero h1 {
                font-size: 1.85rem;
            }
            .adi-bok-two-col {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            .adi-bok-cta-row {
                flex-direction: column;
            }
            .btn-adi-bok-call, .btn-adi-bok-wa {
                width: 100%;
                justify-content: center;
            }
            .adi-bok-img-box img {
                height: 240px;
            }
        }
    </style>
</head>
<body>

<?php
if (file_exists(__DIR__ . '/../includes/header.php')) {
    include_once __DIR__ . '/../includes/header.php';
}
?>

<div class="adi-bok-wrapper">

    <!-- HERO SECTION -->
    <header class="adi-bok-hero">
        <div class="adi-bok-hero-container">
            <div class="adi-bok-badge-row">
                <span class="adi-bok-badge"><i class="fa-solid fa-truck-fast"></i> 125 km Express NH-18 Route</span>
                <span class="adi-bok-badge"><i class="fa-solid fa-shield-halved"></i> All-Risk Goods In-Transit Cover</span>
                <span class="adi-bok-badge"><i class="fa-solid fa-industry"></i> Steel &amp; Auto-Ancillary Specialization</span>
                <span class="adi-bok-badge"><i class="fa-solid fa-file-invoice"></i> IBA Approved PSU Billing</span>
            </div>
            <h1>Packers and Movers Adityapur to Bokaro</h1>
            <p>
                Professional intercity moving services connecting Asia’s largest auto ancillary cluster in Adityapur to the industrial heart of Bokaro Steel City. Dedicated household relocations, SAIL and PSU executive employee transfers, precision fabrication equipment logistics, and damage-free vehicle transport via NH-18 and Chas bypass.
            </p>
            <div class="adi-bok-cta-row">
                <a href="tel:+918409531615" class="btn-adi-bok-call" title="Call Shree Ashirwad Packers Adityapur">
                    <i class="fa-solid fa-phone"></i> Call 084095 31615
                </a>
                <a href="https://api.whatsapp.com/send?phone=918409531615&amp;text=Hi%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Adityapur%20to%20Bokaro%20shifting." class="btn-adi-bok-wa" target="_blank" rel="noopener" title="Get Instant WhatsApp Quote">
                    <i class="fa-brands fa-whatsapp"></i> WhatsApp Instant Quote
                </a>
            </div>
        </div>
    </header>

    <!-- SECTION 1: ROUTE LOGISTICS & HIGHWAY BREAKDOWN -->
    <section class="adi-bok-section">
        <div class="adi-bok-container">
            <h2 class="adi-bok-sec-heading">Adityapur to Bokaro Highway Logistics Architecture</h2>
            <p class="adi-bok-sec-sub">
                Comprehensive operational analysis of the 125 km transit corridor linking Seraikela-Kharsawan's manufacturing belt to Bokaro Steel City.
            </p>

            <div class="adi-bok-logistics-grid">
                <div class="adi-bok-logistics-card">
                    <div class="adi-bok-logistics-icon"><i class="fa-solid fa-route"></i></div>
                    <div class="adi-bok-logistics-info">
                        <h3>National Highway Route</h3>
                        <p>Tata Kandra 4-Lane to NH-18 via Chandil, Balarampur, Purulia bypass, entering Bokaro via Chas junction.</p>
                    </div>
                </div>

                <div class="adi-bok-logistics-card">
                    <div class="adi-bok-logistics-icon"><i class="fa-solid fa-clock"></i></div>
                    <div class="adi-bok-logistics-info">
                        <h3>Transit Duration</h3>
                        <p>125 km travel distance; dedicated closed container fleet achieves transit in 3 to 4 hours door-to-door.</p>
                    </div>
                </div>

                <div class="adi-bok-logistics-card">
                    <div class="adi-bok-logistics-icon"><i class="fa-solid fa-receipt"></i></div>
                    <div class="adi-bok-logistics-info">
                        <h3>Toll Infrastructure</h3>
                        <p>Automated electronic FASTag toll clearance along Chandil bypass ensuring zero checkpoint delay.</p>
                    </div>
                </div>

                <div class="adi-bok-logistics-card">
                    <div class="adi-bok-logistics-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <div class="adi-bok-logistics-info">
                        <h3>Carrier Safety Tier</h3>
                        <p>Sealed waterproof metal containers, pneumatic suspension, GPS tracking, and complete transit insurance coverage.</p>
                    </div>
                </div>
            </div>

            <!-- TWO COLUMN STORY: STEEL & AUTO-ANCILLARY CORRIDOR -->
            <div class="adi-bok-two-col">
                <div class="adi-bok-two-col-text">
                    <h2>Connecting Jharkhand's Premier Steel &amp; Manufacturing Twins</h2>
                    <p>
                        The corridor between Adityapur (Seraikela-Kharsawan) and Bokaro Steel City forms the backbone of Jharkhand’s heavy manufacturing supply chain. While Adityapur thrives as Asia's most dense auto-component fabrication ecosystem supporting Tata Motors, Bokaro stands as one of India's earliest and largest planned industrial townships centered around the monumental SAIL Bokaro Steel Plant (BSL), Electrosteel Steels (Vedanta ESL), and BPCL/ONGC installations.
                    </p>
                    <p>
                        This symbiotic economic partnership drives steady workforce relocations. Senior metallurgists, plant managers, mechanical engineers, defense suppliers, and banking professionals frequently transfer between Adityapur's industrial sectors and Bokaro's planned residential sectors (Sectors 1 through 12, Co-operative Colony, and Chas).
                    </p>
                    <p>
                        Shree Ashirwad Packers and Movers delivers tailored logistics solutions engineered for this specific highway corridor. From heavy solid wood bedroom sets and luxury sofas to modular workstation networks and sensitive industrial tooling, our expert movers ensure rapid, safe, and punctual transfer across NH-18.
                    </p>
                </div>
                <div class="adi-bok-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Wooden Furniture Wrapping for Shifting from Adityapur to Bokaro" title="Protective Furniture Wrapping">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: TRANSPARENT PRICING MATRIX -->
    <section class="adi-bok-section adi-bok-section-white">
        <div class="adi-bok-container">
            <h2 class="adi-bok-sec-heading">Adityapur to Bokaro Transparent Shifting Tariff</h2>
            <p class="adi-bok-sec-sub">
                Honest, itemized pricing structures covering packing materials, skilled labor, transit vehicles, and loading/unloading assistance.
            </p>

            <div class="adi-bok-table-wrapper">
                <table class="adi-bok-pricing-table">
                    <thead>
                        <tr>
                            <th>Relocation Scope</th>
                            <th>Packaging Material Kit</th>
                            <th>Vehicle Type Allocated</th>
                            <th>Estimated Tariff</th>
                            <th>Transit Duration</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 BHK Apartment Complete Move</strong></td>
                            <td>High-density bubble wrap, 5-ply cartons, stretch wrap</td>
                            <td>Tata 407 / 14ft Covered Truck</td>
                            <td><span class="adi-bok-pricing-badge">₹6,800 - ₹12,500</span></td>
                            <td>Same Day (3 - 5 Hours)</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Executive Household</strong></td>
                            <td>5-layer protective wrapping, sofa jackets, mattress covers</td>
                            <td>17ft Dedicated Container Truck</td>
                            <td><span class="adi-bok-pricing-badge">₹10,500 - ₹18,000</span></td>
                            <td>Same Day (4 - 6 Hours)</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK Spacious Residence</strong></td>
                            <td>Custom wooden crating for crockery &amp; electronics, edge protectors</td>
                            <td>19ft Dedicated Metal Container</td>
                            <td><span class="adi-bok-pricing-badge">₹15,500 - ₹25,500</span></td>
                            <td>Same Day (5 - 7 Hours)</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Independent Bungalow</strong></td>
                            <td>Heavy-duty custom crating, wardrobe boxes, foam floor blankets</td>
                            <td>22ft High-Capacity Truck</td>
                            <td><span class="adi-bok-pricing-badge">₹21,000 - ₹35,000</span></td>
                            <td>Same Day / Next Morning</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler / Bike Parcel</strong></td>
                            <td>3-tier bubble sheet wrap, foam handlebar padding, wheel locking</td>
                            <td>Enclosed Shared Auto Carrier</td>
                            <td><span class="adi-bok-pricing-badge">₹2,000 - ₹3,800</span></td>
                            <td>24 Hours Door-to-Door</td>
                        </tr>
                        <tr>
                            <td><strong>Car Carrier Transport (Hatchback/SUV)</strong></td>
                            <td>Enclosed car transport trailer, hydraulic ramps, chassis clamps</td>
                            <td>Dedicated Car Carrier</td>
                            <td><span class="adi-bok-pricing-badge">₹6,000 - ₹10,500</span></td>
                            <td>24 - 48 Hours</td>
                        </tr>
                        <tr>
                            <td><strong>Industrial Spares &amp; Plant Tooling</strong></td>
                            <td>VCI anti-corrosion barrier, custom timber skids, industrial lashing</td>
                            <td>Heavy Flatbed / Container</td>
                            <td><span class="adi-bok-pricing-badge">₹13,500 - ₹42,000</span></td>
                            <td>Scheduled Transit</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="text-align: center; font-size: 0.9rem; color: #64748b;">
                *Standard quotation includes door-to-door transit, loading labor, unloading, and toll costs. Optional transit insurance and GST are billed per official statutory regulations.
            </p>
        </div>
    </section>

    <!-- SECTION 3: SPECIALIZED SERVICES -->
    <section class="adi-bok-section">
        <div class="adi-bok-container">
            <h2 class="adi-bok-sec-heading">Specialized Relocation Capabilities on the Adityapur-Bokaro Corridor</h2>
            <p class="adi-bok-sec-sub">
                Designed to meet the exacting standards of corporate transfers, residential family shifting, and industrial plant logistics.
            </p>

            <div class="adi-bok-services-grid">
                <div class="adi-bok-service-card">
                    <i class="fa-solid fa-couch" style="font-size: 2rem; color: var(--adi-bok-accent);"></i>
                    <h3>Complete Household Relocation</h3>
                    <p>
                        Comprehensive packing of furniture, modular kitchen items, clothing, and home electronics from Adityapur's S-Type, Gamharia, or Asangi localities to Bokaro's Sectors 1-12, Co-operative Colony, or Chas apartments.
                    </p>
                </div>

                <div class="adi-bok-service-card">
                    <i class="fa-solid fa-building-user" style="font-size: 2rem; color: var(--adi-bok-accent);"></i>
                    <h3>SAIL &amp; PSU Employee Transfers</h3>
                    <p>
                        Specialized moving solutions compliant with public-sector reimbursement policies. We issue authentic 100% IBA-approved bills, GST invoices, and itemized packing manifests for SAIL, BSL, ESL, and banking claims.
                    </p>
                </div>

                <div class="adi-bok-service-card">
                    <i class="fa-solid fa-cogs" style="font-size: 2rem; color: var(--adi-bok-accent);"></i>
                    <h3>Fabrication Spares &amp; Machinery Logistics</h3>
                    <p>
                        Seamless transport of mechanical tooling, lathe machinery, precision instruments, and electrical switchgear from Adityapur Industrial Area Phase I-VII to Balidih Industrial Estate and Bokaro plant contractors.
                    </p>
                </div>

                <div class="adi-bok-service-card">
                    <i class="fa-solid fa-motorcycle" style="font-size: 2rem; color: var(--adi-bok-accent);"></i>
                    <h3>Automobile &amp; Bike Parcel Services</h3>
                    <p>
                        Secure vehicle transit ensuring zero road wear. Two-wheelers receive complete 3-layer protective padding, while four-wheelers are clamped inside specialized hydraulic car carrier vehicles.
                    </p>
                </div>
            </div>

            <!-- TWO COLUMN STORY: PACKAGING DEFENSE -->
            <div class="adi-bok-two-col">
                <div class="adi-bok-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/electronics-led-tv-crating-jharkhand.jpg" alt="Electronics and LED TV Wooden Crating for Adityapur to Bokaro Move" title="Electronics Wooden Crating">
                </div>
                <div class="adi-bok-two-col-text">
                    <h2>Engineered 5-Layer Defensive Packaging Standards</h2>
                    <p>
                        Navigating through the industrial bypasses and railway overbridges of NH-18 requires packaging that withstands vehicular vibrations and road undulations. Shree Ashirwad Packers and Movers implements a scientifically designed 5-stage packaging protocol:
                    </p>
                    <ul style="padding-left: 20px; color: #334155;">
                        <li><strong>Layer 1 (Scratch-Resistant Barrier):</strong> Virgin micro-bubble film directly adhered to glossy surfaces, polished wood, LED TV displays, and glass tabletops.</li>
                        <li><strong>Layer 2 (Impact Absorption):</strong> High-density expanded polyethylene (EPE) foam dampening road shocks and transit vibrations.</li>
                        <li><strong>Layer 3 (Structural Edge Guards):</strong> Heavy-gauge reinforced corrugated corner angles protecting vulnerable edges of tables, almirahs, and washing machines.</li>
                        <li><strong>Layer 4 (Outer Box Fortification):</strong> Heavy 5-ply kraft paper boxes tailored to kitchenware, books, and crockery, taped securely with branded high-tack tape.</li>
                        <li><strong>Layer 5 (All-Weather Shrink Shield):</strong> Heavy LDPE stretch wrap creating an impenetrable shield against rain, moisture, and road dust during transit.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: ROUTE MILESTONES & TRANSIT ADVISORY -->
    <section class="adi-bok-section adi-bok-section-white">
        <div class="adi-bok-container">
            <h2 class="adi-bok-sec-heading">NH-18 Highway Route Milestones &amp; Driving Logistics</h2>
            <p class="adi-bok-sec-sub">
                Key geographic checkpoints and navigation strategy on the 125 km transit connecting Adityapur to Bokaro Steel City.
            </p>

            <div class="adi-bok-process-grid">
                <div class="adi-bok-process-step">
                    <div class="adi-bok-step-num">01</div>
                    <h4>Tata-Kandra to Chandil (28 km)</h4>
                    <p>Exiting Adityapur Industrial Area along the 4-lane Tata Kandra highway, joining NH-18 at Chandil toll plaza.</p>
                </div>

                <div class="adi-bok-process-step">
                    <div class="adi-bok-step-num">02</div>
                    <h4>Chandil to Balarampur (32 km)</h4>
                    <p>Smooth four-lane national highway transit passing the border between Seraikela-Kharsawan and Purulia district.</p>
                </div>

                <div class="adi-bok-process-step">
                    <div class="adi-bok-step-num">03</div>
                    <h4>Purulia Bypass (35 km)</h4>
                    <p>Cruising on the outer bypass around Purulia town, bypassing city market congestions and ensuring unhindered container speed.</p>
                </div>

                <div class="adi-bok-process-step">
                    <div class="adi-bok-step-num">04</div>
                    <h4>Chas to Bokaro Sectors (30 km)</h4>
                    <p>Crossing the Garga River bridge into Chas commercial junction and distributing into Bokaro's wide sector avenues.</p>
                </div>
            </div>

            <!-- TWO COLUMN STORY: VEHICLE TRANSPORT & DOORSTEP DELIVERY -->
            <div class="adi-bok-two-col" style="margin-top: 45px;">
                <div class="adi-bok-two-col-text">
                    <h2>Direct Doorstep Relocation Across Bokaro Steel City Sectors &amp; Chas</h2>
                    <p>
                        Bokaro Steel City is celebrated as one of India's best-planned industrial townships, featuring wide grid-patterned boulevards, designated residential sectors, and green tree-lined avenues. Moving into these residential enclaves requires moving crews who respect township regulations, entry passes, and multi-story staircase logistics.
                    </p>
                    <p>
                        Our ground moving crews routinely deliver into all Bokaro sectors: Sector 1 (near Ram Mandir), Sector 2, Sector 3, Sector 4 (the bustling commercial center and City Centre), Sector 5, Sector 6, Sector 8, Sector 9, Sector 11, and Sector 12. We also handle frequent residential moves into the upscale Co-operative Colony, prominent housing complexes along Chas bypass, ITI Road, Check Post area, and the executive residential quarters of Balidih Industrial Area and Vedanta Electrosteel township.
                    </p>
                    <p>
                        At the Adityapur end, our loading supervisors coordinate seamlessly across all industrial phases (Phase I through Phase VII), S-Type residential blocks, Gamharia housing societies, Asangi, Majhitola, Saldih, and the faculties of NIT Jamshedpur. Whether you reside in an independent quarter or a gated apartment on Tata-Kandra 4-Lane Road, our crew utilizes specialized shuttle vehicles to navigate compact service lanes, ensuring your goods are transferred into our heavy containers without double-handling risks.
                    </p>
                    <p>
                        Our movers utilize hydraulic trolley lifters, heavy-duty nylon webbing, and padded furniture blankets to navigate apartment staircases without scratching hallway walls or damaging doorway frames. Once inside your new flat or bungalow in Bokaro, we reassemble all dismantled beds and wardrobes, unpack fragile cartons upon request, and place heavy furniture exactly where you desire.
                    </p>
                </div>
                <div class="adi-bok-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to Door Delivery Truck Shifting Household Goods in Bokaro Steel City" title="Doorstep Delivery Truck in Bokaro">
                </div>
            </div>

            <!-- TWO COLUMN STORY: TWO WHEELER & BIKE TRANSPORT -->
            <div class="adi-bok-two-col" style="margin-top: 45px;">
                <div class="adi-bok-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg" alt="Motorcycle and Scooter Safe Packing for Adityapur to Bokaro Move" title="Bike Packing and Shifting Services">
                </div>
                <div class="adi-bok-two-col-text">
                    <h2>Safe Motorcycle &amp; Scooter Parcel Services</h2>
                    <p>
                        Riding a two-wheeler over 125 km on the heavy-traffic national highway between Adityapur and Bokaro exposes the vehicle and rider to highway dust, fatigue, and sudden heavy truck movements. Shree Ashirwad Packers and Movers offers a stress-free, professional bike parcel service designed for students, plant employees, and defense personnel.
                    </p>
                    <p>
                        Our technicians perform a pre-transit condition audit, draining remaining fuel to ensure safety compliance. Mirrors and turn indicators are detached or cushioned with dense foam pads, while the petrol tank, fairing panels, and silencer are wrapped in 3 layers of cellular bubble wrap and corrugated cardboard.
                    </p>
                    <p>
                        Your scooter or motorcycle is securely lashed inside our covered container truck using industrial-grade ratchet straps, ensuring zero sway or transit scratches upon arrival in Bokaro.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: FREQUENTLY ASKED QUESTIONS -->
    <section class="adi-bok-section">
        <div class="adi-bok-container">
            <h2 class="adi-bok-sec-heading">Frequently Asked Questions</h2>
            <p class="adi-bok-sec-sub">
                Clear answers to common questions about relocating from Adityapur to Bokaro Steel City.
            </p>

            <div class="adi-bok-faq-list">
                <div class="adi-bok-faq-item">
                    <div class="adi-bok-faq-question">
                        <span>What is the shifting charge from Adityapur to Bokaro Steel City?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="adi-bok-faq-answer">
                        Household relocation charges from Adityapur to Bokaro Steel City start at approximately ₹6,800 to ₹12,500 for a 1 BHK flat, ₹10,500 to ₹18,000 for a 2 BHK apartment, and ₹15,500 to ₹25,500 for a 3 BHK home. Costs include full 5-layer packing, loading, transit via NH-18, toll taxes, and doorstep placement.
                    </div>
                </div>

                <div class="adi-bok-faq-item">
                    <div class="adi-bok-faq-question">
                        <span>How much travel time is required for goods delivery between Adityapur and Bokaro?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="adi-bok-faq-answer">
                        The highway distance is 125 km via Tata-Kandra Road, Chandil, Balarampur, Purulia bypass, and Chas. Dedicated closed container trucks take roughly 3 to 4 hours under normal traffic, enabling convenient same-day door-to-door shifting.
                    </div>
                </div>

                <div class="adi-bok-faq-item">
                    <div class="adi-bok-faq-question">
                        <span>Do you handle transfers for SAIL Bokaro Steel Plant and BSL employees?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="adi-bok-faq-answer">
                        Yes, we specialize in corporate and public-sector employee relocations for SAIL, BSL Township, Vedanta ESL, and ancillaries. We provide 100% IBA-approved consignment bills, computerized inventory sheets, GST invoices, and transit insurance certificates for smooth employer claim reimbursement.
                    </div>
                </div>

                <div class="adi-bok-faq-item">
                    <div class="adi-bok-faq-question">
                        <span>How are wooden furniture and delicate wardrobes protected during NH-18 transit?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="adi-bok-faq-answer">
                        Our carpentry specialists carefully dismantle modular beds, dining tables, and wardrobes. Wooden components are wrapped in thick cellular bubble wrap, covered with quilted moving blankets, reinforced with corrugated edge corner guards, and wrapped in water-resistant stretch film.
                    </div>
                </div>

                <div class="adi-bok-faq-item">
                    <div class="adi-bok-faq-question">
                        <span>Can I transport my motorcycle or scooter from Adityapur to Bokaro?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="adi-bok-faq-answer">
                        Yes, two-wheelers are securely packed using 3 layers of protective bubble wrap and foam sheeting over headlamps, fuel tanks, and rearview mirrors. They are safely loaded and lashed with ratchet tie-down straps inside covered transport carriers.
                    </div>
                </div>

                <div class="adi-bok-faq-item">
                    <div class="adi-bok-faq-question">
                        <span>Do you deliver to all sectors in Bokaro Steel City and Chas?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="adi-bok-faq-answer">
                        Yes, our delivery network covers all residential sectors of Bokaro Steel City including Sector 1, 2, 3, 4, 5, 6, 8, 9, 11, 12, Co-operative Colony, City Centre, as well as Chas municipal area and Balidih Industrial Area.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: CLUSTER NAVIGATION MODULE -->
    <section class="adi-bok-section adi-bok-section-white">
        <div class="adi-bok-container">
            <h2 class="adi-bok-sec-heading">Explore Connected Relocation Corridors</h2>
            <p class="adi-bok-sec-sub">
                Seamless internal navigation across our comprehensive network of industrial and regional shifting routes.
            </p>

            <div class="adi-bok-cluster-nav">
                <h3 style="font-size: 1.15rem; color: #166534; margin-bottom: 5px;">Key Industrial &amp; State Corridors Connected to Adityapur</h3>
                <div class="adi-bok-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-adityapur" class="adi-bok-cluster-link">
                        <span>Adityapur Main Hub</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bokaro" class="adi-bok-cluster-link">
                        <span>Bokaro Steel City Hub</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-jamshedpur-packers-and-movers" class="adi-bok-cluster-link">
                        <span>Adityapur to Jamshedpur</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-dhanbad-packers-and-movers" class="adi-bok-cluster-link">
                        <span>Adityapur to Dhanbad</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-ranchi-packers-and-movers" class="adi-bok-cluster-link">
                        <span>Adityapur to Ranchi</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-adityapur-packers-and-movers" class="adi-bok-cluster-link">
                        <span>Ranchi to Adityapur</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/bokaro-to-dhanbad-packers-and-movers" class="adi-bok-cluster-link">
                        <span>Bokaro to Dhanbad</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/chandil-to-bokaro-packers-and-movers" class="adi-bok-cluster-link">
                        <span>Chandil to Bokaro</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>

</div>

<?php
if (file_exists(__DIR__ . '/../includes/footer.php')) {
    include_once __DIR__ . '/../includes/footer.php';
}
?>

</body>
</html>
