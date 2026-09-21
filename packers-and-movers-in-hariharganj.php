<?php
/**
 * Packers and Movers in Hariharganj - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Hariharganj, NH-139 Border, Pipra & Palamu District, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Hariharganj - 8409531615 | Shree Ashirwad Packers";
$page_description = "ISO certified packers and movers in Hariharganj, Palamu on NH-139. Safe household shifting, border corridor trade transport, car & bike carrier, transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in hariharganj, movers and packers hariharganj palamu, nh-139 packers and movers, household shifting hariharganj, car transport hariharganj, bike courier hariharganj, packers and movers daltonganj";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-hariharganj";
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
      "name": "Shree Ashirwad Packers and Movers - Hariharganj",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 52000",
        "keywords": "packers and movers in hariharganj, movers and packers hariharganj palamu, nh-139 packers and movers, household shifting hariharganj, car transport hariharganj, bike courier hariharganj, packers and movers daltonganj",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "NH-139 Main Road, Near Border Check Post & Hariharganj Chowk",
        "addressLocality": "Hariharganj",
        "addressRegion": "Jharkhand",
        "postalCode": "822131",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 24.5367,
        "longitude": 84.2691
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
          "name": "Hariharganj"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Pipra"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Chhatarpur"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Palamu District"
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
          "name": "Packers and Movers in Hariharganj",
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
          "name": "What are the standard charges for household shifting from Hariharganj to Daltonganj or Patna?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Moving charges from Hariharganj depend upon cargo volume and destination distance. A typical 1 BHK or 2 BHK shifting locally to Daltonganj / Medininagar (approx 75 km via NH-139) ranges between Rs 6,500 and Rs 11,500. Shifting to Patna (approx 175 km via Aurangabad) costs Rs 9,500 to Rs 18,000 including full 5-layer protective packing, loading, interstate toll taxes, and transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "How do you handle interstate border tax checkpoints between Jharkhand and Bihar at Hariharganj?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hariharganj is located right on the Jharkhand-Bihar border. Shree Ashirwad Packers ensures 100% legal compliance with GST-registered e-way bills, stamped Lorry Receipts (LR), declared household inventory lists, and commercial transit passes. Our container trucks clear border commercial check-posts without delays or surprise penalties."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide relocation services for government and banking personnel in Hariharganj?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we regularly handle official transfers for border administrative staff, police officers, SBI and PNB bank executives, hospital doctors, and school educators in Hariharganj and Pipra. We supply full reimbursement documentation including GST tax invoices, consignment receipts, and transit insurance cover notes."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect household appliances from highway dust along NH-139?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Because Hariharganj experiences dense interstate truck traffic and highway dust along NH-139, we apply a 5-layer protective wrapping: virgin bubble wrap, heavy corrugated sheets, foam edge protectors, moisture desiccants, and multiple layers of industrial stretch film that completely seals each item against fine dirt, road soot, and moisture."
          }
        },
        {
          "@type": "Question",
          "name": "Can you transport private cars and two-wheelers from Hariharganj across India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer door-to-door vehicle transport from Hariharganj to Delhi, Kolkata, Ranchi, Patna, Bangalore, and across India using dedicated hydraulic car container carriers and wheel-locked bike carriers with full scratch-resistant body wrapping and transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "Do you serve neighboring blocks like Pipra, Chhatarpur, and Aurangabad border?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our operational fleet covers Hariharganj town, Pipra block, Chhatarpur corridor, Batane river settlements, and the immediate Aurangabad border region across both sides of the state line."
          }
        },
        {
          "@type": "Question",
          "name": "How much advance booking time is needed for shifting in Hariharganj?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For local moves within Palamu or neighboring Aurangabad, 1 to 2 days advance notice is sufficient. For interstate relocations to major metro cities across India, we recommend booking 3 to 5 days prior to reserve dedicated covered container trucks and finalize insurance underwriting."
          }
        },
        {
          "@type": "Question",
          "name": "Is full transit insurance included in your Hariharganj relocation quote?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, comprehensive transit insurance is arranged through recognized public and private insurance underwriters. It covers physical damages, road overturning, fire, theft, or unforeseen transit hazards from doorstep loading to delivery unloading."
          }
        }
      ]
    }
    </script>

    <style>
        :root {
            --primary-navy: #0f172a;
            --primary-accent: #059669;
            --primary-hover: #047857;
            --secondary-amber: #f59e0b;
            --neutral-bg: #f8fafc;
            --card-border: #e2e8f0;
            --text-dark: #1e293b;
            --text-muted: #64748b;
        }

        .hariharganj-hero {
            background: linear-gradient(135deg, #064e3b 0%, #0f172a 100%);
            color: #ffffff;
            padding: 70px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .hariharganj-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at top right, rgba(5, 150, 105, 0.25), transparent 65%);
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
            background: rgba(5, 150, 105, 0.25);
            border: 1px solid rgba(52, 211, 153, 0.35);
            color: #a7f3d0;
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
            color: #34d399;
        }

        .hero-desc {
            font-size: 1.1rem;
            line-height: 1.65;
            color: #d1fae5;
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
            color: #a7f3d0;
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
            background: var(--primary-accent);
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-submit-quote:hover {
            background: var(--primary-hover);
        }

        .trust-strip {
            background: #064e3b;
            color: #d1fae5;
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
            color: #34d399;
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
            color: var(--primary-accent);
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
            border-left: 5px solid var(--primary-accent);
            padding-left: 15px;
        }

        .content-block h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.45rem;
            font-weight: 600;
            color: #065f46;
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
            background: #059669;
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
            background: #064e3b;
            color: #ffffff;
            padding: 14px 18px;
            font-weight: 600;
            font-family: 'Outfit', sans-serif;
            border-bottom: 2px solid #059669;
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
            background: #ecfdf5;
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
            color: #059669;
            font-size: 0.8rem;
        }

        .locality-tag:hover {
            border-color: #059669;
            background: #ecfdf5;
            color: #047857;
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
            background: #ecfdf5;
            color: #059669;
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
            color: var(--primary-accent);
        }

        .faq-content {
            padding: 16px 20px;
            background: #f8fafc;
            border-top: 1px solid var(--card-border);
            font-size: 0.94rem;
            color: #334155;
            line-height: 1.65;
        }

        .cta-banner-hariharganj {
            background: linear-gradient(135deg, #064e3b 0%, #0f172a 100%);
            border-radius: 14px;
            padding: 50px 30px;
            color: #ffffff;
            text-align: center;
            margin: 60px 0 20px;
            box-shadow: 0 15px 35px rgba(6, 78, 59, 0.25);
        }

        .cta-banner-hariharganj h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0 0 15px;
            color: #ffffff;
        }

        .cta-banner-hariharganj p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.05rem;
            color: #a7f3d0;
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
<section class="hariharganj-hero">
    <div class="hero-container">
        <div class="hero-text-content">
            <div class="hero-badge">
                <i class="fa-solid fa-map-location-dot"></i> Jharkhand-Bihar Interstate Border Shifting Specialist
            </div>
            <h1 class="hero-title">Premier Packers and Movers in <span>Hariharganj</span></h1>
            <p class="hero-desc">
                Serving household shifting, border commercial trade godowns, and interstate vehicle shipping along the NH-139 corridor. Experience five-tier shockproof packing, closed-container fleets, and comprehensive transit insurance across Jharkhand, Bihar, and all of India.
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <h4>12+ Years</h4>
                    <p>Border Logistics</p>
                </div>
                <div class="stat-item">
                    <h4>7,400+</h4>
                    <p>Moves Completed</p>
                </div>
                <div class="stat-item">
                    <h4>100% Safe</h4>
                    <p>Transit Guarantee</p>
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
            <h3>Request Instant Moving Quote</h3>
            <p>Direct pricing with zero hidden interstate surcharges</p>
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
                    <label for="move_origin"><i class="fa-solid fa-location-dot"></i> Shifting From</label>
                    <input type="text" id="move_origin" name="move_origin" value="Hariharganj / NH-139" required>
                </div>
                <div class="form-group-field">
                    <label for="move_destination"><i class="fa-solid fa-map-pin"></i> Destination City</label>
                    <input type="text" id="move_destination" name="move_destination" placeholder="e.g. Daltonganj, Patna, Ranchi, Delhi" required>
                </div>
                <div class="form-group-field">
                    <label for="move_size"><i class="fa-solid fa-truck-ramp-box"></i> Move Category</label>
                    <select id="move_size" name="move_size" required>
                        <option value="1BHK">1 BHK Household Shifting</option>
                        <option value="2BHK" selected>2 BHK Household Shifting</option>
                        <option value="3BHK">3 BHK Household Shifting</option>
                        <option value="Border_Commercial">Commercial Godown / Mandi Business</option>
                        <option value="Vehicle">Vehicle Transport (Car / Bike)</option>
                        <option value="Govt_Transfer">Govt / Police / Bank Officer Quarters</option>
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
            <i class="fa-solid fa-certificate"></i>
            <span>Government Registered & GST Invoiced for Reimbursement</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-truck-fast"></i>
            <span>Daily Express Fleets on NH-139 to Patna & Daltonganj</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-shield-halved"></i>
            <span>5-Layer Dust-Proof & Anti-Moisture Packaging</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-file-shield"></i>
            <span>Seamless Interstate Toll & Commercial Border Clearance</span>
        </div>
    </div>
</div>

<!-- Main Body Content -->
<main class="page-content-wrapper">

    <!-- Section 1: In-depth Hariharganj Relocation Ecosystem -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Palamu District Border Logistics</span>
            <h2 class="section-title">The Trusted Moving Authority for Hariharganj & NH-139</h2>
            <p class="section-intro">
                Positioned strategically on the prominent interstate border separating Jharkhand's Palamu district from Bihar's Aurangabad district, Hariharganj represents a bustling commercial trading gateway along National Highway 139 (NH-139 / old NH-98). Flanked by the fertile agricultural plains of the Batane River basin and acting as the vital link between Daltonganj (Medininagar) and Patna, Hariharganj thrives on vigorous inter-state wholesale grain trading, agro-commodity mandis, transport logistics, and retail commerce. Relocating households and commercial assets across this dynamic border corridor requires an experienced transporter who navigates both interstate checkpoints and rural highway routes with effortless proficiency.
            </p>
        </div>

        <p>
            Shree Ashirwad Packers and Movers has served the residents, agricultural wholesalers, border administrative personnel, police officials, bank executives, and educators of Hariharganj for over a decade. Whether you are shifting a family apartment near Hariharganj Main Chowk, relocating a rural homestead in Pipra, Mahuari, or Semarwar, moving commercial hardware godowns, or coordinating an interstate employee transfer to Aurangabad, Gaya, Patna, or Ranchi, our logistics fleet provides complete tranquility. With our core operational hub in Jharkhand and direct transit corridors across NH-139, we guarantee punctual pickups, fortified packaging, and damage-free delivery.
        </p>

        <p>
            Transporting goods through an interstate boundary like Hariharganj requires stringent administrative and road compliance. Moving across state borders involves commercial tax checkpoints, transport regulatory clearances, and toll checkpoints where unorganized transporters often face costly delays. Shree Ashirwad Packers ensures complete compliance with verified e-way bills, computerized GST invoices, stamped Lorry Receipts (LR), and itemized inventory manifests. Our container trucks transition smoothly across the Jharkhand-Bihar border without harassment or unneeded holding times.
        </p>

        <p>
            The climate and road conditions of Hariharganj also present distinct challenges. The dry summer months bring intense heat and airborne highway dust from heavy commercial freight traffic, while the monsoon season causes seasonal dampness along the Batane river basin. Shree Ashirwad Packers deploys a multi-layered defensive packaging system: virgin air bubble wrap, thick 5-ply corrugated sheets, thermal foam corner buffers, moisture-absorbing silica packets, and an outer seal of heavy industrial stretch wrap that locks out dust, soot, and dampness.
        </p>

        <p>
            For government officers, state police personnel, and bank managers (SBI, PNB, Gramin Bank), moving is closely tied to employer claim policies. We provide verified, transparent paperwork: computerized consignment notes, signed goods declaration sheets, GST-registered invoices, and comprehensive insurance cover notes from leading national underwriters. This guarantees that your relocation expenses can be submitted smoothly to employer claim desks for rapid reimbursement.
        </p>
    </section>

    <!-- Section 2: Core Relocation Services with Image Whitelist -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Tailored Moving Verticals</span>
            <h2 class="section-title">Comprehensive Relocation Services in Hariharganj</h2>
            <p class="section-intro">
                Designed to cater to families, business proprietors, and government personnel across Hariharganj, Pipra, and Palamu district.
            </p>
        </div>

        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household shifting and carton packing in Hariharganj Palamu" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Household Shifting & Apartment Relocation</h3>
                    <p>
                        Turnkey home moving solutions for residences across Hariharganj, Pipra, Mahuari, and Semarwar. From double-door refrigerators and solid wooden beds to fine dinnerware and wardrobe collections, our crew protects every possession with meticulous care.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> High-density virgin bubble wrap and 5-ply corrugated carton boxes</li>
                        <li><i class="fa-solid fa-circle-check"></i> Professional dismantling and re-assembly of beds and modular wardrobes</li>
                        <li><i class="fa-solid fa-circle-check"></i> Dust-proof stretch wrapping guarding against highway particulate soot</li>
                    </ul>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Commercial cargo and door to door delivery truck in Hariharganj" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Commercial Mandi & Border Trade Logistics</h3>
                    <p>
                        Specialized relocation for wholesale grain merchants, hardware distributors, commercial godowns, and trading offices along NH-139. We handle heavy inventory, spare parts, commercial scales, and IT systems under strict scheduling.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> Heavy equipment lashing with anti-vibration dunnage cushioning</li>
                        <li><i class="fa-solid fa-circle-check"></i> GST-registered tax invoices and e-way bill compliance</li>
                        <li><i class="fa-solid fa-circle-check"></i> Weekend and evening moves ensuring zero commercial disruption</li>
                    </ul>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and bike transport carrier in Hariharganj" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Car & Two-Wheeler Transportation</h3>
                    <p>
                        Ship your car, SUV, or motorcycle from Hariharganj to anywhere in India without adding highway mileage or road wear. We utilize enclosed vehicle trailers with hydraulic ramps, wheel locking clamps, and scratch-resistant padding.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> 4-point wheel chocking and safety harness lashings</li>
                        <li><i class="fa-solid fa-circle-check"></i> Multi-layer foam and bubble wrapping for motorbikes and scooters</li>
                        <li><i class="fa-solid fa-circle-check"></i> Photographic pre-dispatch vehicle inspection condition report</li>
                    </ul>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial warehouse storage for Hariharganj goods" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Secure Warehousing & Storage Solutions</h3>
                    <p>
                        Need short-term or extended storage while renovating your residential premises or expanding your distribution inventory? Our secure, CCTV-monitored, moisture-controlled warehouses protect your goods from dampness, pests, and fire hazards.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> 24/7 digital CCTV recording and continuous on-site security</li>
                        <li><i class="fa-solid fa-circle-check"></i> Palletized wooden floor storage preventing groundwater contact</li>
                        <li><i class="fa-solid fa-circle-check"></i> Flexible monthly, quarterly, or yearly storage contracts</li>
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
                Combining high-durability packaging materials with seasoned highway transport protocols to guarantee complete zero-damage transit across Jharkhand, Bihar, and India.
            </p>
        </div>

        <div class="method-steps">
            <div class="method-card">
                <span class="step-number">01</span>
                <h4>Technical Survey</h4>
                <p>
                    Our relocation coordinator reviews your belongings in Hariharganj via on-site visit or digital video survey to determine cargo volume, packaging needs, fragile crating, and vehicle sizing.
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
                <h4>Express Highway Transit</h4>
                <p>
                    Closed-container trucks depart Hariharganj immediately onto NH-139. Experienced highway drivers maintain steady speeds under live satellite GPS tracking.
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
            <h2 class="section-title">Packers and Movers Charges in Hariharganj</h2>
            <p class="section-intro">
                Honest and transparent pricing with zero surprise charges. Review standard tariff estimates for local, regional, and national relocations.
            </p>
        </div>

        <div class="data-table-container">
            <table class="custom-data-table">
                <thead>
                    <tr>
                        <th>Shifting Size</th>
                        <th>Packaging & Labor Crew</th>
                        <th>Local Shifting (Within 40 Km)</th>
                        <th>Regional Corridor (40 - 250 Km)</th>
                        <th>Interstate Shifting (250+ Km)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
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
                        <td><strong>4+ BHK / Large Bungalow</strong></td>
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
                        <td><strong>Border Mandi / Godown Move</strong></td>
                        <td>Machinery Crating + Heavy Dunnage</td>
                        <td>Custom Quote</td>
                        <td>Site Assessment</td>
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
            <h2 class="section-title">Estimated Transit Timelines from Hariharganj</h2>
            <p class="section-intro">
                Direct expressway and national highway access via NH-139 provides expedited transit across Jharkhand, Bihar, Uttar Pradesh, and Northern India.
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
                        <td><strong>Hariharganj to Aurangabad (Bihar)</strong></td>
                        <td>40 Km</td>
                        <td>NH-139 Direct Highway</td>
                        <td>Same Day (1 - 2 Hours)</td>
                        <td>Daily 4 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Hariharganj to Daltonganj (Medininagar)</strong></td>
                        <td>75 Km</td>
                        <td>NH-139 (via Chhatarpur & Padwa)</td>
                        <td>Same Day (2 - 3 Hours)</td>
                        <td>Daily 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Hariharganj to Gaya (Bihar)</strong></td>
                        <td>95 Km</td>
                        <td>Via Aurangabad / GT Road (NH-19)</td>
                        <td>Same Day (3 - 4 Hours)</td>
                        <td>Daily Service</td>
                    </tr>
                    <tr>
                        <td><strong>Hariharganj to Patna (Capital of Bihar)</strong></td>
                        <td>175 Km</td>
                        <td>NH-139 (via Daudnagar & Arwal)</td>
                        <td>Same Day / Next Morning (5 - 6 Hours)</td>
                        <td>Daily Regular Fleets</td>
                    </tr>
                    <tr>
                        <td><strong>Hariharganj to Ranchi</strong></td>
                        <td>240 Km</td>
                        <td>Via Daltonganj / Latehar (NH-39)</td>
                        <td>1 - 2 Days</td>
                        <td>Daily Scheduled Service</td>
                    </tr>
                    <tr>
                        <td><strong>Hariharganj to Varanasi (UP)</strong></td>
                        <td>200 Km</td>
                        <td>Via Aurangabad to NH-19 GT Road</td>
                        <td>Same Day (5 - 6 Hours)</td>
                        <td>Alternate Days</td>
                    </tr>
                    <tr>
                        <td><strong>Hariharganj to Kolkata / Howrah</strong></td>
                        <td>510 Km</td>
                        <td>Via Aurangabad / Barhi to NH-19</td>
                        <td>2 - 3 Days</td>
                        <td>Weekly 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Hariharganj to Delhi / NCR</strong></td>
                        <td>980 Km</td>
                        <td>Via Aurangabad / Varanasi to NH-19</td>
                        <td>3 - 4 Days</td>
                        <td>Daily Regular Fleets</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section 6: Specific Localities and Neighborhoods Covered -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Locality Coverage</span>
            <h2 class="section-title">Wards, Panchayats & Border Areas Served in Hariharganj</h2>
            <p class="section-intro">
                Our local logistics network maintains deep operational familiarity with every commercial colony, border toll crossing, and residential layout across Hariharganj and Pipra.
            </p>
        </div>

        <p>
            Whether your home is located along the lively market stretch of Hariharganj Main Chowk, near the Interstate Border Check Post, in residential clusters along Block Road, near High School Mohalla, or within neighboring agricultural settlements like Pipra, Mahuari, Semarwar, Arar, Saraiya, or the Daltonganj highway approach, our pickup teams arrive punctually. We deploy spot scouts ahead of moving day to verify access roads, bridge clearances, and border gates, ensuring zero loading day delays.
        </p>

        <p>
            For narrower inner village lanes and agricultural farms, our dispatch utilizes nimble feeder vehicles like the Mahindra Bolero Maxi Truck and Tata Ace to safely ferry packed cartons to our heavy container carriers waiting on the main NH-139 highway. This avoids manual carrying over long distances and guarantees that delicate glassware, smart televisions, and fine appliances remain completely unharmed.
        </p>

        <div class="localities-cloud">
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Hariharganj Main Chowk</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> NH-139 Border Check Post</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Block Road Hariharganj</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> High School Mohalla</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Batane River Colony</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Pipra Block Center</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Mahuari Panchayat</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Semarwar Village</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Arar Border Area</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Saraiya Corridor</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Aurangabad Border Link</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Chhatarpur Highway Stretch</span>
        </div>
    </section>

    <!-- Section 7: Why Choose Shree Ashirwad Packers in Hariharganj -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Distinct Advantages</span>
            <h2 class="section-title">Why Shree Ashirwad is Hariharganj's Top Moving Choice</h2>
            <p class="section-intro">
                Moving lifelong household belongings or valuable commercial inventory requires a licensed, experienced, and dependable partner.
            </p>
        </div>

        <div class="why-us-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-route"></i></div>
                <h4>Interstate Border Mastery</h4>
                <p>Over a decade of seamless transit across the Jharkhand-Bihar border with valid e-way bills and commercial clearance.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-truck-shield"></i></div>
                <h4>Enclosed Container Fleets</h4>
                <p>Weatherproof steel container trucks prevent rain, dust, and highway soot from contaminating your household goods during transit.</p>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58200.123456789!2d84.2700!3d24.5300!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398c05123456789%3A0x7d6a5d4e3c2b1a0!2sHariharganj%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Hariharganj Palamu"></iframe>
    </div>

    <!-- Section 8: Frequently Asked Questions -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Got Questions?</span>
            <h2 class="section-title">Frequently Asked Questions About Shifting in Hariharganj</h2>
            <p class="section-intro">
                Answers to common inquiries regarding our packing processes, rates, insurance coverage, and schedule management in Hariharganj.
            </p>
        </div>

        <div class="faq-accordion">
            <details class="faq-box" open>
                <summary>What are the standard charges for household shifting from Hariharganj to Daltonganj or Patna?</summary>
                <div class="faq-content">
                    Moving charges from Hariharganj depend upon cargo volume and destination distance. A typical 1 BHK or 2 BHK shifting locally to Daltonganj / Medininagar (approx 75 km via NH-139) ranges between Rs 6,500 and Rs 11,500. Shifting to Patna (approx 175 km via Aurangabad) costs Rs 9,500 to Rs 18,000 including full 5-layer protective packing, loading, interstate toll taxes, and transit insurance.
                </div>
            </details>

            <details class="faq-box">
                <summary>How do you handle interstate border tax checkpoints between Jharkhand and Bihar at Hariharganj?</summary>
                <div class="faq-content">
                    Hariharganj is located right on the Jharkhand-Bihar border. Shree Ashirwad Packers ensures 100% legal compliance with GST-registered e-way bills, stamped Lorry Receipts (LR), declared household inventory lists, and commercial transit passes. Our container trucks clear border commercial check-posts without delays or surprise penalties.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you provide relocation services for government and banking personnel in Hariharganj?</summary>
                <div class="faq-content">
                    Yes, we regularly handle official transfers for border administrative staff, police officers, SBI and PNB bank executives, hospital doctors, and school educators in Hariharganj and Pipra. We supply full reimbursement documentation including GST tax invoices, consignment receipts, and transit insurance cover notes.
                </div>
            </details>

            <details class="faq-box">
                <summary>How do you protect household appliances from highway dust along NH-139?</summary>
                <div class="faq-content">
                    Because Hariharganj experiences dense interstate truck traffic and highway dust along NH-139, we apply a 5-layer protective wrapping: virgin bubble wrap, heavy corrugated sheets, foam edge protectors, moisture desiccants, and multiple layers of industrial stretch film that completely seals each item against fine dirt, road soot, and moisture.
                </div>
            </details>

            <details class="faq-box">
                <summary>Can you transport private cars and two-wheelers from Hariharganj across India?</summary>
                <div class="faq-content">
                    Yes. We offer door-to-door vehicle transport from Hariharganj to Delhi, Kolkata, Ranchi, Patna, Bangalore, and across India using dedicated hydraulic car container carriers and wheel-locked bike carriers with full scratch-resistant body wrapping and transit insurance.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you serve neighboring blocks like Pipra, Chhatarpur, and Aurangabad border?</summary>
                <div class="faq-content">
                    Yes, our operational fleet covers Hariharganj town, Pipra block, Chhatarpur corridor, Batane river settlements, and the immediate Aurangabad border region across both sides of the state line.
                </div>
            </details>

            <details class="faq-box">
                <summary>How much advance booking time is needed for shifting in Hariharganj?</summary>
                <div class="faq-content">
                    For local moves within Palamu or neighboring Aurangabad, 1 to 2 days advance notice is sufficient. For interstate relocations to major metro cities across India, we recommend booking 3 to 5 days prior to reserve dedicated covered container trucks and finalize insurance underwriting.
                </div>
            </details>

            <details class="faq-box">
                <summary>Is full transit insurance included in your Hariharganj relocation quote?</summary>
                <div class="faq-content">
                    Yes, comprehensive transit insurance is arranged through recognized public and private insurance underwriters. It covers physical damages, road overturning, fire, theft, or unforeseen transit hazards from doorstep loading to delivery unloading.
                </div>
            </details>
        </div>
    </section>

    <!-- Section 9: High-Conversion Bottom CTA Banner -->
    <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<section class="cta-banner-hariharganj">
        <h2>Ready for a Fast & Safe Relocation in Hariharganj?</h2>
        <p>
            Benefit from NH-139 interstate speed, military-grade packing protection, and twelve years of Palamu moving mastery. Contact our Hariharganj relocation coordinator right now for a tailored quote.
        </p>
        <div class="cta-btns">
            <a href="tel:+918409531615" class="btn-call-primary" style="background: #f59e0b; color: #0f172a;">
                <i class="fa-solid fa-phone"></i> Call +91 8409531615
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%2C%20I%20need%20packers%20and%20movers%20services%20in%20Hariharganj." target="_blank" class="btn-quote-secondary" style="background: #25d366; border-color: #25d366; color: #ffffff;">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
