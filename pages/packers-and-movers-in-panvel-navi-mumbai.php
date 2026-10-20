<?php
/**
 * Page: Packers and Movers Panvel Navi Mumbai - New Panvel, Khandeshwar, NMIA & Old Panvel
 * File: pages/packers-and-movers-in-panvel-navi-mumbai.php
 * URL Slug: /packers-and-movers-in-panvel-navi-mumbai
 */

if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}
require_once ROOT_PATH . '/includes/config.php';

$page_title = 'Packers and Movers Panvel Navi Mumbai | Shifting Services';
$page_description = 'Professional packers and movers in Panvel Navi Mumbai. Dependable home shifting, office relocation, vehicle transport across New Panvel, Old Panvel, and Khandeshwar.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-panvel-navi-mumbai';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">

    <!-- CSS Links -->
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Panvel",
        "image": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "@id": "https://shreeashirwadpackers.com/packers-and-movers-in-panvel-navi-mumbai#company",
        "url": "https://shreeashirwadpackers.com/packers-and-movers-in-panvel-navi-mumbai",
        "telephone": "+919334404050",
        "priceRange": "₹₹",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Orion Mall, New Panvel East",
            "addressLocality": "Panvel, Navi Mumbai",
            "addressRegion": "Maharashtra",
            "postalCode": "410206",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 18.9894,
            "longitude": 73.1175
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
            ],
            "opens": "07:00",
            "closes": "22:00"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://twitter.com/ashirwadpackers"
        ]
    }
    </script>

    <!-- Schema 2: BreadcrumbList -->
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
                "name": "Navi Mumbai",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-navi-mumbai"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Panvel",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Packers and Movers Services in Panvel Navi Mumbai",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers Panvel"
        },
        "serviceType": "Mega Township Relocation, Household Shifting & Express Corridor Transport",
        "areaServed": {
            "@type": "Place",
            "name": "Panvel, Navi Mumbai, Maharashtra"
        },
        "description": "Comprehensive residential shifting, mega township relocation, modular furniture assembly, and car carrier transport serving New Panvel, Old Panvel, Khandeshwar, and surrounding airport corridors."
    }
    </script>

    <!-- Schema 4: FAQPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What are the packers and movers charges in Panvel Navi Mumbai?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local household shifting rates in Panvel typically start from ₹3,200 to ₹5,500 for a 1 BHK, ₹5,500 to ₹9,800 for a 2 BHK, and ₹8,800 to ₹15,500 for a 3 BHK home, including complete packing materials, loading, transit vehicle, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Do you handle relocations into large township projects like Hiranandani Fortune City and Marathon Nexzone?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our moving supervisors routinely manage society entry protocols, security permissions, service elevator booking, and long-carry trolley operations across major integrated townships in Panvel."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift household goods from Panvel to Pune or other parts of Maharashtra?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Absolutely. Operating right at the starting terminal of the Mumbai-Pune Expressway, we offer direct daily dedicated linehaul transport between Panvel and Pune, PCMC, Satara, and Kolhapur."
                }
            },
            {
                "@type": "Question",
                "name": "How do you navigate narrow lanes in Old Panvel during moving operations?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "For dense commercial and residential areas in Old Panvel, we deploy agile 14-foot container trucks and compact shuttle vans equipped with hand trucks and padded blankets to prevent congestion."
                }
            },
            {
                "@type": "Question",
                "name": "Is goods transit insurance provided for moves originating in Panvel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% comprehensive all-risk transit insurance documentation with clear itemized valuation to protect your high-value electronic appliances, glassware, and wooden furnishings."
                }
            }
        ]
    }
    </script>

    <style>
        .pnv-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.65;
        }
        .pnv-header {
            background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
            color: #ffffff;
            padding: 45px 25px;
            border-radius: 12px;
            margin-bottom: 30px;
            text-align: center;
        }
        .pnv-header h1 {
            font-size: 2.3rem;
            margin-bottom: 15px;
            font-weight: 700;
            line-height: 1.25;
            color: #ffffff;
        }
        .pnv-header p {
            font-size: 1.15rem;
            max-width: 860px;
            margin: 0 auto 20px;
            color: #e2e8f0;
        }
        .pnv-btn-wrap {
            display: flex;
            gap: 15px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .pnv-btn-primary {
            background: #e11d48;
            color: #ffffff;
            padding: 12px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .pnv-btn-primary:hover {
            background: #be123c;
        }
        .pnv-btn-secondary {
            background: #f8fafc;
            color: #0f172a;
            padding: 12px 28px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            display: inline-block;
            transition: background 0.2s ease;
        }
        .pnv-btn-secondary:hover {
            background: #e2e8f0;
        }
        .pnv-section {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 35px 30px;
            margin-bottom: 30px;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05);
        }
        .pnv-section-heading {
            font-size: 1.85rem;
            color: #0f172a;
            margin-bottom: 12px;
            font-weight: 700;
            position: relative;
            padding-bottom: 12px;
            text-align: center;
        }
        .pnv-section-heading::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 70px;
            height: 3px;
            background: #e11d48;
            border-radius: 2px;
        }
        .pnv-intro-p {
            font-size: 1.08rem;
            color: #475569;
            margin-bottom: 22px;
            text-align: center;
        }
        .pnv-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 25px;
            margin-top: 25px;
        }
        .pnv-feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 24px;
            border-left: 4px solid #1e3a8a;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .pnv-feature-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.07);
        }
        .pnv-feature-card h3 {
            color: #0f172a;
            font-size: 1.25rem;
            margin-bottom: 10px;
            font-weight: 600;
        }
        .pnv-feature-card p {
            color: #475569;
            font-size: 0.96rem;
            margin: 0;
            line-height: 1.6;
        }
        .pnv-highlight-box {
            background: #eff6ff;
            border: 1px dashed #3b82f6;
            border-radius: 8px;
            padding: 22px;
            margin: 25px 0;
        }
        .pnv-highlight-box h3 {
            color: #1e40af;
            font-size: 1.2rem;
            margin-bottom: 10px;
            font-weight: 600;
        }
        .pnv-highlight-box ul {
            margin: 0;
            padding-left: 20px;
            color: #334155;
        }
        .pnv-highlight-box li {
            margin-bottom: 8px;
            font-size: 0.96rem;
        }
        .pnv-image-container {
            max-width: 580px;
            margin: 28px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.12);
            border: 1px solid #cbd5e1;
            background: #f8fafc;
        }
        .pnv-image-container img {
            width: 100%;
            height: auto;
            display: block;
            object-fit: cover;
        }
        .pnv-image-caption {
            padding: 10px 15px;
            font-size: 0.88rem;
            color: #475569;
            background: #f1f5f9;
            text-align: center;
            border-top: 1px solid #e2e8f0;
            margin: 0;
        }
        .pnv-table {
            width: 100%;
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.96rem;
        }
        .pnv-table th, .pnv-table td {
            border: 1px solid #cbd5e1;
            padding: 12px 16px;
            text-align: left;
        }
        .pnv-table th {
            background-color: #0f172a;
            color: #ffffff;
            font-weight: 600;
        }
        .pnv-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .pnv-process-step {
            display: flex;
            gap: 18px;
            margin-bottom: 20px;
            align-items: flex-start;
        }
        .pnv-step-num {
            background: #1e3a8a;
            color: #ffffff;
            font-weight: 700;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 1.1rem;
        }
        .pnv-step-content h4 {
            font-size: 1.15rem;
            color: #0f172a;
            margin-bottom: 6px;
            font-weight: 600;
        }
        .pnv-step-content p {
            font-size: 0.95rem;
            color: #475569;
            margin: 0;
            line-height: 1.6;
        }
        .pnv-faq-item {
            border-bottom: 1px solid #e2e8f0;
            padding: 18px 0;
        }
        .pnv-faq-item:last-child {
            border-bottom: none;
        }
        .pnv-faq-item h3 {
            font-size: 1.18rem;
            color: #0f172a;
            margin-bottom: 8px;
            font-weight: 600;
        }
        .pnv-faq-item p {
            font-size: 0.96rem;
            color: #475569;
            margin: 0;
            line-height: 1.6;
        }
        .pnv-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 15px;
            margin-top: 25px;
        }
        .pnv-cluster-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 16px;
            text-align: center;
            transition: all 0.2s ease;
        }
        .pnv-cluster-card:hover {
            border-color: #e11d48;
            background: #fff;
            transform: translateY(-2px);
        }
        .pnv-cluster-card a {
            text-decoration: none;
            color: #1e3a8a;
            font-weight: 600;
            font-size: 0.95rem;
            display: block;
        }
        .pnv-cluster-card a:hover {
            color: #e11d48;
        }
        @media (max-width: 768px) {
            .pnv-header {
                padding: 30px 15px;
            }
            .pnv-header h1 {
                font-size: 1.8rem;
            }
            .pnv-section {
                padding: 22px 16px;
            }
            .pnv-section-heading {
                font-size: 1.45rem;
            }
            .pnv-table th, .pnv-table td {
                padding: 8px 10px;
                font-size: 0.88rem;
            }
        }
    </style>
</head>
<body>

<?php
// Include site header
require_once ROOT_PATH . '/includes/header.php';
?>

<div class="pnv-wrap">

    <!-- Hero Header -->
    <header class="pnv-header">
        <h1>Packers and Movers Panvel Navi Mumbai</h1>
        <p>Expert residential shifting, mega township relocation, careful furniture crating, and insured car transport across New Panvel, Old Panvel, Khandeshwar, and the Navi Mumbai International Airport corridor.</p>
        <div class="pnv-btn-wrap">
            <a href="tel:+919334404050" class="pnv-btn-primary">Call +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="pnv-btn-secondary">Check Tariff Rates</a>
        </div>
    </header>

    <!-- Section 1: Authority Introduction & Locality Overview -->
    <section class="pnv-section">
        <h2 class="pnv-section-heading">Professional Relocation Services in Panvel Navi Mumbai</h2>
        <p class="pnv-intro-p">Celebrated as the grand southern gateway of Mumbai and the burgeoning aerotropolis of western India, Panvel seamlessly blends historic trade heritage with cutting-edge futuristic infrastructure.</p>

        <p>Positioned strategically at the crucial confluence of the Mumbai-Pune Expressway, National Highway 48, National Highway 66, and the upcoming multimodal transport terminals, Panvel occupies an indispensable role in Maharashtra's economic landscape. Anchored by the rapid construction of the Navi Mumbai International Airport (NMIA) and direct connectivity to the Atal Bihari Vajpayee Sewri-Nhava Sheva Atal Setu (MTHL), Panvel has transformed into an energetic residential and commercial capital. The node bifurcates into the CIDCO-planned New Panvel with its serene tree-lined sectors, wide avenues, and high-rise apartment complexes, alongside Old Panvel, which preserves its vibrant trading character around the historic Line Alley, Bunder Road, Mirchi Galli, and bustling agricultural produce markets.</p>

        <div class="pnv-highlight-box">
            <h3>Specialized Moving Competencies in Panvel</h3>
            <ul>
                <li><strong>Mega Township Moving Protocols:</strong> Proven experience handling large-scale relocations in premier integrated projects such as Hiranandani Fortune City, Marathon Nexzone, Indiabulls Greens, Godrej City, and Sai World City, managing society access paperwork, goods elevator reservations, and long-lead corridors.</li>
                <li><strong>Dual-Terrain Fleet Execution:</strong> Specialized deployment of large closed-container trucks for broad avenues in New Panvel East, New Panvel West, Khanda Colony, and Khandeshwar, alongside agile shuttle vans tailored for tight access roads in Old Panvel.</li>
                <li><strong>Multi-Layer Protective Packing:</strong> Use of heavy virgin bubble wrap, corrugated corner angles, multilayer foam sheets, and high-grade stretch film ensuring zero scuffs or abrasion on sensitive household furnishings and kitchenware.</li>
                <li><strong>Full Carpenter Assistance:</strong> Dedicated on-site technicians equipped with power tools to dismantle complex hydraulic storage beds, modular entertainment wall units, and modular wardrobes with safe reassembly at delivery.</li>
            </ul>
        </div>

        <p>At Shree Ashirwad Packers and Movers, we deliver dependable and stress-free moving solutions across all residential neighborhoods in Panvel. Our seasoned team understands the diverse logistical challenges of moving in this bustling region, from navigating heavy commuter traffic along the Sion-Panvel Highway to adhering to stringent gated community moving windows. Whether you are transitioning to a newly completed high-rise apartment in New Panvel East Sector 19, upgrading within Khandeshwar, settling in Sukhapur or Karanjade, or moving your corporate inventory near Orion Mall and Panvel Station, we provide end-to-end relocation management that guarantees your household belongings remain in pristine condition throughout the move.</p>

        <div class="pnv-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Packers and Movers loading container truck in Panvel Navi Mumbai" width="580" height="387" loading="lazy">
            <p class="pnv-image-caption">Experienced loading crews securing packed household consignments inside our weatherproof container trucks in Panvel.</p>
        </div>

        <p>As an integral component of our comprehensive regional network, this Panvel hub operates seamlessly with our master facility at <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-navi-mumbai">Packers and Movers in Navi Mumbai</a> and maintains continuous linehaul synchronization with our corporate headquarters at <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Packers and Movers in Ranchi</a>. This connected multi-city infrastructure enables us to provide unmatched precision whether executing an intra-city shift across neighboring Kharghar, an express corridor move to Pune, or an interstate consignment across eastern and northern India.</p>

        <p>Every assignment is entrusted to a dedicated relocation manager who acts as your direct point of contact, ensuring comprehensive checklist execution, punctual crew arrival, and meticulous goods inspection upon delivery.</p>
    </section>

    <!-- Section 2: Comprehensive Relocation Solutions -->
    <section class="pnv-section">
        <h2 class="pnv-section-heading">Tailored Moving Solutions for Panvel Residences & Businesses</h2>
        <p class="pnv-intro-p">We engineer complete relocation services engineered specifically to match the unique needs of Panvel's diverse residential communities and booming commercial enterprises.</p>

        <div class="pnv-grid-2">
            <div class="pnv-feature-card">
                <h3>Integrated Township Apartment Shifting</h3>
                <p>Complete shifting services customized for high-rise towers and sprawling townships in New Panvel, Khanda Colony, and Karanjade. We pack every room methodically, utilizing heavy-duty carton boxes, color-coded identification labels, waterproof wrapping, and shock-absorbent cushioning for glassware, ceramics, and delicate chinaware.</p>
            </div>
            <div class="pnv-feature-card">
                <h3>Commercial & Office Relocations</h3>
                <p>Rapid corporate and business shifting solutions for commercial offices around Panvel railway terminus, Khandeshwar, and Orion Mall. We safely handle server racks, computer workstations, modular cubicles, and archived financial records with minimal operational downtime and off-peak execution.</p>
            </div>
            <div class="pnv-feature-card">
                <h3>Enclosed Vehicle Carrier Services</h3>
                <p>Secure car and two-wheeler transport using specialized enclosed car trailers. With doorstep vehicle inspection, hydraulic ramp loading, wheel tie-down clamps, and GPS transit updates, we guarantee zero transit road wear and full paint protection for your prized vehicles.</p>
            </div>
            <div class="pnv-feature-card">
                <h3>Secure Short & Long-Term Storage</h3>
                <p>Pest-controlled, round-the-clock secured warehouse storage facilities located adjacent to the expressway corridor. Perfect for homeowners awaiting property handovers or professionals on interim transfers requiring safe, climate-stable custody of furniture and home appliances.</p>
            </div>
        </div>

        <div class="pnv-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi-layer bubble wrapping and packing materials in Panvel" width="580" height="387" loading="lazy">
            <p class="pnv-image-caption">High-density bubble wrap, sturdy cartons, and waterproof stretch film applied to safeguard fragile appliances and electronics.</p>
        </div>

        <p>Our commitment to transparent pricing and dependable service eliminates the uncertainty often associated with home shifting. Our clients in Panvel receive clear written quotations without hidden add-on costs or surprise gate fees on moving day.</p>

        <p>From the initial telephone estimate to the final positioning of your furniture in your new living room, our experienced crews uphold the highest standards of courtesy, care, and professional discipline.</p>
    </section>

    <!-- Section 3: Transparent Pricing Table -->
    <section class="pnv-section">
        <h2 class="pnv-section-heading">Transparent Packers and Movers Charges in Panvel Navi Mumbai</h2>
        <p class="pnv-intro-p">We believe in complete pricing transparency. Below are estimated standard rates for local and regional moves originating in Panvel.</p>

        <table class="pnv-table">
            <thead>
                <tr>
                    <th>Home Configuration</th>
                    <th>Packing Material & Crew</th>
                    <th>Local Shifting (Within Panvel / Navi Mumbai)</th>
                    <th>Intercity Shifting (Panvel to Pune / Mumbai)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><strong>1 BHK Apartment</strong></td>
                    <td>2-3 Experts + Standard Materials</td>
                    <td>₹3,200 - ₹5,500</td>
                    <td>₹8,000 - ₹14,000</td>
                </tr>
                <tr>
                    <td><strong>2 BHK Apartment</strong></td>
                    <td>3-4 Experts + Premium Multi-Layer</td>
                    <td>₹5,500 - ₹9,800</td>
                    <td>₹13,000 - ₹22,000</td>
                </tr>
                <tr>
                    <td><strong>3 BHK Apartment</strong></td>
                    <td>5-6 Experts + Heavy-Duty Materials</td>
                    <td>₹8,800 - ₹15,500</td>
                    <td>₹18,000 - ₹30,000</td>
                </tr>
                <tr>
                    <td><strong>4 BHK / Villa</strong></td>
                    <td>6-8 Experts + Customized Crating</td>
                    <td>₹14,000 - ₹24,000</td>
                    <td>₹25,000 - ₹45,000</td>
                </tr>
                <tr>
                    <td><strong>Two Wheeler Transport</strong></td>
                    <td>Bubble Wrap + Corrugated Sheet</td>
                    <td>₹1,200 - ₹2,500</td>
                    <td>₹3,000 - ₹6,500</td>
                </tr>
                <tr>
                    <td><strong>Car Carrier Transport</strong></td>
                    <td>Enclosed Car Trailer + Wheel Chocks</td>
                    <td>₹2,800 - ₹5,000</td>
                    <td>₹7,500 - ₹16,000</td>
                </tr>
            </tbody>
        </table>

        <p>Final costs are determined by exact inventory volume, floor elevation, elevator availability, fragile crating requirements, and overall transit distance. For an exact customized quote tailored to your inventory, please view our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Live Tariff Rate Calculator</a> or speak directly with our Panvel survey executive.</p>

        <div class="pnv-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Furniture dismantling and carpentry services in Panvel" width="580" height="387" loading="lazy">
            <p class="pnv-image-caption">Skilled carpenters carefully dismantling and wrapping heavy bed frames and wardrobes for safe residential transit in Panvel.</p>
        </div>

        <p>We provide full written insurance documentation for intercity transfers, offering complete reimbursement protection against rare transit contingencies, severe weather, or highway disruptions.</p>
    </section>

    <!-- Section 4: Strategic Step-by-Step Moving Process -->
    <section class="pnv-section">
        <h2 class="pnv-section-heading">Our Proven Step-by-Step Moving Process in Panvel</h2>
        <p class="pnv-intro-p">To ensure every relocation proceeds without a hitch, we adhere to a disciplined four-stage operational workflow tailored for modern urban living.</p>

        <div class="pnv-process-step">
            <div class="pnv-step-num">1</div>
            <div class="pnv-step-content">
                <h4>Pre-Move Survey & Customized Quotation</h4>
                <p>We begin with a detailed physical or virtual video survey to inspect your household items, assess access corridors, evaluate elevator dimensions, and check society gate regulations. We then provide a clear, all-inclusive written quotation specifying packing supplies, truck sizes, and timeline commitments with zero hidden costs.</p>
            </div>
        </div>

        <div class="pnv-process-step">
            <div class="pnv-step-num">2</div>
            <div class="pnv-step-content">
                <h4>Multi-Tier Protective Packing</h4>
                <p>On move day, our trained crew arrives punctually with high-grade packing supplies. Delicate chinaware, glassware, and electronics receive multi-layer air bubble wrapping, sturdy corrugated sheet wraps, and waterproof shrink film, while modular furniture pieces are dismantled and wrapped in thick moving blankets.</p>
            </div>
        </div>

        <div class="pnv-process-step">
            <div class="pnv-step-num">3</div>
            <div class="pnv-step-content">
                <h4>Systematic Loading & Secure Transit</h4>
                <p>Goods are loaded systematically using heavy-duty dollies and secured inside closed-body container trucks with heavy-duty ratchets and protective cushioning. Our vehicles travel via optimal routes to avoid traffic choke points around Kalamboli circle, Panvel bypass, and the expressway entrance.</p>
            </div>
        </div>

        <div class="pnv-process-step">
            <div class="pnv-step-num">4</div>
            <div class="pnv-step-content">
                <h4>Unloading, Unpacking & Furniture Assembly</h4>
                <p>At your new destination, our technicians unload each carton room by room, unpack your belongings carefully under your guidance, reassemble modular beds and wardrobes, and place large appliances in their designated spots, concluding by clearing away all packing debris.</p>
            </div>
        </div>

        <div class="pnv-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Panvel Navi Mumbai" width="580" height="387" loading="lazy">
            <p class="pnv-image-caption">Our closed container vehicles ensuring safe, door-to-door delivery across residential sectors and townships throughout Panvel.</p>
        </div>

        <p>This organized operational discipline has earned us the lasting trust of thousands of homeowners, business managers, and industrial clients throughout Navi Mumbai and the Mumbai Metropolitan Region.</p>

        <p>Whether relocating a compact studio apartment in Khandeshwar or shifting an expansive multi-bedroom villa in a luxury gated community in New Panvel, our dedicated crews maintain unwavering standards of speed, safety, and client courtesy throughout every milestone of your transition.</p>
    </section>

    <!-- Section 5: Frequently Asked Questions -->
    <section class="pnv-section">
        <h2 class="pnv-section-heading">Frequently Asked Questions About Moving in Panvel</h2>
        <p class="pnv-intro-p">Here are clear answers to the most common queries our clients ask regarding relocation services in Panvel.</p>

        <div class="pnv-faq-item">
            <h3>What are the typical packers and movers charges in Panvel Navi Mumbai?</h3>
            <p>Local shifting charges in Panvel usually range from ₹3,200 to ₹5,500 for a 1 BHK, ₹5,500 to ₹9,800 for a 2 BHK, and ₹8,800 to ₹15,500 for a 3 BHK residence. Pricing includes all labor, packaging materials, container transport, and unloading.</p>
        </div>

        <div class="pnv-faq-item">
            <h3>How do you handle moving permissions in high-rise societies in New Panvel?</h3>
            <p>Our moving coordinators assist you with all required society paperwork, ensuring gate entry passes, freight elevator reservations, security deposit confirmations, and designated move-in windows are finalized well ahead of time to prevent delays on moving day.</p>
        </div>

        <div class="pnv-faq-item">
            <h3>Do you offer direct intercity moves between Panvel and Pune?</h3>
            <p>Yes. Operating directly at the start of the Mumbai-Pune Expressway, Panvel serves as our primary staging hub for daily direct linehaul routes along the expressway, providing express same-day and next-day delivery across Pune, Hinjewadi, PCMC, and neighboring industrial corridors.</p>
        </div>

        <div class="pnv-faq-item">
            <h3>How do your trucks maneuver through Old Panvel's narrow streets?</h3>
            <p>For dense residential sectors in Old Panvel, we employ compact 14-foot closed container vehicles and small feeder tempos capable of navigating narrow lanes without causing traffic blockages or damage to property, backed by manual hand-carry dollies.</p>
        </div>

        <div class="pnv-faq-item">
            <h3>Is transit insurance available for household items moving from Panvel?</h3>
            <p>Yes. We offer comprehensive all-risk transit insurance policies with explicit itemized valuation, ensuring complete protection for all electronics, wooden furniture, and valuable kitchenware during transit across highways and local corridors.</p>
        </div>
    </section>

    <!-- Section 6: Connected Cluster Hyper-Local Hubs -->
    <section class="pnv-section">
        <h2 class="pnv-section-heading">Explore Our Navi Mumbai Relocation Network</h2>
        <p class="pnv-intro-p">Shree Ashirwad Packers and Movers operates dedicated local teams across all prime nodes and business sectors of Navi Mumbai.</p>

        <div class="pnv-cluster-grid">
            <div class="pnv-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-navi-mumbai">Navi Mumbai Central Hub</a>
            </div>
            <div class="pnv-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-vashi-navi-mumbai">Packers Movers Vashi</a>
            </div>
            <div class="pnv-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-nerul-navi-mumbai">Packers Movers Nerul</a>
            </div>
            <div class="pnv-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kharghar-navi-mumbai">Packers Movers Kharghar</a>
            </div>
            <div class="pnv-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-belapur-navi-mumbai">Packers Movers Belapur</a>
            </div>
            <div class="pnv-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-airoli-navi-mumbai">Packers Movers Airoli</a>
            </div>
            <div class="pnv-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-kopar-khairane-navi-mumbai">Packers Movers Kopar Khairane</a>
            </div>
            <div class="pnv-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Company HQ Ranchi</a>
            </div>
        </div>
    </section>

</div>

<?php
// Include site footer
require_once ROOT_PATH . '/includes/footer.php';
?>

</body>
</html>
