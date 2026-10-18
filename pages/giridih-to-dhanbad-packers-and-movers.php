<?php
/**
 * Page Name: Giridih to Dhanbad Packers and Movers
 * Route Slug: giridih-to-dhanbad-packers-and-movers
 * Description: Dependable household shifting, vehicle transport, and commercial moving services from Giridih to Dhanbad.
 * Focus Keywords: giridih to dhanbad packers and movers, packers and movers giridih to dhanbad, house shifting giridih to dhanbad, car transport giridih to dhanbad, bike transport giridih to dhanbad, luggage moving giridih dhanbad
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Giridih to Dhanbad Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe Giridih to Dhanbad packers and movers. 65 km express transit via Tundi & NH-19, 5-layer packing, GST transfer bills, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/giridih-to-dhanbad-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="giridih to dhanbad packers and movers, packers and movers giridih to dhanbad, house shifting giridih to dhanbad, car transport giridih to dhanbad, bike transport giridih to dhanbad, luggage moving giridih dhanbad">
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

    <!-- Scoped CSS for Route 8 (Giridih to Dhanbad) -->
    <style>
        :root {
            --gir2dhn-primary: #7c2d12;
            --gir2dhn-secondary: #0284c7;
            --gir2dhn-accent: #ea580c;
            --gir2dhn-accent-light: #ffedd5;
            --gir2dhn-dark: #0f172a;
            --gir2dhn-gray-bg: #f8fafc;
            --gir2dhn-border: #e2e8f0;
            --gir2dhn-shadow: 0 10px 25px -5px rgba(124, 45, 18, 0.08), 0 8px 10px -6px rgba(124, 45, 18, 0.04);
        }

        .gir2dhn-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(124, 45, 18, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .gir2dhn-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .gir2dhn-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .gir2dhn-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .gir2dhn-badge {
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

        .gir2dhn-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .gir2dhn-btn-primary {
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

        .gir2dhn-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(234, 88, 12, 0.45);
            color: #ffffff;
        }

        .gir2dhn-btn-secondary {
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

        .gir2dhn-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .gir2dhn-section {
            padding: 70px 0;
        }

        .gir2dhn-section-gray {
            background-color: var(--gir2dhn-gray-bg);
        }

        .gir2dhn-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .gir2dhn-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--gir2dhn-dark);
            margin-bottom: 14px;
        }

        .gir2dhn-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .gir2dhn-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .gir2dhn-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 36px;
            align-items: center;
        }

        .gir2dhn-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .gir2dhn-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--gir2dhn-border);
            padding: 30px;
            box-shadow: var(--gir2dhn-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .gir2dhn-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(124, 45, 18, 0.12);
        }

        .gir2dhn-card-icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            background: var(--gir2dhn-accent-light);
            color: var(--gir2dhn-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .gir2dhn-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--gir2dhn-dark);
            margin-bottom: 12px;
        }

        .gir2dhn-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
        }

        .gir2dhn-table-container {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--gir2dhn-border);
            overflow-x: auto;
            box-shadow: var(--gir2dhn-shadow);
            margin: 35px 0;
        }

        .gir2dhn-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .gir2dhn-table th {
            background: #0f172a;
            color: #ffffff;
            font-weight: 700;
            padding: 16px 20px;
            font-size: 0.98rem;
        }

        .gir2dhn-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--gir2dhn-border);
            color: #334155;
            font-size: 0.95rem;
        }

        .gir2dhn-table tr:last-child td {
            border-bottom: none;
        }

        .gir2dhn-table tr:hover td {
            background-color: #f1f5f9;
        }

        .gir2dhn-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .gir2dhn-checklist li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            color: #334155;
            font-size: 0.98rem;
            line-height: 1.6;
        }

        .gir2dhn-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #10b981;
            font-weight: 800;
            font-size: 1.1rem;
        }

        .gir2dhn-img-wrap {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--gir2dhn-shadow);
        }

        .gir2dhn-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .gir2dhn-img-wrap:hover img {
            transform: scale(1.03);
        }

        .gir2dhn-faq-item {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--gir2dhn-border);
            padding: 24px;
            margin-bottom: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .gir2dhn-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--gir2dhn-dark);
            margin-bottom: 10px;
        }

        .gir2dhn-faq-item p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 991px) {
            .gir2dhn-grid-3, .gir2dhn-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
            .gir2dhn-grid-2 {
                grid-template-columns: 1fr;
            }
            .gir2dhn-hero h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 640px) {
            .gir2dhn-grid-3, .gir2dhn-grid-4 {
                grid-template-columns: 1fr;
            }
            .gir2dhn-hero {
                padding: 60px 0 45px;
            }
            .gir2dhn-hero h1 {
                font-size: 1.85rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Giridih to Dhanbad",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 4,500 - 22,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bada Chowk, Station Road",
            "addressLocality": "Giridih",
            "addressRegion": "Jharkhand",
            "postalCode": "815301",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 24.1852,
            "longitude": 86.3072
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Giridih"
            },
            {
                "@type": "City",
                "name": "Dhanbad"
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
            "name": "Dhanbad, Jharkhand"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Giridih to Dhanbad Relocation Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Giridih to Dhanbad Household Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Giridih to Dhanbad Car & Bike Transport Carrier"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Industrial Equipment & Commercial Firm Moving"
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
                "name": "Packers and Movers Giridih",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-giridih"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Giridih to Dhanbad Route",
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
                "name": "What is the road distance and travel time between Giridih and Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Giridih and Dhanbad is approximately 65 km via Tundi Road and NH-19 through Rajganj and Govindpur. Transit takes only 2 to 2.5 hours, enabling swift same-day delivery and complete setup."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving charges from Giridih to Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Shifting costs range from Rs 4,500 to 9,500 for 1 BHK homes, Rs 8,000 to 14,500 for 2 BHK flats, and Rs 13,000 to 22,000 for 3 BHK homes, inclusive of packing materials, loading, transport, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Can you provide claimable GST invoices for corporate and government transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers provides authentic GST invoices, detailed item inventories, consignment notes (bilty), and money receipts compliant with all government and corporate employee transfer policies."
                }
            },
            {
                "@type": "Question",
                "name": "Do you transport motorcycles and cars between Giridih and Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide covered car carriers and specialized motorcycle crates with high-density padding and ratchet locking straps for scratch-free delivery."
                }
            },
            {
                "@type": "Question",
                "name": "What localities in Giridih and Dhanbad are covered?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide pickup across all Giridih areas including Bada Chowk, Makatpur, Station Road, Pachamba, and Beniadih. In Dhanbad, we deliver across Bank More, Saraidhela, Hirapur, IIT ISM, Dhansar, and Govindpur."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance provided for fragile items and electronics?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we offer optional comprehensive transit risk coverage to safeguard fragile crockery, electronic appliances, and premium furniture against transit mishaps."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="gir2dhn-hero">
    <div class="container">
        <div class="gir2dhn-badge-strip">
            <span class="gir2dhn-badge">&#9733; Certified Intercity Specialists</span>
            <span class="gir2dhn-badge">&#128666; All-Weather Closed Containers</span>
            <span class="gir2dhn-badge">&#128196; 100% GST-Compliant Invoicing</span>
            <span class="gir2dhn-badge">&#128338; Fast 2-Hour Express Transit</span>
        </div>
        <h1>Giridih to Dhanbad Packers and Movers</h1>
        <p class="lead">
            Fast, secure, and affordable household shifting, commercial relocation, and vehicle transport connecting Giridih to Dhanbad. Experience professional multi-layer packing, dedicated container trucks, and guaranteed same-day doorstep setup.
        </p>
        <div class="gir2dhn-cta-group">
            <a href="tel:+918409531615" class="gir2dhn-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Now: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="gir2dhn-btn-secondary">
                Request Free Shifting Quote &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Route Overview Section -->
<section class="gir2dhn-section">
    <div class="container">
        <div class="gir2dhn-grid-2">
            <div>
                <span style="color: var(--gir2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Express 65 KM Route Connectivity</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--gir2dhn-dark); margin: 10px 0 20px;">
                    Swift Same-Day Household Moving from Giridih to Dhanbad
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Connecting Giridih—the renowned industrial, mica, and steel re-rolling hub—to Dhanbad, the Coal Capital of India, covers an express road distance of approximately 65 km. This close regional proximity generates substantial residential migrations, business branch expansions, and administrative transfers between the two bustling districts.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    <strong>Shree Ashirwad Packers and Movers</strong> provides daily scheduled moving operations on this route. With our specialized closed container vehicles, experienced local crews, and rapid expressway navigation via Tundi and NH-19, your household goods are packed in the morning in Giridih and fully arranged in your new Dhanbad apartment by early afternoon.
                </p>
                <ul class="gir2dhn-checklist">
                    <li>Full doorstep packing across all neighborhoods of Giridih and Pachamba</li>
                    <li>Premium 5-layer packing materials preventing road vibration friction</li>
                    <li>Guaranteed 2 to 2.5 hours transit in dedicated weatherproof trucks</li>
                    <li>Complete room setup, furniture reassembly, and packaging scrap removal in Dhanbad</li>
                </ul>
            </div>
            <div class="gir2dhn-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Giridih to Dhanbad Container Truck Relocation" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Core Shifting Services Grid -->
<section class="gir2dhn-section gir2dhn-section-gray">
    <div class="container">
        <div class="gir2dhn-heading-center">
            <h2>Our Comprehensive Giridih to Dhanbad Relocation Services</h2>
            <p>
                Tailored moving solutions designed for residential homes, corporate offices, trading enterprises, and vehicle owners across Jharkhand.
            </p>
        </div>

        <div class="gir2dhn-grid-3">
            <div class="gir2dhn-card">
                <div class="gir2dhn-card-icon">&#127968;</div>
                <h3>Household Goods Shifting</h3>
                <p>
                    Full packaging of dining sets, bedroom furniture, kitchen appliances, crockery, televisions, and personal artifacts. Safe loading and arranged placement in your new Dhanbad home.
                </p>
            </div>
            <div class="gir2dhn-card">
                <div class="gir2dhn-card-icon">&#128663;</div>
                <h3>Car Carrier Solutions</h3>
                <p>
                    Enclosed car trailers designed to transfer hatchbacks, luxury sedans, and SUVs safely from Giridih to Dhanbad without exposing your vehicle to highway grime or mechanical wear.
                </p>
            </div>
            <div class="gir2dhn-card">
                <div class="gir2dhn-card-icon">&#127949;</div>
                <h3>Bike &amp; Scooter Transport</h3>
                <p>
                    Specialized motorcycle transit utilizing multi-layer bubble wrap, handle padding, wheel chocks, and nylon harness belts to guarantee scratch-free delivery.
                </p>
            </div>
            <div class="gir2dhn-card">
                <div class="gir2dhn-card-icon">&#127970;</div>
                <h3>Commercial &amp; Office Moves</h3>
                <p>
                    Fast and coordinated relocation for commercial firms, hardware traders, IT offices, and financial institutions with minimal operational downtime.
                </p>
            </div>
            <div class="gir2dhn-card">
                <div class="gir2dhn-card-icon">&#128230;</div>
                <h3>Part Load &amp; Luggage Moves</h3>
                <p>
                    Economical mini-moves for students joining IIT ISM Dhanbad or coaching centers, and individual working professionals relocating with limited baggage.
                </p>
            </div>
            <div class="gir2dhn-card">
                <div class="gir2dhn-card-icon">&#128737;</div>
                <h3>Transit Risk Insurance</h3>
                <p>
                    Comprehensive optional transit insurance policy covering accidental damages, road perils, and external impacts with transparent claim settlement support.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Protective Packing -->
<section class="gir2dhn-section">
    <div class="container">
        <div class="gir2dhn-grid-2">
            <div class="dum2dhn-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Protective Multi-Layer Furniture Packing Giridih to Dhanbad" loading="lazy">
            </div>
            <div>
                <span style="color: var(--gir2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Flawless Material Quality</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--gir2dhn-dark); margin: 10px 0 20px;">
                    Industrial Standard Multi-Tier Packaging Protocol
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Even over shorter distances like 65 km, sudden braking, tight turns, and road junctions can compromise loosely packed household belongings. We utilize tested packaging techniques to ensure absolute immobility and surface defense.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Our packing supervisors enforce strict material specifications for every category of household asset:
                </p>
                <ul class="gir2dhn-checklist">
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
<section class="gir2dhn-section gir2dhn-section-gray">
    <div class="container">
        <div class="gir2dhn-heading-center">
            <h2>Giridih to Dhanbad Moving Rates &amp; Price Estimates</h2>
            <p>
                Upfront, transparent quotes without hidden fuel surcharges or last-minute loading fees.
            </p>
        </div>

        <div class="gir2dhn-table-container">
            <table class="gir2dhn-table">
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
                        <td>2 - 2.5 Hours (Same Day)</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Complete Home</strong></td>
                        <td>&#8377; 2,800 - 4,200</td>
                        <td>&#8377; 3,800 - 5,500</td>
                        <td><strong>&#8377; 6,600 - 9,700</strong></td>
                        <td>2 - 2.5 Hours (Same Day)</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Flat</strong></td>
                        <td>&#8377; 4,000 - 6,500</td>
                        <td>&#8377; 5,000 - 8,000</td>
                        <td><strong>&#8377; 9,000 - 14,500</strong></td>
                        <td>2.5 - 3 Hours (Same Day)</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Villa</strong></td>
                        <td>&#8377; 5,800 - 9,200</td>
                        <td>&#8377; 7,200 - 12,800</td>
                        <td><strong>&#8377; 13,000 - 22,000</strong></td>
                        <td>3 - 3.5 Hours (Same Day)</td>
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
<section class="gir2dhn-section">
    <div class="container">
        <div class="gir2dhn-grid-2">
            <div>
                <span style="color: var(--gir2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Secure Automobile Transit</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--gir2dhn-dark); margin: 10px 0 20px;">
                    Enclosed Car Carrier &amp; Safe Bike Transportation
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Avoid highway driving hazards, sudden stone chips, and unnecessary vehicle depreciation by utilizing our closed car and bike transit solutions.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Each vehicle undergoes an inspection audit prior to dispatch from Giridih, documenting body panels, existing paint status, and fuel levels.
                </p>
                <ul class="gir2dhn-checklist">
                    <li>Specialized wheel stops and hydraulic deck locks to prevent car movement inside carriers</li>
                    <li>Individual foam cushioning on motorcycle handles, headlamps, mirrors, and exhaust pipes</li>
                    <li>Comprehensive vehicle transit insurance for total financial peace of mind</li>
                    <li>Prompt collection in Giridih and direct delivery to your doorstep in Dhanbad</li>
                </ul>
            </div>
            <div class="gir2dhn-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Giridih to Dhanbad Vehicle Transport Carrier" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Highway Logistics Section -->
<section class="gir2dhn-section gir2dhn-section-gray">
    <div class="container">
        <div class="gir2dhn-heading-center">
            <h2>Giridih to Dhanbad Highway Logistics &amp; Travel Route</h2>
            <p>
                Streamlined routing along high-quality state and national road corridors guarantees prompt, reliable delivery.
            </p>
        </div>

        <div class="gir2dhn-grid-3">
            <div class="gir2dhn-card">
                <div class="gir2dhn-card-icon">&#128506;</div>
                <h3>Primary Route via Tundi &amp; Rajganj</h3>
                <p>
                    Departing Giridih, our vehicles travel southward via the Tundi State Highway, connecting directly to the Grand Trunk Road (NH-19) at Rajganj before entering Dhanbad town. Total travel time is approximately 2 hours over roughly 65 km.
                </p>
            </div>
            <div class="gir2dhn-card">
                <div class="gir2dhn-card-icon">&#128678;</div>
                <h3>Secondary Route via Dumri &amp; Topchanchi</h3>
                <p>
                    In case of local road repairs near Tundi, our fleet diverts via Dumri to merge onto NH-19 at Topchanchi, cruising smoothly past Rajganj and Govindpur into Saraidhela and Bank More without delays.
                </p>
            </div>
            <div class="gir2dhn-card">
                <div class="gir2dhn-card-icon">&#128667;</div>
                <h3>Experienced Highway Crew</h3>
                <p>
                    Our drivers have driven the Giridih-Dhanbad commercial corridor for years, navigating every curve, railway flyover, and urban intersection with seasoned skill and caution.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Destination Setup -->
<section class="gir2dhn-section">
    <div class="container">
        <div class="gir2dhn-grid-2">
            <div class="dum2dhn-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service Giridih to Dhanbad" loading="lazy">
            </div>
            <div>
                <span style="color: var(--gir2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Complete Destination Assistance</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--gir2dhn-dark); margin: 10px 0 20px;">
                    Careful Unloading, Furniture Assembly &amp; Debris Disposal
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    A truly satisfying relocation experience means waking up in a clean, fully functional home on moving day. Our skilled crew unloads every piece of furniture, reassembles dismounted frames, and handles all heavy lifting.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    We carefully place each box into its designated room based on your guidance:
                </p>
                <ul class="gir2dhn-checklist">
                    <li>Assembly of wooden beds, wardrobes, study tables, and dining furniture</li>
                    <li>Placement of refrigerators, washing machines, and heavy home theater systems</li>
                    <li>Inspection of all glassware and fragile items in your presence</li>
                    <li>Collection and disposal of used packing cardboard, plastics, and tapes</li>
                </ul>
            </div>
        </div>
</section>

<!-- Industrial, Corporate & Commercial Relocation Protocol -->
<section class="gir2dhn-section">
    <div class="container">
        <div class="gir2dhn-heading-center">
            <h2>Industrial, Commercial &amp; Employee Relocation Solutions</h2>
            <p>
                Bridging the manufacturing and mica trade corridors of Giridih with the coal, energy, and educational hubs of Dhanbad.
            </p>
        </div>

        <div class="gir2dhn-grid-3">
            <div class="gir2dhn-card">
                <div class="gir2dhn-card-icon">&#9874;</div>
                <h3>Industrial Machinery &amp; Hardware Transit</h3>
                <p>
                    Giridih houses numerous steel rolling mills, mica processing units, and fabrication facilities. We provide specialized transport for heavy industrial spares, machine parts, electrical motors, and commercial showroom inventories moving directly into Dhanbad industrial areas like Govindpur and Katras.
                </p>
            </div>
            <div class="gir2dhn-card">
                <div class="gir2dhn-card-icon">&#128188;</div>
                <h3>BCCL, CCL &amp; Corporate Employee Transfers</h3>
                <p>
                    Frequent transfers occur between mining administrative offices in Giridih and BCCL headquarters in Koyla Nagar, Dhanbad. We deliver complete door-to-door relocation support with certified packing inventories, approved consignment notes, and GST billing customized for hassle-free corporate reimbursement.
                </p>
            </div>
            <div class="gir2dhn-card">
                <div class="gir2dhn-card-icon">&#127891;</div>
                <h3>Academic &amp; Student Relocation Services</h3>
                <p>
                    Dhanbad is home to premier institutions like IIT ISM, BIT Sindri, and reputed medical colleges. We offer economical student moving packages for books, laptops, study desks, and personal baggage with guaranteed same-day delivery right to college hostel gates or private rental apartments.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Local Coverage Grid -->
<section class="gir2dhn-section gir2dhn-section-gray">
    <div class="container">
        <div class="gir2dhn-heading-center">
            <h2>Full Pickup in Giridih &amp; Doorstep Delivery Across Dhanbad</h2>
            <p>
                Our comprehensive moving operations extend across every neighborhood in Giridih and Dhanbad.
            </p>
        </div>

        <div class="gir2dhn-grid-3">
            <div class="gir2dhn-card">
                <h3>Giridih Pickup Localities</h3>
                <p>
                    Full doorstep packing and loading across all sections of Giridih:
                </p>
                <ul class="gir2dhn-checklist">
                    <li><strong>Central Hubs:</strong> Bada Chowk, Makatpur, Station Road, Jhanda Chowk</li>
                    <li><strong>Residential Belts:</strong> Pachamba, Barganda, Mohanpur, Sirsia</li>
                    <li><strong>Industrial Areas:</strong> Beniadih, Maheshmunda, Giridih Coalfield Area</li>
                    <li><strong>Suburban Zones:</strong> Tundi Road, Pirtand, Isri Bazar</li>
                </ul>
            </div>

            <div class="gir2dhn-card">
                <h3>Dhanbad Delivery Coverage</h3>
                <p>
                    Unloading, room placement, and setup across all Dhanbad neighborhoods:
                </p>
                <ul class="gir2dhn-checklist">
                    <li><strong>Commercial Centers:</strong> Bank More, Purana Bazar, Station Road</li>
                    <li><strong>Residential Townships:</strong> Saraidhela, Steel Gate, Big Bazaar Area</li>
                    <li><strong>Institutional Hubs:</strong> Hirapur, CMPF Colony, IIT ISM Campus</li>
                    <li><strong>Industrial &amp; Coal Sectors:</strong> Govindpur, Dhansar, Katras, Jharia</li>
                </ul>
            </div>

            <div class="gir2dhn-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    Trusted by hundreds of families and businesses across Giridih and Dhanbad:
                </p>
                <ul class="gir2dhn-checklist">
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
<section class="gir2dhn-section">
    <div class="container">
        <div class="gir2dhn-heading-center">
            <h2>Frequently Asked Questions: Giridih to Dhanbad Relocations</h2>
            <p>
                Helpful details regarding transit times, packing safety, moving rates, and insurance protocols.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="gir2dhn-faq-item">
                <h3>What is the road distance and travel time between Giridih and Dhanbad?</h3>
                <p>
                    The highway distance between Giridih and Dhanbad is approximately 65 km via Tundi Road and NH-19 through Rajganj and Govindpur. Transit takes only 2 to 2.5 hours, enabling swift same-day delivery and complete setup.
                </p>
            </div>

            <div class="gir2dhn-faq-item">
                <h3>What are the moving charges from Giridih to Dhanbad?</h3>
                <p>
                    Shifting costs range from Rs 4,500 to 9,500 for 1 BHK homes, Rs 8,000 to 14,500 for 2 BHK flats, and Rs 13,000 to 22,000 for 3 BHK homes, inclusive of packing materials, loading, transport, and unloading.
                </p>
            </div>

            <div class="gir2dhn-faq-item">
                <h3>Can you provide claimable GST invoices for corporate and government transfers?</h3>
                <p>
                    Yes, Shree Ashirwad Packers and Movers provides authentic GST invoices, detailed item inventories, consignment notes (bilty), and money receipts compliant with all government and corporate employee transfer policies.
                </p>
            </div>

            <div class="gir2dhn-faq-item">
                <h3>Do you transport motorcycles and cars between Giridih and Dhanbad?</h3>
                <p>
                    Yes, we provide covered car carriers and specialized motorcycle crates with high-density padding and ratchet locking straps for scratch-free delivery.
                </p>
            </div>

            <div class="gir2dhn-faq-item">
                <h3>What localities in Giridih and Dhanbad are covered?</h3>
                <p>
                    We provide pickup across all Giridih areas including Bada Chowk, Makatpur, Station Road, Pachamba, and Beniadih. In Dhanbad, we deliver across Bank More, Saraidhela, Hirapur, IIT ISM, Dhansar, and Govindpur.
                </p>
            </div>

            <div class="gir2dhn-faq-item">
                <h3>Is transit insurance provided for fragile items and electronics?</h3>
                <p>
                    Yes, we offer optional comprehensive transit risk coverage to safeguard fragile crockery, electronic appliances, and premium furniture against transit mishaps.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section style="background: linear-gradient(135deg, #7c2d12 0%, #0f172a 100%); color: #ffffff; padding: 65px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Book Your Giridih to Dhanbad Move Today
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Get in touch with our moving coordinators for an immediate quotation, complimentary pre-move assessment, and same-day delivery service.
        </p>
        <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
            <a href="tel:+918409531615" style="background: #ea580c; color: #ffffff; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" style="background: rgba(255,255,255,0.15); color: #ffffff; font-weight: 600; padding: 14px 28px; border-radius: 10px; text-decoration: none; border: 1px solid rgba(255,255,255,0.3);">
                Request Written Estimate &rarr;
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
