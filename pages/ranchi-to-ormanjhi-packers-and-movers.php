<?php
/**
 * Page Name: Ranchi to Ormanjhi Packers and Movers
 * Route Slug: ranchi-to-ormanjhi-packers-and-movers
 * Group: Group 2 (Inside Jharkhand -> Ormanjhi) - Route 6
 * Meta Title: Packers and Movers Ranchi to Ormanjhi | Fast Local Shifting
 * Meta Description: Trusted packers and movers from Ranchi to Ormanjhi. 20 km express transit via NH-20, 5-layer packing, suburban home & hospital moves, car & bike parcel.
 */

if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Packers and Movers Ranchi to Ormanjhi | Fast Local Shifting";
$page_desc = "Trusted packers and movers from Ranchi to Ormanjhi. 20 km express transit via NH-20, 5-layer packing, suburban home & hospital moves, car & bike parcel.";
$canonical_url = "https://www.shreeashirwadpackers.com/ranchi-to-ormanjhi-packers-and-movers";
$route_origin = "Ranchi";
$route_destination = "Ormanjhi";

// Open Graph
$og_title = "Packers and Movers Ranchi to Ormanjhi | Shree Ashirwad Packers";
$og_description = "Express Ranchi to Ormanjhi household shifting, suburban villa relocations & vehicle transport via NH-20. 5-layer packing, same-day delivery, 100% damage-free safety.";
$og_url = $canonical_url;
$og_image = SITE_BASE_URL . "/images/safe-transit-container-truck-ranchi.jpg";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="ranchi to ormanjhi packers and movers, packers and movers ranchi to ormanjhi, house shifting ranchi to ormanjhi, suburban shifting ranchi ormanjhi, car transport ranchi to ormanjhi, bike parcel ranchi to ormanjhi, iba approved packers ranchi">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Ranchi">

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

    <!-- Preload Critical Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- JSON-LD Structured Data: Schema 1 - MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Ranchi to Ormanjhi",
        "image": "<?php echo $og_image; ?>",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹4,000 - ₹28,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Near Booty More, Bariatu Road",
            "addressLocality": "Ranchi",
            "addressRegion": "Jharkhand",
            "postalCode": "834009",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.3441,
            "longitude": 85.3096
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
            "opens": "00:00",
            "closes": "23:59"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://twitter.com/ashirwadpackers"
        ]
    }
    </script>

    <!-- JSON-LD Structured Data: Schema 2 - Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Suburban Intra-District Relocation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "telephone": "+91 9835565233",
            "url": "https://www.shreeashirwadpackers.com"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Ranchi"
            },
            {
                "@type": "City",
                "name": "Ormanjhi"
            }
        ],
        "description": "Professional outbound shifting from Ranchi city into Ormanjhi, Irba, and Rukka Dam residential sectors, featuring 5-layer packing, same-day delivery, hospital staff relocation, and transit insurance.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "4000",
            "eligibleRegion": {
                "@type": "Country",
                "name": "IN"
            }
        }
    }
    </script>

    <!-- JSON-LD Structured Data: Schema 3 - BreadcrumbList -->
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
                "name": "Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/services"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Ranchi to Ormanjhi",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- JSON-LD Structured Data: Schema 4 - FAQPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How long does shifting take from Ranchi to Ormanjhi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The transit distance from Ranchi to Ormanjhi is approximately 20 km via NH-20 through Booty More and BIT Mesra. Non-stop driving requires only 35 to 50 minutes. Complete home packing, truck transport, and unloading are finished within 3 to 5 hours on the same day."
                }
            },
            {
                "@type": "Question",
                "name": "What are the moving rates for 1 BHK and 2 BHK flats from Ranchi to Ormanjhi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "1 BHK household relocation from Ranchi to Ormanjhi costs ₹4,000 to ₹7,500, while a standard 2 BHK apartment move ranges from ₹7,000 to ₹12,500 including 5-layer packing, loading, truck freight, and furniture placement."
                }
            },
            {
                "@type": "Question",
                "name": "Can you shift hospital staff and faculty from Ranchi to Ormanjhi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly assist doctors, nursing specialists, and administrative staff relocating from Ranchi to Apollo Hospital Irba, Medanta Hospital, and educational campuses around Ormanjhi with IBA-approved documentation."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect delicate crockery and electronics during transit?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy a strict 5-layer packaging standard utilizing virgin air bubble film, 5-ply corrugated sheets, edge foam protectors, and heavy strapping to prevent damage on bumpy roads."
                }
            },
            {
                "@type": "Question",
                "name": "Can you relocate motorcycles and scooters from Ranchi to Ormanjhi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide specialized two-wheeler transportation using scratch-resistant bubble wrapping, mirror cushioning, and safety wheel ratchet locking on our covered container vehicles."
                }
            },
            {
                "@type": "Question",
                "name": "Do you deliver to farmhouses and rural estates around Ormanjhi and Rukka Dam?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we deliver across all sectors of Ormanjhi including Irba, Birsa Zoo area, Apollo Hospital road, Dahisod, Rukka Dam vicinity, and farmhouses along Gola Road."
                }
            }
        ]
    }
    </script>
</head>
<body>
<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Breadcrumbs -->
<div class="breadcrumb-container">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo SITE_BASE_URL; ?>/"><i class="fa fa-home"></i> Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo SITE_BASE_URL; ?>/services">Shifting Routes</a></li>
                <li class="breadcrumb-item active" aria-current="page">Ranchi to Ormanjhi Packers and Movers</li>
            </ol>
        </nav>
    </div>
</div>

<!-- Hero Section -->
<section class="hero-section route-hero">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="hero-badge"><i class="fa fa-shield-alt"></i> ISO 9001:2015 Certified Local Moving Company</div>
                <h1>Trusted Packers and Movers Ranchi to Ormanjhi</h1>
                <p class="hero-subtitle">Fast, reliable, and stress-free outbound relocation from Ranchi city into Ormanjhi, Irba, and suburban farmhouse belts. Providing professional 5-layer packing, rapid truck transit via NH-20, same-day delivery, and IBA-approved corporate moving bills.</p>
                <div class="hero-features">
                    <div class="feat-item"><i class="fa fa-check-circle"></i> 20 km Direct Expressway Transit via NH-20</div>
                    <div class="feat-item"><i class="fa fa-check-circle"></i> 5-Layer Industrial Packaging Standard</div>
                    <div class="feat-item"><i class="fa fa-check-circle"></i> Rapid Same-Day Doorstep Delivery (3 - 5 Hours)</div>
                    <div class="feat-item"><i class="fa fa-check-circle"></i> IBA Approved Bills for Hospital & Institutional Transfers</div>
                </div>
                <div class="hero-cta">
                    <a href="tel:+919835565233" class="btn btn-primary"><i class="fa fa-phone-alt"></i> Call +91 9835565233</a>
                    <a href="#quote-form" class="btn btn-outline">Instant Price Calculation</a>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="quote-card" id="quote-form">
                    <h3>Get Quick Shifting Quote</h3>
                    <p>Express door-to-door relocation Ranchi to Ormanjhi</p>
                    <form action="<?php echo SITE_BASE_URL; ?>/contact" method="post" class="route-lead-form">
                        <div class="form-group">
                            <label><i class="fa fa-user"></i> Full Name</label>
                            <input type="text" name="name" class="form-control" placeholder="Enter your full name" required>
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-phone"></i> Mobile Number</label>
                            <input type="tel" name="phone" class="form-control" placeholder="10-digit mobile number" required pattern="[0-9]{10}">
                        </div>
                        <div class="form-row">
                            <div class="col-6">
                                <label><i class="fa fa-map-marker-alt"></i> Moving From</label>
                                <input type="text" name="origin" class="form-control" value="Ranchi" readonly>
                            </div>
                            <div class="col-6">
                                <label><i class="fa fa-map-marker-alt"></i> Destination</label>
                                <input type="text" name="destination" class="form-control" value="Ormanjhi" readonly>
                            </div>
                        </div>
                        <div class="form-group">
                            <label><i class="fa fa-box"></i> Shifting Scope</label>
                            <select name="move_type" class="form-control">
                                <option value="1 BHK">1 BHK Household Shifting</option>
                                <option value="2 BHK" selected>2 BHK Household Shifting</option>
                                <option value="3 BHK">3 BHK / Suburban Villa</option>
                                <option value="Bike Transport">Motorcycle / Two-Wheeler Parcel</option>
                                <option value="Hospital Staff Transfer">Medical & Hospital Staff Move</option>
                                <option value="Commercial Shifting">Commercial & Office Relocation</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-submit-lead"><i class="fa fa-calculator"></i> Calculate Free Quotation</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Corridor & Geographical Logistics Profile -->
<section class="section route-profile-section">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-badge">Logistical Corridor Breakdown</span>
            <h2>Ranchi to Ormanjhi Transit Route & Highway Connectivity</h2>
            <p>Comprehensive logistical analysis of the 20 km outward arterial corridor connecting urban Ranchi with the green suburbs of Ormanjhi</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="route-text-content">
                    <p>Relocating from the bustling urban sectors of Ranchi out towards Ormanjhi is an increasingly popular choice for families seeking peaceful suburban living, hospital staff joining <strong>Apollo Hospitals (Irba)</strong>, and estate owners developing properties along the Rukka Dam and Gola Road periphery. The driving distance is roughly <strong>20 to 25 kilometers</strong> along the modern, four-lane <strong>National Highway 20 (NH-20)</strong>.</p>
                    <p>Our transport crews coordinate pickups across central Ranchi neighborhoods—including Morabadi, Bariatu, Lalpur, Kanke Road, Kantatoli, Harmu, and Doranda. Assembling onto the Booty More arterial corridor, our container trucks head north along NH-20 past Vikas Vidyalaya, BIT Mesra More, and enter the Ormanjhi block limits. Smooth road conditions allow vehicles to reach destinations in Irba, Birsa Zoo area, and Ormanjhi Chowk in <strong>under 45 minutes of driving time</strong>.</p>
                    <p>Because the distance is short, Shree Ashirwad Packers and Movers delivers an efficient <strong>same-day relocation service</strong>. Packing begins in Ranchi early in the morning, items are loaded systematically onto our covered container vehicles, and unloading, furniture positioning, and reassembly in Ormanjhi are finalized before late afternoon.</p>
                    <ul class="route-specs-list">
                        <li><strong>Highway Distance:</strong> Approximately 20 - 25 km via National Highway 20 (NH-20)</li>
                        <li><strong>Driving Duration:</strong> 35 to 55 minutes non-stop transit in covered container vehicles</li>
                        <li><strong>Key Transit Nodes:</strong> Ranchi City Hub, Booty More, Vikas Vidyalaya, BIT Mesra More, Irba, Ormanjhi</li>
                        <li><strong>Fleet Deployment:</strong> Dedicated 14-foot & 17-foot sealed container trucks, Mahindra Bolero Maxi Trucks</li>
                        <li><strong>Local Access:</strong> Complete permit clearance for day-time entry into residential Ranchi colonies</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="route-visual-card">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed container truck transporting household goods from Ranchi to Ormanjhi" class="img-fluid rounded shadow" loading="lazy">
                    <div class="visual-caption">
                        <h4>Express Highway Transit Ranchi to Ormanjhi</h4>
                        <p>Specialized closed-body container fleet ensuring zero dust exposure, rain protection, and safe road transit across the NH-20 expressway corridor.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Table Section -->
<section class="section pricing-section bg-light">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-badge">Transparent Tariff</span>
            <h2>Ranchi to Ormanjhi Relocation Charges & Estimate Guide</h2>
            <p>Affordable, honest rates with zero hidden fees. Exact estimates customized to your cargo volume and floor requirements.</p>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped tariff-table">
                <thead>
                    <tr>
                        <th>Consignment Scope</th>
                        <th>Packing Supplies & Labor</th>
                        <th>Dedicated Truck Freight</th>
                        <th>Total Estimated Cost</th>
                        <th>Expected Delivery</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Flat / Studio Apartment</strong><br><small>Double bed, refrigerator, washing machine, basic cartons</small></td>
                        <td>₹2,000 - ₹3,500</td>
                        <td>₹2,000 - ₹4,000</td>
                        <td><strong>₹4,000 - ₹7,500</strong></td>
                        <td>Same Day (3 - 4 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Household Apartment</strong><br><small>2 beds, sofa set, dining table, kitchenware, 25+ boxes</small></td>
                        <td>₹3,500 - ₹5,500</td>
                        <td>₹3,500 - ₹7,000</td>
                        <td><strong>₹7,000 - ₹12,500</strong></td>
                        <td>Same Day (3 - 5 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Residence / Independent Villa</strong><br><small>Complete furniture, electronics, heavy almirahs, 45+ cartons</small></td>
                        <td>₹5,500 - ₹8,500</td>
                        <td>₹5,500 - ₹9,500</td>
                        <td><strong>₹11,000 - ₹18,000</strong></td>
                        <td>Same Day (4 - 6 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Farmhouse Estate</strong><br><small>Extensive luxury goods, fitness equipment, garden furniture</small></td>
                        <td>₹8,000 - ₹12,500</td>
                        <td>₹8,000 - ₹15,500</td>
                        <td><strong>₹16,000 - ₹28,000</strong></td>
                        <td>Same Day (Full Day Setup)</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Transport</strong><br><small>Motorcycle / Scooter with full scratch-resistant crating</small></td>
                        <td>₹500 - ₹800</td>
                        <td>₹700 - ₹1,400</td>
                        <td><strong>₹1,200 - ₹2,200</strong></td>
                        <td>Same Day (2 - 3 Hours)</td>
                    </tr>
                    <tr>
                        <td><strong>Car / Sedan Relocation</strong><br><small>Hatchback, Sedan, or Compact SUV door-to-door transit</small></td>
                        <td>₹1,000 - ₹1,500</td>
                        <td>₹1,500 - ₹3,500</td>
                        <td><strong>₹2,500 - ₹5,000</strong></td>
                        <td>Same Day (2 - 4 Hours)</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="pricing-notes">
            <p><i class="fa fa-info-circle text-primary"></i> <em>Note: Final billing is determined by precise inventory volume, flight of stairs in absence of functional elevators, heavy wooden dismantling requirements, and optional transit insurance coverage.</em></p>
        </div>
    </div>
</section>

<!-- 5-Layer Industrial Packaging Protocol -->
<section class="section packing-standards-section">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-badge">Safe Packaging Standards</span>
            <h2>5-Layer Industrial Packaging Protocol for Ranchi to Ormanjhi</h2>
            <p>Our multi-tier protective wrapping standard guarantees 100% defense against bumps, vibrations, and road dust.</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 order-lg-2">
                <div class="packing-visual-wrapper">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-appliances-protective-cover-ranchi.jpg" alt="Protective wrap for household appliances during Ranchi to Ormanjhi move" class="img-fluid rounded shadow" loading="lazy">
                </div>
            </div>
            <div class="col-lg-6 order-lg-1">
                <div class="packing-steps-accordion">
                    <div class="layer-item">
                        <div class="layer-number">01</div>
                        <div class="layer-desc">
                            <h4>Layer 1: Clean Polyethylene Surface Barrier</h4>
                            <p>All polished wooden furniture, fabric sofas, mattresses, and luxury upholstery receive an initial seal of virgin LDPE stretch film to block dust, moisture, and stains during handling.</p>
                        </div>
                    </div>
                    <div class="layer-item">
                        <div class="layer-number">02</div>
                        <div class="layer-desc">
                            <h4>Layer 2: Shock-Absorbent Multi-Ply Bubble Film</h4>
                            <p>Smart TVs, computer monitors, glass dining tops, and kitchen appliances are wrapped in high-density air bubble wrap that absorbs shocks and prevents pressure cracks during vehicular transit.</p>
                        </div>
                    </div>
                    <div class="layer-item">
                        <div class="layer-number">03</div>
                        <div class="layer-desc">
                            <h4>Layer 3: 5-Ply Heavy Corrugated Protective Armour</h4>
                            <p>Durable 5-ply corrugated cardboard sheets custom-cut to size provide hard exterior armor against mechanical abrasion for wardrobes, showcases, study tables, and metal almirahs.</p>
                        </div>
                    </div>
                    <div class="layer-item">
                        <div class="layer-number">04</div>
                        <div class="layer-desc">
                            <h4>Layer 4: Reinforced Composite Corner Protectors</h4>
                            <p>Hardened angular guards are securely fastened around all corners and sharp edges of glass tables, wooden cabinets, and granite counters, eliminating blunt-force edge chipping.</p>
                        </div>
                    </div>
                    <div class="layer-item">
                        <div class="layer-number">05</div>
                        <div class="layer-desc">
                            <h4>Layer 5: Industrial Cross-Taping & Polypropylene Outer Seal</h4>
                            <p>The entire assembled package is reinforced with heavy-duty packaging tape and an outer wrap of industrial film, locking all layers tight and immobilizing the cargo inside the truck.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Vehicle Transport Section: Bike & Car Transit -->
<section class="section vehicle-transit-section bg-light">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-badge">Automobile Relocation</span>
            <h2>Safe Bike & Car Transportation: Ranchi to Ormanjhi</h2>
            <p>Reliable two-wheeler and four-wheeler transport ensuring scratch-free, zero-running transit</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="vehicle-card">
                    <div class="vehicle-card-img">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Two wheeler motorcycle carrier and bike parcel Ranchi to Ormanjhi" class="img-fluid rounded" loading="lazy">
                    </div>
                    <div class="vehicle-card-body">
                        <h3>Motorcycle & Scooter Parcel Service</h3>
                        <p>Transporting your two-wheeler from Ranchi to Ormanjhi is fast and safe. Our crew wraps delicate parts—handlebar grips, side mirrors, turn indicators, headlights, and speedometer dials—in thick air bubble film and corrugated pads. The bike is loaded via non-slip ramps and secured with heavy-duty ratchet tie-down belts inside our enclosed container truck.</p>
                        <ul class="card-features-list">
                            <li><i class="fa fa-shield"></i> Scratch-proof wrapping for petrol tank and exhaust</li>
                            <li><i class="fa fa-truck"></i> Anti-skid ramp loading with zero drop hazard</li>
                            <li><i class="fa fa-clock"></i> Express same-day door delivery across Ormanjhi</li>
                            <li><i class="fa fa-file-invoice"></i> Doorstep pickup in Ranchi and direct delivery</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="vehicle-card">
                    <div class="vehicle-card-img">
                        <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Loading cargo and car transport Ranchi to Ormanjhi" class="img-fluid rounded" loading="lazy">
                    </div>
                    <div class="vehicle-card-body">
                        <h3>Car Carrier & Four-Wheeler Transport</h3>
                        <p>Avoid driving your family car through highway traffic or construction zones. We offer professional automobile transport using specialized hydraulic car ramps and enclosed car carriers. A thorough pre-loading inspection report documents odometer readings and existing vehicle condition to ensure 100% transparency.</p>
                        <ul class="card-features-list">
                            <li><i class="fa fa-car"></i> Enclosed carriers protecting your vehicle against road gravel</li>
                            <li><i class="fa fa-lock"></i> Specialized wheel chocks and 4-point tire strapping</li>
                            <li><i class="fa fa-route"></i> Live GPS transit tracking from Ranchi to destination</li>
                            <li><i class="fa fa-file-contract"></i> Complete transit insurance coverage for complete safety</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Hospital, Educational & Corporate Relocation Services -->
<section class="section corporate-transfer-section">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-badge">Medical & Institutional Mobility</span>
            <h2>Hospital Staff, Faculty & Institutional Employee Relocation</h2>
            <p>Specialized shifting assistance for doctors, nurses, professors, and government officers moving to Ormanjhi</p>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="corporate-details">
                    <p>Relocations from Ranchi to Ormanjhi frequently involve medical practitioners moving near <strong>Apollo Hospitals (Irba)</strong>, veterinary professors joining Ranchi Veterinary College, or researchers relocating close to the BIT Mesra campus and Birsa Zoo biological research centers. We accommodate demanding shift schedules and academic terms.</p>
                    <p>Shree Ashirwad Packers and Movers delivers fully customized institutional relocation services designed to accommodate demanding hospital duty rosters and academic schedules. We supply full reimbursement documentation aligned with institutional HR and audit requirements:</p>
                    <div class="document-perks">
                        <div class="doc-item">
                            <i class="fa fa-file-invoice-dollar"></i>
                            <div>
                                <h5>100% GST-Registered Invoices</h5>
                                <p>Legally valid tax invoices with correct SAC codes, registered GSTIN, and company PAN details for smooth company reimbursement.</p>
                            </div>
                        </div>
                        <div class="doc-item">
                            <i class="fa fa-receipt"></i>
                            <div>
                                <h5>IBA-Approved Consignment Notes (Bilty)</h5>
                                <p>Properly stamped consignment documentation detailing vehicle registration, transit route, and origin/destination particulars.</p>
                            </div>
                        </div>
                        <div class="doc-item">
                            <i class="fa fa-list-ol"></i>
                            <div>
                                <h5>Itemized Numbered Packing Inventory</h5>
                                <p>Comprehensive checklist of all household articles signed by our supervisor and the customer at both loading and unloading points.</p>
                            </div>
                        </div>
                        <div class="doc-item">
                            <i class="fa fa-clock"></i>
                            <div>
                                <h5>Flexible Off-Hour & Weekend Execution</h5>
                                <p>Scheduled pickup and delivery timed around hospital shift hours, allowing medical personnel to move without taking leave.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="corporate-box">
                    <h3>Institutional Moving Desk</h3>
                    <p>Dedicated relocation services for personnel from:</p>
                    <ul class="psu-list">
                        <li><i class="fa fa-check"></i> <strong>Apollo Hospitals & Clinics:</strong> Doctors & Medical Staff</li>
                        <li><i class="fa fa-check"></i> <strong>Medanta Hospital Ranchi:</strong> Healthcare Personnel</li>
                        <li><i class="fa fa-check"></i> <strong>BIT Mesra:</strong> Faculty, Researchers & Scholars</li>
                        <li><i class="fa fa-check"></i> <strong>Veterinary College:</strong> Officers & Academic Staff</li>
                        <li><i class="fa fa-check"></i> <strong>Public Sector Banks:</strong> SBI, PNB, Bank of India</li>
                        <li><i class="fa fa-check"></i> <strong>Jharkhand Govt Depts:</strong> Secretariat & Administrative Staff</li>
                    </ul>
                    <div class="contact-box-cta">
                        <p>Need pre-approval estimate sets for your employer?</p>
                        <a href="tel:+919835565233" class="btn btn-secondary btn-block"><i class="fa fa-phone"></i> Call +91 9835565233</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Localities Covered: Ranchi & Ormanjhi -->
<section class="section localities-section bg-light">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-badge">Comprehensive Area Coverage</span>
            <h2>Areas and Localities We Serve in Ranchi and Ormanjhi</h2>
            <p>Complete door-to-door coverage spanning every locality, housing colony, and residential apartment complex</p>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="locality-box">
                    <h3><i class="fa fa-map-marker-alt text-primary"></i> Pickup Points in Ranchi City</h3>
                    <p>Our loading crews and container vehicles operate across all major residential sectors in Ranchi:</p>
                    <div class="locality-tags">
                        <span class="tag">Booty More</span>
                        <span class="tag">Bariatu Medical Road</span>
                        <span class="tag">Morabadi</span>
                        <span class="tag">Lalpur Circular Road</span>
                        <span class="tag">Kanke Road</span>
                        <span class="tag">Kantatoli</span>
                        <span class="tag">Harmu Housing Colony</span>
                        <span class="tag">Ashok Nagar</span>
                        <span class="tag">Dhurwa HEC Colony</span>
                        <span class="tag">Doranda</span>
                        <span class="tag">Ratu Road</span>
                        <span class="tag">Kokar Industrial Area</span>
                        <span class="tag">Chutia</span>
                        <span class="tag">Namkum</span>
                        <span class="tag">Tupudana</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="locality-box">
                    <h3><i class="fa fa-map-marker-alt text-success"></i> Delivery Destinations in Ormanjhi</h3>
                    <p>We provide full doorstep delivery, unloading, room placement, and setup across all Ormanjhi zones:</p>
                    <div class="locality-tags">
                        <span class="tag">Ormanjhi Block Chowk</span>
                        <span class="tag">Irba Bazar</span>
                        <span class="tag">Apollo Hospital Road</span>
                        <span class="tag">Birsa Biological Park</span>
                        <span class="tag">Rukka Dam Road</span>
                        <span class="tag">Dahisod</span>
                        <span class="tag">Sikidiri Road Junction</span>
                        <span class="tag">Chhinnamastika Temple Road</span>
                        <span class="tag">Gola Road Crossing</span>
                        <span class="tag">Karamtoli Ormanjhi</span>
                        <span class="tag">Ormanjhi Industrial Zone</span>
                        <span class="tag">Kanke-Ormanjhi Border</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Step-by-Step Moving Process -->
<section class="section process-section">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-badge">Organized Workflow</span>
            <h2>Our Seamless 5-Step Moving Process: Ranchi to Ormanjhi</h2>
            <p>From initial inspection in Ranchi to final furniture setup in Ormanjhi, every stage is executed with utmost care.</p>
        </div>
        <div class="process-grid">
            <div class="process-card">
                <div class="process-step">Step 01</div>
                <h4>Free Survey & Quotation</h4>
                <p>We conduct a fast physical or video survey of your Ranchi home to assess item volume, fragile goods, and vehicle sizing, providing a transparent fixed-price estimate.</p>
            </div>
            <div class="process-card">
                <div class="process-step">Step 02</div>
                <h4>Professional 5-Layer Packing</h4>
                <p>Our skilled packers arrive with premium materials—heavy bubble wraps, corrugated cartons, and stretch film—wrapping every delicate article with extreme care.</p>
            </div>
            <div class="process-card">
                <div class="process-step">Step 03</div>
                <h4>Safe Truck Loading</h4>
                <p>Heavier furniture and major home appliances are systematically positioned on the container floor with safety straps, while fragile boxes are placed securely on top.</p>
            </div>
            <div class="process-card">
                <div class="process-step">Step 04</div>
                <h4>Express Highway Transit</h4>
                <p>The vehicle travels smoothly across the 20 km NH-20 expressway, reaching Booty More and central Ormanjhi within 45 to 60 minutes with full GPS dispatch monitoring.</p>
            </div>
            <div class="process-card">
                <div class="process-step">Step 05</div>
                <h4>Doorstep Unloading & Setup</h4>
                <p>Upon arrival at your new Ormanjhi residence, our crew carefully unloads all cargo, checks items against the inventory manifest, and places furniture in your preferred rooms.</p>
            </div>
        </div>
    </div>
</section>

<!-- Pre-Move Checklist Section -->
<section class="section checklist-section bg-light">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-badge">Helpful Moving Tips</span>
            <h2>Pre-Move Checklist for Ranchi to Ormanjhi Shifting</h2>
            <p>Essential recommendations to help you prepare for a hassle-free, same-day moving experience</p>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="checklist-item">
                    <i class="fa fa-calendar-check text-primary"></i>
                    <div>
                        <h5>1. Reserve Moving Date 2 to 3 Days Ahead</h5>
                        <p>Booking your shifting slot in advance ensures priority container vehicle allocation, preferred morning start times, and smooth operational planning.</p>
                    </div>
                </div>
                <div class="checklist-item">
                    <i class="fa fa-snowflake text-primary"></i>
                    <div>
                        <h5>2. Defrost Refrigerators the Night Before</h5>
                        <p>Turn off and defrost refrigerators 12 to 24 hours prior to loading to avoid internal moisture leakage onto packed cartons during vehicle transit.</p>
                    </div>
                </div>
                <div class="checklist-item">
                    <i class="fa fa-gas-pump text-primary"></i>
                    <div>
                        <h5>3. Keep Two-Wheeler Fuel Low</h5>
                        <p>For safety compliance and spill prevention, ensure your motorcycle or scooter petrol tank is nearly empty before vehicle crating.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="checklist-item">
                    <i class="fa fa-gem text-primary"></i>
                    <div>
                        <h5>4. Safeguard Jewelry, Cash & Essential Papers</h5>
                        <p>Always transport gold, family jewelry, cash, bank checkbooks, and crucial medical or property documents personally in your own bag.</p>
                    </div>
                </div>
                <div class="checklist-item">
                    <i class="fa fa-boxes text-primary"></i>
                    <div>
                        <h5>5. Pack an "Immediate Access" Day-One Kit</h5>
                        <p>Prepare a separate bag containing fresh clothes, phone chargers, toiletries, medicines, and drinking water for your first evening in Ormanjhi.</p>
                    </div>
                </div>
                <div class="checklist-item">
                    <i class="fa fa-building text-primary"></i>
                    <div>
                        <h5>6. Secure Society Gate Clearance in Ranchi</h5>
                        <p>Inform the management or security desk at your apartment complex in Ranchi to reserve service elevator access and truck parking space.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Frequently Asked Questions (FAQ) -->
<section class="section faq-section">
    <div class="container">
        <div class="section-title text-center">
            <span class="sub-badge">Frequently Asked Questions</span>
            <h2>Common Queries: Ranchi to Ormanjhi Relocation</h2>
            <p>Everything you need to know about shifting rates, transit timeframes, and safety assurances</p>
        </div>
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <div class="accordion" id="routeFaqAccordion">
                    <div class="card faq-card">
                        <div class="card-header" id="faqHeadingOne">
                            <h3 class="mb-0">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#faqCollapseOne" aria-expanded="true" aria-controls="faqCollapseOne">
                                    <i class="fa fa-question-circle"></i> How long does shifting take from Ranchi to Ormanjhi?
                                </button>
                            </h3>
                        </div>
                        <div id="faqCollapseOne" class="collapse show" aria-labelledby="faqHeadingOne" data-parent="#routeFaqAccordion">
                            <div class="card-body">
                                The road distance from Ranchi to Ormanjhi is approximately 20 kilometers along NH-20 via Booty More and BIT Mesra. Non-stop truck driving takes 35 to 50 minutes. The complete moving process—including morning packing, truck loading in Ranchi, transit, unloading, and room-by-room setup in Ormanjhi—is smoothly completed within 3 to 5 hours on the very same day.
                            </div>
                        </div>
                    </div>
                    <div class="card faq-card">
                        <div class="card-header" id="faqHeadingTwo">
                            <h3 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faqCollapseTwo" aria-expanded="false" aria-controls="faqCollapseTwo">
                                    <i class="fa fa-question-circle"></i> What are the moving rates for 1 BHK and 2 BHK flats from Ranchi to Ormanjhi?
                                </button>
                            </h3>
                        </div>
                        <div id="faqCollapseTwo" class="collapse" aria-labelledby="faqHeadingTwo" data-parent="#routeFaqAccordion">
                            <div class="card-body">
                                Shifting costs for a standard 1 BHK residence from Ranchi to Ormanjhi typically range from ₹4,000 to ₹7,500. For a 2 BHK household, charges generally range between ₹7,000 and ₹12,500. This includes professional packing materials, skilled labor for loading and unloading, dedicated container transport, and placement assistance.
                            </div>
                        </div>
                    </div>
                    <div class="card faq-card">
                        <div class="card-header" id="faqHeadingThree">
                            <h3 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faqCollapseThree" aria-expanded="false" aria-controls="faqCollapseThree">
                                    <i class="fa fa-question-circle"></i> Can you shift hospital staff and faculty from Ranchi to Ormanjhi?
                                </button>
                            </h3>
                        </div>
                        <div id="faqCollapseThree" class="collapse" aria-labelledby="faqHeadingThree" data-parent="#routeFaqAccordion">
                            <div class="card-body">
                                Yes. We frequently assist doctors, medical specialists, nursing supervisors, and research staff relocating from Ranchi to Apollo Hospital Irba, Medanta Ranchi, and nearby veterinary institutions. We accommodate demanding clinical shift schedules and supply 100% compliant GST-registered invoices, IBA-format consignment notes, and packing manifests for swift corporate claims.
                            </div>
                        </div>
                    </div>
                    <div class="card faq-card">
                        <div class="card-header" id="faqHeadingFour">
                            <h3 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faqCollapseFour" aria-expanded="false" aria-controls="faqCollapseFour">
                                    <i class="fa fa-question-circle"></i> How do you protect delicate crockery and electronics during transit?
                                </button>
                            </h3>
                        </div>
                        <div id="faqCollapseFour" class="collapse" aria-labelledby="faqHeadingFour" data-parent="#routeFaqAccordion">
                            <div class="card-body">
                                Two-wheelers and fragile kitchen items are prepared by wrapping delicate elements—mirrors, speedometers, exhaust pipes, and fuel tanks—in multi-layer bubble wrap and corrugated sheets. They are carefully wheeled onto the container truck using anti-skid loading ramps and fastened with heavy-duty ratchet belts to ensure they do not move or suffer scratches during transit.
                            </div>
                        </div>
                    </div>
                    <div class="card faq-card">
                        <div class="card-header" id="faqHeadingFive">
                            <h3 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faqCollapseFive" aria-expanded="false" aria-controls="faqCollapseFive">
                                    <i class="fa fa-question-circle"></i> Can you relocate motorcycles and scooters from Ranchi to Ormanjhi?
                                </button>
                            </h3>
                        </div>
                        <div id="faqCollapseFive" class="collapse" aria-labelledby="faqHeadingFive" data-parent="#routeFaqAccordion">
                            <div class="card-body">
                                Yes, our vehicles transport two-wheelers safely using specialized ramps, wheel chocks, bubble film wrap, and heavy tie-down belts inside enclosed container trucks, ensuring zero scratches and zero odometer mileage.
                            </div>
                        </div>
                    </div>
                    <div class="card faq-card">
                        <div class="card-header" id="faqHeadingSix">
                            <h3 class="mb-0">
                                <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#faqCollapseSix" aria-expanded="false" aria-controls="faqCollapseSix">
                                    <i class="fa fa-question-circle"></i> Do you deliver to farmhouses and rural estates around Ormanjhi and Rukka Dam?
                                </button>
                            </h3>
                        </div>
                        <div id="faqCollapseSix" class="collapse" aria-labelledby="faqHeadingSix" data-parent="#routeFaqAccordion">
                            <div class="card-body">
                                Yes, our vehicles deliver across all sectors of Ormanjhi including Irba, Birsa Zoo area, Apollo Hospital road, Dahisod, Rukka Dam vicinity, and farmhouses along Gola Road with complete unloading and furniture reassembly support.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="section cta-section text-center">
    <div class="container">
        <h2>Ready for a Fast, Stress-Free Move from Ranchi to Ormanjhi?</h2>
        <p>Book with Jharkhand's most trusted local packers and movers. Enjoy same-day delivery, 5-layer protective packing, and complete damage-free assurance.</p>
        <div class="cta-buttons">
            <a href="tel:+919835565233" class="btn btn-primary btn-lg"><i class="fa fa-phone-alt"></i> Call Now: +91 9835565233</a>
            <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn btn-outline btn-lg"><i class="fa fa-calendar-alt"></i> Schedule Free Pre-Move Survey</a>
        </div>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
