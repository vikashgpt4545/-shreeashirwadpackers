<?php
/**
 * Page Name: Bokaro to Dumka Packers and Movers
 * Route Slug: bokaro-to-dumka-packers-and-movers
 * Description: Dependable household shifting, SAIL steel plant employee relocation, vehicle transport, and commercial goods moving from Bokaro to Dumka via NH-320 and NH-114A.
 * Focus Keywords: bokaro to dumka packers and movers, packers and movers bokaro to dumka, house shifting bokaro to dumka, car transport bokaro to dumka, bike parcel bokaro to dumka, sail bokaro employee movers dumka
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Bokaro to Dumka Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe & reliable Bokaro to Dumka packers and movers. 225 km transit via NH-320 & NH-114A, 5-layer packing, SAIL & govt transfer bills, car carriers. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/bokaro-to-dumka-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="bokaro to dumka packers and movers, packers and movers bokaro to dumka, house shifting bokaro to dumka, car transport bokaro to dumka, bike parcel bokaro to dumka, sail bokaro employee movers dumka">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Bokaro">

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

    <!-- Scoped CSS for Route 6 (Bokaro to Dumka) -->
    <style>
        :root {
            --bok2dum-primary: #1e3a5f;
            --bok2dum-secondary: #0284c7;
            --bok2dum-accent: #f59e0b;
            --bok2dum-accent-light: #fef3c7;
            --bok2dum-dark: #0f172a;
            --bok2dum-gray-bg: #f8fafc;
            --bok2dum-border: #e2e8f0;
            --bok2dum-shadow: 0 10px 25px -5px rgba(30, 58, 95, 0.08), 0 8px 10px -6px rgba(30, 58, 95, 0.04);
        }

        .bok2dum-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 95, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .bok2dum-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .bok2dum-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .bok2dum-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .bok2dum-badge {
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

        .bok2dum-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .bok2dum-btn-primary {
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

        .bok2dum-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.45);
            color: #0f172a;
        }

        .bok2dum-btn-secondary {
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

        .bok2dum-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .bok2dum-section {
            padding: 70px 0;
        }

        .bok2dum-section-gray {
            background-color: var(--bok2dum-gray-bg);
        }

        .bok2dum-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .bok2dum-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            color: var(--bok2dum-dark);
            margin-bottom: 16px;
        }

        .bok2dum-heading-center p {
            color: #64748b;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        .bok2dum-strip {
            background: #ffffff;
            border-bottom: 1px solid var(--bok2dum-border);
            padding: 24px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        }

        .bok2dum-strip-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
        }

        .bok2dum-strip-item {
            display: flex;
            align-items: center;
            gap: 14px;
        }

        .bok2dum-strip-icon {
            width: 48px;
            height: 48px;
            border-radius: 10px;
            background: var(--bok2dum-accent-light);
            color: #b45309;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            flex-shrink: 0;
        }

        .bok2dum-strip-text h4 {
            font-size: 0.95rem;
            margin: 0 0 2px 0;
            color: var(--bok2dum-dark);
            font-weight: 700;
        }

        .bok2dum-strip-text p {
            margin: 0;
            font-size: 0.85rem;
            color: #64748b;
        }

        .bok2dum-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            align-items: center;
        }

        .bok2dum-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .bok2dum-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .bok2dum-card {
            background: #ffffff;
            border: 1px solid var(--bok2dum-border);
            border-radius: 12px;
            padding: 30px;
            box-shadow: var(--bok2dum-shadow);
            transition: transform 0.3s ease;
        }

        .bok2dum-card:hover {
            transform: translateY(-5px);
        }

        .bok2dum-card-icon {
            width: 56px;
            height: 56px;
            border-radius: 12px;
            background: #e0f2fe;
            color: var(--bok2dum-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }

        .bok2dum-card h3 {
            font-size: 1.25rem;
            margin-bottom: 12px;
            color: var(--bok2dum-dark);
        }

        .bok2dum-card p {
            color: #64748b;
            font-size: 0.95rem;
            line-height: 1.6;
            margin: 0;
        }

        .bok2dum-table-wrap {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--bok2dum-border);
            box-shadow: var(--bok2dum-shadow);
            overflow-x: auto;
            margin-top: 30px;
        }

        .bok2dum-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }

        .bok2dum-table th {
            background: var(--bok2dum-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 600;
        }

        .bok2dum-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--bok2dum-border);
            color: #334155;
        }

        .bok2dum-table tr:last-child td {
            border-bottom: none;
        }

        .bok2dum-table tr:hover td {
            background-color: #f1f5f9;
        }

        .bok2dum-timeline {
            position: relative;
            padding-left: 36px;
            margin-top: 30px;
        }

        .bok2dum-timeline::before {
            content: '';
            position: absolute;
            top: 0;
            bottom: 0;
            left: 14px;
            width: 3px;
            background: #cbd5e1;
        }

        .bok2dum-timeline-item {
            position: relative;
            margin-bottom: 32px;
        }

        .bok2dum-timeline-dot {
            position: absolute;
            left: -36px;
            top: 4px;
            width: 24px;
            height: 24px;
            border-radius: 50%;
            background: var(--bok2dum-secondary);
            border: 4px solid #ffffff;
            box-shadow: 0 0 0 2px var(--bok2dum-secondary);
        }

        .bok2dum-timeline-content h4 {
            font-size: 1.15rem;
            color: var(--bok2dum-dark);
            margin: 0 0 6px 0;
        }

        .bok2dum-timeline-content p {
            color: #64748b;
            font-size: 0.95rem;
            margin: 0;
            line-height: 1.6;
        }

        .bok2dum-img-box {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: var(--bok2dum-shadow);
            border: 1px solid var(--bok2dum-border);
        }

        .bok2dum-img-box img {
            width: 100%;
            height: 270px;
            object-fit: cover;
            display: block;
        }

        .bok2dum-img-caption {
            padding: 12px 16px;
            background: #ffffff;
            font-size: 0.85rem;
            color: #64748b;
            border-top: 1px solid var(--bok2dum-border);
        }

        .bok2dum-faq-item {
            background: #ffffff;
            border: 1px solid var(--bok2dum-border);
            border-radius: 10px;
            margin-bottom: 16px;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        .bok2dum-faq-item summary {
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--bok2dum-dark);
            cursor: pointer;
            outline: none;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .bok2dum-faq-item summary::after {
            content: '+';
            font-size: 1.3rem;
            color: var(--bok2dum-secondary);
            font-weight: 700;
        }

        .bok2dum-faq-item[open] summary::after {
            content: '\2212';
        }

        .bok2dum-faq-item p {
            margin-top: 14px;
            color: #475569;
            font-size: 0.95rem;
            line-height: 1.65;
        }

        .bok2dum-cta-card {
            background: linear-gradient(135deg, var(--bok2dum-dark) 0%, var(--bok2dum-primary) 100%);
            border-radius: 16px;
            padding: 50px 40px;
            color: #ffffff;
            text-align: center;
            box-shadow: 0 20px 30px rgba(15, 23, 42, 0.2);
        }

        .bok2dum-cta-card h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            margin-bottom: 16px;
        }

        .bok2dum-cta-card p {
            max-width: 650px;
            margin: 0 auto 30px;
            color: #cbd5e1;
            font-size: 1.05rem;
            line-height: 1.6;
        }

        @media (max-width: 991px) {
            .bok2dum-grid-2,
            .bok2dum-grid-3,
            .bok2dum-grid-4 {
                grid-template-columns: 1fr;
            }
            .bok2dum-hero h1 {
                font-size: 2.2rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Bokaro to Dumka",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 8,500 - 32,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "City Centre, Sector 4",
            "addressLocality": "Bokaro Steel City",
            "addressRegion": "Jharkhand",
            "postalCode": "827004",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.6693,
            "longitude": 86.1511
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Bokaro"
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
        "description": "Comprehensive packing, moving, SAIL employee relocation, car transport, and luggage moving from Bokaro Steel City to Dumka.",
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
                "name": "Packers and Movers Bokaro",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bokaro"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Bokaro to Dumka Route",
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
                "name": "What is the road distance and transit duration from Bokaro to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance from Bokaro Steel City to Dumka is approximately 225 km via NH-320, Chas, Dhanbad/Govindpur bypass, Jamtara, and NH-114A. Dedicated container trucks complete door-to-door transit within 5 to 6.5 hours."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving charges from Bokaro to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Rates typically start at Rs 8,500 to 12,500 for a 1 BHK flat, Rs 13,500 to 19,500 for a 2 BHK apartment, Rs 18,500 to 26,000 for a 3 BHK home, and Rs 24,000 to 34,000 for independent bungalows or large officer residences."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable documentation for SAIL Bokaro Steel Plant and State Govt employees?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers issues valid GST invoices, computerized consignment notes (bilty), detailed packing manifests, and insurance receipts compliant with SAIL BSL, Vedanta/Electrosteel, and state government transfer rules."
                }
            },
            {
                "@type": "Question",
                "name": "How is car and two-wheeler transport handled between Bokaro and Dumka?",
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
<section class="bok2dum-hero">
    <div class="container">
        <div class="bok2dum-badge-strip">
            <span class="bok2dum-badge">&#9733; Verified Intercity Route</span>
            <span class="bok2dum-badge">&#9679; 225 KM Highway Corridor</span>
            <span class="bok2dum-badge">&#10004; SAIL &amp; Govt Approved Billing</span>
            <span class="bok2dum-badge">&#128225; Real-Time GPS Tracking</span>
        </div>
        <h1>Bokaro to Dumka Packers and Movers Services</h1>
        <p class="lead">Dependable, safe, and professionally certified relocation services connecting the steel city of Bokaro with the Santhal Pargana sub-capital of Dumka. We deliver 5-layer heavy protective packaging, dedicated sealed container trucks, SAIL transfer paperwork, and comprehensive transit insurance.</p>
        <div class="bok2dum-cta-group">
            <a href="tel:+918409531615" class="bok2dum-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call: +91 8409531615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="bok2dum-btn-secondary">Request Free Inspection Quote</a>
        </div>
    </div>
</section>

<!-- Route Quick Overview Strip -->
<section class="bok2dum-strip">
    <div class="container">
        <div class="bok2dum-strip-grid">
            <div class="bok2dum-strip-item">
                <div class="bok2dum-strip-icon">&#128666;</div>
                <div class="bok2dum-strip-text">
                    <h4>Direct Distance</h4>
                    <p>~225 KM via NH-320 &amp; NH-114A</p>
                </div>
            </div>
            <div class="bok2dum-strip-item">
                <div class="bok2dum-strip-icon">&#9201;</div>
                <div class="bok2dum-strip-text">
                    <h4>Transit Time</h4>
                    <p>5 to 6.5 Hours Door-to-Door</p>
                </div>
            </div>
            <div class="bok2dum-strip-item">
                <div class="bok2dum-strip-icon">&#128739;</div>
                <div class="bok2dum-strip-text">
                    <h4>Highway Route</h4>
                    <p>Via Chas, Dhanbad Bypass &amp; Jamtara</p>
                </div>
            </div>
            <div class="bok2dum-strip-item">
                <div class="bok2dum-strip-icon">&#128737;</div>
                <div class="bok2dum-strip-text">
                    <h4>Cargo Protection</h4>
                    <p>Sealed Weatherproof Containers</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Narrative Section: Detailed Shifting Process -->
<section class="bok2dum-section">
    <div class="container">
        <div class="bok2dum-grid-2">
            <div>
                <span style="color: var(--bok2dum-secondary); font-weight: 700; text-transform: uppercase; font-size: 0.88rem; letter-spacing: 1px;">Steel City to Sub-Capital Direct Link</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--bok2dum-dark); margin: 12px 0 20px;">Safe Household Relocation from Bokaro to Dumka</h2>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 18px;">
                    Shifting from Bokaro Steel City to Dumka represents a crucial inter-district transition connecting central Jharkhand's major industrial manufacturing base with the administrative and cultural headquarters of Santhal Pargana. Spanning approximately 225 kilometers, the transit navigates NH-320 through Chas, bypasses busy Dhanbad city traffic via the Govindpur bypass on the Grand Trunk corridor, crosses Jamtara, and connects into Dumka along NH-114A.
                </p>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 22px;">
                    Shree Ashirwad Packers and Movers has mastered this highway corridor with dedicated container transport. Whether you are an officer of Steel Authority of India Limited (SAIL BSL), an engineer with Vedanta Electrosteel, a civil officer transferring to Santhal Pargana Commissionerate, or a family relocating residence, our professional teams manage packing, loading, highway transit, and destination placement with precision.
                </p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px; font-weight: 500;">
                    <li>Zero-transshipment guarantee: your goods remain sealed in the same container from Bokaro until arrival in Dumka.</li>
                    <li>Official documentation: GST invoices, bilty, and signed inventory manifests for effortless corporate and govt claims.</li>
                    <li>5-layer packaging ensuring complete protection for TVs, refrigerators, sofas, and glassware.</li>
                    <li>Real-time GPS tracking with constant driver updates and responsive customer support.</li>
                </ul>
            </div>
            <div>
                <div class="bok2dum-img-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Bokaro to Dumka Packers and Movers container truck" title="Closed container truck on Bokaro to Dumka relocation route">
                    <div class="bok2dum-img-caption">
                        <strong>Figure 1:</strong> Closed-body dedicated container truck transporting household goods safely along the 225 km Bokaro–Dumka highway corridor.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Highlights & Specialized Services -->
<section class="bok2dum-section bok2dum-section-gray">
    <div class="container">
        <div class="bok2dum-heading-center">
            <h2>Specialized Moving Solutions for the Bokaro to Dumka Corridor</h2>
            <p>We provide full-spectrum shifting solutions designed to handle delicate electronics, heavy wooden furniture, vehicles, and business stock with pinpoint precision.</p>
        </div>
        <div class="bok2dum-grid-3">
            <div class="bok2dum-card">
                <div class="dum2gir-card-icon bok2dum-card-icon">&#127968;</div>
                <h3>Complete Home Relocation</h3>
                <p>From fragile kitchen chinaware and appliances to heavy double beds and wardrobes, our seasoned crews pack room-by-room with multi-layer cushioning and systematically label every box for fast room-wise assembly in Dumka.</p>
            </div>
            <div class="dum2gir-card-icon bok2dum-card-icon">&#9878;</div>
            <div class="bok2dum-card">
                <h3>SAIL &amp; Industrial Employee Shifting</h3>
                <p>We cater to frequent executive transfers from SAIL Bokaro Steel Plant, Electrosteel, and Chandrapura thermal power with approved paperwork, prioritized loading dates, and complete door-to-quarter shifting assistance.</p>
            </div>
            <div class="bok2dum-card">
                <div class="dum2gir-card-icon bok2dum-card-icon">&#128663;</div>
                <h3>Car &amp; Bike Transportation</h3>
                <p>Protect your motorbikes and cars during highway transit. We secure two-wheelers with custom crating and wheel clamps, while cars travel on hydraulic enclosed carriers with doorstep delivery.</p>
            </div>
            <div class="bok2dum-card">
                <div class="dum2gir-card-icon bok2dum-card-icon">&#128230;</div>
                <h3>5-Layer Heavy Packaging</h3>
                <p>We utilize multi-layer protective packaging: virgin air-bubble sheets, high-density corrugated rolls, stretch film, edge corner guards, and moisture-barrier thermal wraps ensuring complete safety.</p>
            </div>
            <div class="bok2dum-card">
                <div class="dum2gir-card-icon bok2dum-card-icon">&#128196;</div>
                <h3>Govt &amp; Corporate Claim Billing</h3>
                <p>Complete documentation packages for government officers, teachers, banking executives, and PSU employees shifting to Dumka, including valid GST invoices, money receipts, lorry receipts, and itemized inventories.</p>
            </div>
            <div class="bok2dum-card">
                <div class="dum2gir-card-icon bok2dum-card-icon">&#128737;</div>
                <h3>Full Transit Insurance</h3>
                <p>Optional all-risk transit insurance coverage protecting your valuables against unforeseen road conditions, environmental factors, or transit accidents, backed by prompt claim settlement support.</p>
            </div>
        </div>
    </div>
</section>

<!-- Image Showcase Row 1: Packing & Car Transport -->
<section class="bok2dum-section">
    <div class="container">
        <div class="bok2dum-grid-2">
            <div class="bok2dum-img-box">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household packaging Bokaro to Dumka" title="Professional packaging for Bokaro to Dumka move">
                <div class="bok2dum-img-caption">
                    <strong>Figure 2:</strong> Systematic 5-layer protective packing for furniture and electronics before loading into the container.
                </div>
            </div>
            <div class="bok2dum-img-box">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transportation carrier loading Bokaro to Dumka" title="Vehicle carrier transit Bokaro to Dumka">
                <div class="bok2dum-img-caption">
                    <strong>Figure 3:</strong> Professional loading of motor vehicles and cars using hydraulic ramps and heavy-duty wheel chocks.
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Transparent Pricing Table Section -->
<section class="bok2dum-section bok2dum-section-gray">
    <div class="container">
        <div class="bok2dum-heading-center">
            <h2>Estimated Shifting Charges from Bokaro to Dumka</h2>
            <p>Our pricing is completely clear, volume-based, and honest. Review our typical relocation charges for the 225 km Bokaro to Dumka corridor below.</p>
        </div>
        <div class="bok2dum-table-wrap">
            <table class="bok2dum-table">
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
                        <td>Rs 2,800 - 4,200</td>
                        <td>Rs 5,700 - 8,300</td>
                        <td><strong>Rs 8,500 - 12,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Household</strong></td>
                        <td>Rs 5,000 - 7,500</td>
                        <td>Rs 8,500 - 12,000</td>
                        <td><strong>Rs 13,500 - 19,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Large Household</strong></td>
                        <td>Rs 7,500 - 10,500</td>
                        <td>Rs 11,000 - 15,500</td>
                        <td><strong>Rs 18,500 - 26,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Villa / Duplex</strong></td>
                        <td>Rs 9,500 - 14,000</td>
                        <td>Rs 14,500 - 20,000</td>
                        <td><strong>Rs 24,000 - 34,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler / Bike Transport</strong></td>
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
            *Note: Exact shifting quotes depend on floor levels, elevator availability, fragile item quantity, seasonal factors, and optional comprehensive transit insurance.
        </p>
    </div>
</section>

<!-- Route Navigation & Highway Profile Section -->
<section class="bok2dum-section">
    <div class="container">
        <div class="bok2dum-grid-2">
            <div>
                <span style="color: var(--bok2dum-secondary); font-weight: 700; text-transform: uppercase; font-size: 0.88rem; letter-spacing: 1px;">Highway Route Profile &amp; Milestones</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; color: var(--bok2dum-dark); margin: 12px 0 20px;">The 225 KM Highway Journey from Bokaro to Dumka</h2>
                <p style="color: #475569; line-height: 1.7; font-size: 1.02rem; margin-bottom: 18px;">
                    The journey between Bokaro and Dumka is routed through key connecting townships across central Jharkhand and Santhal Pargana. Our dispatchers monitor highway conditions to maintain punctual delivery times.
                </p>
                <div class="bok2dum-timeline">
                    <div class="bok2dum-timeline-item">
                        <div class="bok2dum-timeline-dot"></div>
                        <div class="bok2dum-timeline-content">
                            <h4>Checkpoint 1: Origin Pickup in Bokaro</h4>
                            <p>Pickup across Bokaro Steel City sectors (Sector 1 to 12), Chas, and City Centre Sector 4 before joining NH-320 heading northeast.</p>
                        </div>
                    </div>
                    <div class="bok2dum-timeline-item">
                        <div class="bok2dum-timeline-dot"></div>
                        <div class="bok2dum-timeline-content">
                            <h4>Checkpoint 2: Dhanbad Govindpur Bypass</h4>
                            <p>Smooth four-lane transit along the Grand Trunk Road bypass near Govindpur, avoiding downtown Dhanbad traffic congestion.</p>
                        </div>
                    </div>
                    <div class="bok2dum-timeline-item">
                        <div class="bok2dum-timeline-dot"></div>
                        <div class="bok2dum-timeline-content">
                            <h4>Checkpoint 3: Jamtara Junction to NH-114A</h4>
                            <p>Crossing through Jamtara district onto NH-114A, where drivers inspect cargo lashings and container door seals before entering Dumka district.</p>
                        </div>
                    </div>
                    <div class="bok2dum-timeline-item">
                        <div class="bok2dum-timeline-dot"></div>
                        <div class="bok2dum-timeline-content">
                            <h4>Checkpoint 4: Doorstep Delivery in Dumka</h4>
                            <p>Arrival across Tin Bazar, Rasikpur, Dudhani, SP College Road, and Dumka Court, followed by unboxing and furniture placement.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="bok2dum-img-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and setup service in Dumka" title="Careful unloading and arrangement in Dumka">
                    <div class="bok2dum-img-caption">
                        <strong>Figure 4:</strong> Dedicated moving staff executing careful unloading, unpacking, and room-wise placement at the destination in Dumka.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Key Shifting Profiles Section -->
<section class="bok2dum-section bok2dum-section-gray">
    <div class="container">
        <div class="bok2dum-heading-center">
            <h2>Specialized Relocation Categories Handled Daily on the Bokaro to Dumka Route</h2>
            <p>Our operational familiarity with Bokaro and Dumka allows us to deliver purpose-built relocation plans tailored to specific client requirements.</p>
        </div>
        <div class="bok2dum-grid-3">
            <div class="bok2dum-card">
                <div class="dum2gir-card-icon bok2dum-card-icon">&#9878;</div>
                <h3>SAIL &amp; Industrial Corporate Transfers</h3>
                <p>Bokaro Steel Plant and allied industrial manufacturers frequently see managerial, technical, and engineering transfers to Santhal Pargana government projects. We handle complete home relocations with recognized IBA billing and prompt transit execution.</p>
            </div>
            <div class="bok2dum-card">
                <div class="dum2gir-card-icon bok2dum-card-icon">&#128188;</div>
                <h3>Civil Administration &amp; Judiciary Officers</h3>
                <p>Inter-divisional administrative and judicial movements between Bokaro Collectorate and Dumka Commissionerate are handled with dedicated container vehicles, priority delivery dates, and comprehensive packing inventories.</p>
            </div>
            <div class="bok2dum-card">
                <div class="dum2gir-card-icon bok2dum-card-icon">&#127968;</div>
                <h3>Family &amp; Residential Relocations</h3>
                <p>Families relocating from Bokaro sectors to ancestral or new homes in Dumka benefit from our complete service: modular furniture dismantling, heavy appliance wrapping, china crating, and doorstep room arrangement.</p>
            </div>
        </div>
    </div>
</section>

<!-- Neighborhood Pickup & Delivery Directory -->
<section class="bok2dum-section">
    <div class="container">
        <div class="bok2dum-heading-center">
            <h2>Complete Neighborhood Coverage in Bokaro and Dumka</h2>
            <p>Our localized pickup vehicles and heavy container trucks provide 100% comprehensive doorstep coverage across every municipal ward and peripheral sector.</p>
        </div>
        <div class="bok2dum-grid-2">
            <div class="bok2dum-card">
                <h3 style="color: var(--bok2dum-primary); margin-bottom: 14px;">Bokaro Origin Coverage Areas</h3>
                <p style="margin-bottom: 12px; color: #475569;">Our local loading crews operate across all sectors of Bokaro Steel City and surrounding areas:</p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px;">
                    <li><strong>Sector 1 to Sector 6:</strong> Established residential sectors and administrative quarters.</li>
                    <li><strong>Sector 8 to Sector 12:</strong> Modern family housing blocks and educational staff colonies.</li>
                    <li><strong>Chas &amp; City Centre Sector 4:</strong> Major commercial, trading, and apartment complexes.</li>
                    <li><strong>Bermo &amp; Phusro:</strong> Coal mining colonies and industrial satellite townships.</li>
                    <li><strong>Chandrapura:</strong> Thermal power station quarters and railway residential blocks.</li>
                </ul>
            </div>
            <div class="bok2dum-card">
                <h3 style="color: var(--bok2dum-primary); margin-bottom: 14px;">Dumka Destination Coverage Areas</h3>
                <p style="margin-bottom: 12px; color: #475569;">Our destination unloading team provides direct placement and unpacking assistance throughout Dumka district:</p>
                <ul style="color: #334155; line-height: 1.8; padding-left: 20px;">
                    <li><strong>Tin Bazar &amp; Chowk Area:</strong> Central commercial and residential sectors with scheduled morning unloading.</li>
                    <li><strong>Rasikpur &amp; Dudhani:</strong> Dense family residential zones with door-to-door placement.</li>
                    <li><strong>SP College Road &amp; Dighee:</strong> Educational campus residential quarters and professor bungalows.</li>
                    <li><strong>Dumka Court &amp; Collectorate Colony:</strong> Judicial, administrative, and government employee residential complexes.</li>
                    <li><strong>Airport Road &amp; Kathikund Bypass:</strong> Modern residential colonies and upcoming suburban extensions.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Step-by-Step Moving Process -->
<section class="bok2dum-section bok2dum-section-gray">
    <div class="container">
        <div class="bok2dum-heading-center">
            <h2>Our 4-Step Seamless Moving Procedure</h2>
            <p>From initial booking to final placement of your furniture in Dumka, we execute relocations through an organized, stress-free workflow.</p>
        </div>
        <div class="bok2dum-grid-4">
            <div class="bok2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--bok2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">1</div>
                <h3>Survey &amp; Estimate</h3>
                <p>We provide a prompt home survey or video consultation to inspect items, determine truck volume, and issue a transparent written quote.</p>
            </div>
            <div class="bok2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--bok2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">2</div>
                <h3>5-Layer Packaging</h3>
                <p>On shifting day, our trained packers arrive with bubble wrap, corrugated sheets, stretch wrap, and sturdy boxes to wrap every household item securely.</p>
            </div>
            <div class="bok2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--bok2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">3</div>
                <h3>Dedicated Transit</h3>
                <p>Goods are loaded into sealed, covered container trucks. Our verified driver navigates the 225 km route with GPS updates for complete peace of mind.</p>
            </div>
            <div class="bok2dum-card" style="text-align: center;">
                <div style="width: 50px; height: 50px; border-radius: 50%; background: var(--bok2dum-primary); color: #ffffff; display: flex; align-items: center; justify-content: center; font-weight: 800; font-size: 1.2rem; margin: 0 auto 16px;">4</div>
                <h3>Unpack &amp; Placement</h3>
                <p>At your new Dumka home, we unload every box, place furniture where you need it, and assist with unpacking fragile dinnerware and appliances.</p>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions (FAQ) Section -->
<section class="bok2dum-section">
    <div class="container" style="max-width: 900px;">
        <div class="bok2dum-heading-center">
            <h2>Frequently Asked Questions &bull; Bokaro to Dumka Shifting</h2>
            <p>Everything you need to know about pricing, transit times, insurance, and booking for the Bokaro to Dumka route.</p>
        </div>
        <details class="bok2dum-faq-item">
            <summary>What is the road distance and transit time between Bokaro and Dumka?</summary>
            <p>The road distance is approximately 225 kilometers via NH-320, Chas, Dhanbad Govindpur bypass, Jamtara, and NH-114A. A dedicated covered container truck normally completes door-to-door transit within 5 to 6.5 hours under standard highway conditions.</p>
        </details>
        <details class="bok2dum-faq-item">
            <summary>What are the average shifting charges from Bokaro to Dumka?</summary>
            <p>Our shifting charges range from Rs 8,500 to 12,500 for a 1 BHK flat, Rs 13,500 to 19,500 for a 2 BHK home, Rs 18,500 to 26,000 for a 3 BHK residence, and Rs 24,000 to 34,000 for large bungalows and villas, inclusive of packing materials, loading, transit, and unloading.</p>
        </details>
        <details class="bok2dum-faq-item">
            <summary>Do you offer valid GST bills for SAIL Bokaro Steel Plant transfer claims?</summary>
            <p>Yes. We provide complete 100% genuine GST-compliant moving invoices, consignment notes (bilty), packing inventories, and payment receipts accepted across SAIL BSL, public sector banks, and Jharkhand government departments.</p>
        </details>
        <details class="bok2dum-faq-item">
            <summary>Can I transport my bike or scooter along with household furniture?</summary>
            <p>Yes. We securely pack two-wheelers using bubble wrap, corrugated sheets, and cardboard frame wraps, strapping them safely inside our container trucks alongside your household cargo with zero risk of scratches or denting.</p>
        </details>
        <details class="bok2dum-faq-item">
            <summary>Which localities in Bokaro and Dumka do you service?</summary>
            <p>We provide full pickup services throughout Bokaro (Sectors 1 to 12, Chas, City Centre, Bermo) and direct delivery across Dumka (Tin Bazar, Rasikpur, Dudhani, Dumka Court, SP College Road, and Airport Area).</p>
        </details>
        <details class="bok2dum-faq-item">
            <summary>How far in advance should I book my move from Bokaro to Dumka?</summary>
            <p>We recommend booking 2 to 3 days in advance to reserve your preferred loading time and truck size. However, we also accommodate urgent same-day booking requests depending on fleet availability.</p>
        </details>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="bok2dum-section bok2dum-section-gray" style="padding-bottom: 90px;">
    <div class="container">
        <div class="bok2dum-cta-card">
            <h2>Ready to Relocate from Bokaro to Dumka?</h2>
            <p>Contact Shree Ashirwad Packers and Movers today for an instant free moving estimate, verified driver allocation, and complete doorstep shifting support.</p>
            <div style="display: flex; justify-content: center; gap: 16px; flex-wrap: wrap;">
                <a href="tel:+918409531615" class="bok2dum-btn-primary" style="background: #f59e0b; color: #0f172a;">
                    <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    Call: +91 8409531615
                </a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="bok2dum-btn-secondary">Request Written Quotation</a>
            </div>
        </div>
    </div>
</section>

<?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
