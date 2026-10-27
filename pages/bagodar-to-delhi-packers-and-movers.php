<?php
/**
 * Page Name: Bagodar to Delhi Packers and Movers
 * Route Slug: bagodar-to-delhi-packers-and-movers
 * Group: Group 3 (Bagodar -> Outside Jharkhand) - Route 13
 * Meta Title: Packers and Movers Bagodar to Delhi NCR | Safe Long-Distance Shifting
 * Meta Description: Premier packers and movers from Bagodar to Delhi NCR. 1,120 km direct NH-19 GT Road transit, 5-layer packing, household moving, car & bike carrier, IBA approved bills.
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Packers and Movers Bagodar to Delhi NCR | Safe Long-Distance Shifting";
$page_desc = "Premier packers and movers from Bagodar to Delhi NCR. 1,120 km direct NH-19 GT Road transit, 5-layer packing, household moving, car & bike carrier, IBA approved bills.";
$canonical_url = "https://www.shreeashirwadpackers.com/bagodar-to-delhi-packers-and-movers";
$route_origin = "Bagodar";
$route_destination = "Delhi NCR";

// Open Graph
$og_title = "Packers and Movers Bagodar to Delhi | Shree Ashirwad Packers";
$og_description = "Reliable Bagodar to Delhi NCR household shifting, car transport & bike carrier via NH-19 GT Road. GPS tracking, IBA approved bills, zero damage guarantee.";
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
    <meta name="keywords" content="bagodar to delhi packers and movers, packers and movers bagodar to delhi, house shifting bagodar to delhi, gt road movers bagodar delhi, car transport bagodar to delhi, bike parcel bagodar to delhi, iba approved packers bagodar ncr">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Bagodar">

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

    <!-- Scoped CSS for Route 13 (Bagodar to Delhi) -->
    <style>
        :root {
            --bag2del-primary: #1e3a8a;
            --bag2del-secondary: #0284c7;
            --bag2del-accent: #f59e0b;
            --bag2del-dark: #0f172a;
            --bag2del-light: #f8fafc;
            --bag2del-border: #e2e8f0;
            --bag2del-muted: #64748b;
            --bag2del-radius: 12px;
            --bag2del-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
        }

        .bag2del-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 75px 20px 70px;
            position: relative;
        }

        .bag2del-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .bag2del-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 22px;
        }

        .bag2del-breadcrumbs a {
            color: #f8fafc;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .bag2del-breadcrumbs a:hover {
            color: var(--bag2del-accent);
            text-decoration: underline;
        }

        .bag2del-hero-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .bag2del-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.7;
            max-width: 860px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .bag2del-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 35px;
        }

        .bag2del-badge {
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

        .bag2del-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .bag2del-btn-primary {
            background-color: var(--bag2del-accent);
            color: #1e293b;
            padding: 14px 30px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 1.05rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 14px rgba(245, 158, 11, 0.35);
            transition: all 0.3s ease;
        }

        .bag2del-btn-primary:hover {
            background-color: #d97706;
            color: #ffffff;
            transform: translateY(-2px);
        }

        .bag2del-btn-secondary {
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

        .bag2del-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }

        .bag2del-section {
            padding: 65px 0;
        }

        .bg-light {
            background-color: var(--bag2del-light);
        }

        .bag2del-section-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.15rem;
            font-weight: 700;
            color: var(--bag2del-dark);
            margin-bottom: 15px;
            text-align: center;
        }

        .bag2del-section-subtitle {
            font-size: 1.05rem;
            color: var(--bag2del-muted);
            text-align: center;
            max-width: 760px;
            margin: 0 auto 45px;
            line-height: 1.6;
        }

        .bag2del-two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .bag2del-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            margin-top: 35px;
        }

        .bag2del-card {
            background: #ffffff;
            border: 1px solid var(--bag2del-border);
            border-radius: var(--bag2del-radius);
            padding: 28px 22px;
            box-shadow: var(--bag2del-shadow);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .bag2del-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.12);
        }

        .bag2del-card-icon {
            font-size: 2.2rem;
            color: var(--bag2del-primary);
            margin-bottom: 18px;
        }

        .bag2del-card h3, .bag2del-card h4 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 12px;
        }

        .bag2del-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        .bag2del-img-wrap {
            border-radius: var(--bag2del-radius);
            overflow: hidden;
            box-shadow: var(--bag2del-shadow);
            border: 1px solid var(--bag2del-border);
        }

        .bag2del-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .bag2del-img-wrap:hover img {
            transform: scale(1.03);
        }

        .bag2del-table-container {
            overflow-x: auto;
            margin: 30px 0;
            border-radius: var(--bag2del-radius);
            box-shadow: var(--bag2del-shadow);
            border: 1px solid var(--bag2del-border);
            background: #ffffff;
        }

        .bag2del-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.96rem;
        }

        .bag2del-table th {
            background-color: var(--bag2del-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 600;
        }

        .bag2del-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
        }

        .bag2del-table tr:hover {
            background-color: #f8fafc;
        }

        .bag2del-steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .bag2del-step {
            background: #ffffff;
            border: 1px solid var(--bag2del-border);
            border-radius: var(--bag2del-radius);
            padding: 24px 18px;
            text-align: center;
            position: relative;
        }

        .bag2del-step-num {
            width: 44px;
            height: 44px;
            background: var(--bag2del-primary);
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            margin: 0 auto 16px;
            font-size: 1.1rem;
        }

        .bag2del-step h4 {
            font-size: 1.1rem;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .bag2del-step p {
            font-size: 0.9rem;
            color: #64748b;
            line-height: 1.5;
            margin: 0;
        }

        .bag2del-faq-box {
            max-width: 900px;
            margin: 0 auto;
        }

        .bag2del-faq-item {
            background: #ffffff;
            border: 1px solid var(--bag2del-border);
            border-radius: 10px;
            margin-bottom: 15px;
            padding: 20px 24px;
        }

        .bag2del-faq-q {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .bag2del-faq-q::before {
            content: "Q";
            background: var(--bag2del-primary);
            color: #fff;
            font-size: 0.85rem;
            padding: 3px 9px;
            border-radius: 4px;
            font-weight: 800;
        }

        .bag2del-faq-a {
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.65;
            margin: 0;
            padding-left: 32px;
        }

        .bag2del-cta {
            background: linear-gradient(135deg, var(--bag2del-dark) 0%, var(--bag2del-primary) 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 45px 30px;
            text-align: center;
            margin-top: 45px;
        }

        .bag2del-cta h3 {
            font-size: 1.85rem;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .bag2del-cta p {
            font-size: 1.05rem;
            color: #cbd5e1;
            max-width: 650px;
            margin: 0 auto 25px;
            line-height: 1.6;
        }

        .bag2del-btn {
            background: var(--bag2del-accent);
            color: #1e293b;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.25s ease;
        }

        .bag2del-btn:hover {
            background: #d97706;
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .bag2del-hero-title {
                font-size: 2.1rem;
            }
            .bag2del-two-col {
                grid-template-columns: 1fr;
            }
            .bag2del-cta-group {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="bag2del-hero">
        <div class="bag2del-container">
            <nav class="bag2del-breadcrumbs" aria-label="Breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo;
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bagodar">Bagodar</a> &raquo;
                <span>Bagodar to Delhi</span>
            </nav>

            <h1 class="bag2del-hero-title">Premier Packers and Movers Bagodar to Delhi NCR</h1>
            <p class="bag2del-hero-subtitle">Moving from Bagodar to the National Capital Region? Experience premium, secure 1,120 km long-distance relocation across the Grand Trunk Road (NH-19) with Shree Ashirwad Packers and Movers. We deliver 5-layer multi-barrier packaging, customized closed container trucks, comprehensive transit insurance, and reliable doorstep setup across Delhi, Noida, Gurgaon, Faridabad, and Ghaziabad.</p>

            <div class="bag2del-badges">
                <span class="bag2del-badge"><i class="fa-solid fa-road"></i> 1,120 KM via NH-19 GT Road</span>
                <span class="bag2del-badge"><i class="fa-solid fa-clock"></i> 28 - 36 Hours Direct Transit</span>
                <span class="bag2del-badge"><i class="fa-solid fa-file-invoice"></i> 100% IBA Approved Bills</span>
                <span class="bag2del-badge"><i class="fa-solid fa-shield-halved"></i> All-Risk Transit Insurance</span>
                <span class="bag2del-badge"><i class="fa-solid fa-satellite"></i> Real-Time GPS Tracking</span>
            </div>

            <div class="bag2del-cta-group">
                <a href="tel:+918409531615" class="bag2del-btn-primary"><i class="fa-solid fa-phone"></i> Call 8409531615</a>
                <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Bagodar%20to%20Delhi%20shifting" class="bag2del-btn-secondary" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Instant WhatsApp Quote</a>
            </div>
        </div>
    </header>

    <!-- Overview Section with Image 1 -->
    <section class="bag2del-section">
        <div class="bag2del-container">
            <div class="bag2del-two-col">
                <div>
                    <h2 class="bag2del-section-title" style="text-align: left;">Long-Distance Express Shifting Across Grand Trunk Road</h2>
                    <p>Relocating across 1,120 kilometers from Bagodar to Delhi NCR is a major inter-state journey along the historic Grand Trunk Road (NH-19). Starting from Bagodar junction, our long-distance container trucks travel west across Barhi, Dobhi, Sasaram, Varanasi, Prayagraj, Kanpur, and Agra before entering Delhi NCR via the high-speed Yamuna Expressway. This modern highway network enables our commercial container fleet to deliver complete household consignments within 28 to 36 hours.</p>
                    <p>Whether you are a central government employee transferring to Delhi ministries, an IT or corporate executive relocating to Gurgaon Cyber City or Noida Sector 62, a student family moving to South Delhi or Rohini, or an entrepreneur expanding operations, Shree Ashirwad Packers and Movers guarantees total security. We eliminate the worries of long-haul moves through GPS tracking, dedicated locked container trucks, and seasoned highway drivers.</p>
                    <p>Our fleet consists of dedicated, weatherproof container vehicles built to absorb long-distance road vibration. With trained loaders, skilled carpenters, and experienced drivers who know inter-state border check-posts and Delhi NCR municipal entry restrictions, your entire move is completed without friction or delays.</p>
                </div>
                <div class="bag2del-img-wrap">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Intercity shifting truck loading goods for Delhi transit" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="bag2del-section bg-light">
        <div class="bag2del-container">
            <h2 class="bag2del-section-title">Why Shree Ashirwad Leads the Bagodar to Delhi Moving Route</h2>
            <p class="bag2del-section-subtitle">Discover the operational safeguards, transparent policies, and rigorous standards that distinguish our intercity relocation service.</p>

            <div class="bag2del-features-grid">
                <div class="bag2del-card">
                    <div class="bag2del-card-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                    <h3>5-Layer Barrier Packing</h3>
                    <p>We wrap all electronic goods, solid wood furniture, chinaware, and glass tops using bubble sheets, corrugated fluting, thermal foam, corner guards, and high-tensile stretch film to resist road friction.</p>
                </div>

                <div class="bag2del-card">
                    <div class="bag2del-card-icon"><i class="fa-solid fa-truck-moving"></i></div>
                    <h3>Dedicated Closed Containers</h3>
                    <p>We deploy closed-body, weatherproof container trucks rather than open trolleys. Your consignments remain dry, locked, and completely protected from highway dust, rain showers, and transit vibration.</p>
                </div>

                <div class="bag2del-card">
                    <div class="bag2del-card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <h3>Central Govt &amp; PSU Claim Bills</h3>
                    <p>We provide full documentation for government and corporate relocation reimbursement: IBA-approved bilty (LR), computerized GST invoice, quotation comparison, and signed inventory receipts.</p>
                </div>

                <div class="bag2del-card">
                    <div class="bag2del-card-icon"><i class="fa-solid fa-people-carry-box"></i></div>
                    <h3>Expert In-House Crew</h3>
                    <p>We never outsource to untrained local day-laborers. Our background-verified crews are trained in proper dismantling of beds, modular wardrobes, TV wall mounts, and safe stairwell maneuvering.</p>
                </div>

                <div class="bag2del-card">
                    <div class="bag2del-card-icon"><i class="fa-solid fa-motorcycle"></i></div>
                    <h3>Bike &amp; Car Safe Transportation</h3>
                    <p>Relocating your motorbike, scooter, or personal sedan from Bagodar to Delhi? We use wheel chocks, heavy ratchet lashings, and dense padding for zero-scratch door-to-door vehicle relocation.</p>
                </div>

                <div class="bag2del-card">
                    <div class="bag2del-card-icon"><i class="fa-solid fa-handshake-angle"></i></div>
                    <h3>Transparent Pricing &amp; Zero Hidden Fees</h3>
                    <p>No toll surprise, no diesel surcharge, and no sudden unloading fee upon arrival in Delhi NCR. You receive an all-inclusive, binding written quote before packing commences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Electronics Crating Section with Image 2 -->
    <section class="bag2del-section">
        <div class="bag2del-container">
            <div class="bag2del-two-col">
                <div class="bag2del-img-wrap">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/electronics-led-tv-crating-jharkhand.jpg" alt="Electronics and LED TV wooden crating and packing" loading="lazy">
                </div>
                <div>
                    <h2 class="bag2del-section-title" style="text-align: left;">Engineered 5-Layer Packaging for Fragile &amp; Heavy Cargo</h2>
                    <p>Moving across 1,120 km of highway requires superior packaging to prevent transit damage from continuous motion and temperature variations. Shree Ashirwad Packers and Movers implements a rigorous 5-layer protective packing protocol for all long-distance residential moves:</p>
                    <ul style="color: #475569; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
                        <li><strong>Layer 1 - Scratch-Proof Barrier:</strong> Virgin foam wrapping and soft cotton sheets applied directly to polished surfaces of wooden furniture, leather sofas, and LED screens.</li>
                        <li><strong>Layer 2 - Shock Absorption:</strong> High-density air bubble wrap (500 GSM) cushioning delicate dinnerware, glassware, decorative wall art, and precision kitchen electronics.</li>
                        <li><strong>Layer 3 - Structural Reinforcement:</strong> Heavy-gauge corrugated fluted rolls tailored around heavy appliances, dining tables, washing machines, and refrigerator corners.</li>
                        <li><strong>Layer 4 - Moisture &amp; Dust Seal:</strong> Industrial-grade poly-stretch wrap sealed airtight to safeguard items from road dust, soot, and monsoon rains.</li>
                        <li><strong>Layer 5 - Box Crating &amp; Strapping:</strong> Rigid 5-ply cartons taped with reinforced PVC tape, clearly marked with room tags and directional "This Side Up" labels.</li>
                    </ul>
                    <p>Our systematic labeling ensures that when our crew reaches your new residence in Dwarka, Noida, Gurgaon, or Rohini, every carton is placed immediately in its intended room without confusion.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Table Section -->
    <section class="bag2del-section bg-light">
        <div class="bag2del-container">
            <h2 class="bag2del-section-title">Transparent Pricing: Bagodar to Delhi NCR Relocation Rates</h2>
            <p class="bag2del-section-subtitle">Clear and competitive shifting charges for household, corporate, and vehicle transit along the 1,120 km NH-19 corridor.</p>

            <div class="bag2del-table-container">
                <table class="bag2del-table">
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
                            <td>Tata 407 / Eicher 14 Ft</td>
                            <td>2 - 3 Days</td>
                            <td>&#8377; 16,000 - &#8377; 24,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Complete Household</strong></td>
                            <td>5-Layer Multi-Barrier Packing</td>
                            <td>17 Ft Closed Container</td>
                            <td>2 - 3 Days</td>
                            <td>&#8377; 24,000 - &#8377; 35,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Independent House</strong></td>
                            <td>Premium 5-Layer + Wooden Crating</td>
                            <td>19 Ft / 22 Ft Container Truck</td>
                            <td>3 - 4 Days</td>
                            <td>&#8377; 33,000 - &#8377; 48,000</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Large Bungalow</strong></td>
                            <td>Complete White-Glove Service</td>
                            <td>Dedicated 24 Ft Heavy Container</td>
                            <td>3 - 4 Days</td>
                            <td>&#8377; 44,000 - &#8377; 65,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>3-Layer Bubble &amp; Corrugated Wrap</td>
                            <td>Dedicated Vehicle Carrier</td>
                            <td>2 - 4 Days</td>
                            <td>&#8377; 3,500 - &#8377; 6,000</td>
                        </tr>
                        <tr>
                            <td><strong>Car Transport (Hatchback / SUV)</strong></td>
                            <td>Protective Covers &amp; Lashing</td>
                            <td>Hydraulic Car Carrier Truck</td>
                            <td>3 - 5 Days</td>
                            <td>&#8377; 12,000 - &#8377; 19,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="text-align: center; font-size: 0.9rem; color: #64748b; margin-top: 15px;">*Rates are indicative and vary based on floor levels, elevator availability, fragile quantity, and chosen insurance value. Contact us for a precise, binding quotation.</p>
        </div>
    </section>

    <!-- Vehicle Carrier Section with Image 3 -->
    <section class="bag2del-section">
        <div class="bag2del-container">
            <div class="bag2del-two-col">
                <div>
                    <h2 class="bag2del-section-title" style="text-align: left;">Safe Two-Wheeler &amp; Car Transportation</h2>
                    <p>Driving a personal automobile or riding a two-wheeler over 1,120 km of multi-lane national highways, state borders, and heavy toll corridors is exhausting, costly, and causes extreme vehicle wear. Shree Ashirwad Packers and Movers provides specialized vehicle carrier services connecting Bagodar and Delhi NCR with total peace of mind.</p>
                    <p>For two-wheelers, our team handles careful pre-transit preparation. We drain excess petrol to prevent vapor leaks, shield headlights, digital consoles, side mirrors, and fuel tanks with corrugated padding, and secure the bike upright inside our truck with heavy-duty ratchet tie-downs.</p>
                    <p>For personal four-wheelers, we offer hydraulic car carrier transit or accompanied expert driver relocation with full insurance coverage. Your vehicle is thoroughly inspected with an odometer and body scratch record before departure and handed over in immaculate condition at your Delhi NCR address.</p>
                    <p>Our transport crews maintain dedicated transit logs and GPS communication throughout the journey from Bagodar to Delhi, ensuring zero jolts to your automobile or crated household cargo.</p>
                </div>
                <div class="bag2del-img-wrap">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Two wheeler motorcycle packing and carrier transport service" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Corporate & Administrative Transfer Section with Image 4 -->
    <section class="bag2del-section bg-light">
        <div class="bag2del-container">
            <div class="bag2del-two-col">
                <div class="bag2del-img-wrap">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck navigating highway transit" loading="lazy">
                </div>
                <div>
                    <h2 class="bag2del-section-title" style="text-align: left;">Central Government, Defence &amp; Corporate Transfer Support</h2>
                    <p>Delhi NCR is India's national capital and corporate epicenter, hosting central ministries, armed forces headquarters, diplomatic missions, Fortune 500 corporate offices in Gurgaon, and IT software clusters in Noida.</p>
                    <p>Officers, executives, and professionals moving from Bagodar to Delhi NCR require strict documentation to claim their relocation allowance. We provide complete, audit-compliant reimbursement documentation:</p>
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
    <section class="bag2del-section">
        <div class="bag2del-container">
            <h2 class="bag2del-section-title">Our 5-Step Relocation Workflow: Bagodar to Delhi</h2>
            <p class="bag2del-section-subtitle">How our streamlined process guarantees a smooth, on-time, and damage-free moving experience.</p>

            <div class="bag2del-steps-grid">
                <div class="bag2del-step">
                    <div class="bag2del-step-num">01</div>
                    <h4>Pre-Move Assessment</h4>
                    <p>We assess your household inventory via digital video survey or doorstep visit in Bagodar to calculate required truck size and packaging materials.</p>
                </div>
                <div class="bag2del-step">
                    <div class="bag2del-step-num">02</div>
                    <h4>Multi-Layer Packing</h4>
                    <p>Our skilled packers pack furniture, kitchenware, and fragile electronics using 5-layer protective materials on the scheduled morning.</p>
                </div>
                <div class="bag2del-step">
                    <div class="bag2del-step-num">03</div>
                    <h4>Safe Vehicle Loading</h4>
                    <p>Consignments are loaded methodically into our covered container truck, using shock cushions and load stabilizers for zero shifting during transit.</p>
                </div>
                <div class="bag2del-step">
                    <div class="bag2del-step-num">04</div>
                    <h4>GT Road Expressway Transit</h4>
                    <p>Our driver navigates the 1,120 km NH-19 expressway, maintaining steady cruising speeds and providing continuous milestone updates.</p>
                </div>
                <div class="bag2del-step">
                    <div class="bag2del-step-num">05</div>
                    <h4>Unloading &amp; Placement</h4>
                    <p>Upon arrival in Delhi NCR, our team unloads all cartons into your chosen rooms, reassembles beds and tables, and removes unpacked waste.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Served Section -->
    <section class="bag2del-section bg-light">
        <div class="bag2del-container">
            <h2 class="bag2del-section-title">Localities Covered Across Bagodar and Delhi NCR</h2>
            <p class="bag2del-section-subtitle">Comprehensive pickup coverage across Bagodar block and direct doorstep delivery across Delhi, Noida, and Gurgaon.</p>

            <div class="bag2del-two-col">
                <div class="bag2del-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--bag2del-accent); margin-right: 8px;"></i> Bagodar Pickup Areas</h4>
                    <p>Bagodar Main Market, GT Road Chowk, Harihar Dham Area, Sariya Road, Atka, Banpura, Dondlo, Hesla, Kander, Jamtara Mor, Bishungarh Road Crossing, and neighboring rural centers.</p>
                </div>
                <div class="bag2del-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--bag2del-primary); margin-right: 8px;"></i> Delhi NCR Delivery Areas</h4>
                    <p>Dwarka, Rohini, Saket, Vasant Kunj, Janakpuri, Mayur Vihar, Laxmi Nagar, Noida (Sectors 1-150), Greater Noida, Gurgaon (Cyber City, DLF, Sohna Road), Faridabad, and Ghaziabad.</p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="bag2del-cta">
                <h3>Ready for a Hassle-Free Bagodar to Delhi NCR Move?</h3>
                <p>Contact Jharkhand's most trusted intercity relocation company today. Get an honest price quote, guaranteed transit timings, and complete peace of mind.</p>
                <a href="tel:+918409531615" class="bag2del-btn"><i class="fa-solid fa-phone" style="margin-right: 8px;"></i> Call 8409531615 / 9835565233</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bag2del-section">
        <div class="bag2del-container">
            <h2 class="bag2del-section-title">Frequently Asked Questions: Bagodar to Delhi Shifting</h2>
            <p class="bag2del-section-subtitle">Clear answers to common questions regarding timelines, costs, and safety measures.</p>

            <div class="bag2del-faq-box">
                <div class="bag2del-faq-item">
                    <h4 class="bag2del-faq-q">How much time does household shifting take from Bagodar to Delhi NCR?</h4>
                    <p class="bag2del-faq-a">The distance between Bagodar and Delhi NCR is approximately 1,120 km along the 6-lane NH-19 and Yamuna Expressway. Driving time for our container truck is typically 28 to 36 hours. Consignments are delivered within 2 to 3 days of departure.</p>
                </div>

                <div class="bag2del-faq-item">
                    <h4 class="bag2del-faq-q">Are your bills accepted for central government and defence claims in Delhi?</h4>
                    <p class="bag2del-faq-a">Yes, absolutely. We provide 100% genuine IBA-format consignment notes (bilty), official computerized GST tax invoices, stamped money receipts, and itemized inventory packing lists that are readily accepted by central ministries, defence headquarters, and PSU banks.</p>
                </div>

                <div class="bag2del-faq-item">
                    <h4 class="bag2del-faq-q">Can you transport my motorcycle or scooter along with household items?</h4>
                    <p class="bag2del-faq-a">Yes. We specialize in two-wheeler relocation. Your motorcycle or scooter is safely packaged with bubble wrap and corrugated padding, drained of excess fuel, and secured using heavy tie-down belts inside our covered container truck to prevent scratches and balance shifting.</p>
                </div>

                <div class="bag2del-faq-item">
                    <h4 class="bag2del-faq-q">Do you provide transit insurance for the Bagodar to Delhi route?</h4>
                    <p class="bag2del-faq-a">Yes. We offer comprehensive all-risk transit insurance policy coverage for all valuable household goods and electronics. In the rare event of transit accident or unexpected road incident, you are protected with fast claim settlement.</p>
                </div>

                <div class="bag2del-faq-item">
                    <h4 class="bag2del-faq-q">Do you assist with dismantling and reassembling furniture?</h4>
                    <p class="bag2del-faq-a">Yes. Our crew includes experienced carpenters equipped with electric drills and hand tools who safely dismantle double beds, wardrobes, and dining tables in Bagodar and reassemble them at your new home in Delhi NCR at no extra hidden cost.</p>
                </div>

                <div class="bag2del-faq-item">
                    <h4 class="bag2del-faq-q">How do I book my moving date with Shree Ashirwad Packers?</h4>
                    <p class="bag2del-faq-a">You can confirm your booking by calling our logistics hotline at 8409531615 or 9835565233. We recommend booking 2 to 3 days in advance to reserve your preferred moving date and dedicated container vehicle.</p>
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
        "name": "Shree Ashirwad Packers and Movers Bagodar",
        "image": "<?php echo $og_image; ?>",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "₹₹",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "GT Road, Near Harihar Dham Chowk",
            "addressLocality": "Bagodar",
            "addressRegion": "Jharkhand",
            "postalCode": "825322",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 24.0805,
            "longitude": 85.8752
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
                "name": "Bagodar"
            },
            {
                "@type": "AdministrativeArea",
                "name": "Delhi NCR"
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Bagodar to Delhi Moving Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Household Relocation Bagodar to Delhi"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Long-Distance Transfer Relocation Billing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Bike & Car Transportation Bagodar to Delhi"
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
                "name": "Bagodar to Delhi",
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
                "name": "How much time does household shifting take from Bagodar to Delhi NCR?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The distance between Bagodar and Delhi NCR is approximately 1,120 km along the 6-lane NH-19 and Yamuna Expressway. Driving time for our container truck is typically 28 to 36 hours. Consignments are delivered within 2 to 3 days of departure."
                }
            },
            {
                "@type": "Question",
                "name": "Are your bills accepted for central government and defence claims in Delhi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, absolutely. We provide 100% genuine IBA-format consignment notes (bilty), official computerized GST tax invoices, stamped money receipts, and itemized inventory packing lists that are readily accepted by central ministries, defence headquarters, and PSU banks."
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
                "name": "Do you provide transit insurance for the Bagodar to Delhi route?",
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
                    "text": "Yes. Our crew includes experienced carpenters equipped with electric drills and hand tools who safely dismantle double beds, wardrobes, and dining tables in Bagodar and reassemble them at your new home in Delhi NCR at no extra hidden cost."
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
