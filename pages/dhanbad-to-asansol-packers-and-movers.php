<?php
/**
 * Page Name: Dhanbad to Asansol Packers and Movers
 * Route Slug: dhanbad-to-asansol-packers-and-movers
 * Description: Dependable household shifting, industrial equipment transport, and vehicle shipping services connecting Dhanbad to Asansol via GT Road NH-19.
 * Focus Keywords: dhanbad to asansol packers and movers, packers and movers dhanbad to asansol, house shifting dhanbad to asansol, car carrier dhanbad to asansol, bike transport dhanbad to asansol, household moving dhanbad asansol
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Dhanbad to Asansol Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe Dhanbad to Asansol packers and movers. 60 km express transit via GT Road NH-19, 5-layer packing, BCCL/ECL transfer bills, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dhanbad-to-asansol-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="dhanbad to asansol packers and movers, packers and movers dhanbad to asansol, house shifting dhanbad to asansol, car carrier dhanbad to asansol, bike transport dhanbad to asansol, household moving dhanbad asansol">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Dhanbad">

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

    <!-- Scoped CSS for Route 15 (Dhanbad to Asansol) -->
    <style>
        :root {
            --dhn2asl-primary: #1e3a8a;
            --dhn2asl-secondary: #0284c7;
            --dhn2asl-accent: #ea580c;
            --dhn2asl-accent-light: #ffedd5;
            --dhn2asl-dark: #0f172a;
            --dhn2asl-gray-bg: #f8fafc;
            --dhn2asl-border: #e2e8f0;
            --dhn2asl-shadow: 0 10px 25px -5px rgba(30, 58, 138, 0.08), 0 8px 10px -6px rgba(30, 58, 138, 0.04);
        }

        .dhn2asl-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .dhn2asl-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .dhn2asl-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .dhn2asl-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .dhn2asl-badge {
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

        .dhn2asl-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .dhn2asl-btn-primary {
            background: linear-gradient(135deg, #ea580c 0%, #c2410c 100%);
            color: #ffffff;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 14px rgba(234, 88, 12, 0.35);
            transition: all 0.3s ease;
        }

        .dhn2asl-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(234, 88, 12, 0.45);
            color: #ffffff;
        }

        .dhn2asl-btn-secondary {
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

        .dhn2asl-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .dhn2asl-section {
            padding: 70px 0;
        }

        .dhn2asl-section-gray {
            background-color: var(--dhn2asl-gray-bg);
        }

        .dhn2asl-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .dhn2asl-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--dhn2asl-dark);
            margin-bottom: 14px;
        }

        .dhn2asl-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .dhn2asl-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .dhn2asl-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 36px;
            align-items: center;
        }

        .dhn2asl-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .dhn2asl-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--dhn2asl-border);
            padding: 30px;
            box-shadow: var(--dhn2asl-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dhn2asl-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(30, 58, 138, 0.12);
        }

        .dhn2asl-card-icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            background: var(--dhn2asl-accent-light);
            color: var(--dhn2asl-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .dhn2asl-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--dhn2asl-dark);
            margin-bottom: 12px;
        }

        .dhn2asl-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
        }

        .dhn2asl-table-container {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--dhn2asl-border);
            overflow-x: auto;
            box-shadow: var(--dhn2asl-shadow);
            margin: 35px 0;
        }

        .dhn2asl-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .dhn2asl-table th {
            background: #0f172a;
            color: #ffffff;
            font-weight: 700;
            padding: 16px 20px;
            font-size: 0.98rem;
        }

        .dhn2asl-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--dhn2asl-border);
            color: #334155;
            font-size: 0.95rem;
        }

        .dhn2asl-table tr:last-child td {
            border-bottom: none;
        }

        .dhn2asl-table tr:hover td {
            background-color: #f1f5f9;
        }

        .dhn2asl-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .dhn2asl-checklist li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            color: #334155;
            font-size: 0.98rem;
            line-height: 1.6;
        }

        .dhn2asl-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #10b981;
            font-weight: 800;
            font-size: 1.1rem;
        }

        .dhn2asl-img-wrap {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--dhn2asl-shadow);
        }

        .dhn2asl-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .dhn2asl-img-wrap:hover img {
            transform: scale(1.03);
        }

        .dhn2asl-faq-item {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--dhn2asl-border);
            padding: 24px;
            margin-bottom: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .dhn2asl-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--dhn2asl-dark);
            margin-bottom: 10px;
        }

        .dhn2asl-faq-item p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 991px) {
            .dhn2asl-grid-3, .dhn2asl-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
            .dhn2asl-grid-2 {
                grid-template-columns: 1fr;
            }
            .dhn2asl-hero h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 640px) {
            .dhn2asl-grid-3, .dhn2asl-grid-4 {
                grid-template-columns: 1fr;
            }
            .dhn2asl-hero {
                padding: 60px 0 45px;
            }
            .dhn2asl-hero h1 {
                font-size: 1.85rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Dhanbad to Asansol",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 4,500 - 22,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Katras Road, Matkuria",
            "addressLocality": "Dhanbad",
            "addressRegion": "Jharkhand",
            "postalCode": "826001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.7957,
            "longitude": 86.4304
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Dhanbad"
            },
            {
                "@type": "City",
                "name": "Asansol"
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
        "serviceType": "Intercity Packers and Movers Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Asansol, West Bengal"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Dhanbad to Asansol Intercity Relocation",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Dhanbad to Asansol Household Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Dhanbad to Asansol Car Carrier & Bike Transport"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "BCCL, ECL & IISCO Corporate Employee Moving"
                    }
                }
            ]
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
                "name": "Packers and Movers Dhanbad",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dhanbad"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Dhanbad to Asansol Route",
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
                "name": "What is the driving distance and transit duration between Dhanbad and Asansol?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Dhanbad and Asansol is approximately 60 km via the Grand Trunk Road (NH-19 / AH1 through Govindpur, Nirsa, Chirkunda, Barakar, and Kulti). Express closed container transit takes only 1.5 to 2.5 hours with guaranteed same-day delivery."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Dhanbad to Asansol?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Estimated costs range from Rs 4,500 to 8,500 for 1 BHK flats, Rs 8,000 to 14,500 for 2 BHK homes, and Rs 13,000 to 22,000 for 3 BHK bungalows, inclusive of 5-layer packing, loading, transport, and complete unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable GST invoices for BCCL, ECL, and IISCO Steel employee transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers provides authentic GST-compliant invoices, itemized inventory sheets, consignment notes (bilty), and IBA-approved money receipts compliant with Coal India, BCCL, ECL, and SAIL IISCO transfer policies."
                }
            },
            {
                "@type": "Question",
                "name": "How are cars and motorcycles transported between Dhanbad and Asansol?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Vehicles are safely transported in enclosed hydraulic car carrier trailers and custom motorcycle crates with wheel chocks, security straps, and comprehensive transit risk insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Asansol do you deliver to?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deliver across all Asansol sectors including Court Area, Ushagram, Burnpur SAIL Township, Sen Raleigh Road, Kalyanpur Satellite Township, Kulti, and Neamatpur."
                }
            },
            {
                "@type": "Question",
                "name": "Is same-day packing and delivery guaranteed between Dhanbad and Asansol?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, due to the direct 60 km multi-lane GT Road connection, our team packs in the morning in Dhanbad and completes full unloading and furniture placement in Asansol on the same afternoon."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="dhn2asl-hero">
    <div class="container">
        <div class="dhn2asl-badge-strip">
            <span class="dhn2asl-badge">&#9733; 60 KM Express Intercity Corridor</span>
            <span class="dhn2asl-badge">&#128666; All-Weather Closed Containers</span>
            <span class="dhn2asl-badge">&#128196; BCCL, ECL &amp; SAIL Invoicing</span>
            <span class="dhn2asl-badge">&#128338; Fast 2-Hour Express Transit</span>
        </div>
        <h1>Dhanbad to Asansol Packers and Movers</h1>
        <p class="lead">
            Professional, dependable, and affordable household shifting, industrial machinery transit, and vehicle transport connecting Dhanbad to Asansol. Experience 5-layer protective packing, dedicated closed container trucks, and guaranteed same-day delivery.
        </p>
        <div class="dhn2asl-cta-group">
            <a href="tel:+918409531615" class="dhn2asl-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="dhn2asl-btn-secondary">
                Request Express Moving Quote &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Route Overview Section -->
<section class="dhn2asl-section">
    <div class="container">
        <div class="dhn2asl-grid-2">
            <div>
                <span style="color: var(--dhn2asl-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Twin Industrial Coal Cities Corridor</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--dhn2asl-dark); margin: 10px 0 20px;">
                    Fast 60 KM Interstate Moving Connecting Dhanbad to Asansol
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Dhanbad (Jharkhand) and Asansol (West Bengal) form one of Eastern India&rsquo;s most closely integrated industrial and mining twin-city networks. Spanning just 60 km along the Grand Trunk Road (NH-19 / AH1), this corridor sees frequent daily relocations of mining engineers transferring between Bharat Coking Coal Limited (BCCL) and Eastern Coalfields Limited (ECL), metallurgists moving to SAIL IISCO Steel Plant in Burnpur, railway officers, and commercial traders.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    At <strong>Shree Ashirwad Packers and Movers</strong>, we provide seamless same-day relocation services on this high-frequency route. Our dedicated container fleet, professional loading crew, and rapid border crossing via Barakar guarantee that your goods depart Dhanbad in the morning and are completely settled in your new Asansol home by late afternoon.
                </p>
                <ul class="dhn2asl-checklist">
                    <li>Doorstep pickup across all Dhanbad localities including Bank More, Saraidhela, and Hirapur</li>
                    <li>Advanced 5-layer protective packaging safeguarding furniture, glassware, and electronics</li>
                    <li>Guaranteed 1.5 to 2.5 hour transit time in dedicated weatherproof container trucks</li>
                    <li>Complete room setup, furniture reassembly, and packaging debris collection at destination</li>
                </ul>
            </div>
            <div class="dhn2asl-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dhanbad to Asansol Container Truck Relocation" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Core Shifting Services Grid -->
<section class="dhn2asl-section dhn2asl-section-gray">
    <div class="container">
        <div class="dhn2asl-heading-center">
            <h2>Comprehensive Shifting Services: Dhanbad to Asansol</h2>
            <p>
                Engineered for domestic households, coalfield engineers, steel plant officers, and commercial businesses.
            </p>
        </div>

        <div class="dhn2asl-grid-3">
            <div class="dhn2asl-card">
                <div class="dhn2asl-card-icon">&#127968;</div>
                <h3>Complete Home Relocation</h3>
                <p>
                    Full packing of furniture, appliances, crockery, wardrobes, and electronics using heavy-gauge cartons and multi-ply bubble wrap. Safely delivered to your new home in Asansol.
                </p>
            </div>
            <div class="dhn2asl-card">
                <div class="dhn2asl-card-icon">&#128663;</div>
                <h3>Enclosed Car Transport</h3>
                <p>
                    Enclosed car trailers designed to transfer hatchbacks, sedans, and SUVs from Dhanbad to Asansol safely without adding mileage or exposing your car to highway gravel.
                </p>
            </div>
            <div class="dhn2asl-card">
                <div class="dhn2asl-card-icon">&#127949;</div>
                <h3>Two-Wheeler Bike Shipping</h3>
                <p>
                    Specialized motorcycle transit utilizing multi-layer bubble wrap, handle padding, wheel chocks, and nylon harness belts to guarantee scratch-free delivery.
                </p>
            </div>
            <div class="dhn2asl-card">
                <div class="dhn2asl-card-icon">&#128188;</div>
                <h3>BCCL &amp; ECL Corporate Billing</h3>
                <p>
                    100% authentic GST invoices, detailed item inventories, consignment notes (bilty), and IBA-approved documentation compliant with Coal India and SAIL transfer rules.
                </p>
            </div>
            <div class="dhn2asl-card">
                <div class="dhn2asl-card-icon">&#128230;</div>
                <h3>Part Load &amp; Single Room Moves</h3>
                <p>
                    Affordable sharing and single-room relocation options for students and working professionals relocating with minimal luggage.
                </p>
            </div>
            <div class="dhn2asl-card">
                <div class="dhn2asl-card-icon">&#128737;</div>
                <h3>Transit Risk Insurance</h3>
                <p>
                    Comprehensive optional transit insurance policy covering accidental damages, road perils, and external impacts with transparent claim settlement support.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Packaging Standards -->
<section class="dhn2asl-section">
    <div class="container">
        <div class="dhn2asl-grid-2">
            <div class="dhn2asl-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household Packing and Furniture Wrapping Dhanbad to Asansol" loading="lazy">
            </div>
            <div>
                <span style="color: var(--dhn2asl-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Flawless Material Quality</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--dhn2asl-dark); margin: 10px 0 20px;">
                    Five-Layer Protective Packaging for Zero Highway Shock
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Even over shorter distances like 60 km, sudden braking, tight turns, and road junctions can compromise loosely packed household belongings. We utilize tested packaging techniques to ensure absolute immobility and surface defense.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Our packing supervisors enforce strict material specifications for every category of household asset:
                </p>
                <ul class="dhn2asl-checklist">
                    <li><strong>Cling Film Barrier:</strong> Non-static stretch wrap shielding wood finishes, leather upholstery, and fabrics against dirt and humidity.</li>
                    <li><strong>Bubble Cushioning:</strong> Multi-ply air bubble sheets wrapped tightly around LED screens, audio equipment, and kitchen electronics.</li>
                    <li><strong>Edge Reinforcement:</strong> Heavy corrugated corner pads preventing abrasions and chipping on polished dining tables and wardrobe doors.</li>
                    <li><strong>7-Ply Master Cartons:</strong> Heavy-duty corrugated boxes designed to bear stack weight during transport without buckling.</li>
                    <li><strong>Color-Coded Labeling:</strong> Clear identification tags on every box specifying room allocation and handling cautions.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Shifting Rates Table -->
<section class="dhn2asl-section dhn2asl-section-gray">
    <div class="container">
        <div class="dhn2asl-heading-center">
            <h2>Dhanbad to Asansol Moving Rates &amp; Price Estimates</h2>
            <p>
                Upfront, transparent quotes without hidden fuel surcharges or last-minute loading fees.
            </p>
        </div>

        <div class="dhn2asl-table-container">
            <table class="dhn2asl-table">
                <thead>
                    <tr>
                        <th>Move Type / Household Size</th>
                        <th>Packing Material &amp; Labor</th>
                        <th>Transport / Container Cost</th>
                        <th>Estimated Total (&#8377;)</th>
                        <th>Transit Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 RK / Studio Apartment</strong></td>
                        <td>&#8377; 1,800 - 3,000</td>
                        <td>&#8377; 2,700 - 4,200</td>
                        <td><strong>&#8377; 4,500 - 7,200</strong></td>
                        <td>1.5 - 2 Hours (Same Day)</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Complete Home</strong></td>
                        <td>&#8377; 2,800 - 4,200</td>
                        <td>&#8377; 3,800 - 5,500</td>
                        <td><strong>&#8377; 6,600 - 9,700</strong></td>
                        <td>1.5 - 2.5 Hours (Same Day)</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Flat</strong></td>
                        <td>&#8377; 4,000 - 6,500</td>
                        <td>&#8377; 5,000 - 8,000</td>
                        <td><strong>&#8377; 9,000 - 14,500</strong></td>
                        <td>2 - 2.5 Hours (Same Day)</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Villa</strong></td>
                        <td>&#8377; 5,800 - 9,200</td>
                        <td>&#8377; 7,200 - 12,800</td>
                        <td><strong>&#8377; 13,000 - 22,000</strong></td>
                        <td>2.5 - 3 Hours (Same Day)</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                        <td>&#8377; 600 - 1,000</td>
                        <td>&#8377; 1,400 - 2,200</td>
                        <td><strong>&#8377; 2,000 - 3,200</strong></td>
                        <td>Same Day</td>
                    </tr>
                    <tr>
                        <td><strong>Car Transport (Sedan / SUV)</strong></td>
                        <td>&#8377; 1,000 - 1,500</td>
                        <td>&#8377; 4,000 - 6,000</td>
                        <td><strong>&#8377; 5,000 - 7,500</strong></td>
                        <td>Same Day</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.92rem; margin-top: -10px;">
            * Estimates reflect standard moving scopes. Final quotes depend on exact item count, floor levels, elevator access, and optional insurance choice.
        </p>
    </div>
</section>

<!-- Visual Feature Strip: Vehicle Carrier -->
<section class="dhn2asl-section">
    <div class="container">
        <div class="dhn2asl-grid-2">
            <div>
                <span style="color: var(--dhn2asl-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Secure Automobile Transit</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--dhn2asl-dark); margin: 10px 0 20px;">
                    Enclosed Car Carrier &amp; Safe Bike Transportation
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Avoid heavy industrial highway traffic, commercial toll lanes, and sudden road grit by using our closed car and bike transit solutions between Dhanbad and Asansol.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Each vehicle undergoes an inspection audit prior to dispatch from Dhanbad, documenting body panels, existing paint status, and fuel levels.
                </p>
                <ul class="dhn2asl-checklist">
                    <li>Specialized wheel stops and hydraulic deck locks to prevent car movement inside carriers</li>
                    <li>Individual foam cushioning on motorcycle handles, headlamps, mirrors, and exhaust pipes</li>
                    <li>Comprehensive vehicle transit insurance for total financial peace of mind</li>
                    <li>Prompt collection in Dhanbad and direct delivery to your doorstep in Asansol</li>
                </ul>
            </div>
            <div class="dhn2asl-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Dhanbad to Asansol Vehicle Transport Carrier" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Highway Logistics Section -->
<section class="dhn2asl-section dhn2asl-section-gray">
    <div class="container">
        <div class="dhn2asl-heading-center">
            <h2>Dhanbad to Asansol Highway Logistics &amp; Travel Corridor</h2>
            <p>
                Direct routing along the multi-lane Grand Trunk Road guarantees rapid transit and smooth interstate border transit.
            </p>
        </div>

        <div class="dhn2asl-grid-3">
            <div class="dhn2asl-card">
                <div class="dhn2asl-card-icon">&#128506;</div>
                <h3>Direct GT Road Route (NH-19)</h3>
                <p>
                    Our closed container trucks travel directly along the 6-lane Grand Trunk Road (NH-19 / AH1) via Govindpur, Nirsa, and Chirkunda, crossing the Barakar River border into Kulti and Asansol city. Total distance is approximately 60 km covered in 1.5 to 2.5 hours.
                </p>
            </div>
            <div class="dhn2asl-card">
                <div class="dhn2asl-card-icon">&#128678;</div>
                <h3>Alternative Route via Panchet &amp; Dishergarh</h3>
                <p>
                    During peak highway congestion near the Barakar bridge, our vehicles can navigate via Kumardhubi, Panchet, and Dishergarh into Burnpur and Asansol, ensuring uninterrupted freight movement.
                </p>
            </div>
            <div class="dhn2asl-card">
                <div class="dhn2asl-card-icon">&#128667;</div>
                <h3>Daily Scheduled Express Runs</h3>
                <p>
                    Because of the short distance and high commercial demand, we operate daily morning and evening container departures connecting Dhanbad and Asansol with guaranteed same-day delivery.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Destination Setup -->
<section class="dhn2asl-section">
    <div class="container">
        <div class="dhn2asl-grid-2">
            <div class="dhn2asl-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service Dhanbad to Asansol" loading="lazy">
            </div>
            <div>
                <span style="color: var(--dhn2asl-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Turnkey Destination Service</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--dhn2asl-dark); margin: 10px 0 20px;">
                    Careful Unloading, Furniture Assembly &amp; Debris Disposal
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    A truly satisfying relocation experience means waking up in a clean, fully functional home on moving day. Our skilled crew unloads every piece of furniture, reassembles dismounted frames, and handles all heavy lifting.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    We carefully place each box into its designated room based on your guidance:
                </p>
                <ul class="dhn2asl-checklist">
                    <li>Assembly of wooden beds, wardrobes, study tables, and dining furniture</li>
                    <li>Placement of refrigerators, washing machines, and heavy home theater systems</li>
                    <li>Inspection of all glassware and fragile items in your presence</li>
                    <li>Collection and disposal of used packing cardboard, plastics, and tapes</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Coalfield, Steel & Industrial Relocation Protocol -->
<section class="dhn2asl-section dhn2asl-section-gray">
    <div class="container">
        <div class="dhn2asl-heading-center">
            <h2>BCCL, ECL &amp; SAIL IISCO Employee Moving Specialization</h2>
            <p>
                Expert moving procedures tailored for mining executives, steel plant engineers, and commercial traders.
            </p>
        </div>

        <div class="dhn2asl-grid-3">
            <div class="dhn2asl-card">
                <div class="dhn2asl-card-icon">&#9874;</div>
                <h3>BCCL to ECL Inter-Subsidiary Transfers</h3>
                <p>
                    Coal India executives transferring between BCCL (Dhanbad) and Eastern Coalfields Limited (Sanctoria / Asansol) benefit from our specialized corporate relocation support, approved packing lists, and GST invoices designed for fast claim settlement.
                </p>
            </div>
            <div class="dhn2asl-card">
                <div class="dhn2asl-card-icon">&#127981;</div>
                <h3>SAIL IISCO Steel Plant Moves (Burnpur)</h3>
                <p>
                    We handle regular domestic and office shifts for metallurgists and technical managers relocating to SAIL Burnpur Steel Plant residential townships with guaranteed delivery timelines.
                </p>
            </div>
            <div class="dhn2asl-card">
                <div class="dhn2asl-card-icon">&#128646;</div>
                <h3>Eastern Railway Divisional Transfers</h3>
                <p>
                    Connecting Dhanbad Railway Division with Asansol Railway Division, we provide specialized packing and relocation services for railway officers with certified consignment notes.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Local Coverage Grid -->
<section class="dhn2asl-section">
    <div class="container">
        <div class="dhn2asl-heading-center">
            <h2>Full Pickup in Dhanbad &amp; Doorstep Delivery Across Asansol</h2>
            <p>
                Our comprehensive moving operations extend across every neighborhood in Dhanbad and Asansol.
            </p>
        </div>

        <div class="dhn2asl-grid-3">
            <div class="dhn2asl-card">
                <h3>Dhanbad Pickup Localities</h3>
                <p>
                    Prompt doorstep survey and packaging across all sectors of Dhanbad:
                </p>
                <ul class="dhn2asl-checklist">
                    <li><strong>Commercial &amp; Central:</strong> Bank More, Purana Bazar, Station Road, Dhansar</li>
                    <li><strong>Residential Townships:</strong> Saraidhela, Steel Gate, Big Bazaar Area, Kolakusma</li>
                    <li><strong>Academic &amp; Institutional:</strong> Hirapur, CMPF Colony, IIT ISM Campus, Housing Colony</li>
                    <li><strong>Industrial Belt:</strong> Govindpur, Katras, Jharia, Sindri Township</li>
                </ul>
            </div>

            <div class="dhn2asl-card">
                <h3>Asansol Delivery Coverage</h3>
                <p>
                    Unloading, room placement, and setup across all Asansol neighborhoods:
                </p>
                <ul class="dhn2asl-checklist">
                    <li><strong>Central Sectors:</strong> Court Area, Ushagram, Hutton Road, SB Gorai Road</li>
                    <li><strong>Steel &amp; Industrial Townships:</strong> Burnpur Riverside, SAIL Colony, Santa</li>
                    <li><strong>Suburban Townships:</strong> Kalyanpur Satellite Township, Sen Raleigh Road</li>
                    <li><strong>Border Industrial Belt:</strong> Kulti, Neamatpur, Barakar, Sitarampur</li>
                </ul>
            </div>

            <div class="dhn2asl-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    Trusted by hundreds of families and businesses across Dhanbad and Asansol:
                </p>
                <ul class="dhn2asl-checklist">
                    <li>Company-owned weatherproof container vehicles</li>
                    <li>Experienced, background-verified full-time crew</li>
                    <li>Genuine GST invoices for government and PSU transfer claims</li>
                    <li>Fast 2-hour highway transit with guaranteed same-day setup</li>
                    <li>Transparent pricing with zero hidden surcharges</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="dhn2asl-section dhn2asl-section-gray">
    <div class="container">
        <div class="dhn2asl-heading-center">
            <h2>Frequently Asked Questions: Dhanbad to Asansol Shifting</h2>
            <p>
                Essential information on pricing, transit times, packing materials, and claim documentation.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="dhn2asl-faq-item">
                <h3>What is the driving distance and transit duration between Dhanbad and Asansol?</h3>
                <p>
                    The highway distance between Dhanbad and Asansol is approximately 60 km via the Grand Trunk Road (NH-19 / AH1 through Govindpur, Nirsa, Chirkunda, Barakar, and Kulti). Express closed container transit takes only 1.5 to 2.5 hours with guaranteed same-day delivery.
                </p>
            </div>

            <div class="dhn2asl-faq-item">
                <h3>What are the shifting charges from Dhanbad to Asansol?</h3>
                <p>
                    Estimated costs range from Rs 4,500 to 8,500 for 1 BHK flats, Rs 8,000 to 14,500 for 2 BHK homes, and Rs 13,000 to 22,000 for 3 BHK bungalows, inclusive of 5-layer packing, loading, transport, and complete unloading.
                </p>
            </div>

            <div class="dhn2asl-faq-item">
                <h3>Do you provide claimable GST invoices for BCCL, ECL, and IISCO Steel employee transfers?</h3>
                <p>
                    Yes, Shree Ashirwad Packers and Movers provides authentic GST-compliant invoices, itemized inventory sheets, consignment notes (bilty), and IBA-approved money receipts compliant with Coal India, BCCL, ECL, and SAIL IISCO transfer policies.
                </p>
            </div>

            <div class="dhn2asl-faq-item">
                <h3>How are cars and motorcycles transported between Dhanbad and Asansol?</h3>
                <p>
                    Vehicles are safely transported in enclosed hydraulic car carrier trailers and custom motorcycle crates with wheel chocks, security straps, and comprehensive transit risk insurance.
                </p>
            </div>

            <div class="dhn2asl-faq-item">
                <h3>Which areas in Asansol do you deliver to?</h3>
                <p>
                    We deliver across all Asansol sectors including Court Area, Ushagram, Burnpur SAIL Township, Sen Raleigh Road, Kalyanpur Satellite Township, Kulti, and Neamatpur.
                </p>
            </div>

            <div class="dhn2asl-faq-item">
                <h3>Is same-day packing and delivery guaranteed between Dhanbad and Asansol?</h3>
                <p>
                    Yes, due to the direct 60 km multi-lane GT Road connection, our team packs in the morning in Dhanbad and completes full unloading and furniture placement in Asansol on the same afternoon.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 65px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Book Your Dhanbad to Asansol Move Today
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Contact our moving experts for an accurate written estimate, complimentary pre-move assessment, and guaranteed same-day delivery.
        </p>
        <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
            <a href="tel:+918409531615" style="background: #ea580c; color: #ffffff; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" style="background: rgba(255,255,255,0.15); color: #ffffff; font-weight: 600; padding: 14px 28px; border-radius: 10px; text-decoration: none; border: 1px solid rgba(255,255,255,0.3);">
                Request Express Quote &rarr;
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
