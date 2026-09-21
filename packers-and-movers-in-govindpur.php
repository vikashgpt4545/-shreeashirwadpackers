<?php
/**
 * Packers and Movers in Govindpur - Shree Ashirwad Packers and Movers
 * Website: https://www.shreeashirwadpackers.com
 * Contact: +91 8409531615 / +91 9308888746
 * Office: Serving Govindpur, GT Road NH-19 Hub, Dhanbad District, Jharkhand
 */

require_once __DIR__ . '/includes/config.php';

// Page-specific variables
$page_title = "Packers and Movers in Govindpur - 8409531615 | Shree Ashirwad Packers";
$page_description = "ISO certified packers and movers in Govindpur, Dhanbad on GT Road NH-19. Safe household shifting, logistics hub transport, car carriers, transit insurance. Call 8409531615.";
$page_keywords = "packers and movers in govindpur, movers and packers govindpur dhanbad, gt road packers and movers, household shifting govindpur, car transport govindpur, bike courier govindpur, packers and movers dhanbad";
$canonical_url = SITE_BASE_URL . "/packers-and-movers-in-govindpur";
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
      "name": "Shree Ashirwad Packers and Movers - Govindpur",
      "image": "<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg",
      "@id": "<?php echo $canonical_url; ?>#movingcompany",
      "url": "<?php echo $canonical_url; ?>",
      "telephone": "+918409531615",
      "priceRange": "INR 3500 - 55000",
        "keywords": "packers and movers in govindpur, movers and packers govindpur dhanbad, gt road packers and movers, household shifting govindpur, car transport govindpur, bike courier govindpur, packers and movers dhanbad",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "GT Road, Near Govindpur Chowk & Dhanbad Bypass",
        "addressLocality": "Govindpur",
        "addressRegion": "Jharkhand",
        "postalCode": "828109",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": 23.8344,
        "longitude": 86.5204
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
          "name": "Govindpur"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Barwadda"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Saraidhela"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Nirsa"
        },
        {
          "@type": "AdministrativeArea",
          "name": "Dhanbad District"
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
          "name": "Packers and Movers in Govindpur",
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
          "name": "What are the standard charges for household shifting from Govindpur to Dhanbad city center or Kolkata?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Moving charges from Govindpur depend on cargo volume and distance. Local moves to Dhanbad city (Saraidhela, Bank More - approx 10 km) range from Rs 3,500 to Rs 7,500 for a 1 BHK or 2 BHK. Interstate moves to Kolkata (approx 260 km via GT Road NH-19) range from Rs 11,000 to Rs 22,000 including 5-layer packing, loading, highway toll taxes, and transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "How does Govindpur's GT Road NH-19 location benefit long-distance interstate moves?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Situated directly on the Golden Quadrilateral NH-19 (Grand Trunk Road), Govindpur provides immediate expressway access without entering city traffic bottlenecks. Consignments bound for Kolkata, Asansol, Durgapur, Varanasi, Prayagraj, and Delhi depart immediately on high-speed express corridors, cutting transit times by several hours."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide warehouse relocation and commercial logistics in Govindpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, as Govindpur is Dhanbad's major logistics and wholesale hub, we provide comprehensive commercial shifting for hardware distributors, automobile dealerships, manufacturing godowns, and trading firms. We handle heavy inventory, palletized cargo, and industrial machinery."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect furniture and electronics from highway dust and soot in Govindpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Because Govindpur experiences heavy highway vehicular dust and industrial particulate matter, we apply a multi-layered barrier: virgin air bubble wrap, 5-ply corrugated carton sheets, foam corner buffers, moisture-absorbing silica packets, and an outer wrapping of heavy industrial stretch film that hermetically seals each item against dirt, soot, and moisture."
          }
        },
        {
          "@type": "Question",
          "name": "Can you transport cars and two-wheelers safely from Govindpur across India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer door-to-door vehicle transport from Govindpur to Bangalore, Delhi, Mumbai, Pune, Patna, and all major cities. We use dedicated hydraulic car carriers and wheel-locked bike carriers with bumper padding, tire chocks, and comprehensive transit insurance."
          }
        },
        {
          "@type": "Question",
          "name": "Do you serve adjacent areas like Barwadda, Saraidhela, and Nirsa?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, our operational fleet covers Govindpur, Barwadda Bypass, Saraidhela, Chhatatand, Nirsa, Pandeydih, Nagarguri, and the entire northern Dhanbad industrial corridor."
          }
        },
        {
          "@type": "Question",
          "name": "What documentation is provided for corporate and PSU claim reimbursement?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide complete official documentation including 100% GST-registered tax invoices, stamped consignment notes (Lorry Receipts - LR), itemized inventory declarations, and transit insurance certificates approved by PSU, BCCL, banking, and private corporate claim desks."
          }
        },
        {
          "@type": "Question",
          "name": "How much advance notice is required to book a move in Govindpur?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For local moves within Dhanbad district, a 1-day notice is usually sufficient. For interstate moves along the GT Road corridor, 2 to 4 days advance booking guarantees dedicated container carrier allocation and swift insurance underwriting."
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
            --secondary-orange: #ea580c;
            --neutral-bg: #f8fafc;
            --card-border: #e2e8f0;
            --text-dark: #1e293b;
            --text-muted: #64748b;
        }

        .govindpur-hero {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            color: #ffffff;
            padding: 70px 0 50px;
            position: relative;
            overflow: hidden;
        }

        .govindpur-hero::after {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: radial-gradient(circle at top right, rgba(234, 88, 12, 0.2), transparent 65%);
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
            background: rgba(234, 88, 12, 0.2);
            border: 1px solid rgba(251, 146, 60, 0.35);
            color: #fed7aa;
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
            color: #fb923c;
        }

        .hero-desc {
            font-size: 1.1rem;
            line-height: 1.65;
            color: #e2e8f0;
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
            color: #fb923c;
            margin: 0 0 4px;
            font-family: 'Outfit', sans-serif;
        }

        .stat-item p {
            font-size: 0.82rem;
            color: #cbd5e1;
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
            background: #ea580c;
            color: #ffffff;
            padding: 14px 26px;
            border-radius: 8px;
            font-weight: 700;
            text-decoration: none;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(234, 88, 12, 0.3);
        }

        .btn-call-primary:hover {
            background: #c2410c;
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
            background: #ea580c;
            color: #ffffff;
            border: none;
            border-radius: 6px;
            font-weight: 700;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.3s;
        }

        .btn-submit-quote:hover {
            background: #c2410c;
        }

        .trust-strip {
            background: #0f172a;
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
            color: #fb923c;
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
            color: #ea580c;
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
            border-left: 5px solid #ea580c;
            padding-left: 15px;
        }

        .content-block h3 {
            font-family: 'Outfit', sans-serif;
            font-size: 1.45rem;
            font-weight: 600;
            color: #c2410c;
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
            background: #ea580c;
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
            border-bottom: 2px solid #ea580c;
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
            background: #fff7ed;
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
            color: #ea580c;
            font-size: 0.8rem;
        }

        .locality-tag:hover {
            border-color: #ea580c;
            background: #fff7ed;
            color: #c2410c;
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
            background: #fff7ed;
            color: #ea580c;
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
            color: #ea580c;
        }

        .faq-content {
            padding: 16px 20px;
            background: #f8fafc;
            border-top: 1px solid var(--card-border);
            font-size: 0.94rem;
            color: #334155;
            line-height: 1.65;
        }

        .cta-banner-govindpur {
            background: linear-gradient(135deg, #1e293b 0%, #0f172a 100%);
            border-radius: 14px;
            padding: 50px 30px;
            color: #ffffff;
            text-align: center;
            margin: 60px 0 20px;
            box-shadow: 0 15px 35px rgba(15, 23, 42, 0.25);
        }

        .cta-banner-govindpur h2 {
            font-family: 'Outfit', sans-serif;
            font-size: 2.2rem;
            font-weight: 800;
            margin: 0 0 15px;
            color: #ffffff;
        }

        .cta-banner-govindpur p {
            max-width: 700px;
            margin: 0 auto 30px;
            font-size: 1.05rem;
            color: #fed7aa;
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
<section class="govindpur-hero">
    <div class="hero-container">
        <div class="hero-text-content">
            <div class="hero-badge">
                <i class="fa-solid fa-truck-fast"></i> GT Road NH-19 Strategic Transport & Logistics Hub
            </div>
            <h1 class="hero-title">Expert Packers and Movers in <span>Govindpur</span></h1>
            <p class="hero-desc">
                Serving household relocations, commercial logistics godowns, and interstate vehicle shipping along the bustling GT Road NH-19 corridor. Experience five-tier protective packing, dedicated closed container fleets, and comprehensive transit insurance across Jharkhand and India.
            </p>
            <div class="hero-stats">
                <div class="stat-item">
                    <h4>12+ Years</h4>
                    <p>GT Road Logistics</p>
                </div>
                <div class="stat-item">
                    <h4>9,200+</h4>
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
                    <i class="fa-solid fa-calculator"></i> Calculate Shifting Cost
                </a>
            </div>
        </div>

        <!-- Quick Form Card -->
        <div class="hero-form-card" id="quick-quote">
            <h3>Request Instant Moving Quote</h3>
            <p>Direct pricing with zero hidden highway surcharges</p>
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
                    <input type="text" id="move_origin" name="move_origin" value="Govindpur / GT Road, Dhanbad" required>
                </div>
                <div class="form-group-field">
                    <label for="move_destination"><i class="fa-solid fa-map-pin"></i> Destination City</label>
                    <input type="text" id="move_destination" name="move_destination" placeholder="e.g. Kolkata, Dhanbad City, Ranchi, Delhi" required>
                </div>
                <div class="form-group-field">
                    <label for="move_size"><i class="fa-solid fa-truck-ramp-box"></i> Move Category</label>
                    <select id="move_size" name="move_size" required>
                        <option value="1BHK">1 BHK Household Shifting</option>
                        <option value="2BHK" selected>2 BHK Household Shifting</option>
                        <option value="3BHK">3 BHK Household Shifting</option>
                        <option value="Commercial_Warehouse">Commercial Godown / Warehouse Shifting</option>
                        <option value="Vehicle">Vehicle Transport (Car / Bike)</option>
                        <option value="Industrial">Industrial Cargo / Hardware Machinery</option>
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
            <i class="fa-solid fa-road"></i>
            <span>Express GT Road Highway Departures Daily</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-shield-halved"></i>
            <span>Heavy-Duty Dust & Soot Barrier Packaging</span>
        </div>
        <div class="trust-item">
            <i class="fa-solid fa-file-invoice-dollar"></i>
            <span>Corporate & PSU Claim Approved Billing</span>
        </div>
    </div>
</div>

<!-- Main Body Content -->
<main class="page-content-wrapper">

    <!-- Section 1: In-depth Govindpur Relocation Ecosystem -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">GT Road Logistics Nexus</span>
            <h2 class="section-title">The Premier Moving Partner for Govindpur & Dhanbad Region</h2>
            <p class="section-intro">
                Located immediately northeast of Dhanbad city along National Highway 19 (the historic Grand Trunk Road), Govindpur is the beating logistical heart and commercial trade engine of eastern Jharkhand. Serving as the vital crossroads connecting Dhanbad's coal belt to Asansol, Kolkata, Barhi, Varanasi, and Delhi, Govindpur hosts hundreds of transport yards, warehousing facilities, automobile dealerships, hardware wholesale distribution hubs, and hard coke plants. For residents and businesses alike, relocating along this bustling highway nexus demands a seasoned mover who combines rapid highway dispatch with rigorous packaging safety.
            </p>
        </div>

        <p>
            Shree Ashirwad Packers and Movers has operated at the forefront of Govindpur and Dhanbad logistics for more than twelve years. Whether you are shifting a family apartment near Govindpur Bazar, moving from new residential colonies along the Barwadda Bypass, relocating a commercial godown to Saraidhela or Nirsa, or moving corporate executives into Kolkata, Patna, or Delhi, our specialized infrastructure provides effortless peace of mind. With immediate access to NH-19, our container fleets bypass inner-city bottlenecks, ensuring expedited transit across state lines.
        </p>

        <p>
            The physical environment around Govindpur presents distinct shifting challenges. Because NH-19 carries constant multi-axle freight traffic and Govindpur houses coke processing, cement, and engineering units, airborne fine dust, soot, and vehicular emissions are pervasive. Shree Ashirwad Packers neutralizes these environmental factors with our signature 5-layer protective defense packaging: virgin multi-layer bubble wrap, heavy 5-ply corrugated sheets, thermal foam edge protectors, moisture desiccants, and high-tensile industrial stretch film. This impervious seal protects high-definition televisions, delicate upholstery, computer equipment, and wooden furniture from road grime, soot, and moisture.
        </p>

        <p>
            For corporate traders, logistics fleet managers, and industrial contractors in Govindpur, moving goods requires stringent legal and tax compliance. Shree Ashirwad Packers provides 100% verified documentation: computerized GST tax invoices with precise HSN codes, stamped Lorry Receipts (LR), declared value inventory manifests, and transit insurance certificates underwritten by top national insurance companies. This guarantees hassle-free transport across state checkposts and seamless submission for corporate and employee transfer reimbursement.
        </p>

        <p>
            Our diverse vehicle fleet includes mini-transporters (Tata 407, Bolero Maxi Truck) for nimble navigation through bustling marketplace alleys like Khalashi Mohalla, Pandeydih, and Chhatatand, alongside heavy 19-foot and 24-foot enclosed container trucks for high-speed highway transit. Every truck features GPS satellite telematics, allowing real-time milestone monitoring from initial loading in Govindpur until safe delivery at your new doorstep.
        </p>
    </section>

    <!-- Section 2: Core Relocation Services with Image Whitelist -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Comprehensive Moving Verticals</span>
            <h2 class="section-title">Full-Spectrum Relocation Services in Govindpur</h2>
            <p class="section-intro">
                Designed to cater to families, business proprietors, and industrial distributors across Govindpur, Barwadda, and Dhanbad.
            </p>
        </div>

        <div class="services-grid">
            <!-- Service 1 -->
            <div class="service-card">
                <div class="service-img-wrap">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="Household shifting and carton packing in Govindpur Dhanbad" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Household Shifting & Apartment Relocation</h3>
                    <p>
                        Turnkey home moving solutions for residences across Govindpur, Saraidhela, Barwadda, and Pandeydih. From heavy double-door refrigerators and solid teak beds to fine dinnerware and wardrobe collections, our crew protects every possession with meticulous care.
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
                    <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Commercial cargo and door to door delivery truck in Govindpur" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Commercial Warehouse & Logistics Moving</h3>
                    <p>
                        Specialized relocation for wholesale hardware distributors, automobile service hubs, industrial godowns, and trading offices along GT Road. We handle heavy inventory, spare parts, commercial scales, and IT systems under strict scheduling.
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
                    <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" alt="Car and bike transport carrier in Govindpur" loading="lazy">
                </div>
                <div class="service-body">
                    <h3>Car & Two-Wheeler Transportation</h3>
                    <p>
                        Ship your car, SUV, or motorcycle from Govindpur to anywhere in India without adding highway mileage or road wear. We utilize enclosed vehicle trailers with hydraulic ramps, wheel locking clamps, and scratch-resistant padding.
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
                    <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" alt="Commercial warehouse storage for Govindpur goods" loading="lazy">
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
                Combining high-durability packaging materials with seasoned highway transport protocols to guarantee complete zero-damage transit across Jharkhand and India.
            </p>
        </div>

        <div class="method-steps">
            <div class="method-card">
                <span class="step-number">01</span>
                <h4>Technical Survey</h4>
                <p>
                    Our relocation coordinator reviews your belongings in Govindpur via on-site visit or digital video survey to determine cargo volume, packaging needs, fragile crating, and vehicle sizing.
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
                    Closed-container trucks depart Govindpur immediately onto GT Road NH-19. Experienced highway drivers maintain steady speeds under live satellite GPS tracking.
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
            <h2 class="section-title">Packers and Movers Charges in Govindpur</h2>
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
                        <td><strong>Commercial Warehouse / Plant Move</strong></td>
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
            <h2 class="section-title">Estimated Transit Timelines from Govindpur</h2>
            <p class="section-intro">
                Direct expressway access via Grand Trunk Road (NH-19) provides the fastest transit speeds from Dhanbad to all Indian metropolitan destinations.
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
                        <td><strong>Govindpur to Dhanbad City Center</strong></td>
                        <td>10 Km</td>
                        <td>Saraidhela Link Road</td>
                        <td>Same Day (1 - 2 Hours)</td>
                        <td>Daily 5 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Govindpur to Bokaro Steel City</strong></td>
                        <td>50 Km</td>
                        <td>NH-18 (via Chas)</td>
                        <td>Same Day (2 - 3 Hours)</td>
                        <td>Daily 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Govindpur to Asansol / Durgapur</strong></td>
                        <td>65 Km</td>
                        <td>NH-19 GT Road Direct Expressway</td>
                        <td>Same Day (2 - 3 Hours)</td>
                        <td>Daily 3 Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Govindpur to Ranchi</strong></td>
                        <td>150 Km</td>
                        <td>NH-18 to NH-320 (via Bokaro & Ramgarh)</td>
                        <td>Same Day (4 - 5 Hours)</td>
                        <td>Daily Regular Fleets</td>
                    </tr>
                    <tr>
                        <td><strong>Govindpur to Kolkata / Howrah</strong></td>
                        <td>260 Km</td>
                        <td>NH-19 GT Road Expressway</td>
                        <td>1 - 2 Days</td>
                        <td>Daily Departures</td>
                    </tr>
                    <tr>
                        <td><strong>Govindpur to Patna</strong></td>
                        <td>310 Km</td>
                        <td>NH-19 to NH-22 (via Barhi & Gaya)</td>
                        <td>1 - 2 Days</td>
                        <td>Daily Trips</td>
                    </tr>
                    <tr>
                        <td><strong>Govindpur to Varanasi / Prayagraj</strong></td>
                        <td>380 Km</td>
                        <td>NH-19 GT Road Express Corridor</td>
                        <td>1 - 2 Days</td>
                        <td>Daily Regular Fleet</td>
                    </tr>
                    <tr>
                        <td><strong>Govindpur to Delhi / NCR</strong></td>
                        <td>1,150 Km</td>
                        <td>NH-19 Golden Quadrilateral GT Road</td>
                        <td>3 - 4 Days</td>
                        <td>Daily Scheduled Fleets</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Section 6: Specific Localities and Neighborhoods Covered -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Locality Coverage</span>
            <h2 class="section-title">Wards, Markets & Surrounding Hubs Served in Govindpur</h2>
            <p class="section-intro">
                Our local logistics network maintains deep operational familiarity with every commercial colony, transport hub, and residential layout across Govindpur block.
            </p>
        </div>

        <p>
            Whether your home is located along the lively market stretch of Govindpur Chowk, in residential clusters along the Barwadda Bypass, near KK College of Engineering, along Pandeydih Road, or within neighboring settlements like Chhatatand, Nagarguri, Bhitiya, Amarbera, or the Nirsa border, our pickup teams arrive punctually. We deploy spot scouts ahead of moving day to verify access roads, turning clearances, and overhead electrical lines, ensuring zero loading day delays.
        </p>

        <p>
            For narrower inner colony lanes and older residential mohallas, our dispatch utilizes nimble feeder vehicles like the Mahindra Bolero Maxi Truck and Tata Ace to safely ferry packed cartons to our heavy container carriers waiting on the main GT Road. This avoids manual carrying over long distances and guarantees that delicate crystal, glassware, and smart electronics remain completely unharmed.
        </p>

        <div class="localities-cloud">
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Govindpur Chowk & Market</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> GT Road Highway Corridor</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Barwadda Bypass Junction</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Saraidhela Link Road</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Pandeydih Colony</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Chhatatand Area</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Nagarguri Panchayat</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Bhitiya Village</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Khalashi Mohalla</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Amarbera Residential Zone</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> Nirsa Highway Stretch</span>
            <span class="locality-tag"><i class="fa-solid fa-location-dot"></i> KK College Campus Area</span>
        </div>
    </section>

    <!-- Section 7: Why Choose Shree Ashirwad Packers in Govindpur -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Distinct Advantages</span>
            <h2 class="section-title">Why Shree Ashirwad is Govindpur's Top Moving Choice</h2>
            <p class="section-intro">
                Moving lifelong household belongings or valuable commercial inventory requires a licensed, experienced, and dependable partner.
            </p>
        </div>

        <div class="why-us-grid">
            <div class="why-card">
                <div class="why-icon"><i class="fa-solid fa-route"></i></div>
                <h4>Immediate GT Road Access</h4>
                <p>Strategically positioned on NH-19, enabling same-day highway departure for interstate moves without city traffic delays.</p>
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
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58480.123456789!2d86.5200!3d23.8300!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f605123456789%3A0x7d6a5d4e3c2b1a0!2sGovindpur%2C%20Jharkhand!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" width="100%" height="320" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Google Map Location of Govindpur Dhanbad"></iframe>
    </div>

    <!-- Section 8: Frequently Asked Questions -->
    <section class="content-block">
        <div class="section-header">
            <span class="section-tag">Got Questions?</span>
            <h2 class="section-title">Frequently Asked Questions About Shifting in Govindpur</h2>
            <p class="section-intro">
                Answers to common inquiries regarding our packing processes, rates, insurance coverage, and schedule management in Govindpur.
            </p>
        </div>

        <div class="faq-accordion">
            <details class="faq-box" open>
                <summary>What are the standard charges for household shifting from Govindpur to Dhanbad city center or Kolkata?</summary>
                <div class="faq-content">
                    Moving charges from Govindpur depend on cargo volume and distance. Local moves to Dhanbad city (Saraidhela, Bank More - approx 10 km) range from Rs 3,500 to Rs 7,500 for a 1 BHK or 2 BHK. Interstate moves to Kolkata (approx 260 km via GT Road NH-19) range from Rs 11,000 to Rs 22,000 including 5-layer packing, loading, highway toll taxes, and transit insurance.
                </div>
            </details>

            <details class="faq-box">
                <summary>How does Govindpur's GT Road NH-19 location benefit long-distance interstate moves?</summary>
                <div class="faq-content">
                    Situated directly on the Golden Quadrilateral NH-19 (Grand Trunk Road), Govindpur provides immediate expressway access without entering city traffic bottlenecks. Consignments bound for Kolkata, Asansol, Durgapur, Varanasi, Prayagraj, and Delhi depart immediately on high-speed express corridors, cutting transit times by several hours.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you provide warehouse relocation and commercial logistics in Govindpur?</summary>
                <div class="faq-content">
                    Yes, as Govindpur is Dhanbad's major logistics and wholesale hub, we provide comprehensive commercial shifting for hardware distributors, automobile dealerships, manufacturing godowns, and trading firms. We handle heavy inventory, palletized cargo, and industrial machinery with proper cranes and hydraulic tail-lift trucks.
                </div>
            </details>

            <details class="faq-box">
                <summary>How do you protect furniture and electronics from highway dust and soot in Govindpur?</summary>
                <div class="faq-content">
                    Because Govindpur experiences heavy highway vehicular dust and industrial particulate matter, we apply a multi-layered barrier: virgin air bubble wrap, 5-ply corrugated carton sheets, foam corner buffers, moisture-absorbing silica packets, and an outer wrapping of heavy industrial stretch film that hermetically seals each item against dirt, soot, and moisture.
                </div>
            </details>

            <details class="faq-box">
                <summary>Can you transport cars and two-wheelers safely from Govindpur across India?</summary>
                <div class="faq-content">
                    Yes. We offer door-to-door vehicle transport from Govindpur to Bangalore, Delhi, Mumbai, Pune, Patna, and all major cities. We use dedicated hydraulic car carriers and wheel-locked bike carriers with bumper padding, tire chocks, and comprehensive transit insurance cover.
                </div>
            </details>

            <details class="faq-box">
                <summary>Do you serve adjacent areas like Barwadda, Saraidhela, and Nirsa?</summary>
                <div class="faq-content">
                    Yes, our operational fleet covers Govindpur, Barwadda Bypass, Saraidhela, Chhatatand, Nirsa, Pandeydih, Nagarguri, and the entire northern Dhanbad industrial corridor.
                </div>
            </details>

            <details class="faq-box">
                <summary>What documentation is provided for corporate and PSU claim reimbursement?</summary>
                <div class="faq-content">
                    We provide complete official documentation including 100% GST-registered tax invoices, stamped consignment notes (Lorry Receipts - LR), itemized inventory declarations, and transit insurance certificates approved by PSU, BCCL, banking, and private corporate claim desks.
                </div>
            </details>

            <details class="faq-box">
                <summary>How much advance notice is required to book a move in Govindpur?</summary>
                <div class="faq-content">
                    For local moves within Dhanbad district, a 1-day notice is usually sufficient. For interstate moves along the GT Road corridor, 2 to 4 days advance booking guarantees dedicated container carrier allocation and swift insurance underwriting.
                </div>
            </details>
        </div>
    </section>

    <!-- Section 9: High-Conversion Bottom CTA Banner -->
    <!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<section class="cta-banner-govindpur">
        <h2>Ready for a Fast & Safe Relocation in Govindpur?</h2>
        <p>
            Benefit from GT Road expressway speed, military-grade packing protection, and twelve years of Dhanbad moving mastery. Contact our Govindpur relocation coordinator right now for a tailored quote.
        </p>
        <div class="cta-btns">
            <a href="tel:+918409531615" class="btn-call-primary" style="background: #ea580c; color: #ffffff;">
                <i class="fa-solid fa-phone"></i> Call +91 8409531615
            </a>
            <a href="https://api.whatsapp.com/send?phone=918409531615&text=Hello%2C%20I%20need%20packers%20and%20movers%20services%20in%20Govindpur." target="_blank" class="btn-quote-secondary" style="background: #25d366; border-color: #25d366; color: #ffffff;">
                <i class="fa-brands fa-whatsapp"></i> Chat on WhatsApp
            </a>
        </div>
    </section>

</main>

<?php require_once __DIR__ . '/includes/footer.php'; ?>

</body>
</html>
