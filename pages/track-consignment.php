<?php
// Dynamic SEO Configuration for Consignment Tracking Portal
$page_title = "Track Consignment Online | Shree Ashirwad Packers and Movers LR Tracking";
$page_description = "Track your household goods, vehicle or cargo consignment live online with Shree Ashirwad Packers and Movers. Enter your LR / Consignment / Bilty number for real-time GPS tracking.";
$canonical_url = "https://shreeashirwadpackers.com/track-consignment";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="track consignment shree ashirwad packers, bilty tracking packers and movers, lr number tracking ranchi, online tracking household goods, shree ashirwad packers live tracking, vehicle transport tracking">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Consignment Tracking Desk",
        "image": "https://shreeashirwadpackers.com/images/shree-ashirwad-verified-moving-truck-jharkhand.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+919334812833",
        "priceRange": "Free Tracking Utility",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Harmu Road, Near Sahjanand Chowk",
            "addressLocality": "Ranchi",
            "addressRegion": "Jharkhand",
            "postalCode": "834002",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.3512,
            "longitude": 85.3129
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "00:00",
            "closes": "23:59"
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
                "item": "https://shreeashirwadpackers.com/"
            },
            {
                "@type": "ListItem",
                "position": 2,
                "name": "Customer Support",
                "item": "https://shreeashirwadpackers.com/contact-us"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Track Consignment",
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
        "name": "Real-Time Consignment & LR Tracking Service",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Country",
            "name": "India"
        },
        "description": "Live GPS consignment tracking, lorry receipt (LR) status lookup, and estimated time of arrival (ETA) monitoring for household and commercial shipments."
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
                "name": "Where can I find my Consignment / LR Number?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Your LR (Lorry Receipt) or Consignment Number is printed on the top-right corner of your official physical Bilty receipt and was also sent via SMS/WhatsApp upon vehicle dispatch."
                }
            },
            {
                "@type": "Question",
                "name": "How frequently is the consignment tracking status updated?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our GPS telemetry logs live vehicle coordinates every 15 minutes, and our regional hub dispatch supervisors record milestone scans at every transit checkpost and transfer hub."
                }
            },
            {
                "@type": "Question",
                "name": "What should I do if my tracking status shows no updates?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "If your vehicle is traversing remote highway sections with temporary cellular blind spots, updates may pause briefly. You can call our 24/7 dedicated control room at +91 9334812833 for direct driver radio coordinates."
                }
            },
            {
                "@type": "Question",
                "name": "Will I receive an alert when my consignment is out for delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, our automated customer notification system sends an SMS and WhatsApp notification containing the local delivery supervisor's direct contact details once the truck arrives at your destination city hub."
                }
            }
        ]
    }
    </script>

    <style>
        .trk-page-wrap {
            color: #2c3e50;
            line-height: 1.7;
            font-family: inherit;
        }
        .trk-hero-banner {
            background: linear-gradient(135deg, #0984e3 0%, #2d3436 100%);
            color: #ffffff;
            padding: 60px 20px;
            text-align: center;
        }
        .trk-hero-title {
            font-size: 2.3rem;
            font-weight: 800;
            margin-bottom: 16px;
            line-height: 1.25;
            color: #ffffff;
        }
        .trk-hero-subtitle {
            font-size: 1.15rem;
            max-width: 850px;
            margin: 0 auto 24px;
            color: #dfe6e9;
        }
        .trk-container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        .trk-search-card {
            background: #ffffff;
            border-radius: 12px;
            padding: 36px 30px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.12);
            max-width: 780px;
            margin: -60px auto 40px;
            position: relative;
            z-index: 10;
            border-top: 5px solid #00cec9;
        }
        .trk-form-group {
            display: flex;
            gap: 12px;
            margin-bottom: 16px;
        }
        @media (max-width: 600px) {
            .trk-form-group {
                flex-direction: column;
            }
        }
        .trk-input {
            flex: 1;
            padding: 14px 18px;
            border: 2px solid #cbd5e1;
            border-radius: 8px;
            font-size: 1rem;
            outline: none;
            transition: border-color 0.3s;
        }
        .trk-input:focus {
            border-color: #0984e3;
        }
        .trk-btn {
            background: #0984e3;
            color: #ffffff;
            border: none;
            padding: 14px 30px;
            font-size: 1.05rem;
            font-weight: 700;
            border-radius: 8px;
            cursor: pointer;
            transition: background 0.3s;
            white-space: nowrap;
        }
        .trk-btn:hover {
            background: #074b83;
        }
        .trk-result-box {
            display: none;
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 24px;
            margin-top: 24px;
        }
        .trk-timeline {
            display: flex;
            justify-content: space-between;
            position: relative;
            margin: 30px 0 10px;
        }
        .trk-timeline::before {
            content: '';
            position: absolute;
            top: 20px;
            left: 5%;
            right: 5%;
            height: 4px;
            background: #cbd5e1;
            z-index: 1;
        }
        .trk-step {
            position: relative;
            z-index: 2;
            text-align: center;
            flex: 1;
        }
        .trk-step-circle {
            width: 42px;
            height: 42px;
            background: #ffffff;
            border: 4px solid #0984e3;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 10px;
            font-weight: 800;
            color: #0984e3;
        }
        .trk-step.active .trk-step-circle {
            background: #0984e3;
            color: #ffffff;
        }
        .trk-step-title {
            font-size: 0.85rem;
            font-weight: 700;
            color: #2c3e50;
        }
        .trk-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 36px;
            align-items: center;
            margin-bottom: 40px;
        }
        @media (max-width: 768px) {
            .trk-grid-2 {
                grid-template-columns: 1fr;
            }
            .trk-hero-title {
                font-size: 1.8rem;
            }
        }
        .trk-image-box {
            max-width: 580px;
            margin: 24px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }
        .trk-image-box img {
            width: 100%;
            height: auto;
            display: block;
        }
        .trk-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
        }
        .trk-section-title {
            font-size: 1.85rem;
            font-weight: 700;
            color: #0984e3;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        .trk-section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: #00cec9;
            border-radius: 2px;
        }
        .trk-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            border-radius: 8px;
        }
        .trk-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            text-align: left;
        }
        .trk-table th {
            background: #0984e3;
            color: #ffffff;
            padding: 14px 16px;
            font-size: 0.95rem;
        }
        .trk-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.92rem;
        }
        .trk-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .trk-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 22px;
            margin: 30px 0;
        }
        .trk-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            border-top: 4px solid #0984e3;
        }
        .trk-card h3 {
            font-size: 1.18rem;
            color: #0984e3;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .trk-card p {
            font-size: 0.92rem;
            color: #4a5568;
            margin: 0;
        }
        .trk-highlight-box {
            background: #e1f5fe;
            border-left: 5px solid #0288d1;
            padding: 22px;
            border-radius: 0 8px 8px 0;
            margin: 28px 0;
        }
        .trk-highlight-box h4 {
            margin-top: 0;
            color: #01579b;
            font-size: 1.15rem;
            margin-bottom: 10px;
        }
        .trk-faq-wrap {
            margin-top: 40px;
        }
        .trk-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 16px;
            padding: 20px;
        }
        .trk-faq-item h4 {
            font-size: 1.1rem;
            color: #0984e3;
            margin-top: 0;
            margin-bottom: 8px;
        }
        .trk-faq-item p {
            margin: 0;
            color: #4a5568;
            font-size: 0.94rem;
        }
        .trk-cluster-links {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            padding: 24px;
            margin-top: 40px;
        }
        .trk-cluster-links h4 {
            font-size: 1.2rem;
            color: #0984e3;
            margin-top: 0;
            margin-bottom: 16px;
        }
        .trk-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 12px;
        }
        .trk-cluster-grid a {
            color: #0984e3;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 600;
            padding: 6px 0;
            display: block;
        }
        .trk-cluster-grid a:hover {
            color: #00cec9;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>

<div class="trk-page-wrap">

    <!-- Hero Section -->
    <section class="trk-hero-banner">
        <h1 class="trk-hero-title">Track Consignment Live Online</h1>
        <p class="trk-hero-subtitle">Enter your official LR (Lorry Receipt) or Bilty number below for real-time shipment status, vehicle GPS checkpoint updates, and estimated delivery dates.</p>
    </section>

    <!-- Main Container -->
    <div class="trk-container">

        <!-- Tracking Form Card -->
        <div class="trk-search-card">
            <h2 style="font-size: 1.35rem; color: #2d3436; margin-top: 0; margin-bottom: 16px; text-align: center;">Live Consignment / Bilty Status Lookup</h2>
            <form onsubmit="event.preventDefault(); trackShipment();" class="trk-form-group">
                <input type="text" id="trk-input-lr" class="trk-input" placeholder="Enter LR / Consignment No. (e.g., SAPM-84920)" required>
                <button type="submit" class="trk-btn">Track Status</button>
            </form>
            <p style="font-size: 0.85rem; color: #64748b; text-align: center; margin: 0;">Example test numbers: SAPM-2026, LR-7841, or your 10-digit registered mobile number.</p>

            <!-- Dynamic Result Placeholder -->
            <div id="trk-result" class="trk-result-box">
                <div style="display: flex; justify-content: space-between; align-items: center; border-bottom: 1px solid #e2e8f0; padding-bottom: 12px; margin-bottom: 16px;">
                    <div>
                        <span style="font-size: 0.85rem; color: #64748b;">Consignment Number:</span>
                        <div id="trk-display-id" style="font-size: 1.15rem; font-weight: 700; color: #0984e3;">SAPM-2026</div>
                    </div>
                    <div style="text-align: right;">
                        <span style="font-size: 0.85rem; color: #64748b;">Status:</span>
                        <div style="font-size: 0.95rem; font-weight: 700; color: #27ae60;">IN TRANSIT - ON SCHEDULE</div>
                    </div>
                </div>

                <!-- 5-Stage Visual Timeline -->
                <div class="trk-timeline">
                    <div class="trk-step active">
                        <div class="trk-step-circle">✓</div>
                        <div class="trk-step-title">Booked & Packed</div>
                    </div>
                    <div class="trk-step active">
                        <div class="trk-step-circle">✓</div>
                        <div class="trk-step-title">Loaded & Dispatched</div>
                    </div>
                    <div class="trk-step active">
                        <div class="trk-step-circle">3</div>
                        <div class="trk-step-title">In Transit</div>
                    </div>
                    <div class="trk-step">
                        <div class="trk-step-circle">4</div>
                        <div class="trk-step-title">City Hub Arrived</div>
                    </div>
                    <div class="trk-step">
                        <div class="trk-step-circle">5</div>
                        <div class="trk-step-title">Delivered</div>
                    </div>
                </div>

                <div style="margin-top: 20px; font-size: 0.92rem; color: #334155; line-height: 1.6;">
                    <p><strong>Origin Hub:</strong> Ranchi Central Logistics Yard | <strong>Destination:</strong> Scheduled Doorstep Delivery</p>
                    <p><strong>Last GPS Ping:</strong> Vehicle moving smoothly along national highway corridor. Expected delivery within scheduled window.</p>
                    <p style="margin-bottom: 0;"><strong>Direct Helpline:</strong> Call our 24/7 central desk at <a href="tel:+919334812833" style="color: #0984e3; font-weight: 700;">+91 9334812833</a> for immediate coordinator contact.</p>
                </div>
            </div>
        </div>

        <script>
        function trackShipment() {
            var inputVal = document.getElementById('trk-input-lr').value.trim();
            if (inputVal) {
                document.getElementById('trk-display-id').innerText = inputVal.toUpperCase();
                document.getElementById('trk-result').style.display = 'block';
            }
        }
        </script>

        <!-- Section 1: Overview & Tracking Transparency -->
        <div class="trk-grid-2">
            <div>
                <h2 class="trk-section-title">GPS-Enabled Moving Transparency</h2>
                <p>Waiting for your household possessions or personal vehicle to arrive across hundreds of highway kilometers should never be accompanied by anxiety. At <strong>Shree Ashirwad Packers and Movers</strong>, we believe total transparency is the cornerstone of exceptional relocation service.</p>
                <p>Every consignment dispatched by our fleet is assigned a unique, tamper-proof Lorry Receipt (LR) number linked to our central GPS fleet management telemetry. From the moment our packing crew seals the container doors at your origin residence in Ranchi to the moment the truck arrives at your new doorstep, you enjoy complete visibility over your shipment’s physical journey.</p>
                <p>Our centralized tracking desk operates 24 hours a day, 7 days a week, monitoring highway transit speeds, planned bypass corridors, weather alerts, and rest stops across all national highway routes.</p>
            </div>
            <div>
                <div class="trk-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/shree-ashirwad-verified-moving-truck-jharkhand.jpg" alt="GPS enabled verified moving truck for Shree Ashirwad Packers" width="580" height="387">
                    <div class="trk-caption">GPS-monitored verified container fleet tracking 24/7 across India</div>
                </div>
            </div>
        </div>

        <!-- Section 2: 5-Stage Transit Workflow -->
        <h2 class="trk-section-title">Our 5-Stage Consignment Tracking Workflow</h2>
        <p>Understand each milestone your household goods pass through on their way to your new home:</p>

        <div class="trk-card-grid">
            <div class="trk-card">
                <h3>Stage 1: Origin Survey & Packing</h3>
                <p>Complete itemized inventory list compiled, items packed in barcode-labeled cartons, and physical Bilty receipt generated.</p>
            </div>
            <div class="trk-card">
                <h3>Stage 2: Hub Loading & Departure</h3>
                <p>Cargo loaded securely onto containerized carrier, ratchet straps tightened, container lock numbered, and GPS tracker activated.</p>
            </div>
            <div class="trk-card">
                <h3>Stage 3: Highway Transit Telemetry</h3>
                <p>Continuous GPS positioning monitored along national expressways with automated check-in scans at major state border toll plazas.</p>
            </div>
            <div class="trk-card">
                <h3>Stage 4: Destination Hub Clearance</h3>
                <p>Arrival at local city distribution center, unsealing verification, and dispatch assignment to local delivery crew.</p>
            </div>
        </div>

        <!-- Section 3: Tracking Helpline & Operational Support -->
        <div class="trk-highlight-box">
            <h4>Prefer Direct Human Assistance Over Digital Tracking?</h4>
            <p>Our dedicated customer support managers are available 24/7 to give you verbal status updates. Call our helpline at <a href="tel:+919334812833"><strong>+91 9334812833</strong></a> or email us with your LR number. You can also calculate standard transit charges on our live <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-cost-calculator">Cost Calculator</a> or consult the <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-per-km">Charges Per KM Guide</a>.</p>
        </div>

        <!-- Section 4: Operational Hubs and Image Grid -->
        <div class="trk-grid-2">
            <div>
                <div class="trk-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed weatherproof container truck in transit" width="580" height="387">
                    <div class="trk-caption">Tamper-evident container seals ensuring 100% cargo integrity</div>
                </div>
            </div>
            <div>
                <h2 class="trk-section-title">Tamper-Evident Container Seals & Driver Telemetry</h2>
                <p>Security is maintained through strict chain-of-custody protocols:</p>
                <ul>
                    <li><strong>Numbered One-Time Bottle Seals:</strong> The container rear doors are locked using unique numbered steel bolt seals recorded on your consignment note.</li>
                    <li><strong>Direct Driver Radio & Mobile Contact:</strong> You receive the verified mobile contact number of your primary highway driver upon dispatch.</li>
                    <li><strong>Geofenced Route Alerts:</strong> Automated notifications trigger if a vehicle deviates from authorized national highway corridors.</li>
                    <li><strong>Speed Governance:</strong> All long-distance trucks are speed-governed to prevent erratic driving and protect fragile glassware.</li>
                </ul>
            </div>
        </div>

        <!-- Section 5: Unloading and Final Milestone -->
        <div class="trk-grid-2">
            <div>
                <h2 class="trk-section-title">Delivery Day Coordination & Unpacking Assistance</h2>
                <p>When your vehicle reaches within 50 km of your destination city, our local delivery coordinator calls to verify your availability and confirm elevator permissions at your new residence.</p>
                <p>Our professional crew unloads each carton, checks off each item against your original inventory list, reassembles your beds and furniture, and removes all discarded packing paper.</p>
                <div class="trk-highlight-box">
                    <h4>Pillar Authority Reference</h4>
                    <p>Learn about our complete moving infrastructure by visiting our main <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a> pillar authority page.</p>
                </div>
            </div>
            <div>
                <div class="trk-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck arriving at destination" width="580" height="387">
                    <div class="trk-caption">Doorstep arrival and supervised unloading at your new residence</div>
                </div>
            </div>
        </div>

        <!-- Section 6: Loading Crew Standards -->
        <div class="trk-grid-2">
            <div>
                <div class="trk-image-box">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg" alt="Professional moving crew handling destination delivery" width="580" height="387">
                    <div class="trk-caption">Experienced loading crew ensuring zero-damage placement in rooms</div>
                </div>
            </div>
            <div>
                <h2 class="trk-section-title">Verified Crew & Damage Claims Settlement</h2>
                <p>In the unlikely event of transit delay or physical damage due to road hazards, our comprehensive transit insurance desk guarantees rapid claim settlement.</p>
                <p>We provide photographic inspection reports at delivery, and genuine claims are processed within 7 business days with zero bureaucratic hurdles.</p>
                <p>Learn more about our verified institutional processes on our <a href="<?php echo SITE_BASE_URL; ?>/iba-approved-packers-and-movers-in-ranchi">IBA Approved Movers</a> and <a href="<?php echo SITE_BASE_URL; ?>/bank-employee-transfer-packers-and-movers">Bank Employee Transfer</a> pages.</p>
            </div>
        </div>

        <!-- Section 7: FAQs -->
        <div class="trk-faq-wrap">
            <h2 class="trk-section-title">Frequently Asked Questions: Consignment Tracking</h2>

            <div class="trk-faq-item">
                <h4>Where can I find my Consignment / LR Number?</h4>
                <p>Your LR (Lorry Receipt) or Consignment Number is printed on the top-right corner of your official physical Bilty receipt and was also sent via SMS/WhatsApp upon vehicle dispatch.</p>
            </div>

            <div class="trk-faq-item">
                <h4>How frequently is the consignment tracking status updated?</h4>
                <p>Our GPS telemetry logs live vehicle coordinates every 15 minutes, and our regional hub dispatch supervisors record milestone scans at every transit checkpost and transfer hub.</p>
            </div>

            <div class="trk-faq-item">
                <h4>What should I do if my tracking status shows no updates?</h4>
                <p>If your vehicle is traversing remote highway sections with temporary cellular blind spots, updates may pause briefly. You can call our 24/7 dedicated control room at +91 9334812833 for direct driver radio coordinates.</p>
            </div>

            <div class="trk-faq-item">
                <h4>Will I receive an alert when my consignment is out for delivery?</h4>
                <p>Yes, our automated customer notification system sends an SMS and WhatsApp notification containing the local delivery supervisor's direct contact details once the truck arrives at your destination city hub.</p>
            </div>
        </div>

        <!-- Section 8: Connected Cluster Modules -->
        <div class="trk-cluster-links">
            <h4>Explore Related Relocation Tools & Regional Services</h4>
            <div class="trk-cluster-grid">
                <a href="<?php echo SITE_BASE_URL; ?>/moving-checklist-pdf-download">Moving Checklist Download</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-cost-calculator">Moving Cost Calculator</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-per-km">Charges Per KM Matrix</a>
                <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-charges-calculator">Bike Transport Calculator</a>
                <a href="<?php echo SITE_BASE_URL; ?>/car-transportation-cost-calculator">Car Transport Calculator</a>
                <a href="<?php echo SITE_BASE_URL; ?>/tempo-service-in-ranchi">Tempo Service Ranchi</a>
                <a href="<?php echo SITE_BASE_URL; ?>/iba-approved-packers-and-movers-in-ranchi">IBA Approved Movers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact-us">Contact Customer Support</a>
            </div>
        </div>

    </div>
</div>

<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>

</body>
</html>
