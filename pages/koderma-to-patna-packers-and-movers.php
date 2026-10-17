<?php
/**
 * Page Name: Koderma to Patna Packers and Movers
 * Slug: koderma-to-patna-packers-and-movers
 * Purpose: Dedicated intercity relocation service page from Koderma to Patna
 * Status: Active & Production Ready
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}
// Route Specific Variables
$canonical_url = "https://www.shreeashirwadpackers.com/koderma-to-patna-packers-and-movers";
$page_title = "Koderma to Patna Packers and Movers | Safe Household Shifting";
$meta_description = "Affordable Koderma to Patna packers and movers. Professional household shifting, car transport, bike parcel via NH-20 Rajauli Ghati & Bakhtiyarpur 4-lane.";
$current_page = "koderma-to-patna-packers-and-movers";

// Open Graph
$og_title = "Koderma to Patna Packers and Movers | Shree Ashirwad Packers";
$og_description = "Verified Koderma to Patna packers and movers. Expert packing, GPS tracking, IBA approved billing, and zero damage guarantee.";
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
    <meta name="keywords" content="koderma to patna packers and movers, packers and movers koderma to patna, house shifting koderma to patna, koderma to bihar relocation, car transport koderma to patna, bike parcel koderma to patna, jhumri telaiya to kankarbagh movers">
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
/* Scoped Styles for Koderma to Patna Route */
.kod2pat-hero {
    background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 60%, #1e40af 100%);
    color: #ffffff;
    padding: 60px 0 50px;
    position: relative;
    overflow: hidden;
}
.kod2pat-hero::before {
    content: '';
    position: absolute;
    top: 0; left: 0; right: 0; bottom: 0;
    background: radial-gradient(circle at 80% 20%, rgba(245, 158, 11, 0.15) 0%, transparent 50%);
    pointer-events: none;
}
.kod2pat-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    position: relative;
    z-index: 2;
}
.kod2pat-breadcrumbs {
    font-size: 0.88rem;
    color: #cbd5e1;
    margin-bottom: 20px;
}
.kod2pat-breadcrumbs a {
    color: #93c5fd;
    text-decoration: none;
    transition: color 0.2s;
}
.kod2pat-breadcrumbs a:hover {
    color: #ffffff;
    text-decoration: underline;
}
.kod2pat-hero-grid {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 40px;
    align-items: center;
}
.kod2pat-hero h1 {
    font-size: 2.6rem;
    font-weight: 800;
    line-height: 1.2;
    margin-bottom: 18px;
    letter-spacing: -0.5px;
}
.kod2pat-hero h1 span {
    color: #fbbf24;
}
.kod2pat-hero-p {
    font-size: 1.12rem;
    line-height: 1.7;
    color: #e2e8f0;
    margin-bottom: 26px;
}
.kod2pat-badges {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 28px;
}
.kod2pat-badge {
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
.kod2pat-badge i {
    color: #fbbf24;
}
.kod2pat-quick-quote {
    background: #ffffff;
    color: #1e293b;
    border-radius: 16px;
    padding: 30px;
    box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
    border: 1px solid rgba(255, 255, 255, 0.1);
}
.kod2pat-quick-quote h3 {
    font-size: 1.35rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 8px;
    text-align: center;
}
.kod2pat-quick-quote p {
    font-size: 0.92rem;
    color: #64748b;
    margin-bottom: 20px;
    text-align: center;
}
.kod2pat-call-btn {
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
.kod2pat-call-btn:hover {
    background: #d97706;
    transform: translateY(-2px);
    color: #ffffff;
}
.kod2pat-whatsapp-btn {
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
.kod2pat-whatsapp-btn:hover {
    background: #1eb854;
    color: #ffffff;
}

/* Content Sections */
.kod2pat-section {
    padding: 50px 0;
}
.kod2pat-section.alt-bg {
    background: #f8fafc;
}
.kod2pat-heading {
    text-align: center;
    margin-bottom: 40px;
}
.kod2pat-heading h2 {
    font-size: 2.1rem;
    font-weight: 800;
    color: #0f172a;
    margin-bottom: 12px;
    letter-spacing: -0.3px;
}
.kod2pat-heading p {
    font-size: 1.05rem;
    color: #64748b;
    max-width: 800px;
    margin: 0 auto;
    line-height: 1.6;
}

/* Feature Cards */
.kod2pat-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 28px;
}
.kod2pat-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 28px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.04);
    transition: transform 0.2s, box-shadow 0.2s;
}
.kod2pat-card:hover {
    transform: translateY(-4px);
    box-shadow: 0 12px 25px rgba(0, 0, 0, 0.08);
}
.kod2pat-card-icon {
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
.kod2pat-card h3 {
    font-size: 1.22rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 12px;
}
.kod2pat-card p {
    font-size: 0.96rem;
    color: #475569;
    line-height: 1.65;
}

/* Two Column Layouts */
.kod2pat-grid-two {
    display: grid;
    grid-template-columns: 1.2fr 0.8fr;
    gap: 40px;
    align-items: center;
    margin-bottom: 45px;
}
.kod2pat-grid-two.reverse {
    grid-template-columns: 0.8fr 1.2fr;
}
.kod2pat-img-box {
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
}
.kod2pat-img-box img {
    width: 100%;
    height: 320px;
    object-fit: cover;
    display: block;
}

/* Logistics List */
.kod2pat-logistics-list {
    list-style: none;
    padding: 0;
    margin: 20px 0;
}
.kod2pat-logistics-list li {
    font-size: 0.98rem;
    color: #334155;
    padding: 8px 0;
    display: flex;
    align-items: flex-start;
    gap: 12px;
    line-height: 1.5;
}
.kod2pat-logistics-list li i {
    color: #10b981;
    font-size: 1.15rem;
    margin-top: 2px;
}

/* Feature Box */
.kod2pat-feature-box {
    background: #f1f5f9;
    border-left: 4px solid #2563eb;
    border-radius: 0 12px 12px 0;
    padding: 24px;
    margin: 25px 0;
}
.kod2pat-feature-box h3 {
    font-size: 1.22rem;
    color: #0f172a;
    font-weight: 700;
    margin-bottom: 12px;
}
.kod2pat-feature-box ul {
    margin: 0;
    padding-left: 20px;
}
.kod2pat-feature-box li {
    font-size: 0.96rem;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 8px;
}

/* Pricing Table */
.kod2pat-table-wrap {
    background: #ffffff;
    border-radius: 14px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.05);
    border: 1px solid #e2e8f0;
    margin: 25px 0;
}
.kod2pat-table {
    width: 100%;
    border-collapse: collapse;
    text-align: left;
}
.kod2pat-table th {
    background: #1e3a8a;
    color: #ffffff;
    padding: 16px 20px;
    font-weight: 700;
    font-size: 0.98rem;
}
.kod2pat-table td {
    padding: 16px 20px;
    border-bottom: 1px solid #f1f5f9;
    color: #334155;
    font-size: 0.95rem;
}
.kod2pat-table tr:last-child td {
    border-bottom: none;
}
.kod2pat-table tr:hover td {
    background: #f8fafc;
}
.kod2pat-price {
    font-weight: 700;
    color: #059669;
}

/* Process Timeline */
.kod2pat-steps {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 24px;
    margin-top: 30px;
}
.kod2pat-step {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 14px;
    padding: 24px;
    position: relative;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
}
.kod2pat-step-num {
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
.kod2pat-step h4 {
    font-size: 1.12rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}
.kod2pat-step p {
    font-size: 0.92rem;
    color: #64748b;
    line-height: 1.6;
}

/* Localities Grid */
.kod2pat-localities {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 28px;
    margin-top: 25px;
}
.kod2pat-loc-card {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    padding: 24px;
}
.kod2pat-loc-card h4 {
    font-size: 1.15rem;
    font-weight: 700;
    color: #1e3a8a;
    margin-bottom: 12px;
    display: flex;
    align-items: center;
    gap: 8px;
}
.kod2pat-loc-card ul {
    margin: 0;
    padding-left: 20px;
}
.kod2pat-loc-card li {
    font-size: 0.94rem;
    color: #475569;
    line-height: 1.6;
    margin-bottom: 6px;
}

/* FAQ Accordion */
.kod2pat-faq-list {
    max-width: 900px;
    margin: 0 auto;
}
.kod2pat-faq-item {
    background: #ffffff;
    border: 1px solid #e2e8f0;
    border-radius: 12px;
    margin-bottom: 16px;
    padding: 24px;
    box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
}
.kod2pat-faq-item h3 {
    font-size: 1.14rem;
    font-weight: 700;
    color: #0f172a;
    margin-bottom: 10px;
}
.kod2pat-faq-item p {
    font-size: 0.96rem;
    color: #475569;
    line-height: 1.65;
    margin: 0;
}

/* CTA Footer Section */
.kod2pat-cta-banner {
    background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
    color: #ffffff;
    padding: 50px 30px;
    text-align: center;
    border-radius: 20px;
    margin: 40px 0;
}
.kod2pat-cta-banner h2 {
    font-size: 2.2rem;
    font-weight: 800;
    margin-bottom: 14px;
}
.kod2pat-cta-banner p {
    font-size: 1.08rem;
    color: #cbd5e1;
    max-width: 650px;
    margin: 0 auto 26px;
    line-height: 1.6;
}
.kod2pat-cta-btn {
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
.kod2pat-cta-btn:hover {
    background: #d97706;
    transform: translateY(-2px);
    color: #ffffff;
}

/* Responsive adjustments */
@media (max-width: 992px) {
    .kod2pat-hero-grid {
        grid-template-columns: 1fr;
    }
    .kod2pat-grid-3 {
        grid-template-columns: 1fr;
    }
    .kod2pat-grid-two, .kod2pat-grid-two.reverse {
        grid-template-columns: 1fr;
    }
    .kod2pat-steps {
        grid-template-columns: 1fr 1fr;
    }
    .kod2pat-localities {
        grid-template-columns: 1fr;
    }
}
@media (max-width: 600px) {
    .kod2pat-hero h1 {
        font-size: 2rem;
    }
    .kod2pat-steps {
        grid-template-columns: 1fr;
    }
}
</style>
</head>
<body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>


<!-- Hero Section -->
<section class="kod2pat-hero">
    <div class="kod2pat-container">
        <div class="kod2pat-breadcrumbs">
            <a href="https://www.shreeashirwadpackers.com/">Home</a> &raquo;
            <a href="https://www.shreeashirwadpackers.com/services">Services</a> &raquo;
            <span>Koderma to Patna Packers and Movers</span>
        </div>
        <div class="kod2pat-hero-grid">
            <div>
                <div class="kod2pat-badges">
                    <span class="kod2pat-badge"><i class="fas fa-shield-alt"></i> 100% Transit Insurance</span>
                    <span class="kod2pat-badge"><i class="fas fa-truck-moving"></i> Dedicated Closed Containers</span>
                    <span class="kod2pat-badge"><i class="fas fa-bolt"></i> Same-Day Express Transit</span>
                </div>
                <h1>Koderma to Patna <span>Packers and Movers</span></h1>
                <p class="kod2pat-hero-p">
                    Relocating your family, office, or vehicle from Koderma (Jhumri Telaiya, Domchanch, or KTPS) to the historic capital city of Patna? Shree Ashirwad Packers and Movers delivers fast, dependable interstate moving across the NH-20 corridor via Rajauli Ghati, Nawada, and Bakhtiyarpur. Enjoy 5-layer certified packing, GPS tracked vehicles, and prompt doorstep delivery.
                </p>
                <div style="display: flex; gap: 14px; flex-wrap: wrap;">
                    <a href="tel:+919534499994" class="kod2pat-call-btn" style="width: auto; padding: 14px 28px;">
                        <i class="fas fa-phone-alt"></i> Call +91 95344 99994
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=919534499994&text=Hi%2C%20I%20need%20a%20quote%20for%20relocation%20from%20Koderma%20to%20Patna." target="_blank" class="kod2pat-whatsapp-btn" style="width: auto; padding: 14px 28px;">
                        <i class="fab fa-whatsapp"></i> Instant WhatsApp Quote
                    </a>
                </div>
            </div>
            <div>
                <div class="kod2pat-quick-quote">
                    <h3>Get Free Relocation Estimate</h3>
                    <p>Transparent rates &bull; No hidden surcharges &bull; Dedicated move manager</p>
                    <a href="tel:+919534499994" class="kod2pat-call-btn"><i class="fas fa-headset"></i> Call Helpline: 95344 99994</a>
                    <a href="https://api.whatsapp.com/send?phone=919534499994&text=Koderma%20to%20Patna%20shifting%20quote%20request" target="_blank" class="kod2pat-whatsapp-btn"><i class="fab fa-whatsapp"></i> Chat on WhatsApp</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Main Container -->
<div class="kod2pat-container">
    
    <!-- Section 1: Overview -->
    <section class="kod2pat-section">
        <div class="kod2pat-heading">
            <h2>Seamless Inter-State Relocation from Koderma to Patna</h2>
            <p>
                Connecting Koderma (Jharkhand’s northern railhead and mica hub) with Patna (the commercial and political capital of Bihar) spans approximately 165 to 175 km across the National Highway 20 corridor. With over 16 years of specialized regional logistics experience, Shree Ashirwad Packers and Movers guarantees unmatched safety, punctuality, and stress-free moving.
            </p>
        </div>

        <div class="kod2pat-grid-two">
            <div>
                <h3 style="font-size: 1.5rem; font-weight: 700; color: #0f172a; margin-bottom: 16px;">Direct Express Highway Transit Across NH-20</h3>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Whether moving an executive residence from Jhumri Telaiya, transferring from Koderma Junction railway quarters, or relocating corporate staff to Patna's premier residential sectors such as Boring Road, Kankarbagh, Bailey Road, and Patliputra Colony, our dedicated moving infrastructure eliminates all relocation friction.
                </p>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    Traversing northwards through Rajauli ghati, Nawada, Bihar Sharif, and connecting to the Bakhtiyarpur-Patna 4-lane expressway, our dedicated container trucks navigate this inter-state arterial corridor in just <strong>4.5 to 6 hours</strong> of smooth road transit.
                </p>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7; margin-bottom: 14px;">
                    We never co-load or consolidate shipments with third-party freight. Your personal belongings are loaded directly at your Koderma doorstep, sealed with private tamper-proof locks, and driven straight to your new destination in Patna without intermediate transshipment or warehouse storage.
                </p>
                <p style="font-size: 0.98rem; color: #475569; line-height: 1.7;">
                    Our trained moving crew manages every detail: modular bed and wardrobe dismantling, anti-static IT equipment packing, double-bubble crockery protection, interstate commercial vehicle clearance, and complete unloading and furniture setup at your new Patna home.
                </p>
            </div>
            <div class="kod2pat-img-box">
                <img src="https://www.shreeashirwadpackers.com/images/safe-transit-container-truck-ranchi.jpg" alt="Dedicated closed container truck for Koderma to Patna shifting" loading="lazy">
            </div>
        </div>

        <!-- 3 Core Highlights -->
        <div class="kod2pat-grid-3">
            <div class="kod2pat-card">
                <div class="kod2pat-card-icon"><i class="fas fa-boxes"></i></div>
                <h3>5-Layer Protective Shield</h3>
                <p>
                    Every furniture item, large LED screen, and fragile kitchen porcelain piece is wrapped in thermal foam padding, multi-ply bubble wrap, corrugated sheets, and heavy-duty shrink film to neutralize highway vibrations.
                </p>
            </div>
            <div class="kod2pat-card">
                <div class="kod2pat-card-icon"><i class="fas fa-satellite-dish"></i></div>
                <h3>Real-Time Fleet GPS Tracking</h3>
                <p>
                    Track your consignment in real-time along NH-20. Our dedicated drivers operate company-owned vehicles equipped with electronic FASTag passes for swift toll clearance at Rajauli and Bakhtiyarpur plazas.
                </p>
            </div>
            <div class="kod2pat-card">
                <div class="kod2pat-card-icon"><i class="fas fa-file-invoice"></i></div>
                <h3>IBA Approved Transfer Invoicing</h3>
                <p>
                    Transferring under central government, East Central Railway, banking institutions, or DVC? We supply 100% compliant GST invoices, original consignment notes (bilty), and stamped inventory documentation.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 2: Highway Logistics & Route Breakdown -->
    <section class="kod2pat-section alt-bg" style="border-radius: 16px; padding: 50px 30px;">
        <div class="kod2pat-grid-two reverse">
            <div>
                <h3 style="font-size: 1.65rem; font-weight: 800; color: #0f172a; margin-bottom: 18px;">Detailed Highway Route Analysis: Koderma to Patna (~170 km)</h3>
                <p style="font-size: 1rem; color: #475569; line-height: 1.7; margin-bottom: 16px;">
                    Our operations desk plans every detail of the interstate highway journey to guarantee on-time arrival without unexpected bottlenecks:
                </p>
                <ul class="kod2pat-logistics-list">
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Rajauli Ghati Navigation:</strong> The border crossing between Koderma (Jharkhand) and Rajauli (Bihar) features winding hills and forest gradients. Our heavy vehicles are driven by seasoned senior captains experienced in navigating mountain curves without cargo shifting.
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Bakhtiyarpur 4-Lane Expressway to Patna:</strong> Beyond Bihar Sharif, the newly constructed 4-lane expressway allows rapid transit, bypassing congested market lanes and entering Patna via Didarganj or Zero Mile smoothly.
                        </div>
                    </li>
                    <li>
                        <i class="fas fa-check-circle"></i>
                        <div>
                            <strong>Patna Municipal No-Entry Management:</strong> Heavy commercial vehicles face daytime restrictions within central Patna. We coordinate departure timing from Koderma so that trucks arrive in Patna during evening permitted hours for immediate apartment delivery.
                        </div>
                    </li>
                </ul>
            </div>
            <div class="kod2pat-img-box">
                <img src="https://www.shreeashirwadpackers.com/images/complete-household-packing-dhanbad.jpg" alt="Koderma to Patna household packing and loading" loading="lazy">
            </div>
        </div>

        <div class="kod2pat-feature-box">
            <h3>Specialized Government, Railway &amp; Banking Transfer Support</h3>
            <p>
                Patna serves as the zonal headquarters for the East Central Railway (Hajipur/Patna), Reserve Bank of India regional office, and key state ministries. We understand the stringent shifting standards expected by administrative officers and bank managers:
            </p>
            <ul>
                <li>Complete disassembly of executive mahogany desks, heavy teak wardrobes, and modular workstation cubicles.</li>
                <li>Comprehensive pre-move inventory auditing with tamper-evident digital barcode labeling on every carton box.</li>
                <li>Direct company reimbursement billing compliant with all state government, civil administration, railway, and PSU audit standards.</li>
                <li>Dedicated on-site carpenters and electricians to safely dismantle modular king-size beds, modular kitchen cabinets, and wall-mounted air conditioners before departure.</li>
                <li>Tailored relocation packages for engineers, technicians, and executives moving to Patna's high-rise residential towers and government quarters.</li>
            </ul>
        </div>
    </section>

    <!-- Section 3: Pricing Estimates -->
    <section class="kod2pat-section">
        <div class="kod2pat-heading">
            <h2>Koderma to Patna Moving Cost Estimates</h2>
            <p>
                We provide clear, upfront pricing with zero hidden surcharges or surprise fees. Review our estimated rate table below:
            </p>
        </div>

        <div class="kod2pat-table-wrap">
            <table class="kod2pat-table">
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
                        <td class="kod2pat-price">₹9,500 - ₹14,500</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Residential House Shifting</strong></td>
                        <td>~170 km</td>
                        <td>Multi-layer packing, mattress covers, foam pads</td>
                        <td class="kod2pat-price">₹14,500 - ₹20,500</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK / Independent Villa Move</strong></td>
                        <td>~170 km</td>
                        <td>Premium 5-layer packing, wooden crates for glass</td>
                        <td class="kod2pat-price">₹19,500 - ₹28,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport (Bike / Scooter)</strong></td>
                        <td>~170 km</td>
                        <td>Foam wrap, bubble sheet, cardboard frame packing</td>
                        <td class="kod2pat-price">₹2,500 - ₹4,200</td>
                    </tr>
                    <tr>
                        <td><strong>Car Transportation (Hatchback / Sedan / SUV)</strong></td>
                        <td>~170 km</td>
                        <td>Dedicated hydraulic vehicle carrier, tire lockers</td>
                        <td class="kod2pat-price">₹6,500 - ₹10,500</td>
                    </tr>
                    <tr>
                        <td><strong>Commercial / Small Office Shifting</strong></td>
                        <td>~170 km</td>
                        <td>Anti-static bubble wrap, server boxes, file crates</td>
                        <td class="kod2pat-price">₹12,500 - ₹22,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.88rem; color: #64748b; margin-top: 14px; text-align: center;">
            *Exact rates depend on final cargo volume, floor level / lift availability, specialized packing requirements, and insurance declarations.
        </p>
    </section>

    <!-- Section 4: Vehicle Transport & Two-Wheeler Safety -->
    <section class="kod2pat-section alt-bg" style="border-radius: 16px; padding: 50px 30px;">
        <div class="kod2pat-heading">
            <h2>Vehicle Shifting: Cars, Motorbikes &amp; Scooters</h2>
            <p>Our fleet features dedicated carriers and specialized gear to protect high-value belongings and automobiles.</p>
        </div>

        <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 30px;">
            <div class="kod2pat-card" style="padding: 0; overflow: hidden;">
                <img src="https://www.shreeashirwadpackers.com/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Two-wheeler bike parcel packaging for Koderma to Patna move" style="width: 100%; height: 260px; object-fit: cover; display: block;" loading="lazy">
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
            <div class="kod2pat-card" style="padding: 0; overflow: hidden;">
                <img src="https://www.shreeashirwadpackers.com/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car carrier ramp loading for Koderma to Patna vehicle shifting" style="width: 100%; height: 260px; object-fit: cover; display: block;" loading="lazy">
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
    <section class="kod2pat-section">
        <div class="kod2pat-heading">
            <h2>Our 4-Step Stress-Free Moving Process</h2>
            <p>A systematic relocation workflow guaranteeing punctuality, transparency, and complete cargo safety.</p>
        </div>

        <div class="kod2pat-steps">
            <div class="kod2pat-step">
                <div class="kod2pat-step-num">1</div>
                <h4>Free Survey &amp; Quote</h4>
                <p>We review your inventory list via phone, video call, or physical home inspection in Koderma and provide a guaranteed transparent price.</p>
            </div>
            <div class="kod2pat-step">
                <div class="kod2pat-step-num">2</div>
                <h4>Multi-Layer Packing</h4>
                <p>Our uniformed packing crew arrives on time with high-grade cartons, bubble wrap, and adhesive tapes, packing room by room meticulously.</p>
            </div>
            <div class="kod2pat-step">
                <div class="kod2pat-step-num">3</div>
                <h4>Interstate Highway Transit</h4>
                <p>Goods are systematically stacked in dedicated containers, secured with cargo straps, and dispatched with continuous GPS tracking updates.</p>
            </div>
            <div class="kod2pat-step">
                <div class="kod2pat-step-num">4</div>
                <h4>Unloading &amp; Placement</h4>
                <p>Upon arrival in Patna, items are placed in designated rooms, furniture is reassembled, and packaging debris is cleared.</p>
            </div>
        </div>
    </section>

    <!-- Section 6: Localities Served in Koderma and Patna -->
    <section class="kod2pat-section alt-bg" style="border-radius: 16px; padding: 50px 30px;">
        <div class="kod2pat-heading">
            <h2>Localities We Serve Across Koderma &amp; Patna</h2>
            <p>Complete door-to-door coverage spanning every residential colony, railway colony, and metropolitan borough.</p>
        </div>

        <div class="kod2pat-localities">
            <div class="kod2pat-loc-card">
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
            <div class="kod2pat-loc-card">
                <h4><i class="fas fa-map-marker-alt"></i> Delivery Areas Across Patna</h4>
                <ul>
                    <li><strong>Boring Road, Boring Canal Road &amp; Nageshwar Colony:</strong> Prime central residential zones with high-rise apartment complexes.</li>
                    <li><strong>Kankarbagh &amp; Rajendra Nagar:</strong> High-density family residential areas and medical professional residences.</li>
                    <li><strong>Bailey Road, Saguna More &amp; Danapur Cantt:</strong> Modern gated high-rises, defense officers, and government staff housing.</li>
                    <li><strong>Patliputra Colony &amp; SK Puri:</strong> Executive family bungalows, corporate directors, and judicial quarters.</li>
                    <li><strong>Anisabad, Phulwari Sharif &amp; AIIMS Patna Area:</strong> Healthcare professionals, doctors, and academic residential relocations.</li>
                    <li><strong>Exhibition Road, Fraser Road &amp; Gandhi Maidan:</strong> Commercial headquarters, banking hubs, and trade business relocations.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section 7: Frequently Asked Questions -->
    <section class="kod2pat-section">
        <div class="kod2pat-heading">
            <h2>Frequently Asked Questions: Koderma to Patna Moving</h2>
            <p>Clear, direct answers to common queries regarding your upcoming interstate relocation.</p>
        </div>

        <div class="kod2pat-faq-list">
            <div class="kod2pat-faq-item">
                <h3>What is the total transit duration from Koderma to Patna?</h3>
                <p>The road distance is approximately 165 to 175 km along NH-20 via Rajauli Ghati and Nawada. Road transit takes about 4.5 to 6 hours. Same-day delivery is standard for almost all household shipments.</p>
            </div>
            <div class="kod2pat-faq-item">
                <h3>Do you supply GST invoices and e-Way bills for corporate and railway transfer claims?</h3>
                <p>Yes, absolutely. We provide 100% compliant GST invoices, original consignment notes (bilty), electronic e-Way bills, and official money receipts accepted by Eastern/East Central Railway, DVC, and corporate HR departments.</p>
            </div>
            <div class="kod2pat-faq-item">
                <h3>How do you safeguard double-door refrigerators and front-load washing machines?</h3>
                <p>Heavy home appliances are wrapped with custom foam edge corners, thick corrugated sheets, and air bubble wrapping. Washing machine drums are secured to prevent internal balance displacement during transit.</p>
            </div>
            <div class="kod2pat-faq-item">
                <h3>Is comprehensive transit insurance available?</h3>
                <p>Yes. We arrange comprehensive transit insurance through accredited national insurance providers, protecting your cargo against road accidents, transit overturning, and fire risks.</p>
            </div>
            <div class="kod2pat-faq-item">
                <h3>Can I transport my bike and car together with household furniture?</h3>
                <p>Yes. Two-wheelers can be loaded safely inside dedicated container trucks alongside furniture. For automobiles, we utilize specialized enclosed hydraulic car haulers.</p>
            </div>
            <div class="kod2pat-faq-item">
                <h3>Are there any hidden costs like driver tips or toll fees?</h3>
                <p>None whatsoever. Our written quotation clearly covers packing materials, labor, truck freight, driver allowances, and highway toll charges with zero unexpected add-ons.</p>
            </div>
            <div class="kod2pat-faq-item">
                <h3>How many days in advance should I confirm the booking?</h3>
                <p>We recommend booking 2 to 3 days ahead to secure your preferred morning packing slot, although emergency next-day moving requests are also supported.</p>
            </div>
        </div>
    </section>

    <!-- Bottom CTA Banner -->
    <div class="kod2pat-cta-banner">
        <h2>Ready for a Seamless Move to Patna?</h2>
        <p>Trust Shree Ashirwad Packers and Movers for dependable, insured interstate shifting between Koderma and Patna.</p>
        <a href="tel:+919534499994" class="kod2pat-cta-btn"><i class="fas fa-phone-alt"></i> Call Now: +91 95344 99994</a>
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
  "name": "Koderma to Patna Packers and Movers",
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
      "name": "Patna"
    }
  ],
  "description": "Professional interstate relocation services from Koderma to Patna including household shifting, car transportation, bike parcel, and corporate relocation.",
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
      "name": "Koderma to Patna Packers and Movers",
      "item": "https://www.shreeashirwadpackers.com/koderma-to-patna-packers-and-movers"
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
      "name": "What is the total transit duration from Koderma to Patna?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "The road distance is approximately 165 to 175 km along NH-20 via Rajauli Ghati and Nawada. Road transit takes about 4.5 to 6 hours. Same-day delivery is standard for almost all household shipments."
      }
    },
    {
      "@type": "Question",
      "name": "Do you supply GST invoices and e-Way bills for corporate and railway transfer claims?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, absolutely. We provide 100% compliant GST invoices, original consignment notes (bilty), electronic e-Way bills, and official money receipts accepted by Eastern/East Central Railway, DVC, and corporate HR departments."
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
