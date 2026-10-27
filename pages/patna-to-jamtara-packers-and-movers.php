<?php
/**
 * Page Name: Patna to Jamtara Packers and Movers
 * Route Slug: patna-to-jamtara-packers-and-movers
 * Description: Dedicated inter-state household, vehicle, and commercial moving services from Patna, Bihar to Jamtara and Mihijam, Jharkhand.
 * Focus Keywords: patna to jamtara packers and movers, packers and movers patna to jamtara, house shifting patna to jamtara, car carrier patna to jamtara, bike transport patna to jamtara, luggage transport patna to jamtara
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Patna to Jamtara Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Fast Patna to Jamtara packers and movers. 275 km direct transit via Mokama-Jamui-Deoghar, 5-layer packing, IBA-approved bills, car & bike transport. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/patna-to-jamtara-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="patna to jamtara packers and movers, packers and movers patna to jamtara, house shifting patna to jamtara, car carrier patna to jamtara, bike transport patna to jamtara, luggage transport patna to jamtara">
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

    <!-- Scoped CSS for Route 18 (Patna to Jamtara) -->
    <style>
        :root {
            --pat2jam-primary: #1e3a8a;
            --pat2jam-secondary: #0284c7;
            --pat2jam-accent: #ea580c;
            --pat2jam-accent-light: #ffedd5;
            --pat2jam-dark: #0f172a;
            --pat2jam-gray-bg: #f8fafc;
            --pat2jam-border: #e2e8f0;
            --pat2jam-shadow: 0 10px 25px -5px rgba(30, 58, 138, 0.08), 0 8px 10px -6px rgba(30, 58, 138, 0.04);
        }

        .pat2jam-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .pat2jam-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .pat2jam-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .pat2jam-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .pat2jam-badge {
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

        .pat2jam-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .pat2jam-btn-primary {
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

        .pat2jam-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(234, 88, 12, 0.5);
            color: #ffffff;
        }

        .pat2jam-btn-secondary {
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

        .pat2jam-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .pat2jam-section {
            padding: 70px 0;
        }

        .pat2jam-section-gray {
            background-color: var(--pat2jam-gray-bg);
        }

        .pat2jam-heading-center {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 50px;
        }

        .pat2jam-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--pat2jam-dark);
            margin-bottom: 15px;
        }

        .pat2jam-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .pat2jam-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
            gap: 28px;
        }

        .pat2jam-card {
            background: #ffffff;
            border: 1px solid var(--pat2jam-border);
            border-radius: 16px;
            padding: 32px 26px;
            box-shadow: var(--pat2jam-shadow);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .pat2jam-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -8px rgba(30, 58, 138, 0.14);
        }

        .pat2jam-card-icon {
            width: 58px;
            height: 58px;
            border-radius: 14px;
            background: #eff6ff;
            color: var(--pat2jam-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.65rem;
            margin-bottom: 20px;
        }

        .pat2jam-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--pat2jam-dark);
            margin-bottom: 12px;
        }

        .pat2jam-card p {
            color: #475569;
            font-size: 0.98rem;
            line-height: 1.65;
        }

        .pat2jam-route-table-wrapper {
            overflow-x: auto;
            background: #ffffff;
            border: 1px solid var(--pat2jam-border);
            border-radius: 16px;
            box-shadow: var(--pat2jam-shadow);
            margin-bottom: 45px;
        }

        .pat2jam-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.98rem;
        }

        .pat2jam-table th {
            background: #1e3a8a;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            letter-spacing: 0.02em;
        }

        .pat2jam-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--pat2jam-border);
            color: #334155;
            vertical-align: middle;
        }

        .pat2jam-table tr:last-child td {
            border-bottom: none;
        }

        .pat2jam-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }

        .pat2jam-img-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 22px;
            margin: 40px 0;
        }

        .pat2jam-img-card {
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid var(--pat2jam-border);
            box-shadow: var(--pat2jam-shadow);
        }

        .pat2jam-img-card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            display: block;
        }

        .pat2jam-img-caption {
            padding: 14px 16px;
            font-size: 0.92rem;
            color: #475569;
            font-weight: 600;
            background: #ffffff;
        }

        .pat2jam-faq-item {
            background: #ffffff;
            border: 1px solid var(--pat2jam-border);
            border-radius: 14px;
            margin-bottom: 16px;
            padding: 24px 28px;
            box-shadow: var(--pat2jam-shadow);
        }

        .pat2jam-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--pat2jam-dark);
            margin-bottom: 10px;
        }

        .pat2jam-faq-item p {
            color: #475569;
            font-size: 0.98rem;
            line-height: 1.65;
            margin: 0;
        }

        .pat2jam-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .pat2jam-checklist li {
            padding-left: 28px;
            position: relative;
            margin-bottom: 12px;
            font-size: 0.98rem;
            color: #334155;
            line-height: 1.6;
        }

        .pat2jam-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #16a34a;
            font-weight: 800;
            font-size: 1.1rem;
        }

        @media (max-width: 768px) {
            .pat2jam-hero h1 {
                font-size: 2.1rem;
            }
            .pat2jam-section {
                padding: 48px 0;
            }
            .pat2jam-card {
                padding: 24px 20px;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Patna to Jamtara",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "INR 6,000 - 48,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bailey Road Crossing, Near Danapur Station Road",
            "addressLocality": "Patna",
            "addressRegion": "Bihar",
            "postalCode": "800001",
            "addressCountry": "IN"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Patna"
            },
            {
                "@type": "AdministrativeArea",
                "name": "Jamtara"
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
        "serviceType": "Inter-State Packers and Movers Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Jamtara, Jharkhand"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Patna to Jamtara Relocation Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Patna to Jamtara Household Goods Relocation"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Patna to Jamtara Car & Bike Transport Carrier"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Government & Bank Transfer Moving Services"
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
                "name": "Patna to Jamtara Route",
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
                "name": "What is the total road distance and transit time between Patna and Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Patna and Jamtara is approximately 275 km via NH-31 (Mokama) and NH-333 via Jamui, Chakai, and Deoghar into Jamtara. Dedicated closed container trucks reach destination within 7 to 9 hours on the same day or early morning."
                }
            },
            {
                "@type": "Question",
                "name": "How much does home shifting from Patna to Jamtara cost?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Pricing begins from Rs 7,000 to 13,500 for 1 BHK moves, Rs 12,000 to 21,500 for standard 2 BHK homes, and Rs 18,500 to 33,000 for 3 BHK bungalows, depending upon elevator access, exact volume, and packaging tier."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide doorstep pickup across Patna, Bailey Road, and Danapur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our pickup team covers all Patna localities including Boring Road, Kankarbagh, Bailey Road, Raja Bazar, Ashiana Nagar, Danapur Cantt, Saguna More, Patliputra Colony, Fraser Road, and Phulwari Sharif."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable bills for central and state government employees?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we issue 100% genuine GST-compliant invoices, money receipts, consignor-consignee bilty notes, and IBA-approved documentation valid for government, PSU, defense, railway, and bank transfer reimbursements."
                }
            },
            {
                "@type": "Question",
                "name": "How are cars and motorcycles transported from Patna to Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Vehicles are transported in enclosed hydraulic car trailers and dedicated two-wheeler carriers fitted with specialized tyre clamps, heavy strapping, and comprehensive vehicle transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Are goods safe during monsoon or heavy rainfall on inter-state roads?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "All shipments travel in 100% weatherproof closed metallic containers sealed against rainwater, moisture, and road dust, fortified with outer waterproof plastic stretch lamination."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="pat2jam-hero">
    <div class="container">
        <div class="pat2jam-badge-strip">
            <span class="pat2jam-badge">&#10003; 275 KM Direct Patna &rarr; Jamtara</span>
            <span class="pat2jam-badge">&#10003; Government &amp; PSU Transfer Specialists</span>
            <span class="pat2jam-badge">&#10003; 100% Weatherproof Closed Containers</span>
            <span class="pat2jam-badge">&#10003; All Patna Localities Covered</span>
        </div>
        <h1>Patna to Jamtara Packers and Movers</h1>
        <p class="lead">
            Planning a relocation from the historic capital of Bihar to Jamtara or Mihijam? Shree Ashirwad Packers and Movers delivers professional inter-state shifting services across the 275 km Patna &ndash; Mokama &ndash; Jamui &ndash; Deoghar &ndash; Jamtara corridor. We provide premium 5-layer packing, IBA-compliant bills for government &amp; bank employees, covered car carriers, and same-day express delivery.
        </p>
        <div class="pat2jam-cta-group">
            <a href="tel:+918409531615" class="pat2jam-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Now: 084095 31615
            </a>
            <a href="#pat2jam-pricing" class="pat2jam-btn-secondary">
                Explore Shifting Rates &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Route Corridor Overview & Statistics -->
<section class="pat2jam-section">
    <div class="container">
        <div class="pat2jam-heading-center">
            <h2>Patna to Jamtara Highway Corridor Profile</h2>
            <p>
                Connecting the Bihar plains with the plateau border of Santhal Pargana, the Patna to Jamtara transit line runs via key commercial highway arteries. Our experienced drivers navigate this inter-state route regularly with zero incidents.
            </p>
        </div>

        <div class="pat2jam-route-table-wrapper">
            <table class="pat2jam-table">
                <thead>
                    <tr>
                        <th>Transit Parameter</th>
                        <th>Patna to Jamtara Route Specifics</th>
                        <th>Our Operational Standard</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Road Distance</strong></td>
                        <td>~275 km via NH-31 &amp; NH-333 (via Mokama, Jamui, Chakai, Deoghar)</td>
                        <td>Direct route avoiding congested inner bazaar stretches</td>
                    </tr>
                    <tr>
                        <td><strong>Average Transit Duration</strong></td>
                        <td>7 to 9 hours for dedicated closed container trucks</td>
                        <td>Same-day evening or next-morning doorstep delivery</td>
                    </tr>
                    <tr>
                        <td><strong>Major Highway Stops</strong></td>
                        <td>Patna &rarr; Bakhtiyarpur &rarr; Mokama &rarr; Lakhisarai &rarr; Jamui &rarr; Chakai &rarr; Deoghar &rarr; Jamtara</td>
                        <td>GPS tracking with live checkpoint milestone notifications</td>
                    </tr>
                    <tr>
                        <td><strong>Bihar-Jharkhand Border Point</strong></td>
                        <td>Chakai &ndash; Deoghar / Jasidih inter-state border junction</td>
                        <td>Pre-cleared e-way bills and commercial permits</td>
                    </tr>
                    <tr>
                        <td><strong>Patna Pickup Regions</strong></td>
                        <td>Boring Road, Kankarbagh, Bailey Road, Raja Bazar, Danapur, Patliputra</td>
                        <td>Elevator packing, stair handling, balcony hoisting</td>
                    </tr>
                    <tr>
                        <td><strong>Jamtara Unloading Zones</strong></td>
                        <td>Jamtara Town, Mihijam, Court Road, Station Road, New Colony, Karmatanr</td>
                        <td>Complete unloading, re-assembly, and positioning</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- 4 Verified Images Display -->
        <div class="pat2jam-img-grid">
            <div class="pat2jam-img-card">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Waterproof closed container truck for Patna to Jamtara inter-state shifting">
                <div class="pat2jam-img-caption">All-weather metallic container trucks ensuring zero road dirt or moisture entry.</div>
            </div>
            <div class="pat2jam-img-card">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5-layer packing materials for Patna to Jamtara household goods">
                <div class="pat2jam-img-caption">Reinforced corrugated cartons, multi-layer bubble wrap, and foam edge protectors.</div>
            </div>
            <div class="pat2jam-img-card">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Hydraulic car carrier loading sedan for Patna to Jamtara transport">
                <div class="pat2jam-img-caption">Hydraulic car carriers with wheel locks and transit insurance for premium cars.</div>
            </div>
            <div class="pat2jam-img-card">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and bed reassembly at Jamtara new residence">
                <div class="pat2jam-img-caption">Professional destination setup, furniture assembly, and packing waste clearance.</div>
            </div>
        </div>
    </div>
</section>

<!-- Core Services Section -->
<section class="pat2jam-section pat2jam-section-gray">
    <div class="container">
        <div class="pat2jam-heading-center">
            <h2>Specialized Moving Solutions: Patna to Jamtara</h2>
            <p>
                From transfer postings of government administrators and railway officers to family relocations and commercial shipments, we engineer relocation solutions customized to your timeline and budget.
            </p>
        </div>

        <div class="pat2jam-grid-3">
            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">&#127969;</div>
                <h3>Household Goods Relocation</h3>
                <p>
                    Comprehensive home moving covering modular sofas, double beds, wardrobes, refrigerators, washing machines, smart televisions, and breakable glassware. Every delicate item is protected using our multi-layer packing method.
                </p>
                <ul class="pat2jam-checklist">
                    <li>Dismantling and reassembly of modular furniture</li>
                    <li>Anti-scratch stretch film for upholstered items</li>
                    <li>Individual bubble wrapping for crockery and crystal</li>
                    <li>Color-coded labeling by room and priority</li>
                </ul>
            </div>

            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">&#128663;</div>
                <h3>Car &amp; Two-Wheeler Transport</h3>
                <p>
                    Safely shift your car, scooter, or motorcycle from Patna to Jamtara without driving hundreds of kilometers across congested state highways. We provide enclosed car trailers and customized bike crating.
                </p>
                <ul class="pat2jam-checklist">
                    <li>Specialized vehicle inspection checklist before departure</li>
                    <li>Hydraulic ramp loading and wheel tie-down straps</li>
                    <li>Zero odometer addition during transit</li>
                    <li>Comprehensive marine transit risk coverage</li>
                </ul>
            </div>

            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">&#128220;</div>
                <h3>Government &amp; PSU Transfer Support</h3>
                <p>
                    Patna houses the state capital Secretariat, High Court, and regional headquarters for railways, defense, SBI, and central PSUs. We specialize in official employee transfer packages with full paperwork compliance.
                </p>
                <ul class="pat2jam-checklist">
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
<section id="pat2jam-pricing" class="pat2jam-section">
    <div class="container">
        <div class="pat2jam-heading-center">
            <h2>Estimated Patna to Jamtara Relocation Pricing</h2>
            <p>
                Clear, upfront pricing with zero hidden handling fees, surcharges, or arbitrary price escalations on moving day.
            </p>
        </div>

        <div class="pat2jam-route-table-wrapper">
            <table class="pat2jam-table">
                <thead>
                    <tr>
                        <th>Consignment Scope</th>
                        <th>Recommended Vehicle</th>
                        <th>Packaging &amp; Manpower</th>
                        <th>Estimated Total Cost (INR)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 RK / 1 BHK Small Household</strong></td>
                        <td>Tata 407 / Closed Bolero Maxi Truck</td>
                        <td>&#8377; 3,500 &ndash; 5,000</td>
                        <td><strong>&#8377; 7,000 &ndash; 13,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Regular Family Apartment</strong></td>
                        <td>14 Ft / 17 Ft Dedicated Container</td>
                        <td>&#8377; 5,500 &ndash; 8,000</td>
                        <td><strong>&#8377; 12,000 &ndash; 21,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Large Apartment / House</strong></td>
                        <td>19 Ft / 22 Ft Heavy Container Truck</td>
                        <td>&#8377; 8,500 &ndash; 12,000</td>
                        <td><strong>&#8377; 19,000 &ndash; 32,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Bungalow Shifting</strong></td>
                        <td>24 Ft / 32 Ft High-Cube Container</td>
                        <td>&#8377; 11,000 &ndash; 16,000</td>
                        <td><strong>&#8377; 29,000 &ndash; 46,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter Relocation</strong></td>
                        <td>Custom Crate / Secured Shared Carrier</td>
                        <td>&#8377; 1,200 &ndash; 1,800</td>
                        <td><strong>&#8377; 2,800 &ndash; 4,800</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Hatchback / Sedan Car Transport</strong></td>
                        <td>Dedicated Covered Car Carrier Trailer</td>
                        <td>&#8377; 2,000 &ndash; 3,000</td>
                        <td><strong>&#8377; 7,500 &ndash; 12,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>SUV / Luxury Vehicle Transport</strong></td>
                        <td>Enclosed Car Trailer with Full Transit Insurance</td>
                        <td>&#8377; 2,500 &ndash; 3,500</td>
                        <td><strong>&#8377; 9,500 &ndash; 15,500</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.92rem; color: #64748b; text-align: center;">
            * Estimates are indicative and vary based on exact floor number in Patna, elevator access, total packing material volume, and declared insurance value. Taxes and toll fees are explicitly broken down.
        </p>
    </div>
</section>

<!-- Step-by-Step Relocation Workflow Section -->
<section class="pat2jam-section">
    <div class="container">
        <div class="pat2jam-heading-center">
            <h2>Our 5-Stage Moving Process: Patna to Jamtara</h2>
            <p>
                To provide complete peace of mind, Shree Ashirwad Packers and Movers implements a standardized five-stage inter-state execution framework designed specifically for the Patna to Jamtara transit highway corridor.
            </p>
        </div>

        <div class="pat2jam-grid-3">
            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">&#128221;</div>
                <h3>1. Pre-Move Survey &amp; Itemized Estimation</h3>
                <p>
                    Our relocation supervisor conducts an in-depth on-site survey at your Patna home or a quick virtual video walk-through. We catalog every piece of furniture, electronic gadget, fragile kitchen glassware, and vehicle to compute precise cubic volume, required packaging supplies, container capacity, and an all-inclusive written cost quote.
                </p>
            </div>
            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">&#128230;</div>
                <h3>2. Professional Packing &amp; Disassembly</h3>
                <p>
                    On moving day, our uniformed, background-checked packing crew arrives equipped with virgin materials. Modular beds, wardrobes, and TV panels are systematically unbolted. Heavy appliances are cocooned in multiple layers of shock-absorbing bubble wrap, edge guards, and waterproof shrink film to withstand highway transit.
                </p>
            </div>
            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">&#128666;</div>
                <h3>3. Scientific Container Loading &amp; Lashing</h3>
                <p>
                    Goods are loaded into our sealed, waterproof container trucks following a strict weight distribution formula. Heavier wooden furniture and appliances form the base layer, while lightweight cartons and delicate articles rest securely on top. All cargo is tethered with industrial ratchet tie-down straps to stop movement.
                </p>
            </div>
            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">&#128678;</div>
                <h3>4. Monitored Inter-State Highway Transit</h3>
                <p>
                    Our experienced long-haul drivers operate directly along NH-31 and NH-333 via Mokama, Jamui, and Deoghar into Jamtara. The vehicle is tracked via real-time satellite GPS, and customer support provides timely updates at major highway checkposts and toll junctions without unnecessary stops.
                </p>
            </div>
            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">&#128295;</div>
                <h3>5. Destination Setup &amp; Debris Removal</h3>
                <p>
                    Upon arrival at your new residence in Jamtara or Mihijam, our team unloads each carton into its designated room, reassembles beds and dining tables, assists with major appliance placement, and removes all discarded packing cartons and plastic waste, leaving your new home ready for comfortable living.
                </p>
            </div>
            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">&#128737;</div>
                <h3>Comprehensive Transit Risk Coverage</h3>
                <p>
                    Every consignment moving across the Bihar-Jharkhand border can be covered under our comprehensive transit insurance policy. In the improbable event of road accidents, fire, or external impacts, your claims are settled expeditiously through our partnering nationalized insurance providers.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Packing Methodology Section -->
<section class="pat2jam-section pat2jam-section-gray">
    <div class="container">
        <div class="pat2jam-heading-center">
            <h2>Our Multi-Layered Packing Integrity</h2>
            <p>
                Highway conditions across Bihar and Jharkhand demand robust packing standards. We utilize only virgin, heavy-duty packing supplies tailored to protect every category of household asset.
            </p>
        </div>

        <div class="pat2jam-grid-3">
            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">1</div>
                <h3>Primary Surface Lamination</h3>
                <p>
                    Direct application of scratch-resistant cling film and non-woven foam padding to polished wooden beds, dining tables, sofa sets, and leather seating to repel road dust and moisture.
                </p>
            </div>
            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">2</div>
                <h3>High-Density Bubble Shielding</h3>
                <p>
                    Multi-ply air-cushioned bubble wrap for televisions, microwave ovens, washing machines, and electronic gadgets to absorb shocks from highway vibration and uneven patches.
                </p>
            </div>
            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">3</div>
                <h3>Corner &amp; Edge Protection</h3>
                <p>
                    Structural corner guards installed on heavy furniture and glass table tops to eliminate chipping or impact damage during tight stairway maneuvering in Patna apartments.
                </p>
            </div>
            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">4</div>
                <h3>Heavy 7-Ply Master Cartons</h3>
                <p>
                    Heavy-gauge corrugated carton boxes for books, clothing, kitchen utensils, and food containers, taped with industrial adhesive bands and clearly tagged by room.
                </p>
            </div>
            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">5</div>
                <h3>Specialized Wooden Crating</h3>
                <p>
                    Custom wooden crate fabrication for delicate temple idols, marble items, large mirrors, and crystal chandeliers requiring rigid exterior shielding.
                </p>
            </div>
            <div class="pat2jam-card">
                <div class="pat2jam-card-icon">&#9733;</div>
                <h3>Cargo Lock &amp; Dunnage Strapping</h3>
                <p>
                    Inside our closed container trucks, all goods are locked into position with heavy nylon ratchet belts to prevent sliding during emergency highway braking.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Localities Covered: Patna & Jamtara -->
<section class="pat2jam-section">
    <div class="container">
        <div class="pat2jam-heading-center">
            <h2>Serving Every Corner of Patna &amp; Jamtara</h2>
            <p>
                Our logistical operations bridge the entire urban sprawl of Patna to all urban and rural hubs of Jamtara district.
            </p>
        </div>

        <div class="pat2jam-grid-3">
            <div class="pat2jam-card">
                <h3>Patna Pickup Localities</h3>
                <p>
                    Full doorstep packing, balcony hoisting, and loading service available throughout:
                </p>
                <ul class="pat2jam-checklist">
                    <li><strong>Boring Road &amp; Patliputra:</strong> Boring Canal Road, Alpana Market, Patliputra Colony</li>
                    <li><strong>Bailey Road &amp; Danapur:</strong> Raja Bazar, Ashiana Nagar, Saguna More, Danapur Cantt</li>
                    <li><strong>Kankarbagh &amp; Rajendra Nagar:</strong> Hanuman Nagar, Doctors Colony, Kumhrar</li>
                    <li><strong>Anisabad &amp; Phulwari Sharif:</strong> Beur, Khagaul Road, AIIMS Patna vicinity</li>
                    <li><strong>Central Patna:</strong> Fraser Road, Exhibition Road, Gandhi Maidan, Kidwaipuri</li>
                </ul>
            </div>

            <div class="pat2jam-card">
                <h3>Jamtara Delivery Network</h3>
                <p>
                    Seamless unloading, placement, and unpacking across Jamtara and adjoining zones:
                </p>
                <ul class="pat2jam-checklist">
                    <li><strong>Jamtara City:</strong> Court Road, Station Road, Kayasthapada, Main Bazaar</li>
                    <li><strong>Mihijam:</strong> Chittaranjan Gate, Kangoi, New Colony, Ghoshpara</li>
                    <li><strong>Sub-Divisions:</strong> Karmatanr, Nala, Kundahit, Narayanpur</li>
                    <li><strong>Industrial Environs:</strong> Jamtara Bypass, Maithon Dam borders</li>
                    <li><strong>Neighboring Districts:</strong> Jasidih, Madhupur, and Sarath connecting hubs</li>
                </ul>
            </div>

            <div class="pat2jam-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    With more than a decade of proven leadership along the Bihar-Jharkhand inter-state corridor, we guarantee satisfaction:
                </p>
                <ul class="pat2jam-checklist">
                    <li>Dedicated closed container fleet &ndash; zero open truck compromises</li>
                    <li>Trained, in-house, police-verified moving crew</li>
                    <li>Punctual pickup and guaranteed arrival windows</li>
                    <li>Transparent written quotes with no moving-day surprises</li>
                    <li>End-to-end GPS visibility and dedicated relocation manager</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="pat2jam-section pat2jam-section-gray">
    <div class="container">
        <div class="pat2jam-heading-center">
            <h2>Frequently Asked Questions: Patna to Jamtara Relocation</h2>
            <p>
                Common queries and essential information regarding inter-state moves between Patna and Jamtara.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="pat2jam-faq-item">
                <h3>What is the total road distance and transit time between Patna and Jamtara?</h3>
                <p>
                    The highway distance between Patna and Jamtara is approximately 275 km via NH-31 (Mokama) and NH-333 via Jamui, Chakai, and Deoghar into Jamtara. Dedicated closed container trucks reach destination within 7 to 9 hours on the same day or early morning.
                </p>
            </div>

            <div class="pat2jam-faq-item">
                <h3>How much does home shifting from Patna to Jamtara cost?</h3>
                <p>
                    Pricing begins from Rs 7,000 to 13,500 for 1 BHK moves, Rs 12,000 to 21,500 for standard 2 BHK homes, and Rs 18,500 to 33,000 for 3 BHK bungalows, depending upon elevator access, exact volume, and packaging tier.
                </p>
            </div>

            <div class="pat2jam-faq-item">
                <h3>Do you provide doorstep pickup across Patna, Bailey Road, and Danapur?</h3>
                <p>
                    Yes, our pickup team covers all Patna localities including Boring Road, Kankarbagh, Bailey Road, Raja Bazar, Ashiana Nagar, Danapur Cantt, Saguna More, Patliputra Colony, Fraser Road, and Phulwari Sharif.
                </p>
            </div>

            <div class="pat2jam-faq-item">
                <h3>Do you provide claimable bills for central and state government employees?</h3>
                <p>
                    Yes, we issue 100% genuine GST-compliant invoices, money receipts, consignor-consignee bilty notes, and IBA-approved documentation valid for government, PSU, defense, railway, and bank transfer reimbursements.
                </p>
            </div>

            <div class="pat2jam-faq-item">
                <h3>How are cars and motorcycles transported from Patna to Jamtara?</h3>
                <p>
                    Vehicles are transported in enclosed hydraulic car trailers and dedicated two-wheeler carriers fitted with specialized tyre clamps, heavy strapping, and comprehensive vehicle transit insurance.
                </p>
            </div>

            <div class="pat2jam-faq-item">
                <h3>Are goods safe during monsoon or heavy rainfall on inter-state roads?</h3>
                <p>
                    All shipments travel in 100% weatherproof closed metallic containers sealed against rainwater, moisture, and road dust, fortified with outer waterproof plastic stretch lamination.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 60px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Book Your Patna to Jamtara Relocation with Confidence
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Connect with our relocation specialists for a customized quote, free pre-move survey, and guaranteed delivery schedule.
        </p>
        <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
            <a href="tel:+918409531615" style="background: #ea580c; color: #ffffff; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" style="background: rgba(255,255,255,0.15); color: #ffffff; font-weight: 600; padding: 14px 28px; border-radius: 10px; text-decoration: none; border: 1px solid rgba(255,255,255,0.3);">
                Get Free Moving Quote &rarr;
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
