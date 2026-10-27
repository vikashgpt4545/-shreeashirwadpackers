<?php
/**
 * Page Name: Ranchi to Bagodar Packers and Movers
 * Route Slug: ranchi-to-bagodar-packers-and-movers
 * Group: Group 2 (Inside Jharkhand -> Bagodar) - Route 6
 * Meta Title: Packers and Movers Ranchi to Bagodar | Safe Return Relocation
 * Meta Description: Professional packers and movers from Ranchi to Bagodar. 140 km seamless transit, 5-layer packing, household shifting, bike parcel, IBA approved bills, safe delivery.
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Packers and Movers Ranchi to Bagodar | Safe Return Relocation";
$page_desc = "Professional packers and movers from Ranchi to Bagodar. 140 km seamless transit, 5-layer packing, household shifting, bike parcel, IBA approved bills, safe delivery.";
$canonical_url = "https://www.shreeashirwadpackers.com/ranchi-to-bagodar-packers-and-movers";
$route_origin = "Ranchi";
$route_destination = "Bagodar";

// Open Graph
$og_title = "Packers and Movers Ranchi to Bagodar | Shree Ashirwad Packers";
$og_description = "Reliable Ranchi to Bagodar household shifting, car transport & bike parcel. 140 km transit, IBA approved bills, 100% zero damage guarantee.";
$og_url = $canonical_url;
$og_image = SITE_BASE_URL . "/images/intercity-shifting-truck-loading-jharkhand.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="ranchi to bagodar packers and movers, packers and movers ranchi to bagodar, house shifting ranchi to bagodar, harihar dham movers ranchi bagodar, car transport ranchi to bagodar, bike parcel ranchi to bagodar, iba approved packers ranchi bagodar">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Ranchi">

    <!-- Open Graph Metadata -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="<?php echo htmlspecialchars($og_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($og_description); ?>">
    <meta property="og:url" content="<?php echo $og_url; ?>">
    <meta property="og:image" content="<?php echo $og_image; ?>">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($og_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($og_description); ?>">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">

    <!-- Favicon & Stylesheets -->
    <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Scoped CSS for Route 6 (Ranchi to Bagodar) -->
    <style>
        :root {
            --ran2bag-primary: #1e3a8a;
            --ran2bag-secondary: #0369a1;
            --ran2bag-accent: #f97316;
            --ran2bag-dark: #0f172a;
            --ran2bag-light: #f8fafc;
            --ran2bag-border: #e2e8f0;
            --ran2bag-muted: #64748b;
            --ran2bag-radius: 12px;
            --ran2bag-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
        }

        .ran2bag-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 75px 20px 70px;
            position: relative;
        }

        .ran2bag-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .ran2bag-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 22px;
        }

        .ran2bag-breadcrumbs a {
            color: #f8fafc;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .ran2bag-breadcrumbs a:hover {
            color: var(--ran2bag-accent);
            text-decoration: underline;
        }

        .ran2bag-hero-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .ran2bag-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.7;
            max-width: 860px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .ran2bag-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 35px;
        }

        .ran2bag-badge {
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.25);
            padding: 8px 18px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 600;
            backdrop-filter: blur(8px);
            display: inline-flex;
            align-items: center;
            gap: 8px;
            color: #ffffff;
        }

        .ran2bag-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .ran2bag-btn-primary {
            background-color: var(--ran2bag-accent);
            color: #ffffff;
            padding: 14px 30px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 1.05rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 14px rgba(249, 115, 22, 0.35);
            transition: all 0.3s ease;
        }

        .ran2bag-btn-primary:hover {
            background-color: #ea580c;
            transform: translateY(-2px);
        }

        .ran2bag-btn-secondary {
            background: rgba(255, 255, 255, 0.12);
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: #ffffff;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 1.05rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            backdrop-filter: blur(8px);
            transition: all 0.3s ease;
        }

        .ran2bag-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }

        .ran2bag-section {
            padding: 65px 0;
        }

        .bg-light {
            background-color: var(--ran2bag-light);
        }

        .ran2bag-section-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.15rem;
            font-weight: 700;
            color: var(--ran2bag-dark);
            margin-bottom: 15px;
            text-align: center;
        }

        .ran2bag-section-subtitle {
            font-size: 1.05rem;
            color: var(--ran2bag-muted);
            text-align: center;
            max-width: 760px;
            margin: 0 auto 45px;
            line-height: 1.6;
        }

        .ran2bag-two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .ran2bag-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            margin-top: 35px;
        }

        .ran2bag-card {
            background: #ffffff;
            border: 1px solid var(--ran2bag-border);
            border-radius: var(--ran2bag-radius);
            padding: 28px 22px;
            box-shadow: var(--ran2bag-shadow);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .ran2bag-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.12);
        }

        .ran2bag-card-icon {
            font-size: 2.2rem;
            color: var(--ran2bag-primary);
            margin-bottom: 18px;
        }

        .ran2bag-card h3, .ran2bag-card h4 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 12px;
        }

        .ran2bag-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        .ran2bag-img-wrap {
            border-radius: var(--ran2bag-radius);
            overflow: hidden;
            box-shadow: var(--ran2bag-shadow);
            border: 1px solid var(--ran2bag-border);
        }

        .ran2bag-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .ran2bag-img-wrap:hover img {
            transform: scale(1.03);
        }

        .ran2bag-table-container {
            overflow-x: auto;
            margin: 30px 0;
            border-radius: var(--ran2bag-radius);
            box-shadow: var(--ran2bag-shadow);
            border: 1px solid var(--ran2bag-border);
            background: #ffffff;
        }

        .ran2bag-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.96rem;
        }

        .ran2bag-table th {
            background-color: var(--ran2bag-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 600;
        }

        .ran2bag-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
        }

        .ran2bag-table tr:hover {
            background-color: #f8fafc;
        }

        .ran2bag-steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .ran2bag-step {
            background: #ffffff;
            border: 1px solid var(--ran2bag-border);
            border-radius: var(--ran2bag-radius);
            padding: 24px 18px;
            text-align: center;
            position: relative;
        }

        .ran2bag-step-num {
            width: 44px;
            height: 44px;
            background: var(--ran2bag-primary);
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            margin: 0 auto 16px;
            font-size: 1.1rem;
        }

        .ran2bag-step h4 {
            font-size: 1.1rem;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .ran2bag-step p {
            font-size: 0.9rem;
            color: #64748b;
            line-height: 1.5;
            margin: 0;
        }

        .ran2bag-faq-box {
            max-width: 900px;
            margin: 0 auto;
        }

        .ran2bag-faq-item {
            background: #ffffff;
            border: 1px solid var(--ran2bag-border);
            border-radius: 10px;
            margin-bottom: 15px;
            padding: 20px 24px;
        }

        .ran2bag-faq-q {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .ran2bag-faq-q::before {
            content: "Q";
            background: var(--ran2bag-primary);
            color: #fff;
            font-size: 0.85rem;
            padding: 3px 9px;
            border-radius: 4px;
            font-weight: 800;
        }

        .ran2bag-faq-a {
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.65;
            margin: 0;
            padding-left: 32px;
        }

        .ran2bag-cta {
            background: linear-gradient(135deg, var(--ran2bag-dark) 0%, var(--ran2bag-primary) 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 45px 30px;
            text-align: center;
            margin-top: 45px;
        }

        .ran2bag-cta h3 {
            font-size: 1.85rem;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .ran2bag-cta p {
            font-size: 1.05rem;
            color: #cbd5e1;
            max-width: 650px;
            margin: 0 auto 25px;
            line-height: 1.6;
        }

        .ran2bag-btn {
            background: var(--ran2bag-accent);
            color: #ffffff;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.25s ease;
        }

        .ran2bag-btn:hover {
            background: #ea580c;
        }

        @media (max-width: 768px) {
            .ran2bag-hero-title {
                font-size: 2.1rem;
            }
            .ran2bag-two-col {
                grid-template-columns: 1fr;
            }
            .ran2bag-cta-group {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="ran2bag-hero">
        <div class="ran2bag-container">
            <nav class="ran2bag-breadcrumbs" aria-label="Breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo;
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bagodar">Bagodar</a> &raquo;
                <span>Ranchi to Bagodar</span>
            </nav>

            <h1 class="ran2bag-hero-title">Trusted Packers and Movers Ranchi to Bagodar</h1>
            <p class="ran2bag-hero-subtitle">Moving from the state capital to Bagodar? Experience smooth, safe, and punctual 140 km relocation with Shree Ashirwad Packers and Movers. We provide 5-layer multi-barrier packaging, customized container vehicles, IBA-approved documentation for government/PSU employees, and comprehensive doorstep setup across Bagodar and nearby rural localities.</p>

            <div class="ran2bag-badges">
                <span class="ran2bag-badge"><i class="fa-solid fa-road"></i> 140 KM via NH-20 &amp; NH-522</span>
                <span class="ran2bag-badge"><i class="fa-solid fa-clock"></i> 3.5 - 4.5 Hours Direct Transit</span>
                <span class="ran2bag-badge"><i class="fa-solid fa-file-invoice"></i> 100% IBA Approved Bills</span>
                <span class="ran2bag-badge"><i class="fa-solid fa-shield-halved"></i> Comprehensive Transit Cover</span>
                <span class="ran2bag-badge"><i class="fa-solid fa-box-open"></i> Multi-Layer Protective Packing</span>
            </div>

            <div class="ran2bag-cta-group">
                <a href="tel:+918409531615" class="ran2bag-btn-primary"><i class="fa-solid fa-phone"></i> Call 8409531615</a>
                <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Ranchi%20to%20Bagodar%20shifting" class="ran2bag-btn-secondary" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Instant WhatsApp Quote</a>
            </div>
        </div>
    </header>

    <!-- Overview Section with Image 1 -->
    <section class="ran2bag-section">
        <div class="ran2bag-container">
            <div class="ran2bag-two-col">
                <div>
                    <h2 class="ran2bag-section-title" style="text-align: left;">Seamless Relocation from Jharkhand Capital to Bagodar</h2>
                    <p>Relocating from the state capital of Ranchi to the thriving agricultural and commercial highway town of Bagodar in Giridih district spans roughly 140 kilometers. The journey proceeds north via the four-lane NH-20 past Ormanjhi, Ramgarh, and Hazaribagh, before joining NH-522 via Bishungarh to reach Bagodar on the Grand Trunk Road (NH-19). This well-established corridor is one of our most active intercity relocation lanes.</p>
                    <p>Whether you are a government officer, judicial magistrate, or healthcare professional being posted to Bagodar subdivision, a business family returning to your ancestral hometown near Harihar Dham, or an educator transferring to a regional college, Shree Ashirwad Packers and Movers delivers a stress-free experience. We eliminate the fatigue of heavy lifting, packaging, and highway driving through our disciplined, in-house team of relocation specialists.</p>
                    <p>Our fleet consists of dedicated, weatherproof container vehicles built to absorb road bumps and vibrations. With trained loaders, skilled carpenters, and experienced drivers who know local entry permits and rural road navigation in Bagodar, your entire shifting process is completed on schedule within a single working day.</p>
                </div>
                <div class="ran2bag-img-wrap">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Intercity shifting truck loading goods in Ranchi for Bagodar transit" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="ran2bag-section bg-light">
        <div class="ran2bag-container">
            <h2 class="ran2bag-section-title">Why Shree Ashirwad is Preferred on Ranchi to Bagodar Route</h2>
            <p class="ran2bag-section-subtitle">Discover the operational safeguards, transparent policies, and rigorous standards that distinguish our intercity relocation service.</p>

            <div class="ran2bag-features-grid">
                <div class="ran2bag-card">
                    <div class="ran2bag-card-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                    <h3>5-Layer Barrier Packing</h3>
                    <p>We wrap all electronic goods, solid wood furniture, chinaware, and glass tops using bubble sheets, corrugated fluting, thermal foam, corner guards, and high-tensile stretch film to resist road friction.</p>
                </div>

                <div class="ran2bag-card">
                    <div class="ran2bag-card-icon"><i class="fa-solid fa-truck-moving"></i></div>
                    <h3>Dedicated Closed Containers</h3>
                    <p>We deploy closed-body, weatherproof container trucks rather than open trolleys. Your consignments remain dry, locked, and completely protected from highway dust, rain showers, and transit vibration.</p>
                </div>

                <div class="ran2bag-card">
                    <div class="ran2bag-card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <h3>Govt &amp; PSU Transfer Claim Bills</h3>
                    <p>We provide full documentation for government and corporate relocation reimbursement: IBA-approved bilty (LR), computerized GST invoice, quotation comparison, and signed inventory receipts.</p>
                </div>

                <div class="ran2bag-card">
                    <div class="ran2bag-card-icon"><i class="fa-solid fa-people-carry-box"></i></div>
                    <h3>Expert In-House Crew</h3>
                    <p>We never outsource to untrained local day-laborers. Our background-verified crews are trained in proper dismantling of beds, modular wardrobes, TV wall mounts, and safe stairwell maneuvering.</p>
                </div>

                <div class="ran2bag-card">
                    <div class="ran2bag-card-icon"><i class="fa-solid fa-motorcycle"></i></div>
                    <h3>Bike &amp; Car Safe Transportation</h3>
                    <p>Relocating your motorbike, scooter, or personal sedan from Ranchi to Bagodar? We use wheel chocks, heavy ratchet lashings, and dense padding for zero-scratch door-to-door vehicle relocation.</p>
                </div>

                <div class="ran2bag-card">
                    <div class="ran2bag-card-icon"><i class="fa-solid fa-handshake-angle"></i></div>
                    <h3>Transparent Pricing &amp; Zero Hidden Fees</h3>
                    <p>No toll surprise, no diesel surcharge, and no sudden unloading fee upon arrival in Bagodar. You receive an all-inclusive, binding written quote before packing commences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Household Goods Section with Image 2 -->
    <section class="ran2bag-section">
        <div class="ran2bag-container">
            <div class="ran2bag-two-col">
                <div class="ran2bag-img-wrap">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household goods truck loading and stacking in Ranchi" loading="lazy">
                </div>
                <div>
                    <h2 class="ran2bag-section-title" style="text-align: left;">Engineered 5-Layer Packaging for Fragile &amp; Heavy Cargo</h2>
                    <p>Relocating across the 140 km highway corridor requires meticulous packaging to withstand bridge expansion joints, toll approaches, and internal rural roads around Bagodar. Shree Ashirwad Packers and Movers implements a rigorous 5-layer protective packing protocol for all residential consignments:</p>
                    <ul style="color: #475569; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
                        <li><strong>Layer 1 - Scratch-Proof Barrier:</strong> Virgin foam wrapping and soft cotton sheets applied directly to polished surfaces of wooden furniture, leather sofas, and LED screens.</li>
                        <li><strong>Layer 2 - Shock Absorption:</strong> High-density air bubble wrap (500 GSM) cushioning delicate dinnerware, glassware, decorative wall art, and precision kitchen electronics.</li>
                        <li><strong>Layer 3 - Structural Reinforcement:</strong> Heavy-gauge corrugated fluted rolls tailored around heavy appliances, dining tables, washing machines, and refrigerator corners.</li>
                        <li><strong>Layer 4 - Moisture &amp; Dust Seal:</strong> Industrial-grade poly-stretch wrap sealed airtight to safeguard items from road dust, soot, and monsoon rains.</li>
                        <li><strong>Layer 5 - Box Crating &amp; Strapping:</strong> Rigid 5-ply cartons taped with reinforced PVC tape, clearly marked with room tags and directional "This Side Up" labels.</li>
                    </ul>
                    <p>Our systematic labeling ensures that when our crew reaches your new residence in Bagodar Bazar, GT Road, or Harihar Dham area, every carton is placed immediately in its intended room without confusion.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Table Section -->
    <section class="ran2bag-section bg-light">
        <div class="ran2bag-container">
            <h2 class="ran2bag-section-title">Transparent Pricing: Ranchi to Bagodar Relocation Rates</h2>
            <p class="ran2bag-section-subtitle">Clear and competitive shifting charges for household, corporate, and vehicle transit along the 140 km corridor.</p>

            <div class="bag2dhn-table-container">
                <table class="ran2bag-table">
                    <thead>
                        <tr>
                            <th>Shifting Move Type</th>
                            <th>Packing &amp; Materials</th>
                            <th>Transport Vehicle</th>
                            <th>Estimated Duration</th>
                            <th>Approximate Price Range</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 BHK Apartment / Small Home</strong></td>
                            <td>3-Layer Standard Packing</td>
                            <td>Tata Ace / Bolero Maxi Truck</td>
                            <td>3.5 - 4.5 Hours</td>
                            <td>&#8377; 6,000 - &#8377; 9,500</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Complete Household</strong></td>
                            <td>5-Layer Multi-Barrier Packing</td>
                            <td>14 Ft Closed Container</td>
                            <td>4 - 5 Hours</td>
                            <td>&#8377; 9,500 - &#8377; 15,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Independent House</strong></td>
                            <td>Premium 5-Layer + Wooden Crating</td>
                            <td>17 Ft / 19 Ft Container Truck</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 14,500 - &#8377; 21,500</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Bungalow Shifting</strong></td>
                            <td>Complete White-Glove Service</td>
                            <td>Dedicated 22 Ft Heavy Container</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 19,500 - &#8377; 29,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>3-Layer Bubble &amp; Corrugated Wrap</td>
                            <td>Dedicated Vehicle Carrier</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 1,800 - &#8377; 3,200</td>
                        </tr>
                        <tr>
                            <td><strong>Car Transport (Hatchback / SUV)</strong></td>
                            <td>Protective Covers &amp; Lashing</td>
                            <td>Hydraulic Car Carrier Truck</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 4,500 - &#8377; 8,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="text-align: center; font-size: 0.9rem; color: #64748b; margin-top: 15px;">*Rates are indicative and vary based on floor levels, elevator availability, fragile quantity, and chosen insurance value. Contact us for a precise, binding quotation.</p>
        </div>
    </section>

    <!-- Vehicle Carrier Section with Image 3 -->
    <section class="ran2bag-section">
        <div class="ran2bag-container">
            <div class="ran2bag-two-col">
                <div>
                    <h2 class="ran2bag-section-title" style="text-align: left;">Safe Two-Wheeler &amp; Car Transportation</h2>
                    <p>Riding a motorcycle or driving an older vehicle over 140 km across hilly terrain in Ramgarh ghati and highway junctions can be exhausting and hazardous. Shree Ashirwad Packers and Movers provides specialized vehicle relocation services connecting Ranchi and Bagodar with total peace of mind.</p>
                    <p>For two-wheelers, our team handles careful pre-transit preparation. We drain excess petrol to prevent vapor leaks, shield headlights, digital consoles, side mirrors, and fuel tanks with corrugated padding, and secure the bike upright inside our truck with heavy-duty ratchet tie-downs.</p>
                    <p>For personal four-wheelers, we offer hydraulic car carrier transit or accompanied expert driver relocation with full insurance coverage. Your vehicle is thoroughly inspected with an odometer and body scratch record before departure and handed over in immaculate condition at your Bagodar address.</p>
                    <p>Our transport drivers are well-versed in navigating both high-speed expressway corridors and narrower village roads in Bagodar block, guaranteeing smooth and prompt vehicle delivery without delays.</p>
                </div>
                <div class="ran2bag-img-wrap">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Two wheeler motorcycle packing and carrier transport service" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Govt & Administrative Transfer Section with Image 4 -->
    <section class="ran2bag-section bg-light">
        <div class="ran2bag-container">
            <div class="ran2bag-two-col">
                <div class="ran2bag-img-wrap">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck navigating highway transit" loading="lazy">
                </div>
                <div>
                    <h2 class="ran2bag-section-title" style="text-align: left;">Government, Banking &amp; Administrative Transfer Support</h2>
                    <p>Ranchi is Jharkhand's administrative and governmental nerve centre, housing state secretariats, high court, central government regional headquarters, and state university administrative bodies. Officers, judges, bank managers, and engineers transferring from Ranchi to Bagodar require strict documentation to claim their travel allowance (TA/DA).</p>
                    <p>Shree Ashirwad Packers and Movers provides a 100% compliant documentation package, ensuring fast reimbursement without audit objections:</p>
                    <ul style="color: #475569; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
                        <li><strong>IBA-Approved Consignment Note (Bilty):</strong> Legally certified and acknowledged by all major public sector undertakings, defense, and banks.</li>
                        <li><strong>Itemized Packing Inventory:</strong> Detailed, numbered item lists signed by customer and team supervisor.</li>
                        <li><strong>Official Computerized GST Invoice:</strong> Compliant tax invoice with registered GSTIN and SAC transport code.</li>
                        <li><strong>Payment Money Receipt:</strong> Stamped official acknowledgement of payment received via online transfer or cash.</li>
                    </ul>
                    <p>Our administrative team ensures your relocation claim file is processed effortlessly by company finance departments without audit queries.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5-Step Process Section -->
    <section class="ran2bag-section">
        <div class="ran2bag-container">
            <h2 class="ran2bag-section-title">Our 5-Step Relocation Workflow: Ranchi to Bagodar</h2>
            <p class="ran2bag-section-subtitle">How our streamlined process guarantees a smooth, on-time, and damage-free moving experience.</p>

            <div class="ran2bag-steps-grid">
                <div class="ran2bag-step">
                    <div class="ran2bag-step-num">01</div>
                    <h4>Pre-Move Assessment</h4>
                    <p>We assess your household inventory via digital video survey or doorstep visit in Ranchi to calculate required truck size and packaging materials.</p>
                </div>
                <div class="ran2bag-step">
                    <div class="ran2bag-step-num">02</div>
                    <h4>Multi-Layer Packing</h4>
                    <p>Our skilled packers pack furniture, kitchenware, and fragile electronics using 5-layer protective materials on the scheduled morning.</p>
                </div>
                <div class="ran2bag-step">
                    <div class="ran2bag-step-num">03</div>
                    <h4>Safe Vehicle Loading</h4>
                    <p>Consignments are loaded methodically into our covered container truck, using shock cushions and load stabilizers for zero shifting during transit.</p>
                </div>
                <div class="ran2bag-step">
                    <div class="ran2bag-step-num">04</div>
                    <h4>Highway Transit</h4>
                    <p>Our driver navigates the 140 km route via NH-20 and NH-522, maintaining steady cruising speeds and providing continuous milestone updates.</p>
                </div>
                <div class="ran2bag-step">
                    <div class="ran2bag-step-num">05</div>
                    <h4>Unloading &amp; Placement</h4>
                    <p>Upon arrival in Bagodar, our team unloads all cartons into your chosen rooms, reassembles beds and tables, and removes unpacked waste.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Served Section -->
    <section class="ran2bag-section bg-light">
        <div class="ran2bag-container">
            <h2 class="ran2bag-section-title">Localities Covered Across Ranchi and Bagodar</h2>
            <p class="ran2bag-section-subtitle">Comprehensive pickup coverage across all Ranchi neighborhoods and direct doorstep delivery across Bagodar block.</p>

            <div class="ran2bag-two-col">
                <div class="ran2bag-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--ran2bag-accent); margin-right: 8px;"></i> Ranchi Pickup Areas</h4>
                    <p>Harmu Housing Colony, Kanke Road, Morabadi, Bariatu, Doranda, Lalpur, Ratu Road, Hinoo, Namkum, Ashok Nagar, Dhurwa, Booty More, Kokar, and Kadru.</p>
                </div>
                <div class="ran2bag-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--ran2bag-primary); margin-right: 8px;"></i> Bagodar Delivery Areas</h4>
                    <p>Bagodar Main Market, GT Road Chowk, Harihar Dham Area, Sariya Road, Atka, Banpura, Dondlo, Hesla, Kander, Jamtara Mor, Bishungarh Road Crossing, and neighboring rural centers.</p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="ran2bag-cta">
                <h3>Ready for a Hassle-Free Ranchi to Bagodar Move?</h3>
                <p>Contact Jharkhand's most trusted intercity relocation company today. Get an honest price quote, guaranteed transit timings, and complete peace of mind.</p>
                <a href="tel:+918409531615" class="ran2bag-btn"><i class="fa-solid fa-phone" style="margin-right: 8px;"></i> Call 8409531615 / 9835565233</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="ran2bag-section">
        <div class="ran2bag-container">
            <h2 class="ran2bag-section-title">Frequently Asked Questions: Ranchi to Bagodar Shifting</h2>
            <p class="ran2bag-section-subtitle">Clear answers to common questions regarding timelines, costs, and safety measures.</p>

            <div class="ran2bag-faq-box">
                <div class="ran2bag-faq-item">
                    <h4 class="ran2bag-faq-q">How much time does household shifting take from Ranchi to Bagodar?</h4>
                    <p class="ran2bag-faq-a">The distance between Ranchi and Bagodar is approximately 140 km via NH-20 and NH-522. Actual driving time for our container truck is approximately 3.5 to 4.5 hours. Including morning packing, careful loading, highway transit, and destination unloading, the complete move is finished within the same day.</p>
                </div>

                <div class="ran2bag-faq-item">
                    <h4 class="ran2bag-faq-q">Are your bills accepted for government employee claims in Bagodar?</h4>
                    <p class="ran2bag-faq-a">Yes, absolutely. We provide 100% genuine IBA-format consignment notes (bilty), official computerized GST tax invoices, stamped money receipts, and itemized inventory packing lists that are readily accepted by state government departments, judicial courts, schools, and banks.</p>
                </div>

                <div class="ran2bag-faq-item">
                    <h4 class="ran2bag-faq-q">Can you transport my motorcycle or scooter along with household items?</h4>
                    <p class="ran2bag-faq-a">Yes. We specialize in two-wheeler relocation. Your motorcycle or scooter is safely packaged with bubble wrap and corrugated padding, drained of excess fuel, and secured using heavy tie-down belts inside our covered container truck to prevent scratches and balance shifting.</p>
                </div>

                <div class="ran2bag-faq-item">
                    <h4 class="ran2bag-faq-q">Do you provide transit insurance for the Ranchi to Bagodar route?</h4>
                    <p class="ran2bag-faq-a">Yes. We offer comprehensive all-risk transit insurance policy coverage for all valuable household goods and electronics. In the rare event of transit accident or unexpected road incident, you are protected with fast claim settlement.</p>
                </div>

                <div class="ran2bag-faq-item">
                    <h4 class="ran2bag-faq-q">Do you assist with dismantling and reassembling furniture?</h4>
                    <p class="ran2bag-faq-a">Yes. Our crew includes experienced carpenters equipped with electric drills and hand tools who safely dismantle double beds, wardrobes, and dining tables in Ranchi and reassemble them at your new house in Bagodar at no extra hidden cost.</p>
                </div>

                <div class="ran2bag-faq-item">
                    <h4 class="ran2bag-faq-q">How do I book my moving date with Shree Ashirwad Packers?</h4>
                    <p class="ran2bag-faq-a">You can confirm your booking by calling our logistics hotline at 8409531615 or 9835565233. We recommend booking 2 to 3 days in advance to reserve your preferred moving date and dedicated container vehicle.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Schema Markup Scripts -->
    <!-- 1. MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Ranchi",
        "image": "<?php echo $og_image; ?>",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "₹₹",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Ranchi Main Road",
            "addressLocality": "Ranchi",
            "addressRegion": "Jharkhand",
            "postalCode": "834002",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.3441,
            "longitude": 85.3096
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "07:00",
            "closes": "21:00"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://www.youtube.com/@shreeashirwadpackers"
        ]
    }
    </script>

    <!-- 2. Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Intercity Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "AdministrativeArea",
                "name": "Ranchi"
            },
            {
                "@type": "AdministrativeArea",
                "name": "Bagodar"
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Ranchi to Bagodar Moving Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Household Relocation Ranchi to Bagodar"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Government Transfer Relocation Billing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Bike & Car Transportation Ranchi to Bagodar"
                    }
                }
            ]
        }
    }
    </script>

    <!-- 3. BreadcrumbList Schema -->
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
                "name": "Bagodar Packers",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bagodar"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Ranchi to Bagodar",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- 4. FAQPage Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How much time does household shifting take from Ranchi to Bagodar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The distance between Ranchi and Bagodar is approximately 140 km via NH-20 and NH-522. Actual driving time for our container truck is approximately 3.5 to 4.5 hours. Including morning packing, careful loading, highway transit, and destination unloading, the complete move is finished within the same day."
                }
            },
            {
                "@type": "Question",
                "name": "Are your bills accepted for government employee claims in Bagodar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, absolutely. We provide 100% genuine IBA-format consignment notes (bilty), official computerized GST tax invoices, stamped money receipts, and itemized inventory packing lists that are readily accepted by state government departments, judicial courts, schools, and banks."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport my motorcycle or scooter along with household items?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We specialize in two-wheeler relocation. Your motorcycle or scooter is safely packaged with bubble wrap and corrugated padding, drained of excess fuel, and secured using heavy tie-down belts inside our covered container truck to prevent scratches and balance shifting."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide transit insurance for the Ranchi to Bagodar route?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer comprehensive all-risk transit insurance policy coverage for all valuable household goods and electronics. In the rare event of transit accident or unexpected road incident, you are protected with fast claim settlement."
                }
            },
            {
                "@type": "Question",
                "name": "Do you assist with dismantling and reassembling furniture?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Our crew includes experienced carpenters equipped with electric drills and hand tools who safely dismantle double beds, wardrobes, and dining tables in Ranchi and reassemble them at your new house in Bagodar at no extra hidden cost."
                }
            },
            {
                "@type": "Question",
                "name": "How do I book my moving date with Shree Ashirwad Packers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "You can confirm your booking by calling our logistics hotline at 8409531615 or 9835565233. We recommend booking 2 to 3 days in advance to reserve your preferred moving date and dedicated container vehicle."
                }
            }
        ]
    }
    </script>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
