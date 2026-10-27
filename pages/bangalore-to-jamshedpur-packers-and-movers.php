<?php
/**
 * Page Name: Bangalore to Jamshedpur Packers and Movers
 * Route Slug: bangalore-to-jamshedpur-packers-and-movers
 * Description: Premium nationwide household shifting, IT engineer return relocations, bike shipping, and car carrier services from Bangalore to Jamshedpur via NH-16.
 * Focus Keywords: bangalore to jamshedpur packers and movers, packers and movers bangalore to jamshedpur, house shifting bangalore to jamshedpur, car transport bangalore to jamshedpur, bike parcel bangalore to jamshedpur, bangalore to tata relocation
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Bangalore to Jamshedpur Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Bangalore to Jamshedpur packers and movers. Safe 1850 km nationwide transit via NH-16, 5-layer packing, IT corporate GST bills, car carrier & bike parcel. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/bangalore-to-jamshedpur-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="bangalore to jamshedpur packers and movers, packers and movers bangalore to jamshedpur, house shifting bangalore to jamshedpur, car transport bangalore to jamshedpur, bike parcel bangalore to jamshedpur, bangalore to tata relocation">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-KA">
    <meta name="geo.placename" content="Bangalore">

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

    <!-- Scoped CSS for Route 19 (Bangalore to Jamshedpur) -->
    <style>
        :root {
            --blr2jsr-primary: #0f3460;
            --blr2jsr-secondary: #0284c7;
            --blr2jsr-accent: #f59e0b;
            --blr2jsr-accent-light: #fef3c7;
            --blr2jsr-dark: #16213e;
            --blr2jsr-gray-bg: #f8fafc;
            --blr2jsr-card-border: #e2e8f0;
            --blr2jsr-text: #334155;
            --blr2jsr-text-dark: #0f172a;
        }

        .blr2jsr-hero {
            background: linear-gradient(135deg, rgba(15, 52, 96, 0.95), rgba(2, 132, 199, 0.88)), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 0 50px;
            position: relative;
        }

        .blr2jsr-hero-grid {
            display: grid;
            grid-template-columns: 1.25fr 0.95fr;
            gap: 36px;
            align-items: center;
        }

        .blr2jsr-badge {
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

        .blr2jsr-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.6rem;
            line-height: 1.2;
            font-weight: 800;
            margin-bottom: 16px;
            color: #ffffff;
        }

        .blr2jsr-hero p {
            font-size: 1.05rem;
            line-height: 1.6;
            color: #e2e8f0;
            margin-bottom: 24px;
        }

        .blr2jsr-highlights {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-bottom: 26px;
        }

        .blr2jsr-hl-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.92rem;
            color: #f1f5f9;
        }

        .blr2jsr-hl-item svg {
            width: 18px;
            height: 18px;
            color: #f59e0b;
            flex-shrink: 0;
        }

        .blr2jsr-quick-contact {
            background: #ffffff;
            border-radius: 14px;
            padding: 26px;
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.25);
            color: var(--blr2jsr-text-dark);
        }

        .blr2jsr-quick-contact h3 {
            font-size: 1.35rem;
            font-weight: 800;
            margin-bottom: 8px;
            color: var(--blr2jsr-primary);
        }

        .blr2jsr-quick-contact p {
            font-size: 0.88rem;
            color: #64748b;
            margin-bottom: 16px;
        }

        .blr2jsr-route-meta {
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

        .blr2jsr-route-meta div span {
            display: block;
            font-size: 0.72rem;
            text-transform: uppercase;
            color: #64748b;
            font-weight: 600;
        }

        .blr2jsr-route-meta div strong {
            font-size: 1.05rem;
            color: var(--blr2jsr-primary);
            font-weight: 800;
        }

        .blr2jsr-btn-call {
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

        .blr2jsr-btn-call:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(245, 158, 11, 0.45);
            color: #ffffff;
        }

        .blr2jsr-section {
            padding: 60px 0;
        }

        .blr2jsr-section-alt {
            background-color: var(--blr2jsr-gray-bg);
        }

        .blr2jsr-sec-title {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 40px;
        }

        .blr2jsr-sec-title h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            color: var(--blr2jsr-primary);
            margin-bottom: 12px;
        }

        .blr2jsr-sec-title p {
            font-size: 1rem;
            color: #64748b;
            line-height: 1.6;
        }

        .blr2jsr-route-details {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
            margin-bottom: 30px;
        }

        .blr2jsr-route-details h3 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--blr2jsr-primary);
            margin-bottom: 14px;
        }

        .blr2jsr-route-details p {
            font-size: 0.98rem;
            line-height: 1.7;
            color: var(--blr2jsr-text);
            margin-bottom: 14px;
        }

        .blr2jsr-cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .blr2jsr-card {
            background: #ffffff;
            border: 1px solid var(--blr2jsr-card-border);
            border-radius: 12px;
            padding: 24px;
            transition: all 0.25s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        }

        .blr2jsr-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(15, 52, 96, 0.08);
            border-color: var(--blr2jsr-secondary);
        }

        .blr2jsr-card-icon {
            width: 48px;
            height: 48px;
            background: var(--blr2jsr-accent-light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            color: #d97706;
        }

        .blr2jsr-card h4 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--blr2jsr-primary);
            margin-bottom: 10px;
        }

        .blr2jsr-card p {
            font-size: 0.92rem;
            line-height: 1.6;
            color: var(--blr2jsr-text);
        }

        .blr2jsr-table-wrapper {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            overflow-x: auto;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
            margin-bottom: 30px;
        }

        .blr2jsr-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            text-align: left;
        }

        .blr2jsr-table th {
            background: var(--blr2jsr-primary);
            color: #ffffff;
            padding: 14px 18px;
            font-weight: 700;
        }

        .blr2jsr-table td {
            padding: 13px 18px;
            border-bottom: 1px solid #e2e8f0;
            color: var(--blr2jsr-text);
        }

        .blr2jsr-table tr:last-child td {
            border-bottom: none;
        }

        .blr2jsr-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }

        .blr2jsr-gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 24px;
        }

        .blr2jsr-gallery-item {
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.04);
        }

        .blr2jsr-gallery-item img {
            width: 100%;
            height: 190px;
            object-fit: cover;
            display: block;
        }

        .blr2jsr-gallery-caption {
            padding: 10px 12px;
            font-size: 0.82rem;
            color: #475569;
            font-weight: 600;
            text-align: center;
        }

        .blr2jsr-timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }

        .blr2jsr-timeline-step {
            display: flex;
            gap: 20px;
            margin-bottom: 24px;
        }

        .blr2jsr-step-number {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--blr2jsr-primary);
            color: #ffffff;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 1.1rem;
            box-shadow: 0 4px 12px rgba(15, 52, 96, 0.25);
        }

        .blr2jsr-step-content {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px 22px;
            flex-grow: 1;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
        }

        .blr2jsr-step-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--blr2jsr-primary);
            margin-bottom: 6px;
        }

        .blr2jsr-step-content p {
            font-size: 0.92rem;
            line-height: 1.6;
            color: var(--blr2jsr-text);
            margin: 0;
        }

        .blr2jsr-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 14px;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        .blr2jsr-faq-item h4 {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--blr2jsr-primary);
            margin-bottom: 8px;
        }

        .blr2jsr-faq-item p {
            font-size: 0.92rem;
            line-height: 1.65;
            color: var(--blr2jsr-text);
            margin: 0;
        }

        .blr2jsr-cta-banner {
            background: linear-gradient(135deg, var(--blr2jsr-primary), #0284c7);
            border-radius: 16px;
            padding: 40px;
            color: #ffffff;
            text-align: center;
            margin-top: 40px;
            box-shadow: 0 16px 36px rgba(15, 52, 96, 0.25);
        }

        .blr2jsr-cta-banner h3 {
            font-size: 1.85rem;
            font-weight: 800;
            margin-bottom: 12px;
            color: #ffffff;
        }

        .blr2jsr-cta-banner p {
            font-size: 1.02rem;
            max-width: 650px;
            margin: 0 auto 24px;
            color: #e2e8f0;
        }

        .blr2jsr-cta-actions {
            display: flex;
            justify-content: center;
            gap: 18px;
            flex-wrap: wrap;
        }

        .blr2jsr-cta-btn-alt {
            background: #ffffff;
            color: var(--blr2jsr-primary);
            font-weight: 800;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.25s ease;
        }

        .blr2jsr-cta-btn-alt:hover {
            background: #f1f5f9;
            transform: translateY(-2px);
        }

        @media (max-width: 991px) {
            .blr2jsr-hero-grid {
                grid-template-columns: 1fr;
            }
            .blr2jsr-cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .blr2jsr-gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .blr2jsr-cards-grid {
                grid-template-columns: 1fr;
            }
            .blr2jsr-highlights {
                grid-template-columns: 1fr;
            }
            .blr2jsr-gallery-grid {
                grid-template-columns: 1fr;
            }
            .blr2jsr-hero h1 {
                font-size: 2rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Bangalore to Jamshedpur Long-Haul Division",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "email": "support@shreeashirwadpackers.com",
        "priceRange": "₹22,000 - ₹85,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Outer Ring Road, Near Marathahalli Bridge",
            "addressLocality": "Bangalore",
            "addressRegion": "Karnataka",
            "postalCode": "560037",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 12.9569,
            "longitude": 77.7011
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
            "reviewCount": "392"
        }
    }
    </script>

    <!-- Schema 2: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Bangalore to Jamshedpur Nationwide Relocation and Vehicle Transport",
        "serviceType": "Long-Distance Nationwide Relocation & Vehicle Transport",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Bangalore"
            },
            {
                "@type": "City",
                "name": "Jamshedpur"
            }
        ],
        "description": "Premium nationwide household moving, IT engineer return relocations, corporate asset shifting, bike courier, and enclosed car carrier transport from Bangalore to Jamshedpur via NH-16.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "22000",
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
                "name": "Bangalore to Jamshedpur Packers and Movers",
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
                "name": "How much does shifting cost from Bangalore to Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Household relocation costs from Bangalore to Jamshedpur range from ₹22,000 to ₹34,000 for a 1 BHK home, ₹32,000 to ₹48,000 for a 2 BHK apartment, and ₹45,000 to ₹72,000 for a 3 BHK residence. A two-wheeler parcel costs ₹6,500 to ₹10,500, while dedicated enclosed car transportation ranges from ₹18,000 to ₹28,000."
                }
            },
            {
                "@type": "Question",
                "name": "How long does transit take between Bangalore and Jamshedpur via NH-16?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The overland distance is approximately 1,850 km via Hoskote, Chittoor, Vijayawada, Visakhapatnam, and Bhubaneswar along the NH-16 Golden Quadrilateral corridor into Jamshedpur. Typical transit time is 4 to 6 days in our dedicated container trucks."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide IT corporate claim bills for tech employees moving to Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we regularly provide full billing documentation for tech employees relocating from Bangalore firms like Infosys, Wipro, TCS, Amazon, and startups to Tata Steel, Tata Motors, or remote setups in Jamshedpur. We provide 100% GST invoices, IBA-approved consignment notes, packing manifests, and transit insurance certificates."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Jamshedpur do you provide doorstep unloading and setup?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We provide direct doorstep delivery across all Jamshedpur localities including Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Golmuri, Baridih, Mango, Jugsalai, and Adityapur Industrial Area, managing lift access and society entry smoothly."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect delicate electronics, servers, and crockery over 1,850 km?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We implement a heavy-duty 5-layer packing system: air-bubble cushioning, corrugated wrap, thick edge protectors, stretch wrap moisture barriers, and sturdy multi-ply cardboard boxes. Goods are lashed to internal container wall anchors to prevent shift during long-distance highway travel."
                }
            },
            {
                "@type": "Question",
                "name": "Can you ship my car and bike together from Bangalore to Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide specialized vehicle relocation. Two-wheelers can travel securely inside container trucks with four-point tie-downs, and four-wheelers are moved on dedicated hydraulic car carriers with bumper-to-bumper transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance coverage included for this nationwide move?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, all-risk transit insurance from recognized public sector general insurance companies is provided to protect your consignment against accidental risks, collision, fire, and transit weather hazards across the 1,850 km route."
                }
            },
            {
                "@type": "Question",
                "name": "How do I track my shipment from Bangalore to Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We assign a dedicated move manager who gives daily status check-ins and GPS location updates as your container truck progresses through Andhra Pradesh, Odisha, and into Jharkhand."
                }
            }
        ]
    }
    </script>
</head>
<body>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

    <!-- HERO SECTION -->
    <section class="blr2jsr-hero">
        <div class="container">
            <div class="blr2jsr-hero-grid">
                <div>
                    <span class="blr2jsr-badge">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        Silicon Valley to Steel City Nationwide Route
                    </span>
                    <h1>Bangalore to Jamshedpur Packers and Movers</h1>
                    <p>Relocating from the Silicon Valley of India back to the historic Steel City of Jamshedpur? Shree Ashirwad Packers and Movers delivers certified, stress-free nationwide moving services along the 1,850 km Golden Quadrilateral NH-16 corridor. Engineered for tech professionals, engineers, and families, our services feature 5-layer export packing, IT corporate GST invoicing, sealed container vehicles, and room-specific setup across all Jamshedpur sectors.</p>
                    
                    <div class="blr2jsr-highlights">
                        <div class="blr2jsr-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>4–6 Days Safe Dedicated Container Transit</span>
                        </div>
                        <div class="blr2jsr-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>5-Layer Heavy-Duty Protective Packaging</span>
                        </div>
                        <div class="blr2jsr-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>IT Corporate & MNC Claim Invoices</span>
                        </div>
                        <div class="blr2jsr-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>All-Risk Comprehensive Transit Insurance</span>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="blr2jsr-quick-contact">
                        <h3>Get Jamshedpur Quote</h3>
                        <p>Transparent rates for nationwide interstate moving.</p>
                        
                        <div class="blr2jsr-route-meta">
                            <div>
                                <span>Highway</span>
                                <strong>NH-16</strong>
                            </div>
                            <div>
                                <span>Distance</span>
                                <strong>~1,850 KM</strong>
                            </div>
                            <div>
                                <span>Transit</span>
                                <strong>4–6 Days</strong>
                            </div>
                        </div>

                        <form action="<?php echo SITE_BASE_URL; ?>/contact" method="GET">
                            <input type="hidden" name="source" value="bangalore-to-jamshedpur">
                            <div style="margin-bottom: 12px;">
                                <label style="display:block; font-size:0.78rem; font-weight:700; color:#475569; margin-bottom:4px;">PICKUP LOCATION IN BANGALORE</label>
                                <input type="text" placeholder="e.g. Whitefield, HSR Layout, Electronic City, Bellandur" style="width:100%; padding:10px 12px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;" required>
                            </div>
                            <div style="margin-bottom: 12px;">
                                <label style="display:block; font-size:0.78rem; font-weight:700; color:#475569; margin-bottom:4px;">DESTINATION LOCALITY IN JAMSHEDPUR</label>
                                <input type="text" placeholder="e.g. Bistupur, Kadma, Telco, Sonari, Mango" style="width:100%; padding:10px 12px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;" required>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <label style="display:block; font-size:0.78rem; font-weight:700; color:#475569; margin-bottom:4px;">YOUR MOBILE NUMBER</label>
                                <input type="tel" placeholder="10-digit mobile number" style="width:100%; padding:10px 12px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;" required pattern="[0-9]{10}">
                            </div>
                            <button type="submit" class="blr2jsr-btn-call" style="width:100%; border:none; cursor:pointer;">
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
    <section class="blr2jsr-section">
        <div class="container">
            <div class="blr2jsr-sec-title">
                <h2>Bangalore to Jamshedpur Route Logistics & Highway Details</h2>
                <p>Strategic nationwide logistics planning along the Golden Quadrilateral NH-16 connecting Southern India's Tech Capital to East Singhbhum.</p>
            </div>

            <div class="blr2jsr-route-details">
                <h3>Navigating NH-16: The 1,850 KM Nationwide Coastal Arterial</h3>
                <p>The journey from Bangalore to Jamshedpur spans approximately 1,850 kilometers across Karnataka, Andhra Pradesh, Odisha, and Jharkhand. Starting from Bangalore through Hoskote, Kolar, and Chittoor, our container trucks connect with the premier National Highway 16 (NH-16) via Tirupati or Nellore. From there, the route follows the high-speed coastal corridor past Ongole, Vijayawada, Rajahmundry, Visakhapatnam, Berhampur, Bhubaneswar, Cuttack, and Balasore before turning toward Baharagora on NH-49 into Jamshedpur.</p>
                
                <p>Because this long-distance route crosses varied climates—from Karnataka's plateau elevations to humid coastal Andhra and the mineral belts of Jharkhand—specialized cargo protection is indispensable. Shree Ashirwad Packers and Movers uses weatherproof steel containers fitted with internal lashing hooks, anti-condensation air vents, and shock-absorbing suspension. Dual drivers alternate driving shifts with mandatory rest intervals at certified logistics hubs, maintaining continuous, reliable progress without driver exhaustion.</p>

                <p>In Jamshedpur, our delivery teams coordinate with residential welfare societies and apartment authorities across Bistupur, Sakchi, Telco, Kadma, and Adityapur, scheduling delivery hours that bypass municipal traffic restrictions and ensure prompt, quiet room assembly.</p>
            </div>

            <div class="blr2jsr-cards-grid">
                <div class="blr2jsr-card">
                    <div class="blr2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4>Dedicated Long-Haul Container</h4>
                    <p>Your consignment travels in an exclusive container sealed in Bangalore and opened only at your Jamshedpur residence. No intermediate transfers, zero mix-ups.</p>
                </div>

                <div class="blr2jsr-card">
                    <div class="blr2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h4>Multi-Climate Hermetic Protection</h4>
                    <p>Our container bodies protect sensitive computer hardware, wooden furniture, and clothing against coastal humidity changes and road debris over 1,850 km.</p>
                </div>

                <div class="blr2jsr-card">
                    <div class="blr2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h4>Corporate IT Claim Documentation</h4>
                    <p>Complete paperwork with GST invoices, IBA consignment notes, transit insurance, and itemized inventory manifests tailored for IT company relocation reimbursements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPREHENSIVE SERVICE PORTFOLIO -->
    <section class="blr2jsr-section blr2jsr-section-alt">
        <div class="container">
            <div class="blr2jsr-sec-title">
                <h2>Tailored Relocation Services from Bangalore to Jamshedpur</h2>
                <p>Complete shifting solutions designed for modern tech families, corporate executives, vehicle owners, and commercial establishments.</p>
            </div>

            <div class="blr2jsr-cards-grid">
                <div class="blr2jsr-card">
                    <div class="blr2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h4>Household Shifting & Apartment Relocation</h4>
                    <p>End-to-end residential moving from Bangalore apartments to Jamshedpur homes. We pack delicate glassware, wrap heavy home appliances, dismantle modular furniture, and position everything room by room.</p>
                </div>

                <div class="blr2jsr-card">
                    <div class="blr2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h4>IT Engineers & Tech Return Transfers</h4>
                    <p>Tailored moves for software professionals, NIT alumni, and engineers returning from Bangalore technology hubs to Jamshedpur, featuring weekend packing and flexible delivery windows.</p>
                </div>

                <div class="blr2jsr-card">
                    <div class="blr2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h4>Two-Wheeler Bike & Royal Enfield Shipping</h4>
                    <p>Door-to-door two-wheeler transport from Bangalore to Jamshedpur. Wrapped with multiple bubble layers, mirrors padded, fuel safely drained, and strapped upright inside closed containers.</p>
                </div>

                <div class="blr2jsr-card">
                    <div class="blr2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <h4>Enclosed Car Carrier Transportation</h4>
                    <p>Hydraulic car carriers transport your hatchback, sedan, or SUV safely across 1,850 km, preventing highway odometer accumulation, stone chips, and long-distance wear.</p>
                </div>

                <div class="blr2jsr-card">
                    <div class="blr2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <h4>Workstation & IT Hardware Relocation</h4>
                    <p>Special anti-static bubble packaging for gaming PCs, monitors, audio systems, and high-value tech devices, keeping your valuable electronics secure throughout transit.</p>
                </div>

                <div class="blr2jsr-card">
                    <div class="blr2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                    </div>
                    <h4>Secure Storage & Warehousing in Jamshedpur</h4>
                    <p>Modern, clean, pest-controlled storage facilities in Jamshedpur for clients awaiting new lease agreements, flat registrations, or interior work completion.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- VERIFIED PHOTOGRAPHIC SHOWCASE -->
    <section class="blr2jsr-section">
        <div class="container">
            <div class="blr2jsr-sec-title">
                <h2>Verified Packing & Moving Operations in Action</h2>
                <p>Authentic photographic documentation showcasing our daily fleet transit, multi-layer packing techniques, car carriers, and destination setup.</p>
            </div>

            <div class="blr2jsr-gallery-grid">
                <div class="blr2jsr-gallery-item">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Enclosed Container Truck for Safe Highway Transit between Bangalore and Jamshedpur" loading="lazy">
                    <div class="blr2jsr-gallery-caption">All-Weather Closed Container Fleet</div>
                </div>
                <div class="blr2jsr-gallery-item">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Multi-Layer Household Packing for Furniture and Electronics" loading="lazy">
                    <div class="blr2jsr-gallery-caption">5-Layer Protective Furniture Packing</div>
                </div>
                <div class="blr2jsr-gallery-item">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Dedicated Vehicle Carrier for Car and Bike Moving" loading="lazy">
                    <div class="blr2jsr-gallery-caption">Hydraulic Vehicle Carrier Transit</div>
                </div>
                <div class="blr2jsr-gallery-item">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Doorstep Unloading and Furniture Setup in Jamshedpur" loading="lazy">
                    <div class="blr2jsr-gallery-caption">Room-by-Room Setup in Jamshedpur</div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRANSPARENT PRICING & COST ESTIMATES -->
    <section class="blr2jsr-section blr2jsr-section-alt">
        <div class="container">
            <div class="blr2jsr-sec-title">
                <h2>Bangalore to Jamshedpur Shifting Charges & Rate Card</h2>
                <p>Transparent rates for the 1,850 km nationwide NH-16 corridor. Zero hidden fees or surprise destination unloading taxes.</p>
            </div>

            <div class="blr2jsr-table-wrapper">
                <table class="blr2jsr-table">
                    <thead>
                        <tr>
                            <th>Relocation Type / Home Size</th>
                            <th>Packing Material & Labour</th>
                            <th>Transport & Fuel (1,850 KM)</th>
                            <th>Approximate Total Cost</th>
                            <th>Transit Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 RK / 1 BHK Apartment</strong></td>
                            <td>₹6,000 - ₹9,500</td>
                            <td>₹16,000 - ₹24,500</td>
                            <td><strong>₹22,000 - ₹34,000</strong></td>
                            <td>4–5 Days</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Complete Household</strong></td>
                            <td>₹9,500 - ₹14,000</td>
                            <td>₹22,500 - ₹34,000</td>
                            <td><strong>₹32,000 - ₹48,000</strong></td>
                            <td>4–6 Days</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK Spacious Residence</strong></td>
                            <td>₹13,000 - ₹19,500</td>
                            <td>₹32,000 - ₹52,500</td>
                            <td><strong>₹45,000 - ₹72,000</strong></td>
                            <td>5–6 Days</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Independent Villa</strong></td>
                            <td>₹17,000 - ₹26,000</td>
                            <td>₹42,000 - ₹69,000</td>
                            <td><strong>₹59,000 - ₹95,000</strong></td>
                            <td>5–7 Days</td>
                        </tr>
                        <tr>
                            <td><strong>Motorcycle / Scooter Parcel</strong></td>
                            <td>₹1,800 - ₹3,000</td>
                            <td>₹4,700 - ₹7,500</td>
                            <td><strong>₹6,500 - ₹10,500</strong></td>
                            <td>4–6 Days</td>
                        </tr>
                        <tr>
                            <td><strong>Car Transport (Hatchback/Sedan)</strong></td>
                            <td>₹2,500 - ₹4,000</td>
                            <td>₹15,500 - ₹24,000</td>
                            <td><strong>₹18,000 - ₹28,000</strong></td>
                            <td>5–7 Days</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size:0.85rem; color:#64748b; text-align:center;">*Note: Final prices depend on the exact inventory volume, floor levels, elevator availability at pickup/destination, and optional transit insurance value declaration.</p>
        </div>
    </section>

    <!-- STEP-BY-STEP MOVING WORKFLOW -->
    <section class="blr2jsr-section">
        <div class="container">
            <div class="blr2jsr-sec-title">
                <h2>Our Proven 5-Step Nationwide Moving Workflow</h2>
                <p>A systematic process designed to eliminate moving stress and ensure maximum asset safety from Bangalore to Jamshedpur.</p>
            </div>

            <div class="blr2jsr-timeline">
                <div class="blr2jsr-timeline-step">
                    <div class="blr2jsr-step-number">1</div>
                    <div class="blr2jsr-step-content">
                        <h4>Pre-Move Survey & Accurate Estimate</h4>
                        <p>We review your goods via home visit or video call in Bangalore, list high-value items, note heavy furniture, evaluate floor accessibility, and offer a transparent written rate quote.</p>
                    </div>
                </div>

                <div class="blr2jsr-timeline-step">
                    <div class="blr2jsr-step-number">2</div>
                    <div class="blr2jsr-step-content">
                        <h4>Multi-Layer Industrial Grade Packing</h4>
                        <p>Our skilled packers wrap delicate glassware in bubble wrap, pack garments into sturdy cartons, pad furniture with corrugated rolls, and apply shrink film to secure each piece.</p>
                    </div>
                </div>

                <div class="blr2jsr-timeline-step">
                    <div class="blr2jsr-step-number">3</div>
                    <div class="blr2jsr-step-content">
                        <h4>Scientific Vehicle Loading & Weight Distribution</h4>
                        <p>Heavy goods are placed on the truck floor with secure harness straps, mattresses and mirrors are kept upright against padded interior walls, and lighter boxes are stacked neatly on top.</p>
                    </div>
                </div>

                <div class="blr2jsr-timeline-step">
                    <div class="blr2jsr-step-number">4</div>
                    <div class="blr2jsr-step-content">
                        <h4>Direct Highway Transit via NH-16</h4>
                        <p>Our seasoned intercity drivers navigate the 1,850 km route steadily through Vijayawada, Visakhapatnam, and Bhubaneswar, keeping speed limits checked and communicating live progress.</p>
                    </div>
                </div>

                <div class="blr2jsr-timeline-step">
                    <div class="blr2jsr-step-number">5</div>
                    <div class="blr2jsr-step-content">
                        <h4>Doorstep Unloading, Reassembly & Cleanup</h4>
                        <p>At your new Jamshedpur address, we unload every carton, carry heavy pieces to their designated rooms, reassemble beds and tables, and clear out all used packing waste.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LOCALITIES SERVED IN BOTH CITIES -->
    <section class="blr2jsr-section blr2jsr-section-alt">
        <div class="container">
            <div class="blr2jsr-sec-title">
                <h2>Comprehensive Locality Coverage in Bangalore & Jamshedpur</h2>
                <p>Door-to-door service across all residential colonies, IT hubs, and tech corridors in both cities.</p>
            </div>

            <div class="blr2jsr-cards-grid" style="grid-template-columns: repeat(2, 1fr);">
                <div class="blr2jsr-card">
                    <h4>Pickup Localities Across Bangalore</h4>
                    <p style="margin-bottom: 12px;">We provide comprehensive doorstep packing and vehicle loading across all sectors of Greater Bangalore:</p>
                    <ul style="font-size:0.92rem; color:var(--blr2jsr-text); line-height:1.7; padding-left:18px;">
                        <li><strong>Whitefield, Kadugodi & ITPL:</strong> Major tech park sectors, gated villa communities, and luxury high-rises.</li>
                        <li><strong>Electronic City (Phases 1 & 2):</strong> Leading software development hubs and residential townships.</li>
                        <li><strong>HSR Layout, Koramangala & BTM Layout:</strong> Prime South Bangalore residential and startup corridors.</li>
                        <li><strong>Bellandur, Sarjapur Road & Marathahalli:</strong> High-density IT corridor apartments along outer ring road.</li>
                        <li><strong>Hebbal, Manyata Tech Park & Yelahanka:</strong> North Bangalore tech avenues and upscale residential layouts.</li>
                    </ul>
                </div>

                <div class="blr2jsr-card">
                    <h4>Delivery Sectors Across Jamshedpur</h4>
                    <p style="margin-bottom: 12px;">Direct unloading, placement, and reassembly across all major steel city neighborhoods:</p>
                    <ul style="font-size:0.92rem; color:var(--blr2jsr-text); line-height:1.7; padding-left:18px;">
                        <li><strong>Bistupur, Sakchi & Northern Town:</strong> Central commercial areas and executive residential enclaves.</li>
                        <li><strong>Kadma, Sonari & Circuit House Area:</strong> Established family neighborhoods and modern riverfront apartments.</li>
                        <li><strong>Telco Colony, Golmuri & Baridih:</strong> Industrial township colonies, Tata Motors residential sectors, and gated communities.</li>
                        <li><strong>Adityapur & Gamharia:</strong> Industrial corridors, engineering hubs, and modern residential developments.</li>
                        <li><strong>Mango & Jugsalai:</strong> Expanding residential sectors with direct access to highway corridors.</li>
                    </ul>
                </div>
            </div>

            <div class="blr2jsr-cta-banner">
                <h3>Planning Your Move from Bangalore to Jamshedpur?</h3>
                <p>Relocate smoothly with Eastern India's most dependable packers and movers. Call us today for customized corporate rates and guaranteed delivery schedules.</p>
                <div class="blr2jsr-cta-actions">
                    <a href="tel:+918409531615" class="blr2jsr-btn-call">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"></path></svg>
                        Call +91-8409531615
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/contact" class="blr2jsr-cta-btn-alt">
                        Request Written Estimate
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FREQUENTLY ASKED QUESTIONS SECTION -->
    <section class="blr2jsr-section">
        <div class="container">
            <div class="blr2jsr-sec-title">
                <h2>Frequently Asked Questions: Bangalore to Jamshedpur Shifting</h2>
                <p>Helpful answers to common queries regarding pricing, transit timelines, and corporate bills on this route.</p>
            </div>

            <div style="max-width: 860px; margin: 0 auto;">
                <div class="blr2jsr-faq-item">
                    <h4>How much does shifting cost from Bangalore to Jamshedpur?</h4>
                    <p>Household relocation costs from Bangalore to Jamshedpur range from ₹22,000 to ₹34,000 for a 1 BHK home, ₹32,000 to ₹48,000 for a 2 BHK apartment, and ₹45,000 to ₹72,000 for a 3 BHK residence. A two-wheeler parcel costs ₹6,500 to ₹10,500, while dedicated enclosed car transportation ranges from ₹18,000 to ₹28,000.</p>
                </div>

                <div class="blr2jsr-faq-item">
                    <h4>How long does transit take between Bangalore and Jamshedpur via NH-16?</h4>
                    <p>The overland distance is approximately 1,850 km via Hoskote, Chittoor, Vijayawada, Visakhapatnam, and Bhubaneswar along the NH-16 Golden Quadrilateral corridor into Jamshedpur. Typical transit time is 4 to 6 days in our dedicated container trucks.</p>
                </div>

                <div class="blr2jsr-faq-item">
                    <h4>Do you provide IT corporate claim bills for tech employees moving to Jamshedpur?</h4>
                    <p>Yes, we regularly provide full billing documentation for tech employees relocating from Bangalore firms like Infosys, Wipro, TCS, Amazon, and startups to Tata Steel, Tata Motors, or remote setups in Jamshedpur. We provide 100% GST invoices, IBA-approved consignment notes, packing manifests, and transit insurance certificates.</p>
                </div>

                <div class="blr2jsr-faq-item">
                    <h4>Which areas in Jamshedpur do you provide doorstep unloading and setup?</h4>
                    <p>We provide direct doorstep delivery across all Jamshedpur localities including Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Golmuri, Baridih, Mango, Jugsalai, and Adityapur Industrial Area, managing lift access and society entry smoothly.</p>
                </div>

                <div class="blr2jsr-faq-item">
                    <h4>How do you protect delicate electronics, servers, and crockery over 1,850 km?</h4>
                    <p>We implement a heavy-duty 5-layer packing system: air-bubble cushioning, corrugated wrap, thick edge protectors, stretch wrap moisture barriers, and sturdy multi-ply cardboard boxes. Goods are lashed to internal container wall anchors to prevent shift during long-distance highway travel.</p>
                </div>

                <div class="blr2jsr-faq-item">
                    <h4>Can you ship my car and bike together from Bangalore to Jamshedpur?</h4>
                    <p>Yes, we provide specialized vehicle relocation. Two-wheelers can travel securely inside container trucks with four-point tie-downs, and four-wheelers are moved on dedicated hydraulic car carriers with bumper-to-bumper transit insurance.</p>
                </div>

                <div class="blr2jsr-faq-item">
                    <h4>Is transit insurance coverage included for this nationwide move?</h4>
                    <p>Yes, all-risk transit insurance from recognized public sector general insurance companies is provided to protect your consignment against accidental risks, collision, fire, and transit weather hazards across the 1,850 km route.</p>
                </div>

                <div class="blr2jsr-faq-item">
                    <h4>How do I track my shipment from Bangalore to Jamshedpur?</h4>
                    <p>We assign a dedicated move manager who gives daily status check-ins and GPS location updates as your container truck progresses through Andhra Pradesh, Odisha, and into Jharkhand.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
