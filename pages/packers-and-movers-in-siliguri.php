<?php
/**
 * Page: Packers and Movers in Siliguri
 * Description: Premier relocation, household packing, commercial logistics, defense transfers, and vehicle transport services in Siliguri, North Bengal.
 * Author: Shree Ashirwad Packers and Movers
 * Meta: 100% Handcrafted Tier-1 City Authority Hub, Google Compliant Schemas, Scoped CSS Parity
 */
defined('ROOT_PATH') OR define('ROOT_PATH', realpath(__DIR__ . '/..'));
require_once ROOT_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Packers and Movers in Siliguri | Reliable Relocation Services</title>
    <meta name="description" content="Top-rated packers and movers in Siliguri. Verified household moving, defense transfers, tea estate logistics, car bike shifting, and North Bengal transport with transparent rates.">
    <meta name="keywords" content="packers and movers in siliguri, movers and packers siliguri, house shifting siliguri, transport company siliguri, car carrier siliguri">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri">
    <meta property="og:title" content="Packers and Movers in Siliguri | Shree Ashirwad Packers">
    <meta property="og:description" content="Professional packing and moving services in Siliguri. Safe domestic shifting, military relocation, tea industry cargo, and vehicle carriers across North Bengal and Northeast India.">
    <meta property="og:url" content="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri">
    <meta property="og:type" content="website">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        /* Scoped CSS for Siliguri City Authority Hub - slg prefix */
        .slg-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.6;
        }
        .slg-hero-section {
            background: linear-gradient(135deg, #1e3a8a 0%, #0d9488 100%);
            color: #ffffff;
            border-radius: 14px;
            padding: 40px 25px;
            margin-bottom: 30px;
            box-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.1);
        }
        .slg-hero-title {
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 15px;
            line-height: 1.25;
            color: #ffffff;
        }
        .slg-hero-subtitle {
            font-size: 1.1rem;
            margin-bottom: 20px;
            color: #e0f2fe;
            max-width: 900px;
        }
        .slg-meta-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .slg-badge-item {
            background: rgba(255, 255, 255, 0.18);
            border: 1px solid rgba(255, 255, 255, 0.35);
            padding: 6px 14px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            color: #ffffff;
        }
        .slg-main-grid {
            display: grid;
            grid-template-columns: 2fr 1fr;
            gap: 30px;
            margin-bottom: 35px;
        }
        @media (max-width: 900px) {
            .slg-main-grid {
                grid-template-columns: 1fr;
            }
        }
        .slg-content-col {
            min-width: 0;
        }
        .slg-sidebar-col {
            min-width: 0;
        }
        .slg-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 28px 24px;
            margin-bottom: 28px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .slg-section-title {
            font-size: 1.65rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 18px;
            border-bottom: 2px solid #e2e8f0;
            padding-bottom: 10px;
        }
        .slg-lead-p {
            font-size: 1.05rem;
            color: #334155;
            margin-bottom: 16px;
        }
        .slg-body-p {
            font-size: 0.98rem;
            color: #475569;
            margin-bottom: 16px;
        }
        .slg-image-container {
            max-width: 580px;
            margin: 22px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .slg-image-container img {
            width: 100%;
            max-height: 380px;
            object-fit: cover;
            display: block;
        }
        .slg-image-caption {
            padding: 10px 14px;
            font-size: 0.85rem;
            color: #475569;
            text-align: center;
            background: #f1f5f9;
            border-top: 1px solid #e2e8f0;
            font-weight: 500;
        }
        .slg-highlight-box {
            background: #f0fdf4;
            border-left: 4px solid #16a34a;
            padding: 16px 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .slg-highlight-title {
            font-weight: 700;
            color: #166534;
            margin-bottom: 6px;
            font-size: 1.02rem;
        }
        .slg-highlight-desc {
            font-size: 0.94rem;
            color: #14532d;
            margin: 0;
        }
        .slg-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 18px;
            margin: 22px 0;
        }
        .slg-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px;
            transition: all 0.2s ease;
        }
        .slg-feature-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 6px 14px rgba(0, 0, 0, 0.06);
            border-color: #cbd5e1;
        }
        .slg-card-head {
            font-weight: 700;
            font-size: 1.05rem;
            color: #0f766e;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        .slg-card-text {
            font-size: 0.92rem;
            color: #475569;
            margin: 0;
            line-height: 1.5;
        }
        .slg-table-wrap {
            overflow-x: auto;
            margin: 22px 0;
        }
        .slg-pricing-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.94rem;
        }
        .slg-pricing-table th {
            background: #1e3a8a;
            color: #ffffff;
            text-align: left;
            padding: 12px 14px;
            font-weight: 600;
            border: 1px solid #1e3a8a;
        }
        .slg-pricing-table td {
            padding: 11px 14px;
            border: 1px solid #e2e8f0;
            color: #334155;
        }
        .slg-pricing-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .slg-pricing-table tr:hover {
            background: #f1f5f9;
        }
        .slg-steps-container {
            display: flex;
            flex-direction: column;
            gap: 14px;
            margin: 20px 0;
        }
        .slg-step-item {
            display: flex;
            gap: 14px;
            align-items: flex-start;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 14px 16px;
        }
        .slg-step-number {
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
        .slg-step-body {
            flex: 1;
        }
        .slg-step-heading {
            font-weight: 700;
            font-size: 0.98rem;
            color: #1e293b;
            margin-bottom: 4px;
        }
        .slg-step-desc {
            font-size: 0.91rem;
            color: #475569;
            margin: 0;
        }
        .slg-faq-accordion {
            margin: 20px 0;
        }
        .slg-faq-item {
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 12px;
            overflow: hidden;
        }
        .slg-faq-question {
            background: #f8fafc;
            padding: 14px 18px;
            font-weight: 600;
            font-size: 1rem;
            color: #1e3a8a;
            cursor: pointer;
            border-bottom: 1px solid #e2e8f0;
        }
        .slg-faq-answer {
            padding: 14px 18px;
            font-size: 0.93rem;
            color: #475569;
            background: #ffffff;
            line-height: 1.6;
        }
        .slg-sidebar-box {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 12px;
            padding: 22px 18px;
            margin-bottom: 24px;
        }
        .slg-sidebar-title {
            font-size: 1.2rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
            border-bottom: 2px solid #0d9488;
            padding-bottom: 6px;
        }
        .slg-cta-button {
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
        .slg-cta-button:hover {
            background: #0f766e;
            color: #ffffff;
        }
        .slg-cluster-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 22px;
            margin-top: 30px;
        }
        .slg-cluster-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 14px;
        }
        .slg-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }
        .slg-cluster-link {
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
        .slg-cluster-link:hover {
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
        "name": "Shree Ashirwad Packers and Movers Siliguri",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "@id": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri",
        "telephone": "+91 9835565233",
        "priceRange": "₹3,200 - ₹62,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Sevoke Road, Near Planet Mall & Checkpost",
            "addressLocality": "Siliguri",
            "addressRegion": "West Bengal",
            "postalCode": "734001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 26.7271,
            "longitude": 88.4239
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
            ],
            "opens": "06:30",
            "closes": "22:00"
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
                "name": "Packers and Movers in West Bengal",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Siliguri",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-siliguri"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Relocation & Transport Logistics",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Siliguri"
        },
        "areaServed": {
            "@type": "AdministrativeArea",
            "name": "Siliguri, Darjeeling & Jalpaiguri Districts, North Bengal"
        },
        "description": "Professional packing, household shifting, defense corps transfers, tea estate commercial transit, car carriers, and multimodal logistics across Siliguri and the Northeast corridor."
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
                "name": "How much does local home shifting cost in Siliguri?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting charges within Siliguri (such as between Sevoke Road, Pradhan Nagar, Matigara, or Hakimpara) usually range from ₹3,200 to ₹6,500 for a 1 BHK, ₹5,500 to ₹11,500 for a 2 BHK, and ₹8,500 to ₹18,000 for a 3 BHK residence, depending on furniture volume, floor elevation, and packaging quality."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide relocation assistance for military and defense personnel in Sukna and Bengdubi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly execute transfer relocations for Indian Army officers, BSF, and CRPF families stationed at Sukna Military Station, Bengdubi Cantonment, and Kadamtala. We issue official IBA-format consignments, itemized inventories, and bills for defense claim reimbursement."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle vehicle transportation from Siliguri to other states?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide specialized enclosed car carrier trucks and safe wheel-chocked motorcycle transport from Siliguri to destinations across India, complete with transit insurance and physical condition inspection reports."
                }
            },
            {
                "@type": "Question",
                "name": "How do you navigate monsoon challenges and hilly terrain around North Bengal?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our trucks feature 100% waterproof heavy-duty tarpaulins, sealed container bodies, and all-weather moisture-resistant plastic stretch wrapping. Our drivers have decades of driving experience across Dooars plains and hill slopes connecting Siliguri to Darjeeling and Sikkim."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once ROOT_PATH . '/includes/header.php'; ?>

<main class="slg-wrap">
    <!-- Hero Banner -->
    <section class="slg-hero-section">
        <h1 class="slg-hero-title">Packers and Movers in Siliguri</h1>
        <p class="slg-hero-subtitle">Leading packing and moving company in Siliguri, North Bengal. Secure residential shifting, defense personnel transfers, tea industry commercial cargo, and enclosed automobile carriers across the Siliguri Corridor.</p>
        <div class="slg-meta-badges">
            <span class="slg-badge-item">✓ Gateway to North Bengal & Northeast</span>
            <span class="slg-badge-item">✓ Military & Defense Relocation Specialist</span>
            <span class="slg-badge-item">✓ All-Weather Moisture Sealed Packing</span>
            <span class="slg-badge-item">✓ NJP Junction & Bagdogra Airport Transit</span>
        </div>
    </section>

    <!-- Main Content Layout -->
    <div class="slg-main-grid">
        <div class="slg-content-col">
            <!-- Section 1: Overview & Strategic Hub Role -->
            <section class="slg-section">
                <h2 class="slg-section-title">Professional Packing and Moving Services in Siliguri</h2>
                <p class="slg-lead-p">Siliguri occupies a position of supreme geographical and economic significance in Eastern India. Situated at the base of the Eastern Himalayas in the plains of the Darjeeling and Jalpaiguri districts, Siliguri represents the vital "Chicken's Neck" transport artery that links mainland India with the eight northeastern states, Sikkim, Nepal, and Bhutan. As North Bengal's foremost commercial capital, education nexus, medical hub, and logistics gateway, Siliguri demands moving services characterized by heavy logistical capability, speed, and rock-solid reliability.</p>
                
                <p class="slg-body-p">At Shree Ashirwad Packers and Movers, we bring over sixteen years of specialized transport experience to Siliguri. Whether you are transferring your family from a duplex in Matigara to a high-rise near Sevoke Road, moving an office near Bidhan Market, or dispatching household effects to southern or western India, our experienced moving crews deliver exceptional service. Operating in close coordination with our corporate headquarters via <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a> and major state hubs via <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata">Packers and Movers in Kolkata</a>, we provide unified door-to-door logistics across national highways.</p>

                <div class="slg-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods loading in container truck in Siliguri">
                    <div class="slg-image-caption">Systematic loading of household goods and furniture in Siliguri, North Bengal.</div>
                </div>

                <div class="slg-highlight-box">
                    <div class="slg-highlight-title">Why Siliguri Chooses Shree Ashirwad Packers</div>
                    <div class="slg-highlight-desc">From navigating congested market streets along Hill Cart Road to coordinating long-distance container freight from New Jalpaiguri (NJP) logistics yards, our operations team ensures strict adherence to transit schedules and zero cargo damage.</div>
                </div>

                <p class="slg-body-p">Unlike local unverified cart operators who hire untrained daily laborers, our staff consists of full-time, vetted packing technicians, certified carpenters, and background-checked drivers. We treat your household goods, electronic appliances, delicate chinaware, and personal furniture with the respect and diligence they deserve.</p>

                <p class="slg-body-p">Siliguri's climate experiences heavy sub-Himalayan monsoon rainfall and high humidity. Recognizing these environmental factors, our packing protocols incorporate specialized moisture-resistant plastic sheeting, heavy-gauge stretch film, and silica desiccant pouches inside corrugated cartons to ensure zero moisture infiltration during transit.</p>
            </section>

            <!-- Section 2: Specialized Relocation Offerings -->
            <section class="slg-section">
                <h2 class="slg-section-title">Comprehensive Relocation Services Across Siliguri</h2>
                <p class="slg-lead-p">From defense cantonment quarters to corporate retail showrooms and peaceful residential neighborhoods, we customize our moving plans to suit your exact needs, timeframe, and volume.</p>

                <div class="slg-card-grid">
                    <div class="slg-feature-card">
                        <div class="slg-card-head">🏠 Household Relocation</div>
                        <p class="slg-card-text">Complete residential packing and shifting covering furniture, modular kitchen appliances, glassware, clothing, and entertainment systems with complete room-by-room unpacking.</p>
                    </div>
                    <div class="slg-feature-card">
                        <div class="slg-card-head">🎖️ Defense & Paramilitary Transfers</div>
                        <p class="slg-card-text">Specialized moving assistance for Indian Army, Air Force, BSF, and CRPF personnel stationed at Sukna Military Station, Bengdubi Cantonment, and Kadamtala with certified bills.</p>
                    </div>
                    <div class="slg-feature-card">
                        <div class="slg-card-head">🍵 Tea Estate & Commercial Shifting</div>
                        <p class="slg-card-text">Logistics solutions for tea plantation administrative offices, tasting equipment, laboratory tools, retail showroom fixtures, and trade inventory across North Bengal.</p>
                    </div>
                    <div class="slg-feature-card">
                        <div class="slg-card-head">🚘 Car & Bike Carrier Services</div>
                        <p class="slg-card-text">Enclosed vehicle carriers and secured motorcycle transit equipped with custom tire chocks, heavy lashings, and comprehensive transit insurance protection.</p>
                    </div>
                </div>

                <div class="slg-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging materials in Siliguri">
                    <div class="slg-image-caption">Premium five-ply corrugated cartons and multi-layer bubble wrapping in Siliguri.</div>
                </div>

                <p class="slg-body-p">Our local service vehicles operate seamlessly across all key neighborhoods in Siliguri including Sevoke Road, Pradhan Nagar, Matigara, Hakimpara, Ashrampara, Champasari, Khalpara, Dabgram, Deshbandhupara, and the New Jalpaiguri (NJP) station perimeter. We also provide direct connectivity to southern industrial centers through <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur">Packers and Movers in Durgapur</a> and <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol">Packers and Movers in Asansol</a>.</p>

                <p class="slg-body-p">For clients moving to and from maritime logistics corridors, our extensive network extends all the way to the state's prime trade gateways including <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah">Packers and Movers in Howrah</a>, guaranteeing hassle-free multimodal freight connections.</p>
            </section>

            <!-- Section 3: Material Quality & Step-by-Step Methodology -->
            <section class="slg-section">
                <h2 class="slg-section-title">Packing Standards & Systematic Relocation Process</h2>
                <p class="slg-lead-p">The secret to zero damage during highway transit across North Bengal lies in our standardized packing methodology. In Siliguri, our teams utilize heavy-duty packing supplies engineered to withstand mountain road undulations and highway vibration.</p>

                <div class="slg-steps-container">
                    <div class="slg-step-item">
                        <div class="slg-step-number">1</div>
                        <div class="slg-step-body">
                            <div class="slg-step-heading">Pre-Move Survey & Transparent Estimate</div>
                            <div class="slg-step-desc">Our moving expert conducts a comprehensive on-site or digital inventory review, checks building access points, and furnishes an all-inclusive written quotation with no hidden charges.</div>
                        </div>
                    </div>
                    <div class="slg-step-item">
                        <div class="slg-step-number">2</div>
                        <div class="slg-step-body">
                            <div class="slg-step-heading">Multi-Layer Protective Packing</div>
                            <div class="slg-step-desc">Items receive tailored packaging—delicate chinaware in bubble wrap, furniture wrapped in heavy corrugated sheets and shrink film, and mattresses placed in waterproof poly covers.</div>
                        </div>
                    </div>
                    <div class="slg-step-item">
                        <div class="slg-step-number">3</div>
                        <div class="slg-step-body">
                            <div class="slg-step-heading">Scientific Truck Loading & Weight Distribution</div>
                            <div class="slg-step-desc">Heavier furniture forms a balanced base, medium boxes are stacked systematically, and fragile cartons are positioned securely with safety tie-downs in closed container trucks.</div>
                        </div>
                    </div>
                    <div class="slg-step-item">
                        <div class="slg-step-number">4</div>
                        <div class="slg-step-body">
                            <div class="slg-step-heading">Delivery, Unpacking & Furniture Assembly</div>
                            <div class="slg-step-desc">At your destination, our crew unloads each carton into designated rooms, reassembles beds and wardrobes, and safely disposes of used packing materials.</div>
                        </div>
                    </div>
                </div>

                <div class="slg-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Bed furniture dismantling and reassembly in Siliguri">
                    <div class="slg-image-caption">Expert furniture dismantling and protective padding carried out in Siliguri.</div>
                </div>

                <p class="slg-body-p">Whether you are relocating from an independent bungalow in Hakimpara or a high-rise condominium along Matigara corridor, our qualified carpenters expertly dismantle large furniture items such as multi-door almirahs, hydraulic beds, and executive study desks, carefully bagging all screws and fixtures for swift reassembly.</p>

                <p class="slg-body-p">For high-value artwork, marble statues, glass dining tables, and delicate electronic instruments, our packing team builds custom wooden crates on-site lined with dense styrofoam cushioning, ensuring your most prized possessions remain completely undisturbed during highway transit.</p>
            </section>

            <!-- Section 4: Key Neighborhoods & Corridors in Siliguri -->
            <section class="slg-section">
                <h2 class="slg-section-title">Key Localities & Moving Corridors Covered in Siliguri</h2>
                <p class="slg-lead-p">Siliguri spans a vibrant mix of bustling commercial lanes, modern planned residential sectors, defense areas, and suburban arterial corridors. Our local fleet provides rapid coverage across every pocket of the city.</p>

                <div class="slg-card-grid">
                    <div class="slg-feature-card">
                        <div class="slg-card-head">📍 Sevoke Road & Checkpost</div>
                        <p class="slg-card-text">Premier commercial and automotive corridor, upscale residential enclaves, shopping malls, and swift access toward the Dooars and Sikkim highway.</p>
                    </div>
                    <div class="slg-feature-card">
                        <div class="slg-card-head">📍 Matigara & City Centre Zone</div>
                        <p class="slg-card-text">Modern high-rise residential complexes, gated townships, medical institutions, and broad four-lane connectivity along National Highway 27.</p>
                    </div>
                    <div class="slg-feature-card">
                        <div class="slg-card-head">📍 Pradhan Nagar & Junction Area</div>
                        <p class="slg-card-text">Vital transit hub near Siliguri Junction railway station, commercial hotels, business offices, and established family residences.</p>
                    </div>
                    <div class="slg-feature-card">
                        <div class="slg-card-head">📍 Hakimpara & Ashrampara</div>
                        <p class="slg-card-text">Historic, leafy residential neighborhoods in central Siliguri with independent houses, schools, and traditional cultural landmarks.</p>
                    </div>
                </div>

                <div class="slg-highlight-box">
                    <div class="slg-highlight-title">Defense Relocation Documentation Support</div>
                    <div class="slg-highlight-desc">We furnish official IBA-format consignments, itemized inventories, transit insurance receipts, and GST invoices required for military and paramilitary transfer claim reimbursements.</div>
                </div>

                <p class="slg-body-p">For defense officers moving between North Bengal cantonments and central command bases, we coordinate smooth inter-state moves connecting with our established networks in Jharkhand, Bihar, and West Bengal.</p>

                <p class="slg-body-p">Our freight consolidation hub near the New Jalpaiguri (NJP) railway corridor facilitates seamless multimodal transit for large commercial consignments and heavy household goods traveling across long national distances. Furthermore, for time-critical corporate documentation and sensitive medical electronics, our airport logistics desk near Bagdogra International Airport arranges prioritized air-cargo dispatch with door-to-door escorting.</p>
            </section>

            <!-- Section 5: Transparent Tariff Structure -->
            <section class="slg-section">
                <h2 class="slg-section-title">Transparent Pricing Estimator for Siliguri Relocations</h2>
                <p class="slg-lead-p">We maintain complete transparency in our pricing structure, ensuring our clients receive high-value moving services with zero hidden levies. Use our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges calculator</a> to plan your budget accurately.</p>

                <div class="slg-table-wrap">
                    <table class="slg-pricing-table">
                        <thead>
                            <tr>
                                <th>Shifting Type / Configuration</th>
                                <th>Packaging Standard</th>
                                <th>Labor & Handling</th>
                                <th>Estimated Tariff Range</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1 BHK Apartment Shifting</td>
                                <td>Standard Dual-Layer Corrugated</td>
                                <td>Included (2-3 Crew)</td>
                                <td>₹3,200 - ₹6,500</td>
                            </tr>
                            <tr>
                                <td>2 BHK Residence Shifting</td>
                                <td>Premium Multi-Layer + Bubble Wrap</td>
                                <td>Included (3-4 Crew)</td>
                                <td>₹5,500 - ₹11,500</td>
                            </tr>
                            <tr>
                                <td>3 BHK / Independent Bungalow</td>
                                <td>Heavy-Duty 5-Ply + Edge Guards</td>
                                <td>Included (4-6 Crew)</td>
                                <td>₹8,500 - ₹18,000</td>
                            </tr>
                            <tr>
                                <td>Two-Wheeler Carrier</td>
                                <td>Protective Wrap & Wheel Chocks</td>
                                <td>Ramp Loading Included</td>
                                <td>₹2,000 - ₹4,500</td>
                            </tr>
                            <tr>
                                <td>Car Carrier (Hatchback / SUV)</td>
                                <td>Enclosed Dedicated Vehicle Truck</td>
                                <td>Lash-Tied & Fully Insured</td>
                                <td>₹7,500 - ₹19,500</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="slg-highlight-box">
                    <div class="slg-highlight-title">All-Inclusive Transparent Quotes</div>
                    <div class="slg-highlight-desc">Every written proposal from Shree Ashirwad Packers includes packing materials, loading, transit freight, toll charges, unloading, and transit insurance without last-minute surprises.</div>
                </div>

                <div class="slg-image-container">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Siliguri">
                    <div class="slg-image-caption">Dedicated door-to-door closed carrier truck operating across Siliguri and North Bengal.</div>
                </div>

                <p class="slg-body-p">Whether you are relocating locally within Siliguri or moving across state lines to Bihar, Jharkhand, Assam, or Delhi NCR, our GPS-enabled container vehicles provide regular tracking updates and guaranteed on-time delivery.</p>

                <p class="slg-body-p">For families in transitional housing or corporate clients renovating commercial spaces, we provide secure short-term and long-term warehousing facilities in Siliguri. Our warehouse spaces feature 24/7 CCTV surveillance, fire prevention systems, raised concrete plinths to prevent monsoon water logging, and pest-controlled wooden storage pallets.</p>
            </section>

            <!-- Section 6: Frequently Asked Questions -->
            <section class="slg-section">
                <h2 class="slg-section-title">Frequently Asked Questions — Siliguri Relocation</h2>
                <div class="slg-faq-accordion">
                    <div class="slg-faq-item">
                        <div class="slg-faq-question">How much does local home shifting cost in Siliguri?</div>
                        <div class="slg-faq-answer">Local shifting charges within Siliguri (such as between Sevoke Road, Pradhan Nagar, Matigara, or Hakimpara) usually range from ₹3,200 to ₹6,500 for a 1 BHK, ₹5,500 to ₹11,500 for a 2 BHK, and ₹8,500 to ₹18,000 for a 3 BHK residence, depending on furniture volume, floor elevation, and packaging quality.</div>
                    </div>
                    <div class="slg-faq-item">
                        <div class="slg-faq-question">Do you provide relocation assistance for military and defense personnel in Sukna and Bengdubi?</div>
                        <div class="slg-faq-answer">Yes, we regularly execute transfer relocations for Indian Army officers, BSF, and CRPF families stationed at Sukna Military Station, Bengdubi Cantonment, and Kadamtala. We issue official IBA-format consignments, itemized inventories, and bills for defense claim reimbursement.</div>
                    </div>
                    <div class="slg-faq-item">
                        <div class="slg-faq-question">Can you handle vehicle transportation from Siliguri to other states?</div>
                        <div class="slg-faq-answer">Yes, we provide specialized enclosed car carrier trucks and safe wheel-chocked motorcycle transport from Siliguri to destinations across India, complete with transit insurance and physical condition inspection reports.</div>
                    </div>
                    <div class="slg-faq-item">
                        <div class="slg-faq-question">How do you navigate monsoon challenges and hilly terrain around North Bengal?</div>
                        <div class="slg-faq-answer">Our trucks feature 100% waterproof heavy-duty tarpaulins, sealed container bodies, and all-weather moisture-resistant plastic stretch wrapping. Our drivers have decades of driving experience across Dooars plains and hill slopes connecting Siliguri to Darjeeling and Sikkim.</div>
                    </div>
                </div>
            </section>

            <!-- Connected Localities Cluster Module -->
            <div class="slg-cluster-card">
                <h3 class="slg-cluster-title">Connected Localities & Regional Service Hubs</h3>
                <p class="slg-body-p">Explore our verified packing and moving networks connecting Siliguri with key centers across West Bengal and Eastern India:</p>
                <div class="slg-cluster-grid">
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-matigara-siliguri" class="slg-cluster-link">Matigara Siliguri</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-pradhan-nagar-siliguri" class="slg-cluster-link">Pradhan Nagar Siliguri</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sevoke-road-siliguri" class="slg-cluster-link">Sevoke Road Siliguri</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kolkata" class="slg-cluster-link">Kolkata Authority Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-howrah" class="slg-cluster-link">Howrah City Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-durgapur" class="slg-cluster-link">Durgapur Industrial Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-asansol" class="slg-cluster-link">Asansol Rail Hub</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/" class="slg-cluster-link">Ranchi Corporate HQ</a>
                </div>
            </div>
        </div>

        <!-- Sidebar Column -->
        <aside class="slg-sidebar-col">
            <div class="slg-sidebar-box">
                <h3 class="slg-sidebar-title">Siliguri Branch Office</h3>
                <p class="slg-body-p">Planning a home, office, or defense transfer in Siliguri? Contact our local customer support team for an instant quote.</p>
                <ul style="padding-left: 20px; margin-bottom: 15px; font-size: 0.93rem; color: #334155;">
                    <li><strong>Desk Address:</strong> Sevoke Road, Near Checkpost, Siliguri</li>
                    <li><strong>Service Hours:</strong> 6:30 AM - 10:00 PM (Daily)</li>
                    <li><strong>Helpline:</strong> +91 9835565233</li>
                    <li><strong>Email:</strong> info@shreeashirwadpackers.com</li>
                </ul>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="slg-cta-button">Get Free Relocation Quote</a>
            </div>

            <div class="slg-sidebar-box">
                <h3 class="slg-sidebar-title">Key Coverage Locations</h3>
                <ul style="padding-left: 20px; font-size: 0.91rem; color: #475569; line-height: 1.8;">
                    <li>Sevoke Road & Planet Mall Area</li>
                    <li>Matigara City Centre & Khaprail Road</li>
                    <li>Pradhan Nagar & Junction Environs</li>
                    <li>Hakimpara & Ashrampara Townships</li>
                    <li>Sukna Military Station & Cantonment</li>
                    <li>Bengdubi Armed Forces Station</li>
                    <li>Bidhan Market & Hong Kong Market</li>
                    <li>New Jalpaiguri (NJP) Logistics Belt</li>
                </ul>
            </div>
        </aside>
    </div>
</main>

<?php include_once ROOT_PATH . '/includes/footer.php'; ?>
</body>
</html>
