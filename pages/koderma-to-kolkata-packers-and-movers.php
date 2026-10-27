<?php
/**
 * Page Name: Koderma to Kolkata Packers and Movers
 * Slug: koderma-to-kolkata-packers-and-movers
 * Purpose: Dedicated intercity relocation service page from Koderma to Kolkata
 * Status: Active & Production Ready
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}
// Route Specific Variables
$canonical_url = "https://www.shreeashirwadpackers.com/koderma-to-kolkata-packers-and-movers";
$page_title = "Koderma to Kolkata Packers and Movers | Safe Interstate Shifting";
$meta_description = "Reliable Koderma to Kolkata packers and movers. Professional household shifting, car transport, bike parcel, e-Way bill documentation via NH-19 GT Road.";
$current_page = "koderma-to-kolkata-packers-and-movers";

// Open Graph
$og_title = "Koderma to Kolkata Packers and Movers | Shree Ashirwad Packers";
$og_description = "Verified Koderma to Kolkata packers and movers. Expert packing, GPS tracking, IBA approved billing, and zero damage guarantee.";
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
    <meta name="keywords" content="koderma to kolkata packers and movers, packers and movers koderma to kolkata, house shifting koderma to kolkata, interstate relocation koderma to kolkata, car transport koderma to kolkata, bike parcel koderma to kolkata, jhumri telaiya to howrah movers">
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
/* Scoped Styles for Koderma to Kolkata Route */
.kod2kol-hero {
    background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 60%, #1e40af 100%);
    color: #ffffff;
    padding: 60px 0 50px;
    position: relative;
    overflow: hidden;
}
.kod2kol-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: radial-gradient(circle at 80% 20%, rgba(245, 158, 11, 0.15) 0%, transparent 50%);
    pointer-events: none;
}
.kod2kol-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 2;
}
.kod2kol-breadcrumbs {
    font-size: 0.88rem;
    color: #cbd5e1;
    margin-bottom: 20px;
}
.kod2kol-breadcrumbs a {
    color: #93c5fd;
    text-decoration: none;
    transition: color 0.2s;
}
.kod2kol-breadcrumbs a:hover {
    color: #ffffff;
    text-decoration: underline;
}
.kod2kol-hero-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 40px;
    align-items: center;
}
.kod2kol-hero h1 {
    font-size: 2.6rem;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.kod2kol-hero h1 span {
    color: #fbbf24;
}
.kod2kol-hero-p {
    font-size: 1.12rem;
    line-height: 1.7;
    color: #e2e8f0;
    margin-bottom: 26px;
}
.kod2kol-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 28px;
}
.kod2kol-badge {
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
.kod2kol-badge i {
    color: #fbbf24;
}
.kod2kol-quick-quote {
    background: #ffffff;
    color: #1e293b;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.kod2kol-quick-quote h3 {
    font-size: 1.35rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 8px;
    text-align: center;
}
.kod2kol-quick-quote p {
    font-size: 0.92rem;
    color: #64748b;
    margin-bottom: 20px;
    text-align: center;
}
.kod2kol-call-btn {
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
.kod2kol-call-btn:hover {
    background: #d97706;
    transform: translateY(-2px);
    color: #ffffff;
}
.kod2kol-whatsapp-btn {
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
.kod2kol-whatsapp-btn:hover {
    background: #1eb854;
    color: #ffffff;
}

/* Content Sections */
.kod2kol-section {
    padding: 50px 0;
}
.kod2kol-section.alt-bg {
    background: #f8fafc;
}
.kod2kol-heading {
    text-align: center;
    margin-bottom: 40px;
}
.kod2kol-heading h2 {
    font-size: 2.1rem;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
    letter-spacing: -0.3px;
}
.kod2kol-heading p {
    font-size: 1.05rem;
    color: #64748b;
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Feature Cards */
.kod2kol-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
}
.kod2kol-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 28px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
    transition: transform 0.2s, box-shadow 0.2s;
}
.kod2kol-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);
}
.kod2kol-card-icon {
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
.kod2kol-card h3 {
    font-size: 1.22rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 12px;
}
.kod2kol-card p {
    font-size: 0.96rem;
    color: #475569;
    line-height: 1.65;
}

/* Two Column Layouts */
.kod2kol-grid-two {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 40px;
    align-items: center;
    margin-bottom: 45px;
}
.kod2kol-grid-two.reverse {
    grid-template-columns: 0.8fr 1.2fr;
}
.kod2kol-img-box {
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}
.kod2kol-img-box img {
    width: 100%;
    height: 320px;
    object-fit: cover;
    display: block;
}

/* Logistics List */
.kod2kol-logistics-list {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}
.kod2kol-logistics-list li {
    font-size: 0.98rem;
    color: #334155;
    padding: 8px 0;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    line-height: 1.5;
}
.kod2kol-logistics-list li i {
    color: #10b981;
    font-size: 1.15rem;
    margin-top: 2px;
}

/* Feature Box */
.kod2kol-feature-box {
    background: #f1f5f9;
    border-left: 4px solid #2563eb;
    border-radius: 0 12px 12px 0;
    padding: 24px;
    margin: 25px 0;
}
.kod2kol-feature-box h3 {
    font-size: 1.22rem;
    color: #0f172a;
    font-weight: 700;
    margin-bottom: 12px;
}
.kod2kol-feature-box ul {
    margin: 0;
    padding-left: 20px;
}
.kod2kol-feature-box li {
    font-size: 0.96rem;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 8px;
}

/* Pricing Table */
.kod2kol-table-wrap {
    background: #ffffff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    border: 1px solid #e2e8f0;
    margin: 25px 0;
}
.kod2kol-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}
.kod2kol-table th {
    background: #1e3a8a;
    color: #ffffff;
    padding: 16px 20px;
    font-weight: 700;
    font-size: 0.98rem;
}
.kod2kol-table td {
    padding: 16px 20px;
    border-bottom: 1px solid #f1f5f9;
    color: #334155;
    font-size: 0.95rem;
}
.kod2kol-table tr:last-child td {
    border-bottom: none;
}
.kod2kol-table tr:hover td {
    background: #f8fafc;
}
.kod2kol-price {
    font-weight: 700;
    color: #059669;
}

/* Process Timeline */
.kod2kol-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin-top: 30px;
}
.kod2kol-step {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px;
    position: relative;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
}
.kod2kol-step-num {
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
.kod2kol-step h4 {
    font-size: 1.12rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}
.kod2kol-step p {
    font-size: 0.92rem;
    color: #64748b;
    line-height: 1.6;
}

/* Localities Grid */
.kod2kol-localities {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 28px;
    margin-top: 25px;
}
.kod2kol-loc-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 24px;
}
.kod2kol-loc-card h4 {
    font-size: 1.15rem;
    font-weight: 700;
    color: #1e3a8a;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.kod2kol-loc-card ul {
    margin: 0;
    padding-left: 20px;
}
.kod2kol-loc-card li {
    font-size: 0.94rem;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 6px;
}

/* FAQ Accordion */
.kod2kol-faq-list {
    max-width: 900px;
    margin: 0 auto;
}
.kod2kol-faq-item {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    margin-bottom: 16px;
    padding: 24px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
}
.kod2kol-faq-item h3 {
    font-size: 1.14rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}
.kod2kol-faq-item p {
    font-size: 0.96rem;
    color: #475569;
    line-height: 1.65;
    margin: 0;
}

/* CTA Footer Section */
.kod2kol-cta-banner {
    background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
    color: #ffffff;
    padding: 50px 30px;
    text-align: center;
    border-radius: 20px;
    margin: 40px 0;
}
.kod2kol-cta-banner h2 {
    font-size: 2.2rem;
    font-weight: 800;
    margin-bottom: 14px;
}
.kod2kol-cta-banner p {
    font-size: 1.08rem;
    color: #cbd5e1;
    max-width: 650px;
    margin: 0 auto 26px;
    line-height: 1.6;
}
.kod2kol-cta-btn {
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
.kod2kol-cta-btn:hover {
    background: #d97706;
    transform: translateY(-2px);
    color: #ffffff;
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .kod2kol-hero-grid {
        grid-template-columns: 1fr;
    }
    .kod2kol-grid-3 {
        grid-template-columns: 1fr;
    }
    .kod2kol-grid-two, .kod2kol-grid-two.reverse {
        grid-template-columns: 1fr;
    }
    .kod2kol-steps {
        grid-template-columns: 1fr 1fr;
    }
    .kod2kol-localities {
        grid-template-columns: 1fr;
    }
}
@media (max-width: 600px) {
    .kod2kol-hero h1 {
        font-size: 2rem;
    }
    .kod2kol-steps {
        grid-template-columns: 1fr;
    }
}
</style>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>


<!-- Hero Section -->
<section class="kod2kol-hero">
    <div class="kod2kol-container">
        <div class="kod2kol-breadcrumbs">
            <a href="https://www.shreeashirwadpackers.com/">Home</a> &raquo;
            <a href="https://www.shreeashirwadpackers.com/services">Services</a> &raquo;
            <span>Koderma to Kolkata Packers and Movers</span>
        </div>
        <div class="kod2kol-hero-grid">
            <div>
                <div class="kod2kol-badges">
                    <span class="kod2kol-badge"><i class="fas fa-shield-alt"></i> 100% Transit Insurance</span>
                    <span class="kod2kol-badge"><i class="fas fa-truck-moving"></i> Dedicated Closed Containers</span>
                    <span class="kod2kol-badge"><i class="fas fa-file-invoice-dollar"></i> Interstate e-Way Bill Compliant</span>
                </div>
                <h1>Koderma to Kolkata <span>Packers and Movers</span></h1>
                <p class="kod2kol-hero-p">
                    Relocating from Koderma (Jhumri Telaiya, Domchanch, or KTPS) to Kolkata, Salt Lake, New Town, or Howrah? Shree Ashirwad Packers and Movers delivers certified, seamless interstate moving across the NH-19 Grand Trunk expressway. Benefit from 5-layer export-grade packing, weather-sealed GPS trucks, seamless West Bengal border permits, and doorstep unboxing.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="tel:+919835565233" class="kod2kol-call-btn" style="width: auto; padding: 14px 28px;">
                        <i class="fas fa-phone-alt"></i> Call +91 98355 65233
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hi%2C%20I%20need%20a%20quote%20for%20relocation%20from%20Koderma%20to%20Kolkata." target="_blank" class="kod2kol-whatsapp-btn" style="width: auto; padding: 14px 28px;">
                        <i class="fab fa-whatsapp"></i> Instant WhatsApp Quote
                    </a>
                </div>
            </div>
            <div>
                <div class="kod2kol-quick-quote">
                    <h3>Get Free Relocation Estimate</h3>
                    <p>Transparent rates &bull; No hidden surcharges &bull; Dedicated move manager</p>
                    <a href="tel:+919835565233" class="kod2kol-call-btn"><i class="fas fa-headset"></i> Call Helpline: 98355 65233</a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Koderma%20to%20Kolkata%20shifting%20quote%20request" target="_blank" class="kod2kol-whatsapp-btn"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Container -->
<div class="kod2kol-container">
    
    <!-- Section 1: Overview -->
    <section class="kod2kol-section">
        <div class="kod2kol-heading">
            <h2>Trusted Interstate Moving from Koderma to the City of Joy</h2>
            <p>
                The corridor connecting Koderma with Kolkata spans approximately 400 to 415 km across the Grand Trunk Road (NH-19 / AH1). As families, business executives, railway personnel, and DVC engineers relocate to the metropolitan hub of West Bengal, Shree Ashirwad Packers and Movers delivers unmatched safety and professional precision.
            </p>
        </div>

        <div class="kod2kol-grid-two">
            <div>
                <h3 style="font-size: 1.5rem; font-weight: 700; color: #0f172a; margin-bottom: 16px;">Direct Highway Express Linehaul via NH-19</h3>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Whether moving an executive residence from Jhumri Telaiya, transferring from Koderma Junction railway quarters, or relocating corporate assets from Domchanch to Kolkata's IT hubs in Sector V Salt Lake and Action Area New Town, our end-to-end relocation system guarantees zero damage and punctual delivery.
                </p>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Crossing Barhi onto NH-19, our dedicated containerized trucks cruise past Bagodar, Dhanbad, Asansol, Durgapur, and Dankuni into the greater Kolkata metropolitan area in just <strong>9 to 11 hours</strong> of road journey.
                </p>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    We never co-load or consolidate shipments with third-party freight. Your household goods travel in dedicated, tamper-sealed closed containers under comprehensive transit insurance and electronic FASTag clearance.
                </p>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7;">
                    Our trained packing crew manages every detail: modular bed and wardrobe dismantling, anti-static IT equipment packing, double-bubble crockery protection, interstate e-Way bill documentation, and complete unloading and furniture setup at your new Kolkata home.
                </p>
            </div>
            <div class="kod2kol-img-box">
                <img src="https://www.shreeashirwadpackers.com/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated closed container truck for Koderma to Kolkata shifting" loading="lazy">
            </div>
        </div>

        <!-- 3 Core Highlights -->
        <div class="kod2kol-grid-3">
            <div class="kod2kol-card">
                <div class="kod2kol-card-icon"><i class="fas fa-boxes"></i></div>
                <h3>5-Layer Protective Shield</h3>
                <p>
                    Every furniture item, large LED screen, and fragile kitchen porcelain piece is wrapped in thermal foam padding, multi-ply bubble wrap, corrugated sheets, and heavy-duty shrink film to neutralize highway vibrations.
                </p>
            </div>
            <div class="kod2kol-card">
                <div class="kod2kol-card-icon"><i class="fas fa-satellite-dish"></i></div>
                <h3>Real-Time Fleet GPS Tracking</h3>
                <p>
                    Track your consignment in real-time along the Grand Trunk Road. Our dedicated drivers operate company-owned vehicles equipped with electronic FASTag passes for swift toll clearance at Barhi, Topchanchi, and Dankuni plazas.
                </p>
            </div>
            <div class="kod2kol-card">
                <div class="kod2kol-card-icon"><i class="fas fa-file-invoice"></i></div>
                <h3>Interstate Tax &amp; GST Compliance</h3>
                <p>
                    Relocating across state borders requires valid GST documentation and electronic e-Way bills. We generate 100% compliant documentation, eliminating checkpoint stoppages at the Jharkhand-West Bengal border.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 2: Highway Logistics & Route Breakdown -->
    <section class="kod2kol-section alt-bg" style="border-radius: 16px; padding: 50px 30px;">
        <div class="kod2kol-grid-two reverse">
            <div>
                <h3 style="font-size: 1.65rem; font-weight: 800; color: #0f172a; margin-bottom: 18px;">Detailed Highway Route Analysis: Koderma to Kolkata (~410 km)</h3>
                <p style="font-size: 1rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Our operations desk plans every detail of the interstate highway journey to guarantee on-time arrival without unexpected bottlenecks:
                </p>
                <ul class="kod2kol-logistics-list">
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Primary 6-Lane Expressway (NH-20 to Barhi, NH-19 to Kolkata):</strong> Exiting Koderma via Jhumri Telaiya, the vehicle connects with NH-20 at Barhi junction and joins the broad 6-lane Grand Trunk Road. The route bypasses Bagodar, Govindpur, Asansol, and Durgapur, crossing into West Bengal via Chirkunda / Barakar border into Dankuni.
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Kolkata No-Entry Management:</strong> Commercial trucks are subject to daytime traffic restrictions within Kolkata municipal limits. We schedule departures from Koderma in the early morning so our vehicles cross Dankuni toll gate in late evening, delivering smoothly to your apartment complex.
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Delta Weather &amp; Moisture Protection:</strong> Kolkata's humid coastal climate requires extra moisture defense. We wrap all wooden furnishings, upholstery, and mattresses in waterproof stretch film to prevent dampness.
                        </div>
                    </li>
                </ul>
            </div>
            <div class="kod2kol-img-box">
                <img src="https://www.shreeashirwadpackers.com/images/complete-household-packing-dhanbad.jpg" alt="Koderma to Kolkata household packing and loading" loading="lazy">
            </div>
        </div>

        <div class="kod2kol-feature-box">
            <h3>Specialized Corporate &amp; Railway Transfer Protocols</h3>
            <p>
                Koderma is a key railway node on the East Central Railway Grand Chord line and home to DVC KTPS thermal power projects. Many families and professionals transfer to Eastern Railway headquarters in Fairlie Place, Kolkata, or IT firms in Salt Lake Sector V:
            </p>
            <ul>
                <li>Complete disassembly of executive mahogany desks, heavy teak wardrobes, and modular workstation cubicles.</li>
                <li>Comprehensive pre-move inventory auditing with tamper-evident digital barcode labeling on every carton box.</li>
                <li>Direct company reimbursement billing compliant with all state government, civil administration, railway, and PSU audit standards.</li>
                <li>Dedicated on-site carpenters and electricians to safely dismantle modular king-size beds, modular kitchen cabinets, and wall-mounted air conditioners before departure.</li>
                <li>Tailored relocation packages for engineers, technicians, and corporate executives moving to Kolkata and surrounding satellite townships.</li>
            </ul>
        </div>
    </section>

    <!-- Section 3: Pricing Estimates -->
    <section class="kod2kol-section">
        <div class="kod2kol-heading">
            <h2>Koderma to Kolkata Moving Cost Estimates</h2>
            <p>
                We provide clear, upfront pricing with zero hidden surcharges or surprise fees. Review our estimated rate table below:
            </p>
        </div>

        <div class="kod2kol-table-wrap">
            <table class="kod2kol-table">
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
                        <td>~410 km</td>
                        <td>Corrugated boxes, bubble wrap, stretch film</td>
                        <td class="kod2kol-price">₹14,500 - ₹21,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential House Shifting</strong></td>
                        <td>~410 km</td>
                        <td>Multi-layer packing, mattress covers, foam pads</td>
                        <td class="kod2kol-price">₹21,000 - ₹29,500</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Independent Villa Move</strong></td>
                        <td>~410 km</td>
                        <td>Premium 5-layer packing, wooden crates for glass</td>
                        <td class="kod2kol-price">₹28,500 - ₹39,500</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport (Bike / Scooter)</strong></td>
                        <td>~410 km</td>
                        <td>Foam wrap, bubble sheet, cardboard frame packing</td>
                        <td class="kod2kol-price">₹3,500 - ₹5,800</td>
                    </tr>
                    <tr>
                        <td><strong>Car Transportation (Hatchback / Sedan / SUV)</strong></td>
                        <td>~410 km</td>
                        <td>Dedicated hydraulic vehicle carrier, tire lockers</td>
                        <td class="kod2kol-price">₹9,500 - ₹15,000</td>
                    </tr>
                    <tr>
                        <td><strong>Commercial / Small Office Shifting</strong></td>
                        <td>~410 km</td>
                        <td>Anti-static bubble wrap, server boxes, file crates</td>
                        <td class="kod2kol-price">₹18,000 - ₹32,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.88rem; color: #64748b; margin-top: 14px; text-align: center;">
            *Exact rates depend on final cargo volume, floor level / lift availability, specialized packing requirements, and insurance declarations.
        </p>
    </section>

    <!-- Section 4: Vehicle Transport & Two-Wheeler Safety -->
    <section class="kod2kol-section alt-bg" style="border-radius: 16px; padding: 50px 30px;">
        <div class="kod2kol-heading">
            <h2>Vehicle Shifting: Cars, Motorbikes &amp; Scooters</h2>
            <p>Our fleet features dedicated carriers and specialized gear to protect high-value belongings and automobiles.</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
            <div class="kod2kol-card" style="padding: 0; overflow: hidden;">
                <img src="https://www.shreeashirwadpackers.com/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Two-wheeler bike parcel packaging for Koderma to Kolkata move" style="width: 100%; height: 260px; object-fit: cover; display: block;" loading="lazy">
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
            <div class="kod2kol-card" style="padding: 0; overflow: hidden;">
                <img src="https://www.shreeashirwadpackers.com/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car carrier ramp loading for Koderma to Kolkata vehicle shifting" style="width: 100%; height: 260px; object-fit: cover; display: block;" loading="lazy">
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
    <section class="kod2kol-section">
        <div class="kod2kol-heading">
            <h2>Our 4-Step Stress-Free Moving Process</h2>
            <p>A systematic relocation workflow guaranteeing punctuality, transparency, and complete cargo safety.</p>
        </div>

        <div class="kod2kol-steps">
            <div class="kod2kol-step">
                <div class="kod2kol-step-num">1</div>
                <h4>Free Survey &amp; Quote</h4>
                <p>We review your inventory list via phone, video call, or physical home inspection in Koderma and provide a guaranteed transparent price.</p>
            </div>
            <div class="kod2kol-step">
                <div class="kod2kol-step-num">2</div>
                <h4>Multi-Layer Packing</h4>
                <p>Our uniformed packing crew arrives on time with high-grade cartons, bubble wrap, and adhesive tapes, packing room by room meticulously.</p>
            </div>
            <div class="kod2kol-step">
                <div class="kod2kol-step-num">3</div>
                <h4>Interstate Highway Transit</h4>
                <p>Goods are systematically stacked in dedicated containers, secured with cargo straps, and dispatched with continuous GPS tracking updates.</p>
            </div>
            <div class="kod2kol-step">
                <div class="kod2kol-step-num">4</div>
                <h4>Unloading &amp; Placement</h4>
                <p>Upon arrival in Kolkata, items are placed in designated rooms, furniture is reassembled, and packaging debris is cleared.</p>
            </div>
        </div>
    </section>

    <!-- Section 6: Localities Served in Koderma and Kolkata -->
    <section class="kod2kol-section alt-bg" style="border-radius: 16px; padding: 50px 30px;">
        <div class="kod2kol-heading">
            <h2>Localities We Serve Across Koderma &amp; Kolkata</h2>
            <p>Complete door-to-door coverage spanning every residential colony, IT township, and metropolitan borough.</p>
        </div>

        <div class="kod2kol-localities">
            <div class="kod2kol-loc-card">
                <h4><i class="fas fa-map-marker-alt"></i> Pickup Areas Across Koderma</h4>
                <ul>
                    <li><strong>Jhumri Telaiya &amp; Station Road:</strong> Commercial centers, apartment residences, and central railway colony quarters.</li>
                    <li><strong>Koderma Bazaar &amp; Collectorate:</strong> Administrative officers, judicial staff, and government employee residential complexes.</li>
                    <li><strong>Domchanch Mica Industrial Belt:</strong> Factory machinery shifting, business owner residences, and industrial facility relocations.</li>
                    <li><strong>KTPS Banjhedih &amp; DVC Colony:</strong> Turnkey relocation for Damodar Valley Corporation thermal power plant engineers.</li>
                    <li><strong>Chandwara &amp; Urwan Lake Tourism Zone:</strong> Outlying suburban villas, agricultural estates, and lakeside properties.</li>
                    <li><strong>Satgawan &amp; Jainagar Arterial Areas:</strong> Extended rural and regional delivery coverage across the entire Koderma district.</li>
                </ul>
            </div>
            <div class="kod2kol-loc-card">
                <h4><i class="fas fa-map-marker-alt"></i> Delivery Areas Across Kolkata</h4>
                <ul>
                    <li><strong>Salt Lake (Bidhannagar) &amp; New Town:</strong> Sectors I through V, Action Area I, II &amp; III, DLF, and IT corporate residences.</li>
                    <li><strong>Rajarhat, Chinar Park &amp; Kaikhali:</strong> Modern gated housing societies and high-rise apartment complexes near the airport.</li>
                    <li><strong>South Kolkata (Alipore, Ballygunge &amp; Jadavpur):</strong> Heritage residential estates, doctors, advocates, and luxury apartments.</li>
                    <li><strong>Howrah, Shibpur &amp; Salkia:</strong> Commercial merchants, industrial warehouses, and riverfront residential neighborhoods.</li>
                    <li><strong>EM Bypass, Ruby &amp; Garia:</strong> Fast-growing residential corridors with broad access for large moving containers.</li>
                    <li><strong>North Kolkata (Shyambazar &amp; Dum Dum):</strong> Traditional residential quarters with dedicated narrow-lane shuttle support.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section class="kod2kol-section">
        <div class="kod2kol-heading">
            <h2>Frequently Asked Questions: Koderma to Kolkata Moving</h2>
            <p>Clear, direct answers to common queries regarding your upcoming interstate relocation.</p>
        </div>

        <div class="kod2kol-faq-list">
            <div class="kod2kol-faq-item">
                <h3>What is the total transit duration from Koderma to Kolkata?</h3>
                <p>The road distance is approximately 400 to 415 km along the 6-lane Grand Trunk Road (NH-19). Road transit takes about 9 to 11 hours. Standard household shipments are delivered within 24 to 36 hours from packing completion.</p>
            </div>
            <div class="kod2kol-faq-item">
                <h3>Do you supply GST invoices and e-Way bills for corporate and railway transfer claims?</h3>
                <p>Yes, absolutely. We provide 100% compliant GST invoices, original consignment notes (bilty), electronic e-Way bills, and official money receipts accepted by Eastern Railway, DVC, and corporate HR departments.</p>
            </div>
            <div class="kod2kol-faq-item">
                <h3>How do you safeguard double-door refrigerators and front-load washing machines?</h3>
                <p>Heavy home appliances are wrapped with custom foam edge corners, thick corrugated sheets, and air bubble wrapping. Washing machine drums are secured to prevent internal balance displacement during transit.</p>
            </div>
            <div class="kod2kol-faq-item">
                <h3>Is comprehensive transit insurance available?</h3>
                <p>Yes. We arrange comprehensive transit insurance through accredited national insurance providers, protecting your cargo against road accidents, transit overturning, and fire risks.</p>
            </div>
            <div class="kod2kol-faq-item">
                <h3>Can I transport my bike and car together with household furniture?</h3>
                <p>Yes. Two-wheelers can be loaded safely inside dedicated container trucks alongside furniture. For automobiles, we utilize specialized enclosed hydraulic car haulers.</p>
            </div>
            <div class="kod2kol-faq-item">
                <h3>Are there any hidden costs like driver tips or toll fees?</h3>
                <p>None whatsoever. Our written quotation clearly covers packing materials, labor, truck freight, driver allowances, and highway toll charges with zero unexpected add-ons.</p>
            </div>
            <div class="kod2kol-faq-item">
                <h3>How many days in advance should I confirm the booking?</h3>
                <p>We recommend booking 2 to 3 days ahead to secure your preferred morning packing slot, although emergency next-day moving requests are also supported.</p>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Banner -->
    <div class="kod2kol-cta-banner">
        <h2>Ready for a Seamless Move to Kolkata?</h2>
        <p>Trust Shree Ashirwad Packers and Movers for dependable, insured interstate shifting between Koderma and Kolkata.</p>
        <a href="tel:+919835565233" class="kod2kol-cta-btn"><i class="fas fa-phone-alt"></i> Call Now: +91 98355 65233</a>
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
  "telephone": "+91 9835565233",
  "priceRange": "₹₹",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Station Road, Jhumri Telaiya",
    "addressLocality": "Koderma",
    "addressRegion": "Jharkhand",
    "postalCode": "825409",
    "addressCountry": "IN"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 24.4337,
    "longitude": 85.5312
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
  "name": "Koderma to Kolkata Packers and Movers",
  "provider": {
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers",
    "url": "https://www.shreeashirwadpackers.com"
  },
  "areaServed": [
    {
      "@type": "City",
      "name": "Koderma"
    },
    {
      "@type": "City",
      "name": "Kolkata"
    }
  ],
  "description": "Professional interstate relocation services from Koderma to Kolkata including household shifting, car transportation, bike parcel, and corporate relocation.",
  "serviceType": "Interstate Relocation"
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
      "name": "Koderma to Kolkata Packers and Movers",
      "item": "https://www.shreeashirwadpackers.com/koderma-to-kolkata-packers-and-movers"
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
      "name": "What is the total transit duration from Koderma to Kolkata?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The road distance is approximately 400 to 415 km along the 6-lane Grand Trunk Road (NH-19). Road transit takes about 9 to 11 hours. Standard household shipments are delivered within 24 to 36 hours from packing completion."
      }
    },
    {
      "@type": "Question",
      "name": "Do you supply GST invoices and e-Way bills for corporate and railway transfer claims?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, absolutely. We provide 100% compliant GST invoices, original consignment notes (bilty), electronic e-Way bills, and official money receipts accepted by Eastern Railway, DVC, and corporate HR departments."
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
