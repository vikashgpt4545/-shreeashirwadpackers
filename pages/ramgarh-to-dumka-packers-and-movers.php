<?php
/**
 * Page Name: Ramgarh to Dumka Packers and Movers
 * Route Slug: ramgarh-to-dumka-packers-and-movers
 * Description: Dependable household shifting, cantonment and CCL relocation, vehicle transport, and industrial goods moving from Ramgarh to Dumka via NH-320 and NH-114A.
 * Focus Keywords: ramgarh to dumka packers and movers, packers and movers ramgarh to dumka, house shifting ramgarh to dumka, car transport ramgarh to dumka, bike parcel ramgarh to dumka, army cantonment movers dumka
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Ramgarh to Dumka Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe Ramgarh to Dumka packers and movers. 245 km highway transit via NH-320 & NH-114A, 5-layer packing, cantonment & CCL bills, car carriers. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/ramgarh-to-dumka-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="ramgarh to dumka packers and movers, packers and movers ramgarh to dumka, house shifting ramgarh to dumka, car transport ramgarh to dumka, bike parcel ramgarh to dumka, army cantonment movers dumka">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Ramgarh">

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

    <!-- Scoped CSS for Route 9 (Ramgarh to Dumka) -->
    <style>
        :root {
            --ram2dum-primary: #1e3a5f;
            --ram2dum-secondary: #0284c7;
            --ram2dum-accent: #f59e0b;
            --ram2dum-accent-light: #fef3c7;
            --ram2dum-dark: #0f172a;
            --ram2dum-gray-bg: #f8fafc;
            --ram2dum-border: #e2e8f0;
            --ram2dum-shadow: 0 10px 25px -5px rgba(30, 58, 95, 0.08), 0 8px 10px -6px rgba(30, 58, 95, 0.04);
        }

        .ram2dum-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 95, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .ram2dum-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .ram2dum-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .ram2dum-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .ram2dum-badge {
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

        .ram2dum-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .ram2dum-btn-primary {
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

        .ram2dum-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.45);
            color: #0f172a;
        }

        .ram2dum-btn-secondary {
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

        .ram2dum-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .ram2dum-section {
            padding: 70px 0;
        }

        .ram2dum-section-gray {
            background-color: var(--ram2dum-gray-bg);
        }

        .ram2dum-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .ram2dum-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            color: var(--ram2dum-dark);
            margin-bottom: 16px;
        }

        .ram2dum-heading-center p {
            color: #64748b;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        .ram2dum-strip {
            background: #ffffff;
            border-bottom: 1px solid var(--ram2dum-border);
            padding: 24px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        }

        .ram2dum-strip-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .ram2dum-strip-item {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .ram2dum-strip-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--ram2dum-accent-light);
            color: #b45309;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .ram2dum-strip-text h4 {
            font-size: 0.95rem;
            margin: 0 0 2px 0;
            color: var(--ram2dum-dark);
            font-weight: 700;
        }

        .ram2dum-strip-text p {
            margin: 0;
            font-size: 0.85rem;
            color: #64748b;
        }

        .ram2dum-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            align-items: center;
        }

        .ram2dum-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .ram2dum-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .ram2dum-card {
            background: #ffffff;
            border: 1px solid var(--ram2dum-border);
            border-radius: 12px;
            padding: 30px;
            box-shadow: var(--ram2dum-shadow);
            transition: transform 0.3s ease;
        }

        .ram2dum-card:hover {
            transform: translateY(-5px);
        }

        .ram2dum-card-icon {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            background: #e0f2fe;
            color: var(--ram2dum-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .ram2dum-card h3 {
            font-size: 1.25rem;
            margin-bottom: 12px;
            color: var(--ram2dum-dark);
        }

        .ram2dum-card p {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
        }

        .ram2dum-table-wrap {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--ram2dum-border);
            box-shadow: var(--ram2dum-shadow);
            overflow-x: auto;
            margin-top: 30px;
        }

        .ram2dum-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }

        .ram2dum-table th {
            background: var(--ram2dum-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 600;
        }

        .ram2dum-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--ram2dum-border);
            color: #334155;
        }

        .ram2dum-table tr:last-child td {
            border-bottom: none;
        }

        .ram2dum-table tr:hover td {
            background-color: #f1f5f9;
        }

        .ram2dum-timeline {
            position: relative;
            padding-left: 36px;
            margin-top: 30px;
        }

        .ram2dum-timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 14px;
            width: 3px;
            background: #cbd5e1;
        }

        .ram2dum-timeline-item {
            position: relative;
            margin-bottom: 32px;
        }

        .ram2dum-timeline-dot {
            position: absolute;
            left: -36px;
            top: 4px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--ram2dum-secondary);
            border: 4px solid #ffffff;
            box-shadow: 0 0 0 2px var(--ram2dum-secondary);
        }

        .ram2dum-timeline-content h4 {
            font-size: 1.15rem;
            color: var(--ram2dum-dark);
            margin: 0 0 6px 0;
        }

        .ram2dum-timeline-content p {
            color: #64748b;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.6;
        }

        .dum2gir-img-box,
        .ram2dum-img-box {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--ram2dum-shadow);
            border: 1px solid var(--ram2dum-border);
        }

        .ram2dum-img-box img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
        }

        .ram2dum-img-caption {
            padding: 12px 16px;
            background: #ffffff;
            font-size: 0.85rem;
            color: #64748b;
            border-top: 1px solid var(--ram2dum-border);
        }

        .ram2dum-faq-item {
            background: #ffffff;
            border: 1px solid var(--ram2dum-border);
            border-radius: 10px;
            margin-bottom: 16px;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        .ram2dum-faq-item summary {
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--ram2dum-dark);
            cursor: pointer;
            outline: none;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .ram2dum-faq-item summary::after {
            content: '+';
            font-size: 1.3rem;
            color: var(--ram2dum-secondary);
            font-weight: 700;
        }

        .ram2dum-faq-item[open] summary::after {
            content: '\2212';
        }

        .ram2dum-faq-item p {
            margin-top: 14px;
            color: #475569;
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .ram2dum-cta-card {
            background: linear-gradient(135deg, var(--ram2dum-dark) 0%, var(--ram2dum-primary) 100%);
            border-radius: 16px;
            padding: 50px 40px;
            color: #ffffff;
            text-align: center;
            box-shadow: 0 20px 30px rgba(15, 23, 42, 0.2);
        }

        .ram2dum-cta-card h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            margin-bottom: 16px;
        }

        .ram2dum-cta-card p {
            max-width: 650px;
            margin: 0 auto 30px;
            color: #cbd5e1;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        @media (max-width: 991px) {
            .ram2dum-grid-2,
            .ram2dum-grid-3,
            .ram2dum-grid-4 {
                grid-template-columns: 1fr;
            }
            .ram2dum-hero h1 {
                font-size: 2.2rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Ramgarh to Dumka",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 9,000 - 35,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Road, Near Subhash Chowk",
            "addressLocality": "Ramgarh Cantonment",
            "addressRegion": "Jharkhand",
            "postalCode": "829122",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.6332,
            "longitude": 85.5139
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Ramgarh"
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
        "serviceType": "Intercity Relocation, Industrial Moving & Vehicle Transport",
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
        "description": "Comprehensive packing, moving, military cantonment relocation, vehicle transport, and luggage moving from Ramgarh to Dumka.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "9000",
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
                "name": "Packers and Movers Ramgarh",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ramgarh"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Ramgarh to Dumka Route",
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
                "name": "What is the road distance and transit duration from Ramgarh to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance from Ramgarh to Dumka is roughly 245 km via NH-320 through Petarwar, Chas, Dhanbad/Govindpur bypass, Jamtara, and NH-114A. Dedicated container trucks complete door-to-door transit within 5.5 to 7 hours."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving charges from Ramgarh to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Rates typically start at Rs 9,000 to 13,000 for a 1 BHK flat, Rs 14,000 to 20,500 for a 2 BHK apartment, Rs 19,000 to 27,500 for a 3 BHK home, and Rs 25,000 to 36,000 for independent villas or large officer bungalows."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide military transfer billing for Ramgarh Cantonment and CCL officers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers issues valid GST invoices, computerized consignment notes (bilty), detailed packing manifests, and insurance receipts compliant with Army Cantonment Board, CCL Barkakana/Argada, and NTPC Patratu guidelines."
                }
            },
            {
                "@type": "Question",
                "name": "How is car and two-wheeler transport handled between Ramgarh and Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Two-wheelers are securely crated in protective bubble wrap and corrugated boxes, while cars are transported on specialized car carriers or single-vehicle covered ramp trucks with GPS monitoring."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Dumka are covered for doorstep delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deliver across Dumka including Tin Bazar, Rasikpur, Dudhani, SP College Road, Dumka Court, Airport Road, and Kathikund."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="ram2dum-hero">
    <div class="container">
        <div class="ram2dum-badge-strip">
            <span class="ram2dum-badge">&#9733; Verified Intercity Route</span>
            <span class="ram2dum-badge">&#9679; 245 KM Highway Corridor</span>
            <span class="ram2dum-badge">&#10004; Cantonment &amp; CCL Approved Billing</span>
            <span class="ram2dum-badge">&#128225; Real-Time GPS Tracking</span>
        </div>
        <h1>Ramgarh to Dumka Packers and Movers Services</h1>
        <p class="lead">Dependable and seamless relocation services connecting the military cantonment, thermal power, and industrial center of Ramgarh with the Santhal Pargana sub-capital of Dumka. We deliver 5-layer heavy protective packaging, dedicated sealed container trucks, defense transfer paperwork, and all-risk transit insurance.</p>
        <div class="ram2dum-cta-group">
            <a href="tel:+918409531615" class="ram2dum-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call: +91 8409531615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="ram2dum-btn-secondary">Request Free Inspection Quote</a>
        </div>
    </div>
</section>

<!-- Route Quick Overview Strip -->
<section class="ram2dum-strip">
    <div class="container">
        <div class="ram2dum-strip-grid">
            <div class="ram2dum-strip-item">
                <div class="ram2dum-strip-icon">&#128666;</div>
                <div class="ram2dum-strip-text">
                    <h4>Direct Distance</h4>
                    <p>~245 KM via NH-320 &amp; NH-114A</p>
                </div>
            </div>
            <div class="ram2dum-strip-item">
                <div class="ram2dum-strip-icon">&#9201;</div>
                <div class="ram2dum-strip-text">
                    <h4>Transit Time</h4>
                    <p>5.5 to 7 Hours Door-to-Door</p>
                </div>
            </div>
            <div class="ram2dum-strip-item">
                <div class="ram2dum-strip-icon">&#128739;</div>
                <div class="ram2dum-strip-text">
                    <h4>Highway Route</h4>
                    <p>Via Petarwar, Chas &amp; Jamtara</p>
                </div>
            </div>
            <div class="ram2dum-strip-item">
                <div class="ram2dum-strip-icon">&#128737;</div>
                <div class="ram2dum-strip-text">
                    <h4>Cargo Protection</h4>
                    <p>Sealed Weatherproof Containers</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Narrative Section: Detailed Shifting Process -->
<section class="ram2dum-section">
    <div class="container">
        <div class="ram2dum-grid-2">
            <div>
                <span style="color: var(--ram2dum-secondary); font-weight: 700; text-transform: uppercase; font-size: 0.88rem; letter-spacing: 1px;">Central Industrial Belt to Santhal Pargana</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--ram2dum-dark); margin: 12px 0 20px;">Reliable Relocation Solutions from Ramgarh to Dumka</h2>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 18px;">
                    Moving between Ramgarh and Dumka links two distinct economic engines of Jharkhand: the military cantonment and industrial power corridor of Ramgarh with the administrative, cultural, and judicial headquarters of Santhal Pargana. The 245-kilometer transit navigates NH-320 through Petarwar, connects past Chas and Bokaro, bypasses Dhanbad via Govindpur on the Grand Trunk corridor, and follows NH-114A past Jamtara directly into Dumka.
                </p>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 22px;">
                    Shree Ashirwad Packers and Movers brings years of specialized highway logistics expertise to this corridor. We handle moves for defense officers posted out of Ramgarh Cantonment (PRC and SRC), engineers and executives from Patratu Thermal Power Station (PVUNL/NTPC), mining managers in CCL Barkakana and Argada, and relocating families. Our crews ensure that every item &mdash; from delicate bone china to heavy solid-wood dining sets &mdash; arrives in pristine condition.
                </p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px; font-weight: 500;">
                    <li>Zero-transshipment container vehicles: no intermediate unloading or co-loading with random cargo.</li>
                    <li>Defense and PSU compliant documentation: GST invoices, bilty, and itemized manifests for smooth reimbursement.</li>
                    <li>Trained packing crews skilled in dismantling and reassembling modular beds, wardrobes, and TV units.</li>
                    <li>24/7 shipment tracking with scheduled arrival windows and responsive move coordinators.</li>
                </ul>
            </div>
            <div>
                <div class="ram2dum-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Ramgarh to Dumka Packers and Movers container truck" title="Closed container truck on Ramgarh to Dumka relocation route">
                    <div class="ram2dum-img-caption">
                        <strong>Figure 1:</strong> Dedicated sealed container truck on the 245 km Ramgarh to Dumka intercity highway corridor.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Highlights & Specialized Services -->
<section class="ram2dum-section ram2dum-section-gray">
    <div class="container">
        <div class="ram2dum-heading-center">
            <h2>Specialized Moving Solutions for the Ramgarh to Dumka Corridor</h2>
            <p>We provide full-spectrum shifting solutions designed to handle delicate electronics, heavy wooden furniture, vehicles, and business stock with pinpoint precision.</p>
        </div>
        <div class="ram2dum-grid-3">
            <div class="ram2dum-card">
                <div class="dum2gir-card-icon ram2dum-card-icon">&#127968;</div>
                <h3>Complete Home Relocation</h3>
                <p>From fragile chinaware and kitchen electronics to heavy sofas and wardrobes, our seasoned crews pack room-by-room with multi-layer cushioning and systematically label every box for fast room-wise assembly in Dumka.</p>
            </div>
            <div class="dum2gir-card-icon ram2dum-card-icon">&#9878;</div>
            <div class="ram2dum-card">
                <h3>Army &amp; Cantonment Relocation</h3>
                <p>We cater to frequent army postings from Ramgarh Cantonment (Punjab and Sikh Regimental Centres) with approved military documentation, priority loading dates, and complete door-to-quarter shifting assistance.</p>
            </div>
            <div class="dum2gir-card-icon ram2dum-card-icon">&#128663;</div>
            <div class="ram2dum-card">
                <h3>Car &amp; Bike Transportation</h3>
                <p>Protect your motorbikes and cars during highway transit. We secure two-wheelers with custom crating and wheel clamps, while cars travel on hydraulic enclosed carriers with doorstep delivery.</p>
            </div>
            <div class="dum2gir-card-icon ram2dum-card-icon">&#128230;</div>
            <div class="ram2dum-card">
                <h3>5-Layer Heavy Packaging</h3>
                <p>We utilize multi-layer protective packaging: virgin air-bubble sheets, high-density corrugated rolls, stretch film, edge corner guards, and moisture-barrier thermal wraps ensuring complete safety.</p>
            </div>
            <div class="dum2gir-card-icon ram2dum-card-icon">&#128196;</div>
            <div class="ram2dum-card">
                <h3>CCL &amp; NTPC Transfer Billing</h3>
                <p>Complete paperwork packages for Central Coalfields Limited (CCL Barkakana/Argada) and Patratu Vidyut Utpadan Nigam Limited (PVUNL) employees, including authentic GST invoices and transit bilty.</p>
            </div>
            <div class="dum2gir-card-icon ram2dum-card-icon">&#128737;</div>
            <div class="ram2dum-card">
                <h3>Full Transit Insurance</h3>
                <p>Optional all-risk transit insurance coverage protecting your valuables against unforeseen road conditions, environmental factors, or transit accidents, backed by prompt claim settlement support.</p>
            </div>
        </div>
    </div>
</section>

<!-- Image Showcase Row 1: Packing & Car Transport -->
<section class="ram2dum-section">
    <div class="container">
        <div class="dum2gir-grid-2 ram2dum-grid-2">
            <div class="ram2dum-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household packaging Ramgarh to Dumka" title="Professional packaging for Ramgarh to Dumka move">
                <div class="ram2dum-img-caption">
                    <strong>Figure 2:</strong> Systematic 5-layer protective packing for furniture and electronics before loading into the container.
                </div>
            </div>
            <div class="ram2dum-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transportation carrier loading Ramgarh to Dumka" title="Vehicle carrier transit Ramgarh to Dumka">
                <div class="ram2dum-img-caption">
                    <strong>Figure 3:</strong> Professional loading of motor vehicles and cars using hydraulic ramps and heavy-duty wheel chocks.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transparent Pricing Table Section -->
<section class="ram2dum-section ram2dum-section-gray">
    <div class="container">
        <div class="ram2dum-heading-center">
            <h2>Estimated Shifting Charges from Ramgarh to Dumka</h2>
            <p>Our pricing is completely clear, volume-based, and honest. Review our typical relocation charges for the 245 km Ramgarh to Dumka corridor below.</p>
        </div>
        <div class="ram2dum-table-wrap">
            <table class="ram2dum-table">
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
                        <td>Rs 3,000 - 4,500</td>
                        <td>Rs 6,000 - 8,500</td>
                        <td><strong>Rs 9,000 - 13,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Household</strong></td>
                        <td>Rs 5,500 - 8,000</td>
                        <td>Rs 8,500 - 12,500</td>
                        <td><strong>Rs 14,000 - 20,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Large Household</strong></td>
                        <td>Rs 7,500 - 11,000</td>
                        <td>Rs 11,500 - 16,500</td>
                        <td><strong>Rs 19,000 - 27,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Villa / Duplex</strong></td>
                        <td>Rs 10,000 - 15,000</td>
                        <td>Rs 15,000 - 21,000</td>
                        <td><strong>Rs 25,000 - 36,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler / Bike Transport</strong></td>
                        <td>Rs 1,200 - 1,800</td>
                        <td>Rs 2,200 - 3,500</td>
                        <td><strong>Rs 3,400 - 5,300</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Car Relocation (Hatchback/Sedan/SUV)</strong></td>
                        <td>Rs 1,500 - 2,500</td>
                        <td>Rs 7,500 - 11,500</td>
                        <td><strong>Rs 9,000 - 14,000</strong></td>
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
<section class="ram2dum-section">
    <div class="container">
        <div class="ram2dum-grid-2">
            <div>
                <span style="color: var(--ram2dum-secondary); font-weight: 700; text-transform: uppercase; font-size: 0.88rem; letter-spacing: 1px;">Highway Route Profile &amp; Milestones</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--ram2dum-dark); margin: 12px 0 20px;">The 245 KM Highway Journey from Ramgarh to Dumka</h2>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 18px;">
                    The journey between Ramgarh and Dumka traverses key central Jharkhand townships, connecting the coal and industrial belts to Santhal Pargana. Our dispatchers monitor road conditions to maintain punctual delivery times.
                </p>
                <div class="ram2dum-timeline">
                    <div class="dum2ram-timeline-item ram2dum-timeline-item">
                        <div class="ram2dum-timeline-dot"></div>
                        <div class="ram2dum-timeline-content">
                            <h4>Checkpoint 1: Origin Pickup in Ramgarh</h4>
                            <p>Pickup across Ramgarh Cantonment, Subhash Chowk, Chitarpur, Gola Road, Barkakana, and Patratu before entering NH-320 heading northeast.</p>
                        </div>
                    </div>
                    <div class="dum2ram-timeline-item ram2dum-timeline-item">
                        <div class="ram2dum-timeline-dot"></div>
                        <div class="ram2dum-timeline-content">
                            <h4>Checkpoint 2: Petarwar, Chas &amp; Bokaro Bypass</h4>
                            <p>Cruising past Petarwar and Chas, navigating wide bypass highways without city bottlenecks.</p>
                        </div>
                    </div>
                    <div class="dum2ram-timeline-item ram2dum-timeline-item">
                        <div class="ram2dum-timeline-dot"></div>
                        <div class="ram2dum-timeline-content">
                            <h4>Checkpoint 3: Govindpur Grand Trunk Bypass to Jamtara</h4>
                            <p>Continuing past Govindpur bypass towards Jamtara on NH-114A, where drivers inspect container cargo lashings before entering Dumka district.</p>
                        </div>
                    </div>
                    <div class="dum2ram-timeline-item ram2dum-timeline-item">
                        <div class="ram2dum-timeline-dot"></div>
                        <div class="ram2dum-timeline-content">
                            <h4>Checkpoint 4: Doorstep Delivery in Dumka</h4>
                            <p>Safe arrival across Tin Bazar, Rasikpur, Dudhani, SP College Road, and Dumka Court, followed by unboxing and furniture placement.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="ram2dum-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and setup service in Dumka" title="Careful unloading and arrangement in Dumka">
                    <div class="ram2dum-img-caption">
                        <strong>Figure 4:</strong> Dedicated moving staff executing careful unloading, unpacking, and room-wise placement at the destination in Dumka.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Shifting Profiles Section -->
<section class="ram2dum-section ram2dum-section-gray">
    <div class="container">
        <div class="ram2dum-heading-center">
            <h2>Specialized Relocation Categories Handled Daily on the Ramgarh to Dumka Route</h2>
            <p>Our operational familiarity with Ramgarh and Santhal Pargana allows us to deliver purpose-built relocation plans tailored to specific client requirements.</p>
        </div>
        <div class="ram2dum-grid-3">
            <div class="ram2dum-card">
                <div class="dum2gir-card-icon ram2dum-card-icon">&#9878;</div>
                <h3>Army &amp; Defense Personnel Postings</h3>
                <p>Ramgarh is home to the historic Ramgarh Cantonment, housing the Punjab Regimental Centre (PRC) and the Sikh Regimental Centre (SRC). We specialize in defense personnel transfers with IBA-approved documentation, priority scheduling, and respectful, damage-free shifting into civilian quarters or government quarters in Dumka.</p>
            </div>
            <div class="dum2gir-card-icon ram2dum-card-icon">&#128188;</div>
            <div class="ram2dum-card">
                <h3>CCL, NTPC &amp; Power Plant Relocations</h3>
                <p>Central Coalfields Limited (CCL) administrative colonies in Barkakana and Argada, alongside the super-thermal power plant at PVUNL Patratu, generate frequent transfers. We manage heavy household items, fragile electronics, and complete office files with dedicated container trucks.</p>
            </div>
            <div class="dum2gir-card-icon ram2dum-card-icon">&#127968;</div>
            <div class="ram2dum-card">
                <h3>Commercial &amp; Family Relocation</h3>
                <p>Families moving from Ramgarh to the Santhal Pargana sub-capital of Dumka enjoy our full-service shifting packages. We take care of every detail: disassembling modular furniture, securing large double-door refrigerators, packing china sets, and providing comprehensive transit insurance.</p>
            </div>
        </div>
    </div>
</section>

<!-- Neighborhood Pickup & Delivery Directory -->
<section class="ram2dum-section">
    <div class="container">
        <div class="ram2dum-heading-center">
            <h2>Complete Neighborhood Coverage in Ramgarh and Dumka</h2>
            <p>Our localized pickup vehicles and heavy container trucks provide 100% comprehensive doorstep coverage across every municipal ward and peripheral sector.</p>
        </div>
        <div class="ram2dum-grid-2">
            <div class="ram2dum-card">
                <h3 style="color: var(--ram2dum-primary); margin-bottom: 14px;">Ramgarh Origin Coverage Areas</h3>
                <p style="margin-bottom: 12px; color: #475569;">Our local loading crews operate across all sectors of Ramgarh district:</p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px;">
                    <li><strong>Ramgarh Cantonment &amp; Main Market:</strong> Defense colonies, Subhash Chowk, and central residential blocks.</li>
                    <li><strong>Barkakana &amp; Argada:</strong> CCL officers colonies, railway quarters, and industrial colonies.</li>
                    <li><strong>Patratu Township:</strong> PVUNL / NTPC power plant staff colonies, lake resort zone, and modern housing.</li>
                    <li><strong>Chitarpur &amp; Gola:</strong> Educational and commercial townships along the NH-320 link.</li>
                    <li><strong>Kuju &amp; Mandu:</strong> Industrial coal mining corridors with doorstep container loading.</li>
                </ul>
            </div>
            <div class="ram2dum-card">
                <h3 style="color: var(--ram2dum-primary); margin-bottom: 14px;">Dumka Destination Coverage Areas</h3>
                <p style="margin-bottom: 12px; color: #475569;">Our destination unloading team provides direct placement and unpacking assistance throughout Dumka district:</p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px;">
                    <li><strong>Tin Bazar &amp; Chowk Area:</strong> Central commercial and residential sectors with timely scheduled morning pickups.</li>
                    <li><strong>Rasikpur &amp; Dudhani:</strong> Dense family residential zones with dedicated door-to-door packing teams.</li>
                    <li><strong>SP College Road &amp; Dighee:</strong> Educational campus residential quarters and professor bungalows.</li>
                    <li><strong>Dumka Court &amp; Collectorate Colony:</strong> Judicial, administrative, and government employee residential complexes.</li>
                    <li><strong>Airport Road &amp; Kathikund Bypass:</strong> Modern residential colonies and upcoming suburban extensions.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Step-by-Step Moving Process -->
<section class="ram2dum-section ram2dum-section-gray">
    <div class="container">
        <div class="ram2dum-heading-center">
            <h2>Our 4-Step Seamless Moving Procedure</h2>
            <p>From initial booking to final placement of your furniture in Dumka, we execute relocations through an organized, stress-free workflow.</p>
        </div>
        <div class="dum2god-grid-4 ram2dum-grid-4">
            <div class="ram2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--ram2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">1</div>
                <h3>Survey &amp; Estimate</h3>
                <p>We provide a prompt home survey or video consultation to inspect items, determine truck volume, and issue a transparent written quote.</p>
            </div>
            <div class="ram2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--ram2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">2</div>
                <h3>5-Layer Packaging</h3>
                <p>On shifting day, our trained packers arrive with bubble wrap, corrugated sheets, stretch wrap, and sturdy boxes to wrap every household item securely.</p>
            </div>
            <div class="ram2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--ram2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">3</div>
                <h3>Dedicated Transit</h3>
                <p>Goods are loaded into sealed, covered container trucks. Our verified driver navigates the 245 km route with GPS updates for complete peace of mind.</p>
            </div>
            <div class="ram2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--ram2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">4</div>
                <h3>Unpack &amp; Placement</h3>
                <p>At your new Dumka home, we unload every box, place furniture where you need it, and assist with unpacking fragile dinnerware and appliances.</p>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions (FAQ) Section -->
<section class="ram2dum-section">
    <div class="container" style="max-width: 900px;">
        <div class="ram2dum-heading-center">
            <h2>Frequently Asked Questions &bull; Ramgarh to Dumka Shifting</h2>
            <p>Everything you need to know about pricing, transit times, insurance, and booking for the Ramgarh to Dumka route.</p>
        </div>
        <details class="ram2dum-faq-item">
            <summary>What is the road distance and transit time between Ramgarh and Dumka?</summary>
            <p>The road distance is approximately 245 kilometers via NH-320 through Petarwar, Chas, Dhanbad bypass, Jamtara, and NH-114A. A dedicated covered container truck normally completes door-to-door transit within 5.5 to 7 hours.</p>
        </details>
        <details class="ram2dum-faq-item">
            <summary>What are the average shifting charges from Ramgarh to Dumka?</summary>
            <p>Our shifting charges range from Rs 9,000 to 13,000 for a 1 BHK flat, Rs 14,000 to 20,500 for a 2 BHK home, Rs 19,000 to 27,500 for a 3 BHK residence, and Rs 25,000 to 36,000 for large bungalows and villas, inclusive of packing materials, loading, transit, and unloading.</p>
        </details>
        <details class="ram2dum-faq-item">
            <summary>Do you offer valid GST bills for military and CCL transfer claims?</summary>
            <p>Yes. We provide complete 100% genuine GST-compliant moving invoices, consignment notes (bilty), packing inventories, and payment receipts accepted across Army Cantonment accounts, CCL Barkakana, NTPC Patratu, and Jharkhand state departments.</p>
        </details>
        <details class="ram2dum-faq-item">
            <summary>Can I transport my bike or scooter along with household furniture?</summary>
            <p>Yes. We securely pack two-wheelers using bubble wrap, corrugated sheets, and cardboard frame wraps, strapping them safely inside our container trucks alongside your household cargo with zero risk of scratches or denting.</p>
        </details>
        <details class="ram2dum-faq-item">
            <summary>Which localities in Ramgarh and Dumka do you service?</summary>
            <p>We provide full pickup services throughout Ramgarh (Ramgarh Cantonment, Subhash Chowk, Chitarpur, Gola Road, Barkakana, Argada, Patratu) and direct delivery across Dumka (Tin Bazar, Rasikpur, Dudhani, Dumka Court, SP College Road, and Airport Area).</p>
        </details>
        <details class="ram2dum-faq-item">
            <summary>How far in advance should I book my move from Ramgarh to Dumka?</summary>
            <p>We recommend booking 2 to 3 days in advance to reserve your preferred loading time and truck size. However, we also accommodate urgent same-day booking requests depending on fleet availability.</p>
        </details>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="ram2dum-section ram2dum-section-gray" style="padding-bottom: 90px;">
    <div class="container">
        <div class="ram2dum-cta-card">
            <h2>Ready to Relocate from Ramgarh to Dumka?</h2>
            <p>Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate, verified driver allocation, and complete doorstep shifting support.</p>
            <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
                <a href="tel:+918409531615" class="ram2dum-btn-primary" style="background: #f59e0b; color: #0f172a;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    Call: +91 8409531615
                </a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="ram2dum-btn-secondary">Request Written Quotation</a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
