<?php
/**
 * Packers and Movers in Ghatshila - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Ghatshila, Moubhandar, Kasida, Galudih & East Singhbhum, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Ghatshila - 8409531615 | Shree Ashirwad Packers";
$page_description = "ISO certified packers and movers in Ghatshila, East Singhbhum. Safe residential shifting, HCL Moubhandar moves, car transport, Subarnarekha corridor transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in ghatshila, movers and packers ghatshila, moubhandar packers and movers, ghatshila household shifting, car transport ghatshila, bike courier ghatshila, packers and movers east singhbhum";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-ghatshila";
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
      "name": "Shree Ashirwad Packers and Movers - Ghatshila",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 58000",
        "keywords": "packers and movers in ghatshila, movers and packers ghatshila, moubhandar packers and movers, ghatshila household shifting, car transport ghatshila, bike courier ghatshila, packers and movers east singhbhum",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Main Road, Near Ghatshila Railway Station, Moubhandar Road",
        "addressLocality": "Ghatshila",
        "addressRegion": "Jharkhand",
        "postalCode": "832303",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 22.5800,
        "longitude": 86.4800
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
          "name": "Ghatshila"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Moubhandar"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Galudih"
        },
        {
          "@type": "AdministrativeArea",
          "name": "East Singhbhum"
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
          "name": "Packers and Movers in Ghatshila",
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
          "name": "How are moving charges calculated for shifting from Ghatshila to Jamshedpur or Kolkata?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Moving rates from Ghatshila depend on cargo volume (such as 1 BHK, 2 BHK, or industrial items), packing material specifications, ground-to-floor elevator access, and destination distance. Inter-city moves to Jamshedpur (45 km) start at approximately Rs 5,500 to Rs 12,000, while moves to Kolkata (215 km) range between Rs 12,000 and Rs 28,000 including full transit insurance coverage."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide relocation services for HCL Moubhandar employees and officers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, Shree Ashirwad Packers and Movers provides specialized PSU and corporate transfer relocation services for Hindustan Copper Limited (HCL/ICC) personnel in Moubhandar and Dahigora. We provide GST-compliant invoices, consignment tracking notes (LR), itemized packing inventory lists, and transit insurance policies accepted for employee reimbursement."
          }
        },
        {
          "@type": "Question",
          "name": "How does your team safeguard electronics against humidity along the Subarnarekha river basin?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Ghatshila sits along the Subarnarekha river where seasonal moisture can affect sensitive electronic circuitry. We wrap all appliances, televisions, laptops, and refrigerators in anti-static air bubble wrap, insert silica gel moisture absorbers, wrap with virgin stretch film, and enclose them in heavy 5-ply corrugated carton boxes."
          }
        },
        {
          "@type": "Question",
          "name": "Can you safely transport private cars and two-wheelers from Ghatshila across India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer door-to-door vehicle transport from Ghatshila using dedicated hydraulic car container carriers and wheel-locked bike carriers. All two-wheelers and cars receive high-grade lashing, bumper wrapping, pre-dispatch scratch inspection, and comprehensive transit insurance cover."
          }
        },
        {
          "@type": "Question",
          "name": "What packing materials do you use for residential relocations in Ghatshila?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We deploy a five-layer defense packaging system: multi-layered air bubble wraps, high-density corrugated sheets, thermal polystyrene foam corner guards, heavy-duty moisture-resistant shrink wraps, and strapping tape. Fragile crockery and glassware receive custom wooden crating when required."
          }
        },
        {
          "@type": "Question",
          "name": "How early should I schedule my moving date in Ghatshila?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We recommend confirming your booking 2 to 4 days in advance for local shifting in Ghatshila or Jamshedpur, and 5 to 7 days ahead for long-distance inter-state moves to Kolkata, Delhi, Patna, Bangalore, or Mumbai. We also accommodate emergency same-day moves depending on fleet availability."
          }
        },
        {
          "@type": "Question",
          "name": "Do you serve outer areas such as Galudih, Kasida, Dahigora, and Musabani?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our operational network covers Ghatshila town, Moubhandar, Kasida, Dahigora, Phuldungri, Galudih, Gouribunj, College Road, Tumangdungri, Musabani, and Jaduguda across the East Singhbhum district."
          }
        },
        {
          "@type": "Question",
          "name": "Is full transit insurance included in your Ghatshila relocation quote?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We arrange comprehensive transit insurance covering physical damages, accidental overturns, fire, theft, and natural hazards during transit. Our documentation is completely clear and supported by prominent national insurance providers."
          }
        }
      ]
    }
    </script>

    <style>
        :root {
            --primary-navy: #0f172a;
            --primary-accent: #2563eb;
            --primary-hover: #1d4ed8;
            --secondary-amber: #f59e0b;
            --neutral-bg: #f8fafc;
            --card-border: #e2e8f0;
            --text-dark: #1e293b;
            --text-muted: #64748b;
        }

        .ghatshila-hero {
            background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 100%);
            color: #ffffff;
            padding: 70px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .ghatshila-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at top right, rgba(37, 99, 235, 0.25), transparent 60%);
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
            background: rgba(37, 99, 235, 0.2);
            border: 1px solid rgba(147, 197, 253, 0.3);
            color: #93c5fd;
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
            color: #60a5fa;
        }

        .hero-desc {
            font-size: 1.1rem;
            line-height: 1.65;
            color: #cbd5e1;
            margin-bottom: 25px;
        }

        .hero-stats {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 15px;
            margin-bottom: 30px;
            padding: 18px;
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.1);
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
            color: #94a3b8;
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
            background: #1e293b;
            color: #cbd5e1;
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
            color: #1e3a8a;
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
            background: #2563eb;
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
            background: #0f172a;
            color: #ffffff;
            padding: 14px 18px;
            font-weight: 600;
            font-family: 'Outfit', sans-serif;
            border-bottom: 2px solid #334155;
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
            background: #f1f5f9;
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
            color: #2563eb;
            font-size: 0.8rem;
        }

        .locality-tag:hover {
            border-color: #2563eb;
            background: #eff6ff;
            color: #1d4ed8;
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
            background: #eff6ff;
            color: #2563eb;
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

        .cta-banner-ghatshila {
            background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
            border-radius: 14px;
            padding: 50px 30px;
            color: #ffffff;
            text-align: center;
            margin: 60px 0 20px;
            box-shadow: 0 15px 35px rgba(15, 23, 42, 0.25);
        }

        .cta-banner-ghatshila h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0 0 15px;
            color: #ffffff;
        }

        .cta-banner-ghatshila p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.05rem;
            color: #cbd5e1;
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
<section class="ghatshila-hero">
    <div class="hero-container">
        <div class="hero-text-content">
            <div class="hero-badge">
                <i class="fa-solid fa-shield-halved"></i> ISO 9001:2015 Certified Relocation Partner
            </div>
            <h1 class="hero-title">Premier Packers and Movers in <span>Ghatshila</span></h1>
            <p class="hero-desc">
                Seamless household shifting, HCL Moubhandar transfer solutions, and reliable vehicle transport along the scenic Subarnarekha valley. With multi-layered protective packaging and dedicated closed container trucks, Shree Ashirwad Packers and Movers guarantees 100% damage-free transit across Jharkhand and India.
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <h4>12+ Years</h4>
                    <p>Relocation Excellence</p>
                </div>
                <div class="stat-item">
                    <h4>8,400+</h4>
                    <p>Moves Executed</p>
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
                    <i class="fa-solid fa-calculator"></i> Get Fast Moving Quote
                </a>
            </div>
        </div>

        <!-- Quick Form Card -->
        <div class="hero-form-card" id="quick-quote">
            <h3>Request Instant Moving Quote</h3>
            <p>Reliable pricing with zero hidden charges</p>
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
                    <input type="text" id="move_origin" name="move_origin" value="Ghatshila / Moubhandar" required>
                </div>
                <div class="form-group-field">
                    <label for="move_destination"><i class="fa-solid fa-map-pin"></i> Destination City</label>
                    <input type="text" id="move_destination" name="move_destination" placeholder="e.g. Jamshedpur, Kolkata, Ranchi, Delhi" required>
                </div>
                <div class="form-group-field">
                    <label for="move_size"><i class="fa-solid fa-truck-ramp-box"></i> Move Size</label>
                    <select id="move_size" name="move_size" required>
                        <option value="1BHK">1 BHK Household</option>
                        <option value="2BHK" selected>2 BHK Household</option>
                        <option value="3BHK">3 BHK Household</option>
                        <option value="4BHK_Villa">4+ BHK / Independent Villa</option>
                        <option value="Vehicle">Vehicle Transport (Car / Bike)</option>
                        <option value="Corporate_Industrial">Industrial / Corporate Shifting</option>
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
            <span>Government Registered & GST Compliant</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-truck-fast"></i>
            <span>Daily Corridors to Jamshedpur & Kolkata</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-shield-virus"></i>
            <span>Zero Damage Anti-Shock Packaging</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-file-invoice-dollar"></i>
            <span>HCL & Corporate Claim Reimbursement Bills</span>
        </div>
    </div>
</div>

<!-- Main Body Content -->
<main class="page-content-wrapper">

    <!-- Section 1: In-depth Ghatshila Relocation Ecosystem -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Comprehensive Local Logistics Expertise</span>
            <h2 class="section-title">The Trusted Moving Authority for Ghatshila and East Singhbhum</h2>
            <p class="section-intro">
                Nestled on the meandering banks of the Subarnarekha River and cradled by emerald forested hill ranges, Ghatshila holds a singular prominence in Jharkhand. As the historical cradle of India's copper smelting industry at Hindustan Copper Limited (HCL/ICC) in Moubhandar, and the cherished literary haven of Bibhuti Bhushan Bandyopadhyay, Ghatshila bridges industrial vigour with tranquil residential life. Relocating within or beyond this unique terrain requires an experienced logistics team that understands local geographies, industrial plant access protocols, seasonal river-basin moisture, and national highway transit arteries.
            </p>
        </div>

        <p>
            Shree Ashirwad Packers and Movers has served the residents, mining executives, corporate engineers, central government officers, and commercial entrepreneurs of Ghatshila for more than twelve years. Whether you are transitioning from the copper plant colonies of Moubhandar to another metropolitan center, shifting a sprawling residential household from Dahigora or Kasida to Jamshedpur, or relocating academic personnel from Ghatshila College Road, our logistics fleet provides complete tranquility. With our main hub in Jharkhand and dedicated corridors along National Highway 18 (NH-18 / old NH-33), we ensure punctual pickups, impenetrable packaging, and pristine door-to-door delivery.
        </p>

        <p>
            Transporting goods along the Subarnarekha valley introduces distinct climate and road nuances. During monsoon and post-monsoon months, ambient humidity near riverbanks requires specialized moisture-barrier wrapping to prevent oxidation on expensive household electronics, brass artifacts, and wooden furniture finishes. Furthermore, Ghatshila's connecting lanes—from Gouribunj and Phuldungri hillocks to the interior corridors of Musabani, Galudih, and Jaduguda—feature diverse road conditions. Our fleet combines heavy 19-foot and 24-foot covered container carriers with nimble mini-transporters (Tata 407, Bolero Maxi Truck, Eicher Pro), ensuring hassle-free navigation even in tighter residential alleys without double-handling risks.
        </p>

        <p>
            For corporate and public sector undertakings (PSU) employees, moving is not merely about physical transportation—it is also about strict documentation. We provide verified, transparent paperwork: computerized consignment notes (Lorry Receipts - LR), comprehensive goods value declaration sheets, GST-registered invoices, and comprehensive insurance cover notes from leading national underwriters. This guarantees that your relocation expenses can be submitted smoothly to corporate employer claim desks without bureaucratic hindrances.
        </p>
    </section>

    <!-- Section 2: Core Relocation Services with Image Whitelist -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Tailored Relocation Verticals</span>
            <h2 class="section-title">Professional Packing & Moving Services in Ghatshila</h2>
            <p class="section-intro">
                Every relocation possesses distinct characteristics. We engineer specialized solutions matching your inventory volume, delicate valuables, and delivery timeline requirements.
            </p>
        </div>

        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household shifting and carton packing in Ghatshila" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Household Shifting & Villa Relocation</h3>
                    <p>
                        Comprehensive home shifting solutions for families in Ghatshila, Moubhandar, Dahigora, and Kasida. From multi-door refrigerators, plush sofa sets, and modular king-size beds to delicate bone china, crystal stemware, and cherished family heirlooms, our certified crew packs every possession with military-level precision.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> High-grade virgin bubble wrap and corrugated carton defense</li>
                        <li><i class="fa-solid fa-circle-check"></i> Furniture dismantling, labeling, and room-by-room reassembly</li>
                        <li><i class="fa-solid fa-circle-check"></i> Dedicated wardrobe cartons for wrinkle-free clothes moving</li>
                    </ul>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Industrial cargo and door to door delivery truck in Ghatshila" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>HCL Moubhandar & Industrial Cargo Moves</h3>
                    <p>
                        Customized logistical support for copper plant suppliers, industrial workshops, laboratories, and commercial offices across East Singhbhum. We handle heavy electrical panels, industrial machinery spares, IT workstations, servers, and executive corporate belongings with strict handling protocols.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> Heavy machinery lashing and anti-skid wooden crating</li>
                        <li><i class="fa-solid fa-circle-check"></i> GST-compliant official bills and transit insurance documentation</li>
                        <li><i class="fa-solid fa-circle-check"></i> Express weekend and off-hour shifting for zero productivity loss</li>
                    </ul>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car transport carrier loading service in Ghatshila" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Car & Bike Transportation</h3>
                    <p>
                        Relocate your prized automobile or motorcycle from Ghatshila to any major Indian city without adding unneeded mileage or risking road wear. We utilize closed container vehicle trailers equipped with hydraulic ramps, wheel clamps, and protective body covers.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> Detailed pre-transit vehicle inspection report with photographic record</li>
                        <li><i class="fa-solid fa-circle-check"></i> Full body multi-layer bubble wrapping for scooters and motorbikes</li>
                        <li><i class="fa-solid fa-circle-check"></i> Live satellite GPS tracking throughout the transit journey</li>
                    </ul>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial goods storage warehouse for Ghatshila cargo" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Secure Warehousing & Long-Term Storage</h3>
                    <p>
                        Need temporary or extended storage for household goods, excess industrial inventory, or commercial merchandise while renovating or relocating? Our modern, 24/7 CCTV-monitored, moisture-controlled warehouses protect your goods from humidity, pests, and fire hazards.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> Automated round-the-clock digital surveillance and security guards</li>
                        <li><i class="fa-solid fa-circle-check"></i> Weekly pest control, rodent repellent, and moisture barrier protection</li>
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
            <h2 class="section-title">Our Five-Tier Packing & Transit Methodology</h2>
            <p class="section-intro">
                We combine scientific packing material selection with rigorous transit safety protocols to safeguard your prized assets against shocks, vibrations, moisture, and road frictions.
            </p>
        </div>

        <div class="method-steps">
            <div class="method-card">
                <span class="step-number">01</span>
                <h4>Technical Survey</h4>
                <p>
                    Our relocation counselor conducts an in-person or high-definition virtual inventory assessment in Ghatshila to analyze cargo volume, identify delicate antique items, check floor stairway access, and plan vehicle selection.
                </p>
            </div>

            <div class="method-card">
                <span class="step-number">02</span>
                <h4>5-Layer Defense Packing</h4>
                <p>
                    Every item receives multi-tiered shielding: virgin air bubble wrap, heavy 5-ply corrugated sheets, thermal polystyrene foam edge protectors, silica moisture desiccants, and tear-resistant stretch wrap.
                </p>
            </div>

            <div class="method-card">
                <span class="step-number">03</span>
                <h4>Scientific Weight Loading</h4>
                <p>
                    Heavy appliances and hardwood furniture bases are anchored on rubberized dunnage mats on the truck floor, while lighter carton boxes are secured above using industrial cargo safety straps.
                </p>
            </div>

            <div class="method-card">
                <span class="step-number">04</span>
                <h4>GPS Highway Transit</h4>
                <p>
                    Closed-container trucks depart along NH-18 under continuous satellite telematics tracking. Experienced highway drivers maintain controlled speeds to neutralize vibration and rough terrain shocks.
                </p>
            </div>

            <div class="method-card">
                <span class="step-number">05</span>
                <h4>Unpacking & Room Setup</h4>
                <p>
                    At your destination, our trained team unloads, checks inventory against the consignment sheet, carefully unwraps cartons, reassembles furniture items, and cleans away debris before departure.
                </p>
            </div>
        </div>
    </section>

    <!-- Section 4: Transparent Cost Breakdown Table -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Clear & Transparent Pricing</span>
            <h2 class="section-title">Packers and Movers Charges in Ghatshila</h2>
            <p class="section-intro">
                No hidden costs, no unexpected surcharges. We deliver honest, upfront quotations that outline every packaging, labor, freight, and insurance component clearly.
            </p>
        </div>

        <div class="data-table-container">
            <table class="custom-data-table">
                <thead>
                    <tr>
                        <th>Shifting Type</th>
                        <th>Packing Material & Crew</th>
                        <th>Local Shifting (Within 50 Km)</th>
                        <th>Intercity Shifting (100 - 500 Km)</th>
                        <th>Long Distance (500+ Km)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Apartment</strong></td>
                        <td>Standard Bubble + Corrugated Boxes (2 Crew)</td>
                        <td>Rs 3,500 - 6,500</td>
                        <td>Rs 8,500 - 15,000</td>
                        <td>Rs 16,000 - 26,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Apartment</strong></td>
                        <td>5-Layer Premium Packing (3-4 Crew)</td>
                        <td>Rs 6,000 - 10,500</td>
                        <td>Rs 13,000 - 22,000</td>
                        <td>Rs 24,000 - 38,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Home</strong></td>
                        <td>Heavy Duty Protective Wrapping (4-6 Crew)</td>
                        <td>Rs 9,500 - 16,000</td>
                        <td>Rs 19,000 - 32,000</td>
                        <td>Rs 34,000 - 52,000</td>
                    </tr>
                    <tr>
                        <td><strong>4+ BHK / Luxury Bungalow</strong></td>
                        <td>Custom Crating + Comprehensive Crew (6-8 Crew)</td>
                        <td>Rs 14,000 - 24,000</td>
                        <td>Rs 28,000 - 46,000</td>
                        <td>Rs 48,000 - 75,000</td>
                    </tr>
                    <tr>
                        <td><strong>Two Wheeler (Bike / Scooter)</strong></td>
                        <td>Wheel-Lashing + Bubble/Corrugated Wrap</td>
                        <td>Rs 1,500 - 2,800</td>
                        <td>Rs 3,200 - 5,500</td>
                        <td>Rs 5,500 - 9,500</td>
                    </tr>
                    <tr>
                        <td><strong>Four Wheeler (Sedan / SUV)</strong></td>
                        <td>Dedicated Hydraulic Container Carrier</td>
                        <td>Rs 3,500 - 5,500</td>
                        <td>Rs 8,000 - 14,000</td>
                        <td>Rs 14,500 - 26,000</td>
                    </tr>
                    <tr>
                        <td><strong>Corporate & Industrial Shifting</strong></td>
                        <td>Machinery Crating + Heavy Dunnage</td>
                        <td>Custom Quote</td>
                        <td>Project Assessment</td>
                        <td>Dedicated Fleets</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.85rem; color: #64748b; font-style: italic;">
            *Note: Final estimates vary based on cargo volume, elevator availability, fragile crating requirements, toll charges, and optional value-declared comprehensive transit insurance coverage.
        </p>
    </section>

    <!-- Section 5: Transit Time & Route Feasibility Guide -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Transit Corridors</span>
            <h2 class="section-title">Estimated Transit Timelines from Ghatshila</h2>
            <p class="section-intro">
                Strategically linked via National Highway 18 and the main South Eastern Railway trunk route, Ghatshila offers expedited freight connectivity across Eastern, Central, and Northern India.
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
                        <td><strong>Ghatshila to Jamshedpur (Tatanagar)</strong></td>
                        <td>45 Km</td>
                        <td>NH-18 (via Galudih & Pipla)</td>
                        <td>Same Day (2 - 4 Hours)</td>
                        <td>Daily 3 Departures</td>
                    </tr>
                    <tr>
                        <td><strong>Ghatshila to Ranchi</strong></td>
                        <td>175 Km</td>
                        <td>NH-18 to NH-43 (via Chandil & Bundu)</td>
                        <td>Same Day / Next Morning (5 - 7 Hours)</td>
                        <td>Daily Regular Fleet</td>
                    </tr>
                    <tr>
                        <td><strong>Ghatshila to Kolkata / Howrah</strong></td>
                        <td>215 Km</td>
                        <td>NH-18 to NH-16 (via Kharagpur)</td>
                        <td>1 - 2 Days</td>
                        <td>Alternate Days</td>
                    </tr>
                    <tr>
                        <td><strong>Ghatshila to Kharagpur (WB)</strong></td>
                        <td>95 Km</td>
                        <td>NH-18 (via Jhargram / Lodhashuli)</td>
                        <td>Same Day (3 - 5 Hours)</td>
                        <td>Daily Service</td>
                    </tr>
                    <tr>
                        <td><strong>Ghatshila to Bhubaneshwar / Cuttack</strong></td>
                        <td>310 Km</td>
                        <td>NH-18 to NH-16 (via Baripada & Balasore)</td>
                        <td>1 - 2 Days</td>
                        <td>Bi-Weekly</td>
                    </tr>
                    <tr>
                        <td><strong>Ghatshila to Patna</strong></td>
                        <td>440 Km</td>
                        <td>NH-18 to NH-22 (via Hazaribagh & Gaya)</td>
                        <td>2 - 3 Days</td>
                        <td>Weekly 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Ghatshila to Delhi / NCR</strong></td>
                        <td>1,290 Km</td>
                        <td>NH-18 to NH-19 (Golden Quadrilateral GT Road)</td>
                        <td>4 - 5 Days</td>
                        <td>Weekly Regular Fleet</td>
                    </tr>
                    <tr>
                        <td><strong>Ghatshila to Bengaluru / Hyderabad</strong></td>
                        <td>1,580 Km</td>
                        <td>NH-16 Coastal Expressway / NH-44</td>
                        <td>5 - 7 Days</td>
                        <td>Scheduled Weekly</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section 6: Specific Localities and Neighborhoods Covered -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Locality Coverage</span>
            <h2 class="section-title">Localities & Sub-Divisions Served Across Ghatshila</h2>
            <p class="section-intro">
                Our local logistics network maintains deep operational familiarity with every municipal colony, industrial township, and rural ward across the Ghatshila sub-division.
            </p>
        </div>

        <p>
            Whether your home is located along the serene scenic roads of Phuldungri, near the historic Bibhuti Smriti Bhawan in Gouribunj, inside the gated staff quarters of Hindustan Copper Limited at Moubhandar, or within the bustling commercial clusters along College Road and Dahigora, our dedicated pickup vehicles reach your doorstep punctually. We deploy spot scouts ahead of dispatch when moving from older heritage lanes to verify electrical cable overhead clearances and turning radiuses, eliminating loading day delays.
        </p>

        <div class="localities-cloud">
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Moubhandar (HCL Colony)</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Dahigora</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Kasida</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Phuldungri</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Gouribunj</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> College Road Ghatshila</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Rajstate Area</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Main Market Ghatshila</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Railway Colony</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Tumangdungri</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Galudih Sub-division</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Musabani Copper Mines</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Jaduguda Uranium Township</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Dhalbhumgarh Corridor</span>
        </div>
    </section>

    <!-- Section 7: Why Choose Shree Ashirwad Packers in Ghatshila -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Distinct Advantages</span>
            <h2 class="section-title">Why Shree Ashirwad is Ghatshila's Top Moving Choice</h2>
            <p class="section-intro">
                When moving lifelong household collections or costly commercial assets, selecting a licensed, accountable, and experienced transporter makes all the difference.
            </p>
        </div>

        <div class="why-us-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-user-shield"></i></div>
                <h4>100% Background-Checked Staff</h4>
                <p>Every packaging technician and driver on our payroll undergoes police verification and safety training before entering your residence.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-boxes-packing"></i></div>
                <h4>Virgin Packing Supplies</h4>
                <p>We never reuse battered cardboard cartons. Only fresh 5-ply corrugated sheets, new bubble rolls, and commercial cling film are utilized.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-satellite-dish"></i></div>
                <h4>GPS Real-Time Tracking</h4>
                <p>Receive milestone notifications and satellite location coordinates throughout your consignment's journey from Ghatshila to its final stop.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-file-shield"></i></div>
                <h4>Comprehensive Transit Insurance</h4>
                <p>Zero risk with end-to-end transit insurance covering accidental road hazards, overturn, fire, and unforeseen transit disruptions.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                <h4>Guaranteed Fixed Price</h4>
                <p>Our comprehensive quotes carry zero surprise charges, fuel surcharges, or arbitrary unloading fees on delivery day.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-headset"></i></div>
                <h4>Dedicated Move Coordinator</h4>
                <p>A single point of contact answers your queries, organizes labor schedules, and ensures seamless coordination until the final box is opened.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-couch"></i></div>
                <h4>Furniture Assembly Support</h4>
                <p>Our carpenters dismantle modular beds, wardrobes, and dining sets with precision tools, reassembling them securely at your new location.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-industry"></i></div>
                <h4>Industrial & PSU Experience</h4>
                <p>Over a decade of handling official corporate transfers for HCL Moubhandar, banks, railways, and educational institutions in East Singhbhum.</p>
            </div>
        </div>
    </section>

    <!-- Local Google Map Embed -->
    <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58950.123456789!2d86.4800!3d22.5800!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f605123456789%3A0x7d6a5d4e3c2b1a0!2sGhatshila%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Ghatshila East Singhbhum"></iframe>
    </div>

    <!-- Section 8: Frequently Asked Questions -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Got Questions?</span>
            <h2 class="section-title">Frequently Asked Questions About Shifting in Ghatshila</h2>
            <p class="section-intro">
                Answers to common inquiries regarding our packing processes, rates, insurance protocols, and schedule management in Ghatshila.
            </p>
        </div>

        <div class="faq-accordion">
            <details class="faq-box" open>
                <summary>How are moving charges calculated for shifting from Ghatshila to Jamshedpur or Kolkata?</summary>
                <div class="faq-content">
                    Moving charges are calculated according to inventory volume (such as 1 BHK, 2 BHK, 3 BHK, or industrial goods), packaging materials chosen, floor levels without elevator access, and destination transit distance. Relocating a typical 2 BHK household locally to Jamshedpur (45 km) ranges from Rs 6,000 to Rs 10,500, whereas moving to Kolkata (215 km) costs approximately Rs 13,000 to Rs 22,000 including high-grade packing, loading, highway toll taxes, and transit documentation.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you provide relocation services for HCL Moubhandar employees and officers?</summary>
                <div class="faq-content">
                    Yes, we specialize in corporate and public sector undertakings (PSU) transfers for Hindustan Copper Limited (HCL/ICC) officers, supervisors, and administrative personnel stationed in Moubhandar. We provide full reimbursement documentation, including GST-compliant computerized tax invoices, consignment tracking receipts (LR), signed inventory packing sheets, and transit insurance certificates required by PSU finance departments.
                </div>
            </details>

            <details class="faq-box">
                <summary>How does your team safeguard electronics against humidity along the Subarnarekha river basin?</summary>
                <div class="faq-content">
                    Because Ghatshila is situated directly on the Subarnarekha river basin, ambient humidity can cause condensation inside electronic equipment. We safeguard LED televisions, desktop computers, microwave ovens, and audio systems with an inner layer of anti-static bubble wrap, integrate silica gel moisture absorbing sachets, seal the unit with multi-layered moisture-proof stretch film, and box it inside heavy-duty 5-ply corrugated cartons.
                </div>
            </details>

            <details class="faq-box">
                <summary>Can you safely transport private cars and two-wheelers from Ghatshila across India?</summary>
                <div class="faq-content">
                    Absolutely. We manage vehicle transport using specialized enclosed car carrier trailers and secured motorcycle carrier trucks. Every vehicle receives complete tire blocking, multi-point heavy-duty nylon lashing to prevent sway, bumper protective padding, and comprehensive transit insurance cover. We conduct a thorough pre-dispatch scratch and odometer inspection report before handover.
                </div>
            </details>

            <details class="faq-box">
                <summary>What packing materials do you use for residential relocations in Ghatshila?</summary>
                <div class="faq-content">
                    Our team relies solely on virgin, premium packing materials. This includes 5-ply and 7-ply double-wall corrugated cartons, 100 GSM multi-layer air bubble wrap, high-density polystyrene edge guards, moisture-resistant thermal shrink film, corrugated roll separators, and reinforced adhesive vinyl tape. Glassware and delicate porcelain items receive customized wooden crating upon request.
                </div>
            </details>

            <details class="faq-box">
                <summary>How early should I schedule my moving date in Ghatshila?</summary>
                <div class="faq-content">
                    We recommend booking your shifting slot 2 to 4 days beforehand for moves within Ghatshila or into nearby Jamshedpur, and 5 to 7 days in advance for long-haul interstate moves to Kolkata, Delhi, Patna, Bangalore, or Mumbai. This gives our logistics planners ample time to conduct pre-move surveys and reserve dedicated covered container trucks. We also support urgent emergency moves when fleet slots allow.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you serve outer areas such as Galudih, Kasida, Dahigora, and Musabani?</summary>
                <div class="faq-content">
                    Yes, our comprehensive transport permits and fleet capabilities allow us to serve every corner of Ghatshila sub-division including Moubhandar, Dahigora, Kasida, Phuldungri, Galudih, Gouribunj, College Road, Tumangdungri, Musabani, and Jaduguda across the East Singhbhum district.
                </div>
            </details>

            <details class="faq-box">
                <summary>Is full transit insurance included in your Ghatshila relocation quote?</summary>
                <div class="faq-content">
                    Yes, we offer comprehensive transit insurance through reputed public and private sector underwriters. The insurance policy covers accidental highway collisions, overturning, transit fire, flash floods, or transit theft. In the rare event of damage, our customer claims manager expedites survey inspection and claims resolution quickly.
                </div>
            </details>
        </div>
    </section>

    <!-- Section 9: High-Conversion Bottom CTA Banner -->
    <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<section class="cta-banner-ghatshila">
        <h2>Ready for a Stress-Free Relocation in Ghatshila?</h2>
        <p>
            Experience seamless, zero-damage packing and transportation backed by twelve years of Jharkhand logistics mastery. Get in touch with our Ghatshila relocation coordinator right now for a tailored quote.
        </p>
        <div class="cta-btns">
            <a href="tel:+918409531615" class="btn-call-primary" style="background: #f59e0b; color: #0f172a;">
                <i class="fa-solid fa-phone"></i> Call +91 8409531615
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%2C%20I%20need%20packers%20and%20movers%20services%20in%20Ghatshila." target="_blank" class="btn-quote-secondary" style="background: #25d366; border-color: #25d366; color: #ffffff;">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
