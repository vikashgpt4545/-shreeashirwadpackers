<?php
/**
 * Page Name: Ramgarh to Dhanbad Packers and Movers
 * Route Slug: ramgarh-to-dhanbad-packers-and-movers
 * Description: Dependable household shifting, army cantonment transfers, CCL coal employee moves, and vehicle carrier services from Ramgarh to Dhanbad.
 * Focus Keywords: ramgarh to dhanbad packers and movers, packers and movers ramgarh to dhanbad, house shifting ramgarh to dhanbad, car transport ramgarh to dhanbad, bike transport ramgarh to dhanbad, household moving ramgarh dhanbad
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Ramgarh to Dhanbad Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe Ramgarh to Dhanbad packers and movers. 115 km direct transit via Chas & NH-18, 5-layer packing, CCL & Army transfer bills, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/ramgarh-to-dhanbad-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="ramgarh to dhanbad packers and movers, packers and movers ramgarh to dhanbad, house shifting ramgarh to dhanbad, car transport ramgarh to dhanbad, bike transport ramgarh to dhanbad, household moving ramgarh dhanbad">
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

    <!-- Scoped CSS for Route 9 (Ramgarh to Dhanbad) -->
    <style>
        :root {
            --ram2dhn-primary: #1e3a8a;
            --ram2dhn-secondary: #0284c7;
            --ram2dhn-accent: #b45309;
            --ram2dhn-accent-light: #fef3c7;
            --ram2dhn-dark: #0f172a;
            --ram2dhn-gray-bg: #f8fafc;
            --ram2dhn-border: #e2e8f0;
            --ram2dhn-shadow: 0 10px 25px -5px rgba(30, 58, 138, 0.08), 0 8px 10px -6px rgba(30, 58, 138, 0.04);
        }

        .ram2dhn-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .ram2dhn-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .ram2dhn-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .ram2dhn-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .ram2dhn-badge {
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

        .ram2dhn-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .ram2dhn-btn-primary {
            background: linear-gradient(135deg, #b45309 0%, #92400e 100%);
            color: #ffffff;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 14px rgba(180, 83, 9, 0.35);
            transition: all 0.3s ease;
        }

        .ram2dhn-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(180, 83, 9, 0.45);
            color: #ffffff;
        }

        .ram2dhn-btn-secondary {
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

        .ram2dhn-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .ram2dhn-section {
            padding: 70px 0;
        }

        .ram2dhn-section-gray {
            background-color: var(--ram2dhn-gray-bg);
        }

        .ram2dhn-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .ram2dhn-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--ram2dhn-dark);
            margin-bottom: 14px;
        }

        .ram2dhn-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .ram2dhn-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .ram2dhn-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 36px;
            align-items: center;
        }

        .ram2dhn-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .ram2dhn-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--ram2dhn-border);
            padding: 30px;
            box-shadow: var(--ram2dhn-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .ram2dhn-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(30, 58, 138, 0.12);
        }

        .ram2dhn-card-icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            background: var(--ram2dhn-accent-light);
            color: var(--ram2dhn-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .ram2dhn-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--ram2dhn-dark);
            margin-bottom: 12px;
        }

        .ram2dhn-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
        }

        .ram2dhn-table-container {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--ram2dhn-border);
            overflow-x: auto;
            box-shadow: var(--ram2dhn-shadow);
            margin: 35px 0;
        }

        .ram2dhn-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .ram2dhn-table th {
            background: #0f172a;
            color: #ffffff;
            font-weight: 700;
            padding: 16px 20px;
            font-size: 0.98rem;
        }

        .ram2dhn-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--ram2dhn-border);
            color: #334155;
            font-size: 0.95rem;
        }

        .ram2dhn-table tr:last-child td {
            border-bottom: none;
        }

        .ram2dhn-table tr:hover td {
            background-color: #f1f5f9;
        }

        .ram2dhn-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .ram2dhn-checklist li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            color: #334155;
            font-size: 0.98rem;
            line-height: 1.6;
        }

        .ram2dhn-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #10b981;
            font-weight: 800;
            font-size: 1.1rem;
        }

        .ram2dhn-img-wrap {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--ram2dhn-shadow);
        }

        .ram2dhn-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .ram2dhn-img-wrap:hover img {
            transform: scale(1.03);
        }

        .ram2dhn-faq-item {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--ram2dhn-border);
            padding: 24px;
            margin-bottom: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .ram2dhn-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--ram2dhn-dark);
            margin-bottom: 10px;
        }

        .ram2dhn-faq-item p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 991px) {
            .ram2dhn-grid-3, .ram2dhn-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
            .ram2dhn-grid-2 {
                grid-template-columns: 1fr;
            }
            .ram2dhn-hero h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 640px) {
            .ram2dhn-grid-3, .ram2dhn-grid-4 {
                grid-template-columns: 1fr;
            }
            .ram2dhn-hero {
                padding: 60px 0 45px;
            }
            .ram2dhn-hero h1 {
                font-size: 1.85rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Ramgarh to Dhanbad",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 5,000 - 24,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Road, Near Cantt Bus Stand",
            "addressLocality": "Ramgarh Cantonment",
            "addressRegion": "Jharkhand",
            "postalCode": "829122",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.6305,
            "longitude": 85.5186
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Ramgarh"
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
            "name": "Ramgarh to Dhanbad Relocation Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Ramgarh to Dhanbad Household Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Ramgarh to Dhanbad Car & Bike Carrier Transit"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Cantonment Military & CCL Employee Relocation Invoicing"
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
                "name": "Packers and Movers Ramgarh",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ramgarh"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Ramgarh to Dhanbad Route",
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
                "name": "What is the driving distance and travel duration between Ramgarh and Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Ramgarh and Dhanbad is approximately 115 km via NH-320 and NH-18 through Chas and Bokaro. With dedicated closed container trucks, transit takes about 3 to 3.5 hours, ensuring guaranteed same-day delivery."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Ramgarh to Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Estimated costs range from Rs 5,000 to 10,000 for 1 BHK homes, Rs 8,500 to 15,500 for 2 BHK residences, and Rs 14,000 to 24,000 for 3 BHK bungalows, covering multi-layer packing, loading, transport, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable GST invoices for Army Cantonment and CCL employee transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers delivers 100% genuine GST-compliant invoices, itemized packing lists, consignment notes (bilty), and IBA-format documentation approved for military, CCL, and central PSU claims."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely transport two-wheelers and cars from Ramgarh to Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate dedicated covered car carriers and specialized motorcycle crates with wheel clamps, bubble cushioning, and comprehensive transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Ramgarh and Dhanbad are covered for pickup and delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Ramgarh, we service Ramgarh Cantt, Nai Sarai, Gola Road, Barkakana, Bhurkunda, and Rajrappa. In Dhanbad, we cover Bank More, Saraidhela, Hirapur, IIT ISM, Jharia, Katras, and Govindpur."
                }
            },
            {
                "@type": "Question",
                "name": "Is comprehensive transit risk insurance available for household moves?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we offer optional transit insurance to safeguard all household goods, furniture, electronics, and vehicles against unexpected highway incidents with straightforward claim settlement."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="ram2dhn-hero">
    <div class="container">
        <div class="ram2dhn-badge-strip">
            <span class="ram2dhn-badge">&#9733; Verified Intercity Moving</span>
            <span class="ram2dhn-badge">&#128666; All-Weather Closed Containers</span>
            <span class="ram2dhn-badge">&#128196; Army &amp; CCL Approved Billing</span>
            <span class="ram2dhn-badge">&#128338; Fast 3-Hour Express Transit</span>
        </div>
        <h1>Ramgarh to Dhanbad Packers and Movers</h1>
        <p class="lead">
            Professional, secure, and punctual household shifting, vehicle transport, and corporate relocation services connecting Ramgarh Cantonment to Dhanbad. Experience 5-layer protective packing, dedicated container transport, and seamless same-day setup.
        </p>
        <div class="ram2dhn-cta-group">
            <a href="tel:+918409531615" class="ram2dhn-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Now: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="ram2dhn-btn-secondary">
                Request Free Shifting Estimate &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Route Overview Section -->
<section class="ram2dhn-section">
    <div class="container">
        <div class="ram2dhn-grid-2">
            <div>
                <span style="color: var(--ram2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Connecting Cantonment &amp; Coalfields</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--ram2dhn-dark); margin: 10px 0 20px;">
                    Reliable 115 KM Transit Connecting Ramgarh to Dhanbad
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    The journey between Ramgarh and Dhanbad spans approximately 115 km across Jharkhand&rsquo;s vital industrial and mining heartland. Ramgarh, distinguished by the historic Sikh Regimental Centre (SRC) and Punjab Regimental Centre (PRC) cantonments as well as key Central Coalfields Limited (CCL) operational zones, generates regular relocation demands for defence personnel, coal mining executives, and commercial merchants moving toward Dhanbad&rsquo;s bustling economy.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    At <strong>Shree Ashirwad Packers and Movers</strong>, we execute every relocation with military precision and professional care. From careful packing of residential furniture in Ramgarh Cantt to prompt delivery in Dhanbad&rsquo;s Saraidhela, Bank More, or Koyla Nagar, our dedicated container fleet ensures zero highway damage and fast 3 to 3.5 hour transit.
                </p>
                <ul class="ram2dhn-checklist">
                    <li>Full doorstep pickup across Ramgarh Cantt, Barkakana, Bhurkunda, and Gola Road</li>
                    <li>Specialized multi-layer protective packaging for electronics, fragile crockery, and heavy furniture</li>
                    <li>Weatherproof closed-body container trucks safeguarding goods against rain and highway dust</li>
                    <li>Complete unloading, furniture reassembly, and packaging scrap removal in Dhanbad</li>
                </ul>
            </div>
            <div class="ram2dhn-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Ramgarh to Dhanbad Container Truck Relocation" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Core Relocation Services Grid -->
<section class="ram2dhn-section ram2dhn-section-gray">
    <div class="container">
        <div class="ram2dhn-heading-center">
            <h2>Our Complete Shifting Services from Ramgarh to Dhanbad</h2>
            <p>
                Engineered for domestic households, defence cantonment officers, coalfield executives, and commercial enterprises.
            </p>
        </div>

        <div class="ram2dhn-grid-3">
            <div class="ram2dhn-card">
                <div class="ram2dhn-card-icon">&#127968;</div>
                <h3>Complete Home Shifting</h3>
                <p>
                    Full packing of living room sofas, double beds, modular kitchenware, home theaters, and appliances. Systematically loaded, securely transported, and placed into your new Dhanbad residence.
                </p>
            </div>
            <div class="ram2dhn-card">
                <div class="ram2dhn-card-icon">&#128663;</div>
                <h3>Enclosed Car Carrier</h3>
                <p>
                    Specialized hydraulic car trailers to relocate hatchbacks, sedans, and SUVs from Ramgarh to Dhanbad without unnecessary driving stress, tire wear, or stone-chip damage.
                </p>
            </div>
            <div class="ram2dhn-card">
                <div class="ram2dhn-card-icon">&#127949;</div>
                <h3>Two-Wheeler Bike Shifting</h3>
                <p>
                    Multi-layer foam wrapping and sturdy wooden crating for motorcycles and scooters, complete with secure handle and mirror protection for safe transit.
                </p>
            </div>
            <div class="ram2dhn-card">
                <div class="ram2dhn-card-icon">&#128196;</div>
                <h3>Defence &amp; CCL Transfer Billing</h3>
                <p>
                    Fully authorized GST bills, packing inventory lists, consignment receipts (bilty), and IBA-approved invoices compliant with Indian Army, CCL, and central PSU reimbursement guidelines.
                </p>
            </div>
            <div class="ram2dhn-card">
                <div class="ram2dhn-card-icon">&#128230;</div>
                <h3>Part Load &amp; Single Room Moves</h3>
                <p>
                    Affordable sharing and part-load options for students attending IIT ISM Dhanbad and individual professionals relocating with minimal luggage.
                </p>
            </div>
            <div class="ram2dhn-card">
                <div class="ram2dhn-card-icon">&#128737;</div>
                <h3>Comprehensive Transit Insurance</h3>
                <p>
                    Optional 100% all-risk transit insurance protecting expensive home electronics, antiques, and luxury furniture against unforeseen road incidents.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Packaging Protocols -->
<section class="ram2dhn-section">
    <div class="container">
        <div class="ram2dhn-grid-2">
            <div class="ram2dhn-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Multi-Layer Household Packing Ramgarh to Dhanbad" loading="lazy">
            </div>
            <div>
                <span style="color: var(--ram2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">High-Quality Packing Materials</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--ram2dhn-dark); margin: 10px 0 20px;">
                    Five-Tier Protective Packaging for Complete Cargo Defense
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    The highway corridor connecting Ramgarh to Dhanbad via Bokaro and Chas features varying traffic densities and road patches. High-grade packing is indispensable to keep furniture pristine and electronics safeguarded.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Our certified packing specialists enforce rigorous five-layer protection standards:
                </p>
                <ul class="ram2dhn-checklist">
                    <li><strong>Layer 1 - Cling Film Wrap:</strong> Non-static stretch wrap to protect wooden polish, leather sofas, and fabrics from moisture and highway dirt.</li>
                    <li><strong>Layer 2 - Air Bubble Shielding:</strong> High-density bubble wrap around flat-screen TVs, microwaves, glassware, and decorative mirrors.</li>
                    <li><strong>Layer 3 - Heavy Corrugated Sheets:</strong> Multi-ply cardboard wrapping on dining tables, refrigerators, and washing machines.</li>
                    <li><strong>Layer 4 - Corner Guards:</strong> Thick cardboard angle protectors placed on furniture edges to eliminate chipping during stair handling.</li>
                    <li><strong>Layer 5 - 7-Ply Cartons &amp; Crates:</strong> Heavyweight master cartons sealed with industrial tape and color-coded room tags.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Shifting Cost Table -->
<section class="ram2dhn-section ram2dhn-section-gray">
    <div class="container">
        <div class="ram2dhn-heading-center">
            <h2>Ramgarh to Dhanbad Relocation Costs &amp; Price Estimates</h2>
            <p>
                Clear, itemized moving quotations with zero hidden surcharges or surprise fees.
            </p>
        </div>

        <div class="ram2dhn-table-container">
            <table class="ram2dhn-table">
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
                        <td>&#8377; 1,900 - 3,200</td>
                        <td>&#8377; 3,100 - 4,800</td>
                        <td><strong>&#8377; 5,000 - 8,000</strong></td>
                        <td>3 - 3.5 Hours (Same Day)</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Complete Home</strong></td>
                        <td>&#8377; 2,800 - 4,500</td>
                        <td>&#8377; 4,200 - 6,000</td>
                        <td><strong>&#8377; 7,000 - 10,500</strong></td>
                        <td>3 - 3.5 Hours (Same Day)</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Flat</strong></td>
                        <td>&#8377; 4,200 - 6,800</td>
                        <td>&#8377; 5,500 - 8,700</td>
                        <td><strong>&#8377; 9,700 - 15,500</strong></td>
                        <td>3.5 - 4 Hours (Same Day)</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Home</strong></td>
                        <td>&#8377; 6,000 - 9,500</td>
                        <td>&#8377; 8,000 - 14,500</td>
                        <td><strong>&#8377; 14,000 - 24,000</strong></td>
                        <td>3.5 - 4.5 Hours (Same Day)</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                        <td>&#8377; 700 - 1,100</td>
                        <td>&#8377; 1,500 - 2,400</td>
                        <td><strong>&#8377; 2,200 - 3,500</strong></td>
                        <td>Same Day</td>
                    </tr>
                    <tr>
                        <td><strong>Car Carrier (Hatchback/SUV)</strong></td>
                        <td>&#8377; 1,100 - 1,600</td>
                        <td>&#8377; 4,400 - 6,400</td>
                        <td><strong>&#8377; 5,500 - 8,000</strong></td>
                        <td>Same Day / Next Morning</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.92rem; margin-top: -10px;">
            * Approximate pricing based on standard moving volumes. Actual pricing depends on total inventory volume, floor elevation, elevator access, and chosen optional insurance.
        </p>
    </div>
</section>

<!-- Visual Feature Strip: Vehicle Shipping -->
<section class="ram2dhn-section">
    <div class="container">
        <div class="ram2dhn-grid-2">
            <div>
                <span style="color: var(--ram2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Specialized Vehicle Transit</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--ram2dhn-dark); margin: 10px 0 20px;">
                    Enclosed Car Carrier &amp; Secure Bike Transport
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Transporting personal vehicles along busy industrial highways between Ramgarh and Dhanbad can be taxing. Our enclosed automobile carriers eliminate driving fatigue, road debris hazards, and unwanted odometer mileage.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Every car and motorcycle undergoes a comprehensive condition audit before departure from Ramgarh:
                </p>
                <ul class="ram2dhn-checklist">
                    <li>Full photographic pre-transit inspection detailing exterior body panels and fuel level</li>
                    <li>Covered car carriers equipped with hydraulic deck elevators and individual tire locks</li>
                    <li>Double-cushioned motorcycle packaging with reinforced handlebar and mirror pads</li>
                    <li>Direct delivery to your doorstep anywhere in Dhanbad with handover verification</li>
                </ul>
            </div>
            <div class="ram2dhn-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Ramgarh to Dhanbad Car Carrier Transport" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Route Logistics Section -->
<section class="ram2dhn-section ram2dhn-section-gray">
    <div class="container">
        <div class="ram2dhn-heading-center">
            <h2>Ramgarh to Dhanbad Highway Logistics &amp; Travel Path</h2>
            <p>
                Carefully optimized route management guarantees predictable transit times and total safety for your cargo.
            </p>
        </div>

        <div class="ram2dhn-grid-3">
            <div class="ram2dhn-card">
                <div class="dum2dhn-card-icon">&#128506;</div>
                <h3>Primary Route via Chas &amp; NH-18</h3>
                <p>
                    Departing Ramgarh Cantt, our trucks proceed eastward along NH-320 via Gola, Peterbar, and Chas (Bokaro), merging onto NH-18 straight into Dhanbad city. Total distance is roughly 115 km, comfortably navigated in 3 to 3.5 hours.
                </p>
            </div>
            <div class="ram2dhn-card">
                <div class="dum2dhn-card-icon">&#128678;</div>
                <h3>Alternative Route via Gomia &amp; Phusro</h3>
                <p>
                    During peak highway congestion around Chas, our vehicles can navigate via Gomia and Phusro, entering the coal corridor smoothly into Katras and Dhanbad without unexpected roadside hold-ups.
                </p>
            </div>
            <div class="ram2dhn-card">
                <div class="dum2dhn-card-icon">&#128667;</div>
                <h3>Fleet Reliability &amp; GPS Tracking</h3>
                <p>
                    Every closed-body truck is fitted with real-time GPS tracking. Our customer care team keeps you informed at key milestones across the Ramgarh-Bokaro-Dhanbad transit line.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Destination Assembly -->
<section class="ram2dhn-section">
    <div class="container">
        <div class="ram2dhn-grid-2">
            <div class="ram2dhn-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service Ramgarh to Dhanbad" loading="lazy">
            </div>
            <div>
                <span style="color: var(--ram2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Turnkey Destination Experience</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--ram2dhn-dark); margin: 10px 0 20px;">
                    Effortless Unloading, Furniture Assembly &amp; Debris Disposal
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Completing your relocation means settling down in a neat, well-arranged house on moving day. Our destination team in Dhanbad takes care of all strenuous physical tasks so you and your family can relax comfortably.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    We carefully place each box into its designated room based on your instructions:
                </p>
                <ul class="ram2dhn-checklist">
                    <li>Assembly of wooden beds, wardrobes, study desks, and dining furniture</li>
                    <li>Assistance with placing refrigerators, washing machines, and audio systems</li>
                    <li>Unpacking and inspecting all fragile items and glassware in your presence</li>
                    <li>Collection and eco-friendly disposal of used cartons, plastic bubble wrap, and adhesive tape</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Cantonment & Coalfield Relocation Focus Section -->
<section class="ram2dhn-section ram2dhn-section-gray">
    <div class="container">
        <div class="ram2dhn-heading-center">
            <h2>Defence Cantonment &amp; Coalfield Relocation Specialization</h2>
            <p>
                Tailored relocation procedures for military personnel, CCL executives, and industrial engineering staff.
            </p>
        </div>

        <div class="ram2dhn-grid-3">
            <div class="ram2dhn-card">
                <div class="ram2dhn-card-icon">&#9873;</div>
                <h3>Army &amp; Cantonment Transfers</h3>
                <p>
                    Ramgarh Cantt is home to the Sikh and Punjab Regimental Centers. We possess extensive experience handling official transfer relocations for Indian Army officers, providing certified documentation, packing receipts, and timely transport to Dhanbad or connecting transit points.
                </p>
            </div>
            <div class="ram2dhn-card">
                <div class="ram2dhn-card-icon">&#9874;</div>
                <h3>CCL to BCCL Corporate Transfers</h3>
                <p>
                    Engineers and administrative managers transferring between CCL coalfields in Barkakana, Rajrappa, and Argada to BCCL headquarters in Koyla Nagar, Dhanbad benefit from our specialized corporate moving support and transparent company-reimbursable billing.
                </p>
            </div>
            <div class="ram2dhn-card">
                <div class="ram2dhn-card-icon">&#127891;</div>
                <h3>Institutional &amp; Faculty Moves</h3>
                <p>
                    We provide smooth household and office relocations for educators, professors, and administrative staff moving to prestigious institutions including IIT ISM Dhanbad and BIT Sindri.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Local Coverage Grid -->
<section class="ram2dhn-section">
    <div class="container">
        <div class="ram2dhn-heading-center">
            <h2>Full Pickup in Ramgarh &amp; Doorstep Delivery Across Dhanbad</h2>
            <p>
                Our comprehensive moving operations extend across every neighborhood in Ramgarh and Dhanbad.
            </p>
        </div>

        <div class="ram2dhn-grid-3">
            <div class="ram2dhn-card">
                <h3>Ramgarh Pickup Localities</h3>
                <p>
                    Prompt doorstep survey and packaging across all sectors of Ramgarh:
                </p>
                <ul class="ram2dhn-checklist">
                    <li><strong>Cantonment Zones:</strong> Ramgarh Cantt, Sikh Regimental Area, Nai Sarai</li>
                    <li><strong>Township Belts:</strong> Main Road, Chitarpur, Gola Road, Subhash Chowk</li>
                    <li><strong>Mining &amp; Industrial:</strong> Barkakana, Bhurkunda, Argada, Saunda</li>
                    <li><strong>Outskirts:</strong> Rajrappa Project Area, Mandu, Kuju</li>
                </ul>
            </div>

            <div class="ram2dhn-card">
                <h3>Dhanbad Delivery Coverage</h3>
                <p>
                    Unloading, room placement, and setup across all Dhanbad neighborhoods:
                </p>
                <ul class="ram2dhn-checklist">
                    <li><strong>Commercial Centers:</strong> Bank More, Purana Bazar, Station Road</li>
                    <li><strong>Residential Townships:</strong> Saraidhela, Steel Gate, Big Bazaar Area</li>
                    <li><strong>Institutional Hubs:</strong> Hirapur, CMPF Colony, IIT ISM Campus</li>
                    <li><strong>Industrial &amp; Coal Sectors:</strong> Govindpur, Dhansar, Katras, Jharia</li>
                </ul>
            </div>

            <div class="ram2dhn-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    Trusted by hundreds of families and businesses across Ramgarh and Dhanbad:
                </p>
                <ul class="ram2dhn-checklist">
                    <li>Company-owned weatherproof container vehicles</li>
                    <li>Experienced, background-verified full-time crew</li>
                    <li>Genuine GST invoices for government and PSU transfer claims</li>
                    <li>Fast 3-hour highway transit with guaranteed same-day setup</li>
                    <li>Transparent pricing with zero hidden surcharges</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="ram2dhn-section ram2dhn-section-gray">
    <div class="container">
        <div class="ram2dhn-heading-center">
            <h2>Frequently Asked Questions: Ramgarh to Dhanbad Shifting</h2>
            <p>
                Essential information on pricing, transit times, packing materials, and claim documentation.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="ram2dhn-faq-item">
                <h3>What is the driving distance and travel duration between Ramgarh and Dhanbad?</h3>
                <p>
                    The highway distance between Ramgarh and Dhanbad is approximately 115 km via NH-320 and NH-18 through Chas and Bokaro. With dedicated closed container trucks, transit takes about 3 to 3.5 hours, ensuring guaranteed same-day delivery.
                </p>
            </div>

            <div class="ram2dhn-faq-item">
                <h3>What are the shifting charges from Ramgarh to Dhanbad?</h3>
                <p>
                    Estimated costs range from Rs 5,000 to 10,000 for 1 BHK homes, Rs 8,500 to 15,500 for 2 BHK residences, and Rs 14,000 to 24,000 for 3 BHK bungalows, covering multi-layer packing, loading, transport, and unloading.
                </p>
            </div>

            <div class="ram2dhn-faq-item">
                <h3>Do you provide claimable GST invoices for Army Cantonment and CCL employee transfers?</h3>
                <p>
                    Yes, Shree Ashirwad Packers and Movers delivers 100% genuine GST-compliant invoices, itemized packing lists, consignment notes (bilty), and IBA-format documentation approved for military, CCL, and central PSU claims.
                </p>
            </div>

            <div class="ram2dhn-faq-item">
                <h3>Can you safely transport two-wheelers and cars from Ramgarh to Dhanbad?</h3>
                <p>
                    Yes, we operate dedicated covered car carriers and specialized motorcycle crates with wheel clamps, bubble cushioning, and comprehensive transit insurance.
                </p>
            </div>

            <div class="ram2dhn-faq-item">
                <h3>Which areas in Ramgarh and Dhanbad are covered for pickup and delivery?</h3>
                <p>
                    In Ramgarh, we service Ramgarh Cantt, Nai Sarai, Gola Road, Barkakana, Bhurkunda, and Rajrappa. In Dhanbad, we cover Bank More, Saraidhela, Hirapur, IIT ISM, Jharia, Katras, and Govindpur.
                </p>
            </div>

            <div class="ram2dhn-faq-item">
                <h3>Is comprehensive transit risk insurance available for household moves?</h3>
                <p>
                    Yes, we offer optional transit insurance to safeguard all household goods, furniture, electronics, and vehicles against unexpected highway incidents with straightforward claim settlement.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 65px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Book Your Ramgarh to Dhanbad Move Today
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Contact our moving experts for an accurate written estimate, complimentary pre-move assessment, and guaranteed same-day delivery.
        </p>
        <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
            <a href="tel:+918409531615" style="background: #b45309; color: #ffffff; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
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
