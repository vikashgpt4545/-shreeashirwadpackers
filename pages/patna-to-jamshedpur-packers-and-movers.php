<?php
/**
 * Page Name: Patna to Jamshedpur Packers and Movers
 * Route Slug: patna-to-jamshedpur-packers-and-movers
 * Description: Dedicated household shifting, government officer transfers, bike transport, and car carrier services from Patna to Jamshedpur via NH-22 & NH-33.
 * Focus Keywords: patna to jamshedpur packers and movers, packers and movers patna to jamshedpur, house shifting patna to jamshedpur, car carrier patna to jamshedpur, bike parcel patna to jamshedpur, bihar to jharkhand packers movers
 */
if (!defined('APP_INIT')) {
    require_once __DIR__ . '/../includes/config.php';
}

$page_title = "Patna to Jamshedpur Packers & Movers | Shree Ashirwad Packers";
$page_desc = "Top Patna to Jamshedpur packers and movers. Safe 470 km highway transit via NH-22 & NH-33, 5-layer packing, GST transfer billing, car carrier & bike courier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/patna-to-jamshedpur-packers-and-movers";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="patna to jamshedpur packers and movers, packers and movers patna to jamshedpur, house shifting patna to jamshedpur, car carrier patna to jamshedpur, bike parcel patna to jamshedpur, bihar to jharkhand packers movers">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-BR">
    <meta name="geo.placename" content="Patna">

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

    <!-- Scoped CSS for Route 17 (Patna to Jamshedpur) -->
    <style>
        :root {
            --pat2jsr-primary: #1e3a5f;
            --pat2jsr-secondary: #0284c7;
            --pat2jsr-accent: #f59e0b;
            --pat2jsr-accent-light: #fef3c7;
            --pat2jsr-dark: #0f172a;
            --pat2jsr-gray-bg: #f8fafc;
            --pat2jsr-card-border: #e2e8f0;
            --pat2jsr-text: #334155;
            --pat2jsr-text-dark: #0f172a;
        }

        .pat2jsr-hero {
            background: linear-gradient(135deg, rgba(30, 58, 95, 0.95), rgba(2, 132, 199, 0.88)), url('<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg') center/cover no-repeat;
            color: #ffffff;
            padding: 70px 0 50px;
            position: relative;
        }

        .pat2jsr-hero-grid {
            display: grid;
            grid-template-columns: 1.25fr 0.95fr;
            gap: 36px;
            align-items: center;
        }

        .pat2jsr-badge {
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

        .pat2jsr-hero h1 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.6rem;
            line-height: 1.2;
            font-weight: 800;
            margin-bottom: 16px;
            color: #ffffff;
        }

        .pat2jsr-hero p {
            font-size: 1.05rem;
            line-height: 1.6;
            color: #e2e8f0;
            margin-bottom: 24px;
        }

        .pat2jsr-highlights {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 12px;
            margin-bottom: 26px;
        }

        .pat2jsr-hl-item {
            display: flex;
            align-items: center;
            gap: 10px;
            font-size: 0.92rem;
            color: #f1f5f9;
        }

        .pat2jsr-hl-item svg {
            width: 18px;
            height: 18px;
            color: #f59e0b;
            flex-shrink: 0;
        }

        .pat2jsr-quick-contact {
            background: #ffffff;
            border-radius: 14px;
            padding: 26px;
            box-shadow: 0 16px 36px rgba(0, 0, 0, 0.25);
            color: var(--pat2jsr-text-dark);
        }

        .pat2jsr-quick-contact h3 {
            font-size: 1.35rem;
            font-weight: 800;
            margin-bottom: 8px;
            color: var(--pat2jsr-primary);
        }

        .pat2jsr-quick-contact p {
            font-size: 0.88rem;
            color: #64748b;
            margin-bottom: 16px;
        }

        .pat2jsr-route-meta {
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

        .pat2jsr-route-meta div span {
            display: block;
            font-size: 0.72rem;
            text-transform: uppercase;
            color: #64748b;
            font-weight: 600;
        }

        .pat2jsr-route-meta div strong {
            font-size: 1.05rem;
            color: var(--pat2jsr-primary);
            font-weight: 800;
        }

        .pat2jsr-btn-call {
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

        .pat2jsr-btn-call:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 22px rgba(245, 158, 11, 0.45);
            color: #ffffff;
        }

        .pat2jsr-section {
            padding: 60px 0;
        }

        .pat2jsr-section-alt {
            background-color: var(--pat2jsr-gray-bg);
        }

        .pat2jsr-sec-title {
            text-align: center;
            max-width: 800px;
            margin: 0 auto 40px;
        }

        .pat2jsr-sec-title h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.1rem;
            font-weight: 800;
            color: var(--pat2jsr-primary);
            margin-bottom: 12px;
        }

        .pat2jsr-sec-title p {
            font-size: 1rem;
            color: #64748b;
            line-height: 1.6;
        }

        .pat2jsr-route-details {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            padding: 30px;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
            margin-bottom: 30px;
        }

        .pat2jsr-route-details h3 {
            font-size: 1.4rem;
            font-weight: 700;
            color: var(--pat2jsr-primary);
            margin-bottom: 14px;
        }

        .pat2jsr-route-details p {
            font-size: 0.98rem;
            line-height: 1.7;
            color: var(--pat2jsr-text);
            margin-bottom: 14px;
        }

        .pat2jsr-cards-grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 24px;
        }

        .pat2jsr-card {
            background: #ffffff;
            border: 1px solid var(--pat2jsr-card-border);
            border-radius: 12px;
            padding: 24px;
            transition: all 0.25s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.03);
        }

        .pat2jsr-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(30, 58, 95, 0.08);
            border-color: var(--pat2jsr-secondary);
        }

        .pat2jsr-card-icon {
            width: 48px;
            height: 48px;
            background: var(--pat2jsr-accent-light);
            border-radius: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 16px;
            color: #d97706;
        }

        .pat2jsr-card h4 {
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--pat2jsr-primary);
            margin-bottom: 10px;
        }

        .pat2jsr-card p {
            font-size: 0.92rem;
            line-height: 1.6;
            color: var(--pat2jsr-text);
        }

        .pat2jsr-table-wrapper {
            background: #ffffff;
            border-radius: 12px;
            border: 1px solid #e2e8f0;
            overflow-x: auto;
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.04);
            margin-bottom: 30px;
        }

        .pat2jsr-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            text-align: left;
        }

        .pat2jsr-table th {
            background: var(--pat2jsr-primary);
            color: #ffffff;
            padding: 14px 18px;
            font-weight: 700;
        }

        .pat2jsr-table td {
            padding: 13px 18px;
            border-bottom: 1px solid #e2e8f0;
            color: var(--pat2jsr-text);
        }

        .pat2jsr-table tr:last-child td {
            border-bottom: none;
        }

        .pat2jsr-table tr:nth-child(even) td {
            background-color: #f8fafc;
        }

        .pat2jsr-gallery-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 18px;
            margin-bottom: 24px;
        }

        .pat2jsr-gallery-item {
            background: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            border: 1px solid #e2e8f0;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.04);
        }

        .pat2jsr-gallery-item img {
            width: 100%;
            height: 190px;
            object-fit: cover;
            display: block;
        }

        .pat2jsr-gallery-caption {
            padding: 10px 12px;
            font-size: 0.82rem;
            color: #475569;
            font-weight: 600;
            text-align: center;
        }

        .pat2jsr-timeline {
            position: relative;
            max-width: 900px;
            margin: 0 auto;
        }

        .pat2jsr-timeline-step {
            display: flex;
            gap: 20px;
            margin-bottom: 24px;
        }

        .pat2jsr-step-number {
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: var(--pat2jsr-primary);
            color: #ffffff;
            font-weight: 800;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            font-size: 1.1rem;
            box-shadow: 0 4px 12px rgba(30, 58, 95, 0.25);
        }

        .pat2jsr-step-content {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 18px 22px;
            flex-grow: 1;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.03);
        }

        .pat2jsr-step-content h4 {
            font-size: 1.1rem;
            font-weight: 700;
            color: var(--pat2jsr-primary);
            margin-bottom: 6px;
        }

        .pat2jsr-step-content p {
            font-size: 0.92rem;
            line-height: 1.6;
            color: var(--pat2jsr-text);
            margin: 0;
        }

        .pat2jsr-faq-item {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            margin-bottom: 14px;
            padding: 20px;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.02);
        }

        .pat2jsr-faq-item h4 {
            font-size: 1.05rem;
            font-weight: 700;
            color: var(--pat2jsr-primary);
            margin-bottom: 8px;
        }

        .pat2jsr-faq-item p {
            font-size: 0.92rem;
            line-height: 1.65;
            color: var(--pat2jsr-text);
            margin: 0;
        }

        .pat2jsr-cta-banner {
            background: linear-gradient(135deg, var(--pat2jsr-primary), #0284c7);
            border-radius: 16px;
            padding: 40px;
            color: #ffffff;
            text-align: center;
            margin-top: 40px;
            box-shadow: 0 16px 36px rgba(30, 58, 95, 0.25);
        }

        .pat2jsr-cta-banner h3 {
            font-size: 1.85rem;
            font-weight: 800;
            margin-bottom: 12px;
            color: #ffffff;
        }

        .pat2jsr-cta-banner p {
            font-size: 1.02rem;
            max-width: 650px;
            margin: 0 auto 24px;
            color: #e2e8f0;
        }

        .pat2jsr-cta-actions {
            display: flex;
            justify-content: center;
            gap: 18px;
            flex-wrap: wrap;
        }

        .pat2jsr-cta-btn-alt {
            background: #ffffff;
            color: var(--pat2jsr-primary);
            font-weight: 800;
            padding: 12px 24px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.25s ease;
        }

        .pat2jsr-cta-btn-alt:hover {
            background: #f1f5f9;
            transform: translateY(-2px);
        }

        @media (max-width: 991px) {
            .pat2jsr-hero-grid {
                grid-template-columns: 1fr;
            }
            .pat2jsr-cards-grid {
                grid-template-columns: repeat(2, 1fr);
            }
            .pat2jsr-gallery-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (max-width: 640px) {
            .pat2jsr-cards-grid {
                grid-template-columns: 1fr;
            }
            .pat2jsr-highlights {
                grid-template-columns: 1fr;
            }
            .pat2jsr-gallery-grid {
                grid-template-columns: 1fr;
            }
            .pat2jsr-hero h1 {
                font-size: 2rem;
            }
        }
    </style>

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers - Patna to Jamshedpur Interstate Highway Division",
        "image": "<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-8409531615",
        "email": "support@shreeashirwadpackers.com",
        "priceRange": "₹11,000 - ₹52,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Bailey Road, Near Saguna More",
            "addressLocality": "Patna",
            "addressRegion": "Bihar",
            "postalCode": "801503",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 25.6100,
            "longitude": 85.0400
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
            "reviewCount": "304"
        }
    }
    </script>

    <!-- Schema 2: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "name": "Patna to Jamshedpur Interstate Household and Vehicle Transport",
        "serviceType": "Interstate Relocation & Vehicle Shifting",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": [
            {
                "@type": "City",
                "name": "Patna"
            },
            {
                "@type": "City",
                "name": "Jamshedpur"
            }
        ],
        "description": "Safe household moving, state government and banking officer relocations, two-wheeler parcel, and car carrier services from Patna to Jamshedpur via NH-22 and NH-33.",
        "offers": {
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "11000",
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
                "name": "Patna to Jamshedpur Packers and Movers",
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
                "name": "How much does shifting cost from Patna to Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Relocation rates from Patna to Jamshedpur typically range from ₹11,000 to ₹18,000 for a 1 BHK home, ₹16,500 to ₹27,000 for a 2 BHK apartment, and ₹24,000 to ₹38,000 for a 3 BHK residence. A two-wheeler courier costs ₹3,200 to ₹5,200, while enclosed car transport ranges between ₹10,500 and ₹17,000."
                }
            },
            {
                "@type": "Question",
                "name": "What is the transit duration between Patna and Jamshedpur via NH-22 & NH-33?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The highway distance is approximately 470 km via Jehanabad, Gaya, Dobhi, Barhi, Hazaribagh, Ranchi bypass, and Chandil on NH-22 and NH-33. Our dedicated container trucks generally complete this transit within 10 to 12 hours."
                }
            },
            {
                "@type": "Question",
                "name": "Do you provide GST invoices for government and PSU employee relocations?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, we provide 100% compliant documentation packages including GST invoices, IBA-standard consignment notes, computerized packing lists, and transit insurance policies for employees of state government, central government, railways, and public sector banks."
                }
            },
            {
                "@type": "Question",
                "name": "Which areas in Jamshedpur do you deliver to?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We offer complete doorstep unloading, room setup, and furniture assembly across all Jamshedpur localities including Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Golmuri, Baridih, Mango, Jugsalai, and Adityapur Industrial Area."
                }
            },
            {
                "@type": "Question",
                "name": "How do you protect household furniture and appliances during 470 km of transit?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We deploy a five-tier protection standard: air bubble wraps for delicate items, corrugated edge corner protectors for wooden furniture, heavy stretch film for dustproofing, strong multi-ply carton boxes, and heavy-duty container lashing straps to eliminate shift during highway turns."
                }
            },
            {
                "@type": "Question",
                "name": "Can you transport my bike or scooter alongside household goods?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes. We package two-wheelers with multi-layer bubble wrap and corrugated padding, drain the fuel safely according to highway norms, and strap them securely upright inside the container body."
                }
            },
            {
                "@type": "Question",
                "name": "Is transit insurance coverage included for the interstate journey?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Yes, all-risk transit insurance is provided for every interstate journey from Patna to Jamshedpur. Coverage covers unforeseen events including accidents, overturning, and severe transit weather."
                }
            },
            {
                "@type": "Question",
                "name": "How early should I book my move from Patna to Jamshedpur?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "We suggest booking 2 to 4 days in advance to reserve your preferred container truck size and survey slot, though express same-day emergency booking is also accommodated subject to fleet availability."
                }
            }
        ]
    }
    </script>
</head>
<body>
    <?php include_once __DIR__ . '/../includes/header.php'; ?>

    <!-- HERO SECTION -->
    <section class="pat2jsr-hero">
        <div class="container">
            <div class="pat2jsr-hero-grid">
                <div>
                    <span class="pat2jsr-badge">
                        <svg width="16" height="16" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path></svg>
                        Bihar to Jharkhand Premier Shifting Route
                    </span>
                    <h1>Patna to Jamshedpur Packers and Movers</h1>
                    <p>Relocating from Bihar's Capital City to Jharkhand's Industrial Hub? Shree Ashirwad Packers and Movers delivers certified, stress-free intercity moving services along the 470 km highway corridor via NH-22 and NH-33. With five-layer multi-barrier packaging, IBA-approved documentation, dedicated container vehicles, and room-specific setup across all Jamshedpur neighborhoods, your home and vehicle relocation is in the safest hands.</p>
                    
                    <div class="pat2jsr-highlights">
                        <div class="pat2jsr-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>10–12 Hours Express Highway Transit</span>
                        </div>
                        <div class="pat2jsr-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>5-Layer Industrial Heavy-Duty Packaging</span>
                        </div>
                        <div class="pat2jsr-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>Govt, PSU & Bank Transfer Claim Bills</span>
                        </div>
                        <div class="pat2jsr-hl-item">
                            <svg fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7"></path></svg>
                            <span>All-Risk Comprehensive Transit Insurance</span>
                        </div>
                    </div>
                </div>

                <div>
                    <div class="pat2jsr-quick-contact">
                        <h3>Get Jamshedpur Quote</h3>
                        <p>Transparent rates with zero hidden charges.</p>
                        
                        <div class="pat2jsr-route-meta">
                            <div>
                                <span>Highways</span>
                                <strong>NH-22 & 33</strong>
                            </div>
                            <div>
                                <span>Distance</span>
                                <strong>~470 KM</strong>
                            </div>
                            <div>
                                <span>Transit</span>
                                <strong>10–12 Hrs</strong>
                            </div>
                        </div>

                        <form action="<?php echo SITE_BASE_URL; ?>/contact" method="GET">
                            <input type="hidden" name="source" value="patna-to-jamshedpur">
                            <div style="margin-bottom: 12px;">
                                <label style="display:block; font-size:0.78rem; font-weight:700; color:#475569; margin-bottom:4px;">PICKUP LOCATION IN PATNA</label>
                                <input type="text" placeholder="e.g. Bailey Road, Kankarbagh, Boring Road, Danapur" style="width:100%; padding:10px 12px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;" required>
                            </div>
                            <div style="margin-bottom: 12px;">
                                <label style="display:block; font-size:0.78rem; font-weight:700; color:#475569; margin-bottom:4px;">DESTINATION AREA IN JAMSHEDPUR</label>
                                <input type="text" placeholder="e.g. Bistupur, Kadma, Telco, Sonari, Mango" style="width:100%; padding:10px 12px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;" required>
                            </div>
                            <div style="margin-bottom: 16px;">
                                <label style="display:block; font-size:0.78rem; font-weight:700; color:#475569; margin-bottom:4px;">YOUR MOBILE NUMBER</label>
                                <input type="tel" placeholder="10-digit mobile number" style="width:100%; padding:10px 12px; border:1px solid #cbd5e1; border-radius:6px; font-size:0.9rem;" required pattern="[0-9]{10}">
                            </div>
                            <button type="submit" class="pat2jsr-btn-call" style="width:100%; border:none; cursor:pointer;">
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
    <section class="pat2jsr-section">
        <div class="container">
            <div class="pat2jsr-sec-title">
                <h2>Patna to Jamshedpur Route Logistics & Highway Details</h2>
                <p>Strategic interstate transport planning along National Highway 22 and National Highway 33 connecting Central Bihar to East Singhbhum.</p>
            </div>

            <div class="pat2jsr-route-details">
                <h3>Navigating NH-22 & NH-33: The 470 KM Interstate Conduit</h3>
                <p>The interstate highway connecting Patna to Jamshedpur spans approximately 470 kilometers across Bihar and Jharkhand. Departing Patna along the New Bypass / Anisabad road, our container trucks travel along National Highway 22 (NH-22) south through Jehanabad, Gaya, and Dobhi toward Barhi on the Jharkhand border. At Barhi, the route merges onto National Highway 20 / NH-33 passing Hazaribagh, Ormanjhi, and the Ranchi outer ring road before continuing through Bundu, Tamar, and Chandil directly into Jamshedpur.</p>
                
                <p>Because this corridor traverses dense agricultural settlements in South Bihar and the rising plateau roads of Jharkhand, disciplined navigation is essential. Shree Ashirwad Packers and Movers deploys dual-driver long-haul crews on this route. Our heavy-duty container trucks are outfitted with air-suspension cabins, high-traction tires, and sealed cargo beds that protect against rain, dust, and highway vibrations.</p>

                <p>In Jamshedpur, our delivery teams coordinate with residential welfare societies and apartment authorities across Bistupur, Sakchi, Telco, Kadma, and Adityapur, scheduling delivery hours that bypass municipal traffic restrictions and ensure prompt, quiet room assembly.</p>
            </div>

            <div class="pat2jsr-cards-grid">
                <div class="pat2jsr-card">
                    <div class="pat2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                    <h4>Dedicated Long-Haul Fleet</h4>
                    <p>Exclusive container trucks assigned to your consignment. No mid-route unloading, no co-loading confusion, and zero transfer damage across the 470 km journey.</p>
                </div>

                <div class="pat2jsr-card">
                    <div class="pat2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path></svg>
                    </div>
                    <h4>All-Weather Sealed Enclosures</h4>
                    <p>Hermetically sealed container boxes protect your electronics, sofas, and wardrobe against monsoon rain, dust storms, and highway exhaust grime.</p>
                </div>

                <div class="pat2jsr-card">
                    <div class="pat2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path></svg>
                    </div>
                    <h4>Official Government Claim Bills</h4>
                    <p>IBA-approved consignment notes, 100% itemized GST invoices, and transit insurance certificates formatted for government, bank, and PSU employee transfer reimbursements.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- COMPREHENSIVE SERVICE PORTFOLIO -->
    <section class="pat2jsr-section pat2jsr-section-alt">
        <div class="container">
            <div class="pat2jsr-sec-title">
                <h2>Tailored Relocation Services from Patna to Jamshedpur</h2>
                <p>Complete shifting solutions designed for modern families, government officers, vehicle owners, and commercial establishments.</p>
            </div>

            <div class="pat2jsr-cards-grid">
                <div class="pat2jsr-card">
                    <div class="pat2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                    </div>
                    <h4>Household Shifting & Apartment Relocation</h4>
                    <p>Full-service home shifting from Patna to Jamshedpur. Includes multi-layer packing for kitchenware, dismantling of wardrobes and beds, secure loading, and room-by-room unpacking.</p>
                </div>

                <div class="pat2jsr-card">
                    <div class="pat2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                    </div>
                    <h4>Government, Bank & PSU Officer Relocation</h4>
                    <p>Specialized moving services for officers transferring between Bihar and Jharkhand administrative cadres, public sector banks, railways, and judicial services with complete billing compliance.</p>
                </div>

                <div class="pat2jsr-card">
                    <div class="pat2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path></svg>
                    </div>
                    <h4>Two-Wheeler Bike & Scooter Transport</h4>
                    <p>Safe bike parcel service from Patna to Jamshedpur. Packed with heavy bubble film, mirror wraps, and securely strapped upright inside our enclosed vehicle carriers.</p>
                </div>

                <div class="pat2jsr-card">
                    <div class="pat2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
                    </div>
                    <h4>Enclosed Car Carrier Transportation</h4>
                    <p>Dedicated car transport for hatchbacks, sedans, and SUVs. Loaded onto hydraulic car carriers with wheel locks and transit insurance, avoiding 470 km of highway wear and tear.</p>
                </div>

                <div class="pat2jsr-card">
                    <div class="pat2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path></svg>
                    </div>
                    <h4>Commercial & Office Asset Relocation</h4>
                    <p>Professional packing and transport for corporate branch offices, conference room furniture, desktop units, and records with systematic numbering and setup in Jamshedpur.</p>
                </div>

                <div class="pat2jsr-card">
                    <div class="pat2jsr-card-icon">
                        <svg width="24" height="24" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4"></path></svg>
                    </div>
                    <h4>Short & Long-Term Storage in Jamshedpur</h4>
                    <p>Clean, secure, 24/7 guarded warehouse facilities in Jamshedpur for clients waiting for apartment handovers, tenancy starts, or renovation completions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- VERIFIED PHOTOGRAPHIC SHOWCASE -->
    <section class="pat2jsr-section">
        <div class="container">
            <div class="pat2jsr-sec-title">
                <h2>Verified Packing & Moving Operations in Action</h2>
                <p>Authentic photographic documentation showcasing our daily fleet transit, multi-layer packing techniques, car carriers, and destination setup.</p>
            </div>

            <div class="pat2jsr-gallery-grid">
                <div class="pat2jsr-gallery-item">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Enclosed Container Truck for Safe Highway Transit between Patna and Jamshedpur" loading="lazy">
                    <div class="pat2jsr-gallery-caption">All-Weather Closed Container Fleet</div>
                </div>
                <div class="pat2jsr-gallery-item">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Multi-Layer Household Packing for Furniture and Electronics" loading="lazy">
                    <div class="pat2jsr-gallery-caption">5-Layer Protective Furniture Packing</div>
                </div>
                <div class="pat2jsr-gallery-item">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Dedicated Vehicle Carrier for Car and Bike Moving" loading="lazy">
                    <div class="pat2jsr-gallery-caption">Hydraulic Vehicle Carrier Transit</div>
                </div>
                <div class="pat2jsr-gallery-item">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/unpacking-and-setup-service-ranchi.jpg" alt="Doorstep Unloading and Furniture Setup in Jamshedpur" loading="lazy">
                    <div class="pat2jsr-gallery-caption">Room-by-Room Setup in Jamshedpur</div>
                </div>
            </div>
        </div>
    </section>

    <!-- TRANSPARENT PRICING & COST ESTIMATES -->
    <section class="pat2jsr-section pat2jsr-section-alt">
        <div class="container">
            <div class="pat2jsr-sec-title">
                <h2>Patna to Jamshedpur Shifting Charges & Rate Card</h2>
                <p>Transparent rates for the 470 km interstate NH-22 & NH-33 corridor. Zero hidden fees or surprise destination unloading taxes.</p>
            </div>

            <div class="pat2jsr-table-wrapper">
                <table class="pat2jsr-table">
                    <thead>
                        <tr>
                            <th>Relocation Type / Home Size</th>
                            <th>Packing Material & Labour</th>
                            <th>Transport & Fuel (470 KM)</th>
                            <th>Approximate Total Cost</th>
                            <th>Transit Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><strong>1 RK / 1 BHK Apartment</strong></td>
                            <td>₹4,000 - ₹6,500</td>
                            <td>₹7,000 - ₹11,500</td>
                            <td><strong>₹11,000 - ₹18,000</strong></td>
                            <td>10–12 Hours (Next Morning)</td>
                        </tr>
                        <tr>
                            <td><strong>2 BHK Complete Household</strong></td>
                            <td>₹6,500 - ₹9,500</td>
                            <td>₹10,000 - ₹17,500</td>
                            <td><strong>₹16,500 - ₹27,000</strong></td>
                            <td>10–12 Hours (Next Morning)</td>
                        </tr>
                        <tr>
                            <td><strong>3 BHK Spacious Residence</strong></td>
                            <td>₹9,000 - ₹14,000</td>
                            <td>₹15,000 - ₹24,000</td>
                            <td><strong>₹24,000 - ₹38,000</strong></td>
                            <td>12–14 Hours (Next Morning)</td>
                        </tr>
                        <tr>
                            <td><strong>4 BHK / Independent Bungalow</strong></td>
                            <td>₹12,000 - ₹19,000</td>
                            <td>₹20,000 - ₹33,000</td>
                            <td><strong>₹32,000 - ₹52,000</strong></td>
                            <td>14–16 Hours (Next Day)</td>
                        </tr>
                        <tr>
                            <td><strong>Motorcycle / Scooter Parcel</strong></td>
                            <td>₹1,000 - ₹1,800</td>
                            <td>₹2,200 - ₹3,400</td>
                            <td><strong>₹3,200 - ₹5,200</strong></td>
                            <td>24–36 Hours Delivery</td>
                        </tr>
                        <tr>
                            <td><strong>Car Transport (Hatchback/Sedan)</strong></td>
                            <td>₹2,000 - ₹3,000</td>
                            <td>₹8,500 - ₹14,000</td>
                            <td><strong>₹10,500 - ₹17,000</strong></td>
                            <td>24–48 Hours Delivery</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <p style="font-size:0.85rem; color:#64748b; text-align:center;">*Note: Final prices depend on the exact inventory volume, floor levels, elevator availability at pickup/destination, and optional transit insurance value declaration.</p>
        </div>
    </section>

    <!-- STEP-BY-STEP MOVING WORKFLOW -->
    <section class="pat2jsr-section">
        <div class="container">
            <div class="pat2jsr-sec-title">
                <h2>Our Proven 5-Step Interstate Moving Workflow</h2>
                <p>A systematic process designed to eliminate moving stress and ensure maximum asset safety from Patna to Jamshedpur.</p>
            </div>

            <div class="pat2jsr-timeline">
                <div class="pat2jsr-timeline-step">
                    <div class="pat2jsr-step-number">1</div>
                    <div class="pat2jsr-step-content">
                        <h4>Pre-Move Survey & Accurate Estimate</h4>
                        <p>We review your goods via home visit or video call in Patna, list high-value items, evaluate floor accessibility, and offer a transparent written rate quote.</p>
                    </div>
                </div>

                <div class="pat2jsr-timeline-step">
                    <div class="pat2jsr-step-number">2</div>
                    <div class="pat2jsr-step-content">
                        <h4>Multi-Layer Industrial Grade Packing</h4>
                        <p>Our skilled packers wrap delicate glassware in bubble wrap, pack garments into sturdy cartons, pad furniture with corrugated rolls, and apply shrink film to secure each piece.</p>
                    </div>
                </div>

                <div class="pat2jsr-timeline-step">
                    <div class="pat2jsr-step-number">3</div>
                    <div class="pat2jsr-step-content">
                        <h4>Scientific Vehicle Loading & Weight Distribution</h4>
                        <p>Heavy goods are placed on the truck floor with secure harness straps, mattresses and mirrors are kept upright against padded interior walls, and lighter boxes are stacked neatly on top.</p>
                    </div>
                </div>

                <div class="pat2jsr-timeline-step">
                    <div class="pat2jsr-step-number">4</div>
                    <div class="pat2jsr-step-content">
                        <h4>Direct Highway Transit via NH-22 & NH-33</h4>
                        <p>Our seasoned intercity drivers navigate the 470 km route steadily through Gaya, Barhi, Hazaribagh, and Ranchi bypass, keeping speed limits checked and communicating live progress.</p>
                    </div>
                </div>

                <div class="pat2jsr-timeline-step">
                    <div class="pat2jsr-step-number">5</div>
                    <div class="pat2jsr-step-content">
                        <h4>Doorstep Unloading, Reassembly & Cleanup</h4>
                        <p>At your new Jamshedpur address, we unload every carton, carry heavy pieces to their designated rooms, reassemble beds and tables, and clear out all used packing waste.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- LOCALITIES SERVED IN BOTH CITIES -->
    <section class="pat2jsr-section pat2jsr-section-alt">
        <div class="container">
            <div class="pat2jsr-sec-title">
                <h2>Comprehensive Locality Coverage in Patna & Jamshedpur</h2>
                <p>Door-to-door service across all residential colonies, commercial districts, and suburbs in both cities.</p>
            </div>

            <div class="pat2jsr-cards-grid" style="grid-template-columns: repeat(2, 1fr);">
                <div class="pat2jsr-card">
                    <h4>Pickup Localities Across Patna</h4>
                    <p style="margin-bottom: 12px;">We provide comprehensive doorstep packing and vehicle loading across all sectors of Greater Patna:</p>
                    <ul style="font-size:0.92rem; color:var(--pat2jsr-text); line-height:1.7; padding-left:18px;">
                        <li><strong>Bailey Road, Saguna More & Danapur:</strong> Thriving high-rise residential apartment corridors.</li>
                        <li><strong>Boring Road, Patliputra Colony & Fraser Road:</strong> Prestigious central residential and commercial enclaves.</li>
                        <li><strong>Kankarbagh, Rajendra Nagar & Hanuman Nagar:</strong> Large residential sectors with extensive family colonies.</li>
                        <li><strong>Anisabad, Phulwari Sharif & Khagaul:</strong> Rapidly expanding residential sectors in western Patna.</li>
                        <li><strong>Ashiana Nagar, Digha & Gandhi Maidan Area:</strong> Established administrative, academic, and business hubs.</li>
                    </ul>
                </div>

                <div class="pat2jsr-card">
                    <h4>Delivery Sectors Across Jamshedpur</h4>
                    <p style="margin-bottom: 12px;">Direct unloading, placement, and reassembly across all major steel city neighborhoods:</p>
                    <ul style="font-size:0.92rem; color:var(--pat2jsr-text); line-height:1.7; padding-left:18px;">
                        <li><strong>Bistupur, Sakchi & Northern Town:</strong> Central commercial areas and executive residential enclaves.</li>
                        <li><strong>Kadma, Sonari & Circuit House Area:</strong> Established family neighborhoods and modern riverfront apartments.</li>
                        <li><strong>Telco Colony, Golmuri & Baridih:</strong> Industrial township colonies, Tata Motors residential sectors, and gated communities.</li>
                        <li><strong>Adityapur & Gamharia:</strong> Industrial corridors, engineering hubs, and modern residential developments.</li>
                        <li><strong>Mango & Jugsalai:</strong> Expanding residential sectors with direct access to highway corridors.</li>
                    </ul>
                </div>
            </div>

            <div class="pat2jsr-cta-banner">
                <h3>Planning Your Move from Patna to Jamshedpur?</h3>
                <p>Relocate smoothly with Eastern India's most dependable packers and movers. Call us today for customized corporate rates and guaranteed delivery schedules.</p>
                <div class="pat2jsr-cta-actions">
                    <a href="tel:+918409531615" class="pat2jsr-btn-call">
                        <svg width="20" height="20" fill="currentColor" viewBox="0 0 20 20"><path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 4V3z"></path></svg>
                        Call +91-8409531615
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/contact" class="pat2jsr-cta-btn-alt">
                        Request Written Estimate
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- FREQUENTLY ASKED QUESTIONS SECTION -->
    <section class="pat2jsr-section">
        <div class="container">
            <div class="pat2jsr-sec-title">
                <h2>Frequently Asked Questions: Patna to Jamshedpur Shifting</h2>
                <p>Helpful answers to common queries regarding pricing, transit timelines, and corporate bills on this route.</p>
            </div>

            <div style="max-width: 860px; margin: 0 auto;">
                <div class="pat2jsr-faq-item">
                    <h4>How much does shifting cost from Patna to Jamshedpur?</h4>
                    <p>Relocation rates from Patna to Jamshedpur typically range from ₹11,000 to ₹18,000 for a 1 BHK home, ₹16,500 to ₹27,000 for a 2 BHK apartment, and ₹24,000 to ₹38,000 for a 3 BHK residence. A two-wheeler courier costs ₹3,200 to ₹5,200, while enclosed car transport ranges between ₹10,500 and ₹17,000.</p>
                </div>

                <div class="pat2jsr-faq-item">
                    <h4>What is the transit duration between Patna and Jamshedpur via NH-22 & NH-33?</h4>
                    <p>The highway distance is approximately 470 km via Jehanabad, Gaya, Dobhi, Barhi, Hazaribagh, Ranchi bypass, and Chandil on NH-22 and NH-33. Our dedicated container trucks generally complete this transit within 10 to 12 hours.</p>
                </div>

                <div class="pat2jsr-faq-item">
                    <h4>Do you provide GST invoices for government and PSU employee relocations?</h4>
                    <p>Yes, we provide 100% compliant documentation packages including GST invoices, IBA-standard consignment notes, computerized packing lists, and transit insurance policies for employees of state government, central government, railways, and public sector banks.</p>
                </div>

                <div class="pat2jsr-faq-item">
                    <h4>Which areas in Jamshedpur do you deliver to?</h4>
                    <p>We offer complete doorstep unloading, room setup, and furniture assembly across all Jamshedpur localities including Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Golmuri, Baridih, Mango, Jugsalai, and Adityapur Industrial Area.</p>
                </div>

                <div class="pat2jsr-faq-item">
                    <h4>How do you protect household furniture and appliances during 470 km of transit?</h4>
                    <p>We deploy a five-tier protection standard: air bubble wraps for delicate items, corrugated edge corner protectors for wooden furniture, heavy stretch film for dustproofing, strong multi-ply carton boxes, and heavy-duty container lashing straps to eliminate shift during highway turns.</p>
                </div>

                <div class="pat2jsr-faq-item">
                    <h4>Can you transport my bike or scooter alongside household goods?</h4>
                    <p>Yes. We package two-wheelers with multi-layer bubble wrap and corrugated padding, drain the fuel safely according to highway norms, and strap them securely upright inside the container body.</p>
                </div>

                <div class="pat2jsr-faq-item">
                    <h4>Is transit insurance coverage included for the interstate journey?</h4>
                    <p>Yes, all-risk transit insurance is provided for every interstate journey from Patna to Jamshedpur. Coverage covers unforeseen events including accidents, overturning, and severe transit weather.</p>
                </div>

                <div class="pat2jsr-faq-item">
                    <h4>How early should I book my move from Patna to Jamshedpur?</h4>
                    <p>We suggest booking 2 to 4 days in advance to reserve your preferred container truck size and survey slot, though express same-day emergency booking is also accommodated subject to fleet availability.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include_once __DIR__ . '/../includes/footer.php'; ?>
</body>
</html>
