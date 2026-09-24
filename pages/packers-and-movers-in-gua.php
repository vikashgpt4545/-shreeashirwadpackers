<?php
/**
 * Packers and Movers in Gua - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Gua, SAIL Ore Mines, Barajamda, Noamundi & West Singhbhum, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Gua - 8409531615 | Shree Ashirwad Packers";
$page_description = "ISO certified packers and movers in Gua, West Singhbhum. Safe household shifting, SAIL iron ore mining quarters moves, car transport, Saranda corridor transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in gua, movers and packers gua west singhbhum, sail gua packers and movers, gua iron ore mine shifting, car transport gua, bike courier gua, packers and movers noamundi";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-gua";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($page_keywords); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>" />
    <meta name="robots" content="index, follow">

    <!-- Open Graph Data -->
    <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo $canonical_url; ?>">
    <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
    <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg">

    <!-- CSS & Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Structured Data: MovingCompany -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers - Gua",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 58000",
        "keywords": "packers and movers in gua, movers and packers gua west singhbhum, sail gua packers and movers, gua iron ore mine shifting, car transport gua, bike courier gua, packers and movers noamundi",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Main Road, Near SAIL Hospital & Gua Railway Station Chowk",
        "addressLocality": "Gua",
        "addressRegion": "Jharkhand",
        "postalCode": "833213",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 22.2033,
        "longitude": 85.3853
      },
      "openingHoursSpecification": {
        "@type": "OpeningHoursSpecification",
        "dayOfWeek": [
          "Monday",
          "Tuesday",
          "Wednesday",
          "Thursday",
          "Friday",
          "Saturday",
          "Sunday"
        ],
        "opens": "00:00",
        "closes": "23:59"
      },
      "sameAs": [
        "https://www.facebook.com/shreeashirwadpackers",
        "https://www.shreeashirwadpackers.com"
      ],
      "areaServed": [
        {
          "@type": "AdministrativeArea",
          "name": "Gua"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Barajamda"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Noamundi"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Chiria"
        },
        {
          "@type": "AdministrativeArea",
          "name": "West Singhbhum"
        }
      ]
    }
    </script>

    <!-- Structured Data: BreadcrumbList -->
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
          "name": "Jharkhand",
          "item": "<?php echo SITE_BASE_URL; ?>/#service-areas"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Packers and Movers in Gua",
          "item": "<?php echo $canonical_url; ?>"
        }
      ]
    }
    </script>

    <!-- Structured Data: FAQPage -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Do you provide official claim-compliant documentation for SAIL employees shifting from Gua?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Shree Ashirwad Packers specializes in PSU employee relocations for Steel Authority of India Limited (SAIL - Raw Materials Division / Bokaro Steel Plant) personnel stationed at Gua Ore Mines. We provide computerized GST invoices, consignment receipts (LR), signed inventory declaration lists, and transit insurance certificates fully accepted by SAIL finance and administration claim departments."
          }
        },
        {
          "@type": "Question",
          "name": "How are moving charges calculated for shifting from Gua to Bokaro Steel City or Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Moving charges from Gua depend on shipment volume (1 BHK, 2 BHK, 3 BHK, or executive quarters), packing tier, and transit destination. Shifting a standard 2 BHK household from Gua to Bokaro Steel City (approx 210 km) ranges from Rs 13,000 to Rs 22,000, while shifting to Ranchi (approx 190 km) ranges from Rs 12,000 to Rs 20,000 with 5-layer shockproof packing, loading, highway toll taxes, and transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect furniture and household goods from red iron ore dust in Gua?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Because Gua is an active opencast iron ore mining area surrounded by red hematite dust, we seal all furniture, mattresses, electronics, and cartons with an impermeable 5-tier system: virgin bubble wrap, heavy corrugated sheets, foam edge protectors, moisture desiccants, and multiple layers of industrial stretch film that completely blocks red dust and soot infiltration."
          }
        },
        {
          "@type": "Question",
          "name": "Can you transport private cars and motorcycles safely through the Saranda forest ghats?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer door-to-door vehicle transport from Gua across India using heavy-duty enclosed auto trailers and wheel-locked bike carriers. All vehicles receive wheel chocking, protective bumper covers, multi-point nylon strapping, and full transit insurance coverage."
          }
        },
        {
          "@type": "Question",
          "name": "Do you serve surrounding mining townships like Barajamda, Noamundi, and Chiria?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our operational network covers Gua Township, SAIL Mines Colony, Barajamda, Noamundi (Tata Steel mining belt), Chiria mines, Jamda, and all surrounding settlements across the Saranda forest basin in West Singhbhum."
          }
        },
        {
          "@type": "Question",
          "name": "How much advance notice is required to book a move in Gua?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Because Gua is situated in a forest hill corridor, we recommend booking 2 to 4 days in advance for regional moves to Jamshedpur or Bokaro, and 4 to 6 days ahead for long-haul interstate moves to Delhi, Kolkata, Bhilai, or Bangalore. This allows us to arrange dedicated closed container vehicles and forest transit clearances."
          }
        },
        {
          "@type": "Question",
          "name": "Do your workers handle furniture dismantling and reassembly at the destination?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our skilled carpentry technicians dismantle modular king-size beds, steel almirahs, dining tables, and modular storage units with proper tools, packing each screw and fitting securely, and reassemble everything perfectly in your new home."
          }
        },
        {
          "@type": "Question",
          "name": "Is transit insurance mandatory, and what risks are covered?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "While transit insurance is optional, it is strongly recommended for forest and ghat roads. Our comprehensive transit insurance policies cover physical damage caused by road overturn, vehicle collisions, fire, heavy rainfall, or theft, with fast claim surveyor support."
          }
        }
      ]
    }
    </script>

    <style>
        :root {
            --primary-navy: #0f172a;
            --primary-accent: #b91c1c;
            --primary-hover: #991b1b;
            --secondary-amber: #f59e0b;
            --neutral-bg: #f8fafc;
            --card-border: #e2e8f0;
            --text-dark: #1e293b;
            --text-muted: #64748b;
        }

        .gua-hero {
            background: linear-gradient(135deg, #7f1d1d 0%, #0f172a 100%);
            color: #ffffff;
            padding: 70px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .gua-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at top right, rgba(185, 28, 28, 0.25), transparent 65%);
            pointer-events: none;
        }

        .hero-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            position: relative;
            z-index: 2;
            display: grid;
            grid-template-columns: 1.2fr 0.8fr;
            gap: 40px;
            align-items: center;
        }

        .hero-badge {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(185, 28, 28, 0.25);
            border: 1px solid rgba(248, 113, 113, 0.35);
            color: #fca5a5;
            padding: 6px 14px;
            border-radius: 50px;
            font-size: 0.88rem;
            font-weight: 600;
            margin-bottom: 20px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .hero-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.8rem;
            line-height: 1.2;
            font-weight: 800;
            color: #ffffff;
            margin-bottom: 18px;
        }

        .hero-title span {
            color: #f87171;
        }

        .hero-desc {
            font-size: 1.1rem;
            line-height: 1.65;
            color: #fee2e2;
            margin-bottom: 25px;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 30px;
            padding: 18px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid rgba(255, 255, 255, 0.12);
            border-radius: 12px;
        }

        .stat-item h4 {
            font-size: 1.5rem;
            font-weight: 700;
            color: #f59e0b;
            margin: 0 0 4px;
            font-family: 'Outfit', sans-serif;
        }

        .stat-item p {
            font-size: 0.82rem;
            color: #fecaca;
            margin: 0;
            line-height: 1.3;
        }

        .hero-actions {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .btn-call-primary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: #f59e0b;
            color: #0f172a;
            padding: 14px 26px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(245, 158, 11, 0.3);
        }

        .btn-call-primary:hover {
            background: #d97706;
            color: #ffffff;
            transform: translateY(-2px);
        }

        .btn-quote-secondary {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            background: rgba(255, 255, 255, 0.1);
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 14px 24px;
            border-radius: 8px;
            font-weight: 600;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        .btn-quote-secondary:hover {
            background: rgba(255, 255, 255, 0.2);
            color: #ffffff;
        }

        .hero-form-card {
            background: #ffffff;
            border-radius: 14px;
            padding: 30px;
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.25);
            color: var(--text-dark);
        }

        .hero-form-card h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.45rem;
            font-weight: 700;
            color: var(--primary-navy);
            margin: 0 0 8px;
        }

        .hero-form-card p {
            font-size: 0.88rem;
            color: var(--text-muted);
            margin-bottom: 20px;
        }

        .form-group-field {
            margin-bottom: 15px;
        }

        .form-group-field label {
            display: block;
            font-size: 0.82rem;
            font-weight: 600;
            color: #475569;
            margin-bottom: 5px;
        }

        .form-group-field input,
        .form-group-field select {
            width: 100%;
            padding: 11px 13px;
            border: 1px solid var(--card-border);
            border-radius: 6px;
            font-size: 0.9rem;
            color: #1e293b;
            background: #f8fafc;
            outline: none;
            transition: border-color 0.3s;
        }

        .form-group-field input:focus,
        .form-group-field select:focus {
            border-color: var(--primary-accent);
            background: #ffffff;
        }

        .btn-submit-quote {
            width: 100%;
            padding: 13px;
            background: #b91c1c;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-submit-quote:hover {
            background: #991b1b;
        }

        .trust-strip {
            background: #7f1d1d;
            color: #fee2e2;
            padding: 16px 0;
            font-size: 0.88rem;
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .trust-grid {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }

        .trust-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .trust-item i {
            color: #fca5a5;
            font-size: 1.1rem;
        }

        .page-content-wrapper {
            max-width: 1200px;
            margin: 0 auto;
            padding: 60px 20px;
            font-family: 'Inter', sans-serif;
            color: var(--text-dark);
            line-height: 1.7;
        }

        .section-header {
            text-align: center;
            max-width: 820px;
            margin: 0 auto 50px;
        }

        .section-tag {
            color: #b91c1c;
            font-weight: 700;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-size: 0.85rem;
            display: block;
            margin-bottom: 8px;
        }

        .section-title {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            color: var(--primary-navy);
            line-height: 1.3;
            margin: 0 0 15px;
        }

        .section-intro {
            font-size: 1.05rem;
            color: var(--text-muted);
            line-height: 1.65;
        }

        .content-block {
            margin-bottom: 60px;
        }

        .content-block h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.95rem;
            font-weight: 700;
            color: var(--primary-navy);
            margin: 0 0 20px;
            border-left: 5px solid #b91c1c;
            padding-left: 15px;
        }

        .content-block h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.45rem;
            font-weight: 600;
            color: #991b1b;
            margin: 25px 0 12px;
        }

        .content-block p {
            margin-bottom: 18px;
            font-size: 1rem;
            color: #334155;
            text-align: justify;
        }

        .services-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 30px;
            margin: 40px 0;
        }

        .service-card {
            background: #ffffff;
            border: 1px solid var(--card-border);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.04);
            display: flex;
            flex-direction: column;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .service-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.08);
        }

        .service-img-wrap {
            position: relative;
            width: 100%;
            max-width: 420px;
            aspect-ratio: 3/4;
            margin: 0 auto;
            overflow: hidden;
            background: #f1f5f9;
        }

        .service-img-wrap img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            transition: transform 0.4s ease;
        }

        .service-card:hover .service-img-wrap img {
            transform: scale(1.04);
        }

        .service-body {
            padding: 24px;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .service-body h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.35rem;
            font-weight: 700;
            color: var(--primary-navy);
            margin: 0 0 10px;
        }

        .service-body p {
            font-size: 0.95rem;
            color: #475569;
            margin-bottom: 15px;
            line-height: 1.6;
        }

        .service-features {
            list-style: none;
            padding: 0;
            margin: 0 0 15px;
        }

        .service-features li {
            font-size: 0.88rem;
            color: #334155;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .service-features li i {
            color: #10b981;
            font-size: 0.9rem;
        }

        .method-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 20px;
            margin: 35px 0;
        }

        .method-card {
            background: #ffffff;
            border: 1px solid var(--card-border);
            border-radius: 10px;
            padding: 22px;
            position: relative;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.03);
        }

        .step-number {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 38px;
            height: 38px;
            background: #b91c1c;
            color: #ffffff;
            font-weight: 700;
            font-size: 1.1rem;
            border-radius: 50%;
            margin-bottom: 15px;
        }

        .method-card h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.15rem;
            font-weight: 700;
            color: var(--primary-navy);
            margin: 0 0 10px;
        }

        .method-card p {
            font-size: 0.88rem;
            color: #475569;
            margin: 0;
            line-height: 1.55;
        }

        .data-table-container {
            overflow-x: auto;
            background: #ffffff;
            border-radius: 10px;
            border: 1px solid var(--card-border);
            box-shadow: 0 6px 18px rgba(0,0,0,0.04);
            margin: 30px 0 45px;
        }

        .custom-data-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.92rem;
            text-align: left;
        }

        .custom-data-table th {
            background: #7f1d1d;
            color: #ffffff;
            padding: 14px 18px;
            font-weight: 600;
            font-family: 'Outfit', sans-serif;
            border-bottom: 2px solid #991b1b;
        }

        .custom-data-table td {
            padding: 13px 18px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }

        .custom-data-table tr:nth-child(even) {
            background: #f8fafc;
        }

        .custom-data-table tr:hover {
            background: #fef2f2;
        }

        .localities-cloud {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin: 25px 0;
        }

        .locality-tag {
            background: #ffffff;
            border: 1px solid #cbd5e1;
            padding: 8px 16px;
            border-radius: 20px;
            font-size: 0.9rem;
            color: #1e293b;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
            gap: 6px;
            transition: all 0.2s ease;
        }

        .locality-tag i {
            color: #b91c1c;
            font-size: 0.8rem;
        }

        .locality-tag:hover {
            border-color: #b91c1c;
            background: #fef2f2;
            color: #991b1b;
        }

        .why-us-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 25px;
            margin: 35px 0;
        }

        .why-card {
            background: #ffffff;
            border-radius: 10px;
            padding: 24px;
            border: 1px solid var(--card-border);
            box-shadow: 0 4px 14px rgba(0,0,0,0.03);
        }

        .why-icon {
            width: 50px;
            height: 50px;
            border-radius: 10px;
            background: #fef2f2;
            color: #b91c1c;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.3rem;
            margin-bottom: 16px;
        }

        .why-card h4 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--primary-navy);
            margin: 0 0 8px;
        }

        .why-card p {
            font-size: 0.9rem;
            color: #475569;
            margin: 0;
            line-height: 1.55;
        }

        .faq-accordion {
            margin: 30px 0;
        }

        .faq-box {
            background: #ffffff;
            border: 1px solid var(--card-border);
            border-radius: 8px;
            margin-bottom: 14px;
            overflow: hidden;
        }

        .faq-box summary {
            padding: 16px 20px;
            font-weight: 700;
            font-size: 1.02rem;
            color: var(--primary-navy);
            cursor: pointer;
            background: #ffffff;
            list-style: none;
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-family: 'Outfit', sans-serif;
        }

        .faq-box summary::-webkit-details-marker {
            display: none;
        }

        .faq-box summary::after {
            content: '\f107';
            font-family: 'Font Awesome 6 Free';
            font-weight: 900;
            font-size: 1rem;
            color: #64748b;
            transition: transform 0.3s;
        }

        .faq-box[open] summary::after {
            transform: rotate(180deg);
            color: #b91c1c;
        }

        .faq-content {
            padding: 16px 20px;
            background: #f8fafc;
            border-top: 1px solid var(--card-border);
            font-size: 0.94rem;
            color: #334155;
            line-height: 1.65;
        }

        .cta-banner-gua {
            background: linear-gradient(135deg, #7f1d1d 0%, #0f172a 100%);
            border-radius: 14px;
            padding: 50px 30px;
            color: #ffffff;
            text-align: center;
            margin: 60px 0 20px;
            box-shadow: 0 15px 35px rgba(127, 29, 29, 0.25);
        }

        .cta-banner-gua h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0 0 15px;
            color: #ffffff;
        }

        .cta-banner-gua p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.05rem;
            color: #fee2e2;
        }

        .cta-btns {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        @media (max-width: 900px) {
            .hero-container {
                grid-template-columns: 1fr;
            }
            .services-grid {
                grid-template-columns: 1fr;
            }
            .hero-title {
                font-size: 2.2rem;
            }
        }
    </style>
</head>
<body class="page-template">

<?php require_once __DIR__ . '/includes/header.php'; ?>

<!-- Hero Section -->
<section class="gua-hero">
    <div class="hero-container">
        <div class="hero-text-content">
            <div class="hero-badge">
                <i class="fa-solid fa-gem"></i> SAIL Iron Ore Mining Corridor Shifting Authority
            </div>
            <h1 class="hero-title">Reliable Packers and Movers in <span>Gua</span></h1>
            <p class="hero-desc">
                Dedicated household shifting, SAIL employee transfer solutions, and vehicle shipping across Gua, Barajamda, Noamundi, and the Saranda forest belt. Delivering five-tier dustproof packaging, closed container fleets, and comprehensive transit insurance across Jharkhand and India.
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <h4>12+ Years</h4>
                    <p>Mining Belt Moves</p>
                </div>
                <div class="stat-item">
                    <h4>6,800+</h4>
                    <p>Successful Deliveries</p>
                </div>
                <div class="stat-item">
                    <h4>100% Safe</h4>
                    <p>Transit Assurance</p>
                </div>
            </div>
            <div class="hero-actions">
                <a href="tel:+918409531615" class="btn-call-primary">
                    <i class="fa-solid fa-phone"></i> Call +91 8409531615
                </a>
                <a href="#quick-quote" class="btn-quote-secondary">
                    <i class="fa-solid fa-calculator"></i> Calculate Shifting Cost
                </a>
            </div>
        </div>

        <!-- Quick Form Card -->
        <div class="hero-form-card" id="quick-quote">
            <h3>Get Instant Moving Estimate</h3>
            <p>Accurate pricing for SAIL, CISF & private family moves</p>
            <form action="<?php echo SITE_BASE_URL; ?>/contact" method="POST">
                <div class="form-group-field">
                    <label for="lead_name"><i class="fa-solid fa-user"></i> Full Name</label>
                    <input type="text" id="lead_name" name="lead_name" placeholder="Enter your full name" required>
                </div>
                <div class="form-group-field">
                    <label for="lead_phone"><i class="fa-solid fa-phone"></i> Phone Number</label>
                    <input type="tel" id="lead_phone" name="lead_phone" placeholder="Enter 10-digit mobile number" required pattern="[0-9]{10}">
                </div>
                <div class="form-group-field">
                    <label for="move_origin"><i class="fa-solid fa-location-dot"></i> Moving From</label>
                    <input type="text" id="move_origin" name="move_origin" value="Gua / SAIL Colony" required>
                </div>
                <div class="form-group-field">
                    <label for="move_destination"><i class="fa-solid fa-map-pin"></i> Shifting Destination</label>
                    <input type="text" id="move_destination" name="move_destination" placeholder="e.g. Bokaro, Jamshedpur, Ranchi, Kolkata" required>
                </div>
                <div class="form-group-field">
                    <label for="move_size"><i class="fa-solid fa-truck-ramp-box"></i> Move Requirements</label>
                    <select id="move_size" name="move_size" required>
                        <option value="1BHK">1 BHK Household Shifting</option>
                        <option value="2BHK" selected>2 BHK Household Shifting</option>
                        <option value="3BHK">3 BHK Household Shifting</option>
                        <option value="SAIL_Officers">SAIL / CISF Officer Quarters</option>
                        <option value="Vehicle">Vehicle Transport (Car / Bike)</option>
                        <option value="Mining_Commercial">Mining Machinery Spares / Commercial</option>
                    </select>
                </div>
                <button type="submit" class="btn-submit-quote">
                    <i class="fa-solid fa-paper-plane"></i> Get Free Quotation
                </button>
            </form>
        </div>
    </div>
</section>

<!-- Trust Verification Strip -->
<div class="trust-strip">
    <div class="trust-grid">
        <div class="trust-item">
            <i class="fa-solid fa-file-invoice"></i>
            <span>Government Registered & 100% SAIL Claim Compliant</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-mountain"></i>
            <span>Specialized Saranda Forest & Ghat Suspension Fleets</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-shield-virus"></i>
            <span>Anti-Red Dust & Moisture Barrier Packaging</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-truck-moving"></i>
            <span>Direct Service Across Gua, Barajamda & Noamundi</span>
        </div>
    </div>
</div>

<!-- Main Body Content -->
<main class="page-content-wrapper">

    <!-- Section 1: In-depth Gua Relocation Ecosystem -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">West Singhbhum Mining Logistics</span>
            <h2 class="section-title">The Trusted Moving Authority for Gua and Saranda Forest</h2>
            <p class="section-intro">
                Nestled deep inside the lush sal hills of the legendary Saranda Forest along the cascading Karo River, Gua is a premier industrial mining township in West Singhbhum, Jharkhand. Widely renowned as the vital iron ore bastion of the Steel Authority of India Limited (SAIL - Raw Materials Division / Bokaro Steel Plant), Gua has supplied premium quality hematite iron ore to major public sector steel manufacturing facilities across India for decades. Shifting within or departing from this remote, forest-encircled mining enclave demands an experienced logistics transporter with robust vehicles and proven administrative documentation capability.
            </p>
        </div>

        <p>
            Shree Ashirwad Packers and Movers has managed residential relocations and official employee transfers across Gua, Barajamda, Noamundi, and the Saranda basin for more than twelve years. As senior mining engineers, geologists, metallurgical supervisors, administrative executives, and Central Industrial Security Force (CISF) officers receive transfer orders to SAIL facilities in Bokaro Steel City, Bhilai, Rourkela, Durgapur, Burnpur, or corporate headquarters in Kolkata and Delhi, our team steps in with seamless solutions. We take complete responsibility for your possessions—from packing executive residences in SAIL Officers Colony to safe arrival at your distant new residence.
        </p>

        <p>
            Operating in Gua presents unmistakable geographical and environmental conditions. The intense opencast mining operations produce fine red hematite iron ore dust that can settle into furniture upholstery, air conditioner coils, and delicate electronic circuitry. In addition, the monsoon season brings substantial humidity and rainfall along the Karo riverbed and steep forested ghat routes connecting Gua to Barajamda, Chaibasa, and Jamshedpur. Shree Ashirwad Packers neutralizes these factors through our proven 5-layer protective packing protocol: virgin bubble wrap, thick corrugated board cushions, corner impact guards, silica gel moisture desiccants, and multi-layered industrial stretch wrapping that creates an airtight, dustproof envelope around your belongings.
        </p>

        <p>
            Public sector undertaking (PSU) and corporate employees require exact documentation to settle transfer claim expenses. Shree Ashirwad Packers delivers 100% compliant paperwork: GST-registered computerized tax invoices, authenticated Lorry Receipts (LR), declared valuation inventory sheets, and comprehensive transit insurance cover notes from leading national underwriters. This guarantees prompt financial reimbursement for employees of SAIL, CISF, SBI, educational institutions, and state government departments without bureaucratic complications.
        </p>

        <p>
            Our specialized fleet includes reinforced multi-leaf suspension container trucks that effortlessly absorb the road vibrations and sharp bends of the Saranda hill roads. For residential quarters situated along narrow hill paths or older colony lanes, we utilize nimble feeder mini-trucks like the Mahindra Bolero Maxi Truck and Tata 407 to convey packed boxes smoothly to our primary highway container carriers stationed at the main road, preventing difficult manual portage and ensuring pristine cargo condition.
        </p>
    </section>

    <!-- Section 2: Core Relocation Services with Image Whitelist -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Specialized Moving Verticals</span>
            <h2 class="section-title">Comprehensive Relocation Services in Gua</h2>
            <p class="section-intro">
                Tailored specifically for mining engineers, public sector employees, and residential families across Gua and West Singhbhum.
            </p>
        </div>

        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household shifting and carton packing in Gua West Singhbhum" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Household Shifting & Mining Colony Relocation</h3>
                    <p>
                        Turnkey home moving solutions for families living in SAIL Colony, Officers Quarters, Hospital Colony, and Gua Market. We wrap heavy refrigerators, televisions, wooden bedroom suites, delicate porcelain, and kitchenware with impenetrable shockproof buffers.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> High-density virgin bubble wrap and 5-ply corrugated carton boxes</li>
                        <li><i class="fa-solid fa-circle-check"></i> Professional dismantling and re-assembly of beds and wardrobes</li>
                        <li><i class="fa-solid fa-circle-check"></i> Anti-red dust stretch wrapping guarding against iron ore soot</li>
                    </ul>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Commercial cargo and door to door delivery truck in Gua" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>SAIL & Industrial Cargo Transportation</h3>
                    <p>
                        Specialized transport for mining contractors, electrical equipment suppliers, laboratory instruments, and administrative office furnishings. We handle delicate servers, heavy machinery spare parts, and archival file boxes under strict supervisory control.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> Heavy equipment lashing with anti-vibration dunnage cushioning</li>
                        <li><i class="fa-solid fa-circle-check"></i> GST-registered tax invoices and e-way bill compliance</li>
                        <li><i class="fa-solid fa-circle-check"></i> Express weekend and off-hour shifting for zero productivity loss</li>
                    </ul>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and bike transport carrier in Gua" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Car & Two-Wheeler Transportation</h3>
                    <p>
                        Relocate your prized motorcar or motorcycle safely from Gua across India without risking wear on winding forest roads. We utilize specialized enclosed vehicle trailers equipped with hydraulic ramps, wheel locking clamps, and scratch-resistant padding.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> Four-point wheel chocking and safety harness lashings</li>
                        <li><i class="fa-solid fa-circle-check"></i> Multi-layer foam and bubble wrapping for motorbikes and scooters</li>
                        <li><i class="fa-solid fa-circle-check"></i> Photographic pre-dispatch vehicle inspection condition report</li>
                    </ul>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial warehouse storage for Gua cargo" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Secure Warehousing & Storage Facilities</h3>
                    <p>
                        Waiting for new quarters allocation or transitioning between postings? Store your domestic furniture or commercial items safely in our CCTV-monitored, moisture-controlled central warehouses in Jharkhand with full transit insurance.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> 24/7 digital CCTV recording and continuous on-site security guards</li>
                        <li><i class="fa-solid fa-circle-check"></i> Palletized wooden floor storage protecting belongings from dampness</li>
                        <li><i class="fa-solid fa-circle-check"></i> Flexible short-term and long-term rental agreements</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: 5-Step Military-Grade Packing Methodology -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Zero Damage Blueprint</span>
            <h2 class="section-title">Our 5-Stage Scientific Relocation Protocol</h2>
            <p class="section-intro">
                Combining high-grade protective packaging with seasoned highway transport protocols to guarantee complete zero-damage transit across Jharkhand and India.
            </p>
        </div>

        <div class="method-steps">
            <div class="method-card">
                <span class="step-number">01</span>
                <h4>Technical Survey</h4>
                <p>
                    Our relocation coordinator reviews your goods in Gua via on-site visit or digital video survey to determine cargo volume, packaging needs, fragile crating, and vehicle sizing.
                </p>
            </div>

            <div class="method-card">
                <span class="step-number">02</span>
                <h4>5-Layer Defense Packing</h4>
                <p>
                    Appliances and furniture are wrapped with virgin bubble wrap, corrugated sheets, foam edge buffers, moisture absorbing desiccants, and multiple layers of industrial stretch film.
                </p>
            </div>

            <div class="method-card">
                <span class="step-number">03</span>
                <h4>Scientific Weight Loading</h4>
                <p>
                    Heavy items are anchored to truck floor rings with reinforced cargo straps on rubber dunnage mats. Lighter boxes are stacked systematically above to avoid crushing pressure.
                </p>
            </div>

            <div class="method-card">
                <span class="step-number">04</span>
                <h4>GPS Forest Road Transit</h4>
                <p>
                    Closed-container trucks depart Gua through Barajamda or Chaibasa roads. Seasoned highway drivers maintain controlled speeds to eliminate vibration and rough terrain shocks.
                </p>
            </div>

            <div class="method-card">
                <span class="step-number">05</span>
                <h4>Unloading & Setup</h4>
                <p>
                    At your destination, our trained team unloads every carton, verifies inventory numbers, re-assembles beds and heavy cupboards, and clears all packing residue before completion.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 4: Transparent Cost Breakdown Table -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Transparent Rate Guide</span>
            <h2 class="section-title">Packers and Movers Charges in Gua</h2>
            <p class="section-intro">
                Clear, upfront quotes with zero hidden extras. Review our standard rate guide for moves within West Singhbhum, across Jharkhand, and interstate.
            </p>
        </div>

        <div class="data-table-container">
            <table class="custom-data-table">
                <thead>
                    <tr>
                        <th>Shifting Size</th>
                        <th>Packaging & Labor Crew</th>
                        <th>Local Shifting (Within 50 Km)</th>
                        <th>Regional Corridor (50 - 300 Km)</th>
                        <th>Interstate Shifting (300+ Km)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK / SAIL Quarter</strong></td>
                        <td>Standard Bubble + Corrugated Boxes (2 Crew)</td>
                        <td>Rs 3,500 - 6,500</td>
                        <td>Rs 7,500 - 14,000</td>
                        <td>Rs 15,000 - 25,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Apartment / House</strong></td>
                        <td>5-Layer Anti-Shock Packing (3-4 Crew)</td>
                        <td>Rs 5,500 - 10,000</td>
                        <td>Rs 12,000 - 19,000</td>
                        <td>Rs 22,000 - 35,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Home</strong></td>
                        <td>Heavy Duty Protective Packaging (4-6 Crew)</td>
                        <td>Rs 8,500 - 15,000</td>
                        <td>Rs 16,500 - 27,000</td>
                        <td>Rs 30,000 - 48,000</td>
                    </tr>
                    <tr>
                        <td><strong>4+ BHK / Executive Bungalow</strong></td>
                        <td>Custom Crating + Full Crew (6-8 Crew)</td>
                        <td>Rs 13,000 - 22,000</td>
                        <td>Rs 24,000 - 40,000</td>
                        <td>Rs 42,000 - 68,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two Wheeler (Bike / Scooter)</strong></td>
                        <td>Wheel-Lashing + Bubble/Corrugated Wrap</td>
                        <td>Rs 1,500 - 2,500</td>
                        <td>Rs 2,800 - 4,800</td>
                        <td>Rs 4,800 - 8,500</td>
                    </tr>
                    <tr>
                        <td><strong>Car (Hatchback / Sedan / SUV)</strong></td>
                        <td>Dedicated Closed Container Carrier</td>
                        <td>Rs 3,500 - 5,000</td>
                        <td>Rs 7,000 - 12,500</td>
                        <td>Rs 13,500 - 24,000</td>
                    </tr>
                    <tr>
                        <td><strong>Mining Commercial & Workshop Move</strong></td>
                        <td>Machinery Crating + Heavy Dunnage</td>
                        <td>Custom Quote</td>
                        <td>Site Survey</td>
                        <td>Dedicated Fleets</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.85rem; color: #64748b; font-style: italic;">
            *Note: Final prices depend on inventory volume, access road conditions, floor level without elevator, fragile crating, and optional value-declared comprehensive transit insurance coverage.
        </p>
    </section>

    <!-- Section 5: Transit Time & Route Feasibility Guide -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Transit Corridors</span>
            <h2 class="section-title">Estimated Transit Timelines from Gua</h2>
            <p class="section-intro">
                Connecting through Barajamda, Chaibasa, and Jamshedpur to major expressways and interstate corridors across Eastern and Northern India.
            </p>
        </div>

        <div class="data-table-container">
            <table class="custom-data-table">
                <thead>
                    <tr>
                        <th>Destination City</th>
                        <th>Approx Distance</th>
                        <th>Primary Highway Corridor</th>
                        <th>Estimated Transit Time</th>
                        <th>Carrier Frequency</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Gua to Barajamda / Noamundi</strong></td>
                        <td>15 Km</td>
                        <td>State Highway Route</td>
                        <td>Same Day (1 - 2 Hours)</td>
                        <td>Daily 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Gua to Chaibasa (District HQ)</strong></td>
                        <td>85 Km</td>
                        <td>Via Barajamda to NH-20</td>
                        <td>Same Day (3 - 4 Hours)</td>
                        <td>Daily Regular Fleets</td>
                    </tr>
                    <tr>
                        <td><strong>Gua to Jamshedpur (Tatanagar)</strong></td>
                        <td>145 Km</td>
                        <td>Via Chaibasa to NH-18 (Hata road)</td>
                        <td>Same Day (4 - 6 Hours)</td>
                        <td>Daily 2 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Gua to Ranchi</strong></td>
                        <td>190 Km</td>
                        <td>Via Chaibasa & Khunti on NH-20</td>
                        <td>Same Day / Next Morning (6 - 8 Hours)</td>
                        <td>Daily Regular Fleet</td>
                    </tr>
                    <tr>
                        <td><strong>Gua to Bokaro Steel City</strong></td>
                        <td>210 Km</td>
                        <td>Via Chaibasa, Purulia & Chas</td>
                        <td>1 - 2 Days</td>
                        <td>Weekly 4 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Gua to Rourkela (Odisha)</strong></td>
                        <td>105 Km</td>
                        <td>Via Manoharpur / Bisra Road</td>
                        <td>Same Day (4 - 5 Hours)</td>
                        <td>Daily Regular Service</td>
                    </tr>
                    <tr>
                        <td><strong>Gua to Kolkata / Howrah</strong></td>
                        <td>380 Km</td>
                        <td>Via Jamshedpur / Baharagora to NH-16</td>
                        <td>2 - 3 Days</td>
                        <td>Weekly 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Gua to Delhi / NCR</strong></td>
                        <td>1,360 Km</td>
                        <td>Via Ranchi to NH-19 GT Road</td>
                        <td>5 - 6 Days</td>
                        <td>Weekly Schedule</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section 6: Specific Localities and Neighborhoods Covered -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Locality Coverage</span>
            <h2 class="section-title">Mining Colonies, Wards & Outlying Belts Served in Gua</h2>
            <p class="section-intro">
                Our local logistics network maintains deep operational familiarity with every residential sector, mining colony, and forest panchayat across Gua and southern West Singhbhum.
            </p>
        </div>

        <p>
            Whether your residence is situated within the peaceful avenues of SAIL Officers Colony, in the Senior Staff Quarters, along the bustling Gua Station Market Road, near SAIL Hospital Colony, inside the CISF Barracks campus, or in adjoining settlements like Barajamda, Noamundi, Jamda, or Chiria, our dedicated pickup vehicles reach your doorstep punctually. We deploy scouts to inspect rural bridges and narrow forest tracks ahead of moving day to ensure that our container vehicles navigate smoothly without unexpected delays.
        </p>

        <p>
            For residences located on steep hillside mining paths or older unpaved quarters, our dispatch uses nimble feeder vehicles like the Mahindra Bolero Maxi Truck and Tata Ace to safely ferry packed cartons to our heavy container carriers waiting on the wider metalled road. This avoids difficult manual portage across red ore soil and ensures that glassware, smart televisions, and fine china remain completely unharmed.
        </p>

        <div class="localities-cloud">
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> SAIL Officers Colony</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Senior Staff Quarters Gua</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Station Road & Gua Market</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> SAIL Hospital Colony</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> CISF Camp & Barracks</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Karo River Road</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Barajamda Mining Corridor</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Noamundi Tata Steel Border</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Chiria Iron Ore Township</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Jamda Residential Area</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> D-Type Mining Quarters</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Saranda Forest Gate</span>
        </div>
    </section>

    <!-- Section 7: Why Choose Shree Ashirwad Packers in Gua -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Distinct Advantages</span>
            <h2 class="section-title">Why Shree Ashirwad is Gua's Top Moving Choice</h2>
            <p class="section-intro">
                Shifting household valuables or industrial assets in remote mining terrain requires proven expertise, dedicated vehicles, and certified safety standards.
            </p>
        </div>

        <div class="why-us-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-mountain-sun"></i></div>
                <h4>Saranda Forest Navigation</h4>
                <p>Over a decade of operating safely across the challenging winding ghats and forest checkpoints of the Saranda range.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-truck-shield"></i></div>
                <h4>Enclosed Container Fleets</h4>
                <p>Weatherproof steel container trucks prevent rain, dust, and iron ore soot from contaminating your household goods during transit.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-boxes-packing"></i></div>
                <h4>Virgin Packaging Materials</h4>
                <p>We use only fresh 5-ply corrugated sheets, new air bubble rolls, corner guards, and industrial shrink wrap for maximum protection.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-file-invoice-dollar"></i></div>
                <h4>100% Valid GST Invoices</h4>
                <p>Complete paperwork including GST tax invoices, consignment receipts (LR), and itemized lists accepted for employer claim reimbursements.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-shield-halved"></i></div>
                <h4>Transit Insurance Coverage</h4>
                <p>Comprehensive transit insurance policies backed by leading national insurers protect your assets against unforeseen road hazards.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                <h4>Guaranteed Fixed Rates</h4>
                <p>Our comprehensive written estimates carry zero hidden charges, sudden fuel surcharges, or unexpected delivery fees.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-couch"></i></div>
                <h4>Furniture Assembly Support</h4>
                <p>Skilled technicians dismantle modular beds, wardrobes, and tables with proper tools, reassembling them securely at your new location.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-headset"></i></div>
                <h4>Dedicated Move Coordinator</h4>
                <p>A single point of contact provides live updates and oversees your relocation from the moment packing begins until completion.</p>
            </div>
        </div>
    </section>

    <!-- Local Google Map Embed -->
    <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59050.123456789!2d85.3800!3d22.2000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f605123456789%3A0x7d6a5d4e3c2b1a0!2sGua%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Gua West Singhbhum"></iframe>
    </div>

    <!-- Section 8: Frequently Asked Questions -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Got Questions?</span>
            <h2 class="section-title">Frequently Asked Questions About Shifting in Gua</h2>
            <p class="section-intro">
                Answers to common inquiries regarding our packing processes, rates, insurance coverage, and schedule management in Gua.
            </p>
        </div>

        <div class="faq-accordion">
            <details class="faq-box" open>
                <summary>Do you provide official claim-compliant documentation for SAIL employees shifting from Gua?</summary>
                <div class="faq-content">
                    Yes, Shree Ashirwad Packers specializes in PSU employee relocations for Steel Authority of India Limited (SAIL - Raw Materials Division / Bokaro Steel Plant) personnel stationed at Gua Ore Mines. We provide computerized GST invoices, consignment receipts (LR), signed inventory declaration lists, and transit insurance certificates fully accepted by SAIL finance and administration claim departments.
                </div>
            </details>

            <details class="faq-box">
                <summary>How are moving charges calculated for shifting from Gua to Bokaro Steel City or Ranchi?</summary>
                <div class="faq-content">
                    Moving charges from Gua depend on shipment volume (1 BHK, 2 BHK, 3 BHK, or executive quarters), packing tier, and transit destination. Shifting a standard 2 BHK household from Gua to Bokaro Steel City (approx 210 km) ranges from Rs 13,000 to Rs 22,000, while shifting to Ranchi (approx 190 km) ranges from Rs 12,000 to Rs 20,000 with 5-layer shockproof packing, loading, highway toll taxes, and transit insurance.
                </div>
            </details>

            <details class="faq-box">
                <summary>How do you protect furniture and household goods from red iron ore dust in Gua?</summary>
                <div class="faq-content">
                    Because Gua is an active opencast iron ore mining area surrounded by red hematite dust, we seal all furniture, mattresses, electronics, and cartons with an impermeable 5-tier system: virgin bubble wrap, heavy corrugated sheets, foam edge protectors, moisture desiccants, and multiple layers of industrial stretch film that completely blocks red dust and soot infiltration.
                </div>
            </details>

            <details class="faq-box">
                <summary>Can you transport private cars and motorcycles safely through the Saranda forest ghats?</summary>
                <div class="faq-content">
                    Yes. We offer door-to-door vehicle transport from Gua across India using heavy-duty enclosed auto trailers and wheel-locked bike carriers. All vehicles receive wheel chocking, protective bumper covers, multi-point nylon strapping, and full transit insurance coverage.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you serve surrounding mining townships like Barajamda, Noamundi, and Chiria?</summary>
                <div class="faq-content">
                    Yes, our operational network covers Gua Township, SAIL Mines Colony, Barajamda, Noamundi (Tata Steel mining belt), Chiria mines, Jamda, and all surrounding settlements across the Saranda forest basin in West Singhbhum.
                </div>
            </details>

            <details class="faq-box">
                <summary>How much advance notice is required to book a move in Gua?</summary>
                <div class="faq-content">
                    Because Gua is situated in a forest hill corridor, we recommend booking 2 to 4 days in advance for regional moves to Jamshedpur or Bokaro, and 4 to 6 days ahead for long-haul interstate moves to Delhi, Kolkata, Bhilai, or Bangalore. This allows us to arrange dedicated closed container vehicles and forest transit clearances.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do your workers handle furniture dismantling and reassembly at the destination?</summary>
                <div class="faq-content">
                    Yes. Our skilled carpentry technicians dismantle modular king-size beds, steel almirahs, dining tables, and modular storage units with proper tools, packing each screw and fitting securely, and reassemble everything perfectly in your new home.
                </div>
            </details>

            <details class="faq-box">
                <summary>Is transit insurance mandatory, and what risks are covered?</summary>
                <div class="faq-content">
                    While transit insurance is optional, it is strongly recommended for forest and ghat roads. Our comprehensive transit insurance policies cover physical damage caused by road overturn, vehicle collisions, fire, heavy rainfall, or theft, with fast claim surveyor support.
                </div>
            </details>
        </div>
    </section>

    <!-- Section 9: High-Conversion Bottom CTA Banner -->
    <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<section class="cta-banner-gua">
        <h2>Plan Your Seamless Relocation in Gua Today!</h2>
        <p>
            Trust your household belongings or SAIL transfer to Jharkhand's most experienced relocation team. Reach out to our Gua move coordinator now for an immediate, upfront quotation.
        </p>
        <div class="cta-btns">
            <a href="tel:+918409531615" class="btn-call-primary" style="background: #f59e0b; color: #0f172a;">
                <i class="fa-solid fa-phone"></i> Call +91 8409531615
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%2C%20I%20need%20packers%20and%20movers%20services%20in%20Gua." target="_blank" class="btn-quote-secondary" style="background: #25d366; border-color: #25d366; color: #ffffff;">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
