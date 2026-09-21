<?php
/**
 * Packers and Movers in Goilkera - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Goilkera, Chakradharpur, Sonua, Manoharpur & West Singhbhum, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Goilkera - 8409531615 | Shree Ashirwad Packers";
$page_description = "Top-rated packers and movers in Goilkera, West Singhbhum. Safe railway employee shifting, Saranda forest corridor moves, car transport, 100% transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in goilkera, movers and packers goilkera, railway transfer packers goilkera, household shifting goilkera, car transport goilkera, bike courier goilkera, packers and movers west singhbhum";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-goilkera";
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
      "name": "Shree Ashirwad Packers and Movers - Goilkera",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 55000",
        "keywords": "packers and movers in goilkera, movers and packers goilkera, railway transfer packers goilkera, household shifting goilkera, car transport goilkera, bike courier goilkera, packers and movers west singhbhum",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "Station Road, Near Goilkera Railway Junction Market",
        "addressLocality": "Goilkera",
        "addressRegion": "Jharkhand",
        "postalCode": "833103",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 22.5186,
        "longitude": 85.3789
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
          "name": "Goilkera"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Chakradharpur"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Sonua"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Manoharpur"
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
          "name": "Packers and Movers in Goilkera",
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
          "name": "Do you offer official relocation documentation for South Eastern Railway employees in Goilkera?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we specialize in official transfer shifting for South Eastern Railway personnel stationed at Goilkera, Sonua, and Chakradharpur division. We provide valid GST invoices, computerized consignment tracking notes (LR), detailed packing inventory manifests, and IBA-approved format billing for smooth reimbursement."
          }
        },
        {
          "@type": "Question",
          "name": "How do you manage shifting through Saranda and Porahat forest ghat sections?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Moving along the winding hill ghats of Saranda and Porahat requires specialized transport logistics. We deploy heavy-suspension closed container vehicles with dual-tier internal cargo lashing, anti-skid floor rubber mats, and seasoned drivers experienced in forest route conditions."
          }
        },
        {
          "@type": "Question",
          "name": "What are the estimated charges for household shifting from Goilkera to Chakradharpur or Rourkela?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Shifting a 1 BHK or 2 BHK home locally from Goilkera to Chakradharpur (approx 35 km) generally costs between Rs 4,500 and Rs 8,500. Shifting to Rourkela (approx 65 km) or Jamshedpur (approx 105 km) costs between Rs 9,000 and Rs 18,000 depending on volume and packaging choices."
          }
        },
        {
          "@type": "Question",
          "name": "Can you relocate motorcycles and scooters from Goilkera to distant Indian cities?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer safe, scratch-free two-wheeler relocation from Goilkera to Patna, Ranchi, Kolkata, Delhi, Bangalore, and across India using enclosed auto trailers with full wheel clamping, handlebar cushioning, and transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "What packing materials do you use to protect wooden furniture against humidity?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Given the dense foliage and forest moisture around Goilkera, we wrap wooden furniture with moisture-resistant polyethylene foam, high-grade bubble wrap, 5-ply corrugated sheets, and stretch film with silica desiccant bags to prevent moisture absorption."
          }
        },
        {
          "@type": "Question",
          "name": "How quickly can you organize an emergency transfer move in Goilkera?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "With our operational presence across Chakradharpur division and Chaibasa, we can dispatch packing crews and vehicles to Goilkera within 4 to 8 hours for urgent transfers or emergency relocations."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide unpacking and furniture re-assembly at the destination?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our complete door-to-door package includes safe unloading, unpacking of cartons, re-assembling beds, dining tables, and wardrobes, and placing each item in your chosen room before clearing away debris."
          }
        },
        {
          "@type": "Question",
          "name": "Is transit insurance mandatory, and how does it safeguard my belongings?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "While optional, comprehensive transit insurance is highly advised for forest and highway routes. It covers physical damages resulting from road accidents, fire, overturning, or extreme weather during transit with fast surveyor-backed claim clearance."
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

        .goilkera-hero {
            background: linear-gradient(135deg, #064e3b 0%, #0f172a 100%);
            color: #ffffff;
            padding: 70px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .goilkera-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at top right, rgba(16, 185, 129, 0.2), transparent 65%);
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
            background: rgba(16, 185, 129, 0.2);
            border: 1px solid rgba(110, 231, 183, 0.3);
            color: #6ee7b7;
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
            background: #059669;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-submit-quote:hover {
            background: #047857;
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
            color: #059669;
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
            border-left: 5px solid #059669;
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
            border-bottom: 2px solid #047857;
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
            background: #f0fdf4;
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
            color: #059669;
        }

        .faq-content {
            padding: 16px 20px;
            background: #f8fafc;
            border-top: 1px solid var(--card-border);
            font-size: 0.94rem;
            color: #334155;
            line-height: 1.65;
        }

        .cta-banner-goilkera {
            background: linear-gradient(135deg, #064e3b 0%, #0f172a 100%);
            border-radius: 14px;
            padding: 50px 30px;
            color: #ffffff;
            text-align: center;
            margin: 60px 0 20px;
            box-shadow: 0 15px 35px rgba(6, 78, 59, 0.25);
        }

        .cta-banner-goilkera h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0 0 15px;
            color: #ffffff;
        }

        .cta-banner-goilkera p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.05rem;
            color: #d1fae5;
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
<section class="goilkera-hero">
    <div class="hero-container">
        <div class="hero-text-content">
            <div class="hero-badge">
                <i class="fa-solid fa-train"></i> South Eastern Railway Corridor & Forest Belt Movers
            </div>
            <h1 class="hero-title">Reliable Packers and Movers in <span>Goilkera</span></h1>
            <p class="hero-desc">
                Serving railway officers, government employees, and residential families across Goilkera, Chakradharpur division, and the Saranda forest corridor. Delivering five-layer shockproof packing, closed-container fleets, and verified transit insurance across Jharkhand and all of India.
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <h4>10+ Years</h4>
                    <p>Kolhan Region Moves</p>
                </div>
                <div class="stat-item">
                    <h4>6,200+</h4>
                    <p>Successful Deliveries</p>
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
            <p>Accurate quotes for railway, government & family shifting</p>
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
                    <input type="text" id="move_origin" name="move_origin" value="Goilkera, West Singhbhum" required>
                </div>
                <div class="form-group-field">
                    <label for="move_destination"><i class="fa-solid fa-map-pin"></i> Shifting Destination</label>
                    <input type="text" id="move_destination" name="move_destination" placeholder="e.g. Chakradharpur, Ranchi, Rourkela, Patna" required>
                </div>
                <div class="form-group-field">
                    <label for="move_size"><i class="fa-solid fa-truck-ramp-box"></i> Cargo Details</label>
                    <select id="move_size" name="move_size" required>
                        <option value="1BHK">1 BHK Household Shifting</option>
                        <option value="2BHK" selected>2 BHK Household Shifting</option>
                        <option value="3BHK">3 BHK Household Shifting</option>
                        <option value="Railway_Quarters">Railway / Govt Quarters Move</option>
                        <option value="Vehicle">Vehicle Transport (Bike / Car)</option>
                        <option value="Office_Commercial">Commercial / Rural Office Shifting</option>
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
            <span>Govt Registered & GST Invoicing for Reimbursement</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-mountain-sun"></i>
            <span>Specialized Saranda Forest & Ghat Road Fleets</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-boxes-stacked"></i>
            <span>Moisture-Barrier Anti-Shock Packaging</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-truck-pickup"></i>
            <span>Direct Pickup from Railway Colonies & Rural Blocks</span>
        </div>
    </div>
</div>

<!-- Main Body Content -->
<main class="page-content-wrapper">

    <!-- Section 1: In-depth Goilkera Relocation Ecosystem -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Strategic Forest Corridor Shifting</span>
            <h2 class="section-title">The Trusted Moving Partner in Goilkera & West Singhbhum</h2>
            <p class="section-intro">
                Flanked by the dense sal forests of Saranda and Porahat, Goilkera is a vital junction block in the West Singhbhum district of Jharkhand. Situated along the major South Eastern Railway mainline linking Chakradharpur to Rourkela and Tatanagar, Goilkera is home to railway operational crews, engineering staff, block administration officials, teachers, and regional forest service personnel. Navigating moves across this dramatic terrain requires seasoned logistic operators who comprehend both rugged hill topography and strict organizational protocols.
            </p>
        </div>

        <p>
            Shree Ashirwad Packers and Movers has established a renowned reputation throughout the Kolhan division. Shifting in Goilkera comes with unique challenges: hilly state highway curves, isolated forest tracks, and heightened seasonal humidity from monsoon downpours across the Koina and Karo river basins. Our specialized fleet of covered container trucks, fitted with reinforced multi-leaf suspension and internal cargo lashing rings, absorbs highway shocks and protects delicate residential possessions from any harm.
        </p>

        <p>
            A substantial portion of relocations originating in Goilkera involve South Eastern Railway employees, station masters, track maintenance engineers, and loco pilots transferring between Chakradharpur, Sonua, Manoharpur, Tatanagar, Kharagpur, Bilaspur, and Kolkata. We recognize that railway and public sector transfers require precise administrative documentation. Shree Ashirwad Packers provides 100% compliant paperwork: GST-registered bills, stamped consignment notes (Lorry Receipts - LR), detailed itemized inventory checklists, and comprehensive insurance cover receipts to ensure prompt claim approvals from railway division accounts.
        </p>

        <p>
            For local families, business owners, and rural bank executives relocating within Goilkera or moving to nearby industrial powerhouses like Rourkela, Chaibasa, and Jamshedpur, our team brings turnkey simplicity. We manage every step—from cataloging your belongings and wrapping them in protective multi-layer packaging to loading, highway freight, unloading, unpacking, and arranging furniture in your new residence.
        </p>

        <p>
            Operating within the Saranda wildlife and ecological belt demands strict regulatory compliance, environmental mindfulness, and seasoned route foresight. Moving convoys traveling between Goilkera, Sonua, and Chakradharpur encounter unpaved forest links, restricted nighttime forest check-posts, and unpredictable monsoon flash-flooding across seasonal riverbeds. Shree Ashirwad Packers coordinates directly with regional transport authorities and local block checkpoints to secure clean transit windows, guaranteeing that household consignments never get held up at forest toll borders or isolated railway crossings.
        </p>
    </section>

    <!-- Section 2: Core Relocation Services with Image Whitelist -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Tailored Service Offerings</span>
            <h2 class="section-title">Comprehensive Packing & Moving Services in Goilkera</h2>
            <p class="section-intro">
                Engineered specifically for rural and railway town logistics, our relocation verticals provide unmatched safety and complete reliability.
            </p>
        </div>

        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household shifting and carton packing in Goilkera" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Household Goods & Railway Colony Moves</h3>
                    <p>
                        Specialized residential shifting for railway quarters, government residences, and private houses in Goilkera. We wrap sensitive electronics, hardwood beds, steel almirahs, modular kitchens, and delicate kitchenware with multi-layered shockproof buffers.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> High-density bubble wrap and 5-ply corrugated cartons</li>
                        <li><i class="fa-solid fa-circle-check"></i> Disassembly and safe reassembly of almirahs and bed frames</li>
                        <li><i class="fa-solid fa-circle-check"></i> Moisture-barrier stretch wrap against forest condensation</li>
                    </ul>
                </div>
            </div>

            <!-- Service 2 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck in Goilkera forest corridor" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Commercial & Government Office Relocation</h3>
                    <p>
                        Safe shifting for rural banks, school campuses, forest department offices, and local commercial establishments across West Singhbhum. We handle computer servers, filing cabinets, official documents, and office fixtures with strict confidentiality and timing.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> Number-coded carton tracking for official archives and records</li>
                        <li><i class="fa-solid fa-circle-check"></i> Anti-static packaging for desktop PCs, printers, and servers</li>
                        <li><i class="fa-solid fa-circle-check"></i> Fast weekend execution to avoid operational work disruptions</li>
                    </ul>
                </div>
            </div>

            <!-- Service 3 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and bike transport carrier in Goilkera" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Two-Wheeler & Automobile Transport</h3>
                    <p>
                        Transport your motorcycle, scooter, or personal automobile safely across state lines. Rather than braving arduous forest roads and long highway drives, trust our specialized covered car carriers and wheel-locked bike transit trucks.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> Individual wheel chocks and 4-point nylon lashings</li>
                        <li><i class="fa-solid fa-circle-check"></i> Scratch-proof foam and bubble wrap on vehicle body panels</li>
                        <li><i class="fa-solid fa-circle-check"></i> Verified pre-trip inspection condition certificate</li>
                    </ul>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial warehouse storage for Goilkera cargo" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Secure Warehousing & Interim Storage</h3>
                    <p>
                        Waiting for new railway quarter allotment or transitioning between postings? Store your domestic furniture or commercial items safely in our CCTV-monitored, pest-controlled central warehouses in Jharkhand with full transit insurance.
                    </p>
                    <ul class="service-features">
                        <li><i class="fa-solid fa-circle-check"></i> 24/7 digital CCTV recording and professional physical security</li>
                        <li><i class="fa-solid fa-circle-check"></i> Elevated pallet storage preventing groundwater and moisture contact</li>
                        <li><i class="fa-solid fa-circle-check"></i> Cost-effective flexible short-term and long-term storage plans</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 3: 5-Step Military-Grade Packing Methodology -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Engineered Protection</span>
            <h2 class="section-title">Our Five-Step Forest & Highway Packing System</h2>
            <p class="section-intro">
                Designed to absorb heavy road vibrations, prevent moisture penetration, and ensure complete zero-damage transit across rural Jharkhand.
            </p>
        </div>

        <div class="method-steps">
            <div class="method-card">
                <span class="step-number">01</span>
                <h4>Pre-Move Assessment</h4>
                <p>
                    Our relocation expert evaluates your inventory either on-site in Goilkera or via video survey, calculating cargo volume, heavy furniture dismantling needs, and truck capacity requirements.
                </p>
            </div>

            <div class="method-card">
                <span class="step-number">02</span>
                <h4>5-Layer Defense Packing</h4>
                <p>
                    Every fragile item, television, and furniture piece is layered with anti-static bubble wrap, corrugated sheets, foam edge protectors, moisture desiccants, and industrial stretch film.
                </p>
            </div>

            <div class="method-card">
                <span class="step-number">03</span>
                <h4>Shockproof Truck Loading</h4>
                <p>
                    Heavy items are anchored to truck floor rings with reinforced cargo straps on rubber dunnage mats. Lighter boxes are stacked systematically above to avoid crushing pressure.
                </p>
            </div>

            <div class="method-card">
                <span class="step-number">04</span>
                <h4>Controlled Transit</h4>
                <p>
                    Our closed-body container trucks depart Goilkera via Chakradharpur or Chaibasa roads. Professional highway drivers adhere to safe speed limits on ghat bends and arterial expressways.
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
            <span class="section-tag">Predictable & Honest Pricing</span>
            <h2 class="section-title">Shifting Cost Estimates in Goilkera</h2>
            <p class="section-intro">
                We believe in complete transparency. Review our standard rate guide for moves within Jharkhand and interstate routes across India.
            </p>
        </div>

        <div class="data-table-container">
            <table class="custom-data-table">
                <thead>
                    <tr>
                        <th>Shifting Requirement</th>
                        <th>Packing Material & Labor</th>
                        <th>Local Shifting (Within 50 Km)</th>
                        <th>Intercity Shifting (50 - 300 Km)</th>
                        <th>Long Distance (300+ Km)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK / Railway Quarter</strong></td>
                        <td>Standard Bubble + Corrugated Boxes (2 Crew)</td>
                        <td>Rs 3,500 - 6,000</td>
                        <td>Rs 7,500 - 14,000</td>
                        <td>Rs 15,000 - 25,000</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Household</strong></td>
                        <td>5-Layer Anti-Shock Packing (3-4 Crew)</td>
                        <td>Rs 5,500 - 9,500</td>
                        <td>Rs 12,000 - 20,000</td>
                        <td>Rs 22,000 - 35,000</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Independent Residence</strong></td>
                        <td>Heavy Duty Protective Packaging (4-6 Crew)</td>
                        <td>Rs 8,500 - 15,000</td>
                        <td>Rs 17,000 - 28,000</td>
                        <td>Rs 32,000 - 48,000</td>
                    </tr>
                    <tr>
                        <td><strong>4+ BHK / Executive Bunglow</strong></td>
                        <td>Custom Crating + Full Crew (6-8 Crew)</td>
                        <td>Rs 13,000 - 22,000</td>
                        <td>Rs 25,000 - 42,000</td>
                        <td>Rs 45,000 - 70,000</td>
                    </tr>
                    <tr>
                        <td><strong>Motorcycle / Scooter</strong></td>
                        <td>Wheel-Lashing + Bubble/Corrugated Wrap</td>
                        <td>Rs 1,500 - 2,500</td>
                        <td>Rs 3,000 - 5,000</td>
                        <td>Rs 5,000 - 9,000</td>
                    </tr>
                    <tr>
                        <td><strong>Car / Four Wheeler</strong></td>
                        <td>Dedicated Closed Container Carrier</td>
                        <td>Rs 3,500 - 5,000</td>
                        <td>Rs 7,500 - 13,000</td>
                        <td>Rs 14,000 - 24,000</td>
                    </tr>
                    <tr>
                        <td><strong>Rural Office / Bank Branch</strong></td>
                        <td>IT Packing + File Archive Storage</td>
                        <td>Custom Quote</td>
                        <td>Site Survey</td>
                        <td>Dedicated Fleet</td>
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
            <h2 class="section-title">Estimated Transit Timelines from Goilkera</h2>
            <p class="section-intro">
                Connecting seamlessly through Chakradharpur, Chaibasa, and Rourkela corridors to all major highway networks of Eastern and Northern India.
            </p>
        </div>

        <div class="data-table-container">
            <table class="custom-data-table">
                <thead>
                    <tr>
                        <th>Destination City</th>
                        <th>Approx Distance</th>
                        <th>Primary Transit Highway</th>
                        <th>Estimated Transit Time</th>
                        <th>Fleet Schedule</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Goilkera to Chakradharpur</strong></td>
                        <td>35 Km</td>
                        <td>SH Main Road (via Sonua)</td>
                        <td>Same Day (2 - 3 Hours)</td>
                        <td>Daily 2 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Goilkera to Rourkela (Odisha)</strong></td>
                        <td>65 Km</td>
                        <td>SH via Manoharpur & Bisra</td>
                        <td>Same Day (3 - 5 Hours)</td>
                        <td>Daily Dedicated Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Goilkera to Chaibasa</strong></td>
                        <td>62 Km</td>
                        <td>SH to NH-20 (via Chakradharpur)</td>
                        <td>Same Day (3 - 4 Hours)</td>
                        <td>Daily Regular Fleets</td>
                    </tr>
                    <tr>
                        <td><strong>Goilkera to Jamshedpur (Tatanagar)</strong></td>
                        <td>105 Km</td>
                        <td>NH-20 to NH-18 (via Hata / Kandra)</td>
                        <td>Same Day (4 - 6 Hours)</td>
                        <td>Daily Fleet</td>
                    </tr>
                    <tr>
                        <td><strong>Goilkera to Ranchi</strong></td>
                        <td>155 Km</td>
                        <td>NH-20 (via Khunti & Torpa)</td>
                        <td>Same Day / Next Morning (5 - 7 Hours)</td>
                        <td>Alternate Days</td>
                    </tr>
                    <tr>
                        <td><strong>Goilkera to Kolkata / Kharagpur</strong></td>
                        <td>340 Km</td>
                        <td>NH-18 to NH-16 (via Baharagora)</td>
                        <td>2 - 3 Days</td>
                        <td>Weekly 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Goilkera to Patna</strong></td>
                        <td>480 Km</td>
                        <td>NH-20 to NH-22 (via Gaya)</td>
                        <td>2 - 4 Days</td>
                        <td>Bi-Weekly</td>
                    </tr>
                    <tr>
                        <td><strong>Goilkera to Delhi / NCR</strong></td>
                        <td>1,320 Km</td>
                        <td>NH-20 to NH-19 (via Varanasi)</td>
                        <td>4 - 6 Days</td>
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
            <h2 class="section-title">Wards, Villages & Surrounding Areas Served in Goilkera</h2>
            <p class="section-intro">
                Our logistics network provides comprehensive door-to-door coverage across Goilkera block, railway quarters, and neighboring West Singhbhum settlements.
            </p>
        </div>

        <p>
            Whether your residence is situated near Goilkera Railway Station Colony, along the Main Market Road, inside the Block Development Office campus, or in adjacent panchayats such as Sonua, Bera Kera, Arahasa, Kadamdiha, or towards Manoharpur and Anandpur, our trained pickup crews arrive punctually. We deploy scouts to inspect rural bridges and narrow forest roads ahead of moving day to ensure that our container vehicles navigate smoothly without unexpected delays.
        </p>

        <p>
            For rural hamlets and outlying railway gate cabins located off the metalled highway, our logistics dispatch utilizes nimble feeder carriers like the Mahindra Bolero Maxi Truck and Tata 407. These vehicles shuttle packed inventory directly from your door to our main container trucks stationed at the wider state highway junction. This eliminates difficult manual carrying over long unpaved distances, ensuring that glassware, mirrors, and electronic appliances stay completely secure throughout the transit process.
        </p>

        <div class="localities-cloud">
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Goilkera Railway Colony</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Station Road Goilkera</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Block Colony & BDO Campus</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Main Market Goilkera</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Sonua Township</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Manoharpur Junction Border</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Chakradharpur Division Link</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Arahasa Panchayat</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Bera Kera Village</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Anandpur Sub-corridor</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Kadamdiha Area</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Saranda Forest Edge</span>
        </div>
    </section>

    <!-- Section 7: Why Choose Shree Ashirwad Packers in Goilkera -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">The Ashirwad Advantage</span>
            <h2 class="section-title">Why Shree Ashirwad is Goilkera's Preferred Shifting Team</h2>
            <p class="section-intro">
                Relocating from remote forest corridors demands proven expertise, authentic vehicles, and certified safety standards.
            </p>
        </div>

        <div class="why-us-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-train-subway"></i></div>
                <h4>Railway Transfer Mastery</h4>
                <p>Over a decade of handling South Eastern Railway transfer cases with approved billing and consignment tracking documents.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-truck-shield"></i></div>
                <h4>Closed-Body Container Fleets</h4>
                <p>Weatherproof steel containers that protect your domestic belongings from monsoon rains, forest foliage, and road dirt.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-user-check"></i></div>
                <h4>Trained & Verified Crew</h4>
                <p>Every worker on our team undergoes thorough background verification and professional training for careful goods handling.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-file-invoice"></i></div>
                <h4>100% Valid GST Invoices</h4>
                <p>Transparent invoices with verified HSN codes accepted seamlessly for central and state government transfer claims.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-shield-cat"></i></div>
                <h4>Transit Insurance Coverage</h4>
                <p>Comprehensive transit policy backed by major national insurance partners protecting your assets against all road risks.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-hand-holding-dollar"></i></div>
                <h4>Zero Hidden Extras</h4>
                <p>Clear upfront quotes with guaranteed fixed pricing. No sudden demand for tip money or unauthorized delivery charges.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-boxes-packing"></i></div>
                <h4>Fresh Multi-Layer Packaging</h4>
                <p>We use only virgin bubble rolls, thick corrugated boards, corner buffers, and heavy stretch film for maximum protection.</p>
            </div>

            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-headset"></i></div>
                <h4>24/7 Dedicated Support</h4>
                <p>Direct communication with your personal moving coordinator to track your shipment from pickup to final room delivery.</p>
            </div>
        </div>
    </section>

    <!-- Local Google Map Embed -->
    <div style="margin: 35px 0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58990.123456789!2d85.3800!3d22.5100!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f605123456789%3A0x7d6a5d4e3c2b1a0!2sGoilkera%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Goilkera West Singhbhum"></iframe>
    </div>

    <!-- Section 8: Frequently Asked Questions -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Common Inquiries</span>
            <h2 class="section-title">Frequently Asked Questions About Shifting in Goilkera</h2>
            <p class="section-intro">
                Key questions answered regarding our pricing, packaging standards, railway transfer policies, and timelines in Goilkera.
            </p>
        </div>

        <div class="faq-accordion">
            <details class="faq-box" open>
                <summary>Do you offer official relocation documentation for South Eastern Railway employees in Goilkera?</summary>
                <div class="faq-content">
                    Yes, we specialize in official transfer shifting for South Eastern Railway personnel stationed at Goilkera, Sonua, and Chakradharpur division. We provide valid GST invoices, computerized consignment tracking notes (LR), detailed packing inventory manifests, and IBA-approved format billing for smooth reimbursement without claim delays.
                </div>
            </details>

            <details class="faq-box">
                <summary>How do you manage shifting through Saranda and Porahat forest ghat sections?</summary>
                <div class="faq-content">
                    Moving along the winding hill ghats of Saranda and Porahat requires specialized transport logistics. We deploy heavy-suspension closed container vehicles with dual-tier internal cargo lashing, anti-skid floor rubber mats, and seasoned drivers experienced in forest route conditions who avoid sharp cornering and brake vibrations.
                </div>
            </details>

            <details class="faq-box">
                <summary>What are the estimated charges for household shifting from Goilkera to Chakradharpur or Rourkela?</summary>
                <div class="faq-content">
                    Shifting a 1 BHK or 2 BHK home locally from Goilkera to Chakradharpur (approx 35 km) generally costs between Rs 4,500 and Rs 8,500. Shifting to Rourkela (approx 65 km) or Jamshedpur (approx 105 km) costs between Rs 9,000 and Rs 18,000 depending on total volume, floor level access, and packaging choices.
                </div>
            </details>

            <details class="faq-box">
                <summary>Can you relocate motorcycles and scooters from Goilkera to distant Indian cities?</summary>
                <div class="faq-content">
                    Yes. We offer safe, scratch-free two-wheeler relocation from Goilkera to Patna, Ranchi, Kolkata, Delhi, Bangalore, and across India using enclosed auto trailers with full wheel clamping, handlebar cushioning, and comprehensive transit insurance cover.
                </div>
            </details>

            <details class="faq-box">
                <summary>What packing materials do you use to protect wooden furniture against humidity?</summary>
                <div class="faq-content">
                    Given the dense foliage and forest moisture around Goilkera, we wrap wooden furniture with moisture-resistant polyethylene foam, high-grade bubble wrap, 5-ply corrugated sheets, and stretch film with silica desiccant bags to prevent moisture absorption and fungal spotting during transit.
                </div>
            </details>

            <details class="faq-box">
                <summary>How quickly can you organize an emergency transfer move in Goilkera?</summary>
                <div class="faq-content">
                    With our operational presence across Chakradharpur division and Chaibasa, we can dispatch packing crews and vehicles to Goilkera within 4 to 8 hours for urgent transfers or emergency relocations.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you provide unpacking and furniture re-assembly at the destination?</summary>
                <div class="faq-content">
                    Yes. Our complete door-to-door package includes safe unloading, unpacking of cartons, re-assembling beds, dining tables, and wardrobes, and placing each item in your chosen room before clearing away debris.
                </div>
            </details>

            <details class="faq-box">
                <summary>Is transit insurance mandatory, and how does it safeguard my belongings?</summary>
                <div class="faq-content">
                    While optional, comprehensive transit insurance is highly advised for forest and highway routes. It covers physical damages resulting from road accidents, fire, overturning, or extreme weather during transit with fast surveyor-backed claim clearance.
                </div>
            </details>
        </div>
    </section>

    <!-- Section 9: High-Conversion Bottom CTA Banner -->
    <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<section class="cta-banner-goilkera">
        <h2>Plan Your Smooth Move From Goilkera Today!</h2>
        <p>
            Entrust your precious household items or official transfer to Jharkhand's most reliable relocation team. Contact our Goilkera move supervisor now for an immediate, customized quote.
        </p>
        <div class="cta-btns">
            <a href="tel:+918409531615" class="btn-call-primary" style="background: #f59e0b; color: #0f172a;">
                <i class="fa-solid fa-phone"></i> Call +91 8409531615
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%2C%20I%20need%20packers%20and%20movers%20services%20in%20Goilkera." target="_blank" class="btn-quote-secondary" style="background: #25d366; border-color: #25d366; color: #ffffff;">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
