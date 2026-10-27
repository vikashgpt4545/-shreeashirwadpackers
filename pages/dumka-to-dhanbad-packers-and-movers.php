<?php
/**
 * Page Name: Dumka to Dhanbad Packers and Movers
 * Route Slug: dumka-to-dhanbad-packers-and-movers
 * Description: Reliable intercity shifting, home relocation, and vehicle transport connecting Dumka (Santhal Pargana) to Dhanbad (Coal Capital).
 * Focus Keywords: dumka to dhanbad packers and movers, packers and movers dumka to dhanbad, house shifting dumka to dhanbad, car carrier dumka to dhanbad, bike transport dumka to dhanbad, household moving dumka dhanbad
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Dumka to Dhanbad Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Professional Dumka to Dhanbad packers and movers. 135 km direct transit, 5-layer packing, corporate & govt transfer bills, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dumka-to-dhanbad-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="dumka to dhanbad packers and movers, packers and movers dumka to dhanbad, house shifting dumka to dhanbad, car carrier dumka to dhanbad, bike transport dumka to dhanbad, household moving dumka dhanbad">
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

    <!-- Scoped CSS for Route 7 (Dumka to Dhanbad) -->
    <style>
        :root {
            --dum2dhn-primary: #065f46;
            --dum2dhn-secondary: #0284c7;
            --dum2dhn-accent: #d97706;
            --dum2dhn-accent-light: #fef3c7;
            --dum2dhn-dark: #0f172a;
            --dum2dhn-gray-bg: #f8fafc;
            --dum2dhn-border: #e2e8f0;
            --dum2dhn-shadow: 0 10px 25px -5px rgba(6, 95, 70, 0.08), 0 8px 10px -6px rgba(6, 95, 70, 0.04);
        }

        .dum2dhn-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(6, 95, 70, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .dum2dhn-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .dum2dhn-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .dum2dhn-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .dum2dhn-badge {
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

        .dum2dhn-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .dum2dhn-btn-primary {
            background: linear-gradient(135deg, #d97706 0%, #b45309 100%);
            color: #ffffff;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 14px rgba(217, 119, 6, 0.35);
            transition: all 0.3s ease;
        }

        .dum2dhn-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(217, 119, 6, 0.45);
            color: #ffffff;
        }

        .dum2dhn-btn-secondary {
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

        .dum2dhn-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .dum2dhn-section {
            padding: 70px 0;
        }

        .dum2dhn-section-gray {
            background-color: var(--dum2dhn-gray-bg);
        }

        .dum2dhn-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .dum2dhn-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--dum2dhn-dark);
            margin-bottom: 14px;
        }

        .dum2dhn-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .dum2dhn-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .dum2dhn-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 36px;
            align-items: center;
        }

        .dum2dhn-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .dum2dhn-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--dum2dhn-border);
            padding: 30px;
            box-shadow: var(--dum2dhn-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dum2dhn-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(6, 95, 70, 0.12);
        }

        .dum2dhn-card-icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            background: var(--dum2dhn-accent-light);
            color: var(--dum2dhn-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .dum2dhn-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--dum2dhn-dark);
            margin-bottom: 12px;
        }

        .dum2dhn-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
        }

        .dum2dhn-table-container {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--dum2dhn-border);
            overflow-x: auto;
            box-shadow: var(--dum2dhn-shadow);
            margin: 35px 0;
        }

        .dum2dhn-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .dum2dhn-table th {
            background: #0f172a;
            color: #ffffff;
            font-weight: 700;
            padding: 16px 20px;
            font-size: 0.98rem;
        }

        .dum2dhn-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--dum2dhn-border);
            color: #334155;
            font-size: 0.95rem;
        }

        .dum2dhn-table tr:last-child td {
            border-bottom: none;
        }

        .dum2dhn-table tr:hover td {
            background-color: #f1f5f9;
        }

        .dum2dhn-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .dum2dhn-checklist li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            color: #334155;
            font-size: 0.98rem;
            line-height: 1.6;
        }

        .dum2dhn-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #10b981;
            font-weight: 800;
            font-size: 1.1rem;
        }

        .dum2dhn-img-wrap {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--dum2dhn-shadow);
        }

        .dum2dhn-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .dum2dhn-img-wrap:hover img {
            transform: scale(1.03);
        }

        .dum2dhn-faq-item {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--dum2dhn-border);
            padding: 24px;
            margin-bottom: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .dum2dhn-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--dum2dhn-dark);
            margin-bottom: 10px;
        }

        .dum2dhn-faq-item p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 991px) {
            .dum2dhn-grid-3, .dum2dhn-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
            .dum2dhn-grid-2 {
                grid-template-columns: 1fr;
            }
            .dum2dhn-hero h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 640px) {
            .dum2dhn-grid-3, .dum2dhn-grid-4 {
                grid-template-columns: 1fr;
            }
            .dum2dhn-hero {
                padding: 60px 0 45px;
            }
            .dum2dhn-hero h1 {
                font-size: 1.85rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Dumka to Dhanbad",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 5,500 - 24,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Road, Near Bus Stand",
            "addressLocality": "Dumka",
            "addressRegion": "Jharkhand",
            "postalCode": "814101",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 24.2694,
            "longitude": 87.2497
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Dumka"
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
            "name": "Dumka to Dhanbad Relocation Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Dumka to Dhanbad Household Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Dumka to Dhanbad Car & Bike Transport Carrier"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Government & Corporate Employee Relocation Documentation"
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
                "name": "Packers and Movers Dumka",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dumka"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Dumka to Dhanbad Route",
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
                "name": "What is the road distance and transit time between Dumka and Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The driving distance between Dumka and Dhanbad is approximately 135 km via Jamtara and Govindpur or via Deoghar and Madhupur. With our dedicated closed container trucks, transit takes about 3.5 to 4.5 hours with same-day doorstep setup."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Dumka to Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Standard shifting charges range from Rs 5,500 to 10,500 for 1 BHK homes, Rs 9,000 to 16,500 for 2 BHK flats, and Rs 14,500 to 24,000 for 3 BHK homes, inclusive of multi-layer packing, loading, transport, unloading, and basic unpacking."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable GST bills for government and bank employee transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers provides 100% genuine, GST-compliant moving invoices, itemized packing inventories, consignment notes (bilty), and IBA-approved documentation valid for government, bank, and PSU transfer claims."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely transport two-wheelers and cars from Dumka to Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate specialized car carriers and enclosed bike transportation with wheel locks, protective foam wrap, strapping, and comprehensive transit insurance protection."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Dumka and Dhanbad do you cover for packing and delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide pickup across all Dumka localities including Thana Road, Rasikpur, Court Road, Dudhani, and SP College Road. In Dhanbad, we deliver to Bank More, Saraidhela, Hirapur, IIT ISM Campus, Jharia, Katras, and Govindpur."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance available for Dumka to Dhanbad household goods?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide comprehensive transit risk insurance covering unexpected road risks, accidental damages, and unforeseen highway hazards with fast documentation settlement."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="dum2dhn-hero">
    <div class="container">
        <div class="dum2dhn-badge-strip">
            <span class="dum2dhn-badge">&#9733; 100% Verified Intercity Shifting</span>
            <span class="dum2dhn-badge">&#128666; Dedicated Covered Container Fleet</span>
            <span class="dum2dhn-badge">&#128196; IBA-Approved GST Invoicing</span>
            <span class="dum2dhn-badge">&#128338; Fast 4-Hour Express Transit</span>
        </div>
        <h1>Dumka to Dhanbad Packers and Movers</h1>
        <p class="lead">
            Dependable, insured, and professional household shifting, vehicle transport, and corporate relocation services from Dumka to Dhanbad. Experience seamless packing, damage-free container transport, and same-day delivery across the Coal Capital.
        </p>
        <div class="dum2dhn-cta-group">
            <a href="tel:+918409531615" class="dum2dhn-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Now: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="dum2dhn-btn-secondary">
                Request Free Shifting Estimate &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Route Overview Section -->
<section class="dum2dhn-section">
    <div class="container">
        <div class="dum2dhn-grid-2">
            <div>
                <span style="color: var(--dum2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Connecting Santhal Pargana to Coal Capital</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--dum2dhn-dark); margin: 10px 0 20px;">
                    Fast &amp; Damage-Free Dumka to Dhanbad Moving Solutions
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Moving your household, commercial inventory, or personal vehicle from Dumka to Dhanbad covers an intercity corridor of approximately 135 km. Dumka, as the administrative headquarters of the Santhal Pargana division, sees frequent relocations of government officials, educators, healthcare professionals, and commercial traders moving toward the thriving urban and industrial center of Dhanbad.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    At <strong>Shree Ashirwad Packers and Movers</strong>, we remove all moving stress with our specialized doorstep packing, closed-body weatherproof container vehicles, and dedicated crew members. Whether you are transitioning to an apartment in Saraidhela, settling near IIT ISM in Hirapur, or relocating a commercial firm to Bank More, our disciplined moving methodology guarantees that every fragile crockery set, heavy wooden wardrobe, and expensive electronics unit arrives in pristine condition.
                </p>
                <ul class="dum2dhn-checklist">
                    <li>Doorstep pickup across all neighborhoods of Dumka town and rural fringes</li>
                    <li>Advanced 5-layer protective packing materials including bubble wrap and edge-guards</li>
                    <li>Direct container transit via Jamtara/Govindpur corridor in 3.5 to 4.5 hours</li>
                    <li>Full unpacking, furniture reassembly, and debris collection at destination</li>
                </ul>
            </div>
            <div class="dum2dhn-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dumka to Dhanbad Closed Container Truck Transport" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Relocation Services Grid -->
<section class="dum2dhn-section dum2dhn-section-gray">
    <div class="container">
        <div class="dum2dhn-heading-center">
            <h2>Comprehensive Dumka to Dhanbad Moving Services</h2>
            <p>
                From compact 1 BHK bachelor setups to grand multi-story independent villas, corporate offices, and luxury automobiles, we deliver tailored logistics backed by professional accountability.
            </p>
        </div>

        <div class="dum2dhn-grid-3">
            <div class="dum2dhn-card">
                <div class="dum2dhn-card-icon">&#127968;</div>
                <h3>Complete Household Shifting</h3>
                <p>
                    Full-service packing for all home furniture, electronics, modular kitchenware, clothing, and bedding. Every item is inventoried, packed with durable materials, and placed into appropriate rooms in Dhanbad.
                </p>
            </div>
            <div class="dum2dhn-card">
                <div class="dum2dhn-card-icon">&#128663;</div>
                <h3>Car Carrier &amp; Vehicle Transit</h3>
                <p>
                    Enclosed car trailers and dedicated hydraulic carriers to relocate hatchbacks, sedans, and SUVs from Dumka to Dhanbad safely without adding mileage or exposing your car to highway gravel.
                </p>
            </div>
            <div class="dum2dhn-card">
                <div class="dum2dhn-card-icon">&#127949;</div>
                <h3>Two-Wheeler Bike Transport</h3>
                <p>
                    Specialized motorcycle and scooter crating using bubble wrap, corrugated sheets, and heavy-duty nylon strapping to protect headlights, fuel tanks, and rear mirrors during transit.
                </p>
            </div>
            <div class="dum2dhn-card">
                <div class="dum2dhn-card-icon">&#127970;</div>
                <h3>Corporate &amp; Govt Relocations</h3>
                <p>
                    Tailored relocation services for bank personnel, state government officers, judicial staff, and private executives with genuine GST invoices, consignment bilty, and claimable vouchers.
                </p>
            </div>
            <div class="dum2dhn-card">
                <div class="dum2dhn-card-icon">&#128230;</div>
                <h3>Luggage &amp; Mini Moves</h3>
                <p>
                    Affordable part-load and single-room relocation options for students attending coaching institutes or IIT ISM Dhanbad, and working professionals relocating with minimal luggage.
                </p>
            </div>
            <div class="dum2dhn-card">
                <div class="dum2dhn-card-icon">&#128737;</div>
                <h3>Transit Risk Insurance</h3>
                <p>
                    Optional 100% comprehensive transit value insurance to safeguard high-value electronic gadgets, delicate glassware, and premium antique wooden furniture against all road contingencies.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Household Packing -->
<section class="dum2dhn-section">
    <div class="container">
        <div class="dum2dhn-grid-2">
            <div class="dum2dhn-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household Packing and Furniture Wrapping Dumka to Dhanbad" loading="lazy">
            </div>
            <div>
                <span style="color: var(--dum2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Premium Packing Materials</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--dum2dhn-dark); margin: 10px 0 20px;">
                    Five-Layer Protective Packaging for Zero Highway Shock
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    The journey between Dumka and Dhanbad traverses regional state highways and national road corridors. Minor road irregularities and highway vibrations can threaten delicate electronic components and finished furniture surfaces if inferior packing is used.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    At Shree Ashirwad Packers and Movers, our team executes a rigorous 5-layer packing methodology:
                </p>
                <ul class="dum2dhn-checklist">
                    <li><strong>Layer 1 - Scratch Guard:</strong> Virgin stretch cling film applied directly to wooden, leather, and metal surfaces to seal out moisture and dust.</li>
                    <li><strong>Layer 2 - Shock Absorption:</strong> High-density 3-ply air-cushioned bubble wrap for glass tables, television screens, and microwave ovens.</li>
                    <li><strong>Layer 3 - Structural Reinforcement:</strong> Rigid corrugated sheets wrapped around heavy appliances and sofas to resist exterior pressure.</li>
                    <li><strong>Layer 4 - Corner Protection:</strong> Heavy-gauge reinforced cardboard corner protectors on dining tables, wardrobes, and cabinets.</li>
                    <li><strong>Layer 5 - Industrial Sealing:</strong> Heavy 7-ply master cartons sealed with reinforced adhesive tape and labeled room by room.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Rate Card & Cost Estimate Table -->
<section class="dum2dhn-section dum2dhn-section-gray">
    <div class="container">
        <div class="dum2dhn-heading-center">
            <h2>Dumka to Dhanbad Shifting Cost &amp; Price Estimates</h2>
            <p>
                Transparent, all-inclusive pricing with no hidden charges. Our quotes cover packing labor, quality materials, dedicated container transport, and doorstep unloading.
            </p>
        </div>

        <div class="dum2dhn-table-container">
            <table class="dum2dhn-table">
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
                        <td><strong>1 RK / Small Studio</strong></td>
                        <td>&#8377; 2,000 - 3,500</td>
                        <td>&#8377; 3,500 - 5,000</td>
                        <td><strong>&#8377; 5,500 - 8,500</strong></td>
                        <td>Same Day (3 - 4 Hrs)</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>&#8377; 3,000 - 4,500</td>
                        <td>&#8377; 4,500 - 6,500</td>
                        <td><strong>&#8377; 7,500 - 11,000</strong></td>
                        <td>Same Day (3.5 - 4.5 Hrs)</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Home</strong></td>
                        <td>&#8377; 4,500 - 7,000</td>
                        <td>&#8377; 6,000 - 9,500</td>
                        <td><strong>&#8377; 10,500 - 16,500</strong></td>
                        <td>Same Day (4 - 5 Hrs)</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Large Flat / Villa</strong></td>
                        <td>&#8377; 6,500 - 10,000</td>
                        <td>&#8377; 8,500 - 14,000</td>
                        <td><strong>&#8377; 15,000 - 24,000</strong></td>
                        <td>Same Day (4 - 5 Hrs)</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Two-Wheeler</strong></td>
                        <td>&#8377; 800 - 1,200</td>
                        <td>&#8377; 1,700 - 2,800</td>
                        <td><strong>&#8377; 2,500 - 4,000</strong></td>
                        <td>Same Day</td>
                    </tr>
                    <tr>
                        <td><strong>Car Transport (Hatchback/Sedan)</strong></td>
                        <td>&#8377; 1,200 - 1,800</td>
                        <td>&#8377; 4,800 - 7,200</td>
                        <td><strong>&#8377; 6,000 - 9,000</strong></td>
                        <td>Same Day / Next Morning</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.92rem; margin-top: -10px;">
            * Rates are approximate and vary based on exact inventory volume, floor elevation, elevator availability, and chosen optional insurance coverage.
        </p>
    </div>
</section>

<!-- Visual Feature Strip: Vehicle Transit -->
<section class="dum2dhn-section">
    <div class="container">
        <div class="dum2dhn-grid-2">
            <div>
                <span style="color: var(--dum2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Specialized Vehicle Logistics</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--dum2dhn-dark); margin: 10px 0 20px;">
                    Damage-Free Car Carrier &amp; Bike Shifting from Dumka
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Driving your car or riding your motorcycle over long distances during a hectic home relocation can cause fatigue and unnecessary wear and tear. Our dedicated vehicle shipping solutions ensure that your automobile travels safely within enclosed, hydraulic carriers.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Every vehicle relocation begins with a pre-transit condition audit, photographic inspection, odometer logging, and tire pressure validation.
                </p>
                <ul class="dum2dhn-checklist">
                    <li>Covered car carriers with internal ramp locking systems to prevent shifting on highway turns</li>
                    <li>Dual-tier motorcycle transport with customized wooden cradles and foam wrapping</li>
                    <li>Comprehensive vehicle transit insurance for total financial peace of mind</li>
                    <li>Timely doorstep pickup in Dumka and handover at your Dhanbad address</li>
                </ul>
            </div>
            <div class="dum2dhn-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car Transport Carrier Loading Dumka to Dhanbad" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Route Logistics & Highway Details -->
<section class="dum2dhn-section dum2dhn-section-gray">
    <div class="container">
        <div class="dum2dhn-heading-center">
            <h2>Dumka to Dhanbad Route Logistics &amp; Travel Plan</h2>
            <p>
                Strategic route planning ensures punctual delivery, reduced transit wear, and reliable navigation through Jharkhand&rsquo;s central transport corridors.
            </p>
        </div>

        <div class="dum2dhn-grid-3">
            <div class="dum2dhn-card">
                <div class="dum2dhn-card-icon">&#128506;</div>
                <h3>Primary Route via Jamtara &amp; Govindpur</h3>
                <p>
                    Our standard transport path moves from Dumka through Jamtara, intersecting the Grand Trunk Road (NH-19) at Govindpur before entering Dhanbad city. Total distance is approximately 135 km with smooth highway sections and controlled travel times of 3.5 to 4.5 hours.
                </p>
            </div>
            <div class="dum2dhn-card">
                <div class="dum2dhn-card-icon">&#128678;</div>
                <h3>Alternative Route via Deoghar &amp; Madhupur</h3>
                <p>
                    During seasonal road maintenance or localized highway diversions, our drivers utilize the route connecting Dumka to Deoghar, descending via Madhupur and Giridih into Dhanbad. This ensures continuous movement without unscheduled transit delays.
                </p>
            </div>
            <div class="dum2dhn-card">
                <div class="dum2dhn-card-icon">&#128667;</div>
                <h3>Fleet Integrity &amp; Driver Safety</h3>
                <p>
                    All containerized trucks undergo routine mechanical inspections before departure from Dumka. Our drivers possess over 8 years of specialized intercity freight experience across Jharkhand highways, ensuring total security for your cargo.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Unpacking & Destination Setup -->
<section class="dum2dhn-section">
    <div class="container">
        <div class="dum2dhn-grid-2">
            <div class="dum2dhn-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service Dumka to Dhanbad" loading="lazy">
            </div>
            <div>
                <span style="color: var(--dum2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Turnkey Destination Service</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--dum2dhn-dark); margin: 10px 0 20px;">
                    Effortless Unloading, Furniture Assembly &amp; Waste Cleanup
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Our commitment does not end when the container arrives at your new gate in Dhanbad. Moving into a new residence should feel refreshing rather than exhausting. Our destination crew handles the heavy physical labor so you and your family can settle comfortably.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Upon arrival, each labeled carton is placed directly into its corresponding bedroom, kitchen, living area, or study.
                </p>
                <ul class="dum2dhn-checklist">
                    <li>Unloading with specialized hydraulic hand trucks and safety lifting belts</li>
                    <li>Reassembly of modular king/queen beds, wardrobes, dining sets, and desks</li>
                    <li>Assistance in positioning major home appliances like refrigerators and washing machines</li>
                    <li>Complete collection and disposal of packing cartons, bubble wraps, and adhesive scraps</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Local Coverage Grid -->
<section class="dum2dhn-section dum2dhn-section-gray">
    <div class="container">
        <div class="dum2dhn-heading-center">
            <h2>Complete Pickup in Dumka &amp; Delivery Across Dhanbad</h2>
            <p>
                Our logistical footprint bridges every neighborhood of Dumka to the residential sectors and business centers of Dhanbad.
            </p>
        </div>

        <div class="dum2dhn-grid-3">
            <div class="dum2dhn-card">
                <h3>Dumka Pickup Localities</h3>
                <p>
                    Prompt doorstep survey and packaging across all sectors of Dumka:
                </p>
                <ul class="dum2dhn-checklist">
                    <li><strong>Central Dumka:</strong> Thana Road, Main Market, Rasikpur, Court Road</li>
                    <li><strong>Administrative Zone:</strong> DC Colony, Dudhani, SP College Road</li>
                    <li><strong>Residential Areas:</strong> Bandhgari, Babu Para, Dangal Para, Kurwa</li>
                    <li><strong>Institutional Hubs:</strong> Phulo Jhano Medical College Area, Digghi</li>
                </ul>
            </div>

            <div class="dum2dhn-card">
                <h3>Dhanbad Delivery Coverage</h3>
                <p>
                    Full room-by-room delivery, unpacking, and assembly throughout Dhanbad:
                </p>
                <ul class="dum2dhn-checklist">
                    <li><strong>Commercial &amp; Central:</strong> Bank More, Purana Bazar, Station Road, Dhansar</li>
                    <li><strong>Modern Suburbs:</strong> Saraidhela, Steel Gate, Big Bazaar Area, Kolakusma</li>
                    <li><strong>Academic &amp; Institutional:</strong> Hirapur, IIT ISM Gate, CMPF Colony</li>
                    <li><strong>Industrial Belt:</strong> Govindpur, Katras, Jharia, Sindri Township</li>
                </ul>
            </div>

            <div class="dum2dhn-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    A decade of trusted relocation excellence across Jharkhand:
                </p>
                <ul class="dum2dhn-checklist">
                    <li>Dedicated covered container trucks &ndash; zero open transport risks</li>
                    <li>Trained, permanent staff with police-verified backgrounds</li>
                    <li>100% genuine GST invoices recognized for government &amp; PSU transfer claims</li>
                    <li>Same-day delivery guarantee with real-time phone tracking</li>
                    <li>Transparent written quotes with no moving-day surprises</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="dum2dhn-section">
    <div class="container">
        <div class="dum2dhn-heading-center">
            <h2>Frequently Asked Questions: Dumka to Dhanbad Relocations</h2>
            <p>
                Everything you need to know about booking, costs, transit timelines, and safety protocols for your Dumka to Dhanbad move.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="dum2dhn-faq-item">
                <h3>What is the road distance and transit time between Dumka and Dhanbad?</h3>
                <p>
                    The driving distance between Dumka and Dhanbad is approximately 135 km via Jamtara and Govindpur or via Deoghar and Madhupur. With our dedicated closed container trucks, transit takes about 3.5 to 4.5 hours with same-day doorstep setup.
                </p>
            </div>

            <div class="dum2dhn-faq-item">
                <h3>What are the shifting charges from Dumka to Dhanbad?</h3>
                <p>
                    Standard shifting charges range from Rs 5,500 to 10,500 for 1 BHK homes, Rs 9,000 to 16,500 for 2 BHK flats, and Rs 14,500 to 24,000 for 3 BHK homes, inclusive of multi-layer packing, loading, transport, unloading, and basic unpacking.
                </p>
            </div>

            <div class="dum2dhn-faq-item">
                <h3>Do you provide claimable GST bills for government and bank employee transfers?</h3>
                <p>
                    Yes, Shree Ashirwad Packers and Movers provides 100% genuine, GST-compliant moving invoices, itemized packing inventories, consignment notes (bilty), and IBA-approved documentation valid for government, bank, and PSU transfer claims.
                </p>
            </div>

            <div class="dum2dhn-faq-item">
                <h3>Can you safely transport two-wheelers and cars from Dumka to Dhanbad?</h3>
                <p>
                    Yes, we operate specialized car carriers and enclosed bike transportation with wheel locks, protective foam wrap, strapping, and comprehensive transit insurance protection.
                </p>
            </div>

            <div class="dum2dhn-faq-item">
                <h3>Which areas in Dumka and Dhanbad do you cover for packing and delivery?</h3>
                <p>
                    We provide pickup across all Dumka localities including Thana Road, Rasikpur, Court Road, Dudhani, and SP College Road. In Dhanbad, we deliver to Bank More, Saraidhela, Hirapur, IIT ISM Campus, Jharia, Katras, and Govindpur.
                </p>
            </div>

            <div class="dum2dhn-faq-item">
                <h3>Is transit insurance available for Dumka to Dhanbad household goods?</h3>
                <p>
                    Yes, we provide comprehensive transit risk insurance covering unexpected road risks, accidental damages, and unforeseen highway hazards with fast documentation settlement.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section style="background: linear-gradient(135deg, #065f46 0%, #0f172a 100%); color: #ffffff; padding: 65px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Book Your Dumka to Dhanbad Move Today
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Speak directly with our moving supervisors for a customized moving quote, complimentary in-home survey, and guaranteed same-day delivery.
        </p>
        <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
            <a href="tel:+918409531615" style="background: #d97706; color: #ffffff; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
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
