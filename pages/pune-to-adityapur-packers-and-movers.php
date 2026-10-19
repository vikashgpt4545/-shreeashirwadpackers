<?php
/**
 * Page Name: Pune to Adityapur Packers and Movers
 * Route Slug: pune-to-adityapur-packers-and-movers
 * Group: Route 20 - Adityapur Industrial Corridor (Inbound)
 * Meta Title: Packers and Movers Pune to Adityapur | Safe Shifting
 * Meta Description: Expert packers and movers from Pune to Adityapur. 1,560 km via NH-53, 5-layer packing, auto-hub & household moving. Call 8409531615.
 * Focus Keywords: pune to adityapur packers and movers, packers and movers pune to adityapur, house shifting pune to adityapur, interstate moving pune adityapur, car transport pune adityapur, bike parcel pune adityapur
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Packers and Movers Pune to Adityapur | Safe Shifting";
$page_desc = "Expert packers and movers from Pune to Adityapur. 1,560 km via NH-53, 5-layer packing, auto-hub & household moving. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/pune-to-adityapur-packers-and-movers";
$route_origin = "Pune";
$route_destination = "Adityapur";

// Open Graph
$og_title = "Packers and Movers Pune to Adityapur | Safe Shifting";
$og_description = "Expert packers and movers from Pune to Adityapur. 1,560 km via NH-53, 5-layer packing, auto-hub & household moving. Call 8409531615.";
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
    <meta name="keywords" content="pune to adityapur packers and movers, packers and movers pune to adityapur, house shifting pune to adityapur, interstate moving pune adityapur, car transport pune adityapur, bike parcel pune adityapur">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-MH">
    <meta name="geo.placename" content="Pune">

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
        "name": "Shree Ashirwad Packers and Movers Pune to Adityapur",
        "image": "https://www.shreeashirwadpackers.com/images/safe-transit-container-truck-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "₹18,500 - ₹72,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Tata-Kandra Main Road, Near Toll Bridge Link, Adityapur Industrial Area",
            "addressLocality": "Adityapur",
            "addressRegion": "Jharkhand",
            "postalCode": "831013",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": "22.7876",
            "longitude": "86.1661"
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
            "reviewCount": "286"
        },
        "areaServed": [
            { "@type": "City", "name": "Pune" },
            { "@type": "City", "name": "Pimpri-Chinchwad" },
            { "@type": "City", "name": "Adityapur" },
            { "@type": "AdministrativeArea", "name": "Maharashtra" },
            { "@type": "AdministrativeArea", "name": "Seraikela-Kharsawan" }
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
                "name": "Pune to Adityapur",
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
                "name": "What are the relocation charges from Pune to Adityapur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Household relocation charges from Pune to Adityapur range from ₹18,500 to ₹28,000 for a 1 BHK flat, ₹26,000 to ₹42,000 for a 2 BHK apartment, and ₹36,000 to ₹62,000 for a 3 BHK family residence. The estimate covers comprehensive 5-layer protective packing, loading in Pune high-rises, transit via NH-53, interstate toll fees, unloading, and room positioning in Adityapur."
                }
            },
            {
                "@type": "Question",
                "name": "How much travel time is required between Pune and Adityapur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance is approximately 1,560 km via NH-53 (Asian Highway 46) through Nagpur, Raipur, Sambalpur, and Rourkela into Adityapur. Dedicated closed container trucks cover this cross-country corridor in 34 to 42 hours, delivering dependable 3 to 4-day door-to-door transit."
                }
            },
            {
                "@type": "Question",
                "name": "Do you furnish IBA-approved bills for automobile corporate claims?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly provide 100% authentic IBA-approved bills, GST money receipts, itemized packing lists, and vehicle transit receipts fully valid for employee relocation allowance claims across Tata Motors, automotive Tier-1 ancillaries, IT corporates, and engineering enterprises."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport my motorcycle or car safely from Pune to Adityapur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, two-wheelers are wrapped in 3 layers of protective bubble wrap and foam cushioning with mirrors dismantled and lashed inside enclosed container trucks. Four-wheelers are moved via enclosed hydraulic car carrier trucks with wheel-locking clamps."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect fragile items and electronic appliances over 1,560 km?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy a comprehensive 5-layer packing defense: virgin micro-bubble film, vibration-dampening EPE foam, heavy corrugated edge corner guards, 5-ply kraft boxes, and waterproof LDPE stretch wrap to safeguard against highway jolts and weather changes over the 1,560 km cross-country transit."
                }
            },
            {
                "@type": "Question",
                "name": "Which localities in Pune and Adityapur do you service?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Pune, we pack across Hinjawadi, Pimpri-Chinchwad, Bhosari, Chakan, Talegaon, Hadapsar, Viman Nagar, Kothrud, Baner, and Wakad. In Adityapur, we deliver to S-Type Colony, Gamharia, Asangi, Majhitola, Dindli Enclave, Saldih, Toll Bridge area, and Industrial Area Phases I-VII."
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
        "serviceType": "Interstate Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            { "@type": "City", "name": "Pune" },
            { "@type": "City", "name": "Pimpri-Chinchwad" },
            { "@type": "City", "name": "Adityapur" }
        ],
        "description": "Professional interstate moving services connecting Pune automobile hub in Maharashtra to Adityapur industrial hub in Jharkhand. Household shifting, corporate moving, car transport, and industrial cargo.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "18500",
            "priceValidUntil": "2027-12-31"
        }
    }
    </script>

    <style>
        /* Scoped styles for Pune to Adityapur Route */
        :root {
            --pune-adi-primary: #7c2d12;
            --pune-adi-secondary: #9a3412;
            --pune-adi-accent: #ea580c;
            --pune-adi-accent-hover: #c2410c;
            --pune-adi-bg: #f8fafc;
            --pune-adi-card: #ffffff;
            --pune-adi-border: #e2e8f0;
            --pune-adi-text: #1e293b;
            --pune-adi-muted: #64748b;
        }

        .pune-adi-wrapper {
            font-family: 'Inter', sans-serif;
            color: var(--pune-adi-text);
            background-color: var(--pune-adi-bg);
            line-height: 1.7;
        }

        .pune-adi-hero {
            background: linear-gradient(135deg, rgba(124, 45, 18, 0.95), rgba(154, 52, 18, 0.92)), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 65px 0 55px;
        }

        .pune-adi-hero-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .pune-adi-badge-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .pune-adi-badge {
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

        .pune-adi-hero h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .pune-adi-hero p {
            font-size: 1.12rem;
            max-width: 840px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .pune-adi-cta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .btn-pune-adi-call {
            background: #f59e0b;
            color: #ffffff;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 14px rgba(245, 158, 11, 0.35);
        }

        .btn-pune-adi-call:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .btn-pune-adi-wa {
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

        .btn-pune-adi-wa:hover {
            background: #1eb855;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .pune-adi-section {
            padding: 60px 0;
        }

        .pune-adi-section-white {
            background-color: #ffffff;
        }

        .pune-adi-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .pune-adi-sec-heading {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--pune-adi-primary);
            margin-bottom: 15px;
            text-align: center;
        }

        .pune-adi-sec-sub {
            text-align: center;
            max-width: 750px;
            margin: 0 auto 40px;
            color: #475569;
            font-size: 1.05rem;
        }

        .pune-adi-logistics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
            margin-bottom: 45px;
        }

        .pune-adi-logistics-card {
            background: #ffffff;
            border: 1px solid var(--pune-adi-border);
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }

        .pune-adi-logistics-icon {
            background: #ffedd5;
            color: var(--pune-adi-primary);
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .pune-adi-logistics-info h3 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 6px;
            color: var(--pune-adi-primary);
        }

        .pune-adi-logistics-info p {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }

        .pune-adi-two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            margin-top: 30px;
        }

        .pune-adi-two-col-text h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.85rem;
            font-weight: 700;
            color: var(--pune-adi-primary);
            margin-bottom: 18px;
            line-height: 1.3;
        }

        .pune-adi-two-col-text p {
            margin-bottom: 16px;
            color: #334155;
            font-size: 1rem;
        }

        .pune-adi-img-box {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--pune-adi-border);
        }

        .pune-adi-img-box img {
            width: 100%;
            height: 340px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .pune-adi-img-box img:hover {
            transform: scale(1.02);
        }

        /* Pricing Table */
        .pune-adi-table-wrapper {
            overflow-x: auto;
            border-radius: 12px;
            border: 1px solid var(--pune-adi-border);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
            margin-bottom: 30px;
        }

        .pune-adi-pricing-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            text-align: left;
            font-size: 0.95rem;
        }

        .pune-adi-pricing-table th {
            background: var(--pune-adi-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
        }

        .pune-adi-pricing-table td {
            padding: 16px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
        }

        .pune-adi-pricing-table tr:hover {
            background-color: #f8fafc;
        }

        .pune-adi-pricing-badge {
            background: #ecfdf5;
            color: #065f46;
            padding: 4px 10px;
            border-radius: 6px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        /* Services Grid */
        .pune-adi-services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            margin-bottom: 45px;
        }

        .pune-adi-service-card {
            background: #ffffff;
            border: 1px solid var(--pune-adi-border);
            border-radius: 14px;
            padding: 30px 24px;
            transition: all 0.3s ease;
        }

        .pune-adi-service-card:hover {
            transform: translateY(-5px);
            border-color: var(--pune-adi-accent);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .pune-adi-service-card h3 {
            font-size: 1.25rem;
            color: var(--pune-adi-primary);
            margin: 15px 0 10px;
            font-weight: 700;
        }

        .pune-adi-service-card p {
            font-size: 0.95rem;
            color: #475569;
            line-height: 1.6;
        }

        /* Process Steps */
        .pune-adi-process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .pune-adi-process-step {
            background: #ffffff;
            border-radius: 12px;
            padding: 24px;
            border-left: 4px solid var(--pune-adi-accent);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.03);
        }

        .pune-adi-step-num {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--pune-adi-accent);
            margin-bottom: 8px;
        }

        .pune-adi-process-step h4 {
            font-size: 1.1rem;
            color: var(--pune-adi-primary);
            margin-bottom: 8px;
            font-weight: 700;
        }

        .pune-adi-process-step p {
            font-size: 0.92rem;
            color: #64748b;
            margin: 0;
        }

        /* FAQ Accordion */
        .pune-adi-faq-list {
            max-width: 900px;
            margin: 0 auto;
        }

        .pune-adi-faq-item {
            background: #ffffff;
            border: 1px solid var(--pune-adi-border);
            border-radius: 10px;
            margin-bottom: 14px;
            overflow: hidden;
        }

        .pune-adi-faq-question {
            padding: 18px 22px;
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--pune-adi-primary);
            background: #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .pune-adi-faq-answer {
            padding: 0 22px 20px;
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.7;
        }

        /* Cluster Navigation */
        .pune-adi-cluster-nav {
            background: #fff7ed;
            border-radius: 14px;
            padding: 30px;
            margin-top: 30px;
            border: 1px solid #ffedd5;
        }

        .pune-adi-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .pune-adi-cluster-link {
            background: #ffffff;
            border: 1px solid #fed7aa;
            padding: 12px 18px;
            border-radius: 8px;
            text-decoration: none;
            color: var(--pune-adi-primary);
            font-weight: 600;
            font-size: 0.92rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.25s ease;
        }

        .pune-adi-cluster-link:hover {
            background: var(--pune-adi-primary);
            color: #ffffff;
            border-color: var(--pune-adi-primary);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .pune-adi-hero h1 {
                font-size: 1.85rem;
            }
            .pune-adi-two-col {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            .pune-adi-cta-row {
                flex-direction: column;
            }
            .btn-pune-adi-call, .btn-pune-adi-wa {
                width: 100%;
                justify-content: center;
            }
            .pune-adi-img-box img {
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

<div class="pune-adi-wrapper">

    <!-- HERO SECTION -->
    <header class="pune-adi-hero">
        <div class="pune-adi-hero-container">
            <div class="pune-adi-badge-row">
                <span class="pune-adi-badge"><i class="fa-solid fa-truck-fast"></i> 1,560 km Direct Auto-Hub Corridor</span>
                <span class="pune-adi-badge"><i class="fa-solid fa-shield-halved"></i> 100% In-Transit Risk Cover</span>
                <span class="pune-adi-badge"><i class="fa-solid fa-gears"></i> Pune to Adityapur Auto Twin Hub</span>
                <span class="pune-adi-badge"><i class="fa-solid fa-file-invoice"></i> IBA Approved Billing Standard</span>
            </div>
            <h1>Packers and Movers Pune to Adityapur</h1>
            <p>
                Premier long-distance interstate relocation services connecting India's western automobile capital of Pune (Pimpri-Chinchwad, Bhosari, Chakan, Hinjawadi) to eastern India’s manufacturing giant in Adityapur. Dependable household apartment shifting, automotive engineering executive transfers, precision tooling logistics, and damage-free vehicle delivery across NH-53 via Nagpur, Raipur, Sambalpur, and Rourkela into Jharkhand.
            </p>
            <div class="pune-adi-cta-row">
                <a href="tel:+918409531615" class="btn-pune-adi-call" title="Call Shree Ashirwad Packers Adityapur">
                    <i class="fa-solid fa-phone"></i> Call 084095 31615
                </a>
                <a href="https://api.whatsapp.com/send?phone=918409531615&amp;text=Hi%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Pune%20to%20Adityapur%20shifting." class="btn-pune-adi-wa" target="_blank" rel="noopener" title="Get Instant WhatsApp Quote">
                    <i class="fa-brands fa-whatsapp"></i> WhatsApp Instant Quote
                </a>
            </div>
        </div>
    </header>

    <!-- SECTION 1: ROUTE LOGISTICS & TRANSIT ANALYSIS -->
    <section class="pune-adi-section">
        <div class="pune-adi-container">
            <h2 class="pune-adi-sec-heading">Pune to Adityapur Inbound Logistics Architecture</h2>
            <p class="pune-adi-sec-sub">
                Comprehensive operational blueprint of the 1,560 km cross-country transit connecting Western India to Seraikela-Kharsawan.
            </p>

            <div class="pune-adi-logistics-grid">
                <div class="pune-adi-logistics-card">
                    <div class="pune-adi-logistics-icon"><i class="fa-solid fa-road"></i></div>
                    <div class="pune-adi-logistics-info">
                        <h3>National Highway Route</h3>
                        <p>NH-53 (AH46) via Ahmednagar, Jalna, Nagpur, Raipur, Sambalpur, Rourkela, and Chaibasa into Adityapur.</p>
                    </div>
                </div>

                <div class="pune-adi-logistics-card">
                    <div class="pune-adi-logistics-icon"><i class="fa-solid fa-stopwatch"></i></div>
                    <div class="pune-adi-logistics-info">
                        <h3>Transit Timeline</h3>
                        <p>1,560 km total distance; dedicated closed container fleet reaches Adityapur in 34 to 42 driving hours.</p>
                    </div>
                </div>

                <div class="pune-adi-logistics-card">
                    <div class="pune-adi-logistics-icon"><i class="fa-solid fa-barcode"></i></div>
                    <div class="pune-adi-logistics-info">
                        <h3>Multi-State FASTag Passes</h3>
                        <p>Automated electronic toll clearances across Maharashtra, Chhattisgarh, Odisha, and Jharkhand borders.</p>
                    </div>
                </div>

                <div class="pune-adi-logistics-card">
                    <div class="pune-adi-logistics-icon"><i class="fa-solid fa-box-check"></i></div>
                    <div class="pune-adi-logistics-info">
                        <h3>5-Tier Packing Armor</h3>
                        <p>Virgin bubble wrap, EPE foam sheets, corrugated corner angles, 5-ply cartons, and waterproof stretch wrap.</p>
                    </div>
                </div>
            </div>

            <!-- TWO COLUMN STORY: TWIN AUTO HUBS -->
            <div class="pune-adi-two-col">
                <div class="pune-adi-two-col-text">
                    <h2>Connecting India's Premier Automobile Manufacturing Twin Clusters</h2>
                    <p>
                        The inbound transit corridor connecting Pune to Adityapur represents the ultimate automotive synergy in India. Pune, with its sprawling industrial sectors across Pimpri-Chinchwad, Bhosari, Chakan, and Talegaon, serves as India's western automobile manufacturing capital. At the other end of this 1,560 km highway artery lies Adityapur in Seraikela-Kharsawan district—Asia's largest auto ancillary cluster, home to over 1,200 operating engineering and component fabrication units.
                    </p>
                    <p>
                        Relocations along this cross-country corridor are driven by automotive engineers, senior plant heads, tooling designers, testing professionals, and supply chain managers moving between Tata Motors, Tier-1 component manufacturers, and forging plants. Families relocating from Pune's bustling residential townships in Hinjawadi, Wakad, Baner, and Pimple Saudagar seek meticulous moving services that guarantee complete safety for their personal belongings over the long journey.
                    </p>
                    <p>
                        Shree Ashirwad Packers and Movers delivers a specialized moving architecture built specifically for cross-country highway endurance. Our sealed container trucks traverse the NH-53 expressway with precision, protecting valuable furniture, kitchenware, and sensitive electronic goods from highway vibrations, dust, and climatic shifts.
                    </p>
                </div>
                <div class="pune-adi-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Loading Luggage in Covered Truck for Pune to Adityapur Move" title="Covered Truck Loading Pune to Adityapur">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: TRANSPARENT PRICING MATRIX -->
    <section class="pune-adi-section pune-adi-section-white">
        <div class="pune-adi-container">
            <h2 class="pune-adi-sec-heading">Pune to Adityapur Transparent Shifting Tariffs</h2>
            <p class="pune-adi-sec-sub">
                Clear, itemized pricing structures covering packing materials, skilled labor, transit vehicles, and loading/unloading assistance.
            </p>

            <div class="pune-adi-table-wrapper">
                <table class="pune-adi-pricing-table">
                    <thead>
                        <tr>
                            <th>Relocation Scope</th>
                            <th>Packaging Material Specs</th>
                            <th>Transport Carrier Allocated</th>
                            <th>Estimated Tariff</th>
                            <th>Transit Timeline</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 BHK Apartment Complete Move</strong></td>
                            <td>Virgin bubble wrap, 5-ply cartons, protective stretch film</td>
                            <td>Tata 407 / 14ft Covered Container</td>
                            <td><span class="pune-adi-pricing-badge">₹18,500 - ₹28,000</span></td>
                            <td>3 - 4 Days</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Executive Household</strong></td>
                            <td>5-layer protective wrapping, sofa covers, mattress jackets</td>
                            <td>17ft Dedicated Closed Container</td>
                            <td><span class="pune-adi-pricing-badge">₹26,000 - ₹42,000</span></td>
                            <td>3 - 4 Days Door-to-Door</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK Spacious Residence</strong></td>
                            <td>Full wooden crating for crockery &amp; TV, edge protectors</td>
                            <td>19ft Dedicated Metal Container</td>
                            <td><span class="pune-adi-pricing-badge">₹36,000 - ₹62,000</span></td>
                            <td>4 - 5 Days Door-to-Door</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Independent Villa</strong></td>
                            <td>Heavy custom timber crating, wardrobe boxes, blanket cushioning</td>
                            <td>22ft High-Cube Container Truck</td>
                            <td><span class="pune-adi-pricing-badge">₹48,000 - ₹72,000</span></td>
                            <td>4 - 5 Days</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler / Bike Parcel</strong></td>
                            <td>3-tier bubble wrap, foam handlebar pads, wooden palleting</td>
                            <td>Enclosed Shared Auto Carrier</td>
                            <td><span class="pune-adi-pricing-badge">₹4,500 - ₹8,000</span></td>
                            <td>3 - 4 Days</td>
                        </tr>
                        <tr>
                            <td><strong>Car Carrier Transport (Sedan/SUV)</strong></td>
                            <td>Hydraulic car carrier with individual wheel-locking clamps</td>
                            <td>Enclosed Multi-Car Carrier</td>
                            <td><span class="pune-adi-pricing-badge">₹12,500 - ₹22,000</span></td>
                            <td>4 - 6 Days</td>
                        </tr>
                        <tr>
                            <td><strong>Industrial Machinery &amp; Tooling</strong></td>
                            <td>VCI anti-corrosion barrier, custom timber skids, industrial lashing</td>
                            <td>Heavy Flatbed / Container</td>
                            <td><span class="pune-adi-pricing-badge">₹32,000 - ₹88,000</span></td>
                            <td>Scheduled Transit</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="text-align: center; font-size: 0.9rem; color: #64748b;">
                *Standard quotation includes door-to-door transit, loading labor, unloading, and NH toll costs. Optional transit insurance and GST are billed per official statutory regulations.
            </p>
        </div>
    </section>

    <!-- SECTION 3: SPECIALIZED SERVICES -->
    <section class="pune-adi-section">
        <div class="pune-adi-container">
            <h2 class="pune-adi-sec-heading">Specialized Relocation Capabilities on the Pune-Adityapur Route</h2>
            <p class="pune-adi-sec-sub">
                Designed to cater to families, corporate transferees, automotive professionals, and industrial suppliers.
            </p>

            <div class="pune-adi-services-grid">
                <div class="pune-adi-service-card">
                    <i class="fa-solid fa-house-chimney" style="font-size: 2rem; color: var(--pune-adi-accent);"></i>
                    <h3>Complete Household Relocation</h3>
                    <p>
                        Safe, comprehensive shifting of all household items, kitchenware, modular cupboards, and white goods from Pune residential sectors to modern gated societies across Adityapur, Gamharia, and Kadma.
                    </p>
                </div>

                <div class="pune-adi-service-card">
                    <i class="fa-solid fa-industry" style="font-size: 2rem; color: var(--pune-adi-accent);"></i>
                    <h3>Automotive Executive Transfers</h3>
                    <p>
                        Specialized moving solutions compliant with automotive enterprise and corporate reimbursement policies. We issue authentic 100% IBA-approved bills, GST invoices, and itemized packing manifests.
                    </p>
                </div>

                <div class="pune-adi-service-card">
                    <i class="fa-solid fa-gears" style="font-size: 2rem; color: var(--pune-adi-accent);"></i>
                    <h3>Precision Tooling &amp; Spares Logistics</h3>
                    <p>
                        Safe transit of fabrication tooling, lathe machinery, precision instruments, and auto ancillaries connecting Pune-Chakan manufacturing centers to Adityapur Industrial Area Phase I through VII.
                    </p>
                </div>

                <div class="pune-adi-service-card">
                    <i class="fa-solid fa-car-side" style="font-size: 2rem; color: var(--pune-adi-accent);"></i>
                    <h3>Motorcycle &amp; Car Carrier Services</h3>
                    <p>
                        Secure vehicle transit ensuring zero road wear. Two-wheelers receive complete 3-layer protective padding, while four-wheelers are clamped inside specialized hydraulic car carrier vehicles.
                    </p>
                </div>
            </div>

            <!-- TWO COLUMN STORY: PACKAGING DEFENSE -->
            <div class="pune-adi-two-col">
                <div class="pune-adi-two-col-text">
                    <h2>Advanced 5-Layer Defensive Packaging Standards</h2>
                    <p>
                        Traversing 1,560 km across the Deccan plateau, Central India, and eastern hill terrain requires packaging that withstands prolonged highway vibrations, thermal swings, and variable weather. Shree Ashirwad Packers and Movers implements a scientifically designed 5-stage packaging protocol:
                    </p>
                    <ul style="padding-left: 20px; color: #334155;">
                        <li><strong>Layer 1 (Scratch-Resistant Barrier):</strong> Virgin micro-bubble film directly adhered to glossy surfaces, polished wood, LED TV displays, and glass tabletops.</li>
                        <li><strong>Layer 2 (Impact Absorption):</strong> High-density expanded polyethylene (EPE) foam dampening road shocks and transit vibrations.</li>
                        <li><strong>Layer 3 (Structural Edge Guards):</strong> Heavy-gauge reinforced corrugated corner angles protecting vulnerable edges of tables, almirahs, and washing machines.</li>
                        <li><strong>Layer 4 (Outer Box Fortification):</strong> Heavy 5-ply kraft paper boxes tailored to kitchenware, books, and crockery, taped securely with branded high-tack tape.</li>
                        <li><strong>Layer 5 (All-Weather Shrink Shield):</strong> Heavy LDPE stretch wrap creating an impenetrable shield against rain, moisture, and road dust during transit.</li>
                    </ul>
                </div>
                <div class="pune-adi-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg" alt="Goods Inspection and Quality Packaging for Pune to Adityapur Move" title="Intercity Goods Inspection">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: ROUTE MILESTONES & TRANSIT ADVISORY -->
    <section class="pune-adi-section pune-adi-section-white">
        <div class="pune-adi-container">
            <h2 class="pune-adi-sec-heading">NH-53 (AH46) Route Breakdown &amp; Driving Logistics</h2>
            <p class="pune-adi-sec-sub">
                Key geographic checkpoints and navigation strategy on the 1,560 km transit connecting Pune to Adityapur.
            </p>

            <div class="pune-adi-process-grid">
                <div class="pune-adi-process-step">
                    <div class="pune-adi-step-num">01</div>
                    <h4>Pune to Nagpur (720 km)</h4>
                    <p>Exiting via Shikrapur and Ahmednagar, cruising across Vidarbha on the Samruddhi Mahamarg / NH-53 toward Nagpur.</p>
                </div>

                <div class="pune-adi-process-step">
                    <div class="pune-adi-step-num">02</div>
                    <h4>Nagpur to Raipur (290 km)</h4>
                    <p>Traversing through Bhandara and Durg-Bhilai industrial corridor on NH-53 into the Chhattisgarh state capital of Raipur.</p>
                </div>

                <div class="pune-adi-process-step">
                    <div class="pune-adi-step-num">03</div>
                    <h4>Raipur to Sambalpur &amp; Rourkela (390 km)</h4>
                    <p>Crossing into Odisha past Bargarh, continuing through the steel manufacturing heartland of Rourkela.</p>
                </div>

                <div class="pune-adi-process-step">
                    <div class="pune-adi-step-num">04</div>
                    <h4>Rourkela to Adityapur Delivery (160 km)</h4>
                    <p>Crossing into Jharkhand past Chaibasa, entering Adityapur via Tata-Kandra Road directly to your doorstep.</p>
                </div>
            </div>

            <!-- TWO COLUMN STORY: SOFA AND FURNITURE CARE -->
            <div class="pune-adi-two-col" style="margin-top: 45px;">
                <div class="pune-adi-two-col-text">
                    <h2>Precision Furniture Dismantling &amp; Structural Care</h2>
                    <p>
                        High-rise apartment relocations in Pune present distinct operational challenges, including narrow stairwells, service elevator weight limits, and sensitive flooring. Transporting large modular wardrobes, king-size hydraulic beds, and glass dining tables intact frequently leads to joint loosening or accidental damage over long interstate transits.
                    </p>
                    <p>
                        At Shree Ashirwad Packers and Movers, our team includes professional carpenters equipped with precision power tools. We systematically label and dismantle large furniture pieces before packing each panel in protective padding and bubble wrap. Hardware fittings (screws, dowels, brackets) are secured in labeled heavy-gauge polybags and taped to the corresponding furniture structure.
                    </p>
                    <p>
                        Upon delivery to your new home in Adityapur or Gamharia, our technicians reassemble every dismantled unit, verify alignment and hydraulic functioning, and place each piece in its intended room.
                    </p>
                </div>
                <div class="pune-adi-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/sofa-furniture-protective-packing-ranchi.jpg" alt="Sofa and Furniture Protective Packing for Pune to Adityapur Move" title="Protective Sofa and Furniture Packing">
                </div>
            </div>

            <!-- TWO COLUMN STORY: LOCALITIES & BIKE TRANSPORT -->
            <div class="pune-adi-two-col" style="margin-top: 45px;">
                <div class="pune-adi-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Two Wheeler Motorcycle Packing for Pune to Adityapur Move" title="Motorcycle Packing and Shifting">
                </div>
                <div class="pune-adi-two-col-text">
                    <h2>Full Doorstep Coverage Across Pune &amp; Adityapur</h2>
                    <p>
                        Our operational network covers every single street, housing colony, and industrial phase across both cities. In Pune, our moving teams operate daily across Hinjawadi, Pimpri-Chinchwad, Bhosari, Chakan, Talegaon, Hadapsar, Magarpatta, Viman Nagar, Kharadi, Kothrud, Baner, Wakad, and Pimple Saudagar.
                    </p>
                    <p>
                        In Adityapur, we deliver to all major residential and industrial sectors: S-Type Colony, Gamharia, Asangi, Majhitola, Dindli Enclave, Saldih, Toll Bridge area, and the residential quarters surrounding the NIT Jamshedpur campus. We also coordinate industrial deliveries directly into Industrial Area Phase I through VII.
                    </p>
                    <p>
                        Our movers utilize hydraulic trolley lifters, heavy-duty nylon webbing, and padded furniture blankets to navigate multi-story staircases and apartment elevators without scratching hallway walls or damaging doorway frames. Once inside your new flat or bungalow in Adityapur, our team unpacks fragile kitchen cartons upon request, disposes of packing debris cleanly, and places heavy almirahs and sofas exactly where you desire.
                    </p>
                    <p>
                        With 100% genuine IBA-approved billing, GST invoices, and comprehensive transit risk insurance, corporate transferees, business owners, and local families enjoy total peace of mind throughout their interstate relocation between Maharashtra and Jharkhand.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: FREQUENTLY ASKED QUESTIONS -->
    <section class="pune-adi-section">
        <div class="pune-adi-container">
            <h2 class="pune-adi-sec-heading">Frequently Asked Questions</h2>
            <p class="pune-adi-sec-sub">
                Clear answers to common questions about relocating from Pune to Adityapur.
            </p>

            <div class="pune-adi-faq-list">
                <div class="pune-adi-faq-item">
                    <div class="pune-adi-faq-question">
                        <span>What are the relocation charges from Pune to Adityapur?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="pune-adi-faq-answer">
                        Household relocation charges from Pune to Adityapur range from ₹18,500 to ₹28,000 for a 1 BHK flat, ₹26,000 to ₹42,000 for a 2 BHK apartment, and ₹36,000 to ₹62,000 for a 3 BHK family residence. The estimate covers comprehensive 5-layer protective packing, loading in Pune high-rises, transit via NH-53, interstate toll fees, unloading, and room positioning in Adityapur.
                    </div>
                </div>

                <div class="pune-adi-faq-item">
                    <div class="pune-adi-faq-question">
                        <span>How much travel time is required between Pune and Adityapur?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="pune-adi-faq-answer">
                        The highway distance is approximately 1,560 km via NH-53 (Asian Highway 46) through Nagpur, Raipur, Sambalpur, and Rourkela into Adityapur. Dedicated closed container trucks cover this cross-country corridor in 34 to 42 hours, delivering dependable 3 to 4-day door-to-door transit.
                    </div>
                </div>

                <div class="pune-adi-faq-item">
                    <div class="pune-adi-faq-question">
                        <span>Do you furnish IBA-approved bills for automobile corporate claims?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="pune-adi-faq-answer">
                        Yes, we regularly provide 100% authentic IBA-approved bills, GST money receipts, itemized packing lists, and vehicle transit receipts fully valid for employee relocation allowance claims across Tata Motors, automotive Tier-1 ancillaries, IT corporates, and engineering enterprises.
                    </div>
                </div>

                <div class="pune-adi-faq-item">
                    <div class="pune-adi-faq-question">
                        <span>Can you transport my motorcycle or car safely from Pune to Adityapur?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="pune-adi-faq-answer">
                        Yes, two-wheelers are wrapped in 3 layers of protective bubble wrap and foam cushioning with mirrors dismantled and lashed inside enclosed container trucks. Four-wheelers are moved via enclosed hydraulic car carrier trucks with wheel-locking clamps.
                    </div>
                </div>

                <div class="pune-adi-faq-item">
                    <div class="pune-adi-faq-question">
                        <span>How do you protect fragile items and electronic appliances over 1,560 km?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="pune-adi-faq-answer">
                        We deploy a comprehensive 5-layer packing defense: virgin micro-bubble film, vibration-dampening EPE foam, heavy corrugated edge corner guards, 5-ply kraft boxes, and waterproof LDPE stretch wrap to safeguard against highway jolts and weather changes over the 1,560 km cross-country transit.
                    </div>
                </div>

                <div class="pune-adi-faq-item">
                    <div class="pune-adi-faq-question">
                        <span>Which localities in Pune and Adityapur do you service?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="pune-adi-faq-answer">
                        In Pune, we pack across Hinjawadi, Pimpri-Chinchwad, Bhosari, Chakan, Talegaon, Hadapsar, Viman Nagar, Kothrud, Baner, and Wakad. In Adityapur, we deliver to S-Type Colony, Gamharia, Asangi, Majhitola, Dindli Enclave, Saldih, Toll Bridge area, and Industrial Area Phases I-VII.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: CLUSTER NAVIGATION MODULE -->
    <section class="pune-adi-section pune-adi-section-white">
        <div class="pune-adi-container">
            <h2 class="pune-adi-sec-heading">Explore Connected Relocation Corridors</h2>
            <p class="pune-adi-sec-sub">
                Seamless internal navigation across our comprehensive network of industrial and regional shifting routes.
            </p>

            <div class="pune-adi-cluster-nav">
                <h3 style="font-size: 1.15rem; color: var(--pune-adi-primary); margin-bottom: 5px;">Key Interstate &amp; Regional Corridors Connected to Adityapur</h3>
                <div class="pune-adi-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-adityapur" class="pune-adi-cluster-link">
                        <span>Adityapur Main Hub</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-pune-packers-and-movers" class="pune-adi-cluster-link">
                        <span>Adityapur to Pune</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/kolkata-to-adityapur-packers-and-movers" class="pune-adi-cluster-link">
                        <span>Kolkata to Adityapur</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/delhi-to-adityapur-packers-and-movers" class="pune-adi-cluster-link">
                        <span>Delhi to Adityapur</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/pune-to-jamshedpur-packers-and-movers" class="pune-adi-cluster-link">
                        <span>Pune to Jamshedpur</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/pune-to-ranchi-packers-and-movers" class="pune-adi-cluster-link">
                        <span>Pune to Ranchi</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-chaibasa-packers-and-movers" class="pune-adi-cluster-link">
                        <span>Adityapur to Chaibasa</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-dhanbad-packers-and-movers" class="pune-adi-cluster-link">
                        <span>Adityapur to Dhanbad</span>
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
