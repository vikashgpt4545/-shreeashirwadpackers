<?php
/**
 * Page Name: Kolkata to Jamtara Packers and Movers
 * Route Slug: kolkata-to-jamtara-packers-and-movers
 * Description: Premier inter-state express relocation route from Kolkata metropolitan area and Howrah to Jamtara and Mihijam, Jharkhand.
 * Focus Keywords: kolkata to jamtara packers and movers, packers and movers kolkata to jamtara, house shifting kolkata to jamtara, kolkata to jamtara car carrier, luggage parcel kolkata to jamtara, bike transport kolkata to jamtara
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Kolkata to Jamtara Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Reliable Kolkata to Jamtara packers and movers. 255 km direct NH-19 transit, 5-layer packing, IBA-approved bills, dedicated car carrier, safe delivery. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/kolkata-to-jamtara-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="kolkata to jamtara packers and movers, packers and movers kolkata to jamtara, house shifting kolkata to jamtara, kolkata to jamtara car carrier, luggage parcel kolkata to jamtara, bike transport kolkata to jamtara">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-WB">
    <meta name="geo.placename" content="Kolkata">

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

    <!-- Scoped CSS for Route 17 (Kolkata to Jamtara) -->
    <style>
        :root {
            --kol2jam-primary: #1e3a8a;
            --kol2jam-secondary: #0284c7;
            --kol2jam-accent: #f97316;
            --kol2jam-accent-light: #ffedd5;
            --kol2jam-dark: #0f172a;
            --kol2jam-gray-bg: #f8fafc;
            --kol2jam-border: #e2e8f0;
            --kol2jam-shadow: 0 10px 25px -5px rgba(30, 58, 138, 0.08), 0 8px 10px -6px rgba(30, 58, 138, 0.04);
        }

        .kol2jam-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .kol2jam-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .kol2jam-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .kol2jam-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .kol2jam-badge {
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

        .kol2jam-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .kol2jam-btn-primary {
            background: linear-gradient(135deg, #f97316 0%, #ea580c 100%);
            color: #ffffff;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 15px rgba(249, 115, 22, 0.4);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        .kol2jam-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(249, 115, 22, 0.5);
            color: #ffffff;
        }

        .kol2jam-btn-secondary {
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

        .kol2jam-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .kol2jam-section {
            padding: 70px 0;
        }

        .kol2jam-section-gray {
            background-color: var(--kol2jam-gray-bg);
        }

        .kol2jam-heading-center {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 50px;
        }

        .kol2jam-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--kol2jam-dark);
            margin-bottom: 15px;
        }

        .kol2jam-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .kol2jam-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
            gap: 28px;
        }

        .kol2jam-card {
            background: #ffffff;
            border: 1px solid var(--kol2jam-border);
            border-radius: 16px;
            padding: 32px 26px;
            box-shadow: var(--kol2jam-shadow);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .kol2jam-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -8px rgba(30, 58, 138, 0.14);
        }

        .kol2jam-card-icon {
            width: 58px;
            height: 58px;
            border-radius: 14px;
            background: #eff6ff;
            color: var(--kol2jam-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.65rem;
            margin-bottom: 20px;
        }

        .kol2jam-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--kol2jam-dark);
            margin-bottom: 12px;
        }

        .kol2jam-card p {
            color: #475569;
            font-size: 0.98rem;
            line-height: 1.65;
        }

        .kol2jam-route-table-wrapper {
            overflow-x: auto;
            background: #ffffff;
            border: 1px solid var(--kol2jam-border);
            border-radius: 16px;
            box-shadow: var(--kol2jam-shadow);
            margin-bottom: 45px;
        }

        .kol2jam-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.98rem;
        }

        .kol2jam-table th {
            background: #1e3a8a;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            letter-spacing: 0.02em;
        }

        .kol2jam-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--kol2jam-border);
            color: #334155;
            vertical-align: middle;
        }

        .kol2jam-table tr:last-child td {
            border-bottom: none;
        }

        .kol2jam-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }

        .kol2jam-img-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 22px;
            margin: 40px 0;
        }

        .kol2jam-img-card {
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid var(--kol2jam-border);
            box-shadow: var(--kol2jam-shadow);
        }

        .kol2jam-img-card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            display: block;
        }

        .kol2jam-img-caption {
            padding: 14px 16px;
            font-size: 0.92rem;
            color: #475569;
            font-weight: 600;
            background: #ffffff;
        }

        .kol2jam-faq-item {
            background: #ffffff;
            border: 1px solid var(--kol2jam-border);
            border-radius: 14px;
            margin-bottom: 16px;
            padding: 24px 28px;
            box-shadow: var(--kol2jam-shadow);
        }

        .kol2jam-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--kol2jam-dark);
            margin-bottom: 10px;
        }

        .kol2jam-faq-item p {
            color: #475569;
            font-size: 0.98rem;
            line-height: 1.65;
            margin: 0;
        }

        .kol2jam-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .kol2jam-checklist li {
            padding-left: 28px;
            position: relative;
            margin-bottom: 12px;
            font-size: 0.98rem;
            color: #334155;
            line-height: 1.6;
        }

        .kol2jam-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #16a34a;
            font-weight: 800;
            font-size: 1.1rem;
        }

        @media (max-width: 768px) {
            .kol2jam-hero h1 {
                font-size: 2.1rem;
            }
            .kol2jam-section {
                padding: 48px 0;
            }
            .kol2jam-card {
                padding: 24px 20px;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Kolkata to Jamtara",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "INR 5,500 - 45,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Grand Trunk Road Connection, Kolkata Metropolitan Hub",
            "addressLocality": "Kolkata",
            "addressRegion": "West Bengal",
            "postalCode": "700001",
            "addressCountry": "IN"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Kolkata"
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
            "name": "Kolkata to Jamtara Relocation Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Kolkata to Jamtara Household Goods Relocation"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Kolkata to Jamtara Car Carrier & Bike Courier"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Commercial Office & IT Relocation to Jamtara"
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
                "name": "Packers and Movers Kolkata",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Kolkata to Jamtara Route",
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
                "name": "What is the typical transit duration from Kolkata to Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The road distance between Kolkata and Jamtara is approximately 255 km via NH-19 (via Dankuni, Durgapur, Asansol bypass, and Chittaranjan border). Our dedicated closed-container fleet completes door-to-door transit within 6 to 8 hours on the same day or overnight."
                }
            },
            {
                "@type": "Question",
                "name": "How much does home shifting from Kolkata to Jamtara cost?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Relocation charges depend on inventory volume. Standard 1 BHK shifting starts from Rs 7,500 to 14,000, 2 BHK apartments range between Rs 12,500 and 22,000, and larger 3 BHK households or bungalows range from Rs 19,000 to 34,000, inclusive of multi-layer packing and labor."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide pick-up across all Kolkata suburbs and Salt Lake/New Town?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we service all locations across Kolkata metropolitan area including Salt Lake City (Sectors 1 to 5), Rajarhat New Town, Dum Dum, Barasat, Behala, Tollygunge, Alipore, Ballygunge, Garia, Jadavpur, Howrah, Shibpur, and Liluah with specialized door pickup."
                }
            },
            {
                "@type": "Question",
                "name": "Are inter-state transit taxes and West Bengal-Jharkhand e-way bills covered?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers handles all statutory inter-state documentation including GST e-way bills, commercial toll permits, and border transit paperwork across the West Bengal-Jharkhand border at Rupnarayanpur/Chittaranjan."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely transport luxury cars and motorcycles from Kolkata to Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate dedicated hydraulic closed car carriers and custom motorcycle crates equipped with wheel chocks, safety safety straps, and comprehensive transit insurance to ensure zero scratch transport."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable GST invoices for corporate employee relocation?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Absolutely. We supply 100% GST-compliant corporate invoices, packing manifests, consignment notes (bilty), and transit insurance papers recognized by leading IT, banking, central government, and corporate employers."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="kol2jam-hero">
    <div class="container">
        <div class="kol2jam-badge-strip">
            <span class="kol2jam-badge">&#10003; 255 KM Direct NH-19 Transit</span>
            <span class="kol2jam-badge">&#10003; Kolkata &amp; Howrah Doorstep Pickup</span>
            <span class="kol2jam-badge">&#10003; 100% Safe Closed Container Fleet</span>
            <span class="kol2jam-badge">&#10003; Comprehensive Transit Insurance</span>
        </div>
        <h1>Kolkata to Jamtara Packers and Movers</h1>
        <p class="lead">
            Relocating from the City of Joy to the green heartlands of Jamtara or Mihijam? Shree Ashirwad Packers and Movers provides seamless inter-state household shifting, corporate IT relocation, and specialized car &amp; bike courier services across the 255 km NH-19 expressway corridor. Benefit from premium multi-layer packing, transparent pricing, guaranteed delivery timelines, and full corporate GST compliance.
        </p>
        <div class="kol2jam-cta-group">
            <a href="tel:+918409531615" class="kol2jam-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Now: 084095 31615
            </a>
            <a href="#kol2jam-pricing" class="kol2jam-btn-secondary">
                View Price Table &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Route Overview & Key Statistics -->
<section class="kol2jam-section">
    <div class="container">
        <div class="kol2jam-heading-center">
            <h2>Kolkata to Jamtara Relocation Corridor Details</h2>
            <p>
                The journey from Kolkata metropolitan area and Howrah to Jamtara spans 255 km through West Bengal's major industrial and express corridors, entering Jharkhand at the Chittaranjan and Rupnarayanpur gateway. Here is an overview of key transit factors.
            </p>
        </div>

        <div class="kol2jam-route-table-wrapper">
            <table class="kol2jam-table">
                <thead>
                    <tr>
                        <th>Parameter</th>
                        <th>Corridor Specifications</th>
                        <th>Shree Ashirwad Guarantee</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Total Highway Distance</strong></td>
                        <td>~255 Kilometers via NH-19 (Old NH-2 Grand Trunk Highway)</td>
                        <td>Optimized shortest and smoothest road routing</td>
                    </tr>
                    <tr>
                        <td><strong>Estimated Transit Time</strong></td>
                        <td>6 to 8 hours for dedicated trucks; next-day scheduled delivery</td>
                        <td>Punctual, zero-delay door-to-door transit schedule</td>
                    </tr>
                    <tr>
                        <td><strong>Major Route Waypoints</strong></td>
                        <td>Kolkata &rarr; Dankuni &rarr; Burdwan &rarr; Panagarh &rarr; Durgapur &rarr; Asansol &rarr; Rupnarayanpur &rarr; Jamtara</td>
                        <td>Monitored GPS tracking with real-time waypoint alerts</td>
                    </tr>
                    <tr>
                        <td><strong>Inter-State Border Formalities</strong></td>
                        <td>West Bengal &ndash; Jharkhand Border Checkpoints at Chittaranjan / Rupnarayanpur</td>
                        <td>Complete e-way bill documentation and hassle-free transit clearance</td>
                    </tr>
                    <tr>
                        <td><strong>Pickup Coverage</strong></td>
                        <td>Kolkata (Central, North, South), Salt Lake, Rajarhat New Town, Howrah, Barasat</td>
                        <td>Doorstep packaging, high-floor balcony hoisting, elevator loading</td>
                    </tr>
                    <tr>
                        <td><strong>Delivery Locations in Jamtara</strong></td>
                        <td>Jamtara Town, Mihijam, Court Road, Station Road, New Colony, Kundahit, Nala</td>
                        <td>Unloading, room placement, furniture assembly, debris clearance</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- 4 Verified Images Display -->
        <div class="kol2jam-img-grid">
            <div class="kol2jam-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated closed container truck for Kolkata to Jamtara inter-state transit">
                <div class="kol2jam-img-caption">Dedicated GPS-monitored closed container fleet ensuring rain and dust proof transit.</div>
            </div>
            <div class="kol2jam-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5-layer packing materials for fragile household goods shifting">
                <div class="kol2jam-img-caption">Heavy-duty 5-layer bubble wrap, edge guards, and corrugated boxes for glassware.</div>
            </div>
            <div class="kol2jam-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Hydraulic car carrier loading luxury vehicles for Kolkata to Jamtara transport">
                <div class="kol2jam-img-caption">Specialized covered car carrier service with wheel lock straps and safety ramps.</div>
            </div>
            <div class="kol2jam-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and furniture assembly service at Jamtara residence">
                <div class="kol2jam-img-caption">Full destination unpacking, bed re-assembly, electrical unmounting, and setup support.</div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Relocation Services -->
<section class="kol2jam-section kol2jam-section-gray">
    <div class="container">
        <div class="kol2jam-heading-center">
            <h2>Comprehensive Shifting Services: Kolkata to Jamtara</h2>
            <p>
                Whether you are moving household goods from a high-rise in Salt Lake or Rajarhat, transferring corporate IT assets from Sector V, or relocating elderly parents back to ancestral homes in Jamtara or Mihijam, our tailored moving services cover every need.
            </p>
        </div>

        <div class="kol2jam-grid-3">
            <div class="kol2jam-card">
                <div class="kol2jam-card-icon">&#127968;</div>
                <h3>Complete Household Relocation</h3>
                <p>
                    Full-service home shifting covering delicate crockery, modular kitchen appliances, premium LED television sets, double beds, wardrobes, and upholstery. Packaged with multi-layer bubble wrap, thermocol sheets, and heavy-gauge corrugated cartons for maximum safety across the 255 km expressway drive.
                </p>
                <ul class="kol2jam-checklist">
                    <li>Room-wise structured categorization and tagging</li>
                    <li>Sofa wrapping with anti-dust stretch film</li>
                    <li>Mattress protection using heavy-gauge plastic sleeves</li>
                    <li>Wooden crate packaging for glass dining tables</li>
                </ul>
            </div>

            <div class="kol2jam-card">
                <div class="kol2jam-card-icon">&#128663;</div>
                <h3>Car Carrier &amp; Two-Wheeler Transport</h3>
                <p>
                    Relocate your sedan, hatchback, SUV, or motorbike from Kolkata to Jamtara without adding highway wear and tear. We utilize dedicated car transport trailers and custom-fabricated motorcycle cradles with foam padding and wheel locking mechanisms.
                </p>
                <ul class="kol2jam-checklist">
                    <li>Enclosed hydraulic carriers protecting against highway gravel</li>
                    <li>Digital inspection report before loading at Kolkata</li>
                    <li>Doorstep pickup across Kolkata and Howrah</li>
                    <li>Comprehensive marine transit insurance protection</li>
                </ul>
            </div>

            <div class="kol2jam-card">
                <div class="kol2jam-card-icon">&#128188;</div>
                <h3>Corporate &amp; IT Office Relocation</h3>
                <p>
                    Smooth commercial relocations for corporate branch offices, educational institutions, bank branches, and IT firms moving infrastructure from Kolkata to Jamtara and adjoining regional headquarters. We maintain strict business continuity with zero asset loss.
                </p>
                <ul class="kol2jam-checklist">
                    <li>Server racks, desktop workstations, and monitor wrapping</li>
                    <li>Fire-safe filing cabinet and record transport</li>
                    <li>Weekend or overnight scheduled transit</li>
                    <li>100% claimable GST invoice with e-way bill compliance</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Table Section -->
<section id="kol2jam-pricing" class="kol2jam-section">
    <div class="container">
        <div class="kol2jam-heading-center">
            <h2>Transparent Kolkata to Jamtara Shifting Charges</h2>
            <p>
                We believe in 100% fair, transparent pricing with no hidden surprises, toll markups, or sudden surcharge demands. Below are estimated market rates for our Kolkata to Jamtara relocation route.
            </p>
        </div>

        <div class="kol2jam-route-table-wrapper">
            <table class="kol2jam-table">
                <thead>
                    <tr>
                        <th>Move Type / Household Size</th>
                        <th>Recommended Vehicle</th>
                        <th>Packing &amp; Labor Charges</th>
                        <th>Estimated Total Cost (INR)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 RK / 1 BHK Small Apartment</strong></td>
                        <td>Tata Ace / Mahindra Bolero Pickup (Closed)</td>
                        <td>&#8377; 3,500 &ndash; 5,000</td>
                        <td><strong>&#8377; 7,500 &ndash; 13,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Standard Family Home</strong></td>
                        <td>14 Ft / 17 Ft Dedicated Container Truck</td>
                        <td>&#8377; 5,500 &ndash; 8,000</td>
                        <td><strong>&#8377; 13,000 &ndash; 21,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Spacious Home / Villa</strong></td>
                        <td>19 Ft / 22 Ft Multi-Axle Container Truck</td>
                        <td>&#8377; 8,000 &ndash; 12,000</td>
                        <td><strong>&#8377; 20,000 &ndash; 32,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Bungalow Move</strong></td>
                        <td>24 Ft / 32 Ft High-Cube Container</td>
                        <td>&#8377; 11,000 &ndash; 16,000</td>
                        <td><strong>&#8377; 30,000 &ndash; 46,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter Relocation</strong></td>
                        <td>Specialized Two-Wheeler Crate / Shared Truck</td>
                        <td>&#8377; 1,200 &ndash; 1,800</td>
                        <td><strong>&#8377; 2,800 &ndash; 4,800</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Car Relocation (Hatchback / Sedan)</strong></td>
                        <td>Covered Hydraulic Car Trailer</td>
                        <td>&#8377; 2,000 &ndash; 3,000</td>
                        <td><strong>&#8377; 7,500 &ndash; 12,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>SUV / Luxury Vehicle Transport</strong></td>
                        <td>Enclosed Car Trailer with Marine Insurance</td>
                        <td>&#8377; 2,500 &ndash; 3,500</td>
                        <td><strong>&#8377; 9,500 &ndash; 15,000</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.92rem; color: #64748b; text-align: center;">
            * Rates are approximate and depend on the exact pickup floor, elevator availability in Kolkata apartment complexes, volume of items, packaging tier selected, and insurance valuation. Inter-state toll charges and statutory taxes are quoted transparently up front.
        </p>
    </div>
</section>

<!-- Packing Standards & Transit Safety -->
<section class="kol2jam-section kol2jam-section-gray">
    <div class="container">
        <div class="kol2jam-heading-center">
            <h2>5-Layer Protective Packaging Standards</h2>
            <p>
                Inter-state highway movement across national highways requires engineering-grade packaging materials to withstand sudden braking, expressway vibrations, and inclement weather. Shree Ashirwad Packers and Movers implements a rigorous 5-layer safeguarding protocol.
            </p>
        </div>

        <div class="kol2jam-grid-3">
            <div class="kol2jam-card">
                <div class="kol2jam-card-icon">1</div>
                <h3>Layer 1: Moisture-Proof Foam &amp; Film</h3>
                <p>
                    Every polished wooden surface, leather sofa, and electronic unit is first swathed in high-density foam sheeting and anti-static cling film to seal out ambient moisture, coastal Kolkata humidity, and fine dust.
                </p>
            </div>
            <div class="kol2jam-card">
                <div class="kol2jam-card-icon">2</div>
                <h3>Layer 2: Virgin Bubble Wrap Cushioning</h3>
                <p>
                    Heavy-duty 75-micron air bubble wrapping is wound in overlapping concentric layers around TVs, refrigerators, washing machines, microwaves, and glassware sets, providing shock dampening against road bumps.
                </p>
            </div>
            <div class="kol2jam-card">
                <div class="kol2jam-card-icon">3</div>
                <h3>Layer 3: Reinforced Edge &amp; Corner Guards</h3>
                <p>
                    Corner impacts during elevator handling and truck loading pose the greatest risk to premium furniture. We apply hardened L-shaped cardboard and foam edge protectors to every table, mirror, and cabinet corner.
                </p>
            </div>
            <div class="kol2jam-card">
                <div class="kol2jam-card-icon">4</div>
                <h3>Layer 4: Double-Walled Corrugated Cartons</h3>
                <p>
                    Smaller household items, cookware, clothes, books, and decorative artifacts are packed into brand-new 7-ply heavy kraft cartons, labeled clearly by room and contents for seamless unpacking at Jamtara.
                </p>
            </div>
            <div class="kol2jam-card">
                <div class="kol2jam-card-icon">5</div>
                <h3>Layer 5: Weather-Tight Container Lashing</h3>
                <p>
                    Inside our closed container trucks, goods are secured using heavy-duty nylon ratchet cargo straps and air dunnage bags, preventing lateral slippage or tumbling while traversing curves on NH-19.
                </p>
            </div>
            <div class="kol2jam-card">
                <div class="kol2jam-card-icon">&#9733;</div>
                <h3>Zero-Subcontracting Guarantee</h3>
                <p>
                    Unlike brokers who outsource consignments to third-party local tempo operators, our in-house vetted crew handles your move from the initial packing in Kolkata to the final assembly in Jamtara.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Kolkata Pickup & Jamtara Delivery Hubs -->
<section class="kol2jam-section">
    <div class="container">
        <div class="kol2jam-heading-center">
            <h2>Serving All Neighborhoods in Kolkata &amp; Jamtara</h2>
            <p>
                Our localized fleet is familiar with Kolkata's restricted commercial vehicle entry hours, flyover clearances, narrow colony alleys, and gated high-rise society security protocols.
            </p>
        </div>

        <div class="kol2jam-grid-3">
            <div class="kol2jam-card">
                <h3>Kolkata Pickup Sectors</h3>
                <p>
                    We provide scheduled doorstep packing and vehicle loading across every township and suburb in the Kolkata Metropolitan Area:
                </p>
                <ul class="kol2jam-checklist">
                    <li><strong>Salt Lake (Bidhannagar):</strong> Sectors I, II, III, IV, and V</li>
                    <li><strong>New Town &amp; Rajarhat:</strong> Action Areas I, II, III, and Chinar Park</li>
                    <li><strong>South Kolkata:</strong> Tollygunge, Alipore, Ballygunge, Jadavpur, Garia, Behala</li>
                    <li><strong>North Kolkata:</strong> Dum Dum, Shyambazar, Bagbazar, Belgharia, Barasat</li>
                    <li><strong>Central &amp; Howrah:</strong> Park Street, Bhowanipore, Howrah Station, Shibpur, Liluah</li>
                </ul>
            </div>

            <div class="kol2jam-card">
                <h3>Jamtara Delivery Coverage</h3>
                <p>
                    Our destination network ensures direct doorstep unlading across the entire Jamtara district and border industrial belt:
                </p>
                <ul class="kol2jam-checklist">
                    <li><strong>Jamtara City:</strong> Court Road, Station Road, Kayasthapada, Ghoshpara</li>
                    <li><strong>Mihijam Urban Area:</strong> Chittaranjan Railway Colony border, Kangoi, New Colony</li>
                    <li><strong>Rural &amp; Sub-Divisional:</strong> Karmatanr (Vidyasagar Smriti), Nala, Kundahit</li>
                    <li><strong>Industrial &amp; Energy:</strong> Narayanpur, Jamtara Bypass, Maithon Dam borders</li>
                    <li><strong>Nearby Santhal Pargana:</strong> Direct transfers connecting Sarath and Madhupur</li>
                </ul>
            </div>

            <div class="kol2jam-card">
                <h3>Why Relocate With Shree Ashirwad?</h3>
                <p>
                    With over 12+ years of inter-state relocation leadership between West Bengal and Jharkhand, we deliver unmatched peace of mind:
                </p>
                <ul class="kol2jam-checklist">
                    <li>100% Verified, police-checked permanent moving crew</li>
                    <li>Government GST registered with official IBA-standard documentation</li>
                    <li>Guaranteed delivery timeline with GPS driver contact</li>
                    <li>Zero hidden fees, transparent itemized quote</li>
                    <li>Dedicated customer relationship manager from start to finish</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="kol2jam-section kol2jam-section-gray">
    <div class="container">
        <div class="kol2jam-heading-center">
            <h2>Frequently Asked Questions: Kolkata to Jamtara Movers</h2>
            <p>
                Everything you need to know about preparing for your relocation from Kolkata to Jamtara with Shree Ashirwad Packers and Movers.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="kol2jam-faq-item">
                <h3>What is the typical transit duration from Kolkata to Jamtara?</h3>
                <p>
                    The road distance between Kolkata and Jamtara is approximately 255 km via NH-19 (via Dankuni, Durgapur, Asansol bypass, and Chittaranjan border). Our dedicated closed-container fleet completes door-to-door transit within 6 to 8 hours on the same day or overnight.
                </p>
            </div>

            <div class="kol2jam-faq-item">
                <h3>How much does home shifting from Kolkata to Jamtara cost?</h3>
                <p>
                    Relocation charges depend on inventory volume. Standard 1 BHK shifting starts from Rs 7,500 to 14,000, 2 BHK apartments range between Rs 12,500 and 22,000, and larger 3 BHK households or bungalows range from Rs 19,000 to 34,000, inclusive of multi-layer packing and labor.
                </p>
            </div>

            <div class="kol2jam-faq-item">
                <h3>Do you provide pick-up across all Kolkata suburbs and Salt Lake/New Town?</h3>
                <p>
                    Yes, we service all locations across Kolkata metropolitan area including Salt Lake City (Sectors 1 to 5), Rajarhat New Town, Dum Dum, Barasat, Behala, Tollygunge, Alipore, Ballygunge, Garia, Jadavpur, Howrah, Shibpur, and Liluah with specialized door pickup.
                </p>
            </div>

            <div class="kol2jam-faq-item">
                <h3>Are inter-state transit taxes and West Bengal-Jharkhand e-way bills covered?</h3>
                <p>
                    Yes, Shree Ashirwad Packers and Movers handles all statutory inter-state documentation including GST e-way bills, commercial toll permits, and border transit paperwork across the West Bengal-Jharkhand border at Rupnarayanpur/Chittaranjan.
                </p>
            </div>

            <div class="kol2jam-faq-item">
                <h3>Can you safely transport luxury cars and motorcycles from Kolkata to Jamtara?</h3>
                <p>
                    Yes, we operate dedicated hydraulic closed car carriers and custom motorcycle crates equipped with wheel chocks, safety safety straps, and comprehensive transit insurance to ensure zero scratch transport.
                </p>
            </div>

            <div class="kol2jam-faq-item">
                <h3>Do you provide claimable GST invoices for corporate employee relocation?</h3>
                <p>
                    Absolutely. We supply 100% GST-compliant corporate invoices, packing manifests, consignment notes (bilty), and transit insurance papers recognized by leading IT, banking, central government, and corporate employers.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Footer Strip -->
<section style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 60px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Ready for a Hassle-Free Move from Kolkata to Jamtara?
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Book your free video pre-move survey or home visit today. Enjoy up to 10% advance booking discount with guaranteed on-time delivery.
        </p>
        <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
            <a href="tel:+918409531615" style="background: #f97316; color: #ffffff; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Instant Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" style="background: rgba(255,255,255,0.15); color: #ffffff; font-weight: 600; padding: 14px 28px; border-radius: 10px; text-decoration: none; border: 1px solid rgba(255,255,255,0.3);">
                Request Online Quote &rarr;
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
