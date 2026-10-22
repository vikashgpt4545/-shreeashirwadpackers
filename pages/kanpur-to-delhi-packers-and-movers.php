<?php
/**
 * Page: Kanpur to Delhi Packers and Movers
 * Route: Kanpur (Uttar Pradesh) -> Delhi (NCR)
 * Distance: ~470 km via Agra-Lucknow Expressway & Yamuna Expressway / NH19
 */
require_once __DIR__ . '/../includes/config.php';

$page_title = "Kanpur to Delhi Packers and Movers | Reliable Shifting Services";
$page_description = "Hire top Kanpur to Delhi packers and movers with Shree Ashirwad Packers. Express expressway transit, fragile packing, bike & car transport & closed containers.";
$canonical_url = SITE_BASE_URL . "/kanpur-to-delhi-packers-and-movers";
$page_keywords = "packers and movers kanpur to delhi, kanpur delhi household shifting, luggage transport kanpur to delhi, bike transport kanpur to delhi, packers movers kanpur to delhi charges, car carrier kanpur to delhi";
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
        .kpd-wrap { max-width: 1200px; margin: 0 auto; padding: 20px 15px; font-family: 'Segoe UI', Roboto, Arial, sans-serif; color: #2d3748; line-height: 1.6; }
        .kpd-hero { background: linear-gradient(135deg, #1e3a8a 0%, #0369a1 50%, #0284c7 100%); color: #ffffff; padding: 48px 24px; border-radius: 12px; margin-bottom: 32px; text-align: center; }
        .kpd-badge { display: inline-block; background: #38bdf8; color: #0f172a; padding: 6px 16px; border-radius: 20px; font-size: 13px; font-weight: 700; text-transform: uppercase; margin-bottom: 16px; letter-spacing: 0.5px; }
        .kpd-h1 { font-size: 32px; font-weight: 800; margin-bottom: 16px; line-height: 1.25; color: #ffffff; }
        .kpd-lead { font-size: 17px; max-width: 860px; margin: 0 auto 20px; opacity: 0.95; }
        .kpd-section { margin-bottom: 40px; }
        .kpd-card { background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 24px; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.05); margin-bottom: 24px; }
        .kpd-grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; }
        .kpd-grid-3 { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; }
        .kpd-table { width: 100%; border-collapse: collapse; margin: 20px 0; background: #ffffff; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 4px rgba(0,0,0,0.04); }
        .kpd-table th { background: #1e3a8a; color: #ffffff; text-align: left; padding: 12px 16px; font-weight: 600; font-size: 14px; }
        .kpd-table td { padding: 12px 16px; border-bottom: 1px solid #e2e8f0; font-size: 14px; color: #4a5568; }
        .kpd-table tr:hover { background-color: #f8fafc; }
        .kpd-img-box { max-width: 580px; margin: 24px auto; border-radius: 12px; overflow: hidden; box-shadow: 0 6px 16px rgba(0,0,0,0.08); text-align: center; }
        .kpd-img-box img { width: 100%; height: auto; display: block; object-fit: cover; }
        .kpd-list { list-style: none; padding-left: 0; }
        .kpd-list li { position: relative; padding-left: 26px; margin-bottom: 10px; color: #4a5568; }
        .kpd-list li::before { content: "✔"; position: absolute; left: 0; color: #0284c7; font-weight: bold; }
        .kpd-faq { background: #f8fafc; border-radius: 8px; padding: 18px 20px; margin-bottom: 14px; border-left: 4px solid #0284c7; }
        .kpd-faq-q { font-weight: 700; color: #1e3a8a; font-size: 16px; margin-bottom: 8px; }
        .kpd-faq-a { font-size: 14.5px; color: #4a5568; line-height: 1.6; }
        .kpd-cta { background: linear-gradient(135deg, #0284c7 0%, #1e3a8a 100%); color: #ffffff; text-align: center; padding: 36px 20px; border-radius: 12px; margin-top: 36px; }
        @media (max-width: 768px) { .kpd-h1 { font-size: 24px; } .kpd-wrap { padding: 15px 10px; } }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Kanpur",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-9334421111",
        "priceRange": "₹8,500 - ₹46,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "GT Road, Near Fazalganj Chauraha",
            "addressLocality": "Kanpur",
            "addressRegion": "Uttar Pradesh",
            "postalCode": "208012",
            "addressCountry": "IN"
        },
        "description": "Licensed packers and movers managing Kanpur to Delhi household relocations, vehicle transport, corporate shifting, and expressway closed container logistics."
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
                "name": "Packers and Movers Kanpur to Delhi",
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
        "serviceType": "Intercity Moving & Transport Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            { "@type": "City", "name": "Kanpur" },
            { "@type": "City", "name": "Delhi" }
        ],
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Kanpur to Delhi Relocation Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Kanpur to Delhi Household Relocation"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Vehicle Transportation (Bikes & Cars)"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Academic & Corporate Office Relocation"
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
                "name": "How long does a moving truck take from Kanpur to Delhi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Kanpur and Delhi is approximately 470 km via the Agra-Lucknow Expressway and Yamuna Expressway. A dedicated closed container truck completes the move in 8 to 12 hours door-to-door, while consolidated shipments arrive in 24 to 36 hours."
                }
            },
            {
                "@type": "Question",
                "name": "What are the standard household shifting charges from Kanpur to Delhi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Indicative tariffs range from ₹9,500 to ₹14,500 for a 1 BHK home, ₹14,500 to ₹21,000 for a 2 BHK apartment, and ₹21,000 to ₹31,000 for a 3 BHK family residence, including professional multi-layer packing and toll clearances."
                }
            },
            {
                "@type": "Question",
                "name": "Can you relocate households from IIT Kanpur campus to Delhi NCR?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly relocate faculty, researchers, and alumni from the IIT Kanpur campus and Kalyanpur to tech hubs and residential areas across Delhi, Noida, and Gurugram with specialized book and scientific equipment crating."
                }
            },
            {
                "@type": "Question",
                "name": "Do you deliver to all locations across Delhi NCR including Gurugram and Noida?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our delivery network spans every district of Delhi NCR, including South Delhi, Dwarka, Rohini, Noida, Greater Noida, Ghaziabad, and Gurugram, with complete room-specific unloading and setup."
                }
            },
            {
                "@type": "Question",
                "name": "How are cars and motorcycles transported from Kanpur to Delhi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Automobiles and two-wheelers are shipped in enclosed vehicle carriers or covered container trucks. We use wheel-chock blocks and synthetic safety ratchets to ensure zero transit movement or cosmetic scratches."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include_once __DIR__ . '/../includes/header.php'; ?>

<main class="kpd-wrap">
    <!-- Hero Section -->
    <section class="kpd-hero">
        <span class="kpd-badge">Express Expressway Highway Corridor</span>
        <h1 class="kpd-h1">Professional Kanpur to Delhi Packers and Movers</h1>
        <p class="kpd-lead">Seamless door-to-door household shifting, specialized bike & car carriers, multi-layer packing, and express closed container transport connecting Kanpur to Delhi NCR.</p>
    </section>

    <!-- Section 1: Overview & Logistics Route -->
    <section class="kpd-section">
        <div class="kpd-card">
            <h2>Reliable Intercity Moving from Kanpur to Delhi NCR</h2>
            <p>Relocating from the industrial hub of Kanpur to the national capital region of Delhi represents one of the busiest and most vital transportation corridors in North India. Whether you are transitioning to an IT campus in Gurugram, moving into a corporate role in Noida, stepping into central government service, or shifting from IIT Kanpur to a research institution in Delhi, Shree Ashirwad Packers and Movers provides dependable, certified moving assistance.</p>
            <p>The road distance between Kanpur and Delhi spans roughly 470 km. By leveraging the high-speed Agra-Lucknow Expressway and Yamuna Expressway networks, our dedicated closed container fleet bypasses bottlenecked local towns, clocking swift door-to-door transit within 8 to 12 hours. Early morning dispatches reach Delhi NCR destinations on the same evening, ready for smooth unloading and room assembly.</p>
            
            <div class="kpd-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed moving truck on Kanpur to Delhi express highway corridor" width="580" height="340" loading="lazy">
            </div>
            
            <p>We also run scheduled daily container departures from the national capital through our reciprocal <a href="<?php echo SITE_BASE_URL; ?>/delhi-to-kanpur-packers-and-movers">Delhi to Kanpur packers and movers service</a>, providing reliable round-trip logistics and shared container space savings.</p>
        </div>
    </section>

    <!-- Section 2: Complete Kanpur Locality Coverage -->
    <section class="kpd-section">
        <div class="kpd-card">
            <h2>Comprehensive Packing Coverage Across All Kanpur Localities</h2>
            <p>Kanpur features diverse urban topographies, from narrow historical commercial roads near Mall Road to sprawling institutional campuses in Kalyanpur and residential colonies in Kidwai Nagar. Our local operations team possesses intimate familiarity with local traffic regulations, narrow street navigation, and society loading protocols.</p>
            <p>We deploy right-sized feeder vehicles for inner city pockets and spacious multi-axle container trucks at major bypass junctions, guaranteeing prompt doorstep loading regardless of location:</p>
            
            <div class="kpd-grid-3">
                <div class="kpd-card">
                    <h4>Prime Civil & Residential Belts</h4>
                    <ul class="kpd-list">
                        <li>Swaroop Nagar, Civil Lines & Tilak Nagar</li>
                        <li>Kidwai Nagar & Govind Nagar Sectors</li>
                        <li>Shastri Nagar, Lajpat Nagar & Sarvodaya Nagar</li>
                        <li>Kakadeo (Coaching & Student Quarters)</li>
                        <li>Kanpur Cantonment & Mall Road Enclaves</li>
                    </ul>
                </div>
                <div class="kpd-card">
                    <h4>Academic & Suburban Townships</h4>
                    <ul class="kpd-list">
                        <li>IIT Kanpur Campus & Residential Quarters</li>
                        <li>Kalyanpur, HBTI & CSJM University Area</li>
                        <li>Rawatpur, Vikas Nagar & Gurudev Palace</li>
                        <li>Barra (Phases 1 through 8) & Damodar Nagar</li>
                        <li>Nawabganj & Azad Nagar Localities</li>
                    </ul>
                </div>
                <div class="kpd-card">
                    <h4>Industrial & Logistics Belts</h4>
                    <ul class="kpd-list">
                        <li>Panki Industrial Area & Power House</li>
                        <li>Fazalganj & Dada Nagar Industrial Estates</li>
                        <li>Jajmau Leather Cluster & Defense Colony</li>
                        <li>Chakeri & Air Force Station Quarters</li>
                        <li>Rooma & GT Road Industrial Corridors</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: Transparent Pricing Table -->
    <section class="kpd-section">
        <div class="kpd-card">
            <h2>Estimated Cost of Shifting: Kanpur to Delhi</h2>
            <p>We believe in upfront, transparent pricing without hidden destination charges. Below is an approximate tariff table for domestic shifting from Kanpur to Delhi based on inventory volume, packing standard, and vehicle category:</p>
            
            <table class="kpd-table">
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
                        <td>1 BHK Complete Home Relocation</td>
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
            
            <p>You can also compute custom estimates across interstate routes using our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">real-time shifting tariff calculator</a> or connect directly with our coordination team for an instant virtual video survey.</p>
        </div>
    </section>

    <!-- Section 4: Premium Multi-Layer Packaging -->
    <section class="kpd-section">
        <div class="kpd-card">
            <h2>Multi-Layer Protective Packing for Household Goods</h2>
            <p>Intercity transit on high-speed expressways requires durable, shock-absorbing packaging materials that resist mechanical friction, vibrations, and weather changes. At Shree Ashirwad Packers, our crews adhere to a rigorous 3-tier packing standard designed for delicate and heavy goods alike.</p>
            <p>We deploy virgin multi-ply corrugated paper, heavy-density air-bubble wraps, expandable stretch films, and reinforced edge protectors. Fragile glassware, porcelain kitchenware, and pooja brassware are wrapped individually in tissue before being packed into compartmentalized boxes.</p>
            
            <div class="kpd-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Multi-layer bubble wrap and carton packing for Kanpur household goods" width="580" height="340" loading="lazy">
            </div>
            
            <div class="kpd-grid-2">
                <div>
                    <h3>Furniture & Heavy Fixtures</h3>
                    <ul class="kpd-list">
                        <li>Dismantling of modular king beds, wardrobes, and modular desks</li>
                        <li>Foam cushioning on polished wooden edges and handles</li>
                        <li>High-density corrugated edge guards on all furniture corners</li>
                        <li>Stretch wrapping against airborne moisture, soot, and dust</li>
                        <li>Hardware fasteners labeled in zip-pouches and taped to frames</li>
                    </ul>
                </div>
                <div>
                    <h3>Electronics & Delicate Crockery</h3>
                    <ul class="kpd-list">
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
    <section class="kpd-section">
        <div class="kpd-card">
            <h2>Specialized Vehicle Relocation: Two-Wheelers & Cars</h2>
            <p>Riding a two-wheeler or driving an automobile over 470 km of expressway traffic causes physical exhaustion and exposes vehicles to highway road debris and stone chipping. Our specialized automobile transportation service moves your two-wheeler, hatchback, or sedan securely within custom vehicle carriers.</p>
            <p>Every vehicle undergoes a formal pre-loading joint inspection. We record existing odometer readings, scratch profiles, and fuel amounts on digital condition sheets. Rearview mirrors are wrapped, battery terminals safely disconnected, and vehicles secured with high-grade synthetic wheel restraints.</p>
            
            <div class="kpd-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Dedicated motorcycle transport carrier for Kanpur to Delhi vehicle relocation" width="580" height="340" loading="lazy">
            </div>

            <div class="kpd-grid-3">
                <div class="kpd-card">
                    <h4>Multi-Point Bike Lashing</h4>
                    <p>Heavy-duty synthetic ratchet straps secure front forks and rear frames, preventing all rotational and lateral motion during transport.</p>
                </div>
                <div class="kpd-card">
                    <h4>Hydraulic Car Ramps</h4>
                    <p>Specialized hydraulic loading ramps eliminate undercarriage scraping on low-clearance sedans and luxury performance cars.</p>
                </div>
                <div class="kpd-card">
                    <h4>Complete Transit Cover</h4>
                    <p>Optional all-risk vehicle transit insurance protects against accidental collision, highway hazards, or unforeseen weather disruptions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 6: Comprehensive Locality Delivery in Delhi NCR -->
    <section class="kpd-section">
        <div class="kpd-card">
            <h2>Precision Delivery Across All Delhi NCR Localities</h2>
            <p>Upon arriving in Delhi NCR via the Yamuna Expressway entry point, our local delivery teams execute smooth, room-specific placement across all residential sectors. Our crews are trained to handle society gate passes, high-rise service elevator booking windows, and basement clearance protocols.</p>
            <p>We deliver and assemble furnishings across all premier residential and corporate pockets in Delhi NCR:</p>
            
            <div class="kpd-grid-3">
                <div class="kpd-card">
                    <h4>South & Central Delhi</h4>
                    <ul class="kpd-list">
                        <li>Saket, Vasant Kunj & Greater Kailash</li>
                        <li>Hauz Khas, Green Park & Malviya Nagar</li>
                        <li>Chanakyapuri, Connaught Place & Karol Bagh</li>
                        <li>Lajpat Nagar, Defence Colony & South Extension</li>
                        <li>Nehru Place, Kalkaji & CR Park</li>
                    </ul>
                </div>
                <div class="kpd-card">
                    <h4>West & North Delhi</h4>
                    <ul class="kpd-list">
                        <li>Dwarka (All Sectors) & Janakpuri</li>
                        <li>Rohini (All Sectors) & Pitampura</li>
                        <li>Paschim Vihar, Punjabi Bagh & Rajouri Garden</li>
                        <li>Model Town, Civil Lines & Shalimar Bagh</li>
                        <li>Uttam Nagar, Tilak Nagar & Vikaspuri</li>
                    </ul>
                </div>
                <div class="kpd-card">
                    <h4>East Delhi & NCR Satellite Hubs</h4>
                    <ul class="kpd-list">
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

    <!-- Section 7: Unpacking, Reassembly & Debris Removal -->
    <section class="kpd-section">
        <div class="kpd-card">
            <h2>Full-Service Unpacking & Furniture Assembly</h2>
            <p>Our commitment extends all the way into your living room. Moving into a new house should not involve days of exhausting box-cutting and furniture struggles. Our destination crews unpack cartons room-by-room, positioning items according to your instructions.</p>
            <p>We reassemble bed frames, fix modular dining sets, reinstall television wall mounts upon request, and position heavy refrigerators and washing machines in their designated utility niches. Once setup is finalized, we clean up and discard all bubble sheets, corrugated boxes, and plastic wraps, leaving your home spotless.</p>
            
            <div class="kpd-img-box">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Professional unpacking and room setup service in Delhi residence" width="580" height="340" loading="lazy">
            </div>

            <p>All items are tallied against your original consignment note to ensure zero missing packages or unchecked cartons, giving you total peace of mind on shifting day.</p>
        </div>
    </section>

    <!-- Section 8: Step-by-Step Moving Protocol -->
    <section class="kpd-section">
        <div class="kpd-card">
            <h2>Our 5-Stage Moving Execution Workflow</h2>
            <p>To eliminate moving day stress, Shree Ashirwad Packers adheres to an established execution protocol that keeps you informed throughout every stage of your Kanpur to Delhi relocation:</p>
            
            <div class="kpd-grid-3">
                <div class="kpd-card">
                    <h4>1. Virtual / Physical Survey</h4>
                    <p>Our logistics coordinator assesses your inventory list, fragile articles, and vehicle shifting requirements to provide a binding, clear price quotation.</p>
                </div>
                <div class="kpd-card">
                    <h4>2. Expert Packing Day</h4>
                    <p>Our uniformed team arrives on schedule with factory-grade packing supplies, disassembling furniture and labeling cartons with room tags.</p>
                </div>
                <div class="kpd-card">
                    <h4>3. Secure Container Loading</h4>
                    <p>Heavier appliances and wooden furniture are placed at container floor level, followed by cushioned boxes, locked in with ratchet tie-down belts.</p>
                </div>
                <div class="kpd-card">
                    <h4>4. Highway Express Transit</h4>
                    <p>Your sealed container moves across Agra-Lucknow and Yamuna Expressways with real-time GPS tracking, reaching Delhi within scheduled delivery hours.</p>
                </div>
                <div class="kpd-card">
                    <h4>5. Doorstep Unloading & Setup</h4>
                    <p>Our destination crew unloads your belongings into respective rooms, reassembles furnishings, and hauls away all packaging waste.</p>
                </div>
                <div class="kpd-card">
                    <h4>6. Joint Audit & Sign-off</h4>
                    <p>You inspect your items against the original digital manifest to confirm full condition satisfaction before final invoice closing.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Comprehensive FAQ -->
    <section class="kpd-section">
        <div class="kpd-card">
            <h2>Frequently Asked Questions</h2>
            
            <div class="kpd-faq">
                <div class="kpd-faq-q">How long does a moving truck take from Kanpur to Delhi?</div>
                <div class="kpd-faq-a">The highway distance between Kanpur and Delhi is approximately 470 km via the Agra-Lucknow Expressway and Yamuna Expressway. A dedicated closed container truck completes the move in 8 to 12 hours door-to-door, while consolidated shipments arrive in 24 to 36 hours.</div>
            </div>

            <div class="kpd-faq">
                <div class="kpd-faq-q">What are the standard household shifting charges from Kanpur to Delhi?</div>
                <div class="kpd-faq-a">Indicative tariffs range from ₹9,500 to ₹14,500 for a 1 BHK home, ₹14,500 to ₹21,000 for a 2 BHK apartment, and ₹21,000 to ₹31,000 for a 3 BHK family residence, including professional multi-layer packing and toll clearances.</div>
            </div>

            <div class="kpd-faq">
                <div class="kpd-faq-q">Can you relocate households from IIT Kanpur campus to Delhi NCR?</div>
                <div class="kpd-faq-a">Yes, we regularly relocate faculty, researchers, and alumni from the IIT Kanpur campus and Kalyanpur to tech hubs and residential areas across Delhi, Noida, and Gurugram with specialized book and scientific equipment crating.</div>
            </div>

            <div class="kpd-faq">
                <div class="kpd-faq-q">Do you deliver to all locations across Delhi NCR including Gurugram and Noida?</div>
                <div class="kpd-faq-a">Yes, our delivery network spans every district of Delhi NCR, including South Delhi, Dwarka, Rohini, Noida, Greater Noida, Ghaziabad, and Gurugram, with complete room-specific unloading and setup.</div>
            </div>

            <div class="kpd-faq">
                <div class="kpd-faq-q">How are cars and motorcycles transported from Kanpur to Delhi?</div>
                <div class="kpd-faq-a">Automobiles and two-wheelers are shipped in enclosed vehicle carriers or covered container trucks. We use wheel-chock blocks and synthetic safety ratchets to ensure zero transit movement or cosmetic scratches.</div>
            </div>

            <div class="kpd-faq">
                <div class="kpd-faq-q">Is transit insurance recommended for Kanpur to Delhi moves?</div>
                <div class="kpd-faq-a">Yes, we strongly recommend our comprehensive all-risk transit policy (1.5% - 3%) to protect your appliances, furniture, and personal consignments against unforeseen transit eventualities.</div>
            </div>
        </div>
    </section>

    <!-- Section 10: Strategic Corridor Network (Cluster Links) -->
    <section class="kpd-section">
        <div class="kpd-card">
            <h2>Connected North India & National Moving Corridors</h2>
            <p>Explore our established network of intercity moving corridors across North India and major industrial centers:</p>
            <div class="kpd-grid-3">
                <div class="kpd-card">
                    <h4>Direct Return Link</h4>
                    <p><a href="<?php echo SITE_BASE_URL; ?>/delhi-to-kanpur-packers-and-movers">Delhi to Kanpur Packers and Movers</a></p>
                </div>
                <div class="kpd-card">
                    <h4>Eastern Gangetic Route</h4>
                    <p><a href="<?php echo SITE_BASE_URL; ?>/patna-to-delhi-packers-and-movers">Patna to Delhi Packers and Movers</a></p>
                </div>
                <div class="kpd-card">
                    <h4>Western Industrial Belt</h4>
                    <p><a href="<?php echo SITE_BASE_URL; ?>/ahmedabad-to-delhi-packers-and-movers">Ahmedabad to Delhi Moving Services</a></p>
                </div>
                <div class="kpd-card">
                    <h4>Central India Link</h4>
                    <p><a href="<?php echo SITE_BASE_URL; ?>/raipur-to-delhi-packers-and-movers">Raipur to Delhi Packers and Movers</a></p>
                </div>
                <div class="kpd-card">
                    <h4>Southern Metro Link</h4>
                    <p><a href="<?php echo SITE_BASE_URL; ?>/chennai-to-delhi-packers-and-movers">Chennai to Delhi Packers and Movers</a></p>
                </div>
                <div class="kpd-card">
                    <h4>Company Central Portal</h4>
                    <p><a href="<?php echo SITE_BASE_URL; ?>/">Shree Ashirwad Logistics HQ</a></p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 11: CTA Banner -->
    <section class="kpd-cta">
        <h2>Schedule Your Kanpur to Delhi Relocation Today</h2>
        <p>Contact our intercity logistics team for prompt quotations, verified vehicle carrier slots, and reliable closed container transport.</p>
        <p><strong>Call 24/7 Helpline: +91-9334421111 | Email: support@shreeashirwadpackers.com</strong></p>
    </section>
</main>

<?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
