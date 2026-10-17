<?php
/**
 * Page Name: Hazaribagh to Dumka Packers and Movers
 * Route Slug: hazaribagh-to-dumka-packers-and-movers
 * Description: Dependable household shifting, paramilitary and university relocation, vehicle transport, and luggage moving from Hazaribagh to Dumka via NH-522 and NH-114A.
 * Focus Keywords: hazaribagh to dumka packers and movers, packers and movers hazaribagh to dumka, house shifting hazaribagh to dumka, car transport hazaribagh to dumka, bike parcel hazaribagh to dumka, military transfer movers dumka
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Hazaribagh to Dumka Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe & fast Hazaribagh to Dumka packers and movers. 215 km transit via NH-522 & NH-114A, 5-layer packing, BSF & govt transfer bills, car carriers. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/hazaribagh-to-dumka-packers-and-movers";
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

    <!-- Scoped CSS for Route 8 (Hazaribagh to Dumka) -->
    <style>
        :root {
            --haz2dum-primary: #1e3a5f;
            --haz2dum-secondary: #0284c7;
            --haz2dum-accent: #f59e0b;
            --haz2dum-accent-light: #fef3c7;
            --haz2dum-dark: #0f172a;
            --haz2dum-gray-bg: #f8fafc;
            --haz2dum-border: #e2e8f0;
            --haz2dum-shadow: 0 10px 25px -5px rgba(30, 58, 95, 0.08), 0 8px 10px -6px rgba(30, 58, 95, 0.04);
        }

        .haz2dum-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 95, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .haz2dum-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .haz2dum-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .haz2dum-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .haz2dum-badge {
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.22);
            color: #ffffff;
            padding: 7px 16px;
            border-radius: 9999px;
            font-size: 0.88rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }

        .haz2dum-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .haz2dum-btn-primary {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: #0f172a;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 14px rgba(245, 158, 11, 0.35);
            transition: all 0.3s ease;
        }

        .haz2dum-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.45);
            color: #0f172a;
        }

        .haz2dum-btn-secondary {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(6px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #ffffff;
            font-weight: 600;
            padding: 14px 28px;
            border-radius: 10px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .haz2dum-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .haz2dum-section {
            padding: 70px 0;
        }

        .haz2dum-section-gray {
            background-color: var(--haz2dum-gray-bg);
        }

        .haz2dum-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .haz2dum-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            color: var(--haz2dum-dark);
            margin-bottom: 16px;
        }

        .haz2dum-heading-center p {
            color: #64748b;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        .haz2dum-strip {
            background: #ffffff;
            border-bottom: 1px solid var(--haz2dum-border);
            padding: 24px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        }

        .haz2dum-strip-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .haz2dum-strip-item {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .haz2dum-strip-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--haz2dum-accent-light);
            color: #b45309;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .haz2dum-strip-text h4 {
            font-size: 0.95rem;
            margin: 0 0 2px 0;
            color: var(--haz2dum-dark);
            font-weight: 700;
        }

        .haz2dum-strip-text p {
            margin: 0;
            font-size: 0.85rem;
            color: #64748b;
        }

        .haz2dum-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            align-items: center;
        }

        .haz2dum-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .haz2dum-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .haz2dum-card {
            background: #ffffff;
            border: 1px solid var(--haz2dum-border);
            border-radius: 12px;
            padding: 30px;
            box-shadow: var(--haz2dum-shadow);
            transition: transform 0.3s ease;
        }

        .haz2dum-card:hover {
            transform: translateY(-5px);
        }

        .haz2dum-card-icon {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            background: #e0f2fe;
            color: var(--haz2dum-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .haz2dum-card h3 {
            font-size: 1.25rem;
            margin-bottom: 12px;
            color: var(--haz2dum-dark);
        }

        .haz2dum-card p {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
        }

        .haz2dum-table-wrap {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--haz2dum-border);
            box-shadow: var(--haz2dum-shadow);
            overflow-x: auto;
            margin-top: 30px;
        }

        .haz2dum-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }

        .haz2dum-table th {
            background: var(--haz2dum-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 600;
        }

        .haz2dum-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--haz2dum-border);
            color: #334155;
        }

        .haz2dum-table tr:last-child td {
            border-bottom: none;
        }

        .haz2dum-table tr:hover td {
            background-color: #f1f5f9;
        }

        .haz2dum-timeline {
            position: relative;
            padding-left: 36px;
            margin-top: 30px;
        }

        .haz2dum-timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 14px;
            width: 3px;
            background: #cbd5e1;
        }

        .haz2dum-timeline-item {
            position: relative;
            margin-bottom: 32px;
        }

        .haz2dum-timeline-dot {
            position: absolute;
            left: -36px;
            top: 4px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--haz2dum-secondary);
            border: 4px solid #ffffff;
            box-shadow: 0 0 0 2px var(--haz2dum-secondary);
        }

        .haz2dum-timeline-content h4 {
            font-size: 1.15rem;
            color: var(--haz2dum-dark);
            margin: 0 0 6px 0;
        }

        .haz2dum-timeline-content p {
            color: #64748b;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.6;
        }

        .haz2dum-img-box {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--haz2dum-shadow);
            border: 1px solid var(--haz2dum-border);
        }

        .haz2dum-img-box img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
        }

        .haz2dum-img-caption {
            padding: 12px 16px;
            background: #ffffff;
            font-size: 0.85rem;
            color: #64748b;
            border-top: 1px solid var(--haz2dum-border);
        }

        .haz2dum-faq-item {
            background: #ffffff;
            border: 1px solid var(--haz2dum-border);
            border-radius: 10px;
            margin-bottom: 16px;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        .haz2dum-faq-item summary {
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--haz2dum-dark);
            cursor: pointer;
            outline: none;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .haz2dum-faq-item summary::after {
            content: '+';
            font-size: 1.3rem;
            color: var(--haz2dum-secondary);
            font-weight: 700;
        }

        .haz2dum-faq-item[open] summary::after {
            content: '\2212';
        }

        .haz2dum-faq-item p {
            margin-top: 14px;
            color: #475569;
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .haz2dum-cta-card {
            background: linear-gradient(135deg, var(--haz2dum-dark) 0%, var(--haz2dum-primary) 100%);
            border-radius: 16px;
            padding: 50px 40px;
            color: #ffffff;
            text-align: center;
            box-shadow: 0 20px 30px rgba(15, 23, 42, 0.2);
        }

        .haz2dum-cta-card h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            margin-bottom: 16px;
        }

        .haz2dum-cta-card p {
            max-width: 650px;
            margin: 0 auto 30px;
            color: #cbd5e1;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        @media (max-width: 991px) {
            .haz2dum-grid-2,
            .haz2dum-grid-3,
            .haz2dum-grid-4 {
                grid-template-columns: 1fr;
            }
            .haz2dum-hero h1 {
                font-size: 2.2rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Hazaribagh to Dumka",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 8,500 - 32,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Matwari Chowk, Main Road",
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
        "areaServed": [
            {
                "@type": "City",
                "name": "Hazaribagh"
            },
            {
                "@type": "City",
                "name": "Dumka"
            }
        ],
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
        }
    }
    </script>

    <!-- Schema 2: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Intercity Relocation and Vehicle Transport",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "telephone": "+918409531615",
            "url": "<?php echo SITE_BASE_URL; ?>"
        },
        "areaServed": {
            "@type": "City",
            "name": "Dumka"
        },
        "description": "Professional household packing, furniture moving, car parcel, and government employee shifting services from Hazaribagh to Dumka.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "8500",
            "availability": "https://schema.org/InStock"
        }
    }
    </script>

    <!-- Schema 3: BreadcrumbList -->
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
                "name": "Packers and Movers Hazaribagh",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazaribagh"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Hazaribagh to Dumka Route",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- Schema 4: FAQPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the road distance and transit time between Hazaribagh and Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The road distance between Hazaribagh and Dumka is approximately 215 km via NH-522, Bagodar, Giridih, and NH-114A. A dedicated closed container truck takes around 5 to 6.5 hours door-to-door."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Hazaribagh to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Shifting costs typically range from Rs 8,500 to 12,500 for a 1 BHK flat, Rs 13,500 to 19,500 for a 2 BHK residence, Rs 18,500 to 26,000 for a 3 BHK home, and Rs 24,000 to 34,000 for villas and large official bungalows."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable documentation for BSF Meru, Police Academy, and State Govt transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% authentic GST invoices, IBA-compliant consignment bilty, packing inventories, and transit insurance receipts fully accepted by defense accounts, Police Academy, VBU faculty, and Jharkhand administrative departments."
                }
            },
            {
                "@type": "Question",
                "name": "Can fragile glass crockery, air conditioners, and LED televisions be shifted safely?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we utilize specialized TV wooden crates, high-density bubble wrap, corner edge protectors, and corrugated boxing to protect sensitive electronic items and breakables from any transit vibration."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Dumka are covered for doorstep delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deliver directly to all parts of Dumka including Tin Bazar, Rasikpur, Dudhani, SP College Road, Dumka Court, Airport Road, and Kathikund."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="haz2dum-hero">
    <div class="container">
        <div class="haz2dum-badge-strip">
            <span class="haz2dum-badge">&#9733; Verified Intercity Route</span>
            <span class="haz2dum-badge">&#9679; 215 KM Highway Corridor</span>
            <span class="haz2dum-badge">&#10004; Dedicated Closed Containers</span>
            <span class="haz2dum-badge">&#128225; Real-Time GPS Tracking</span>
        </div>
        <h1>Hazaribagh to Dumka Packers and Movers Services</h1>
        <p class="lead">Safe, prompt, and certified inter-divisional relocation services from the educational and institutional center of Hazaribagh to the Santhal Pargana sub-capital of Dumka. We deliver 5-layer heavy packaging, dedicated covered container trucks, defense and govt transfer billing, and comprehensive transit insurance.</p>
        <div class="haz2dum-cta-group">
            <a href="tel:+918409531615" class="haz2dum-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call: +91 8409531615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="haz2dum-btn-secondary">Request Free Inspection Quote</a>
        </div>
    </div>
</section>

<!-- Route Quick Overview Strip -->
<section class="haz2dum-strip">
    <div class="container">
        <div class="haz2dum-strip-grid">
            <div class="haz2dum-strip-item">
                <div class="haz2dum-strip-icon">&#128666;</div>
                <div class="haz2dum-strip-text">
                    <h4>Direct Distance</h4>
                    <p>~215 KM via NH-522 &amp; NH-114A</p>
                </div>
            </div>
            <div class="haz2dum-strip-item">
                <div class="haz2dum-strip-icon">&#9201;</div>
                <div class="haz2dum-strip-text">
                    <h4>Transit Time</h4>
                    <p>5 to 6.5 Hours Door-to-Door</p>
                </div>
            </div>
            <div class="haz2dum-strip-item">
                <div class="haz2dum-strip-icon">&#128739;</div>
                <div class="haz2dum-strip-text">
                    <h4>Corridor Route</h4>
                    <p>Via Bagodar, Giridih &amp; Madhupur</p>
                </div>
            </div>
            <div class="haz2dum-strip-item">
                <div class="haz2dum-strip-icon">&#128737;</div>
                <div class="haz2dum-strip-text">
                    <h4>Cargo Security</h4>
                    <p>Sealed Closed Container Trucks</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Narrative Section: Detailed Shifting Process -->
<section class="haz2dum-section">
    <div class="container">
        <div class="haz2dum-grid-2">
            <div>
                <span style="color: var(--haz2dum-secondary); font-weight: 700; text-transform: uppercase; font-size: 0.88rem; letter-spacing: 1px;">North Chotanagpur to Santhal Pargana Link</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--haz2dum-dark); margin: 12px 0 20px;">Reliable Shifting Services from Hazaribagh to Dumka</h2>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 18px;">
                    Shifting family belongings, delicate electronics, and heavy furniture across the 215-kilometer highway corridor from Hazaribagh to Dumka demands strict packing standards and punctual transport execution. Connecting the educational, defense, and administrative center of Hazaribagh with the Santhal Pargana sub-capital of Dumka involves traversing NH-522 through Bishnugarh, joining the Grand Trunk Road (NH-19) at Bagodar, passing Giridih, and continuing along NH-114A into Dumka.
                </p>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 22px;">
                    At Shree Ashirwad Packers and Movers, we specialize in seamless door-to-door relocations for civil servants, defense personnel from BSF Meru, faculty of Vinoba Bhave University (VBU), corporate executives, and private families. Our professional crews manage every phase: expert dismantle of modular beds and wardrobes, 5-layer bubble and corrugated packaging, secure truck loading, and orderly room-wise placement at your new Dumka residence.
                </p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px; font-weight: 500;">
                    <li>Zero-transshipment container vehicles: your goods remain sealed in one truck throughout transit.</li>
                    <li>Official IBA-approved bills, GST invoices, and transit insurance for effortless reimbursement claims.</li>
                    <li>Full tracking with regular driver updates and responsive customer support.</li>
                    <li>Dedicated handling of heavy appliances, sofas, chinaware, and motor vehicles.</li>
                </ul>
            </div>
            <div>
                <div class="haz2dum-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Hazaribagh to Dumka Packers and Movers container truck" title="Closed container truck on Hazaribagh to Dumka relocation route">
                    <div class="haz2dum-img-caption">
                        <strong>Figure 1:</strong> Closed-body dedicated container truck transporting household goods safely along the 215 km Hazaribagh–Dumka corridor.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Highlights & Specialized Services -->
<section class="haz2dum-section haz2dum-section-gray">
    <div class="container">
        <div class="haz2dum-heading-center">
            <h2>Specialized Moving Solutions Tailored for Hazaribagh to Dumka</h2>
            <p>From complete residential relocations to fragile electronics and vehicle carriers, we provide customized solutions engineered for maximum security.</p>
        </div>
        <div class="haz2dum-grid-3">
            <div class="haz2dum-card">
                <div class="dum2gir-card-icon haz2dum-card-icon">&#127968;</div>
                <h3>Complete Home Relocation</h3>
                <p>We pack every household item methodically. Mattresses receive heavy-duty dust covers, glassware is wrapped in bubble film and cellular dividers, and heavy wooden furniture is protected with high-density corrugated sheets.</p>
            </div>
            <div class="dum2gir-card-icon haz2dum-card-icon">&#9878;</div>
            <div class="haz2dum-card">
                <h3>Defense &amp; Paramilitary Relocation</h3>
                <p>We cater to frequent transfers from BSF Meru Camp, Jharkhand Police Training Academy, and Central Armed Police Forces with official paperwork, prioritized loading dates, and complete door-to-quarter shifting assistance.</p>
            </div>
            <div class="dum2gir-card-icon haz2dum-card-icon">&#128663;</div>
            <div class="haz2dum-card">
                <h3>Vehicle Relocation (Car &amp; Bike)</h3>
                <p>Ship your car or motorcycle safely between Hazaribagh and Dumka. We use custom enclosed vehicle haulers and sturdy crating for two-wheelers, safeguarding your vehicle from dust, debris, and road wear.</p>
            </div>
            <div class="dum2gir-card-icon haz2dum-card-icon">&#128230;</div>
            <div class="bok2dum-card">
                <h3>5-Layer High-Grade Packaging</h3>
                <p>We utilize multi-layer protective packaging: bubble wraps, corrugated edge protectors, stretch film, heavy-duty cardboard boxes, and waterproof plastic covers ensuring total defense against weather and highway vibrations.</p>
            </div>
            <div class="dum2gir-card-icon haz2dum-card-icon">&#128196;</div>
            <div class="bok2dum-card">
                <h3>100% Valid GST Billing</h3>
                <p>Transparent and compliant documentation for government and corporate employee transfer claims, including GST invoices, lorry receipts (bilty), transit insurance vouchers, and signed inventory manifests.</p>
            </div>
            <div class="dum2gir-card-icon haz2dum-card-icon">&#128737;</div>
            <div class="bok2dum-card">
                <h3>All-Risk Transit Insurance</h3>
                <p>Comprehensive transit insurance coverage providing total financial security for your goods against highway accidents, unforeseen weather conditions, or handling incidents during transit.</p>
            </div>
        </div>
    </div>
</section>

<!-- Image Showcase Row 1: Packing & Car Transport -->
<section class="haz2dum-section">
    <div class="container">
        <div class="haz2dum-grid-2">
            <div class="haz2dum-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household packaging Hazaribagh to Dumka" title="Professional packaging for Hazaribagh to Dumka move">
                <div class="haz2dum-img-caption">
                    <strong>Figure 2:</strong> Multi-layer bubble wrap and corrugated padding applied to household appliances and furniture before container loading.
                </div>
            </div>
            <div class="haz2dum-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading Hazaribagh to Dumka" title="Vehicle carrier loading Hazaribagh to Dumka">
                <div class="haz2dum-img-caption">
                    <strong>Figure 3:</strong> Secure vehicle loading on specialized car carriers equipped with heavy-duty tire straps and locking wheel ramps.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transparent Pricing Table Section -->
<section class="haz2dum-section haz2dum-section-gray">
    <div class="container">
        <div class="haz2dum-heading-center">
            <h2>Estimated Shifting Charges from Hazaribagh to Dumka</h2>
            <p>We believe in upfront, transparent pricing without hidden extras. Review our indicative moving rates for the 215 km Hazaribagh to Dumka route below.</p>
        </div>
        <div class="haz2dum-table-wrap">
            <table class="haz2dum-table">
                <thead>
                    <tr>
                        <th>Move Type / Household Size</th>
                        <th>Packing Materials &amp; Labor</th>
                        <th>Transport &amp; Fuel Charges</th>
                        <th>Estimated Total (Approx)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Flat / Studio Apartment</strong></td>
                        <td>Rs 3,000 - 4,500</td>
                        <td>Rs 5,500 - 8,000</td>
                        <td><strong>Rs 8,500 - 12,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Residence</strong></td>
                        <td>Rs 5,000 - 7,500</td>
                        <td>Rs 8,500 - 12,000</td>
                        <td><strong>Rs 13,500 - 19,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Spacious Home</strong></td>
                        <td>Rs 7,500 - 10,500</td>
                        <td>Rs 11,000 - 15,500</td>
                        <td><strong>Rs 18,500 - 26,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Villa / Bungalow</strong></td>
                        <td>Rs 10,000 - 14,000</td>
                        <td>Rs 14,000 - 20,000</td>
                        <td><strong>Rs 24,000 - 34,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Bike / Two-Wheeler Transport</strong></td>
                        <td>Rs 1,200 - 1,800</td>
                        <td>Rs 2,000 - 3,200</td>
                        <td><strong>Rs 3,200 - 5,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Car Relocation (Hatchback/Sedan/SUV)</strong></td>
                        <td>Rs 1,500 - 2,500</td>
                        <td>Rs 7,000 - 10,500</td>
                        <td><strong>Rs 8,500 - 13,000</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.88rem; color: #64748b; margin-top: 15px; text-align: center;">
            *Note: Final costs depend on household volume, floor levels, elevator availability, customized crating requirements, and transit insurance selections.
        </p>
    </div>
</section>

<!-- Route Navigation & Highway Profile Section -->
<section class="haz2dum-section">
    <div class="container">
        <div class="haz2dum-grid-2">
            <div>
                <span style="color: var(--haz2dum-secondary); font-weight: 700; text-transform: uppercase; font-size: 0.88rem; letter-spacing: 1px;">Corridor Route Profile &amp; Checkpoints</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--haz2dum-dark); margin: 12px 0 20px;">The 215 KM Journey from Hazaribagh to Dumka</h2>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 18px;">
                    Our drivers follow a tested transit corridor that ensures smooth highway driving and avoids congested town centers. Goods are loaded and secured before departing Hazaribagh on scheduled morning routes.
                </p>
                <div class="haz2dum-timeline">
                    <div class="haz2dum-timeline-item">
                        <div class="haz2dum-timeline-dot"></div>
                        <div class="haz2dum-timeline-content">
                            <h4>Checkpoint 1: Origin Loading in Hazaribagh</h4>
                            <p>Packing and container loading across Korrah, Matwari, Canary Hill, BSF Meru, and VBU quarters before entering NH-522 heading east.</p>
                        </div>
                    </div>
                    <div class="haz2dum-timeline-item">
                        <div class="haz2dum-timeline-dot"></div>
                        <div class="haz2dum-timeline-content">
                            <h4>Checkpoint 2: Bagodar &amp; Grand Trunk Road Link</h4>
                            <p>Smooth four-lane transit along the Grand Trunk Road (NH-19) connecting past Bagodar junction towards Giridih.</p>
                        </div>
                    </div>
                    <div class="haz2dum-timeline-item">
                        <div class="haz2dum-timeline-dot"></div>
                        <div class="haz2dum-timeline-content">
                            <h4>Checkpoint 3: Giridih Bypass &amp; Madhupur Crossroad</h4>
                            <p>Bypassing downtown Giridih and crossing towards Madhupur along NH-114A, where drivers inspect cargo lashings and container door seals.</p>
                        </div>
                    </div>
                    <div class="haz2dum-timeline-item">
                        <div class="haz2dum-timeline-dot"></div>
                        <div class="haz2dum-timeline-content">
                            <h4>Checkpoint 4: Doorstep Delivery in Dumka</h4>
                            <p>Arrival across Tin Bazar, Rasikpur, Dudhani, SP College Road, and Dumka Court, followed by unboxing and furniture placement.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="haz2dum-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and furniture setup in Dumka" title="Careful room-by-room setup in Dumka">
                    <div class="haz2dum-img-caption">
                        <strong>Figure 4:</strong> Skilled movers carrying out careful unloading, carton unboxing, and furniture assembly at your destination residence in Dumka.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Shifting Profiles Section -->
<section class="haz2dum-section haz2dum-section-gray">
    <div class="container">
        <div class="haz2dum-heading-center">
            <h2>Specialized Relocation Categories Handled on the Hazaribagh to Dumka Route</h2>
            <p>We tailor every relocation according to client needs, ensuring smooth transitions for families, administrative officials, and defense personnel.</p>
        </div>
        <div class="haz2dum-grid-3">
            <div class="haz2dum-card">
                <div class="dum2gir-card-icon haz2dum-card-icon">&#9878;</div>
                <h3>BSF &amp; Police Academy Personnel Moves</h3>
                <p>Hazaribagh houses BSF Meru Camp and the Jharkhand Police Academy. We routinely handle official transfers of defense and police officers to Santhal Pargana with approved IBA documentation, timely dispatch, and safe handling of personal and official goods.</p>
            </div>
            <div class="dum2gir-card-icon haz2dum-card-icon">&#127891;</div>
            <div class="haz2dum-card">
                <h3>VBU Faculty &amp; Academic Staff Relocation</h3>
                <p>Vinoba Bhave University faculty members and administrators transferring to S.P. College or divisional educational boards in Dumka receive customized packaging for delicate instruments, reference libraries, and expensive modular home setups.</p>
            </div>
            <div class="dum2gir-card-icon haz2dum-card-icon">&#128188;</div>
            <div class="haz2dum-card">
                <h3>Government Secretarial &amp; Banking Staff</h3>
                <p>Frequent inter-district transfers between Hazaribagh divisional offices and Dumka Commissionerate require reliable documentation. We provide verified GST bills, signed consignment receipts, and door-to-door shifting that fits statutory reimbursement frameworks.</p>
            </div>
        </div>
    </div>
</section>

<!-- Neighborhood Pickup & Delivery Directory -->
<section class="haz2dum-section">
    <div class="container">
        <div class="haz2dum-heading-center">
            <h2>Comprehensive Pickup &amp; Delivery Directory in Hazaribagh &amp; Dumka</h2>
            <p>Our fleet operates throughout all sectors of Hazaribagh and Dumka, providing seamless door-to-door coverage without geographical restrictions.</p>
        </div>
        <div class="haz2dum-grid-2">
            <div class="haz2dum-card">
                <h3 style="color: var(--haz2dum-primary); margin-bottom: 14px;">Hazaribagh Origin Coverage Areas</h3>
                <p style="margin-bottom: 12px; color: #475569;">Our local loading crews service all Hazaribagh sectors, providing specialized small pickup shuttles where larger trucks have restricted access:</p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px;">
                    <li><strong>Korrah &amp; Matwari:</strong> Upscale residential colonies with fast loading and careful packaging.</li>
                    <li><strong>Canary Hill Road &amp; Hurhuru:</strong> Picturesque residential sectors and family duplexes.</li>
                    <li><strong>BSF Meru Camp &amp; Demotand:</strong> Defense residential quarters with pre-cleared logistics documentation.</li>
                    <li><strong>Police Line &amp; Sadar Hospital Road:</strong> Medical and departmental staff quarters.</li>
                    <li><strong>VBU Campus &amp; Sindoor:</strong> University staff colonies and upcoming town expansions.</li>
                </ul>
            </div>
            <div class="haz2dum-card">
                <h3 style="color: var(--haz2dum-primary); margin-bottom: 14px;">Dumka Destination Coverage Areas</h3>
                <p style="margin-bottom: 12px; color: #475569;">Our destination unloading crew delivers directly to every neighborhood across Dumka town:</p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px;">
                    <li><strong>Tin Bazar &amp; Chowk Area:</strong> Central commercial and residential sectors with scheduled morning unloading.</li>
                    <li><strong>Rasikpur &amp; Dudhani:</strong> Dense family residential zones with dedicated door-to-door placement.</li>
                    <li><strong>SP College Road &amp; Dighee:</strong> Educational campus residential quarters and professor bungalows.</li>
                    <li><strong>Dumka Court &amp; Collectorate Colony:</strong> Judicial, administrative, and government employee residential complexes.</li>
                    <li><strong>Airport Road &amp; Kathikund Bypass:</strong> Modern residential colonies and upcoming suburban extensions.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Step-by-Step Moving Process -->
<section class="haz2dum-section haz2dum-section-gray">
    <div class="container">
        <div class="haz2dum-heading-center">
            <h2>Our Systematic 4-Stage Moving Procedure</h2>
            <p>We combine careful planning, heavy-duty packaging, safe transit, and dedicated destination setup to deliver a completely stress-free moving experience.</p>
        </div>
        <div class="dum2god-grid-4 haz2dum-grid-4">
            <div class="haz2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--haz2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">1</div>
                <h3>Pre-Move Survey</h3>
                <p>We review your items via doorstep inspection or video consultation to assess volume, choose appropriate truck capacity, and share a fixed written quotation.</p>
            </div>
            <div class="haz2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--haz2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">2</div>
                <h3>5-Layer Packaging</h3>
                <p>On move day, our trained packers pack furniture, electronics, and fragile items with bubble wrap, corrugated sheets, cling film, and heavy cardboard boxes.</p>
            </div>
            <div class="haz2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--haz2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">3</div>
                <h3>Sealed Transit</h3>
                <p>Goods travel securely in dedicated closed container trucks. Verified drivers navigate the 215 km route with constant GPS updates for complete visibility.</p>
            </div>
            <div class="haz2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--haz2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">4</div>
                <h3>Doorstep Setup</h3>
                <p>At your destination in Dumka, our team unpacks cartons, reassembles beds and tables, and places heavy furniture exactly where you specify.</p>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions (FAQ) Section -->
<section class="haz2dum-section">
    <div class="container" style="max-width: 900px;">
        <div class="haz2dum-heading-center">
            <h2>Frequently Asked Questions &bull; Hazaribagh to Dumka Shifting</h2>
            <p>Find answers to common questions regarding our shifting rates, transit duration, insurance coverage, and booking procedures.</p>
        </div>
        <details class="haz2dum-faq-item">
            <summary>What is the road distance and transit time between Hazaribagh and Dumka?</summary>
            <p>The road distance between Hazaribagh and Dumka is approximately 215 km via NH-522, Bagodar, Giridih, and NH-114A. A dedicated closed container truck completes door-to-door transit in about 5 to 6.5 hours under standard highway conditions.</p>
        </details>
        <details class="haz2dum-faq-item">
            <summary>What are the estimated shifting charges from Hazaribagh to Dumka?</summary>
            <p>Shifting charges range from Rs 8,500 to 12,500 for a 1 BHK flat, Rs 13,500 to 19,500 for a 2 BHK residence, Rs 18,500 to 26,000 for a 3 BHK home, and Rs 24,000 to 34,000 for large bungalows and villas, including packing materials, loading, transit, and unloading.</p>
        </details>
        <details class="haz2dum-faq-item">
            <summary>Do you issue claimable transfer bills for BSF Meru and Government transfers?</summary>
            <p>Yes. We issue 100% genuine GST-compliant invoices, official consignment notes (bilty), complete itemized packing inventories, and stamped money receipts fully accepted for relocation allowances by BSF Meru, Police Academy, and State Secretariat departments.</p>
        </details>
        <details class="haz2dum-faq-item">
            <summary>How are electronics and fragile kitchenware protected during highway transit?</summary>
            <p>We pack electronics in custom bubble wrap and padded TV cartons, while glassware and ceramic kitchenware are individually cushioned in air-bubble film, placed in partitioned boxes, and secured to prevent shifting during transit.</p>
        </details>
        <details class="haz2dum-faq-item">
            <summary>Which localities in Hazaribagh and Dumka do you cover?</summary>
            <p>In Hazaribagh, we provide full pickup services from Korrah, Matwari, Canary Hill, BSF Meru Camp, Demotand, Hurhuru, and VBU Campus. In Dumka, we deliver to Tin Bazar, Dudhani, Rasikpur, SP College Road, and Dumka Court.</p>
        </details>
        <details class="haz2dum-faq-item">
            <summary>How can I book my relocation from Hazaribagh to Dumka?</summary>
            <p>You can book by calling our helpline at +91 8409531615 or submitting an inquiry through our website. We recommend booking 2 to 3 days in advance to secure your preferred date and truck size.</p>
        </details>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="haz2dum-section haz2dum-section-gray" style="padding-bottom: 90px;">
    <div class="container">
        <div class="haz2dum-cta-card">
            <h2>Planning Your Move from Hazaribagh to Dumka?</h2>
            <p>Contact Shree Ashirwad Packers and Movers today for a quick free estimate, verified driver allocation, and complete doorstep relocation assistance.</p>
            <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
                <a href="tel:+918409531615" class="haz2dum-btn-primary" style="background: #f59e0b; color: #0f172a;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    Call: +91 8409531615
                </a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="haz2dum-btn-secondary">Request Written Quotation</a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
