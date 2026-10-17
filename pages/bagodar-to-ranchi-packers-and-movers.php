<?php
/**
 * Page Name: Bagodar to Ranchi Packers and Movers
 * Route Slug: bagodar-to-ranchi-packers-and-movers
 * Group: Group 1 (Bagodar -> Inside Jharkhand) - Route 1
 * Meta Title: Packers and Movers Bagodar to Ranchi | Safe Household Shifting
 * Meta Description: Hire reliable packers and movers from Bagodar to Ranchi. 140 km transit via NH-522 & NH-20, 5-layer packing, car transport, IBA approved billing, 100% safety.
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Packers and Movers Bagodar to Ranchi | Safe Household Shifting";
$page_desc = "Hire reliable packers and movers from Bagodar to Ranchi. 140 km transit via NH-522 & NH-20, 5-layer packing, car transport, IBA approved billing, 100% safety.";
$canonical_url = "https://www.shreeashirwadpackers.com/bagodar-to-ranchi-packers-and-movers";
$route_origin = "Bagodar";
$route_destination = "Ranchi";

// Open Graph
$og_title = "Packers and Movers Bagodar to Ranchi | Shree Ashirwad Packers";
$og_description = "Reliable Bagodar to Ranchi household shifting, car transport & bike parcel. 140 km expressway transit, IBA approved bills, GPS tracking.";
$og_url = $canonical_url;
$og_image = SITE_BASE_URL . "/images/safe-transit-container-truck-ranchi.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="bagodar to ranchi packers and movers, packers and movers bagodar to ranchi, house shifting bagodar to ranchi, harihar dham to ranchi movers, car transport bagodar to ranchi, bike parcel bagodar to ranchi, iba approved packers bagodar">
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

    <!-- Scoped CSS for Route 1 (Bagodar to Ranchi) -->
    <style>
        :root {
            --bag2ran-primary: #1e3a8a;
            --bag2ran-secondary: #0284c7;
            --bag2ran-accent: #f97316;
            --bag2ran-dark: #0f172a;
            --bag2ran-light: #f8fafc;
            --bag2ran-border: #e2e8f0;
            --bag2ran-muted: #64748b;
            --bag2ran-radius: 12px;
            --bag2ran-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
        }

        .bag2ran-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.92) 0%, rgba(30, 58, 138, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 75px 20px 70px;
            position: relative;
        }

        .bag2ran-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .bag2ran-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 22px;
        }

        .bag2ran-breadcrumbs a {
            color: #f8fafc;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .bag2ran-breadcrumbs a:hover {
            color: var(--bag2ran-accent);
            text-decoration: underline;
        }

        .bag2ran-hero-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .bag2ran-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.7;
            max-width: 860px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .bag2ran-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 35px;
        }

        .bag2ran-badge {
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
        }

        .bag2ran-stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 18px;
            background: rgba(255, 255, 255, 0.08);
            border: 1px solid rgba(255, 255, 255, 0.18);
            border-radius: var(--bag2ran-radius);
            padding: 24px;
            backdrop-filter: blur(10px);
        }

        .bag2ran-stat h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.85rem;
            font-weight: 800;
            color: var(--bag2ran-accent);
            margin-bottom: 5px;
        }

        .bag2ran-stat p {
            font-size: 0.88rem;
            color: #cbd5e1;
            margin: 0;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .bag2ran-section {
            padding: 65px 0;
        }

        .bag2ran-section.bg-light {
            background-color: var(--bag2ran-light);
        }

        .bag2ran-section-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--bag2ran-dark);
            margin-bottom: 16px;
            text-align: center;
        }

        .bag2ran-section-subtitle {
            text-align: center;
            color: var(--bag2ran-muted);
            max-width: 780px;
            margin: 0 auto 45px;
            font-size: 1.05rem;
            line-height: 1.65;
        }

        .bag2ran-two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 45px;
            align-items: center;
            margin-bottom: 50px;
        }

        .bag2ran-col-text h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.8rem;
            font-weight: 700;
            color: var(--bag2ran-dark);
            margin-bottom: 18px;
        }

        .bag2ran-col-text p {
            color: #334155;
            line-height: 1.75;
            margin-bottom: 18px;
            font-size: 1rem;
        }

        .bag2ran-img-box {
            border-radius: var(--bag2ran-radius);
            overflow: hidden;
            box-shadow: var(--bag2ran-shadow);
        }

        .bag2ran-img-box img {
            width: 100%;
            height: 380px;
            object-fit: cover;
            display: block;
            transition: transform 0.3s ease;
        }

        .bag2ran-img-box:hover img {
            transform: scale(1.03);
        }

        .bag2ran-table-wrap {
            background: #ffffff;
            border-radius: var(--bag2ran-radius);
            box-shadow: var(--bag2ran-shadow);
            border: 1px solid var(--bag2ran-border);
            overflow-x: auto;
            margin: 40px 0;
        }

        .bag2ran-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 650px;
        }

        .bag2ran-table th {
            background: var(--bag2ran-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            padding: 16px 20px;
            font-size: 0.95rem;
        }

        .bag2ran-table td {
            padding: 14px 20px;
            border-bottom: 1px solid var(--bag2ran-border);
            color: #334155;
            font-size: 0.94rem;
        }

        .bag2ran-table tr:hover td {
            background: #f1f5f9;
        }

        .bag2ran-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 24px;
            margin: 40px 0;
        }

        .bag2ran-card {
            background: #ffffff;
            border: 1px solid var(--bag2ran-border);
            border-radius: var(--bag2ran-radius);
            padding: 30px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
            transition: all 0.3s ease;
        }

        .bag2ran-card:hover {
            transform: translateY(-5px);
            box-shadow: var(--bag2ran-shadow);
            border-color: var(--bag2ran-secondary);
        }

        .bag2ran-card h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.28rem;
            font-weight: 700;
            color: var(--bag2ran-dark);
            margin-bottom: 14px;
        }

        .bag2ran-card p {
            color: var(--bag2ran-muted);
            font-size: 0.94rem;
            line-height: 1.65;
            margin: 0;
        }

        .bag2ran-steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 22px;
            margin: 40px 0;
        }

        .bag2ran-step {
            background: #ffffff;
            border-radius: var(--bag2ran-radius);
            padding: 26px;
            border: 1px solid var(--bag2ran-border);
            border-top: 4px solid var(--bag2ran-secondary);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
        }

        .bag2ran-step-num {
            font-family: 'Outfit', sans-serif;
            font-size: 1.8rem;
            font-weight: 800;
            color: var(--bag2ran-secondary);
            margin-bottom: 10px;
        }

        .bag2ran-step h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--bag2ran-dark);
            margin-bottom: 10px;
        }

        .bag2ran-step p {
            font-size: 0.9rem;
            color: var(--bag2ran-muted);
            line-height: 1.65;
            margin: 0;
        }

        .bag2ran-faq-box {
            background: #ffffff;
            border-radius: var(--bag2ran-radius);
            padding: 35px;
            box-shadow: var(--bag2ran-shadow);
            border: 1px solid var(--bag2ran-border);
            margin-top: 40px;
        }

        .bag2ran-faq-item {
            border-bottom: 1px solid var(--bag2ran-border);
            padding: 20px 0;
        }

        .bag2ran-faq-item:last-child {
            border-bottom: none;
            padding-bottom: 0;
        }

        .bag2ran-faq-q {
            font-family: 'Outfit', sans-serif;
            font-size: 1.18rem;
            font-weight: 700;
            color: var(--bag2ran-dark);
            margin-bottom: 10px;
        }

        .bag2ran-faq-a {
            color: #334155;
            font-size: 0.96rem;
            line-height: 1.7;
            margin: 0;
        }

        .bag2ran-cta {
            background: linear-gradient(135deg, var(--bag2ran-primary) 0%, var(--bag2ran-dark) 100%);
            color: #ffffff;
            border-radius: var(--bag2ran-radius);
            padding: 55px 35px;
            text-align: center;
            box-shadow: var(--bag2ran-shadow);
            margin-top: 50px;
        }

        .bag2ran-cta h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.3rem;
            font-weight: 800;
            margin-bottom: 16px;
            color: #ffffff;
        }

        .bag2ran-cta p {
            font-size: 1.1rem;
            color: #cbd5e1;
            max-width: 680px;
            margin: 0 auto 30px;
            line-height: 1.65;
        }

        .bag2ran-btn {
            display: inline-block;
            background: var(--bag2ran-accent);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.05rem;
            padding: 15px 40px;
            border-radius: 50px;
            text-decoration: none;
            box-shadow: 0 4px 15px rgba(249, 115, 22, 0.4);
            transition: all 0.3s ease;
        }

        .bag2ran-btn:hover {
            background: #ea580c;
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(249, 115, 22, 0.5);
        }

        @media (max-width: 768px) {
            .bag2ran-hero-title {
                font-size: 2.1rem;
            }
            .bag2ran-two-col {
                grid-template-columns: 1fr;
                gap: 30px;
            }
            .bag2ran-img-box img {
                height: 270px;
            }
            .bag2ran-section {
                padding: 45px 0;
            }
        }
    </style>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="bag2ran-hero">
        <div class="bag2ran-container">
            <nav class="bag2ran-breadcrumbs" aria-label="Breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo;
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bagodar">Bagodar Packers</a> &raquo;
                <span>Bagodar to Ranchi</span>
            </nav>
            <h1 class="bag2ran-hero-title">Packers and Movers Bagodar to Ranchi</h1>
            <p class="bag2ran-hero-subtitle">Relocate effortlessly from the historic Grand Trunk corridor of Bagodar to the capital city of Ranchi. Professional 140 km express transit, 5-layer heavy-duty packaging, dedicated covered container trucks, IBA-approved bills for government transfer claims, and all-inclusive doorstep loading and setup.</p>

            <div class="bag2ran-badges">
                <span class="bag2ran-badge"><i class="fa-solid fa-road"></i> 140 KM Express Corridor</span>
                <span class="bag2ran-badge"><i class="fa-solid fa-clock"></i> 3.5 - 4.5 Hours Delivery</span>
                <span class="bag2ran-badge"><i class="fa-solid fa-file-invoice"></i> 100% IBA Approved Billing</span>
                <span class="bag2ran-badge"><i class="fa-solid fa-shield-halved"></i> Comprehensive Transit Insurance</span>
            </div>

            <div class="bag2ran-stats-grid">
                <div class="bag2ran-stat">
                    <h3>140 KM</h3>
                    <p>Highway Distance</p>
                </div>
                <div class="bag2ran-stat">
                    <h3>Same-Day</h3>
                    <p>Transit &amp; Delivery</p>
                </div>
                <div class="bag2ran-stat">
                    <h3>5-Layer</h3>
                    <p>Safety Packaging</p>
                </div>
                <div class="bag2ran-stat">
                    <h3>100%</h3>
                    <p>Damage Protection</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content Section 1: Overview & Logistics -->
    <section class="bag2ran-section">
        <div class="bag2ran-container">
            <div class="bag2ran-two-col">
                <div class="bag2ran-col-text">
                    <h3>Seamless Relocation Along the Bagodar to Ranchi Expressway</h3>
                    <p>Moving from Bagodar—a vibrant commercial crossroads along the Grand Trunk Road (NH-19)—to the bustling state capital of Ranchi involves traversing approximately 140 kilometers. Our standard transit route connects Bagodar through NH-522 via Bishungarh and Meru to Hazaribagh, and subsequently merges onto the smooth four-lane NH-20 national highway past Ramgarh and Ormanjhi into Ranchi city.</p>
                    <p>Whether you are a government officer being transferred to the Jharkhand Mantralaya in Project Building Dhurwa, a judiciary official relocating to the Ranchi High Court, a bank professional joining a regional headquarters, or a family moving for education and business, Shree Ashirwad Packers and Movers guarantees a structured, zero-hassle shifting experience. We handle every phase with meticulous care—from dismantling heavy wardrobes and modular furniture in Bagodar to reassembling them in your new home in Ranchi.</p>
                    <p>Our fleet comprises purpose-built, weather-sealed container vehicles equipped with hydraulic tailgates and internal restraint straps to eliminate shifting or friction during highway transit. Every consignment is supervised by full-time relocation specialists who ensure on-schedule delivery within 3.5 to 4.5 hours of departure.</p>
                </div>
                <div class="bag2ran-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Household packaging by Shree Ashirwad Packers for Bagodar to Ranchi relocation" title="Professional packing standards for Bagodar to Ranchi shifting" width="550" height="380" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Section -->
    <section class="bag2ran-section bg-light">
        <div class="bag2ran-container">
            <h2 class="bag2ran-section-title">Transparent Tariff for Bagodar to Ranchi Shifting</h2>
            <p class="bag2ran-section-subtitle">Fair, upfront, and competitive pricing with zero hidden surcharges. All quotes include labour, premium packing supplies, loading, highway toll fees, and doorstep delivery.</p>

            <div class="bag2ran-table-wrap">
                <table class="bag2ran-table">
                    <thead>
                        <tr>
                            <th>Shifting Requirement</th>
                            <th>Packing Material Included</th>
                            <th>Loading &amp; Unloading</th>
                            <th>Estimated Transit Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 BHK Complete Household</strong></td>
                            <td>Bubble wrap, corrugated boxes, shrink wrap, tape</td>
                            <td>Trained 3-member team included</td>
                            <td>₹6,500 - ₹10,500</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Family Household</strong></td>
                            <td>5-Layer heavy protection, foam sheets, edge guards</td>
                            <td>Trained 4-member team included</td>
                            <td>₹11,000 - ₹16,500</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK / 4 BHK Villa Shifting</strong></td>
                            <td>Full crating, wardrobe cartons, bubble, stretch wrap</td>
                            <td>Trained 5-6 member specialist team</td>
                            <td>₹17,000 - ₹24,500</td>
                        </tr>
                        <tr>
                            <td><strong>Two-Wheeler / Bike Parcel</strong></td>
                            <td>Triple foam padding, bubble wrap, mirror crating</td>
                            <td>Hydraulic ramp loading &amp; wheel lock</td>
                            <td>₹2,500 - ₹4,500</td>
                        </tr>
                        <tr>
                            <td><strong>Four-Wheeler / Car Carrier</strong></td>
                            <td>Car cover, wheel chocks, individual transit lashings</td>
                            <td>Dedicated closed hydraulic car carrier</td>
                            <td>₹6,000 - ₹9,500</td>
                        </tr>
                        <tr>
                            <td><strong>Dedicated Office / Commercial Move</strong></td>
                            <td>Anti-static IT packing, labeled file cartons, crates</td>
                            <td>Commercial logistics crew with supervisor</td>
                            <td>Customized On Survey</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="text-align: center; font-size: 0.92rem; color: #64748b; margin-top: 15px;"><em>*Actual pricing may vary depending upon inventory volume, floor level, elevator availability, and optional transit insurance value declaration.</em></p>
        </div>
    </section>

    <!-- Content Section 2: Packaging Standards & Vehicle Transport -->
    <section class="bag2ran-section">
        <div class="bag2ran-container">
            <div class="bag2ran-two-col">
                <div class="bag2ran-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Dedicated car carrier loading by Shree Ashirwad Packers" title="Car and bike transportation from Bagodar to Ranchi" width="550" height="380" loading="lazy">
                </div>
                <div class="bag2ran-col-text">
                    <h3>High-Grade 5-Layer Packing &amp; Safe Vehicle Parcel</h3>
                    <p>Transit safety begins with superior packing technology. At Shree Ashirwad Packers and Movers, we refuse to compromise on protective materials. For every Bagodar to Ranchi move, our crew implements an engineered 5-layer packing methodology:</p>
                    <ul style="color: #334155; line-height: 1.8; margin-left: 20px; margin-bottom: 20px;">
                        <li><strong>Layer 1:</strong> Anti-scratch soft foam film applied directly onto polished wooden, metal, or glass surfaces.</li>
                        <li><strong>Layer 2:</strong> High-density Virgin bubble wrap providing cushioning against sudden highway jolts or speed breakers.</li>
                        <li><strong>Layer 3:</strong> Reinforced corrugated cardboard sheets protecting corners, edges, and delicate trims.</li>
                        <li><strong>Layer 4:</strong> Heavy-duty industrial stretch wrap sealing items against humidity, dust, and rain.</li>
                        <li><strong>Layer 5:</strong> Rigid polypropylene cross-strapping locking multiple components securely together.</li>
                    </ul>
                    <p>For your two-wheelers and passenger cars, we provide enclosed carrier transport. Motorcycles receive specialized handlebar, fuel tank, and mirror padding with battery disconnection and fuel drainage safety protocols, ensuring factory-grade delivery in Ranchi without a single scratch.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="bag2ran-section bg-light">
        <div class="bag2ran-container">
            <h2 class="bag2ran-section-title">Specialized Relocation Solutions</h2>
            <p class="bag2ran-section-subtitle">Tailored relocation services designed specifically for families, businesses, and government professionals moving between Bagodar and Ranchi.</p>

            <div class="bag2ran-features-grid">
                <div class="bag2ran-card">
                    <h4><i class="fa-solid fa-house-chimney" style="color: var(--bag2ran-secondary); margin-right: 8px;"></i> Complete Home Shifting</h4>
                    <p>End-to-end residential relocation covering electronics, kitchenware, crockery, furniture, mattresses, and personal clothing with dedicated room-wise labeling.</p>
                </div>
                <div class="bag2ran-card">
                    <h4><i class="fa-solid fa-car" style="color: var(--bag2ran-secondary); margin-right: 8px;"></i> Car &amp; Bike Transportation</h4>
                    <p>Doorstep pickup in Bagodar and direct delivery to your Ranchi address using specialized closed carriers with GPS live location monitoring and transit insurance.</p>
                </div>
                <div class="bag2ran-card">
                    <h4><i class="fa-solid fa-briefcase" style="color: var(--bag2ran-secondary); margin-right: 8px;"></i> Govt &amp; Bank Transfer Claims</h4>
                    <p>Full documentation including IBA-format consignment notes (bilty), official computerized GST invoice, itemized packing lists, and insurance certificates for seamless reimbursement.</p>
                </div>
                <div class="bag2ran-card">
                    <h4><i class="fa-solid fa-couch" style="color: var(--bag2ran-secondary); margin-right: 8px;"></i> Furniture Carpentry Service</h4>
                    <p>Professional dismantling and reinstallation of modular beds, dining tables, L-shaped sofas, wardrobes, and wall-mounted television units by trained in-house carpenters.</p>
                </div>
                <div class="bag2ran-card">
                    <h4><i class="fa-solid fa-wine-glass" style="color: var(--bag2ran-secondary); margin-right: 8px;"></i> Delicate Glass &amp; Crockery Care</h4>
                    <p>Specialized honeycomb packing cartons and micro-foam inserts for kitchen bone china, crystal glassware, microwave ovens, refrigerators, and large LED TVs.</p>
                </div>
                <div class="bag2ran-card">
                    <h4><i class="fa-solid fa-boxes-stacked" style="color: var(--bag2ran-secondary); margin-right: 8px;"></i> Secure Warehousing Facilities</h4>
                    <p>Clean, pest-controlled, and 24/7 CCTV-monitored household storage in Ranchi if your new residential accommodation is not ready for immediate move-in.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section 3: Furniture & Carpentry -->
    <section class="bag2ran-section">
        <div class="bag2ran-container">
            <div class="bag2ran-two-col">
                <div class="bag2ran-col-text">
                    <h3>Dismantling, Assembly &amp; Heavy Furniture Handling</h3>
                    <p>Bulky household goods such as king-size hydraulic beds, 6-door wardrobes, dressing tables, and modular kitchen units cannot be safely transported as single monolithic units. Attempting to maneuver them through narrow staircases in Bagodar or modern high-rise elevators in Ranchi can cause structural cracks or wall damage.</p>
                    <p>Our skilled crew carries professional power screwdrivers, Allen keys, and socket sets. We carefully dismantle furniture items, label each fastener, and wrap panels individually in shock-absorbent foam. Upon arrival in Ranchi—whether in Morabadi, Kanke Road, Doranda, or HEC Dhurwa—our technicians reassemble your furniture in the exact designated rooms at no extra charge.</p>
                    <p>Heavy electrical appliances such as washing machines, double-door refrigerators, and air conditioning units are anchored securely using anti-vibration rubber pads inside our container vehicles to guarantee complete mechanical and electronic integrity.</p>
                </div>
                <div class="bag2ran-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and carpentry by Shree Ashirwad Packers" title="Skilled furniture assembly for Bagodar to Ranchi shifting" width="550" height="380" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Content Section 4: Warehousing & Insurance -->
    <section class="bag2ran-section">
        <div class="bag2ran-container">
            <div class="bag2ran-two-col">
                <div class="bag2ran-img-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Secure household goods storage and warehouse facility by Shree Ashirwad Packers" title="Safe warehousing and storage for Bagodar to Ranchi shifting" width="550" height="380" loading="lazy">
                </div>
                <div class="bag2ran-col-text">
                    <h3>Flexible Warehouse Storage &amp; Complete Transit Insurance</h3>
                    <p>Relocation timelines do not always align perfectly with real estate availability. If your new apartment in Ranchi—whether an official quarter in Dhurwa or a private society flat in Morabadi—is undergoing painting, tile renovation, or awaiting key handover, Shree Ashirwad Packers and Movers provides secure temporary household storage.</p>
                    <p>Our centralized Ranchi warehouse facility is clean, dry, pest-controlled, and equipped with 24/7 CCTV surveillance, fire prevention infrastructure, and dedicated palletized bays. Your packed belongings remain securely sealed in their protective containers until your new residence is ready for occupancy.</p>
                    <p>Furthermore, to safeguard your valuable investments against unexpected highway contingencies, torrential monsoon weather, or unforeseen transit delays along the NH-522 and NH-20 corridors, we provide comprehensive all-risk transit insurance. Our policy covers full invoice value reimbursement with transparent documentation and expedited claim settlement, ensuring 100% peace of mind from start to finish.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5-Step Process Section -->
    <section class="bag2ran-section bg-light">
        <div class="bag2ran-container">
            <h2 class="bag2ran-section-title">Our Systematic 5-Step Relocation Workflow</h2>
            <p class="bag2ran-section-subtitle">How we ensure a smooth, worry-free moving experience from your first inquiry to final room arrangement in Ranchi.</p>

            <div class="bag2ran-steps-grid">
                <div class="bag2ran-step">
                    <div class="bag2ran-step-num">01</div>
                    <h4>Pre-Move Survey &amp; Quote</h4>
                    <p>We assess your household inventory via doorstep inspection in Bagodar or clear video walk-through, offering a transparent, guaranteed fixed-price quotation.</p>
                </div>
                <div class="bag2ran-step">
                    <div class="bag2ran-step-num">02</div>
                    <h4>Multi-Layer Packing</h4>
                    <p>On moving day, our uniform-clad specialists arrive with premium materials to pack every belonging with methodical color-coded categorization.</p>
                </div>
                <div class="bag2ran-step">
                    <div class="bag2ran-step-num">03</div>
                    <h4>Scientific Loading</h4>
                    <p>Goods are loaded into our container truck using heavy-load distribution principles, cushioning fragile cartons above sturdier wooden items.</p>
                </div>
                <div class="bag2ran-step">
                    <div class="bag2ran-step-num">04</div>
                    <h4>Express Highway Transit</h4>
                    <p>Our driver navigates the 140 km NH-522 &amp; NH-20 expressway smoothly, delivering your household goods directly to your Ranchi doorstep in 3.5 to 4.5 hours.</p>
                </div>
                <div class="bag2ran-step">
                    <div class="bag2ran-step-num">05</div>
                    <h4>Unloading &amp; Reassembly</h4>
                    <p>We unload every carton, reassemble large furniture, inspect items against the consignment manifest, and remove bulky packing debris.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Served Section -->
    <section class="bag2ran-section">
        <div class="bag2ran-container">
            <h2 class="bag2ran-section-title">Doorstep Coverage Across Bagodar and Ranchi</h2>
            <p class="bag2ran-section-subtitle">Comprehensive pickup and delivery network extending across all neighborhoods, highways, and rural hubs.</p>

            <div class="bag2ran-two-col">
                <div class="bag2ran-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--bag2ran-accent); margin-right: 8px;"></i> Bagodar Pickup Areas</h4>
                    <p>We provide prompt doorstep pickup across Bagodar Chowk, Harihar Dham Temple vicinity, GT Road Market, Sariya Road, Atka, Banpura, Dondlo, Jamtara Mod, Hesla, Kander, Bagodar Bus Stand area, and adjacent rural agrarian &amp; commercial centers.</p>
                </div>
                <div class="bag2ran-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--bag2ran-secondary); margin-right: 8px;"></i> Ranchi Delivery Sectors</h4>
                    <p>Direct doorstep delivery across all Ranchi localities including Lalpur, Morabadi, Kanke Road, Bariatu, Doranda, Hinoo, HEC Dhurwa, Harmu Housing Colony, Ashok Nagar, Namkum, Kokar, Ratu Road, Bariatu Medical Colony, and Tatisilwai.</p>
                </div>
            </div>

            <!-- CTA Card -->
            <div class="bag2ran-cta">
                <h3>Ready for a Smooth Move from Bagodar to Ranchi?</h3>
                <p>Contact Shree Ashirwad Packers and Movers today for a free on-site survey and transparent shifting estimate. Experience stress-free, insured relocation with Jharkhand's most trusted logistics partner.</p>
                <a href="tel:+918409531615" class="bag2ran-btn"><i class="fa-solid fa-phone" style="margin-right: 8px;"></i> Call 8409531615 / 9835565233</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bag2ran-section bg-light">
        <div class="bag2ran-container">
            <h2 class="bag2ran-section-title">Frequently Asked Questions</h2>
            <p class="bag2ran-section-subtitle">Real questions and clear answers regarding our Bagodar to Ranchi relocation services.</p>

            <div class="bag2ran-faq-box">
                <div class="bag2ran-faq-item">
                    <h4 class="bag2ran-faq-q">What is the expected transit time from Bagodar to Ranchi?</h4>
                    <p class="bag2ran-faq-a">The highway distance between Bagodar and Ranchi is approximately 140 kilometers via NH-522 and NH-20. Typically, our container truck completes this route in 3.5 to 4.5 hours under standard daytime driving conditions, ensuring reliable same-day delivery.</p>
                </div>
                <div class="bag2ran-faq-item">
                    <h4 class="bag2ran-faq-q">Do you provide valid IBA-approved bills for government employee transfer reimbursement?</h4>
                    <p class="bag2ran-faq-a">Yes. We supply 100% compliant documentation accepted by central/state government departments, banks, defense services, PSUs, and corporate employers. This includes an official consignment note (bilty), itemized packing inventory, computer-generated GST invoice, and money receipt.</p>
                </div>
                <div class="bag2ran-faq-item">
                    <h4 class="bag2ran-faq-q">How are fragile kitchen items, bone china, and electronics protected?</h4>
                    <p class="bag2ran-faq-a">We use heavy-duty multi-layer protection including high-density bubble wrap, EPE foam sheets, corrugated partition boxes, and thermo-seal tape. Electronic goods like LED TVs and computers are packed in custom wooden-frame crates or heavy double-wall cartons with corner foam cushions.</p>
                </div>
                <div class="bag2ran-faq-item">
                    <h4 class="bag2ran-faq-q">Can you transport my two-wheeler or car along with household belongings?</h4>
                    <p class="bag2ran-faq-a">Absolutely. We offer dedicated enclosed vehicle carriers as well as shared container truck slots for bikes, scooters, and cars. Vehicles are secured with wheel chocks and heavy-duty nylon tie-down straps to ensure zero movement or cosmetic damage during transit.</p>
                </div>
                <div class="bag2ran-faq-item">
                    <h4 class="bag2ran-faq-q">Are there any hidden costs or surprise tolls added at delivery?</h4>
                    <p class="bag2ran-faq-a">No. Shree Ashirwad Packers and Movers adheres to an all-inclusive pricing policy. Our formal written quotation covers packing materials, labour charges, vehicle hire, highway tolls on NH-522 and NH-20, loading, and doorstep unloading without unexpected surcharges.</p>
                </div>
                <div class="bag2ran-faq-item">
                    <h4 class="bag2ran-faq-q">How many days in advance should I book my relocation?</h4>
                    <p class="bag2ran-faq-a">We recommend confirming your booking 2 to 3 days prior to your preferred moving date to secure your desired morning packing slot. However, we also maintain standby capacity for urgent or emergency same-day relocation requirements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Structured Data Schemas (JSON-LD) -->
    <!-- 1. MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers",
        "image": "<?php echo $og_image; ?>",
        "@id": "<?php echo $canonical_url; ?>#movingcompany",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "INR 6500 - 24500",
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
            "latitude": 24.0833,
            "longitude": 85.9667
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Bagodar"
            },
            {
                "@type": "City",
                "name": "Ranchi"
            }
        ],
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
        }
    }
    </script>

    <!-- 2. Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Intercity Relocation Services",
        "name": "Packers and Movers Bagodar to Ranchi",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "telephone": "+918409531615",
            "url": "https://www.shreeashirwadpackers.com/"
        },
        "areaServed": {
            "@type": "State",
            "name": "Jharkhand"
        },
        "description": "Professional household relocation, car transportation, and bike parcel services from Bagodar to Ranchi along NH-522 & NH-20 with 5-layer packing and IBA-approved billing."
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
                "name": "Bagodar to Ranchi",
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
                "name": "What is the expected transit time from Bagodar to Ranchi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Bagodar and Ranchi is approximately 140 kilometers via NH-522 and NH-20. Typically, our container truck completes this route in 3.5 to 4.5 hours under standard daytime driving conditions, ensuring reliable same-day delivery."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide valid IBA-approved bills for government employee transfer reimbursement?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We supply 100% compliant documentation accepted by central/state government departments, banks, defense services, PSUs, and corporate employers. This includes an official consignment note (bilty), itemized packing inventory, computer-generated GST invoice, and money receipt."
                }
            },
            {
                "@type": "Question",
                "name": "How are fragile kitchen items, bone china, and electronics protected?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We use heavy-duty multi-layer protection including high-density bubble wrap, EPE foam sheets, corrugated partition boxes, and thermo-seal tape. Electronic goods like LED TVs and computers are packed in custom wooden-frame crates or heavy double-wall cartons with corner foam cushions."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport my two-wheeler or car along with household belongings?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Absolutely. We offer dedicated enclosed vehicle carriers as well as shared container truck slots for bikes, scooters, and cars. Vehicles are secured with wheel chocks and heavy-duty nylon tie-down straps to ensure zero movement or cosmetic damage during transit."
                }
            },
            {
                "@type": "Question",
                "name": "Are there any hidden costs or surprise tolls added at delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No. Shree Ashirwad Packers and Movers adheres to an all-inclusive pricing policy. Our formal written quotation covers packing materials, labour charges, vehicle hire, highway tolls on NH-522 and NH-20, loading, and doorstep unloading without unexpected surcharges."
                }
            },
            {
                "@type": "Question",
                "name": "How many days in advance should I book my relocation?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We recommend confirming your booking 2 to 3 days prior to your preferred moving date to secure your desired morning packing slot. However, we also maintain standby capacity for urgent or emergency same-day relocation requirements."
                }
            }
        ]
    }
    </script>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
