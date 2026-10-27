<?php
/**
 * Page Name: Bagodar to Kolkata Packers and Movers
 * Route Slug: bagodar-to-kolkata-packers-and-movers
 * Group: Group 3 (Bagodar -> Outside Jharkhand) - Route 11
 * Meta Title: Packers and Movers Bagodar to Kolkata | Safe NH-19 Expressway Shifting
 * Meta Description: Best packers and movers from Bagodar to Kolkata. 350 km direct NH-19 GT Road transit, 5-layer packing, household moving, car & bike parcel, IBA approved bills.
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Packers and Movers Bagodar to Kolkata | Safe NH-19 Expressway Shifting";
$page_desc = "Best packers and movers from Bagodar to Kolkata. 350 km direct NH-19 GT Road transit, 5-layer packing, household moving, car & bike parcel, IBA approved bills.";
$canonical_url = "https://www.shreeashirwadpackers.com/bagodar-to-kolkata-packers-and-movers";
$route_origin = "Bagodar";
$route_destination = "Kolkata";

// Open Graph
$og_title = "Packers and Movers Bagodar to Kolkata | Shree Ashirwad Packers";
$og_description = "Reliable Bagodar to Kolkata household shifting, car carrier & bike parcel via NH-19 GT Road. GPS tracking, IBA approved bills, 100% safety guarantee.";
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
    <meta name="keywords" content="bagodar to kolkata packers and movers, packers and movers bagodar to kolkata, house shifting bagodar to kolkata, gt road movers bagodar kolkata, car transport bagodar to kolkata, bike parcel bagodar to kolkata, iba approved packers bagodar kolkata">
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

    <!-- Scoped CSS for Route 11 (Bagodar to Kolkata) -->
    <style>
        :root {
            --bag2kol-primary: #1e3a8a;
            --bag2kol-secondary: #0284c7;
            --bag2kol-accent: #f59e0b;
            --bag2kol-dark: #0f172a;
            --bag2kol-light: #f8fafc;
            --bag2kol-border: #e2e8f0;
            --bag2kol-muted: #64748b;
            --bag2kol-radius: 12px;
            --bag2kol-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
        }

        .bag2kol-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 75px 20px 70px;
            position: relative;
        }

        .bag2kol-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .bag2kol-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 22px;
        }

        .bag2kol-breadcrumbs a {
            color: #f8fafc;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .bag2kol-breadcrumbs a:hover {
            color: var(--bag2kol-accent);
            text-decoration: underline;
        }

        .bag2kol-hero-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .bag2kol-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.7;
            max-width: 860px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .bag2kol-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 35px;
        }

        .bag2kol-badge {
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

        .bag2kol-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .bag2kol-btn-primary {
            background-color: var(--bag2kol-accent);
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

        .bag2kol-btn-primary:hover {
            background-color: #d97706;
            color: #ffffff;
            transform: translateY(-2px);
        }

        .bag2kol-btn-secondary {
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

        .bag2kol-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }

        .bag2kol-section {
            padding: 65px 0;
        }

        .bg-light {
            background-color: var(--bag2kol-light);
        }

        .bag2kol-section-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.15rem;
            font-weight: 700;
            color: var(--bag2kol-dark);
            margin-bottom: 15px;
            text-align: center;
        }

        .bag2kol-section-subtitle {
            font-size: 1.05rem;
            color: var(--bag2kol-muted);
            text-align: center;
            max-width: 760px;
            margin: 0 auto 45px;
            line-height: 1.6;
        }

        .bag2kol-two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .bag2kol-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            margin-top: 35px;
        }

        .bag2kol-card {
            background: #ffffff;
            border: 1px solid var(--bag2kol-border);
            border-radius: var(--bag2kol-radius);
            padding: 28px 22px;
            box-shadow: var(--bag2kol-shadow);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .bag2kol-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.12);
        }

        .bag2kol-card-icon {
            font-size: 2.2rem;
            color: var(--bag2kol-primary);
            margin-bottom: 18px;
        }

        .bag2kol-card h3, .bag2kol-card h4 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 12px;
        }

        .bag2kol-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        .bag2kol-img-wrap {
            border-radius: var(--bag2kol-radius);
            overflow: hidden;
            box-shadow: var(--bag2kol-shadow);
            border: 1px solid var(--bag2kol-border);
        }

        .bag2kol-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .bag2kol-img-wrap:hover img {
            transform: scale(1.03);
        }

        .bag2kol-table-container {
            overflow-x: auto;
            margin: 30px 0;
            border-radius: var(--bag2kol-radius);
            box-shadow: var(--bag2kol-shadow);
            border: 1px solid var(--bag2kol-border);
            background: #ffffff;
        }

        .bag2kol-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.96rem;
        }

        .bag2kol-table th {
            background-color: var(--bag2kol-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 600;
        }

        .bag2kol-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
        }

        .bag2kol-table tr:hover {
            background-color: #f8fafc;
        }

        .bag2kol-steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .bag2kol-step {
            background: #ffffff;
            border: 1px solid var(--bag2kol-border);
            border-radius: var(--bag2kol-radius);
            padding: 24px 18px;
            text-align: center;
            position: relative;
        }

        .bag2kol-step-num {
            width: 44px;
            height: 44px;
            background: var(--bag2kol-primary);
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            margin: 0 auto 16px;
            font-size: 1.1rem;
        }

        .bag2kol-step h4 {
            font-size: 1.1rem;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .bag2kol-step p {
            font-size: 0.9rem;
            color: #64748b;
            line-height: 1.5;
            margin: 0;
        }

        .bag2kol-faq-box {
            max-width: 900px;
            margin: 0 auto;
        }

        .bag2kol-faq-item {
            background: #ffffff;
            border: 1px solid var(--bag2kol-border);
            border-radius: 10px;
            margin-bottom: 15px;
            padding: 20px 24px;
        }

        .bag2kol-faq-q {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .bag2kol-faq-q::before {
            content: "Q";
            background: var(--bag2kol-primary);
            color: #fff;
            font-size: 0.85rem;
            padding: 3px 9px;
            border-radius: 4px;
            font-weight: 800;
        }

        .bag2kol-faq-a {
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.65;
            margin: 0;
            padding-left: 32px;
        }

        .bag2kol-cta {
            background: linear-gradient(135deg, var(--bag2kol-dark) 0%, var(--bag2kol-primary) 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 45px 30px;
            text-align: center;
            margin-top: 45px;
        }

        .bag2kol-cta h3 {
            font-size: 1.85rem;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .bag2kol-cta p {
            font-size: 1.05rem;
            color: #cbd5e1;
            max-width: 650px;
            margin: 0 auto 25px;
            line-height: 1.6;
        }

        .bag2kol-btn {
            background: var(--bag2kol-accent);
            color: #1e293b;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.25s ease;
        }

        .bag2kol-btn:hover {
            background: #d97706;
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .bag2kol-hero-title {
                font-size: 2.1rem;
            }
            .bag2kol-two-col {
                grid-template-columns: 1fr;
            }
            .bag2kol-cta-group {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="bag2kol-hero">
        <div class="bag2kol-container">
            <nav class="bag2kol-breadcrumbs" aria-label="Breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo;
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bagodar">Bagodar</a> &raquo;
                <span>Bagodar to Kolkata</span>
            </nav>

            <h1 class="bag2kol-hero-title">Premier Packers and Movers Bagodar to Kolkata</h1>
            <p class="bag2kol-hero-subtitle">Relocating from Bagodar to the City of Joy? Enjoy seamless, zero-damage 350 km inter-state relocation along the 6-lane Grand Trunk Road (NH-19) with Shree Ashirwad Packers and Movers. We provide 5-layer multi-barrier packaging, customized closed container trucks, corporate transfer documentation, and prompt doorstep delivery across Kolkata, Salt Lake, and Howrah.</p>

            <div class="bag2kol-badges">
                <span class="bag2kol-badge"><i class="fa-solid fa-road"></i> 350 KM via NH-19 GT Road</span>
                <span class="bag2kol-badge"><i class="fa-solid fa-clock"></i> 7 - 9 Hours Direct Transit</span>
                <span class="bag2kol-badge"><i class="fa-solid fa-file-invoice"></i> 100% IBA Approved Bills</span>
                <span class="bag2kol-badge"><i class="fa-solid fa-shield-halved"></i> Comprehensive Transit Cover</span>
                <span class="bag2kol-badge"><i class="fa-solid fa-box-open"></i> Multi-Layer Protective Packing</span>
            </div>

            <div class="bag2kol-cta-group">
                <a href="tel:+918409531615" class="bag2kol-btn-primary"><i class="fa-solid fa-phone"></i> Call 8409531615</a>
                <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Bagodar%20to%20Kolkata%20shifting" class="bag2kol-btn-secondary" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Instant WhatsApp Quote</a>
            </div>
        </div>
    </header>

    <!-- Overview Section with Image 1 -->
    <section class="bag2kol-section">
        <div class="bag2kol-container">
            <div class="bag2kol-two-col">
                <div>
                    <h2 class="bag2kol-section-title" style="text-align: left;">Direct Inter-State Highway Transit on Grand Trunk Road</h2>
                    <p>The relocation journey from Bagodar to Kolkata spans approximately 350 kilometers along the premier 6-lane National Highway 19 (Grand Trunk Road). Starting from Bagodar junction, the highway heads east through Dhanbad, Asansol, Durgapur, and Burdwan before terminating at Dankuni and Kolkata. This world-class expressway offers optimal road quality, enabling our container vehicles to complete the inter-state transit in 7 to 9 hours.</p>
                    <p>Whether you are an IT professional moving to tech hubs in Salt Lake Sector V or New Town, a business family relocating to Central Kolkata or Alipore, a banking executive transferring to headquarters, or a student heading to premier universities, Shree Ashirwad Packers and Movers delivers total peace of mind. We eliminate the complexities of interstate moving with verified crews, dedicated trucks, and comprehensive documentation.</p>
                    <p>Our fleet consists of dedicated, weatherproof container vehicles built to absorb long-distance road vibration. With trained loaders, skilled carpenters, and experienced drivers who know inter-state border check-posts and Kolkata municipal entry restrictions, your entire move is completed without friction or delays.</p>
                </div>
                <div class="bag2kol-img-wrap">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Intercity shifting truck loading goods for Kolkata transit" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="bag2kol-section bg-light">
        <div class="bag2kol-container">
            <h2 class="bag2kol-section-title">Why Shree Ashirwad Leads the Bagodar to Kolkata Moving Route</h2>
            <p class="bag2kol-section-subtitle">Discover the operational safeguards, transparent policies, and rigorous standards that distinguish our intercity relocation service.</p>

            <div class="bag2kol-features-grid">
                <div class="bag2kol-card">
                    <div class="bag2kol-card-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                    <h3>5-Layer Barrier Packing</h3>
                    <p>We wrap all electronic goods, solid wood furniture, chinaware, and glass tops using bubble sheets, corrugated fluting, thermal foam, corner guards, and high-tensile stretch film to resist road friction.</p>
                </div>

                <div class="bag2kol-card">
                    <div class="bag2kol-card-icon"><i class="fa-solid fa-truck-moving"></i></div>
                    <h3>Dedicated Closed Containers</h3>
                    <p>We deploy closed-body, weatherproof container trucks rather than open trolleys. Your consignments remain dry, locked, and completely protected from highway dust, rain showers, and transit vibration.</p>
                </div>

                <div class="bag2kol-card">
                    <div class="bag2kol-card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <h3>Corporate &amp; PSU Claim Bills</h3>
                    <p>We provide full documentation for government and corporate relocation reimbursement: IBA-approved bilty (LR), computerized GST invoice, quotation comparison, and signed inventory receipts.</p>
                </div>

                <div class="bag2kol-card">
                    <div class="bag2kol-card-icon"><i class="fa-solid fa-people-carry-box"></i></div>
                    <h3>Expert In-House Crew</h3>
                    <p>We never outsource to untrained local day-laborers. Our background-verified crews are trained in proper dismantling of beds, modular wardrobes, TV wall mounts, and safe stairwell maneuvering.</p>
                </div>

                <div class="bag2kol-card">
                    <div class="bag2kol-card-icon"><i class="fa-solid fa-motorcycle"></i></div>
                    <h3>Bike &amp; Car Safe Transportation</h3>
                    <p>Relocating your motorbike, scooter, or personal sedan from Bagodar to Kolkata? We use wheel chocks, heavy ratchet lashings, and dense padding for zero-scratch door-to-door vehicle relocation.</p>
                </div>

                <div class="bag2kol-card">
                    <div class="bag2kol-card-icon"><i class="fa-solid fa-handshake-angle"></i></div>
                    <h3>Transparent Pricing &amp; Zero Hidden Fees</h3>
                    <p>No toll surprise, no diesel surcharge, and no sudden unloading fee upon arrival in Kolkata. You receive an all-inclusive, binding written quote before packing commences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Appliance Packing Section with Image 2 -->
    <section class="bag2kol-section">
        <div class="bag2kol-container">
            <div class="bag2kol-two-col">
                <div class="bag2kol-img-wrap">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-appliances-protective-cover-ranchi.jpg" alt="Household appliances protective cover and foam padding" loading="lazy">
                </div>
                <div>
                    <h2 class="bag2kol-section-title" style="text-align: left;">Engineered 5-Layer Packaging for Fragile &amp; Heavy Cargo</h2>
                    <p>Relocating across 350 km of national highway requires meticulous packaging to withstand bridge expansion joints, toll approaches, and urban traffic stops in the Kolkata metropolitan area. Shree Ashirwad Packers and Movers implements a rigorous 5-layer protective packing protocol for all residential consignments:</p>
                    <ul style="color: #475569; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
                        <li><strong>Layer 1 - Scratch-Proof Barrier:</strong> Virgin foam wrapping and soft cotton sheets applied directly to polished surfaces of wooden furniture, leather sofas, and LED screens.</li>
                        <li><strong>Layer 2 - Shock Absorption:</strong> High-density air bubble wrap (500 GSM) cushioning delicate dinnerware, glassware, decorative wall art, and precision kitchen electronics.</li>
                        <li><strong>Layer 3 - Structural Reinforcement:</strong> Heavy-gauge corrugated fluted rolls tailored around heavy appliances, dining tables, washing machines, and refrigerator corners.</li>
                        <li><strong>Layer 4 - Moisture &amp; Dust Seal:</strong> Industrial-grade poly-stretch wrap sealed airtight to safeguard items from road dust, soot, and monsoon rains.</li>
                        <li><strong>Layer 5 - Box Crating &amp; Strapping:</strong> Rigid 5-ply cartons taped with reinforced PVC tape, clearly marked with room tags and directional "This Side Up" labels.</li>
                    </ul>
                    <p>Our systematic labeling ensures that when our crew reaches your new apartment in Salt Lake, New Town, or South Kolkata, every carton is placed immediately in its intended room without confusion.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Table Section -->
    <section class="bag2kol-section bg-light">
        <div class="bag2kol-container">
            <h2 class="bag2kol-section-title">Transparent Pricing: Bagodar to Kolkata Relocation Rates</h2>
            <p class="bag2kol-section-subtitle">Clear and competitive shifting charges for household, corporate, and vehicle transit along the 350 km NH-19 corridor.</p>

            <div class="bag2kol-table-container">
                <table class="bag2kol-table">
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
                            <td>Tata 407 / Eicher Container</td>
                            <td>Same Day (7 - 9 Hrs)</td>
                            <td>&#8377; 11,000 - &#8377; 16,500</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Complete Household</strong></td>
                            <td>5-Layer Multi-Barrier Packing</td>
                            <td>14 Ft Closed Container</td>
                            <td>Next Day Delivery</td>
                            <td>&#8377; 16,500 - &#8377; 24,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Independent House</strong></td>
                            <td>Premium 5-Layer + Wooden Crating</td>
                            <td>17 Ft / 19 Ft Container Truck</td>
                            <td>Next Day Delivery</td>
                            <td>&#8377; 23,000 - &#8377; 33,000</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Large Bungalow</strong></td>
                            <td>Complete White-Glove Service</td>
                            <td>Dedicated 22 Ft Heavy Container</td>
                            <td>Next Day Delivery</td>
                            <td>&#8377; 32,000 - &#8377; 46,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>3-Layer Bubble &amp; Corrugated Wrap</td>
                            <td>Dedicated Vehicle Carrier</td>
                            <td>1 - 2 Days</td>
                            <td>&#8377; 2,800 - &#8377; 4,500</td>
                        </tr>
                        <tr>
                            <td><strong>Car Transport (Hatchback / SUV)</strong></td>
                            <td>Protective Covers &amp; Lashing</td>
                            <td>Hydraulic Car Carrier Truck</td>
                            <td>1 - 2 Days</td>
                            <td>&#8377; 7,500 - &#8377; 13,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="text-align: center; font-size: 0.9rem; color: #64748b; margin-top: 15px;">*Rates are indicative and vary based on floor levels, elevator availability, fragile quantity, and chosen insurance value. Contact us for a precise, binding quotation.</p>
        </div>
    </section>

    <!-- Vehicle Carrier Section with Image 3 -->
    <section class="bag2kol-section">
        <div class="bag2kol-container">
            <div class="bag2kol-two-col">
                <div>
                    <h2 class="bag2kol-section-title" style="text-align: left;">Safe Two-Wheeler &amp; Car Transportation</h2>
                    <p>Riding a motorcycle or driving an older personal vehicle over 350 km across inter-state toll plazas and Kolkata city flyovers can be exhausting and hazardous. Shree Ashirwad Packers and Movers provides specialized vehicle relocation services connecting Bagodar and Kolkata with total peace of mind.</p>
                    <p>For two-wheelers, our team handles careful pre-transit preparation. We drain excess petrol to prevent vapor leaks, shield headlights, digital consoles, side mirrors, and fuel tanks with corrugated padding, and secure the bike upright inside our truck with heavy-duty ratchet tie-downs.</p>
                    <p>For personal four-wheelers, we offer hydraulic car carrier transit or accompanied expert driver relocation with full insurance coverage. Your vehicle is thoroughly inspected with an odometer and body scratch record before departure and handed over in immaculate condition at your Kolkata address.</p>
                    <p>Our transport crews maintain dedicated transit logs and GPS communication throughout the journey from Bagodar to Kolkata, ensuring zero jolts to your automobile or crated household cargo.</p>
                </div>
                <div class="bag2kol-img-wrap">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Two wheeler motorcycle packing and carrier transport service" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Corporate & Administrative Transfer Section with Image 4 -->
    <section class="bag2kol-section bg-light">
        <div class="bag2kol-container">
            <div class="bag2kol-two-col">
                <div class="bag2kol-img-wrap">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck navigating highway transit" loading="lazy">
                </div>
                <div>
                    <h2 class="bag2kol-section-title" style="text-align: left;">Corporate, IT &amp; PSU Transfer Support</h2>
                    <p>Kolkata is the primary commercial and financial hub of Eastern India, housing eastern headquarters of national banks, IT majors in Salt Lake and New Town, Coal India Limited, public sector undertakings, and major multinational corporations.</p>
                    <p>Officers, executives, and IT professionals moving from Bagodar to Kolkata often require stringent documentation to claim their relocation allowance. We provide complete, audit-compliant reimbursement documentation:</p>
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
    <section class="bag2kol-section">
        <div class="bag2kol-container">
            <h2 class="bag2kol-section-title">Our 5-Step Relocation Workflow: Bagodar to Kolkata</h2>
            <p class="bag2kol-section-subtitle">How our streamlined process guarantees a smooth, on-time, and damage-free moving experience.</p>

            <div class="bag2kol-steps-grid">
                <div class="bag2kol-step">
                    <div class="bag2kol-step-num">01</div>
                    <h4>Pre-Move Assessment</h4>
                    <p>We assess your household inventory via digital video survey or doorstep visit in Bagodar to calculate required truck size and packaging materials.</p>
                </div>
                <div class="bag2kol-step">
                    <div class="bag2kol-step-num">02</div>
                    <h4>Multi-Layer Packing</h4>
                    <p>Our skilled packers pack furniture, kitchenware, and fragile electronics using 5-layer protective materials on the scheduled morning.</p>
                </div>
                <div class="bag2kol-step">
                    <div class="bag2kol-step-num">03</div>
                    <h4>Safe Vehicle Loading</h4>
                    <p>Consignments are loaded methodically into our covered container truck, using shock cushions and load stabilizers for zero shifting during transit.</p>
                </div>
                <div class="bag2kol-step">
                    <div class="bag2kol-step-num">04</div>
                    <h4>GT Road Expressway Transit</h4>
                    <p>Our driver navigates the 350 km NH-19 expressway, maintaining steady cruising speeds and providing continuous milestone updates.</p>
                </div>
                <div class="bag2kol-step">
                    <div class="bag2kol-step-num">05</div>
                    <h4>Unloading &amp; Placement</h4>
                    <p>Upon arrival in Kolkata, our team unloads all cartons into your chosen rooms, reassembles beds and tables, and removes unpacked waste.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Served Section -->
    <section class="bag2kol-section bg-light">
        <div class="bag2kol-container">
            <h2 class="bag2kol-section-title">Localities Covered Across Bagodar and Kolkata</h2>
            <p class="bag2kol-section-subtitle">Comprehensive pickup coverage across Bagodar block and direct doorstep delivery across the entire Kolkata metropolitan area.</p>

            <div class="bag2kol-two-col">
                <div class="bag2kol-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--bag2kol-accent); margin-right: 8px;"></i> Bagodar Pickup Areas</h4>
                    <p>Bagodar Main Market, GT Road Chowk, Harihar Dham Area, Sariya Road, Atka, Banpura, Dondlo, Hesla, Kander, Jamtara Mor, Bishungarh Road Crossing, and neighboring rural centers.</p>
                </div>
                <div class="bag2kol-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--bag2kol-primary); margin-right: 8px;"></i> Kolkata Delivery Areas</h4>
                    <p>Salt Lake (Sectors 1-5), New Town, Rajarhat, Howrah, Ballygunge, Alipore, Garia, Dum Dum, Behala, Jadavpur, Park Street, EM Bypass, Tollygunge, and Dankuni.</p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="bag2kol-cta">
                <h3>Ready for a Hassle-Free Bagodar to Kolkata Move?</h3>
                <p>Contact Jharkhand's most trusted intercity relocation company today. Get an honest price quote, guaranteed transit timings, and complete peace of mind.</p>
                <a href="tel:+918409531615" class="bag2kol-btn"><i class="fa-solid fa-phone" style="margin-right: 8px;"></i> Call 8409531615 / 9835565233</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bag2kol-section">
        <div class="bag2kol-container">
            <h2 class="bag2kol-section-title">Frequently Asked Questions: Bagodar to Kolkata Shifting</h2>
            <p class="bag2kol-section-subtitle">Clear answers to common questions regarding timelines, costs, and safety measures.</p>

            <div class="bag2kol-faq-box">
                <div class="bag2kol-faq-item">
                    <h4 class="bag2kol-faq-q">How much time does household shifting take from Bagodar to Kolkata?</h4>
                    <p class="bag2kol-faq-a">The distance between Bagodar and Kolkata is 350 km along the 6-lane NH-19 Grand Trunk Road. Actual driving time for our container truck is approximately 7 to 9 hours. Depending on your preference, delivery can be made the same evening or first thing the following morning.</p>
                </div>

                <div class="bag2kol-faq-item">
                    <h4 class="bag2kol-faq-q">Are your bills accepted for corporate and government employee claims in Kolkata?</h4>
                    <p class="bag2kol-faq-a">Yes, absolutely. We provide 100% genuine IBA-format consignment notes (bilty), official computerized GST tax invoices, stamped money receipts, and itemized inventory packing lists that are readily accepted by corporate enterprises, IT firms, public sector undertakings, and banks.</p>
                </div>

                <div class="bag2kol-faq-item">
                    <h4 class="bag2kol-faq-q">Can you transport my motorcycle or scooter along with household items?</h4>
                    <p class="bag2kol-faq-a">Yes. We specialize in two-wheeler relocation. Your motorcycle or scooter is safely packaged with bubble wrap and corrugated padding, drained of excess fuel, and secured using heavy tie-down belts inside our covered container truck to prevent scratches and balance shifting.</p>
                </div>

                <div class="bag2kol-faq-item">
                    <h4 class="bag2kol-faq-q">Do you provide transit insurance for the Bagodar to Kolkata route?</h4>
                    <p class="bag2kol-faq-a">Yes. We offer comprehensive all-risk transit insurance policy coverage for all valuable household goods and electronics. In the rare event of transit accident or unexpected road incident, you are protected with fast claim settlement.</p>
                </div>

                <div class="bag2kol-faq-item">
                    <h4 class="bag2kol-faq-q">Do you assist with dismantling and reassembling furniture?</h4>
                    <p class="bag2kol-faq-a">Yes. Our crew includes experienced carpenters equipped with electric drills and hand tools who safely dismantle double beds, wardrobes, and dining tables in Bagodar and reassemble them at your new apartment in Kolkata at no extra hidden cost.</p>
                </div>

                <div class="bag2kol-faq-item">
                    <h4 class="bag2kol-faq-q">How do I book my moving date with Shree Ashirwad Packers?</h4>
                    <p class="bag2kol-faq-a">You can confirm your booking by calling our logistics hotline at 8409531615 or 9835565233. We recommend booking 2 to 3 days in advance to reserve your preferred moving date and dedicated container vehicle.</p>
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
                "name": "Kolkata"
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Bagodar to Kolkata Moving Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Household Relocation Bagodar to Kolkata"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Corporate Transfer Relocation Billing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Bike & Car Transportation Bagodar to Kolkata"
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
                "name": "Bagodar to Kolkata",
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
                "name": "How much time does household shifting take from Bagodar to Kolkata?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The distance between Bagodar and Kolkata is 350 km along the 6-lane NH-19 Grand Trunk Road. Actual driving time for our container truck is approximately 7 to 9 hours. Depending on your preference, delivery can be made the same evening or first thing the following morning."
                }
            },
            {
                "@type": "Question",
                "name": "Are your bills accepted for corporate and government employee claims in Kolkata?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, absolutely. We provide 100% genuine IBA-format consignment notes (bilty), official computerized GST tax invoices, stamped money receipts, and itemized inventory packing lists that are readily accepted by corporate enterprises, IT firms, public sector undertakings, and banks."
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
                "name": "Do you provide transit insurance for the Bagodar to Kolkata route?",
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
                    "text": "Yes. Our crew includes experienced carpenters equipped with electric drills and hand tools who safely dismantle double beds, wardrobes, and dining tables in Bagodar and reassemble them at your new apartment in Kolkata at no extra hidden cost."
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
