<?php
/**
 * Page Name: Delhi to Jamtara Packers and Movers
 * Route Slug: delhi-to-jamtara-packers-and-movers
 * Description: Premium long-haul inter-state relocation services connecting Delhi NCR (Noida, Gurgaon, Faridabad, Ghaziabad) to Jamtara and Mihijam, Jharkhand.
 * Focus Keywords: delhi to jamtara packers and movers, packers and movers delhi to jamtara, house shifting delhi to jamtara, delhi to jamtara car carrier, bike transport delhi to jamtara, luggage parcel delhi to jamtara
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Delhi to Jamtara Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe Delhi to Jamtara packers and movers. 1230 km long-haul express via Yamuna Expressway & NH-19, 5-layer packing, closed containers, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/delhi-to-jamtara-packers-and-movers";
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
    <meta name="geo.region" content="IN-DL">
    <meta name="geo.placename" content="Delhi">

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

    <!-- Scoped CSS for Route 19 (Delhi to Jamtara) -->
    <style>
        :root {
            --del2jam-primary: #1e3a8a;
            --del2jam-secondary: #0284c7;
            --del2jam-accent: #f97316;
            --del2jam-accent-light: #ffedd5;
            --del2jam-dark: #0f172a;
            --del2jam-gray-bg: #f8fafc;
            --del2jam-border: #e2e8f0;
            --del2jam-shadow: 0 10px 25px -5px rgba(30, 58, 138, 0.08), 0 8px 10px -6px rgba(30, 58, 138, 0.04);
        }

        .del2jam-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .del2jam-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .del2jam-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .del2jam-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .del2jam-badge {
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

        .del2jam-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .del2jam-btn-primary {
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

        .del2jam-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(249, 115, 22, 0.5);
            color: #ffffff;
        }

        .del2jam-btn-secondary {
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

        .del2jam-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .del2jam-section {
            padding: 70px 0;
        }

        .del2jam-section-gray {
            background-color: var(--del2jam-gray-bg);
        }

        .del2jam-heading-center {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 50px;
        }

        .del2jam-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--del2jam-dark);
            margin-bottom: 15px;
        }

        .del2jam-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .del2jam-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(310px, 1fr));
            gap: 28px;
        }

        .del2jam-card {
            background: #ffffff;
            border: 1px solid var(--del2jam-border);
            border-radius: 16px;
            padding: 32px 26px;
            box-shadow: var(--del2jam-shadow);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .del2jam-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 16px 30px -8px rgba(30, 58, 138, 0.14);
        }

        .del2jam-card-icon {
            width: 58px;
            height: 58px;
            border-radius: 14px;
            background: #eff6ff;
            color: var(--del2jam-secondary);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.65rem;
            margin-bottom: 20px;
        }

        .del2jam-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--del2jam-dark);
            margin-bottom: 12px;
        }

        .del2jam-card p {
            color: #475569;
            font-size: 0.98rem;
            line-height: 1.65;
        }

        .del2jam-route-table-wrapper {
            overflow-x: auto;
            background: #ffffff;
            border: 1px solid var(--del2jam-border);
            border-radius: 16px;
            box-shadow: var(--del2jam-shadow);
            margin-bottom: 45px;
        }

        .del2jam-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.98rem;
        }

        .del2jam-table th {
            background: #1e3a8a;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            letter-spacing: 0.02em;
        }

        .del2jam-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--del2jam-border);
            color: #334155;
            vertical-align: middle;
        }

        .del2jam-table tr:last-child td {
            border-bottom: none;
        }

        .del2jam-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }

        .del2jam-img-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 22px;
            margin: 40px 0;
        }

        .del2jam-img-card {
            background: #ffffff;
            border-radius: 14px;
            overflow: hidden;
            border: 1px solid var(--del2jam-border);
            box-shadow: var(--del2jam-shadow);
        }

        .del2jam-img-card img {
            width: 100%;
            height: 210px;
            object-fit: cover;
            display: block;
        }

        .del2jam-img-caption {
            padding: 14px 16px;
            font-size: 0.92rem;
            color: #475569;
            font-weight: 600;
            background: #ffffff;
        }

        .del2jam-faq-item {
            background: #ffffff;
            border: 1px solid var(--del2jam-border);
            border-radius: 14px;
            margin-bottom: 16px;
            padding: 24px 28px;
            box-shadow: var(--del2jam-shadow);
        }

        .del2jam-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--del2jam-dark);
            margin-bottom: 10px;
        }

        .del2jam-faq-item p {
            color: #475569;
            font-size: 0.98rem;
            line-height: 1.65;
            margin: 0;
        }

        .del2jam-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .del2jam-checklist li {
            padding-left: 28px;
            position: relative;
            margin-bottom: 12px;
            font-size: 0.98rem;
            color: #334155;
            line-height: 1.6;
        }

        .del2jam-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #16a34a;
            font-weight: 800;
            font-size: 1.1rem;
        }

        @media (max-width: 768px) {
            .del2jam-hero h1 {
                font-size: 2.1rem;
            }
            .del2jam-section {
                padding: 48px 0;
            }
            .del2jam-card {
                padding: 24px 20px;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Delhi to Jamtara",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "priceRange": "INR 14,000 - 85,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Ring Road Logistics Hub, Near Ashram Chowk",
            "addressLocality": "New Delhi",
            "addressRegion": "Delhi",
            "postalCode": "110001",
            "addressCountry": "IN"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Delhi"
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
        "serviceType": "Long-Haul Inter-State Packers and Movers Services",
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
            "name": "Delhi to Jamtara Relocation Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Delhi NCR to Jamtara Household Goods Relocation"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Enclosed Car Carrier & Motorbike Transport"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Central Government, PSU, & Corporate Relocation"
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
                "name": "Packers and Movers Delhi",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Delhi to Jamtara Route",
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
                "name": "What is the total road distance and delivery time from Delhi NCR to Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance from Delhi NCR to Jamtara is approximately 1,230 km via the Yamuna Expressway and NH-19 (via Agra, Kanpur, Prayagraj, Varanasi, and Jharkhand entry). Dedicated express container trucks deliver door-to-door within 48 to 72 hours with dual-driver shifts."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Delhi, Gurgaon, or Noida to Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Long-distance shifting charges range between Rs 16,000 and 26,000 for 1 BHK apartments, Rs 24,000 and 38,000 for standard 2 BHK homes, and Rs 36,000 and 58,000 for 3 BHK bungalows, inclusive of multi-layer packing, toll taxes, and transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Do you cover all localities across Delhi, Noida, Gurgaon, and Ghaziabad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our pickup fleet services the entire National Capital Region including South Delhi, Dwarka, Rohini, Gurugram (DLF, Sohna Road), Noida (Sectors 18, 62, 137), Greater Noida, Faridabad, and Ghaziabad (Indirapuram, Vaishali)."
                }
            },
            {
                "@type": "Question",
                "name": "Can I transport my car or bike safely from Delhi to Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate specialized hydraulic enclosed car carriers and custom motorcycle crates equipped with wheel locking straps and transit insurance to ensure zero accidental damage across the 1,230 km long-haul highway transit."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable GST invoices for corporate and central government transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Absolutely. We supply 100% genuine GST-compliant invoices, money receipts, consignor-consignee bilty notes, and IBA-approved documentation valid for government, PSU, defense, railway, and bank transfer reimbursements."
                }
            },
            {
                "@type": "Question",
                "name": "How is cargo tracked during the 1,230 km journey from Delhi to Jamtara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Every long-haul container is equipped with digital GPS satellite tracking. Our 24/7 central tracking team provides daily milestone updates across UP, Bihar, and Jharkhand highway checkpoints."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="del2jam-hero">
    <div class="container">
        <div class="del2jam-badge-strip">
            <span class="del2jam-badge">&#10003; 1,230 KM Long-Haul Express Corridor</span>
            <span class="del2jam-badge">&#10003; Complete Delhi NCR Doorstep Pickup</span>
            <span class="del2jam-badge">&#10003; Dual-Driver 48&ndash;72 Hr Delivery</span>
            <span class="del2jam-badge">&#10003; All-Weather Sealed Containers</span>
        </div>
        <h1>Delhi to Jamtara Packers and Movers</h1>
        <p class="lead">
            Moving your home, luxury automobile, or corporate branch from the National Capital Region to Jamtara or Mihijam? Shree Ashirwad Packers and Movers delivers reliable, end-to-end long-distance relocation across the 1,230 km expressway corridor. We provide 5-layer heavy protective packing, tamper-proof closed container trucks, genuine IBA-compliant corporate bills, and dedicated transit insurance.
        </p>
        <div class="del2jam-cta-group">
            <a href="tel:+918409531615" class="del2jam-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="#del2jam-pricing" class="del2jam-btn-secondary">
                View Delhi Rates Table &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Route Overview & Long-Haul Transit Metrics -->
<section class="del2jam-section">
    <div class="container">
        <div class="del2jam-heading-center">
            <h2>Delhi to Jamtara Long-Haul Highway Profile</h2>
            <p>
                Navigating over 1,230 km across Delhi NCR, Uttar Pradesh, Bihar, and Jharkhand requires professional logistics management, dual-driver shifts, highway toll passes, and rigorous cargo stabilization.
            </p>
        </div>

        <div class="del2jam-route-table-wrapper">
            <table class="del2jam-table">
                <thead>
                    <tr>
                        <th>Highway Factor</th>
                        <th>Corridor Specifications</th>
                        <th>Shree Ashirwad Assurance</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Total Highway Distance</strong></td>
                        <td>~1,230 Kilometers via Yamuna Expressway &amp; NH-19 (Grand Trunk Corridor)</td>
                        <td>High-speed multi-lane expressways with minimal bumps</td>
                    </tr>
                    <tr>
                        <td><strong>Expected Transit Timeline</strong></td>
                        <td>48 to 72 hours for dedicated container trucks; 4 to 6 days for shared part-load</td>
                        <td>Guaranteed on-time arrival with real-time waypoint reporting</td>
                    </tr>
                    <tr>
                        <td><strong>Key Highway Hubs</strong></td>
                        <td>Delhi &rarr; Agra &rarr; Kanpur &rarr; Prayagraj &rarr; Varanasi &rarr; Sasaram &rarr; Barhi &rarr; Jamtara</td>
                        <td>GPS tracking with live status updates at each state border</td>
                    </tr>
                    <tr>
                        <td><strong>Multi-State Regulatory Compliance</strong></td>
                        <td>Delhi, UP, Bihar, and Jharkhand border taxes and commercial e-way bills</td>
                        <td>100% statutory clearance with zero checkpoint detention</td>
                    </tr>
                    <tr>
                        <td><strong>Delhi NCR Pickup Reach</strong></td>
                        <td>Delhi (South, West, East, North), Gurgaon, Noida, Greater Noida, Faridabad, Ghaziabad</td>
                        <td>Elevator packing, society gate clearances, high-floor balcony hoisting</td>
                    </tr>
                    <tr>
                        <td><strong>Jamtara Unloading Locations</strong></td>
                        <td>Jamtara Town, Mihijam, Court Road, Station Road, New Colony, Kundahit, Nala</td>
                        <td>Unloading, furniture reassembly, room setup, debris removal</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- 4 Verified Images Display -->
        <div class="del2jam-img-grid">
            <div class="del2jam-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Waterproof long-haul closed container truck for Delhi to Jamtara relocation">
                <div class="del2jam-img-caption">Dedicated sealed all-weather container trucks engineered for 1,230 km express journeys.</div>
            </div>
            <div class="del2jam-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5-layer packing materials protecting fragile household items for long distance shifting">
                <div class="del2jam-img-caption">Multi-layer bubble wrap, edge guards, and corrugated boxes for glassware and TVs.</div>
            </div>
            <div class="del2jam-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Hydraulic car carrier loading luxury car for Delhi to Jamtara transit">
                <div class="del2jam-img-caption">Covered hydraulic car trailers equipped with wheel lock straps and transit insurance.</div>
            </div>
            <div class="del2jam-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and furniture setup at Jamtara home">
                <div class="del2jam-img-caption">Complete destination unpacking, bed re-assembly, electrical unmounting, and setup support.</div>
            </div>
        </div>
    </div>
</section>

<!-- Core Services Section -->
<section class="del2jam-section del2jam-section-gray">
    <div class="container">
        <div class="del2jam-heading-center">
            <h2>Comprehensive Shifting Services: Delhi NCR to Jamtara</h2>
            <p>
                Whether you are moving household goods from a high-rise in Noida or Gurgaon, transferring corporate IT assets, or relocating after government retirement to Jamtara or Mihijam, our tailored services cover every need.
            </p>
        </div>

        <div class="del2jam-grid-3">
            <div class="del2jam-card">
                <div class="del2jam-card-icon">&#127968;</div>
                <h3>Complete Household Relocation</h3>
                <p>
                    Full-service home shifting covering modular sofas, double beds, wardrobes, refrigerators, washing machines, smart televisions, and breakable glassware. Packaged with multi-layer bubble wrap, thermocol sheets, and heavy-gauge corrugated cartons for maximum safety across the 1,230 km expressway drive.
                </p>
                <ul class="del2jam-checklist">
                    <li>Room-wise structured categorization and tagging</li>
                    <li>Sofa wrapping with anti-dust stretch film</li>
                    <li>Mattress protection using heavy-gauge plastic sleeves</li>
                    <li>Wooden crate packaging for glass dining tables</li>
                </ul>
            </div>

            <div class="del2jam-card">
                <div class="del2jam-card-icon">&#128663;</div>
                <h3>Enclosed Car Carrier &amp; Bike Transport</h3>
                <p>
                    Relocate your sedan, hatchback, SUV, or premium motorcycle from Delhi NCR to Jamtara without adding 1,200+ km of highway wear and tear. We utilize dedicated car transport trailers and custom-fabricated motorcycle cradles with foam padding and wheel locking mechanisms.
                </p>
                <ul class="del2jam-checklist">
                    <li>Enclosed hydraulic carriers protecting against highway gravel</li>
                    <li>Digital inspection report before loading at Delhi NCR</li>
                    <li>Doorstep pickup across Delhi, Gurgaon, and Noida</li>
                    <li>Comprehensive marine transit insurance protection</li>
                </ul>
            </div>

            <div class="del2jam-card">
                <div class="del2jam-card-icon">&#128188;</div>
                <h3>Corporate &amp; Government Transfer Support</h3>
                <p>
                    Smooth relocations for central government ministry employees, defense personnel, bank managers, and IT corporate staff transferring from Delhi NCR to Jamtara and adjoining regional headquarters. We maintain strict business continuity with zero asset loss.
                </p>
                <ul class="del2jam-checklist">
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
<section id="del2jam-pricing" class="del2jam-section">
    <div class="container">
        <div class="del2jam-heading-center">
            <h2>Estimated Delhi NCR to Jamtara Relocation Pricing</h2>
            <p>
                We believe in 100% fair, transparent pricing with no hidden surprises, toll markups, or sudden surcharge demands on moving day.
            </p>
        </div>

        <div class="del2jam-route-table-wrapper">
            <table class="del2jam-table">
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
                        <td><strong>1 RK / 1 BHK Small Apartment</strong></td>
                        <td>14 Ft Dedicated Container / Part-Load Shared</td>
                        <td>&#8377; 5,000 &ndash; 7,500</td>
                        <td><strong>&#8377; 16,000 &ndash; 26,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Standard Family Home</strong></td>
                        <td>17 Ft / 19 Ft Dedicated Closed Container</td>
                        <td>&#8377; 7,500 &ndash; 11,000</td>
                        <td><strong>&#8377; 24,000 &ndash; 38,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Spacious Home / Villa</strong></td>
                        <td>22 Ft / 24 Ft Multi-Axle Container Truck</td>
                        <td>&#8377; 11,000 &ndash; 16,000</td>
                        <td><strong>&#8377; 36,000 &ndash; 58,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Bungalow Shifting</strong></td>
                        <td>32 Ft High-Cube Multi-Axle Container</td>
                        <td>&#8377; 15,000 &ndash; 22,000</td>
                        <td><strong>&#8377; 52,000 &ndash; 85,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter Relocation</strong></td>
                        <td>Custom Crate / Secured Two-Wheeler Carrier</td>
                        <td>&#8377; 1,800 &ndash; 2,800</td>
                        <td><strong>&#8377; 4,800 &ndash; 8,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Hatchback / Sedan Car Transport</strong></td>
                        <td>Specialized Covered Car Carrier Trailer</td>
                        <td>&#8377; 2,500 &ndash; 4,000</td>
                        <td><strong>&#8377; 12,500 &ndash; 18,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>SUV / Luxury Car Relocation</strong></td>
                        <td>Enclosed Car Trailer with Full Transit Insurance</td>
                        <td>&#8377; 3,500 &ndash; 5,000</td>
                        <td><strong>&#8377; 15,500 &ndash; 24,000</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.92rem; color: #64748b; text-align: center;">
            * Estimates are indicative and vary based on exact pickup floor in Delhi/Noida/Gurgaon, elevator access, total packing material volume, and declared insurance value. Toll taxes and state permits are explicitly broken down.
        </p>
    </div>
</section>

<!-- Step-by-Step Long-Haul Relocation Workflow -->
<section class="del2jam-section">
    <div class="container">
        <div class="del2jam-heading-center">
            <h2>Our 5-Stage Long-Distance Moving Framework</h2>
            <p>
                To provide complete peace of mind across 1,230 kilometers, Shree Ashirwad Packers and Movers implements a standardized five-stage inter-state execution framework designed specifically for long-distance relocations.
            </p>
        </div>

        <div class="del2jam-grid-3">
            <div class="del2jam-card">
                <div class="del2jam-card-icon">&#128221;</div>
                <h3>1. Pre-Move Survey &amp; Itemized Estimation</h3>
                <p>
                    Our relocation supervisor conducts an in-depth on-site survey at your Delhi NCR home or a virtual video assessment. We catalog every piece of furniture, electronic gadget, fragile kitchen glassware, and vehicle to compute precise cubic volume, required packaging supplies, container capacity, and an all-inclusive written cost quote.
                </p>
            </div>
            <div class="del2jam-card">
                <div class="del2jam-card-icon">&#128230;</div>
                <h3>2. Professional Packing &amp; Disassembly</h3>
                <p>
                    On moving day, our uniformed, background-checked packing crew arrives equipped with virgin materials. Modular beds, wardrobes, and TV panels are systematically unbolted. Heavy appliances are cocooned in multiple layers of shock-absorbing bubble wrap, edge guards, and waterproof shrink film to withstand highway transit.
                </p>
            </div>
            <div class="del2jam-card">
                <div class="del2jam-card-icon">&#128666;</div>
                <h3>3. Scientific Container Loading &amp; Lashing</h3>
                <p>
                    Goods are loaded into our sealed, waterproof container trucks following a strict weight distribution formula. Heavier wooden furniture and appliances form the base layer, while lightweight cartons and delicate articles rest securely on top. All cargo is tethered with industrial ratchet tie-down straps to stop movement.
                </p>
            </div>
            <div class="del2jam-card">
                <div class="del2jam-card-icon">&#128678;</div>
                <h3>4. Monitored Long-Haul Highway Transit</h3>
                <p>
                    Our experienced long-haul drivers operate directly along the Yamuna Expressway and NH-19 via Agra, Kanpur, Prayagraj, and Varanasi into Jamtara. The vehicle is tracked via real-time satellite GPS, and customer support provides timely updates at major highway checkposts and toll junctions without unnecessary stops.
                </p>
            </div>
            <div class="del2jam-card">
                <div class="del2jam-card-icon">&#128295;</div>
                <h3>5. Destination Setup &amp; Debris Removal</h3>
                <p>
                    Upon arrival at your new residence in Jamtara or Mihijam, our team unloads each carton into its designated room, reassembles beds and dining tables, assists with major appliance placement, and removes all discarded packing cartons and plastic waste, leaving your new home ready for comfortable living.
                </p>
            </div>
            <div class="del2jam-card">
                <div class="del2jam-card-icon">&#128737;</div>
                <h3>Comprehensive Transit Risk Coverage</h3>
                <p>
                    Every consignment moving across the 1,230 km interstate corridor can be covered under our comprehensive transit insurance policy. In the improbable event of highway accidents, fire, or external impacts, your claims are settled expeditiously through our partnering nationalized insurance providers.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Packing Standards Section -->
<section class="del2jam-section del2jam-section-gray">
    <div class="container">
        <div class="del2jam-heading-center">
            <h2>5-Layer Protective Packaging Standards</h2>
            <p>
                Highway conditions across a 1,230 km inter-state journey demand robust packing standards. We utilize only virgin, heavy-duty packing supplies tailored to protect every category of household asset.
            </p>
        </div>

        <div class="del2jam-grid-3">
            <div class="del2jam-card">
                <div class="del2jam-card-icon">1</div>
                <h3>Primary Moisture-Proof Film</h3>
                <p>
                    Every polished wooden surface, leather sofa, and electronic unit is first swathed in high-density foam sheeting and anti-static cling film to seal out ambient moisture, weather changes, and fine road dust.
                </p>
            </div>
            <div class="del2jam-card">
                <div class="del2jam-card-icon">2</div>
                <h3>Shock-Absorbing Bubble Cushioning</h3>
                <p>
                    Heavy-duty 75-micron air bubble wrapping is wound in overlapping concentric layers around TVs, refrigerators, washing machines, microwaves, and glassware sets, providing shock dampening against road bumps.
                </p>
            </div>
            <div class="del2jam-card">
                <div class="del2jam-card-icon">3</div>
                <h3>Hardened Corner Protectors</h3>
                <p>
                    Corner impacts during elevator handling and truck loading pose the greatest risk to premium furniture. We apply hardened L-shaped cardboard and foam edge protectors to every table, mirror, and cabinet corner.
                </p>
            </div>
            <div class="del2jam-card">
                <div class="del2jam-card-icon">4</div>
                <h3>Heavy-Duty 7-Ply Cartons</h3>
                <p>
                    Smaller household items, cookware, clothes, books, and decorative artifacts are packed into brand-new 7-ply heavy kraft cartons, labeled clearly by room and contents for seamless unpacking at Jamtara.
                </p>
            </div>
            <div class="del2jam-card">
                <div class="del2jam-card-icon">5</div>
                <h3>Sealed Weather-Tight Container</h3>
                <p>
                    Inside our closed container trucks, goods are secured using heavy-duty nylon ratchet cargo straps and air dunnage bags, preventing lateral slippage or tumbling while traversing national highways.
                </p>
            </div>
            <div class="del2jam-card">
                <div class="del2jam-card-icon">&#9733;</div>
                <h3>Zero-Subcontracting Guarantee</h3>
                <p>
                    Unlike brokers who outsource consignments to third-party local tempo operators, our in-house vetted crew handles your move from the initial packing in Delhi NCR to the final assembly in Jamtara.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Localities Covered: Delhi NCR & Jamtara -->
<section class="del2jam-section">
    <div class="container">
        <div class="del2jam-heading-center">
            <h2>Complete Pickup in Delhi NCR &amp; Delivery in Jamtara</h2>
            <p>
                Our logistical operations bridge the entire National Capital Region to all urban and rural hubs of Jamtara district.
            </p>
        </div>

        <div class="del2jam-grid-3">
            <div class="del2jam-card">
                <h3>Delhi NCR Pickup Network</h3>
                <p>
                    Full doorstep packing, balcony hoisting, and loading service available throughout:
                </p>
                <ul class="del2jam-checklist">
                    <li><strong>South &amp; Central Delhi:</strong> Saket, Vasant Kunj, Hauz Khas, Greater Kailash, Chanakyapuri</li>
                    <li><strong>West &amp; North Delhi:</strong> Dwarka, Janakpuri, Rohini, Pitampura, Model Town</li>
                    <li><strong>Gurugram (Gurgaon):</strong> DLF Phase 1-5, Cyber City, Golf Course Road, Sohna Road</li>
                    <li><strong>Noida &amp; Greater Noida:</strong> Sector 15, 18, 62, 76, 137, Pari Chowk, Knowledge Park</li>
                    <li><strong>Ghaziabad &amp; Faridabad:</strong> Indirapuram, Vaishali, Vasundhara, Raj Nagar, NIT</li>
                </ul>
            </div>

            <div class="del2jam-card">
                <h3>Jamtara Delivery Network</h3>
                <p>
                    Seamless unloading, placement, and unpacking across Jamtara and adjoining zones:
                </p>
                <ul class="del2jam-checklist">
                    <li><strong>Jamtara City:</strong> Court Road, Station Road, Kayasthapada, Main Bazaar</li>
                    <li><strong>Mihijam:</strong> Chittaranjan Gate, Kangoi, New Colony, Ghoshpara</li>
                    <li><strong>Sub-Divisions:</strong> Karmatanr, Nala, Kundahit, Narayanpur</li>
                    <li><strong>Industrial Environs:</strong> Jamtara Bypass, Maithon Dam borders</li>
                    <li><strong>Neighboring Districts:</strong> Jasidih, Madhupur, and Sarath connecting hubs</li>
                </ul>
            </div>

            <div class="del2jam-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    With more than a decade of proven leadership along the Delhi to Eastern India inter-state corridor, we guarantee satisfaction:
                </p>
                <ul class="del2jam-checklist">
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
<section class="del2jam-section del2jam-section-gray">
    <div class="container">
        <div class="del2jam-heading-center">
            <h2>Frequently Asked Questions: Delhi to Jamtara Movers</h2>
            <p>
                Essential questions and answers regarding long-distance shifting from Delhi NCR to Jamtara with Shree Ashirwad Packers and Movers.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="del2jam-faq-item">
                <h3>What is the total road distance and delivery time from Delhi NCR to Jamtara?</h3>
                <p>
                    The highway distance from Delhi NCR to Jamtara is approximately 1,230 km via the Yamuna Expressway and NH-19 (via Agra, Kanpur, Prayagraj, Varanasi, and Jharkhand entry). Dedicated express container trucks deliver door-to-door within 48 to 72 hours with dual-driver shifts.
                </p>
            </div>

            <div class="del2jam-faq-item">
                <h3>What are the shifting charges from Delhi, Gurgaon, or Noida to Jamtara?</h3>
                <p>
                    Long-distance shifting charges range between Rs 16,000 and 26,000 for 1 BHK apartments, Rs 24,000 and 38,000 for standard 2 BHK homes, and Rs 36,000 and 58,000 for 3 BHK bungalows, inclusive of multi-layer packing, toll taxes, and transit insurance.
                </p>
            </div>

            <div class="del2jam-faq-item">
                <h3>Do you cover all localities across Delhi, Noida, Gurgaon, and Ghaziabad?</h3>
                <p>
                    Yes, our pickup fleet services the entire National Capital Region including South Delhi, Dwarka, Rohini, Gurugram (DLF, Sohna Road), Noida (Sectors 18, 62, 137), Greater Noida, Faridabad, and Ghaziabad (Indirapuram, Vaishali).
                </p>
            </div>

            <div class="del2jam-faq-item">
                <h3>Can I transport my car or bike safely from Delhi to Jamtara?</h3>
                <p>
                    Yes, we operate specialized hydraulic enclosed car carriers and custom motorcycle crates equipped with wheel locking straps and transit insurance to ensure zero accidental damage across the 1,230 km long-haul highway transit.
                </p>
            </div>

            <div class="del2jam-faq-item">
                <h3>Do you provide claimable GST invoices for corporate and central government transfers?</h3>
                <p>
                    Absolutely. We supply 100% genuine GST-compliant invoices, money receipts, consignor-consignee bilty notes, and IBA-approved documentation valid for government, PSU, defense, railway, and bank transfer reimbursements.
                </p>
            </div>

            <div class="del2jam-faq-item">
                <h3>How is cargo tracked during the 1,230 km journey from Delhi to Jamtara?</h3>
                <p>
                    Every long-haul container is equipped with digital GPS satellite tracking. Our 24/7 central tracking team provides daily milestone updates across UP, Bihar, and Jharkhand highway checkpoints.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Footer Strip -->
<section style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 60px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Book Your Delhi NCR to Jamtara Move with Shree Ashirwad
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Contact our long-haul moving desk for an all-inclusive quotation, free home survey, and guaranteed delivery schedule.
        </p>
        <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
            <a href="tel:+918409531615" style="background: #f97316; color: #ffffff; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
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
