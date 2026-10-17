<?php
/**
 * Page Name: Koderma to Dhanbad Packers and Movers
 * Route Slug: koderma-to-dhanbad-packers-and-movers
 * Description: Dedicated household shifting, DVC thermal power personnel transfers, vehicle shipping, and commercial moving services from Koderma (Jhumri Telaiya) to Dhanbad.
 * Focus Keywords: koderma to dhanbad packers and movers, packers and movers koderma to dhanbad, house shifting koderma to dhanbad, jhumri telaiya to dhanbad packers, car carrier koderma to dhanbad, bike transport koderma to dhanbad
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Koderma to Dhanbad Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe Koderma to Dhanbad packers and movers. 130 km direct transit via GT Road NH-19, 5-layer packing, DVC transfer bills, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/koderma-to-dhanbad-packers-and-movers";
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
    <meta name="geo.placename" content="Koderma">

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

    <!-- Scoped CSS for Route 10 (Koderma to Dhanbad) -->
    <style>
        :root {
            --kod2dhn-primary: #0f766e;
            --kod2dhn-secondary: #0284c7;
            --kod2dhn-accent: #c2410c;
            --kod2dhn-accent-light: #ffedd5;
            --kod2dhn-dark: #0f172a;
            --kod2dhn-gray-bg: #f8fafc;
            --kod2dhn-border: #e2e8f0;
            --kod2dhn-shadow: 0 10px 25px -5px rgba(15, 118, 110, 0.08), 0 8px 10px -6px rgba(15, 118, 110, 0.04);
        }

        .kod2dhn-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(15, 118, 110, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .kod2dhn-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .kod2dhn-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .kod2dhn-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .kod2dhn-badge {
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

        .kod2dhn-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .kod2dhn-btn-primary {
            background: linear-gradient(135deg, #c2410c 0%, #9a3412 100%);
            color: #ffffff;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 14px rgba(194, 65, 12, 0.35);
            transition: all 0.3s ease;
        }

        .kod2dhn-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(194, 65, 12, 0.45);
            color: #ffffff;
        }

        .kod2dhn-btn-secondary {
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

        .kod2dhn-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .kod2dhn-section {
            padding: 70px 0;
        }

        .kod2dhn-section-gray {
            background-color: var(--kod2dhn-gray-bg);
        }

        .kod2dhn-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .kod2dhn-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--kod2dhn-dark);
            margin-bottom: 14px;
        }

        .kod2dhn-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .kod2dhn-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .kod2dhn-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 36px;
            align-items: center;
        }

        .kod2dhn-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .kod2dhn-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--kod2dhn-border);
            padding: 30px;
            box-shadow: var(--kod2dhn-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .kod2dhn-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(15, 118, 110, 0.12);
        }

        .kod2dhn-card-icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            background: var(--kod2dhn-accent-light);
            color: var(--kod2dhn-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .kod2dhn-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--kod2dhn-dark);
            margin-bottom: 12px;
        }

        .kod2dhn-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
        }

        .kod2dhn-table-container {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--kod2dhn-border);
            overflow-x: auto;
            box-shadow: var(--kod2dhn-shadow);
            margin: 35px 0;
        }

        .kod2dhn-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .kod2dhn-table th {
            background: #0f172a;
            color: #ffffff;
            font-weight: 700;
            padding: 16px 20px;
            font-size: 0.98rem;
        }

        .kod2dhn-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--kod2dhn-border);
            color: #334155;
            font-size: 0.95rem;
        }

        .kod2dhn-table tr:last-child td {
            border-bottom: none;
        }

        .kod2dhn-table tr:hover td {
            background-color: #f1f5f9;
        }

        .kod2dhn-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .kod2dhn-checklist li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            color: #334155;
            font-size: 0.98rem;
            line-height: 1.6;
        }

        .kod2dhn-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #10b981;
            font-weight: 800;
            font-size: 1.1rem;
        }

        .kod2dhn-img-wrap {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--kod2dhn-shadow);
        }

        .kod2dhn-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .kod2dhn-img-wrap:hover img {
            transform: scale(1.03);
        }

        .kod2dhn-faq-item {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--kod2dhn-border);
            padding: 24px;
            margin-bottom: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .kod2dhn-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--kod2dhn-dark);
            margin-bottom: 10px;
        }

        .kod2dhn-faq-item p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 991px) {
            .kod2dhn-grid-3, .kod2dhn-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
            .kod2dhn-grid-2 {
                grid-template-columns: 1fr;
            }
            .kod2dhn-hero h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 640px) {
            .kod2dhn-grid-3, .kod2dhn-grid-4 {
                grid-template-columns: 1fr;
            }
            .kod2dhn-hero {
                padding: 60px 0 45px;
            }
            .kod2dhn-hero h1 {
                font-size: 1.85rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Koderma to Dhanbad",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 5,500 - 24,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Ranchi-Patna Road, Near Bus Stand",
            "addressLocality": "Jhumri Telaiya, Koderma",
            "addressRegion": "Jharkhand",
            "postalCode": "825409",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 24.4339,
            "longitude": 85.5317
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Koderma"
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
            "name": "Koderma to Dhanbad Relocation Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Koderma to Dhanbad Household Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Koderma to Dhanbad Car & Bike Transport Carrier"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "DVC Power Plant & PSU Employee Moving Invoicing"
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
                "name": "Packers and Movers Koderma",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Koderma to Dhanbad Route",
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
                "name": "What is the highway distance and transit time from Koderma to Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The road distance between Koderma (Jhumri Telaiya) and Dhanbad is approximately 130 km via the Grand Trunk Road (NH-19 / AH1 via Barhi, Bagodar, and Rajganj). Dedicated container vehicles cover this route in 3 to 4 hours, guaranteeing same-day delivery."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting rates between Koderma and Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Household shifting rates range from Rs 5,500 to 10,500 for 1 BHK flats, Rs 9,000 to 16,500 for 2 BHK homes, and Rs 14,500 to 24,000 for 3 BHK bungalows, inclusive of packing materials, loading, transport, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable GST bills for DVC and public sector employee relocations?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers delivers 100% authentic GST invoices, detailed item inventories, consignment notes (bilty), and IBA-approved money receipts eligible for full corporate and government reimbursement."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely relocate four-wheelers and motorcycles from Jhumri Telaiya to Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate enclosed car carriers with internal ramp locks and dedicated motorcycle transit with shock-absorbing foam padding and safety tie-downs."
                }
            },
            {
                "@type": "Question",
                "name": "Which localities in Koderma and Dhanbad do you cover?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide pickup across Jhumri Telaiya, Koderma Station, DVC Colony, Domchanch, and Nawada Road. In Dhanbad, we deliver to Bank More, Saraidhela, Hirapur, IIT ISM, Koyla Nagar, Katras, and Govindpur."
                }
            },
            {
                "@type": "Question",
                "name": "Is comprehensive transit risk insurance available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we offer optional all-risk transit insurance protecting all household furniture, electronics, and vehicles against unexpected road hazards with transparent claim settlement."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="kod2dhn-hero">
    <div class="container">
        <div class="kod2dhn-badge-strip">
            <span class="kod2dhn-badge">&#9733; Verified Intercity Moving</span>
            <span class="kod2dhn-badge">&#128666; All-Weather Closed Containers</span>
            <span class="kod2dhn-badge">&#128196; DVC &amp; PSU Approved Billing</span>
            <span class="kod2dhn-badge">&#128338; Fast 3.5-Hour Express Transit</span>
        </div>
        <h1>Koderma to Dhanbad Packers and Movers</h1>
        <p class="lead">
            Professional, secure, and affordable household shifting, vehicle transport, and corporate relocation services connecting Koderma and Jhumri Telaiya to Dhanbad. Experience 5-layer protective packing, dedicated closed container trucks, and guaranteed same-day delivery.
        </p>
        <div class="kod2dhn-cta-group">
            <a href="tel:+918409531615" class="kod2dhn-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Now: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="kod2dhn-btn-secondary">
                Request Free Shifting Quote &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Route Overview Section -->
<section class="kod2dhn-section">
    <div class="container">
        <div class="kod2dhn-grid-2">
            <div>
                <span style="color: var(--kod2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Grand Trunk Highway Corridor</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--kod2dhn-dark); margin: 10px 0 20px;">
                    Express 130 KM Moving Connecting Koderma to Dhanbad
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Moving your residential belongings or vehicle from Koderma (including Jhumri Telaiya) to Dhanbad traverses approximately 130 km along the world-renowned Grand Trunk Road (NH-19 / AH1). Koderma, celebrated as a historic mica capital and home to the massive Damodar Valley Corporation (DVC) Koderma Thermal Power Station, sees consistent employee rotations and family moves toward Dhanbad&rsquo;s coal mining capital and educational institutions.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    At <strong>Shree Ashirwad Packers and Movers</strong>, we execute intercity moves with unmatched efficiency. With our specialized closed container vehicles, experienced local crews, and rapid GT Road navigation via Barhi, Bagodar, and Rajganj, your household goods are packed in the morning in Koderma and fully arranged in your new Dhanbad apartment by afternoon.
                </p>
                <ul class="kod2dhn-checklist">
                    <li>Doorstep pickup across Jhumri Telaiya, Koderma Station, and Domchanch</li>
                    <li>Superior 5-layer protective packing materials safeguarding furniture and electronics</li>
                    <li>Dedicated closed-body container trucks protecting cargo against dust and weather</li>
                    <li>Turnkey unloading, bed reassembly, appliance positioning, and packaging cleanup</li>
                </ul>
            </div>
            <div class="kod2dhn-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Koderma to Dhanbad Container Truck Relocation" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Shifting Services Grid -->
<section class="kod2dhn-section kod2dhn-section-gray">
    <div class="container">
        <div class="kod2dhn-heading-center">
            <h2>Complete Shifting Solutions from Koderma to Dhanbad</h2>
            <p>
                Catering to private households, DVC energy professionals, railway officers, and commercial businesses across Jharkhand.
            </p>
        </div>

        <div class="kod2dhn-grid-3">
            <div class="kod2dhn-card">
                <div class="kod2dhn-card-icon">&#127968;</div>
                <h3>Complete Home Shifting</h3>
                <p>
                    Full packing of dining sets, bedroom furniture, kitchen appliances, crockery, televisions, and personal artifacts. Safe loading and arranged placement in your new Dhanbad home.
                </p>
            </div>
            <div class="kod2dhn-card">
                <div class="kod2dhn-card-icon">&#128663;</div>
                <h3>Enclosed Car Carrier</h3>
                <p>
                    Covered automobile carriers to transport hatchbacks, sedans, and SUVs from Jhumri Telaiya to Dhanbad safely without adding mileage or exposing your car to highway gravel.
                </p>
            </div>
            <div class="kod2dhn-card">
                <div class="kod2dhn-card-icon">&#127949;</div>
                <h3>Two-Wheeler Bike Transport</h3>
                <p>
                    Specialized motorcycle and scooter crating using bubble wrap, corrugated sheets, and heavy-duty nylon strapping to protect headlights, fuel tanks, and rear mirrors.
                </p>
            </div>
            <div class="kod2dhn-card">
                <div class="kod2dhn-card-icon">&#128196;</div>
                <h3>DVC &amp; Corporate Employee Billing</h3>
                <p>
                    Authentic GST invoices, itemized packing inventories, consignment notes (bilty), and IBA-approved documentation recognized by DVC, BCCL, Indian Railways, and banking institutions.
                </p>
            </div>
            <div class="kod2dhn-card">
                <div class="kod2dhn-card-icon">&#128230;</div>
                <h3>Part Load &amp; Luggage Moves</h3>
                <p>
                    Affordable sharing and single-room relocation options for students attending IIT ISM Dhanbad, and individual professionals relocating with minimal luggage.
                </p>
            </div>
            <div class="kod2dhn-card">
                <div class="kod2dhn-card-icon">&#128737;</div>
                <h3>Transit Risk Insurance</h3>
                <p>
                    Optional 100% comprehensive transit value insurance to safeguard high-value electronic gadgets, delicate glassware, and premium antique wooden furniture against all road contingencies.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Packaging Standards -->
<section class="kod2dhn-section">
    <div class="container">
        <div class="kod2dhn-grid-2">
            <div class="kod2dhn-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household Packing and Furniture Wrapping Koderma to Dhanbad" loading="lazy">
            </div>
            <div>
                <span style="color: var(--kod2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Industrial Grade Packaging</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--kod2dhn-dark); margin: 10px 0 20px;">
                    Five-Layer Protective Packaging for Zero Highway Shock
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    The journey between Koderma and Dhanbad along NH-19 features high-speed commercial traffic and multiple bypasses. High-grade packaging is essential to prevent vibration friction and transit scratches.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    At Shree Ashirwad Packers and Movers, our team executes a rigorous 5-layer packing methodology:
                </p>
                <ul class="kod2dhn-checklist">
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

<!-- Rate Card Table -->
<section class="kod2dhn-section kod2dhn-section-gray">
    <div class="container">
        <div class="kod2dhn-heading-center">
            <h2>Koderma to Dhanbad Shifting Cost &amp; Price Estimates</h2>
            <p>
                Transparent, all-inclusive pricing with no hidden charges. Our quotes cover packing labor, quality materials, dedicated container transport, and doorstep unloading.
            </p>
        </div>

        <div class="kod2dhn-table-container">
            <table class="kod2dhn-table">
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
                        <td><strong>1 RK / Studio Flat</strong></td>
                        <td>&#8377; 2,000 - 3,400</td>
                        <td>&#8377; 3,500 - 5,100</td>
                        <td><strong>&#8377; 5,500 - 8,500</strong></td>
                        <td>Same Day (3 - 3.5 Hrs)</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>&#8377; 3,000 - 4,600</td>
                        <td>&#8377; 4,500 - 6,400</td>
                        <td><strong>&#8377; 7,500 - 11,000</strong></td>
                        <td>Same Day (3 - 4 Hrs)</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Home</strong></td>
                        <td>&#8377; 4,500 - 7,200</td>
                        <td>&#8377; 6,000 - 9,800</td>
                        <td><strong>&#8377; 10,500 - 17,000</strong></td>
                        <td>Same Day (3.5 - 4 Hrs)</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Large Flat / Villa</strong></td>
                        <td>&#8377; 6,500 - 10,200</td>
                        <td>&#8377; 8,500 - 14,200</td>
                        <td><strong>&#8377; 15,000 - 24,400</strong></td>
                        <td>Same Day (4 - 4.5 Hrs)</td>
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

<!-- Visual Feature Strip: Vehicle Carrier -->
<section class="kod2dhn-section">
    <div class="container">
        <div class="kod2dhn-grid-2">
            <div>
                <span style="color: var(--kod2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Protected Vehicle Shipping</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--kod2dhn-dark); margin: 10px 0 20px;">
                    Enclosed Car Carrier &amp; Safe Bike Transportation
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Driving your car or riding your motorcycle over long distances during a hectic home relocation can cause fatigue and unnecessary wear and tear. Our dedicated vehicle shipping solutions ensure that your automobile travels safely within enclosed, hydraulic carriers.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Every vehicle relocation begins with a pre-transit condition audit, photographic inspection, odometer logging, and tire pressure validation.
                </p>
                <ul class="kod2dhn-checklist">
                    <li>Covered car carriers with internal ramp locking systems to prevent shifting on highway turns</li>
                    <li>Dual-tier motorcycle transport with customized wooden cradles and foam wrapping</li>
                    <li>Comprehensive vehicle transit insurance for total financial peace of mind</li>
                    <li>Timely doorstep pickup in Koderma and handover at your Dhanbad address</li>
                </ul>
            </div>
            <div class="kod2dhn-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car Transport Carrier Loading Koderma to Dhanbad" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Route Logistics & Highway Details -->
<section class="kod2dhn-section kod2dhn-section-gray">
    <div class="container">
        <div class="kod2dhn-heading-center">
            <h2>Koderma to Dhanbad Route Logistics &amp; Travel Plan</h2>
            <p>
                Strategic route planning ensures punctual delivery, reduced transit wear, and reliable navigation through Jharkhand&rsquo;s central transport corridors.
            </p>
        </div>

        <div class="kod2dhn-grid-3">
            <div class="kod2dhn-card">
                <div class="kod2dhn-card-icon">&#128506;</div>
                <h3>Primary Route via GT Road (NH-19)</h3>
                <p>
                    Departing Jhumri Telaiya, our trucks join the 6-lane Grand Trunk Road (NH-19 / AH1) at Barhi, cruising smoothly past Bagodar, Dumri, and Rajganj before entering Govindpur and Dhanbad town. Total distance is roughly 130 km covered in 3 to 4 hours.
                </p>
            </div>
            <div class="kod2dhn-card">
                <div class="kod2dhn-card-icon">&#128678;</div>
                <h3>Alternative Route via Giridih State Highway</h3>
                <p>
                    During major highway construction or bridge maintenance on NH-19, our experienced drivers divert via Domchanch toward Giridih and enter Dhanbad via Tundi Road, guaranteeing continuous and punctual freight movement.
                </p>
            </div>
            <div class="kod2dhn-card">
                <div class="kod2dhn-card-icon">&#128667;</div>
                <h3>Fleet Integrity &amp; Driver Safety</h3>
                <p>
                    All containerized trucks undergo routine mechanical inspections before departure from Koderma. Our drivers possess over 8 years of specialized intercity freight experience across Jharkhand highways, ensuring total security for your cargo.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Unpacking & Destination Setup -->
<section class="kod2dhn-section">
    <div class="container">
        <div class="kod2dhn-grid-2">
            <div class="kod2dhn-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service Koderma to Dhanbad" loading="lazy">
            </div>
            <div>
                <span style="color: var(--kod2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Turnkey Destination Service</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--kod2dhn-dark); margin: 10px 0 20px;">
                    Effortless Unloading, Furniture Assembly &amp; Waste Cleanup
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Our commitment does not end when the container arrives at your new gate in Dhanbad. Moving into a new residence should feel refreshing rather than exhausting. Our destination crew handles the heavy physical labor so you and your family can settle comfortably.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Upon arrival, each labeled carton is placed directly into its corresponding bedroom, kitchen, living area, or study.
                </p>
                <ul class="kod2dhn-checklist">
                    <li>Unloading with specialized hydraulic hand trucks and safety lifting belts</li>
                    <li>Reassembly of modular king/queen beds, wardrobes, dining sets, and desks</li>
                    <li>Assistance in positioning major home appliances like refrigerators and washing machines</li>
                    <li>Complete collection and disposal of packing cartons, bubble wraps, and adhesive scraps</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- DVC & Energy Sector Moving Protocol -->
<section class="kod2dhn-section kod2dhn-section-gray">
    <div class="container">
        <div class="kod2dhn-heading-center">
            <h2>DVC Power Plant &amp; Industrial Employee Moving Protocol</h2>
            <p>
                Specialized moving support tailored for thermal power engineers, railway officers, and commercial mica traders.
            </p>
        </div>

        <div class="kod2dhn-grid-3">
            <div class="kod2dhn-card">
                <div class="kod2dhn-card-icon">&#9889;</div>
                <h3>DVC KTPS Personnel Transfers</h3>
                <p>
                    Engineers and administrative officers at Koderma Thermal Power Station (DVC Banjhedih) frequently relocate to DVC and BCCL power installations in the Dhanbad-Maithon-Panchet region. We deliver complete door-to-door relocation with IBA-approved documentation.
                </p>
            </div>
            <div class="kod2dhn-card">
                <div class="kod2dhn-card-icon">&#128646;</div>
                <h3>Eastern Railway &amp; Grand Chord Moves</h3>
                <p>
                    Koderma is a major junction on the Grand Chord railway line connecting directly to Dhanbad Railway Division. We manage frequent household relocations for railway officers and station management personnel with guaranteed delivery windows.
                </p>
            </div>
            <div class="kod2dhn-card">
                <div class="kod2dhn-card-icon">&#127970;</div>
                <h3>Commercial &amp; Trade Relocations</h3>
                <p>
                    From wholesale textile and hardware businesses in Jhumri Telaiya to mica export firms, we handle commercial inventory, office filing systems, and showroom assets with absolute care and zero business interruption.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Local Coverage Grid -->
<section class="kod2dhn-section">
    <div class="container">
        <div class="kod2dhn-heading-center">
            <h2>Complete Pickup in Koderma &amp; Delivery Across Dhanbad</h2>
            <p>
                Our logistical footprint bridges every neighborhood of Koderma to the residential sectors and business centers of Dhanbad.
            </p>
        </div>

        <div class="kod2dhn-grid-3">
            <div class="kod2dhn-card">
                <h3>Koderma Pickup Localities</h3>
                <p>
                    Prompt doorstep survey and packaging across all sectors of Koderma:
                </p>
                <ul class="kod2dhn-checklist">
                    <li><strong>Jhumri Telaiya Hubs:</strong> Station Road, Ranchi-Patna Road, Gumo, Bishunpur</li>
                    <li><strong>Koderma Town:</strong> Court Area, Block Chowk, Karma, Domchanch Road</li>
                    <li><strong>DVC Township:</strong> Banjhedih Power Plant Colony, Urja Nagar</li>
                    <li><strong>Commercial Belts:</strong> Domchanch Bazar, Markacho, Chandwara</li>
                </ul>
            </div>

            <div class="kod2dhn-card">
                <h3>Dhanbad Delivery Coverage</h3>
                <p>
                    Full room-by-room delivery, unpacking, and assembly throughout Dhanbad:
                </p>
                <ul class="kod2dhn-checklist">
                    <li><strong>Commercial &amp; Central:</strong> Bank More, Purana Bazar, Station Road, Dhansar</li>
                    <li><strong>Modern Suburbs:</strong> Saraidhela, Steel Gate, Big Bazaar Area, Kolakusma</li>
                    <li><strong>Academic &amp; Institutional:</strong> Hirapur, IIT ISM Gate, CMPF Colony</li>
                    <li><strong>Industrial Belt:</strong> Govindpur, Katras, Jharia, Sindri Township</li>
                </ul>
            </div>

            <div class="kod2dhn-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    A decade of trusted relocation excellence across Jharkhand:
                </p>
                <ul class="kod2dhn-checklist">
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
<section class="kod2dhn-section kod2dhn-section-gray">
    <div class="container">
        <div class="kod2dhn-heading-center">
            <h2>Frequently Asked Questions: Koderma to Dhanbad Moving</h2>
            <p>
                Everything you need to know about booking, costs, transit timelines, and safety protocols for your Koderma to Dhanbad move.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="kod2dhn-faq-item">
                <h3>What is the highway distance and transit time from Koderma to Dhanbad?</h3>
                <p>
                    The road distance between Koderma (Jhumri Telaiya) and Dhanbad is approximately 130 km via the Grand Trunk Road (NH-19 / AH1 via Barhi, Bagodar, and Rajganj). Dedicated container vehicles cover this route in 3 to 4 hours, guaranteeing same-day delivery.
                </p>
            </div>

            <div class="kod2dhn-faq-item">
                <h3>What are the shifting rates between Koderma and Dhanbad?</h3>
                <p>
                    Household shifting rates range from Rs 5,500 to 10,500 for 1 BHK flats, Rs 9,000 to 16,500 for 2 BHK homes, and Rs 14,500 to 24,000 for 3 BHK bungalows, inclusive of packing materials, loading, transport, and unloading.
                </p>
            </div>

            <div class="kod2dhn-faq-item">
                <h3>Do you provide claimable GST bills for DVC and public sector employee relocations?</h3>
                <p>
                    Yes, Shree Ashirwad Packers and Movers delivers 100% authentic GST invoices, detailed item inventories, consignment notes (bilty), and IBA-approved money receipts eligible for full corporate and government reimbursement.
                </p>
            </div>

            <div class="kod2dhn-faq-item">
                <h3>Can you safely relocate four-wheelers and motorcycles from Jhumri Telaiya to Dhanbad?</h3>
                <p>
                    Yes, we operate enclosed car carriers with internal ramp locks and dedicated motorcycle transit with shock-absorbing foam padding and safety tie-downs.
                </p>
            </div>

            <div class="kod2dhn-faq-item">
                <h3>Which localities in Koderma and Dhanbad do you cover?</h3>
                <p>
                    We provide pickup across Jhumri Telaiya, Koderma Station, DVC Colony, Domchanch, and Nawada Road. In Dhanbad, we deliver to Bank More, Saraidhela, Hirapur, IIT ISM, Koyla Nagar, Katras, and Govindpur.
                </p>
            </div>

            <div class="kod2dhn-faq-item">
                <h3>Is comprehensive transit risk insurance available?</h3>
                <p>
                    Yes, we offer optional all-risk transit insurance protecting all household furniture, electronics, and vehicles against unexpected road hazards with transparent claim settlement.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section style="background: linear-gradient(135deg, #0f766e 0%, #0f172a 100%); color: #ffffff; padding: 65px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Book Your Koderma to Dhanbad Move Today
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Speak directly with our moving supervisors for a customized moving quote, complimentary in-home survey, and guaranteed same-day delivery.
        </p>
        <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
            <a href="tel:+918409531615" style="background: #c2410c; color: #ffffff; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
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
