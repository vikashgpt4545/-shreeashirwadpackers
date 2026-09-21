<?php
/**
 * Packers and Movers in Gola - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Gola, Rajrappa, Ramgarh Cantt & Ramgarh District, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Gola - 8409531615 | Shree Ashirwad Packers";
$page_description = "Reputed packers and movers in Gola, Ramgarh. Safe household shifting, Rajrappa corridor moves, industrial transport, car & bike carrier, transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in gola, movers and packers gola ramgarh, rajrappa packers and movers, household shifting gola, car transport gola, bike courier gola, packers and movers ramgarh";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-gola";
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
      "name": "Shree Ashirwad Packers and Movers - Gola",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 52000",
        "keywords": "packers and movers in gola, movers and packers gola ramgarh, rajrappa packers and movers, household shifting gola, car transport gola, bike courier gola, packers and movers ramgarh",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Main Road, Near Gola Block Chowk, SH-23",
        "addressLocality": "Gola",
        "addressRegion": "Jharkhand",
        "postalCode": "829110",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 23.5358,
        "longitude": 85.7175
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
          "name": "Gola"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Rajrappa"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Ramgarh Cantt"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Ramgarh District"
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
          "name": "Packers and Movers in Gola",
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
          "name": "What are the standard charges for shifting a home from Gola to Ranchi or Bokaro?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Moving charges from Gola depend upon inventory size and destination. A typical 1 BHK or 2 BHK home shifting locally from Gola to Ramgarh Cantt (28 km) or Bokaro Steel City (45 km) ranges from Rs 5,500 to Rs 10,500. Shifting to Ranchi (55 km via Sikidiri/Ormanjhi) costs between Rs 7,500 and Rs 14,000 including complete packing, loading, toll fees, and transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide relocation services for industrial units and sponge iron plants around Gola?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Shree Ashirwad Packers handles commercial cargo, electrical equipment, machine spare parts, and industrial workshop goods for manufacturing and sponge iron units across the Gola-Chas industrial belt. We provide heavy-duty cranes, hydraulic lift trucks, anti-vibration dunnage, and GST invoices."
          }
        },
        {
          "@type": "Question",
          "name": "Can you transport vehicles (cars and motorcycles) safely from Gola across India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer door-to-door vehicle transport from Gola to Patna, Delhi, Kolkata, Bangalore, Mumbai, and all major cities. We use specialized enclosed car carrier trailers and secured motorcycle carrier trucks with wheel locking, safety harness lashings, and pre-transit condition reports."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect delicate furniture and household goods from dust and moisture in Gola?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Because Gola is an active agro-commercial and industrial corridor with significant vehicular dust, we apply a 5-layer protective wrapping system: virgin bubble wrap, dense corrugated sheets, foam edge protectors, moisture desiccants, and industrial stretch film to ensure complete seal against dust, heat, and moisture."
          }
        },
        {
          "@type": "Question",
          "name": "Do you serve the pilgrim and residential township of Rajrappa near Gola?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we regularly serve households, temple trust officials, commercial vendors, and guest houses across Rajrappa, Bhairavi river basin, and surrounding settlements with punctual pickup and secure delivery."
          }
        },
        {
          "@type": "Question",
          "name": "How much advance notice is required to book a move in Gola?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For local moves to Ramgarh, Bokaro, or Ranchi, a 1 to 2-day advance notice is usually sufficient. For interstate moves to other states, booking 3 to 5 days in advance guarantees dedicated container truck allocation and insurance documentation clearance."
          }
        },
        {
          "@type": "Question",
          "name": "Are your quotes all-inclusive or will there be extra hidden charges at delivery?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our quotations are 100% transparent and all-inclusive. Every cost—including packing materials, specialized labor, loading, highway toll taxes, unloading, and basic unpacking—is detailed in your written quote with zero hidden surprise charges."
          }
        },
        {
          "@type": "Question",
          "name": "What documents do you provide for government or bank employee claim reimbursements?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide complete official documentation including GST-registered tax invoices, stamped consignment notes (Lorry Receipts - LR), itemized inventory lists with valuation, and money receipts required by government, banking, and public sector employee transfer reimbursement desks."
          }
        }
      ]
    }
    </script>

    <style>
        :root {
            --primary-navy: #0f172a;
            --primary-accent: #d97706;
            --primary-hover: #b45309;
            --secondary-blue: #1e3a8a;
            --neutral-bg: #f8fafc;
            --card-border: #e2e8f0;
            --text-dark: #1e293b;
            --text-muted: #64748b;
        }

        .gola-hero {
            background: linear-gradient(135deg, #78350f 0%, #0f172a 100%);
            color: #ffffff;
            padding: 70px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .gola-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at top right, rgba(217, 119, 6, 0.25), transparent 65%);
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
            background: rgba(217, 119, 6, 0.25);
            border: 1px solid rgba(251, 191, 36, 0.35);
            color: #fde68a;
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
            color: #fbbf24;
        }

        .hero-desc {
            font-size: 1.1rem;
            line-height: 1.65;
            color: #fef3c7;
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
            color: #fbbf24;
            margin: 0 0 4px;
            font-family: 'Outfit', sans-serif;
        }

        .stat-item p {
            font-size: 0.82rem;
            color: #fde68a;
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
            background: #fbbf24;
            color: #0f172a;
            padding: 14px 26px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(251, 191, 36, 0.3);
        }

        .btn-call-primary:hover {
            background: #f59e0b;
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
            background: #d97706;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-submit-quote:hover {
            background: #b45309;
        }

        .trust-strip {
            background: #78350f;
            color: #fef3c7;
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
            color: #fbbf24;
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
            color: #d97706;
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
            border-left: 5px solid #d97706;
            padding-left: 15px;
        }

        .content-block h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.45rem;
            font-weight: 600;
            color: #92400e;
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
            background: #d97706;
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
            background: #78350f;
            color: #ffffff;
            padding: 14px 18px;
            font-weight: 600;
            font-family: 'Outfit', sans-serif;
            border-bottom: 2px solid #92400e;
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
            background: #fef3c7;
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
            color: #d97706;
            font-size: 0.8rem;
        }

        .locality-tag:hover {
            border-color: #d97706;
            background: #fffbeb;
            color: #b45309;
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
            background: #fffbeb;
            color: #d97706;
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
            color: #d97706;
        }

        .faq-content {
            padding: 16px 20px;
            background: #f8fafc;
            border-top: 1px solid var(--card-border);
            font-size: 0.94rem;
            color: #334155;
            line-height: 1.65;
        }

        .cta-banner-gola {
            background: linear-gradient(135deg, #78350f 0%, #0f172a 100%);
            border-radius: 14px;
            padding: 50px 30px;
            color: #ffffff;
            text-align: center;
            margin: 60px 0 20px;
            box-shadow: 0 15px 35px rgba(120, 53, 15, 0.25);
        }

        .cta-banner-gola h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0 0 15px;
            color: #ffffff;
        }

        .cta-banner-gola p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.05rem;
            color: #fde68a;
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
<section class="gola-hero">
    <div class="hero-container">
        <div class="hero-text-content">
            <div class="hero-badge">
                <i class="fa-solid fa-truck-ramp-box"></i> Ramgarh-Bokaro-Ranchi Corridor Logistics
            </div>
            <h1 class="hero-title">Trusted Packers and Movers in <span>Gola</span></h1>
            <p class="hero-desc">
                Your licensed moving partner for safe household relocation, agro-wholesale trade transport, and sponge iron industrial cargo in Gola and Rajrappa. Combining 5-tier protective packaging, enclosed container fleets, and comprehensive transit insurance across Jharkhand and India.
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <h4>12+ Years</h4>
                    <p>Ramgarh Moves</p>
                </div>
                <div class="stat-item">
                    <h4>7,800+</h4>
                    <p>Families Relocated</p>
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
            <p>Honest pricing for home, mandi business & factory moves</p>
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
                    <input type="text" id="move_origin" name="move_origin" value="Gola / Rajrappa" required>
                </div>
                <div class="form-group-field">
                    <label for="move_destination"><i class="fa-solid fa-map-pin"></i> Shifting Destination</label>
                    <input type="text" id="move_destination" name="move_destination" placeholder="e.g. Ranchi, Bokaro, Ramgarh, Kolkata" required>
                </div>
                <div class="form-group-field">
                    <label for="move_size"><i class="fa-solid fa-truck-ramp-box"></i> Shifting Size</label>
                    <select id="move_size" name="move_size" required>
                        <option value="1BHK">1 BHK Household Shifting</option>
                        <option value="2BHK" selected>2 BHK Household Shifting</option>
                        <option value="3BHK">3 BHK Household Shifting</option>
                        <option value="Commercial_Mandi">Mandi Wholesaler / Commercial Godown</option>
                        <option value="Vehicle">Vehicle Transport (Car / Bike)</option>
                        <option value="Industrial">Industrial Plant & Workshop Moving</option>
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
            <i class="fa-solid fa-shield-halved"></i>
            <span>Government Registered & GST Compliant Invoices</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-route"></i>
            <span>Direct Daily Routes on SH-23 to Ranchi & Bokaro</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-box-open"></i>
            <span>5-Layer Dust-Proof & Shockproof Packaging</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-truck-moving"></i>
            <span>Dedicated Steel Container Fleets with GPS</span>
        </div>
    </div>
</div>

<!-- Main Body Content -->
<main class="page-content-wrapper">

    <!-- Section 1: In-depth Gola Relocation Ecosystem -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Ramgarh District Moving Authority</span>
            <h2 class="section-title">Professional Packing and Moving Services in Gola</h2>
            <p class="section-intro">
                Positioned strategically in the southeastern quadrant of Ramgarh district along State Highway 23 (SH-23), Gola serves as a bustling junction connecting Ramgarh Cantt, Bokaro Steel City, Ranchi (via Sikidiri and Ormanjhi), and Purulia in West Bengal. Flanked by the fertile valleys of the Damodar and Bhera (Bhairavi) rivers and situated near the renowned Maa Chhinnamastika Shaktipeeth at Rajrappa, Gola harmoniously blends massive agricultural wholesale commerce with expanding industrial activity. Relocating families, merchants, and businesses across this energetic hub demands a transporter with comprehensive local route experience.
            </p>
        </div>

        <p>
            Shree Ashirwad Packers and Movers has provided dependable relocation solutions across Gola and the broader Ramgarh district for over a decade. As Gola's renowned Sabzi Mandi generates extensive commercial trading that supplies fresh vegetables to Kolkata, Ranchi, Dhanbad, and Jamshedpur, local business families frequently require modern residential shifting, commercial warehouse transport, and vehicle relocation. Our seasoned logistics supervisors understand the unique road dynamics along SH-23, ensuring that moving trucks navigate state highway toll lanes, rural connecting roads, and market traffic smoothly.
        </p>

        <p>
            Furthermore, the presence of sponge iron manufacturing plants, steel re-rolling facilities, aluminum foundries, and stone crushing enterprises along the Gola-Chas highway belt generates steady demand for industrial cargo transportation. Corporate engineers, factory supervisors, and administrative officers regularly transfer between Gola, Ramgarh Cantt, Ranchi, Bokaro Steel City, and Jamshedpur. Shree Ashirwad Packers satisfies these institutional needs with computerized consignment notes (Lorry Receipts - LR), GST tax invoices, itemized inventory declarations, and transit insurance certificates required for corporate reimbursement.
        </p>

        <p>
            The environmental conditions of Gola—characterized by agricultural soil dust during dry seasons, intense summer heat, and monsoon river valley humidity near the Damodar river—require specialized packing safeguards. Shree Ashirwad Packers utilizes multi-layered defensive materials: anti-static bubble wrap, thick corrugated sheets, high-density edge cushions, and stretch film wraps with moisture desiccant packs. This impenetrable barrier protects your valuable television sets, computers, modular sofas, and heirloom wooden furniture from airborne road grit and moisture degradation.
        </p>

        <p>
            Whether you are shifting a single bedroom apartment near Gola Block Chowk, relocating a large family homestead in Kamta, Barlanga, or Soso, moving staff from Rajrappa temple township, or sending a personal motorcycle or family sedan to Patna, Delhi, or Bangalore, our experienced packing technicians ensure complete peace of mind. We take full charge of dismantling furniture, wrapping each delicate piece, systematic loading, highway freight, safe unloading, and reassembly at your destination.
        </p>
    </section>

    <!-- Section 2: Core Relocation Services with Image Whitelist -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Specialized Relocation Verticals</span>
            <h2 class="section-title">Our Premier Relocation Solutions in Gola</h2>
            <p class="section-intro">
                From residential households to bustling mandi trade godowns and industrial plant workshops, we provide purpose-engineered moving solutions.
            </p>
        </div>

        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household shifting and carton packing in Gola Ramgarh" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Household Shifting & Residential Relocation</h3>
                    <p>
                        Complete home shifting services for families in Gola, Rajrappa, Barlanga, and Ramgarh district. From double-door refrigerators, smart televisions, and split air conditioners to dining sets, crockery, and clothing, every item is wrapped with defensive care.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> High-density virgin bubble wrap and 5-ply corrugated cartons</li>
                        <li><i class="fa-solid fa-circle-check"></i> Expert carpenter dismantling and reassembly of modular furniture</li>
                        <li><i class="fa-solid fa-circle-check"></i> Color-coded labeling for seamless room-by-room unpacking</li>
                    </ul>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Commercial cargo and door to door delivery truck in Gola" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Commercial Mandi & Industrial Shifting</h3>
                    <p>
                        Logistics solutions for agro-trade merchants, wholesale mandi godowns, and manufacturing units across the Gola industrial belt. We handle heavy machinery spares, electrical control panels, commercial scales, office computers, and inventory with precision.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> Heavy machinery lashing with anti-vibration dunnage cushions</li>
                        <li><i class="fa-solid fa-circle-check"></i> Comprehensive GST documentation for commercial transit compliance</li>
                        <li><i class="fa-solid fa-circle-check"></i> Weekend and evening shifting to avoid business interruption</li>
                    </ul>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and bike transport carrier in Gola" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Car & Bike Transportation Services</h3>
                    <p>
                        Safely transport your motorcar or two-wheeler from Gola across Jharkhand and India without road wear or odometer mileage. We utilize enclosed vehicle trailers with hydraulic ramps, wheel chocks, and four-point nylon security belts.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> Scratch-resistant foam wrapping on handlebars and fairings</li>
                        <li><i class="fa-solid fa-circle-check"></i> Photographic pre-dispatch vehicle condition assessment</li>
                        <li><i class="fa-solid fa-circle-check"></i> Comprehensive all-risk transit insurance policy coverage</li>
                    </ul>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial goods storage warehouse for Gola goods" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Secure Warehousing & Storage Facilities</h3>
                    <p>
                        Need interim or long-term storage while renovating your residential premises or waiting for new quarters? Our clean, moisture-controlled central warehouses in Jharkhand provide round-the-clock digital surveillance and pest management.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> 24/7 CCTV digital surveillance and physical security guards</li>
                        <li><i class="fa-solid fa-circle-check"></i> Palletized wooden floor storage protecting goods from dampness</li>
                        <li><i class="fa-solid fa-circle-check"></i> Flexible weekly, monthly, or yearly rental agreements</li>
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
                Combining durable packaging materials with experienced highway transport protocols to guarantee absolute safety on every relocation.
            </p>
        </div>

        <div class="method-steps">
            <div class="method-card">
                <span class="step-number">01</span>
                <h4>Technical Assessment</h4>
                <p>
                    Our relocation coordinator reviews your belongings in Gola via on-site visit or digital video survey to determine cargo volume, packaging needs, fragile item crating, and vehicle sizing.
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
                <h4>GPS Monitored Transit</h4>
                <p>
                    Closed-body container trucks depart Gola via SH-23 or connecting arterial roads. Experienced highway drivers maintain controlled speeds to neutralize vibration and rough terrain shocks.
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
            <span class="section-tag">Upfront Rate Guide</span>
            <h2 class="section-title">Packers and Movers Charges in Gola</h2>
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
                        <th>Regional Corridor (40 - 200 Km)</th>
                        <th>Interstate Shifting (200+ Km)</th>
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
                        <td><strong>Commercial Mandi / Plant Move</strong></td>
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
            <h2 class="section-title">Estimated Transit Timelines from Gola</h2>
            <p class="section-intro">
                Strategically positioned along State Highway 23 with quick connections to NH-20, NH-19 (GT Road), and the Purulia corridor.
            </p>
        </div>

        <div class="data-table-container">
            <table class="custom-data-table">
                <thead>
                    <tr>
                        <th>Destination City</th>
                        <th>Approx Distance</th>
                        <th>Primary Highway Route</th>
                        <th>Estimated Transit Time</th>
                        <th>Fleet Schedule</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Gola to Ramgarh Cantt</strong></td>
                        <td>28 Km</td>
                        <td>SH-23 Direct Highway</td>
                        <td>Same Day (1 - 2 Hours)</td>
                        <td>Daily 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Gola to Bokaro Steel City (Chas)</strong></td>
                        <td>45 Km</td>
                        <td>SH-23 via Petarwar / Chas</td>
                        <td>Same Day (2 - 3 Hours)</td>
                        <td>Daily 2 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Gola to Ranchi (Capital)</strong></td>
                        <td>55 Km</td>
                        <td>Via Sikidiri / Ormanjhi (or via Ramgarh NH-20)</td>
                        <td>Same Day (2 - 3 Hours)</td>
                        <td>Daily Multiple Fleets</td>
                    </tr>
                    <tr>
                        <td><strong>Gola to Dhanbad</strong></td>
                        <td>88 Km</td>
                        <td>SH-23 to NH-18 (via Chas)</td>
                        <td>Same Day (3 - 4 Hours)</td>
                        <td>Daily Regular Service</td>
                    </tr>
                    <tr>
                        <td><strong>Gola to Jamshedpur (Tatanagar)</strong></td>
                        <td>125 Km</td>
                        <td>SH-23 to Purulia / NH-18 (via Chandil)</td>
                        <td>Same Day (4 - 5 Hours)</td>
                        <td>Alternate Days</td>
                    </tr>
                    <tr>
                        <td><strong>Gola to Kolkata / Howrah</strong></td>
                        <td>310 Km</td>
                        <td>Via Purulia / Bankura to NH-16</td>
                        <td>1 - 2 Days</td>
                        <td>Weekly 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Gola to Patna</strong></td>
                        <td>360 Km</td>
                        <td>Via Ramgarh Cantt to NH-22 (via Gaya)</td>
                        <td>2 - 3 Days</td>
                        <td>Bi-Weekly Regular</td>
                    </tr>
                    <tr>
                        <td><strong>Gola to Delhi / NCR</strong></td>
                        <td>1,210 Km</td>
                        <td>Via Ramgarh / Hazaribagh to GT Road NH-19</td>
                        <td>4 - 5 Days</td>
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
            <h2 class="section-title">Wards, Panchayats & Industrial Belts Served Across Gola</h2>
            <p class="section-intro">
                Our logistics network provides comprehensive door-to-door pickup and delivery across Gola block and the adjoining Ramgarh-Bokaro rural borders.
            </p>
        </div>

        <p>
            Whether your home is located near Gola Block Chowk, close to the bustling Sabzi Mandi on SH-23, along the historic Rajrappa Temple corridor, or in surrounding agricultural panchayats including Kamta, Barlanga, Soso, Chokad, Korambe, or towards Murubanda and Sikidiri, our vehicles arrive right on schedule. For narrower rural roads and farms, we deploy specialized mini-trucks like Tata Ace and Bolero Maxi Truck to transfer packed items safely to our larger container carriers at the highway junction.
        </p>

        <div class="localities-cloud">
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Gola Block Chowk</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Gola Sabzi Mandi Market</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Rajrappa Mandir Complex</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Kamta Panchayat</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Barlanga Corridor</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Soso Village</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Chokad Area</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Korambe Region</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Murubanda Junction</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Sikidiri Road Belt</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Damodar Basin Colony</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Petarwar Border Area</span>
        </div>
    </section>

    <!-- Section 7: Why Choose Shree Ashirwad Packers in Gola -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Distinct Advantages</span>
            <h2 class="section-title">Why Shree Ashirwad is Gola's Trusted Moving Choice</h2>
            <p class="section-intro">
                Moving lifelong household belongings or commercial merchandise requires a licensed, experienced, and dependable partner.
            </p>
        </div>

        <div class="why-us-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-user-shield"></i></div>
                <h4>Police Verified Staff</h4>
                <p>Every packaging technician and driver on our payroll undergoes rigorous background verification and professional safety training.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-truck-shield"></i></div>
                <h4>Enclosed Container Fleets</h4>
                <p>Weatherproof steel container trucks prevent rain, dust, and highway vibrations from damaging your precious belongings.</p>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58600.123456789!2d85.7100!3d23.5300!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f405123456789%3A0x7d6a5d4e3c2b1a0!2sGola%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Gola Ramgarh"></iframe>
    </div>

    <!-- Section 8: Frequently Asked Questions -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Got Questions?</span>
            <h2 class="section-title">Frequently Asked Questions About Shifting in Gola</h2>
            <p class="section-intro">
                Answers to common inquiries regarding our packing processes, rates, insurance coverage, and schedule management in Gola.
            </p>
        </div>

        <div class="faq-accordion">
            <details class="faq-box" open>
                <summary>What are the standard charges for shifting a home from Gola to Ranchi or Bokaro?</summary>
                <div class="faq-content">
                    Moving charges from Gola depend upon inventory size and destination. A typical 1 BHK or 2 BHK home shifting locally from Gola to Ramgarh Cantt (28 km) or Bokaro Steel City (45 km) ranges from Rs 5,500 to Rs 10,500. Shifting to Ranchi (55 km via Sikidiri/Ormanjhi) costs between Rs 7,500 and Rs 14,000 including complete packing, loading, toll fees, and transit insurance.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you provide relocation services for industrial units and sponge iron plants around Gola?</summary>
                <div class="faq-content">
                    Yes, Shree Ashirwad Packers handles commercial cargo, electrical equipment, machine spare parts, and industrial workshop goods for manufacturing and sponge iron units across the Gola-Chas industrial belt. We provide heavy-duty cranes, hydraulic lift trucks, anti-vibration dunnage, and GST invoices.
                </div>
            </details>

            <details class="faq-box">
                <summary>Can you transport vehicles (cars and motorcycles) safely from Gola across India?</summary>
                <div class="faq-content">
                    Yes. We offer door-to-door vehicle transport from Gola to Patna, Delhi, Kolkata, Bangalore, Mumbai, and all major cities. We use specialized enclosed car carrier trailers and secured motorcycle carrier trucks with wheel locking, safety harness lashings, and pre-transit condition reports.
                </div>
            </details>

            <details class="faq-box">
                <summary>How do you protect delicate furniture and household goods from dust and moisture in Gola?</summary>
                <div class="faq-content">
                    Because Gola is an active agro-commercial and industrial corridor with significant vehicular dust, we apply a 5-layer protective wrapping system: virgin bubble wrap, dense corrugated sheets, foam edge protectors, moisture desiccants, and industrial stretch film to ensure complete seal against dust, heat, and moisture.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you serve the pilgrim and residential township of Rajrappa near Gola?</summary>
                <div class="faq-content">
                    Yes, we regularly serve households, temple trust officials, commercial vendors, and guest houses across Rajrappa, Bhairavi river basin, and surrounding settlements with punctual pickup and secure delivery.
                </div>
            </details>

            <details class="faq-box">
                <summary>How much advance notice is required to book a move in Gola?</summary>
                <div class="faq-content">
                    For local moves to Ramgarh, Bokaro, or Ranchi, a 1 to 2-day advance notice is usually sufficient. For interstate moves to other states, booking 3 to 5 days in advance guarantees dedicated container truck allocation and insurance documentation clearance.
                </div>
            </details>

            <details class="faq-box">
                <summary>Are your quotes all-inclusive or will there be extra hidden charges at delivery?</summary>
                <div class="faq-content">
                    Our quotations are 100% transparent and all-inclusive. Every cost—including packing materials, specialized labor, loading, highway toll taxes, unloading, and basic unpacking—is detailed in your written quote with zero hidden surprise charges.
                </div>
            </details>

            <details class="faq-box">
                <summary>What documents do you provide for government or bank employee claim reimbursements?</summary>
                <div class="faq-content">
                    We provide complete official documentation including GST-registered tax invoices, stamped consignment notes (Lorry Receipts - LR), itemized inventory lists with valuation, and money receipts required by government, banking, and public sector employee transfer reimbursement desks.
                </div>
            </details>
        </div>
    </section>

    <!-- Section 9: High-Conversion Bottom CTA Banner -->
    <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<section class="cta-banner-gola">
        <h2>Experience Hassle-Free Relocation in Gola!</h2>
        <p>
            Choose Jharkhand's premier moving specialist for secure packing, punctual container transport, and complete transit assurance. Contact our Gola relocation desk now for a free, transparent quotation.
        </p>
        <div class="cta-btns">
            <a href="tel:+918409531615" class="btn-call-primary" style="background: #fbbf24; color: #0f172a;">
                <i class="fa-solid fa-phone"></i> Call +91 8409531615
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%2C%20I%20need%20packers%20and%20movers%20services%20in%20Gola." target="_blank" class="btn-quote-secondary" style="background: #25d366; border-color: #25d366; color: #ffffff;">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
