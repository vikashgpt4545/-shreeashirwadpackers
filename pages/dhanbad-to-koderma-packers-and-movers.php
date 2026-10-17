<?php
/**
 * Page Name: Dhanbad to Koderma Packers and Movers
 * Slug: dhanbad-to-koderma-packers-and-movers
 * Purpose: Dedicated intercity relocation service page from Dhanbad to Koderma
 * Status: Active & Production Ready
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}
// Route Specific Variables
$canonical_url = "https://www.shreeashirwadpackers.com/dhanbad-to-koderma-packers-and-movers";
$page_title = "Dhanbad to Koderma Packers and Movers | Safe Shifting Services";
$meta_description = "Reliable Dhanbad to Koderma packers and movers. Professional household shifting, car transport, bike parcel, BCCL/ECL & railway transfers via NH-19 & NH-20.";
$current_page = "dhanbad-to-koderma-packers-and-movers";

// Open Graph
$og_title = "Dhanbad to Koderma Packers and Movers | Shree Ashirwad Packers";
$og_description = "Verified Dhanbad to Koderma packers and movers. Expert packing, GPS tracking, IBA approved billing, and zero damage guarantee.";
$og_url = $canonical_url;
$og_image = "https://www.shreeashirwadpackers.com/images/safe-transit-container-truck-ranchi.jpg";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc ?? $page_description ?? $meta_description); ?>">
    <meta name="keywords" content="dhanbad to koderma packers and movers, packers and movers dhanbad to koderma, house shifting dhanbad to koderma, bccl to dvc transfer packers, car transport dhanbad to koderma, bike parcel dhanbad to koderma, bank more to jhumri telaiya movers">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="<?php echo $route_origin ?? 'Koderma'; ?>">

    <!-- Open Graph Metadata -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="<?php echo htmlspecialchars($og_title ?? $page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($og_description ?? $page_desc ?? $page_description ?? $meta_description); ?>">
    <meta property="og:url" content="<?php echo $og_url ?? $canonical_url; ?>">
    <meta property="og:image" content="<?php echo $og_image ?? (SITE_BASE_URL . '/images/safe-transit-container-truck-ranchi.jpg'); ?>">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($og_title ?? $page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($og_description ?? $page_desc ?? $page_description ?? $meta_description); ?>">
    <meta name="twitter:image" content="<?php echo $og_image ?? (SITE_BASE_URL . '/images/safe-transit-container-truck-ranchi.jpg'); ?>">

    <!-- Favicon & Stylesheets -->
    <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<style>
/* Scoped Styles for Dhanbad to Koderma Route */
.dha2kod-hero {
    background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 60%, #1e40af 100%);
    color: #ffffff;
    padding: 60px 0 50px;
    position: relative;
    overflow: hidden;
}
.dha2kod-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: radial-gradient(circle at 80% 20%, rgba(245, 158, 11, 0.15) 0%, transparent 50%);
    pointer-events: none;
}
.dha2kod-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 2;
}
.dha2kod-breadcrumbs {
    font-size: 0.88rem;
    color: #cbd5e1;
    margin-bottom: 20px;
}
.dha2kod-breadcrumbs a {
    color: #93c5fd;
    text-decoration: none;
    transition: color 0.2s;
}
.dha2kod-breadcrumbs a:hover {
    color: #ffffff;
    text-decoration: underline;
}
.dha2kod-hero-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 40px;
    align-items: center;
}
.dha2kod-hero h1 {
    font-size: 2.6rem;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.dha2kod-hero h1 span {
    color: #fbbf24;
}
.dha2kod-hero-p {
    font-size: 1.12rem;
    line-height: 1.7;
    color: #e2e8f0;
    margin-bottom: 26px;
}
.dha2kod-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 28px;
}
.dha2kod-badge {
    background: rgba(255, 255, 255, 0.12);
    backdrop-filter: blur(8px);
    border: 1px solid rgba(255, 255, 255, 0.2);
    padding: 6px 14px;
    border-radius: 30px;
    font-size: 0.85rem;
    font-weight: 600;
    color: #f8fafc;
    display: inline-flex;
    align-items: center;
    gap: 6px;
}
.dha2kod-badge i {
    color: #fbbf24;
}
.dha2kod-quick-quote {
    background: #ffffff;
    color: #1e293b;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.dha2kod-quick-quote h3 {
    font-size: 1.35rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 8px;
    text-align: center;
}
.dha2kod-quick-quote p {
    font-size: 0.92rem;
    color: #64748b;
    margin-bottom: 20px;
    text-align: center;
}
.dha2kod-call-btn {
    display: block;
    width: 100%;
    background: #f59e0b;
    color: #ffffff;
    font-weight: 700;
    padding: 14px 20px;
    border-radius: 10px;
    text-align: center;
    text-decoration: none;
    font-size: 1.1rem;
    margin-bottom: 12px;
    transition: background 0.2s, transform 0.2s;
    box-shadow: 0 4px 12px rgba(245, 158, 11, 0.35);
}
.dha2kod-call-btn:hover {
    background: #d97706;
    transform: translateY(-2px);
    color: #ffffff;
}
.dha2kod-whatsapp-btn {
    display: block;
    width: 100%;
    background: #25d366;
    color: #ffffff;
    font-weight: 700;
    padding: 13px 20px;
    border-radius: 10px;
    text-align: center;
    text-decoration: none;
    font-size: 1rem;
    transition: background 0.2s;
}
.dha2kod-whatsapp-btn:hover {
    background: #1eb854;
    color: #ffffff;
}

/* Content Sections */
.dha2kod-section {
    padding: 50px 0;
}
.dha2kod-section.alt-bg {
    background: #f8fafc;
}
.dha2kod-heading {
    text-align: center;
    margin-bottom: 40px;
}
.dha2kod-heading h2 {
    font-size: 2.1rem;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
    letter-spacing: -0.3px;
}
.dha2kod-heading p {
    font-size: 1.05rem;
    color: #64748b;
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Feature Cards */
.dha2kod-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
}
.dha2kod-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 28px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
    transition: transform 0.2s, box-shadow 0.2s;
}
.dha2kod-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);
}
.dha2kod-card-icon {
    width: 52px;
    height: 52px;
    background: #eff6ff;
    color: #2563eb;
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 1.4rem;
    margin-bottom: 20px;
}
.dha2kod-card h3 {
    font-size: 1.22rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 12px;
}
.dha2kod-card p {
    font-size: 0.96rem;
    color: #475569;
    line-height: 1.65;
}

/* Two Column Layouts */
.dha2kod-grid-two {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 40px;
    align-items: center;
    margin-bottom: 45px;
}
.dha2kod-grid-two.reverse {
    grid-template-columns: 0.8fr 1.2fr;
}
.dha2kod-img-box {
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}
.dha2kod-img-box img {
    width: 100%;
    height: 320px;
    object-fit: cover;
    display: block;
}

/* Logistics List */
.dha2kod-logistics-list {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}
.dha2kod-logistics-list li {
    font-size: 0.98rem;
    color: #334155;
    padding: 8px 0;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    line-height: 1.5;
}
.dha2kod-logistics-list li i {
    color: #10b981;
    font-size: 1.15rem;
    margin-top: 2px;
}

/* Feature Box */
.dha2kod-feature-box {
    background: #f1f5f9;
    border-left: 4px solid #2563eb;
    border-radius: 0 12px 12px 0;
    padding: 24px;
    margin: 25px 0;
}
.dha2kod-feature-box h3 {
    font-size: 1.22rem;
    color: #0f172a;
    font-weight: 700;
    margin-bottom: 12px;
}
.dha2kod-feature-box ul {
    margin: 0;
    padding-left: 20px;
}
.dha2kod-feature-box li {
    font-size: 0.96rem;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 8px;
}

/* Pricing Table */
.dha2kod-table-wrap {
    background: #ffffff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    border: 1px solid #e2e8f0;
    margin: 25px 0;
}
.dha2kod-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}
.dha2kod-table th {
    background: #1e3a8a;
    color: #ffffff;
    padding: 16px 20px;
    font-weight: 700;
    font-size: 0.98rem;
}
.dha2kod-table td {
    padding: 16px 20px;
    border-bottom: 1px solid #f1f5f9;
    color: #334155;
    font-size: 0.95rem;
}
.dha2kod-table tr:last-child td {
    border-bottom: none;
}
.dha2kod-table tr:hover td {
    background: #f8fafc;
}
.dha2kod-price {
    font-weight: 700;
    color: #059669;
}

/* Process Timeline */
.dha2kod-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin-top: 30px;
}
.dha2kod-step {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px;
    position: relative;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
}
.dha2kod-step-num {
    width: 40px;
    height: 40px;
    background: #f59e0b;
    color: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-weight: 800;
    font-size: 1.1rem;
    margin-bottom: 16px;
}
.dha2kod-step h4 {
    font-size: 1.12rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}
.dha2kod-step p {
    font-size: 0.92rem;
    color: #64748b;
    line-height: 1.6;
}

/* Localities Grid */
.dha2kod-localities {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 28px;
    margin-top: 25px;
}
.dha2kod-loc-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 24px;
}
.dha2kod-loc-card h4 {
    font-size: 1.15rem;
    font-weight: 700;
    color: #1e3a8a;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.dha2kod-loc-card ul {
    margin: 0;
    padding-left: 20px;
}
.dha2kod-loc-card li {
    font-size: 0.94rem;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 6px;
}

/* FAQ Accordion */
.dha2kod-faq-list {
    max-width: 900px;
    margin: 0 auto;
}
.dha2kod-faq-item {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    margin-bottom: 16px;
    padding: 24px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
}
.dha2kod-faq-item h3 {
    font-size: 1.14rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}
.dha2kod-faq-item p {
    font-size: 0.96rem;
    color: #475569;
    line-height: 1.65;
    margin: 0;
}

/* CTA Footer Section */
.dha2kod-cta-banner {
    background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
    color: #ffffff;
    padding: 50px 30px;
    text-align: center;
    border-radius: 20px;
    margin: 40px 0;
}
.dha2kod-cta-banner h2 {
    font-size: 2.2rem;
    font-weight: 800;
    margin-bottom: 14px;
}
.dha2kod-cta-banner p {
    font-size: 1.08rem;
    color: #cbd5e1;
    max-width: 650px;
    margin: 0 auto 26px;
    line-height: 1.6;
}
.dha2kod-cta-btn {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: #f59e0b;
    color: #ffffff;
    font-weight: 700;
    padding: 14px 32px;
    border-radius: 10px;
    font-size: 1.1rem;
    text-decoration: none;
    transition: background 0.2s, transform 0.2s;
    box-shadow: 0 4px 15px rgba(245, 158, 11, 0.4);
}
.dha2kod-cta-btn:hover {
    background: #d97706;
    transform: translateY(-2px);
    color: #ffffff;
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .dha2kod-hero-grid {
        grid-template-columns: 1fr;
    }
    .dha2kod-grid-3 {
        grid-template-columns: 1fr;
    }
    .dha2kod-grid-two, .dha2kod-grid-two.reverse {
        grid-template-columns: 1fr;
    }
    .dha2kod-steps {
        grid-template-columns: 1fr 1fr;
    }
    .dha2kod-localities {
        grid-template-columns: 1fr;
    }
}
@media (max-width: 600px) {
    .dha2kod-hero h1 {
        font-size: 2rem;
    }
    .dha2kod-steps {
        grid-template-columns: 1fr;
    }
}
</style>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>


<!-- Hero Section -->
<section class="dha2kod-hero">
    <div class="dha2kod-container">
        <div class="dha2kod-breadcrumbs">
            <a href="https://www.shreeashirwadpackers.com/">Home</a> &raquo;
            <a href="https://www.shreeashirwadpackers.com/services">Services</a> &raquo;
            <span>Dhanbad to Koderma Packers and Movers</span>
        </div>
        <div class="dha2kod-hero-grid">
            <div>
                <div class="dha2kod-badges">
                    <span class="dha2kod-badge"><i class="fas fa-shield-alt"></i> 100% Transit Insurance</span>
                    <span class="dha2kod-badge"><i class="fas fa-truck-moving"></i> Dedicated Closed Containers</span>
                    <span class="dha2kod-badge"><i class="fas fa-file-invoice-dollar"></i> BCCL &amp; Railway Approved</span>
                </div>
                <h1>Dhanbad to Koderma <span>Packers and Movers</span></h1>
                <p class="dha2kod-hero-p">
                    Relocating your family, office, or vehicle from the Coal Capital of India to Koderma? Shree Ashirwad Packers and Movers delivers fast, dependable door-to-door shifting via the premier Grand Trunk Road (NH-19 / NH-20) corridor. With certified multi-layer packaging, dedicated GPS container vehicles, and hassle-free claim settlement billing.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="tel:+919534499994" class="dha2kod-call-btn" style="width: auto; padding: 14px 28px;">
                        <i class="fas fa-phone-alt"></i> Call +91 95344 99994
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=919534499994&text=Hi%2C%20I%20need%20a%20quote%20for%20relocation%20from%20Dhanbad%20to%20Koderma." target="_blank" class="dha2kod-whatsapp-btn" style="width: auto; padding: 14px 28px;">
                        <i class="fab fa-whatsapp"></i> Instant WhatsApp Quote
                    </a>
                </div>
            </div>
            <div>
                <div class="dha2kod-quick-quote">
                    <h3>Get Free Relocation Estimate</h3>
                    <p>Transparent rates &bull; No hidden surcharges &bull; Dedicated move manager</p>
                    <a href="tel:+919534499994" class="dha2kod-call-btn"><i class="fas fa-headset"></i> Call Helpline: 95344 99994</a>
                    <a href="https://api.whatsapp.com/send?phone=919534499994&text=Dhanbad%20to%20Koderma%20shifting%20quote%20request" target="_blank" class="dha2kod-whatsapp-btn"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Container -->
<div class="dha2kod-container">
    
    <!-- Section 1: Overview -->
    <section class="dha2kod-section">
        <div class="dha2kod-heading">
            <h2>Reliable Moving from the Coal Belt to Koderma</h2>
            <p>
                The corridor between Dhanbad and Koderma represents one of the most vital industrial and administrative arteries of Jharkhand, directly linking the mining hub of BCCL/ECL and IIT ISM Dhanbad with the thermal power projects (DVC Telaiya/KTPS) and mica trading network of Koderma.
            </p>
        </div>

        <div class="dha2kod-grid-two">
            <div>
                <h3 style="font-size: 1.5rem; font-weight: 700; color: #0f172a; margin-bottom: 16px;">Direct Express Highway Transit Across NH-19</h3>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Whether moving an executive bungalow in Koyla Nagar, shifting faculty residences from IIT ISM / Saraidhela, or relocating a commercial business near Bank More to Jhumri Telaiya, our experienced logistics network guarantees absolute cargo security and prompt delivery.
                </p>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Covering a distance of approximately <strong>145 to 155 km</strong> along the historic Grand Trunk Road (NH-19 / AH1) via Govindpur, Rajganj, Topchanchi, Bagodar, and Barhi, our dedicated container trucks complete the entire intercity move in just <strong>4 to 5.5 hours</strong> of smooth transit.
                </p>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    We never co-load or consolidate shipments with third-party cargo. Your goods enjoy a dedicated truck with private locking, ensuring zero transshipment risk, zero dust contamination, and immediate doorstep delivery on the very same day.
                </p>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7;">
                    Our trained moving crew handles everything: packing heavy furniture, electronics, and kitchen crockery, loading using modern equipment, safe road transport across NH-19, and full unloading, unboxing, and furniture assembly at your new home or commercial office in Koderma.
                </p>
            </div>
            <div class="dha2kod-img-box">
                <img src="https://www.shreeashirwadpackers.com/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated closed container truck for Dhanbad to Koderma shifting" loading="lazy">
            </div>
        </div>

        <!-- 3 Core Highlights -->
        <div class="dha2kod-grid-3">
            <div class="dha2kod-card">
                <div class="dha2kod-card-icon"><i class="fas fa-boxes"></i></div>
                <h3>5-Layer Protective Shield</h3>
                <p>
                    Every furniture item, large LED screen, and fragile kitchen porcelain piece is wrapped in thermal foam padding, multi-ply bubble wrap, corrugated sheets, and heavy-duty shrink film to neutralize highway vibrations.
                </p>
            </div>
            <div class="dha2kod-card">
                <div class="dha2kod-card-icon"><i class="fas fa-satellite-dish"></i></div>
                <h3>Real-Time Fleet GPS Tracking</h3>
                <p>
                    Track your consignment in real-time along NH-19. Our dedicated drivers operate company-owned vehicles equipped with electronic FASTag passes for swift toll clearance at Topchanchi and Bagodar.
                </p>
            </div>
            <div class="dha2kod-card">
                <div class="dha2kod-card-icon"><i class="fas fa-file-invoice"></i></div>
                <h3>BCCL, Railway &amp; PSU Billing</h3>
                <p>
                    Transferring under Bharat Coking Coal Limited (BCCL), Eastern Railway Dhanbad division, CIMFR, or DVC? We supply 100% compliant GST invoices, original consignment consignment notes (bilty), and stamped inventory documentation.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 2: Highway Logistics & Route Breakdown -->
    <section class="dha2kod-section alt-bg" style="border-radius: 16px; padding: 50px 30px;">
        <div class="dha2kod-grid-two reverse">
            <div>
                <h3 style="font-size: 1.65rem; font-weight: 800; color: #0f172a; margin-bottom: 18px;">Detailed Corridor Logistics: Dhanbad to Koderma</h3>
                <p style="font-size: 1rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Our operations desk plans every detail of the highway journey to guarantee on-time arrival without unexpected bottlenecks:
                </p>
                <ul class="dha2kod-logistics-list">
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Primary 6-Lane Expressway (NH-19 to Barhi, NH-20 to Koderma):</strong> Exiting Dhanbad via Memco More or Govindpur bypass, our trucks cruise along the newly widened 6-lane Grand Trunk expressway past Topchanchi Lake and Parasnath Hills before branching north towards Koderma. This provides the smoothest highway ride in Eastern India.
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Shortened Arterial via Bagodar &amp; Sariya (138 km):</strong> For urgent deliveries or light commercial vehicle consignments, this direct link through Bagodar cuts down road mileage and delivers goods within 4 hours.
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Zero Transshipment Guarantee:</strong> Once loaded and sealed at your Dhanbad premises, the vehicle container remains unopened until it reaches your doorstep in Koderma, Domchanch, or Telaiya.
                        </div>
                    </li>
                </ul>
            </div>
            <div class="dha2kod-img-box">
                <img src="https://www.shreeashirwadpackers.com/images/complete-household-packing-dhanbad.jpg" alt="Dhanbad to Koderma household packing and loading" loading="lazy">
            </div>
        </div>

        <div class="dha2kod-feature-box">
            <h3>Specialized Corporate &amp; Institutional Transfer Protocols</h3>
            <p>
                Dhanbad is the educational and mining powerhouse of Jharkhand, featuring premier institutions like IIT (ISM), CSIR-CIMFR, and the headquarters of BCCL. We understand the stringent shifting standards expected by professors, research scientists, and corporate managers:
            </p>
            <ul>
                <li>Extensive library collections, academic archives, and sensitive lab equipment are packed in moisture-resistant cartons with heavy-duty structural dividers.</li>
                <li>Comprehensive pre-move inventory auditing with tamper-evident digital barcode labeling on every carton box.</li>
                <li>Direct company reimbursement billing compliant with all PSU, central government, and autonomous institutional audit standards.</li>
                <li>Dedicated on-site carpenters and electricians to safely dismantle modular king-size beds, modular kitchen cabinets, and wall-mounted air conditioners before departure.</li>
                <li>Tailored relocation packages for engineers, technicians, and executives moving to Damodar Valley Corporation (DVC KTPS Banjhedih) and Grand Chord railway quarters in Koderma.</li>
            </ul>
        </div>
    </section>

    <!-- Section 3: Pricing Estimates -->
    <section class="dha2kod-section">
        <div class="dha2kod-heading">
            <h2>Dhanbad to Koderma Moving Cost Estimates</h2>
            <p>
                We provide clear, upfront pricing with zero hidden surcharges or surprise fees. Review our estimated rate table below:
            </p>
        </div>

        <div class="dha2kod-table-wrap">
            <table class="dha2kod-table">
                <thead>
                    <tr>
                        <th>Relocation Type</th>
                        <th>Standard Distance</th>
                        <th>Packaging Materials Used</th>
                        <th>Estimated Charges</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment Complete Move</strong></td>
                        <td>~150 km</td>
                        <td>Corrugated boxes, bubble wrap, stretch film</td>
                        <td class="dha2kod-price">₹8,000 - ₹13,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential House Shifting</strong></td>
                        <td>~150 km</td>
                        <td>Multi-layer packing, mattress covers, foam pads</td>
                        <td class="dha2kod-price">₹13,000 - ₹18,500</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Independent Villa Move</strong></td>
                        <td>~150 km</td>
                        <td>Premium 5-layer packing, wooden crates for glass</td>
                        <td class="dha2kod-price">₹17,500 - ₹25,500</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport (Bike / Scooter)</strong></td>
                        <td>~150 km</td>
                        <td>Foam wrap, bubble sheet, cardboard frame packing</td>
                        <td class="dha2kod-price">₹2,200 - ₹3,800</td>
                    </tr>
                    <tr>
                        <td><strong>Car Transportation (Hatchback / Sedan / SUV)</strong></td>
                        <td>~150 km</td>
                        <td>Dedicated hydraulic vehicle carrier, tire lockers</td>
                        <td class="dha2kod-price">₹5,500 - ₹9,000</td>
                    </tr>
                    <tr>
                        <td><strong>Commercial / Small Office Shifting</strong></td>
                        <td>~150 km</td>
                        <td>Anti-static bubble wrap, server boxes, file crates</td>
                        <td class="dha2kod-price">₹11,000 - ₹20,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.88rem; color: #64748b; margin-top: 14px; text-align: center;">
            *Exact rates depend on final cargo volume, floor level / lift availability, specialized packing requirements, and insurance declarations.
        </p>
    </section>

    <!-- Section 4: Vehicle Transport & Two-Wheeler Safety -->
    <section class="dha2kod-section alt-bg" style="border-radius: 16px; padding: 50px 30px;">
        <div class="dha2kod-heading">
            <h2>Vehicle Shifting: Cars, Motorbikes &amp; Scooters</h2>
            <p>Our fleet features dedicated carriers and specialized gear to protect high-value belongings and automobiles.</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
            <div class="dha2kod-card" style="padding: 0; overflow: hidden;">
                <img src="https://www.shreeashirwadpackers.com/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Two-wheeler bike parcel packaging for Dhanbad to Koderma move" style="width: 100%; height: 260px; object-fit: cover; display: block;" loading="lazy">
                <div style="padding: 24px;">
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Two-Wheeler Packaging &amp; Carrier Safety</h3>
                    <p style="font-size: 0.95rem; color: #475569; line-height: 1.6; margin-bottom: 10px;">
                        Motorcycles, sports bikes, and scooters are drained of surplus fuel for fire safety, mirrors are carefully unfastened and bubble wrapped, and heavy corrugated padding covers fuel tanks, exhausts, and body paintwork before tie-down strapping.
                    </p>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Bikes travel in closed carrier trucks anchored with four-point ratchet straps to ensure zero tilting or frame scratches.
                    </p>
                </div>
            </div>
            <div class="dha2kod-card" style="padding: 0; overflow: hidden;">
                <img src="https://www.shreeashirwadpackers.com/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car carrier ramp loading for Dhanbad to Koderma vehicle shifting" style="width: 100%; height: 260px; object-fit: cover; display: block;" loading="lazy">
                <div style="padding: 24px;">
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Enclosed Hydraulic Car Transportation</h3>
                    <p style="font-size: 0.95rem; color: #475569; line-height: 1.6; margin-bottom: 10px;">
                        Your automobile is loaded using hydraulic car ramps into covered trailers, secured with heavy-duty tire wheel stoppers. This safeguards your sedan or SUV from road dust, highway gravel, and bad weather throughout the trip.
                    </p>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Full vehicle pre-condition inspection reports are generated with digital photographs before loading and verified upon delivery.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Step-by-Step Moving Process -->
    <section class="dha2kod-section">
        <div class="dha2kod-heading">
            <h2>Our 4-Step Stress-Free Moving Process</h2>
            <p>A systematic relocation workflow guaranteeing punctuality, transparency, and complete cargo safety.</p>
        </div>

        <div class="dha2kod-steps">
            <div class="dha2kod-step">
                <div class="dha2kod-step-num">1</div>
                <h4>Free Survey &amp; Quote</h4>
                <p>We review your inventory list via phone, video call, or physical home inspection in Dhanbad and provide a guaranteed transparent price.</p>
            </div>
            <div class="dha2kod-step">
                <div class="dha2kod-step-num">2</div>
                <h4>Multi-Layer Packing</h4>
                <p>Our uniformed packing crew arrives on time with high-grade cartons, bubble wrap, and adhesive tapes, packing room by room meticulously.</p>
            </div>
            <div class="dha2kod-step">
                <div class="dha2kod-step-num">3</div>
                <h4>Secure Highway Transit</h4>
                <p>Goods are systematically stacked in dedicated containers, secured with cargo straps, and dispatched with continuous GPS tracking updates.</p>
            </div>
            <div class="dha2kod-step">
                <div class="dha2kod-step-num">4</div>
                <h4>Unloading &amp; Placement</h4>
                <p>Upon arrival in Koderma / Jhumri Telaiya, items are placed in designated rooms, furniture is reassembled, and packaging debris is cleared.</p>
            </div>
        </div>
    </section>

    <!-- Section 6: Localities Served in Dhanbad and Koderma -->
    <section class="dha2kod-section alt-bg" style="border-radius: 16px; padding: 50px 30px;">
        <div class="dha2kod-heading">
            <h2>Localities We Serve Across Dhanbad &amp; Koderma</h2>
            <p>Complete door-to-door coverage spanning every residential colony, railway colony, and industrial township.</p>
        </div>

        <div class="dha2kod-localities">
            <div class="dha2kod-loc-card">
                <h4><i class="fas fa-map-marker-alt"></i> Pickup Areas Across Dhanbad</h4>
                <ul>
                    <li><strong>Bank More &amp; Purana Bazar:</strong> Central commercial zones with expert packing crews experienced in handling high-volume retail and residences.</li>
                    <li><strong>Saraidhela &amp; Steel Gate:</strong> High-rise apartment complexes with specialized elevator packing and furniture maneuvering protocols.</li>
                    <li><strong>Koyla Nagar &amp; BCCL Townships:</strong> Executive residential quarters for Coal India managers, engineers, and administrative staff.</li>
                    <li><strong>Hirapur &amp; Park Market:</strong> Premier family neighborhoods, doctors, and legal professionals shifting across Jharkhand.</li>
                    <li><strong>IIT (ISM) Campus &amp; Luby Circular Road:</strong> Faculty transfers, student luggage parcel, and scientific laboratory relocation.</li>
                    <li><strong>Dhanbad Railway Colony &amp; Matkuria:</strong> Dedicated shifting services for railway personnel, loco pilots, and station administrative staff.</li>
                </ul>
            </div>
            <div class="dha2kod-loc-card">
                <h4><i class="fas fa-map-marker-alt"></i> Delivery Areas Across Koderma</h4>
                <ul>
                    <li><strong>Jhumri Telaiya &amp; Station Road:</strong> Commercial centers, apartment residences, and central railway colony quarters.</li>
                    <li><strong>Koderma Bazaar &amp; Collectorate:</strong> Administrative officers, judicial staff, and government employee residential complexes.</li>
                    <li><strong>Domchanch Mica Industrial Belt:</strong> Factory machinery shifting, business owner residences, and industrial facility relocations.</li>
                    <li><strong>KTPS Banjhedih &amp; DVC Colony:</strong> Turnkey relocation for Damodar Valley Corporation thermal power plant engineers.</li>
                    <li><strong>Chandwara &amp; Urwan Lake Tourism Zone:</strong> Outlying suburban villas, agricultural estates, and lakeside properties.</li>
                    <li><strong>Satgawan &amp; Jainagar Arterial Areas:</strong> Extended rural and regional delivery coverage across the entire Koderma district.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section class="dha2kod-section">
        <div class="dha2kod-heading">
            <h2>Frequently Asked Questions: Dhanbad to Koderma Moving</h2>
            <p>Clear, direct answers to common queries regarding your upcoming intercity relocation.</p>
        </div>

        <div class="dha2kod-faq-list">
            <div class="dha2kod-faq-item">
                <h3>What is the total transit duration from Dhanbad to Koderma?</h3>
                <p>The road distance is approximately 145 to 155 km along the 6-lane Grand Trunk Road (NH-19). Road transit takes about 4 to 5.5 hours. Same-day pickup and delivery are standard for almost all household shipments.</p>
            </div>
            <div class="dha2kod-faq-item">
                <h3>Do you supply GST invoices for BCCL and Eastern Railway transfer claims?</h3>
                <p>Yes, absolutely. We provide 100% compliant GST invoices, original consignment notes (bilty), complete inventory lists, and official money receipts accepted by BCCL, Eastern Railway, DVC, and public sector banks.</p>
            </div>
            <div class="dha2kod-faq-item">
                <h3>How do you safeguard double-door refrigerators and front-load washing machines?</h3>
                <p>Heavy home appliances are wrapped with custom foam edge corners, thick corrugated sheets, and air bubble wrapping. Washing machine drums are secured to prevent internal balance displacement during transit.</p>
            </div>
            <div class="dha2kod-faq-item">
                <h3>Is comprehensive transit insurance available?</h3>
                <p>Yes. We arrange comprehensive transit insurance through accredited national insurance providers, protecting your cargo against road accidents, transit overturning, and fire risks.</p>
            </div>
            <div class="dha2kod-faq-item">
                <h3>Can I transport my bike and car together with household furniture?</h3>
                <p>Yes. Two-wheelers can be loaded safely inside dedicated container trucks alongside furniture. For automobiles, we utilize specialized enclosed hydraulic car haulers.</p>
            </div>
            <div class="dha2kod-faq-item">
                <h3>Are there any hidden costs like driver tips or toll fees?</h3>
                <p>None whatsoever. Our written quotation clearly covers packing materials, labor, truck freight, driver allowances, and highway toll charges with zero unexpected add-ons.</p>
            </div>
            <div class="dha2kod-faq-item">
                <h3>How many days in advance should I confirm the booking?</h3>
                <p>We recommend booking 2 to 3 days ahead to secure your preferred morning packing slot, although emergency next-day moving requests are also supported.</p>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Banner -->
    <div class="dha2kod-cta-banner">
        <h2>Ready for a Seamless Move to Koderma?</h2>
        <p>Trust Shree Ashirwad Packers and Movers for dependable, insured intercity shifting between Dhanbad and Koderma.</p>
        <a href="tel:+919534499994" class="dha2kod-cta-btn"><i class="fas fa-phone-alt"></i> Call Now: +91 95344 99994</a>
    </div>
</div>

<!-- Structured Data Schemas -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MovingCompany",
  "name": "Shree Ashirwad Packers and Movers",
  "image": "https://www.shreeashirwadpackers.com/images/safe-transit-container-truck-ranchi.jpg",
  "@id": "https://www.shreeashirwadpackers.com/#movingcompany",
  "url": "https://www.shreeashirwadpackers.com",
  "telephone": "+919534499994",
  "priceRange": "₹₹",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Bank More, Near Overbridge",
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
  "name": "Dhanbad to Koderma Packers and Movers",
  "provider": {
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers",
    "url": "https://www.shreeashirwadpackers.com"
  },
  "areaServed": [
    {
      "@type": "City",
      "name": "Dhanbad"
    },
    {
      "@type": "City",
      "name": "Koderma"
    }
  ],
  "description": "Professional intercity relocation services from Dhanbad to Koderma including household shifting, car transportation, bike parcel, and corporate relocation.",
  "serviceType": "Intercity Relocation"
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
      "name": "Services",
      "item": "https://www.shreeashirwadpackers.com/services"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Dhanbad to Koderma Packers and Movers",
      "item": "https://www.shreeashirwadpackers.com/dhanbad-to-koderma-packers-and-movers"
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
      "name": "What is the total transit duration from Dhanbad to Koderma?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The road distance is approximately 145 to 155 km along the 6-lane Grand Trunk Road (NH-19). Road transit takes about 4 to 5.5 hours. Same-day pickup and delivery are standard for almost all household shipments."
      }
    },
    {
      "@type": "Question",
      "name": "Do you supply GST invoices for BCCL and Eastern Railway transfer claims?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, absolutely. We provide 100% compliant GST invoices, original consignment notes (bilty), complete inventory lists, and official money receipts accepted by BCCL, Eastern Railway, DVC, and public sector banks."
      }
    },
    {
      "@type": "Question",
      "name": "How do you safeguard double-door refrigerators and front-load washing machines?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Heavy home appliances are wrapped with custom foam edge corners, thick corrugated sheets, and air bubble wrapping. Washing machine drums are secured to prevent internal balance displacement during transit."
      }
    },
    {
      "@type": "Question",
      "name": "Is comprehensive transit insurance available?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We arrange comprehensive transit insurance through accredited national insurance providers, protecting your cargo against road accidents, transit overturning, and fire risks."
      }
    },
    {
      "@type": "Question",
      "name": "Can I transport my bike and car together with household furniture?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Two-wheelers can be loaded safely inside dedicated container trucks alongside furniture. For automobiles, we utilize specialized enclosed hydraulic car haulers."
      }
    },
    {
      "@type": "Question",
      "name": "Are there any hidden costs like driver tips or toll fees?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "None whatsoever. Our written quotation clearly covers packing materials, labor, truck freight, driver allowances, and highway toll charges with zero unexpected add-ons."
      }
    },
    {
      "@type": "Question",
      "name": "How many days in advance should I confirm the booking?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We recommend booking 2 to 3 days ahead to secure your preferred morning packing slot, although emergency next-day moving requests are also supported."
      }
    }
  ]
}
</script>

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
