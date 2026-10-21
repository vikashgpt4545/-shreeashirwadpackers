<?php
/**
 * Page: Bike Transport Charges Calculator
 * Slug: bike-transport-charges-calculator
 * Type: High-Converting Interactive Utility & Two-Wheeler Shipping Tool
 * Target Keywords: bike transport charges calculator, two wheeler courier cost calculator, motorcycle parcel cost, bike shifting charges calculator
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
    <title>Bike Transport Charges Calculator | Two-Wheeler Moving Quote - Shree Ashirwad</title>
    <meta name="description" content="Calculate two-wheeler and bike transport charges online. Estimate shipping costs for scooters, motorcycles, Royal Enfield & superbikes across India with 3-layer protective packing. Call 8409531615.">
    <meta name="keywords" content="bike transport charges calculator, two wheeler courier cost calculator, bike shifting charges calculator, motorcycle parcel cost, bike transport cost per km, scooter transport charges, royal enfield parcel service">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/bike-transport-charges-calculator">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Bike Transport Division",
        "image": "<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg",
        "url": "<?php echo SITE_BASE_URL; ?>/bike-transport-charges-calculator",
        "telephone": "+91-8409531615",
        "priceRange": "INR 1,200 - 14,000",
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
                "name": "Bike Transport Calculator",
                "item": "<?php echo SITE_BASE_URL; ?>/bike-transport-charges-calculator"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Two-Wheeler & Motorcycle Transport Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "telephone": "+91-8409531615"
        },
        "areaServed": {
            "@type": "Country",
            "name": "India"
        },
        "serviceType": "Two-Wheeler Carrier & Bike Relocation Service",
        "description": "Secure door-to-door two-wheeler transportation with multi-layer bubble wrapping, foam cushioning, scratch protection, wooden crating, and all-risk transit insurance."
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
                "name": "How are bike transport charges calculated?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Bike shifting charges depend on engine displacement (cc), total transit distance, protective packaging type (foam wrapping vs. custom wooden crating), carrier type (open carrier vs. enclosed container), and doorstep pickup/delivery requirements."
                }
            },
            {
                "@type": "Question",
                "name": "Is petrol required to be emptied before bike transportation?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, as per fire and road safety regulations, the petrol tank must be almost completely empty (less than 0.5 liters) to prevent fuel leaks and hazardous fire risks during enclosed highway transport."
                }
            },
            {
                "@type": "Question",
                "name": "What documents are required to transport a two-wheeler interstate?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "You must provide a photocopy of the vehicle Registration Certificate (RC), valid Insurance policy, active PUC (Pollution Under Control) certificate, and the owner's government ID proof (Aadhaar or Driving License)."
                }
            },
            {
                "@type": "Question",
                "name": "Is my motorcycle covered against scratches and transit damages?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Every vehicle undergoes a thorough pre-dispatch photo condition inspection report. We apply 3-layer bubble and corrugated packaging, with optional all-risk transit insurance covering fire, overturning, and physical damage."
                }
            }
        ]
    }
    </script>

    <style>
        .btc-wrap { font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif; color: #1e293b; background: #f8fafc; }
        .btc-hero { background: linear-gradient(135deg, #091e3a 0%, #1a365d 100%); color: #ffffff; padding: 50px 20px 40px; text-align: center; }
        .btc-hero h1 { font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 4vw, 2.6rem); font-weight: 800; line-height: 1.2; margin: 0 0 16px; color: #ffffff; }
        .btc-hero p { font-size: 1.08rem; max-width: 820px; margin: 0 auto 24px; color: #cbd5e1; line-height: 1.6; }
        .btc-badge-pill { display: inline-flex; align-items: center; gap: 8px; background: rgba(255,106,40,0.15); border: 1px solid #ff6a28; color: #ff8c53; padding: 6px 16px; border-radius: 9999px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 18px; letter-spacing: 0.5px; }

        .btc-container { max-width: 1140px; margin: 0 auto; padding: 40px 20px; }
        .btc-calc-card { background: #ffffff; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; padding: 32px; margin-bottom: 40px; }
        .btc-calc-title { font-family: 'Outfit', sans-serif; font-size: 1.5rem; font-weight: 700; color: #0f223d; margin-bottom: 24px; text-align: center; }
        
        .btc-form-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; margin-bottom: 28px; }
        .btc-field-group label { display: block; font-weight: 600; font-size: 0.92rem; color: #334155; margin-bottom: 8px; }
        .btc-field-group select, .btc-field-group input { width: 100%; padding: 12px 14px; border: 1.5px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; background: #fdfdfd; color: #0f172a; outline: none; transition: all 0.2s; box-sizing: border-box; }
        .btc-field-group select:focus, .btc-field-group input:focus { border-color: #ff6a28; box-shadow: 0 0 0 3px rgba(255,106,40,0.15); }

        .btc-slider-group { grid-column: 1 / -1; background: #f8fafc; padding: 20px; border-radius: 10px; border: 1px solid #e2e8f0; }
        .btc-slider-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; }
        .btc-slider-label { font-weight: 700; color: #0f223d; font-size: 1rem; }
        .btc-slider-val { font-size: 1.25rem; font-weight: 800; color: #ff6a28; }
        .btc-slider { width: 100%; -webkit-appearance: none; height: 8px; border-radius: 4px; background: #cbd5e1; outline: none; }
        .btc-slider::-webkit-slider-thumb { -webkit-appearance: none; width: 22px; height: 22px; border-radius: 50%; background: #ff6a28; cursor: pointer; border: 3px solid #ffffff; box-shadow: 0 2px 6px rgba(0,0,0,0.25); }

        .btc-calc-actions { text-align: center; margin-top: 10px; }
        .btc-calc-btn { background: linear-gradient(135deg, #ff6a28 0%, #ea580c 100%); color: #ffffff; border: none; font-size: 1.05rem; font-weight: 700; padding: 14px 38px; border-radius: 50px; cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; box-shadow: 0 4px 14px rgba(255,106,40,0.3); }
        .btc-calc-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(255,106,40,0.4); }

        .btc-output-box { background: linear-gradient(135deg, #f0fdf4 0%, #e0f2fe 100%); border: 2px solid #86efac; border-radius: 12px; padding: 24px; margin-top: 28px; display: none; }
        .btc-output-header { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; margin-bottom: 16px; border-bottom: 1px solid rgba(0,0,0,0.08); padding-bottom: 12px; }
        .btc-output-header h3 { margin: 0; font-family: 'Outfit', sans-serif; font-size: 1.3rem; color: #065f46; font-weight: 700; }
        .btc-total-val { font-size: 1.8rem; font-weight: 800; color: #047857; }
        .btc-breakdown-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 14px; text-align: center; }
        .btc-breakdown-card { background: #ffffff; padding: 14px 10px; border-radius: 8px; border: 1px solid #d1fae5; }
        .btc-breakdown-card small { display: block; color: #64748b; font-size: 0.82rem; margin-bottom: 4px; }
        .btc-breakdown-card strong { color: #0f172a; font-size: 1.05rem; }

        .btc-section { background: #ffffff; border-radius: 14px; padding: 36px 30px; margin-bottom: 34px; border: 1px solid #e2e8f0; }
        .btc-section h2 { font-family: 'Outfit', sans-serif; font-size: 1.6rem; color: #0f223d; margin: 0 0 18px; font-weight: 700; }
        .btc-section p { font-size: 1.02rem; line-height: 1.7; color: #334155; margin-bottom: 18px; }

        .btc-table-wrap { overflow-x: auto; margin: 24px 0; }
        .btc-table { width: 100%; border-collapse: collapse; min-width: 600px; }
        .btc-table th { background: #0f223d; color: #ffffff; padding: 12px 14px; font-size: 0.92rem; text-align: left; font-weight: 600; }
        .btc-table td { padding: 12px 14px; border-bottom: 1px solid #e2e8f0; font-size: 0.92rem; color: #334155; }
        .btc-table tr:nth-child(even) td { background: #f8fafc; }

        .btc-grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin: 24px 0; }
        .btc-card { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px; }
        .btc-card h3 { font-family: 'Outfit', sans-serif; font-size: 1.18rem; color: #0f223d; margin: 0 0 10px; font-weight: 600; }
        .btc-card p { font-size: 0.95rem; line-height: 1.6; color: #475569; margin: 0; }

        .btc-image-container { max-width: 580px; margin: 28px auto; overflow: hidden; border-radius: 12px; box-shadow: 0 6px 20px rgba(0,0,0,0.08); }
        .btc-image-container img { width: 100%; height: auto; display: block; }

        .btc-cluster-module { background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%); border: 1.5px solid #cbd5e1; border-radius: 14px; padding: 28px; margin: 34px 0; }
        .btc-cluster-module h3 { font-family: 'Outfit', sans-serif; font-size: 1.25rem; color: #0f223d; margin-top: 0; margin-bottom: 14px; }
        .btc-cluster-links { display: flex; flex-wrap: wrap; gap: 10px; }
        .btc-cluster-links a { background: #ffffff; color: #1e3a8a; border: 1px solid #cbd5e1; padding: 8px 14px; border-radius: 6px; font-size: 0.88rem; font-weight: 600; text-decoration: none; transition: all 0.2s; }
        .btc-cluster-links a:hover { background: #ff6a28; color: #ffffff; border-color: #ff6a28; }

        .btc-faq-item { border-bottom: 1px solid #e2e8f0; padding: 18px 0; }
        .btc-faq-item:last-child { border-bottom: none; }
        .btc-faq-item h3 { font-size: 1.12rem; color: #0f223d; margin: 0 0 8px; font-weight: 600; }
        .btc-faq-item p { margin: 0; font-size: 0.96rem; color: #475569; line-height: 1.6; }

        .btc-cta-bar { background: linear-gradient(135deg, #ff6a28 0%, #ea580c 100%); border-radius: 14px; padding: 32px; color: #ffffff; text-align: center; margin-top: 40px; }
        .btc-cta-bar h2 { font-family: 'Outfit', sans-serif; font-size: 1.8rem; margin: 0 0 10px; color: #ffffff; }
        .btc-cta-bar p { font-size: 1.05rem; margin-bottom: 22px; color: #ffedd5; }
        .btc-cta-btns { display: flex; justify-content: center; gap: 16px; flex-wrap: wrap; }
        .btc-btn-call { background: #ffffff; color: #ea580c; font-weight: 700; padding: 12px 28px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; }
        .btc-btn-wa { background: #25d366; color: #ffffff; font-weight: 700; padding: 12px 28px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; }
    </style>
</head>
<body class="btc-wrap">

<?php include_once BASE_PATH . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="btc-hero">
    <div class="btc-badge-pill">★ Two-Wheeler Logistics Calculator</div>
    <h1>Bike Transport Charges Calculator</h1>
    <p>Calculate realistic two-wheeler parcel and transportation costs across India. Calculate pricing for scooters, standard motorcycles, Royal Enfields, and superbikes with 3-layer protective wrapping and transit insurance.</p>
</section>

<!-- Calculator Interactive Tool -->
<main class="btc-container">
    <div class="btc-calc-card">
        <div class="btc-calc-title">Instant Two-Wheeler Rate Calculator</div>
        
        <form id="btcCalcForm" onsubmit="calculateBikeCost(event)">
            <div class="btc-form-grid">
                <div class="btc-field-group">
                    <label for="btcVehicleType">Select Motorcycle / Scooter Category</label>
                    <select id="btcVehicleType" required>
                        <option value="scooter">Scooter / Moped (Activa, Jupiter, Access - Up to 125cc)</option>
                        <option value="commuter" selected>Commuter Bike (Splendor, Shine, Pulsar - 100cc to 160cc)</option>
                        <option value="cruiser">Cruiser / Heavy (Royal Enfield Classic/Hunter, Jawa - 350cc to 500cc)</option>
                        <option value="superbike">Sports / Superbike (Duke 390, Ninja, BMW, Triumph - 400cc+)</option>
                        <option value="ev">Electric Scooter (Ola S1, Ather, Chetak with Battery Safety)</option>
                    </select>
                </div>

                <div class="btc-field-group">
                    <label for="btcPackaging">Packaging Standard</label>
                    <select id="btcPackaging">
                        <option value="standard" selected>Standard (Foam Sheet + Bubble Wrap + Corrugated Sheet)</option>
                        <option value="wooden">Premium + Custom Wooden Crate (For High-End & Superbikes)</option>
                        <option value="economy">Economy (Corrugated Sheet & Stretch Wrap Only)</option>
                    </select>
                </div>

                <div class="btc-field-group">
                    <label for="btcPickup">Pickup & Delivery Mode</label>
                    <select id="btcPickup">
                        <option value="d2d" selected>Doorstep Pickup & Doorstep Delivery</option>
                        <option value="h2d">Drop at Ranchi Hub -> Doorstep Delivery</option>
                        <option value="h2h">Hub to Hub Only (Self Pickup at Destination Warehouse)</option>
                    </select>
                </div>

                <div class="btc-slider-group">
                    <div class="btc-slider-header">
                        <span class="btc-slider-label">Transit Distance (Kilometers)</span>
                        <span class="btc-slider-val" id="btcDistVal">350 km</span>
                    </div>
                    <input type="range" min="20" max="2500" value="350" class="btc-slider" id="btcDistance" oninput="updateBikeDistSlider(this.value)">
                </div>
            </div>

            <div class="btc-calc-actions">
                <button type="submit" class="btc-calc-btn">Estimate Bike Transport Charges</button>
            </div>
        </form>

        <div id="btcResultBox" class="btc-output-box">
            <div class="btc-output-header">
                <h3>Estimated Bike Shipping Charges</h3>
                <div class="btc-total-val" id="btcTotalRange">₹3,800 - ₹4,800</div>
            </div>
            <div class="btc-breakdown-grid">
                <div class="btc-breakdown-card">
                    <small>Multilayer Packing</small>
                    <strong id="btcPackCost">₹1,100</strong>
                </div>
                <div class="btc-breakdown-card">
                    <small>Loading & Fastening</small>
                    <strong id="btcLaborCost">₹500</strong>
                </div>
                <div class="btc-breakdown-card">
                    <small>Carrier Freight</small>
                    <strong id="btcFreightCost">₹1,900</strong>
                </div>
                <div class="btc-breakdown-card">
                    <small>Doorstep Handover</small>
                    <strong id="btcDeliveryCost">₹600</strong>
                </div>
            </div>
            <p style="margin: 16px 0 0; font-size: 0.88rem; color: #047857; text-align: center;">
                *Estimate includes ramp loading, mirror removal/wrapping, wheel securing, and fuel draining assistance. Transit insurance (optional at 1.5% of IDV) and state entry taxes are billed as per actuals.
            </p>
        </div>
    </div>

    <!-- Section 1: Detailed Two-Wheeler Rate Card -->
    <section class="btc-section">
        <h2>Official Two-Wheeler Shipping Rate Card (All-India)</h2>
        <p>Relocating a two-wheeler requires meticulous handling, specialized wheel clamping, and multi-tier protective wrapping to prevent frame scratches, broken indicators, and bent levers. At <strong>Shree Ashirwad Packers and Movers</strong>, we operate specialized motorcycle carrier trucks equipped with pneumatic suspension, non-slip rubber ramp loaders, and high-tensile ratchet fastening straps.</p>

        <p>Whether you need to ship a commuter bike locally within Jharkhand or transport a premium Royal Enfield or KTM to metropolitan hubs like Delhi, Bengaluru, Mumbai, Pune, or Hyderabad, our official price schedule provides complete clarity. You can also calculate complete household moves using our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-cost-calculator" style="color: #ff6a28; font-weight: 700;">Packers and Movers Cost Calculator</a>.</p>

        <div class="btc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bike-packing-shree-ashirwad-packers-jharkhand.jpg" alt="Bike Packing - Shree Ashirwad Packers and Movers Jharkhand" width="580" height="387" loading="lazy">
        </div>

        <div class="btc-table-wrap">
            <table class="btc-table">
                <thead>
                    <tr>
                        <th>Motorcycle Category</th>
                        <th>Short Route (Up to 300 km)</th>
                        <th>Medium Route (300-800 km)</th>
                        <th>Long Interstate (800-1500 km)</th>
                        <th>Cross-Country (1500+ km)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Scooters (Activa, Jupiter, Access)</strong></td>
                        <td>₹2,200 - ₹3,400</td>
                        <td>₹3,600 - ₹5,200</td>
                        <td>₹4,800 - ₹6,800</td>
                        <td>₹6,200 - ₹8,500</td>
                    </tr>
                    <tr>
                        <td><strong>Commuter (100cc - 160cc Bikes)</strong></td>
                        <td>₹2,500 - ₹3,800</td>
                        <td>₹4,000 - ₹5,800</td>
                        <td>₹5,200 - ₹7,400</td>
                        <td>₹6,800 - ₹9,200</td>
                    </tr>
                    <tr>
                        <td><strong>Cruiser (Royal Enfield, Jawa, 350cc+)</strong></td>
                        <td>₹3,200 - ₹4,800</td>
                        <td>₹4,800 - ₹7,200</td>
                        <td>₹6,500 - ₹9,200</td>
                        <td>₹8,500 - ₹12,000</td>
                    </tr>
                    <tr>
                        <td><strong>Sports / Superbikes (390cc - 1000cc+)</strong></td>
                        <td>₹4,500 - ₹6,500</td>
                        <td>₹6,800 - ₹9,800</td>
                        <td>₹8,800 - ₹12,800</td>
                        <td>₹11,500 - ₹16,500</td>
                    </tr>
                    <tr>
                        <td><strong>Electric Scooters (Ola, Ather, Chetak)</strong></td>
                        <td>₹2,800 - ₹4,200</td>
                        <td>₹4,200 - ₹6,200</td>
                        <td>₹5,600 - ₹7,800</td>
                        <td>₹7,200 - ₹9,800</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section 2: Road Transport vs Railway Parcel -->
    <section class="btc-section">
        <h2>Professional Road Carrier vs. Railway Parcel: A Detailed Comparison</h2>
        <p>Many vehicle owners consider Indian Railways parcel services when planning interstate two-wheeler moves. While rail luggage booking can appear slightly cheaper on paper, it introduces significant logistical hassles, packaging risks, and physical damage vulnerabilities that professional door-to-door road carriers completely eliminate:</p>

        <div class="btc-grid-2">
            <div class="btc-card">
                <h3>Doorstep Convenience vs. Station Queues</h3>
                <p>With Shree Ashirwad Packers, our team arrives at your residence with all packing materials, performs a joint condition report, and loads the vehicle on-site. Railway booking requires driving your bike to the parcel terminal, waiting in unorganized queues, paying unregistered coolies, and collecting it from crowded freight yards.</p>
            </div>
            <div class="btc-card">
                <h3>Certified 3-Layer Packing vs. Gunny Sacks</h3>
                <p>Railway porters use thin jute gunny sacks stitched with coarse twine, which offer near-zero shock absorption against accidental collisions on moving luggage vans. We wrap bikes with EPE high-density foam, heavy-gauge bubble wrap, and rigid corrugated sheets taped with high-tensile strap seals.</p>
            </div>
            <div class="btc-card">
                <h3>Direct Door Delivery vs. Demurrage Charges</h3>
                <p>If you fail to pick up your motorcycle within 6 hours of train arrival at the destination station, Indian Railways levies steep hourly demurrage penalties. Our dedicated carriers deliver directly to your residential doorstep at your preferred appointment time.</p>
            </div>
            <div class="btc-card">
                <h3>Transit Insurance & Fast Settlement</h3>
                <p>Railway damage compensation claims involve cumbersome bureaucratic paperwork with negligible recovery rates. Shree Ashirwad Packers partners with leading national insurers providing straightforward digital claims against comprehensive transit risks.</p>
            </div>
        </div>

        <div class="btc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Two Wheeler Motorcycle Carrier - Shree Ashirwad Packers" width="580" height="387" loading="lazy">
        </div>
    </section>

    <!-- Section 3: Essential Pre-Move Preparation Checklist -->
    <section class="btc-section">
        <h2>Essential Two-Wheeler Shipping Checklist</h2>
        <p>Proper preparation ensures seamless transit without delays or transit risks. Follow this step-by-step preparation protocol before our packing crew arrives:</p>

        <div class="btc-grid-2">
            <div class="btc-card">
                <h3>1. Empty the Fuel Tank</h3>
                <p>Ensure the petrol tank contains less than 0.5 liters of fuel. Transporting vehicles with full tanks is strictly prohibited by highway motor transport authorities due to fire and fume combustion hazards in enclosed container trucks.</p>
            </div>
            <div class="btc-card">
                <h3>2. Clean & Inspect the Frame</h3>
                <p>Wash your two-wheeler prior to pickup so existing scratches, small dents, and bodywork blemishes are clearly visible during the pre-dispatch joint inspection report. Both parties sign this condition report before loading.</p>
            </div>
            <div class="btc-card">
                <h3>3. Remove Accessories & Personal Items</h3>
                <p>Remove aftermarket accessories like mobile holders, tank bags, helmets, extra toolkits, and loose utility items from glove boxes and luggage racks to prevent misplacement during transit.</p>
            </div>
            <div class="btc-card">
                <h3>4. Prepare Mandatory Documents</h3>
                <p>Keep photocopies of the Registration Certificate (RC), valid Insurance copy, active Pollution (PUC) certificate, and owner government photo ID handy for highway transit inspection checkposts.</p>
            </div>
        </div>

        <div class="btc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/scooter-bike-safe-transit-packing-jharkhand.jpg" alt="Scooter and Bike Safe Transit Packing - Jharkhand Relocation" width="580" height="387" loading="lazy">
        </div>
    </section>

    <!-- Connected Cluster Module -->
    <div class="btc-cluster-module">
        <h3>Connected Vehicle & Pricing Hubs</h3>
        <p style="margin: 0 0 16px; font-size: 0.94rem; color: #475569;">Explore specialized vehicle relocation services, master pricing calculators, and regional corridors:</p>
        <div class="btc-cluster-links">
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-cost-calculator">Master Cost Calculator</a>
            <a href="<?php echo SITE_BASE_URL; ?>/car-transportation-cost-calculator">Car Shipping Calculator</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-per-km">Per KM Rate Breakdown</a>
            <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting/">Vehicle Carrier Service</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi">Packers & Movers Ranchi HQ</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Ranchi Local Tariff Card</a>
            <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-patna-relocation-guide">Ranchi to Patna Corridor</a>
            <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-kolkata-relocation-guide">Ranchi to Kolkata Corridor</a>
        </div>
    </div>

    <!-- Frequently Asked Questions -->
    <section class="btc-section">
        <h2>Frequently Asked Questions on Bike Transport</h2>
        <div class="btc-faq-item">
            <h3>How are bike transport charges calculated?</h3>
            <p>Bike shifting charges depend on engine displacement (cc), total transit distance, protective packaging type (foam wrapping vs. custom wooden crating), carrier type (open carrier vs. enclosed container), and doorstep pickup/delivery requirements.</p>
        </div>
        <div class="btc-faq-item">
            <h3>Is petrol required to be emptied before bike transportation?</h3>
            <p>Yes, as per fire and road safety regulations, the petrol tank must be almost completely empty (less than 0.5 liters) to prevent fuel leaks and hazardous fire risks during enclosed highway transport.</p>
        </div>
        <div class="btc-faq-item">
            <h3>What documents are required to transport a two-wheeler interstate?</h3>
            <p>You must provide a photocopy of the vehicle Registration Certificate (RC), valid Insurance policy, active PUC (Pollution Under Control) certificate, and the owner's government ID proof (Aadhaar or Driving License).</p>
        </div>
        <div class="btc-faq-item">
            <h3>Is my motorcycle covered against scratches and transit damages?</h3>
            <p>Yes. Every vehicle undergoes a thorough pre-dispatch photo condition inspection report. We apply 3-layer bubble and corrugated packaging, with optional all-risk transit insurance covering fire, overturning, and physical damage.</p>
        </div>
    </section>

    <!-- Bottom CTA Bar -->
    <div class="btc-cta-bar">
        <h2>Book Safe Two-Wheeler Transport Across India</h2>
        <p>Get a guaranteed written quote with doorstep pickup and scratch-free delivery.</p>
        <div class="btc-cta-btns">
            <a href="tel:8409531615" class="btc-btn-call">📞 Call 8409531615</a>
            <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad%20Packers%2C%20I%20used%20your%20bike%20transport%20calculator%20and%20need%20a%20written%20shipping%20estimate." target="_blank" rel="noopener" class="btc-btn-wa">💬 WhatsApp Instant Quote</a>
        </div>
    </div>
</main>

<script>
function updateBikeDistSlider(val) {
    document.getElementById('btcDistVal').innerText = val + ' km';
}

function calculateBikeCost(e) {
    e.preventDefault();
    var vType = document.getElementById('btcVehicleType').value;
    var pkg = document.getElementById('btcPackaging').value;
    var pickup = document.getElementById('btcPickup').value;
    var dist = parseInt(document.getElementById('btcDistance').value, 10);

    var basePack = 900;
    var baseLabor = 400;
    var baseFreight = 1200;
    var baseDelivery = 500;

    if (vType === 'scooter') {
        basePack = 800; baseLabor = 400; baseFreight = 1100; baseDelivery = 400;
    } else if (vType === 'commuter') {
        basePack = 900; baseLabor = 500; baseFreight = 1300; baseDelivery = 500;
    } else if (vType === 'cruiser') {
        basePack = 1400; baseLabor = 600; baseFreight = 1800; baseDelivery = 600;
    } else if (vType === 'superbike') {
        basePack = 2400; baseLabor = 800; baseFreight = 2600; baseDelivery = 800;
    } else if (vType === 'ev') {
        basePack = 1200; baseLabor = 500; baseFreight = 1500; baseDelivery = 500;
    }

    if (pkg === 'wooden') {
        basePack = Math.round(basePack * 2.2);
    } else if (pkg === 'economy') {
        basePack = Math.round(basePack * 0.7);
    }

    if (pickup === 'h2d') {
        baseDelivery = Math.round(baseDelivery * 0.6);
    } else if (pickup === 'h2h') {
        baseDelivery = 0;
    }

    if (dist <= 100) {
        baseFreight += dist * 12;
    } else if (dist <= 500) {
        baseFreight += Math.round(dist * 8.5);
    } else if (dist <= 1200) {
        baseFreight += Math.round(dist * 6.5);
    } else {
        baseFreight += Math.round(dist * 5.2);
    }

    var minTotal = basePack + baseLabor + baseFreight + baseDelivery;
    var maxTotal = Math.round(minTotal * 1.2);

    document.getElementById('btcPackCost').innerText = '₹' + basePack.toLocaleString('en-IN');
    document.getElementById('btcLaborCost').innerText = '₹' + baseLabor.toLocaleString('en-IN');
    document.getElementById('btcFreightCost').innerText = '₹' + baseFreight.toLocaleString('en-IN');
    document.getElementById('btcDeliveryCost').innerText = '₹' + baseDelivery.toLocaleString('en-IN');
    document.getElementById('btcTotalRange').innerText = '₹' + minTotal.toLocaleString('en-IN') + ' - ₹' + maxTotal.toLocaleString('en-IN');

    var resBox = document.getElementById('btcResultBox');
    resBox.style.display = 'block';
    resBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}
</script>

<?php include_once BASE_PATH . '/includes/footer.php'; ?>

</body>
</html>
