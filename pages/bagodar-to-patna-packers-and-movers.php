<?php
/**
 * Page Name: Bagodar to Patna Packers and Movers
 * Route Slug: bagodar-to-patna-packers-and-movers
 * Group: Group 3 (Bagodar -> Outside Jharkhand) - Route 12
 * Meta Title: Packers and Movers Bagodar to Patna | Safe Inter-State Shifting
 * Meta Description: Best packers and movers from Bagodar to Patna. 240 km smooth transit via NH-19 & NH-22, 5-layer packing, home moving, car & bike parcel, IBA approved bills.
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Packers and Movers Bagodar to Patna | Safe Inter-State Shifting";
$page_desc = "Best packers and movers from Bagodar to Patna. 240 km smooth transit via NH-19 & NH-22, 5-layer packing, home moving, car & bike parcel, IBA approved bills.";
$canonical_url = "https://www.shreeashirwadpackers.com/bagodar-to-patna-packers-and-movers";
$route_origin = "Bagodar";
$route_destination = "Patna";

// Open Graph
$og_title = "Packers and Movers Bagodar to Patna | Shree Ashirwad Packers";
$og_description = "Reliable Bagodar to Patna household shifting, car transport & bike parcel via NH-19 & NH-22. IBA approved bills, GPS tracking, zero damage guarantee.";
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
    <meta name="keywords" content="bagodar to patna packers and movers, packers and movers bagodar to patna, house shifting bagodar to patna, harihar dham to patna movers, car transport bagodar to patna, bike parcel bagodar to patna, iba approved packers bagodar patna">
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

    <!-- Scoped CSS for Route 12 (Bagodar to Patna) -->
    <style>
        :root {
            --bag2pat-primary: #1e3a8a;
            --bag2pat-secondary: #0284c7;
            --bag2pat-accent: #f59e0b;
            --bag2pat-dark: #0f172a;
            --bag2pat-light: #f8fafc;
            --bag2pat-border: #e2e8f0;
            --bag2pat-muted: #64748b;
            --bag2pat-radius: 12px;
            --bag2pat-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
        }

        .bag2pat-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 75px 20px 70px;
            position: relative;
        }

        .bag2pat-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .bag2pat-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 22px;
        }

        .bag2pat-breadcrumbs a {
            color: #f8fafc;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .bag2pat-breadcrumbs a:hover {
            color: var(--bag2pat-accent);
            text-decoration: underline;
        }

        .bag2pat-hero-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .bag2pat-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.7;
            max-width: 860px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .bag2pat-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 35px;
        }

        .bag2pat-badge {
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

        .bag2pat-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .bag2pat-btn-primary {
            background-color: var(--bag2pat-accent);
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

        .bag2pat-btn-primary:hover {
            background-color: #d97706;
            color: #ffffff;
            transform: translateY(-2px);
        }

        .bag2pat-btn-secondary {
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

        .bag2pat-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }

        .bag2pat-section {
            padding: 65px 0;
        }

        .bg-light {
            background-color: var(--bag2pat-light);
        }

        .bag2pat-section-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.15rem;
            font-weight: 700;
            color: var(--bag2pat-dark);
            margin-bottom: 15px;
            text-align: center;
        }

        .bag2pat-section-subtitle {
            font-size: 1.05rem;
            color: var(--bag2pat-muted);
            text-align: center;
            max-width: 760px;
            margin: 0 auto 45px;
            line-height: 1.6;
        }

        .bag2pat-two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .bag2pat-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            margin-top: 35px;
        }

        .bag2pat-card {
            background: #ffffff;
            border: 1px solid var(--bag2pat-border);
            border-radius: var(--bag2pat-radius);
            padding: 28px 22px;
            box-shadow: var(--bag2pat-shadow);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .bag2pat-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.12);
        }

        .bag2pat-card-icon {
            font-size: 2.2rem;
            color: var(--bag2pat-primary);
            margin-bottom: 18px;
        }

        .bag2pat-card h3, .bag2pat-card h4 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 12px;
        }

        .bag2pat-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        .bag2pat-img-wrap {
            border-radius: var(--bag2pat-radius);
            overflow: hidden;
            box-shadow: var(--bag2pat-shadow);
            border: 1px solid var(--bag2pat-border);
        }

        .bag2pat-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .bag2pat-img-wrap:hover img {
            transform: scale(1.03);
        }

        .bag2pat-table-container {
            overflow-x: auto;
            margin: 30px 0;
            border-radius: var(--bag2pat-radius);
            box-shadow: var(--bag2pat-shadow);
            border: 1px solid var(--bag2pat-border);
            background: #ffffff;
        }

        .bag2pat-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.96rem;
        }

        .bag2pat-table th {
            background-color: var(--bag2pat-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 600;
        }

        .bag2pat-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
        }

        .bag2pat-table tr:hover {
            background-color: #f8fafc;
        }

        .bag2pat-steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .bag2pat-step {
            background: #ffffff;
            border: 1px solid var(--bag2pat-border);
            border-radius: var(--bag2pat-radius);
            padding: 24px 18px;
            text-align: center;
            position: relative;
        }

        .bag2pat-step-num {
            width: 44px;
            height: 44px;
            background: var(--bag2pat-primary);
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            margin: 0 auto 16px;
            font-size: 1.1rem;
        }

        .bag2pat-step h4 {
            font-size: 1.1rem;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .bag2pat-step p {
            font-size: 0.9rem;
            color: #64748b;
            line-height: 1.5;
            margin: 0;
        }

        .bag2pat-faq-box {
            max-width: 900px;
            margin: 0 auto;
        }

        .bag2pat-faq-item {
            background: #ffffff;
            border: 1px solid var(--bag2pat-border);
            border-radius: 10px;
            margin-bottom: 15px;
            padding: 20px 24px;
        }

        .bag2pat-faq-q {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .bag2pat-faq-q::before {
            content: "Q";
            background: var(--bag2pat-primary);
            color: #fff;
            font-size: 0.85rem;
            padding: 3px 9px;
            border-radius: 4px;
            font-weight: 800;
        }

        .bag2pat-faq-a {
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.65;
            margin: 0;
            padding-left: 32px;
        }

        .bag2pat-cta {
            background: linear-gradient(135deg, var(--bag2pat-dark) 0%, var(--bag2pat-primary) 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 45px 30px;
            text-align: center;
            margin-top: 45px;
        }

        .bag2pat-cta h3 {
            font-size: 1.85rem;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .bag2pat-cta p {
            font-size: 1.05rem;
            color: #cbd5e1;
            max-width: 650px;
            margin: 0 auto 25px;
            line-height: 1.6;
        }

        .bag2pat-btn {
            background: var(--bag2pat-accent);
            color: #1e293b;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.25s ease;
        }

        .bag2pat-btn:hover {
            background: #d97706;
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .bag2pat-hero-title {
                font-size: 2.1rem;
            }
            .bag2pat-two-col {
                grid-template-columns: 1fr;
            }
            .bag2pat-cta-group {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="bag2pat-hero">
        <div class="bag2pat-container">
            <nav class="bag2pat-breadcrumbs" aria-label="Breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo;
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bagodar">Bagodar</a> &raquo;
                <span>Bagodar to Patna</span>
            </nav>

            <h1 class="bag2pat-hero-title">Premier Packers and Movers Bagodar to Patna</h1>
            <p class="bag2pat-hero-subtitle">Relocating from Bagodar to Bihar's capital city? Enjoy safe, dependable 240 km inter-state relocation across NH-19 and NH-22 with Shree Ashirwad Packers and Movers. We provide 5-layer multi-barrier packaging, customized closed container trucks, government transfer documentation, and prompt doorstep delivery across all residential areas of Patna.</p>

            <div class="bag2pat-badges">
                <span class="bag2pat-badge"><i class="fa-solid fa-road"></i> 240 KM via NH-19 &amp; NH-22</span>
                <span class="bag2pat-badge"><i class="fa-solid fa-clock"></i> 5.5 - 6.5 Hours Direct Transit</span>
                <span class="bag2pat-badge"><i class="fa-solid fa-file-invoice"></i> 100% IBA Approved Bills</span>
                <span class="bag2pat-badge"><i class="fa-solid fa-shield-halved"></i> Comprehensive Transit Cover</span>
                <span class="bag2pat-badge"><i class="fa-solid fa-box-open"></i> Multi-Layer Protective Packing</span>
            </div>

            <div class="bag2pat-cta-group">
                <a href="tel:+918409531615" class="bag2pat-btn-primary"><i class="fa-solid fa-phone"></i> Call 8409531615</a>
                <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Bagodar%20to%20Patna%20shifting" class="bag2pat-btn-secondary" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Instant WhatsApp Quote</a>
            </div>
        </div>
    </header>

    <!-- Overview Section with Image 1 -->
    <section class="bag2pat-section">
        <div class="bag2pat-container">
            <div class="bag2pat-two-col">
                <div>
                    <h2 class="bag2pat-section-title" style="text-align: left;">Direct Inter-State Highway Shifting to Bihar Capital</h2>
                    <p>The journey from Bagodar to Patna covers roughly 240 kilometers. Leaving Bagodar along the Grand Trunk Road (NH-19) toward Barhi, the route turns north onto the newly widened National Highway 22 via Rajauli, Nawada, and Bihar Sharif before entering Patna via the Bakhtiyarpur four-lane expressway. This inter-state highway corridor allows our closed container trucks to complete the journey comfortably within 5.5 to 6.5 hours.</p>
                    <p>Whether you are a government official transferring to the Bihar Secretariat, an academic taking a posting at Patna University, AIIMS Patna, or NIT Patna, a medical professional moving to Kankarbagh or Bailey Road, or a business family setting up a new residence in Boring Road or Danapur, Shree Ashirwad Packers and Movers brings total reliability. We eliminate all moving stress through end-to-end relocation management.</p>
                    <p>Our fleet consists of dedicated, weatherproof container vehicles built to absorb long-distance road vibration. With trained loaders, skilled carpenters, and experienced drivers who know inter-state border check-posts and Patna municipal entry restrictions, your entire move is completed without friction or delays.</p>
                </div>
                <div class="bag2pat-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Intercity shifting truck loading goods for Patna transit" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="bag2pat-section bg-light">
        <div class="bag2pat-container">
            <h2 class="bag2pat-section-title">Why Shree Ashirwad Leads the Bagodar to Patna Moving Route</h2>
            <p class="bag2pat-section-subtitle">Discover the operational safeguards, transparent policies, and rigorous standards that distinguish our intercity relocation service.</p>

            <div class="bag2pat-features-grid">
                <div class="bag2pat-card">
                    <div class="bag2pat-card-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                    <h3>5-Layer Barrier Packing</h3>
                    <p>We wrap all electronic goods, solid wood furniture, chinaware, and glass tops using bubble sheets, corrugated fluting, thermal foam, corner guards, and high-tensile stretch film to resist road friction.</p>
                </div>

                <div class="bag2pat-card">
                    <div class="bag2pat-card-icon"><i class="fa-solid fa-truck-moving"></i></div>
                    <h3>Dedicated Closed Containers</h3>
                    <p>We deploy closed-body, weatherproof container trucks rather than open trolleys. Your consignments remain dry, locked, and completely protected from highway dust, rain showers, and transit vibration.</p>
                </div>

                <div class="bag2pat-card">
                    <div class="bag2pat-card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <h3>Govt &amp; Banking Transfer Claim Bills</h3>
                    <p>We provide full documentation for government and corporate relocation reimbursement: IBA-approved bilty (LR), computerized GST invoice, quotation comparison, and signed inventory receipts.</p>
                </div>

                <div class="bag2pat-card">
                    <div class="bag2pat-card-icon"><i class="fa-solid fa-people-carry-box"></i></div>
                    <h3>Expert In-House Crew</h3>
                    <p>We never outsource to untrained local day-laborers. Our background-verified crews are trained in proper dismantling of beds, modular wardrobes, TV wall mounts, and safe stairwell maneuvering.</p>
                </div>

                <div class="bag2pat-card">
                    <div class="bag2pat-card-icon"><i class="fa-solid fa-motorcycle"></i></div>
                    <h3>Bike &amp; Car Safe Transportation</h3>
                    <p>Relocating your motorbike, scooter, or personal sedan from Bagodar to Patna? We use wheel chocks, heavy ratchet lashings, and dense padding for zero-scratch door-to-door vehicle relocation.</p>
                </div>

                <div class="bag2pat-card">
                    <div class="bag2pat-card-icon"><i class="fa-solid fa-handshake-angle"></i></div>
                    <h3>Transparent Pricing &amp; Zero Hidden Fees</h3>
                    <p>No toll surprise, no diesel surcharge, and no sudden unloading fee upon arrival in Patna. You receive an all-inclusive, binding written quote before packing commences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fragile Packing Section with Image 2 -->
    <section class="bag2pat-section">
        <div class="bag2pat-container">
            <div class="bag2pat-two-col">
                <div class="bag2pat-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/fragile-glassware-box-packing-ranchi.jpg" alt="Fragile glassware box packing and protection" loading="lazy">
                </div>
                <div>
                    <h2 class="bag2pat-section-title" style="text-align: left;">Engineered 5-Layer Packaging for Fragile &amp; Heavy Cargo</h2>
                    <p>Relocating across 240 km of inter-state highway requires meticulous packaging to withstand bridge expansion joints, toll approaches, and urban traffic stops in Patna. Shree Ashirwad Packers and Movers implements a rigorous 5-layer protective packing protocol for all residential consignments:</p>
                    <ul style="color: #475569; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
                        <li><strong>Layer 1 - Scratch-Proof Barrier:</strong> Virgin foam wrapping and soft cotton sheets applied directly to polished surfaces of wooden furniture, leather sofas, and LED screens.</li>
                        <li><strong>Layer 2 - Shock Absorption:</strong> High-density air bubble wrap (500 GSM) cushioning delicate dinnerware, glassware, decorative wall art, and precision kitchen electronics.</li>
                        <li><strong>Layer 3 - Structural Reinforcement:</strong> Heavy-gauge corrugated fluted rolls tailored around heavy appliances, dining tables, washing machines, and refrigerator corners.</li>
                        <li><strong>Layer 4 - Moisture &amp; Dust Seal:</strong> Industrial-grade poly-stretch wrap sealed airtight to safeguard items from road dust, soot, and monsoon rains.</li>
                        <li><strong>Layer 5 - Box Crating &amp; Strapping:</strong> Rigid 5-ply cartons taped with reinforced PVC tape, clearly marked with room tags and directional "This Side Up" labels.</li>
                    </ul>
                    <p>Our systematic labeling ensures that when our crew reaches your new apartment in Boring Road, Kankarbagh, or Bailey Road, every carton is placed immediately in its intended room without confusion.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Table Section -->
    <section class="bag2pat-section bg-light">
        <div class="bag2pat-container">
            <h2 class="bag2pat-section-title">Transparent Pricing: Bagodar to Patna Relocation Rates</h2>
            <p class="bag2pat-section-subtitle">Clear and competitive shifting charges for household, corporate, and vehicle transit along the 240 km corridor.</p>

            <div class="bag2pat-table-container">
                <table class="bag2pat-table">
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
                            <td>Same Day (5.5 - 6.5 Hrs)</td>
                            <td>&#8377; 9,000 - &#8377; 14,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Complete Household</strong></td>
                            <td>5-Layer Multi-Barrier Packing</td>
                            <td>14 Ft Closed Container</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 14,000 - &#8377; 21,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Independent House</strong></td>
                            <td>Premium 5-Layer + Wooden Crating</td>
                            <td>17 Ft / 19 Ft Container Truck</td>
                            <td>Next Day Delivery</td>
                            <td>&#8377; 19,500 - &#8377; 28,000</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Large Bungalow</strong></td>
                            <td>Complete White-Glove Service</td>
                            <td>Dedicated 22 Ft Heavy Container</td>
                            <td>Next Day Delivery</td>
                            <td>&#8377; 27,000 - &#8377; 39,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>3-Layer Bubble &amp; Corrugated Wrap</td>
                            <td>Dedicated Vehicle Carrier</td>
                            <td>1 - 2 Days</td>
                            <td>&#8377; 2,400 - &#8377; 3,800</td>
                        </tr>
                        <tr>
                            <td><strong>Car Transport (Hatchback / SUV)</strong></td>
                            <td>Protective Covers &amp; Lashing</td>
                            <td>Hydraulic Car Carrier Truck</td>
                            <td>1 - 2 Days</td>
                            <td>&#8377; 6,500 - &#8377; 11,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="text-align: center; font-size: 0.9rem; color: #64748b; margin-top: 15px;">*Rates are indicative and vary based on floor levels, elevator availability, fragile quantity, and chosen insurance value. Contact us for a precise, binding quotation.</p>
        </div>
    </section>

    <!-- Vehicle Carrier Section with Image 3 -->
    <section class="bag2pat-section">
        <div class="bag2pat-container">
            <div class="bag2pat-two-col">
                <div>
                    <h2 class="bag2pat-section-title" style="text-align: left;">Safe Two-Wheeler &amp; Car Transportation</h2>
                    <p>Riding a motorcycle or driving an older personal vehicle over 240 km across inter-state border check-posts and congested entry roads into Patna can be exhausting and hazardous. Shree Ashirwad Packers and Movers provides specialized vehicle relocation services connecting Bagodar and Patna with total peace of mind.</p>
                    <p>For two-wheelers, our team handles careful pre-transit preparation. We drain excess petrol to prevent vapor leaks, shield headlights, digital consoles, side mirrors, and fuel tanks with corrugated padding, and secure the bike upright inside our truck with heavy-duty ratchet tie-downs.</p>
                    <p>For personal four-wheelers, we offer hydraulic car carrier transit or accompanied expert driver relocation with full insurance coverage. Your vehicle is thoroughly inspected with an odometer and body scratch record before departure and handed over in immaculate condition at your Patna address.</p>
                    <p>Our transport crews maintain dedicated transit logs and GPS communication throughout the journey from Bagodar to Patna, ensuring zero jolts to your automobile or crated household cargo.</p>
                </div>
                <div class="bag2pat-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Two wheeler motorcycle packing and carrier transport service" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Corporate & Administrative Transfer Section with Image 4 -->
    <section class="bag2pat-section bg-light">
        <div class="bag2pat-container">
            <div class="bag2pat-two-col">
                <div class="bag2pat-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck navigating highway transit" loading="lazy">
                </div>
                <div>
                    <h2 class="bag2pat-section-title" style="text-align: left;">Government, University &amp; Banking Transfer Support</h2>
                    <p>Patna is Bihar's administrative, educational, and medical nerve center, hosting state government ministries, Patna High Court, premier universities, nationalized bank headquarters, and central public institutions.</p>
                    <p>Officers, judges, professors, and bank executives moving from Bagodar to Patna require stringent documentation to claim their relocation allowance. We provide complete, audit-compliant reimbursement documentation:</p>
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
    <section class="bag2pat-section">
        <div class="bag2pat-container">
            <h2 class="bag2pat-section-title">Our 5-Step Relocation Workflow: Bagodar to Patna</h2>
            <p class="bag2pat-section-subtitle">How our streamlined process guarantees a smooth, on-time, and damage-free moving experience.</p>

            <div class="bag2pat-steps-grid">
                <div class="bag2pat-step">
                    <div class="bag2pat-step-num">01</div>
                    <h4>Pre-Move Assessment</h4>
                    <p>We assess your household inventory via digital video survey or doorstep visit in Bagodar to calculate required truck size and packaging materials.</p>
                </div>
                <div class="bag2pat-step">
                    <div class="bag2pat-step-num">02</div>
                    <h4>Multi-Layer Packing</h4>
                    <p>Our skilled packers pack furniture, kitchenware, and fragile electronics using 5-layer protective materials on the scheduled morning.</p>
                </div>
                <div class="bag2pat-step">
                    <div class="bag2pat-step-num">03</div>
                    <h4>Safe Vehicle Loading</h4>
                    <p>Consignments are loaded methodically into our covered container truck, using shock cushions and load stabilizers for zero shifting during transit.</p>
                </div>
                <div class="bag2pat-step">
                    <div class="bag2pat-step-num">04</div>
                    <h4>Inter-State Highway Transit</h4>
                    <p>Our driver navigates the 240 km NH-19 and NH-22 expressway, maintaining steady cruising speeds and providing continuous milestone updates.</p>
                </div>
                <div class="bag2pat-step">
                    <div class="bag2pat-step-num">05</div>
                    <h4>Unloading &amp; Placement</h4>
                    <p>Upon arrival in Patna, our team unloads all cartons into your chosen rooms, reassembles beds and tables, and removes unpacked waste.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Served Section -->
    <section class="bag2pat-section bg-light">
        <div class="bag2pat-container">
            <h2 class="bag2pat-section-title">Localities Covered Across Bagodar and Patna</h2>
            <p class="bag2pat-section-subtitle">Comprehensive pickup coverage across Bagodar block and direct doorstep delivery across the entire Patna urban region.</p>

            <div class="bag2pat-two-col">
                <div class="bag2pat-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--bag2pat-accent); margin-right: 8px;"></i> Bagodar Pickup Areas</h4>
                    <p>Bagodar Main Market, GT Road Chowk, Harihar Dham Area, Sariya Road, Atka, Banpura, Dondlo, Hesla, Kander, Jamtara Mor, Bishungarh Road Crossing, and neighboring rural centers.</p>
                </div>
                <div class="bag2pat-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--bag2pat-primary); margin-right: 8px;"></i> Patna Delivery Areas</h4>
                    <p>Boring Road, Kankarbagh, Bailey Road, Rajendra Nagar, Patliputra Colony, Fraser Road, Danapur, Anisabad, Ashiana Nagar, Exhibition Road, Saguna More, and Phulwari Sharif.</p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="bag2pat-cta">
                <h3>Ready for a Hassle-Free Bagodar to Patna Move?</h3>
                <p>Contact Jharkhand's most trusted intercity relocation company today. Get an honest price quote, guaranteed transit timings, and complete peace of mind.</p>
                <a href="tel:+918409531615" class="bag2pat-btn"><i class="fa-solid fa-phone" style="margin-right: 8px;"></i> Call 8409531615 / 9835565233</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bag2pat-section">
        <div class="bag2pat-container">
            <h2 class="bag2pat-section-title">Frequently Asked Questions: Bagodar to Patna Shifting</h2>
            <p class="bag2pat-section-subtitle">Clear answers to common questions regarding timelines, costs, and safety measures.</p>

            <div class="bag2pat-faq-box">
                <div class="bag2pat-faq-item">
                    <h4 class="bag2pat-faq-q">How much time does household shifting take from Bagodar to Patna?</h4>
                    <p class="bag2pat-faq-a">The distance between Bagodar and Patna is 240 km along NH-19 and NH-22. Actual driving time for our container truck is approximately 5.5 to 6.5 hours. Including morning packing and careful transit, full delivery is achieved within the same day or early the following morning.</p>
                </div>

                <div class="bag2pat-faq-item">
                    <h4 class="bag2pat-faq-q">Are your bills accepted for government employee claims in Patna?</h4>
                    <p class="bag2pat-faq-a">Yes, absolutely. We provide 100% genuine IBA-format consignment notes (bilty), official computerized GST tax invoices, stamped money receipts, and itemized inventory packing lists that are readily accepted by Bihar state government departments, universities, and banks.</p>
                </div>

                <div class="bag2pat-faq-item">
                    <h4 class="bag2pat-faq-q">Can you transport my motorcycle or scooter along with household items?</h4>
                    <p class="bag2pat-faq-a">Yes. We specialize in two-wheeler relocation. Your motorcycle or scooter is safely packaged with bubble wrap and corrugated padding, drained of excess fuel, and secured using heavy tie-down belts inside our covered container truck to prevent scratches and balance shifting.</p>
                </div>

                <div class="bag2pat-faq-item">
                    <h4 class="bag2pat-faq-q">Do you provide transit insurance for the Bagodar to Patna route?</h4>
                    <p class="bag2pat-faq-a">Yes. We offer comprehensive all-risk transit insurance policy coverage for all valuable household goods and electronics. In the rare event of transit accident or unexpected road incident, you are protected with fast claim settlement.</p>
                </div>

                <div class="bag2pat-faq-item">
                    <h4 class="bag2pat-faq-q">Do you assist with dismantling and reassembling furniture?</h4>
                    <p class="bag2pat-faq-a">Yes. Our crew includes experienced carpenters equipped with electric drills and hand tools who safely dismantle double beds, wardrobes, and dining tables in Bagodar and reassemble them at your new house in Patna at no extra hidden cost.</p>
                </div>

                <div class="bag2pat-faq-item">
                    <h4 class="bag2pat-faq-q">How do I book my moving date with Shree Ashirwad Packers?</h4>
                    <p class="bag2pat-faq-a">You can confirm your booking by calling our logistics hotline at 8409531615 or 9835565233. We recommend booking 2 to 3 days in advance to reserve your preferred moving date and dedicated container vehicle.</p>
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
                "name": "Patna"
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Bagodar to Patna Moving Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Household Relocation Bagodar to Patna"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Interstate Transfer Relocation Billing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Bike & Car Transportation Bagodar to Patna"
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
                "name": "Bagodar to Patna",
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
                "name": "How much time does household shifting take from Bagodar to Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The distance between Bagodar and Patna is 240 km along NH-19 and NH-22. Actual driving time for our container truck is approximately 5.5 to 6.5 hours. Including morning packing and careful transit, full delivery is achieved within the same day or early the following morning."
                }
            },
            {
                "@type": "Question",
                "name": "Are your bills accepted for government employee claims in Patna?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, absolutely. We provide 100% genuine IBA-format consignment notes (bilty), official computerized GST tax invoices, stamped money receipts, and itemized inventory packing lists that are readily accepted by Bihar state government departments, universities, and banks."
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
                "name": "Do you provide transit insurance for the Bagodar to Patna route?",
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
                    "text": "Yes. Our crew includes experienced carpenters equipped with electric drills and hand tools who safely dismantle double beds, wardrobes, and dining tables in Bagodar and reassemble them at your new house in Patna at no extra hidden cost."
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
