<?php
/**
 * Page Name: Delhi to Dhanbad Packers and Movers
 * Route Slug: delhi-to-dhanbad-packers-and-movers
 * Description: Premier interstate household shifting, central ministry relocations, and vehicle transport connecting Delhi NCR to Dhanbad.
 * Focus Keywords: delhi to dhanbad packers and movers, packers and movers delhi to dhanbad, house shifting delhi to dhanbad, car carrier delhi to dhanbad, bike transport delhi to dhanbad, household moving delhi dhanbad
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Delhi to Dhanbad Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe Delhi to Dhanbad packers and movers. 1180 km direct transit via GT Road NH-19, 5-layer packing, central PSU transfer bills, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/delhi-to-dhanbad-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="delhi to dhanbad packers and movers, packers and movers delhi to dhanbad, house shifting delhi to dhanbad, car carrier delhi to dhanbad, bike transport delhi to dhanbad, household moving delhi dhanbad">
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

    <!-- Scoped CSS for Route 18 (Delhi to Dhanbad) -->
    <style>
        :root {
            --del2dhn-primary: #1e3a8a;
            --del2dhn-secondary: #0284c7;
            --del2dhn-accent: #dc2626;
            --del2dhn-accent-light: #fee2e2;
            --del2dhn-dark: #0f172a;
            --del2dhn-gray-bg: #f8fafc;
            --del2dhn-border: #e2e8f0;
            --del2dhn-shadow: 0 10px 25px -5px rgba(30, 58, 138, 0.08), 0 8px 10px -6px rgba(30, 58, 138, 0.04);
        }

        .del2dhn-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .del2dhn-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .del2dhn-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .del2dhn-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .del2dhn-badge {
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

        .del2dhn-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .del2dhn-btn-primary {
            background: linear-gradient(135deg, #dc2626 0%, #b91c1c 100%);
            color: #ffffff;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 14px rgba(220, 38, 38, 0.35);
            transition: all 0.3s ease;
        }

        .del2dhn-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(220, 38, 38, 0.45);
            color: #ffffff;
        }

        .del2dhn-btn-secondary {
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

        .del2dhn-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .del2dhn-section {
            padding: 70px 0;
        }

        .del2dhn-section-gray {
            background-color: var(--del2dhn-gray-bg);
        }

        .del2dhn-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .del2dhn-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--del2dhn-dark);
            margin-bottom: 14px;
        }

        .del2dhn-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .del2dhn-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .del2dhn-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 36px;
            align-items: center;
        }

        .del2dhn-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .del2dhn-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--del2dhn-border);
            padding: 30px;
            box-shadow: var(--del2dhn-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .del2dhn-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(30, 58, 138, 0.12);
        }

        .del2dhn-card-icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            background: var(--del2dhn-accent-light);
            color: var(--del2dhn-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .del2dhn-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--del2dhn-dark);
            margin-bottom: 12px;
        }

        .del2dhn-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
        }

        .del2dhn-table-container {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--del2dhn-border);
            overflow-x: auto;
            box-shadow: var(--del2dhn-shadow);
            margin: 35px 0;
        }

        .del2dhn-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .del2dhn-table th {
            background: #0f172a;
            color: #ffffff;
            font-weight: 700;
            padding: 16px 20px;
            font-size: 0.98rem;
        }

        .del2dhn-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--del2dhn-border);
            color: #334155;
            font-size: 0.95rem;
        }

        .del2dhn-table tr:last-child td {
            border-bottom: none;
        }

        .del2dhn-table tr:hover td {
            background-color: #f1f5f9;
        }

        .del2dhn-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .del2dhn-checklist li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            color: #334155;
            font-size: 0.98rem;
            line-height: 1.6;
        }

        .del2dhn-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #10b981;
            font-weight: 800;
            font-size: 1.1rem;
        }

        .del2dhn-img-wrap {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--del2dhn-shadow);
        }

        .del2dhn-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .del2dhn-img-wrap:hover img {
            transform: scale(1.03);
        }

        .del2dhn-faq-item {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--del2dhn-border);
            padding: 24px;
            margin-bottom: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .del2dhn-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--del2dhn-dark);
            margin-bottom: 10px;
        }

        .del2dhn-faq-item p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 991px) {
            .del2dhn-grid-3, .del2dhn-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
            .del2dhn-grid-2 {
                grid-template-columns: 1fr;
            }
            .del2dhn-hero h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 640px) {
            .del2dhn-grid-3, .del2dhn-grid-4 {
                grid-template-columns: 1fr;
            }
            .del2dhn-hero {
                padding: 60px 0 45px;
            }
            .del2dhn-hero h1 {
                font-size: 1.85rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Delhi to Dhanbad",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 14,000 - 52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Mahipalpur Bypass, Near IGI Airport",
            "addressLocality": "New Delhi",
            "addressRegion": "Delhi",
            "postalCode": "110037",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.6139,
            "longitude": 77.2090
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Delhi"
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
            "name": "Delhi to Dhanbad Relocation Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Delhi to Dhanbad Household Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Delhi to Dhanbad Car Carrier & Bike Transport"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Central Government Ministry & Coal India Transfer Invoicing"
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
                "name": "Delhi to Dhanbad Route",
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
                "name": "What is the driving distance and transit duration from Delhi to Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Delhi NCR and Dhanbad is approximately 1,180 km along the historic Grand Trunk Road (NH-19 / AH1 corridor via Agra, Kanpur, Prayagraj, Varanasi, and Barhi). Dedicated container vehicles cover this distance in 2 to 3 days."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Delhi to Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Estimated costs range from Rs 14,000 to 22,000 for 1 BHK flats, Rs 20,000 to 34,000 for 2 BHK homes, and Rs 32,000 to 52,000 for 3 BHK villas, covering 5-layer packing, container transport, toll charges, loading, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable GST invoices for Central Government and PSU transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers delivers 100% genuine GST invoices, detailed item inventories, consignment notes (bilty), and IBA-approved money receipts eligible for full government, ministry, and public sector reimbursement."
                }
            },
            {
                "@type": "Question",
                "name": "How are cars and motorcycles transported from Delhi NCR to Dhanbad?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Vehicles are safely transported in enclosed hydraulic car carrier trailers and custom wooden motorcycle crates with wheel chocks, security straps, and comprehensive transit risk insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Delhi NCR and Dhanbad are covered?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Delhi NCR, we cover New Delhi, South Delhi, Dwarka, Rohini, Noida, Greater Noida, Gurgaon, and Ghaziabad. In Dhanbad, we deliver across Bank More, Saraidhela, Hirapur, IIT ISM, Koyla Nagar, Katras, and Govindpur."
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
<section class="del2dhn-hero">
    <div class="container">
        <div class="del2dhn-badge-strip">
            <span class="del2dhn-badge">&#9733; 1,180 KM Interstate Moving Specialist</span>
            <span class="del2dhn-badge">&#128666; Sealed Weatherproof Closed Containers</span>
            <span class="del2dhn-badge">&#128196; Central Ministry &amp; PSU Claim Invoices</span>
            <span class="del2dhn-badge">&#128338; Fast 2 to 3 Days Guaranteed Delivery</span>
        </div>
        <h1>Delhi to Dhanbad Packers and Movers</h1>
        <p class="lead">
            Premium, reliable, and insured interstate household shifting, car carrier, and corporate relocation services from Delhi NCR to Dhanbad. Enjoy 5-layer export packaging, dedicated sealed containers, real-time satellite GPS tracking, and complete setup at your new Jharkhand home.
        </p>
        <div class="del2dhn-cta-group">
            <a href="tel:+918409531615" class="del2dhn-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="del2dhn-btn-secondary">
                Request Interstate Moving Quote &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Route Overview Section -->
<section class="del2dhn-section">
    <div class="container">
        <div class="del2dhn-grid-2">
            <div>
                <span style="color: var(--del2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">From National Capital to Coal Capital</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--del2dhn-dark); margin: 10px 0 20px;">
                    Safe Interstate Moving Connecting Delhi NCR to Dhanbad
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Relocating across 1,180 km from the National Capital Region (Delhi, Noida, Gurgaon, Ghaziabad, Faridabad) to Dhanbad connects the administrative core of India with its principal energy and coal mining capital. This vital interstate route accommodates regular transfers of Central Government ministry officials, Coal India and Ministry of Coal executives, public sector banking managers, IIT ISM faculty, and returning professionals.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    At <strong>Shree Ashirwad Packers and Movers</strong>, we possess over a decade of specialized expertise in long-haul interstate logistics. We provide dedicated closed-container transport, eliminating common risks such as mid-transit transshipment, cargo swapping, and exposure to adverse highway weather.
                </p>
                <ul class="del2dhn-checklist">
                    <li>Doorstep pickup across all Delhi NCR sectors including Dwarka, South Delhi, Noida, and Gurgaon</li>
                    <li>Export-grade 5-layer packing protocol designed for 1,180 km interstate highway vibration</li>
                    <li>Direct sealed container trucks with dedicated locks and zero transshipment</li>
                    <li>Comprehensive room-by-room delivery, unpacking, and furniture setup across Dhanbad</li>
                </ul>
            </div>
            <div class="del2dhn-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Delhi to Dhanbad Interstate Container Moving" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Core Shifting Services Grid -->
<section class="del2dhn-section del2dhn-section-gray">
    <div class="container">
        <div class="del2dhn-heading-center">
            <h2>Comprehensive Shifting Services: Delhi to Dhanbad</h2>
            <p>
                Customized relocation packages engineered for central government personnel, corporate executives, families, and automobile owners.
            </p>
        </div>

        <div class="del2dhn-grid-3">
            <div class="del2dhn-card">
                <div class="del2dhn-card-icon">&#127968;</div>
                <h3>Complete Home Relocation</h3>
                <p>
                    Full packing of furniture, appliances, crockery, wardrobes, and electronics using heavy-gauge cartons and multi-ply bubble wrap. Safely delivered to your new home in Dhanbad.
                </p>
            </div>
            <div class="del2dhn-card">
                <div class="del2dhn-card-icon">&#128663;</div>
                <h3>Enclosed Car Transport</h3>
                <p>
                    Long-distance automobile carrier trailers equipped with hydraulic ramps and wheel clamps to relocate sedans, hatchbacks, and luxury SUVs without highway tire wear or stone-chip damage.
                </p>
            </div>
            <div class="del2dhn-card">
                <div class="del2dhn-card-icon">&#127949;</div>
                <h3>Two-Wheeler Bike Shipping</h3>
                <p>
                    Motorcycles and scooters packed in sturdy wooden frames and high-density foam wrapping, loaded securely inside enclosed container trailers for damage-free transit.
                </p>
            </div>
            <div class="del2dhn-card">
                <div class="del2dhn-card-icon">&#128188;</div>
                <h3>Central Ministry &amp; PSU Billing</h3>
                <p>
                    100% genuine GST-compliant invoices, packing lists, consignment notes (bilty), and IBA-approved documentation valid for reimbursement across all Central Government ministries and PSUs.
                </p>
            </div>
            <div class="del2dhn-card">
                <div class="del2dhn-card-icon">&#128230;</div>
                <h3>Part Load &amp; Single Room Moves</h3>
                <p>
                    Cost-effective consolidated container options for students and young professionals moving with limited luggage, books, and home workstations.
                </p>
            </div>
            <div class="del2dhn-card">
                <div class="del2dhn-card-icon">&#128737;</div>
                <h3>All-Risk Interstate Insurance</h3>
                <p>
                    Comprehensive optional transit insurance policy covering accidental damages, road perils, and external impacts with transparent claim settlement support.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Packaging Excellence -->
<section class="del2dhn-section">
    <div class="container">
        <div class="del2dhn-grid-2">
            <div class="del2dhn-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Five-Layer Interstate Household Packing Delhi to Dhanbad" loading="lazy">
            </div>
            <div>
                <span style="color: var(--del2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Export Quality Packaging</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--del2dhn-dark); margin: 10px 0 20px;">
                    Five-Tier Packaging Protocol for 1,180 KM Long-Haul Transit
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Interstate transit covering nearly 1,200 kilometers along high-speed express corridors requires uncompromising packing integrity. Substandard materials inevitably lead to surface chafing and internal shock damage.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Our trained packaging team implements a disciplined five-tier material shield:
                </p>
                <ul class="del2dhn-checklist">
                    <li><strong>Tier 1 - Anti-Static Cling Film:</strong> Non-static stretch wrap shielding wood finishes, leather upholstery, and fabrics against dirt and humidity.</li>
                    <li><strong>Tier 2 - Air Bubble Cushioning:</strong> Multi-ply air bubble sheets wrapped tightly around LED screens, audio equipment, and kitchen electronics.</li>
                    <li><strong>Tier 3 - Edge Reinforcement:</strong> Heavy corrugated corner pads preventing abrasions and chipping on polished dining tables and wardrobe doors.</li>
                    <li><strong>Tier 4 - 7-Ply Master Cartons:</strong> Heavy-duty corrugated boxes designed to bear stack weight during transport without buckling.</li>
                    <li><strong>Tier 5 - Cargo Lock Strapping:</strong> High-tension ratchet tie-downs securing every carton and crate inside the closed container truck.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Cost & Price Estimates Table -->
<section class="del2dhn-section del2dhn-section-gray">
    <div class="container">
        <div class="del2dhn-heading-center">
            <h2>Delhi to Dhanbad Shifting Costs &amp; Price Estimates</h2>
            <p>
                Transparent, itemized pricing for long-distance relocations. All estimates include packing labor, materials, interstate road tolls, container transport, and unloading.
            </p>
        </div>

        <div class="del2dhn-table-container">
            <table class="del2dhn-table">
                <thead>
                    <tr>
                        <th>Move Type / Household Size</th>
                        <th>Packing Material &amp; Labor</th>
                        <th>Transport / Container Cost</th>
                        <th>Estimated Total (&#8377;)</th>
                        <th>Transit Duration</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 RK / Studio Flat</strong></td>
                        <td>&#8377; 3,500 - 5,200</td>
                        <td>&#8377; 10,500 - 16,800</td>
                        <td><strong>&#8377; 14,000 - 22,000</strong></td>
                        <td>2 - 3 Days</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>&#8377; 4,800 - 7,200</td>
                        <td>&#8377; 15,200 - 21,800</td>
                        <td><strong>&#8377; 20,000 - 29,000</strong></td>
                        <td>2 - 3 Days</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Home</strong></td>
                        <td>&#8377; 6,800 - 10,500</td>
                        <td>&#8377; 20,200 - 29,500</td>
                        <td><strong>&#8377; 27,000 - 40,000</strong></td>
                        <td>2 - 3 Days</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Large Flat / Villa</strong></td>
                        <td>&#8377; 9,500 - 15,000</td>
                        <td>&#8377; 27,500 - 39,000</td>
                        <td><strong>&#8377; 37,000 - 54,000</strong></td>
                        <td>3 - 4 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle Transport</strong></td>
                        <td>&#8377; 1,000 - 1,500</td>
                        <td>&#8377; 3,800 - 5,700</td>
                        <td><strong>&#8377; 4,800 - 7,200</strong></td>
                        <td>2 - 3 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Car Transport (Sedan/SUV)</strong></td>
                        <td>&#8377; 1,800 - 2,800</td>
                        <td>&#8377; 11,200 - 17,200</td>
                        <td><strong>&#8377; 13,000 - 20,000</strong></td>
                        <td>3 - 4 Days</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; color: #64748b; font-size: 0.92rem; margin-top: -10px;">
            * Rates are approximate and depend on volume, floor levels, elevator access, and selected transit insurance value.
        </p>
    </div>
</section>

<!-- Visual Feature Strip: Vehicle Shipping -->
<section class="del2dhn-section">
    <div class="container">
        <div class="del2dhn-grid-2">
            <div>
                <span style="color: var(--del2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Interstate Vehicle Shipping</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--del2dhn-dark); margin: 10px 0 20px;">
                    Enclosed Car Carrier &amp; Sturdy Bike Transport to Dhanbad
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Driving 1,180 kilometers through heavy national expressway traffic involves intense physical fatigue, toll expenses, and excessive vehicle wear. Our dedicated automobile carriers provide an effortless and safe solution.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    We conduct thorough pre-loading inspections and ensure your automobile is safely anchored inside our closed carrier trucks:
                </p>
                <ul class="del2dhn-checklist">
                    <li>Detailed photographic inspection document noting existing condition and odometer readings</li>
                    <li>Wheel stoppers and hydraulic security locks preventing any car shifting on highway curves</li>
                    <li>Double-cushioned motorcycle crating with bubble wrap around mirrors, headlights, and body panels</li>
                    <li>Direct delivery to your apartment complex or villa anywhere in Dhanbad</li>
                </ul>
            </div>
            <div class="del2dhn-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Delhi to Dhanbad Car Carrier Transport" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Highway Logistics Section -->
<section class="del2dhn-section del2dhn-section-gray">
    <div class="container">
        <div class="del2dhn-heading-center">
            <h2>Interstate Highway Logistics &amp; Travel Corridor</h2>
            <p>
                Proven national highway corridors ensure reliable delivery times and smooth transit across state lines.
            </p>
        </div>

        <div class="del2dhn-grid-3">
            <div class="del2dhn-card">
                <div class="del2dhn-card-icon">&#128506;</div>
                <h3>Grand Trunk Road Expressway Route</h3>
                <p>
                    Departing Delhi NCR via Yamuna Expressway or NH-19, our container trucks cruise smoothly through Mathura, Agra, Kanpur, Prayagraj, and Varanasi, crossing into Jharkhand at Chauparan and entering Dhanbad via Barhi and Govindpur. Total distance is 1,180 km covered in 2 to 3 days.
                </p>
            </div>
            <div class="del2dhn-card">
                <div class="del2dhn-card-icon">&#128678;</div>
                <h3>Toll &amp; Border Checkpoint Optimization</h3>
                <p>
                    Equipped with automated FASTag passes and nationwide transit e-way permits, our container vehicles navigate inter-state toll plazas and commercial commercial checkpoints without administrative delays.
                </p>
            </div>
            <div class="del2dhn-card">
                <div class="del2dhn-card-icon">&#128667;</div>
                <h3>Dual-Driver Long-Haul Protocol</h3>
                <p>
                    To guarantee safety and meet schedule commitments, our interstate container trucks travel with two licensed commercial drivers who alternate shifts under active GPS monitoring.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Destination Setup in Dhanbad -->
<section class="del2dhn-section">
    <div class="container">
        <div class="del2dhn-grid-2">
            <div class="del2dhn-img-wrap">
                <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service in Dhanbad" loading="lazy">
            </div>
            <div>
                <span style="color: var(--del2dhn-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Turnkey Destination Service</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--del2dhn-dark); margin: 10px 0 20px;">
                    Complete Unloading, Assembly &amp; Waste Cleanup in Dhanbad
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Arriving in Dhanbad should feel welcoming, not exhausting. Our destination teams take care of all heavy physical lifting, placing your possessions into designated rooms and reassembling key furniture pieces.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    We ensure a seamless setup experience right from day one:
                </p>
                <ul class="del2dhn-checklist">
                    <li>Room-by-room placement of all tagged cartons and crates</li>
                    <li>Skilled reassembly of beds, dining tables, wardrobes, and computer desks</li>
                    <li>Assistance in positioning major home appliances like refrigerators and washing machines</li>
                    <li>Complete collection and disposal of packing cartons, bubble wrap, and adhesive tape scraps</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Central Government & Corporate Specialization -->
<section class="del2dhn-section del2dhn-section-gray">
    <div class="container">
        <div class="del2dhn-heading-center">
            <h2>Central Government &amp; Public Sector Moving Specialization</h2>
            <p>
                Engineered for the specialized shifting requirements of ministry officers, Coal India executives, and academic researchers.
            </p>
        </div>

        <div class="del2dhn-grid-3">
            <div class="del2dhn-card">
                <div class="del2dhn-card-icon">&#127963;</div>
                <h3>Ministry of Coal &amp; Central Ministry Transfers</h3>
                <p>
                    Officers transferring between central secretariats in New Delhi and Coal India / BCCL installations in Dhanbad receive comprehensive relocation support with certified packing lists and GST invoices conforming to Central Civil Services (CCS) guidelines.
                </p>
            </div>
            <div class="del2dhn-card">
                <div class="del2dhn-card-icon">&#127891;</div>
                <h3>IIT (ISM) Faculty &amp; Academic Relocations</h3>
                <p>
                    Faculty members, researchers, and scientific officers relocating from Delhi universities and research institutes to IIT ISM Dhanbad enjoy dedicated domestic moving support with special care for research libraries and instruments.
                </p>
            </div>
            <div class="del2dhn-card">
                <div class="del2dhn-card-icon">&#128196;</div>
                <h3>Corporate Transfer Reimbursement</h3>
                <p>
                    Complete paperwork packages featuring GST-registered invoices, transit receipts, and packing lists structured to satisfy HR reimbursement policies of multinational corporations.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Local Coverage Grid -->
<section class="del2dhn-section">
    <div class="container">
        <div class="del2dhn-heading-center">
            <h2>Delhi NCR Pickup Localities &amp; Dhanbad Delivery Coverage</h2>
            <p>
                Full logistical coverage connecting every neighborhood of Delhi NCR to all major residential hubs of Dhanbad.
            </p>
        </div>

        <div class="del2dhn-grid-3">
            <div class="del2dhn-card">
                <h3>Delhi NCR Pickup Coverage</h3>
                <p>
                    Prompt doorstep survey, packaging, and loading throughout Delhi NCR:
                </p>
                <ul class="del2dhn-checklist">
                    <li><strong>Delhi Prime:</strong> South Extension, Vasant Kunj, Dwarka, Rohini, Janakpuri, Chanakyapuri</li>
                    <li><strong>Noida &amp; Greater Noida:</strong> Sectors 15-137, Noida Expressway, Greater Noida West</li>
                    <li><strong>Gurgaon / Gurugram:</strong> DLF Phases 1-5, Cyber City, Sohna Road, Golf Course Road</li>
                    <li><strong>Ghaziabad &amp; Faridabad:</strong> Indirapuram, Vaishali, Raj Nagar Extension, Sector 15-21</li>
                </ul>
            </div>

            <div class="del2dhn-card">
                <h3>Dhanbad Delivery Hubs</h3>
                <p>
                    Full room-by-room delivery, unloading, and assembly throughout Dhanbad:
                </p>
                <ul class="del2dhn-checklist">
                    <li><strong>Commercial &amp; Central:</strong> Bank More, Purana Bazar, Station Road, Dhansar</li>
                    <li><strong>Residential Townships:</strong> Saraidhela, Steel Gate, Big Bazaar Area, Kolakusma</li>
                    <li><strong>Academic &amp; Institutional:</strong> Hirapur, CMPF Colony, IIT ISM Campus, Housing Colony</li>
                    <li><strong>Industrial Belts:</strong> Govindpur, Katras, Jharia, Sindri Township</li>
                </ul>
            </div>

            <div class="del2dhn-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    Over a decade of trusted interstate relocation excellence:
                </p>
                <ul class="del2dhn-checklist">
                    <li>Direct sealed container trucks &ndash; zero mid-way transshipment</li>
                    <li>Trained, permanent staff with police-verified backgrounds</li>
                    <li>100% genuine GST invoices recognized for corporate IT claims</li>
                    <li>Guaranteed 2 to 3 days delivery window with active updates</li>
                    <li>Transparent written quotes with no moving-day surprises</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="del2dhn-section del2dhn-section-gray">
    <div class="container">
        <div class="del2dhn-heading-center">
            <h2>Frequently Asked Questions: Delhi to Dhanbad Relocation</h2>
            <p>
                Common inquiries regarding transit duration, packaging protocols, insurance coverage, and vehicle transport.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="del2dhn-faq-item">
                <h3>What is the driving distance and transit duration from Delhi to Dhanbad?</h3>
                <p>
                    The highway distance between Delhi NCR and Dhanbad is approximately 1,180 km along the historic Grand Trunk Road (NH-19 / AH1 corridor via Agra, Kanpur, Prayagraj, Varanasi, and Barhi). Dedicated container vehicles cover this distance in 2 to 3 days.
                </p>
            </div>

            <div class="del2dhn-faq-item">
                <h3>What are the shifting charges from Delhi to Dhanbad?</h3>
                <p>
                    Estimated costs range from Rs 14,000 to 22,000 for 1 BHK flats, Rs 20,000 to 34,000 for 2 BHK homes, and Rs 32,000 to 52,000 for 3 BHK villas, covering 5-layer packing, container transport, toll charges, loading, and unloading.
                </p>
            </div>

            <div class="del2dhn-faq-item">
                <h3>Do you provide claimable GST invoices for Central Government and PSU transfers?</h3>
                <p>
                    Yes, Shree Ashirwad Packers and Movers delivers 100% genuine GST invoices, detailed item inventories, consignment notes (bilty), and IBA-approved money receipts eligible for full government, ministry, and public sector reimbursement.
                </p>
            </div>

            <div class="del2dhn-faq-item">
                <h3>How are cars and motorcycles transported from Delhi NCR to Dhanbad?</h3>
                <p>
                    Vehicles are safely transported in enclosed hydraulic car carrier trailers and custom wooden motorcycle crates with wheel chocks, security straps, and comprehensive transit risk insurance.
                </p>
            </div>

            <div class="del2dhn-faq-item">
                <h3>Which areas in Delhi NCR and Dhanbad are covered?</h3>
                <p>
                    In Delhi NCR, we cover New Delhi, South Delhi, Dwarka, Rohini, Noida, Greater Noida, Gurgaon, and Ghaziabad. In Dhanbad, we deliver across Bank More, Saraidhela, Hirapur, IIT ISM, Koyla Nagar, Katras, and Govindpur.
                </p>
            </div>

            <div class="del2dhn-faq-item">
                <h3>Is comprehensive transit risk insurance available?</h3>
                <p>
                    Yes, we offer optional comprehensive transit risk insurance protecting all household furniture, electronics, and vehicles against unexpected road hazards with transparent claim settlement.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 65px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Book Your Delhi to Dhanbad Move Today
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Contact our moving experts for an accurate written estimate, complimentary pre-move assessment, and guaranteed 2 to 3 day delivery.
        </p>
        <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
            <a href="tel:+918409531615" style="background: #dc2626; color: #ffffff; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" style="background: rgba(255,255,255,0.15); color: #ffffff; font-weight: 600; padding: 14px 28px; border-radius: 10px; text-decoration: none; border: 1px solid rgba(255,255,255,0.3);">
                Request Interstate Quote &rarr;
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
