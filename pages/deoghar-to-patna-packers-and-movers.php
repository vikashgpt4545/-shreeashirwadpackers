<?php
/**
 * Page Name: Deoghar to Patna Packers and Movers
 * Route Slug: deoghar-to-patna-packers-and-movers
 * Description: Dedicated inter-state moving route page from Deoghar (Baidyanath Dham, Jharkhand) to Patna (Capital of Bihar).
 * Focus Keywords: deoghar to patna packers and movers, packers and movers deoghar to patna, house shifting deoghar to patna, deoghar to patna luggage parcel, deoghar to patna car carrier, deoghar to patna bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Deoghar to Patna Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Deoghar to Patna packers and movers by Shree Ashirwad. Same-day 6-8 hr transit, AIIMS & Govt transfer bills, 5-layer packing, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/deoghar-to-patna-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Deoghar">

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

    <!-- Scoped CSS for Route 11 (Deoghar to Patna) -->
    <style>
        :root {
            --d2pat-primary: #1e1b4b;
            --d2pat-secondary: #991b1b;
            --d2pat-accent: #d97706;
            --d2pat-accent-light: #fef3c7;
            --d2pat-dark: #0f172a;
            --d2pat-gray-bg: #f8fafc;
            --d2pat-border: #e2e8f0;
        }

        .d2pat-wrapper {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            line-height: 1.7;
        }

        .d2pat-hero {
            background: linear-gradient(135deg, rgba(30,27,75,0.95) 0%, rgba(153,27,27,0.92) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 20px 75px;
            text-align: center;
            position: relative;
        }
        .d2pat-hero-content {
            max-width: 980px;
            margin: 0 auto;
        }
        .d2pat-badge {
            display: inline-block;
            background: rgba(217,119,6,0.22);
            border: 1px solid rgba(217,119,6,0.45);
            color: #fef3c7;
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 20px;
        }
        .d2pat-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .d2pat-hero h1 span {
            color: #f59e0b;
            display: inline-block;
        }
        .d2pat-hero p {
            font-size: 1.15rem;
            color: #e2e8f0;
            max-width: 820px;
            margin: 0 auto 30px;
            line-height: 1.7;
        }
        .d2pat-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 15px;
            margin: 35px 0 30px;
        }
        .d2pat-stat-card {
            background: rgba(255, 255, 255, 0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.14);
            border-radius: 12px;
            padding: 16px 12px;
            text-align: center;
        }
        .d2pat-stat-card .d2pat-stat-val {
            font-family: 'Outfit', sans-serif;
            font-size: 1.7rem;
            font-weight: 800;
            color: #fbbf24;
            display: block;
        }
        .d2pat-stat-card .d2pat-stat-lbl {
            font-size: 0.85rem;
            color: #e2e8f0;
            font-weight: 500;
        }
        .d2pat-cta-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .d2pat-btn-primary {
            background: #d97706;
            color: #ffffff;
            font-weight: 700;
            padding: 14px 32px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 4px 15px rgba(217,119,6,0.35);
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .d2pat-btn-primary:hover {
            background: #b45309;
            transform: translateY(-2px);
            color: #ffffff;
        }
        .d2pat-btn-secondary {
            background: rgba(255,255,255,0.12);
            color: #ffffff;
            border: 1px solid rgba(255,255,255,0.3);
            font-weight: 600;
            padding: 14px 28px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .d2pat-btn-secondary:hover {
            background: rgba(255,255,255,0.22);
            color: #ffffff;
        }

        .d2pat-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .d2pat-section {
            padding: 70px 0;
        }
        .d2pat-section-alt {
            background-color: var(--d2pat-gray-bg);
        }

        .d2pat-sec-header {
            text-align: center;
            max-width: 780px;
            margin: 0 auto 50px;
        }
        .d2pat-sec-tag {
            color: var(--d2pat-secondary);
            font-weight: 700;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.08em;
            display: block;
            margin-bottom: 8px;
        }
        .d2pat-sec-header h2 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(1.8rem, 3vw, 2.5rem);
            font-weight: 800;
            color: var(--d2pat-dark);
            line-height: 1.25;
            margin-bottom: 15px;
        }
        .d2pat-sec-header p {
            color: #64748b;
            font-size: 1.05rem;
        }

        /* Corridor Details Grid */
        .d2pat-corridor-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
            margin-top: 35px;
        }
        .d2pat-corridor-card {
            background: #ffffff;
            border: 1px solid var(--d2pat-border);
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
            transition: transform 0.3s ease;
        }
        .d2pat-corridor-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 24px rgba(0,0,0,0.07);
        }
        .d2pat-corridor-icon {
            width: 52px;
            height: 52px;
            background: #fee2e2;
            color: var(--d2pat-secondary);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }
        .d2pat-corridor-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.3rem;
            color: var(--d2pat-dark);
            margin-bottom: 12px;
            font-weight: 700;
        }
        .d2pat-corridor-card p {
            color: #64748b;
            font-size: 0.98rem;
            margin-bottom: 0;
        }

        /* Image Showcase */
        .d2pat-img-showcase {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 20px;
            margin: 45px 0 20px;
        }
        .d2pat-img-card {
            background: #ffffff;
            border-radius: 12px;
            overflow: hidden;
            border: 1px solid var(--d2pat-border);
            box-shadow: 0 4px 15px rgba(0,0,0,0.04);
            transition: transform 0.3s ease;
        }
        .d2pat-img-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
        }
        .d2pat-img-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            display: block;
        }
        .d2pat-img-card .d2pat-img-caption {
            padding: 16px;
            font-size: 0.92rem;
            color: #475569;
            font-weight: 600;
            border-top: 1px solid #f1f5f9;
        }

        /* Tariff Table */
        .d2pat-table-container {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--d2pat-border);
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
            margin-top: 30px;
        }
        .d2pat-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            min-width: 650px;
        }
        .d2pat-table th {
            background: var(--d2pat-primary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            padding: 16px 20px;
            font-size: 0.98rem;
            text-transform: uppercase;
            letter-spacing: 0.04em;
        }
        .d2pat-table td {
            padding: 16px 20px;
            border-bottom: 1px solid var(--d2pat-border);
            color: #334155;
            font-size: 0.98rem;
        }
        .d2pat-table tr:hover {
            background-color: #f1f5f9;
        }
        .d2pat-price-tag {
            font-weight: 700;
            color: var(--d2pat-secondary);
            font-family: 'Outfit', sans-serif;
            font-size: 1.05rem;
        }

        /* Features & Process */
        .d2pat-process-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(210px, 1fr));
            gap: 20px;
            margin-top: 40px;
        }
        .d2pat-step-box {
            background: #ffffff;
            border: 1px solid var(--d2pat-border);
            border-radius: 12px;
            padding: 24px 20px;
            position: relative;
            box-shadow: 0 4px 12px rgba(0,0,0,0.03);
        }
        .d2pat-step-num {
            position: absolute;
            top: -12px;
            left: 20px;
            background: var(--d2pat-secondary);
            color: #ffffff;
            font-family: 'Outfit', sans-serif;
            font-weight: 800;
            font-size: 0.85rem;
            padding: 3px 12px;
            border-radius: 20px;
        }
        .d2pat-step-box h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--d2pat-dark);
            margin: 12px 0 8px;
        }
        .d2pat-step-box p {
            color: #64748b;
            font-size: 0.92rem;
            margin-bottom: 0;
            line-height: 1.6;
        }

        /* Locality Matrix */
        .d2pat-matrix-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
            margin-top: 35px;
        }
        @media(max-width: 768px) {
            .d2pat-matrix-grid { grid-template-columns: 1fr; }
        }
        .d2pat-matrix-card {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--d2pat-border);
            padding: 30px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        }
        .d2pat-matrix-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--d2pat-dark);
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        .d2pat-locality-tags {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .d2pat-locality-tags span {
            background: #f1f5f9;
            color: #334155;
            font-size: 0.9rem;
            font-weight: 600;
            padding: 6px 14px;
            border-radius: 6px;
            border: 1px solid #e2e8f0;
        }

        /* Reviews */
        .d2pat-review-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
            margin-top: 35px;
        }
        .d2pat-review-card {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--d2pat-border);
            padding: 26px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.03);
        }
        .d2pat-review-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }
        .d2pat-review-stars {
            color: #f59e0b;
            font-size: 1.1rem;
        }
        .d2pat-reviewer-name {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            color: var(--d2pat-dark);
            font-size: 1.05rem;
            margin-bottom: 2px;
        }
        .d2pat-reviewer-sub {
            font-size: 0.85rem;
            color: #64748b;
        }
        .d2pat-review-card p {
            color: #475569;
            font-size: 0.95rem;
            line-height: 1.65;
            margin-bottom: 0;
        }

        /* FAQ Accordion */
        .d2pat-faq-container {
            max-width: 860px;
            margin: 35px auto 0;
        }
        .d2pat-faq-item {
            background: #ffffff;
            border: 1px solid var(--d2pat-border);
            border-radius: 10px;
            margin-bottom: 15px;
            overflow: hidden;
        }
        .d2pat-faq-q {
            font-family: 'Outfit', sans-serif;
            font-weight: 700;
            font-size: 1.1rem;
            color: var(--d2pat-dark);
            padding: 20px 24px;
            background: #ffffff;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .d2pat-faq-a {
            padding: 0 24px 20px;
            color: #475569;
            font-size: 0.98rem;
            line-height: 1.7;
            border-top: 1px solid #f1f5f9;
            padding-top: 15px;
        }

        /* Interlinking Hubs */
        .d2pat-cluster-nav {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid var(--d2pat-border);
            padding: 35px;
            margin-top: 40px;
        }
        .d2pat-cluster-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(230px, 1fr));
            gap: 15px;
            margin-top: 20px;
        }
        .d2pat-cluster-links a {
            display: block;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            padding: 12px 16px;
            border-radius: 8px;
            color: var(--d2pat-primary);
            font-weight: 600;
            text-decoration: none;
            transition: all 0.2s ease;
            font-size: 0.93rem;
        }
        .d2pat-cluster-links a:hover {
            background: var(--d2pat-secondary);
            color: #ffffff;
            border-color: var(--d2pat-secondary);
            transform: translateY(-2px);
        }
    </style>
</head>
<body class="d2pat-wrapper">

<?php include_once __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="d2pat-hero">
    <div class="d2pat-hero-content">
        <span class="d2pat-badge">Interstate Highway Express &bull; Deoghar to Bihar Capital Route</span>
        <h1>Reliable <span>Deoghar to Patna</span> Packers and Movers</h1>
        <p>Premium inter-state relocation connecting Baidyanath Dham (Deoghar, Jharkhand) to Patna (Bihar). Certified door-to-door shifting via the Jamui-Lakhisarai-Bakhtiyarpur expressway corridor, featuring customized sealed container fleet, 5-layer packaging defense, and 100% genuine IBA-compliant GST transit bills.</p>

        <div class="d2pat-hero-stats">
            <div class="d2pat-stat-card">
                <span class="d2pat-stat-val">~265 KM</span>
                <span class="d2pat-stat-lbl">Highway Distance</span>
            </div>
            <div class="d2pat-stat-card">
                <span class="d2pat-stat-val">6 - 8 Hrs</span>
                <span class="d2pat-stat-lbl">Guaranteed Transit Time</span>
            </div>
            <div class="d2pat-stat-card">
                <span class="d2pat-stat-val">100% IBA</span>
                <span class="d2pat-stat-lbl">Approved GST Invoicing</span>
            </div>
            <div class="d2pat-stat-card">
                <span class="d2pat-stat-val">Zero Loss</span>
                <span class="d2pat-stat-lbl">Transit Insurance Shield</span>
            </div>
        </div>

        <div class="d2pat-cta-group">
            <a href="tel:08409531615" class="d2pat-btn-primary">
                <svg width="20" height="20" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.053 15.053 0 006.59 6.59l2.2-2.2a1 1 0 011.01-.24c1.12.37 2.33.57 3.58.57a1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.25.2 2.45.57 3.57a1 1 0 01-.25 1.02l-2.2 2.2z"/></svg>
                Call Instant Quote: 8409531615
            </a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="d2pat-btn-secondary">
                Request Free Survey
            </a>
        </div>
    </div>
</section>

<!-- Corridor Logistics Section -->
<section class="d2pat-section">
    <div class="d2pat-container">
        <div class="d2pat-sec-header">
            <span class="d2pat-sec-tag">Interstate Logistics Intelligence</span>
            <h2>Deoghar to Patna Express Moving Highway Corridor</h2>
            <p>Moving across the Jharkhand-Bihar state border requires specialized route planning, interstate border commercial transit permits, and smooth highway navigation. Here is how Shree Ashirwad Packers and Movers secures your belongings along this essential 265 km corridor.</p>
        </div>

        <div class="d2pat-corridor-grid">
            <div class="d2pat-corridor-card">
                <div class="d2pat-corridor-icon">&#128666;</div>
                <h3>Express Highway Routing</h3>
                <p>We deploy two high-efficiency routes: the primary arterial passage via Deoghar &rarr; Chakai &rarr; Jamui &rarr; Lakhisarai &rarr; Barh &rarr; Bakhtiyarpur 4-Lane Four-Way Express Link &rarr; Patna (~265 km, 6 to 7.5 hours driving); and the alternate corridor via Deoghar &rarr; Banka &rarr; Bhagalpur &rarr; Mokama &rarr; Patna (~285 km), selected dynamically based on bridge checkpoints and seasonal traffic conditions.</p>
            </div>
            <div class="d2pat-corridor-card">
                <div class="d2pat-corridor-icon">&#128737;</div>
                <h3>Weatherproof Sealed Containers</h3>
                <p>Inter-state highways through Jamui and Lakhisarai encounter heavy dust, agricultural tractor crossings, and unexpected weather changes. Our customized all-weather 14ft, 17ft, 19ft, and 22ft containerized trucks safeguard sensitive electronics, royal rosewood furniture, and temple artifacts in an airtight, locked environment.</p>
            </div>
            <div class="d2pat-corridor-card">
                <div class="d2pat-corridor-icon">&#128221;</div>
                <h3>Complete Interstate Tax Documentation</h3>
                <p>Transferring household and corporate assets across the state boundary demands strict compliance. Shree Ashirwad issues computerized GST e-way bills (SAC code 9965/9967), comprehensive inventory lorry receipts (LR bilty), and full insurance declarations to ensure zero delays at Jharkhand-Bihar transport sales-tax checkpoints.</p>
            </div>
        </div>

        <!-- Verified Image Showcase -->
        <div class="d2pat-img-showcase">
            <div class="d2pat-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated closed container truck navigating Deoghar to Patna highway">
                <div class="d2pat-img-caption">Sealed all-weather container fleet navigating the Deoghar-Patna inter-state route.</div>
            </div>
            <div class="d2pat-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Five-layer protective packaging for electronics and glassware">
                <div class="d2pat-img-caption">5-layer packaging defense engineered for zero vibration damage during transit.</div>
            </div>
            <div class="d2pat-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Automobile enclosed carrier loading in Deoghar for Patna relocation">
                <div class="d2pat-img-caption">Hydraulic wheel-chock automobile carrier service between Deoghar and Patna.</div>
            </div>
            <div class="d2pat-img-card">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Professional unpacking and room setup service in Patna residence">
                <div class="d2pat-img-caption">Doorstep placement, furniture re-assembly, and debris removal in Patna.</div>
            </div>
        </div>
    </div>
</section>

<!-- Institutional Relocation Advisory -->
<section class="d2pat-section d2pat-section-alt">
    <div class="d2pat-container">
        <div class="d2pat-sec-header">
            <span class="d2pat-sec-tag">Corporate &amp; Government Transit</span>
            <h2>AIIMS, Medical, Judicial &amp; PSU Transfer Relocations</h2>
            <p>Deoghar and Patna share deep administrative, educational, and medical relationships. We deliver specialized institutional shifting services with 100% claim-ready documentation.</p>
        </div>

        <div class="d2pat-corridor-grid">
            <div class="d2pat-corridor-card">
                <div class="d2pat-corridor-icon">&#9877;</div>
                <h3>AIIMS Deoghar to AIIMS Patna Transfers</h3>
                <p>With senior doctors, clinical researchers, and nursing officers frequently transferring between AIIMS Deoghar (Devipur Campus) and AIIMS Patna (Phulwari Sharif), we supply specialized shock-resistant packing for delicate medical devices, books, and high-value domestic setups with preferential doctor billing tariffs.</p>
            </div>
            <div class="d2pat-corridor-card">
                <div class="d2pat-corridor-icon">&#9878;</div>
                <h3>Judicial &amp; Government Secretariat Bills</h3>
                <p>High Court judges, administrative advocates, and state secretariat personnel transferring between Jharkhand civil courts / collectorates and Patna High Court / Old Secretariat receive 100% compliant reimbursement invoices, itemized moving registers, and valid consignment notes accepted by all state audit departments.</p>
            </div>
            <div class="d2pat-corridor-card">
                <div class="d2pat-corridor-icon">&#127974;</div>
                <h3>Banking &amp; Central Undertakings</h3>
                <p>Transfer policies for officers in State Bank of India, Punjab National Bank, NTPC, IOCL, and Indian Railways demand certified quotation comparisons and approved carrier vouchers. Shree Ashirwad furnishes transparent pre-move estimates and verified transit bills for quick reimbursement processing.</p>
            </div>
        </div>
    </div>
</section>

<!-- Transparent Tariff Section -->
<section class="d2pat-section">
    <div class="d2pat-container">
        <div class="d2pat-sec-header">
            <span class="d2pat-sec-tag">Clear Pricing Matrix</span>
            <h2>Deoghar to Patna Moving Rates &amp; Distance Charges</h2>
            <p>We provide completely transparent shifting estimates without hidden tolls, sudden staircase charges, or unauthorized extras. All quotes cover packing materials, labor, specialized container freight, and doorstep loading.</p>
        </div>

        <div class="d2pat-table-container">
            <table class="d2pat-table">
                <thead>
                    <tr>
                        <th>Consignment Scope</th>
                        <th>Standard Distance</th>
                        <th>Packing &amp; Loading Charges</th>
                        <th>Sealed Freight Cost</th>
                        <th>Estimated Total Package</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment Shift</strong></td>
                        <td>~265 km</td>
                        <td>&#8377;3,500 - &#8377;4,800</td>
                        <td>&#8377;7,500 - &#8377;9,500</td>
                        <td class="d2pat-price-tag">&#8377;11,000 - &#8377;14,300</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Family Home</strong></td>
                        <td>~265 km</td>
                        <td>&#8377;5,500 - &#8377;7,500</td>
                        <td>&#8377;10,500 - &#8377;13,500</td>
                        <td class="d2pat-price-tag">&#8377;16,000 - &#8377;21,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Luxury Residence</strong></td>
                        <td>~265 km</td>
                        <td>&#8377;7,500 - &#8377;10,500</td>
                        <td>&#8377;14,500 - &#8377;18,500</td>
                        <td class="d2pat-price-tag">&#8377;22,000 - &#8377;29,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Bungalow / Villa</strong></td>
                        <td>~265 km</td>
                        <td>&#8377;10,500 - &#8377;14,000</td>
                        <td>&#8377;19,500 - &#8377;25,000</td>
                        <td class="d2pat-price-tag">&#8377;30,000 - &#8377;39,000</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter Parcel</strong></td>
                        <td>~265 km</td>
                        <td>&#8377;800 - &#8377;1,200</td>
                        <td>&#8377;1,800 - &#8377;2,500</td>
                        <td class="d2pat-price-tag">&#8377;2,600 - &#8377;3,700</td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler / Sedan / SUV Carrier</strong></td>
                        <td>~265 km</td>
                        <td>&#8377;1,500 - &#8377;2,500</td>
                        <td>&#8377;6,500 - &#8377;9,000</td>
                        <td class="d2pat-price-tag">&#8377;8,000 - &#8377;11,500</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="margin-top: 15px; font-size: 0.9rem; color: #64748b; text-align: center;">*Note: Final prices may fluctuate marginally according to peak shifting weekend seasons, floor elevations without operational elevators, and elective comprehensive transit insurance (typically 3% of declared value).</p>
    </div>
</section>

<!-- 5-Layer Defensive Packaging Shield -->
<section class="d2pat-section d2pat-section-alt">
    <div class="d2pat-container">
        <div class="d2pat-sec-header">
            <span class="d2pat-sec-tag">Uncompromising Asset Protection</span>
            <h2>Our Signature 5-Layer Defensive Packaging Shield</h2>
            <p>Long highway hauls over Bihar state highways can cause harmonic vibrations that loosen joints and scratch polished surfaces. We eliminate transit hazards with our proven multi-tier defensive packing regime.</p>
        </div>

        <div class="d2pat-corridor-grid">
            <div class="d2pat-corridor-card">
                <div class="d2pat-corridor-icon">1</div>
                <h3>Anti-Static Inner Wrap</h3>
                <p>Delicate electronics, computer processors, LED/OLED television screens, and refrigeration coils are wrapped in specialized non-abrasive anti-static polyethylene film to prevent static build-up and surface micro-scratches.</p>
            </div>
            <div class="d2pat-corridor-card">
                <div class="d2pat-corridor-icon">2</div>
                <h3>Heavy Air-Bubble Cushioning</h3>
                <p>Two layers of premium 100 GSM virgin air-bubble wrap encase fine chinaware, pooja room brass statues, glass tabletop panels, and chandeliers, delivering optimal shock-absorption during sudden highway braking.</p>
            </div>
            <div class="d2pat-corridor-card">
                <div class="d2pat-corridor-icon">3</div>
                <h3>Reinforced Angle Board Armor</h3>
                <p>Dense 5 mm corrugated edge angle protectors are strapped to all corners of wooden wardrobes, designer dressing mirrors, and sofa arms to completely eliminate corner dents and frame fractures during road transport.</p>
            </div>
            <div class="d2pat-corridor-card">
                <div class="d2pat-corridor-icon">4</div>
                <h3>7-Ply Heavy Corrugated Boxes</h3>
                <p>Books, cookware, kitchenware, and folded clothes are packed inside virgin 7-ply heavy-duty carton boxes sealed with cross-weave industrial tape to withstand stacking pressure inside the vehicle.</p>
            </div>
            <div class="d2pat-corridor-card">
                <div class="d2pat-corridor-icon">5</div>
                <h3>Moisture-Proof Stretch Wrapping</h3>
                <p>The entire exterior consignment is enveloped in 23-micron moisture-tight stretch wrapping, creating an airtight shield that blocks rain, humidity, highway grit, and diesel soot throughout the Deoghar-Patna voyage.</p>
            </div>
            <div class="d2pat-corridor-card">
                <div class="d2pat-corridor-icon">&#10004;</div>
                <h3>Custom Wooden Crating</h3>
                <p>For fragile heirloom marble mementos, high-end grand pianos, and medical laboratory microscopes, our carpenters construct tailored on-site wooden shipping crates lined with thermal foam.</p>
            </div>
        </div>
    </div>
</section>

<!-- Step by Step Process -->
<section class="d2pat-section">
    <div class="d2pat-container">
        <div class="d2pat-sec-header">
            <span class="d2pat-sec-tag">Structured Workflow</span>
            <h2>5 Simple Steps for a Smooth Deoghar to Patna Relocation</h2>
            <p>Our standardized process removes all guesswork, delivering complete peace of mind from initial packing in Deoghar to final arrangement in your Patna residence.</p>
        </div>

        <div class="d2pat-process-grid">
            <div class="d2pat-step-box">
                <span class="d2pat-step-num">Step 1</span>
                <h4>Pre-Move Survey</h4>
                <p>On-site survey in Deoghar or digital video assessment to evaluate consignment volume, special packing needs, and calculate an all-inclusive firm quotation.</p>
            </div>
            <div class="d2pat-step-box">
                <span class="d2pat-step-num">Step 2</span>
                <h4>Master 5-Layer Packing</h4>
                <p>Trained packers arrive with color-coded cartons, protective wrap, and tools to dismantle large furniture and secure every item systematically.</p>
            </div>
            <div class="d2pat-step-box">
                <span class="d2pat-step-num">Step 3</span>
                <h4>Sealed Container Loading</h4>
                <p>Goods are carefully loaded onto our customized closed container truck using safety ramps and tie-down cargo straps to prevent movement during travel.</p>
            </div>
            <div class="d2pat-step-box">
                <span class="d2pat-step-num">Step 4</span>
                <h4>Express Highway Transit</h4>
                <p>Direct non-stop navigation along the Jamui-Lakhisarai-Patna corridor with real-time GPS tracking and driver check-in updates for the client.</p>
            </div>
            <div class="d2pat-step-box">
                <span class="d2pat-step-num">Step 5</span>
                <h4>Unloading &amp; Room Setup</h4>
                <p>Prompt doorstep delivery in Patna, complete unloading, furniture re-assembly, room-by-room positioning, and total packing debris cleanup.</p>
            </div>
        </div>
    </div>
</section>

<!-- Dual Locality Matrix -->
<section class="d2pat-section d2pat-section-alt">
    <div class="d2pat-container">
        <div class="d2pat-sec-header">
            <span class="d2pat-sec-tag">Locality Coverage Matrix</span>
            <h2>Comprehensive Door-to-Door Pickup &amp; Drop Network</h2>
            <p>We provide comprehensive neighborhood coverage across every residential sector, commercial colony, and institutional campus in both Deoghar and Patna.</p>
        </div>

        <div class="d2pat-matrix-grid">
            <div class="d2pat-matrix-card">
                <h3>&#128205; Deoghar Origin Coverage Areas</h3>
                <p style="color: #64748b; font-size: 0.95rem; margin-bottom: 15px;">Fast doorstep loading and packing across all municipal wards and suburban districts:</p>
                <div class="d2pat-locality-tags">
                    <span>Castairs Town</span>
                    <span>Williams Town</span>
                    <span>Bilasi Town</span>
                    <span>Bompas Town</span>
                    <span>Satsang Nagar</span>
                    <span>Jasidih Industrial Area</span>
                    <span>AIIMS Deoghar Campus Devipur</span>
                    <span>Rohini</span>
                    <span>Kunda</span>
                    <span>Tower Chowk Commercial Hub</span>
                    <span>Madhupur Hub</span>
                    <span>Rikhiya</span>
                    <span>Chitra Colliery Belt</span>
                </div>
            </div>

            <div class="d2pat-matrix-card">
                <h3>&#127969; Patna Destination Coverage Areas</h3>
                <p style="color: #64748b; font-size: 0.95rem; margin-bottom: 15px;">Guaranteed direct doorstep delivery and unpacking across all Patna localities:</p>
                <div class="d2pat-locality-tags">
                    <span>Boring Road</span>
                    <span>Kankarbagh</span>
                    <span>Bailey Road (Jawaharlal Nehru Marg)</span>
                    <span>Patliputra Colony</span>
                    <span>Danapur Cantonment &amp; Khagaul</span>
                    <span>Rajendra Nagar</span>
                    <span>Anisabad</span>
                    <span>Ashiana Nagar</span>
                    <span>Exhibition Road</span>
                    <span>Phulwari Sharif &amp; AIIMS Patna</span>
                    <span>Saguna More</span>
                    <span>Jagdeo Path</span>
                    <span>Raja Bazar</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Customer Reviews Section -->
<section class="d2pat-section">
    <div class="d2pat-container">
        <div class="d2pat-sec-header">
            <span class="d2pat-sec-tag">Client Feedback</span>
            <h2>Authentic Experiences on the Deoghar to Patna Route</h2>
            <p>Discover how doctors, bank managers, and families rate our punctuality, safe handling, and transparent invoicing on this inter-state relocation route.</p>
        </div>

        <div class="d2pat-review-grid">
            <div class="d2pat-review-card">
                <div class="d2pat-review-header">
                    <div>
                        <div class="d2pat-reviewer-name">Dr. Alok Verma</div>
                        <div class="d2pat-reviewer-sub">AIIMS Faculty Relocation to AIIMS Patna</div>
                    </div>
                    <div class="d2pat-review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p>"When I got transferred from AIIMS Deoghar Devipur campus to AIIMS Patna Phulwari Sharif, my primary worry was my delicate medical reference volumes and double-door refrigerator. Shree Ashirwad Packers packed everything seamlessly within 3 hours. The truck reached Patna the exact same evening, and their GST invoice was reimbursed smoothly by administration!"</p>
            </div>

            <div class="d2pat-review-card">
                <div class="d2pat-review-header">
                    <div>
                        <div class="d2pat-reviewer-name">Rupesh Kumar Sinha</div>
                        <div class="d2pat-reviewer-sub">SBI Scale-III Officer Relocated to Bailey Road, Patna</div>
                    </div>
                    <div class="d2pat-review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p>"Relocating my 3 BHK household from Castairs Town Deoghar to Bailey Road Patna was completely painless. Their team handled our heavy teakwood sofa and fragile temple statues with impressive care. The container vehicle had proper cargo lock rings and GPS tracking. Highly recommended for banking and government transfers!"</p>
            </div>

            <div class="d2pat-review-card">
                <div class="d2pat-review-header">
                    <div>
                        <div class="d2pat-reviewer-name">Priyanka Mukherjee</div>
                        <div class="d2pat-reviewer-sub">Household &amp; Car Shifting to Patliputra Colony</div>
                    </div>
                    <div class="d2pat-review-stars">&#9733;&#9733;&#9733;&#9733;&#9733;</div>
                </div>
                <p>"We booked both our 2 BHK household furniture and our Hyundai i20 car from Jasidih to Patliputra Colony in Patna. Both the car and the furniture arrived in pristine condition without a single scuff mark. The crew unloaded and re-assembled all bed frames patiently. Transparent pricing with zero hidden demands."</p>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Accordion -->
<section class="d2pat-section d2pat-section-alt">
    <div class="d2pat-container">
        <div class="d2pat-sec-header">
            <span class="d2pat-sec-tag">Frequently Asked Questions</span>
            <h2>Deoghar to Patna Moving FAQs</h2>
            <p>Clear, direct answers to common queries regarding road travel times, interstate tolls, billing standards, and safety precautions.</p>
        </div>

        <div class="d2pat-faq-container">
            <div class="d2pat-faq-item">
                <div class="d2pat-faq-q">1. How long does a household move from Deoghar to Patna take?</div>
                <div class="d2pat-faq-a">The highway distance between Deoghar and Patna is approximately 265 km via the Chakai-Jamui-Lakhisarai-Bakhtiyarpur route. Under normal driving conditions, transit takes roughly 6 to 8 hours. We provide guaranteed same-day delivery: loading early in the morning in Deoghar allows our container truck to reach Patna by late afternoon or evening.</div>
            </div>

            <div class="d2pat-faq-item">
                <div class="d2pat-faq-q">2. Are interstate tax and toll charges included in your moving quotation?</div>
                <div class="d2pat-faq-a">Yes. All quotations provided by Shree Ashirwad Packers and Movers are completely transparent and comprehensive. The quoted cost includes all highway FASTag tolls, Bihar state commercial entry permits, GST charges, driver allowances, and door-to-door loading/unloading fees with zero unexpected surcharges.</div>
            </div>

            <div class="d2pat-faq-item">
                <div class="d2pat-faq-q">3. Can you transport our car or two-wheeler alongside household goods?</div>
                <div class="d2pat-faq-a">Yes. We operate dedicated automobile carriers as well as partitioned multi-purpose container trucks. Your car is securely loaded using hydraulic ramps and locked with heavy-duty wheel chocks. Two-wheelers are wrapped in 3-layer bubble packaging with mirrors removed and tanks drained for safe same-day transit to Patna.</div>
            </div>

            <div class="d2pat-faq-item">
                <div class="d2pat-faq-q">4. Do you provide approved GST bills for employer transfer reimbursement?</div>
                <div class="d2pat-faq-a">Absolutely. We issue 100% genuine, computerized GST-compliant invoices (SAC 9965/9967) along with consignment bilty (LR), vehicle weight slips, and insurance certificates accepted by central ministries, state secretariats, AIIMS, public sector undertakings, and major nationalized banks across India.</div>
            </div>

            <div class="d2pat-faq-item">
                <div class="d2pat-faq-q">5. How are delicate pooja mandirs and fragile kitchenware protected?</div>
                <div class="d2pat-faq-a">We use a dedicated 5-layer protective packing protocol. Glassware and temple brass statues are first wrapped in anti-static film and 100 GSM air-bubble sheeting, boxed with foam peanuts, and reinforced with corner angle boards before placement into heavy 7-ply cartons labeled 'Fragile'.</div>
            </div>

            <div class="d2pat-faq-item">
                <div class="d2pat-faq-q">6. How can I schedule a pre-move survey in Deoghar?</div>
                <div class="d2pat-faq-a">Scheduling is fast and free. You can call our 24/7 customer service desk at <strong>08409531615</strong> or <strong>09835565233</strong>, or submit a request on our contact page. We offer complimentary home inspection visits across all Deoghar neighborhoods as well as fast video-call surveys.</div>
            </div>
        </div>
    </div>
</section>

<!-- Internal Cluster Navigation -->
<section class="d2pat-section">
    <div class="d2pat-container">
        <div class="d2pat-cluster-nav">
            <h3 style="font-family: 'Outfit', sans-serif; font-size: 1.4rem; color: var(--d2pat-dark); margin-bottom: 8px;">Explore Related Relocation Corridors</h3>
            <p style="color: #64748b; font-size: 0.95rem;">Connect with our dedicated city hubs and active inter-district moving corridors:</p>

            <div class="d2pat-cluster-links">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-deoghar">&#8594; Deoghar Moving Hub</a>
                <a href="<?php echo SITE_BASE_URL; ?>/patna-to-deoghar-packers-and-movers">&#8594; Patna to Deoghar Route</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-ranchi-packers-and-movers">&#8594; Deoghar to Ranchi Route</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-dhanbad-packers-and-movers">&#8594; Deoghar to Dhanbad Route</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-jamshedpur-packers-and-movers">&#8594; Deoghar to Jamshedpur Route</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-kolkata-packers-and-movers">&#8594; Deoghar to Kolkata Route</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-delhi-packers-and-movers">&#8594; Deoghar to Delhi Route</a>
                <a href="<?php echo SITE_BASE_URL; ?>/pricing">&#8594; Standard Tariff Guide</a>
            </div>
        </div>
    </div>
</section>

<!-- 4 Valid JSON-LD Structured Data Schemas -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers Deoghar to Patna",
  "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
  "@id": "https://www.shreeashirwadpackers.com/deoghar-to-patna-packers-and-movers#company",
  "url": "https://www.shreeashirwadpackers.com/deoghar-to-patna-packers-and-movers",
  "telephone": "+918409531615",
  "priceRange": "₹₹",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Castairs Town, Near Baidyanath Dham Temple",
    "addressLocality": "Deoghar",
    "addressRegion": "Jharkhand",
    "postalCode": "814112",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 24.4826,
    "longitude": 86.7001
  },
  "areaServed": [
    {
      "@type": "City",
      "name": "Deoghar"
    },
    {
      "@type": "City",
      "name": "Patna"
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
    "opens": "07:00",
    "closes": "22:00"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Service",
  "serviceType": "Interstate Relocation Service",
  "provider": {
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers",
    "url": "https://www.shreeashirwadpackers.com"
  },
  "areaServed": [
    {
      "@type": "City",
      "name": "Deoghar"
    },
    {
      "@type": "City",
      "name": "Patna"
    }
  ],
  "description": "Premium interstate household and automotive shifting service from Deoghar to Patna with all-weather container trucks, 5-layer defensive packing, and genuine GST reimbursement bills."
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Home",
      "item": "https://www.shreeashirwadpackers.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Deoghar Packers and Movers",
      "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-deoghar"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Deoghar to Patna",
      "item": "https://www.shreeashirwadpackers.com/deoghar-to-patna-packers-and-movers"
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "How long does a household move from Deoghar to Patna take?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The highway distance between Deoghar and Patna is approximately 265 km via the Chakai-Jamui-Lakhisarai-Bakhtiyarpur route. Under normal driving conditions, transit takes roughly 6 to 8 hours with guaranteed same-day delivery."
      }
    },
    {
      "@type": "Question",
      "name": "Are interstate tax and toll charges included in your moving quotation?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. All quotations provided by Shree Ashirwad Packers and Movers include highway FASTag tolls, Bihar commercial entry permits, GST, and driver allowances with zero unexpected surcharges."
      }
    },
    {
      "@type": "Question",
      "name": "Can you transport our car or two-wheeler alongside household goods?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We operate dedicated automobile carriers as well as partitioned container trucks with hydraulic ramps and heavy-duty wheel chocks for safe same-day transit to Patna."
      }
    },
    {
      "@type": "Question",
      "name": "Do you provide approved GST bills for employer transfer reimbursement?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. We issue 100% genuine, computerized GST-compliant invoices (SAC 9965/9967) along with consignment bilty (LR), weight slips, and insurance certificates accepted by central ministries, AIIMS, PSUs, and nationalized banks."
      }
    },
    {
      "@type": "Question",
      "name": "How are delicate pooja mandirs and fragile kitchenware protected?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We use a dedicated 5-layer protective packing protocol including anti-static wrap, 100 GSM air-bubble sheeting, foam cushioning, and corner angle boards placed into heavy 7-ply cartons."
      }
    },
    {
      "@type": "Question",
      "name": "How can I schedule a pre-move survey in Deoghar?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Call our 24/7 customer service desk at 08409531615 or submit a request on our contact page for a complimentary home inspection or video-call survey."
      }
    }
  ]
}
</script>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
