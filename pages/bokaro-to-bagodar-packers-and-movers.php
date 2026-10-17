<?php
/**
 * Page Name: Bokaro to Bagodar Packers and Movers
 * Route Slug: bokaro-to-bagodar-packers-and-movers
 * Group: Group 2 (Inside Jharkhand -> Bagodar) - Route 9
 * Meta Title: Packers and Movers Bokaro to Bagodar | Safe Steel City Return Shifting
 * Meta Description: Trusted packers and movers from Bokaro Steel City to Bagodar. 80 km transit, 5-layer packing, SAIL BSL/Govt transfer bills, 100% safe home delivery.
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Packers and Movers Bokaro to Bagodar | Safe Steel City Return Shifting";
$page_desc = "Trusted packers and movers from Bokaro Steel City to Bagodar. 80 km transit, 5-layer packing, SAIL BSL/Govt transfer bills, 100% safe home delivery.";
$canonical_url = "https://www.shreeashirwadpackers.com/bokaro-to-bagodar-packers-and-movers";
$route_origin = "Bokaro Steel City";
$route_destination = "Bagodar";

// Open Graph
$og_title = "Packers and Movers Bokaro to Bagodar | Shree Ashirwad Packers";
$og_description = "Reliable Bokaro to Bagodar household shifting, SAIL BSL transfer billing, car & bike parcel via NH-320 and NH-19. Zero damage guarantee, IBA approved.";
$og_url = $canonical_url;
$og_image = SITE_BASE_URL . "/images/wooden-furniture-wrapping-bokaro.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="bokaro to bagodar packers and movers, packers and movers bokaro to bagodar, house shifting bokaro to bagodar, chas to harihar dham movers, car transport bokaro to bagodar, bike parcel bokaro to bagodar, iba approved packers chas bagodar">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Bokaro">

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

    <!-- Scoped CSS for Route 9 (Bokaro to Bagodar) -->
    <style>
        :root {
            --bok2bag-primary: #1e3a8a;
            --bok2bag-secondary: #2563eb;
            --bok2bag-accent: #ea580c;
            --bok2bag-dark: #0f172a;
            --bok2bag-light: #f8fafc;
            --bok2bag-border: #e2e8f0;
            --bok2bag-muted: #64748b;
            --bok2bag-radius: 12px;
            --bok2bag-shadow: 0 10px 25px -5px rgba(0, 0, 0, 0.08), 0 8px 10px -6px rgba(0, 0, 0, 0.04);
        }

        .bok2bag-hero {
            background: linear-gradient(135deg, rgba(15, 23, 42, 0.94) 0%, rgba(30, 58, 138, 0.88) 100%), url('<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 75px 20px 70px;
            position: relative;
        }

        .bok2bag-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        .bok2bag-breadcrumbs {
            font-size: 0.9rem;
            color: #cbd5e1;
            margin-bottom: 22px;
        }

        .bok2bag-breadcrumbs a {
            color: #f8fafc;
            text-decoration: none;
            transition: color 0.2s ease;
        }

        .bok2bag-breadcrumbs a:hover {
            color: var(--bok2bag-accent);
            text-decoration: underline;
        }

        .bok2bag-hero-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.75rem;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 18px;
            color: #ffffff;
        }

        .bok2bag-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.7;
            max-width: 860px;
            color: #e2e8f0;
            margin-bottom: 28px;
        }

        .bok2bag-badges {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 35px;
        }

        .bok2bag-badge {
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

        .bok2bag-cta-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
        }

        .bok2bag-btn-primary {
            background-color: var(--bok2bag-accent);
            color: #ffffff;
            padding: 14px 30px;
            border-radius: 8px;
            font-weight: 700;
            font-size: 1.05rem;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            box-shadow: 0 4px 14px rgba(234, 88, 12, 0.35);
            transition: all 0.3s ease;
        }

        .bok2bag-btn-primary:hover {
            background-color: #c2410c;
            transform: translateY(-2px);
        }

        .bok2bag-btn-secondary {
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

        .bok2bag-btn-secondary:hover {
            background: rgba(255, 255, 255, 0.25);
            transform: translateY(-2px);
        }

        .bok2bag-section {
            padding: 65px 0;
        }

        .bg-light {
            background-color: var(--bok2bag-light);
        }

        .bok2bag-section-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.15rem;
            font-weight: 700;
            color: var(--bok2bag-dark);
            margin-bottom: 15px;
            text-align: center;
        }

        .bok2bag-section-subtitle {
            font-size: 1.05rem;
            color: var(--bok2bag-muted);
            text-align: center;
            max-width: 760px;
            margin: 0 auto 45px;
            line-height: 1.6;
        }

        .bok2bag-two-col {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .bok2bag-features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            margin-top: 35px;
        }

        .bok2bag-card {
            background: #ffffff;
            border: 1px solid var(--bok2bag-border);
            border-radius: var(--bok2bag-radius);
            padding: 28px 22px;
            box-shadow: var(--bok2bag-shadow);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }

        .bok2bag-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 15px 30px -5px rgba(0, 0, 0, 0.12);
        }

        .bok2bag-card-icon {
            font-size: 2.2rem;
            color: var(--bok2bag-primary);
            margin-bottom: 18px;
        }

        .bok2bag-card h3, .bok2bag-card h4 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 12px;
        }

        .bok2bag-card p {
            color: #475569;
            font-size: 0.96rem;
            line-height: 1.65;
            margin: 0;
        }

        .bok2bag-img-wrap {
            border-radius: var(--bok2bag-radius);
            overflow: hidden;
            box-shadow: var(--bok2bag-shadow);
            border: 1px solid var(--bok2bag-border);
        }

        .bok2bag-img-wrap img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.4s ease;
        }

        .bok2bag-img-wrap:hover img {
            transform: scale(1.03);
        }

        .bok2bag-table-container {
            overflow-x: auto;
            margin: 30px 0;
            border-radius: var(--bok2bag-radius);
            box-shadow: var(--bok2bag-shadow);
            border: 1px solid var(--bok2bag-border);
            background: #ffffff;
        }

        .bok2bag-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.96rem;
        }

        .bok2bag-table th {
            background-color: var(--bok2bag-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 600;
        }

        .bok2bag-table td {
            padding: 14px 20px;
            border-bottom: 1px solid #f1f5f9;
            color: #334155;
        }

        .bok2bag-table tr:hover {
            background-color: #f8fafc;
        }

        .bok2bag-steps-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }

        .bok2bag-step {
            background: #ffffff;
            border: 1px solid var(--bok2bag-border);
            border-radius: var(--bok2bag-radius);
            padding: 24px 18px;
            text-align: center;
            position: relative;
        }

        .bok2bag-step-num {
            width: 44px;
            height: 44px;
            background: var(--bok2bag-primary);
            color: #ffffff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            margin: 0 auto 16px;
            font-size: 1.1rem;
        }

        .bok2bag-step h4 {
            font-size: 1.1rem;
            color: #0f172a;
            margin-bottom: 10px;
        }

        .bok2bag-step p {
            font-size: 0.9rem;
            color: #64748b;
            line-height: 1.5;
            margin: 0;
        }

        .bok2bag-faq-box {
            max-width: 900px;
            margin: 0 auto;
        }

        .bok2bag-faq-item {
            background: #ffffff;
            border: 1px solid var(--bok2bag-border);
            border-radius: 10px;
            margin-bottom: 15px;
            padding: 20px 24px;
        }

        .bok2bag-faq-q {
            font-size: 1.1rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
            display: flex;
            align-items: flex-start;
            gap: 12px;
        }

        .bok2bag-faq-q::before {
            content: "Q";
            background: var(--bok2bag-primary);
            color: #fff;
            font-size: 0.85rem;
            padding: 3px 9px;
            border-radius: 4px;
            font-weight: 800;
        }

        .bok2bag-faq-a {
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.65;
            margin: 0;
            padding-left: 32px;
        }

        .bok2bag-cta {
            background: linear-gradient(135deg, var(--bok2bag-dark) 0%, var(--bok2bag-primary) 100%);
            color: #ffffff;
            border-radius: 16px;
            padding: 45px 30px;
            text-align: center;
            margin-top: 45px;
        }

        .bok2bag-cta h3 {
            font-size: 1.85rem;
            font-weight: 800;
            margin-bottom: 15px;
        }

        .bok2bag-cta p {
            font-size: 1.05rem;
            color: #cbd5e1;
            max-width: 650px;
            margin: 0 auto 25px;
            line-height: 1.6;
        }

        .bok2bag-btn {
            background: var(--bok2bag-accent);
            color: #ffffff;
            padding: 12px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-block;
            transition: all 0.25s ease;
        }

        .bok2bag-btn:hover {
            background: #c2410c;
        }

        @media (max-width: 768px) {
            .bok2bag-hero-title {
                font-size: 2.1rem;
            }
            .bok2bag-two-col {
                grid-template-columns: 1fr;
            }
            .bok2bag-cta-group {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Hero Section -->
    <header class="bok2bag-hero">
        <div class="bok2bag-container">
            <nav class="bok2bag-breadcrumbs" aria-label="Breadcrumb">
                <a href="<?php echo SITE_BASE_URL; ?>/">Home</a> &raquo;
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bagodar">Bagodar</a> &raquo;
                <span>Bokaro to Bagodar</span>
            </nav>

            <h1 class="bok2bag-hero-title">Expert Packers and Movers Bokaro to Bagodar</h1>
            <p class="bok2bag-hero-subtitle">Relocating from Bokaro Steel City or Chas to Bagodar? Experience smooth, safe, and punctual 80 km transit via NH-320 and NH-19 with Shree Ashirwad Packers and Movers. We deliver 5-layer multi-barrier packaging, customized closed container trucks, complete furniture dismantling and reassembly, and 100% IBA-approved reimbursement billing across all sectors of Bokaro and Bagodar.</p>

            <div class="bok2bag-badges">
                <span class="bok2bag-badge"><i class="fa-solid fa-road"></i> 80 KM via NH-320 &amp; NH-19</span>
                <span class="bok2bag-badge"><i class="fa-solid fa-clock"></i> 2 - 3 Hours Direct Transit</span>
                <span class="bok2bag-badge"><i class="fa-solid fa-file-invoice"></i> SAIL BSL &amp; IBA Claim Bills</span>
                <span class="bok2bag-badge"><i class="fa-solid fa-shield-halved"></i> 100% Transit Protection</span>
                <span class="bok2bag-badge"><i class="fa-solid fa-couch"></i> Furniture Dismantling &amp; Setup</span>
            </div>

            <div class="bok2bag-cta-group">
                <a href="tel:+918409531615" class="bok2bag-btn-primary"><i class="fa-solid fa-phone"></i> Call 8409531615</a>
                <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20a%20quote%20for%20Bokaro%20to%20Bagodar%20shifting" class="bok2bag-btn-secondary" target="_blank" rel="noopener"><i class="fa-brands fa-whatsapp"></i> Instant WhatsApp Quote</a>
            </div>
        </div>
    </header>

    <!-- Overview Section with Image 1 -->
    <section class="bok2bag-section">
        <div class="bok2bag-container">
            <div class="bok2bag-two-col">
                <div>
                    <h2 class="bok2bag-section-title" style="text-align: left;">Direct Intercity Relocation from Steel City to Bagodar</h2>
                    <p>The relocation corridor from Bokaro Steel City to Bagodar spans approximately 80 kilometers, traveling north via NH-320 past Phusro and Nawadih before intersecting the Grand Trunk Road (NH-19) near Dumri and proceeding directly into Bagodar town. This direct industrial corridor connects Jharkhand's steel manufacturing hub with the agricultural and trading crossroads of Bagodar.</p>
                    <p>Many relocations along this route involve retiring or transferring personnel from Bokaro Steel Plant (SAIL BSL), BPSCL thermal stations, and ancillary manufacturing units who are returning to ancestral homes or commercial ventures in Bagodar, retail traders expanding agricultural distribution, and educational professionals. Shree Ashirwad Packers and Movers eliminates moving stress through structured planning, professional labor, and dedicated container vehicles.</p>
                    <p>Our fleet consists of dedicated, weatherproof container vehicles built to absorb road shocks and vibrations. With trained loaders, skilled carpenters, and experienced drivers who know local entry permits and rural road navigation in Bagodar, your entire shifting process is completed on schedule within a single working day.</p>
                </div>
                <div class="bok2bag-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/wooden-furniture-wrapping-bokaro.jpg" alt="Wooden furniture protective wrapping and handling for Bokaro relocation" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Section -->
    <section class="bok2bag-section bg-light">
        <div class="bok2bag-container">
            <h2 class="bok2bag-section-title">Why Shree Ashirwad Leads the Bokaro to Bagodar Moving Route</h2>
            <p class="bok2bag-section-subtitle">We combine state-of-the-art packing techniques, verified in-house staff, and transparent billing to give you unmatched peace of mind.</p>

            <div class="bok2bag-features-grid">
                <div class="bok2bag-card">
                    <div class="bok2bag-card-icon"><i class="fa-solid fa-layer-group"></i></div>
                    <h3>5-Layer Barrier Cushioning</h3>
                    <p>Every vulnerable surface—from polished wooden wardrobes to fragile glass dining tops—is shielded with multi-layer bubble wrap, foam lining, corrugated fluting, and moisture-proof stretch wrap.</p>
                </div>

                <div class="bok2bag-card">
                    <div class="bok2bag-card-icon"><i class="fa-solid fa-screwdriver-wrench"></i></div>
                    <h3>Carpentry &amp; Appliance Setup</h3>
                    <p>Our crew includes experienced carpenters who expertly dismantle king-size beds, modular almirahs, wall-mounted TVs, and water purifiers in Bokaro and reassemble them flawlessly in Bagodar.</p>
                </div>

                <div class="bok2bag-card">
                    <div class="bok2bag-card-icon"><i class="fa-solid fa-building-shield"></i></div>
                    <h3>SAIL &amp; PSU Transfer Invoicing</h3>
                    <p>Moving on retirement or transfer from Bokaro Steel Plant (SAIL BSL) or a nationalized bank? We provide 100% compliant IBA-format consignment notes, GST invoices, and itemized receipts for effortless claim approvals.</p>
                </div>

                <div class="bok2bag-card">
                    <div class="bok2bag-card-icon"><i class="fa-solid fa-truck-ramp-box"></i></div>
                    <h3>Weatherproof Container Fleet</h3>
                    <p>Your goods travel safely inside covered, locked containers protected from highway rain, coal soot, and dust. We never use open tarpaulin trucks that risk water seepage or physical shifting.</p>
                </div>

                <div class="bok2bag-card">
                    <div class="bok2bag-card-icon"><i class="fa-solid fa-motorcycle"></i></div>
                    <h3>Bike &amp; Scooter Courier</h3>
                    <p>Need your two-wheeler moved to Bagodar? We drain excess fuel, pad delicate mirrors and indicators with corrugated wrap, and anchor your bike firmly inside the vehicle using heavy industrial ratchet straps.</p>
                </div>

                <div class="bok2bag-card">
                    <div class="bok2bag-card-icon"><i class="fa-solid fa-badge-percent"></i></div>
                    <h3>Fixed Honest Pricing</h3>
                    <p>Zero hidden charges. No unexpected toll fees or sudden unloading demands at your destination. Our upfront written quotes guarantee clarity from pickup to final room arrangement.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Fragile Packing Section with Image 2 -->
    <section class="bok2bag-section">
        <div class="bok2bag-container">
            <div class="bok2bag-two-col">
                <div class="bok2bag-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/fragile-glassware-box-packing-ranchi.jpg" alt="Fragile glassware and crockery packing in padded cartons" loading="lazy">
                </div>
                <div>
                    <h2 class="bok2bag-section-title" style="text-align: left;">High-Precision Packing for Fragile Crockery &amp; Electronics</h2>
                    <p>Kitchenware, porcelain sets, glassware, and smart television panels demand extra care when moving over state highways and rail-crossings near Phusro and Nawadih. Our packing crews follow strict protocols to ensure delicate items arrive in perfect condition:</p>
                    <ul style="color: #475569; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
                        <li><strong>Individual Piece Wrapping:</strong> Every plate, cup, and glass item is individually wrapped in virgin bubble film before being organized in sturdy dish-pack boxes.</li>
                        <li><strong>Heavy-Gauge TV Crating:</strong> Large LED and OLED screens are cushioned in customized multi-layer foam wraps and fitted into impact-resistant cardboard cartons.</li>
                        <li><strong>Cushioned Carton Interiors:</strong> Carton bottoms and side walls are layered with crumpled craft paper and foam sheets to absorb sudden roadway bumps.</li>
                        <li><strong>Color-Coded Sector Labeling:</strong> Boxes are labeled clearly with destination room instructions (e.g., "Kitchen - Bagodar Residence", "Master Bedroom") for rapid unboxing.</li>
                    </ul>
                    <p>With our systematic labeling, our delivery team in Bagodar places every box directly into the corresponding room, sparing you hours of searching through disorganized boxes.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Pricing Table Section -->
    <section class="bok2bag-section bg-light">
        <div class="bok2bag-container">
            <h2 class="bok2bag-section-title">Transparent Price Estimates: Bokaro to Bagodar Relocation</h2>
            <p class="bok2bag-section-subtitle">Fair, upfront relocation rates for residential shifting, two-wheeler parcel, and corporate moves across the 80 km corridor.</p>

            <div class="bok2bag-table-container">
                <table class="bok2bag-table">
                    <thead>
                        <tr>
                            <th>Household Size / Move Type</th>
                            <th>Packing Materials Used</th>
                            <th>Vehicle Deployed</th>
                            <th>Estimated Duration</th>
                            <th>Approximate Cost</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 BHK Apartment / Studio</strong></td>
                            <td>3-Layer Protective Wrapping</td>
                            <td>Tata Ace / Bolero Maxi Truck</td>
                            <td>2 - 3 Hours</td>
                            <td>&#8377; 4,200 - &#8377; 7,000</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Complete Home</strong></td>
                            <td>5-Layer Multi-Barrier Packing</td>
                            <td>14 Ft Covered Container</td>
                            <td>3 - 4 Hours</td>
                            <td>&#8377; 7,000 - &#8377; 11,500</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK Family Residence</strong></td>
                            <td>5-Layer + Heavy Furniture Crating</td>
                            <td>17 Ft / 19 Ft Container Truck</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 11,000 - &#8377; 17,000</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Large Bungalow</strong></td>
                            <td>Premium White-Glove Packaging</td>
                            <td>Dedicated 22 Ft Container</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 15,500 - &#8377; 24,000</td>
                        </tr>
                        <tr>
                            <td><strong>Motorcycle / Scooter Courier</strong></td>
                            <td>3-Layer Bubble Wrap + Corrugated Sheet</td>
                            <td>Specialized Vehicle Carrier</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 1,400 - &#8377; 2,600</td>
                        </tr>
                        <tr>
                            <td><strong>Car Transport (Sedan / SUV)</strong></td>
                            <td>Full Protective Masking &amp; Lashing</td>
                            <td>Hydraulic Car Carrier</td>
                            <td>Same Day Delivery</td>
                            <td>&#8377; 3,800 - &#8377; 6,500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="text-align: center; font-size: 0.9rem; color: #64748b; margin-top: 15px;">*Quoted rates are approximate and depend on volume, floor level, lift access, and insurance choices. Call for a customized binding estimate.</p>
        </div>
    </section>

    <!-- Two-Wheeler & Vehicle Section with Image 3 -->
    <section class="bok2bag-section">
        <div class="bok2bag-container">
            <div class="bok2bag-two-col">
                <div>
                    <h2 class="bok2bag-section-title" style="text-align: left;">Safe Two-Wheeler &amp; Automobile Transportation</h2>
                    <p>Driving your personal bike or family car through heavy mining vehicles and rail crossings along the Phusro-Nawadih stretch can cause unnecessary vehicle strain and highway hazards. Shree Ashirwad Packers and Movers provides secure door-to-door vehicle relocation from Bokaro Steel City and Chas directly to Bagodar.</p>
                    <p>Two-wheelers undergo careful pre-transit processing: fuel is safely siphoned to eliminate vapor buildup, side mirrors and digital instrument clusters are cocooned in bubble sheets, and the bike is locked firmly upright using industrial-grade ratchet tie-downs inside our closed truck.</p>
                    <p>For four-wheelers, we offer closed car carrier transit or certified professional driver relocation with complete insurance coverage. Every vehicle undergoes a thorough pre-move condition inspection with photo documentation, ensuring zero discrepancies at final handover.</p>
                    <p>Our transport crews maintain dedicated transit logs and GPS communication throughout the journey from Bokaro to Bagodar. Whether negotiating busy market intersections around Chas or passing through industrial check-posts near Phusro, our seasoned drivers navigate with high caution, ensuring zero jolts to your automobile or crated household cargo.</p>
                </div>
                <div class="bok2bag-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Motorcycle and scooter secure carrier loading for Bokaro transit" loading="lazy">
                </div>
            </div>
        </div>
    </section>

    <!-- SAIL & Corporate Transfer Section with Image 4 -->
    <section class="bok2bag-section bg-light">
        <div class="bok2bag-container">
            <div class="bok2bag-two-col">
                <div class="bok2bag-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Container truck safely navigating highway corridor to Bagodar" loading="lazy">
                </div>
                <div>
                    <h2 class="bok2bag-section-title" style="text-align: left;">SAIL BSL, Banking &amp; Government Transfer Support</h2>
                    <p>Bokaro Steel City is a major administrative and industrial epicenter, hosting Bokaro Steel Plant (SAIL), Bokaro Power Supply Corporation Limited (BPSCL), ONGC coal bed methane facilities, Electrosteel Steels Limited (ESL), nationalized banks, and judicial offices.</p>
                    <p>Employees moving on company transfer or retirement require strict documentation to claim their relocation allowance. Shree Ashirwad Packers and Movers provides a fully compliant documentation bundle:</p>
                    <ul style="color: #475569; line-height: 1.8; margin-bottom: 20px; padding-left: 20px;">
                        <li><strong>IBA-Approved Bilty (Consignment Note):</strong> Officially acknowledged by public sector undertakings, defense establishments, and banks.</li>
                        <li><strong>Itemized Moving Inventory:</strong> Stamped, detailed list of all packed items with condition notes.</li>
                        <li><strong>Computerized GST Tax Invoice:</strong> Valid GST-registered bill with proper SAC code for transport service.</li>
                        <li><strong>Official Cash / Bank Money Receipt:</strong> Stamped payment acknowledgement supporting your financial claim submission.</li>
                    </ul>
                    <p>Our paperwork is processed smoothly by HR and finance departments, ensuring prompt reimbursement without audit delays.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- 5-Step Process Section -->
    <section class="bok2bag-section">
        <div class="bok2bag-container">
            <h2 class="bok2bag-section-title">Our 5-Step Relocation Workflow: Bokaro to Bagodar</h2>
            <p class="bok2bag-section-subtitle">How our disciplined logistics framework ensures a punctual, organized, and worry-free moving experience.</p>

            <div class="bok2bag-steps-grid">
                <div class="bok2bag-step">
                    <div class="bok2bag-step-num">01</div>
                    <h4>Survey &amp; Fixed Quote</h4>
                    <p>We review your goods via home visit or video call in Bokaro and provide a transparent, all-inclusive written estimate.</p>
                </div>
                <div class="bok2bag-step">
                    <div class="bok2bag-step-num">02</div>
                    <h4>Multi-Layer Packing</h4>
                    <p>Our experienced crew arrives with bubble wrap, corrugated sheets, and stretch film, systematically wrapping every article.</p>
                </div>
                <div class="bok2bag-step">
                    <div class="bok2bag-step-num">03</div>
                    <h4>Container Loading</h4>
                    <p>Items are loaded into our covered truck using hydraulic ramps and load bars, ensuring zero in-transit shifting or compression.</p>
                </div>
                <div class="bok2bag-step">
                    <div class="bok2bag-step-num">04</div>
                    <h4>Smooth Highway Transit</h4>
                    <p>Our vehicle navigates the 80 km NH-320 and NH-19 route safely, reaching Bagodar within 2 to 3 hours with active phone updates.</p>
                </div>
                <div class="bok2bag-step">
                    <div class="bok2bag-step-num">05</div>
                    <h4>Unloading &amp; Assembly</h4>
                    <p>In Bagodar, we unload all items into designated rooms, reassemble beds and tables, and clear out packing waste.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Localities Served Section -->
    <section class="bok2bag-section bg-light">
        <div class="bok2bag-container">
            <h2 class="bok2bag-section-title">Serving All Localities Across Bokaro and Bagodar</h2>
            <p class="bok2bag-section-subtitle">Extensive pickup reach in Bokaro Steel City &amp; Chas and comprehensive doorstep delivery throughout Bagodar block.</p>

            <div class="bok2bag-two-col">
                <div class="bok2bag-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--bok2bag-accent); margin-right: 8px;"></i> Bokaro &amp; Chas Pickup Sectors</h4>
                    <p>Sector 1, Sector 2, Sector 3, Sector 4, Sector 5, Sector 6, Sector 8, Sector 9, Sector 11, Sector 12, Chas, Co-operative Colony, Camp 2, Balidih Industrial Area, Kurmidih, and Bokaro Thermal.</p>
                </div>
                <div class="bok2bag-card">
                    <h4><i class="fa-solid fa-location-dot" style="color: var(--bok2bag-primary); margin-right: 8px;"></i> Bagodar Delivery Localities</h4>
                    <p>Bagodar Main Bazar, GT Road Intersection, Harihar Dham Area, Sariya Road, Banpura, Atka, Dondlo, Hesla, Kander, Jamtara Mor, and adjoining rural communities.</p>
                </div>
            </div>

            <!-- CTA Banner -->
            <div class="bok2bag-cta">
                <h3>Planning Your Move from Bokaro to Bagodar?</h3>
                <p>Trust Jharkhand's highest-rated relocation professionals. Get a transparent quote, punctual container transport, and complete peace of mind today.</p>
                <a href="tel:+918409531615" class="bok2bag-btn"><i class="fa-solid fa-phone" style="margin-right: 8px;"></i> Call 8409531615 / 9835565233</a>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="bok2bag-section">
        <div class="bok2bag-container">
            <h2 class="bok2bag-section-title">Frequently Asked Questions: Bokaro to Bagodar Relocation</h2>
            <p class="bok2bag-section-subtitle">Helpful answers regarding shifting timelines, charges, and safety standards.</p>

            <div class="bok2bag-faq-box">
                <div class="bok2bag-faq-item">
                    <h4 class="bok2bag-faq-q">How much time does household shifting take from Bokaro to Bagodar?</h4>
                    <p class="bok2bag-faq-a">The distance is 80 kilometers via NH-320 and NH-19. Truck transit takes approximately 2 to 2.5 hours. With morning packing and afternoon unloading, your entire shifting process is completed smoothly within the same day.</p>
                </div>

                <div class="bok2bag-faq-item">
                    <h4 class="bok2bag-faq-q">Are your bills accepted for SAIL BSL employee transfer claims?</h4>
                    <p class="bok2bag-faq-a">Yes. We issue IBA-approved consignment bilty, official computerized GST invoices, stamped money receipts, and itemized inventory lists that fulfill all SAIL Bokaro Steel Plant and government employee reimbursement requirements.</p>
                </div>

                <div class="bok2bag-faq-item">
                    <h4 class="bok2bag-faq-q">Can you handle pickup from high-rise apartments in Chas or Bokaro?</h4>
                    <p class="bok2bag-faq-a">Yes. Our crew is experienced in moving heavy furniture and appliances in multi-story apartment complexes across Chas and Bokaro, utilizing service elevators or stairwells with protective padding.</p>
                </div>

                <div class="bok2bag-faq-item">
                    <h4 class="bok2bag-faq-q">Do you transport two-wheelers along with household goods?</h4>
                    <p class="bok2bag-faq-a">Yes. We transport motorbikes and scooters inside our covered container trucks. We wrap all delicate body parts with bubble wrap and anchor the vehicle upright using industrial tie-down belts for zero-scratch transit.</p>
                </div>

                <div class="bok2bag-faq-item">
                    <h4 class="bok2bag-faq-q">Do I have to arrange for carpenters to dismantle my furniture?</h4>
                    <p class="bok2bag-faq-a">No. Our professional team includes skilled carpenters who handle the complete dismantling of double beds, almirahs, and modular dining tables in Bokaro and reassemble them at your new home in Bagodar.</p>
                </div>

                <div class="bok2bag-faq-item">
                    <h4 class="bok2bag-faq-q">How can I book my relocation with Shree Ashirwad Packers?</h4>
                    <p class="bok2bag-faq-a">You can book by calling 8409531615 or 9835565233. We recommend booking 2 to 3 days in advance to secure your preferred date and dedicated container vehicle.</p>
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
        "name": "Shree Ashirwad Packers and Movers Bokaro",
        "image": "<?php echo $og_image; ?>",
        "@id": "<?php echo $canonical_url; ?>#company",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+918409531615",
        "priceRange": "₹₹",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Chas Main Road, Near Bypass Chowk",
            "addressLocality": "Bokaro",
            "addressRegion": "Jharkhand",
            "postalCode": "827013",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.6693,
            "longitude": 86.1511
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
                "name": "Bokaro"
            },
            {
                "@type": "AdministrativeArea",
                "name": "Bagodar"
            }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Bokaro to Bagodar Moving Services",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Household Relocation Bokaro to Bagodar"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "SAIL BSL Employee Transfer Shifting"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Bike & Car Transportation Bokaro to Bagodar"
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
                "name": "Bokaro to Bagodar",
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
                "name": "How much time does household shifting take from Bokaro to Bagodar?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The distance is 80 kilometers via NH-320 and NH-19. Truck transit takes approximately 2 to 2.5 hours. With morning packing and afternoon unloading, your entire shifting process is completed smoothly within the same day."
                }
            },
            {
                "@type": "Question",
                "name": "Are your bills accepted for SAIL BSL employee transfer claims?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We issue IBA-approved consignment bilty, official computerized GST invoices, stamped money receipts, and itemized inventory lists that fulfill all SAIL Bokaro Steel Plant and government employee reimbursement requirements."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle pickup from high-rise apartments in Chas or Bokaro?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Our crew is experienced in moving heavy furniture and appliances in multi-story apartment complexes across Chas and Bokaro, utilizing service elevators or stairwells with protective padding."
                }
            },
            {
                "@type": "Question",
                "name": "Do you transport two-wheelers along with household goods?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We transport motorbikes and scooters inside our covered container trucks. We wrap all delicate body parts with bubble wrap and anchor the vehicle upright using industrial tie-down belts for zero-scratch transit."
                }
            },
            {
                "@type": "Question",
                "name": "Do I have to arrange for carpenters to dismantle my furniture?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No. Our professional team includes skilled carpenters who handle the complete dismantling of double beds, almirahs, and modular dining tables in Bokaro and reassemble them at your new home in Bagodar."
                }
            },
            {
                "@type": "Question",
                "name": "How can I book my relocation with Shree Ashirwad Packers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "You can book by calling 8409531615 or 9835565233. We recommend booking 2 to 3 days in advance to secure your preferred date and dedicated container vehicle."
                }
            }
        ]
    }
    </script>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
