<?php
/**
 * Page Name: Patna to Adityapur Packers and Movers
 * Route Slug: patna-to-adityapur-packers-and-movers
 * Group: Route 17 - Adityapur Industrial Corridor (Inbound)
 * Meta Title: Packers and Movers Patna to Adityapur | Safe Shifting
 * Meta Description: Top packers and movers from Patna to Adityapur. 460 km via NH-20, 5-layer packing, household & corporate moving. Call 8409531615.
 * Focus Keywords: patna to adityapur packers and movers, packers and movers patna to adityapur, house shifting patna to adityapur, interstate moving patna adityapur, car transport patna adityapur, bike parcel patna adityapur
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Packers and Movers Patna to Adityapur | Safe Shifting";
$page_desc = "Top packers and movers from Patna to Adityapur. 460 km via NH-20, 5-layer packing, household & corporate moving. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/patna-to-adityapur-packers-and-movers";
$route_origin = "Patna";
$route_destination = "Adityapur";

// Open Graph
$og_title = "Packers and Movers Patna to Adityapur | Safe Shifting";
$og_description = "Top packers and movers from Patna to Adityapur. 460 km via NH-20, 5-layer packing, household & corporate moving. Call 8409531615.";
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
    <meta name="keywords" content="patna to adityapur packers and movers, packers and movers patna to adityapur, house shifting patna to adityapur, interstate moving patna adityapur, car transport patna adityapur, bike parcel patna adityapur">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-BR">
    <meta name="geo.placename" content="Patna">

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
        "name": "Shree Ashirwad Packers and Movers Patna to Adityapur",
        "image": "https://www.shreeashirwadpackers.com/images/safe-transit-container-truck-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "₹11,000 - ₹52,000",
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
            "reviewCount": "242"
        },
        "areaServed": [
            { "@type": "City", "name": "Patna" },
            { "@type": "City", "name": "Adityapur" },
            { "@type": "AdministrativeArea", "name": "Bihar" },
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
                "name": "Patna to Adityapur",
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
                "name": "What are the shifting charges from Patna to Adityapur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Household relocation charges from Patna to Adityapur range from ₹11,000 to ₹17,500 for a 1 BHK flat, ₹16,000 to ₹25,500 for a 2 BHK apartment, and ₹21,500 to ₹38,000 for a 3 BHK family residence. The estimate covers comprehensive 5-layer protective packing, loading in Patna, transit via NH-20, toll fees, unloading, and room setup in Adityapur."
                }
            },
            {
                "@type": "Question",
                "name": "How much travel time is required between Patna and Adityapur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The road distance is approximately 460 km via NH-22 to Gaya/Dobhi and NH-20 through Barhi, Hazaribagh, Ramgarh, and Ranchi into Adityapur. Dedicated closed container trucks cover the corridor in 10 to 12 hours, providing 24-hour door-to-door delivery."
                }
            },
            {
                "@type": "Question",
                "name": "Do you furnish IBA-approved bills for government and PSU employee claims?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we issue 100% genuine IBA-approved consignment bills, computerized inventory manifests, GST invoices, and transit insurance policies accepted by state government secretariats, public sector banks, railway divisions, and central ministries."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport my two-wheeler or car safely from Patna to Adityapur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, motorcycles and scooters are wrapped in 3-layer bubble and foam padding with rear-view mirrors detached, then secured using ratchet straps inside closed containers. Four-wheelers are shipped in enclosed hydraulic car carrier trucks."
                }
            },
            {
                "@type": "Question",
                "name": "How is fragile kitchenware and home electronics safeguarded against highway bumps?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy a specialized 5-tier packaging defense including virgin bubble film, vibration-dampening EPE foam, heavy corrugated corner angles, 5-ply export kraft cartons, and waterproof stretch wrap. Fragile items like LED TVs and chinaware receive custom wooden crating."
                }
            },
            {
                "@type": "Question",
                "name": "Which residential neighborhoods in Patna and Adityapur do you service?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Patna, we pack across Kankarbagh, Boring Road, Bailey Road, Danapur, Rajendra Nagar, Patliputra Colony, and Fraser Road. In Adityapur, we deliver to S-Type Colony, Gamharia, Asangi, Majhitola, Dindli Enclave, Saldih, Toll Bridge area, and Industrial Area Phases I-VII."
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
            { "@type": "City", "name": "Patna" },
            { "@type": "City", "name": "Adityapur" }
        ],
        "description": "Professional interstate moving services connecting Patna capital city in Bihar to Adityapur industrial hub in Jharkhand. Household shifting, corporate moving, car transport, and industrial cargo.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "11000",
            "priceValidUntil": "2027-12-31"
        }
    }
    </script>

    <style>
        /* Scoped styles for Patna to Adityapur Route */
        :root {
            --pat-adi-primary: #15803d;
            --pat-adi-secondary: #166534;
            --pat-adi-accent: #16a34a;
            --pat-adi-accent-hover: #15803d;
            --pat-adi-bg: #f8fafc;
            --pat-adi-card: #ffffff;
            --pat-adi-border: #e2e8f0;
            --pat-adi-text: #1e293b;
            --pat-adi-muted: #64748b;
        }

        .pat-adi-wrapper {
            font-family: 'Inter', sans-serif;
            color: var(--pat-adi-text);
            background-color: var(--pat-adi-bg);
            line-height: 1.7;
        }

        .pat-adi-hero {
            background: linear-gradient(135deg, rgba(21, 128, 61, 0.95), rgba(22, 101, 52, 0.92)), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 65px 0 55px;
        }

        .pat-adi-hero-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .pat-adi-badge-row {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 20px;
        }

        .pat-adi-badge {
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

        .pat-adi-hero h1 {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .pat-adi-hero p {
            font-size: 1.12rem;
            max-width: 840px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .pat-adi-cta-row {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .btn-pat-adi-call {
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

        .btn-pat-adi-call:hover {
            background: #d97706;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .btn-pat-adi-wa {
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

        .btn-pat-adi-wa:hover {
            background: #1eb855;
            transform: translateY(-2px);
            color: #ffffff;
        }

        .pat-adi-section {
            padding: 60px 0;
        }

        .pat-adi-section-white {
            background-color: #ffffff;
        }

        .pat-adi-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .pat-adi-sec-heading {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            font-weight: 700;
            color: var(--pat-adi-primary);
            margin-bottom: 15px;
            text-align: center;
        }

        .pat-adi-sec-sub {
            text-align: center;
            max-width: 750px;
            margin: 0 auto 40px;
            color: #475569;
            font-size: 1.05rem;
        }

        .pat-adi-logistics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 24px;
            margin-bottom: 45px;
        }

        .pat-adi-logistics-card {
            background: #ffffff;
            border: 1px solid var(--pat-adi-border);
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
            display: flex;
            gap: 16px;
            align-items: flex-start;
        }

        .pat-adi-logistics-icon {
            background: #dcfce7;
            color: var(--pat-adi-primary);
            width: 48px;
            height: 48px;
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .pat-adi-logistics-info h3 {
            font-size: 1.1rem;
            font-weight: 700;
            margin-bottom: 6px;
            color: var(--pat-adi-primary);
        }

        .pat-adi-logistics-info p {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }

        .pat-adi-two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
            margin-top: 30px;
        }

        .pat-adi-two-col-text h2 {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.85rem;
            font-weight: 700;
            color: var(--pat-adi-primary);
            margin-bottom: 18px;
            line-height: 1.3;
        }

        .pat-adi-two-col-text p {
            margin-bottom: 16px;
            color: #334155;
            font-size: 1rem;
        }

        .pat-adi-img-box {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            border: 1px solid var(--pat-adi-border);
        }

        .pat-adi-img-box img {
            width: 100%;
            height: 340px;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .pat-adi-img-box img:hover {
            transform: scale(1.02);
        }

        /* Pricing Table */
        .pat-adi-table-wrapper {
            overflow-x: auto;
            border-radius: 12px;
            border: 1px solid var(--pat-adi-border);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
            margin-bottom: 30px;
        }

        .pat-adi-pricing-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            text-align: left;
            font-size: 0.95rem;
        }

        .pat-adi-pricing-table th {
            background: var(--pat-adi-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            font-family: 'Montserrat', sans-serif;
        }

        .pat-adi-pricing-table td {
            padding: 16px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
        }

        .pat-adi-pricing-table tr:hover {
            background-color: #f8fafc;
        }

        .pat-adi-pricing-badge {
            background: #ecfdf5;
            color: #065f46;
            padding: 4px 10px;
            border-radius: 6px;
            font-weight: 700;
            font-size: 0.9rem;
        }

        /* Services Grid */
        .pat-adi-services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            margin-bottom: 45px;
        }

        .pat-adi-service-card {
            background: #ffffff;
            border: 1px solid var(--pat-adi-border);
            border-radius: 14px;
            padding: 30px 24px;
            transition: all 0.3s ease;
        }

        .pat-adi-service-card:hover {
            transform: translateY(-5px);
            border-color: var(--pat-adi-accent);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
        }

        .pat-adi-service-card h3 {
            font-size: 1.25rem;
            color: var(--pat-adi-primary);
            margin: 15px 0 10px;
            font-weight: 700;
        }

        .pat-adi-service-card p {
            font-size: 0.95rem;
            color: #475569;
            line-height: 1.6;
        }

        /* Process Steps */
        .pat-adi-process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .pat-adi-process-step {
            background: #ffffff;
            border-radius: 12px;
            padding: 24px;
            border-left: 4px solid var(--pat-adi-accent);
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.03);
        }

        .pat-adi-step-num {
            font-family: 'Montserrat', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--pat-adi-accent);
            margin-bottom: 8px;
        }

        .pat-adi-process-step h4 {
            font-size: 1.1rem;
            color: var(--pat-adi-primary);
            margin-bottom: 8px;
            font-weight: 700;
        }

        .pat-adi-process-step p {
            font-size: 0.92rem;
            color: #64748b;
            margin: 0;
        }

        /* FAQ Accordion */
        .pat-adi-faq-list {
            max-width: 900px;
            margin: 0 auto;
        }

        .pat-adi-faq-item {
            background: #ffffff;
            border: 1px solid var(--pat-adi-border);
            border-radius: 10px;
            margin-bottom: 14px;
            overflow: hidden;
        }

        .pat-adi-faq-question {
            padding: 18px 22px;
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--pat-adi-primary);
            background: #ffffff;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .pat-adi-faq-answer {
            padding: 0 22px 20px;
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.7;
        }

        /* Cluster Navigation */
        .pat-adi-cluster-nav {
            background: #f0fdf4;
            border-radius: 14px;
            padding: 30px;
            margin-top: 30px;
            border: 1px solid #dcfce7;
        }

        .pat-adi-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }

        .pat-adi-cluster-link {
            background: #ffffff;
            border: 1px solid #bbf7d0;
            padding: 12px 18px;
            border-radius: 8px;
            text-decoration: none;
            color: var(--pat-adi-primary);
            font-weight: 600;
            font-size: 0.92rem;
            display: flex;
            align-items: center;
            justify-content: space-between;
            transition: all 0.25s ease;
        }

        .pat-adi-cluster-link:hover {
            background: var(--pat-adi-primary);
            color: #ffffff;
            border-color: var(--pat-adi-primary);
            transform: translateY(-2px);
        }

        @media (max-width: 768px) {
            .pat-adi-hero h1 {
                font-size: 1.85rem;
            }
            .pat-adi-two-col {
                grid-template-columns: 1fr;
                gap: 25px;
            }
            .pat-adi-cta-row {
                flex-direction: column;
            }
            .btn-pat-adi-call, .btn-pat-adi-wa {
                width: 100%;
                justify-content: center;
            }
            .pat-adi-img-box img {
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

<div class="pat-adi-wrapper">

    <!-- HERO SECTION -->
    <header class="pat-adi-hero">
        <div class="pat-adi-hero-container">
            <div class="pat-adi-badge-row">
                <span class="pat-adi-badge"><i class="fa-solid fa-truck-fast"></i> 460 km Smooth NH-20 Highway</span>
                <span class="pat-adi-badge"><i class="fa-solid fa-shield-halved"></i> 100% In-Transit Risk Cover</span>
                <span class="pat-adi-badge"><i class="fa-solid fa-city"></i> Patna to Adityapur Auto Hub</span>
                <span class="pat-adi-badge"><i class="fa-solid fa-file-invoice"></i> IBA Approved Billing Standard</span>
            </div>
            <h1>Packers and Movers Patna to Adityapur</h1>
            <p>
                Professional inbound interstate relocation services connecting the capital city of Patna to Asia’s premier auto-ancillary and engineering manufacturing center in Adityapur. Dependable household shifting, PSU and banking employee relocations, precision tooling logistics, and damage-free vehicle delivery across NH-22 and NH-20 via Gaya, Barhi, Hazaribagh, and Ranchi.
            </p>
            <div class="pat-adi-cta-row">
                <a href="tel:+918409531615" class="btn-pat-adi-call" title="Call Shree Ashirwad Packers Adityapur">
                    <i class="fa-solid fa-phone"></i> Call 084095 31615
                </a>
                <a href="https://api.whatsapp.com/send?phone=918409531615&amp;text=Hi%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Patna%20to%20Adityapur%20shifting." class="btn-pat-adi-wa" target="_blank" rel="noopener" title="Get Instant WhatsApp Quote">
                    <i class="fa-brands fa-whatsapp"></i> WhatsApp Instant Quote
                </a>
            </div>
        </div>
    </header>

    <!-- SECTION 1: ROUTE LOGISTICS & HIGHWAY BREAKDOWN -->
    <section class="pat-adi-section">
        <div class="pat-adi-container">
            <h2 class="pat-adi-sec-heading">Patna to Adityapur Inbound Logistics Architecture</h2>
            <p class="pat-adi-sec-sub">
                Comprehensive operational blueprint of the 460 km interstate transit connecting Bihar's capital to Seraikela-Kharsawan.
            </p>

            <div class="pat-adi-logistics-grid">
                <div class="pat-adi-logistics-card">
                    <div class="pat-adi-logistics-icon"><i class="fa-solid fa-road"></i></div>
                    <div class="pat-adi-logistics-info">
                        <h3>National Highway Route</h3>
                        <p>NH-22 to Dobhi/Gaya, merging onto NH-20 through Barhi, Hazaribagh, Ramgarh, and Ranchi Ring Road into Adityapur.</p>
                    </div>
                </div>

                <div class="pat-adi-logistics-card">
                    <div class="pat-adi-logistics-icon"><i class="fa-solid fa-clock"></i></div>
                    <div class="pat-adi-logistics-info">
                        <h3>Transit Duration</h3>
                        <p>460 km total distance; dedicated closed container fleet reaches Adityapur in 10 to 12 hours.</p>
                    </div>
                </div>

                <div class="pat-adi-logistics-card">
                    <div class="pat-adi-logistics-icon"><i class="fa-solid fa-clipboard-check"></i></div>
                    <div class="pat-adi-logistics-info">
                        <h3>Border Clearance</h3>
                        <p>Direct electronic passage at Rajauli/Chauparan border with automated FASTag tolls ensuring seamless transit.</p>
                    </div>
                </div>

                <div class="pat-adi-logistics-card">
                    <div class="pat-adi-logistics-icon"><i class="fa-solid fa-box-check"></i></div>
                    <div class="pat-adi-logistics-info">
                        <h3>5-Tier Packing Armor</h3>
                        <p>Virgin bubble wrap, EPE foam sheets, corrugated corner angles, 5-ply cartons, and waterproof stretch wrap.</p>
                    </div>
                </div>
            </div>

            <!-- TWO COLUMN STORY: CAPITAL CITY TO INDUSTRIAL CLUSTER -->
            <div class="pat-adi-two-col">
                <div class="pat-adi-two-col-text">
                    <h2>Connecting Bihar's Capital with Jharkhand's Manufacturing Powerhouse</h2>
                    <p>
                        The southbound economic corridor from Patna to Adityapur links the administrative, commercial, and educational center of Bihar with the industrial and engineering capital of Jharkhand. Adityapur is celebrated throughout Asia as an unparalleled auto-ancillary ecosystem, housing over 1,200 operating industrial units in Seraikela-Kharsawan district. On the other end, Patna serves as the historical heart and administrative nerve center of Bihar.
                    </p>
                    <p>
                        Relocations along this 460 km highway corridor are driven by banking personnel, railway engineers, defense retirees, academic professionals joining NIT Jamshedpur, and entrepreneurs setting up auto-component supply lines in Adityapur Industrial Area Phase I through VII. Families moving from residential localities in Kankarbagh, Boring Road, and Bailey Road seek trustworthy, end-to-end relocation services.
                    </p>
                    <p>
                        Shree Ashirwad Packers and Movers delivers a tailored moving solution for this corridor. Our sealed container trucks traverse the NH-20 expressway with precision, protecting valuable furniture, kitchenware, and sensitive electronic goods from highway vibrations, mountain ghats, and unexpected weather changes.
                    </p>
                </div>
                <div class="pat-adi-img-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble Wrap and Cartons Packing for Patna to Adityapur Move" title="Protective Bubble Wrap Packing">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 2: TRANSPARENT PRICING MATRIX -->
    <section class="pat-adi-section pat-adi-section-white">
        <div class="pat-adi-container">
            <h2 class="pat-adi-sec-heading">Patna to Adityapur Transparent Shifting Tariffs</h2>
            <p class="pat-adi-sec-sub">
                Clear, itemized pricing structures covering packing materials, skilled labor, transit vehicles, and loading/unloading assistance.
            </p>

            <div class="pat-adi-table-wrapper">
                <table class="pat-adi-pricing-table">
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
                            <td><span class="pat-adi-pricing-badge">₹11,000 - ₹17,500</span></td>
                            <td>24 Hours Door-to-Door</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Executive Household</strong></td>
                            <td>5-layer protective wrapping, sofa covers, mattress jackets</td>
                            <td>17ft Dedicated Closed Container</td>
                            <td><span class="pat-adi-pricing-badge">₹16,000 - ₹25,500</span></td>
                            <td>24 - 36 Hours</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK Spacious Residence</strong></td>
                            <td>Full wooden crating for crockery &amp; TV, edge protectors</td>
                            <td>19ft Dedicated Metal Container</td>
                            <td><span class="pat-adi-pricing-badge">₹21,500 - ₹38,000</span></td>
                            <td>24 - 36 Hours</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Independent Villa</strong></td>
                            <td>Heavy custom timber crating, wardrobe boxes, blanket cushioning</td>
                            <td>22ft High-Cube Container Truck</td>
                            <td><span class="pat-adi-pricing-badge">₹29,000 - ₹52,000</span></td>
                            <td>36 - 48 Hours</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler / Bike Parcel</strong></td>
                            <td>3-tier bubble wrap, foam handlebar pads, wooden palleting</td>
                            <td>Enclosed Shared Auto Carrier</td>
                            <td><span class="pat-adi-pricing-badge">₹2,800 - ₹5,200</span></td>
                            <td>24 - 48 Hours</td>
                        </tr>
                        <tr>
                            <td><strong>Car Carrier Transport (Sedan/SUV)</strong></td>
                            <td>Hydraulic car carrier with individual wheel-locking clamps</td>
                            <td>Enclosed Multi-Car Carrier</td>
                            <td><span class="pat-adi-pricing-badge">₹8,500 - ₹15,500</span></td>
                            <td>2 - 3 Days</td>
                        </tr>
                        <tr>
                            <td><strong>Industrial Spares &amp; Machinery</strong></td>
                            <td>VCI anti-corrosion barrier, custom timber skids, industrial lashing</td>
                            <td>Heavy Flatbed / Container</td>
                            <td><span class="pat-adi-pricing-badge">₹18,000 - ₹62,000</span></td>
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
    <section class="pat-adi-section">
        <div class="pat-adi-container">
            <h2 class="pat-adi-sec-heading">Specialized Relocation Capabilities on the Patna-Adityapur Route</h2>
            <p class="pat-adi-sec-sub">
                Designed to cater to families, corporate transferees, PSU staff, and industrial suppliers.
            </p>

            <div class="pat-adi-services-grid">
                <div class="pat-adi-services-card" style="background: #ffffff; border: 1px solid var(--pat-adi-border); border-radius: 14px; padding: 30px 24px; transition: all 0.3s ease;">
                    <i class="fa-solid fa-house-chimney" style="font-size: 2rem; color: var(--pat-adi-accent);"></i>
                    <h3 style="font-size: 1.25rem; color: var(--pat-adi-primary); margin: 15px 0 10px; font-weight: 700;">Complete Household Relocation</h3>
                    <p style="font-size: 0.95rem; color: #475569; line-height: 1.6;">
                        Safe, comprehensive shifting of all household items, kitchenware, modular cupboards, and white goods from Patna to modern gated societies across Adityapur, Gamharia, and Kadma.
                    </p>
                </div>

                <div class="pat-adi-services-card" style="background: #ffffff; border: 1px solid var(--pat-adi-border); border-radius: 14px; padding: 30px 24px; transition: all 0.3s ease;">
                    <i class="fa-solid fa-building-columns" style="font-size: 2rem; color: var(--pat-adi-accent);"></i>
                    <h3 style="font-size: 1.25rem; color: var(--pat-adi-primary); margin: 15px 0 10px; font-weight: 700;">Government &amp; PSU Transfers</h3>
                    <p style="font-size: 0.95rem; color: #475569; line-height: 1.6;">
                        Specialized moving solutions compliant with central and state government reimbursement policies. We issue authentic 100% IBA-approved bills, GST invoices, and itemized packing manifests.
                    </p>
                </div>

                <div class="pat-adi-services-card" style="background: #ffffff; border: 1px solid var(--pat-adi-border); border-radius: 14px; padding: 30px 24px; transition: all 0.3s ease;">
                    <i class="fa-solid fa-gears" style="font-size: 2rem; color: var(--pat-adi-accent);"></i>
                    <h3 style="font-size: 1.25rem; color: var(--pat-adi-primary); margin: 15px 0 10px; font-weight: 700;">Precision Machinery &amp; Tooling</h3>
                    <p style="font-size: 0.95rem; color: #475569; line-height: 1.6;">
                        Safe transit of fabrication tooling, lathe machinery, precision instruments, and auto ancillaries connecting Patna trading centers to Adityapur Industrial Area Phase I through VII.
                    </p>
                </div>

                <div class="pat-adi-services-card" style="background: #ffffff; border: 1px solid var(--pat-adi-border); border-radius: 14px; padding: 30px 24px; transition: all 0.3s ease;">
                    <i class="fa-solid fa-motorcycle" style="font-size: 2rem; color: var(--pat-adi-accent);"></i>
                    <h3 style="font-size: 1.25rem; color: var(--pat-adi-primary); margin: 15px 0 10px; font-weight: 700;">Motorcycle &amp; Car Carrier Services</h3>
                    <p style="font-size: 0.95rem; color: #475569; line-height: 1.6;">
                        Secure vehicle transit ensuring zero road wear. Two-wheelers receive complete 3-layer protective padding, while four-wheelers are clamped inside specialized hydraulic car carrier vehicles.
                    </p>
                </div>
            </div>

            <!-- TWO COLUMN STORY: PACKAGING DEFENSE -->
            <div class="pat-adi-two-col">
                <div class="pat-adi-two-col-text">
                    <h2>Advanced 5-Layer Defensive Packaging Standards</h2>
                    <p>
                        Traversing 460 km across the Chota Nagpur plateau and winding ghat sections demands packaging that withstands road vibrations and sharp bends. Shree Ashirwad Packers and Movers implements a scientifically designed 5-stage packaging protocol:
                    </p>
                    <ul style="padding-left: 20px; color: #334155;">
                        <li><strong>Layer 1 (Scratch-Resistant Barrier):</strong> Virgin micro-bubble film directly adhered to glossy surfaces, polished wood, LED TV displays, and glass tabletops.</li>
                        <li><strong>Layer 2 (Impact Absorption):</strong> High-density expanded polyethylene (EPE) foam dampening road shocks and transit vibrations.</li>
                        <li><strong>Layer 3 (Structural Edge Guards):</strong> Heavy-gauge reinforced corrugated corner angles protecting vulnerable edges of tables, almirahs, and washing machines.</li>
                        <li><strong>Layer 4 (Outer Box Fortification):</strong> Heavy 5-ply kraft paper boxes tailored to kitchenware, books, and crockery, taped securely with branded high-tack tape.</li>
                        <li><strong>Layer 5 (All-Weather Shrink Shield):</strong> Heavy LDPE stretch wrap creating an impenetrable shield against rain, moisture, and road dust during transit.</li>
                    </ul>
                </div>
                <div class="pat-adi-img-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Intercity Moving Truck Loading for Patna to Adityapur Move" title="Intercity Moving Truck Loading">
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 4: ROUTE MILESTONES & TRANSIT ADVISORY -->
    <section class="pat-adi-section pat-adi-section-white">
        <div class="pat-adi-container">
            <h2 class="pat-adi-sec-heading">NH-22 &amp; NH-20 Route Breakdown &amp; Driving Logistics</h2>
            <p class="pat-adi-sec-sub">
                Key geographic checkpoints and navigation strategy on the 460 km transit connecting Patna to Adityapur.
            </p>

            <div class="pat-adi-process-grid">
                <div class="pat-adi-process-step">
                    <div class="pat-adi-step-num">01</div>
                    <h4>Patna to Dobhi / Gaya (125 km)</h4>
                    <p>Exiting Patna via bypass through Jehanabad to Dobhi junction, joining the Grand Trunk Road / NH-19 corridor.</p>
                </div>

                <div class="pat-adi-process-step">
                    <div class="pat-adi-step-num">02</div>
                    <h4>Dobhi to Barhi &amp; Hazaribagh (135 km)</h4>
                    <p>Crossing the Bihar-Jharkhand border at Chauparan, climbing the scenic Chhatabad ghats into Hazaribagh plateau.</p>
                </div>

                <div class="pat-adi-process-step">
                    <div class="pat-adi-step-num">03</div>
                    <h4>Hazaribagh to Ranchi Ring Road (95 km)</h4>
                    <p>Descending through Ramgarh and the famous Ormanjhi expressway, bypassing Ranchi city traffic seamlessly.</p>
                </div>

                <div class="pat-adi-process-step">
                    <div class="pat-adi-step-num">04</div>
                    <h4>Ranchi to Adityapur Delivery (105 km)</h4>
                    <p>Cruising across NH-43 past Bundu and Tamar, entering Adityapur via Tata-Kandra Road directly to your doorstep.</p>
                </div>
            </div>

            <!-- TWO COLUMN STORY: DOUBLE BED DISMANTLING -->
            <div class="pat-adi-two-col" style="margin-top: 45px;">
                <div class="pat-adi-two-col-text">
                    <h2>Precision Furniture Dismantling &amp; Reassembly Service</h2>
                    <p>
                        Transporting large wooden furniture over 460 km requires professional dismantling to prevent structural warping, stripped screw threads, and transit stress fractures. Our moving crew includes experienced carpenters equipped with modern battery-powered tools.
                    </p>
                    <p>
                        We systematically dismantle king-size beds, modular 4-door wardrobes, dressing units, and executive work desks. Each component is labeled and padded with shock-absorbing foam before being wrapped in bubble film. Fasteners and hardware fittings are secured in labeled heavy-gauge polybags and taped to the corresponding furniture structure.
                    </p>
                    <p>
                        Upon delivery to your new home in Adityapur or Gamharia, our technicians reassemble every dismantled unit, verify alignment and hydraulic functioning, and place each piece in its intended room.
                    </p>
                </div>
                <div class="pat-adi-img-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Double Bed Furniture Dismantling for Patna to Adityapur Move" title="Furniture Dismantling and Reassembly">
                </div>
            </div>

            <!-- TWO COLUMN STORY: LOCALITIES & BIKE TRANSPORT -->
            <div class="pat-adi-two-col" style="margin-top: 45px;">
                <div class="pat-adi-img-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Scooter and Motorcycle Safe Transit Packing for Adityapur Shifting" title="Scooter and Motorcycle Packing">
                </div>
                <div class="pat-adi-two-col-text">
                    <h2>Full Doorstep Coverage Across Patna &amp; Adityapur</h2>
                    <p>
                        Our operational network covers every single street, housing colony, and industrial phase across both cities. In Patna, our moving teams operate daily across Kankarbagh, Boring Road, Bailey Road, Danapur Cantt, Rajendra Nagar, Patliputra Colony, Fraser Road, Anisabad, Ashiana Nagar, and Saguna More.
                    </p>
                    <p>
                        In Adityapur, we deliver to all major residential and industrial sectors: S-Type Colony, Gamharia, Asangi, Majhitola, Dindli Enclave, Saldih, Toll Bridge area, and the residential quarters surrounding the NIT Jamshedpur campus. We also coordinate industrial deliveries directly into Industrial Area Phase I through VII.
                    </p>
                    <p>
                        Our movers utilize hydraulic trolley lifters, heavy-duty nylon webbing, and padded furniture blankets to navigate multi-story staircases and apartment elevators without scratching hallway walls or damaging doorway frames. Once inside your new flat or bungalow in Adityapur, our team unpacks fragile kitchen cartons upon request, disposes of packing debris cleanly, and places heavy almirahs and sofas exactly where you desire.
                    </p>
                    <p>
                        With 100% genuine IBA-approved billing, GST invoices, and comprehensive transit risk insurance, corporate transferees, business owners, and local families enjoy total peace of mind throughout their interstate relocation between Bihar and Jharkhand.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 5: FREQUENTLY ASKED QUESTIONS -->
    <section class="pat-adi-section">
        <div class="pat-adi-container">
            <h2 class="pat-adi-sec-heading">Frequently Asked Questions</h2>
            <p class="pat-adi-sec-sub">
                Clear answers to common questions about relocating from Patna to Adityapur.
            </p>

            <div class="pat-adi-faq-list">
                <div class="pat-adi-faq-item">
                    <div class="pat-adi-faq-question">
                        <span>What are the shifting charges from Patna to Adityapur?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="pat-adi-faq-answer">
                        Household relocation charges from Patna to Adityapur range from ₹11,000 to ₹17,500 for a 1 BHK flat, ₹16,000 to ₹25,500 for a 2 BHK apartment, and ₹21,500 to ₹38,000 for a 3 BHK family residence. The estimate covers comprehensive 5-layer protective packing, loading in Patna, transit via NH-20, toll fees, unloading, and room setup in Adityapur.
                    </div>
                </div>

                <div class="pat-adi-faq-item">
                    <div class="pat-adi-faq-question">
                        <span>How much travel time is required between Patna and Adityapur?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="pat-adi-faq-answer">
                        The road distance is approximately 460 km via NH-22 to Gaya/Dobhi and NH-20 through Barhi, Hazaribagh, Ramgarh, and Ranchi into Adityapur. Dedicated closed container trucks cover the corridor in 10 to 12 hours, providing 24-hour door-to-door delivery.
                    </div>
                </div>

                <div class="pat-adi-faq-item">
                    <div class="pat-adi-faq-question">
                        <span>Do you furnish IBA-approved bills for government and PSU employee claims?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="pat-adi-faq-answer">
                        Yes, we issue 100% genuine IBA-approved consignment bills, computerized inventory manifests, GST invoices, and transit insurance policies accepted by state government secretariats, public sector banks, railway divisions, and central ministries.
                    </div>
                </div>

                <div class="pat-adi-faq-item">
                    <div class="pat-adi-faq-question">
                        <span>Can you transport my two-wheeler or car safely from Patna to Adityapur?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="pat-adi-faq-answer">
                        Yes, motorcycles and scooters are wrapped in 3-layer bubble and foam padding with rear-view mirrors detached, then secured using ratchet straps inside closed containers. Four-wheelers are shipped in enclosed hydraulic car carrier trucks.
                    </div>
                </div>

                <div class="pat-adi-faq-item">
                    <div class="pat-adi-faq-question">
                        <span>How is fragile kitchenware and home electronics safeguarded against highway bumps?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="pat-adi-faq-answer">
                        We deploy a specialized 5-tier packaging defense including virgin bubble film, vibration-dampening EPE foam, heavy corrugated corner angles, 5-ply export kraft cartons, and waterproof stretch wrap. Fragile items like LED TVs and chinaware receive custom wooden crating.
                    </div>
                </div>

                <div class="pat-adi-faq-item">
                    <div class="pat-adi-faq-question">
                        <span>Which residential neighborhoods in Patna and Adityapur do you service?</span>
                        <i class="fa-solid fa-chevron-down"></i>
                    </div>
                    <div class="pat-adi-faq-answer">
                        In Patna, we pack across Kankarbagh, Boring Road, Bailey Road, Danapur, Rajendra Nagar, Patliputra Colony, and Fraser Road. In Adityapur, we deliver to S-Type Colony, Gamharia, Asangi, Majhitola, Dindli Enclave, Saldih, Toll Bridge area, and Industrial Area Phases I-VII.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- SECTION 6: CLUSTER NAVIGATION MODULE -->
    <section class="pat-adi-section pat-adi-section-white">
        <div class="pat-adi-container">
            <h2 class="pat-adi-sec-heading">Explore Connected Relocation Corridors</h2>
            <p class="pat-adi-sec-sub">
                Seamless internal navigation across our comprehensive network of industrial and regional shifting routes.
            </p>

            <div class="pat-adi-cluster-nav">
                <h3 style="font-size: 1.15rem; color: var(--pat-adi-primary); margin-bottom: 5px;">Key Interstate &amp; Regional Corridors Connected to Adityapur</h3>
                <div class="pat-adi-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-adityapur" class="pat-adi-cluster-link">
                        <span>Adityapur Main Hub</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-patna-packers-and-movers" class="pat-adi-cluster-link">
                        <span>Adityapur to Patna</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/kolkata-to-adityapur-packers-and-movers" class="pat-adi-cluster-link">
                        <span>Kolkata to Adityapur</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-kolkata-packers-and-movers" class="pat-adi-cluster-link">
                        <span>Adityapur to Kolkata</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/patna-to-jamshedpur-packers-and-movers" class="pat-adi-cluster-link">
                        <span>Patna to Jamshedpur</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/patna-to-ranchi-packers-and-movers" class="pat-adi-cluster-link">
                        <span>Patna to Ranchi</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-jamshedpur-packers-and-movers" class="pat-adi-cluster-link">
                        <span>Adityapur to Jamshedpur</span>
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/adityapur-to-dhanbad-packers-and-movers" class="pat-adi-cluster-link">
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
