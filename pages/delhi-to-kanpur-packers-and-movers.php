<?php
/**
 * Page: Delhi to Kanpur Packers and Movers
 * Route: Delhi (NCR) -> Kanpur (Uttar Pradesh)
 * Distance: ~470 km via Yamuna Expressway & Agra-Lucknow Expressway / NH19
 */
require_once __DIR__ . '/../includes/config.php';

$page_title = "Delhi to Kanpur Packers and Movers | Reliable Shifting Services";
$page_description = "Book reliable Delhi to Kanpur packers and movers with Shree Ashirwad Packers. Express expressway transit, fragile packing, bike & car transport & closed containers.";
$canonical_url = SITE_BASE_URL . "/delhi-to-kanpur-packers-and-movers";
$page_keywords = "packers and movers delhi to kanpur, delhi kanpur household shifting, luggage transport delhi to kanpur, bike transport delhi to kanpur, packers movers delhi to kanpur charges, car carrier delhi to kanpur";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>" />
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <style>
        .dlk-wrap { max-width: 1200px; margin: 0 auto; padding: 20px 15px; font-family: 'Segoe UI', Roboto, Arial, sans-serif; color: #2d3748; line-height: 1.6; }
        .dlk-hero { background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 50%, #0284c7 100%); color: #ffffff; padding: 48px 24px; border-radius: 12px; margin-bottom: 32px; text-align: center; }
        .dlk-badge { display: inline-block; background: #38bdf8; color: #0f172a; padding: 6px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 16px; letter-spacing: 0.5px; }
        .dlk-h1 { font-size: 32px; font-weight: 800; margin-bottom: 16px; line-height: 1.25; color: #ffffff; }
        .dlk-lead { font-size: 17px; max-width: 860px; margin: 0 auto 20px; opacity: 0.95; }
        .dlk-section { margin-bottom: 40px; }
        .dlk-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 24px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); margin-bottom: 24px; }
        .dlk-grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; }
        .dlk-grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; }
        .dlk-table { width: 100%; border-collapse: collapse; margin: 20px 0; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.04); }
        .dlk-table th { background: #1e3a8a; color: #ffffff; text-align: left; padding: 12px 16px; font-weight: 600; font-size: 14px; }
        .dlk-table td { padding: 12px 16px; border-bottom: 1px solid #e2e8f0; font-size: 14px; color: #4a5568; }
        .dlk-table tr:hover { background-color: #f8fafc; }
        .dlk-img-box { max-width: 580px; margin: 24px auto; border-radius: 12px; overflow: hidden; box-shadow: 0 6px 16px rgba(0,0,0,0.08); text-align: center; }
        .dlk-img-box img { width: 100%; height: auto; display: block; object-fit: cover; }
        .dlk-list { list-style: none; padding-left: 0; }
        .dlk-list li { position: relative; padding-left: 26px; margin-bottom: 10px; color: #4a5568; }
        .dlk-list li::before { content: "✔"; position: absolute; left: 0; color: #0284c7; font-weight: bold; }
        .dlk-faq { background: #f8fafc; border-radius: 8px; padding: 18px 20px; margin-bottom: 14px; border-left: 4px solid #0284c7; }
        .dlk-faq-q { font-weight: 700; color: #1e3a8a; font-size: 16px; margin-bottom: 8px; }
        .dlk-faq-a { font-size: 14.5px; color: #4a5568; line-height: 1.6; }
        .dlk-cta { background: linear-gradient(135deg, #0284c7 0%, #0f172a 100%); color: #ffffff; text-align: center; padding: 36px 20px; border-radius: 12px; margin-top: 36px; }
        @media (max-width: 768px) { .dlk-h1 { font-size: 24px; } .dlk-wrap { padding: 15px 10px; } }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Delhi",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-9334421111",
        "priceRange": "₹8,500 - ₹46,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Plot 18, Transport Nagar, Outer Ring Road",
            "addressLocality": "New Delhi",
            "addressRegion": "Delhi",
            "postalCode": "110036",
            "addressCountry": "IN"
        },
        "description": "Licensed packers and movers operating Delhi to Kanpur intercity relocations, corporate transfers, vehicle carriers, and expressway container shipping."
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
                "name": "Packers and Movers Delhi to Kanpur",
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
        "serviceType": "Intercity Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            { "@type": "City", "name": "Delhi" },
            { "@type": "City", "name": "Kanpur" }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Delhi to Kanpur Relocation Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Household Relocation Delhi to Kanpur"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Two-Wheeler and Car Relocation"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Industrial and Corporate Office Relocation"
                    }
                }
            ]
        }
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
                "name": "How long does a moving truck take from Delhi to Kanpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Delhi and Kanpur is approximately 470 km via the Yamuna Expressway and Agra-Lucknow Expressway. A dedicated closed container truck completes the move in 8 to 12 hours door-to-door, while consolidated shipments take 24 to 36 hours."
                }
            },
            {
                "@type": "Question",
                "name": "What are the standard household moving charges from Delhi to Kanpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Estimated costs range between ₹9,500 and ₹14,500 for a 1 BHK home, ₹14,500 to ₹21,000 for a 2 BHK apartment, and ₹21,000 to ₹31,000 for a 3 BHK family house, covering multi-layer packing and direct expressway transit."
                }
            },
            {
                "@type": "Question",
                "name": "Can you arrange moving to educational institutes like IIT Kanpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly relocate professors, scientists, research scholars, and students shifting between Delhi NCR educational hubs and IIT Kanpur campus or HBTI with specialized book and instrumentation packing."
                }
            },
            {
                "@type": "Question",
                "name": "How are two-wheelers and automobiles shipped from Delhi to Kanpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Bikes and cars are transported inside enclosed car carriers or dedicated container compartments. Two-wheelers receive multi-layer foam and bubble padding, while cars are secured using hydraulic wheel-chocks."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide moving services across Noida, Greater Noida, and Gurugram?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our Delhi NCR pickup network includes all localities across New Delhi, South Delhi, West Delhi, Noida, Greater Noida, Ghaziabad, Faridabad, and Gurugram."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once __DIR__ . '/../includes/header.php'; ?>

<main class="dlk-wrap">
    <!-- Hero Section -->
    <section class="dlk-hero">
        <span class="dlk-badge">Express Expressway Highway Corridor</span>
        <h1 class="dlk-h1">Trusted Delhi to Kanpur Packers and Movers</h1>
        <p class="dlk-lead">Premium door-to-door household shifting, specialized bike & car carriers, multi-layer packing, and express closed container transport connecting Delhi NCR to Kanpur.</p>
    </section>

    <!-- Section 1: Overview & Logistics Route -->
    <section class="dlk-section">
        <div class="dlk-card">
            <h2>Seamless Intercity Moving from Delhi to Kanpur</h2>
            <p>Relocating from the national capital of Delhi to Kanpur—the historic industrial and educational hub of Uttar Pradesh—is a well-established relocation route. Whether you are moving due to a corporate posting, banking transfer, defense re-assignment, or joining academic institutions such as IIT Kanpur, Shree Ashirwad Packers and Movers provides tested logistics competence and peace of mind.</p>
            <p>The standard transit distance is approximately 470 km, primarily routed via the world-class Yamuna Expressway and the Agra-Lucknow Expressway, or alternately along NH19 (Grand Trunk Road). Utilizing these high-speed controlled-access expressways, our dedicated closed container fleet avoids traditional highway congestion, completing door-to-door transit within 8 to 12 hours.</p>
            
            <div class="dlk-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed container transport truck on Delhi to Kanpur expressway corridor" width="580" height="340" loading="lazy">
            </div>
            
            <p>For return relocations back to the national capital, we provide daily container availability through our synchronized <a href="<?php echo SITE_BASE_URL; ?>/kanpur-to-delhi-packers-and-movers">Kanpur to Delhi packers and movers service</a>, featuring identical quality benchmarks and transparent terms.</p>
        </div>
    </section>

    <!-- Section 2: Complete Delhi NCR Pickup Coverage -->
    <section class="dlk-section">
        <div class="dlk-card">
            <h2>Doorstep Packing Across All Delhi NCR Localities</h2>
            <p>Delhi NCR is an expansive territory characterized by diverse residential structures, from gated multi-story apartment condominiums in Dwarka to private builder floors in South Delhi. Our local packing coordinators handle society entry passes, security permissions, and service elevator reservations with complete proficiency.</p>
            <p>Our fleet operates across all sectors and micro-markets of Delhi NCR, deploying customized packing crews with high-capacity loading equipment, heavy furniture dollies, and floor runners to preserve your premises during move-out:</p>
            
            <div class="dlk-grid-3">
                <div class="dlk-card">
                    <h4>South & Central Delhi</h4>
                    <ul class="dlk-list">
                        <li>Saket, Vasant Kunj & Greater Kailash</li>
                        <li>Hauz Khas, Green Park & Malviya Nagar</li>
                        <li>Chanakyapuri, Connaught Place & Karol Bagh</li>
                        <li>Lajpat Nagar, Defence Colony & South Extension</li>
                        <li>Nehru Place, Kalkaji & CR Park</li>
                    </ul>
                </div>
                <div class="dlk-card">
                    <h4>West & North Delhi</h4>
                    <ul class="dlk-list">
                        <li>Dwarka (All Sectors) & Janakpuri</li>
                        <li>Rohini (All Sectors) & Pitampura</li>
                        <li>Paschim Vihar, Punjabi Bagh & Rajouri Garden</li>
                        <li>Model Town, Civil Lines & Shalimar Bagh</li>
                        <li>Uttam Nagar, Tilak Nagar & Vikaspuri</li>
                    </ul>
                </div>
                <div class="dlk-card">
                    <h4>East Delhi & NCR Satellite Hubs</h4>
                    <ul class="dlk-list">
                        <li>Mayur Vihar (Phases 1, 2, 3) & Laxmi Nagar</li>
                        <li>Preet Vihar, Anand Vihar & Patparganj</li>
                        <li>Noida (Sectors 15 to 150) & Greater Noida</li>
                        <li>Gurugram (DLF Phases, Cyber City & Sohna Road)</li>
                        <li>Ghaziabad (Indirapuram & Vaishali)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Transparent Pricing Table -->
    <section class="dlk-section">
        <div class="dlk-card">
            <h2>Estimated Cost of Shifting: Delhi to Kanpur</h2>
            <p>We provide upfront, itemized quotes without hidden surcharges or surprise tolls. Below is an indicative tariff guide for domestic shifting from Delhi to Kanpur based on home size, packaging materials, and transit mode:</p>
            
            <table class="dlk-table">
                <thead>
                    <tr>
                        <th>Inventory Scope</th>
                        <th>Standard Packing & Transit</th>
                        <th>Multi-Layer Packing & Handling</th>
                        <th>Dedicated Fast-Track Move</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1 BHK Complete Home Shifting</td>
                        <td>₹9,500 - ₹13,500</td>
                        <td>₹12,500 - ₹16,500</td>
                        <td>₹16,000 - ₹20,500</td>
                    </tr>
                    <tr>
                        <td>2 BHK Standard Household</td>
                        <td>₹14,500 - ₹19,500</td>
                        <td>₹18,000 - ₹24,000</td>
                        <td>₹23,500 - ₹29,500</td>
                    </tr>
                    <tr>
                        <td>3 BHK Large Family Residence</td>
                        <td>₹21,000 - ₹28,000</td>
                        <td>₹26,000 - ₹34,500</td>
                        <td>₹33,000 - ₹42,000</td>
                    </tr>
                    <tr>
                        <td>4 BHK / Luxury Villa Relocation</td>
                        <td>₹29,000 - ₹38,000</td>
                        <td>₹36,000 - ₹46,000</td>
                        <td>₹44,000 - ₹55,000</td>
                    </tr>
                    <tr>
                        <td>Two-Wheeler (Motorcycle / Scooter)</td>
                        <td>₹3,000 - ₹4,500</td>
                        <td>₹4,200 - ₹5,800</td>
                        <td>₹5,500 - ₹7,200</td>
                    </tr>
                    <tr>
                        <td>Car Relocation (Hatchback/Sedan)</td>
                        <td>₹8,500 - ₹12,500</td>
                        <td>₹11,000 - ₹15,500</td>
                        <td>₹14,000 - ₹19,000</td>
                    </tr>
                </tbody>
            </table>
            
            <p>For custom volume pricing or multi-point pickups across Delhi NCR, calculate tariffs using our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">real-time shifting charges calculator</a> or speak directly with our intercity operations desk.</p>
        </div>
    </section>

    <!-- Section 4: Multi-Layer Packaging & Handling -->
    <section class="dlk-section">
        <div class="dlk-card">
            <h2>Multi-Layer Protective Packing for Household Goods</h2>
            <p>Expressway transit entails high vehicle speeds where sudden braking and highway curves can exert physical forces on loaded cargo. At Shree Ashirwad Packers, we enforce an uncompromising multi-layer packaging protocol engineered to absorb transit shocks and preserve pristine finishes.</p>
            <p>We utilize industrial-grade materials including 5-ply and 7-ply corrugated sheets, heavy bubble film rolls, shrink stretch films, corner angle boards, and customized wooden crates. Glass dining tops, LED screens, and antique artifacts are wrapped individually and placed into padded containers.</p>
            
            <div class="dlk-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi-layer bubble wrap and sturdy box packaging for Delhi to Kanpur household goods" width="580" height="340" loading="lazy">
            </div>
            
            <div class="dlk-grid-2">
                <div>
                    <h3>Furniture & Heavy Appliances</h3>
                    <ul class="dlk-list">
                        <li>Dismantling of modular king beds, wardrobes, and modular desks</li>
                        <li>Foam cushioning on polished wooden edges and handles</li>
                        <li>High-density corrugated edge guards on all furniture corners</li>
                        <li>Stretch wrapping against airborne moisture, soot, and dust</li>
                        <li>Hardware fasteners labeled in zip-pouches and taped to frames</li>
                    </ul>
                </div>
                <div>
                    <h3>Electronics & Delicate Crockery</h3>
                    <ul class="dlk-list">
                        <li>Custom wooden crating for large OLED/QLED smart televisions</li>
                        <li>Anti-static bubble film lining for PCs, monitors, and soundbars</li>
                        <li>Cushioned cell-divider boxes for glassware and bone china</li>
                        <li>Transport locking bolts fitted to washing machine drums</li>
                        <li>Waterproof laminated covers for mattresses and premium upholstery</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 5: Automobile Transportation (Bikes & Cars) -->
    <section class="dlk-section">
        <div class="dlk-card">
            <h2>Specialized Vehicle Relocation: Two-Wheelers & Cars</h2>
            <p>Driving long stretches across expressways exposes automobiles and motorcycles to flying stone debris, excessive engine wear, and highway exhaustion. Our specialized automobile transportation service ensures your personal vehicle reaches Kanpur safely inside enclosed carriers.</p>
            <p>Every vehicle undergoes a formal pre-loading joint inspection. We record existing odometer readings, scratch profiles, and fuel amounts on digital condition sheets. Rearview mirrors are wrapped, battery terminals safely disconnected, and vehicles secured with high-grade synthetic wheel restraints.</p>
            
            <div class="dlk-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Dedicated motorcycle transport carrier for Delhi to Kanpur vehicle relocation" width="580" height="340" loading="lazy">
            </div>

            <div class="dlk-grid-3">
                <div class="dlk-card">
                    <h4>Multi-Point Bike Lashing</h4>
                    <p>Heavy-duty synthetic ratchet straps secure front forks and rear frames, preventing all rotational and lateral motion during transport.</p>
                </div>
                <div class="dlk-card">
                    <h4>Hydraulic Car Ramps</h4>
                    <p>Specialized hydraulic loading ramps eliminate undercarriage scraping on low-clearance sedans and luxury performance cars.</p>
                </div>
                <div class="dlk-card">
                    <h4>Complete Transit Cover</h4>
                    <p>Optional all-risk vehicle transit insurance protects against accidental collision, highway hazards, or unforeseen weather disruptions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Comprehensive Locality Delivery in Kanpur -->
    <section class="dlk-section">
        <div class="dlk-card">
            <h2>Precision Delivery Across All Kanpur Localities</h2>
            <p>Upon arriving in Kanpur, our local delivery crew navigates city routes with absolute familiarity. From the academic corridors of Kalyanpur to the upscale residential colonies of Swaroop Nagar and Civil Lines, we deliver directly to your doorstep with zero transshipment delays.</p>
            <p>We provide localized delivery to all primary residential, commercial, and institutional zones across Kanpur:</p>
            
            <div class="dlk-grid-3">
                <div class="dlk-card">
                    <h4>Prime Residential & Civil Belts</h4>
                    <ul class="dlk-list">
                        <li>Swaroop Nagar, Civil Lines & Tilak Nagar</li>
                        <li>Kidwai Nagar & Govind Nagar Sectors</li>
                        <li>Shastri Nagar, Lajpat Nagar & Sarvodaya Nagar</li>
                        <li>Kakadeo (Coaching & Student Hubs)</li>
                        <li>Kanpur Cantonment & Mall Road</li>
                    </ul>
                </div>
                <div class="dlk-card">
                    <h4>Academic & Modern Suburbs</h4>
                    <ul class="dlk-list">
                        <li>IIT Kanpur Campus & Residential Quarters</li>
                        <li>Kalyanpur, HBTI & CSJM University Area</li>
                        <li>Rawatpur, Vikas Nagar & Gurudev Palace</li>
                        <li>Barra (Phases 1 to 8) & Damodar Nagar</li>
                        <li>Nawabganj & Azad Nagar Localities</li>
                    </ul>
                </div>
                <div class="dlk-card">
                    <h4>Industrial & Logistics Belts</h4>
                    <ul class="dlk-list">
                        <li>Panki Industrial Area & Power House</li>
                        <li>Fazalganj & Dada Nagar Industrial Zones</li>
                        <li>Jajmau Leather Complex & Defense Colony</li>
                        <li>Chakeri & Air Force Station Quarters</li>
                        <li>Rooma & GT Road Industrial Corridors</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7: Unpacking, Reassembly & Debris Removal -->
    <section class="dlk-section">
        <div class="dlk-card">
            <h2>Full-Service Unpacking & Furniture Assembly</h2>
            <p>Our commitment extends all the way into your living room. Moving into a new house should not involve days of exhausting box-cutting and furniture struggles. Our destination crews unpack cartons room-by-room, positioning items according to your instructions.</p>
            <p>We reassemble bed frames, fix modular dining sets, reinstall television wall mounts upon request, and position heavy refrigerators and washing machines in their designated utility niches. Once setup is finalized, we clean up and discard all bubble sheets, corrugated boxes, and plastic wraps, leaving your home spotless.</p>
            
            <div class="dlk-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Professional unpacking and room setup service in Kanpur home" width="580" height="340" loading="lazy">
            </div>

            <p>All items are tallied against your original consignment note to ensure zero missing packages or unchecked cartons, giving you total peace of mind on shifting day.</p>
        </div>
    </section>

    <!-- Section 8: Step-by-Step Moving Protocol -->
    <section class="dlk-section">
        <div class="dlk-card">
            <h2>Our 5-Stage Moving Execution Workflow</h2>
            <p>To eliminate moving day stress, Shree Ashirwad Packers adheres to an established execution protocol that keeps you informed throughout every stage of your Delhi to Kanpur relocation:</p>
            
            <div class="dlk-grid-3">
                <div class="dlk-card">
                    <h4>1. Virtual / Physical Survey</h4>
                    <p>Our logistics coordinator assesses your inventory list, fragile articles, and vehicle shifting requirements to provide a binding, clear price quotation.</p>
                </div>
                <div class="dlk-card">
                    <h4>2. Expert Packing Day</h4>
                    <p>Our uniformed team arrives on schedule with factory-grade packing supplies, disassembling furniture and labeling cartons with room tags.</p>
                </div>
                <div class="dlk-card">
                    <h4>3. Secure Container Loading</h4>
                    <p>Heavier appliances and wooden furniture are placed at container floor level, followed by cushioned boxes, locked in with ratchet tie-down belts.</p>
                </div>
                <div class="dlk-card">
                    <h4>4. Highway Express Transit</h4>
                    <p>Your sealed container moves across Yamuna and Agra-Lucknow Expressways with real-time GPS tracking, reaching Kanpur within scheduled delivery hours.</p>
                </div>
                <div class="dlk-card">
                    <h4>5. Doorstep Unloading & Setup</h4>
                    <p>Our destination crew unloads your belongings into respective rooms, reassembles furnishings, and hauls away all packaging waste.</p>
                </div>
                <div class="dlk-card">
                    <h4>6. Joint Audit & Sign-off</h4>
                    <p>You inspect your items against the original digital manifest to confirm full condition satisfaction before final invoice closing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Comprehensive FAQ -->
    <section class="dlk-section">
        <div class="dlk-card">
            <h2>Frequently Asked Questions</h2>
            
            <div class="dlk-faq">
                <div class="dlk-faq-q">How long does a moving truck take from Delhi to Kanpur?</div>
                <div class="dlk-faq-a">The highway distance between Delhi and Kanpur is approximately 470 km via the Yamuna Expressway and Agra-Lucknow Expressway. A dedicated closed container truck completes the move in 8 to 12 hours door-to-door, while consolidated shipments take 24 to 36 hours.</div>
            </div>

            <div class="dlk-faq">
                <div class="dlk-faq-q">What are the standard household moving charges from Delhi to Kanpur?</div>
                <div class="dlk-faq-a">Estimated costs range between ₹9,500 and ₹14,500 for a 1 BHK home, ₹14,500 to ₹21,000 for a 2 BHK apartment, and ₹21,000 to ₹31,000 for a 3 BHK family house, covering multi-layer packing and direct expressway transit.</div>
            </div>

            <div class="dlk-faq">
                <div class="dlk-faq-q">Can you arrange moving to educational institutes like IIT Kanpur?</div>
                <div class="dlk-faq-a">Yes, we regularly relocate professors, scientists, research scholars, and students shifting between Delhi NCR educational hubs and IIT Kanpur campus or HBTI with specialized book and instrumentation packing.</div>
            </div>

            <div class="dlk-faq">
                <div class="dlk-faq-q">How are two-wheelers and automobiles shipped from Delhi to Kanpur?</div>
                <div class="dlk-faq-a">Bikes and cars are transported inside enclosed car carriers or dedicated container compartments. Two-wheelers receive multi-layer foam and bubble padding, while cars are secured using hydraulic wheel-chocks.</div>
            </div>

            <div class="dlk-faq">
                <div class="dlk-faq-q">Do you provide moving services across Noida, Greater Noida, and Gurugram?</div>
                <div class="dlk-faq-a">Yes, our Delhi NCR pickup network includes all localities across New Delhi, South Delhi, West Delhi, Noida, Greater Noida, Ghaziabad, Faridabad, and Gurugram.</div>
            </div>

            <div class="dlk-faq">
                <div class="dlk-faq-q">Is transit insurance mandatory for Delhi to Kanpur relocation?</div>
                <div class="dlk-faq-a">We strongly recommend comprehensive all-risk transit insurance (1.5% - 3% of declared value) to protect your valuable furniture, electronics, and fragile home inventory against all highway transit risks.</div>
            </div>
        </div>
    </section>

    <!-- Section 10: Strategic Corridor Network (Cluster Links) -->
    <section class="dlk-section">
        <div class="dlk-card">
            <h2>Connected North India & National Moving Corridors</h2>
            <p>Explore our established network of intercity moving corridors across North India and major industrial centers:</p>
            <div class="dlk-grid-3">
                <div class="dlk-card">
                    <h4>Direct Return Link</h4>
                    <p><a href="<?php echo SITE_BASE_URL; ?>/kanpur-to-delhi-packers-and-movers">Kanpur to Delhi Packers and Movers</a></p>
                </div>
                <div class="dlk-card">
                    <h4>Northern Belt Corridor</h4>
                    <p><a href="<?php echo SITE_BASE_URL; ?>/delhi-to-patna-packers-and-movers">Delhi to Patna Moving Services</a></p>
                </div>
                <div class="dlk-card">
                    <h4>Western Industrial Belt</h4>
                    <p><a href="<?php echo SITE_BASE_URL; ?>/delhi-to-ahmedabad-packers-and-movers">Delhi to Ahmedabad Packers and Movers</a></p>
                </div>
                <div class="dlk-card">
                    <h4>Central India Link</h4>
                    <p><a href="<?php echo SITE_BASE_URL; ?>/delhi-to-raipur-packers-and-movers">Delhi to Raipur Packers and Movers</a></p>
                </div>
                <div class="dlk-card">
                    <h4>Southern Metro Link</h4>
                    <p><a href="<?php echo SITE_BASE_URL; ?>/delhi-to-chennai-packers-and-movers">Delhi to Chennai Moving Services</a></p>
                </div>
                <div class="dlk-card">
                    <h4>Company Central Portal</h4>
                    <p><a href="<?php echo SITE_BASE_URL; ?>/">Shree Ashirwad Logistics HQ</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 11: CTA Banner -->
    <section class="dlk-cta">
        <h2>Schedule Your Delhi to Kanpur Relocation Today</h2>
        <p>Contact our intercity logistics team for prompt quotations, verified vehicle carrier slots, and reliable closed container transport.</p>
        <p><strong>Call 24/7 Helpline: +91-9334421111 | Email: support@shreeashirwadpackers.com</strong></p>
    </section>
</main>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
