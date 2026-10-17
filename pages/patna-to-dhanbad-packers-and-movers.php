<?php
/**
 * Page Name: Patna to Dhanbad Packers and Movers
 * Route Slug: patna-to-dhanbad-packers-and-movers
 * Description: Dependable interstate household shifting, banking & government employee relocations, and vehicle shipping from Patna to Dhanbad.
 * Focus Keywords: patna to dhanbad packers and movers, packers and movers patna to dhanbad, house shifting patna to dhanbad, car carrier patna to dhanbad, bike transport patna to dhanbad, household moving patna dhanbad
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Patna to Dhanbad Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe Patna to Dhanbad packers and movers. 290 km direct transit via NH-22 & GT Road NH-19, 5-layer packing, GST transfer bills, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/patna-to-dhanbad-packers-and-movers";
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
    <meta name="geo.region" content="IN-BR">
    <meta name="geo.placename" content="Patna">

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

    <!-- Scoped CSS for Route 17 (Patna to Dhanbad) -->
    <style>
        :root {
            --pat2dhn-primary: #15803d;
            --pat2dhn-secondary: #0284c7;
            --pat2dhn-accent: #ea580c;
            --pat2dhn-accent-light: #ffedd5;
            --pat2dhn-dark: #0f172a;
            --pat2dhn-gray-bg: #f8fafc;
            --pat2dhn-border: #e2e8f0;
            --pat2dhn-shadow: 0 10px 25px -5px rgba(21, 128, 61, 0.08), 0 8px 10px -6px rgba(21, 128, 61, 0.04);
        }

        .pat2dhn-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(21, 128, 61, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .pat2dhn-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .pat2dhn-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .pat2dhn-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .pat2dhn-badge {
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

        .pat2dhn-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .pat2dhn-btn-primary {
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

        .pat2dhn-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(234, 88, 12, 0.45);
            color: #ffffff;
        }

        .pat2dhn-btn-secondary {
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

        .pat2dhn-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .pat2dhn-section {
            padding: 70px 0;
        }

        .pat2dhn-section-gray {
            background-color: var(--pat2dhn-gray-bg);
        }

        .pat2dhn-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .pat2dhn-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--pat2dhn-dark);
            margin-bottom: 14px;
        }

        .pat2dhn-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .pat2dhn-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .pat2dhn-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 36px;
            align-items: center;
        }

        .pat2dhn-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .pat2dhn-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--pat2dhn-border);
            padding: 30px;
            box-shadow: var(--pat2dhn-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .pat2dhn-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(21, 128, 61, 0.12);
        }

        .pat2dhn-card-icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            background: var(--pat2dhn-accent-light);
            color: var(--pat2dhn-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .pat2dhn-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--pat2dhn-dark);
            margin-bottom: 12px;
        }

        .pat2dhn-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
        }

        .pat2dhn-table-container {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--pat2dhn-border);
            overflow-x: auto;
            box-shadow: var(--pat2dhn-shadow);
            margin: 35px 0;
        }

        .pat2dhn-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .pat2dhn-table th {
            background: #0f172a;
            color: #ffffff;
            font-weight: 700;
            padding: 16px 20px;
            font-size: 0.98rem;
        }

        .pat2dhn-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--pat2dhn-border);
            color: #334155;
            font-size: 0.95rem;
        }

        .pat2dhn-table tr:last-child td {
            border-bottom: none;
        }

        .pat2dhn-table tr:hover td {
            background-color: #f1f5f9;
        }

        .pat2dhn-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .pat2dhn-checklist li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            color: #334155;
            font-size: 0.98rem;
            line-height: 1.6;
        }

        .pat2dhn-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #10b981;
            font-weight: 800;
            font-size: 1.1rem;
        }

        .pat2dhn-img-wrap {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--pat2dhn-shadow);
        }

        .pat2dhn-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .pat2dhn-img-wrap:hover img {
            transform: scale(1.03);
        }

        .pat2dhn-faq-item {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--pat2dhn-border);
            padding: 24px;
            margin-bottom: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .pat2dhn-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--pat2dhn-dark);
            margin-bottom: 10px;
        }

        .pat2dhn-faq-item p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 991px) {
            .pat2dhn-grid-3, .pat2dhn-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
            .pat2dhn-grid-2 {
                grid-template-columns: 1fr;
            }
            .pat2dhn-hero h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 640px) {
            .pat2dhn-grid-3, .pat2dhn-grid-4 {
                grid-template-columns: 1fr;
            }
            .pat2dhn-hero {
                padding: 60px 0 45px;
            }
            .pat2dhn-hero h1 {
                font-size: 1.85rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Patna to Dhanbad",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 10,000 - 38,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bailey Road, Near Saguna More",
            "addressLocality": "Patna",
            "addressRegion": "Bihar",
            "postalCode": "801503",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.5941,
            "longitude": 85.1376
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Patna"
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
        "serviceType": "Interstate Packers and Movers Services",
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
            "name": "Patna to Dhanbad Relocation Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Patna to Dhanbad Household Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Patna to Dhanbad Car Carrier & Bike Transport"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Bihar Government, Bank & PSU Employee Transfer Documentation"
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
                "name": "Packers and Movers Patna",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Patna to Dhanbad Route",
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
                "name": "What is the road distance and travel time from Patna to Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Patna and Dhanbad is approximately 290 km via NH-22 and NH-19 (via Bakhtiyarpur, Nawada, Rajauli, Barhi, Bagodar, and Rajganj into Dhanbad). Transit takes about 7 to 9 hours, enabling same-day or next-morning doorstep delivery."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Patna to Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Estimated costs range from Rs 10,000 to 17,000 for 1 BHK flats, Rs 16,000 to 26,000 for 2 BHK homes, and Rs 24,000 to 38,000 for 3 BHK bungalows, covering 5-layer packing, container transport, toll charges, loading, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable GST invoices for bank and public sector transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers provides 100% genuine GST invoices, itemized inventory sheets, consignment notes (bilty), and IBA-approved money receipts eligible for full government, banking, and PSU reimbursement."
                }
            },
            {
                "@type": "Question",
                "name": "How are cars and motorcycles transported from Patna to Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Vehicles are safely transported in enclosed hydraulic car carrier trailers and custom wooden motorcycle crates with wheel chocks, security straps, and comprehensive transit risk insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Patna and Dhanbad are covered?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Patna, we service Bailey Road, Kankarbagh, Boring Road, Rajendra Nagar, Danapur, Patliputra Colony, and Anisabad. In Dhanbad, we deliver to Bank More, Saraidhela, Hirapur, IIT ISM, Koyla Nagar, Katras, and Govindpur."
                }
            },
            {
                "@type": "Question",
                "name": "Is comprehensive transit risk insurance available?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we offer optional comprehensive transit risk insurance protecting all household furniture, electronics, and vehicles against unexpected road hazards with transparent claim settlement."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="pat2dhn-hero">
    <div class="container">
        <div class="pat2dhn-badge-strip">
            <span class="pat2dhn-badge">&#9733; 290 KM Interstate Moving Specialist</span>
            <span class="pat2dhn-badge">&#128666; All-Weather Closed Containers</span>
            <span class="pat2dhn-badge">&#128196; Bank &amp; Govt Approved Invoicing</span>
            <span class="pat2dhn-badge">&#128338; Fast 8-Hour Express Transit</span>
        </div>
        <h1>Patna to Dhanbad Packers and Movers</h1>
        <p class="lead">
            Dependable, insured, and professional household shifting, vehicle transport, and corporate relocation services connecting Patna to Dhanbad. Experience 5-layer protective packing, dedicated closed container trucks, and seamless same-day or next-morning setup across the Coal Capital.
        </p>
        <div class="pat2dhn-cta-group">
            <a href="tel:+918409531615" class="pat2dhn-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="pat2dhn-btn-secondary">
                Request Express Moving Quote &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Route Overview Section -->
<section class="pat2dhn-section">
    <div class="container">
        <div class="pat2dhn-grid-2">
            <div>
                <span style="color: var(--pat2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Connecting Bihar Capital to Coal Capital</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--pat2dhn-dark); margin: 10px 0 20px;">
                    Fast 290 KM Interstate Moving Connecting Patna to Dhanbad
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Connecting Bihar&rsquo;s historic capital of Patna with Dhanbad covers approximately 290 km across the fertile Gangetic plains and Jharkhand&rsquo;s mineral-rich Chota Nagpur plateau. This interstate corridor experiences consistent moving traffic fueled by banking officers, judicial personnel, state government transfers, and families moving between Bihar and the bustling coal hub of Dhanbad.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    At <strong>Shree Ashirwad Packers and Movers</strong>, we execute this high-demand transit route with exceptional reliability. Our dedicated closed container vehicles depart regularly from Patna, traversing Nawada, Rajauli ghats, and merging onto the Grand Trunk Road (NH-19) at Barhi to deliver and install your household goods in Dhanbad within 7 to 9 hours.
                </p>
                <ul class="pat2dhn-checklist">
                    <li>Doorstep pickup across all Patna localities including Bailey Road, Kankarbagh, Boring Road, and Danapur</li>
                    <li>Advanced 5-layer protective packaging safeguarding furniture, glassware, and electronics</li>
                    <li>Direct container transit via NH-22 &amp; GT Road NH-19 with guaranteed delivery windows</li>
                    <li>Complete room setup, furniture reassembly, and packaging debris collection in Dhanbad</li>
                </ul>
            </div>
            <div class="pat2dhn-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Patna to Dhanbad Container Truck Relocation" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Core Shifting Services Grid -->
<section class="pat2dhn-section pat2dhn-section-gray">
    <div class="container">
        <div class="pat2dhn-heading-center">
            <h2>Comprehensive Shifting Services: Patna to Dhanbad</h2>
            <p>
                Engineered for government officials, banking executives, commercial trading firms, and domestic families.
            </p>
        </div>

        <div class="pat2dhn-grid-3">
            <div class="pat2dhn-card">
                <div class="pat2dhn-card-icon">&#127968;</div>
                <h3>Complete Home Relocation</h3>
                <p>
                    Full packing of furniture, appliances, crockery, wardrobes, and electronics using heavy-gauge cartons and multi-ply bubble wrap. Safely delivered to your new home in Dhanbad.
                </p>
            </div>
            <div class="pat2dhn-card">
                <div class="pat2dhn-card-icon">&#128663;</div>
                <h3>Enclosed Car Transport</h3>
                <p>
                    Enclosed car trailers designed to transfer hatchbacks, sedans, and SUVs from Patna to Dhanbad safely without adding mileage or exposing your car to highway gravel.
                </p>
            </div>
            <div class="pat2dhn-card">
                <div class="pat2dhn-card-icon">&#127949;</div>
                <h3>Two-Wheeler Bike Shipping</h3>
                <p>
                    Specialized motorcycle transit utilizing multi-layer bubble wrap, handle padding, wheel chocks, and nylon harness belts to guarantee scratch-free delivery.
                </p>
            </div>
            <div class="pat2dhn-card">
                <div class="pat2dhn-card-icon">&#128188;</div>
                <h3>Bank &amp; Government Transfer Billing</h3>
                <p>
                    100% authentic GST invoices, detailed item inventories, consignment notes (bilty), and IBA-approved documentation compliant with public sector bank and government transfer rules.
                </p>
            </div>
            <div class="pat2dhn-card">
                <div class="pat2dhn-card-icon">&#128230;</div>
                <h3>Part Load &amp; Single Room Moves</h3>
                <p>
                    Affordable sharing and single-room relocation options for students and working professionals relocating with minimal luggage.
                </p>
            </div>
            <div class="pat2dhn-card">
                <div class="pat2dhn-card-icon">&#128737;</div>
                <h3>Transit Risk Insurance</h3>
                <p>
                    Comprehensive optional transit insurance policy covering accidental damages, road perils, and external impacts with transparent claim settlement support.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Packaging Standards -->
<section class="pat2dhn-section">
    <div class="container">
        <div class="pat2dhn-grid-2">
            <div class="pat2dhn-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household Packing and Furniture Wrapping Patna to Dhanbad" loading="lazy">
            </div>
            <div>
                <span style="color: var(--pat2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Flawless Material Quality</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--pat2dhn-dark); margin: 10px 0 20px;">
                    Five-Layer Protective Packaging for Zero Highway Shock
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Traversing the hilly Rajauli ghat section and high-speed GT Road segments demands superior packing to absorb road shocks and vibrations. Our packing specialists use only virgin materials tailored to every category of home asset.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Our certified packing team enforces rigorous material standards:
                </p>
                <ul class="pat2dhn-checklist">
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
<section class="pat2dhn-section pat2dhn-section-gray">
    <div class="container">
        <div class="pat2dhn-heading-center">
            <h2>Patna to Dhanbad Moving Rates &amp; Price Estimates</h2>
            <p>
                Upfront, transparent quotes without hidden fuel surcharges or last-minute loading fees.
            </p>
        </div>

        <div class="pat2dhn-table-container">
            <table class="pat2dhn-table">
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
                        <td>&#8377; 2,600 - 4,200</td>
                        <td>&#8377; 7,400 - 10,800</td>
                        <td><strong>&#8377; 10,000 - 15,000</strong></td>
                        <td>7 - 8 Hours (Same Day)</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Complete Home</strong></td>
                        <td>&#8377; 3,600 - 5,800</td>
                        <td>&#8377; 10,400 - 14,200</td>
                        <td><strong>&#8377; 14,000 - 20,000</strong></td>
                        <td>7 - 9 Hours (Same Day)</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Flat</strong></td>
                        <td>&#8377; 5,200 - 8,500</td>
                        <td>&#8377; 14,000 - 19,500</td>
                        <td><strong>&#8377; 19,200 - 28,000</strong></td>
                        <td>Same Day / Overnight</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Home</strong></td>
                        <td>&#8377; 7,800 - 12,500</td>
                        <td>&#8377; 19,500 - 27,500</td>
                        <td><strong>&#8377; 27,300 - 40,000</strong></td>
                        <td>Next Morning Delivery</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                        <td>&#8377; 900 - 1,500</td>
                        <td>&#8377; 2,600 - 3,900</td>
                        <td><strong>&#8377; 3,500 - 5,400</strong></td>
                        <td>Same Day / Next Day</td>
                    </tr>
                    <tr>
                        <td><strong>Car Transport (Sedan / SUV)</strong></td>
                        <td>&#8377; 1,600 - 2,400</td>
                        <td>&#8377; 8,000 - 12,000</td>
                        <td><strong>&#8377; 9,600 - 14,400</strong></td>
                        <td>1 - 2 Days</td>
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
<section class="pat2dhn-section">
    <div class="container">
        <div class="pat2dhn-grid-2">
            <div>
                <span style="color: var(--pat2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Secure Automobile Transit</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--pat2dhn-dark); margin: 10px 0 20px;">
                    Enclosed Car Carrier &amp; Safe Bike Transportation
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Avoid intense ghat driving over Rajauli pass, heavy highway traffic, and unnecessary vehicle depreciation by utilizing our closed car and bike transit solutions between Patna and Dhanbad.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Each vehicle undergoes an inspection audit prior to dispatch from Patna, documenting body panels, existing paint status, and fuel levels.
                </p>
                <ul class="pat2dhn-checklist">
                    <li>Specialized wheel stops and hydraulic deck locks to prevent car movement inside carriers</li>
                    <li>Individual foam cushioning on motorcycle handles, headlamps, mirrors, and exhaust pipes</li>
                    <li>Comprehensive vehicle transit insurance for total financial peace of mind</li>
                    <li>Prompt collection in Patna and direct delivery to your doorstep in Dhanbad</li>
                </ul>
            </div>
            <div class="pat2dhn-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Patna to Dhanbad Vehicle Transport Carrier" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Highway Logistics Section -->
<section class="pat2dhn-section pat2dhn-section-gray">
    <div class="container">
        <div class="pat2dhn-heading-center">
            <h2>Patna to Dhanbad Highway Logistics &amp; Travel Corridor</h2>
            <p>
                Proven highway routing guarantees punctual, monitored transit across the Bihar-Jharkhand interstate corridor.
            </p>
        </div>

        <div class="pat2dhn-grid-3">
            <div class="pat2dhn-card">
                <div class="pat2dhn-card-icon">&#128506;</div>
                <h3>Primary Route via Bakhtiyarpur, Nawada &amp; Barhi</h3>
                <p>
                    Departing Patna via NH-31 / NH-20 toward Bakhtiyarpur, Bihar Sharif, and Nawada, our container trucks ascend the Rajauli ghats into Jharkhand, connecting with the 6-lane Grand Trunk Road (NH-19) at Barhi. Total distance is approximately 290 km covered in 7 to 9 hours.
                </p>
            </div>
            <div class="pat2dhn-card">
                <div class="pat2dhn-card-icon">&#128678;</div>
                <h3>Alternative Route via Gaya &amp; Dobhi</h3>
                <p>
                    During localized traffic or repair work near Rajauli, our fleet navigates via Jehanabad and Gaya, joining NH-19 at Dobhi and cruising eastward through Chauparan and Bagodar into Dhanbad without delays.
                </p>
            </div>
            <div class="pat2dhn-card">
                <div class="pat2dhn-card-icon">&#128667;</div>
                <h3>GPS-Monitored Closed Containers</h3>
                <p>
                    All containerized trucks feature real-time satellite GPS tracking. Our customer support desk provides updates at major highway toll checkpoints along the interstate corridor.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Destination Setup -->
<section class="pat2dhn-section">
    <div class="container">
        <div class="pat2dhn-grid-2">
            <div class="pat2dhn-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service Patna to Dhanbad" loading="lazy">
            </div>
            <div>
                <span style="color: var(--pat2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Turnkey Destination Service</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--pat2dhn-dark); margin: 10px 0 20px;">
                    Careful Unloading, Furniture Assembly &amp; Debris Disposal
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    A truly satisfying relocation experience means waking up in a clean, fully functional home on moving day. Our skilled crew unloads every piece of furniture, reassembles dismounted frames, and handles all heavy lifting.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    We carefully place each box into its designated room based on your guidance:
                </p>
                <ul class="pat2dhn-checklist">
                    <li>Assembly of wooden beds, wardrobes, study tables, and dining furniture</li>
                    <li>Placement of refrigerators, washing machines, and heavy home theater systems</li>
                    <li>Inspection of all glassware and fragile items in your presence</li>
                    <li>Collection and disposal of used packing cardboard, plastics, and tapes</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Banking, Government & Judicial Relocation Protocol -->
<section class="pat2dhn-section pat2dhn-section-gray">
    <div class="container">
        <div class="pat2dhn-heading-center">
            <h2>Banking, Public Sector &amp; Judicial Moving Specialization</h2>
            <p>
                Tailored moving procedures for state and central government employees, public sector bank executives, and judicial staff.
            </p>
        </div>

        <div class="pat2dhn-grid-3">
            <div class="pat2dhn-card">
                <div class="pat2dhn-card-icon">&#127974;</div>
                <h3>Public Sector Bank Employee Transfers</h3>
                <p>
                    Frequent transfers occur between regional headquarters in Patna and zonal branches in Dhanbad across SBI, PNB, Bank of India, and Canara Bank. We provide complete door-to-door relocation with IBA-approved documentation.
                </p>
            </div>
            <div class="pat2dhn-card">
                <div class="pat2dhn-card-icon">&#9878;</div>
                <h3>Judicial &amp; Administrative Moves</h3>
                <p>
                    We manage specialized relocations for administrative officers, judicial personnel, and legal professionals with certified documentation, confidential packing, and guaranteed arrival timelines.
                </p>
            </div>
            <div class="pat2dhn-card">
                <div class="pat2dhn-card-icon">&#127891;</div>
                <h3>Academic &amp; Faculty Relocations</h3>
                <p>
                    Faculty members and students transferring from Patna University and NIT Patna to IIT (ISM) Dhanbad benefit from our customized, budget-friendly domestic moving packages.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Local Coverage Grid -->
<section class="pat2dhn-section">
    <div class="container">
        <div class="pat2dhn-heading-center">
            <h2>Full Pickup in Patna &amp; Doorstep Delivery Across Dhanbad</h2>
            <p>
                Our comprehensive moving operations extend across every neighborhood in Patna and Dhanbad.
            </p>
        </div>

        <div class="pat2dhn-grid-3">
            <div class="pat2dhn-card">
                <h3>Patna Pickup Localities</h3>
                <p>
                    Prompt doorstep survey and packaging across all sectors of Patna:
                </p>
                <ul class="pat2dhn-checklist">
                    <li><strong>Prime Residential:</strong> Bailey Road, Boring Road, Patliputra Colony, Kankarbagh</li>
                    <li><strong>Administrative &amp; Central:</strong> Rajendra Nagar, Fraser Road, Exhibition Road, Gandhi Maidan</li>
                    <li><strong>Suburban Zones:</strong> Danapur Cantt, Saguna More, Khagaul, Phulwari Sharif</li>
                    <li><strong>Eastern &amp; Southern:</strong> Anisabad, Ashiana Nagar, Patna City, Zero Mile</li>
                </ul>
            </div>

            <div class="pat2dhn-card">
                <h3>Dhanbad Delivery Coverage</h3>
                <p>
                    Unloading, room placement, and setup across all Dhanbad neighborhoods:
                </p>
                <ul class="pat2dhn-checklist">
                    <li><strong>Commercial Centers:</strong> Bank More, Purana Bazar, Station Road</li>
                    <li><strong>Residential Townships:</strong> Saraidhela, Steel Gate, Big Bazaar Area</li>
                    <li><strong>Institutional Hubs:</strong> Hirapur, CMPF Colony, IIT ISM Campus, Koyla Nagar</li>
                    <li><strong>Industrial &amp; Coal Sectors:</strong> Govindpur, Dhansar, Katras, Jharia</li>
                </ul>
            </div>

            <div class="pat2dhn-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    Trusted by hundreds of families and businesses across Patna and Dhanbad:
                </p>
                <ul class="pat2dhn-checklist">
                    <li>Company-owned weatherproof container vehicles</li>
                    <li>Experienced, background-verified full-time crew</li>
                    <li>Genuine GST invoices for government and PSU transfer claims</li>
                    <li>Fast 8-hour highway transit with guaranteed same-day setup</li>
                    <li>Transparent pricing with zero hidden surcharges</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="pat2dhn-section pat2dhn-section-gray">
    <div class="container">
        <div class="pat2dhn-heading-center">
            <h2>Frequently Asked Questions: Patna to Dhanbad Shifting</h2>
            <p>
                Essential information on pricing, transit times, packing materials, and claim documentation.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="pat2dhn-faq-item">
                <h3>What is the road distance and travel time from Patna to Dhanbad?</h3>
                <p>
                    The highway distance between Patna and Dhanbad is approximately 290 km via NH-22 and NH-19 (via Bakhtiyarpur, Nawada, Rajauli, Barhi, Bagodar, and Rajganj into Dhanbad). Transit takes about 7 to 9 hours, enabling same-day or next-morning doorstep delivery.
                </p>
            </div>

            <div class="pat2dhn-faq-item">
                <h3>What are the shifting charges from Patna to Dhanbad?</h3>
                <p>
                    Estimated costs range from Rs 10,000 to 17,000 for 1 BHK flats, Rs 16,000 to 26,000 for 2 BHK homes, and Rs 24,000 to 38,000 for 3 BHK bungalows, covering 5-layer packing, container transport, toll charges, loading, and unloading.
                </p>
            </div>

            <div class="pat2dhn-faq-item">
                <h3>Do you provide claimable GST invoices for bank and public sector transfers?</h3>
                <p>
                    Yes, Shree Ashirwad Packers and Movers provides 100% genuine GST invoices, itemized inventory sheets, consignment notes (bilty), and IBA-approved money receipts eligible for full government, banking, and PSU reimbursement.
                </p>
            </div>

            <div class="pat2dhn-faq-item">
                <h3>How are cars and motorcycles transported from Patna to Dhanbad?</h3>
                <p>
                    Vehicles are safely transported in enclosed hydraulic car carrier trailers and custom wooden motorcycle crates with wheel chocks, security straps, and comprehensive transit risk insurance.
                </p>
            </div>

            <div class="pat2dhn-faq-item">
                <h3>Which areas in Patna and Dhanbad are covered?</h3>
                <p>
                    In Patna, we service Bailey Road, Kankarbagh, Boring Road, Rajendra Nagar, Danapur, Patliputra Colony, and Anisabad. In Dhanbad, we deliver to Bank More, Saraidhela, Hirapur, IIT ISM, Koyla Nagar, Katras, and Govindpur.
                </p>
            </div>

            <div class="pat2dhn-faq-item">
                <h3>Is comprehensive transit risk insurance available?</h3>
                <p>
                    Yes, we offer optional comprehensive transit risk insurance protecting all household furniture, electronics, and vehicles against unexpected road hazards with transparent claim settlement.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section style="background: linear-gradient(135deg, #15803d 0%, #0f172a 100%); color: #ffffff; padding: 65px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Book Your Patna to Dhanbad Move Today
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
