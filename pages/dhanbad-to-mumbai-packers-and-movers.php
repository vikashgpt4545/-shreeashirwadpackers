<?php
/**
 * Page Name: Dhanbad to Mumbai Packers and Movers
 * Route Slug: dhanbad-to-mumbai-packers-and-movers
 * Description: Premier long-distance interstate household shifting, luxury vehicle carrier, and corporate relocation services connecting Dhanbad to Mumbai MMR.
 * Focus Keywords: dhanbad to mumbai packers and movers, packers and movers dhanbad to mumbai, house shifting dhanbad to mumbai, car carrier dhanbad to mumbai, bike transport dhanbad to mumbai, household moving dhanbad mumbai
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Dhanbad to Mumbai Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Safe Dhanbad to Mumbai packers and movers. 1750 km interstate transit, 5-layer packing, corporate transfer bills, dedicated car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/dhanbad-to-mumbai-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="dhanbad to mumbai packers and movers, packers and movers dhanbad to mumbai, house shifting dhanbad to mumbai, car carrier dhanbad to mumbai, bike transport dhanbad to mumbai, household moving dhanbad mumbai">
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

    <!-- Scoped CSS for Route 13 (Dhanbad to Mumbai) -->
    <style>
        :root {
            --dhn2mum-primary: #0c4a6e;
            --dhn2mum-secondary: #0284c7;
            --dhn2mum-accent: #0284c7;
            --dhn2mum-accent-light: #e0f2fe;
            --dhn2mum-dark: #0f172a;
            --dhn2mum-gray-bg: #f8fafc;
            --dhn2mum-border: #e2e8f0;
            --dhn2mum-shadow: 0 10px 25px -5px rgba(12, 74, 110, 0.08), 0 8px 10px -6px rgba(12, 74, 110, 0.04);
        }

        .dhn2mum-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(12, 74, 110, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .dhn2mum-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .dhn2mum-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .dhn2mum-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .dhn2mum-badge {
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

        .dhn2mum-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .dhn2mum-btn-primary {
            background: linear-gradient(135deg, #0284c7 0%, #0369a1 100%);
            color: #ffffff;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 14px rgba(2, 132, 199, 0.35);
            transition: all 0.3s ease;
        }

        .dhn2mum-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(2, 132, 199, 0.45);
            color: #ffffff;
        }

        .dhn2mum-btn-secondary {
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

        .dhn2mum-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .dhn2mum-section {
            padding: 70px 0;
        }

        .dhn2mum-section-gray {
            background-color: var(--dhn2mum-gray-bg);
        }

        .dhn2mum-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .dhn2mum-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--dhn2mum-dark);
            margin-bottom: 14px;
        }

        .dhn2mum-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .dhn2mum-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .dhn2mum-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 36px;
            align-items: center;
        }

        .dhn2mum-grid-4 {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 24px;
        }

        .dhn2mum-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--dhn2mum-border);
            padding: 30px;
            box-shadow: var(--dhn2mum-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .dhn2mum-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(12, 74, 110, 0.12);
        }

        .dhn2mum-card-icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            background: var(--dhn2mum-accent-light);
            color: var(--dhn2mum-accent);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .dhn2mum-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--dhn2mum-dark);
            margin-bottom: 12px;
        }

        .dhn2mum-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
        }

        .dhn2mum-table-container {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--dhn2mum-border);
            overflow-x: auto;
            box-shadow: var(--dhn2mum-shadow);
            margin: 35px 0;
        }

        .dhn2mum-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
        }

        .dhn2mum-table th {
            background: #0f172a;
            color: #ffffff;
            font-weight: 700;
            padding: 16px 20px;
            font-size: 0.98rem;
        }

        .dhn2mum-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--dhn2mum-border);
            color: #334155;
            font-size: 0.95rem;
        }

        .dhn2mum-table tr:last-child td {
            border-bottom: none;
        }

        .dhn2mum-table tr:hover td {
            background-color: #f1f5f9;
        }

        .dhn2mum-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        .dhn2mum-checklist li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            color: #334155;
            font-size: 0.98rem;
            line-height: 1.6;
        }

        .dhn2mum-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #10b981;
            font-weight: 800;
            font-size: 1.1rem;
        }

        .dhn2mum-img-wrap {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--dhn2mum-shadow);
        }

        .dhn2mum-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .dhn2mum-img-wrap:hover img {
            transform: scale(1.03);
        }

        .dhn2mum-faq-item {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--dhn2mum-border);
            padding: 24px;
            margin-bottom: 16px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }

        .dhn2mum-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--dhn2mum-dark);
            margin-bottom: 10px;
        }

        .dhn2mum-faq-item p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 991px) {
            .dhn2mum-grid-3, .dhn2mum-grid-4 {
                grid-template-columns: repeat(2, 1fr);
            }
            .dhn2mum-grid-2 {
                grid-template-columns: 1fr;
            }
            .dhn2mum-hero h1 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 640px) {
            .dhn2mum-grid-3, .dhn2mum-grid-4 {
                grid-template-columns: 1fr;
            }
            .dhn2mum-hero {
                padding: 60px 0 45px;
            }
            .dhn2mum-hero h1 {
                font-size: 1.85rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Dhanbad to Mumbai",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 18,000 - 68,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Katras Road, Matkuria",
            "addressLocality": "Dhanbad",
            "addressRegion": "Jharkhand",
            "postalCode": "826001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.7957,
            "longitude": 86.4304
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Dhanbad"
            },
            {
                "@type": "City",
                "name": "Mumbai"
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
            "name": "Mumbai, Maharashtra"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Dhanbad to Mumbai Long-Distance Relocation",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Dhanbad to Mumbai Household Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Dhanbad to Mumbai Car Carrier & Bike Transport"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Corporate Banking & Shipping Executive Moving Documentation"
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
                "name": "Dhanbad to Mumbai Route",
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
                "name": "What is the driving distance and transit timeline from Dhanbad to Mumbai?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Dhanbad and Mumbai is approximately 1,750 km via NH-19, NH-30, and the newly developed Samruddhi Mahamarg expressway corridor. Dedicated closed container vehicles reach Mumbai in 4 to 5 days."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Dhanbad to Mumbai?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Shifting costs range from Rs 16,000 to 27,000 for 1 BHK apartments, Rs 25,000 to 44,000 for 2 BHK homes, and Rs 38,000 to 68,000 for 3 BHK residences, inclusive of 5-layer packing, container freight, toll taxes, loading, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable GST invoices for corporate bank and PSU transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers provides 100% genuine GST invoices, itemized inventory sheets, consignment notes (bilty), and IBA-compliant money receipts accepted by public sector banks, financial institutions, and multinational corporations in Mumbai."
                }
            },
            {
                "@type": "Question",
                "name": "How are cars and two-wheelers transported to Mumbai?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Vehicles are safely transported in enclosed hydraulic car carrier trailers and custom wooden motorcycle crates with wheel chocks, security straps, and comprehensive transit risk insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas across Mumbai MMR do you deliver to?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deliver across all Mumbai Metropolitan Region sectors including South Mumbai, Bandra, Andheri, Powai, Borivali, Thane West, Navi Mumbai (Vashi, Nerul, Kharghar), and Mira Road."
                }
            },
            {
                "@type": "Question",
                "name": "Is comprehensive transit risk insurance available for the entire journey?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide comprehensive transit risk insurance covering unexpected road hazards, natural calamities, and external transit impacts with hassle-free claim assistance."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="dhn2mum-hero">
    <div class="container">
        <div class="dhn2mum-badge-strip">
            <span class="dhn2mum-badge">&#9733; 1,750 KM Interstate Moving Specialist</span>
            <span class="dhn2mum-badge">&#128666; Sealed Weatherproof Closed Containers</span>
            <span class="dhn2mum-badge">&#128196; 100% Corporate Claim Invoices</span>
            <span class="dhn2mum-badge">&#128338; 4 to 5 Days Guaranteed Delivery</span>
        </div>
        <h1>Dhanbad to Mumbai Packers and Movers</h1>
        <p class="lead">
            Premium, reliable, and insured interstate household shifting, car carrier, and corporate relocation services from Dhanbad to Mumbai MMR. Enjoy 5-layer export packaging, dedicated sealed containers, real-time satellite GPS tracking, and complete setup at your new Maharashtra home.
        </p>
        <div class="dhn2mum-cta-group">
            <a href="tel:+918409531615" class="dhn2mum-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="dhn2mum-btn-secondary">
                Request Interstate Moving Quote &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Route Overview Section -->
<section class="dhn2mum-section">
    <div class="container">
        <div class="dhn2mum-grid-2">
            <div>
                <span style="color: var(--dhn2mum-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Connecting Coal Capital to Financial Capital</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--dhn2mum-dark); margin: 10px 0 20px;">
                    Safe Interstate Moving Connecting Dhanbad to Mumbai
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Moving your household, luxury vehicle, or corporate possessions across 1,750 km from Dhanbad to Mumbai links Eastern India&rsquo;s coal capital with the financial nerve center of the nation. Whether transferring for executive promotions at corporate headquarters in Nariman Point or BKC, or relocating your family to modern high-rise communities in Thane, Navi Mumbai, or Powai, precision moving is essential.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    At <strong>Shree Ashirwad Packers and Movers</strong>, we possess over a decade of specialized expertise in long-haul interstate logistics. We provide dedicated closed-container transport, eliminating common risks such as mid-transit transshipment, cargo swapping, and exposure to adverse highway weather.
                </p>
                <ul class="dhn2mum-checklist">
                    <li>Doorstep pickup across all Dhanbad localities including Bank More, Saraidhela, and Hirapur</li>
                    <li>Export-grade 5-layer packing protocol designed for 1,750 km interstate highway vibration</li>
                    <li>Direct sealed container trucks with dedicated locks and zero transshipment</li>
                    <li>Comprehensive room-by-room delivery, unpacking, and furniture setup across Mumbai MMR</li>
                </ul>
            </div>
            <div class="dhn2mum-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dhanbad to Mumbai Interstate Container Moving" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Core Shifting Services Grid -->
<section class="dhn2mum-section dhn2mum-section-gray">
    <div class="container">
        <div class="dhn2mum-heading-center">
            <h2>Comprehensive Shifting Services: Dhanbad to Mumbai</h2>
            <p>
                Customized relocation packages engineered for corporate executives, banking officers, families, and automobile owners.
            </p>
        </div>

        <div class="dhn2mum-grid-3">
            <div class="dhn2mum-card">
                <div class="dhn2mum-card-icon">&#127968;</div>
                <h3>Complete Home Relocation</h3>
                <p>
                    Full packing of furniture, appliances, crockery, wardrobes, and electronics using heavy-gauge cartons and multi-ply bubble wrap. Safely delivered to your new home in Mumbai.
                </p>
            </div>
            <div class="dhn2mum-card">
                <div class="dhn2mum-card-icon">&#128663;</div>
                <h3>Enclosed Car Transport</h3>
                <p>
                    Long-distance automobile carrier trailers equipped with hydraulic ramps and wheel clamps to relocate sedans, hatchbacks, and luxury SUVs without highway tire wear or stone-chip damage.
                </p>
            </div>
            <div class="dhn2mum-card">
                <div class="dhn2mum-card-icon">&#127949;</div>
                <h3>Two-Wheeler Bike Shipping</h3>
                <p>
                    Motorcycles and scooters packed in sturdy wooden frames and high-density foam wrapping, loaded securely inside enclosed container trailers for damage-free transit.
                </p>
            </div>
            <div class="dhn2mum-card">
                <div class="dhn2mum-card-icon">&#128188;</div>
                <h3>Corporate &amp; Bank Transfer Billing</h3>
                <p>
                    100% genuine GST-compliant invoices, packing lists, consignment notes (bilty), and IBA-approved documentation valid for reimbursement across all Mumbai financial and corporate firms.
                </p>
            </div>
            <div class="dhn2mum-card">
                <div class="dhn2mum-card-icon">&#128230;</div>
                <h3>Part Load &amp; Single Room Moves</h3>
                <p>
                    Cost-effective consolidated container options for students and young corporate professionals moving with limited luggage, books, and home workstations.
                </p>
            </div>
            <div class="dhn2mum-card">
                <div class="dhn2mum-card-icon">&#128737;</div>
                <h3>All-Risk Interstate Insurance</h3>
                <p>
                    Comprehensive optional transit insurance policy covering accidental damages, road perils, and external impacts with transparent claim settlement support.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Packaging Excellence -->
<section class="dhn2mum-section">
    <div class="container">
        <div class="dhn2mum-grid-2">
            <div class="dhn2mum-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Five-Layer Interstate Household Packing Dhanbad to Mumbai" loading="lazy">
            </div>
            <div>
                <span style="color: var(--dhn2mum-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Export Quality Packaging</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--dhn2mum-dark); margin: 10px 0 20px;">
                    Five-Tier Packaging Protocol for 1,750 KM Long-Haul Transit
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Interstate transit covering 1,750 kilometers across diverse terrain and high-speed expressways requires uncompromising packing integrity. Substandard materials inevitably lead to surface chafing and internal shock damage.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Our trained packaging team implements a disciplined five-tier material shield:
                </p>
                <ul class="dhn2mum-checklist">
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
<section class="dhn2mum-section dhn2mum-section-gray">
    <div class="container">
        <div class="dhn2mum-heading-center">
            <h2>Dhanbad to Mumbai Shifting Costs &amp; Price Estimates</h2>
            <p>
                Transparent, itemized pricing for long-distance relocations. All estimates include packing labor, materials, interstate road tolls, container transport, and unloading.
            </p>
        </div>

        <div class="dhn2mum-table-container">
            <table class="dhn2mum-table">
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
                        <td>&#8377; 4,000 - 6,200</td>
                        <td>&#8377; 14,000 - 19,800</td>
                        <td><strong>&#8377; 18,000 - 26,000</strong></td>
                        <td>4 - 5 Days</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>&#8377; 5,500 - 8,500</td>
                        <td>&#8377; 18,500 - 26,500</td>
                        <td><strong>&#8377; 24,000 - 35,000</strong></td>
                        <td>4 - 5 Days</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential Home</strong></td>
                        <td>&#8377; 7,500 - 12,000</td>
                        <td>&#8377; 25,500 - 37,000</td>
                        <td><strong>&#8377; 33,000 - 49,000</strong></td>
                        <td>4 - 5 Days</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Large Flat / Villa</strong></td>
                        <td>&#8377; 10,500 - 16,500</td>
                        <td>&#8377; 34,500 - 51,500</td>
                        <td><strong>&#8377; 45,000 - 68,000</strong></td>
                        <td>5 - 6 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle Transport</strong></td>
                        <td>&#8377; 1,200 - 1,800</td>
                        <td>&#8377; 4,800 - 7,200</td>
                        <td><strong>&#8377; 6,000 - 9,000</strong></td>
                        <td>4 - 6 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Car Transport (Sedan/SUV)</strong></td>
                        <td>&#8377; 2,000 - 3,000</td>
                        <td>&#8377; 14,500 - 22,000</td>
                        <td><strong>&#8377; 16,500 - 25,000</strong></td>
                        <td>5 - 7 Days</td>
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
<section class="dhn2mum-section">
    <div class="container">
        <div class="dhn2mum-grid-2">
            <div>
                <span style="color: var(--dhn2mum-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Interstate Vehicle Shipping</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--dhn2mum-dark); margin: 10px 0 20px;">
                    Enclosed Car Carrier &amp; Sturdy Bike Transport to Mumbai
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Driving 1,750 kilometers through national highways involves extreme physical exhaustion, heavy toll charges, and significant vehicle depreciation. Our dedicated automobile carriers provide an effortless and safe solution.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    We conduct thorough pre-loading inspections and ensure your automobile is safely anchored inside our closed carrier trucks:
                </p>
                <ul class="dhn2mum-checklist">
                    <li>Detailed photographic inspection document noting existing condition and odometer readings</li>
                    <li>Wheel stoppers and hydraulic security locks preventing any car shifting on highway curves</li>
                    <li>Double-cushioned motorcycle crating with bubble wrap around mirrors, headlights, and body panels</li>
                    <li>Direct delivery to your apartment complex or villa anywhere in Mumbai MMR</li>
                </ul>
            </div>
            <div class="dhn2mum-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Dhanbad to Mumbai Car Carrier Transport" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Highway Logistics Section -->
<section class="dhn2mum-section dhn2mum-section-gray">
    <div class="container">
        <div class="dhn2mum-heading-center">
            <h2>Interstate Highway Logistics &amp; Travel Corridor</h2>
            <p>
                Proven national highway corridors ensure reliable delivery times and smooth transit across state lines.
            </p>
        </div>

        <div class="dhn2mum-grid-3">
            <div class="dhn2mum-card">
                <div class="dhn2mum-card-icon">&#128506;</div>
                <h3>Primary Route via Nagpur &amp; Samruddhi Corridor</h3>
                <p>
                    Departing Dhanbad along NH-19 through Barhi and Bagodar, our trucks proceed through Varanasi, Jabalpur, and Nagpur, joining the high-speed Hindu Hrudaysamrat Balasaheb Thackeray Maharashtra Samruddhi Mahamarg into Thane and Mumbai. Total distance is roughly 1,750 km covered in 4 to 5 days.
                </p>
            </div>
            <div class="dhn2mum-card">
                <div class="dhn2mum-card-icon">&#128678;</div>
                <h3>Alternative Route via Raipur &amp; Nashik</h3>
                <p>
                    During seasonal road maintenance, our fleet operates through Ranchi, Sambalpur, Raipur, and Dhule into Mumbai via Nashik, ensuring continuous movement and avoiding bottleneck delays across the central plateau.
                </p>
            </div>
            <div class="dhn2mum-card">
                <div class="dhn2mum-card-icon">&#128667;</div>
                <h3>Dual-Driver Long-Haul Protocol</h3>
                <p>
                    To guarantee safety and meet schedule commitments, our interstate container trucks travel with two licensed commercial drivers who alternate shifts under active GPS monitoring.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Visual Feature Strip: Destination Setup in Mumbai -->
<section class="dhn2mum-section">
    <div class="container">
        <div class="dhn2mum-grid-2">
            <div class="dhn2mum-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service in Mumbai" loading="lazy">
            </div>
            <div>
                <span style="color: var(--dhn2mum-accent); font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.9rem;">Turnkey Destination Service</span>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: var(--dhn2mum-dark); margin: 10px 0 20px;">
                    Complete Unloading, Assembly &amp; Waste Cleanup in Mumbai
                </h2>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Navigating Mumbai apartment complexes and high-rise condominiums requires experienced handlers familiar with society permissions and service elevator guidelines. Our local teams handle all heavy lifting, unpacking, and setup.
                </p>
                <p style="color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    We ensure a seamless setup experience right from day one:
                </p>
                <ul class="dhn2mum-checklist">
                    <li>Room-by-room placement of all tagged cartons and crates</li>
                    <li>Skilled reassembly of beds, dining tables, wardrobes, and computer desks</li>
                    <li>Assistance in positioning major home appliances like refrigerators and washing machines</li>
                    <li>Complete collection and disposal of packing cartons, bubble wrap, and adhesive tape scraps</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Financial, Maritime & Corporate Relocation Focus -->
<section class="dhn2mum-section dhn2mum-section-gray">
    <div class="container">
        <div class="dhn2mum-heading-center">
            <h2>Financial, Banking &amp; Corporate Relocation Specialization</h2>
            <p>
                Dedicated corporate shifting procedures designed to meet the strict standards of financial executives and multinational firms.
            </p>
        </div>

        <div class="dhn2mum-grid-3">
            <div class="dhn2mum-card">
                <div class="dhn2mum-card-icon">&#128188;</div>
                <h3>Banking &amp; Financial Services Relocations</h3>
                <p>
                    Dhanbad banking officials moving to central administrative offices in Mumbai (Fort, BKC, Lower Parel) receive dedicated door-to-door relocation support with certified packing inventories, approved consignment notes, and GST billing customized for hassle-free corporate reimbursement.
                </p>
            </div>
            <div class="dhn2mum-card">
                <div class="dhn2mum-card-icon">&#9875;</div>
                <h3>Maritime &amp; Shipping Industry Moves</h3>
                <p>
                    We regularly assist personnel transferring to port installations, JNPT, and international shipping agencies based in Navi Mumbai and South Bombay, ensuring timely transit of home goods and personal vehicles.
                </p>
            </div>
            <div class="dhn2mum-card">
                <div class="dhn2mum-card-icon">&#127891;</div>
                <h3>IIT ISM Alumni Corporate Moves</h3>
                <p>
                    Graduates and alumni from IIT (ISM) Dhanbad entering major engineering consultancy, analytics, and software roles across Mumbai enjoy customized, cost-effective moving packages.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Local Coverage Grid -->
<section class="dhn2mum-section">
    <div class="container">
        <div class="dhn2mum-heading-center">
            <h2>Dhanbad Pickup Localities &amp; Mumbai Delivery Coverage</h2>
            <p>
                Full logistical coverage connecting every neighborhood of Dhanbad to all major residential hubs of Mumbai MMR.
            </p>
        </div>

        <div class="dhn2mum-grid-3">
            <div class="dhn2mum-card">
                <h3>Dhanbad Pickup Coverage</h3>
                <p>
                    Prompt doorstep survey, packaging, and loading throughout Dhanbad:
                </p>
                <ul class="dhn2mum-checklist">
                    <li><strong>Commercial &amp; Central:</strong> Bank More, Purana Bazar, Station Road, Dhansar</li>
                    <li><strong>Residential Townships:</strong> Saraidhela, Steel Gate, Big Bazaar Area, Kolakusma</li>
                    <li><strong>Academic &amp; Institutional:</strong> Hirapur, CMPF Colony, IIT ISM Campus, Housing Colony</li>
                    <li><strong>Industrial Belts:</strong> Govindpur, Katras, Jharia, Sindri Township</li>
                </ul>
            </div>

            <div class="dhn2mum-card">
                <h3>Mumbai Delivery Hubs</h3>
                <p>
                    Full room-by-room delivery, unloading, and assembly throughout Mumbai MMR:
                </p>
                <ul class="dhn2mum-checklist">
                    <li><strong>South &amp; Central:</strong> Colaba, Marine Drive, Dadar, Worli, Lower Parel, Prabhadevi</li>
                    <li><strong>Western Suburbs:</strong> Bandra West, Andheri West, Juhu, Goregaon, Kandivali, Borivali</li>
                    <li><strong>Eastern Suburbs:</strong> Powai Hiranandani, Ghatkopar, Mulund, Chembur, Vikhroli</li>
                    <li><strong>Thane &amp; Navi Mumbai:</strong> Thane Ghodbunder Road, Vashi, Nerul, Kharghar, Belapur</li>
                </ul>
            </div>

            <div class="dhn2mum-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    Over a decade of trusted interstate relocation excellence:
                </p>
                <ul class="dhn2mum-checklist">
                    <li>Direct sealed container trucks &ndash; zero mid-way transshipment</li>
                    <li>Trained, permanent staff with police-verified backgrounds</li>
                    <li>100% genuine GST invoices recognized for corporate IT claims</li>
                    <li>Guaranteed 4 to 5 days delivery window with active updates</li>
                    <li>Transparent written quotes with no moving-day surprises</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="dhn2mum-section dhn2mum-section-gray">
    <div class="container">
        <div class="dhn2mum-heading-center">
            <h2>Frequently Asked Questions: Dhanbad to Mumbai Relocation</h2>
            <p>
                Common inquiries regarding transit duration, packaging protocols, insurance coverage, and vehicle transport.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="dhn2mum-faq-item">
                <h3>What is the driving distance and transit timeline from Dhanbad to Mumbai?</h3>
                <p>
                    The highway distance between Dhanbad and Mumbai is approximately 1,750 km via NH-19, NH-30, and the newly developed Samruddhi Mahamarg expressway corridor. Dedicated closed container vehicles reach Mumbai in 4 to 5 days.
                </p>
            </div>

            <div class="dhn2mum-faq-item">
                <h3>What are the shifting charges from Dhanbad to Mumbai?</h3>
                <p>
                    Shifting costs range from Rs 16,000 to 27,000 for 1 BHK apartments, Rs 25,000 to 44,000 for 2 BHK homes, and Rs 38,000 to 68,000 for 3 BHK residences, inclusive of 5-layer packing, container freight, toll taxes, loading, and unloading.
                </p>
            </div>

            <div class="dhn2mum-faq-item">
                <h3>Do you provide claimable GST invoices for corporate bank and PSU transfers?</h3>
                <p>
                    Yes, Shree Ashirwad Packers and Movers provides 100% genuine GST invoices, itemized inventory sheets, consignment notes (bilty), and IBA-compliant money receipts accepted by public sector banks, financial institutions, and multinational corporations in Mumbai.
                </p>
            </div>

            <div class="dhn2mum-faq-item">
                <h3>How are cars and two-wheelers transported to Mumbai?</h3>
                <p>
                    Vehicles are safely transported in enclosed hydraulic car carrier trailers and custom wooden motorcycle crates with wheel chocks, security straps, and comprehensive transit risk insurance.
                </p>
            </div>

            <div class="dhn2mum-faq-item">
                <h3>Which areas across Mumbai MMR do you deliver to?</h3>
                <p>
                    We deliver across all Mumbai Metropolitan Region sectors including South Mumbai, Bandra, Andheri, Powai, Borivali, Thane West, Navi Mumbai (Vashi, Nerul, Kharghar), and Mira Road.
                </p>
            </div>

            <div class="dhn2mum-faq-item">
                <h3>Is comprehensive transit risk insurance available for the entire journey?</h3>
                <p>
                    Yes, we provide comprehensive transit risk insurance covering unexpected road hazards, natural calamities, and external transit impacts with hassle-free claim assistance.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section style="background: linear-gradient(135deg, #0c4a6e 0%, #0f172a 100%); color: #ffffff; padding: 65px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Book Your Dhanbad to Mumbai Move Today
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Contact our moving experts for an accurate written estimate, complimentary pre-move assessment, and guaranteed 4 to 5 day delivery.
        </p>
        <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
            <a href="tel:+918409531615" style="background: #0284c7; color: #ffffff; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
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
