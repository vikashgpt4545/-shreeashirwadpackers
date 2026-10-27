<?php
/**
 * Page Name: Dumka to Giridih Packers and Movers
 * Route Slug: dumka-to-giridih-packers-and-movers
 * Description: Dedicated household relocation, bike and car transport, and commercial goods shifting from Dumka to Giridih via NH-114A.
 * Focus Keywords: dumka to giridih packers and movers, packers and movers dumka to giridih, house shifting dumka to giridih, car transport dumka to giridih, bike parcel dumka to giridih, luggage transport dumka to giridih
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Dumka to Giridih Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Fast & safe Dumka to Giridih packers and movers services. Professional 110 km transit via NH-114A, 5-layer packing, car carrier, IBA-standard bills. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dumka-to-giridih-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="dumka to giridih packers and movers, packers and movers dumka to giridih, house shifting dumka to giridih, car transport dumka to giridih, bike parcel dumka to giridih, luggage transport dumka to giridih">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Dumka">

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

    <!-- Scoped CSS for Route 1 (Dumka to Giridih) -->
    <style>
        :root {
            --dum2gir-primary: #1e3a5f;
            --dum2gir-secondary: #0284c7;
            --dum2gir-accent: #f59e0b;
            --dum2gir-accent-light: #fef3c7;
            --dum2gir-dark: #0f172a;
            --dum2gir-gray-bg: #f8fafc;
            --dum2gir-border: #e2e8f0;
            --dum2gir-shadow: 0 10px 25px -5px rgba(30, 58, 95, 0.08), 0 8px 10px -6px rgba(30, 58, 95, 0.04);
        }

        .dum2gir-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 95, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .dum2gir-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .dum2gir-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .dum2gir-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .dum2gir-badge {
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

        .dum2gir-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .dum2gir-btn-primary {
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

        .dum2gir-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.45);
            color: #0f172a;
        }

        .dum2gir-btn-secondary {
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

        .dum2gir-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .dum2gir-section {
            padding: 70px 0;
        }

        .dum2gir-section-gray {
            background-color: var(--dum2gir-gray-bg);
        }

        .dum2gir-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .dum2gir-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            color: var(--dum2gir-dark);
            margin-bottom: 16px;
        }

        .dum2gir-heading-center p {
            color: #64748b;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        .dum2gir-strip {
            background: #ffffff;
            border-bottom: 1px solid var(--dum2gir-border);
            padding: 24px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        }

        .dum2gir-strip-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .dum2gir-strip-item {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .dum2gir-strip-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--dum2gir-accent-light);
            color: #b45309;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .dum2gir-strip-text h4 {
            font-size: 0.95rem;
            margin: 0 0 2px 0;
            color: var(--dum2gir-dark);
            font-weight: 700;
        }

        .dum2gir-strip-text p {
            margin: 0;
            font-size: 0.85rem;
            color: #64748b;
        }

        .dum2gir-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            align-items: center;
        }

        .dum2gir-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .dum2gir-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .dum2gir-card {
            background: #ffffff;
            border: 1px solid var(--dum2gir-border);
            border-radius: 12px;
            padding: 30px;
            box-shadow: var(--dum2gir-shadow);
            transition: transform 0.3s ease;
        }

        .dum2gir-card:hover {
            transform: translateY(-5px);
        }

        .dum2gir-card-icon {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            background: #e0f2fe;
            color: var(--dum2gir-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .dum2gir-card h3 {
            font-size: 1.25rem;
            margin-bottom: 12px;
            color: var(--dum2gir-dark);
        }

        .dum2gir-card p {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
        }

        .dum2gir-table-wrap {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--dum2gir-border);
            box-shadow: var(--dum2gir-shadow);
            overflow-x: auto;
            margin-top: 30px;
        }

        .dum2gir-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }

        .dum2gir-table th {
            background: var(--dum2gir-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 600;
        }

        .dum2gir-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--dum2gir-border);
            color: #334155;
        }

        .dum2gir-table tr:last-child td {
            border-bottom: none;
        }

        .dum2gir-table tr:hover td {
            background-color: #f1f5f9;
        }

        .dum2gir-timeline {
            position: relative;
            padding-left: 36px;
            margin-top: 30px;
        }

        .dum2gir-timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 14px;
            width: 3px;
            background: #cbd5e1;
        }

        .dum2gir-timeline-item {
            position: relative;
            margin-bottom: 32px;
        }

        .dum2gir-timeline-dot {
            position: absolute;
            left: -36px;
            top: 4px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--dum2gir-secondary);
            border: 4px solid #ffffff;
            box-shadow: 0 0 0 2px var(--dum2gir-secondary);
        }

        .dum2gir-timeline-content h4 {
            font-size: 1.15rem;
            color: var(--dum2gir-dark);
            margin: 0 0 6px 0;
        }

        .dum2gir-timeline-content p {
            color: #64748b;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.6;
        }

        .dum2gir-img-box {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--dum2gir-shadow);
            border: 1px solid var(--dum2gir-border);
        }

        .dum2gir-img-box img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
        }

        .dum2gir-img-caption {
            padding: 12px 16px;
            background: #ffffff;
            font-size: 0.85rem;
            color: #64748b;
            border-top: 1px solid var(--dum2gir-border);
        }

        .dum2gir-faq-item {
            background: #ffffff;
            border: 1px solid var(--dum2gir-border);
            border-radius: 10px;
            margin-bottom: 16px;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        .dum2gir-faq-item summary {
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--dum2gir-dark);
            cursor: pointer;
            outline: none;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .dum2gir-faq-item summary::after {
            content: '+';
            font-size: 1.3rem;
            color: var(--dum2gir-secondary);
            font-weight: 700;
        }

        .dum2gir-faq-item[open] summary::after {
            content: '\2212';
        }

        .dum2gir-faq-item p {
            margin-top: 14px;
            color: #475569;
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .dum2gir-cta-card {
            background: linear-gradient(135deg, var(--dum2gir-dark) 0%, var(--dum2gir-primary) 100%);
            border-radius: 16px;
            padding: 50px 40px;
            color: #ffffff;
            text-align: center;
            box-shadow: 0 20px 30px rgba(15, 23, 42, 0.2);
        }

        .dum2gir-cta-card h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            margin-bottom: 16px;
        }

        .dum2gir-cta-card p {
            max-width: 650px;
            margin: 0 auto 30px;
            color: #cbd5e1;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        @media (max-width: 991px) {
            .dum2gir-grid-2,
            .dum2gir-grid-3,
            .dum2gir-grid-4 {
                grid-template-columns: 1fr;
            }
            .dum2gir-hero h1 {
                font-size: 2.2rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Dumka to Giridih",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 6,500 - 26,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Road, Near Tin Bazar",
            "addressLocality": "Dumka",
            "addressRegion": "Jharkhand",
            "postalCode": "814101",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 24.2686,
            "longitude": 87.2519
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Dumka"
            },
            {
                "@type": "City",
                "name": "Giridih"
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
        "serviceType": "Relocation and Shifting Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "telephone": "+918409531615",
            "url": "<?php echo SITE_BASE_URL; ?>"
        },
        "areaServed": {
            "@type": "City",
            "name": "Giridih"
        },
        "description": "Comprehensive packing, moving, car transport, and household shifting solutions from Dumka to Giridih with verified drivers and transit insurance.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "6500",
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
                "name": "Packers and Movers Dumka",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dumka"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Dumka to Giridih Route",
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
                "name": "What is the road distance and transit time between Dumka and Giridih?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Dumka and Giridih is approximately 110 km via NH-114A and Bengabad State Highway. A dedicated closed container truck takes around 3 to 4 hours under regular road conditions."
                }
            },
            {
                "@type": "Question",
                "name": "What are the average shifting charges from Dumka to Giridih?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Charges generally start at Rs 6,500 for a 1 BHK flat, Rs 10,500 to 16,500 for a 2 BHK home, Rs 15,500 to 22,000 for a 3 BHK residence, and Rs 18,000 to 26,000 for villas or independent bungalows."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide IBA-approved billing for government employees shifting from Dumka to Giridih?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers issues valid GST invoices, consignment notes (bilty), complete packing lists, and vehicle inspection reports acceptable across state departments, judiciary, police, and banks."
                }
            },
            {
                "@type": "Question",
                "name": "How is vehicle transportation managed on the Dumka to Giridih route?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Motorbikes and scooters are safely crated with bubble wrap and corrugated sheets, while cars are transported on specialized hydraulic car carriers or single-vehicle covered ramp trucks with full transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Dumka and Giridih are covered for pickup and delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Dumka, we cover Tin Bazar, Rasikpur, Dudhani, SP College Road, Dumka Court, and Airport Road. In Giridih, we provide doorstep delivery to Makatpur, Bada Chowk, Pachamba, Sirsia, Mohanpur, and Giridih Court Area."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="dum2gir-hero">
    <div class="container">
        <div class="dum2gir-badge-strip">
            <span class="dum2gir-badge">&#9733; Verified Intercity Route</span>
            <span class="dum2gir-badge">&#9679; 110 KM Highway Corridor</span>
            <span class="dum2gir-badge">&#10004; Same-Day Express Shifting</span>
            <span class="dum2gir-badge">&#128225; GPS Monitored Fleet</span>
        </div>
        <h1>Dumka to Giridih Packers and Movers Services</h1>
        <p class="lead">Experience stress-free, professionally managed intercity relocations from the sub-capital of Dumka to the industrial and commercial hub of Giridih. We guarantee 5-layer heavy-duty packing, dedicated covered container trucks, zero-spill handling, and verified IBA-format transfer billing.</p>
        <div class="dum2gir-cta-group">
            <a href="tel:+918409531615" class="dum2gir-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call: +91 8409531615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="dum2gir-btn-secondary">Request Free Inspection Quote</a>
        </div>
    </div>
</section>

<!-- Route Quick Overview Strip -->
<section class="dum2gir-strip">
    <div class="container">
        <div class="dum2gir-strip-grid">
            <div class="dum2gir-strip-item">
                <div class="dum2gir-strip-icon">&#128666;</div>
                <div class="dum2gir-strip-text">
                    <h4>Direct Distance</h4>
                    <p>~110 KM Highway Drive</p>
                </div>
            </div>
            <div class="dum2gir-strip-item">
                <div class="dum2gir-strip-icon">&#9201;</div>
                <div class="dum2gir-strip-text">
                    <h4>Transit Time</h4>
                    <p>3 to 4 Hours Door-to-Door</p>
                </div>
            </div>
            <div class="dum2gir-strip-item">
                <div class="dum2gir-strip-icon">&#128739;</div>
                <div class="dum2gir-strip-text">
                    <h4>Highway Route</h4>
                    <p>Via NH-114A & Bengabad</p>
                </div>
            </div>
            <div class="dum2gir-strip-item">
                <div class="dum2gir-strip-icon">&#128737;</div>
                <div class="dum2gir-strip-text">
                    <h4>Transit Protection</h4>
                    <p>Comprehensive Insurance Available</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Narrative Section: Detailed Shifting Process -->
<section class="dum2gir-section">
    <div class="container">
        <div class="dum2gir-grid-2">
            <div>
                <span style="color: var(--dum2gir-secondary); font-weight: 700; text-transform: uppercase; font-size: 0.88rem; letter-spacing: 1px;">Santhal Pargana to North Chotanagpur Corridor</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--dum2gir-dark); margin: 12px 0 20px;">Reliable &amp; Seamless Moving from Dumka to Giridih</h2>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 18px;">
                    Relocating home, office furniture, or corporate assets between Dumka and Giridih requires an experienced logistics team that understands the highway landscape connecting Santhal Pargana with the industrial mineral belt of North Chotanagpur. The 110-kilometer link via NH-114A through Sarath, Madhupur, and Bengabad is one of Jharkhand's most frequently traveled inter-district routes. Shree Ashirwad Packers and Movers provides direct, non-transshipment container transit that guarantees complete cargo safety from pickup to final arrangement.
                </p>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 22px;">
                    Whether you are an administrative officer transferring between divisional secretariats, a healthcare professional shifting to Giridih's medical clinics, a trader expanding wholesale distribution, or a family relocating household goods, our end-to-end relocation packages remove every stress point. Every consignment is packed using 5-layer protective wrapping and loaded into water-resistant, sealed trucks managed by polite, trained moving supervisors.
                </p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px; font-weight: 500;">
                    <li>Zero transshipment guarantee: Goods loaded in Dumka stay in the same truck until unloaded in Giridih.</li>
                    <li>Transparent written quotes with no hidden fees or toll surprises.</li>
                    <li>Same-day delivery service available for early-morning loading slots.</li>
                    <li>Compliant paperwork with GST invoices and bilty for government relocation claims.</li>
                </ul>
            </div>
            <div>
                <div class="dum2gir-img-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dumka to Giridih Packers and Movers container transit truck" title="Container truck on Dumka to Giridih relocation route">
                    <div class="dum2gir-img-caption">
                        <strong>Figure 1:</strong> Closed-body dedicated container truck transporting household goods safely from Dumka to Giridih.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Highlights & Specialized Services -->
<section class="dum2gir-section dum2gir-section-gray">
    <div class="container">
        <div class="dum2gir-heading-center">
            <h2>Specialized Moving Solutions Tailored for Dumka to Giridih</h2>
            <p>We provide full-spectrum shifting solutions designed to handle delicate electronics, heavy wooden furniture, vehicles, and business stock with pinpoint precision.</p>
        </div>
        <div class="dum2gir-grid-3">
            <div class="dum2gir-card">
                <div class="dum2gir-card-icon">&#127968;</div>
                <h3>Complete Home Relocation</h3>
                <p>From fragile chinaware and modular kitchen appliances to heavy double beds and wardrobes, our seasoned crews pack room-by-room with multi-layer cushioning and systematically label every box for fast room-wise assembly in Giridih.</p>
            </div>
            <div class="dum2gir-card">
                <div class="dum2gir-card-icon">&#127970;</div>
                <h3>Office &amp; Commercial Moving</h3>
                <p>Relocating corporate branches, educational supplies, or trading stock? We coordinate organized weekend and after-hours moves minimizing administrative downtime, transporting desks, servers, filing cabinets, and inventory safely.</p>
            </div>
            <div class="dum2gir-card">
                <div class="dum2gir-card-icon">&#128663;</div>
                <h3>Car &amp; Bike Transport</h3>
                <p>Protect your two-wheelers and cars during transit. We secure motorbikes with customized crating, bubble wrap, and wheel clamps, while cars are ferried on hydraulic carriers or closed single-vehicle transporters with doorstep delivery.</p>
            </div>
            <div class="dum2gir-card">
                <div class="dum2gir-card-icon">&#128230;</div>
                <h3>5-Layer Heavy Packaging</h3>
                <p>We use virgin air-bubble sheets, high-density corrugated rolls, stretch film, edge corner guards, and moisture-barrier thermal wraps ensuring delicate finishes, mirrors, and electronic panels remain scratch-free.</p>
            </div>
            <div class="dum2gir-card">
                <div class="dum2gir-card-icon">&#128196;</div>
                <h3>Transfer Claim Billing (GST)</h3>
                <p>Complete documentation packages for government officers, teachers, banking executives, and public sector employees shifting to Giridih, including valid GST invoices, money receipts, lorry receipts, and itemized inventories.</p>
            </div>
            <div class="dum2gir-card">
                <div class="dum2gir-card-icon">&#128737;</div>
                <h3>Full Transit Insurance</h3>
                <p>Optional all-risk transit insurance coverage protecting your valuables against unforeseen road conditions, environmental factors, or transit accidents, backed by prompt claim settlement support.</p>
            </div>
        </div>
    </div>
</section>

<!-- Image Showcase Row 1: Packing & Car Transport -->
<section class="dum2gir-section">
    <div class="container">
        <div class="dum2gir-grid-2">
            <div class="dum2gir-img-box">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household packaging by packers and movers Dumka to Giridih" title="5-layer household packaging for Dumka to Giridih move">
                <div class="dum2gir-img-caption">
                    <strong>Figure 2:</strong> Systematic 5-layer protective packing for furniture and electronics before loading into the container.
                </div>
            </div>
            <div class="dum2gir-img-box">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transportation carrier loading for Dumka to Giridih" title="Safe vehicle carrier transit Dumka to Giridih">
                <div class="dum2gir-img-caption">
                    <strong>Figure 3:</strong> Professional loading of motor vehicles and cars using hydraulic ramps and heavy-duty wheel chocks.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transparent Pricing Table Section -->
<section class="dum2gir-section dum2gir-section-gray">
    <div class="container">
        <div class="dum2gir-heading-center">
            <h2>Estimated Shifting Charges from Dumka to Giridih</h2>
            <p>Our pricing is completely clear, volume-based, and honest. Review our typical relocation charges for the 110 km Dumka to Giridih corridor below.</p>
        </div>
        <div class="dum2gir-table-wrap">
            <table class="dum2gir-table">
                <thead>
                    <tr>
                        <th>Move Type / Residence Size</th>
                        <th>Packing Material &amp; Labor</th>
                        <th>Transport &amp; Fuel Charges</th>
                        <th>Estimated Total (Approx)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Flat / Small Apartment</strong></td>
                        <td>Rs 2,500 - 3,500</td>
                        <td>Rs 4,000 - 5,500</td>
                        <td><strong>Rs 6,500 - 9,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Household</strong></td>
                        <td>Rs 4,500 - 6,500</td>
                        <td>Rs 6,000 - 9,000</td>
                        <td><strong>Rs 10,500 - 15,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Large Household</strong></td>
                        <td>Rs 6,500 - 9,000</td>
                        <td>Rs 9,000 - 13,000</td>
                        <td><strong>Rs 15,500 - 22,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Villa / Duplex</strong></td>
                        <td>Rs 8,000 - 12,000</td>
                        <td>Rs 12,000 - 16,000</td>
                        <td><strong>Rs 20,000 - 28,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler / Bike Transport</strong></td>
                        <td>Rs 1,000 - 1,500</td>
                        <td>Rs 1,500 - 2,500</td>
                        <td><strong>Rs 2,500 - 4,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Car Relocation (Hatchback/Sedan/SUV)</strong></td>
                        <td>Rs 1,500 - 2,500</td>
                        <td>Rs 5,500 - 8,500</td>
                        <td><strong>Rs 7,000 - 11,000</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.88rem; color: #64748b; margin-top: 15px; text-align: center;">
            *Note: Exact shifting quotes depend on floor levels, elevator availability, fragile item quantity, seasonal factors, and optional comprehensive transit insurance.
        </p>
    </div>
</section>

<!-- Route Navigation & Highway Profile Section -->
<section class="dum2gir-section">
    <div class="container">
        <div class="dum2gir-grid-2">
            <div>
                <span style="color: var(--dum2gir-secondary); font-weight: 700; text-transform: uppercase; font-size: 0.88rem; letter-spacing: 1px;">Highway Route Profile &amp; Milestones</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--dum2gir-dark); margin: 12px 0 20px;">The 110 KM Highway Journey from Dumka to Giridih</h2>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 18px;">
                    The journey between Dumka and Giridih is routed through key connecting townships across Santhal Pargana and Giridih district. Our dispatchers monitor the NH-114A corridor to avoid market congestion and maintain punctual transit times.
                </p>
                <div class="dum2gir-timeline">
                    <div class="dum2gir-timeline-item">
                        <div class="dum2gir-timeline-dot"></div>
                        <div class="dum2gir-timeline-content">
                            <h4>Checkpoint 1: Origin Pickup in Dumka</h4>
                            <p>Pickup and packing across Dumka localities including Tin Bazar, Rasikpur, Dudhani, Dumka Court, and SP College Road before rolling onto NH-114A.</p>
                        </div>
                    </div>
                    <div class="dum2gir-timeline-item">
                        <div class="dum2gir-timeline-dot"></div>
                        <div class="dum2gir-timeline-content">
                            <h4>Checkpoint 2: Sarath &amp; Madhupur Link</h4>
                            <p>Smooth intermediate highway transit crossing Sarath and bypassing Madhupur railway hub with stable road surfaces and minimal speed fluctuations.</p>
                        </div>
                    </div>
                    <div class="dum2gir-timeline-item">
                        <div class="dum2gir-timeline-dot"></div>
                        <div class="dum2gir-timeline-content">
                            <h4>Checkpoint 3: Bengabad Junction</h4>
                            <p>Entering Giridih district via Bengabad, where drivers make safety checks on cargo lashings before approaching Giridih town limits.</p>
                        </div>
                    </div>
                    <div class="dum2gir-timeline-item">
                        <div class="dum2gir-timeline-dot"></div>
                        <div class="dum2gir-timeline-content">
                            <h4>Checkpoint 4: Doorstep Delivery in Giridih</h4>
                            <p>Safe arrival and delivery to Makatpur, Bada Chowk, Pachamba, Sirsia, Mohanpur, and Giridih Court Area, followed by unpacking and room-wise furniture setup.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="dum2gir-img-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and setup service in Giridih" title="Careful unloading and arrangement in Giridih">
                    <div class="dum2gir-img-caption">
                        <strong>Figure 4:</strong> Dedicated moving staff executing careful unloading, unpacking, and room-wise placement at the destination.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Step-by-Step Moving Process -->
<section class="dum2gir-section dum2gir-section-gray">
    <div class="container">
        <div class="dum2gir-heading-center">
            <h2>Our 4-Step Seamless Moving Procedure</h2>
            <p>From initial booking to final placement of your furniture in Giridih, we execute relocations through an organized, stress-free workflow.</p>
        </div>
        <div class="dum2gir-grid-4">
            <div class="dum2gir-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--dum2gir-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">1</div>
                <h3>Survey &amp; Estimate</h3>
                <p>We provide a prompt home survey or video consultation to inspect items, determine truck volume, and issue a transparent written quote.</p>
            </div>
            <div class="dum2gir-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--dum2gir-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">2</div>
                <h3>5-Layer Packaging</h3>
                <p>On shifting day, our trained packers arrive with bubble wrap, corrugated sheets, stretch wrap, and sturdy boxes to wrap every household item securely.</p>
            </div>
            <div class="dum2gir-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--dum2gir-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">3</div>
                <h3>Dedicated Transit</h3>
                <p>Goods are loaded into sealed, covered container trucks. Our verified driver navigates the 110 km route with GPS updates for complete peace of mind.</p>
            </div>
            <div class="dum2gir-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--dum2gir-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">4</div>
                <h3>Unpack &amp; Placement</h3>
                <p>At your new Giridih home, we unload every box, place furniture where you need it, and assist with unpacking fragile dinnerware and appliances.</p>
            </div>
        </div>
    </div>
</section>

<!-- Key Shifting Profiles Section -->
<section class="dum2gir-section">
    <div class="container">
        <div class="dum2gir-heading-center">
            <h2>Specialized Relocation Categories Handled Daily on the Dumka to Giridih Route</h2>
            <p>Our operational familiarity with Santhal Pargana and Giridih allows us to deliver purpose-built relocation plans tailored to specific client requirements.</p>
        </div>
        <div class="dum2gir-grid-3">
            <div class="dum2gir-card">
                <div class="dum2gir-card-icon">&#9878;</div>
                <h3>Government &amp; Judicial Staff Transfers</h3>
                <p>Dumka serves as the divisional headquarters of Santhal Pargana, generating frequent civil service, judicial officer, police personnel, and administrative transfers to Giridih district. We provide comprehensive documentation packages including IBA-format consignment notes, GST billing, and stamped transit vouchers that guarantee hassle-free employer reimbursement.</p>
            </div>
            <div class="dum2gir-card">
                <div class="dum2gir-card-icon">&#128188;</div>
                <h3>Commercial &amp; Trade Cargo Shifting</h3>
                <p>Giridih is a prominent industrial center famous for mica processing, mineral industries, steel fabrication, and retail markets. We facilitate swift commercial freight and store transfers between Dumka wholesale distributors and Giridih business hubs with strict delivery schedules and zero-damage handling protocols.</p>
            </div>
            <div class="dum2gir-card">
                <div class="dum2gir-card-icon">&#127891;</div>
                <h3>Academic &amp; Healthcare Professionals</h3>
                <p>With major colleges, medical facilities, and administrative institutions spread across both districts, we frequently manage priority moves for doctors, professors, and banking executives. Our team takes special care of sensitive electronics, diagnostic gear, academic libraries, and expensive modular home setups.</p>
            </div>
        </div>
    </div>
</section>

<!-- Neighborhood Pickup & Delivery Directory -->
<section class="dum2gir-section dum2gir-section-gray">
    <div class="container">
        <div class="dum2gir-heading-center">
            <h2>Complete Neighborhood Coverage in Dumka and Giridih</h2>
            <p>Our localized pickup vehicles and heavy container trucks provide 100% comprehensive doorstep coverage across every municipal ward and peripheral sector.</p>
        </div>
        <div class="dum2gir-grid-2">
            <div class="dum2gir-card">
                <h3 style="color: var(--dum2gir-primary); margin-bottom: 14px;">Dumka Origin Coverage Areas</h3>
                <p style="margin-bottom: 12px; color: #475569;">Our local loading crews operate across all sectors of Dumka, navigating narrow historic market lanes with smaller feeder vehicles when required:</p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px;">
                    <li><strong>Tin Bazar &amp; Chowk Area:</strong> Central commercial and residential sectors with timely scheduled morning pickups.</li>
                    <li><strong>Rasikpur &amp; Dudhani:</strong> Dense family residential zones with dedicated door-to-door packing teams.</li>
                    <li><strong>SP College Road &amp; Dighee:</strong> Educational campus residential quarters and professor bungalows.</li>
                    <li><strong>Dumka Court &amp; Collectorate Colony:</strong> Judicial, administrative, and government employee residential complexes.</li>
                    <li><strong>Airport Road &amp; Kathikund Bypass:</strong> Modern residential colonies and upcoming suburban extensions.</li>
                </ul>
            </div>
            <div class="dum2gir-card">
                <h3 style="color: var(--dum2gir-primary); margin-bottom: 14px;">Giridih Destination Coverage Areas</h3>
                <p style="margin-bottom: 12px; color: #475569;">Our destination unloading team provides direct placement and unpacking assistance throughout Giridih township:</p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px;">
                    <li><strong>Makatpur &amp; Bada Chowk:</strong> Heart of Giridih city with prompt maneuvering and unloading support.</li>
                    <li><strong>Pachamba &amp; Mohanpur:</strong> Extensive suburban residential colonies and historic housing societies.</li>
                    <li><strong>Sirsia &amp; Industrial Area:</strong> Modern villas, corporate housing, and industrial staff quarters.</li>
                    <li><strong>Giridih Court &amp; Officers Colony:</strong> Civil administration and judiciary residences with priority assembly.</li>
                    <li><strong>Beniadih &amp; Isri Bazar Link:</strong> Peripheral mining townships and highway accessible colonies.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions (FAQ) Section -->
<section class="dum2gir-section">
    <div class="container" style="max-width: 900px;">
        <div class="dum2gir-heading-center">
            <h2>Frequently Asked Questions &bull; Dumka to Giridih Shifting</h2>
            <p>Everything you need to know about pricing, transit times, insurance, and booking for the Dumka to Giridih route.</p>
        </div>
        <details class="dum2gir-faq-item">
            <summary>What is the road distance and transit time between Dumka and Giridih?</summary>
            <p>The road distance is approximately 110 kilometers via NH-114A through Sarath and Bengabad. A dedicated covered container truck normally completes door-to-door transit within 3 to 4 hours under regular conditions.</p>
        </details>
        <details class="dum2gir-faq-item">
            <summary>What are the average shifting charges from Dumka to Giridih?</summary>
            <p>Our shifting charges range from Rs 6,500 to 9,000 for a 1 BHK flat, Rs 10,500 to 15,500 for a 2 BHK home, Rs 15,500 to 22,000 for a 3 BHK residence, and Rs 20,000 to 28,000 for large bungalows and villas, inclusive of packing materials, loading, transit, and unloading.</p>
        </details>
        <details class="dum2gir-faq-item">
            <summary>Do you offer valid GST bills for government transfer claims?</summary>
            <p>Yes. We provide complete 100% genuine GST-compliant moving invoices, consignment notes (bilty), packing inventories, and payment receipts accepted across state government secretariats, educational institutions, judiciary, and PSU banks.</p>
        </details>
        <details class="dum2gir-faq-item">
            <summary>Can I transport my bike or scooter along with household furniture?</summary>
            <p>Yes. We securely pack two-wheelers using bubble wrap, corrugated sheets, and cardboard frame wraps, strapping them safely inside our container trucks alongside your household cargo with zero risk of scratches or denting.</p>
        </details>
        <details class="dum2gir-faq-item">
            <summary>Which localities in Dumka and Giridih do you service?</summary>
            <p>We provide full pickup services throughout Dumka (Tin Bazar, Rasikpur, Dudhani, Dumka Court, SP College Road, Airport Area) and direct delivery across Giridih (Makatpur, Bada Chowk, Pachamba, Sirsia, Mohanpur, Giridih Court Area, and surrounding areas).</p>
        </details>
        <details class="dum2gir-faq-item">
            <summary>How far in advance should I book my move from Dumka to Giridih?</summary>
            <p>We recommend booking 2 to 3 days in advance to reserve your preferred loading time and truck size. However, we also accommodate urgent same-day booking requests depending on fleet availability.</p>
        </details>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="dum2gir-section dum2gir-section-gray" style="padding-bottom: 90px;">
    <div class="container">
        <div class="dum2gir-cta-card">
            <h2>Ready to Relocate from Dumka to Giridih?</h2>
            <p>Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate, verified driver allocation, and complete doorstep shifting support.</p>
            <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
                <a href="tel:+918409531615" class="dum2gir-btn-primary" style="background: #f59e0b; color: #0f172a;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    Call: +91 8409531615
                </a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="dum2gir-btn-secondary">Request Written Quotation</a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
