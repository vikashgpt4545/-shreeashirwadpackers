<?php
/**
 * Page: Packers and Movers Cost Calculator
 * Slug: packers-and-movers-cost-calculator
 * Type: High-Converting Interactive Utility & Relocation Pricing Tool
 * Target Keywords: packers and movers cost calculator, house shifting price calculator, packers and movers charges calculator
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
    <title>Packers and Movers Cost Calculator | Instant Moving Quote - Shree Ashirwad</title>
    <meta name="description" content="Calculate accurate packers and movers charges online with our interactive moving cost calculator. Estimate 1 BHK, 2 BHK, 3 BHK, 4 BHK, car & bike shifting costs with zero hidden charges. Call 8409531615.">
    <meta name="keywords" content="packers and movers cost calculator, house shifting price calculator, packers and movers charges calculator, shifting cost estimator, local moving cost calculator, intercity packers cost calculator, packers and movers rate estimator">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-cost-calculator">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers",
        "image": "<?php echo SITE_BASE_URL; ?>/images/residential-relocation-cartons-ranchi.jpg",
        "url": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-cost-calculator",
        "telephone": "+91-8409531615",
        "priceRange": "INR 3,500 - 65,000",
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
                "name": "Pricing Guides",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Cost Calculator",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-cost-calculator"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Interactive Packers and Movers Cost Estimation Service",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "telephone": "+91-8409531615"
        },
        "areaServed": {
            "@type": "Country",
            "name": "India"
        },
        "serviceType": "Moving Cost Calculator & Relocation Tariff Estimation",
        "description": "Dynamic online relocation pricing tool providing transparent estimations for packing materials, labor crews, dedicated vehicle freight, transit insurance, and toll taxes across India."
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
                "name": "How does the packers and movers cost calculator calculate prices?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our cost calculator computes estimates based on household size (1RK to 4BHK/Villa), total transit distance, floor level accessibility, lift availability, required packing tiers (Standard vs. Premium 5-Layer), and vehicle carrier type. It provides an itemized breakdown of packing, loading, freight, and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "Are the estimated charges final or are there hidden fees on moving day?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The estimates provided by Shree Ashirwad Packers are 100% transparent. Once our moving surveyor verifies your inventory via phone, video survey, or on-site inspection, we provide a binding written quotation with a Zero Hidden Charges Guarantee."
                }
            },
            {
                "@type": "Question",
                "name": "Why do moving charges vary between weekdays and month-ends?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Month-ends and weekends experience heavy demand due to lease expiries and work schedules. Shifting between the 6th and 24th of any month on a weekday typically yields a 10% to 20% discount on transport rates and crew charges."
                }
            },
            {
                "@type": "Question",
                "name": "How much does transit insurance cost in the calculator?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "All-risk transit insurance is typically calculated at 3% of the declared value of your household goods, covering accidental transit damage, fire, and collision with fast-track claim settlement."
                }
            }
        ]
    }
    </script>

    <style>
        .pmc-wrap { font-family: 'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif; color: #1e293b; background: #f8fafc; }
        .pmc-hero { background: linear-gradient(135deg, #0f223d 0%, #1e3a8a 100%); color: #ffffff; padding: 50px 20px 40px; text-align: center; }
        .pmc-hero h1 { font-family: 'Outfit', sans-serif; font-size: clamp(1.8rem, 4vw, 2.7rem); font-weight: 800; line-height: 1.2; margin: 0 0 16px; color: #ffffff; }
        .pmc-hero p { font-size: 1.1rem; max-width: 820px; margin: 0 auto 24px; color: #cbd5e1; line-height: 1.6; }
        .pmc-badge-pill { display: inline-flex; align-items: center; gap: 8px; background: rgba(255,106,40,0.15); border: 1px solid #ff6a28; color: #ff8c53; padding: 6px 16px; border-radius: 9999px; font-weight: 700; font-size: 0.85rem; text-transform: uppercase; margin-bottom: 18px; letter-spacing: 0.5px; }

        .pmc-container { max-width: 1140px; margin: 0 auto; padding: 40px 20px; }
        .pmc-calc-card { background: #ffffff; border-radius: 16px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border: 1px solid #e2e8f0; padding: 32px; margin-bottom: 40px; }
        .pmc-calc-title { font-family: 'Outfit', sans-serif; font-size: 1.5rem; font-weight: 700; color: #0f223d; margin-bottom: 24px; text-align: center; }
        
        .pmc-form-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 20px; margin-bottom: 28px; }
        .pmc-field-group label { display: block; font-weight: 600; font-size: 0.92rem; color: #334155; margin-bottom: 8px; }
        .pmc-field-group select, .pmc-field-group input { width: 100%; padding: 12px 14px; border: 1.5px solid #cbd5e1; border-radius: 8px; font-size: 0.95rem; background: #fdfdfd; color: #0f172a; outline: none; transition: all 0.2s; box-sizing: border-box; }
        .pmc-field-group select:focus, .pmc-field-group input:focus { border-color: #ff6a28; box-shadow: 0 0 0 3px rgba(255,106,40,0.15); }

        .pmc-slider-group { grid-column: 1 / -1; background: #f8fafc; padding: 20px; border-radius: 10px; border: 1px solid #e2e8f0; }
        .pmc-slider-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 10px; }
        .pmc-slider-label { font-weight: 700; color: #0f223d; font-size: 1rem; }
        .pmc-slider-val { font-size: 1.25rem; font-weight: 800; color: #ff6a28; }
        .pmc-slider { width: 100%; -webkit-appearance: none; height: 8px; border-radius: 4px; background: #cbd5e1; outline: none; }
        .pmc-slider::-webkit-slider-thumb { -webkit-appearance: none; width: 22px; height: 22px; border-radius: 50%; background: #ff6a28; cursor: pointer; border: 3px solid #ffffff; box-shadow: 0 2px 6px rgba(0,0,0,0.25); }

        .pmc-calc-actions { text-align: center; margin-top: 10px; }
        .pmc-calc-btn { background: linear-gradient(135deg, #ff6a28 0%, #ea580c 100%); color: #ffffff; border: none; font-size: 1.05rem; font-weight: 700; padding: 14px 38px; border-radius: 50px; cursor: pointer; transition: transform 0.2s, box-shadow 0.2s; box-shadow: 0 4px 14px rgba(255,106,40,0.3); }
        .pmc-calc-btn:hover { transform: translateY(-2px); box-shadow: 0 6px 20px rgba(255,106,40,0.4); }

        .pmc-output-box { background: linear-gradient(135deg, #f0fdf4 0%, #e0f2fe 100%); border: 2px solid #86efac; border-radius: 12px; padding: 24px; margin-top: 28px; display: none; }
        .pmc-output-header { display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 12px; margin-bottom: 16px; border-bottom: 1px solid rgba(0,0,0,0.08); padding-bottom: 12px; }
        .pmc-output-header h3 { margin: 0; font-family: 'Outfit', sans-serif; font-size: 1.3rem; color: #065f46; font-weight: 700; }
        .pmc-total-val { font-size: 1.8rem; font-weight: 800; color: #047857; }
        .pmc-breakdown-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 14px; text-align: center; }
        .pmc-breakdown-card { background: #ffffff; padding: 14px 10px; border-radius: 8px; border: 1px solid #d1fae5; }
        .pmc-breakdown-card small { display: block; color: #64748b; font-size: 0.82rem; margin-bottom: 4px; }
        .pmc-breakdown-card strong { color: #0f172a; font-size: 1.05rem; }

        .pmc-section { background: #ffffff; border-radius: 14px; padding: 36px 30px; margin-bottom: 34px; border: 1px solid #e2e8f0; }
        .pmc-section h2 { font-family: 'Outfit', sans-serif; font-size: 1.6rem; color: #0f223d; margin: 0 0 18px; font-weight: 700; }
        .pmc-section p { font-size: 1.02rem; line-height: 1.7; color: #334155; margin-bottom: 18px; }

        .pmc-table-wrap { overflow-x: auto; margin: 24px 0; }
        .pmc-table { width: 100%; border-collapse: collapse; min-width: 600px; }
        .pmc-table th { background: #0f223d; color: #ffffff; padding: 12px 14px; font-size: 0.92rem; text-align: left; font-weight: 600; }
        .pmc-table td { padding: 12px 14px; border-bottom: 1px solid #e2e8f0; font-size: 0.92rem; color: #334155; }
        .pmc-table tr:nth-child(even) td { background: #f8fafc; }

        .pmc-grid-2 { display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px; margin: 24px 0; }
        .pmc-card { background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px; }
        .pmc-card h3 { font-family: 'Outfit', sans-serif; font-size: 1.18rem; color: #0f223d; margin: 0 0 10px; font-weight: 600; }
        .pmc-card p { font-size: 0.95rem; line-height: 1.6; color: #475569; margin: 0; }

        .pmc-image-container { max-width: 580px; margin: 28px auto; overflow: hidden; border-radius: 12px; box-shadow: 0 6px 20px rgba(0,0,0,0.08); }
        .pmc-image-container img { width: 100%; height: auto; display: block; }

        .pmc-cluster-module { background: linear-gradient(135deg, #f8fafc 0%, #edf2f7 100%); border: 1.5px solid #cbd5e1; border-radius: 14px; padding: 28px; margin: 34px 0; }
        .pmc-cluster-module h3 { font-family: 'Outfit', sans-serif; font-size: 1.25rem; color: #0f223d; margin-top: 0; margin-bottom: 14px; }
        .pmc-cluster-links { display: flex; flex-wrap: wrap; gap: 10px; }
        .pmc-cluster-links a { background: #ffffff; color: #1e3a8a; border: 1px solid #cbd5e1; padding: 8px 14px; border-radius: 6px; font-size: 0.88rem; font-weight: 600; text-decoration: none; transition: all 0.2s; }
        .pmc-cluster-links a:hover { background: #ff6a28; color: #ffffff; border-color: #ff6a28; }

        .pmc-faq-item { border-bottom: 1px solid #e2e8f0; padding: 18px 0; }
        .pmc-faq-item:last-child { border-bottom: none; }
        .pmc-faq-item h3 { font-size: 1.12rem; color: #0f223d; margin: 0 0 8px; font-weight: 600; }
        .pmc-faq-item p { margin: 0; font-size: 0.96rem; color: #475569; line-height: 1.6; }

        .pmc-cta-bar { background: linear-gradient(135deg, #ff6a28 0%, #ea580c 100%); border-radius: 14px; padding: 32px; color: #ffffff; text-align: center; margin-top: 40px; }
        .pmc-cta-bar h2 { font-family: 'Outfit', sans-serif; font-size: 1.8rem; margin: 0 0 10px; color: #ffffff; }
        .pmc-cta-bar p { font-size: 1.05rem; margin-bottom: 22px; color: #ffedd5; }
        .pmc-cta-btns { display: flex; justify-content: center; gap: 16px; flex-wrap: wrap; }
        .pmc-btn-call { background: #ffffff; color: #ea580c; font-weight: 700; padding: 12px 28px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; }
        .pmc-btn-wa { background: #25d366; color: #ffffff; font-weight: 700; padding: 12px 28px; border-radius: 50px; text-decoration: none; display: inline-flex; align-items: center; gap: 8px; }
    </style>
</head>
<body class="pmc-wrap">

<?php include_once BASE_PATH . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="pmc-hero">
    <div class="pmc-badge-pill">★ Transparent 2026 Price Engine</div>
    <h1>Packers and Movers Cost Calculator</h1>
    <p>Estimate precise local and domestic shifting charges with zero guesswork. Calculate labor, packing materials, dedicated vehicle freight, and transit insurance tailored to your exact household inventory.</p>
</section>

<!-- Calculator Interactive Tool -->
<main class="pmc-container">
    <div class="pmc-calc-card">
        <div class="pmc-calc-title">Instant Relocation Price Estimator</div>
        
        <form id="pmcCalcForm" onsubmit="calculateMovingCost(event)">
            <div class="pmc-form-grid">
                <div class="pmc-field-group">
                    <label for="pmcHomeSize">Select Move Size / Inventory</label>
                    <select id="pmcHomeSize" required>
                        <option value="1rk">1 RK / Studio Apartment (Few Items)</option>
                        <option value="1bhk" selected>1 BHK Apartment (Standard)</option>
                        <option value="2bhk">2 BHK Apartment / Independent Floor</option>
                        <option value="3bhk">3 BHK Family Flat / Duplex</option>
                        <option value="4bhk">4 BHK / Luxury Villa / Bunglow</option>
                        <option value="bike">Two-Wheeler / Bike Only</option>
                        <option value="car">Car Transportation Only</option>
                    </select>
                </div>

                <div class="pmc-field-group">
                    <label for="pmcPackingType">Packing Quality Standard</label>
                    <select id="pmcPackingType">
                        <option value="standard" selected>Standard (3-Layer Corrugated + Stretch Film)</option>
                        <option value="premium">Premium (5-Layer Bubble + Foam + Edge Protectors)</option>
                        <option value="economy">Economy / Minimal (Transport Only + Blankets)</option>
                    </select>
                </div>

                <div class="pmc-field-group">
                    <label for="pmcFloor">Floor Level & Accessibility</label>
                    <select id="pmcFloor">
                        <option value="ground" selected>Ground Floor / Lift Available</option>
                        <option value="stair13">1st - 3rd Floor (No Elevator / Stair Carrying)</option>
                        <option value="stair4plus">4th Floor+ (No Elevator / Narrow Staircase)</option>
                    </select>
                </div>

                <div class="pmc-slider-group">
                    <div class="pmc-slider-header">
                        <span class="pmc-slider-label">Transit Distance (Kilometers)</span>
                        <span class="pmc-slider-val" id="pmcDistVal">25 km</span>
                    </div>
                    <input type="range" min="5" max="2200" value="25" class="pmc-slider" id="pmcDistance" oninput="updateDistanceSlider(this.value)">
                </div>
            </div>

            <div class="pmc-calc-actions">
                <button type="submit" class="pmc-calc-btn">Calculate Estimated Moving Tariff</button>
            </div>
        </form>

        <div id="pmcResultBox" class="pmc-output-box">
            <div class="pmc-output-header">
                <h3>Estimated Moving Cost Range</h3>
                <div class="pmc-total-val" id="pmcTotalRange">₹4,800 - ₹6,500</div>
            </div>
            <div class="pmc-breakdown-grid">
                <div class="pmc-breakdown-card">
                    <small>Packing & Wrapping</small>
                    <strong id="pmcPackCost">₹1,400</strong>
                </div>
                <div class="pmc-breakdown-card">
                    <small>Loading & Labor Crew</small>
                    <strong id="pmcLaborCost">₹1,600</strong>
                </div>
                <div class="pmc-breakdown-card">
                    <small>Vehicle Freight & Fuel</small>
                    <strong id="pmcFreightCost">₹1,800</strong>
                </div>
                <div class="pmc-breakdown-card">
                    <small>Unloading & Assembly</small>
                    <strong id="pmcUnloadCost">₹1,200</strong>
                </div>
            </div>
            <p style="margin: 16px 0 0; font-size: 0.88rem; color: #047857; text-align: center;">
                *Note: Estimate includes door-to-door delivery, certified packing materials, and skilled labor. Tolls, parking, and optional 3% transit insurance are extra as per actuals.
            </p>
        </div>
    </div>

    <!-- Section 1: Detailed Pricing Structure -->
    <section class="pmc-section">
        <h2>Transparent Household Shifting Tariff Structure</h2>
        <p>Planning a residential relocation requires total visibility over shifting charges. At <strong>Shree Ashirwad Packers and Movers</strong>, we believe every customer deserves complete transparency without hidden fees or surprise billings on moving day. As Jharkhand's premier relocation specialist headquartered in Ranchi, our official moving rate card is calibrated to current diesel rates, certified 5-ply corrugated raw materials, and verified skilled union labor wages.</p>
        
        <p>Whether you are shifting locally within Ranchi between neighborhoods like Morabadi, Harmu, Kanke Road, and Bariatu, or organizing an interstate relocation to Patna, Kolkata, Delhi, or Bangalore, our live tariff engine calculates baseline rates across distinct cost buckets. For a comprehensive overview of regional rates, review our dedicated <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #ff6a28; font-weight: 700;">Packers and Movers Charges in Ranchi</a> price guide.</p>

        <div class="pmc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/residential-relocation-cartons-ranchi.jpg" alt="Packers and Movers Cost Calculator - Household Relocation Cartons" width="580" height="387" loading="lazy">
        </div>

        <div class="pmc-table-wrap">
            <table class="pmc-table">
                <thead>
                    <tr>
                        <th>Household Configuration</th>
                        <th>Local Shifting (0-30 km)</th>
                        <th>Short Interstate (100-400 km)</th>
                        <th>Long Interstate (400-1200 km)</th>
                        <th>Metro Transit (1200+ km)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 RK / Studio Apartment</strong></td>
                        <td>₹3,500 - ₹5,500</td>
                        <td>₹7,500 - ₹12,000</td>
                        <td>₹12,500 - ₹18,000</td>
                        <td>₹16,000 - ₹24,000</td>
                    </tr>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>₹4,500 - ₹7,500</td>
                        <td>₹9,500 - ₹15,500</td>
                        <td>₹15,000 - ₹22,500</td>
                        <td>₹20,000 - ₹29,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Apartment</strong></td>
                        <td>₹6,500 - ₹11,000</td>
                        <td>₹14,000 - ₹22,000</td>
                        <td>₹22,000 - ₹32,000</td>
                        <td>₹28,000 - ₹42,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent House</strong></td>
                        <td>₹9,500 - ₹16,000</td>
                        <td>₹19,000 - ₹30,000</td>
                        <td>₹29,000 - ₹44,000</td>
                        <td>₹38,000 - ₹56,000</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Luxury Villa</strong></td>
                        <td>₹14,000 - ₹24,000</td>
                        <td>₹28,000 - ₹45,000</td>
                        <td>₹42,000 - ₹65,000</td>
                        <td>₹52,000 - ₹85,000</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section 2: Factors Influencing Cost Calculations -->
    <section class="pmc-section">
        <h2>Key Determinants Influencing Your Moving Cost</h2>
        <p>Understanding the exact factors that drive moving tariffs empowers you to optimize your budget and eliminate unnecessary expenses. Relocation pricing is never a flat number; it is an algorithmic computation of volume, distance, accessibility, and transit safety protocols.</p>

        <div class="pmc-grid-2">
            <div class="pmc-card">
                <h3>1. Goods Volume & Truck Sizing</h3>
                <p>The total cubic feet volume of your belongings determines whether a 9-foot Tata Ace (Chota Hathi), 14-foot Canter, or 19-foot closed container is required. Eliminating unwanted furniture and appliances prior to moving day reduces both the required vehicle size and labor crew size.</p>
            </div>
            <div class="pmc-card">
                <h3>2. Packaging Tier & Material Consumption</h3>
                <p>High-value glass dining tables, LED displays, refrigerators, and carved wooden wardrobes require multilayer wrapping with 5-ply corrugated sheets, high-density EPE foam, and air-bubble cushions. Selecting premium crating adds a marginal material charge but guarantees 100% transit safety.</p>
            </div>
            <div class="pmc-card">
                <h3>3. Floor Level & Carry Distance</h3>
                <p>If your residential society lacks an elevator, or if the moving truck cannot park within 30 meters of your building entrance due to narrow approach lanes, our crew must physically carry heavy furniture up stairs or down extended corridors. This adds specialized long-carry and stair-handling surcharges.</p>
            </div>
            <div class="pmc-card">
                <h3>4. Transit Timing & Month-End Spikes</h3>
                <p>Rental agreements across India overwhelmingly expire on the 30th or 31st of every month. Consequently, demand for moving trucks surges between the 26th and 5th of each month. Booking your move mid-month between the 8th and 23rd typically unlocks savings of up to 15%.</p>
            </div>
        </div>

        <div class="pmc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe Transit Container Truck - Dedicated Household Freight" width="580" height="387" loading="lazy">
        </div>
    </section>

    <!-- Section 3: Specialized Vehicle & Addon Costs -->
    <section class="pmc-section">
        <h2>Vehicle Relocation & Specialized Add-on Charges</h2>
        <p>In addition to standard household furniture, relocations frequently involve two-wheelers, four-wheelers, or fragile specialty items that require custom logistical workflows. We maintain dedicated open and hydraulic enclosed car carriers alongside specialized bike wrapping stations to eliminate road vibration and scratches during interstate transit.</p>
        
        <p>For dedicated vehicle cost estimations, explore our specialized <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-charges-calculator" style="color: #ff6a28; font-weight: 700;">Bike Transport Charges Calculator</a> and <a href="<?php echo SITE_BASE_URL; ?>/car-transportation-cost-calculator" style="color: #ff6a28; font-weight: 700;">Car Transportation Cost Calculator</a>. Below is our standard standalone vehicle rate schedule:</p>

        <div class="pmc-table-wrap">
            <table class="pmc-table">
                <thead>
                    <tr>
                        <th>Vehicle Classification</th>
                        <th>Local Shifting (Within City)</th>
                        <th>Short Route (Up to 400 km)</th>
                        <th>Interstate (400-1000 km)</th>
                        <th>Pan-India (1000+ km)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Scooter / Activa / Moped</strong></td>
                        <td>₹1,200 - ₹2,000</td>
                        <td>₹2,800 - ₹4,200</td>
                        <td>₹4,500 - ₹6,500</td>
                        <td>₹5,500 - ₹8,500</td>
                    </tr>
                    <tr>
                        <td><strong>Standard Motorcycle (100-180cc)</strong></td>
                        <td>₹1,500 - ₹2,400</td>
                        <td>₹3,200 - ₹4,800</td>
                        <td>₹4,800 - ₹7,200</td>
                        <td>₹6,000 - ₹9,500</td>
                    </tr>
                    <tr>
                        <td><strong>Bullet / Sports / Superbike (350cc+)</strong></td>
                        <td>₹2,000 - ₹3,000</td>
                        <td>₹4,200 - ₹6,000</td>
                        <td>₹6,000 - ₹9,000</td>
                        <td>₹7,800 - ₹12,500</td>
                    </tr>
                    <tr>
                        <td><strong>Hatchback Car (Swift, i10, WagonR)</strong></td>
                        <td>₹2,500 - ₹4,000</td>
                        <td>₹6,500 - ₹10,500</td>
                        <td>₹11,000 - ₹16,500</td>
                        <td>₹15,000 - ₹24,000</td>
                    </tr>
                    <tr>
                        <td><strong>Sedan / Compact SUV (Creta, City)</strong></td>
                        <td>₹3,000 - ₹4,800</td>
                        <td>₹8,000 - ₹12,500</td>
                        <td>₹13,500 - ₹19,500</td>
                        <td>₹17,500 - ₹28,000</td>
                    </tr>
                    <tr>
                        <td><strong>Full-Size SUV / Luxury (Innova, Fortuner)</strong></td>
                        <td>₹3,800 - ₹6,000</td>
                        <td>₹10,000 - ₹15,000</td>
                        <td>₹16,000 - ₹24,000</td>
                        <td>₹21,000 - ₹34,000</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="pmc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg" alt="Professional Loading Crew - Shree Ashirwad Packers and Movers" width="580" height="387" loading="lazy">
        </div>
    </section>

    <!-- Section 4: How We Prevent Hidden Moving Charges -->
    <section class="pmc-section">
        <h2>Our 100% Zero Hidden Charges Guarantee</h2>
        <p>The relocation industry is notoriously plagued by unscrupulous operators who lure customers with unrealistically low online quotes, only to hold household belongings hostage on delivery day demanding additional cash for "fuel surcharges," "labor tips," or "staircase charges." At Shree Ashirwad Packers and Movers, we maintain an uncompromising standard of consumer transparency:</p>

        <div class="pmc-grid-2">
            <div class="pmc-card">
                <h3>Binding Written Agreements</h3>
                <p>Every quotation generated following our pre-move physical or video survey is issued as a formalized quotation specifying the exact truck size, number of cartons, labor crew count, and all-inclusive pricing.</p>
            </div>
            <div class="pmc-card">
                <h3>All-Inclusive Labor & Tolls</h3>
                <p>Our interstate pricing explicitly accounts for toll plaza taxes, green entry taxes, and state border permits. You will never be asked to pay cash to our drivers at highway checkposts.</p>
            </div>
            <div class="pmc-card">
                <h3>Complimentary Reassembly</h3>
                <p>We do not charge additional hidden hourly rates for basic furniture dismantling (such as double beds, dining tables, and wardrobes) and subsequent reassembly at your destination home.</p>
            </div>
            <div class="pmc-card">
                <h3>IBA-Compliant Tax Invoices</h3>
                <p>Public sector, banking, and government employees receive full GST-compliant invoices, money receipts, and consignment notes (Bilty/LR) enabling seamless 100% relocation allowance reimbursement.</p>
            </div>
        </div>

        <div class="pmc-image-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and Setup Service - Shree Ashirwad Packers" width="580" height="387" loading="lazy">
        </div>
    </section>

    <!-- Connected Cluster Module -->
    <div class="pmc-cluster-module">
        <h3>Connected Relocation & Pricing Hubs</h3>
        <p style="margin: 0 0 16px; font-size: 0.94rem; color: #475569;">Explore specialized pricing breakdowns, per-kilometer rates, vehicle calculators, and regional headquarters hubs:</p>
        <div class="pmc-cluster-links">
            <a href="<?php echo SITE_BASE_URL; ?>/">Packers & Movers in Ranchi HQ</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi">Ranchi Local Tariff Card</a>
            <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-charges-calculator">Bike Charges Calculator</a>
            <a href="<?php echo SITE_BASE_URL; ?>/car-transportation-cost-calculator">Car Shipping Calculator</a>
            <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-per-km">Charges Per KM Breakdown</a>
            <a href="<?php echo SITE_BASE_URL; ?>/residential-shifting/">Residential Shifting Service</a>
            <a href="<?php echo SITE_BASE_URL; ?>/vehicle-shifting/">Vehicle Carrier Services</a>
            <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-patna-packers-and-movers">Ranchi to Patna Corridor</a>
        </div>
    </div>

    <!-- Frequently Asked Questions -->
    <section class="pmc-section">
        <h2>Frequently Asked Questions on Moving Charges</h2>
        <div class="pmc-faq-item">
            <h3>How does the packers and movers cost calculator calculate prices?</h3>
            <p>Our cost calculator computes estimates based on household size (1RK to 4BHK/Villa), total transit distance, floor level accessibility, lift availability, required packing tiers (Standard vs. Premium 5-Layer), and vehicle carrier type. It provides an itemized breakdown of packing, loading, freight, and unloading.</p>
        </div>
        <div class="pmc-faq-item">
            <h3>Are the estimated charges final or are there hidden fees on moving day?</h3>
            <p>The estimates provided by Shree Ashirwad Packers are 100% transparent. Once our moving surveyor verifies your inventory via phone, video survey, or on-site inspection, we provide a binding written quotation with a Zero Hidden Charges Guarantee.</p>
        </div>
        <div class="pmc-faq-item">
            <h3>Why do moving charges vary between weekdays and month-ends?</h3>
            <p>Month-ends and weekends experience heavy demand due to lease expiries and work schedules. Shifting between the 6th and 24th of any month on a weekday typically yields a 10% to 20% discount on transport rates and crew charges.</p>
        </div>
        <div class="pmc-faq-item">
            <h3>How much does transit insurance cost in the calculator?</h3>
            <p>All-risk transit insurance is typically calculated at 3% of the declared value of your household goods, covering accidental transit damage, fire, and collision with fast-track claim settlement.</p>
        </div>
    </section>

    <!-- Bottom CTA Bar -->
    <div class="pmc-cta-bar">
        <h2>Get a Free Written Moving Quote in 15 Minutes</h2>
        <p>Speak directly with our senior relocation estimator for a guaranteed binding rate with zero hidden costs.</p>
        <div class="pmc-cta-btns">
            <a href="tel:8409531615" class="pmc-btn-call">📞 Call 8409531615</a>
            <a href="https://wa.me/918409531615?text=Hi%20Shree%20Ashirwad%20Packers%2C%20I%20used%20your%20cost%20calculator%20and%20need%20a%20written%20moving%20estimate." target="_blank" rel="noopener" class="pmc-btn-wa">💬 WhatsApp Instant Quote</a>
        </div>
    </div>
</main>

<script>
function updateDistanceSlider(val) {
    document.getElementById('pmcDistVal').innerText = val + ' km';
}

function calculateMovingCost(e) {
    e.preventDefault();
    var homeSize = document.getElementById('pmcHomeSize').value;
    var packingType = document.getElementById('pmcPackingType').value;
    var floor = document.getElementById('pmcFloor').value;
    var dist = parseInt(document.getElementById('pmcDistance').value, 10);

    var basePack = 1200;
    var baseLabor = 1400;
    var baseFreight = 1500;
    var baseUnload = 1000;

    if (homeSize === '1rk') {
        basePack = 1000; baseLabor = 1200; baseFreight = 1200; baseUnload = 900;
    } else if (homeSize === '1bhk') {
        basePack = 1400; baseLabor = 1600; baseFreight = 1600; baseUnload = 1200;
    } else if (homeSize === '2bhk') {
        basePack = 2400; baseLabor = 2400; baseFreight = 2200; baseUnload = 1800;
    } else if (homeSize === '3bhk') {
        basePack = 3800; baseLabor = 3600; baseFreight = 3200; baseUnload = 2800;
    } else if (homeSize === '4bhk') {
        basePack = 5500; baseLabor = 5200; baseFreight = 4800; baseUnload = 4200;
    } else if (homeSize === 'bike') {
        basePack = 1200; baseLabor = 600; baseFreight = 1800; baseUnload = 500;
    } else if (homeSize === 'car') {
        basePack = 800; baseLabor = 600; baseFreight = 5000; baseUnload = 600;
    }

    if (packingType === 'premium') {
        basePack = Math.round(basePack * 1.4);
    } else if (packingType === 'economy') {
        basePack = Math.round(basePack * 0.7);
    }

    if (floor === 'stair13') {
        baseLabor = Math.round(baseLabor * 1.25);
        baseUnload = Math.round(baseUnload * 1.2);
    } else if (floor === 'stair4plus') {
        baseLabor = Math.round(baseLabor * 1.5);
        baseUnload = Math.round(baseUnload * 1.4);
    }

    if (dist <= 30) {
        // Local shifting
        baseFreight += dist * 25;
    } else if (dist <= 300) {
        baseFreight += Math.round(dist * 28);
    } else if (dist <= 800) {
        baseFreight += Math.round(dist * 24);
    } else {
        baseFreight += Math.round(dist * 20);
    }

    var minTotal = basePack + baseLabor + baseFreight + baseUnload;
    var maxTotal = Math.round(minTotal * 1.22);

    document.getElementById('pmcPackCost').innerText = '₹' + basePack.toLocaleString('en-IN');
    document.getElementById('pmcLaborCost').innerText = '₹' + baseLabor.toLocaleString('en-IN');
    document.getElementById('pmcFreightCost').innerText = '₹' + baseFreight.toLocaleString('en-IN');
    document.getElementById('pmcUnloadCost').innerText = '₹' + baseUnload.toLocaleString('en-IN');
    document.getElementById('pmcTotalRange').innerText = '₹' + minTotal.toLocaleString('en-IN') + ' - ₹' + maxTotal.toLocaleString('en-IN');

    var resBox = document.getElementById('pmcResultBox');
    resBox.style.display = 'block';
    resBox.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
}
</script>

<?php include_once BASE_PATH . '/includes/footer.php'; ?>

</body>
</html>
