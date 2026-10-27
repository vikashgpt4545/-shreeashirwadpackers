<?php
/**
 * Page: Packers and Movers in Matigara Siliguri
 * Description: Premium residential shifting, gated township relocation, medical staff moving, and vehicle transport services in Matigara, Siliguri.
 * Author: Shree Ashirwad Packers and Movers
 * Meta: 100% Handcrafted Tier-2 Locality Hub, Google Compliant Schemas, Scoped CSS Parity
 */
defined('ROOT_PATH') OR define('ROOT_PATH', realpath(__DIR__ . '/..'));
require_once ROOT_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packers and Movers in Matigara Siliguri | Reliable Relocation Services</title>
    <meta name="description" content="Expert packers and movers in Matigara Siliguri. Professional shifting in Uttarayon Township, City Centre corridor, medical college zone, and NH27 with zero-damage guarantee.">
    <meta name="keywords" content="packers and movers in matigara siliguri, movers and packers matigara, house shifting uttarayon siliguri, relocation services matigara siliguri">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-matigara-siliguri">
    <meta property="og:title" content="Packers and Movers in Matigara Siliguri | Shree Ashirwad Packers">
    <meta property="og:description" content="Safe and certified home shifting, township moves, and car bike carriers in Matigara, Siliguri. Transparent pricing and multi-layer protective packaging.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-matigara-siliguri">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Matigara Siliguri Hub - mtg prefix */
        .mtg-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .mtg-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .mtg-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .mtg-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #e0f2fe;
            max-width: 900px;
        }
        .mtg-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .mtg-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .mtg-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .mtg-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .mtg-content-col {
            min-width: 0;
        }
        .mtg-sidebar-col {
            min-width: 0;
        }
        .mtg-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .mtg-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .mtg-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .mtg-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .mtg-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .mtg-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .mtg-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .mtg-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .mtg-highlight-title {
            font-weight: 700;
            color: #166534;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .mtg-highlight-desc {
            font-size: 0.94rem;
            color: #14532d;
            margin: 0;
        }
        .mtg-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .mtg-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .mtg-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .mtg-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #0f766e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .mtg-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .mtg-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .mtg-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .mtg-pricing-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #1e3a8a;
        }
        .mtg-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .mtg-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .mtg-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .mtg-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .mtg-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .mtg-step-number {
            background: #0d9488;
            color: #ffffff;
            width: 32px;
            height: 32px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            font-size: 0.9rem;
            flex-shrink: 0;
        }
        .mtg-step-body {
            flex: 1;
        }
        .mtg-step-heading {
            font-weight: 700;
            font-size: 0.98rem;
            color: #1e293b;
            margin-bottom: 4px;
        }
        .mtg-step-desc {
            font-size: 0.91rem;
            color: #475569;
            margin: 0;
        }
        .mtg-faq-accordion {
            margin: 20px 0;
        }
        .mtg-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .mtg-faq-question {
            background: #f8fafc;
            padding: 14px 18px;
            font-weight: 600;
            font-size: 1rem;
            color: #1e3a8a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .mtg-faq-answer {
            padding: 14px 18px;
            font-size: 0.93rem;
            color: #475569;
            background: #ffffff;
            line-height: 1.6;
        }
        .mtg-sidebar-box {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 22px 18px;
            margin-bottom: 24px;
        }
        .mtg-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
            border-bottom: 2px solid #0d9488;
            padding-bottom: 6px;
        }
        .mtg-cta-button {
            display: block;
            text-align: center;
            background: #0d9488;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            transition: background 0.2s;
            margin-top: 15px;
        }
        .mtg-cta-button:hover {
            background: #0f766e;
            color: #ffffff;
        }
        .mtg-cluster-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px;
            margin-top: 30px;
        }
        .mtg-cluster-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
        }
        .mtg-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        .mtg-cluster-link {
            display: block;
            padding: 10px 14px;
            background: #f1f5f9;
            border: 1px solid #cbd5e1;
            border-radius: 6px;
            color: #1e3a8a;
            text-decoration: none;
            font-size: 0.9rem;
            font-weight: 600;
            transition: all 0.2s ease;
        }
        .mtg-cluster-link:hover {
            background: #0d9488;
            color: #ffffff;
            border-color: #0d9488;
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Matigara Siliguri",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-matigara-siliguri#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-matigara-siliguri",
        "telephone": "+91 9835565233",
        "priceRange": "₹3,200 - ₹58,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Uttarayon Main Gate, NH 27, Matigara",
            "addressLocality": "Siliguri",
            "addressRegion": "West Bengal",
            "postalCode": "734010",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.7118,
            "longitude": 88.3845
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
            ],
            "opens": "07:00",
            "closes": "21:30"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://twitter.com/ashirwadpackers"
        ]
    }
    </script>

    <!-- Schema 2: BreadcrumbList -->
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
                "name": "Packers and Movers in Siliguri",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Matigara Siliguri",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-matigara-siliguri"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Township & Household Relocation",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Matigara Siliguri"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Matigara, Uttarayon, Khaprail Road, Siliguri"
        },
        "description": "Comprehensive residential shifting, luxury villa moving, medical staff transfers, and vehicle logistics in Matigara and Uttarayon Township, Siliguri."
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
                "name": "How much does home shifting in Uttarayon Township Matigara cost?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Moving within Uttarayon Township or between Matigara and central Siliguri typically ranges from ₹3,500 to ₹7,000 for a 1 BHK, ₹6,000 to ₹12,000 for a 2 BHK apartment, and ₹9,500 to ₹21,000 for independent luxury villas, based on packaging layers, furniture dismantling requirements, and elevator access."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide moving services for doctors and staff at North Bengal Medical College (NBMCH)?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we frequently handle relocation for faculty, doctors, and healthcare professionals from North Bengal Medical College and surrounding hospitals. We offer weekend fast-track packing and priority scheduling to suit demanding medical rosters."
                }
            },
            {
                "@type": "Question",
                "name": "Are your packing teams familiar with gated society rules in Matigara?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our moving supervisors are experienced in coordinating entry permits, society gate passes, service elevator reservations, and vehicle parking permissions across Uttarayon, City Centre apartments, and upscale gated colonies in Matigara."
                }
            },
            {
                "@type": "Question",
                "name": "Can you safely transport luxury cars and SUVs from Matigara to other cities?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we operate dedicated hydraulic enclosed car carrier trucks equipped with secure wheel lashings and comprehensive transit insurance to transfer luxury sedans and SUVs safely to any state in India."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="mtg-wrap">
    <!-- Hero Banner -->
    <section class="mtg-hero-section">
        <h1 class="mtg-hero-title">Packers and Movers in Matigara Siliguri</h1>
        <p class="mtg-hero-subtitle">Premier township relocation, upscale villa moving, healthcare professional transfers, and secured vehicle transit across Matigara, Uttarayon, and City Centre corridor in Siliguri.</p>
        <div class="mtg-meta-badges">
            <span class="mtg-badge-item">✓ Uttarayon Township Specialist</span>
            <span class="mtg-badge-item">✓ City Centre & NH27 Corridor</span>
            <span class="mtg-badge-item">✓ NBMCH Medical Zone Coverage</span>
            <span class="mtg-badge-item">✓ Five-Layer Protective Packaging</span>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div class="mtg-main-grid">
        <div class="mtg-content-col">
            <!-- Section 1: Overview & Neighborhood Profile -->
            <section class="mtg-section">
                <h2 class="mtg-section-title">Reliable Relocation Services in Matigara, Siliguri</h2>
                <p class="mtg-lead-p">Matigara stands as Siliguri's fastest-growing modern residential, healthcare, and commercial corridor in the sub-Himalayan region of North Bengal. Spanning the prominent National Highway 27 (Asian Highway 2) axis, Matigara is home to North Bengal's premier planned mega-township Uttarayon, the City Centre shopping mall, prestigious educational campuses, and the North Bengal Medical College & Hospital (NBMCH). This vibrant mix of upscale duplex villas, modern gated communities, senior medical consultants, and expanding commercial retail complexes demands moving services that deliver uncompromising care, elegance, and reliability.</p>
                
                <p class="mtg-body-p">At Shree Ashirwad Packers and Movers, we take pride in delivering gold-standard packing and moving solutions across Matigara. Whether you are transitioning to an executive villa inside Uttarayon, shifting into a high-rise condominium along Khaprail Road, or relocating out of state toward eastern metropolises, our vetted packing specialists ensure seamless relocation. Operating under our citywide network through <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri">Packers and Movers in Siliguri</a>, we offer uninterrupted logistics support backed by modern enclosed transport containers.</p>

                <div class="mtg-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Matigara Siliguri">
                    <div class="mtg-image-caption">Careful loading of household consignments in Matigara, Siliguri.</div>
                </div>

                <div class="mtg-highlight-box">
                    <div class="mtg-highlight-title">Why Uttarayon & Matigara Residents Prefer Our Service</div>
                    <div class="mtg-highlight-desc">From complying with gated township security protocols to deploying trained furniture technicians for imported modular furniture and delicate home theater setups, we provide white-glove relocation tailored to modern suburban lifestyles.</div>
                </div>

                <p class="mtg-body-p">Unlike unorganized local transporters who rely on unskilled day-laborers, our crew comprises trained packing craftsmen, licensed carpenters, and certified drivers. We understand that your household possessions—from crystal chandeliers to imported teakwood dining sets—carry profound emotional and monetary value. Every item is treated with meticulous care and double-inspected before transit.</p>

                <p class="mtg-body-p">Matigara's strategic location along the 4-lane NH 27 bypass offers superb transportation accessibility, facilitating rapid transit toward Bagdogra Airport, New Jalpaiguri Junction, and regional highway corridors heading south toward Kolkata and west toward Bihar and Jharkhand.</p>
            </section>

            <!-- Section 2: Specialized Relocation Offerings -->
            <section class="mtg-section">
                <h2 class="mtg-section-title">Comprehensive Relocation Solutions Across Matigara</h2>
                <p class="mtg-lead-p">We understand that relocating a luxury villa in Uttarayon differs completely from moving a medical consultancy clinic near NBMCH or shifting a retail boutique near City Centre. We offer customized moving packages structured to match your precise requirements.</p>

                <div class="mtg-card-grid">
                    <div class="mtg-feature-card">
                        <div class="mtg-card-head">🏡 Luxury Villa & Apartment Shifting</div>
                        <p class="mtg-card-text">Tailored home relocation for multi-storey duplexes and high-rise apartments, with protective floor runners, wall padding, and room-specific unpacking.</p>
                    </div>
                    <div class="mtg-feature-card">
                        <div class="mtg-card-head">🩺 Medical Faculty & Doctor Transfers</div>
                        <p class="mtg-card-text">Specialized shifting for doctors, surgeons, and healthcare personnel from North Bengal Medical College, featuring flexible weekend schedules and safe book/instrument packaging.</p>
                    </div>
                    <div class="mtg-feature-card">
                        <div class="mtg-card-head">🏬 Retail & Commercial Office Relocation</div>
                        <p class="mtg-card-text">Systematic moving for shopping mall outlets, corporate branch offices, and showrooms along the Matigara-Khaprail commercial strip with zero business downtime.</p>
                    </div>
                    <div class="mtg-feature-card">
                        <div class="mtg-card-head">🚙 Enclosed Automobile Carriers</div>
                        <p class="mtg-card-text">Secure hydraulic car carriers and motorcycle transport vehicles with custom wheel clamps, door guards, and all-risk transit insurance coverage.</p>
                    </div>
                </div>

                <div class="mtg-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging materials in Matigara Siliguri">
                    <div class="mtg-image-caption">High-density multi-layered bubble packaging and heavy cartons used in Matigara.</div>
                </div>

                <p class="mtg-body-p">Our local operations cover every corner of the Matigara zone including Uttarayon Township, Khaprail Road, Shivmandir, Dagapur, Matigara Bazaar, Kawakhali, and the medical campus belt. For intercity moves connecting to industrial hubs in western West Bengal, we coordinate seamlessly with <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur">Packers and Movers in Durgapur</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol">Packers and Movers in Asansol</a>.</p>

                <p class="mtg-body-p">For clients transferring to maritime commercial centers or the state capital, our regular fleet provides reliable transit connecting directly to <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Packers and Movers in Kolkata</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah">Packers and Movers in Howrah</a>.</p>
            </section>

            <!-- Section 3: Material Quality & Step-by-Step Methodology -->
            <section class="mtg-section">
                <h2 class="mtg-section-title">Standardized Packing Process & Material Excellence</h2>
                <p class="mtg-lead-p">The hallmark of professional shifting is consistent methodology. Our teams adhere strictly to a 4-step moving cycle that eliminates guesswork and prevents accidental damage during handling and highway transport.</p>

                <div class="mtg-steps-container">
                    <div class="mtg-step-item">
                        <div class="mtg-step-number">1</div>
                        <div class="mtg-step-body">
                            <div class="mtg-step-heading">On-Site Assessment & Moving Consultation</div>
                            <div class="mtg-step-desc">Our moving surveyor examines your inventory, notes delicate glassware or modular furniture, checks society elevator dimensions, and provides an itemized fixed quote.</div>
                        </div>
                    </div>
                    <div class="mtg-step-item">
                        <div class="mtg-step-number">2</div>
                        <div class="mtg-step-body">
                            <div class="mtg-step-heading">Multi-Tier Protective Packing</div>
                            <div class="mtg-step-desc">We use 5-ply corrugated boxes, virgin air-bubble sheets, thermal stretch wrapping, edge corner protectors, and moisture barriers to safeguard all belongings.</div>
                        </div>
                    </div>
                    <div class="mtg-step-item">
                        <div class="mtg-step-number">3</div>
                        <div class="mtg-step-body">
                            <div class="mtg-step-heading">Systematic Stacking & Container Lashing</div>
                            <div class="mtg-step-desc">Cargo is loaded scientifically—heavier furniture anchored securely at the base, labeled cartons arranged systematically, and fragile items tied down with safety belts.</div>
                        </div>
                    </div>
                    <div class="mtg-step-item">
                        <div class="mtg-step-number">4</div>
                        <div class="mtg-step-body">
                            <div class="mtg-step-heading">Unloading, Reassembly & Debris Removal</div>
                            <div class="mtg-step-desc">At your new home, our crew assists with room-by-room box distribution, complete furniture reassembly, and immediate disposal of packing residue.</div>
                        </div>
                    </div>
                </div>

                <div class="mtg-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Bed furniture dismantling and reassembly in Matigara Siliguri">
                    <div class="mtg-image-caption">Skilled furniture dismantling and protective wrapping in Matigara, Siliguri.</div>
                </div>

                <p class="mtg-body-p">Whether you have large imported hydraulic beds, sectional sofas, or modular study tables in your Uttarayon home, our in-house carpenters expertly dismantle each unit, pack screws and hardware in labeled pouches, and reassemble them flawlessly upon arrival at your new residence.</p>

                <p class="mtg-body-p">For delicate glass tabletops, marble countertops, LCD screens, and vintage audio-visual setups, we provide custom wooden crating lined with dense shock-absorbent foam to withstand long-distance highway travel.</p>

                <div class="mtg-highlight-box">
                    <div class="mtg-highlight-title">Zero-Scratch Guarantee for Modular Interiors</div>
                    <div class="mtg-highlight-desc">All wooden and glass modular furniture pieces are shielded with multi-ply corrugated sheets, thick foam corner buffers, and heavy-gauge polythene wrapping before stepping out of your apartment doors.</div>
                </div>

                <p class="mtg-body-p">We also supply heavy-duty hanging wardrobe carton boxes that allow your formal suits, designer dresses, and traditional ethnic wear to remain wrinkle-free on their original hangers throughout the moving journey.</p>
            </section>

            <!-- Section 4: Gated Communities & Society Logistics -->
            <section class="mtg-section">
                <h2 class="mtg-section-title">Gated Community & Township Logistics in Matigara</h2>
                <p class="mtg-lead-p">Relocating within modern residential complexes requires careful coordination with property management and security departments. Our operations team ensures zero friction by handling all logistical prerequisites in advance.</p>

                <div class="mtg-card-grid">
                    <div class="mtg-feature-card">
                        <div class="mtg-card-head">🛡️ Society Gate Pass Protocols</div>
                        <p class="mtg-card-text">We submit crew identity proofs, vehicle registration papers, and move-in/move-out schedules in advance to security offices across Uttarayon and surrounding complexes.</p>
                    </div>
                    <div class="mtg-feature-card">
                        <div class="mtg-card-head">🛗 Elevator & Common Area Protection</div>
                        <p class="mtg-card-text">We utilize protective canvas padding inside service elevators and lay temporary corridor runners to prevent scuffs on tiled hallways and society walls.</p>
                    </div>
                    <div class="mtg-feature-card">
                        <div class="mtg-card-head">⏱️ Scheduled Timing Compliance</div>
                        <p class="mtg-card-text">We strictly abide by society-designated loading hours (e.g., 9:00 AM to 6:00 PM), ensuring quiet and respectful operations that do not disturb neighborhood residents.</p>
                    </div>
                    <div class="mtg-feature-card">
                        <div class="mtg-card-head">🅿️ Designated Parking & Access Control</div>
                        <p class="mtg-card-text">Our drivers position transport trucks in designated loading bays to maintain smooth traffic flow within gated township avenues.</p>
                    </div>
                </div>

                <div class="mtg-highlight-box">
                    <div class="mtg-highlight-title">Dedicated Corporate & Relocation Support</div>
                    <div class="mtg-highlight-desc">Moving out of Siliguri on corporate transfer? We issue GST-compliant tax invoices, consignment notes (LR copy), itemized packing lists, and transit insurance certificates required for official expense claims.</div>
                </div>

                <p class="mtg-body-p">For long-distance corridors heading toward our company headquarters via <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a>, our containerized vehicles travel directly without intermediate transshipment, ensuring unmatched security and timely arrival.</p>

                <p class="mtg-body-p">Beyond Uttarayon, our moving crews frequently operate across growing suburban communities including Khaprail Road villas, Dagapur tea garden facing homes, and the Kawakhali housing layout. We also provide specialized handling for potted balcony plants, terrace nursery collections, and family pets, ensuring every element of your home transitions comfortably to your new address.</p>
            </section>

            <!-- Section 5: Transparent Tariff Structure -->
            <section class="mtg-section">
                <h2 class="mtg-section-title">Indicative Relocation Charges in Matigara Siliguri</h2>
                <p class="mtg-lead-p">We maintain an honest, upfront pricing philosophy with zero hidden surcharges or last-minute surprises. Below is an indicative local pricing matrix for Matigara and Siliguri. For tailored long-distance or interstate moving costs, check our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges calculator</a>.</p>

                <div class="mtg-table-wrap">
                    <table class="mtg-pricing-table">
                        <thead>
                            <tr>
                                <th>Residence Type / Configuration</th>
                                <th>Packaging Standard</th>
                                <th>Labor & Crew Handling</th>
                                <th>Estimated Tariff Range</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1 BHK Apartment Shifting</td>
                                <td>Standard Dual-Layer Corrugated</td>
                                <td>Included (2-3 Crew)</td>
                                <td>₹3,500 - ₹7,000</td>
                            </tr>
                            <tr>
                                <td>2 BHK Residence Shifting</td>
                                <td>Premium Multi-Layer + Bubble Wrap</td>
                                <td>Included (3-4 Crew)</td>
                                <td>₹6,000 - ₹12,000</td>
                            </tr>
                            <tr>
                                <td>3 BHK / Luxury Duplex Villa</td>
                                <td>Ultra-Safe 5-Ply + Edge Protectors</td>
                                <td>Included (4-6 Crew)</td>
                                <td>₹9,500 - ₹21,000</td>
                            </tr>
                            <tr>
                                <td>Two-Wheeler Transport</td>
                                <td>Protective Wrap & Wheel Chocks</td>
                                <td>Ramp Loading Included</td>
                                <td>₹2,200 - ₹4,800</td>
                            </tr>
                            <tr>
                                <td>Four-Wheeler Sedan / SUV</td>
                                <td>Enclosed Dedicated Vehicle Truck</td>
                                <td>Lash-Tied & Fully Insured</td>
                                <td>₹7,500 - ₹19,000</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="mtg-highlight-box">
                    <div class="mtg-highlight-title">All-Inclusive Quotation Guarantee</div>
                    <div class="mtg-highlight-desc">Every written quotation from Shree Ashirwad Packers includes packing materials, labor, transport, toll taxes, and transit insurance with complete clarity upfront.</div>
                </div>

                <div class="mtg-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Matigara Siliguri">
                    <div class="mtg-image-caption">Dedicated door-to-door closed carrier truck operating in Matigara, Siliguri.</div>
                </div>

                <p class="mtg-body-p">We also provide optional value-added services such as pre-move deep cleaning, wall mount television bracket de-installation, split air conditioner gas sealing and dismantling by certified HVAC technicians, and short-term secure household warehousing at fully covered, CCTV-monitored storage facilities.</p>
            </section>

            <!-- Section 6: Frequently Asked Questions -->
            <section class="mtg-section">
                <h2 class="mtg-section-title">Frequently Asked Questions — Matigara Relocation</h2>
                <div class="mtg-faq-accordion">
                    <div class="mtg-faq-item">
                        <div class="mtg-faq-question">How much does home shifting in Uttarayon Township Matigara cost?</div>
                        <div class="mtg-faq-answer">Moving within Uttarayon Township or between Matigara and central Siliguri typically ranges from ₹3,500 to ₹7,000 for a 1 BHK, ₹6,000 to ₹12,000 for a 2 BHK apartment, and ₹9,500 to ₹21,000 for independent luxury villas, based on packaging layers, furniture dismantling requirements, and elevator access.</div>
                    </div>
                    <div class="mtg-faq-item">
                        <div class="mtg-faq-question">Do you provide moving services for doctors and staff at North Bengal Medical College (NBMCH)?</div>
                        <div class="mtg-faq-answer">Yes, we frequently handle relocation for faculty, doctors, and healthcare professionals from North Bengal Medical College and surrounding hospitals. We offer weekend fast-track packing and priority scheduling to suit demanding medical rosters.</div>
                    </div>
                    <div class="mtg-faq-item">
                        <div class="mtg-faq-question">Are your packing teams familiar with gated society rules in Matigara?</div>
                        <div class="mtg-faq-answer">Yes, our moving supervisors are experienced in coordinating entry permits, society gate passes, service elevator reservations, and vehicle parking permissions across Uttarayon, City Centre apartments, and upscale gated colonies in Matigara.</div>
                    </div>
                    <div class="mtg-faq-item">
                        <div class="mtg-faq-question">Can you safely transport luxury cars and SUVs from Matigara to other cities?</div>
                        <div class="mtg-faq-answer">Yes, we operate dedicated hydraulic enclosed car carrier trucks equipped with secure wheel lashings and comprehensive transit insurance to transfer luxury sedans and SUVs safely to any state in India.</div>
                    </div>
                </div>
            </section>

            <!-- Connected Localities Cluster Module -->
            <div class="mtg-cluster-card">
                <h3 class="mtg-cluster-title">Connected Localities & Regional Service Hubs</h3>
                <p class="mtg-body-p">Explore our verified packing and moving networks connecting Matigara across Siliguri and neighboring regions:</p>
                <div class="mtg-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri" class="mtg-cluster-link">Siliguri City Authority</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pradhan-nagar-siliguri" class="mtg-cluster-link">Pradhan Nagar Siliguri</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sevoke-road-siliguri" class="mtg-cluster-link">Sevoke Road Siliguri</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata" class="mtg-cluster-link">Kolkata Authority Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah" class="mtg-cluster-link">Howrah City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur" class="mtg-cluster-link">Durgapur Industrial Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol" class="mtg-cluster-link">Asansol Rail Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/" class="mtg-cluster-link">Ranchi Corporate HQ</a>
                </div>
            </div>
        </div>

        <!-- Sidebar Column -->
        <aside class="mtg-sidebar-col">
            <div class="mtg-sidebar-box">
                <h3 class="mtg-sidebar-title">Matigara Branch Desk</h3>
                <p class="mtg-body-p">Planning a move in Uttarayon Township, City Centre, or along Khaprail Road? Contact our local desk for an instant quotation.</p>
                <ul style="padding-left: 20px; margin-bottom: 15px; font-size: 0.93rem; color: #334155;">
                    <li><strong>Desk Address:</strong> Near Uttarayon Main Gate, NH 27, Matigara</li>
                    <li><strong>Service Hours:</strong> 7:00 AM - 9:30 PM (Daily)</li>
                    <li><strong>Helpline:</strong> +91 9835565233</li>
                    <li><strong>Email:</strong> info@shreeashirwadpackers.com</li>
                </ul>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="mtg-cta-button">Request Free Moving Quote</a>
            </div>

            <div class="mtg-sidebar-box">
                <h3 class="mtg-sidebar-title">Coverage Neighborhoods</h3>
                <ul style="padding-left: 20px; font-size: 0.91rem; color: #475569; line-height: 1.8;">
                    <li>Uttarayon Planned Mega Township</li>
                    <li>City Centre Mall Commercial Zone</li>
                    <li>North Bengal Medical College (NBMCH)</li>
                    <li>Khaprail Road Residential Enclave</li>
                    <li>Shivmandir & Dagapur Belts</li>
                    <li>Kawakhali Healthcare & Housing Area</li>
                    <li>Matigara Bazaar & Transport Stand</li>
                    <li>Bagdogra Airport Connecting Axis</li>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
