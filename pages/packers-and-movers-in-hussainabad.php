<?php
/**
 * Packers and Movers in Hussainabad - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Hussainabad, Japla, Son Nagar Corridor & Palamu District, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Hussainabad - 8409531615";
$page_description = "Top-ranked packers and movers in Hussainabad (Japla), Palamu. Professional household shifting, government officer transfers, car carriers, full transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in hussainabad, movers and packers hussainabad, hussainabad japla packers, household shifting hussainabad, car transport hussainabad, bike courier hussainabad, packers and movers palamu";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-hussainabad";
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
      "name": "Shree Ashirwad Packers and Movers - Hussainabad",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 55000",
        "keywords": "packers and movers in hussainabad, movers and packers hussainabad, hussainabad japla packers, household shifting hussainabad, car transport hussainabad, bike courier hussainabad, packers and movers palamu",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Sub-divisional Hospital Road, Near Japla Main Market & Nagar Panchayat",
        "addressLocality": "Hussainabad",
        "addressRegion": "Jharkhand",
        "postalCode": "822116",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 24.5320,
        "longitude": 84.0060
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
          "name": "Hussainabad"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Japla"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Haidarnagar"
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
          "name": "Packers and Movers in Hussainabad",
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
          "name": "What are the standard charges for household shifting from Hussainabad (Japla) to Daltonganj or Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Moving rates from Hussainabad depend on cargo inventory size and destination distance. Relocating a typical 1 BHK or 2 BHK home locally to Daltonganj (Medininagar - approx 85 km) ranges from Rs 6,500 to Rs 11,500. Shifting to Ranchi (approx 245 km) ranges from Rs 13,000 to Rs 22,000 with complete 5-layer protective packing, loading, highway toll taxes, and transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide relocation services for government employees, police, and railway staff in Hussainabad?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Shree Ashirwad Packers regularly executes official employee transfers for Sub-divisional administration officers, Civil Court magistrates, Nagar Panchayat executives, police officers, and East Central Railway employees stationed across Japla and Haidarnagar. We supply 100% compliant documentation including GST tax invoices, consignment receipts (LR), and transit insurance certificates."
          }
        },
        {
          "@type": "Question",
          "name": "How does your team protect fragile items from river sand dust and road shocks around Hussainabad?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Hussainabad's location on the Sone river basin brings seasonal sand dust and road vibrations along rural connecting roads. We deploy our specialized 5-layer defense wrapping system: virgin bubble wrap, heavy corrugated sheets, thermal foam edge protectors, moisture desiccants, and industrial stretch film that completely seals each item against fine dirt, road soot, and moisture."
          }
        },
        {
          "@type": "Question",
          "name": "Can you safely transport private cars and two-wheelers from Hussainabad across India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer door-to-door vehicle transport from Hussainabad (Japla) to Patna, Delhi, Kolkata, Ranchi, Bangalore, and across India using dedicated hydraulic car container carriers and wheel-locked bike carriers with full scratch-resistant body wrapping and transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "Do you handle relocations across the Sone river border to Rohtas and Dehri-on-Sone in Bihar?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we regularly manage cross-border relocations connecting Hussainabad to Dehri-on-Sone, Sasaram, Nauhatta, and Rohtas district across the Sone river, ensuring full commercial tax compliance, e-way bills, and transit passes."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide unpacking and furniture reassembly at the new destination?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our complete door-to-door package includes safe unloading, unpacking of all boxes, re-assembling beds, dining tables, and modular wardrobes, and placing each furniture item in your designated room before clearing away packing debris."
          }
        },
        {
          "@type": "Question",
          "name": "How much advance booking time is needed for shifting in Hussainabad?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For local moves within Palamu or Garhwa districts, 1 to 2 days advance notice is sufficient. For interstate moves to Patna, Kolkata, or Delhi, we recommend booking 3 to 5 days prior to reserve dedicated covered container trucks and finalize insurance underwriting."
          }
        },
        {
          "@type": "Question",
          "name": "Is full transit insurance included in your Hussainabad relocation quote?",
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
            --primary-accent: #4f46e5;
            --primary-hover: #4338ca;
            --secondary-amber: #f59e0b;
            --neutral-bg: #f8fafc;
            --card-border: #e2e8f0;
            --text-dark: #1e293b;
            --text-muted: #64748b;
        }

        .hussainabad-hero {
            background: linear-gradient(135deg, #312e81 0%, #0f172a 100%);
            color: #ffffff;
            padding: 70px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .hussainabad-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at top right, rgba(79, 70, 229, 0.25), transparent 65%);
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
            background: rgba(79, 70, 229, 0.25);
            border: 1px solid rgba(165, 180, 252, 0.35);
            color: #c7d2fe;
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
            color: #a5b4fc;
        }

        .hero-desc {
            font-size: 1.1rem;
            line-height: 1.65;
            color: #e0e7ff;
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
            color: #c7d2fe;
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
            background: #1e1b4b;
            color: #c7d2fe;
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
            color: #818cf8;
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
            color: #3730a3;
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
            padding-top: 75%;
            overflow: hidden;
            background: #f1f5f9;
        }

        .service-img-wrap img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
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
            background: #4f46e5;
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
            background: #312e81;
            color: #ffffff;
            padding: 14px 18px;
            font-weight: 600;
            font-family: 'Outfit', sans-serif;
            border-bottom: 2px solid #4f46e5;
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
            background: #eef2ff;
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
            color: #4f46e5;
            font-size: 0.8rem;
        }

        .locality-tag:hover {
            border-color: #4f46e5;
            background: #eef2ff;
            color: #3730a3;
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
            background: #eef2ff;
            color: #4f46e5;
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

        .cta-banner-hussainabad {
            background: linear-gradient(135deg, #312e81 0%, #0f172a 100%);
            border-radius: 14px;
            padding: 50px 30px;
            color: #ffffff;
            text-align: center;
            margin: 60px 0 20px;
            box-shadow: 0 15px 35px rgba(49, 46, 129, 0.25);
        }

        .cta-banner-hussainabad h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0 0 15px;
            color: #ffffff;
        }

        .cta-banner-hussainabad p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.05rem;
            color: #c7d2fe;
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
<section class="hussainabad-hero">
    <div class="hero-container">
        <div class="hero-text-content">
            <div class="hero-badge">
                <i class="fa-solid fa-landmark"></i> Sub-divisional Administration & Sone Basin Logistics
            </div>
            <h1 class="hero-title">Expert Packers and Movers in <span>Hussainabad</span></h1>
            <p class="hero-desc">
                Serving household shifting, civil court & administrative staff relocations, and interstate vehicle transport across Hussainabad, Japla, and the Palamu division. Delivering five-tier protective packaging, closed container fleets, and comprehensive transit insurance across Jharkhand, Bihar, and India.
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <h4>12+ Years</h4>
                    <p>Sub-divisional Moves</p>
                </div>
                <div class="stat-item">
                    <h4>7,500+</h4>
                    <p>Relocations Completed</p>
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
            <h3>Request Instant Moving Quote</h3>
            <p>Accurate quotes for court, government & family shifting</p>
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
                    <input type="text" id="move_origin" name="move_origin" value="Hussainabad (Japla)" required>
                </div>
                <div class="form-group-field">
                    <label for="move_destination"><i class="fa-solid fa-map-pin"></i> Destination City</label>
                    <input type="text" id="move_destination" name="move_destination" placeholder="e.g. Daltonganj, Ranchi, Patna, Delhi" required>
                </div>
                <div class="form-group-field">
                    <label for="move_size"><i class="fa-solid fa-truck-ramp-box"></i> Move Category</label>
                    <select id="move_size" name="move_size" required>
                        <option value="1BHK">1 BHK Household Shifting</option>
                        <option value="2BHK" selected>2 BHK Household Shifting</option>
                        <option value="3BHK">3 BHK Household Shifting</option>
                        <option value="Court_Govt">Civil Court / Govt Officer Quarters</option>
                        <option value="Vehicle">Vehicle Transport (Car / Bike)</option>
                        <option value="Commercial">Commercial / Trade Godown Move</option>
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
            <span>Government Registered & 100% Claim Compliant Invoices</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-route"></i>
            <span>Daily Corridors to Daltonganj, Dehri & Patna</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-shield-virus"></i>
            <span>5-Layer Dust-Proof & Anti-Moisture Packaging</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-truck-moving"></i>
            <span>Direct Pickup Across Hussainabad, Japla & Haidarnagar</span>
        </div>
    </div>
</div>

<!-- Main Body Content -->
<main class="page-content-wrapper">

    <!-- Section 1: In-depth Hussainabad Relocation Ecosystem -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Palamu District Sub-divisional Movers</span>
            <h2 class="section-title">The Leading Relocation Partner for Hussainabad & Japla</h2>
            <p class="section-intro">
                Located alongside the serene flow of the Sone River in the northwestern quadrant of Palamu district, Hussainabad represents an esteemed sub-divisional administrative center anchored around the prominent railway junction of Japla. Renowned for its industrial heritage as the site of India's earliest cement production facilities (the historic Sone Valley Portland Cement Company established in 1921), Hussainabad today hosts Sub-divisional Civil Courts, block administrative headquarters, East Central Railway junction facilities, grain mandis, and an energetic mercantile community. Relocating households and commercial assets across this vital junction requires an experienced logistics provider who navigates river basin environments and interstate routes with seasoned precision.
            </p>
        </div>

        <p>
            Shree Ashirwad Packers and Movers has managed residential relocations and official government transfers across Hussainabad, Japla, Dangwar, and Haidarnagar for more than twelve years. As civil court judges, magistrates, court advocates, administrative officers, revenue inspectors, police personnel, and railway staff receive transfer orders to Daltonganj, Garhwa, Ranchi, Patna, or Gaya, our professional team delivers turnkey solutions. From cataloging goods and packaging delicate personal belongings to highway freight and full room setup at your new destination, we handle every assignment with utmost care.
        </p>

        <p>
            The geographical and climate conditions of Hussainabad present unique shifting factors. The broad sandbars of the Sone River generate substantial airborne sand dust during summer dry spells, while monsoon rain brings high relative humidity along the river basin. Unprotected household goods, wooden furniture, and electronics face degradation if packed with substandard materials. Shree Ashirwad Packers counters these elements with our signature 5-layer defensive wrapping system: virgin air bubble wrap, thick 5-ply corrugated sheets, thermal foam edge protectors, moisture-absorbing silica pouches, and an outer seal of heavy industrial stretch wrap that locks out sand grit, soot, and moisture.
        </p>

        <p>
            Public sector and civil service employees require exact documentation to settle transfer claim expenses. Shree Ashirwad Packers delivers 100% compliant paperwork: GST-registered computerized tax invoices, authenticated Lorry Receipts (LR), declared valuation inventory sheets, and comprehensive transit insurance cover notes from leading national underwriters. This guarantees prompt financial reimbursement for employees of civil courts, police departments, SBI, educational institutions, and state government offices without bureaucratic friction.
        </p>

        <p>
            Our diverse vehicle fleet features modern, all-weather closed-container vehicles ranging from nimble mini-carriers (Tata Ace, Mahindra Bolero Maxi Truck) capable of navigating older residential quarters and market streets, to heavy 19-foot and 24-foot container trucks designed for long-distance highway travel. All trucks are equipped with real-time GPS tracking and driven by vetted highway captains with comprehensive experience navigating the Son Nagar–Garhwa corridor and connecting state highways towards Daltonganj, Aurangabad, and Patna.
        </p>
    </section>

    <!-- Section 2: Core Relocation Services with Image Whitelist -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Specialized Moving Verticals</span>
            <h2 class="section-title">Comprehensive Relocation Services in Hussainabad</h2>
            <p class="section-intro">
                Tailored specifically for judicial officers, government personnel, business traders, and residential families across Hussainabad and Palamu.
            </p>
        </div>

        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household shifting and carton packing in Hussainabad Japla" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Household Shifting & Residential Relocation</h3>
                    <p>
                        Turnkey home moving solutions for families living in Japla Bazar, Court Road, Station Colony, and Cement Factory quarters. We wrap heavy refrigerators, televisions, wooden bedroom suites, delicate porcelain, and kitchenware with impenetrable shockproof buffers.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> High-density virgin bubble wrap and 5-ply corrugated carton boxes</li>
                        <li><i class="fa-solid fa-circle-check"></i> Professional dismantling and re-assembly of beds and wardrobes</li>
                        <li><i class="fa-solid fa-circle-check"></i> Moisture-proof stretch wrapping guarding against river humidity</li>
                    </ul>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Commercial cargo and door to door delivery truck in Hussainabad" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Commercial Trade & Judicial Office Moving</h3>
                    <p>
                        Specialized relocation for law offices, trading wholesalers, commercial godowns, and administrative departments along Station Road and Court Road. We handle legal archive files, office computers, and commercial inventory under strict confidentiality.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> Number-coded archive carton labeling for official records</li>
                        <li><i class="fa-solid fa-circle-check"></i> GST-registered tax invoices and e-way bill compliance</li>
                        <li><i class="fa-solid fa-circle-check"></i> Flexible weekend execution ensuring zero operational downtime</li>
                    </ul>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and bike transport carrier in Hussainabad" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Car & Two-Wheeler Transportation</h3>
                    <p>
                        Relocate your private automobile or two-wheeler safely from Hussainabad to any metropolitan destination across India. We operate specialized closed vehicle trailers equipped with hydraulic loading ramps, wheel locking clamps, and protective body covers.
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
                    <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial warehouse storage for Hussainabad cargo" loading="lazy">
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
                Combining high-durability packaging materials with seasoned highway transport protocols to guarantee complete zero-damage transit across Jharkhand, Bihar, and India.
            </p>
        </div>

        <div class="method-steps">
            <div class="method-card">
                <span class="step-number">01</span>
                <h4>Technical Survey</h4>
                <p>
                    Our relocation coordinator reviews your belongings in Hussainabad via on-site visit or digital video survey to determine cargo volume, packaging needs, fragile crating, and vehicle sizing.
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
                    Closed-container trucks depart Hussainabad via connecting state highways towards Daltonganj, Aurangabad, or Dehri. Experienced drivers maintain steady speeds under satellite GPS tracking.
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
            <h2 class="section-title">Packers and Movers Charges in Hussainabad</h2>
            <p class="section-intro">
                Clear, upfront quotes with zero hidden extras. Review our standard rate guide for moves within Palamu district, across Jharkhand, and interstate.
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
                        <td><strong>1 BHK / Govt Quarter</strong></td>
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
                        <td><strong>Commercial Trade & Law Office</strong></td>
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
            <h2 class="section-title">Estimated Transit Timelines from Hussainabad</h2>
            <p class="section-intro">
                Connecting via Son Nagar-Garhwa rail line and state highways to Daltonganj, Aurangabad, Dehri-on-Sone, and national highway networks.
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
                        <td><strong>Hussainabad to Daltonganj (Medininagar)</strong></td>
                        <td>85 Km</td>
                        <td>SH via Haidarnagar & Pandu</td>
                        <td>Same Day (2 - 3 Hours)</td>
                        <td>Daily 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Hussainabad to Dehri-on-Sone / Sasaram (Bihar)</strong></td>
                        <td>60 Km</td>
                        <td>Via Dangwar / Rohtas link road</td>
                        <td>Same Day (2 - 3 Hours)</td>
                        <td>Daily 2 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Hussainabad to Aurangabad (Bihar)</strong></td>
                        <td>70 Km</td>
                        <td>Via Hariharganj / NH-139 link</td>
                        <td>Same Day (2 - 3 Hours)</td>
                        <td>Daily Regular Fleets</td>
                    </tr>
                    <tr>
                        <td><strong>Hussainabad to Gaya</strong></td>
                        <td>125 Km</td>
                        <td>Via Aurangabad to NH-19 GT Road</td>
                        <td>Same Day (4 - 5 Hours)</td>
                        <td>Daily Service</td>
                    </tr>
                    <tr>
                        <td><strong>Hussainabad to Patna</strong></td>
                        <td>210 Km</td>
                        <td>Via Aurangabad / Daudnagar (NH-139)</td>
                        <td>Same Day / Next Day (6 - 7 Hours)</td>
                        <td>Daily Scheduled Fleets</td>
                    </tr>
                    <tr>
                        <td><strong>Hussainabad to Ranchi</strong></td>
                        <td>245 Km</td>
                        <td>Via Daltonganj & Latehar (NH-39)</td>
                        <td>1 - 2 Days</td>
                        <td>Daily Regular Service</td>
                    </tr>
                    <tr>
                        <td><strong>Hussainabad to Varanasi (UP)</strong></td>
                        <td>180 Km</td>
                        <td>Via Dehri-on-Sone to NH-19 GT Road</td>
                        <td>Same Day (5 - 6 Hours)</td>
                        <td>Alternate Days</td>
                    </tr>
                    <tr>
                        <td><strong>Hussainabad to Delhi / NCR</strong></td>
                        <td>1,020 Km</td>
                        <td>Via Sasaram / Varanasi to NH-19</td>
                        <td>3 - 4 Days</td>
                        <td>Weekly Scheduled Fleets</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section 6: Specific Localities and Neighborhoods Covered -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Locality Coverage</span>
            <h2 class="section-title">Wards, Colonies & Surrounding Belts Served in Hussainabad</h2>
            <p class="section-intro">
                Our local logistics network maintains deep operational familiarity with every residential sector, court colony, and rural panchayat across Hussainabad and Japla.
            </p>
        </div>

        <p>
            Whether your home is located within the bustling marketplace around Japla Station Road, along Court Road near the Sub-divisional Civil Courts, inside the historic Cement Factory Colony, near Hospital Road, or in surrounding agricultural settlements such as Dangwar, Karar, Deori, Mahuadanr link, or the Son River ghats, our dedicated pickup vehicles arrive punctually. We deploy scouts to inspect rural bridges and narrow colony roads ahead of moving day to ensure that our container vehicles navigate smoothly without unexpected delays.
        </p>

        <p>
            For residences located on narrow inner bazar lanes or riverfront farms, our dispatch uses nimble feeder vehicles like the Mahindra Bolero Maxi Truck and Tata Ace to safely ferry packed cartons to our heavy container carriers waiting on the main state highway road. This avoids difficult manual portage and ensures that glassware, smart televisions, and fine porcelain remain completely unharmed.
        </p>

        <div class="localities-cloud">
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Japla Station Road</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Civil Court Road Hussainabad</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Cement Factory Colony</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Japla Main Bazar</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Hospital Road Area</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Dangwar Sone River Border</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Karar Panchayat</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Deori Village</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Haidarnagar Border Link</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Sone River Basin Colony</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Rohtas Border Corridor</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Sub-Divisional BDO Campus</span>
        </div>
    </section>

    <!-- Section 7: Why Choose Shree Ashirwad Packers in Hussainabad -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Distinct Advantages</span>
            <h2 class="section-title">Why Shree Ashirwad is Hussainabad's Top Moving Choice</h2>
            <p class="section-intro">
                Shifting household valuables or official assets requires proven expertise, dedicated vehicles, and certified safety standards.
            </p>
        </div>

        <div class="why-us-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-scale-balanced"></i></div>
                <h4>Judicial & Administrative Expertise</h4>
                <p>Over a decade of handling official transfers for civil courts, sub-divisional magistrates, and government departments with approved documentation.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-truck-shield"></i></div>
                <h4>Enclosed Container Fleets</h4>
                <p>Weatherproof steel container trucks prevent rain, sand dust, and highway soot from contaminating your household goods during transit.</p>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58200.123456789!2d84.0000!3d24.5300!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x398c05123456789%3A0x7d6a5d4e3c2b1a0!2sHusainabad%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Hussainabad Palamu"></iframe>
    </div>

    <!-- Section 8: Frequently Asked Questions -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Got Questions?</span>
            <h2 class="section-title">Frequently Asked Questions About Shifting in Hussainabad</h2>
            <p class="section-intro">
                Answers to common inquiries regarding our packing processes, rates, insurance coverage, and schedule management in Hussainabad.
            </p>
        </div>

        <div class="faq-accordion">
            <details class="faq-box" open>
                <summary>What are the standard charges for household shifting from Hussainabad (Japla) to Daltonganj or Ranchi?</summary>
                <div class="faq-content">
                    Moving charges from Hussainabad depend on inventory volume and destination distance. A typical 1 BHK or 2 BHK shifting locally to Daltonganj (approx 85 km) ranges from Rs 6,500 to Rs 12,000. Shifting to Ranchi (approx 245 km) ranges from Rs 13,000 to Rs 22,000 with complete 5-layer protective packing, loading, highway toll fees, and transit insurance.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you provide relocation services for judicial officers, civil court staff, and administrative personnel in Hussainabad?</summary>
                <div class="faq-content">
                    Yes, Shree Ashirwad Packers specializes in official government employee transfers for Sub-divisional Court staff, judicial magistrates, block administration officers, police personnel, and East Central Railway staff stationed at Japla. We supply 100% compliant documentation including GST tax invoices, consignment receipts (LR), and transit insurance certificates for prompt reimbursement.
                </div>
            </details>

            <details class="faq-box">
                <summary>How does your team protect fragile items from river sand dust and road shocks around Hussainabad?</summary>
                <div class="faq-content">
                    Hussainabad's location on the Sone river basin brings seasonal sand dust and road vibrations along rural connecting roads. We deploy our specialized 5-layer defense wrapping system: virgin bubble wrap, heavy corrugated sheets, thermal foam edge protectors, moisture desiccants, and industrial stretch film that completely seals each item against fine dirt, road soot, and moisture.
                </div>
            </details>

            <details class="faq-box">
                <summary>Can you transport private cars and two-wheelers safely from Hussainabad across India?</summary>
                <div class="faq-content">
                    Yes. We offer door-to-door vehicle transport from Hussainabad (Japla) to Patna, Delhi, Kolkata, Ranchi, Bangalore, and across India using dedicated hydraulic car container carriers and wheel-locked bike carriers with full scratch-resistant body wrapping and transit insurance.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you handle relocations across the Sone river border to Rohtas and Dehri-on-Sone in Bihar?</summary>
                <div class="faq-content">
                    Yes, we regularly handle cross-border relocations connecting Hussainabad to Dehri-on-Sone, Sasaram, Nauhatta, and Rohtas district across the Sone river, ensuring full commercial tax compliance, e-way bills, and transit passes.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you provide unpacking and furniture reassembly at the new destination?</summary>
                <div class="faq-content">
                    Yes. Our complete door-to-door package includes safe unloading, unpacking of all boxes, re-assembling beds, dining tables, and modular wardrobes, and placing each furniture item in your designated room before clearing away packing debris.
                </div>
            </details>

            <details class="faq-box">
                <summary>How much advance booking time is needed for shifting in Hussainabad?</summary>
                <div class="faq-content">
                    For local moves within Palamu or Garhwa districts, 1 to 2 days advance notice is sufficient. For interstate moves to Patna, Kolkata, or Delhi, we recommend booking 3 to 5 days prior to reserve dedicated covered container trucks and finalize insurance underwriting.
                </div>
            </details>

            <details class="faq-box">
                <summary>Is full transit insurance included in your Hussainabad relocation quote?</summary>
                <div class="faq-content">
                    Yes, comprehensive transit insurance is arranged through recognized public and private insurance underwriters. It covers physical damages, road overturning, fire, theft, or unforeseen transit hazards from doorstep loading to delivery unloading.
                </div>
            </details>
        </div>
    </section>

    <!-- Section 9: High-Conversion Bottom CTA Banner -->
    <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<section class="cta-banner-hussainabad">
        <h2>Plan Your Seamless Relocation in Hussainabad Today!</h2>
        <p>
            Trust your household belongings or official transfer to Jharkhand's most experienced relocation team. Reach out to our Hussainabad move coordinator now for an immediate, upfront quotation.
        </p>
        <div class="cta-btns">
            <a href="tel:+918409531615" class="btn-call-primary" style="background: #f59e0b; color: #0f172a;">
                <i class="fa-solid fa-phone"></i> Call +91 8409531615
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%2C%20I%20need%20packers%20and%20movers%20services%20in%20Hussainabad." target="_blank" class="btn-quote-secondary" style="background: #25d366; border-color: #25d366; color: #ffffff;">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
