<?php
/**
 * Page Name: Dhanbad to Bagodar Packers and Movers
 * Route Slug: dhanbad-to-bagodar-packers-and-movers
 * Group: Group 2 (Inside Jharkhand -> Bagodar) - Route 8
 * Meta Title: Packers and Movers Dhanbad to Bagodar | Safe NH-19 Shifting
 * Meta Description: Trusted packers and movers from Dhanbad to Bagodar. 85 km smooth GT Road NH-19 transit, 5-layer packing, BCCL/Govt transfer bills, 100% safe home delivery.
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Packers and Movers Dhanbad to Bagodar | Safe NH-19 Shifting";
$page_desc = "Trusted packers and movers from Dhanbad to Bagodar. 85 km smooth GT Road NH-19 transit, 5-layer packing, BCCL/Govt transfer bills, 100% safe home delivery.";
$canonical_url = "https://www.shreeashirwadpackers.com/dhanbad-to-bagodar-packers-and-movers";
$route_origin = "Dhanbad";
$route_destination = "Bagodar";

// Open Graph
$og_title = "Packers and Movers Dhanbad to Bagodar | Shree Ashirwad Packers";
$og_description = "Hassle-free household shifting, car transport & bike parcel from Dhanbad to Bagodar via NH-19 GT Road. IBA approved billing, zero damage guarantee.";
$og_url = $canonical_url;
$og_image = SITE_BASE_URL . "/images/complete-household-packing-dhanbad.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="dhanbad to bagodar packers and movers, packers and movers dhanbad to bagodar, house shifting dhanbad to bagodar, gt road movers dhanbad bagodar, car transport dhanbad to bagodar, bike parcel dhanbad to bagodar, iba approved packers dhanbad bagodar">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Dhanbad">

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

    <!-- Scoped CSS for Route 8 (Dhanbad to Bagodar) -->
    <style>
        :root {
            --dhn2bag-primary: #0f766e;
            --dhn2bag-secondary: #0d9488;
            --dhn2bag-accent: #f59e0b;
            --dhn2bag-dark: #134e4a;
            --dhn2bag-light: #f0fdfa;
            --dhn2bag-border: #ccfbf1;
            --dhn2bag-muted: #64748b;
            --dhn2bag-radius: 12px;
            --dhn2bag-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
        }

        .dhn2bag-hero {
            background: linear-gradient(135deg, rgba(19, 78, 74, 0.94) 0%, rgba(15, 118, 110, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 75px 20px 70px;
            position: relative;
        }

        .dhn2bag-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .dhn2bag-breadcrumbs {
            font-size: 0.9rem;
            color: #99f6e4;
            margin-bottom: 22px;
        }

        .dhn2bag-breadcrumbs a {
            color: #f0fdfa;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .dhn2bag-breadcrumbs a:hover {
            color: var(--dhn2bag-accent);
            text-decoration: underline;
        }

        .dhn2bag-hero-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .dhn2bag-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.7;
            max-width: 860px;
            color: #ccfbf1;
            margin-bottom: 28px;
        }

        .dhn2bag-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 35px;
        }

        .dhn2bag-badge {
            background: rgba(255, 255, 255, 0.15);
            border: 1px solid rgba(255, 255, 255, 0.3);
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

        .dhn2bag-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .dhn2bag-btn-primary {
            background-color: var(--dhn2bag-accent);
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

        .dhn2bag-btn-primary:hover {
            background-color: #d97706;
            color: #ffffff;
            transform: translateY(-2px);
        }

        .dhn2bag-btn-secondary {
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

        .dhn2bag-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }

        .dhn2bag-section {
            padding: 65px 0;
        }

        .bg-light {
            background-color: var(--dhn2bag-light);
        }

        .dhn2bag-section-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.15rem;
            font-weight: 700;
            color: var(--dhn2bag-dark);
            margin-bottom: 15px;
            text-align: center;
        }

        .dhn2bag-section-subtitle {
            font-size: 1.05rem;
            color: var(--dhn2bag-muted);
            text-align: center;
            max-width: 760px;
            margin: 0 auto 45px;
            line-height: 1.6;
        }

        .dhn2bag-two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .dhn2bag-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            margin-top: 35px;
        }

        .dhn2bag-card {
            background: #ffffff;
            border: 1px solid var(--dhn2bag-border);
            border-radius: var(--dhn2bag-radius);
            padding: 28px 22px;
            box-shadow: var(--dhn2bag-shadow);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .dhn2bag-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.12);
        }

        .dhn2bag-card-icon {
            font-size: 2.2rem;
            color: var(--dhn2bag-primary);
            margin-bottom: 18px;
        }

        .dhn2bag-card h3, .dhn2bag-card h4 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 12px;
        }

        .dhn2bag-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        .dhn2bag-img-wrap {
            border-radius: var(--dhn2bag-radius);
            overflow: hidden;
            box-shadow: var(--dhn2bag-shadow);
            border: 1px solid var(--dhn2bag-border);
        }

        .dhn2bag-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .dhn2bag-img-wrap:hover img {
            transform: scale(1.03);
        }

        .dhn2bag-table-container {
            overflow-x: auto;
            margin: 30px 0;
            border-radius: var(--dhn2bag-radius);
            box-shadow: var(--dhn2bag-shadow);
            border: 1px solid var(--dhn2bag-border);
            background: #ffffff;
        }

        .dhn2bag-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.96rem;
        }

        .dhn2bag-table th {
            background-color: var(--dhn2bag-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 600;
        }

        .dhn2bag-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
        }

        .dhn2bag-table tr:hover {
            background-color: #f0fdfa;
        }

        .dhn2bag-steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .dhn2bag-step {
            background: #ffffff;
            border: 1px solid var(--dhn2bag-border);
            border-radius: var(--dhn2bag-radius);
            padding: 24px 18px;
            text-align: center;
            position: relative;
        }

        .dhn2bag-step-num {
            width: 44px;
            height: 44px;
            background: var(--dhn2bag-primary);
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            margin: 0 auto 16px;
            font-size: 1.1rem;
        }

        .dhn2bag-step h4 {
            font-size: 1.1rem;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .dhn2bag-step p {
            font-size: 0.9rem;
            color: #64748b;
            line-height: 1.5;
            margin: 0;
        }

        .dhn2bag-faq-box {
            max-width: 900px;
            margin: 0 auto;
        }

        .dhn2bag-faq-item {
            background: #ffffff;
            border: 1px solid var(--dhn2bag-border);
            border-radius: 10px;
            margin-bottom: 15px;
            padding: 20px 24px;
        }

        .dhn2bag-faq-q {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .dhn2bag-faq-q::before {
            content: "Q";
            background: var(--dhn2bag-primary);
            color: #fff;
            font-size: 0.85rem;
            padding: 3px 9px;
            border-radius: 4px;
            font-weight: 800;
        }

        .dhn2bag-faq-a {
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.65;
            margin: 0;
            padding-left: 32px;
        }

        .dhn2bag-cta {
            background: linear-gradient(135deg, var(--dhn2bag-dark) 0%, var(--dhn2bag-primary) 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 45px 30px;
            text-align: center;
            margin-top: 45px;
        }

        .dhn2bag-cta h3 {
            font-size: 1.85rem;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .dhn2bag-cta p {
            font-size: 1.05rem;
            color: #ccfbf1;
            max-width: 650px;
            margin: 0 auto 25px;
            line-height: 1.6;
        }

        .dhn2bag-btn {
            background: var(--dhn2bag-accent);
            color: #0f172a;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.25s ease;
        }

        .dhn2bag-btn:hover {
            background: #d97706;
            color: #fff;
        }

        @media (max-width: 768px) {
            .dhn2bag-hero-title {
                font-size: 2.1rem;
            }
            .dhn2bag-two-col {
                grid-template-columns: 1fr;
            }
            .dhn2bag-cta-group {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="dhn2bag-hero">
        <div class="dhn2bag-container">
            <nav class="dhn2bag-breadcrumbs" aria-label="Breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo;
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bagodar">Bagodar</a> &raquo;
                <span>Dhanbad to Bagodar</span>
            </nav>

            <h1 class="dhn2bag-hero-title">Trusted Packers and Movers Dhanbad to Bagodar</h1>
            <p class="dhn2bag-hero-subtitle">Relocating from the Coal Capital of India to Bagodar? Experience smooth, safe, and punctual 85 km transit along the 6-lane Grand Trunk Road (NH-19) with Shree Ashirwad Packers and Movers. We provide 5-layer multi-barrier packaging, customized container vehicles, BCCL &amp; government approved reimbursement billing, and same-day delivery across Bagodar.</p>

            <div class="dhn2bag-badges">
                <span class="dhn2bag-badge"><i class="fa-solid fa-road"></i> 85 KM via NH-19 GT Road</span>
                <span class="dhn2bag-badge"><i class="fa-solid fa-clock"></i> 2 - 3 Hours Direct Transit</span>
                <span class="dhn2bag-badge"><i class="fa-solid fa-file-invoice"></i> 100% IBA Approved Bills</span>
                <span class="dhn2bag-badge"><i class="fa-solid fa-shield-halved"></i> Comprehensive Transit Cover</span>
                <span class="dhn2bag-badge"><i class="fa-solid fa-box-open"></i> Premium 5-Layer Packing</span>
            </div>

            <div class="dhn2bag-cta-group">
                <a href="tel:+918409531615" class="dhn2bag-btn-primary"><i class="fa-solid fa-phone"></i> Call 8409531615</a>
                <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Dhanbad%20to%20Bagodar%20shifting" class="dhn2bag-btn-secondary" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Instant WhatsApp Quote</a>
            </div>
        </div>
    </header>

    <!-- Overview Section with Image 1 -->
    <section class="dhn2bag-section">
        <div class="dhn2bag-container">
            <div class="dhn2bag-two-col">
                <div>
                    <h2 class="dhn2bag-section-title" style="text-align: left;">Direct Express Transit Along NH-19 Grand Trunk Road</h2>
                    <p>Relocating from the urban coal metropolis of Dhanbad to Bagodar covers an 85-kilometer highway stretch along the modern 6-lane National Highway 19 (formerly NH-2 GT Road). Passing through Govindpur, Rajganj, and Topchanchi, our transport container trucks cruise smoothly along this national highway, completing the entire journey within 2 to 2.5 hours of departure.</p>
                    <p>This route is frequently used by mining engineers and executives from Bharat Coking Coal Limited (BCCL), Eastern Coalfields (ECL), and CMPDI who are retiring or transferring to ancestral properties in Bagodar, academic faculty from IIT ISM Dhanbad moving back to regional estates, traders expanding supply hubs along the GT Road, and families seeking comfortable countryside living near Harihar Dham. Shree Ashirwad Packers and Movers eliminates all shifting friction through complete end-to-end relocation management.</p>
                    <p>Our dedicated moving team handles all aspects: carefully dismantling wooden furniture in Dhanbad, packing china and electronics with shock-resistant cushioning, loading securely into closed container vehicles, and unloading into your designated rooms in Bagodar—all completed comfortably within the same day.</p>
                </div>
                <div class="dhn2bag-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household packing and container loading in Dhanbad for Bagodar move" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="dhn2bag-section bg-light">
        <div class="dhn2bag-container">
            <h2 class="dhn2bag-section-title">Why Shree Ashirwad is Preferred on Dhanbad to Bagodar Route</h2>
            <p class="dhn2bag-section-subtitle">Discover the operational safeguards, transparent policies, and rigorous standards that distinguish our intercity relocation service.</p>

            <div class="dhn2bag-features-grid">
                <div class="dhn2bag-card">
                    <div class="dhn2bag-card-icon"><i class="fa-solid fa-boxes-stacked"></i></div>
                    <h3>5-Layer Barrier Packing</h3>
                    <p>We wrap all electronic goods, solid wood furniture, chinaware, and glass tops using bubble sheets, corrugated fluting, thermal foam, corner guards, and high-tensile stretch film to resist road friction.</p>
                </div>

                <div class="dhn2bag-card">
                    <div class="dhn2bag-card-icon"><i class="fa-solid fa-truck-moving"></i></div>
                    <h3>Dedicated Closed Containers</h3>
                    <p>We deploy closed-body, weatherproof container trucks rather than open trolleys. Your consignments remain dry, locked, and completely protected from highway dust, rain showers, and transit vibration.</p>
                </div>

                <div class="dhn2bag-card">
                    <div class="dhn2bag-card-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                    <h3>BCCL &amp; PSU Transfer Claim Bills</h3>
                    <p>We provide full documentation for government and corporate relocation reimbursement: IBA-approved bilty (LR), computerized GST invoice, quotation comparison, and signed inventory receipts.</p>
                </div>

                <div class="dhn2bag-card">
                    <div class="dhn2bag-card-icon"><i class="fa-solid fa-people-carry-box"></i></div>
                    <h3>Expert In-House Crew</h3>
                    <p>We never outsource to untrained local day-laborers. Our background-verified crews are trained in proper dismantling of beds, modular wardrobes, TV wall mounts, and safe stairwell maneuvering.</p>
                </div>

                <div class="dhn2bag-card">
                    <div class="dhn2bag-card-icon"><i class="fa-solid fa-motorcycle"></i></div>
                    <h3>Bike &amp; Car Safe Transportation</h3>
                    <p>Relocating your motorbike, scooter, or personal sedan from Dhanbad to Bagodar? We use wheel chocks, heavy ratchet lashings, and dense padding for zero-scratch door-to-door vehicle relocation.</p>
                </div>

                <div class="dhn2bag-card">
                    <div class="dhn2bag-card-icon"><i class="fa-solid fa-handshake-angle"></i></div>
                    <h3>Transparent Pricing &amp; Zero Hidden Fees</h3>
                    <p>No toll surprise, no diesel surcharge, and no sudden unloading fee upon arrival in Bagodar. You receive an all-inclusive, binding written quote before packing commences.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Packaging & Protection Section with Image 2 -->
    <section class="dhn2bag-section">
        <div class="dhn2bag-container">
            <div class="dhn2bag-two-col">
                <div class="dhn2bag-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Bubble wrap and carton packaging materials for household goods" loading="lazy">
                </div>
                <div>
                    <h2 class="dhn2bag-section-title" style="text-align: left;">Engineered 5-Layer Packaging for Fragile &amp; Heavy Cargo</h2>
                    <p>Relocating across the 85 km GT Road requires meticulous packaging to withstand bridge expansion joints, toll approaches, and internal village access roads around Bagodar. Shree Ashirwad Packers and Movers implements a rigorous 5-layer protective packing protocol for all residential consignments:</p>
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
    <section class="dhn2bag-section bg-light">
        <div class="dhn2bag-container">
            <h2 class="dhn2bag-section-title">Transparent Pricing: Dhanbad to Bagodar Relocation Rates</h2>
            <p class="dhn2bag-section-subtitle">Clear and competitive shifting charges for household, corporate, and vehicle transit along the 85 km NH-19 corridor.</p>

            <div class="dhn2bag-table-container">
                <table class="dhn2bag-table">
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
                            <td>2 - 3 Hours</td>
                            <td>&#8377; 4,500 - &#8377; 7,500</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Complete Household</strong></td>
                            <td>5-Layer Multi-Barrier Packing</td>
                            <td>14 Ft Closed Container</td>
                            <td>3 - 4 Hours</td>
                            <td>&#8377; 7,500 - &#8377; 12,000</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / Independent House</strong></td>
                            <td>Premium 5-Layer + Wooden Crating</td>
                            <td>17 Ft / 19 Ft Container Truck</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 11,500 - &#8377; 17,500</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Bungalow Shifting</strong></td>
                            <td>Complete White-Glove Service</td>
                            <td>Dedicated 22 Ft Heavy Container</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 16,500 - &#8377; 25,000</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler (Bike / Scooter)</strong></td>
                            <td>3-Layer Bubble &amp; Corrugated Wrap</td>
                            <td>Dedicated Vehicle Carrier</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 1,500 - &#8377; 2,800</td>
                        </tr>
                        <tr>
                            <td><strong>Car Transport (Hatchback / SUV)</strong></td>
                            <td>Protective Covers &amp; Lashing</td>
                            <td>Hydraulic Car Carrier Truck</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 4,000 - &#8377; 7,000</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="text-align: center; font-size: 0.9rem; color: #64748b; margin-top: 15px;">*Rates are indicative and vary based on floor levels, elevator availability, fragile quantity, and chosen insurance value. Contact us for a precise, binding quotation.</p>
        </div>
    </section>

    <!-- Vehicle Carrier Section with Image 3 -->
    <section class="dhn2bag-section">
        <div class="dhn2bag-container">
            <div class="dhn2bag-two-col">
                <div>
                    <h2 class="dhn2bag-section-title" style="text-align: left;">Safe Two-Wheeler &amp; Car Transportation</h2>
                    <p>Riding a motorcycle or driving an older vehicle over 85 km across highway traffic and congested city exits in Dhanbad can be exhausting and hazardous. Shree Ashirwad Packers and Movers provides specialized vehicle relocation services connecting Dhanbad and Bagodar with total peace of mind.</p>
                    <p>For two-wheelers, our team handles careful pre-transit preparation. We drain excess petrol to prevent vapor leaks, shield headlights, digital consoles, side mirrors, and fuel tanks with corrugated padding, and secure the bike upright inside our truck with heavy-duty ratchet tie-downs.</p>
                    <p>For personal four-wheelers, we offer hydraulic car carrier transit or accompanied expert driver relocation with full insurance coverage. Your vehicle is thoroughly inspected with an odometer and body scratch record before departure and handed over in immaculate condition at your Bagodar address.</p>
                    <p>Our transport crews maintain dedicated transit logs throughout the journey from Dhanbad to Bagodar, ensuring zero jolts to your automobile or crated household cargo.</p>
                </div>
                <div class="dhn2bag-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Two wheeler motorcycle packing and carrier transport service" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- BCCL & Corporate Transfer Section with Image 4 -->
    <section class="dhn2bag-section bg-light">
        <div class="dhn2bag-container">
            <div class="dhn2bag-two-col">
                <div class="dhn2bag-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe transit container truck navigating highway transit" loading="lazy">
                </div>
                <div>
                    <h2 class="dhn2bag-section-title" style="text-align: left;">Corporate, BCCL &amp; Academic Transfer Expertise</h2>
                    <p>Dhanbad is the industrial powerhouse of Jharkhand, housing corporate offices of Bharat Coking Coal Limited (BCCL), Eastern Coalfields (ECL), Central Mine Planning &amp; Design Institute (CMPDI), Indian School of Mines (IIT ISM Dhanbad), and numerous premier hospitals and commercial enterprises.</p>
                    <p>Officers and executives moving from Dhanbad to Bagodar often require stringent documentation to claim their relocation allowance. We provide complete, audit-compliant reimbursement documentation:</p>
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
    <section class="dhn2bag-section">
        <div class="dhn2bag-container">
            <h2 class="dhn2bag-section-title">Our 5-Step Relocation Workflow: Dhanbad to Bagodar</h2>
            <p class="dhn2bag-section-subtitle">How our streamlined process guarantees a smooth, on-time, and damage-free moving experience.</p>

            <div class="dhn2bag-steps-grid">
                <div class="dhn2bag-step">
                    <div class="dhn2bag-step-num">01</div>
                    <h4>Pre-Move Assessment</h4>
                    <p>We assess your household inventory via digital video survey or doorstep visit in Dhanbad to calculate required truck size and packaging materials.</p>
                </div>
                <div class="dhn2bag-step">
                    <div class="dhn2bag-step-num">02</div>
                    <h4>Multi-Layer Packing</h4>
                    <p>Our skilled packers pack furniture, kitchenware, and fragile electronics using 5-layer protective materials on the scheduled morning.</p>
                </div>
                <div class="dhn2bag-step">
                    <div class="dhn2bag-step-num">03</div>
                    <h4>Safe Vehicle Loading</h4>
                    <p>Consignments are loaded methodically into our covered container truck, using shock cushions and load stabilizers for zero shifting during transit.</p>
                </div>
                <div class="dhn2bag-step">
                    <div class="dhn2bag-step-num">04</div>
                    <h4>GT Road Expressway Transit</h4>
                    <p>Our driver navigates the 85 km NH-19 expressway, maintaining steady cruising speeds and providing continuous milestone updates.</p>
                </div>
                <div class="dhn2bag-step">
                    <div class="dhn2bag-step-num">05</div>
                    <h4>Unloading &amp; Placement</h4>
                    <p>Upon arrival in Bagodar, our team unloads all cartons into your chosen rooms, reassembles beds and tables, and removes unpacked waste.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Served Section -->
    <section class="dhn2bag-section bg-light">
        <div class="dhn2bag-container">
            <h2 class="dhn2bag-section-title">Localities Covered Across Dhanbad and Bagodar</h2>
            <p class="dhn2bag-section-subtitle">Comprehensive pickup coverage across all Dhanbad municipal wards and direct doorstep delivery across Bagodar block.</p>

            <div class="dhn2bag-two-col">
                <div class="dhn2bag-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--dhn2bag-accent); margin-right: 8px;"></i> Dhanbad Pickup Areas</h4>
                    <p>Bank More, Hirapur, Saraidhela, Koyla Nagar, Dhaiya, ISM IIT Campus, Steel Gate, Bartand, Park Market, Katras, Govindpur, Jharia, Sindri, Putki, and Kusum Vihar.</p>
                </div>
                <div class="dhn2bag-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--dhn2bag-primary); margin-right: 8px;"></i> Bagodar Delivery Areas</h4>
                    <p>Bagodar Main Market, GT Road Chowk, Harihar Dham Area, Sariya Road, Atka, Banpura, Dondlo, Hesla, Kander, Jamtara Mor, Bishungarh Road Crossing, and neighboring rural centers.</p>
                </div>
            </div>

            <!-- Call to Action Banner -->
            <div class="dhn2bag-cta">
                <h3>Ready for a Hassle-Free Dhanbad to Bagodar Move?</h3>
                <p>Contact Jharkhand's most trusted intercity relocation company today. Get an honest price quote, guaranteed transit timings, and complete peace of mind.</p>
                <a href="tel:+918409531615" class="dhn2bag-btn"><i class="fa-solid fa-phone" style="margin-right: 8px;"></i> Call 8409531615 / 9835565233</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="dhn2bag-section">
        <div class="dhn2bag-container">
            <h2 class="dhn2bag-section-title">Frequently Asked Questions: Dhanbad to Bagodar Shifting</h2>
            <p class="dhn2bag-section-subtitle">Clear answers to common questions regarding timelines, costs, and safety measures.</p>

            <div class="dhn2bag-faq-box">
                <div class="dhn2bag-faq-item">
                    <h4 class="dhn2bag-faq-q">How much time does household shifting take from Dhanbad to Bagodar?</h4>
                    <p class="dhn2bag-faq-a">The distance between Dhanbad and Bagodar is 85 km along the 6-lane NH-19 Grand Trunk Road. Actual driving time for our container truck is approximately 2 to 2.5 hours. Including morning packing, careful loading, highway transit, and destination unloading, the complete move is finished within the same day.</p>
                </div>

                <div class="dhn2bag-faq-item">
                    <h4 class="dhn2bag-faq-q">Are your bills accepted for BCCL and government employee claims in Bagodar?</h4>
                    <p class="dhn2bag-faq-a">Yes, absolutely. We provide 100% genuine IBA-format consignment notes (bilty), official computerized GST tax invoices, stamped money receipts, and itemized inventory packing lists that are readily accepted by BCCL, ECL, CMPDI, railways, state government departments, and banks.</p>
                </div>

                <div class="dhn2bag-faq-item">
                    <h4 class="dhn2bag-faq-q">Can you transport my motorcycle or scooter along with household items?</h4>
                    <p class="dhn2bag-faq-a">Yes. We specialize in two-wheeler relocation. Your motorcycle or scooter is safely packaged with bubble wrap and corrugated padding, drained of excess fuel, and secured using heavy tie-down belts inside our covered container truck to prevent scratches and balance shifting.</p>
                </div>

                <div class="dhn2bag-faq-item">
                    <h4 class="dhn2bag-faq-q">Do you provide transit insurance for the Dhanbad to Bagodar route?</h4>
                    <p class="dhn2bag-faq-a">Yes. We offer comprehensive all-risk transit insurance policy coverage for all valuable household goods and electronics. In the rare event of transit accident or unexpected road incident, you are protected with fast claim settlement.</p>
                </div>

                <div class="dhn2bag-faq-item">
                    <h4 class="dhn2bag-faq-q">Do you assist with dismantling and reassembling furniture?</h4>
                    <p class="dhn2bag-faq-a">Yes. Our crew includes experienced carpenters equipped with electric drills and hand tools who safely dismantle double beds, wardrobes, and dining tables in Dhanbad and reassemble them at your new house in Bagodar at no extra hidden cost.</p>
                </div>

                <div class="dhn2bag-faq-item">
                    <h4 class="dhn2bag-faq-q">How do I book my moving date with Shree Ashirwad Packers?</h4>
                    <p class="dhn2bag-faq-a">You can confirm your booking by calling our logistics hotline at 8409531615 or 9835565233. We recommend booking 2 to 3 days in advance to reserve your preferred moving date and dedicated container vehicle.</p>
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
        "name": "Shree Ashirwad Packers and Movers Dhanbad",
        "image": "<?php echo $og_image; ?>",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "₹₹",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bank More, Near Railway Station",
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
                "name": "Dhanbad"
            },
            {
                "@type": "AdministrativeArea",
                "name": "Bagodar"
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Dhanbad to Bagodar Moving Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Household Relocation Dhanbad to Bagodar"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "BCCL Transfer Relocation Billing"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Bike & Car Transportation Dhanbad to Bagodar"
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
                "name": "Dhanbad to Bagodar",
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
                "name": "How much time does household shifting take from Dhanbad to Bagodar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The distance between Dhanbad and Bagodar is 85 km along the 6-lane NH-19 Grand Trunk Road. Actual driving time for our container truck is approximately 2 to 2.5 hours. Including morning packing, careful loading, highway transit, and destination unloading, the complete move is finished within the same day."
                }
            },
            {
                "@type": "Question",
                "name": "Are your bills accepted for BCCL and government employee claims in Bagodar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, absolutely. We provide 100% genuine IBA-format consignment notes (bilty), official computerized GST tax invoices, stamped money receipts, and itemized inventory packing lists that are readily accepted by BCCL, ECL, CMPDI, railways, state government departments, and banks."
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
                "name": "Do you provide transit insurance for the Dhanbad to Bagodar route?",
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
                    "text": "Yes. Our crew includes experienced carpenters equipped with electric drills and hand tools who safely dismantle double beds, wardrobes, and dining tables in Dhanbad and reassemble them at your new house in Bagodar at no extra hidden cost."
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
