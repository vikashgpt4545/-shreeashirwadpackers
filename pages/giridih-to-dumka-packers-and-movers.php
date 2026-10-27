<?php
/**
 * Page Name: Giridih to Dumka Packers and Movers
 * Route Slug: giridih-to-dumka-packers-and-movers
 * Description: Dedicated household relocation, bike and car transport, and commercial goods shifting from Giridih to Dumka via Bengabad and NH-114A.
 * Focus Keywords: giridih to dumka packers and movers, packers and movers giridih to dumka, house shifting giridih to dumka, car transport giridih to dumka, bike parcel giridih to dumka, luggage transport giridih to dumka
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Giridih to Dumka Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Fast & safe Giridih to Dumka packers and movers. 110 km transit via Bengabad & NH-114A, 5-layer packing, car carriers, IBA-standard bills. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/giridih-to-dumka-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="giridih to dumka packers and movers, packers and movers giridih to dumka, house shifting giridih to dumka, car transport giridih to dumka, bike parcel giridih to dumka, luggage transport giridih to dumka">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Giridih">

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

    <!-- Scoped CSS for Route 7 (Giridih to Dumka) -->
    <style>
        :root {
            --gir2dum-primary: #1e3a5f;
            --gir2dum-secondary: #0284c7;
            --gir2dum-accent: #f59e0b;
            --gir2dum-accent-light: #fef3c7;
            --gir2dum-dark: #0f172a;
            --gir2dum-gray-bg: #f8fafc;
            --gir2dum-border: #e2e8f0;
            --gir2dum-shadow: 0 10px 25px -5px rgba(30, 58, 95, 0.08), 0 8px 10px -6px rgba(30, 58, 95, 0.04);
        }

        .gir2dum-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 95, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .gir2dum-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .gir2dum-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .gir2dum-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .gir2dum-badge {
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

        .gir2dum-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .gir2dum-btn-primary {
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

        .gir2dum-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.45);
            color: #0f172a;
        }

        .gir2dum-btn-secondary {
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

        .gir2dum-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .gir2dum-section {
            padding: 70px 0;
        }

        .gir2dum-section-gray {
            background-color: var(--gir2dum-gray-bg);
        }

        .gir2dum-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .gir2dum-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            color: var(--gir2dum-dark);
            margin-bottom: 16px;
        }

        .gir2dum-heading-center p {
            color: #64748b;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        .gir2dum-strip {
            background: #ffffff;
            border-bottom: 1px solid var(--gir2dum-border);
            padding: 24px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        }

        .gir2dum-strip-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .gir2dum-strip-item {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .gir2dum-strip-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--gir2dum-accent-light);
            color: #b45309;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .gir2dum-strip-text h4 {
            font-size: 0.95rem;
            margin: 0 0 2px 0;
            color: var(--gir2dum-dark);
            font-weight: 700;
        }

        .gir2dum-strip-text p {
            margin: 0;
            font-size: 0.85rem;
            color: #64748b;
        }

        .gir2dum-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            align-items: center;
        }

        .gir2dum-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .gir2dum-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .gir2dum-card {
            background: #ffffff;
            border: 1px solid var(--gir2dum-border);
            border-radius: 12px;
            padding: 30px;
            box-shadow: var(--gir2dum-shadow);
            transition: transform 0.3s ease;
        }

        .gir2dum-card:hover {
            transform: translateY(-5px);
        }

        .gir2dum-card-icon {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            background: #e0f2fe;
            color: var(--gir2dum-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .gir2dum-card h3 {
            font-size: 1.25rem;
            margin-bottom: 12px;
            color: var(--gir2dum-dark);
        }

        .gir2dum-card p {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
        }

        .gir2dum-table-wrap {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--gir2dum-border);
            box-shadow: var(--gir2dum-shadow);
            overflow-x: auto;
            margin-top: 30px;
        }

        .gir2dum-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }

        .gir2dum-table th {
            background: var(--gir2dum-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 600;
        }

        .gir2dum-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--gir2dum-border);
            color: #334155;
        }

        .gir2dum-table tr:last-child td {
            border-bottom: none;
        }

        .gir2dum-table tr:hover td {
            background-color: #f1f5f9;
        }

        .gir2dum-timeline {
            position: relative;
            padding-left: 36px;
            margin-top: 30px;
        }

        .gir2dum-timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 14px;
            width: 3px;
            background: #cbd5e1;
        }

        .gir2dum-timeline-item {
            position: relative;
            margin-bottom: 32px;
        }

        .gir2dum-timeline-dot {
            position: absolute;
            left: -36px;
            top: 4px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--gir2dum-secondary);
            border: 4px solid #ffffff;
            box-shadow: 0 0 0 2px var(--gir2dum-secondary);
        }

        .gir2dum-timeline-content h4 {
            font-size: 1.15rem;
            color: var(--gir2dum-dark);
            margin: 0 0 6px 0;
        }

        .gir2dum-timeline-content p {
            color: #64748b;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.6;
        }

        .gir2dum-img-box {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--gir2dum-shadow);
            border: 1px solid var(--gir2dum-border);
        }

        .gir2dum-img-box img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
        }

        .gir2dum-img-caption {
            padding: 12px 16px;
            background: #ffffff;
            font-size: 0.85rem;
            color: #64748b;
            border-top: 1px solid var(--gir2dum-border);
        }

        .gir2dum-faq-item {
            background: #ffffff;
            border: 1px solid var(--gir2dum-border);
            border-radius: 10px;
            margin-bottom: 16px;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        .gir2dum-faq-item summary {
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--gir2dum-dark);
            cursor: pointer;
            outline: none;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .gir2dum-faq-item summary::after {
            content: '+';
            font-size: 1.3rem;
            color: var(--gir2dum-secondary);
            font-weight: 700;
        }

        .gir2dum-faq-item[open] summary::after {
            content: '\2212';
        }

        .gir2dum-faq-item p {
            margin-top: 14px;
            color: #475569;
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .gir2dum-cta-card {
            background: linear-gradient(135deg, var(--gir2dum-dark) 0%, var(--gir2dum-primary) 100%);
            border-radius: 16px;
            padding: 50px 40px;
            color: #ffffff;
            text-align: center;
            box-shadow: 0 20px 30px rgba(15, 23, 42, 0.2);
        }

        .gir2dum-cta-card h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            margin-bottom: 16px;
        }

        .gir2dum-cta-card p {
            max-width: 650px;
            margin: 0 auto 30px;
            color: #cbd5e1;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        @media (max-width: 991px) {
            .gir2dum-grid-2,
            .gir2dum-grid-3,
            .gir2dum-grid-4 {
                grid-template-columns: 1fr;
            }
            .gir2dum-hero h1 {
                font-size: 2.2rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Giridih to Dumka",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 6,500 - 26,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Road, Makatpur",
            "addressLocality": "Giridih",
            "addressRegion": "Jharkhand",
            "postalCode": "815301",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 24.1856,
            "longitude": 86.3075
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Giridih"
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
        "serviceType": "Relocation and Shifting Services",
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
        "description": "Comprehensive packing, moving, car transport, and household shifting solutions from Giridih to Dumka with verified drivers and transit insurance.",
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
                "name": "Packers and Movers Giridih",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-giridih"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Giridih to Dumka Route",
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
                "name": "What is the road distance and transit time between Giridih and Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Giridih and Dumka is approximately 110 km via Bengabad, Madhupur, and NH-114A. A dedicated closed container truck takes around 3 to 4 hours under regular road conditions."
                }
            },
            {
                "@type": "Question",
                "name": "What are the average shifting charges from Giridih to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Charges generally start at Rs 6,500 for a 1 BHK flat, Rs 10,500 to 15,500 for a 2 BHK home, Rs 15,500 to 22,000 for a 3 BHK residence, and Rs 20,000 to 28,000 for villas or independent bungalows."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide IBA-approved billing for government employees shifting from Giridih to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers issues valid GST invoices, consignment notes (bilty), complete packing lists, and vehicle inspection reports acceptable across state departments, judiciary, police, and banks."
                }
            },
            {
                "@type": "Question",
                "name": "How is vehicle transportation managed on the Giridih to Dumka route?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Motorbikes and scooters are safely crated with bubble wrap and corrugated sheets, while cars are transported on specialized hydraulic car carriers or single-vehicle covered ramp trucks with full transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Giridih and Dumka are covered for pickup and delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Giridih, we cover Makatpur, Bada Chowk, Pachamba, Sirsia, Mohanpur, and Giridih Court. In Dumka, we provide doorstep delivery to Tin Bazar, Rasikpur, Dudhani, SP College Road, Dumka Court, and Airport Road."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="gir2dum-hero">
    <div class="container">
        <div class="gir2dum-badge-strip">
            <span class="gir2dum-badge">&#9733; Verified Intercity Route</span>
            <span class="gir2dum-badge">&#9679; 110 KM Highway Corridor</span>
            <span class="gir2dum-badge">&#10004; Express Same-Day Shifting</span>
            <span class="gir2dum-badge">&#128225; Real-Time GPS Tracking</span>
        </div>
        <h1>Giridih to Dumka Packers and Movers Services</h1>
        <p class="lead">Experience seamless, professionally managed inter-district relocations from the industrial and commercial center of Giridih to the Santhal Pargana sub-capital of Dumka. We guarantee 5-layer heavy protective packaging, dedicated sealed container trucks, zero-spill handling, and verified IBA-format transfer billing.</p>
        <div class="gir2dum-cta-group">
            <a href="tel:+918409531615" class="gir2dum-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call: +91 8409531615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="gir2dum-btn-secondary">Request Free Inspection Quote</a>
        </div>
    </div>
</section>

<!-- Route Quick Overview Strip -->
<section class="gir2dum-strip">
    <div class="container">
        <div class="gir2dum-strip-grid">
            <div class="gir2dum-strip-item">
                <div class="gir2dum-strip-icon">&#128666;</div>
                <div class="gir2dum-strip-text">
                    <h4>Direct Distance</h4>
                    <p>~110 KM Highway Drive</p>
                </div>
            </div>
            <div class="gir2dum-strip-item">
                <div class="gir2dum-strip-icon">&#9201;</div>
                <div class="gir2dum-strip-text">
                    <h4>Transit Time</h4>
                    <p>3 to 4 Hours Door-to-Door</p>
                </div>
            </div>
            <div class="gir2dum-strip-item">
                <div class="gir2dum-strip-icon">&#128739;</div>
                <div class="gir2dum-strip-text">
                    <h4>Highway Corridor</h4>
                    <p>Via Bengabad &amp; NH-114A</p>
                </div>
            </div>
            <div class="gir2dum-strip-item">
                <div class="gir2dum-strip-icon">&#128737;</div>
                <div class="gir2dum-strip-text">
                    <h4>Transit Protection</h4>
                    <p>Comprehensive Insurance Available</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Narrative Section: Detailed Shifting Process -->
<section class="gir2dum-section">
    <div class="container">
        <div class="gir2dum-grid-2">
            <div>
                <span style="color: var(--gir2dum-secondary); font-weight: 700; text-transform: uppercase; font-size: 0.88rem; letter-spacing: 1px;">North Chotanagpur to Santhal Pargana Corridor</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--gir2dum-dark); margin: 12px 0 20px;">Reliable &amp; Seamless Moving from Giridih to Dumka</h2>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 18px;">
                    Relocating home, office setup, or business inventory from Giridih to Dumka connects the industrial mica and commercial trading center of North Chotanagpur with the administrative sub-capital of Santhal Pargana. Spanning 110 kilometers via Bengabad, Madhupur, and Sarath along NH-114A, this route is one of the most vital inter-district moving corridors in Jharkhand. Shree Ashirwad Packers and Movers provides direct, non-transshipment container transit that guarantees total safety from pickup to final room arrangement.
                </p>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 22px;">
                    Whether you are an administrative officer transferring to the Santhal Pargana Commissionerate in Dumka, a professor shifting to S.P. College, a medical doctor relocating to the medical college hospital, or a trader expanding regional supply, our moving team eliminates every stress point. Consignments are packed using 5-layer protective wrapping and loaded into sealed container trucks managed by verified moving supervisors.
                </p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px; font-weight: 500;">
                    <li>Zero-transshipment guarantee: your goods remain sealed in the same truck until delivered in Dumka.</li>
                    <li>Upfront written quotations with no hidden charges, toll surprises, or labor extras.</li>
                    <li>Same-day delivery service available for morning loadings on the 110 km route.</li>
                    <li>Compliant paperwork with GST invoices and consignment bilty for government relocation claims.</li>
                </ul>
            </div>
            <div>
                <div class="gir2dum-img-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Giridih to Dumka Packers and Movers container truck" title="Closed container truck on Giridih to Dumka relocation route">
                    <div class="gir2dum-img-caption">
                        <strong>Figure 1:</strong> Closed-body dedicated container truck transporting household goods safely on the 110 km Giridih to Dumka highway.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Highlights & Specialized Services -->
<section class="gir2dum-section gir2dum-section-gray">
    <div class="container">
        <div class="gir2dum-heading-center">
            <h2>Specialized Moving Solutions Tailored for Giridih to Dumka</h2>
            <p>We provide full-spectrum shifting solutions designed to handle delicate electronics, heavy wooden furniture, vehicles, and business stock with pinpoint precision.</p>
        </div>
        <div class="gir2dum-grid-3">
            <div class="gir2dum-card">
                <div class="dum2gir-card-icon gir2dum-card-icon">&#127968;</div>
                <h3>Complete Home Relocation</h3>
                <p>From fragile kitchen chinaware and appliances to heavy double beds and wardrobes, our seasoned crews pack room-by-room with multi-layer cushioning and systematically label every box for fast room-wise assembly in Dumka.</p>
            </div>
            <div class="dum2gir-card-icon gir2dum-card-icon">&#127970;</div>
            <div class="gir2dum-card">
                <h3>Office &amp; Commercial Moving</h3>
                <p>Relocating corporate branches, educational supplies, or trading stock? We coordinate organized moves minimizing administrative downtime, transporting desks, servers, filing cabinets, and inventory safely.</p>
            </div>
            <div class="gir2dum-card">
                <div class="dum2gir-card-icon gir2dum-card-icon">&#128663;</div>
                <h3>Car &amp; Bike Transportation</h3>
                <p>Protect your motorbikes and cars during highway transit. We secure two-wheelers with custom crating and wheel clamps, while cars travel on hydraulic enclosed carriers with doorstep delivery.</p>
            </div>
            <div class="gir2dum-card">
                <div class="dum2gir-card-icon gir2dum-card-icon">&#128230;</div>
                <h3>5-Layer Heavy Packaging</h3>
                <p>We utilize multi-layer protective packaging: virgin air-bubble sheets, high-density corrugated rolls, stretch film, edge corner guards, and moisture-barrier thermal wraps ensuring complete safety.</p>
            </div>
            <div class="gir2dum-card">
                <div class="dum2gir-card-icon gir2dum-card-icon">&#128196;</div>
                <h3>Govt &amp; Corporate Claim Billing</h3>
                <p>Complete documentation packages for government officers, teachers, banking executives, and PSU employees shifting to Dumka, including valid GST invoices, money receipts, lorry receipts, and itemized inventories.</p>
            </div>
            <div class="gir2dum-card">
                <div class="dum2gir-card-icon gir2dum-card-icon">&#128737;</div>
                <h3>Full Transit Insurance</h3>
                <p>Optional all-risk transit insurance coverage protecting your valuables against unforeseen road conditions, environmental factors, or transit accidents, backed by prompt claim settlement support.</p>
            </div>
        </div>
    </div>
</section>

<!-- Image Showcase Row 1: Packing & Car Transport -->
<section class="gir2dum-section">
    <div class="container">
        <div class="gir2dum-grid-2">
            <div class="gir2dum-img-box">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household packaging Giridih to Dumka" title="Professional packaging for Giridih to Dumka move">
                <div class="gir2dum-img-caption">
                    <strong>Figure 2:</strong> Systematic 5-layer protective packing for furniture and electronics before loading into the container.
                </div>
            </div>
            <div class="gir2dum-img-box">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transportation carrier loading Giridih to Dumka" title="Vehicle carrier transit Giridih to Dumka">
                <div class="gir2dum-img-caption">
                    <strong>Figure 3:</strong> Professional loading of motor vehicles and cars using hydraulic ramps and heavy-duty wheel chocks.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transparent Pricing Table Section -->
<section class="gir2dum-section gir2dum-section-gray">
    <div class="container">
        <div class="gir2dum-heading-center">
            <h2>Estimated Shifting Charges from Giridih to Dumka</h2>
            <p>Our pricing is completely clear, volume-based, and honest. Review our typical relocation charges for the 110 km Giridih to Dumka corridor below.</p>
        </div>
        <div class="gir2dum-table-wrap">
            <table class="gir2dum-table">
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
<section class="gir2dum-section">
    <div class="container">
        <div class="gir2dum-grid-2">
            <div>
                <span style="color: var(--gir2dum-secondary); font-weight: 700; text-transform: uppercase; font-size: 0.88rem; letter-spacing: 1px;">Highway Route Profile &amp; Milestones</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--gir2dum-dark); margin: 12px 0 20px;">The 110 KM Highway Journey from Giridih to Dumka</h2>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 18px;">
                    The journey between Giridih and Dumka connects North Chotanagpur directly with Santhal Pargana. Our dispatchers monitor the NH-114A corridor to avoid market congestion and maintain punctual transit times.
                </p>
                <div class="gir2dum-timeline">
                    <div class="gir2dum-timeline-item">
                        <div class="gir2dum-timeline-dot"></div>
                        <div class="gir2dum-timeline-content">
                            <h4>Checkpoint 1: Origin Pickup in Giridih</h4>
                            <p>Pickup across Giridih sectors including Makatpur, Bada Chowk, Pachamba, Sirsia, and Mohanpur before joining the Bengabad highway link.</p>
                        </div>
                    </div>
                    <div class="gir2dum-timeline-item">
                        <div class="gir2dum-timeline-dot"></div>
                        <div class="gir2dum-timeline-content">
                            <h4>Checkpoint 2: Bengabad &amp; Madhupur Link</h4>
                            <p>Smooth intermediate highway transit crossing Bengabad and Madhupur railway crossroad with stable road surfaces and minimal speed fluctuations.</p>
                        </div>
                    </div>
                    <div class="gir2dum-timeline-item">
                        <div class="gir2dum-timeline-dot"></div>
                        <div class="gir2dum-timeline-content">
                            <h4>Checkpoint 3: Sarath to NH-114A</h4>
                            <p>Entering Dumka district via Sarath, where drivers inspect container cargo lashings and seals before approaching Dumka town limits.</p>
                        </div>
                    </div>
                    <div class="gir2dum-timeline-item">
                        <div class="gir2dum-timeline-dot"></div>
                        <div class="gir2dum-timeline-content">
                            <h4>Checkpoint 4: Doorstep Delivery in Dumka</h4>
                            <p>Safe arrival across Tin Bazar, Rasikpur, Dudhani, SP College Road, Dumka Court, and Airport Road, followed by unloading and room-wise setup.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="gir2dum-img-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and setup service in Dumka" title="Careful unloading and arrangement in Dumka">
                    <div class="gir2dum-img-caption">
                        <strong>Figure 4:</strong> Dedicated moving staff executing careful unloading, unpacking, and room-wise placement at the destination in Dumka.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Shifting Profiles Section -->
<section class="gir2dum-section gir2dum-section-gray">
    <div class="container">
        <div class="gir2dum-heading-center">
            <h2>Specialized Relocation Categories Handled Daily on the Giridih to Dumka Route</h2>
            <p>Our operational familiarity with Giridih and Dumka allows us to deliver purpose-built relocation plans tailored to specific client requirements.</p>
        </div>
        <div class="gir2dum-grid-3">
            <div class="gir2dum-card">
                <div class="dum2gir-card-icon gir2dum-card-icon">&#9878;</div>
                <h3>Government &amp; Administrative Transfers</h3>
                <p>Dumka serves as the divisional headquarters of Santhal Pargana, receiving frequent administrative, judicial, and police officer transfers from Giridih. We provide complete documentation packages including IBA-format consignment notes, GST billing, and stamped transit vouchers.</p>
            </div>
            <div class="gir2dum-card">
                <div class="dum2gir-card-icon gir2dum-card-icon">&#128188;</div>
                <h3>Commercial &amp; Trade Cargo Shifting</h3>
                <p>Giridih's mineral, steel fabrication, and wholesale commercial markets have active distribution ties with Santhal Pargana. We facilitate swift commercial goods and store transfers between Giridih and Dumka with strict delivery schedules and zero-damage handling protocols.</p>
            </div>
            <div class="gir2dum-card">
                <div class="dum2gir-card-icon gir2dum-card-icon">&#127891;</div>
                <h3>Academic &amp; Family Relocations</h3>
                <p>Relocating family households, doctors shifting to hospital positions, and professors moving to S.P. College enjoy our end-to-end service. Our team takes special care of sensitive electronics, diagnostic gear, academic libraries, and expensive modular home setups.</p>
            </div>
        </div>
    </div>
</section>

<!-- Neighborhood Pickup & Delivery Directory -->
<section class="gir2dum-section">
    <div class="container">
        <div class="gir2dum-heading-center">
            <h2>Complete Neighborhood Coverage in Giridih and Dumka</h2>
            <p>Our localized pickup vehicles and heavy container trucks provide 100% comprehensive doorstep coverage across every municipal ward and peripheral sector.</p>
        </div>
        <div class="gir2dum-grid-2">
            <div class="gir2dum-card">
                <h3 style="color: var(--gir2dum-primary); margin-bottom: 14px;">Giridih Origin Coverage Areas</h3>
                <p style="margin-bottom: 12px; color: #475569;">Our local loading crews operate across all sectors of Giridih, navigating narrow historic market lanes with smaller feeder vehicles when required:</p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px;">
                    <li><strong>Makatpur &amp; Bada Chowk:</strong> Central business and family residential sectors with fast loading support.</li>
                    <li><strong>Pachamba &amp; Mohanpur:</strong> Extensive suburban residential colonies and historic housing societies.</li>
                    <li><strong>Sirsia &amp; Industrial Area:</strong> Modern villas, corporate housing, and industrial staff quarters.</li>
                    <li><strong>Giridih Court &amp; Officers Colony:</strong> Civil administration and judiciary residences with priority assembly.</li>
                    <li><strong>Beniadih &amp; Isri Bazar Link:</strong> Peripheral mining townships and highway accessible colonies.</li>
                </ul>
            </div>
            <div class="gir2dum-card">
                <h3 style="color: var(--gir2dum-primary); margin-bottom: 14px;">Dumka Destination Coverage Areas</h3>
                <p style="margin-bottom: 12px; color: #475569;">Our destination unloading team provides direct placement and unpacking assistance throughout Dumka district:</p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px;">
                    <li><strong>Tin Bazar &amp; Chowk Area:</strong> Central commercial and residential sectors with timely scheduled morning delivery.</li>
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
<section class="gir2dum-section gir2dum-section-gray">
    <div class="container">
        <div class="gir2dum-heading-center">
            <h2>Our 4-Step Seamless Moving Procedure</h2>
            <p>From initial booking to final placement of your furniture in Dumka, we execute relocations through an organized, stress-free workflow.</p>
        </div>
        <div class="dum2god-grid-4 gir2dum-grid-4">
            <div class="gir2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--gir2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">1</div>
                <h3>Survey &amp; Estimate</h3>
                <p>We provide a prompt home survey or video consultation to inspect items, determine truck volume, and issue a transparent written quote.</p>
            </div>
            <div class="gir2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--gir2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">2</div>
                <h3>5-Layer Packaging</h3>
                <p>On shifting day, our trained packers arrive with bubble wrap, corrugated sheets, stretch wrap, and sturdy boxes to wrap every household item securely.</p>
            </div>
            <div class="gir2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--gir2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">3</div>
                <h3>Dedicated Transit</h3>
                <p>Goods are loaded into sealed, covered container trucks. Our verified driver navigates the 110 km route with GPS updates for complete peace of mind.</p>
            </div>
            <div class="gir2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--gir2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">4</div>
                <h3>Unpack &amp; Placement</h3>
                <p>At your new Dumka home, we unload every box, place furniture where you need it, and assist with unpacking fragile dinnerware and appliances.</p>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions (FAQ) Section -->
<section class="gir2dum-section">
    <div class="container" style="max-width: 900px;">
        <div class="gir2dum-heading-center">
            <h2>Frequently Asked Questions &bull; Giridih to Dumka Shifting</h2>
            <p>Everything you need to know about pricing, transit times, insurance, and booking for the Giridih to Dumka route.</p>
        </div>
        <details class="gir2dum-faq-item">
            <summary>What is the road distance and transit time between Giridih and Dumka?</summary>
            <p>The road distance is approximately 110 kilometers via Bengabad, Madhupur, and NH-114A. A dedicated covered container truck normally completes door-to-door transit within 3 to 4 hours under regular conditions.</p>
        </details>
        <details class="gir2dum-faq-item">
            <summary>What are the average shifting charges from Giridih to Dumka?</summary>
            <p>Our shifting charges range from Rs 6,500 to 9,000 for a 1 BHK flat, Rs 10,500 to 15,500 for a 2 BHK home, Rs 15,500 to 22,000 for a 3 BHK residence, and Rs 20,000 to 28,000 for large bungalows and villas, inclusive of packing materials, loading, transit, and unloading.</p>
        </details>
        <details class="gir2dum-faq-item">
            <summary>Do you offer valid GST bills for government transfer claims?</summary>
            <p>Yes. We provide complete 100% genuine GST-compliant moving invoices, consignment notes (bilty), packing inventories, and payment receipts accepted across state government secretariats, educational institutions, judiciary, and PSU banks.</p>
        </details>
        <details class="gir2dum-faq-item">
            <summary>Can I transport my bike or scooter along with household furniture?</summary>
            <p>Yes. We securely pack two-wheelers using bubble wrap, corrugated sheets, and cardboard frame wraps, strapping them safely inside our container trucks alongside your household cargo with zero risk of scratches or denting.</p>
        </details>
        <details class="gir2dum-faq-item">
            <summary>Which localities in Giridih and Dumka do you service?</summary>
            <p>We provide full pickup services throughout Giridih (Makatpur, Bada Chowk, Pachamba, Sirsia, Mohanpur, Giridih Court) and direct delivery across Dumka (Tin Bazar, Rasikpur, Dudhani, Dumka Court, SP College Road, and Airport Area).</p>
        </details>
        <details class="gir2dum-faq-item">
            <summary>How far in advance should I book my move from Giridih to Dumka?</summary>
            <p>We recommend booking 2 to 3 days in advance to reserve your preferred loading time and truck size. However, we also accommodate urgent same-day booking requests depending on fleet availability.</p>
        </details>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="gir2dum-section gir2dum-section-gray" style="padding-bottom: 90px;">
    <div class="container">
        <div class="gir2dum-cta-card">
            <h2>Ready to Relocate from Giridih to Dumka?</h2>
            <p>Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate, verified driver allocation, and complete doorstep shifting support.</p>
            <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
                <a href="tel:+918409531615" class="gir2dum-btn-primary" style="background: #f59e0b; color: #0f172a;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    Call: +91 8409531615
                </a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="gir2dum-btn-secondary">Request Written Quotation</a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
