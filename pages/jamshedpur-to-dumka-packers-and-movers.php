<?php
/**
 * Page Name: Jamshedpur to Dumka Packers and Movers
 * Route Slug: jamshedpur-to-dumka-packers-and-movers
 * Description: Reliable household shifting, industrial relocation, and vehicle transport services from Jamshedpur to Dumka via NH-18 & NH-114A.
 * Focus Keywords: jamshedpur to dumka packers and movers, packers and movers jamshedpur to dumka, house shifting jamshedpur to dumka, car carrier jamshedpur to dumka, bike parcel jamshedpur to dumka, household moving jamshedpur dumka
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Jamshedpur to Dumka Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Reliable Jamshedpur to Dumka packers and movers. Safe 285 km transit via NH-18 & NH-114A, 5-layer packing, Tata employee bills, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/jamshedpur-to-dumka-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="jamshedpur to dumka packers and movers, packers and movers jamshedpur to dumka, house shifting jamshedpur to dumka, car carrier jamshedpur to dumka, bike parcel jamshedpur to dumka, household moving jamshedpur dumka">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Jamshedpur">

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

    <!-- Scoped CSS for Route 1 (Jamshedpur to Dumka) -->
    <style>
        :root {
            --jsr2dum-primary: #0f2942;
            --jsr2dum-secondary: #0284c7;
            --jsr2dum-accent: #f59e0b;
            --jsr2dum-accent-light: #fef3c7;
            --jsr2dum-dark: #071728;
            --jsr2dum-gray-bg: #f8fafc;
            --jsr2dum-border: #e2e8f0;
            --jsr2dum-shadow: 0 10px 25px -5px rgba(15, 41, 66, 0.08), 0 8px 10px -6px rgba(15, 41, 66, 0.04);
        }

        .jsr2dum-hero {
            background: linear-gradient(135deg, rgba(7, 23, 40, 0.94) 0%, rgba(15, 41, 66, 0.90) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 0 65px;
            position: relative;
        }

        .jsr2dum-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 20px;
        }

        .jsr2dum-hero p.lead {
            font-size: 1.15rem;
            line-height: 1.7;
            color: #e2e8f0;
            max-width: 820px;
            margin-bottom: 28px;
        }

        .jsr2dum-badge-strip {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 30px;
        }

        .jsr2dum-badge {
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

        .jsr2dum-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            align-items: center;
        }

        .jsr2dum-btn-primary {
            background: linear-gradient(135deg, #f59e0b 0%, #d97706 100%);
            color: #071728;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 10px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 14px rgba(245, 158, 11, 0.35);
            transition: all 0.3s ease;
        }

        .jsr2dum-btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(245, 158, 11, 0.45);
            color: #071728;
        }

        .jsr2dum-btn-secondary {
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

        .jsr2dum-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            color: #ffffff;
        }

        .jsr2dum-section {
            padding: 70px 0;
        }

        .jsr2dum-section-gray {
            background-color: var(--jsr2dum-gray-bg);
        }

        .jsr2dum-heading-center {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .jsr2dum-heading-center h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.25rem;
            font-weight: 800;
            color: var(--jsr2dum-dark);
            margin-bottom: 14px;
        }

        .jsr2dum-heading-center p {
            font-size: 1.05rem;
            color: #64748b;
            line-height: 1.65;
        }

        .jsr2dum-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 28px;
        }

        .jsr2dum-grid-2 {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 36px;
            align-items: center;
        }

        .jsr2dum-card {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--jsr2dum-border);
            padding: 30px;
            box-shadow: var(--jsr2dum-shadow);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .jsr2dum-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(15, 41, 66, 0.12);
        }

        .jsr2dum-card-icon {
            width: 54px;
            height: 54px;
            border-radius: 12px;
            background: var(--jsr2dum-accent-light);
            color: #b45309;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .jsr2dum-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--jsr2dum-dark);
            margin-bottom: 12px;
        }

        .jsr2dum-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
        }

        .jsr2dum-table-container {
            background: #ffffff;
            border-radius: 14px;
            border: 1px solid var(--jsr2dum-border);
            overflow-x: auto;
            box-shadow: var(--jsr2dum-shadow);
            margin: 35px 0;
        }

        .jsr2dum-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }

        .jsr2dum-table th {
            background: #0f2942;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 600;
            letter-spacing: 0.5px;
        }

        .jsr2dum-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--jsr2dum-border);
            color: #334155;
        }

        .jsr2dum-table tr:last-child td {
            border-bottom: none;
        }

        .jsr2dum-table tr:nth-child(even) {
            background-color: #f8fafc;
        }

        .jsr2dum-checklist {
            list-style: none;
            padding: 0;
            margin: 20px 0 0;
        }

        .jsr2dum-checklist li {
            position: relative;
            padding-left: 28px;
            margin-bottom: 12px;
            font-size: 0.96rem;
            color: #334155;
            line-height: 1.6;
        }

        .jsr2dum-checklist li::before {
            content: "\2713";
            position: absolute;
            left: 0;
            top: 0;
            color: #f59e0b;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .jsr2dum-img-wrap {
            border-radius: 14px;
            overflow: hidden;
            box-shadow: var(--jsr2dum-shadow);
            border: 1px solid var(--jsr2dum-border);
        }

        .jsr2dum-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.5s ease;
        }

        .jsr2dum-img-wrap:hover img {
            transform: scale(1.03);
        }

        .jsr2dum-faq-item {
            background: #ffffff;
            border: 1px solid var(--jsr2dum-border);
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 18px;
            box-shadow: var(--jsr2dum-shadow);
        }

        .jsr2dum-faq-item h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.18rem;
            font-weight: 700;
            color: var(--jsr2dum-dark);
            margin-bottom: 10px;
        }

        .jsr2dum-faq-item p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        @media (max-width: 991px) {
            .jsr2dum-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
            .jsr2dum-grid-2 {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 640px) {
            .jsr2dum-grid-3 {
                grid-template-columns: 1fr;
            }
            .jsr2dum-hero h1 {
                font-size: 1.85rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Jamshedpur to Dumka",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 8,500 - 32,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Road, Bistupur",
            "addressLocality": "Jamshedpur",
            "addressRegion": "Jharkhand",
            "postalCode": "831001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 22.8046,
            "longitude": 86.2029
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Jamshedpur"
            },
            {
                "@type": "City",
                "name": "Dumka"
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
        "serviceType": "Interdistrict Packers and Movers Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Dumka, Jharkhand"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Jamshedpur to Dumka Relocation Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Jamshedpur to Dumka Household Relocation"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Jamshedpur to Dumka Car Carrier & Bike Transport"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Tata Steel, Tata Motors & Govt Transfer Documentation"
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
                "name": "Packers and Movers Jamshedpur",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jamshedpur"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Jamshedpur to Dumka Route",
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
                "name": "What is the road distance and transit time from Jamshedpur to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Jamshedpur and Dumka is approximately 285 km via NH-18 (passing Chandil, Balarampur, Purulia, and Dhanbad/Govindpur) and NH-114A through Jamtara. Dedicated closed container trucks take 6 to 8 hours for safe door-to-door transit."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Jamshedpur to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Shifting costs range between Rs 8,500 to 14,000 for 1 BHK flats, Rs 14,000 to 22,000 for 2 BHK residences, Rs 20,000 to 29,000 for 3 BHK homes, and Rs 25,000 to 36,000 for large bungalows, covering full multi-layer packaging, loading, highway transport, and doorstep delivery."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claimable GST invoices for Tata Steel, Tata Motors, and Govt employee transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, Shree Ashirwad Packers and Movers provides authentic GST-registered tax invoices, consignment bilty, detailed inventory manifests, and transit insurance receipts fully compliant with reimbursement guidelines of Tata Steel, Tata Motors, Tinplate, Jharkhand Judicial Services, and State Administrative transfers."
                }
            },
            {
                "@type": "Question",
                "name": "How are two-wheelers and cars transported from Jamshedpur to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Bikes and scooters are crated in custom protective frames with bubble and corrugated wrap, while cars are transported in enclosed single-car carriers or secured car ramps with wheel locks and transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Jamshedpur and Dumka do you service?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide complete pickup coverage across Jamshedpur including Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Adityapur, Gamharia, Baridih, and Mango, with direct delivery to Dumka including Tin Bazar, Rasikpur, Dudhani, SP College Road, Dumka Court, and Airport Road."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle sensitive office and lab equipment relocation?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we specialize in high-precision corporate IT equipment, industrial spares from Adityapur SEZ, and laboratory instrumentation using anti-static wraps, high-density foam, and dedicated shock-cushioned container transport."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="jsr2dum-hero">
    <div class="container">
        <div class="jsr2dum-badge-strip">
            <span class="jsr2dum-badge">&#9733; Verified Intercity Route</span>
            <span class="jsr2dum-badge">&#9679; 285 KM Highway Corridor</span>
            <span class="jsr2dum-badge">&#10003; Dedicated Weatherproof Containers</span>
            <span class="jsr2dum-badge">&#128737; Tata &amp; Govt Approved Bills</span>
        </div>
        <h1>Jamshedpur to Dumka Packers and Movers</h1>
        <p class="lead">
            Relocate with absolute peace of mind from the Steel City to the sub-capital of Jharkhand. Shree Ashirwad Packers and Movers offers professional household shifting, vehicle transportation, and corporate goods transport connecting Jamshedpur to Dumka with export-grade 5-layer packing, guaranteed transit schedules, and claim-approved documentation.
        </p>
        <div class="jsr2dum-cta-group">
            <a href="tel:+918409531615" class="jsr2dum-btn-primary">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Now: +91 84095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="jsr2dum-btn-secondary">
                Request Free Survey &rarr;
            </a>
        </div>
    </div>
</section>

<!-- Route Overview & Key Highlights -->
<section class="jsr2dum-section">
    <div class="container">
        <div class="jsr2dum-heading-center">
            <h2>Seamless Moving Across Jamshedpur to Dumka Corridor</h2>
            <p>
                From Tata Steel townships, Telco colonies, and Adityapur industrial clusters to the administrative heart of Santhal Pargana division in Dumka.
            </p>
        </div>

        <div class="jsr2dum-grid-3">
            <div class="jsr2dum-card">
                <div class="jsr2dum-card-icon">&#128666;</div>
                <h3>Company-Owned Container Fleet</h3>
                <p>
                    All consignments are transported in locked, weather-tight closed container vehicles. Your household electronics, teak furniture, and wardrobe cartons travel completely shielded from highway dust, heat, and sudden monsoon showers along the NH-18 and NH-114A routes.
                </p>
            </div>

            <div class="jsr2dum-card">
                <div class="jsr2dum-card-icon">&#128737;</div>
                <h3>5-Layer Heavy Protective Wrapping</h3>
                <p>
                    We use virgin-grade air bubble wrapping, thick multi-ply corrugated sheets, stretch film wrapping, and edge guards to ensure zero friction scratches or transit shock damage on glassware, large LCD screens, sofas, and delicate temple units.
                </p>
            </div>

            <div class="jsr2dum-card">
                <div class="jsr2dum-card-icon">&#128221;</div>
                <h3>100% Valid Transfer Claim Invoices</h3>
                <p>
                    Relocating on company or official government posting? We provide GST tax invoices, consignment consignment notes (bilty), driver manifests, and transit insurance policies accepted by Tata Steel, Tata Motors, Tinplate, SKMU University, and Government of Jharkhand departments.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Route Logistics & Highway Details -->
<section class="jsr2dum-section jsr2dum-section-gray">
    <div class="container">
        <div class="jsr2dum-grid-2">
            <div>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.1rem; font-weight: 800; color: var(--jsr2dum-dark); margin-bottom: 20px;">
                    Express NH-18 &amp; NH-114A Highway Route Protocol
                </h2>
                <p style="font-size: 1.02rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    The 285 km route connecting Jamshedpur to Dumka traverses key economic and cultural districts of eastern Jharkhand. Starting from your home in Bistupur, Kadma, Sonari, Telco, Baridih, or the Adityapur Industrial Area, our specialized container trucks head outward via Dimna Road or Mango bridge onto the four-lane NH-18 (Chandil bypass).
                </p>
                <p style="font-size: 1.02rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    The convoy cruises smoothly past Balarampur and Purulia, connecting cleanly into the Dhanbad bypass near Govindpur. Here, the corridor branches onto NH-114A via Jamtara, ascending into the picturesque rolling terrain of Santhal Pargana before reaching Dumka city. Our commercial fleet handles interstate toll transit with Fastag automation and verified road permits, ensuring smooth uninterrupted travel in 6 to 8 hours door-to-door.
                </p>
                <p style="font-size: 1.02rem; color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    Whether you are an engineering executive transferring from Tata Steel or Tata Motors, an academic faculty member joining Sido Kanhu Murmu University (SKMU), or a banking professional posted to the Dumka administrative zone, our specialized transport protocol provides scheduled tracking, sealed container locks, and personalized coordinator support from dispatch to delivery.
                </p>
                <ul class="jsr2dum-checklist">
                    <li><strong>Total Highway Distance:</strong> Approximately 285 km via NH-18 &amp; NH-114A</li>
                    <li><strong>Estimated Transit Time:</strong> 6 to 8 hours with dedicated container truck dispatch</li>
                    <li><strong>Key En-Route Points:</strong> Chandil, Balarampur, Purulia bypass, Govindpur, Jamtara, Dumka</li>
                    <li><strong>Institutional Coverage:</strong> SKMU University, Judicial Officers Colony, Tin Bazar, and DC Office zone</li>
                    <li><strong>Dispatch Tracking:</strong> Real-time GPS location updates and direct driver communication</li>
                </ul>
            </div>
            <div class="jsr2dum-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Shree Ashirwad closed container truck transporting household goods from Jamshedpur to Dumka">
            </div>
        </div>
    </div>
</section>

<!-- Transparent Pricing Table -->
<section class="jsr2dum-section">
    <div class="container">
        <div class="jsr2dum-heading-center">
            <h2>Jamshedpur to Dumka Relocation Charges &amp; Rates</h2>
            <p>
                Clear, upfront pricing with zero hidden fees. Estimates cover high-grade packing supplies, professional handling, freight charges, toll taxes, and doorstep placement.
            </p>
        </div>

        <div class="jsr2dum-table-container">
            <table class="jsr2dum-table">
                <thead>
                    <tr>
                        <th>Shifting Type</th>
                        <th>Home / Consignment Configuration</th>
                        <th>Estimated Cost (INR)</th>
                        <th>Transit &amp; Delivery Time</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Shifting</strong></td>
                        <td>Bed, wardrobe, fridge, TV, washing machine, 12-15 moving boxes</td>
                        <td>&#8377; 8,500 - &#8377; 14,000</td>
                        <td>Same-Day / Next Morning</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Shifting</strong></td>
                        <td>2 beds, sofa set, dining table, kitchen appliances, 25-30 boxes</td>
                        <td>&#8377; 14,000 - &#8377; 22,000</td>
                        <td>Same-Day / Next Morning</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Shifting</strong></td>
                        <td>3 bedroom furnishings, ACs, electronics, glassware, 40-50 boxes</td>
                        <td>&#8377; 20,000 - &#8377; 29,000</td>
                        <td>Next Morning Delivery</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Bungalow</strong></td>
                        <td>Extensive furniture, modular setup, heavy decor, 60+ cartons</td>
                        <td>&#8377; 25,000 - &#8377; 36,000</td>
                        <td>Dedicated Large Container</td>
                    </tr>
                    <tr>
                        <td><strong>Bike / Two-Wheeler</strong></td>
                        <td>Motorcycle or scooter with custom wooden crating and bubble wrap</td>
                        <td>&#8377; 2,500 - &#8377; 4,200</td>
                        <td>24 to 36 Hours</td>
                    </tr>
                    <tr>
                        <td><strong>Car Relocation</strong></td>
                        <td>Hatchback, sedan, or compact SUV via specialized hydraulic carrier</td>
                        <td>&#8377; 6,000 - &#8377; 9,500</td>
                        <td>Dedicated Carrier Transit</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <p style="font-size: 0.92rem; color: #64748b; text-align: center; margin-top: 15px;">
            *Exact price depends on pickup and destination floor numbers, elevator accessibility, fragile items ratio, and chosen transit insurance coverage.
        </p>
    </div>
</section>

<!-- Packing Methodology -->
<section class="jsr2dum-section jsr2dum-section-gray">
    <div class="container">
        <div class="jsr2dum-grid-2">
            <div class="jsr2dum-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Multi-layer household packing in Jamshedpur for transit to Dumka">
            </div>
            <div>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.1rem; font-weight: 800; color: var(--jsr2dum-dark); margin-bottom: 20px;">
                    Our Signature 5-Layer Packaging Standard
                </h2>
                <p style="font-size: 1.02rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Transporting household belongings across 285 km of varying highway topography demands engineering-level packaging precision. Our full-time Jamshedpur moving team implements our tested multi-tier safeguarding protocol:
                </p>
                <ul class="jsr2dum-checklist">
                    <li><strong>Layer 1 - Cling Film Shield:</strong> Encloses polished wood and metal finishes against dust, moisture, and fine abrasive particles.</li>
                    <li><strong>Layer 2 - High-Density Bubble Cushion:</strong> Absorbs vibrations and sudden road shocks for crockery, mirrors, televisions, and paintings.</li>
                    <li><strong>Layer 3 - Heavy-Duty Corner Guards:</strong> Reinforced corrugated profiles protect vulnerable dining table and wardrobe corners from impact.</li>
                    <li><strong>Layer 4 - Double-Walled Moving Cartons:</strong> Heavy-gauge cardboard boxes labeled clearly by room and contents for easy destination sorting.</li>
                    <li><strong>Layer 5 - Weatherproof Strapping &amp; Lashing:</strong> High-tensile nylon tie-down belts lock all items securely within the truck body to eliminate shifting.</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Step-by-Step Workflow -->
<section class="jsr2dum-section">
    <div class="container">
        <div class="jsr2dum-heading-center">
            <h2>Our 6-Step Jamshedpur to Dumka Moving Journey</h2>
            <p>
                A systematic relocation framework designed for zero stress, complete clarity, and timely arrival.
            </p>
        </div>

        <div class="jsr2dum-grid-3">
            <div class="jsr2dum-card">
                <div class="jsr2dum-card-icon">1</div>
                <h3>Pre-Move Survey &amp; Quote</h3>
                <p>
                    Schedule an in-person home survey in Jamshedpur or share an item checklist via WhatsApp. Receive a transparent, written fixed-rate quotation.
                </p>
            </div>

            <div class="jsr2dum-card">
                <div class="jsr2dum-card-icon">2</div>
                <h3>Expert Doorstep Packing</h3>
                <p>
                    Our trained crew arrives with premium materials, carefully disassembles modular beds and wardrobes, and wraps every item room by room.
                </p>
            </div>

            <div class="jsr2dum-card">
                <div class="jsr2dum-card-icon">3</div>
                <h3>Careful Loading &amp; Securing</h3>
                <p>
                    Using modern hydraulic ramps, hand trucks, and padded blankets, goods are securely stowed and tied down inside our sealed container vehicle.
                </p>
            </div>

            <div class="jsr2dum-card">
                <div class="jsr2dum-card-icon">4</div>
                <h3>Fast Highway Transit</h3>
                <p>
                    Our experienced long-haul drivers navigate the 285 km NH-18 &amp; NH-114A corridor safely, keeping you updated on transit progress throughout the trip.
                </p>
            </div>

            <div class="jsr2dum-card">
                <div class="jsr2dum-card-icon">5</div>
                <h3>Unloading in Dumka</h3>
                <p>
                    Upon arrival at your new Dumka residence, our crew carries every carton and furniture piece into designated bedrooms, living rooms, and kitchen areas.
                </p>
            </div>

            <div class="jsr2dum-card">
                <div class="jsr2dum-card-icon">6</div>
                <h3>Furniture Assembly &amp; Cleanup</h3>
                <p>
                    We reassemble beds, dining tables, and large furniture, conduct an inventory checklist walkthrough with you, and remove all discarded packing waste.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Car & Bike Carrier Section -->
<section class="jsr2dum-section jsr2dum-section-gray">
    <div class="container">
        <div class="jsr2dum-grid-2">
            <div>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.1rem; font-weight: 800; color: var(--jsr2dum-dark); margin-bottom: 20px;">
                    Safe Car Carrier &amp; Two-Wheeler Parcel Service
                </h2>
                <p style="font-size: 1.02rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Driving 285 km across industrial corridors can add unnecessary mileage and tire wear. Shree Ashirwad Packers and Movers offers dedicated, secure vehicle transport from Jamshedpur to Dumka:
                </p>
                <ul class="jsr2dum-checklist">
                    <li><strong>Hydraulic Car Carriers:</strong> Smooth ground-level loading ramps prevent underbody damage to hatchbacks, sedans, and SUVs.</li>
                    <li><strong>Wheel Chocks &amp; Safety Belts:</strong> Vehicles are locked in position with tire clamps and heavy-duty nylon lashing belts.</li>
                    <li><strong>Custom Bike Crates:</strong> Two-wheelers receive bubble cushioning, mirror dismantling, and wooden cage protection.</li>
                    <li><strong>Vehicle Inspection Sign-off:</strong> Detailed pre-dispatch exterior inspection report signed before loading and checked upon delivery.</li>
                </ul>
            </div>
            <div class="jsr2dum-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Automotive carrier loading car and bike in Jamshedpur for Dumka transport">
            </div>
        </div>
    </div>
</section>

<!-- Unpacking, Setup & Corporate Invoicing -->
<section class="jsr2dum-section">
    <div class="container">
        <div class="jsr2dum-grid-2">
            <div class="jsr2dum-img-wrap">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Doorstep unpacking and furniture placement in Dumka Jharkhand">
            </div>
            <div>
                <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.1rem; font-weight: 800; color: var(--jsr2dum-dark); margin-bottom: 20px;">
                    Doorstep Unpacking &amp; Corporate Relocation Bills
                </h2>
                <p style="font-size: 1.02rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Our job doesn't end at simply unloading boxes at your gate. Our team assists with complete furniture setup, unboxing, positioning heavy goods, and cleaning out corrugated waste so your family can start living comfortably immediately.
                </p>
                <p style="font-size: 1.02rem; color: #475569; line-height: 1.7; margin-bottom: 20px;">
                    For corporate executives, bank managers, and government staff transferring between Jamshedpur and Dumka, we furnish complete, 100% compliant claim documentation:
                </p>
                <ul class="jsr2dum-checklist">
                    <li>Authentic GST tax invoice with valid HSN/SAC logistics codes</li>
                    <li>Consignment Note / Bilty with transport registration and driver details</li>
                    <li>Itemized packing list with declared values for employer claim reimbursement</li>
                    <li>IBA-approved money receipts and transit risk insurance documentation</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Area Coverage Localities -->
<section class="jsr2dum-section jsr2dum-section-gray">
    <div class="container">
        <div class="jsr2dum-heading-center">
            <h2>Complete Doorstep Coverage Across Jamshedpur &amp; Dumka</h2>
            <p>
                Our logistics network covers every major residential colony, industrial sector, and commercial hub in both cities.
            </p>
        </div>

        <div class="jsr2dum-grid-3">
            <div class="jsr2dum-card">
                <h3>Jamshedpur Pickup Localities</h3>
                <p>
                    Prompt doorstep packaging and pickup across all sectors of Jamshedpur:
                </p>
                <ul class="jsr2dum-checklist">
                    <li><strong>Central Townships:</strong> Bistupur, Sakchi, Kadma, Sonari, Circuit House Area</li>
                    <li><strong>Industrial &amp; Corporate:</strong> Telco Colony, Adityapur SEZ, Gamharia, Golmuri</li>
                    <li><strong>Residential Sectors:</strong> Baridih, Agrico, Sidhgora, Birsanagar, Mango</li>
                    <li><strong>Suburban Zones:</strong> Parsudih, Sundernagar, Jugsalai, Dimna Road</li>
                </ul>
            </div>

            <div class="jsr2dum-card">
                <h3>Dumka Delivery Localities</h3>
                <p>
                    Full doorstep unloading, furniture reassembly, and placement in Dumka:
                </p>
                <ul class="jsr2dum-checklist">
                    <li><strong>Central Sectors:</strong> Tin Bazar, Rasikpur, Dudhani, Dumka Court Area</li>
                    <li><strong>Educational &amp; Administrative:</strong> SP College Road, SKMU Campus, DC Office Area</li>
                    <li><strong>Residential Neighborhoods:</strong> Gilanpara, Bandhdih, Kathikund Road, Shikaripara Road</li>
                    <li><strong>Suburban Hubs:</strong> Dumka Airport Road, Kurwa, Jama, Ranishwar</li>
                </ul>
            </div>

            <div class="jsr2dum-card">
                <h3>Why Choose Shree Ashirwad?</h3>
                <p>
                    Trusted by hundreds of families and corporate professionals across Jharkhand:
                </p>
                <ul class="jsr2dum-checklist">
                    <li>Company-owned locked container fleet</li>
                    <li>Trained, verified, and background-checked moving staff</li>
                    <li>100% genuine GST invoices for corporate transfer claims</li>
                    <li>Dedicated transit schedules with zero freight transshipment</li>
                    <li>Clear upfront rates with complete price transparency</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions -->
<section class="jsr2dum-section">
    <div class="container">
        <div class="jsr2dum-heading-center">
            <h2>Frequently Asked Questions: Jamshedpur to Dumka Shifting</h2>
            <p>
                Clear answers regarding pricing, transit timelines, packing supplies, and employee claim papers.
            </p>
        </div>

        <div style="max-width: 900px; margin: 0 auto;">
            <div class="jsr2dum-faq-item">
                <h3>What is the road distance and transit time from Jamshedpur to Dumka?</h3>
                <p>
                    The highway distance between Jamshedpur and Dumka is approximately 285 km via NH-18 (passing Chandil, Balarampur, Purulia, and Dhanbad/Govindpur) and NH-114A through Jamtara. Dedicated closed container trucks take 6 to 8 hours for safe door-to-door transit.
                </p>
            </div>

            <div class="jsr2dum-faq-item">
                <h3>What are the shifting charges from Jamshedpur to Dumka?</h3>
                <p>
                    Shifting costs range between Rs 8,500 to 14,000 for 1 BHK flats, Rs 14,000 to 22,000 for 2 BHK residences, Rs 20,000 to 29,000 for 3 BHK homes, and Rs 25,000 to 36,000 for large bungalows, covering full multi-layer packaging, loading, highway transport, and doorstep delivery.
                </p>
            </div>

            <div class="jsr2dum-faq-item">
                <h3>Do you provide claimable GST invoices for Tata Steel, Tata Motors, and Govt employee transfers?</h3>
                <p>
                    Yes, Shree Ashirwad Packers and Movers provides authentic GST-registered tax invoices, consignment bilty, detailed inventory manifests, and transit insurance receipts fully compliant with reimbursement guidelines of Tata Steel, Tata Motors, Tinplate, SKMU University, and Government of Jharkhand departments.
                </p>
            </div>

            <div class="jsr2dum-faq-item">
                <h3>How are two-wheelers and cars transported from Jamshedpur to Dumka?</h3>
                <p>
                    Bikes and scooters are crated in custom protective frames with bubble and corrugated wrap, while cars are transported in enclosed single-car carriers or secured car ramps with wheel locks and transit insurance.
                </p>
            </div>

            <div class="jsr2dum-faq-item">
                <h3>Which areas in Jamshedpur and Dumka do you service?</h3>
                <p>
                    We provide complete pickup coverage across Jamshedpur including Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Adityapur, Gamharia, Baridih, and Mango, with direct delivery to Dumka including Tin Bazar, Rasikpur, Dudhani, SP College Road, Dumka Court, and Airport Road.
                </p>
            </div>

            <div class="jsr2dum-faq-item">
                <h3>Can you handle sensitive office and lab equipment relocation?</h3>
                <p>
                    Yes, we specialize in high-precision corporate IT equipment, industrial spares from Adityapur SEZ, and laboratory instrumentation using anti-static wraps, high-density foam, and dedicated shock-cushioned container transport.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section style="background: linear-gradient(135deg, #0f2942 0%, #071728 100%); color: #ffffff; padding: 65px 0; text-align: center;">
    <div class="container">
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; margin-bottom: 16px;">
            Book Your Jamshedpur to Dumka Move Today
        </h2>
        <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 720px; margin: 0 auto 30px;">
            Get in touch with our moving coordinators for a free home survey, instant written estimate, and guaranteed safe transit.
        </p>
        <div style="display: flex; justify-content: center; gap: 18px; flex-wrap: wrap;">
            <a href="tel:+918409531615" style="background: #f59e0b; color: #071728; font-weight: 700; padding: 14px 34px; border-radius: 10px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px;">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                Call Hotline: 084095 31615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" style="background: rgba(255,255,255,0.15); color: #ffffff; font-weight: 600; padding: 14px 28px; border-radius: 10px; text-decoration: none; border: 1px solid rgba(255,255,255,0.3);">
                Request Instant Quote &rarr;
            </a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
