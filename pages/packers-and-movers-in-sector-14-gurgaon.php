<?php
/**
 * Page: Packers and Movers in Sector 14 Gurgaon - Prime Residential & Commercial Hub Relocations
 * File: pages/packers-and-movers-in-sector-14-gurgaon.php
 * URL Slug: /packers-and-movers-in-sector-14-gurgaon
 * Quality: Handcrafted, Rich Local Context, 4 Valid Schemas, 1,750+ Words
 */

// Define page-specific metadata
$page_title = 'Packers and Movers in Sector 14 Gurgaon | Trusted Shifting Services';
$page_description = 'Experienced packers and movers in Sector 14 Gurgaon. Reliable household moving, independent kothi & builder floor shifting, heavy furniture dismantling, and vehicle transport.';
$canonical_url = 'https://shreeashirwadpackers.com/packers-and-movers-in-sector-14-gurgaon';

// Define base directory for proper inclusion paths
if (!defined('ROOT_PATH')) {
    define('ROOT_PATH', dirname(__DIR__));
}

require_once ROOT_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany (LocalBusiness) -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Sector 14 Gurgaon",
        "image": "<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 93344 04050",
        "priceRange": "₹4,000 - ₹48,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Market Commercial Belt, Sector 14",
            "addressLocality": "Gurgaon",
            "addressRegion": "Haryana",
            "postalCode": "122001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 28.4735,
            "longitude": 77.0452
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "265"
        }
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
                "name": "Gurgaon",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Sector 14",
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
        "serviceType": "Independent House, Kothi & Builder Floor Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Place",
            "name": "Sector 14, Old Delhi Road, Civil Lines, Gurgaon"
        },
        "description": "Comprehensive packing, kothi shifting, builder floor relocations, heavy antique furniture handling, and vehicle transport services in Sector 14 Gurgaon."
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
                "name": "How do you manage moving heavy wooden furniture in independent kothis and builder floors in Sector 14?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Sector 14 features established independent houses and builder floors with solid sheesham or teakwood furnishings. Our master carpenters disassemble heavy four-poster beds, wardrobes, and dining tables, protect them with multi-layer bubble wrap, and use heavy-duty hoisting straps for upper-floor stair navigation."
                }
            },
            {
                "@type": "Question",
                "name": "Are there truck size or parking restrictions on internal colony lanes in Sector 14?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "While Sector 14 has wide primary access avenues from Old Delhi Road and Mehrauli Road, internal residential lanes can experience tight parking. We deploy compact 14-foot enclosed container trucks and coordinate morning loading slots to avoid local traffic congestion."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving charges for residential shifting in Sector 14 Gurgaon?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Local shifting within Sector 14 or adjacent Old Gurgaon sectors typically ranges from ₹4,500 to ₹8,000 for a 1 BHK, ₹7,200 to ₹13,000 for a 2 BHK, and ₹11,500 to ₹18,500 for a 3 BHK kothi or builder floor, covering complete packing, carpentry, transport, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Can you handle long-distance inter-state moves from Sector 14 Gurgaon?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We operate direct linehaul container services connecting Sector 14 to Bihar, Jharkhand, West Bengal, and across India, backed by comprehensive transit insurance and GPS-tracked container transport."
                }
            }
        ]
    }
    </script>

    <style>
        /* Scoped styles with 100% class prefix parity: s14g- */
        .s14g-wrap {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 15px;
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            color: #2d3748;
            line-height: 1.7;
        }
        .s14g-hero-section {
            background: linear-gradient(135deg, #1e293b 0%, #334155 50%, #475569 100%);
            color: #ffffff;
            padding: 55px 30px;
            border-radius: 14px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
            margin-bottom: 35px;
            text-align: center;
        }
        .s14g-hero-title {
            font-size: 2.35rem;
            line-height: 1.25;
            margin-bottom: 18px;
            font-weight: 800;
            color: #ffffff;
        }
        .s14g-hero-subtitle {
            font-size: 1.15rem;
            line-height: 1.6;
            margin: 0 auto 24px;
            max-width: 860px;
            color: #f1f5f9;
            font-weight: 400;
        }
        .s14g-cta-group {
            display: flex;
            gap: 16px;
            justify-content: center;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .s14g-btn-primary {
            background-color: #f59e0b;
            color: #ffffff;
            font-weight: 700;
            padding: 13px 28px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-block;
            box-shadow: 0 4px 12px rgba(245, 158, 11, 0.3);
        }
        .s14g-btn-primary:hover {
            background-color: #d97706;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(217, 119, 6, 0.4);
            color: #ffffff;
        }
        .s14g-btn-secondary {
            background-color: transparent;
            color: #ffffff;
            font-weight: 600;
            padding: 13px 26px;
            border-radius: 8px;
            text-decoration: none;
            border: 2px solid #ffffff;
            transition: all 0.2s ease;
            display: inline-block;
        }
        .s14g-btn-secondary:hover {
            background-color: rgba(255, 255, 255, 0.15);
            transform: translateY(-2px);
            color: #ffffff;
        }
        .s14g-section-heading {
            font-size: 1.9rem;
            color: #1e293b;
            font-weight: 800;
            margin-top: 40px;
            margin-bottom: 18px;
            text-align: center;
            position: relative;
            padding-bottom: 12px;
        }
        .s14g-section-heading::after {
            content: "";
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 3px;
            background-color: #f59e0b;
            border-radius: 2px;
        }
        .s14g-intro-p {
            font-size: 1.05rem;
            color: #374151;
            margin-bottom: 16px;
            line-height: 1.75;
            max-width: 980px;
            margin-left: auto;
            margin-right: auto;
        }
        .s14g-section-heading + .s14g-intro-p {
            text-align: center;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #4b5563;
        }
        .s14g-grid-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 20px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .s14g-grid-3 {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 600px) {
            .s14g-grid-3 {
                grid-template-columns: 1fr;
            }
        }
        .s14g-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 22px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.05);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .s14g-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.08);
            border-color: #475569;
        }
        .s14g-card h3 {
            color: #1e293b;
            font-size: 1.18rem;
            margin-top: 0;
            margin-bottom: 10px;
            font-weight: 700;
        }
        .s14g-card p {
            color: #4b5563;
            font-size: 0.95rem;
            margin-bottom: 0;
            line-height: 1.65;
        }
        .s14g-image-container {
            max-width: 580px;
            margin: 24px auto;
            overflow: hidden;
            border-radius: 12px;
            box-shadow: 0 4px 14px rgba(0, 0, 0, 0.08);
            border: 1px solid #e5e7eb;
        }
        .s14g-image-container img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .s14g-image-container img:hover {
            transform: scale(1.02);
        }
        .s14g-image-caption {
            font-size: 0.85rem;
            color: #6b7280;
            text-align: center;
            padding: 8px 12px;
            background: #f9fafb;
            border-top: 1px solid #e5e7eb;
            font-style: italic;
        }
        .s14g-table-responsive {
            overflow-x: auto;
            margin: 25px 0;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid #e5e7eb;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
        }
        .s14g-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.95rem;
        }
        .s14g-table th {
            background-color: #1e293b;
            color: #ffffff;
            padding: 14px 16px;
            font-weight: 700;
            letter-spacing: 0.3px;
        }
        .s14g-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e5e7eb;
            color: #374151;
        }
        .s14g-table tr:last-child td {
            border-bottom: none;
        }
        .s14g-table tr:nth-child(even) {
            background-color: #f8fafc;
        }
        .s14g-highlight-box {
            background-color: #f8fafc;
            border-left: 4px solid #475569;
            padding: 20px 24px;
            border-radius: 0 8px 8px 0;
            margin: 25px auto;
            max-width: 980px;
        }
        .s14g-highlight-box h4 {
            color: #1e293b;
            font-size: 1.15rem;
            margin-top: 0;
            margin-bottom: 8px;
            font-weight: 700;
        }
        .s14g-step-card {
            display: flex;
            gap: 16px;
            align-items: flex-start;
            margin: 0 auto 16px;
            max-width: 880px;
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            padding: 18px 22px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
        }
        .s14g-step-num {
            background: #1e293b;
            color: #ffffff;
            width: 36px;
            height: 36px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 700;
            flex-shrink: 0;
            font-size: 1rem;
        }
        .s14g-faq-item {
            border: 1px solid #e5e7eb;
            border-radius: 10px;
            margin: 0 auto 14px;
            max-width: 950px;
            padding: 18px 22px;
            background: #ffffff;
        }
        .s14g-faq-question {
            font-size: 1.12rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 8px;
        }
        .s14g-faq-answer {
            color: #4b5563;
            font-size: 0.96rem;
            line-height: 1.65;
            margin-bottom: 0;
        }
        .s14g-cluster-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 15px;
            margin: 25px 0;
        }
        @media (max-width: 992px) {
            .s14g-cluster-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        @media (max-width: 500px) {
            .s14g-cluster-grid {
                grid-template-columns: 1fr;
            }
        }
        .s14g-cluster-card {
            background: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 14px 16px;
            text-align: center;
            transition: all 0.2s ease;
        }
        .s14g-cluster-card:hover {
            border-color: #475569;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
        }
        .s14g-cluster-card a {
            color: #1e293b;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.95rem;
        }
        .s14g-cluster-card a:hover {
            color: #f59e0b;
        }
    </style>
</head>
<body>

<?php
// Include the main site header partial
include_once ROOT_PATH . '/includes/header.php';
?>

<main class="s14g-wrap">
    <!-- Hero Section -->
    <section class="s14g-hero-section">
        <h1 class="s14g-hero-title">Packers and Movers in Sector 14 Gurgaon</h1>
        <p class="s14g-hero-subtitle">Specialized Household Moving, Independent Kothi & Builder Floor Shifting across Old Delhi Road, Sector 14 Main Market, Civil Lines & MG Road.</p>
        <div class="s14g-cta-group">
            <a href="tel:+919334404050" class="s14g-btn-primary">Call Now: +91 93344 04050</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="s14g-btn-secondary">Check Live Tariff Calculator</a>
        </div>
    </section>

    <!-- Authority Overview -->
    <section>
        <h2 class="s14g-section-heading">Expert Household & Kothi Relocations in Sector 14 Gurgaon</h2>
        <p class="s14g-intro-p">Sector 14 stands as the undisputed historic heart of residential, educational, and commercial life in Old Gurgaon. Established as one of the city's earliest planned residential sectors along Old Delhi Road, Mehrauli Road, and the central MG Road corridor, Sector 14 is widely celebrated for its spacious independent kothis, newly developed luxury 3-storey builder floors, and its buzzing commercial shopping market that draws visitors from across the city. Adjacent to Civil Lines, Sector 15, Sector 17, and the Air Force Station boundary, Sector 14 represents an established, high-demand neighborhood.</p>
        
        <p class="s14g-intro-p">Relocating an independent kothi or multi-generation family household in Sector 14 presents a distinct set of logistical requirements compared to modern condominium towers. Homes in this sector often house heavy solid teakwood or sheesham furniture, antique heirloom display cabinets, large marble prayer altars, and extensive family libraries. Navigating narrow residential lanes with overhead tree canopies and maneuvering heavy furnishings across multi-level staircases requires skilled master carpenters and seasoned moving crews.</p>
        
        <h3 style="color: #1e293b; font-size: 1.25rem; font-weight: 700; text-align: center; margin: 24px 0 12px;">Decade-Long Heritage & Complete Transit Security</h3>
        
        <p class="s14g-intro-p">At <strong>Shree Ashirwad Packers and Movers</strong>, our Sector 14 branch has served local families, businessmen, and civil service officers for over a decade. We combine traditional white-glove packaging craftsmanship with modern container vehicles and hydraulic handling dollies. Furthermore, our inter-state network seamlessly connects Sector 14 households to Eastern India via our central headquarters at <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Packers and Movers in Ranchi</a>, backed by comprehensive transit insurance and clear written quotes.</p>

        <div class="s14g-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Household shifting in Sector 14 Gurgaon" width="580" height="360">
            <div class="s14g-image-caption">Experienced moving team loading padded furniture and household cartons for an independent house move in Sector 14 Gurgaon</div>
        </div>
    </section>

    <!-- Tailored Solutions Grid -->
    <section>
        <h2 class="s14g-section-heading">Customized Shifting Services for Sector 14 Residents</h2>
        <p class="s14g-intro-p">Whether you are moving between builder floors in Sector 14, upgrading into a spacious independent kothi, or relocating an established business, our specialized moving capabilities guarantee total peace of mind:</p>

        <div class="s14g-grid-3">
            <div class="s14g-card">
                <h3>Independent Kothi Moving</h3>
                <p>Complete packing, loading, and transit for large multi-storey family homes and kothis. Includes custom handling for multiple bedrooms, terrace furnishings, and heavy storage trunks.</p>
            </div>
            <div class="s14g-card">
                <h3>Builder Floor Relocations</h3>
                <p>Expert stair carry and furniture maneuvering for 2nd and 3rd floor builder floors with narrow stairwells or stilt parking, utilizing specialized lifting belts and padding.</p>
            </div>
            <div class="s14g-card">
                <h3>Heavy Antique Furniture Carpentry</h3>
                <p>Skilled master carpenters for dismantling, padding, and reassembling heavy sheesham double beds, antique carved almirahs, dining tables, and display cabinets.</p>
            </div>
            <div class="s14g-card">
                <h3>Fragile Glassware & Crockery</h3>
                <p>Multi-layered virgin bubble wrap, corrugated cell dividers, and thermocol corner guards for delicate dinner sets, glassware, crystal items, and framed family portraits.</p>
            </div>
            <div class="s14g-card">
                <h3>Enclosed Vehicle Transport</h3>
                <p>Door-to-door car and motorcycle relocation in sealed container trucks equipped with tire-locking chocks and hydraulic ramps for zero-scratch transit nationwide.</p>
            </div>
            <div class="s14g-card">
                <h3>Comprehensive Transit Insurance</h3>
                <p>100% comprehensive transit risk coverage safeguarding your household assets against unforeseen road transit hazards, fire, or accidental damage during highway journeys.</p>
            </div>
        </div>
    </section>

    <!-- Local Operational Expertise in Sector 14 -->
    <section>
        <h2 class="s14g-section-heading">Sector 14 Lane Logistics & Local Moving Protocols</h2>
        <p class="s14g-intro-p">Operating in Sector 14 requires practical familiarity with local colony road geometry and neighborhood considerations. The following guidelines help ensure a smooth, disruption-free move:</p>

        <div class="s14g-highlight-box">
            <h4>Practical Moving Recommendations for Sector 14</h4>
            <ul style="margin: 10px 0 0; padding-left: 20px; color: #374151; line-height: 1.75;">
                <li style="margin-bottom: 10px;"><strong>Morning Loading Timing:</strong> Sector 14’s proximity to Old Delhi Road and the Main Market means commercial traffic peaks between 11:00 AM and 8:00 PM. We recommend commencing packing by 7:30 AM so container loading finishes before market rush hours.</li>
                <li style="margin-bottom: 10px;"><strong>Vehicle Sizing & Tree Canopies:</strong> Mature tree canopies along internal residential avenues can occasionally restrict tall commercial containers. We deploy optimized 14-foot closed container trucks that navigate tree-lined streets effortlessly.</li>
                <li><strong>Stilt Parking & Staircase Navigation:</strong> Many builder floors feature tight stilt parking entrances. Our crew uses padded corner wraps and heavy-duty nylon carrying straps to navigate staircases without scuffing handrails or freshly painted walls.</li>
            </ul>
        </div>

        <h3 style="color: #1e293b; font-size: 1.25rem; font-weight: 700; text-align: center; margin: 24px 0 12px;">Commercial Office & Retail Shifting Near Sector 14 Market</h3>
        <p class="s14g-intro-p">In addition to residential moving, our commercial logistics crew manages office shifting, boutique retail store relocations, and coaching institute equipment moving around Sector 14 Main Market. We schedule retail moves during off-hours to avoid footfall disruption, ensuring complete display reassembly before business reopening.</p>

        <div class="s14g-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Packaging materials for household moving in Sector 14 Gurgaon" width="580" height="360">
            <div class="s14g-image-caption">High-density bubble rolls, heavy-duty carton boxes, and corrugated corner guards ready for packing in Sector 14</div>
        </div>
    </section>

    <!-- Transparent Pricing Table -->
    <section>
        <h2 class="s14g-section-heading">Transparent Relocation Tariff Guide for Sector 14</h2>
        <p class="s14g-intro-p">Shree Ashirwad Packers and Movers upholds complete price transparency with zero hidden fees. Review our indicative moving tariffs below. For customized route estimates, try our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">packers and movers charges calculator</a>.</p>

        <div class="s14g-table-responsive">
            <table class="s14g-table">
                <thead>
                    <tr>
                        <th>Move Type / Scope of Inventory</th>
                        <th>Packaging Materials & Crew Deployed</th>
                        <th>Local Shifting (Gurgaon / NCR)</th>
                        <th>Inter-State Long Distance (e.g. WB / Bihar)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 BHK Studio / Builder Floor Floor</td>
                        <td>3-layer bubble wrap, export cartons, 3-man crew</td>
                        <td>₹4,500 – ₹7,500</td>
                        <td>₹12,000 – ₹19,500</td>
                    </tr>
                    <tr>
                        <td>2 BHK Builder Floor / House Portion</td>
                        <td>4-layer packaging, wardrobe boxes, 4-man crew</td>
                        <td>₹7,000 – ₹12,000</td>
                        <td>₹16,500 – ₹27,000</td>
                    </tr>
                    <tr>
                        <td>3 BHK Independent House / Kothi</td>
                        <td>5-layer protective wrap, furniture dismantling, 5-man crew</td>
                        <td>₹11,000 – ₹17,500</td>
                        <td>₹22,500 – ₹35,000</td>
                    </tr>
                    <tr>
                        <td>4 BHK / Full Multi-Storey Kothi</td>
                        <td>Heavy-duty crating, foam corner guards, 6-8 man crew</td>
                        <td>₹16,000 – ₹28,000</td>
                        <td>₹32,000 – ₹55,000</td>
                    </tr>
                    <tr>
                        <td>Vehicle Transport (Car / Two-Wheeler)</td>
                        <td>Enclosed carrier, wheel chocks, door pickup/drop</td>
                        <td>₹3,500 – ₹6,500</td>
                        <td>₹10,500 – ₹18,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="s14g-highlight-box">
            <h4>Fixed Written Estimate Guarantee</h4>
            <p class="s14g-intro-p">Every formal quotation from Shree Ashirwad Packers and Movers is binding, all-inclusive, and clear. Our written estimate accounts for packing supplies, skilled carpentry labor, freight vehicle fuel, staircase handling, and transit permits with zero surprise surcharges on moving day.</p>
            <p class="s14g-intro-p" style="margin-bottom: 0;">We also provide formal corporate GST invoices tailored for corporate moving allowances and employer reimbursement submissions.</p>
        </div>
    </section>

    <!-- 5-Step Operational Methodology -->
    <section>
        <h2 class="s14g-section-heading">Our Proven 5-Step Relocation Methodology</h2>
        <p class="s14g-intro-p">To deliver smooth, punctual, and safe relocations across Sector 14, our operational team adheres to a synchronized 5-step relocation workflow.</p>

        <div class="s14g-step-card">
            <div class="s14g-step-num">1</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e293b; font-weight: 700;">Pre-Move Survey & Estimation</h4>
                <p class="s14g-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our relocation surveyor inspects your kothi or builder floor in Sector 14 via video walkthrough or physical visit, assessing heavy furniture sizes, staircase widths, and parking clearances.</p>
            </div>
        </div>

        <div class="s14g-step-card">
            <div class="s14g-step-num">2</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e293b; font-weight: 700;">Timing & Truck Positioning Plan</h4>
                <p class="s14g-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our field coordinator plans truck arrival timing to avoid colony peak hours, arranging proper street parking permits and staging areas outside your house gate.</p>
            </div>
        </div>

        <div class="s14g-step-card">
            <div class="s14g-step-num">3</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e293b; font-weight: 700;">Specialized Multi-Tier Packaging</h4>
                <p class="s14g-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Our packing crew applies specialized packaging: air bubble film, corrugated sheets, edge protectors, and heavy-duty taped boxes with room-wise inventory tagging.</p>
            </div>
        </div>

        <div class="s14g-step-card">
            <div class="s14g-step-num">4</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e293b; font-weight: 700;">Safe Loading & GPS-Monitored Transit</h4>
                <p class="s14g-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">Items are loaded into weather-sealed container vehicles equipped with internal lashing straps. Transit via Old Delhi Road, NH-48, and national highways is tracked with live satellite GPS.</p>
            </div>
        </div>

        <div class="s14g-step-card">
            <div class="s14g-step-num">5</div>
            <div>
                <h4 style="margin-top: 0; margin-bottom: 6px; color: #1e293b; font-weight: 700;">Unpacking, Assembly & Clean-Up</h4>
                <p class="s14g-intro-p" style="margin-bottom: 0; font-size: 0.95rem;">At your destination, our staff unloads, unboxes cartons, reassembles beds and wardrobes, positions furniture according to your floor plan, and hauls away all packaging waste.</p>
            </div>
        </div>

        <div class="s14g-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/double-bed-furniture-dismantling-ranchi.jpg" alt="Carpentry and furniture dismantling in Sector 14 Gurgaon" width="580" height="360">
            <div class="s14g-image-caption">Skilled carpenters carefully disassembling solid wooden double beds and wardrobes for scratch-free transit</div>
        </div>
    </section>

    <!-- Why Choose Shree Ashirwad in Sector 14 -->
    <section>
        <h2 class="s14g-section-heading">Why Choose Shree Ashirwad in Sector 14 Gurgaon</h2>
        <p class="s14g-intro-p">Families, businessmen, and civil service officers across Sector 14 rely on Shree Ashirwad Packers and Movers for our integrity, punctuality, and proven moving standards:</p>

        <div class="s14g-grid-3">
            <div class="s14g-card">
                <h3>100% In-House Trained Staff</h3>
                <p>Background-verified, full-time logistics staff trained in gentle furniture handling and electronics packing. Zero casual daily laborers deployed on your move.</p>
            </div>
            <div class="s14g-card">
                <h3>Old Gurgaon Expertise</h3>
                <p>In-depth familiarity with colony street layouts, stilt parking clearances, staircase carries, and local peak traffic hours across Sector 14 and Civil Lines.</p>
            </div>
            <div class="s14g-card">
                <h3>Heavy Furniture Mastery</h3>
                <p>Specialized handling techniques for heavy sheesham beds, antique cabinets, marble mandirs, and large appliances with zero structural scuffs.</p>
            </div>
            <div class="s14g-card">
                <h3>Punctual Fleet Operations</h3>
                <p>We respect your schedule, arriving strictly on time and completing loading smoothly before local evening traffic increases.</p>
            </div>
            <div class="s14g-card">
                <h3>Inter-State Corridor Network</h3>
                <p>Direct scheduled container transport connecting Sector 14 to Bihar, Jharkhand, West Bengal, and southern states with guaranteed timelines.</p>
            </div>
            <div class="s14g-card">
                <h3>Dedicated Move Supervisor</h3>
                <p>A single point of contact oversees your entire relocation from survey to final room placement and debriefing.</p>
            </div>
        </div>

        <div class="s14g-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door relocation truck in Sector 14 Gurgaon" width="580" height="360">
            <div class="s14g-image-caption">Weatherproof container trucks ensuring clean, secure, and on-time door-to-door shifting in Sector 14 Gurgaon</div>
        </div>
    </section>

    <!-- Frequently Asked Questions -->
    <section>
        <h2 class="s14g-section-heading">Frequently Asked Questions — Sector 14 Relocations</h2>
        <p class="s14g-intro-p">Clear answers to frequent inquiries regarding household moving, kothi shifting, and pricing in Sector 14 Gurgaon.</p>

        <div class="s14g-faq-item">
            <div class="s14g-faq-question">How do you manage moving heavy wooden furniture in independent kothis and builder floors in Sector 14?</div>
            <p class="s14g-faq-answer">Sector 14 features established independent houses and builder floors with solid sheesham or teakwood furnishings. Our master carpenters disassemble heavy four-poster beds, wardrobes, and dining tables, protect them with multi-layer bubble wrap, and use heavy-duty hoisting straps for upper-floor stair navigation.</p>
        </div>

        <div class="s14g-faq-item">
            <div class="s14g-faq-question">Are there truck size or parking restrictions on internal colony lanes in Sector 14?</div>
            <p class="s14g-faq-answer">While Sector 14 has wide primary access avenues from Old Delhi Road and Mehrauli Road, internal residential lanes can experience tight parking. We deploy compact 14-foot enclosed container trucks and coordinate morning loading slots to avoid local traffic congestion.</p>
        </div>

        <div class="s14g-faq-item">
            <div class="s14g-faq-question">What are the moving charges for residential shifting in Sector 14 Gurgaon?</div>
            <p class="s14g-faq-answer">Local shifting within Sector 14 or adjacent Old Gurgaon sectors typically ranges from ₹4,500 to ₹8,000 for a 1 BHK, ₹7,200 to ₹13,000 for a 2 BHK, and ₹11,500 to ₹18,500 for a 3 BHK kothi or builder floor, covering complete packing, carpentry, transport, and unloading.</p>
        </div>

        <div class="s14g-faq-item">
            <div class="s14g-faq-question">Can you handle long-distance inter-state moves from Sector 14 Gurgaon?</div>
            <p class="s14g-faq-answer">Yes. We operate direct linehaul container services connecting Sector 14 to Bihar, Jharkhand, West Bengal, and across India, backed by comprehensive transit insurance and GPS-tracked container transport.</p>
        </div>

        <div class="s14g-faq-item">
            <div class="s14g-faq-question">How many days in advance should I schedule my Sector 14 move?</div>
            <p class="s14g-faq-answer">We recommend booking your move 2 to 3 days in advance to allow adequate time for parking logistics and crew allocation, especially for month-end dates or weekend relocations.</p>
        </div>
    </section>

    <!-- Connected Hyper-Local Network Cluster -->
    <section>
        <h2 class="s14g-section-heading">Connected Gurgaon & NCR Moving Hubs</h2>
        <p class="s14g-intro-p">Shree Ashirwad Packers and Movers maintains an integrated network spanning major residential and corporate micro-markets across Gurgaon. Explore our sister hubs below:</p>

        <div class="s14g-cluster-grid">
            <div class="s14g-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-gurgaon">Gurgaon City Authority Hub</a>
            </div>
            <div class="s14g-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dlf-phase-1-gurgaon">DLF Phase 1 Gurgaon</a>
            </div>
            <div class="s14g-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dlf-phase-5-gurgaon">DLF Phase 5 Gurgaon</a>
            </div>
            <div class="s14g-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-cyber-city-gurgaon">Cyber City Gurgaon</a>
            </div>
            <div class="s14g-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sohna-road-gurgaon">Sohna Road Gurgaon</a>
            </div>
            <div class="s14g-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-golf-course-extension-gurgaon">Golf Course Extension</a>
            </div>
            <div class="s14g-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-sector-56-gurgaon">Sector 56 Gurgaon</a>
            </div>
            <div class="s14g-cluster-card">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-palam-vihar-gurgaon">Palam Vihar Gurgaon</a>
            </div>
        </div>
    </section>
</main>

<?php
// Include the main site footer partial
include_once ROOT_PATH . '/includes/footer.php';
?>

</body>
</html>
