<?php
/**
 * Page Name: Kolkata to Jamshedpur Packers and Movers
 * Route Slug: kolkata-to-jamshedpur-packers-and-movers
 * Description: Premium interstate household shifting, Tata corporate employee relocations, bike courier, and car carrier services from Kolkata to Jamshedpur via NH-16 & NH-49.
 * Focus Keywords: kolkata to jamshedpur packers and movers, packers and movers kolkata to jamshedpur, house shifting kolkata to jamshedpur, car transport kolkata to jamshedpur, bike parcel kolkata to jamshedpur, tata corporate transfer kolkata jamshedpur
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Kolkata to Jamshedpur Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Kolkata to Jamshedpur packers and movers. Safe 280 km transit via NH-16, 5-layer packing, Tata corporate GST bills, car carrier & bike courier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/kolkata-to-jamshedpur-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="kolkata to jamshedpur packers and movers, packers and movers kolkata to jamshedpur, house shifting kolkata to jamshedpur, car transport kolkata to jamshedpur, bike parcel kolkata to jamshedpur, tata corporate transfer kolkata jamshedpur">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-WB">
    <meta name="geo.placename" content="Kolkata">

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

    <!-- Scoped CSS for Route 16 (Kolkata to Jamshedpur) -->
    <style>
        :root {
            --kol2jsr-primary: #1e3a8a;
            --kol2jsr-secondary: #0284c7;
            --kol2jsr-accent: #f59e0b;
            --kol2jsr-accent-light: #fef3c7;
            --kol2jsr-dark: #0f172a;
            --kol2jsr-gray-bg: #f8fafc;
            --kol2jsr-card-border: #e2e8f0;
            --kol2jsr-text: #334155;
            --kol2jsr-text-dark: #0f172a;
        }

        .kol2jsr-hero {
            background: linear-gradient(135deg, rgba(30, 58, 138, 0.95), rgba(2, 132, 199, 0.88)), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 0 50px;
            position: relative;
        }

        .kol2jsr-hero-grid {
            display: grid;
            grid-template-columns: 1.25fr 0.95fr;
            gap: 36px;
            align-items: center;
        }

        .kol2jsr-badge {
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

        .kol2jsr-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.6rem;
            line-height: 1.2;
            font-weight: 800;
            margin-bottom: 16px;
            color: #ffffff;
        }

        .kol2jsr-hero p {
            font-size: 1.05rem;
            line-height: 1.6;
            color: #e2e8f0;
            margin-bottom: 24px;
        }

        .kol2jsr-highlights {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-bottom: 26px;
        }

        .kol2jsr-hl-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.92rem;
            color: #f1f5f9;
        }

        .kol2jsr-hl-item svg {
            width: 18px;
            height: 18px;
            color: #f59e0b;
            flex-shrink: 0;
        }

        .kol2jsr-quick-contact {
            background: #ffffff;
            border-radius: 14px;
            padding: 26px;
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.25);
            color: var(--kol2jsr-text-dark);
        }

        .kol2jsr-quick-contact h3 {
            font-size: 1.35rem;
            font-weight: 800;
            margin-bottom: 8px;
            color: var(--kol2jsr-primary);
        }

        .kol2jsr-quick-contact p {
            font-size: 0.88rem;
            color: #64748b;
            margin-bottom: 16px;
        }

        .kol2jsr-route-meta {
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

        .kol2jsr-route-meta div span {
            display: block;
            font-size: 0.72rem;
            text-transform: uppercase;
            color: #64748b;
            font-weight: 600;
        }

        .kol2jsr-route-meta div strong {
            font-size: 1.05rem;
            color: var(--kol2jsr-primary);
            font-weight: 800;
        }

        .kol2jsr-btn-call {
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

        .kol2jsr-btn-call:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(245, 158, 11, 0.45);
            color: #ffffff;
        }

        .kol2jsr-section {
            padding: 60px 0;
        }

        .kol2jsr-section-alt {
            background-color: var(--kol2jsr-gray-bg);
        }

        .kol2jsr-sec-title {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 40px;
        }

        .kol2jsr-sec-title h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            color: var(--kol2jsr-primary);
            margin-bottom: 12px;
        }

        .kol2jsr-sec-title p {
            font-size: 1rem;
            color: #64748b;
            line-height: 1.6;
        }

        .kol2jsr-route-details {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
            margin-bottom: 30px;
        }

        .kol2jsr-route-details h3 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--kol2jsr-primary);
            margin-bottom: 14px;
        }

        .kol2jsr-route-details p {
            font-size: 0.98rem;
            line-height: 1.7;
            color: var(--kol2jsr-text);
            margin-bottom: 14px;
        }

        .kol2jsr-cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .kol2jsr-card {
            background: #ffffff;
            border: 1px solid var(--kol2jsr-card-border);
            border-radius: 12px;
            padding: 24px;
            transition: all 0.25s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        }

        .kol2jsr-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(30, 58, 138, 0.08);
            border-color: var(--kol2jsr-secondary);
        }

        .kol2jsr-card-icon {
            width: 48px;
            height: 48px;
            background: var(--kol2jsr-accent-light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            color: #d97706;
        }

        .kol2jsr-card h4 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--kol2jsr-primary);
            margin-bottom: 10px;
        }

        .kol2jsr-card p {
            font-size: 0.92rem;
            line-height: 1.6;
            color: var(--kol2jsr-text);
        }

        .kol2jsr-table-wrapper {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            overflow-x: auto;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
            margin-bottom: 30px;
        }

        .kol2jsr-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            text-align: left;
        }

        .kol2jsr-table th {
            background: var(--kol2jsr-primary);
            color: #ffffff;
            padding: 14px 18px;
            font-weight: 700;
        }

        .kol2jsr-table td {
            padding: 13px 18px;
            border-bottom: 1px solid #e2e8f0;
            color: var(--kol2jsr-text);
        }

        .kol2jsr-table tr:last-child td {
            border-bottom: none;
        }

        .kol2jsr-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }

        .kol2jsr-gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 24px;
        }

        .kol2jsr-gallery-item {
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.04);
        }

        .kol2jsr-gallery-item img {
            width: 100%;
            height: 190px;
            object-fit: cover;
            display: block;
        }

        .kol2jsr-gallery-caption {
            padding: 10px 12px;
            font-size: 0.82rem;
            color: #475569;
            font-weight: 600;
            text-align: center;
        }

        .kol2jsr-timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }

        .kol2jsr-timeline-step {
            display: flex;
            gap: 20px;
            margin-bottom: 24px;
        }

        .kol2jsr-step-number {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--kol2jsr-primary);
            color: #ffffff;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 1.1rem;
            box-shadow: 0 4px 12px rgba(30, 58, 138, 0.25);
        }

        .kol2jsr-step-content {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px 22px;
            flex-grow: 1;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
        }

        .kol2jsr-step-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--kol2jsr-primary);
            margin-bottom: 6px;
        }

        .kol2jsr-step-content p {
            font-size: 0.92rem;
            line-height: 1.6;
            color: var(--kol2jsr-text);
            margin: 0;
        }

        .kol2jsr-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 14px;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        .kol2jsr-faq-item h4 {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--kol2jsr-primary);
            margin-bottom: 8px;
        }

        .kol2jsr-faq-item p {
            font-size: 0.92rem;
            line-height: 1.65;
            color: var(--kol2jsr-text);
            margin: 0;
        }

        .kol2jsr-cta-banner {
            background: linear-gradient(135deg, var(--kol2jsr-primary), #0284c7);
            border-radius: 16px;
            padding: 40px;
            color: #ffffff;
            text-align: center;
            margin-top: 40px;
            box-shadow: 0 16px 36px rgba(30, 58, 138, 0.25);
        }

        .kol2jsr-cta-banner h3 {
            font-size: 1.85rem;
            font-weight: 800;
            margin-bottom: 12px;
            color: #ffffff;
        }

        .kol2jsr-cta-banner p {
            font-size: 1.02rem;
            max-width: 650px;
            margin: 0 auto 24px;
            color: #e2e8f0;
        }

        .kol2jsr-cta-actions {
            display: flex;
            justify-content: center;
            gap: 18px;
            flex-wrap: wrap;
        }

        .kol2jsr-cta-btn-alt {
            background: #ffffff;
            color: var(--kol2jsr-primary);
            font-weight: 800;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.25s ease;
        }

        .kol2jsr-cta-btn-alt:hover {
            background: #f1f5f9;
            transform: translateY(-2px);
        }

        @media (max-width: 991px) {
            .kol2jsr-hero-grid {
                grid-template-columns: 1fr;
            }
            .kol2jsr-cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .kol2jsr-gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .kol2jsr-cards-grid {
                grid-template-columns: 1fr;
            }
            .kol2jsr-highlights {
                grid-template-columns: 1fr;
            }
            .kol2jsr-gallery-grid {
                grid-template-columns: 1fr;
            }
            .kol2jsr-hero h1 {
                font-size: 2rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Kolkata to Jamshedpur Interstate Route",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "email": "support@shreeashirwadpackers.com",
        "priceRange": "₹8,500 - ₹45,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "EM Bypass, Near Ruby General Hospital",
            "addressLocality": "Kolkata",
            "addressRegion": "West Bengal",
            "postalCode": "700107",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 22.5180,
            "longitude": 88.4011
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
            "reviewCount": "326"
        }
    }
    </script>

    <!-- Schema 2: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Kolkata to Jamshedpur Interstate Relocation and Vehicle Transport",
        "serviceType": "Interstate Relocation & Corporate Shifting",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Kolkata"
            },
            {
                "@type": "City",
                "name": "Jamshedpur"
            }
        ],
        "description": "Direct point-to-point household moving, Tata corporate executive transfers, bike courier, and enclosed car carrier transport from Kolkata to Jamshedpur via NH-16 and NH-49.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "8500",
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
                "name": "Kolkata to Jamshedpur Packers and Movers",
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
                "name": "How much does household shifting cost from Kolkata to Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Household relocation costs from Kolkata to Jamshedpur range from ₹8,500 to ₹14,000 for a 1 BHK home, ₹13,000 to ₹22,000 for a 2 BHK apartment, and ₹19,000 to ₹32,000 for a 3 BHK residence. A two-wheeler parcel costs ₹2,800 to ₹4,500, while dedicated enclosed car transportation ranges from ₹8,000 to ₹13,500."
                }
            },
            {
                "@type": "Question",
                "name": "What is the transit duration between Kolkata and Jamshedpur via NH-16 & NH-49?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance is approximately 280 km via Kona Expressway, NH-16 (Kharagpur), and NH-49 (Baharagora and Ghatshila). Our dedicated container trucks generally reach Jamshedpur destinations within 6 to 8 hours, offering guaranteed same-day delivery."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide corporate reimbursement invoices for Tata Group and MNC employees?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We frequently manage corporate transfers for Tata Steel, Tata Motors, Tata Power, TCS, and other major corporations. We supply complete GST-compliant invoices, IBA-format consignment notes, car condition reports, and transit insurance certificates for quick HR claim processing."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Jamshedpur do you cover for doorstep delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deliver across all sectors of Jamshedpur including Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Golmuri, Baridih, Mango, Jugsalai, and Adityapur, providing complete unloading, placement, and bed/table reassembly."
                }
            },
            {
                "@type": "Question",
                "name": "How are fragile items, glassware, and electronics packed for interstate highway transit?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy 5-layer export-grade packing: premium air bubble wrap, high-density edge foam protectors, stretch wrap film, double-walled corrugated cartons, and waterproof tarpaulin shielding. Fragile items are clearly marked and placed in top-tier cushioned compartments."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport my four-wheeler car and two-wheeler bike together?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we handle vehicle shipments either together with your household goods in a partitioned container or via our specialized hydraulic car carriers and bike freight carriers, backed by bumper-to-bumper transit insurance."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance mandatory for the Kolkata to Jamshedpur route?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We strongly recommend all-risk transit insurance for this interstate highway route. It covers any unforeseen accidental damage, collision, or weather event, and policy documents are issued before the vehicle departs Kolkata."
                }
            },
            {
                "@type": "Question",
                "name": "How do I book my relocation from Kolkata to Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Call our dedicated interstate relocation team at +91-8409531615 or submit your moving details on our website. We arrange an immediate in-person or virtual survey in Kolkata and provide a guaranteed, itemized rate quotation."
                }
            }
        ]
    }
    </script>
</head>
<body>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

    <!-- HERO SECTION -->
    <section class="kol2jsr-hero">
        <div class="container">
            <div class="kol2jsr-hero-grid">
                <div>
                    <span class="kol2jsr-badge">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        City of Joy to Steel City Premier Interstate Route
                    </span>
                    <h1>Kolkata to Jamshedpur Packers and Movers</h1>
                    <p>Relocating from Kolkata to the industrial steel hub of Jamshedpur? Shree Ashirwad Packers and Movers delivers certified, damage-free interstate shifting along the 280 km highway corridor via NH-16 and NH-49. Engineered for corporate executives, plant managers, and modern families, our services feature five-layer protective packaging, corporate GST invoicing, hermetically sealed container transit, and room-specific setup across all Jamshedpur sectors.</p>
                    
                    <div class="kol2jsr-highlights">
                        <div class="kol2jsr-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>Express 6–8 Hours Door-to-Door Delivery</span>
                        </div>
                        <div class="kol2jsr-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>5-Layer Heavy-Duty Protective Packaging</span>
                        </div>
                        <div class="kol2jsr-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>Tata Corporate & MNC Approved Billing</span>
                        </div>
                        <div class="kol2jsr-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>All-Risk Comprehensive Transit Insurance</span>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="kol2jsr-quick-contact">
                        <h3>Request Jamshedpur Quote</h3>
                        <p>Accurate, upfront estimates with zero hidden costs.</p>
                        
                        <div class="kol2jsr-route-meta">
                            <div>
                                <span>Highways</span>
                                <strong>NH-16 & 49</strong>
                            </div>
                            <div>
                                <span>Distance</span>
                                <strong>~280 KM</strong>
                            </div>
                            <div>
                                <span>Transit</span>
                                <strong>6–8 Hrs</strong>
                            </div>
                        </div>

                        <form action="<?php echo SITE_BASE_URL; ?>/contact" method="GET">
                            <input type="hidden" name="source" value="kolkata-to-jamshedpur">
                            <div style="margin-bottom: 12px;">
                                <label style="display:block; font-size:0.78rem; font-weight:700; color:#475569; margin-bottom:4px;">PICKUP LOCATION IN KOLKATA / HOWRAH</label>
                                <input type="text" placeholder="e.g. Salt Lake, New Town, Ballygunge, Behala" style="width:100%; padding:10px 12px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;" required>
                            </div>
                            <div style="margin-bottom: 12px;">
                                <label style="display:block; font-size:0.78rem; font-weight:700; color:#475569; margin-bottom:4px;">DESTINATION LOCALITY IN JAMSHEDPUR</label>
                                <input type="text" placeholder="e.g. Bistupur, Kadma, Telco, Sonari, Mango" style="width:100%; padding:10px 12px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;" required>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <label style="display:block; font-size:0.78rem; font-weight:700; color:#475569; margin-bottom:4px;">YOUR MOBILE NUMBER</label>
                                <input type="tel" placeholder="10-digit mobile number" style="width:100%; padding:10px 12px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;" required pattern="[0-9]{10}">
                            </div>
                            <button type="submit" class="kol2jsr-btn-call" style="width:100%; border:none; cursor:pointer;">
                                <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"></path></svg>
                                Get Free Shifting Quote
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ROUTE INTELLIGENCE & HIGHWAY LOGISTICS SECTION -->
    <section class="kol2jsr-section">
        <div class="container">
            <div class="kol2jsr-sec-title">
                <h2>Kolkata to Jamshedpur Route Logistics & Highway Details</h2>
                <p>Strategic interstate transport planning along National Highway 16 and National Highway 49 connecting Greater Kolkata to East Singhbhum.</p>
            </div>

            <div class="kol2jsr-route-details">
                <h3>Navigating NH-16 & NH-49: The 280 KM Heavy Commercial Conduit</h3>
                <p>The interstate highway connecting Kolkata to Jamshedpur spans approximately 280 kilometers. The route commences from Kolkata across the Vidyasagar Setu (Second Hooghly Bridge) along the Kona Expressway, merging onto the high-speed six-lane National Highway 16 (NH-16). Our trucks cruise past Uluberia, Kolaghat, and Kharagpur before branching onto National Highway 49 (NH-49) toward Lodhasuli, crossing the Bengal-Jharkhand border near Chichira into Baharagora, Dhalbhumgarh, Ghatshila, and finally entering Jamshedpur via Dimna Chowk or Sundarnagar.</p>
                
                <p>Because this corridor connects Bengal's commercial center with Jharkhand's primary industrial city, heavy vehicle traffic is continuous. Shree Ashirwad Packers and Movers implements smart dispatch timing—loading early morning in Kolkata apartments to navigate the Kona Expressway prior to heavy morning truck jams, cruising smoothly across NH-16, and reaching Jamshedpur by late afternoon so our crew can complete unloading, positioning, and bed/dining reassembly on the very same day.</p>

                <p>Our containerized trucks feature heavy-duty suspension and airtight sealing, safeguarding all furniture, kitchenware, and electronics against highway rain, coal dust, and vibration. In Jamshedpur, our supervisors coordinate directly with society managers and local gate security in Telco Colony, Bistupur, Kadma, and Sonari for an effortless move.</p>
            </div>

            <div class="kol2jsr-cards-grid">
                <div class="kol2jsr-card">
                    <div class="kol2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4>Same-Day Interstate Delivery</h4>
                    <p>Load by morning in Kolkata and arrive in Jamshedpur within 6 to 8 hours. No intermediate unloading, zero hub transfers, and no multi-day delivery delays.</p>
                </div>

                <div class="jsr2kol-card">
                    <div class="kol2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h4>Hermetically Sealed Steel Containers</h4>
                    <p>Our custom weatherproof container bodies protect your electronic appliances, books, and delicate upholstery from highway exhaust soot, dust, and rainstorms.</p>
                </div>

                <div class="kol2jsr-card">
                    <div class="kol2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h4>Corporate Claim Billing Packages</h4>
                    <p>We provide full documentation for Tata Steel, Tata Motors, TCS, and MNC transfers—including GST invoice, itemized packing list, IBA consignment note, and transit insurance.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPREHENSIVE SERVICE PORTFOLIO -->
    <section class="kol2jsr-section kol2jsr-section-alt">
        <div class="container">
            <div class="kol2jsr-sec-title">
                <h2>Tailored Relocation Services from Kolkata to Jamshedpur</h2>
                <p>Complete shifting solutions designed for modern families, corporate transfers, vehicle owners, and commercial enterprises.</p>
            </div>

            <div class="kol2jsr-cards-grid">
                <div class="kol2jsr-card">
                    <div class="kol2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h4>Household Shifting & Apartment Relocation</h4>
                    <p>Comprehensive residential moving from Kolkata apartments to Jamshedpur residences. We carefully pack delicate chinaware, dismantle king-size beds, blanket-wrap sofas, and assemble everything at your destination.</p>
                </div>

                <div class="kol2jsr-card">
                    <div class="kol2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h4>Tata Group & Corporate Executive Transfers</h4>
                    <p>Specialized relocation packages for professionals moving between Kolkata corporate headquarters and Jamshedpur manufacturing operations, with full GST claim invoicing.</p>
                </div>

                <div class="kol2jsr-card">
                    <div class="kol2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h4>Two-Wheeler Parcel & Bike Courier</h4>
                    <p>Scratch-free bike transport from Kolkata to Jamshedpur. We wrap your bike with 4 layers of protective bubble wrap and corrugated sheeting, strapping it firmly inside covered containers.</p>
                </div>

                <div class="kol2jsr-card">
                    <div class="kol2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <h4>Enclosed Car Carrier Transportation</h4>
                    <p>Doorstep car pickup in Kolkata and delivery in Jamshedpur. Carried in closed vehicle carriers with hydraulic ramps, tire stops, and comprehensive transit insurance.</p>
                </div>

                <div class="kol2jsr-card">
                    <div class="kol2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <h4>Commercial Asset & Office Relocation</h4>
                    <p>Secure relocation for commercial branch offices, IT workstations, servers, and sensitive industrial blueprints with anti-static packaging and systematic inventory tagging.</p>
                </div>

                <div class="kol2jsr-card">
                    <div class="kol2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                    </div>
                    <h4>Secure Storage & Warehousing in Jamshedpur</h4>
                    <p>Spacious, clean, and 24/7 guarded storage hubs in Jamshedpur and Kolkata for clients awaiting apartment handovers, tenancy agreements, or home renovations.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- VERIFIED PHOTOGRAPHIC SHOWCASE -->
    <section class="kol2jsr-section">
        <div class="container">
            <div class="kol2jsr-sec-title">
                <h2>Verified Packing & Moving Operations in Action</h2>
                <p>Authentic photographic documentation showcasing our daily fleet transit, multi-layer packing techniques, car carriers, and destination setup.</p>
            </div>

            <div class="kol2jsr-gallery-grid">
                <div class="kol2jsr-gallery-item">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Enclosed Container Truck for Safe Highway Transit between Kolkata and Jamshedpur" loading="lazy">
                    <div class="kol2jsr-gallery-caption">All-Weather Closed Container Fleet</div>
                </div>
                <div class="kol2jsr-gallery-item">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Multi-Layer Household Packing for Furniture and Electronics" loading="lazy">
                    <div class="kol2jsr-gallery-caption">5-Layer Protective Furniture Packing</div>
                </div>
                <div class="kol2jsr-gallery-item">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Dedicated Vehicle Carrier for Car and Bike Moving" loading="lazy">
                    <div class="kol2jsr-gallery-caption">Hydraulic Vehicle Carrier Transit</div>
                </div>
                <div class="kol2jsr-gallery-item">
                    <img loading="lazy" decoding="async" src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Doorstep Unloading and Furniture Setup in Jamshedpur" loading="lazy">
                    <div class="kol2jsr-gallery-caption">Room-by-Room Setup in Jamshedpur</div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRANSPARENT PRICING & COST ESTIMATES -->
    <section class="kol2jsr-section kol2jsr-section-alt">
        <div class="container">
            <div class="kol2jsr-sec-title">
                <h2>Kolkata to Jamshedpur Shifting Charges & Rate Card</h2>
                <p>Transparent rates for the 280 km interstate NH-16 & NH-49 corridor. Zero hidden fees or surprise destination unloading taxes.</p>
            </div>

            <div class="kol2jsr-table-wrapper">
                <table class="kol2jsr-table">
                    <thead>
                        <tr>
                            <th>Relocation Type / Home Size</th>
                            <th>Packing Material & Labour</th>
                            <th>Transport & Fuel (280 KM)</th>
                            <th>Approximate Total Cost</th>
                            <th>Transit Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 RK / 1 BHK Apartment</strong></td>
                            <td>₹3,500 - ₹5,500</td>
                            <td>₹5,000 - ₹8,500</td>
                            <td><strong>₹8,500 - ₹14,000</strong></td>
                            <td>6–8 Hours (Same Day)</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Complete Household</strong></td>
                            <td>₹5,500 - ₹8,500</td>
                            <td>₹7,500 - ₹13,500</td>
                            <td><strong>₹13,000 - ₹22,000</strong></td>
                            <td>6–8 Hours (Same Day)</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK Spacious Residence</strong></td>
                            <td>₹8,000 - ₹12,500</td>
                            <td>₹11,000 - ₹19,500</td>
                            <td><strong>₹19,000 - ₹32,000</strong></td>
                            <td>7–9 Hours (Same Day)</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Independent Bungalow</strong></td>
                            <td>₹11,000 - ₹17,500</td>
                            <td>₹15,000 - ₹27,500</td>
                            <td><strong>₹26,000 - ₹45,000</strong></td>
                            <td>8–10 Hours (Same Day)</td>
                        </tr>
                        <tr>
                            <td><strong>Motorcycle / Scooter Parcel</strong></td>
                            <td>₹900 - ₹1,500</td>
                            <td>₹1,900 - ₹3,000</td>
                            <td><strong>₹2,800 - ₹4,500</strong></td>
                            <td>6–8 Hours (Same Day)</td>
                        </tr>
                        <tr>
                            <td><strong>Car Transport (Hatchback/Sedan)</strong></td>
                            <td>₹1,500 - ₹2,500</td>
                            <td>₹6,500 - ₹11,000</td>
                            <td><strong>₹8,000 - ₹13,500</strong></td>
                            <td>Same Day Delivery</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size:0.85rem; color:#64748b; text-align:center;">*Note: Final charges depend on actual inventory volume, floor elevation, lift availability, and declared transit insurance value.</p>
        </div>
    </section>

    <!-- STEP-BY-STEP MOVING WORKFLOW -->
    <section class="kol2jsr-section">
        <div class="container">
            <div class="kol2jsr-sec-title">
                <h2>Our Proven 5-Step Interstate Moving Workflow</h2>
                <p>A systematic process designed to eliminate moving stress and ensure maximum asset safety from Kolkata to Jamshedpur.</p>
            </div>

            <div class="kol2jsr-timeline">
                <div class="kol2jsr-timeline-step">
                    <div class="kol2jsr-step-number">1</div>
                    <div class="kol2jsr-step-content">
                        <h4>Pre-Move Survey & Accurate Estimate</h4>
                        <p>We review your goods via home visit or video call in Kolkata, list high-value items, note heavy furniture, evaluate floor accessibility, and offer a transparent written rate quote.</p>
                    </div>
                </div>

                <div class="kol2jsr-timeline-step">
                    <div class="kol2jsr-step-number">2</div>
                    <div class="kol2jsr-step-content">
                        <h4>Multi-Layer Industrial Grade Packing</h4>
                        <p>Our skilled packers wrap delicate glassware in bubble wrap, pack garments into sturdy cartons, pad furniture with corrugated rolls, and apply shrink film to secure each piece.</p>
                    </div>
                </div>

                <div class="kol2jsr-timeline-step">
                    <div class="kol2jsr-step-number">3</div>
                    <div class="kol2jsr-step-content">
                        <h4>Scientific Vehicle Loading & Weight Distribution</h4>
                        <p>Heavy goods are placed on the truck floor with secure harness straps, mattresses and mirrors are kept upright against padded interior walls, and lighter boxes are stacked neatly on top.</p>
                    </div>
                </div>

                <div class="kol2jsr-timeline-step">
                    <div class="kol2jsr-step-number">4</div>
                    <div class="kol2jsr-step-content">
                        <h4>Direct Highway Transit via NH-16 & NH-49</h4>
                        <p>Our seasoned intercity drivers navigate the 280 km route steadily through Kolaghat, Kharagpur, and Baharagora, keeping speed limits checked and communicating live progress.</p>
                    </div>
                </div>

                <div class="kol2jsr-timeline-step">
                    <div class="jsr2kol-step-number">5</div>
                    <div class="kol2jsr-step-content">
                        <h4>Doorstep Unloading, Reassembly & Cleanup</h4>
                        <p>At your new Jamshedpur address, we unload every carton, carry heavy pieces to their designated rooms, reassemble beds and tables, and clear out all used packing waste.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LOCALITIES SERVED IN BOTH CITIES -->
    <section class="kol2jsr-section kol2jsr-section-alt">
        <div class="container">
            <div class="kol2jsr-sec-title">
                <h2>Comprehensive Locality Coverage in Kolkata & Jamshedpur</h2>
                <p>Door-to-door service across all residential colonies, IT hubs, and suburbs in both cities.</p>
            </div>

            <div class="kol2jsr-cards-grid" style="grid-template-columns: repeat(2, 1fr);">
                <div class="kol2jsr-card">
                    <h4>Pickup Localities Across Kolkata & Howrah</h4>
                    <p style="margin-bottom: 12px;">We provide comprehensive doorstep packing and vehicle loading across all sectors of Greater Kolkata:</p>
                    <ul style="font-size:0.92rem; color:var(--kol2jsr-text); line-height:1.7; padding-left:18px;">
                        <li><strong>Salt Lake (Sectors I–V) & New Town:</strong> Premier IT tech corridors, Action Areas 1, 2, 3, and modern high-rises.</li>
                        <li><strong>Ballygunge, Alipore & Southern Avenue:</strong> Premium heritage and upscale residential South Kolkata sectors.</li>
                        <li><strong>Garia, Tollygunge, Jadavpur & Behala:</strong> Thriving South Kolkata family residential colonies.</li>
                        <li><strong>Rajarhat, Dum Dum & Lake Town:</strong> North Kolkata connectivity zones and residential towers.</li>
                        <li><strong>Howrah, Kona Expressway & Shibpur:</strong> Commercial centers and residential communities near second Hooghly bridge.</li>
                    </ul>
                </div>

                <div class="kol2jsr-card">
                    <h4>Delivery Sectors Across Jamshedpur</h4>
                    <p style="margin-bottom: 12px;">Direct unloading, placement, and reassembly across all major steel city neighborhoods:</p>
                    <ul style="font-size:0.92rem; color:var(--kol2jsr-text); line-height:1.7; padding-left:18px;">
                        <li><strong>Bistupur, Sakchi & Northern Town:</strong> Central commercial areas and executive residential enclaves.</li>
                        <li><strong>Kadma, Sonari & Circuit House Area:</strong> Established family neighborhoods and modern riverfront apartments.</li>
                        <li><strong>Telco Colony, Golmuri & Baridih:</strong> Industrial township colonies, Tata Motors residential sectors, and gated communities.</li>
                        <li><strong>Adityapur & Gamharia:</strong> Industrial corridors, engineering hubs, and modern residential developments.</li>
                        <li><strong>Mango & Jugsalai:</strong> Expanding residential sectors with direct access to highway corridors.</li>
                    </ul>
                </div>
            </div>

            <div class="kol2jsr-cta-banner">
                <h3>Planning Your Move from Kolkata to Jamshedpur?</h3>
                <p>Relocate smoothly with Eastern India's most dependable packers and movers. Call us today for customized corporate rates and same-day delivery schedules.</p>
                <div class="kol2jsr-cta-actions">
                    <a href="tel:+918409531615" class="kol2jsr-btn-call">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"></path></svg>
                        Call +91-8409531615
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/contact" class="kol2jsr-cta-btn-alt">
                        Request Written Estimate
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FREQUENTLY ASKED QUESTIONS SECTION -->
    <section class="kol2jsr-section">
        <div class="container">
            <div class="kol2jsr-sec-title">
                <h2>Frequently Asked Questions: Kolkata to Jamshedpur Shifting</h2>
                <p>Helpful answers to common queries regarding pricing, transit timelines, and corporate bills on this route.</p>
            </div>

            <div style="max-width: 860px; margin: 0 auto;">
                <div class="kol2jsr-faq-item">
                    <h4>How much does household shifting cost from Kolkata to Jamshedpur?</h4>
                    <p>Household relocation costs from Kolkata to Jamshedpur range from ₹8,500 to ₹14,000 for a 1 BHK home, ₹13,000 to ₹22,000 for a 2 BHK apartment, and ₹19,000 to ₹32,000 for a 3 BHK residence. A two-wheeler parcel costs ₹2,800 to ₹4,500, while dedicated enclosed car transportation ranges from ₹8,000 to ₹13,500.</p>
                </div>

                <div class="kol2jsr-faq-item">
                    <h4>What is the transit duration between Kolkata and Jamshedpur via NH-16 & NH-49?</h4>
                    <p>The highway distance is approximately 280 km via Kona Expressway, NH-16 (Kharagpur), and NH-49 (Baharagora and Ghatshila). Our dedicated container trucks generally reach Jamshedpur destinations within 6 to 8 hours, offering guaranteed same-day delivery.</p>
                </div>

                <div class="kol2jsr-faq-item">
                    <h4>Do you provide corporate reimbursement invoices for Tata Group and MNC employees?</h4>
                    <p>Yes. We frequently manage corporate transfers for Tata Steel, Tata Motors, Tata Power, TCS, and other major corporations. We supply complete GST-compliant invoices, IBA-format consignment notes, car condition reports, and transit insurance certificates for quick HR claim processing.</p>
                </div>

                <div class="kol2jsr-faq-item">
                    <h4>Which areas in Jamshedpur do you cover for doorstep delivery?</h4>
                    <p>We deliver across all sectors of Jamshedpur including Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Golmuri, Baridih, Mango, Jugsalai, and Adityapur, providing complete unloading, placement, and bed/table reassembly.</p>
                </div>

                <div class="kol2jsr-faq-item">
                    <h4>How are fragile items, glassware, and electronics packed for interstate highway transit?</h4>
                    <p>We deploy 5-layer export-grade packing: premium air bubble wrap, high-density edge foam protectors, stretch wrap film, double-walled corrugated cartons, and waterproof tarpaulin shielding. Fragile items are clearly marked and placed in top-tier cushioned compartments.</p>
                </div>

                <div class="kol2jsr-faq-item">
                    <h4>Can you transport my four-wheeler car and two-wheeler bike together?</h4>
                    <p>Yes, we handle vehicle shipments either together with your household goods in a partitioned container or via our specialized hydraulic car carriers and bike freight carriers, backed by bumper-to-bumper transit insurance.</p>
                </div>

                <div class="kol2jsr-faq-item">
                    <h4>Is transit insurance mandatory for the Kolkata to Jamshedpur route?</h4>
                    <p>We strongly recommend all-risk transit insurance for this interstate highway route. It covers any unforeseen accidental damage, collision, or weather event, and policy documents are issued before the vehicle departs Kolkata.</p>
                </div>

                <div class="kol2jsr-faq-item">
                    <h4>How do I book my relocation from Kolkata to Jamshedpur?</h4>
                    <p>Call our dedicated interstate relocation team at +91-8409531615 or submit your moving details on our website. We arrange an immediate in-person or virtual survey in Kolkata and provide a guaranteed, itemized rate quotation.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
