<?php
/**
 * Packers and Movers in Gomia - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Gomia, IEL Colony, Swang, Kathara, Tenughat & Bokaro District, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Gomia - 8409531615 | Shree Ashirwad Packers";
$page_description = "ISO certified packers and movers in Gomia, Bokaro. Safe household shifting, IEL Colony & CCL colliery moves, Tenughat corridor transport, full transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in gomia, movers and packers gomia bokaro, iel colony packers and movers, swang colliery shifting, tenughat packers and movers, car transport gomia, bike courier gomia";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-gomia";
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
      "name": "Shree Ashirwad Packers and Movers - Gomia",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 55000",
        "keywords": "packers and movers in gomia, movers and packers gomia bokaro, iel colony packers and movers, swang colliery shifting, tenughat packers and movers, car transport gomia, bike courier gomia",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Station Road, Near IEL Gate Chowk & Gomia Market",
        "addressLocality": "Gomia",
        "addressRegion": "Jharkhand",
        "postalCode": "829111",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 23.8055,
        "longitude": 85.8286
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
          "name": "Gomia"
        },
        {
          "@type": "AdministrativeArea",
          "name": "IEL Colony"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Swang Colliery"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Kathara"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Tenughat"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Bokaro District"
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
          "name": "Packers and Movers in Gomia",
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
          "name": "Do you provide relocation services for IEL and Orica chemical plant personnel in Gomia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Shree Ashirwad Packers specializes in corporate employee transfers for Indian Explosives Limited (IEL / Orica / Solar Industries) staff and executives stationed at IEL Township, Gomia. We provide 100% compliant corporate claim documentation, including GST tax invoices, consignment notes (LR), detailed packing inventory lists, and transit insurance certificates accepted by corporate reimbursement desks."
          }
        },
        {
          "@type": "Question",
          "name": "How are moving charges calculated for shifting from Gomia to Bokaro Steel City or Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Moving charges depend on household volume (1 BHK, 2 BHK, 3 BHK), packaging materials requested, floor access, and destination distance. A typical 1 BHK or 2 BHK shifting from Gomia to Bokaro Steel City (approx 45 km) ranges between Rs 5,000 and Rs 9,500. Shifting to Ranchi (approx 85 km via Ormanjhi/Ramgarh) costs Rs 7,500 to Rs 15,000 with complete 5-layer packing, loading, toll fees, and transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "Do you handle transfers for Central Coalfields Limited (CCL) employees in Swang and Kathara?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We regularly execute residential relocations for CCL colliery officers, mining engineers, and technical staff across Swang, Kathara, Bokaro Colliery, and Kargali. We provide IBA-approved billing formats and signed goods receipts required for CCL employee transfer claim settlements."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect household appliances from coal dust and road vibration around Gomia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "The industrial and colliery corridors surrounding Gomia produce environmental coal dust and heavy road vibrations. We apply a 5-layer protective defense: virgin air bubble wrap, high-density corrugated sheets, thermal foam corner cushions, moisture-absorbing silica pouches, and an outer seal of heavy industrial stretch wrap that locks out dust, soot, and dampness."
          }
        },
        {
          "@type": "Question",
          "name": "Can you safely transport private cars and two-wheelers from Gomia to other Indian states?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer door-to-door vehicle transport from Gomia to Kolkata, Delhi, Patna, Bangalore, Hyderabad, and across India using dedicated hydraulic car container carriers and wheel-locked bike carriers with full scratch-resistant body wrapping and transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "Do you cover the Tenughat Dam township and surrounding government quarters?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our operational fleet provides complete door-to-door moving services for government staff, irrigation engineers, and private households across Tenughat township, Konar river basin, and surrounding Bokaro district blocks."
          }
        },
        {
          "@type": "Question",
          "name": "How much advance booking time is needed for shifting in Gomia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For local moves within Bokaro district or nearby Ramgarh, 1 to 2 days advance notice is sufficient. For interstate relocations to major metro cities across India, we recommend booking 3 to 5 days prior to reserve dedicated covered container trucks and finalize insurance underwriting."
          }
        },
        {
          "@type": "Question",
          "name": "Is transit insurance included, and what does it cover?",
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
            --primary-accent: #0284c7;
            --primary-hover: #0369a1;
            --secondary-gold: #f59e0b;
            --neutral-bg: #f8fafc;
            --card-border: #e2e8f0;
            --text-dark: #1e293b;
            --text-muted: #64748b;
        }

        .gomia-hero {
            background: linear-gradient(135deg, #0c4a6e 0%, #0f172a 100%);
            color: #ffffff;
            padding: 70px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .gomia-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at top right, rgba(2, 132, 199, 0.25), transparent 65%);
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
            background: rgba(2, 132, 199, 0.25);
            border: 1px solid rgba(56, 189, 248, 0.35);
            color: #7dd3fc;
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
            color: #38bdf8;
        }

        .hero-desc {
            font-size: 1.1rem;
            line-height: 1.65;
            color: #e0f2fe;
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
            color: #bae6fd;
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
            background: #082f49;
            color: #e0f2fe;
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
            color: #38bdf8;
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
            color: #0369a1;
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
            background: #0284c7;
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
            background: #0c4a6e;
            color: #ffffff;
            padding: 14px 18px;
            font-weight: 600;
            font-family: 'Outfit', sans-serif;
            border-bottom: 2px solid #0369a1;
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
            background: #f0f9ff;
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
            color: #0284c7;
            font-size: 0.8rem;
        }

        .locality-tag:hover {
            border-color: #0284c7;
            background: #f0f9ff;
            color: #0369a1;
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
            background: #f0f9ff;
            color: #0284c7;
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

        .cta-banner-gomia {
            background: linear-gradient(135deg, #0c4a6e 0%, #0f172a 100%);
            border-radius: 14px;
            padding: 50px 30px;
            color: #ffffff;
            text-align: center;
            margin: 60px 0 20px;
            box-shadow: 0 15px 35px rgba(12, 74, 110, 0.25);
        }

        .cta-banner-gomia h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0 0 15px;
            color: #ffffff;
        }

        .cta-banner-gomia p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.05rem;
            color: #bae6fd;
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
<section class="gomia-hero">
    <div class="hero-container">
        <div class="hero-text-content">
            <div class="hero-badge">
                <i class="fa-solid fa-industry"></i> IEL Township & CCL Coal Corridor Relocation Partner
            </div>
            <h1 class="hero-title">Premier Packers and Movers in <span>Gomia</span></h1>
            <p class="hero-desc">
                Dedicated household shifting, corporate transfer logistics for IEL Colony & CCL colliery personnel, and safe car transportation across Gomia, Tenughat, and Bokaro district. Delivering multi-tier shockproof packing, closed-container fleets, and verified transit insurance across Jharkhand and India.
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <h4>12+ Years</h4>
                    <p>Bokaro District Mastery</p>
                </div>
                <div class="stat-item">
                    <h4>8,100+</h4>
                    <p>Successful Relocations</p>
                </div>
                <div class="stat-item">
                    <h4>100% Zero</h4>
                    <p>Damage Guarantee</p>
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
            <p>Accurate quotes for IEL, CCL colliery & family moves</p>
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
                    <input type="text" id="move_origin" name="move_origin" value="Gomia / IEL Colony" required>
                </div>
                <div class="form-group-field">
                    <label for="move_destination"><i class="fa-solid fa-map-pin"></i> Shifting Destination</label>
                    <input type="text" id="move_destination" name="move_destination" placeholder="e.g. Bokaro Steel City, Ranchi, Patna, Kolkata" required>
                </div>
                <div class="form-group-field">
                    <label for="move_size"><i class="fa-solid fa-truck-ramp-box"></i> Shifting Requirements</label>
                    <select id="move_size" name="move_size" required>
                        <option value="1BHK">1 BHK Household Shifting</option>
                        <option value="2BHK" selected>2 BHK Household Shifting</option>
                        <option value="3BHK">3 BHK Household Shifting</option>
                        <option value="IEL_CCL_Quarters">IEL / CCL Quarters Relocation</option>
                        <option value="Vehicle">Vehicle Transport (Car / Bike)</option>
                        <option value="Industrial_Cargo">Industrial Cargo / Commercial Move</option>
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
            <span>Govt Registered & 100% Claim Compliant Invoices</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-truck-fast"></i>
            <span>Daily Corridors to Bokaro Steel City & Ranchi</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-shield-virus"></i>
            <span>Anti-Dust & Moisture Barrier Packing</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-building-shield"></i>
            <span>Specialized IEL Township & Colliery Fleet Access</span>
        </div>
    </div>
</div>

<!-- Main Body Content -->
<main class="page-content-wrapper">

    <!-- Section 1: In-depth Gomia Relocation Ecosystem -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Bokaro District Logistics Specialists</span>
            <h2 class="section-title">The Leading Shifting Authority for Gomia and Tenughat</h2>
            <p class="section-intro">
                Located in the picturesque valley of the Konar River near the sprawling waters of Tenughat Dam, Gomia occupies a storied landmark in India's industrial landscape. Renowned globally since 1953 as the cradle of Indian Explosives Limited (IEL / Orica / Solar Industries)—one of the world's largest commercial explosives manufacturing establishments—and flanked by the productive coal mines of Central Coalfields Limited (CCL) at Swang, Kathara, and Bokaro Colliery, Gomia is a dynamic confluence of chemical manufacturing, mining operations, and administrative governance. Relocating within or out of this high-security industrial township demands specialized logistics mastery.
            </p>
        </div>

        <p>
            Shree Ashirwad Packers and Movers has spent more than twelve years delivering seamless, secure, and professional moving solutions across Gomia, IEL Township, and the greater Bokaro district. As corporate chemical engineers, plant managers, research scientists, and mining officers regularly receive promotional transfers to corporate headquarters or manufacturing plants across India, our logistics coordinators provide turnkey support. From packing expansive executive bungalows in IEL Officers Colony to shifting family residences in Swang, Kathara, and Tenughat, we handle every consignment with punctuality and meticulous care.
        </p>

        <p>
            The geographical and industrial environment in Gomia presents specific logistical requirements. Surrounding opencast coal mines and heavy mineral transportation generate substantial fine coal particulate matter and road grit, while the proximity of the Konar River and Tenughat Reservoir creates elevated humidity during monsoon months. Shree Ashirwad Packers deploys a multi-layered defensive packing system consisting of virgin air bubble wrap, thick corrugated sheets, high-density corner buffers, and tear-resistant moisture-proof stretch film with silica desiccant pouches. This airtight seal protects sensitive consumer electronics, smart televisions, air conditioning units, and polished furniture from dust infiltration, road shock, and dampness.
        </p>

        <p>
            Corporate and public sector employees require rigorous documentation for employer reimbursement claims. Shree Ashirwad Packers provides comprehensive, transparent paperwork that satisfies every corporate audit requirement: GST-registered computerized tax invoices, signed Lorry Receipts (LR), detailed itemized inventory packing manifests, and comprehensive transit insurance cover notes from leading national underwriters. This guarantees prompt financial reimbursement for employees of IEL, Orica, Solar Industries, CCL, state irrigation departments, and nationalized banks without administrative friction.
        </p>

        <p>
            Our dedicated transportation fleet features modern, all-weather closed-container vehicles ranging from nimble mini-carriers (Tata Ace, Mahindra Bolero Maxi Truck) capable of navigating older residential quarters and market streets, to heavy 19-foot and 24-foot container trucks designed for long-distance highway travel. All trucks are equipped with real-time GPS tracking and driven by vetted highway captains with comprehensive experience navigating the winding stretches of SH-10 towards Ramgarh, Bokaro Steel City, and Ranchi.
        </p>
    </section>

    <!-- Section 2: Core Relocation Services with Image Whitelist -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Targeted Service Offerings</span>
            <h2 class="section-title">Comprehensive Packing & Moving Services in Gomia</h2>
            <p class="section-intro">
                Tailored for residential families, chemical industry executives, and mining personnel across Gomia, Tenughat, and Bokaro district.
            </p>
        </div>

        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household shifting and carton packing in Gomia Bokaro" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Household Shifting & Colony Relocation</h3>
                    <p>
                        Complete home shifting services for families residing in IEL Colony, Swang Colliery, Kathara, and Tenughat. We wrap double-door refrigerators, plush sofas, modular wooden beds, delicate crystalware, and kitchen appliances with maximum shock absorption.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> High-density virgin bubble wrap and 5-ply corrugated carton boxes</li>
                        <li><i class="fa-solid fa-circle-check"></i> Professional dismantling and re-assembly of beds and cupboards</li>
                        <li><i class="fa-solid fa-circle-check"></i> Dedicated wardrobe cartons for wrinkle-free clothing transit</li>
                    </ul>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Gomia industrial corridor" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>IEL & CCL Corporate Relocation Services</h3>
                    <p>
                        Turnkey corporate shifting for chemical plant engineers, research labs, CCL administrative offices, and commercial establishments. We handle laboratory equipment, desktop computers, office records, and server racks under strict security supervision.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> Anti-static packaging for sensitive computers and electronics</li>
                        <li><i class="fa-solid fa-circle-check"></i> Number-coded archive carton labeling for official files</li>
                        <li><i class="fa-solid fa-circle-check"></i> Flexible weekend execution ensuring zero operational downtime</li>
                    </ul>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and bike transport carrier in Gomia" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Car & Bike Transportation</h3>
                    <p>
                        Relocate your private automobile or two-wheeler safely from Gomia to any metropolitan destination across India. We operate specialized closed vehicle trailers equipped with hydraulic loading ramps, wheel locking clamps, and protective body covers.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> Four-point wheel chocking and heavy nylon safety strapping</li>
                        <li><i class="fa-solid fa-circle-check"></i> Scratch-proof foam and bubble wrapping for motorbikes and scooters</li>
                        <li><i class="fa-solid fa-circle-check"></i> Photographic pre-transit vehicle inspection report</li>
                    </ul>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial warehouse storage for Gomia cargo" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Secure Warehousing & Storage Facilities</h3>
                    <p>
                        Waiting for quarter allotment at your new posting or renovating your residence? Store your domestic furniture or commercial items safely in our CCTV-monitored, moisture-controlled central warehouses in Jharkhand with full transit insurance.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> 24/7 digital CCTV recording and continuous on-site security guards</li>
                        <li><i class="fa-solid fa-circle-check"></i> Elevated pallet storage protecting belongings from groundwater damp</li>
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
            <h2 class="section-title">Our Five-Tier Scientific Relocation Methodology</h2>
            <p class="section-intro">
                Combining high-grade protective materials with seasoned highway transport protocols to guarantee complete zero-damage transit across Jharkhand and India.
            </p>
        </div>

        <div class="method-steps">
            <div class="method-card">
                <span class="step-number">01</span>
                <h4>Technical Survey</h4>
                <p>
                    Our relocation coordinator evaluates your goods in Gomia via on-site visit or digital video survey to determine cargo volume, packaging needs, fragile crating, and vehicle sizing.
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
                <h4>GPS Highway Transit</h4>
                <p>
                    Closed-container trucks depart Gomia via SH-10 or connecting arterial highways. Experienced drivers maintain controlled speeds to eliminate vibration and rough terrain shocks.
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
            <span class="section-tag">Transparent Pricing Guide</span>
            <h2 class="section-title">Packers and Movers Charges in Gomia</h2>
            <p class="section-intro">
                Clear, upfront quotes with zero hidden extras. Review our standard rate guide for moves within Bokaro district, across Jharkhand, and interstate.
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
                        <th>Long Distance (300+ Km)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK / Colony Quarter</strong></td>
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
                        <td><strong>Corporate & Industrial Shifting</strong></td>
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
            <span class="section-tag">Connectivity & Corridors</span>
            <h2 class="section-title">Estimated Transit Timelines from Gomia</h2>
            <p class="section-intro">
                Strategically positioned along SH-10 with direct connectivity to Bokaro Steel City, Ramgarh Cantt, Ranchi, and the Golden Quadrilateral GT Road (NH-19).
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
                        <td><strong>Gomia to Bokaro Steel City</strong></td>
                        <td>45 Km</td>
                        <td>SH-10 via Phusro / Chas</td>
                        <td>Same Day (2 - 3 Hours)</td>
                        <td>Daily 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Gomia to Ramgarh Cantt</strong></td>
                        <td>40 Km</td>
                        <td>SH-10 via Petarwar / Gola road</td>
                        <td>Same Day (2 - 3 Hours)</td>
                        <td>Daily Regular Service</td>
                    </tr>
                    <tr>
                        <td><strong>Gomia to Ranchi</strong></td>
                        <td>85 Km</td>
                        <td>SH-10 to NH-20 (via Ramgarh) or via Ormanjhi</td>
                        <td>Same Day (3 - 4 Hours)</td>
                        <td>Daily Multiple Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Gomia to Dhanbad</strong></td>
                        <td>70 Km</td>
                        <td>Via Phusro & Chas to NH-18</td>
                        <td>Same Day (3 - 4 Hours)</td>
                        <td>Daily Service</td>
                    </tr>
                    <tr>
                        <td><strong>Gomia to Hazaribagh</strong></td>
                        <td>65 Km</td>
                        <td>Via Gomia-Bishnugarh Road to NH-522</td>
                        <td>Same Day (2 - 3 Hours)</td>
                        <td>Daily Regular Fleets</td>
                    </tr>
                    <tr>
                        <td><strong>Gomia to Kolkata / Howrah</strong></td>
                        <td>320 Km</td>
                        <td>Via Bokaro / Purulia to NH-16</td>
                        <td>1 - 2 Days</td>
                        <td>Weekly 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Gomia to Patna</strong></td>
                        <td>330 Km</td>
                        <td>Via Hazaribagh / Barhi to NH-22 (Gaya)</td>
                        <td>2 - 3 Days</td>
                        <td>Weekly 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Gomia to Delhi / NCR</strong></td>
                        <td>1,190 Km</td>
                        <td>Via Bagodar / Barhi to GT Road NH-19</td>
                        <td>4 - 5 Days</td>
                        <td>Weekly Regular Fleet</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section 6: Specific Localities and Neighborhoods Covered -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Locality Coverage</span>
            <h2 class="section-title">Wards, Colonies & Mining Belts Served in Gomia</h2>
            <p class="section-intro">
                Our logistics network provides comprehensive door-to-door pickup and delivery across Gomia block, industrial quarters, and surrounding Bokaro mining settlements.
            </p>
        </div>

        <p>
            Whether your home is located within the green residential layout of IEL Officers Colony, near the bustling Gomia Railway Station Market, along Pitambar Bazar, inside the residential quarters of Swang Colliery, Kathara mining area, or in the peaceful environs of Tenughat Dam township, our dedicated pickup vehicles arrive punctually. We deploy spot scouts ahead of dispatch in older colony sectors to verify gate clearance heights and tree-branch clearances, ensuring uninterrupted loading and departure.
        </p>

        <p>
            For outlying residential quarters located near railway sidings or colliery inclines, our team operates feeder vehicles such as Mahindra Bolero Maxi Trucks and Tata Ace to safely ferry packed boxes to our larger container trucks parked on the main road. This ensures that glassware, smart televisions, and fine porcelain never experience jarring manual portage across uneven mining gravel.
        </p>

        <div class="localities-cloud">
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> IEL Officers Colony</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> IEL Senior Staff Quarters</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Gomia Bazar & Station Road</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Swang Colliery Quarters</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Kathara Washery Township</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Tenughat Dam Township</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Konar River Belt</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Pitambar Bazar</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Hazinegar Colony</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Bokaro Thermal Border</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Petarwar Junction</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Bermo-Phusro Link Road</span>
        </div>
    </section>

    <!-- Section 7: Why Choose Shree Ashirwad Packers in Gomia -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Distinct Advantages</span>
            <h2 class="section-title">Why Shree Ashirwad is Gomia's Preferred Moving Choice</h2>
            <p class="section-intro">
                Shifting household valuables or industrial assets requires proven expertise, dedicated vehicles, and certified safety standards.
            </p>
        </div>

        <div class="why-us-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-building-user"></i></div>
                <h4>Corporate & PSU Expertise</h4>
                <p>Over a decade of handling official transfers for IEL, Orica, CCL, and government departments with approved documentation.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-truck-shield"></i></div>
                <h4>Enclosed Container Fleets</h4>
                <p>Weatherproof steel container trucks prevent rain, dust, and coal soot from contaminating your household goods during transit.</p>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58500.123456789!2d85.8300!3d23.8000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f405123456789%3A0x7d6a5d4e3c2b1a0!2sGomia%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Gomia Bokaro"></iframe>
    </div>

    <!-- Section 8: Frequently Asked Questions -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Got Questions?</span>
            <h2 class="section-title">Frequently Asked Questions About Shifting in Gomia</h2>
            <p class="section-intro">
                Key questions answered regarding our pricing, packaging standards, corporate transfer policies, and timelines in Gomia.
            </p>
        </div>

        <div class="faq-accordion">
            <details class="faq-box" open>
                <summary>Do you provide relocation services for IEL and Orica chemical plant personnel in Gomia?</summary>
                <div class="faq-content">
                    Yes, Shree Ashirwad Packers specializes in corporate employee transfers for Indian Explosives Limited (IEL / Orica / Solar Industries) staff and executives stationed at IEL Township, Gomia. We provide 100% compliant corporate claim documentation, including GST tax invoices, consignment notes (LR), detailed packing inventory lists, and transit insurance certificates accepted by corporate reimbursement desks.
                </div>
            </details>

            <details class="faq-box">
                <summary>How are moving charges calculated for shifting from Gomia to Bokaro Steel City or Ranchi?</summary>
                <div class="faq-content">
                    Moving charges depend on household volume (1 BHK, 2 BHK, 3 BHK), packaging materials requested, floor access, and destination distance. A typical 1 BHK or 2 BHK shifting from Gomia to Bokaro Steel City (approx 45 km) ranges between Rs 5,000 and Rs 9,500. Shifting to Ranchi (approx 85 km via Ormanjhi/Ramgarh) costs Rs 7,500 to Rs 15,000 with complete 5-layer packing, loading, toll fees, and transit insurance.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you handle transfers for Central Coalfields Limited (CCL) employees in Swang and Kathara?</summary>
                <div class="faq-content">
                    Yes. We regularly execute residential relocations for CCL colliery officers, mining engineers, and technical staff across Swang, Kathara, Bokaro Colliery, and Kargali. We provide IBA-approved billing formats and signed goods receipts required for CCL employee transfer claim settlements.
                </div>
            </details>

            <details class="faq-box">
                <summary>How do you protect household appliances from coal dust and road vibration around Gomia?</summary>
                <div class="faq-content">
                    The industrial and colliery corridors surrounding Gomia produce environmental coal dust and heavy road vibrations. We apply a 5-layer protective defense: virgin air bubble wrap, high-density corrugated sheets, thermal foam corner cushions, moisture-absorbing silica pouches, and an outer seal of heavy industrial stretch wrap that locks out dust, soot, and dampness.
                </div>
            </details>

            <details class="faq-box">
                <summary>Can you safely transport private cars and two-wheelers from Gomia to other Indian states?</summary>
                <div class="faq-content">
                    Yes. We offer door-to-door vehicle transport from Gomia to Kolkata, Delhi, Patna, Bangalore, Hyderabad, and across India using dedicated hydraulic car container carriers and wheel-locked bike carriers with full scratch-resistant body wrapping and transit insurance.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you cover the Tenughat Dam township and surrounding government quarters?</summary>
                <div class="faq-content">
                    Yes, our operational fleet provides complete door-to-door moving services for government staff, irrigation engineers, and private households across Tenughat township, Konar river basin, and surrounding Bokaro district blocks.
                </div>
            </details>

            <details class="faq-box">
                <summary>How much advance booking time is needed for shifting in Gomia?</summary>
                <div class="faq-content">
                    For local moves within Bokaro district or nearby Ramgarh, 1 to 2 days advance notice is sufficient. For interstate relocations to major metro cities across India, we recommend booking 3 to 5 days prior to reserve dedicated covered container trucks and finalize insurance underwriting.
                </div>
            </details>

            <details class="faq-box">
                <summary>Is transit insurance included, and what does it cover?</summary>
                <div class="faq-content">
                    Yes, comprehensive transit insurance is arranged through recognized public and private insurance underwriters. It covers physical damages, road overturning, fire, theft, or unforeseen transit hazards from doorstep loading to delivery unloading.
                </div>
            </details>
        </div>
    </section>

    <!-- Section 9: High-Conversion Bottom CTA Banner -->
    <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<section class="cta-banner-gomia">
        <h2>Plan Your Seamless Relocation in Gomia Today!</h2>
        <p>
            Trust your household belongings or corporate transfer to Jharkhand's most experienced relocation team. Reach out to our Gomia move coordinator now for an immediate, upfront quotation.
        </p>
        <div class="cta-btns">
            <a href="tel:+918409531615" class="btn-call-primary" style="background: #f59e0b; color: #0f172a;">
                <i class="fa-solid fa-phone"></i> Call +91 8409531615
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%2C%20I%20need%20packers%20and%20movers%20services%20in%20Gomia." target="_blank" class="btn-quote-secondary" style="background: #25d366; border-color: #25d366; color: #ffffff;">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
