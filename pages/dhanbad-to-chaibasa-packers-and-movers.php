<?php
/**
 * Page Name: Dhanbad to Chaibasa Packers and Movers
 * Route Slug: dhanbad-to-chaibasa-packers-and-movers
 * Description: Dedicated inter-district relocation services connecting Dhanbad to Chaibasa, Kolhan administrative division, and West Singhbhum mining belt.
 * Focus Keywords: dhanbad to chaibasa packers and movers, packers and movers dhanbad to chaibasa, house shifting dhanbad to chaibasa, car transport dhanbad to chaibasa, bike parcel dhanbad to chaibasa, luggage transport dhanbad to chaibasa
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Dhanbad to Chaibasa Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe Dhanbad to Chaibasa packers and movers. 200 km direct transit via NH-18, 5-layer packing, Kolhan & mining transfer bills, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dhanbad-to-chaibasa-packers-and-movers";
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

    <!-- Scoped CSS for Route 5 (Dhanbad to Chaibasa) -->
    <style>
        :root {
            --dhn2chb-primary: #1e3a8a;
            --dhn2chb-secondary: #0284c7;
            --dhn2chb-accent: #ea580c;
            --dhn2chb-accent-light: #ffedd5;
            --dhn2chb-dark: #0f172a;
            --dhn2chb-gray-bg: #f8fafc;
            --dhn2chb-border: #e2e8f0;
            --dhn2chb-shadow: 0 10px 25px -5px rgba(30, 58, 138, 0.08), 0 8px 10px -6px rgba(30, 58, 138, 0.04);
        }

        .dhn2chb-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .dhn2chb-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .dhn2chb-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .dhn2chb-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .dhn2chb-badge {
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

        .dhn2chb-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .dhn2chb-btn-primary {
            background: linear-gradient(135deg, #ea580c 0%, #c2410c 100%);
            color: #ffffff;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 15px rgba(234, 88, 12, 0.4);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .dhn2chb-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(234, 88, 12, 0.5);
            color: #ffffff;
        }

        .dhn2chb-btn-secondary {
            background: rgba(255, 255, 255, 0.15);
            color: #ffffff;
            font-weight: 600;
            padding: 14px 28px;
            border-radius: 10px;
            text-decoration: none;
            border: 1px solid rgba(255, 255, 255, 0.3);
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: background 0.2s ease;
        }

        .dhn2chb-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .dhn2chb-section {
            padding: 70px 0;
        }

        .dhn2chb-section-gray {
            background-color: var(--dhn2chb-gray-bg);
        }

        .dhn2chb-heading-center {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 50px;
        }

        .dhn2chb-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--dhn2chb-dark);
            margin-bottom: 15px;
        }

        .dhn2chb-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .dhn2chb-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
            gap: 28px;
        }

        .dhn2chb-card {
            background: #ffffff;
            border: 1px solid var(--dhn2chb-border);
            border-radius: 16px;
            padding: 32px 26px;
            box-shadow: var(--dhn2chb-shadow);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .dhn2chb-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -8px rgba(30, 58, 138, 0.14);
        }

        .dhn2chb-card-icon {
            width: 58px;
            height: 58px;
            border-radius: 14px;
            background: #eff6ff;
            color: var(--dhn2chb-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.65rem;
            margin-bottom: 20px;
        }

        .dhn2chb-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--dhn2chb-dark);
            margin-bottom: 12px;
        }

        .dhn2chb-card p {
            color: #475569;
            font-size: 0.98rem;
            line-height: 1.65;
        }

        .dhn2chb-route-table-wrapper {
            overflow-x: auto;
            background: #ffffff;
            border: 1px solid var(--dhn2chb-border);
            border-radius: 16px;
            box-shadow: var(--dhn2chb-shadow);
            margin-bottom: 45px;
        }

        .dhn2chb-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.98rem;
        }

        .dhn2chb-table th {
            background: #1e3a8a;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            letter-spacing: 0.02em;
        }

        .dhn2chb-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--dhn2chb-border);
            color: #334155;
            vertical-align: middle;
        }

        .dhn2chb-table tr:last-child td {
            border-bottom: none;
        }

        .dhn2chb-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }

        .dhn2chb-img-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 22px;
            margin: 40px 0;
        }

        .dhn2chb-img-card {
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid var(--dhn2chb-border);
            box-shadow: var(--dhn2chb-shadow);
        }

        .dhn2chb-img-card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            display: block;
        }

        .dhn2chb-img-caption {
            padding: 14px 16px;
            font-size: 0.92rem;
            color: #475569;
            font-weight: 600;
            background: #ffffff;
        }

        .dhn2chb-faq-item {
            background: #ffffff;
            border: 1px solid var(--dhn2chb-border);
            border-radius: 14px;
            margin-bottom: 16px;
            padding: 24px 28px;
            box-shadow: var(--dhn2chb-shadow);
        }

        .dhn2chb-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--dhn2chb-dark);
            margin-bottom: 10px;
        }

        .dhn2chb-faq-item p {
            color: #475569;
            font-size: 0.98rem;
            line-height: 1.65;
            margin: 0;
        }

        .dhn2chb-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .dhn2chb-checklist li {
            padding-left: 28px;
            position: relative;
            margin-bottom: 12px;
            font-size: 0.98rem;
            color: #334155;
            line-height: 1.6;
        }

        .dhn2chb-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #16a34a;
            font-weight: 800;
            font-size: 1.1rem;
        }

        @media (max-width: 768px) {
            .dhn2chb-hero h1 {
                font-size: 2.1rem;
            }
            .dhn2chb-section {
                padding: 48px 0;
            }
            .dhn2chb-card {
                padding: 24px 20px;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Dhanbad to Chaibasa",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "INR 6,500 - 42,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Saraidhela Steel Gate, Dhanbad",
            "addressLocality": "Dhanbad",
            "addressRegion": "Jharkhand",
            "postalCode": "826001",
            "addressCountry": "IN"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Dhanbad"
            },
            {
                "@type": "City",
                "name": "Chaibasa"
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
        "serviceType": "Inter-District Packers and Movers Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Chaibasa, Jharkhand"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Dhanbad to Chaibasa Relocation Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Dhanbad to Chaibasa Household Goods Relocation"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Dhanbad to Chaibasa Car & Bike Transport Carrier"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Kolhan Division Government & Mining Transfer Moving"
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
                "name": "Dhanbad to Chaibasa Route",
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
                "name": "What is the highway distance and transit duration between Dhanbad and Chaibasa?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The road distance from Dhanbad to Chaibasa is approximately 200 km via NH-18 and NH-220 (via Chas, Purulia bypass, Chandil, and Seraikela). Dedicated closed container trucks complete the relocation in 5.5 to 7 hours with same-day doorstep setup."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Dhanbad to Chaibasa?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Household shifting rates start from Rs 6,500 to 12,500 for 1 BHK homes, Rs 11,000 to 19,500 for standard 2 BHK flats, and Rs 17,500 to 29,000 for 3 BHK bungalows, inclusive of 5-layer packing, labor, loading, and transit."
                }
            },
            {
                "@type": "Question",
                "name": "Do you serve administrative transfers to Kolhan Commissionerate in Chaibasa?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Chaibasa is the divisional headquarters of Kolhan. We specialize in official employee transfers for administrative officers, judiciary, forest officers, police, and mining engineers, providing 100% claimable IBA-approved bills."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide pickup across all Dhanbad localities including Saraidhela and Bank More?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our team handles complete doorstep packaging across Saraidhela, Bank More, Hirapur, Steel Gate, Jharia, Katras, Govindpur, Dhansar, Sindri, and IIT ISM residential quarters."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely transport cars and motorcycles from Dhanbad to Chaibasa?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate covered hydraulic car trailers and dedicated two-wheeler carriers equipped with safety wheel chocks, heavy ratchet straps, and comprehensive transit insurance protection."
                }
            },
            {
                "@type": "Question",
                "name": "Do you deliver to all areas of Chaibasa and West Singhbhum mining towns?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our delivery network services Chaibasa Town, Sadar Bazar, Tungri, Nimdih, Tata College Road, Gandhi Tola, as well as adjoining mining belts including Noamundi, Gua, and Jhinkpani."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="dhn2chb-hero">
    <div class="container">
        <div class="dhn2chb-badge-strip">
            <span class="dhn2chb-badge">&#10003; 200 KM Direct Inter-District Transit</span>
            <span class="dhn2chb-badge">&#10003; Kolhan Divisional Headquarters Route</span>
            <span class="dhn2chb-badge">&#10003; Mining &amp; Government Transfer Specialist</span>
            <span class="dhn2chb-badge">&#10003; Same-Day Guaranteed Setup</span>
        </div>
        <h1>Dhanbad to Chaibasa Packers and Movers</h1>
        <p class="lead">
            Relocating between the coal basins of Dhanbad and the iron ore administrative heartland of Chaibasa? Shree Ashirwad Packers and Movers delivers professional inter-district relocation services across the 200 km NH-18 &amp; NH-220 highway corridor. Benefit from 5-layer heavy protective packaging, tamper-proof closed container trucks, IBA-approved bills for government &amp; mining transfers, covered car transport, and complete same-day delivery.
        </p>
        <div class="dhn2chb-cta-group">
            <a href="tel:+918409531615" class="dhn2chb-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="#dhn2chb-pricing" class="dhn2chb-btn-secondary">
                View Price Table &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Route Corridor Overview & Statistics -->
<section class="dhn2chb-section">
    <div class="container">
        <div class="dhn2chb-heading-center">
            <h2>Dhanbad to Chaibasa Highway Corridor Details</h2>
            <p>
                Connecting Dhanbad commercial hub with the divisional headquarters of Kolhan at Chaibasa, this 200 km route via Chas, Purulia bypass, Chandil, and Seraikela ensures safe and dependable transportation of household assets.
            </p>
        </div>

        <div class="dhn2chb-route-table-wrapper">
            <table class="dhn2chb-table">
                <thead>
                    <tr>
                        <th>Highway Metric</th>
                        <th>Corridor Specifications</th>
                        <th>Shree Ashirwad Assurance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Total Road Distance</strong></td>
                        <td>~200 Kilometers via NH-18 &amp; NH-220 (via Chas, Purulia, Chandil, Seraikela)</td>
                        <td>Optimized highway routing with smooth multi-lane stretches</td>
                    </tr>
                    <tr>
                        <td><strong>Expected Transit Timeline</strong></td>
                        <td>5.5 to 7 hours for dedicated closed container trucks</td>
                        <td>Same-day loading, transportation, unloading, and complete setup</td>
                    </tr>
                    <tr>
                        <td><strong>Major Highway Stops</strong></td>
                        <td>Dhanbad &rarr; Chas &rarr; Purulia &rarr; Chandil &rarr; Kandra &rarr; Seraikela &rarr; Chaibasa</td>
                        <td>Continuous GPS tracking and prompt driver milestone updates</td>
                    </tr>
                    <tr>
                        <td><strong>Administrative Route Importance</strong></td>
                        <td>Kolhan Divisional Commissionerate, DIG Police, District Courts, Tata Steel mining</td>
                        <td>IBA-approved billing for fast employee transfer claims</td>
                    </tr>
                    <tr>
                        <td><strong>Dhanbad Pickup Coverage</strong></td>
                        <td>Saraidhela, Bank More, Hirapur, Steel Gate, Jharia, Katras, Govindpur, IIT ISM</td>
                        <td>Balcony hoisting, elevator packing, gated society clearances</td>
                    </tr>
                    <tr>
                        <td><strong>Chaibasa Delivery Reach</strong></td>
                        <td>Chaibasa Town, Sadar Bazar, Tungri, Nimdih, Tata College Road, Noamundi, Jhinkpani</td>
                        <td>Unloading, furniture reassembly, room setup, debris removal</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- 4 Verified Images Display -->
        <div class="dhn2chb-img-grid">
            <div class="dhn2chb-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Waterproof closed container truck for Dhanbad to Chaibasa inter-district transit">
                <div class="dhn2chb-img-caption">Dedicated sealed all-weather container trucks engineered for 200 km transit.</div>
            </div>
            <div class="dhn2chb-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5-layer packing materials protecting household goods in Dhanbad">
                <div class="dhn2chb-img-caption">Multi-layer bubble wrap, edge guards, and corrugated boxes for glassware and electronics.</div>
            </div>
            <div class="dhn2chb-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Hydraulic car carrier loading luxury car for Dhanbad to Chaibasa transport">
                <div class="dhn2chb-img-caption">Covered hydraulic car trailers equipped with wheel lock straps and transit insurance.</div>
            </div>
            <div class="dhn2chb-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and furniture setup at Chaibasa residence">
                <div class="dhn2chb-img-caption">Complete destination unpacking, bed re-assembly, electrical unmounting, and setup support.</div>
            </div>
        </div>
    </div>
</section>

<!-- Core Services Section -->
<section class="dhn2chb-section dhn2chb-section-gray">
    <div class="container">
        <div class="dhn2chb-heading-center">
            <h2>Specialized Relocation Services: Dhanbad to Chaibasa</h2>
            <p>
                From family relocations and government administrative transfers to mining engineering moves and vehicle transportation, our tailored services cover every requirement.
            </p>
        </div>

        <div class="dhn2chb-grid-3">
            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">&#127968;</div>
                <h3>Complete Household Shifting</h3>
                <p>
                    Full-service home moving covering modular sofas, double beds, wardrobes, refrigerators, washing machines, smart televisions, and breakable glassware. Packaged with multi-layer bubble wrap, thermocol sheets, and heavy-gauge corrugated cartons for maximum safety across the 200 km drive.
                </p>
                <ul class="dhn2chb-checklist">
                    <li>Room-wise structured categorization and tagging</li>
                    <li>Sofa wrapping with anti-dust stretch film</li>
                    <li>Mattress protection using heavy-gauge plastic sleeves</li>
                    <li>Wooden crate packaging for glass dining tables</li>
                </ul>
            </div>

            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">&#128663;</div>
                <h3>Car Carrier &amp; Bike Transport</h3>
                <p>
                    Relocate your sedan, hatchback, SUV, or motorcycle from Dhanbad to Chaibasa safely without highway strain. We utilize dedicated car transport trailers and custom-fabricated motorcycle cradles with foam padding and wheel locking mechanisms.
                </p>
                <ul class="dhn2chb-checklist">
                    <li>Enclosed hydraulic carriers protecting against highway gravel</li>
                    <li>Digital inspection report before loading at Dhanbad</li>
                    <li>Doorstep pickup across Saraidhela, Bank More, and Hirapur</li>
                    <li>Comprehensive marine transit insurance protection</li>
                </ul>
            </div>

            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">&#128220;</div>
                <h3>Kolhan &amp; Mining Transfer Support</h3>
                <p>
                    Smooth relocations for government officials at Kolhan division, judicial officers, bank managers, and mining engineers with iron ore companies in West Singhbhum. We maintain strict paperwork compliance.
                </p>
                <ul class="dhn2chb-checklist">
                    <li>IBA-recognized consignment notes and bills</li>
                    <li>Detailed itemized packing list with declared valuations</li>
                    <li>GST-registered authentic receipts for quick claims</li>
                    <li>Dedicated account manager for corporate approvals</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Table Section -->
<section id="dhn2chb-pricing" class="dhn2chb-section">
    <div class="container">
        <div class="dhn2chb-heading-center">
            <h2>Estimated Dhanbad to Chaibasa Relocation Pricing</h2>
            <p>
                We believe in 100% fair, transparent pricing with no hidden surprises, toll markups, or sudden surcharge demands on moving day.
            </p>
        </div>

        <div class="dhn2chb-route-table-wrapper">
            <table class="dhn2chb-table">
                <thead>
                    <tr>
                        <th>Move Type / Household Size</th>
                        <th>Recommended Vehicle</th>
                        <th>Packaging &amp; Manpower</th>
                        <th>Estimated Total Cost (INR)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 RK / 1 BHK Small Household</strong></td>
                        <td>Tata 407 / Closed Bolero Maxi Truck</td>
                        <td>&#8377; 2,800 &ndash; 4,200</td>
                        <td><strong>&#8377; 6,500 &ndash; 12,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Regular Family Apartment</strong></td>
                        <td>14 Ft / 17 Ft Dedicated Closed Container</td>
                        <td>&#8377; 4,800 &ndash; 7,500</td>
                        <td><strong>&#8377; 11,000 &ndash; 19,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Spacious Home / Villa</strong></td>
                        <td>19 Ft / 22 Ft Heavy Container Truck</td>
                        <td>&#8377; 7,500 &ndash; 11,000</td>
                        <td><strong>&#8377; 17,500 &ndash; 29,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Bungalow Shifting</strong></td>
                        <td>24 Ft / 32 Ft High-Cube Container</td>
                        <td>&#8377; 10,000 &ndash; 15,000</td>
                        <td><strong>&#8377; 26,000 &ndash; 42,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter Relocation</strong></td>
                        <td>Custom Crate / Secured Shared Carrier</td>
                        <td>&#8377; 1,200 &ndash; 1,600</td>
                        <td><strong>&#8377; 2,500 &ndash; 4,200</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Hatchback / Sedan Car Transport</strong></td>
                        <td>Dedicated Covered Car Carrier Trailer</td>
                        <td>&#8377; 1,800 &ndash; 2,800</td>
                        <td><strong>&#8377; 6,000 &ndash; 9,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>SUV / Luxury Vehicle Transport</strong></td>
                        <td>Enclosed Car Trailer with Full Transit Insurance</td>
                        <td>&#8377; 2,400 &ndash; 3,500</td>
                        <td><strong>&#8377; 8,000 &ndash; 13,000</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.92rem; color: #64748b; text-align: center;">
            * Estimates are indicative and vary based on exact pickup floor in Dhanbad, elevator access, total packing material volume, and declared insurance value. Taxes and toll fees are explicitly broken down.
        </p>
    </div>
</section>

<!-- Step-by-Step Relocation Workflow Section -->
<section class="dhn2chb-section">
    <div class="container">
        <div class="dhn2chb-heading-center">
            <h2>Our 5-Stage Moving Process: Dhanbad to Chaibasa</h2>
            <p>
                To provide complete peace of mind, Shree Ashirwad Packers and Movers implements a standardized five-stage execution framework designed specifically for the Dhanbad to Chaibasa highway corridor.
            </p>
        </div>

        <div class="dhn2chb-grid-3">
            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">&#128221;</div>
                <h3>1. Pre-Move Survey &amp; Itemized Estimation</h3>
                <p>
                    Our relocation supervisor conducts an in-depth on-site survey at your Dhanbad residence or a virtual video assessment. We catalog every piece of furniture, electronic gadget, fragile kitchen glassware, and vehicle to compute precise cubic volume, required packaging supplies, container capacity, and an all-inclusive written cost quote.
                </p>
            </div>
            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">&#128230;</div>
                <h3>2. Professional Packing &amp; Disassembly</h3>
                <p>
                    On moving day, our uniformed, background-checked packing crew arrives equipped with virgin materials. Modular beds, wardrobes, and TV panels are systematically unbolted. Heavy appliances are cocooned in multiple layers of shock-absorbing bubble wrap, edge guards, and waterproof shrink film to withstand highway transit.
                </p>
            </div>
            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">&#128666;</div>
                <h3>3. Scientific Container Loading &amp; Lashing</h3>
                <p>
                    Goods are loaded into our sealed, waterproof container trucks following a strict weight distribution formula. Heavier wooden furniture and appliances form the base layer, while lightweight cartons and delicate articles rest securely on top. All cargo is tethered with industrial ratchet tie-down straps to stop movement.
                </p>
            </div>
            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">&#128678;</div>
                <h3>4. Monitored Highway Transit via NH-18</h3>
                <p>
                    Our experienced drivers operate directly along the highway via Purulia, Chandil, and Seraikela into Chaibasa. The vehicle is tracked via real-time satellite GPS, and customer support provides timely updates at major highway checkposts and toll junctions without unnecessary stops.
                </p>
            </div>
            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">&#128295;</div>
                <h3>5. Destination Setup &amp; Debris Removal</h3>
                <p>
                    Upon arrival at your new residence in Sadar Bazar, Tungri, or Nimdih, our team unloads each carton into its designated room, reassembles beds and dining tables, assists with major appliance placement, and removes all discarded packing cartons and plastic waste, leaving your new home ready for comfortable living.
                </p>
            </div>
            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">&#128737;</div>
                <h3>Comprehensive Transit Risk Coverage</h3>
                <p>
                    Every consignment moving between Dhanbad and Chaibasa can be covered under our comprehensive transit insurance policy. In the improbable event of road accidents, fire, or external impacts, your claims are settled expeditiously through our partnering nationalized insurance providers.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Packing Methodology Section -->
<section class="dhn2chb-section dhn2chb-section-gray">
    <div class="container">
        <div class="dhn2chb-heading-center">
            <h2>Our Multi-Layered Packing Integrity</h2>
            <p>
                Highway conditions across Southern Jharkhand demand robust packing standards. We utilize only virgin, heavy-duty packing supplies tailored to protect every category of household asset.
            </p>
        </div>

        <div class="dhn2chb-grid-3">
            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">1</div>
                <h3>Primary Surface Lamination</h3>
                <p>
                    Direct application of scratch-resistant cling film and non-woven foam padding to polished wooden beds, dining tables, sofa sets, and leather seating to repel road dust and moisture.
                </p>
            </div>
            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">2</div>
                <h3>High-Density Bubble Shielding</h3>
                <p>
                    Multi-ply air-cushioned bubble wrap for televisions, microwave ovens, washing machines, and electronic gadgets to absorb shocks from highway vibration and uneven patches.
                </p>
            </div>
            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">3</div>
                <h3>Corner &amp; Edge Protection</h3>
                <p>
                    Structural corner guards installed on heavy furniture and glass table tops to eliminate chipping or impact damage during tight stairway maneuvering in apartment complexes.
                </p>
            </div>
            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">4</div>
                <h3>Heavy 7-Ply Master Cartons</h3>
                <p>
                    Heavy-gauge corrugated carton boxes for books, clothing, kitchen utensils, and food containers, taped with industrial adhesive bands and clearly tagged by room.
                </p>
            </div>
            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">5</div>
                <h3>Specialized Wooden Crating</h3>
                <p>
                    Custom wooden crate fabrication for delicate temple idols, marble items, large mirrors, and crystal chandeliers requiring rigid exterior shielding.
                </p>
            </div>
            <div class="dhn2chb-card">
                <div class="dhn2chb-card-icon">&#9733;</div>
                <h3>Cargo Lock &amp; Dunnage Strapping</h3>
                <p>
                    Inside our closed container trucks, all goods are locked into position with heavy nylon ratchet belts to prevent sliding during emergency highway braking.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Localities Covered: Dhanbad & Chaibasa -->
<section class="dhn2chb-section">
    <div class="container">
        <div class="dhn2chb-heading-center">
            <h2>Complete Pickup in Dhanbad &amp; Delivery in Chaibasa</h2>
            <p>
                Our logistical operations bridge every corner of the Dhanbad coalfield region to all residential and administrative zones of Chaibasa.
            </p>
        </div>

        <div class="dhn2chb-grid-3">
            <div class="dhn2chb-card">
                <h3>Dhanbad Pickup Localities</h3>
                <p>
                    Full doorstep packing, balcony hoisting, and loading service available throughout:
                </p>
                <ul class="dhn2chb-checklist">
                    <li><strong>Bank More &amp; Central:</strong> Bank More, Purana Bazar, Station Road, Dhansar</li>
                    <li><strong>Saraidhela &amp; Steel Gate:</strong> Saraidhela, Big Bazaar Road, Kolakusma, Karmik Nagar</li>
                    <li><strong>Hirapur &amp; Park Market:</strong> Hirapur, CMPF Colony, ISM Gate, Housing Colony</li>
                    <li><strong>Jharia &amp; Katras:</strong> Jharia Town, Katras Bazar, Sijua, Loyabad</li>
                    <li><strong>Govindpur &amp; Sindri:</strong> GT Road Industrial Hub, BIT Sindri Township</li>
                </ul>
            </div>

            <div class="dhn2chb-card">
                <h3>Chaibasa Delivery Coverage</h3>
                <p>
                    Seamless unloading, placement, and unpacking across all Chaibasa neighborhoods:
                </p>
                <ul class="dhn2chb-checklist">
                    <li><strong>Town Center:</strong> Sadar Bazar, Post Office Chowk, Bus Stand Road, Main Market</li>
                    <li><strong>Colony &amp; Educational:</strong> Tungri, Nimdih, Tata College Road, Gandhi Tola</li>
                    <li><strong>Administrative Zones:</strong> Kolhan Commissionerate Complex, DC Office, Session Court</li>
                    <li><strong>Institutional Quarters:</strong> Police Line, Forest Officers Colony, Railway Quarters</li>
                    <li><strong>Adjoining Mining Towns:</strong> Noamundi, Gua, Jhinkpani, Kiriburu connecting routes</li>
                </ul>
            </div>

            <div class="dhn2chb-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    With more than a decade of proven leadership along the Dhanbad-Chaibasa highway corridor, we guarantee satisfaction:
                </p>
                <ul class="dhn2chb-checklist">
                    <li>Dedicated closed container fleet &ndash; zero open truck compromises</li>
                    <li>Trained, in-house, police-verified moving crew</li>
                    <li>Same-day delivery and guaranteed arrival windows</li>
                    <li>Transparent written quotes with no moving-day surprises</li>
                    <li>End-to-end GPS visibility and dedicated relocation manager</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="dhn2chb-section dhn2chb-section-gray">
    <div class="container">
        <div class="dhn2chb-heading-center">
            <h2>Frequently Asked Questions: Dhanbad to Chaibasa Movers</h2>
            <p>
                Essential questions and answers regarding shifting between Dhanbad and Chaibasa with Shree Ashirwad Packers and Movers.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="dhn2chb-faq-item">
                <h3>What is the highway distance and transit duration between Dhanbad and Chaibasa?</h3>
                <p>
                    The road distance from Dhanbad to Chaibasa is approximately 200 km via NH-18 and NH-220 (via Chas, Purulia bypass, Chandil, and Seraikela). Dedicated closed container trucks complete the relocation in 5.5 to 7 hours with same-day doorstep setup.
                </p>
            </div>

            <div class="dhn2chb-faq-item">
                <h3>What are the shifting charges from Dhanbad to Chaibasa?</h3>
                <p>
                    Household shifting rates start from Rs 6,500 to 12,500 for 1 BHK homes, Rs 11,000 to 19,500 for standard 2 BHK flats, and Rs 17,500 to 29,000 for 3 BHK bungalows, inclusive of 5-layer packing, labor, loading, and transit.
                </p>
            </div>

            <div class="dhn2chb-faq-item">
                <h3>Do you serve administrative transfers to Kolhan Commissionerate in Chaibasa?</h3>
                <p>
                    Yes, Chaibasa is the divisional headquarters of Kolhan. We specialize in official employee transfers for administrative officers, judiciary, forest officers, police, and mining engineers, providing 100% claimable IBA-approved bills.
                </p>
            </div>

            <div class="dhn2chb-faq-item">
                <h3>Do you provide pickup across all Dhanbad localities including Saraidhela and Bank More?</h3>
                <p>
                    Yes, our team handles complete doorstep packaging across Saraidhela, Bank More, Hirapur, Steel Gate, Jharia, Katras, Govindpur, Dhansar, Sindri, and IIT ISM residential quarters.
                </p>
            </div>

            <div class="dhn2chb-faq-item">
                <h3>Can you safely transport cars and motorcycles from Dhanbad to Chaibasa?</h3>
                <p>
                    Yes, we operate covered hydraulic car trailers and dedicated two-wheeler carriers equipped with safety wheel chocks, heavy ratchet straps, and comprehensive transit insurance protection.
                </p>
            </div>

            <div class="dhn2chb-faq-item">
                <h3>Do you deliver to all areas of Chaibasa and West Singhbhum mining towns?</h3>
                <p>
                    Yes, our delivery network services Chaibasa Town, Sadar Bazar, Tungri, Nimdih, Tata College Road, Gandhi Tola, as well as adjoining mining belts including Noamundi, Gua, and Jhinkpani.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Footer Strip -->
<section style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 60px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Book Your Dhanbad to Chaibasa Move with Shree Ashirwad
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Contact our moving team today for a transparent written estimate, free home survey, and same-day delivery guarantee.
        </p>
        <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
            <a href="tel:+918409531615" style="background: #ea580c; color: #ffffff; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" style="background: rgba(255,255,255,0.15); color: #ffffff; font-weight: 600; padding: 14px 28px; border-radius: 10px; text-decoration: none; border: 1px solid rgba(255,255,255,0.3);">
                Request Moving Quote &rarr;
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
