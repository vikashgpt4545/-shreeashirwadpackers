<?php
/**
 * Page Name: Patna to Koderma Packers and Movers
 * Slug: patna-to-koderma-packers-and-movers
 * Purpose: Dedicated intercity relocation service page from Patna to Koderma
 * Status: Active & Production Ready
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}
// Route Specific Variables
$canonical_url = "https://www.shreeashirwadpackers.com/patna-to-koderma-packers-and-movers";
$page_title = "Patna to Koderma Packers and Movers | Safe Express Transit";
$meta_description = "Reliable Patna to Koderma packers and movers. Professional household shifting, car transport, bike parcel via NH-20 & Rajauli Pass with GPS tracking.";
$current_page = "patna-to-koderma-packers-and-movers";

// Open Graph
$og_title = "Patna to Koderma Packers and Movers | Shree Ashirwad Packers";
$og_description = "Verified Patna to Koderma packers and movers. Expert packing, GPS tracking, IBA approved billing, and zero damage guarantee.";
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
    <meta name="keywords" content="patna to koderma packers and movers, packers and movers patna to koderma, house shifting patna to koderma, patna to jhumri telaiya shifting, car transport patna to koderma, bike parcel patna to koderma, bihar to koderma movers">
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
/* Scoped Styles for Patna to Koderma Route */
.pat2kod-hero {
    background: linear-gradient(135deg, #091e3a 0%, #1e3a5f 60%, #1d4ed8 100%);
    color: #ffffff;
    padding: 60px 0 50px;
    position: relative;
    overflow: hidden;
}
.pat2kod-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: radial-gradient(circle at 80% 20%, rgba(245, 158, 11, 0.16) 0%, transparent 50%);
    pointer-events: none;
}
.pat2kod-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 2;
}
.pat2kod-breadcrumbs {
    font-size: 0.88rem;
    color: #cbd5e1;
    margin-bottom: 20px;
}
.pat2kod-breadcrumbs a {
    color: #93c5fd;
    text-decoration: none;
    transition: color 0.2s;
}
.pat2kod-breadcrumbs a:hover {
    color: #ffffff;
    text-decoration: underline;
}
.pat2kod-hero-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 40px;
    align-items: center;
}
.pat2kod-hero h1 {
    font-size: 2.6rem;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.pat2kod-hero h1 span {
    color: #fbbf24;
}
.pat2kod-hero-p {
    font-size: 1.12rem;
    line-height: 1.7;
    color: #e2e8f0;
    margin-bottom: 26px;
}
.pat2kod-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 28px;
}
.pat2kod-badge {
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
.pat2kod-badge i {
    color: #fbbf24;
}
.pat2kod-quick-quote {
    background: #ffffff;
    color: #1e293b;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.pat2kod-quick-quote h3 {
    font-size: 1.35rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 8px;
    text-align: center;
}
.pat2kod-quick-quote p {
    font-size: 0.92rem;
    color: #64748b;
    margin-bottom: 20px;
    text-align: center;
}
.pat2kod-call-btn {
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
.pat2kod-call-btn:hover {
    background: #d97706;
    color: #ffffff;
    transform: translateY(-2px);
}
.pat2kod-whatsapp-btn {
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
.pat2kod-whatsapp-btn:hover {
    background: #1eb854;
    color: #ffffff;
}

/* Content Sections */
.pat2kod-section {
    padding: 50px 0;
}
.pat2kod-section.alt-bg {
    background: #f8fafc;
}
.pat2kod-heading {
    text-align: center;
    margin-bottom: 40px;
}
.pat2kod-heading h2 {
    font-size: 2.1rem;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
    letter-spacing: -0.3px;
}
.pat2kod-heading p {
    font-size: 1.05rem;
    color: #64748b;
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Feature Cards */
.pat2kod-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
}
.pat2kod-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 28px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
    transition: transform 0.2s, box-shadow 0.2s;
}
.pat2kod-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);
}
.pat2kod-card-icon {
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
.pat2kod-card h3 {
    font-size: 1.22rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 12px;
}
.pat2kod-card p {
    font-size: 0.96rem;
    color: #475569;
    line-height: 1.65;
}

/* Two Column Layouts */
.pat2kod-grid-two {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 40px;
    align-items: center;
    margin-bottom: 45px;
}
.pat2kod-grid-two.reverse {
    grid-template-columns: 0.8fr 1.2fr;
}
.pat2kod-img-box {
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}
.pat2kod-img-box img {
    width: 100%;
    height: 320px;
    object-fit: cover;
    display: block;
}

/* Logistics List */
.pat2kod-logistics-list {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}
.pat2kod-logistics-list li {
    font-size: 0.98rem;
    color: #334155;
    padding: 8px 0;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    line-height: 1.5;
}
.pat2kod-logistics-list li i {
    color: #10b981;
    font-size: 1.15rem;
    margin-top: 2px;
}

/* Feature Box */
.pat2kod-feature-box {
    background: #f1f5f9;
    border-left: 4px solid #2563eb;
    border-radius: 0 12px 12px 0;
    padding: 24px;
    margin: 25px 0;
}
.pat2kod-feature-box h3 {
    font-size: 1.22rem;
    color: #0f172a;
    font-weight: 700;
    margin-bottom: 12px;
}
.pat2kod-feature-box ul {
    margin: 0;
    padding-left: 20px;
}
.pat2kod-feature-box li {
    font-size: 0.96rem;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 8px;
}

/* Pricing Table */
.pat2kod-table-wrap {
    overflow-x: auto;
    background: #ffffff;
    border-radius: 14px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
    border: 1px solid #e2e8f0;
}
.pat2kod-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}
.pat2kod-table th {
    background: #0f172a;
    color: #ffffff;
    padding: 16px 20px;
    font-size: 0.98rem;
    font-weight: 600;
}
.pat2kod-table td {
    padding: 16px 20px;
    border-bottom: 1px solid #e2e8f0;
    font-size: 0.95rem;
    color: #334155;
}
.pat2kod-table tr:last-child td {
    border-bottom: none;
}
.pat2kod-table tr:hover td {
    background: #f8fafc;
}
.pat2kod-price {
    font-weight: 700;
    color: #2563eb;
}

/* Process Steps */
.pat2kod-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin-top: 30px;
}
.pat2kod-step {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 26px 20px;
    text-align: center;
    position: relative;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
}
.pat2kod-step-num {
    width: 44px;
    height: 44px;
    background: #2563eb;
    color: #ffffff;
    border-radius: 50%;
    font-weight: 800;
    font-size: 1.2rem;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
}
.pat2kod-step h4 {
    font-size: 1.1rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}
.pat2kod-step p {
    font-size: 0.9rem;
    color: #64748b;
    line-height: 1.55;
    margin: 0;
}

/* Localities Grid */
.pat2kod-localities {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 28px;
    margin-top: 25px;
}
.pat2kod-loc-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 24px;
}
.pat2kod-loc-card h4 {
    font-size: 1.15rem;
    font-weight: 700;
    color: #1e3a8a;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.pat2kod-loc-card ul {
    margin: 0;
    padding-left: 20px;
}
.pat2kod-loc-card li {
    font-size: 0.94rem;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 6px;
}

/* FAQ Accordion */
.pat2kod-faq-list {
    max-width: 900px;
    margin: 0 auto;
}
.pat2kod-faq-item {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    margin-bottom: 16px;
    padding: 24px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
}
.pat2kod-faq-item h3 {
    font-size: 1.14rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}
.pat2kod-faq-item p {
    font-size: 0.96rem;
    color: #475569;
    line-height: 1.65;
    margin: 0;
}

/* CTA Footer Section */
.pat2kod-cta-banner {
    background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
    color: #ffffff;
    padding: 50px 30px;
    text-align: center;
    border-radius: 20px;
    margin: 40px 0;
}
.pat2kod-cta-banner h2 {
    font-size: 2.2rem;
    font-weight: 800;
    margin-bottom: 14px;
}
.pat2kod-cta-banner p {
    font-size: 1.1rem;
    color: #cbd5e1;
    max-width: 650px;
    margin: 0 auto 28px;
    line-height: 1.6;
}
.pat2kod-cta-btn {
    display: inline-block;
    background: #f59e0b;
    color: #ffffff;
    font-weight: 700;
    padding: 15px 36px;
    border-radius: 12px;
    text-decoration: none;
    font-size: 1.12rem;
    transition: background 0.2s, transform 0.2s;
    box-shadow: 0 6px 20px rgba(245, 158, 11, 0.4);
}
.pat2kod-cta-btn:hover {
    background: #d97706;
    color: #ffffff;
    transform: translateY(-2px);
}

/* Responsive */
@media (max-width: 991px) {
    .pat2kod-hero-grid,
    .pat2kod-grid-two,
    .pat2kod-grid-two.reverse {
        grid-template-columns: 1fr;
    }
    .pat2kod-grid-3 {
        grid-template-columns: repeat(2, 1fr);
    }
    .pat2kod-steps {
        grid-template-columns: repeat(2, 1fr);
    }
}
@media (max-width: 767px) {
    .pat2kod-hero h1 {
        font-size: 2rem;
    }
    .pat2kod-grid-3,
    .pat2kod-steps,
    .pat2kod-localities {
        grid-template-columns: 1fr;
    }
}
</style>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>


<!-- Hero Section -->
<section class="pat2kod-hero">
    <div class="pat2kod-container">
        <div class="pat2kod-breadcrumbs">
            <a href="https://www.shreeashirwadpackers.com/">Home</a> &raquo;
            <a href="https://www.shreeashirwadpackers.com/services">Services</a> &raquo;
            <span>Patna to Koderma Packers and Movers</span>
        </div>
        <div class="pat2kod-hero-grid">
            <div>
                <div class="pat2kod-badges">
                    <span class="pat2kod-badge"><i class="fas fa-shield-alt"></i> ISO 9001:2015 Certified</span>
                    <span class="pat2kod-badge"><i class="fas fa-truck-moving"></i> Dedicated Sealed Containers</span>
                    <span class="pat2kod-badge"><i class="fas fa-satellite"></i> GPS Active Tracking</span>
                    <span class="pat2kod-badge"><i class="fas fa-file-invoice-dollar"></i> Interstate e-Way Bill Compliant</span>
                </div>
                <h1>Patna to Koderma <span>Packers and Movers</span></h1>
                <p class="pat2kod-hero-p">
                    Relocating household goods, office assets, cars, or motorbikes from Patna (Kankarbagh, Boring Road, Bailey Road, or Danapur) to Koderma district (Jhumri Telaiya, Domchanch, or KTPS)? Shree Ashirwad Packers and Movers provides certified express intercity relocation via NH-20 and the scenic Rajauli Ghat pass. Experience 5-layer export packaging, dedicated sealed container trucks, zero transshipment, and seamless same-day or next-day delivery.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="tel:+919835565233" class="pat2kod-call-btn" style="width: auto; padding: 14px 28px;">
                        <i class="fas fa-phone-alt"></i> Call +91 98355 65233
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hi%2C%20I%20need%20a%20quote%20for%20relocation%20from%20Patna%20to%20Koderma." target="_blank" class="pat2kod-whatsapp-btn" style="width: auto; padding: 14px 28px;">
                        <i class="fab fa-whatsapp"></i> Instant WhatsApp Quote
                    </a>
                </div>
            </div>
            <div>
                <div class="pat2kod-quick-quote">
                    <h3>Get Free Relocation Estimate</h3>
                    <p>Transparent rates &bull; No hidden surcharges &bull; Dedicated move manager</p>
                    <a href="tel:+919835565233" class="pat2kod-call-btn"><i class="fas fa-headset"></i> Call Helpline: 98355 65233</a>
                    <a href="https://api.whatsapp.com/send?phone=918409531615&text=Patna%20to%20Koderma%20shifting%20quote%20request" target="_blank" class="pat2kod-whatsapp-btn"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Container -->
<div class="pat2kod-container">
    
    <!-- Section 1: Overview -->
    <section class="pat2kod-section">
        <div class="pat2kod-heading">
            <h2>Express Highway Relocation from Patna to Koderma</h2>
            <p>
                Bridging Bihar's capital city with Koderma's thriving commercial and mining hub across ~170 km in 5 to 7 hours of dependable highway transit via NH-20 and the Rajauli Ghat pass.
            </p>
        </div>

        <div class="pat2kod-grid-two">
            <div>
                <h3 style="font-size: 1.5rem; font-weight: 700; color: #0f172a; margin-bottom: 16px;">Direct Linehaul Transit via National Highway 20</h3>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Whether moving a multi-bedroom family house from Kankarbagh or Boring Road, transferring government officials, or returning to family roots in Jhumri Telaiya and Domchanch, our dedicated fleet ensures effortless intercity shifting.
                </p>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Our vehicles traverse south from Patna through Bakhtiyarpur or Masaurhi, passing Nawada and climbing through the Rajauli Ghati forest corridor into Jharkhand, directly connecting into Koderma and Jhumri Telaiya within <strong>5 to 7 hours</strong> of safe, steady driving.
                </p>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    We operate dedicated containerized vehicles with strict zero-transshipment protocols. Once packed and loaded in Patna, your container is sealed with tamper-proof numbered locks that are unlocked only in your presence at your destination address in Koderma.
                </p>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Our certified packing crews handle all aspects of dismantling wooden beds, double-bubble cushioning for glassware and porcelain crockery, anti-scratch wrapping for home appliances, and interstate e-Way bill compliance for smooth border transit into Jharkhand.
                </p>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7;">
                    Upon arrival at your residence in Jhumri Telaiya, Domchanch, or Koderma town, our destination staff carries out careful room-specific unloading, reassembly of modular wardrobes and cot frames, inventory verification against the consignment note, and removal of packing materials.
                </p>
            </div>
            <div class="pat2kod-img-box">
                <img src="https://www.shreeashirwadpackers.com/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated closed container truck for Patna to Koderma shifting" loading="lazy">
            </div>
        </div>

        <!-- 3 Core Highlights -->
        <div class="pat2kod-grid-3">
            <div class="pat2kod-card">
                <div class="pat2kod-card-icon"><i class="fas fa-boxes"></i></div>
                <h3>5-Layer Heavy-Duty Packaging</h3>
                <p>
                    Corrugated rolls, thick bubble wrap, corner foam bumpers, stretch film, and sealed virgin carton boxes protect your furniture, electronic gadgets, and fragile decor from shock, moisture, and road vibrations.
                </p>
            </div>
            <div class="pat2kod-card">
                <div class="pat2kod-card-icon"><i class="fas fa-satellite-dish"></i></div>
                <h3>Real-Time Highway GPS Tracking</h3>
                <p>
                    Monitor your truck live from Patna exit points through south Bihar into Jharkhand. Regular automated WhatsApp transit updates keep you informed at every milestone along the NH-20 corridor.
                </p>
            </div>
            <div class="pat2kod-card">
                <div class="pat2kod-card-icon"><i class="fas fa-file-invoice"></i></div>
                <h3>Interstate Tax &amp; GST Invoicing</h3>
                <p>
                    100% compliant GST invoices, original consignment bilty, and electronic national e-Way bills. Hassle-free documentation accepted by corporate employers, DVC, railways, and defense authorities for full shifting claims.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 2: Highway Logistics & Route Breakdown -->
    <section class="pat2kod-section alt-bg" style="border-radius: 16px; padding: 50px 30px;">
        <div class="pat2kod-grid-two reverse">
            <div>
                <h3 style="font-size: 1.65rem; font-weight: 800; color: #0f172a; margin-bottom: 18px;">Detailed Highway Route Analysis: Patna to Koderma (~170 km)</h3>
                <p style="font-size: 1rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Our operations desk plans every detail of the long-distance national highway journey to guarantee on-time arrival without unexpected bottlenecks:
                </p>
                <ul class="pat2kod-logistics-list">
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Primary Expressway Route (NH-20 / NH-31):</strong> Exiting Patna via New Bypass or Bailey Road onto NH-20 through Bihar Sharif and Nawada, climbing the newly widened Rajauli Ghati pass into Koderma.
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Rajauli Ghat Safety Protocol:</strong> The curvy mountain pass between Rajauli and Megatari border checkpoint is navigated during daytime by experienced hill drivers with low-gear control to prevent cargo tilt.
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Zero Transshipment Guarantee:</strong> Once loaded and sealed at your Patna premises, the vehicle container remains unopened until it reaches your doorstep in Koderma, Jhumri Telaiya, or Domchanch.
                        </div>
                    </li>
                </ul>
            </div>
            <div class="pat2kod-img-box">
                <img src="https://www.shreeashirwadpackers.com/images/complete-household-packing-dhanbad.jpg" alt="Patna to Koderma household packing and loading" loading="lazy">
            </div>
        </div>

        <div class="pat2kod-feature-box">
            <h3>Specialized Corporate, Government &amp; Family Relocation Protocols</h3>
            <p>
                Moving from Patna to Koderma involves civil servants, healthcare professionals, mining traders, DVC engineers, and returning families. We provide specialized relocation protocols:
            </p>
            <ul>
                <li>Complete disassembly of executive mahogany desks, heavy teak wardrobes, and modular workstation cubicles.</li>
                <li>Comprehensive pre-move inventory auditing with tamper-evident digital barcode labeling on every carton box.</li>
                <li>Direct company reimbursement billing compliant with all corporate HR, PSU, and central government audit standards.</li>
                <li>Dedicated on-site carpenters and electricians to safely dismantle modular king-size beds, modular kitchen cabinets, and wall-mounted air conditioners before departure.</li>
                <li>Tailored relocation packages for engineers, technicians, and trade merchants moving to residential neighborhoods across Koderma.</li>
            </ul>
        </div>
    </section>

    <!-- Section 3: Pricing Estimates -->
    <section class="pat2kod-section">
        <div class="pat2kod-heading">
            <h2>Patna to Koderma Moving Cost Estimates</h2>
            <p>
                We provide clear, upfront pricing with zero hidden surcharges or surprise fees. Review our estimated rate table below:
            </p>
        </div>

        <div class="pat2kod-table-wrap">
            <table class="pat2kod-table">
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
                        <td>~170 km</td>
                        <td>Corrugated boxes, bubble wrap, stretch film</td>
                        <td class="pat2kod-price">₹11,500 - ₹17,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential House Shifting</strong></td>
                        <td>~170 km</td>
                        <td>Multi-layer packing, mattress covers, foam pads</td>
                        <td class="pat2kod-price">₹16,500 - ₹24,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Independent Villa Move</strong></td>
                        <td>~170 km</td>
                        <td>Premium 5-layer packing, wooden crates for glass</td>
                        <td class="pat2kod-price">₹23,000 - ₹34,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport (Bike / Scooter)</strong></td>
                        <td>~170 km</td>
                        <td>Foam wrap, bubble sheet, cardboard frame packing</td>
                        <td class="pat2kod-price">₹2,800 - ₹4,500</td>
                    </tr>
                    <tr>
                        <td><strong>Car Transportation (Hatchback / Sedan / SUV)</strong></td>
                        <td>~170 km</td>
                        <td>Dedicated hydraulic vehicle carrier, tire lockers</td>
                        <td class="pat2kod-price">₹8,500 - ₹13,500</td>
                    </tr>
                    <tr>
                        <td><strong>Commercial / Corporate Office Shifting</strong></td>
                        <td>~170 km</td>
                        <td>Anti-static bubble wrap, server boxes, file crates</td>
                        <td class="pat2kod-price">₹16,000 - ₹32,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.88rem; color: #64748b; margin-top: 14px; text-align: center;">
            *Exact rates depend on final cargo volume, floor level / lift availability, specialized packing requirements, and insurance declarations.
        </p>
    </section>

    <!-- Section 4: Vehicle Transport & Two-Wheeler Safety -->
    <section class="pat2kod-section alt-bg" style="border-radius: 16px; padding: 50px 30px;">
        <div class="pat2kod-heading">
            <h2>Vehicle Shifting: Cars, Motorbikes &amp; Scooters</h2>
            <p>Our fleet features dedicated carriers and specialized gear to protect high-value belongings and automobiles.</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
            <div class="pat2kod-card" style="padding: 0; overflow: hidden;">
                <img src="https://www.shreeashirwadpackers.com/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Two-wheeler bike parcel packaging for Patna to Koderma move" style="width: 100%; height: 260px; object-fit: cover; display: block;" loading="lazy">
                <div style="padding: 24px;">
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Two-Wheeler Packaging &amp; Carrier Safety</h3>
                    <p style="font-size: 0.95rem; color: #475569; line-height: 1.6; margin-bottom: 10px;">
                        Motorcycles, sports bikes, and scooters are drained of surplus fuel for fire safety, mirrors are carefully unfastened and bubble wrapped, and heavy corrugated padding covers fuel tanks, exhausts, and body paintwork before tie-down strapping.
                    </p>
                    <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
                        Bikes travel in closed carrier trucks anchored with four-point ratchet straps to ensure zero tilting or frame scratches across the 170 km journey.
                    </p>
                </div>
            </div>
            <div class="pat2kod-card" style="padding: 0; overflow: hidden;">
                <img src="https://www.shreeashirwadpackers.com/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car carrier ramp loading for Patna to Koderma vehicle shifting" style="width: 100%; height: 260px; object-fit: cover; display: block;" loading="lazy">
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
    <section class="pat2kod-section">
        <div class="pat2kod-heading">
            <h2>Our 4-Stage Seamless Relocation Workflow</h2>
            <p>From initial booking in Patna to final placement in Koderma, every step is systematically monitored.</p>
        </div>

        <div class="pat2kod-steps">
            <div class="pat2kod-step">
                <div class="pat2kod-step-num">1</div>
                <h4>Free Survey &amp; Quote</h4>
                <p>Virtual video survey or on-site inventory check at your Patna residence, providing an all-inclusive transparent written quotation.</p>
            </div>
            <div class="pat2kod-step">
                <div class="pat2kod-step-num">2</div>
                <h4>5-Layer Export Packing</h4>
                <p>Skilled packers arrive with premium corrugated cartons, thermal bubble wrap, and crating tools for fragile goods and electronics.</p>
            </div>
            <div class="pat2kod-step">
                <div class="pat2kod-step-num">3</div>
                <h4>Sealed GPS Container Transit</h4>
                <p>Cargo is loaded into dedicated sealed containers with real-time GPS tracking along NH-20 from Patna into Koderma.</p>
            </div>
            <div class="pat2kod-step">
                <div class="pat2kod-step-num">4</div>
                <h4>Doorstep Setup &amp; Unpacking</h4>
                <p>Unloading, room placement, furniture assembly, and disposal of packing debris at your new residence in Koderma.</p>
            </div>
        </div>
    </section>

    <!-- Section 6: Localities Covered -->
    <section class="pat2kod-section alt-bg" style="border-radius: 16px; padding: 50px 30px;">
        <div class="pat2kod-heading">
            <h2>Comprehensive Area Coverage: Patna &amp; Koderma</h2>
            <p>We provide full pickup coverage across Patna metropolitan area and doorstep delivery throughout Koderma district.</p>
        </div>

        <div class="pat2kod-localities">
            <div class="pat2kod-loc-card">
                <h4><i class="fas fa-map-marker-alt"></i> Patna Origin Localities</h4>
                <ul>
                    <li><strong>South Patna:</strong> Kankarbagh, Hanuman Nagar, Rajendra Nagar, Kumhrar, and Mithapur.</li>
                    <li><strong>West &amp; Central Patna:</strong> Boring Road, Boring Canal Road, Bailey Road, Raja Bazar, and Ashiana Nagar.</li>
                    <li><strong>Danapur &amp; Khagaul:</strong> Saguna More, Danapur Cantt, RPS More, and Gola Road.</li>
                    <li><strong>North &amp; Riverfront:</strong> Fraser Road, Exhibition Road, Gandhi Maidan, and Patliputra Colony.</li>
                    <li><strong>Suburban Belts:</strong> Phulwari Sharif, Anisabad, Patna City, and Bypass areas.</li>
                </ul>
            </div>
            <div class="pat2kod-loc-card">
                <h4><i class="fas fa-city"></i> Koderma Destination Points</h4>
                <ul>
                    <li><strong>Jhumri Telaiya:</strong> Station Road, Ranchi-Patna Road, Gumo, Telaiya Dam colony, and Bypass Road.</li>
                    <li><strong>Koderma Town:</strong> District Collectorate area, Court Road, Block Campus, and Railway Colony.</li>
                    <li><strong>Domchanch:</strong> Main Market, Dhab Road, Mica Mining Cluster, and Nawada Road.</li>
                    <li><strong>KTPS (Banjhedih):</strong> DVC Power Plant Township, Staff Quarters, and surrounding settlements.</li>
                    <li><strong>Satgawan &amp; Chandwara:</strong> Rural and peri-urban residential belts across Koderma.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section 7: FAQs -->
    <section class="pat2kod-section">
        <div class="pat2kod-heading">
            <h2>Frequently Asked Questions &bull; Patna to Koderma Relocation</h2>
            <p>Clear answers to common questions about moving from Patna to Koderma.</p>
        </div>

        <div class="pat2kod-faq-list">
            <div class="pat2kod-faq-item">
                <h3>What is the total transit duration from Patna to Koderma?</h3>
                <p>The road distance is approximately 165 to 175 km along NH-20 via Nawada and Rajauli Ghati. Typical highway driving takes about 5 to 7 hours. With early morning loading in Patna, your shipment can reach Koderma the same evening or following morning.</p>
            </div>
            <div class="pat2kod-faq-item">
                <h3>Do you supply GST invoices and e-Way bills for government and corporate transfer claims?</h3>
                <p>Yes, absolutely. We provide 100% compliant GST tax invoices, consignment bilty, electronic national e-Way bills, and money receipts fully accepted by corporate HR departments, IT MNCs, DVC, railways, and government bodies for relocation allowance reimbursement.</p>
            </div>
            <div class="pat2kod-faq-item">
                <h3>How are fragile glass crockery, dinner sets, and LED TVs safeguarded?</h3>
                <p>Crockery is individually wrapped with shock-absorbing bubble film and packed in reinforced double-wall cartons with partition dividers. LED TVs are enclosed in high-density foam protectors and heavy wooden crates.</p>
            </div>
            <div class="pat2kod-faq-item">
                <h3>Is comprehensive transit insurance available?</h3>
                <p>Yes. We facilitate comprehensive transit insurance through reputed national general insurance companies covering accidental damage, transit overturn, and fire hazards throughout the interstate trip.</p>
            </div>
            <div class="pat2kod-faq-item">
                <h3>Can I transport my bike or car together with household furniture?</h3>
                <p>Yes. Two-wheelers can be safely crated and transported inside dedicated sealed container trucks alongside your home goods. For cars, we arrange dedicated covered hydraulic car carrier trucks with wheel chocks and transit insurance.</p>
            </div>
            <div class="pat2kod-faq-item">
                <h3>Are there any hidden costs like driver tips or toll fees?</h3>
                <p>None whatsoever. Our written quotation clearly covers packing materials, labor, truck freight, driver allowances, and highway toll charges with zero unexpected add-ons.</p>
            </div>
            <div class="pat2kod-faq-item">
                <h3>How many days in advance should I confirm the booking in Patna?</h3>
                <p>We recommend booking 2 to 3 days ahead to secure your preferred morning packing slot, although emergency next-day moving requests are also supported.</p>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Banner -->
    <div class="pat2kod-cta-banner">
        <h2>Ready for a Seamless Move to Koderma?</h2>
        <p>Trust Shree Ashirwad Packers and Movers for dependable, insured intercity shifting between Patna and Koderma.</p>
        <a href="tel:+919835565233" class="pat2kod-cta-btn"><i class="fas fa-phone-alt"></i> Call Now: +91 98355 65233</a>
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
  "name": "Patna to Koderma Packers and Movers",
  "provider": {
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers",
    "url": "https://www.shreeashirwadpackers.com"
  },
  "areaServed": [
    {
      "@type": "City",
      "name": "Patna"
    },
    {
      "@type": "City",
      "name": "Koderma"
    }
  ],
  "description": "Professional interstate relocation services from Patna to Koderma including household shifting, corporate relocation, car transportation, and bike parcel.",
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
      "name": "Patna to Koderma Packers and Movers",
      "item": "https://www.shreeashirwadpackers.com/patna-to-koderma-packers-and-movers"
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
      "name": "What is the total transit duration from Patna to Koderma?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The road distance is approximately 165 to 175 km along NH-20 via Nawada and Rajauli Ghati. Typical highway driving takes about 5 to 7 hours. With early morning loading in Patna, your shipment can reach Koderma the same evening or following morning."
      }
    },
    {
      "@type": "Question",
      "name": "Do you supply GST invoices and e-Way bills for government and corporate transfer claims?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, absolutely. We provide 100% compliant GST tax invoices, consignment bilty, electronic national e-Way bills, and money receipts fully accepted by corporate HR departments, IT MNCs, DVC, railways, and government bodies for relocation allowance reimbursement."
      }
    },
    {
      "@type": "Question",
      "name": "How are fragile glass crockery, dinner sets, and LED TVs safeguarded?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Crockery is individually wrapped with shock-absorbing bubble film and packed in reinforced double-wall cartons with partition dividers. LED TVs are enclosed in high-density foam protectors and heavy wooden crates."
      }
    },
    {
      "@type": "Question",
      "name": "Is comprehensive transit insurance available?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. We facilitate comprehensive transit insurance through reputed national general insurance companies covering accidental damage, transit overturn, and fire hazards throughout the interstate trip."
      }
    },
    {
      "@type": "Question",
      "name": "Can I transport my bike or car together with household furniture?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes. Two-wheelers can be safely crated and transported inside dedicated sealed container trucks alongside your home goods. For cars, we arrange dedicated covered hydraulic car carrier trucks with wheel chocks and transit insurance."
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
      "name": "How many days in advance should I confirm the booking in Patna?",
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
