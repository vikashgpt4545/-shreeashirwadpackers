<?php
/**
 * Page Name: Jamtara to Dumka Packers and Movers
 * Route Slug: jamtara-to-dumka-packers-and-movers
 * Description: Dedicated inter-district moving route page from Jamtara to Dumka (Santhal Pargana Divisional Headquarters).
 * Focus Keywords: jamtara to dumka packers and movers, packers and movers jamtara to dumka, house shifting jamtara to dumka, jamtara to dumka luggage parcel, jamtara to dumka car carrier, jamtara to dumka bike parcel
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Jamtara to Dumka Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Fast Jamtara to Dumka packers and movers. Same-day 1.5-2 hr transit via SH-17, SKMU & commissionerate transfer bills, 5-layer packing, car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/jamtara-to-dumka-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="jamtara to dumka packers and movers, packers and movers jamtara to dumka, house shifting jamtara to dumka, jamtara to dumka luggage parcel, jamtara to dumka car carrier, jamtara to dumka bike parcel">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Jamtara">

    <!-- Open Graph Metadata -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg">

    <!-- Favicon & Stylesheets -->
    <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Scoped CSS for Route 3 (Jamtara to Dumka) -->
    <style>
        :root {
            --j2dum-primary: #152e4d;
            --j2dum-secondary: #0891b2;
            --j2dum-accent: #b45309;
            --j2dum-accent-light: #fef3c7;
            --j2dum-dark: #0f172a;
            --j2dum-gray-bg: #f8fafc;
            --j2dum-border: #e2e8f0;
        }

        .j2dum-wrapper {
            font-family: 'Plus Jakarta Sans', sans-serif;
            color: #334155;
            line-height: 1.7;
        }

        .j2dum-hero {
            background: linear-gradient(135deg, rgba(21,46,77,0.95) 0%, rgba(8,145,178,0.92) 100%),
                        url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 85px 20px 75px;
            text-align: center;
            position: relative;
        }
        .j2dum-hero-content {
            max-width: 980px;
            margin: 0 auto;
        }
        .j2dum-badge {
            display: inline-block;
            background: rgba(180,83,9,0.25);
            border: 1px solid rgba(245,158,11,0.45);
            color: #fef3c7;
            padding: 6px 18px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 0.05em;
            margin-bottom: 20px;
        }
        .j2dum-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: clamp(2rem, 4vw, 3.2rem);
            font-weight: 800;
            line-height: 1.2;
            margin-bottom: 18px;
            color: #ffffff;
        }
        .j2dum-hero h1 span {
            color: #fbbf24;
            display: inline-block;
        }
        .j2dum-hero p {
            font-size: 1.15rem;
            color: #e2e8f0;
            max-width: 820px;
            margin: 0 auto 30px;
            line-height: 1.7;
        }
        .j2dum-hero-stats {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(170px, 1fr));
            gap: 15px;
            margin: 35px 0 30px;
        }
        .j2dum-stat-card {
            background: rgba(255,255,255,0.08);
            backdrop-filter: blur(8px);
            border: 1px solid rgba(255,255,255,0.15);
            padding: 18px 12px;
            border-radius: 12px;
        }
        .j2dum-stat-card strong {
            display: block;
            font-size: 1.6rem;
            font-family: 'Outfit', sans-serif;
            color: #fbbf24;
        }
        .j2dum-stat-card span {
            font-size: 0.85rem;
            color: #cbd5e1;
        }

        .j2dum-btn-group {
            display: flex;
            justify-content: center;
            gap: 15px;
            flex-wrap: wrap;
            margin-top: 25px;
        }
        .j2dum-btn-phone {
            background: #f59e0b;
            color: #0b192c;
            padding: 13px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 14px rgba(245,158,11,0.35);
            transition: all 0.25s ease;
        }
        .j2dum-btn-phone:hover {
            background: #d97706;
            color: #ffffff;
            transform: translateY(-2px);
        }
        .j2dum-btn-whatsapp {
            background: #10b981;
            color: #ffffff;
            padding: 13px 28px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            box-shadow: 0 4px 14px rgba(16,185,129,0.35);
            transition: all 0.25s ease;
        }
        .j2dum-btn-whatsapp:hover {
            background: #059669;
            transform: translateY(-2px);
        }

        .j2dum-section {
            padding: 60px 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .j2dum-section-header {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 45px;
        }
        .j2dum-section-header h2 {
            font-family: 'Outfit', sans-serif;
            color: var(--j2dum-primary);
            font-size: 2.2rem;
            font-weight: 800;
            margin-bottom: 12px;
        }
        .j2dum-section-header p {
            font-size: 1.05rem;
            color: #64748b;
        }

        .j2dum-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 35px;
            align-items: center;
            margin-bottom: 45px;
        }
        .j2dum-grid-3 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
            gap: 25px;
        }

        .j2dum-card {
            background: #ffffff;
            border: 1px solid var(--j2dum-border);
            border-radius: 12px;
            padding: 28px;
            box-shadow: 0 4px 12px rgba(15,23,42,0.04);
            transition: transform 0.25s ease, box-shadow 0.25s ease;
        }
        .j2dum-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(15,23,42,0.08);
        }
        .j2dum-card h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--j2dum-primary);
            font-size: 1.3rem;
            margin-bottom: 12px;
            font-weight: 700;
        }
        .j2dum-card p {
            font-size: 0.96rem;
            color: #475569;
            line-height: 1.65;
            margin-bottom: 0;
        }

        .j2dum-feature-img {
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 8px 20px rgba(15,23,42,0.08);
        }
        .j2dum-feature-img img {
            width: 100%;
            height: auto;
            display: block;
            transition: transform 0.3s ease;
        }
        .j2dum-feature-img:hover img {
            transform: scale(1.03);
        }
        .j2dum-img-caption {
            background: #f1f5f9;
            padding: 10px 15px;
            font-size: 0.85rem;
            color: #64748b;
            text-align: center;
            font-style: italic;
        }

        .j2dum-table-wrapper {
            background: #ffffff;
            border: 1px solid var(--j2dum-border);
            border-radius: 12px;
            overflow-x: auto;
            box-shadow: 0 8px 20px rgba(15,23,42,0.05);
        }
        .j2dum-table {
            width: 100%;
            border-collapse: collapse;
            text-align: left;
            font-size: 0.98rem;
        }
        .j2dum-table th {
            background: var(--j2dum-primary);
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 700;
            white-space: nowrap;
        }
        .j2dum-table td {
            padding: 15px 20px;
            border-bottom: 1px solid var(--j2dum-border);
            color: #475569;
        }
        .j2dum-table tr:last-child td {
            border-bottom: none;
        }
        .j2dum-table tr:hover td {
            background-color: #f1f5f9;
        }

        .j2dum-matrix-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 15px;
        }
        .j2dum-matrix-card {
            background: #ffffff;
            border: 1px solid var(--j2dum-border);
            border-radius: 10px;
            padding: 16px;
            border-left: 4px solid var(--j2dum-accent);
        }
        .j2dum-matrix-card h4 {
            color: var(--j2dum-primary);
            font-size: 1.05rem;
            margin: 0 0 6px;
            font-weight: 700;
        }
        .j2dum-matrix-card p {
            color: #64748b;
            font-size: 0.9rem;
            margin: 0;
            line-height: 1.5;
        }

        .j2dum-process-step {
            display: flex;
            gap: 20px;
            margin-bottom: 25px;
            align-items: flex-start;
        }
        .j2dum-step-num {
            background: var(--j2dum-accent);
            color: #ffffff;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 800;
            font-size: 1.2rem;
            flex-shrink: 0;
            box-shadow: 0 6px 14px rgba(180,83,9,0.3);
        }
        .j2dum-step-content {
            background: #ffffff;
            border: 1px solid var(--j2dum-border);
            border-radius: 10px;
            padding: 18px 22px;
            flex-grow: 1;
        }
        .j2dum-step-content h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--j2dum-primary);
            margin: 0 0 6px;
            font-size: 1.25rem;
        }
        .j2dum-step-content p {
            margin: 0;
            color: #475569;
            font-size: 0.95rem;
        }

        .j2dum-faq-item {
            background: #ffffff;
            border: 1px solid var(--j2dum-border);
            border-radius: 10px;
            margin-bottom: 15px;
            overflow: hidden;
        }
        .j2dum-faq-q {
            padding: 18px 22px;
            font-weight: 700;
            color: var(--j2dum-primary);
            font-size: 1.08rem;
            background: #f8fafc;
            border-bottom: 1px solid var(--j2dum-border);
        }
        .j2dum-faq-a {
            padding: 18px 22px;
            color: #475569;
            line-height: 1.7;
            font-size: 0.96rem;
        }

        .j2dum-cta-banner {
            background: linear-gradient(135deg, var(--j2dum-dark) 0%, var(--j2dum-primary) 100%);
            color: #ffffff;
            padding: 55px 25px;
            border-radius: 16px;
            text-align: center;
            margin: 50px auto 30px;
            max-width: 1050px;
        }
        .j2dum-cta-banner h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 12px;
        }
        .j2dum-cta-banner p {
            font-size: 1.1rem;
            color: #cbd5e1;
            max-width: 700px;
            margin: 0 auto 25px;
        }

        .j2dum-cluster-links {
            background: #f1f5f9;
            padding: 30px;
            border-radius: 12px;
            margin-top: 40px;
        }
        .j2dum-cluster-links h3 {
            font-family: 'Outfit', sans-serif;
            color: var(--j2dum-primary);
            font-size: 1.25rem;
            margin-bottom: 15px;
            font-weight: 700;
        }
        .j2dum-tag-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }
        .j2dum-tag-link {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 7px 15px;
            border-radius: 20px;
            font-size: 0.88rem;
            color: #334155;
            text-decoration: none;
            transition: all 0.2s ease;
        }
        .j2dum-tag-link:hover {
            background: var(--j2dum-primary);
            color: #ffffff;
            border-color: var(--j2dum-primary);
        }
    </style>

    <!-- Schema 1: MovingCompany Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Jamtara to Dumka",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "telephone": "+918409531615",
        "url": "<?php echo $canonical_url; ?>",
        "priceRange": "₹4,500 - ₹28,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Station Road, Near Court Compound",
            "addressLocality": "Jamtara",
            "addressRegion": "Jharkhand",
            "postalCode": "815351",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.9628,
            "longitude": 86.8016
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "07:00",
            "closes": "21:30"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://www.instagram.com/shreeashirwadpackers"
        ]
    }
    </script>

    <!-- Schema 2: Service Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Inter-District Relocation & Packers and Movers",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Jamtara"
            },
            {
                "@type": "City",
                "name": "Dumka"
            }
        ],
        "description": "Professional inter-district relocation services from Jamtara to Dumka covering 65 km via SH-17 across Palojori and Jama. Same-day 1.5 to 2 hour delivery, 5-layer protective packing, weatherproof container trucks, Santhal Pargana commissionerate & SKMU transfer claim billing, and comprehensive transit insurance."
    }
    </script>

    <!-- Schema 3: BreadcrumbList Schema -->
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
                "name": "Packers and Movers in Jamtara",
                "item": "https://www.shreeashirwadpackers.com/packers-and-movers-in-jamtara"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Jamtara to Dumka",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
    }
    </script>

    <!-- Schema 4: FAQPage Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "How long does household shifting take from Jamtara to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance between Jamtara and Dumka is approximately 60 to 68 km via State Highway 17 passing Palojori and Jama. Driving transit takes roughly 1.5 to 2.0 hours. We offer guaranteed same-day door-to-door relocation: morning packing and loading in Jamtara with complete delivery, room placement, and setup in Dumka by afternoon."
                }
            },
            {
                "@type": "Question",
                "name": "What are the shifting charges from Jamtara to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Standard tariffs depend on household size and inventory: 1 BHK apartment shifting costs ₹6,500 to ₹10,500; 2 BHK household moving ranges from ₹9,500 to ₹15,500; 3 BHK flat/bungalow relocation costs ₹14,000 to ₹21,500; two-wheeler bike transport costs ₹1,500 to ₹2,500; and dedicated enclosed car transport ranges from ₹4,500 to ₹7,000."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claim-ready bills for Santhal Pargana Commissionerate and SKMU transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. Shree Ashirwad Packers and Movers issues 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized inventory packing lists, and insurance certificates accepted by the Divisional Commissionerate, DIG office, Sido Kanhu Murmu University (SKMU), state departments, and nationalized banks."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect household furniture from road dust and vibrations?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy a specialized 5-layer defensive shield comprising anti-scratch polyethylene film, heavy-gauge air bubble wrap, rigid L-shaped corrugated edge protectors, 7-ply heavy-duty cartons, and weatherproof cross-tension stretch wrap. Goods are transported in locked, weatherproof closed container trucks equipped with interior ratchet lashing straps."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport personal cars and motorcycles from Jamtara to Dumka?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We offer specialized enclosed hydraulic car carrier trailers and custom two-wheeler parceling with wheel chocks, bubble padding around mirrors and fuel tanks, digital condition inspection reports, and transit insurance with delivery within 12 to 24 hours."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Jamtara and Dumka do you cover?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In Jamtara, we pick up across Jamtara town, Station Road, Mihijam, Karmatar, Court Compound, Dumka Road, Sarath Road, Nala More, Kundahit, and Vidyasagar Pally. In Dumka, we deliver to Dudhani, Tinbazar, Rasikpur, Gilanpara, Bandarjori, Kathikund, SP College Road, Dumka Court Compound, Shivpahar, and Airport Road."
                }
            }
        ]
    }
    </script>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<main class="j2dum-wrapper">
    <!-- Hero Section -->
    <section class="j2dum-hero">
        <div class="j2dum-hero-content">
            <span class="j2dum-badge">&#128666; Santhal Pargana Divisional Corridor Specialist</span>
            <h1>Jamtara to Dumka <span>Packers and Movers</span></h1>
            <p>Guaranteed same-day 1.5-2 hour express household relocation from Jamtara &amp; Mihijam to Dumka. 5-layer packaging armor, closed weatherproof container trucks, and 100% compliant GST reimbursement bills for Santhal Pargana Commissionerate, SKMU, and banking transfers.</p>

            <div class="j2dum-hero-stats">
                <div class="j2dum-stat-card">
                    <strong>65 KM</strong>
                    <span>Direct SH-17 Corridor</span>
                </div>
                <div class="j2dum-stat-card">
                    <strong>1.5 - 2 HRS</strong>
                    <span>Same-Day Transit Time</span>
                </div>
                <div class="j2dum-stat-card">
                    <strong>5 LAYERS</strong>
                    <span>Protective Packaging Armor</span>
                </div>
                <div class="j2dum-stat-card">
                    <strong>100% GST</strong>
                    <span>Commissionerate Claim Bills</span>
                </div>
            </div>

            <div class="j2dum-btn-group">
                <a href="tel:8409531615" class="j2dum-btn-phone">&#128222; Call 084095 31615</a>
                <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20free%20quote%20for%20Jamtara%20to%20Dumka%20shifting." target="_blank" class="j2dum-btn-whatsapp">&#128172; WhatsApp Instant Quote</a>
            </div>
        </div>
    </section>

    <!-- Section 1: Route Overview & Highway Engineering -->
    <section class="j2dum-section">
        <div class="j2dum-grid-2">
            <div>
                <span class="j2dum-badge" style="background:#eff6ff; color:#152e4d; border-color:#cbd5e1;">Express Administrative Corridor</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--j2dum-primary); font-size:2.2rem; margin:15px 0;">Safe Jamtara to Dumka Relocation via SH-17</h2>
                <p>Relocating from Jamtara to Dumka establishes a vital transport link between southern Santhal Pargana and the sub-capital and administrative divisional headquarters of Dumka. Spanning roughly 60 to 68 km along State Highway 17 (SH-17), the route progresses northeastward through Palojori and Jama, connecting directly to Dumka’s institutional administrative zones, judiciary complexes, and educational quarters.</p>
                <p>At Shree Ashirwad Packers and Movers, our regional relocation crew operates dedicated closed container trucks engineered to deliver smooth, safe transit across this direct highway artery. Driving transit requires approximately 1.5 to 2.0 hours. We implement strict cargo balancing and high-tensile ratchet tie-down protocols inside our closed container vehicles to ensure that heavy furniture, LED displays, fragile crystal, and kitchen appliances remain firmly in place without highway vibration shock.</p>
                <p>Whether you are a government official relocating to the Santhal Pargana Divisional Commissionerate, a university professor joining Sido Kanhu Murmu University (SKMU), an administrative judicial officer, a police official transferring to DIG headquarters, or a family settling in Dudhani or Rasikpur, our dedicated same-day service eliminates moving stress with dependable timing and white-glove handling.</p>
            </div>
            <div class="j2dum-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Sealed container transport truck for Jamtara to Dumka household shifting" loading="lazy">
                <div class="j2dum-img-caption">Dedicated all-weather sealed container trucks operating daily on the Jamtara-Dumka highway route</div>
            </div>
        </div>
    </section>

    <!-- Section 2: Why Choose Shree Ashirwad Packers -->
    <section class="j2dum-section" style="background: var(--j2dum-gray-bg);">
        <div class="j2dum-section-header">
            <h2>Why Government Officers &amp; Families Choose Our Service</h2>
            <p>Engineered logistics, trained permanent crews, and customer-first service make us the premier mover in Santhal Pargana.</p>
        </div>

        <div class="j2dum-grid-3">
            <div class="j2dum-card">
                <h3>&#128666; Sealed Weatherproof Containers</h3>
                <p>Our fleet features dedicated closed-body container trucks that seal out rain, road dust, and highway humidity. Your goods remain fully protected and dry regardless of weather variations between Jamtara and Dumka.</p>
            </div>
            <div class="j2dum-card">
                <h3>&#128104;&#8205;&#128295; Trained In-House Packaging Crew</h3>
                <p>We never outsource your precious possessions to casual daily laborers. Our full-time packing specialists possess technical training in dismantling modular furniture, packing delicate bone china, and handling bulky double-door refrigerators.</p>
            </div>
            <div class="j2dum-card">
                <h3>&#128205; GPS Real-Time Consignment Tracking</h3>
                <p>Every long-distance container vehicle is equipped with live GPS tracking systems. You receive real-time location updates from Jamtara departure right up to your doorstep in Dumka.</p>
            </div>
            <div class="j2dum-card">
                <h3>&#128196; 100% Tax-Compliant GST Bills</h3>
                <p>We provide authentic GST tax invoices, IBA-approved consignment notes (bilty), transit insurance policies, and itemized inventory lists for effortless employer reimbursement across commissionerate, SKMU, PSUs, and banks.</p>
            </div>
            <div class="j2dum-card">
                <h3>&#128737;&#65039; Comprehensive All-Risk Insurance</h3>
                <p>Enjoy total peace of mind with our optional comprehensive transit insurance policies underwritten by leading national insurance corporations, protecting your assets against fire, road accidents, or unforeseen contingencies.</p>
            </div>
            <div class="j2dum-card">
                <h3>&#9989; Zero Hidden Fees Guarantee</h3>
                <p>Our written quotations clearly itemize packaging materials, labor, highway toll fees, diesel surcharges, and destination handling. The price quoted before your move is the exact amount you pay upon delivery.</p>
            </div>
        </div>
    </section>

    <!-- Section 3: 5-Layer Defensive Packaging Standards -->
    <section class="j2dum-section">
        <div class="j2dum-grid-2">
            <div class="j2dum-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="5-layer protective packing for furniture and electronics before Jamtara to Dumka transit" loading="lazy">
                <div class="j2dum-img-caption">Multi-layer protective bubble wrap, corrugated sheets, and foam edge guards for furniture and fragile items</div>
            </div>
            <div>
                <span class="j2dum-badge" style="background:#fef3c7; color:#b45309; border-color:#fde68a;">Superior Damage Protection</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--j2dum-primary); font-size:2.2rem; margin:15px 0;">Our Specialized 5-Layer Packaging Armor</h2>
                <p>Even across a 65 km highway journey, inter-district state roads, speed humps, and gradient changes create micro-vibrations that can damage unprotected items. Shree Ashirwad Packers and Movers implements a battle-tested 5-layer packaging standard that guarantees zero abrasion, zero denting, and zero breakage.</p>
                <ul style="padding-left: 20px; line-height: 1.8; color: #475569;">
                    <li><strong>Layer 1 - Scratch-Proof Poly Film:</strong> Direct protective cling wrap applied to wooden wardrobes, polished dining tables, and painted metallic surfaces prevents rub-marks and surface friction.</li>
                    <li><strong>Layer 2 - Multi-Cell Air Bubble Cushioning:</strong> High-density bubble wrap absorbs shock waves and cushions LED televisions, microwave ovens, crystal tableware, and decorative chandeliers.</li>
                    <li><strong>Layer 3 - Dense Corrugated Edge Protectors:</strong> Rigid heavy-duty corner guards protect vulnerable tabletop edges, cabinet corners, and picture frames from impact pressures.</li>
                    <li><strong>Layer 4 - 7-Ply Heavy Duty Outer Cartons:</strong> Heavy-duty virgin kraft paper corrugated boxes packed with dish-pack dividers hold crockeries, books, kitchenware, and fine decorative ornaments.</li>
                    <li><strong>Layer 5 - Weatherproof Cross-Tension Stretch Wrap:</strong> High-tensile moisture-proof stretch wrap seals all cartons and furniture bundles tightly, creating an impervious barrier against dust, moisture, and road humidity.</li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Section 4: Transparent Tariff & Cost Estimates -->
    <section class="j2dum-section" style="background: var(--j2dum-gray-bg);">
        <div class="j2dum-section-header">
            <h2>Jamtara to Dumka Relocation Rate Matrix</h2>
            <p>Clear, competitive, and honest pricing estimates tailored for apartments, individual houses, and automotive transport.</p>
        </div>

        <div class="j2dum-table-wrapper">
            <table class="j2dum-table">
                <thead>
                    <tr>
                        <th>Consignment / Household Configuration</th>
                        <th>Recommended Vehicle Type</th>
                        <th>Packing Material Grade</th>
                        <th>Estimated Highway Transit</th>
                        <th>Standard Price Bracket</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment Shifting</strong></td>
                        <td>14-ft Closed Container</td>
                        <td>Standard 3-Layer Defensive</td>
                        <td>1.5 - 2 Hours (Same Day)</td>
                        <td><strong style="color:var(--j2dum-accent);">₹6,500 - ₹10,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Complete Home Relocation</strong></td>
                        <td>17-ft Closed Container</td>
                        <td>Premium 5-Layer Armor</td>
                        <td>1.5 - 2 Hours (Same Day)</td>
                        <td><strong style="color:var(--j2dum-accent);">₹9,500 - ₹15,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Spacious Residence / Villa</strong></td>
                        <td>19-ft to 22-ft Container</td>
                        <td>Executive Heavy-Duty Armor</td>
                        <td>Same-Day Delivery</td>
                        <td><strong style="color:var(--j2dum-accent);">₹14,000 - ₹21,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Bungalow Move</strong></td>
                        <td>24-ft Multi-Axle Container</td>
                        <td>Custom Crating &amp; 5-Layer</td>
                        <td>Same-Day Delivery</td>
                        <td><strong style="color:var(--j2dum-accent);">₹19,000 - ₹28,000</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler Bike / Scooter</strong></td>
                        <td>Shared Enclosed Carrier</td>
                        <td>Bubble Wrap &amp; Wooden Crate</td>
                        <td>12 - 24 Hours</td>
                        <td><strong style="color:var(--j2dum-accent);">₹1,500 - ₹2,500</strong></td>
                    </tr>
                    <tr>
                        <td><strong>Four-Wheeler Car Carrier</strong></td>
                        <td>Hydraulic Closed Car Carrier</td>
                        <td>Wheel-Chocks &amp; Safety Covers</td>
                        <td>12 - 24 Hours</td>
                        <td><strong style="color:var(--j2dum-accent);">₹4,500 - ₹7,000</strong></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="text-align: center; margin-top: 15px; font-size: 0.9rem; color: #64748b;">* Tariffs are indicative and vary based on exact consignment volume, packing material grade, floor elevations, elevator access, and optional comprehensive transit insurance (3% of declared asset value).</p>
    </section>

    <!-- Section 5: Vehicle Transport & Automotive Logistics -->
    <section class="j2dum-section">
        <div class="j2dum-grid-2">
            <div>
                <span class="j2dum-badge" style="background:#ecfdf5; color:#047857; border-color:#a7f3d0;">Automotive Transport Specialists</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--j2dum-primary); font-size:2.2rem; margin:15px 0;">Safe Car Carrier &amp; Bike Parcel Services from Jamtara</h2>
                <p>Driving your personal car or motorcycle across state highway traffic exposes your vehicle to road hazard wear, high fuel expenses, and driver exhaustion. Shree Ashirwad Packers and Movers delivers professional automotive transport solutions ensuring your car or bike arrives in Dumka in pristine showroom condition.</p>
                <ul style="padding-left: 20px; line-height: 1.8; color: #475569;">
                    <li><strong>Pre-Dispatch Condition Audit:</strong> Complete digital photography and mechanical inspection documenting existing odometer readings, body panels, and fuel levels prior to loading in Jamtara.</li>
                    <li><strong>Enclosed Hydraulic Carriers:</strong> Vehicles are loaded onto specialized car carriers utilizing gradual-angle hydraulic ramps to safeguard low-clearance bumpers and delicate side skirts.</li>
                    <li><strong>Suspension-Safe Wheel Chocks:</strong> Sturdy industrial wheel chocks and over-the-wheel heavy-duty polyester straps secure your automobile without putting unnecessary stress on suspension struts.</li>
                    <li><strong>Dedicated Two-Wheeler Armor:</strong> Handlebars, rearview mirrors, fuel tanks, and body fairings receive double-bubble cushioning and corrugated shields with battery disconnection for fire safety.</li>
                </ul>
            </div>
            <div class="j2dum-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Enclosed car transport carrier for Jamtara to Dumka vehicle relocation" loading="lazy">
                <div class="j2dum-img-caption">Hydraulic enclosed car carrier securing vehicles for safe transit between Jamtara and Dumka</div>
            </div>
        </div>
    </section>

    <!-- Section 6: Step-by-Step Relocation Process -->
    <section class="j2dum-section" style="background: var(--j2dum-gray-bg);">
        <div class="j2dum-section-header">
            <h2>Our 5-Stage Systematic Relocation Workflow</h2>
            <p>From the initial pre-move assessment in Jamtara to setting up your living room in Dumka, our end-to-end relocation process ensures complete peace of mind.</p>
        </div>

        <div style="max-width: 850px; margin: 0 auto;">
            <div class="j2dum-process-step">
                <div class="j2dum-step-num">1</div>
                <div class="j2dum-step-content">
                    <h3>Free Pre-Move Survey &amp; Transparent Quote</h3>
                    <p>Our relocation supervisor conducts an in-person physical survey or virtual video assessment across your Jamtara residence to compute goods volume, parking clearance, fragile packing requirements, and provide a binding written estimate.</p>
                </div>
            </div>
            <div class="j2dum-process-step">
                <div class="j2dum-step-num">2</div>
                <div class="j2dum-step-content">
                    <h3>Defensive 5-Layer Packing at Your Residence</h3>
                    <p>On shifting day, our experienced crew arrives punctually with virgin materials, disassembles double beds, dining tables, and wardrobes, bubble-wraps glassware and electronics, and systematically labels every carton by room.</p>
                </div>
            </div>
            <div class="j2dum-process-step">
                <div class="j2dum-step-num">3</div>
                <div class="j2dum-step-content">
                    <h3>Container Loading &amp; Security Sealing</h3>
                    <p>Goods are stacked using weight-balanced principles inside our closed container trucks, anchored with heavy-duty ratchet tie-downs, and locked with a unique tamper-evident numbered bolt seal in your presence.</p>
                </div>
            </div>
            <div class="j2dum-process-step">
                <div class="j2dum-step-num">4</div>
                <div class="j2dum-step-content">
                    <h3>Swift 65 km Highway Transit</h3>
                    <p>Our experienced commercial drivers navigate the 65 km highway corridor via SH-17 passing Palojori and Jama smoothly, bypassing city congestions to reach your Dumka address within 1.5 to 2.0 hours.</p>
                </div>
            </div>
            <div class="j2dum-process-step">
                <div class="j2dum-step-num">5</div>
                <div class="j2dum-step-content">
                    <h3>Unloading, Room Placement &amp; Furniture Setup</h3>
                    <p>At your Dumka residence in Dudhani, Rasikpur, Tinbazar, or Bandarjori, the crew breaks the security seal, carefully carries all items inside, reassembles furniture, positions heavy appliances, and collects packing debris.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 7: Unpacking & Destination Services -->
    <section class="j2dum-section">
        <div class="j2dum-grid-2">
            <div class="j2dum-feature-img">
                <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Unpacking and furniture room setup service in Dumka residence" loading="lazy">
                <div class="j2dum-img-caption">Dedicated room setup, furniture reassembly, and debris removal in Dumka residences</div>
            </div>
            <div>
                <span class="j2dum-badge" style="background:#ede9fe; color:#6d28d9; border-color:#ddd6fe;">Turnkey Destination Assistance</span>
                <h2 style="font-family:'Outfit',sans-serif; color:var(--j2dum-primary); font-size:2.2rem; margin:15px 0;">Complete Unpacking &amp; Room Setup in Dumka</h2>
                <p>Moving is not complete until your new house feels like home. Unlike transport brokers who merely dump carton boxes in the living room and leave, Shree Ashirwad Packers and Movers provides comprehensive destination services across all Dumka sectors.</p>
                <p>Our crew unpacks cartons, places kitchen utensils in overhead cabinets, installs study desks, reattaches bed frames, and positions heavy refrigerators and washing machines in their allocated spots. We ensure you can sleep comfortably on your freshly set-up bed on the very first night of your relocation.</p>
                <p>Finally, our team cleans up and carries away all used cardboard boxes, bubble wrap scraps, and plastic film, leaving your new residence tidy and ready for comfortable living.</p>
            </div>
        </div>
    </section>

    <!-- Section 8: Dual-City Locality Coverage Matrix -->
    <section class="j2dum-section" style="background: var(--j2dum-gray-bg);">
        <div class="j2dum-section-header">
            <h2>Jamtara &amp; Dumka Complete Locality Network</h2>
            <p>Direct doorstep pickup across every neighborhood of Jamtara &amp; Mihijam with guaranteed doorstep delivery throughout Dumka urban and administrative zones.</p>
        </div>

        <div class="j2dum-grid-2">
            <div class="j2dum-matrix-card">
                <h4>&#128205; Jamtara Pickup Sectors</h4>
                <p style="margin-bottom: 12px;">Full door-to-door packing coverage across Jamtara commercial and residential perimeters:</p>
                <div style="display:flex; flex-wrap:wrap; gap:6px;">
                    <span class="j2dum-tag-link">Jamtara Town</span>
                    <span class="j2dum-tag-link">Station Road Colony</span>
                    <span class="j2dum-tag-link">Mihijam Market &amp; Border</span>
                    <span class="j2dum-tag-link">Karmatar (Vidyasagar Pally)</span>
                    <span class="j2dum-tag-link">Court Compound Area</span>
                    <span class="j2dum-tag-link">Dumka Road Residential Belt</span>
                    <span class="j2dum-tag-link">Sarath Road Corridor</span>
                    <span class="j2dum-tag-link">Nala More &amp; Block</span>
                    <span class="j2dum-tag-link">Kundahit Sector</span>
                    <span class="j2dum-tag-link">Indira Nagar Colony</span>
                </div>
            </div>

            <div class="j2dum-matrix-card">
                <h4>&#128205; Dumka Delivery Destinations</h4>
                <p style="margin-bottom: 12px;">Complete unloading, room placement, and unpacking across Dumka residential sectors:</p>
                <div style="display:flex; flex-wrap:wrap; gap:6px;">
                    <span class="j2dum-tag-link">Dudhani Residential Colony</span>
                    <span class="j2dum-tag-link">Tinbazar Commercial Area</span>
                    <span class="j2dum-tag-link">Rasikpur Enclave</span>
                    <span class="j2dum-tag-link">Gilanpara</span>
                    <span class="j2dum-tag-link">Bandarjori</span>
                    <span class="j2dum-tag-link">Kathikund Sector</span>
                    <span class="j2dum-tag-link">SP College Road</span>
                    <span class="j2dum-tag-link">Dumka Court Compound</span>
                    <span class="j2dum-tag-link">Shivpahar Residential Zone</span>
                    <span class="j2dum-tag-link">Airport Road Enclave</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 9: Institutional Reimbursement Documentation -->
    <section class="j2dum-section">
        <div class="j2dum-section-header">
            <h2>100% Compliant Bills for Government, SKMU &amp; Bank Transfers</h2>
            <p>Hassle-free relocation allowance claims with verified GST invoices and official documentation.</p>
        </div>

        <div class="j2dum-grid-3">
            <div class="j2dum-card">
                <h3>&#128196; Computerized GST Tax Invoices</h3>
                <p>Official tax invoices bearing our verified GSTIN and proper SAC service accounting codes (SAC 9965 / 9967) for freight and cargo handling services, matching the exact format required by public sector auditors.</p>
            </div>
            <div class="j2dum-card">
                <h3>&#128221; Consignment Bilty &amp; Packing Lists</h3>
                <p>Standard IBA-pattern consignment notes (bilty) detailing vehicle number, driver credentials, pickup/delivery addresses, and an itemized serial-numbered inventory packing list.</p>
            </div>
            <div class="j2dum-card">
                <h3>&#128176; Money Receipts &amp; Transit Policies</h3>
                <p>Formal stamped advance and final payment money receipts accompanied by the official transit insurance certificate copy to ensure fast, seamless reimbursement from your accounts department.</p>
            </div>
        </div>
    </section>

    <!-- Section 10: Verified Customer Testimonials -->
    <section class="j2dum-section" style="background: var(--j2dum-gray-bg);">
        <div class="j2dum-section-header">
            <h2>Verified Client Experiences on the Jamtara-Dumka Route</h2>
            <p>Discover how government officers, university professors, and relocated families rate our relocation service.</p>
        </div>

        <div class="j2dum-grid-3">
            <div class="j2dum-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Transferred from Jamtara District Collectorate to the Santhal Pargana Divisional Commissioner's Office in Dumka. Shree Ashirwad Packers arrived at 7:30 AM at our Court Road quarter. Our 3 BHK flat was packed seamlessly and delivered into our Dudhani government quarters by 1 PM. Their GST bills were approved by treasury accounts without any objection!"</p>
                <p style="font-weight: 700; color: var(--j2dum-primary); margin: 0;">&ndash; Alok Ranjan Soren, Administrative Officer (Dudhani Dumka)</p>
            </div>

            <div class="j2dum-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Relocated upon taking up a professorship at Sido Kanhu Murmu University (SKMU) Dumka. Their crew in Jamtara handled my extensive academic library and glass showcase with great care. Everything was delivered and unpacked in SP College Road within 3 hours. Highly recommended!"</p>
                <p style="font-weight: 700; color: var(--j2dum-primary); margin: 0;">&ndash; Prof. B. K. Jha, Faculty Member (SP College Road Dumka)</p>
            </div>

            <div class="j2dum-card">
                <div style="color: #f59e0b; margin-bottom: 8px;">&#9733;&#9733;&#9733;&#9733;&#9733; (5/5)</div>
                <p style="font-style: italic; margin-bottom: 15px;">"Moved my 2 BHK household and Honda Activa scooter from Mihijam to Rasikpur Dumka upon my bank transfer. Very smooth transit, courteous staff, and no hidden charges. Everything arrived in pristine condition."</p>
                <p style="font-weight: 700; color: var(--j2dum-primary); margin: 0;">&ndash; Rashmi Kumari, Bank Officer (Rasikpur Dumka)</p>
            </div>
        </div>
    </section>

    <!-- Section 11: Frequently Asked Questions (FAQ) -->
    <section class="j2dum-section">
        <div class="j2dum-section-header">
            <h2>Frequently Asked Questions</h2>
            <p>Clear, practical answers about scheduling, transit durations, vehicle transport, and institutional claims.</p>
        </div>
        <div style="max-width: 900px; margin: 0 auto;">
            <div class="j2dum-faq-item">
                <div class="j2dum-faq-q">How long does household shifting take from Jamtara to Dumka?</div>
                <div class="j2dum-faq-a">The highway distance between Jamtara and Dumka is approximately 60 to 68 km via State Highway 17 passing Palojori and Jama. Driving transit takes roughly 1.5 to 2.0 hours. We offer guaranteed same-day door-to-door relocation: morning packing and loading in Jamtara with complete delivery, room placement, and setup in Dumka by afternoon.</div>
            </div>
            <div class="j2dum-faq-item">
                <div class="j2dum-faq-q">What are the shifting charges from Jamtara to Dumka?</div>
                <div class="j2dum-faq-a">Standard tariffs depend on household size and inventory: 1 BHK apartment shifting costs ₹6,500 to ₹10,500; 2 BHK household moving ranges from ₹9,500 to ₹15,500; 3 BHK flat/bungalow relocation costs ₹14,000 to ₹21,500; two-wheeler bike transport costs ₹1,500 to ₹2,500; and dedicated enclosed car transport ranges from ₹4,500 to ₹7,000.</div>
            </div>
            <div class="j2dum-faq-item">
                <div class="j2dum-faq-q">Do you provide claim-ready bills for Santhal Pargana Commissionerate and SKMU transfers?</div>
                <div class="j2dum-faq-a">Yes. Shree Ashirwad Packers and Movers issues 100% compliant computer-generated GST tax invoices (SAC 9965/9967), consignment bilty notes, itemized inventory packing lists, and insurance certificates accepted by the Divisional Commissionerate, DIG office, Sido Kanhu Murmu University (SKMU), state departments, and nationalized banks.</div>
            </div>
            <div class="j2dum-faq-item">
                <div class="j2dum-faq-q">How do you protect household furniture from road dust and vibrations?</div>
                <div class="j2dum-faq-a">We deploy a specialized 5-layer defensive shield comprising anti-scratch polyethylene film, heavy-gauge air bubble wrap, rigid L-shaped corrugated edge protectors, 7-ply heavy-duty cartons, and weatherproof cross-tension stretch wrap. Goods are transported in locked, weatherproof closed container trucks equipped with interior ratchet lashing straps.</div>
            </div>
            <div class="j2dum-faq-item">
                <div class="j2dum-faq-q">Can you transport personal cars and motorcycles from Jamtara to Dumka?</div>
                <div class="j2dum-faq-a">Yes. We offer specialized enclosed hydraulic car carrier trailers and custom two-wheeler parceling with wheel chocks, bubble padding around mirrors and fuel tanks, digital condition inspection reports, and transit insurance with delivery within 12 to 24 hours.</div>
            </div>
            <div class="j2dum-faq-item">
                <div class="j2dum-faq-q">Which areas in Jamtara and Dumka do you cover?</div>
                <div class="j2dum-faq-a">In Jamtara, we pick up across Jamtara town, Station Road, Mihijam, Karmatar, Court Compound, Dumka Road, Sarath Road, Nala More, Kundahit, and Vidyasagar Pally. In Dumka, we deliver to Dudhani, Tinbazar, Rasikpur, Gilanpara, Bandarjori, Kathikund, SP College Road, Dumka Court Compound, Shivpahar, and Airport Road.</div>
            </div>
        </div>
    </section>

    <!-- CTA Banner -->
    <div class="j2dum-cta-banner">
        <h2>Book Your Jamtara to Dumka Move Today</h2>
        <p>Experience seamless, same-day relocation across the Santhal Pargana divisional highway corridor. Free home survey, binding transparent quotes, and full transit insurance coverage.</p>
        <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
            <a href="tel:8409531615" class="j2dum-btn-phone" style="font-size: 1.1rem; padding: 14px 30px;">&#128222; Call 084095 31615</a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%20Shree%20Ashirwad%20Packers,%20please%20send%20a%20quote%20for%20Jamtara%20to%20Dumka%20shifting." target="_blank" class="j2dum-btn-whatsapp" style="font-size: 1.1rem; padding: 14px 30px;">&#128172; WhatsApp Inquiry</a>
        </div>
    </div>

    <!-- Section 12: Cluster Navigation Links -->
    <section class="j2dum-section" style="padding-top: 10px;">
        <div class="j2dum-cluster-links">
            <h3>Explore Connected Jamtara &amp; Regional Relocation Routes</h3>
            <div class="j2dum-tag-cloud">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jamtara" class="j2dum-tag-link">Jamtara Hub Overview</a>
                <a href="<?php echo SITE_BASE_URL; ?>/jamtara-to-ranchi-packers-and-movers" class="j2dum-tag-link">Jamtara to Ranchi Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/jamtara-to-dhanbad-packers-and-movers" class="j2dum-tag-link">Jamtara to Dhanbad Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/jamtara-to-deoghar-packers-and-movers" class="j2dum-tag-link">Jamtara to Deoghar Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/deoghar-to-dumka-packers-and-movers" class="j2dum-tag-link">Deoghar to Dumka Packers</a>
                <a href="<?php echo SITE_BASE_URL; ?>/pricing" class="j2dum-tag-link">Cost Calculator &amp; Rates</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
