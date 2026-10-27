<?php
// Dynamic SEO Configuration for Tempo Service in Ranchi
$page_title = "Tempo Service in Ranchi | Chota Hathi & Tata Ace on Rent with Driver & Helper";
$page_description = "Affordable tempo service in Ranchi. Hire Tata Ace Chota Hathi, Mahindra Bolero Pickup & 407 on rent with verified drivers and loading helpers. Hourly & per km rates. Call +91 9835565233.";
$canonical_url = "https://shreeashirwadpackers.com/tempo-service-in-ranchi";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <meta name="description" content="<?php echo $page_description; ?>">
    <meta name="keywords" content="tempo service in ranchi, chota hathi on rent in ranchi, tata ace rent ranchi, mini truck for shifting ranchi, hire tempo with helper ranchi, goods transport tempo ranchi, bolero pickup rental ranchi">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Tempo & Mini Truck Division Ranchi",
        "image": "https://shreeashirwadpackers.com/images/door-to-door-delivery-truck-jharkhand.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91 9835565233",
        "priceRange": "₹750 - ₹4,500",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Road, Near Overbridge, Kadru",
            "addressLocality": "Ranchi",
            "addressRegion": "Jharkhand",
            "postalCode": "834002",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.3441,
            "longitude": 85.3096
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "06:00",
            "closes": "23:00"
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
                "name": "Services",
                "item": "https://shreeashirwadpackers.com/services"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Tempo Service in Ranchi",
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
        "name": "On-Demand Tempo & Mini Truck Rental Service in Ranchi",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "City",
            "name": "Ranchi, Jharkhand"
        },
        "description": "Hire Tata Ace Chota Hathi, Mahindra Bolero Pickup, and Tata 407 mini trucks with verified drivers and skilled loading helpers for intra-city luggage, single furniture, and retail goods transport across Ranchi."
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
                "name": "What is the starting price to hire a Chota Hathi Tata Ace in Ranchi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our base price for Tata Ace (Chota Hathi) rental in Ranchi starts at ₹750 for the first 3 km. Subsequent kilometers are charged transparently at ₹35–₹45 per km depending on cargo payload and route."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide loading and unloading helpers with the tempo?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, you can book experienced loading helpers along with the mini truck. Dedicated helpers are available at ₹350–₹500 per helper for standard floor lifting and cargo handling."
                }
            },
            {
                "@type": "Question",
                "name": "How quickly can a tempo arrive at my location in Ranchi?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We operate active mini-truck hubs across Lalpur, Harmu, Doranda, Bariatu, Ratu Road, and Dhurwa. Under regular conditions, a tempo reaches your doorstep within 30 to 45 minutes of booking."
                }
            },
            {
                "@type": "Question",
                "name": "Which types of mini trucks and tempos are available for hire?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Our fleet includes Piaggio Ape (500 kg payload), Tata Ace / Chota Hathi (750-1000 kg payload), Mahindra Bolero Pickup (1.2 to 1.7 ton payload), and Tata 407 closed container (2.5 ton payload)."
                }
            }
        ]
    }
    </script>

    <style>
        .tmp-page-wrap {
            color: #2c3e50;
            line-height: 1.7;
            font-family: inherit;
        }
        .tmp-hero-banner {
            background: linear-gradient(135deg, #1e3c72 0%, #2a5298 100%);
            color: #ffffff;
            padding: 60px 20px;
            text-align: center;
        }
        .tmp-hero-title {
            font-size: 2.3rem;
            font-weight: 800;
            margin-bottom: 16px;
            line-height: 1.25;
            color: #ffffff;
        }
        .tmp-hero-subtitle {
            font-size: 1.15rem;
            max-width: 850px;
            margin: 0 auto 24px;
            color: #e0e7ff;
        }
        .tmp-cta-btn {
            display: inline-block;
            background: #e67e22;
            color: #ffffff;
            padding: 13px 30px;
            font-size: 1.05rem;
            font-weight: 700;
            border-radius: 6px;
            text-decoration: none;
            transition: background 0.3s ease;
        }
        .tmp-cta-btn:hover {
            background: #d35400;
        }
        .tmp-container {
            max-width: 1140px;
            margin: 0 auto;
            padding: 40px 20px;
        }
        .tmp-grid-2 {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 36px;
            align-items: center;
            margin-bottom: 40px;
        }
        @media (max-width: 768px) {
            .tmp-grid-2 {
                grid-template-columns: 1fr;
            }
            .tmp-hero-title {
                font-size: 1.8rem;
            }
        }
        .tmp-image-box {
            max-width: 580px;
            margin: 24px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 24px rgba(0,0,0,0.12);
        }
        .tmp-image-box img {
            width: 100%;
            height: auto;
            display: block;
        }
        .tmp-caption {
            font-size: 0.88rem;
            color: #64748b;
            text-align: center;
            padding: 8px 12px;
            background: #f8fafc;
        }
        .tmp-section-title {
            font-size: 1.85rem;
            font-weight: 700;
            color: #1e3c72;
            margin-bottom: 20px;
            position: relative;
            padding-bottom: 10px;
        }
        .tmp-section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 60px;
            height: 4px;
            background: #e67e22;
            border-radius: 2px;
        }
        .tmp-table-wrap {
            overflow-x: auto;
            margin: 28px 0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.06);
            border-radius: 8px;
        }
        .tmp-table {
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            text-align: left;
        }
        .tmp-table th {
            background: #1e3c72;
            color: #ffffff;
            padding: 14px 16px;
            font-size: 0.95rem;
        }
        .tmp-table td {
            padding: 12px 16px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.92rem;
        }
        .tmp-table tr:nth-child(even) {
            background: #f8fafc;
        }
        .tmp-card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 22px;
            margin: 30px 0;
        }
        .tmp-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            padding: 24px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            border-top: 4px solid #1e3c72;
        }
        .tmp-card h3 {
            font-size: 1.18rem;
            color: #1e3c72;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .tmp-card p {
            font-size: 0.92rem;
            color: #4a5568;
            margin: 0;
        }
        .tmp-highlight-box {
            background: #eef2ff;
            border-left: 5px solid #4338ca;
            padding: 22px;
            border-radius: 0 8px 8px 0;
            margin: 28px 0;
        }
        .tmp-highlight-box h4 {
            margin-top: 0;
            color: #312e81;
            font-size: 1.15rem;
            margin-bottom: 10px;
        }
        .tmp-faq-wrap {
            margin-top: 40px;
        }
        .tmp-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 16px;
            padding: 20px;
        }
        .tmp-faq-item h4 {
            font-size: 1.1rem;
            color: #1e3c72;
            margin-top: 0;
            margin-bottom: 8px;
        }
        .tmp-faq-item p {
            margin: 0;
            color: #4a5568;
            font-size: 0.94rem;
        }
        .tmp-cluster-links {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 8px;
            padding: 24px;
            margin-top: 40px;
        }
        .tmp-cluster-links h4 {
            font-size: 1.2rem;
            color: #1e3c72;
            margin-top: 0;
            margin-bottom: 16px;
        }
        .tmp-cluster-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 12px;
        }
        .tmp-cluster-grid a {
            color: #1e3c72;
            text-decoration: none;
            font-size: 0.92rem;
            font-weight: 600;
            padding: 6px 0;
            display: block;
        }
        .tmp-cluster-grid a:hover {
            color: #e67e22;
            text-decoration: underline;
        }
    </style>
</head>
<body>

<?php include_once dirname(__DIR__) . '/includes/header.php'; ?>

<div class="tmp-page-wrap">

    <!-- Hero Section -->
    <section class="tmp-hero-banner">
        <h1 class="tmp-hero-title">On-Demand Tempo Service in Ranchi</h1>
        <p class="tmp-hero-subtitle">Rent Tata Ace Chota Hathi, Mahindra Bolero Pickup, and Tata 407 with Verified Drivers & Professional Helpers across Ranchi. Doorstep Pickup within 30 Minutes.</p>
        <a href="tel:+919835565233" class="tmp-cta-btn">Book Tempo Now: +91 9835565233</a>
    </section>

    <!-- Main Container -->
    <div class="tmp-container">

        <!-- Section 1: Introduction & Service Overview -->
        <div class="tmp-grid-2">
            <div>
                <h2 class="tmp-section-title">Reliable Mini Truck & Tempo Hire Across Ranchi</h2>
                <p>When you need to transport a single piece of furniture, a two-wheeler, a commercial cargo consignment, or multiple suitcases across Ranchi, hiring a full-sized 14-foot moving truck is unnecessary and expensive. <strong>Shree Ashirwad Packers and Movers</strong> provides instant, affordable, and flexible <strong>tempo services in Ranchi</strong> designed specifically for micro-shifting, e-commerce deliveries, shop shifting, and bachelor room relocations.</p>
                <p>From the narrow streets of Upper Bazaar and Daily Market to the sprawling residential sectors of Ashok Nagar, Morabadi, Bariatu, Dhurwa, and Harmu Housing Colony, our compact fleet navigates Ranchi city traffic effortlessly. We eliminate the frustration of bargaining with informal street-side tempo stands by offering transparent, upfront tariff rates, verified police-checked drivers, and optional skilled loaders.</p>
                <p>Whether you need a Tata Ace (Chota Hathi) for a 3 km dash from Lalpur to Kanke Road or a Mahindra Bolero Pickup for an outstation cargo trip from Kokar Industrial Area to Ramgarh or Jamshedpur, our fleet is ready on demand 24/7.</p>
            </div>
            <div>
                <div class="tmp-image-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Tempo and mini truck delivery service in Ranchi with driver" width="580" height="387">
                    <div class="tmp-caption">On-demand Tata Ace Chota Hathi and mini trucks across Ranchi</div>
                </div>
            </div>
        </div>

        <!-- Section 2: Fleet Types Available -->
        <h2 class="tmp-section-title">Our Ranchi Tempo & Mini Truck Fleet Options</h2>
        <p>Choose the exact vehicle capacity tailored to your cargo dimensions and payload weight:</p>

        <div class="tmp-card-grid">
            <div class="tmp-card">
                <h3>Tata Ace (Chota Hathi)</h3>
                <p><strong>Payload:</strong> 750 - 850 kg<br><strong>Bed Size:</strong> 7.2 ft x 4.8 ft<br>Ideal for 1 BHK bachelor moves, washing machines, refrigerators, sofa sets, and cartons.</p>
            </div>
            <div class="tmp-card">
                <h3>Mahindra Bolero Pickup</h3>
                <p><strong>Payload:</strong> 1,200 - 1,700 kg<br><strong>Bed Size:</strong> 8.2 ft x 5.5 ft<br>Perfect for full 1 BHK / 2 BHK household furniture, timber items, iron almirahs, and retail inventory.</p>
            </div>
            <div class="tmp-card">
                <h3>Piaggio Ape / 3-Wheeler</h3>
                <p><strong>Payload:</strong> 500 kg<br><strong>Bed Size:</strong> 5.5 ft x 4.0 ft<br>Best for quick deliveries through congested markets like Upper Bazaar, Kutchery Chowk, and Doranda.</p>
            </div>
            <div class="tmp-card">
                <h3>Tata 407 (Closed Container)</h3>
                <p><strong>Payload:</strong> 2,500 kg<br><strong>Bed Size:</strong> 10.0 ft x 6.5 ft<br>All-weather waterproof closed body, ideal for complete 2 BHK relocations, office equipment, and outstation trips.</p>
            </div>
        </div>

        <!-- Section 3: Transparent Pricing Table -->
        <h2 class="tmp-section-title">Transparent Tempo Rental Rates in Ranchi</h2>
        <p>We believe in 100% price transparency. No hidden fuel surcharges, driver refreshments, or unannounced toll markups. Review our standard base rates below:</p>

        <div class="tmp-table-wrap">
            <table class="tmp-table">
                <thead>
                    <tr>
                        <th>Vehicle Type</th>
                        <th>Base Fare (First 3 KM)</th>
                        <th>Per KM Rate (Beyond 3 KM)</th>
                        <th>Free Loading / Waiting Time</th>
                        <th>Helper Charges (Per Person)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Piaggio Ape (3-Wheeler)</strong></td>
                        <td>₹550</td>
                        <td>₹28 / km</td>
                        <td>45 Minutes</td>
                        <td>₹300 (Optional)</td>
                    </tr>
                    <tr>
                        <td><strong>Tata Ace (Chota Hathi)</strong></td>
                        <td>₹750</td>
                        <td>₹35 / km</td>
                        <td>60 Minutes</td>
                        <td>₹350 - ₹400</td>
                    </tr>
                    <tr>
                        <td><strong>Mahindra Bolero Pickup</strong></td>
                        <td>₹1,100</td>
                        <td>₹42 / km</td>
                        <td>75 Minutes</td>
                        <td>₹400 - ₹500</td>
                    </tr>
                    <tr>
                        <td><strong>Tata 407 Container</strong></td>
                        <td>₹1,800</td>
                        <td>₹55 / km</td>
                        <td>90 Minutes</td>
                        <td>₹450 - ₹550</td>
                    </tr>
                    <tr>
                        <td><strong>Full-Day Rental (8 Hrs / 80 KM)</strong></td>
                        <td>₹3,500 (Tata Ace)</td>
                        <td>₹35 / km thereafter</td>
                        <td>Included</td>
                        <td>Quoted as per crew requirement</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="tmp-highlight-box">
            <h4>Planning a Larger Move or Intercity Relocation?</h4>
            <p>If you are shifting a full apartment or shifting out of Ranchi to another city, calculate exact charges using our interactive <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-cost-calculator">Cost Calculator</a> or consult our verified <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-per-km">Charges Per KM Guide</a>.</p>
        </div>

        <!-- Section 4: Use Cases & Operational Workflow -->
        <div class="tmp-grid-2">
            <div>
                <div class="tmp-image-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/household-goods-truck-loading-ranchi.jpg" alt="Loading household goods onto tempo in Ranchi" width="580" height="387">
                    <div class="tmp-caption">Trained loading helpers ensuring secure tie-down of items</div>
                </div>
            </div>
            <div>
                <h2 class="tmp-section-title">Popular Tempo Rental Scenarios in Ranchi</h2>
                <p>Our customers hire our mini truck tempo service for diverse relocation and transport needs:</p>
                <ul>
                    <li><strong>Single Large Furniture Relocation:</strong> Moving a double bed, sofa cum bed, dining table, or wardrobe bought from Main Road or Harmu furniture shops.</li>
                    <li><strong>Student & Bachelor Room Moves:</strong> Ideal for college students from BIT Mesra, RIMS, and St. Xavier’s moving study materials, luggage, and mattresses.</li>
                    <li><strong>Home Appliance Transport:</strong> Safe vertical transit for double-door refrigerators, washing machines, and large 65-inch LED TVs.</li>
                    <li><strong>Commercial Stock & Retail Movement:</strong> Daily deliveries for wholesalers in Upper Bazaar, Kokar, and Pandra Krishi Mandi to retail outlets.</li>
                    <li><strong>Event & Exhibition Logistics:</strong> Quick transport of sound systems, catering utensils, and stage equipment across Ranchi banquet halls.</li>
                </ul>
            </div>
        </div>

        <!-- Section 5: Why Book with Shree Ashirwad vs Local Stands -->
        <div class="tmp-grid-2">
            <div>
                <h2 class="tmp-section-title">Why Shree Ashirwad vs Unorganized Stands</h2>
                <p>Hiring an unverified tempo from street corners like Overbridge Chowk, Birsa Chowk, or Kantatoli often leads to sudden price escalations, careless item handling, and vehicle breakdowns midway.</p>
                <p>With Shree Ashirwad Packers and Movers, you receive:</p>
                <ul>
                    <li><strong>GPS Live Tracking:</strong> Track your tempo's live location on your smartphone throughout the journey.</li>
                    <li><strong>Zero Surge Pricing:</strong> Transparent rates agreed upon upfront, even during peak festive periods or rainy days.</li>
                    <li><strong>Rope, Tarpaulin & Cardboard Sheets:</strong> Every vehicle comes equipped with waterproof tarpaulins, heavy cargo straps, and protective cardboard liners.</li>
                    <li><strong>Background-Checked Drivers:</strong> Experienced, polite, and verified drivers who adhere to city safety protocols.</li>
                </ul>
            </div>
            <div>
                <div class="tmp-image-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/professional-loading-crew-ranchi.jpg" alt="Professional loading crew with tempo service in Ranchi" width="580" height="387">
                    <div class="tmp-caption">Dedicated helpers for smooth lifting, carrying, and doorstep delivery</div>
                </div>
            </div>
        </div>

        <!-- Section 6: Local Coverage Areas in Ranchi -->
        <div class="tmp-grid-2">
            <div>
                <div class="tmp-image-box">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Weatherproof container mini trucks in Ranchi" width="580" height="387">
                    <div class="tmp-caption">All-weather closed containers protecting goods from dust and rain</div>
                </div>
            </div>
            <div>
                <h2 class="tmp-section-title">Active Stand Hubs Across All Ranchi Zones</h2>
                <p>We maintain designated parking points throughout Ranchi to ensure 30-minute dispatch:</p>
                <p><strong>Central Ranchi:</strong> Main Road, Albert Ekka Chowk, Kutchery Road, Lalpur, Circular Road, Morabadi, Karamtoli.</p>
                <p><strong>South & West Ranchi:</strong> Harmu Road, Kishore Ganj, Ratu Road, Argora Chowk, Kadru, Doranda, Hinoo, Birsa Chowk, Dhurwa, Hatia.</p>
                <p><strong>North & East Ranchi:</strong> Bariatu Road, Booty More, Kokar Industrial Area, Kantatoli, Tatisilwai, Namkum, Pandra.</p>
                <div class="tmp-highlight-box">
                    <h4>Need Full Moving Assistance?</h4>
                    <p>Visit our central <a href="<?php echo SITE_BASE_URL; ?>/">Packers and Movers in Ranchi</a> pillar page to see complete turnkey household packing solutions.</p>
                </div>
            </div>
        </div>

        <!-- Section 7: FAQs -->
        <div class="tmp-faq-wrap">
            <h2 class="tmp-section-title">Frequently Asked Questions: Ranchi Tempo Service</h2>

            <div class="tmp-faq-item">
                <h4>What is the starting price to hire a Chota Hathi Tata Ace in Ranchi?</h4>
                <p>Our base price for Tata Ace (Chota Hathi) rental in Ranchi starts at ₹750 for the first 3 km. Subsequent kilometers are charged transparently at ₹35–₹45 per km depending on cargo payload and route.</p>
            </div>

            <div class="tmp-faq-item">
                <h4>Do you provide loading and unloading helpers with the tempo?</h4>
                <p>Yes, you can book experienced loading helpers along with the mini truck. Dedicated helpers are available at ₹350–₹500 per helper for standard floor lifting and cargo handling.</p>
            </div>

            <div class="tmp-faq-item">
                <h4>How quickly can a tempo arrive at my location in Ranchi?</h4>
                <p>We operate active mini-truck hubs across Lalpur, Harmu, Doranda, Bariatu, Ratu Road, and Dhurwa. Under regular conditions, a tempo reaches your doorstep within 30 to 45 minutes of booking.</p>
            </div>

            <div class="tmp-faq-item">
                <h4>Which types of mini trucks and tempos are available for hire?</h4>
                <p>Our fleet includes Piaggio Ape (500 kg payload), Tata Ace / Chota Hathi (750-1000 kg payload), Mahindra Bolero Pickup (1.2 to 1.7 ton payload), and Tata 407 closed container (2.5 ton payload).</p>
            </div>
        </div>

        <!-- Section 8: Connected Cluster Modules -->
        <div class="tmp-cluster-links">
            <h4>Explore Related Transport & Relocation Services in Ranchi</h4>
            <div class="tmp-cluster-grid">
                <a href="<?php echo SITE_BASE_URL; ?>/single-item-and-luggage-transport-ranchi">Single Item & Luggage Transport</a>
                <a href="<?php echo SITE_BASE_URL; ?>/student-relocation-services-ranchi">Student Relocation Services</a>
                <a href="<?php echo SITE_BASE_URL; ?>/commercial-warehouse-relocation-jharkhand">Warehouse Goods Shifting</a>
                <a href="<?php echo SITE_BASE_URL; ?>/industrial-machinery-shifting-ranchi">Industrial Machinery Transport</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-harmu-housing-colony">Tempo Shifting Harmu</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ashok-nagar-ranchi">Tempo Shifting Ashok Nagar</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-per-km">Charges Per KM Guide</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-cost-calculator">Live Cost Calculator</a>
            </div>
        </div>

    </div>
</div>

<?php include_once dirname(__DIR__) . '/includes/footer.php'; ?>

</body>
</html>
