<?php
/**
 * Page Name: Jamshedpur to Pune Packers and Movers
 * Route Slug: jamshedpur-to-pune-packers-and-movers
 * Description: Specialized Tata Motors plant-to-plant employee transfers, automotive engineering relocation, IT household moving, bike parcel, and car carrier services from Jamshedpur to Pune via NH-53.
 * Focus Keywords: jamshedpur to pune packers and movers, packers and movers jamshedpur to pune, house shifting jamshedpur to pune, car transport jamshedpur to pune, bike parcel jamshedpur to pune, tata motors relocation jamshedpur pune
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Jamshedpur to Pune Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Jamshedpur to Pune packers and movers. Safe 1600 km transit via NH-53, 5-layer packing, Tata Motors plant transfer GST bills, car carrier & bike parcel. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/jamshedpur-to-pune-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="jamshedpur to pune packers and movers, packers and movers jamshedpur to pune, house shifting jamshedpur to pune, car transport jamshedpur to pune, bike parcel jamshedpur to pune, tata motors relocation jamshedpur pune">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Jamshedpur">

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

    <!-- Scoped CSS for Route 14 (Jamshedpur to Pune) -->
    <style>
        :root {
            --jsr2pun-primary: #1e293b;
            --jsr2pun-secondary: #0284c7;
            --jsr2pun-accent: #f59e0b;
            --jsr2pun-accent-light: #fef3c7;
            --jsr2pun-dark: #0f172a;
            --jsr2pun-gray-bg: #f8fafc;
            --jsr2pun-card-border: #e2e8f0;
            --jsr2pun-text: #334155;
            --jsr2pun-text-dark: #0f172a;
        }

        .jsr2pun-hero {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.95), rgba(2, 132, 199, 0.88)), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 0 50px;
            position: relative;
        }

        .jsr2pun-hero-grid {
            display: grid;
            grid-template-columns: 1.25fr 0.95fr;
            gap: 36px;
            align-items: center;
        }

        .jsr2pun-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(245, 158, 11, 0.2);
            border: 1px solid rgba(245, 158, 11, 0.5);
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 0.85rem;
            font-weight: 700;
            color: #fbbf24;
            margin-bottom: 18px;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }

        .jsr2pun-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.6rem;
            line-height: 1.2;
            font-weight: 800;
            margin-bottom: 16px;
            color: #ffffff;
        }

        .jsr2pun-hero p {
            font-size: 1.05rem;
            line-height: 1.6;
            color: #e2e8f0;
            margin-bottom: 24px;
        }

        .jsr2pun-highlights {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-bottom: 26px;
        }

        .jsr2pun-hl-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.92rem;
            color: #f1f5f9;
        }

        .jsr2pun-hl-item svg {
            width: 18px;
            height: 18px;
            color: #f59e0b;
            flex-shrink: 0;
        }

        .jsr2pun-quick-contact {
            background: #ffffff;
            border-radius: 14px;
            padding: 26px;
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.25);
            color: var(--jsr2pun-text-dark);
        }

        .jsr2pun-quick-contact h3 {
            font-size: 1.35rem;
            font-weight: 800;
            margin-bottom: 8px;
            color: var(--jsr2pun-primary);
        }

        .jsr2pun-quick-contact p {
            font-size: 0.88rem;
            color: #64748b;
            margin-bottom: 16px;
        }

        .jsr2pun-route-meta {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 12px 14px;
            margin-bottom: 18px;
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 8px;
            text-align: center;
        }

        .jsr2pun-route-meta div span {
            display: block;
            font-size: 0.72rem;
            text-transform: uppercase;
            color: #64748b;
            font-weight: 600;
        }

        .jsr2pun-route-meta div strong {
            font-size: 1.05rem;
            color: var(--jsr2pun-primary);
            font-weight: 800;
        }

        .jsr2pun-btn-call {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            background: linear-gradient(135deg, #f59e0b, #d97706);
            color: #ffffff;
            font-weight: 800;
            padding: 13px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-size: 1.05rem;
            transition: all 0.25s ease;
            box-shadow: 0 6px 16px rgba(245, 158, 11, 0.35);
        }

        .jsr2pun-btn-call:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(245, 158, 11, 0.45);
            color: #ffffff;
        }

        .jsr2pun-section {
            padding: 60px 0;
        }

        .jsr2pun-section-alt {
            background-color: var(--jsr2pun-gray-bg);
        }

        .jsr2pun-sec-title {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 40px;
        }

        .jsr2pun-sec-title h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            color: var(--jsr2pun-primary);
            margin-bottom: 12px;
        }

        .jsr2pun-sec-title p {
            font-size: 1rem;
            color: #64748b;
            line-height: 1.6;
        }

        .jsr2pun-route-details {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
            margin-bottom: 30px;
        }

        .jsr2pun-route-details h3 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--jsr2pun-primary);
            margin-bottom: 14px;
        }

        .jsr2pun-route-details p {
            font-size: 0.98rem;
            line-height: 1.7;
            color: var(--jsr2pun-text);
            margin-bottom: 14px;
        }

        .jsr2pun-cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .jsr2pun-card {
            background: #ffffff;
            border: 1px solid var(--jsr2pun-card-border);
            border-radius: 12px;
            padding: 24px;
            transition: all 0.25s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        }

        .jsr2pun-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(30, 41, 59, 0.08);
            border-color: var(--jsr2pun-secondary);
        }

        .jsr2pun-card-icon {
            width: 48px;
            height: 48px;
            background: var(--jsr2pun-accent-light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            color: #d97706;
        }

        .jsr2pun-card h4 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--jsr2pun-primary);
            margin-bottom: 10px;
        }

        .jsr2pun-card p {
            font-size: 0.92rem;
            line-height: 1.6;
            color: var(--jsr2pun-text);
        }

        .jsr2pun-table-wrapper {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            overflow-x: auto;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
            margin-bottom: 30px;
        }

        .jsr2pun-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            text-align: left;
        }

        .jsr2pun-table th {
            background: var(--jsr2pun-primary);
            color: #ffffff;
            padding: 14px 18px;
            font-weight: 700;
        }

        .jsr2pun-table td {
            padding: 13px 18px;
            border-bottom: 1px solid #e2e8f0;
            color: var(--jsr2pun-text);
        }

        .jsr2pun-table tr:last-child td {
            border-bottom: none;
        }

        .jsr2pun-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }

        .jsr2pun-gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 24px;
        }

        .jsr2pun-gallery-item {
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.04);
        }

        .jsr2pun-gallery-item img {
            width: 100%;
            height: 190px;
            object-fit: cover;
            display: block;
        }

        .jsr2pun-gallery-caption {
            padding: 10px 12px;
            font-size: 0.82rem;
            color: #475569;
            font-weight: 600;
            text-align: center;
        }

        .jsr2pun-timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }

        .jsr2pun-timeline-step {
            display: flex;
            gap: 20px;
            margin-bottom: 24px;
        }

        .jsr2pun-step-number {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--jsr2pun-primary);
            color: #ffffff;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 1.1rem;
            box-shadow: 0 4px 12px rgba(30, 41, 59, 0.25);
        }

        .jsr2pun-step-content {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px 22px;
            flex-grow: 1;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
        }

        .jsr2pun-step-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--jsr2pun-primary);
            margin-bottom: 6px;
        }

        .jsr2pun-step-content p {
            font-size: 0.92rem;
            line-height: 1.6;
            color: var(--jsr2pun-text);
            margin: 0;
        }

        .jsr2pun-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 14px;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        .jsr2pun-faq-item h4 {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--jsr2pun-primary);
            margin-bottom: 8px;
        }

        .jsr2pun-faq-item p {
            font-size: 0.92rem;
            line-height: 1.65;
            color: var(--jsr2pun-text);
            margin: 0;
        }

        .jsr2pun-cta-banner {
            background: linear-gradient(135deg, var(--jsr2pun-primary), #0284c7);
            border-radius: 16px;
            padding: 40px;
            color: #ffffff;
            text-align: center;
            margin-top: 40px;
            box-shadow: 0 16px 36px rgba(30, 41, 59, 0.25);
        }

        .jsr2pun-cta-banner h3 {
            font-size: 1.85rem;
            font-weight: 800;
            margin-bottom: 12px;
            color: #ffffff;
        }

        .jsr2pun-cta-banner p {
            font-size: 1.02rem;
            max-width: 650px;
            margin: 0 auto 24px;
            color: #e2e8f0;
        }

        .jsr2pun-cta-actions {
            display: flex;
            justify-content: center;
            gap: 18px;
            flex-wrap: wrap;
        }

        .jsr2pun-cta-btn-alt {
            background: #ffffff;
            color: var(--jsr2pun-primary);
            font-weight: 800;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.25s ease;
        }

        .jsr2pun-cta-btn-alt:hover {
            background: #f1f5f9;
            transform: translateY(-2px);
        }

        @media (max-width: 991px) {
            .jsr2pun-hero-grid {
                grid-template-columns: 1fr;
            }
            .jsr2pun-cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .jsr2pun-gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .jsr2pun-cards-grid {
                grid-template-columns: 1fr;
            }
            .jsr2pun-highlights {
                grid-template-columns: 1fr;
            }
            .jsr2pun-gallery-grid {
                grid-template-columns: 1fr;
            }
            .jsr2pun-hero h1 {
                font-size: 2rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Jamshedpur to Pune Dual-Hub Division",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "email": "support@shreeashirwadpackers.com",
        "priceRange": "₹20,000 - ₹78,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Main Road, Near Voltas House, Bistupur",
            "addressLocality": "Jamshedpur",
            "addressRegion": "Jharkhand",
            "postalCode": "831001",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 22.8046,
            "longitude": 86.2029
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday","Tuesday","Wednesday","Thursday","Friday","Saturday","Sunday"],
            "opens": "06:00",
            "closes": "22:30"
        },
        "aggregateRating": {
            "@type": "AggregateRating",
            "ratingValue": "4.9",
            "reviewCount": "364"
        }
    }
    </script>

    <!-- Schema 2: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Jamshedpur to Pune Automotive Corridor Relocation and Vehicle Transport",
        "serviceType": "Interstate Relocation & Plant Transfer Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Jamshedpur"
            },
            {
                "@type": "City",
                "name": "Pune"
            }
        ],
        "description": "Safe household moving, Tata Motors plant-to-plant employee transfers, automotive engineering equipment relocation, bike courier, and car carrier transport from Jamshedpur to Pune via NH-53.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "20000",
            "availability": "https://schema.org/InStock",
            "validFrom": "2026-01-01"
        }
    }
    </script>

    <!-- Schema 3: BreadcrumbList -->
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
                "name": "Routes",
                "item": "<?php echo SITE_BASE_URL; ?>/routes"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Jamshedpur to Pune Packers and Movers",
                "item": "<?php echo $canonical_url; ?>"
            }
        ]
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
                "name": "How much does shifting cost from Jamshedpur to Pune?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Household shifting rates from Jamshedpur to Pune typically range from ₹20,000 to ₹32,000 for a 1 BHK home, ₹30,000 to ₹45,000 for a 2 BHK apartment, and ₹42,000 to ₹68,000 for a 3 BHK residence. A two-wheeler courier costs ₹5,800 to ₹9,500, while dedicated enclosed car transportation ranges between ₹16,500 and ₹26,000."
                }
            },
            {
                "@type": "Question",
                "name": "How long does transit take between Jamshedpur and Pune via NH-53?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance is approximately 1,600 km via Sambalpur, Raipur, Nagpur, Amravati, and Ahmednagar along NH-49 and NH-53 (Asian Highway 46). Dedicated container trucks complete this journey within 3 to 5 days."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide claim bills for Tata Motors plant-to-plant transfers?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we specialize in corporate relocations between Tata Motors Jamshedpur (Telco) and Tata Motors Pune (Pimpri-Chinchwad / Bhosari). We provide 100% compliant GST invoices, IBA-format consignment notes, vehicle condition reports, and transit insurance for swift corporate HR claim settlement."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Pune and PCMC do you deliver to?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide end-to-end doorstep delivery, elevator transit, room placement, and setup across all Pune sectors including Hinjewadi, Wakad, Baner, Pimpri, Chinchwad, Bhosari, Kharadi, Viman Nagar, Magarpatta, Hadapsar, Kothrud, and Aundh."
                }
            },
            {
                "@type": "Question",
                "name": "How are electronics, furniture, and kitchenware packed for 1,600 km of road travel?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We apply 5-layer heavy-duty packing: dense air-bubble film, corrugated roll wrap, corner protectors, waterproof shrink wrap, and double-walled cartons. Heavy furniture and appliances are lashed securely to interior container anchor rails."
                }
            },
            {
                "@type": "Question",
                "name": "Can you ship my bike or car safely to Pune?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we handle vehicle shipments using dedicated hydraulic car carriers and containerized bike freight with custom wheel locks and comprehensive transit insurance, preventing highway wear across 1,600 km."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance mandatory for the interstate move to Pune?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We strongly recommend all-risk transit insurance for the 1,600 km journey across multiple states. It covers unforeseen road accidents, fire, and overturning, and policy certificates are issued prior to container dispatch from Jamshedpur."
                }
            },
            {
                "@type": "Question",
                "name": "How do I schedule a pre-move inspection in Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Call our 24/7 helpline at +91-8409531615 or submit an online request. Our local survey team in Jamshedpur will conduct a home assessment and provide an all-inclusive written estimate with zero hidden costs."
                }
            }
        ]
    }
    </script>
</head>
<body>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

    <!-- HERO SECTION -->
    <section class="jsr2pun-hero">
        <div class="container">
            <div class="jsr2pun-hero-grid">
                <div>
                    <span class="jsr2pun-badge">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        Automotive & Tech Dual-Hub Corridor
                    </span>
                    <h1>Jamshedpur to Pune Packers and Movers</h1>
                    <p>Relocating between India's premier industrial and automotive manufacturing centers? Shree Ashirwad Packers and Movers delivers certified, damage-free interstate relocation along the 1,600 km NH-53 / AH46 highway artery. Built to serve Tata Motors dual-plant transfers, auto ancillaries, and Hinjewadi IT professionals, our solutions include five-layer export packing, corporate GST documentation, sealed container transit, and room-specific setup across Pune and PCMC.</p>
                    
                    <div class="jsr2pun-highlights">
                        <div class="jsr2pun-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>3–5 Days Safe Dedicated Container Transit</span>
                        </div>
                        <div class="jsr2pun-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>5-Layer Heavy-Duty Protective Packaging</span>
                        </div>
                        <div class="jsr2pun-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>Tata Motors & Corporate Transfer Invoices</span>
                        </div>
                        <div class="jsr2pun-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>All-Risk Comprehensive Transit Insurance</span>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="jsr2pun-quick-contact">
                        <h3>Get Pune Moving Quote</h3>
                        <p>Transparent rates for nationwide interstate moving.</p>
                        
                        <div class="jsr2pun-route-meta">
                            <div>
                                <span>Highway</span>
                                <strong>NH-53</strong>
                            </div>
                            <div>
                                <span>Distance</span>
                                <strong>~1,600 KM</strong>
                            </div>
                            <div>
                                <span>Transit</span>
                                <strong>3–5 Days</strong>
                            </div>
                        </div>

                        <form action="<?php echo SITE_BASE_URL; ?>/contact" method="GET">
                            <input type="hidden" name="source" value="jamshedpur-to-pune">
                            <div style="margin-bottom: 12px;">
                                <label style="display:block; font-size:0.78rem; font-weight:700; color:#475569; margin-bottom:4px;">PICKUP LOCATION IN JAMSHEDPUR</label>
                                <input type="text" placeholder="e.g. Telco, Bistupur, Kadma, Sonari, Mango" style="width:100%; padding:10px 12px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;" required>
                            </div>
                            <div style="margin-bottom: 12px;">
                                <label style="display:block; font-size:0.78rem; font-weight:700; color:#475569; margin-bottom:4px;">DESTINATION AREA IN PUNE / PCMC</label>
                                <input type="text" placeholder="e.g. Hinjewadi, Wakad, Pimpri, Baner, Kharadi" style="width:100%; padding:10px 12px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;" required>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <label style="display:block; font-size:0.78rem; font-weight:700; color:#475569; margin-bottom:4px;">YOUR MOBILE NUMBER</label>
                                <input type="tel" placeholder="10-digit mobile number" style="width:100%; padding:10px 12px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;" required pattern="[0-9]{10}">
                            </div>
                            <button type="submit" class="jsr2pun-btn-call" style="width:100%; border:none; cursor:pointer;">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"></path></svg>
                                Request Free Price Estimate
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ROUTE INTELLIGENCE & HIGHWAY LOGISTICS SECTION -->
    <section class="jsr2pun-section">
        <div class="container">
            <div class="jsr2pun-sec-title">
                <h2>Jamshedpur to Pune Route Logistics & Highway Details</h2>
                <p>Strategic interstate route planning along the East-to-West industrial corridor connecting Jamshedpur to Western India's automotive capital.</p>
            </div>

            <div class="jsr2pun-route-details">
                <h3>Navigating NH-53 & AH46: The 1,600 KM Automotive Industrial Corridor</h3>
                <p>The interstate highway connecting Jamshedpur to Pune spans approximately 1,600 kilometers across four states: Jharkhand, Odisha, Chhattisgarh, and Maharashtra. Departing Jamshedpur through Baharagora / Chaibasa, the route joins the central high-speed highway trunk NH-53 (Asian Highway 46) passing Sambalpur, Raipur, and Durg into Nagpur. From Nagpur, our container vehicles navigate through Amravati, Akola, Jalna, and Ahmednagar before arriving at the Pune metropolitan ring road near Wagholi or Shikrapur.</p>
                
                <p>Because this corridor connects two of the largest commercial vehicle plants in Asia—Tata Motors Jamshedpur and Tata Motors Pimpri-Pune—engineering professionals, managerial cadres, and vendor technicians frequently shift households across this route. Shree Ashirwad Packers and Movers deploys heavy-duty enclosed container trucks equipped with dual-driver setups, GPS tracking, and pneumatic lashing anchors to keep all furniture, high-end electronics, and personal cars secure over 1,600 kilometers of diverse terrain.</p>

                <p>In Pune, our destination crews are well-versed with gated society guidelines across Hinjewadi phases, Wakad, Baner, and Magarpatta, coordinating service elevator bookings and smooth unloading to deliver a turnkey home setup.</p>
            </div>

            <div class="jsr2pun-cards-grid">
                <div class="jsr2pun-card">
                    <div class="jsr2pun-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4>Dedicated Container Transit</h4>
                    <p>Exclusive container assigned to your shipment. Sealed at your Jamshedpur residence and opened only at your Pune doorstep, eliminating intermediate cross-dock handling.</p>
                </div>

                <div class="jsr2pun-card">
                    <div class="jsr2pun-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h4>All-Weather Hermetic Shielding</h4>
                    <p>Hermetically sealed containers protect your wooden furniture, modular wardrobes, and sensitive electronics against dust, rain, and highway vibrations over 1,600 km.</p>
                </div>

                <div class="jsr2pun-card">
                    <div class="jsr2pun-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h4>Tata Motors Transfer Invoices</h4>
                    <p>Complete documentation packages with itemized inventory, valid GST invoice, money receipt, and transit insurance certificates formatted for Damodar Valley Corporation and PSU reimbursements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPREHENSIVE SERVICE PORTFOLIO -->
    <section class="jsr2pun-section jsr2pun-section-alt">
        <div class="container">
            <div class="jsr2pun-sec-title">
                <h2>Tailored Relocation Services from Jamshedpur to Pune</h2>
                <p>Complete shifting solutions designed for automotive engineers, IT professionals, vehicle owners, and commercial establishments.</p>
            </div>

            <div class="jsr2pun-cards-grid">
                <div class="jsr2pun-card">
                    <div class="jsr2pun-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h4>Household Shifting & Apartment Relocation</h4>
                    <p>End-to-end residential moving from Jamshedpur to Pune apartments. We pack delicate glassware, wrap heavy home appliances, dismantle modular furniture, and position everything room by room.</p>
                </div>

                <div class="jsr2pun-card">
                    <div class="jsr2pun-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h4>Tata Motors Dual-Plant Transfer Services</h4>
                    <p>Dedicated corporate shifting for engineers, managers, and technical specialists transferring between Telco Jamshedpur and Pimpri-Chinchwad Pune facilities.</p>
                </div>

                <div class="jsr2pun-card">
                    <div class="jsr2pun-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h4>Two-Wheeler Bike & Scooter Shipping</h4>
                    <p>Door-to-door two-wheeler transport from Jamshedpur to Pune. Wrapped with multiple bubble layers, mirrors padded, fuel safely drained, and strapped upright inside closed containers.</p>
                </div>

                <div class="jsr2pun-card">
                    <div class="jsr2pun-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <h4>Enclosed Car Carrier Transportation</h4>
                    <p>Hydraulic car carriers transport your hatchback, sedan, or SUV safely across 1,600 km, preventing highway odometer accumulation, stone chips, and long-distance wear.</p>
                </div>

                <div class="jsr2pun-card">
                    <div class="jsr2pun-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <h4>Workstation & IT Hardware Relocation</h4>
                    <p>Special anti-static bubble packaging for gaming PCs, monitors, audio systems, and high-value tech devices, keeping your valuable electronics secure throughout transit.</p>
                </div>

                <div class="jsr2pun-card">
                    <div class="jsr2pun-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                    </div>
                    <h4>Secure Storage & Warehousing in Pune</h4>
                    <p>Modern, clean, pest-controlled storage facilities in Pune for clients awaiting new lease agreements, flat registrations, or interior work completion.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- VERIFIED PHOTOGRAPHIC SHOWCASE -->
    <section class="jsr2pun-section">
        <div class="container">
            <div class="jsr2pun-sec-title">
                <h2>Verified Packing & Moving Operations in Action</h2>
                <p>Authentic photographic documentation showcasing our daily fleet transit, multi-layer packing techniques, car carriers, and destination setup.</p>
            </div>

            <div class="jsr2pun-gallery-grid">
                <div class="jsr2pun-gallery-item">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Enclosed Container Truck for Safe Highway Transit between Jamshedpur and Pune" loading="lazy">
                    <div class="jsr2pun-gallery-caption">All-Weather Closed Container Fleet</div>
                </div>
                <div class="jsr2pun-gallery-item">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Multi-Layer Household Packing for Furniture and Electronics" loading="lazy">
                    <div class="jsr2pun-gallery-caption">5-Layer Protective Furniture Packing</div>
                </div>
                <div class="jsr2pun-gallery-item">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Dedicated Vehicle Carrier for Car and Bike Moving" loading="lazy">
                    <div class="jsr2pun-gallery-caption">Hydraulic Vehicle Carrier Transit</div>
                </div>
                <div class="jsr2pun-gallery-item">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Doorstep Unloading and Furniture Setup in Pune" loading="lazy">
                    <div class="jsr2pun-gallery-caption">Room-by-Room Setup in Pune</div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRANSPARENT PRICING & COST ESTIMATES -->
    <section class="jsr2pun-section jsr2pun-section-alt">
        <div class="container">
            <div class="jsr2pun-sec-title">
                <h2>Jamshedpur to Pune Shifting Charges & Rate Card</h2>
                <p>Transparent rates for the 1,600 km nationwide NH-53 corridor. Zero hidden fees or surprise destination unloading taxes.</p>
            </div>

            <div class="jsr2pun-table-wrapper">
                <table class="jsr2pun-table">
                    <thead>
                        <tr>
                            <th>Relocation Type / Home Size</th>
                            <th>Packing Material & Labour</th>
                            <th>Transport & Fuel (1,600 KM)</th>
                            <th>Approximate Total Cost</th>
                            <th>Transit Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 RK / 1 BHK Apartment</strong></td>
                            <td>₹5,500 - ₹9,000</td>
                            <td>₹14,500 - ₹23,000</td>
                            <td><strong>₹20,000 - ₹32,000</strong></td>
                            <td>3–4 Days</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Complete Household</strong></td>
                            <td>₹8,500 - ₹13,000</td>
                            <td>₹21,500 - ₹32,000</td>
                            <td><strong>₹30,000 - ₹45,000</strong></td>
                            <td>3–5 Days</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK Spacious Residence</strong></td>
                            <td>₹12,000 - ₹18,000</td>
                            <td>₹30,000 - ₹50,000</td>
                            <td><strong>₹42,000 - ₹68,000</strong></td>
                            <td>4–5 Days</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Independent Villa</strong></td>
                            <td>₹16,000 - ₹24,000</td>
                            <td>₹39,000 - ₹64,000</td>
                            <td><strong>₹55,000 - ₹88,000</strong></td>
                            <td>4–6 Days</td>
                        </tr>
                        <tr>
                            <td><strong>Motorcycle / Scooter Parcel</strong></td>
                            <td>₹1,600 - ₹2,800</td>
                            <td>₹4,200 - ₹6,700</td>
                            <td><strong>₹5,800 - ₹9,500</strong></td>
                            <td>3–5 Days</td>
                        </tr>
                        <tr>
                            <td><strong>Car Transport (Hatchback/Sedan)</strong></td>
                            <td>₹2,500 - ₹4,000</td>
                            <td>₹14,000 - ₹22,000</td>
                            <td><strong>₹16,500 - ₹26,000</strong></td>
                            <td>4–6 Days</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size:0.85rem; color:#64748b; text-align:center;">*Note: Final prices depend on the exact inventory volume, floor levels, elevator availability at pickup/destination, and optional transit insurance value declaration.</p>
        </div>
    </section>

    <!-- STEP-BY-STEP MOVING WORKFLOW -->
    <section class="jsr2pun-section">
        <div class="container">
            <div class="jsr2pun-sec-title">
                <h2>Our Proven 5-Step Nationwide Moving Workflow</h2>
                <p>A systematic process designed to eliminate moving stress and ensure maximum asset safety from Jamshedpur to Pune.</p>
            </div>

            <div class="jsr2pun-timeline">
                <div class="jsr2pun-timeline-step">
                    <div class="jsr2pun-step-number">1</div>
                    <div class="jsr2pun-step-content">
                        <h4>Pre-Move Survey & Accurate Estimate</h4>
                        <p>We review your goods via home visit or video call in Jamshedpur, list high-value items, evaluate floor accessibility, and offer a transparent written rate quote.</p>
                    </div>
                </div>

                <div class="jsr2pun-timeline-step">
                    <div class="jsr2pun-step-number">2</div>
                    <div class="jsr2pun-step-content">
                        <h4>Multi-Layer Industrial Grade Packing</h4>
                        <p>Our skilled packers wrap delicate glassware in bubble wrap, pack garments into sturdy cartons, pad furniture with corrugated rolls, and apply shrink film to secure each piece.</p>
                    </div>
                </div>

                <div class="jsr2pun-timeline-step">
                    <div class="jsr2pun-step-number">3</div>
                    <div class="jsr2pun-step-content">
                        <h4>Scientific Vehicle Loading & Weight Distribution</h4>
                        <p>Heavy goods are placed on the truck floor with secure harness straps, mattresses and mirrors are kept upright against padded interior walls, and lighter boxes are stacked neatly on top.</p>
                    </div>
                </div>

                <div class="jsr2pun-timeline-step">
                    <div class="jsr2pun-step-number">4</div>
                    <div class="jsr2pun-step-content">
                        <h4>Direct Highway Transit via NH-53</h4>
                        <p>Our seasoned intercity drivers navigate the 1,600 km route steadily through Sambalpur, Raipur, Nagpur, and Ahmednagar, keeping speed limits checked and communicating live progress.</p>
                    </div>
                </div>

                <div class="jsr2pun-timeline-step">
                    <div class="jsr2pun-step-number">5</div>
                    <div class="jsr2pun-step-content">
                        <h4>Doorstep Unloading, Reassembly & Cleanup</h4>
                        <p>At your new Pune address, we unload every carton, carry heavy pieces to their designated rooms, reassemble beds and tables, and clear out all used packing waste.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LOCALITIES SERVED IN BOTH CITIES -->
    <section class="jsr2pun-section jsr2pun-section-alt">
        <div class="container">
            <div class="jsr2pun-sec-title">
                <h2>Comprehensive Locality Coverage in Jamshedpur & Pune</h2>
                <p>Door-to-door service across all residential colonies, industrial belts, and tech parks in both cities.</p>
            </div>

            <div class="jsr2pun-cards-grid" style="grid-template-columns: repeat(2, 1fr);">
                <div class="jsr2pun-card">
                    <h4>Pickup Localities Across Jamshedpur</h4>
                    <p style="margin-bottom: 12px;">We provide comprehensive doorstep packing and vehicle loading across all sectors of the Steel City:</p>
                    <ul style="font-size:0.92rem; color:var(--jsr2pun-text); line-height:1.7; padding-left:18px;">
                        <li><strong>Telco Colony, Golmuri & Baridih:</strong> Industrial township sectors, Tata Motors residential colonies, and gated complexes.</li>
                        <li><strong>Bistupur, Sakchi & Northern Town:</strong> Central commercial areas and executive residential enclaves.</li>
                        <li><strong>Kadma, Sonari & Circuit House Area:</strong> Established family neighborhoods and modern riverfront apartments.</li>
                        <li><strong>Adityapur & Gamharia:</strong> Industrial manufacturing corridors and residential societies.</li>
                        <li><strong>Mango & Jugsalai:</strong> Expanding residential sectors with direct access to highway corridors.</li>
                    </ul>
                </div>

                <div class="jsr2pun-card">
                    <h4>Delivery Sectors Across Pune & PCMC</h4>
                    <p style="margin-bottom: 12px;">Direct unloading, placement, and reassembly across all major Pune and Pimpri-Chinchwad areas:</p>
                    <ul style="font-size:0.92rem; color:var(--jsr2pun-text); line-height:1.7; padding-left:18px;">
                        <li><strong>Pimpri, Chinchwad, Bhosari & Nigdi:</strong> Prime automotive manufacturing hubs and family residential colonies.</li>
                        <li><strong>Hinjewadi (Phases 1, 2, 3) & Wakad:</strong> Western tech corridor apartments and high-rise gated societies.</li>
                        <li><strong>Baner, Balewadi, Aundh & Pashan:</strong> Upscale western residential neighborhoods with modern towers.</li>
                        <li><strong>Kharadi, Viman Nagar & Magarpatta:</strong> Eastern IT corridors, cyber cities, and modern gated communities.</li>
                        <li><strong>Kothrud, Hadapsar & Bavdhan:</strong> Well-connected traditional family residential avenues.</li>
                    </ul>
                </div>
            </div>

            <div class="jsr2pun-cta-banner">
                <h3>Planning Your Move from Jamshedpur to Pune?</h3>
                <p>Relocate smoothly with Eastern India's most dependable packers and movers. Call us today for customized corporate rates and guaranteed delivery schedules.</p>
                <div class="jsr2pun-cta-actions">
                    <a href="tel:+918409531615" class="jsr2pun-btn-call">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"></path></svg>
                        Call +91-8409531615
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/contact" class="jsr2pun-cta-btn-alt">
                        Request Written Estimate
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FREQUENTLY ASKED QUESTIONS SECTION -->
    <section class="jsr2pun-section">
        <div class="container">
            <div class="jsr2pun-sec-title">
                <h2>Frequently Asked Questions: Jamshedpur to Pune Shifting</h2>
                <p>Helpful answers to common queries regarding pricing, transit timelines, and corporate bills on this route.</p>
            </div>

            <div style="max-width: 860px; margin: 0 auto;">
                <div class="jsr2pun-faq-item">
                    <h4>How much does shifting cost from Jamshedpur to Pune?</h4>
                    <p>Household shifting rates from Jamshedpur to Pune typically range from ₹20,000 to ₹32,000 for a 1 BHK home, ₹30,000 to ₹45,000 for a 2 BHK apartment, and ₹42,000 to ₹68,000 for a 3 BHK residence. A two-wheeler courier costs ₹5,800 to ₹9,500, while dedicated enclosed car transportation ranges between ₹16,500 and ₹26,000.</p>
                </div>

                <div class="jsr2pun-faq-item">
                    <h4>How long does transit take between Jamshedpur and Pune via NH-53?</h4>
                    <p>The highway distance is approximately 1,600 km via Sambalpur, Raipur, Nagpur, Amravati, and Ahmednagar along NH-49 and NH-53 (Asian Highway 46). Dedicated container trucks complete this journey within 3 to 5 days.</p>
                </div>

                <div class="jsr2pun-faq-item">
                    <h4>Do you provide claim bills for Tata Motors plant-to-plant transfers?</h4>
                    <p>Yes, we specialize in corporate relocations between Tata Motors Jamshedpur (Telco) and Tata Motors Pune (Pimpri-Chinchwad / Bhosari). We provide 100% compliant GST invoices, IBA-format consignment notes, vehicle condition reports, and transit insurance for swift corporate HR claim settlement.</p>
                </div>

                <div class="jsr2pun-faq-item">
                    <h4>Which areas in Pune and PCMC do you deliver to?</h4>
                    <p>We provide end-to-end doorstep delivery, elevator transit, room placement, and setup across all Pune sectors including Hinjewadi, Wakad, Baner, Pimpri, Chinchwad, Bhosari, Kharadi, Viman Nagar, Magarpatta, Hadapsar, Kothrud, and Aundh.</p>
                </div>

                <div class="jsr2pun-faq-item">
                    <h4>How are electronics, furniture, and kitchenware packed for 1,600 km of road travel?</h4>
                    <p>We apply 5-layer heavy-duty packing: dense air-bubble film, corrugated roll wrap, corner protectors, waterproof shrink wrap, and double-walled cartons. Heavy furniture and appliances are lashed securely to interior container anchor rails.</p>
                </div>

                <div class="jsr2pun-faq-item">
                    <h4>Can you ship my bike or car safely to Pune?</h4>
                    <p>Yes, we handle vehicle shipments using dedicated hydraulic car carriers and containerized bike freight with custom wheel locks and comprehensive transit insurance, preventing highway wear across 1,600 km.</p>
                </div>

                <div class="jsr2pun-faq-item">
                    <h4>Is transit insurance mandatory for the interstate move to Pune?</h4>
                    <p>We strongly recommend all-risk transit insurance for the 1,600 km journey across multiple states. It covers unforeseen road accidents, fire, and overturning, and policy certificates are issued prior to container dispatch from Jamshedpur.</p>
                </div>

                <div class="jsr2pun-faq-item">
                    <h4>How do I schedule a pre-move inspection in Jamshedpur?</h4>
                    <p>Call our 24/7 helpline at +91-8409531615 or submit an online request. Our local survey team in Jamshedpur will conduct a home assessment and provide an all-inclusive written estimate with zero hidden costs.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
