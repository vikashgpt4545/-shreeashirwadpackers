<?php
/**
 * Page: Car Transportation Cost Calculator
 * Slug: car-transportation-cost-calculator
 * Type: High-Converting Interactive Utility & Four-Wheeler Shipping Tool
 * Target Keywords: car transportation cost calculator, car shifting charges calculator, car transport cost India, car relocation charges
 */
if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__));
}
require_once BASE_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car Transportation Cost Calculator | Car Shifting Quotes - Shree Ashirwad</title>
    <meta name="description" content="Calculate car transport charges online across India. Compare enclosed vs open carrier rates for hatchbacks, sedans, SUVs & luxury cars with door-to-door delivery. Call 8409531615.">
    <meta name="keywords" content="car transportation cost calculator, car shifting charges calculator, car transport cost India, car relocation charges, enclosed car carrier cost, interstate car shipping rates, car courier cost calculator">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/car-transportation-cost-calculator">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Car Carrier Division",
        "image": "<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg",
        "url": "<?php echo SITE_BASE_URL; ?>/car-transportation-cost-calculator",
        "telephone": "+91-8409531615",
        "priceRange": "INR 5,500 - 38,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Anandpuri Chowk, Vidyanagar Road, Harmu Housing Colony",
            "addressLocality": "Ranchi",
            "addressRegion": "Jharkhand",
            "postalCode": "834001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.3639813,
            "longitude": 85.3090259
        },
        "hasMap": "https://share.google/ThfGaS541NwFKVsQZ"
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
                "name": "Cost Calculators",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-cost-calculator"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Car Transport Calculator",
                "item": "<?php echo SITE_BASE_URL; ?>/car-transportation-cost-calculator"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Four-Wheeler & Car Carrier Transportation Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "telephone": "+91-8409531615"
        },
        "areaServed": {
            "@type": "Country",
            "name": "India"
        },
        "serviceType": "Car Carrier & Automobile Relocation",
        "description": "Professional multi-car carrier and single enclosed car transportation with wheel locks, digital pre-dispatch inspection, hydraulic ramp loading, and transit insurance."
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
                "name": "How does the car transportation cost calculator estimate pricing?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The calculator evaluates car segment (Hatchback, Sedan, SUV, Luxury), total transit distance, choice between Open Car Trailer and Hydraulic Enclosed Container, and doorstep pickup versus terminal drop-off."
                }
            },
            {
                "@type": "Question",
                "name": "What is the difference between open and enclosed car carriers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Open multi-car carriers transport 6 to 8 vehicles on a double-decker trailer and are highly cost-effective. Enclosed carriers transport vehicles in a fully enclosed, weather-proof steel container, offering complete protection against dust, stone chips, rain, and road debris—recommended for luxury and new cars."
                }
            },
            {
                "@type": "Question",
                "name": "Can I keep personal luggage inside my car during transit?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We permit light personal luggage (up to 30-40 kg) in the car boot, provided items are secured below window level. However, valuables, electronics, flammable materials, and cash are strictly prohibited by motor transport safety guidelines."
                }
            },
            {
                "@type": "Question",
                "name": "What paperwork is required to ship a car to another state?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Required documents include original or certified copy of Registration Certificate (RC), valid comprehensive insurance policy, current PUC certificate, and the vehicle owner's government ID proof."
                }
            }
        ]
    }
    </script>

    <style>
        .ctc-wrap { font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif; color: #1e293b; background: #f8fafc; }
        .ctc-hero { background: linear-gradient(135deg, #0b1f3a 0%, #173256 100%); color: #ffffff; padding: 50px 20px 40px; text-align: center; }
        .ctc-hero h1 { font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 4vw, 2.6rem); font-weight: 800; line-height: 1.2; margin: 0 0 16px; color: #ffffff; }
        .ctc-hero p { font-size: 1.08rem; max-width: 820px; margin: 0 auto 24px; color: #cbd5e1; line-height: 1.6; }
        .ctc-badge-pill { display: inline-flex; align-items: center; gap: 8px; background: rgba(255,106,40,0.15); border: 1px solid #ff6a28; color: #ff8c53; padding: 6px 16px; border-radius: 9999px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 18px; letter-spacing: 0.5px; }

        .ctc-container { max-width: 1140px; margin: 0 auto; padding: 40px 20px; }
        .ctc-calc-card { background: #ffffff; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; padding: 32px; margin-bottom: 40px; }
        .ctc-calc-title { font-family: 'Outfit', sans-serif; font-size: 1.5rem; font-weight: 700; color: #0f223d; margin-bottom: 24px; text-align: center; }
        
        .ctc-form-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; margin-bottom: 28px; }
        .ctc-field-group label { display: block; font-weight: 600; font-size: 0.92rem; color: #334155; margin-bottom: 8px; }
        .ctc-field-group select, .ctc-field-group input { width: 100%; padding: 12px 14px; border: 1.5px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; background: #fdfdfd; color: #0f172a; outline: none; transition: all 0.2s; box-sizing: border-box; }
        .ctc-field-group select:focus, .ctc-field-group input:focus { border-color: #ff6a28; box-shadow: 0 0 0 3px rgba(255,106,40,0.15); }

        .ctc-slider-group { grid-column: 1 / -1; background: #f8fafc; padding: 20px; border-radius: 10px; border: 1px solid #e2e8f0; }
        .ctc-slider-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; }
        .ctc-slider-label { font-weight: 700; color: #0f223d; font-size: 1rem; }
        .ctc-slider-val { font-size: 1.25rem; font-weight: 800; color: #ff6a28; }
        .ctc-slider { width: 100%; -webkit-appearance: none; height: 8px; border-radius: 4px; background: #cbd5e1; outline: none; }
        .ctc-slider::-webkit-slider-thumb { -webkit-appearance: none; width: 22px; height: 22px; border-radius: 50%; background: #ff6a28; cursor: pointer; border: 3px solid #ffffff; box-shadow: 0 2px 6px rgba(0,0,0,0.25); }

        .ctc-calc-actions { text-align: center; margin-top: 10px; }
        .ctc-calc-btn { background: linear-gradient(135deg, #ff6a28 0%, #ea580c 100%); color: #ffffff; border: none; font-size: 1.05rem; font-weight: 700; padding: 14px 38px; border-radius: 50px; cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; box-shadow: 0 4px 14px rgba(255,106,40,0.3); }
        .ctc-calc-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(255,106,40,0.4); }

        .ctc-output-box { background: linear-gradient(135deg, #f0fdf4 0%, #e0f2fe 100%); border: 2px solid #86efac; border-radius: 12px; padding: 24px; margin-top: 28px; display: none; }
        .ctc-output-header { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; margin-bottom: 16px; border-bottom: 1px solid rgba(0,0,0,0.08); padding-bottom: 12px; }
        .ctc-output-header h3 { margin: 0; font-family: 'Outfit', sans-serif; font-size: 1.3rem; color: #065f46; font-weight: 700; }
        .ctc-total-val { font-size: 1.8rem; font-weight: 800; color: #047857; }
        .ctc-breakdown-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 14px; text-align: center; }
        .ctc-breakdown-card { background: #ffffff; padding: 14px 10px; border-radius: 8px; border: 1px solid #d1fae5; }
        .ctc-breakdown-card small { display: block; color: #64748b; font-size: 0.82rem; margin-bottom: 4px; }
        .ctc-breakdown-card strong { color: #0f172a; font-size: 1.05rem; }

        .ctc-section { background: #ffffff; border-radius: 14px; padding: 36px 30px; margin-bottom: 34px; border: 1px solid #e2e8f0; }
        .ctc-section h2 { font-family: 'Outfit', sans-serif; font-size: 1.6rem; color: #0f223d; margin: 0 0 18px; font-weight: 700; }
        .ctc-section p { font-size: 1.02rem; line-height: 1.7; color: #334155; margin-bottom: 18px; }

        .ctc-table-wrap { overflow-x: auto; margin: 24px 0; }
        .ctc-table { width: 100%; border-collapse: collapse; min-width: 600px; }
        .ctc-table th { background: #0f223d; color: #ffffff; padding: 12px 14px; font-size: 0.92rem; text-align: left; font-weight: 600; }
        .ctc-table td { padding: 12px 14px; border-bottom: 1px solid #e2e8f0; font-size: 0.92rem; color: #334155; }
        .ctc-table tr:nth-child(even) td { background: #f8fafc; }

        .ctc-grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin: 24px 0; }
        .ctc-card { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px; }
        .ctc-card h3 { font-family: 'Outfit', sans-serif; font-size: 1.18rem; color: #0f223d; margin: 0 0 10px; font-weight: 600; }
        .ctc-card p { font-size: 0.95rem; line-height: 1.6; color: #475569; margin: 0; }

        .ctc-image-container { max-width: 580px; margin: 28px auto; overflow: hidden; border-radius: 12px; box-shadow: 0 6px 20px rgba(0,0,0,0.08); }
        .ctc-image-container img { width: 100%; height: auto; display: block; }

        .ctc-cluster-module { background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%); border: 1.5px solid #cbd5e1; border-radius: 14px; padding: 28px; margin: 34px 0; }
        .ctc-cluster-module h3 { font-family: 'Outfit', sans-serif; font-size: 1.25rem; color: #0f223d; margin-top: 0; margin-bottom: 14px; }
        .ctc-cluster-links { display: flex; flex-wrap: wrap; gap: 10px; }
        .ctc-cluster-links a { background: #ffffff; color: #1e3a8a; border: 1px solid #cbd5e1; padding: 8px 14px; border-radius: 6px; font-size: 0.88rem; font-weight: 600; text-decoration: none; transition: all 0.2s; }
        .ctc-cluster-links a:hover { background: #ff6a28; color: #ffffff; border-color: #ff6a28; }

        .ctc-faq-item { border-bottom: 1px solid #e2e8f0; padding: 18px 0; }
        .ctc-faq-item:last-child { border-bottom: none; }
        .ctc-faq-item h3 { font-size: 1.12rem; color: #0f223d; margin: 0 0 8px; font-weight: 600; }
        .ctc-faq-item p { margin: 0; font-size: 0.96rem; color: #475569; line-height: 1.6; }

        .ctc-cta-bar { background: linear-gradient(135deg, #ff6a28 0%, #ea580c 100%); border-radius: 14px; padding: 32px; color: #ffffff; text-align: center; margin-top: 40px; }
        .ctc-cta-bar h2 { font-family: 'Outfit', sans-serif; font-size: 1.8rem; margin: 0 0 10px; color: #ffffff; }
        .ctc-cta-bar p { font-size: 1.05rem; margin-bottom: 22px; color: #ffedd5; }
        .ctc-cta-btns { display: flex; justify-content: center; gap: 16px; flex-wrap: wrap; }
        .ctc-btn-call { background: #ffffff; color: #ea580c; font-weight: 700; padding: 12px 28px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; }
        .ctc-btn-wa { background: #25d366; color: #ffffff; font-weight: 700; padding: 12px 28px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; }
    </style>
</head>
<body class="ctc-wrap">

<?php include_once BASE_PATH . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="ctc-hero">
    <div class="ctc-badge-pill">★ Four-Wheeler Transport Calculator</div>
    <h1>Car Transportation Cost Calculator</h1>
    <p>Calculate transparent car shifting charges across India. Compare open multi-car trailers and dedicated hydraulic enclosed container trucks for hatchbacks, sedans, SUVs, and luxury vehicles with zero hidden costs.</p>
</section>

<!-- Calculator Interactive Tool -->
<main class="ctc-container">
    <div class="ctc-calc-card">
        <div class="ctc-calc-title">Instant Car Relocation Rate Estimator</div>
        
        <form id="ctcCalcForm" onsubmit="calculateCarCost(event)">
            <div class="ctc-form-grid">
                <div class="ctc-field-group">
                    <label for="ctcCarType">Select Vehicle Segment</label>
                    <select id="ctcCarType" required>
                        <option value="hatchback">Hatchback (Swift, WagonR, i10, Baleno, Altroz)</option>
                        <option value="sedan" selected>Sedan (Dzire, Honda City, Verna, Ciaz, Slavia)</option>
                        <option value="compact_suv">Compact SUV / Crossover (Creta, Seltos, Brezza, Nexon)</option>
                        <option value="full_suv">Full-Size SUV / MPV (Innova, Scorpio-N, XUV700, Harrier)</option>
                        <option value="luxury">Luxury / Premium (Mercedes-Benz, BMW, Audi, Fortuner, Defender)</option>
                    </select>
                </div>

                <div class="ctc-field-group">
                    <label for="ctcCarrierType">Carrier & Container Mode</label>
                    <select id="ctcCarrierType">
                        <option value="open" selected>Open Multi-Car Trailer (Economical & Standard)</option>
                        <option value="enclosed">Enclosed Hydraulic Container (Weather & Dustproof)</option>
                    </select>
                </div>

                <div class="ctc-field-group">
                    <label for="ctcDelivery">Handover Preference</label>
                    <select id="ctcDelivery">
                        <option value="d2d" selected>Doorstep Pickup & Doorstep Delivery</option>
                        <option value="t2d">Drop at Ranchi Auto Hub -> Doorstep Delivery</option>
                        <option value="t2t">Terminal to Terminal (Self Pickup at Destination City Hub)</option>
                    </select>
                </div>

                <div class="ctc-slider-group">
                    <div class="ctc-slider-header">
                        <span class="ctc-slider-label">Transit Distance (Kilometers)</span>
                        <span class="ctc-slider-val" id="ctcDistVal">450 km</span>
                    </div>
                    <input type="range" min="50" max="2500" value="450" class="ctc-slider" id="ctcDistance" oninput="updateCarDistSlider(this.value)">
                </div>
            </div>

            <div class="ctc-calc-actions">
                <button type="submit" class="ctc-calc-btn">Calculate Car Transport Charges</button>
            </div>
        </form>

        <div id="ctcResultBox" class="ctc-output-box">
            <div class="ctc-output-header">
                <h3>Estimated Car Shipping Charges</h3>
                <div class="ctc-total-val" id="ctcTotalRange">₹10,500 - ₹13,500</div>
            </div>
            <div class="ctc-breakdown-grid">
                <div class="ctc-breakdown-card">
                    <small>Loading & Wheel Clamping</small>
                    <strong id="ctcLoadCost">₹1,200</strong>
                </div>
                <div class="ctc-breakdown-card">
                    <small>Highway Freight & Tolls</small>
                    <strong id="ctcFreightCost">₹7,800</strong>
                </div>
                <div class="ctc-breakdown-card">
                    <small>Transit Inspection</small>
                    <strong id="ctcInspectCost">₹500</strong>
                </div>
                <div class="ctc-breakdown-card">
                    <small>Doorstep Delivery & Fuel</small>
                    <strong id="ctcDeliveryCost">₹1,500</strong>
                </div>
            </div>
            <p style="margin: 16px 0 0; font-size: 0.88rem; color: #047857; text-align: center;">
                *Estimate includes professional car ramp loading, high-tensile wheel strapping, bumper protectors, and digital condition report. Full-value transit insurance (optional at 1.5% of IDV) billed as per policy.
            </p>
        </div>
    </div>

    <!-- Section 1: Detailed Car Shipping Rate Chart -->
    <section class="ctc-section">
        <h2>Official Car Transportation Rate Schedule (Pan-India)</h2>
        <p>Shipping a personal car requires specialized vehicle logistics infrastructure. Driving a vehicle over 1,000 kilometers on high-speed national highways increases engine wear, tire deterioration, odometer depreciation, and exposes your car to road debris, gravel chips, and accident risks. At <strong>Shree Ashirwad Packers and Movers</strong>, we transport your automobile on purpose-built multi-car carriers and individual enclosed containers equipped with pneumatic wheel locking mechanisms.</p>

        <p>Whether you are relocating your car from Ranchi or Jamshedpur to New Delhi, Bangalore, Kolkata, Patna, Pune, or Hyderabad, our transparent rate chart gives you immediate budget clarity. You can also calculate complete two-wheeler costs using our <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-charges-calculator" style="color: #ff6a28; font-weight: 700;">Bike Transport Charges Calculator</a> or master household rates with our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-cost-calculator" style="color: #ff6a28; font-weight: 700;">Packers and Movers Cost Calculator</a>.</p>

        <div class="ctc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car Transport Carrier Loading - Shree Ashirwad Packers Jharkhand" width="580" height="387" loading="lazy">
        </div>

        <div class="ctc-table-wrap">
            <table class="ctc-table">
                <thead>
                    <tr>
                        <th>Car Segment</th>
                        <th>Short Route (Up to 400 km)</th>
                        <th>Medium Route (400-900 km)</th>
                        <th>Long Interstate (900-1600 km)</th>
                        <th>Cross-Country (1600+ km)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Hatchback (Swift, i10, Baleno)</strong></td>
                        <td>₹6,500 - ₹9,500</td>
                        <td>₹10,500 - ₹15,500</td>
                        <td>₹15,000 - ₹21,000</td>
                        <td>₹19,000 - ₹26,000</td>
                    </tr>
                    <tr>
                        <td><strong>Sedan (Dzire, City, Verna, Ciaz)</strong></td>
                        <td>₹7,500 - ₹11,000</td>
                        <td>₹12,000 - ₹17,500</td>
                        <td>₹16,500 - ₹23,500</td>
                        <td>₹21,000 - ₹29,000</td>
                    </tr>
                    <tr>
                        <td><strong>Compact SUV (Creta, Seltos, Nexon)</strong></td>
                        <td>₹8,500 - ₹12,500</td>
                        <td>₹13,500 - ₹19,500</td>
                        <td>₹18,000 - ₹25,500</td>
                        <td>₹23,000 - ₹32,000</td>
                    </tr>
                    <tr>
                        <td><strong>Full-Size SUV (Innova, Scorpio, Harrier)</strong></td>
                        <td>₹10,000 - ₹14,500</td>
                        <td>₹15,500 - ₹22,500</td>
                        <td>₹20,500 - ₹29,000</td>
                        <td>₹26,000 - ₹36,000</td>
                    </tr>
                    <tr>
                        <td><strong>Luxury Segment (Mercedes, BMW, Audi)</strong></td>
                        <td>₹13,500 - ₹19,000</td>
                        <td>₹20,000 - ₹29,000</td>
                        <td>₹28,000 - ₹39,000</td>
                        <td>₹35,000 - ₹52,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section 2: Open Carrier vs Enclosed Container -->
    <section class="ctc-section">
        <h2>Open Multi-Car Trailer vs. Enclosed Container: Making the Right Choice</h2>
        <p>Choosing the correct transport vehicle depends on your car's valuation, ground clearance, and protection requirements:</p>

        <div class="ctc-grid-2">
            <div class="ctc-card">
                <h3>Open Multi-Car Trailer (Best Value)</h3>
                <p>Open double-decker carriers transport 6 to 8 cars simultaneously on structured ramps. This is the exact method automobile manufacturers use to distribute brand new cars from factories to regional dealerships. It offers the most economical per-kilometer rate and is ideal for standard hatchbacks, compact sedans, and daily commuter cars.</p>
            </div>
            <div class="ctc-card">
                <h3>Enclosed Hydraulic Container (Maximum Safety)</h3>
                <p>Enclosed carriers house your vehicle inside a weatherproof steel box truck. The vehicle is completely sealed against harsh sunlight, monsoon rains, highway dust, flying gravel, and bird droppings. Highly recommended for premium German sedans, vintage collectors, brand-new deliveries, and luxury SUVs.</p>
            </div>
            <div class="ctc-card">
                <h3>Wheel-Lock Securing Technology</h3>
                <p>We never use metal chains around suspension arms that could damage wheel alignment. Both open and enclosed carriers employ heavy-duty nylon wheel chocks and ratchet straps strapped directly over tires to absorb road vibration naturally through the vehicle's own suspension.</p>
            </div>
            <div class="ctc-card">
                <h3>Hydraulic Tail-Lift Ramp Loading</h3>
                <p>Vehicles with low ground clearance (such as sports sedans and performance hatchbacks) are loaded using specialized hydraulic tail-lifts that keep the car completely level, eliminating bumper scrape and underbody impact during loading and unloading.</p>
            </div>
        </div>

        <div class="ctc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Container Truck - Dedicated Automobile Transport" width="580" height="387" loading="lazy">
        </div>
    </section>

    <!-- Section 3: Essential Pre-Transit Inspection Protocol -->
    <section class="ctc-section">
        <h2>Our 25-Point Pre-Dispatch Vehicle Inspection Protocol</h2>
        <p>To eliminate discrepancies and ensure complete accountability, every vehicle handover follows our standardized inspection workflow:</p>

        <div class="ctc-grid-2">
            <div class="ctc-card">
                <h3>1. High-Resolution Digital Condition Report</h3>
                <p>Our transport surveyor photographs all four sides, bumpers, windshields, mirrors, alloy wheels, and roof panels in your presence. Existing scratches, paint chips, and minor dents are mapped onto a formal condition sheet signed by both parties.</p>
            </div>
            <div class="ctc-card">
                <h3>2. Odometer & Fuel Reading Log</h3>
                <p>The exact odometer kilometer reading and fuel gauge level are documented. We require fuel to be at roughly 20-25% capacity (10 to 15 liters) for essential ramp maneuvering and destination doorstep delivery.</p>
            </div>
            <div class="ctc-card">
                <h3>3. Antenna & Accessory Safeguarding</h3>
                <p>External roof antennas are unscrewed and placed inside the glove compartment. Side mirrors are folded securely, toll Fastags are noted, and battery terminals are inspected to ensure worry-free transit.</p>
            </div>
            <div class="ctc-card">
                <h3>4. Interstate Documentation Compliance</h3>
                <p>We verify your vehicle's Registration Certificate (RC), valid insurance cover, PUC certificate, and owner ID to guarantee zero detention at state border RTO and commercial tax checkposts.</p>
            </div>
        </div>

        <div class="ctc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to Door Delivery Truck - Shree Ashirwad Packers" width="580" height="387" loading="lazy">
        </div>
    </section>

    <!-- Connected Cluster Module -->
    <div class="ctc-cluster-module">
        <h3>Connected Vehicle & Relocation Services</h3>
        <p style="margin: 0 0 16px; font-size: 0.94rem; color: #475569;">Explore specialized vehicle relocation services, master pricing calculators, and regional corridors:</p>
        <div class="ctc-cluster-links">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-cost-calculator">Master Cost Calculator</a>
            <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-charges-calculator">Bike Transport Calculator</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-per-km">Per KM Rate Breakdown</a>
            <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting/">Vehicle Shifting Services</a>
            <a href="<?php echo SITE_BASE_URL; ?>/">Packers & Movers Ranchi HQ</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Ranchi Local Tariff Card</a>
            <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-delhi-shifting-guide">Ranchi to Delhi Corridor</a>
            <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-bangalore-packers-and-movers">Ranchi to Bangalore Corridor</a>
        </div>
    </div>

    <!-- Frequently Asked Questions -->
    <section class="ctc-section">
        <h2>Frequently Asked Questions on Car Transportation</h2>
        <div class="ctc-faq-item">
            <h3>How does the car transportation cost calculator estimate pricing?</h3>
            <p>The calculator evaluates car segment (Hatchback, Sedan, SUV, Luxury), total transit distance, choice between Open Car Trailer and Hydraulic Enclosed Container, and doorstep pickup versus terminal drop-off.</p>
        </div>
        <div class="ctc-faq-item">
            <h3>What is the difference between open and enclosed car carriers?</h3>
            <p>Open multi-car carriers transport 6 to 8 vehicles on a double-decker trailer and are highly cost-effective. Enclosed carriers transport vehicles in a fully enclosed, weather-proof steel container, offering complete protection against dust, stone chips, rain, and road debris—recommended for luxury and new cars.</p>
        </div>
        <div class="ctc-faq-item">
            <h3>Can I keep personal luggage inside my car during transit?</h3>
            <p>We permit light personal luggage (up to 30-40 kg) in the car boot, provided items are secured below window level. However, valuables, electronics, flammable materials, and cash are strictly prohibited by motor transport safety guidelines.</p>
        </div>
        <div class="ctc-faq-item">
            <h3>What paperwork is required to ship a car to another state?</h3>
            <p>Required documents include original or certified copy of Registration Certificate (RC), valid comprehensive insurance policy, current PUC certificate, and the vehicle owner's government ID proof.</p>
        </div>
    </section>

    <!-- Bottom CTA Bar -->
    <div class="ctc-cta-bar">
        <h2>Book Safe Door-to-Door Car Shipping Across India</h2>
        <p>Get an all-inclusive written car moving estimate with digital condition tracking and scratch-free guarantee.</p>
        <div class="ctc-cta-btns">
            <a href="tel:8409531615" class="ctc-btn-call">📞 Call 8409531615</a>
            <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad%20Packers%2C%20I%20used%20your%20car%20transport%20calculator%20and%20need%20a%20written%20shipping%20estimate." target="_blank" rel="noopener" class="ctc-btn-wa">💬 WhatsApp Instant Quote</a>
        </div>
    </div>
</main>

<script>
function updateCarDistSlider(val) {
    document.getElementById('ctcDistVal').innerText = val + ' km';
}

function calculateCarCost(e) {
    e.preventDefault();
    var cType = document.getElementById('ctcCarType').value;
    var carrier = document.getElementById('ctcCarrierType').value;
    var delivery = document.getElementById('ctcDelivery').value;
    var dist = parseInt(document.getElementById('ctcDistance').value, 10);

    var baseLoad = 1000;
    var baseFreight = 4500;
    var baseInspect = 500;
    var baseDelivery = 1200;

    if (cType === 'hatchback') {
        baseLoad = 1000; baseFreight = 4200; baseDelivery = 1000;
    } else if (cType === 'sedan') {
        baseLoad = 1200; baseFreight = 4800; baseDelivery = 1200;
    } else if (cType === 'compact_suv') {
        baseLoad = 1400; baseFreight = 5400; baseDelivery = 1400;
    } else if (cType === 'full_suv') {
        baseLoad = 1800; baseFreight = 6500; baseDelivery = 1600;
    } else if (cType === 'luxury') {
        baseLoad = 2500; baseFreight = 8500; baseDelivery = 2200;
    }

    if (carrier === 'enclosed') {
        baseFreight = Math.round(baseFreight * 1.45);
        baseLoad = Math.round(baseLoad * 1.3);
    }

    if (delivery === 't2d') {
        baseDelivery = Math.round(baseDelivery * 0.6);
    } else if (delivery === 't2t') {
        baseDelivery = 0;
    }

    if (dist <= 200) {
        baseFreight += dist * 18;
    } else if (dist <= 600) {
        baseFreight += Math.round(dist * 14.5);
    } else if (dist <= 1400) {
        baseFreight += Math.round(dist * 11.2);
    } else {
        baseFreight += Math.round(dist * 9.5);
    }

    var minTotal = baseLoad + baseFreight + baseInspect + baseDelivery;
    var maxTotal = Math.round(minTotal * 1.18);

    document.getElementById('ctcLoadCost').innerText = '₹' + baseLoad.toLocaleString('en-IN');
    document.getElementById('ctcFreightCost').innerText = '₹' + baseFreight.toLocaleString('en-IN');
    document.getElementById('ctcInspectCost').innerText = '₹' + baseInspect.toLocaleString('en-IN');
    document.getElementById('ctcDeliveryCost').innerText = '₹' + baseDelivery.toLocaleString('en-IN');
    document.getElementById('ctcTotalRange').innerText = '₹' + minTotal.toLocaleString('en-IN') + ' - ₹' + maxTotal.toLocaleString('en-IN');

    var resBox = document.getElementById('ctcResultBox');
    resBox.style.display = 'block';
    resBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}
</script>

<?php include_once BASE_PATH . '/includes/footer.php'; ?>

</body>
</html>
