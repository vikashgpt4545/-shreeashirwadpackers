<?php
/**
 * SEO & Metadata Engine
 * Pure Core PHP Implementation for Google Search, AI Overviews & Local Schema
 */

require_once __DIR__ . '/config.php';

function get_page_seo($page_identifier = 'home') {
    $canonical_base = PRODUCTION_CANONICAL_DOMAIN;

    $seo_defaults = [
        'home' => [
            'title' => 'Packers and Movers in Ranchi | 9835565233',
            'description' => 'Shree Ashirwad Packers and Movers in Ranchi offer reliable, cost-effective, and hassle-free relocation services for homes, offices, and vehicles shifting across Jharkhand. Call 9835565233 / 8409531615.',
            'canonical' => $canonical_base . '/',
            'keywords' => 'packers and movers in ranchi, best packers and movers in ranchi, top packers and movers in ranchi, movers and packers in ranchi, packers and movers in ranchi jharkhand, ranchi packers and movers contact number, iba approved packers and movers in ranchi, packers and movers charges in ranchi, packers and movers ranchi price list',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/assets/images/logo.png',
        ],
        'about' => [
            'title' => 'About Shree Ashirwad Packers - 8409531615',
            'description' => 'Learn more about Shree Ashirwad Packers and Movers, Jharkhand\'s premier IBA approved & ISO 9001:2015 certified moving company with 15+ years of trusted relocation services in Ranchi.',
            'canonical' => $canonical_base . '/about',
            'keywords' => 'about shree ashirwad packers, packers and movers in ranchi, best packers and movers in ranchi, top packers and movers in ranchi, professional packers and movers in ranchi, trusted packers and movers in ranchi, iba approved packers and movers in ranchi, packers and movers in ranchi jharkhand',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/assets/images/logo.png',
        ],
        'residential-shifting' => [
            'title' => 'Residential Shifting Services in Ranchi - 8409531615',
            'description' => 'Top-rated residential shifting services in Ranchi by Shree Ashirwad Packers. 15+ years experience, IBA approved bills, 5-layer packing, 25,000+ homes moved. Call 8409531615.',
            'canonical' => $canonical_base . '/residential-shifting/',
            'keywords' => 'residential shifting services in ranchi, household shifting services in ranchi, home packers and movers near me, house shifting packers and movers near me, local home shifting, packing and shifting services, house shifting company, packers and movers in ranchi, best packers and movers in ranchi, iba approved packers and movers in ranchi',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/assets/images/logo.png',
        ],
        'business-shifting' => [
            'title' => 'Business Shifting Services in Ranchi - 8409531615',
            'description' => 'Professional business shifting and corporate office relocation in Ranchi by Shree Ashirwad Packers. Zero downtime, IT server packing, 15+ years experience. Call 8409531615.',
            'canonical' => $canonical_base . '/business-shifting/',
            'keywords' => 'business shifting services in ranchi, office shifting services in ranchi, corporate office relocation, commercial shifting services, office packers and movers in ranchi, packers and movers in ranchi, iba approved packers and movers in ranchi',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/assets/images/logo.png',
        ],
        'vehicle-shifting' => [
            'title' => 'Vehicle Shifting Services in Ranchi - 8409531615',
            'description' => 'Specialized car transport and bike shifting services in Ranchi by Shree Ashirwad Packers. Enclosed hydraulic carriers, wooden-crated bike packing, 15+ yrs exp. Call 8409531615.',
            'canonical' => $canonical_base . '/vehicle-shifting/',
            'keywords' => 'vehicle shifting services in ranchi, car transport in ranchi, bike transport in ranchi, car carrier services in ranchi, motorcycle transport, two wheeler shifting, enclosed car carrier, packers and movers in ranchi',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/assets/images/logo.png',
        ],
        'packing-and-unpacking' => [
            'title' => 'Packing and Unpacking Services in Ranchi - 8409531615',
            'description' => 'Professional packing and unpacking services in Ranchi by Shree Ashirwad Packers. 5-layer protective packing, bubble wrap, custom crating, zero damage guarantee. Call 8409531615.',
            'canonical' => $canonical_base . '/packing-and-unpacking/',
            'keywords' => 'packing and unpacking services in ranchi, packing and shifting services, house packing and moving services, house unpacking services, packers and movers packing, bubble wrap packaging services, fragile item packing, packers and movers in ranchi, best packers and movers in ranchi, trusted packers and movers in ranchi, iba approved packers and movers in ranchi, iso certified packers and movers in ranchi, packers and movers in ranchi price list, packers and movers charges in ranchi, packers and movers in ranchi jharkhand, shree ashirwad packers and movers ranchi, packing and moving charges, professional packing services',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/assets/images/logo.png',
        ],
        'loading-and-unloading-services' => [
            'title' => 'Loading and Unloading Services in Ranchi - 8409531615',
            'description' => 'Professional loading and unloading services in Ranchi by Shree Ashirwad Packers. Trained heavy lifters, hydraulic ramps, hydraulic trolleys, zero damage guarantee. Call 8409531615.',
            'canonical' => $canonical_base . '/loading-and-unloading-services/',
            'keywords' => 'loading and unloading services in ranchi, loading and unloading furniture, movers and packers with loading and unloading, moving loading and unloading services, labour for home shifting, helper for house shifting, manpower for house shifting, house shifting helpers, furniture loading service, transport loading services, packers and movers in ranchi, best packers and movers in ranchi, trusted packers and movers in ranchi, iba approved packers and movers in ranchi, iso certified packers and movers in ranchi, packers and movers in ranchi price list, packers and movers charges in ranchi, packers and movers in ranchi jharkhand, shree ashirwad packers and movers ranchi',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/assets/images/logo.png',
        ],
        'warehouse-service' => [
            'title' => 'Warehouse Services in Ranchi - 8409531615',
            'description' => 'Secure warehousing and household storage services in Ranchi by Shree Ashirwad Packers. 24/7 CCTV surveillance, fire & moisture protected, pest-controlled storage. Call 8409531615.',
            'canonical' => $canonical_base . '/warehouse-service/',
            'keywords' => 'warehouse services in ranchi, household storage services in ranchi, commercial warehouse storage, luggage storage ranchi, storage facility in ranchi, furniture storage ranchi, safe storage services in ranchi, household goods storage in ranchi, packers and movers in ranchi, best packers and movers in ranchi, trusted packers and movers in ranchi, iba approved packers and movers in ranchi, iso certified packers and movers in ranchi, packers and movers in ranchi price list, packers and movers charges in ranchi, packers and movers in ranchi jharkhand, shree ashirwad packers and movers ranchi',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/assets/images/logo.png',
        ],
        'international-service' => [
            'title' => 'International Moving Services in Ranchi - 8409531615',
            'description' => 'Professional international moving and global relocation services from Ranchi by Shree Ashirwad Packers. Air & sea freight, customs clearance, ISPM-15 wooden crating. Call 8409531615.',
            'canonical' => $canonical_base . '/international-service/',
            'keywords' => 'international moving services in ranchi, international packers and movers in ranchi, overseas relocation services ranchi, air freight baggage movers, sea freight shipping india, customs clearance india, global relocation services in ranchi, packers and movers in ranchi, best packers and movers in ranchi, trusted packers and movers in ranchi, iba approved packers and movers in ranchi, iso certified packers and movers in ranchi, packers and movers in ranchi price list, packers and movers charges in ranchi, packers and movers in ranchi jharkhand, shree ashirwad packers and movers ranchi',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/assets/images/logo.png',
        ],
        'domestics-service' => [
            'title' => 'Domestic Moving Services in Ranchi - 8409531615',
            'description' => 'All-India domestic shifting services from Ranchi by Shree Ashirwad Packers. Dedicated closed container trucks, GPS tracking, IBA approved bills, 15+ yrs exp. Call 8409531615.',
            'canonical' => $canonical_base . '/domestics-service/',
            'keywords' => 'domestic shifting services, domestic shifting, domestic household shifting packers and movers, domestic shifting services india, movers and packers for domestic shifting of household, intercity packers and movers cost, packers and movers charges intercity, packers and movers outstation charge, packers and movers in ranchi, best packers and movers in ranchi, trusted packers and movers in ranchi, iba approved packers and movers in ranchi, iso certified packers and movers in ranchi, packers and movers in ranchi price list, packers and movers charges in ranchi, packers and movers in ranchi jharkhand, shree ashirwad packers and movers ranchi',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/assets/images/logo.png',
        ],
        'insurance-service' => [
            'title' => 'Transit Insurance Services in Ranchi - Shree Ashirwad Packers - 8409531615',
            'description' => 'Comprehensive transit insurance services in Ranchi by Shree Ashirwad Packers. All-risk protection for household goods shifting, furniture delivery & vehicle transport. 100% IBA approved bills, fast 7-day claim settlement. Call 8409531615.',
            'canonical' => $canonical_base . '/insurance-service/',
            'keywords' => 'packers and movers insurance charges, insurance value in movers and packers, buy packers and movers insurance, household goods shifting insurance, household shifting insurance, moving insurance services, furniture delivery insurance, licensed and insured movers, packers and movers in ranchi, best packers and movers in ranchi, trusted packers and movers in ranchi, iba approved packers and movers in ranchi, iso certified packers and movers in ranchi, packers and movers in ranchi price list, packers and movers charges in ranchi, packers and movers in ranchi jharkhand, shree ashirwad packers and movers ranchi',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/assets/images/logo.png',
        ],
        'gallery' => [
            'title' => 'Work Proof & Moving Gallery - Shree Ashirwad Packers Ranchi - 8409531615',
            'description' => 'Explore authentic photos and proof of real relocations by Shree Ashirwad Packers and Movers in Ranchi. Real moving trucks, 5-layer packing, IBA approved certifications, warehouse storage, and vehicle transport across Jharkhand.',
            'canonical' => $canonical_base . '/gallery',
            'keywords' => 'packers and movers gallery, moving photos ranchi, packers and movers proof, shree ashirwad packers photos, moving truck photos ranchi, house shifting photos, office relocation photos ranchi, car carrier photos jharkhand, packers and movers in ranchi, best packers and movers in ranchi, trusted packers and movers in ranchi, iba approved packers and movers in ranchi, iso certified packers and movers in ranchi, packers and movers in ranchi price list, packers and movers charges in ranchi, packers and movers in ranchi jharkhand, shree ashirwad packers and movers ranchi',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/images/shree-ashirwad-verified-moving-truck-jharkhand.jpg',
        ],
        'contact' => [
            'title' => 'Contact Us - Shree Ashirwad Packers and Movers Ranchi - 8409531615',
            'description' => 'Contact Shree Ashirwad Packers and Movers in Ranchi. 24/7 helpline at 8409531615 or 9835565233. Morabadi headquarters, free home survey, instant WhatsApp moving quotes, and branch offices across Jharkhand.',
            'canonical' => $canonical_base . '/contact',
            'keywords' => 'packers and movers in ranchi contact number, shree ashirwad packers contact, packers and movers ranchi office address, packers and movers phone number, packers and movers in ranchi, best packers and movers in ranchi, trusted packers and movers in ranchi, iba approved packers and movers in ranchi, iso certified packers and movers in ranchi, packers and movers in ranchi price list, packers and movers charges in ranchi, packers and movers in ranchi jharkhand, shree ashirwad packers and movers ranchi',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/assets/images/logo.png',
        ],
        'pay-online' => [
            'title' => 'Pay Online - Shree Ashirwad Packers and Movers - 8409531615',
            'description' => 'Pay your relocation invoice online safely with Shree Ashirwad Packers & Movers. Official Axis Bank current account details, NEFT, IMPS, RTGS, and UPI payments.',
            'canonical' => $canonical_base . '/pay-online',
            'keywords' => 'pay online shree ashirwad packers, packers and movers online payment, moving invoice payment ranchi, bank transfer shree ashirwad packers, axis bank payment packers and movers',
            'og_type' => 'website',
            'og_image' => $canonical_base . '/assets/images/logo.png',
        ],
    ];

    $seo = isset($seo_defaults[$page_identifier]) ? $seo_defaults[$page_identifier] : $seo_defaults['home'];
    return $seo;
}

function render_seo_tags($page_identifier = 'home') {
    $seo = get_page_seo($page_identifier);
    $base_url = SITE_BASE_URL;
    $canonical_url = $seo['canonical'];
    ?>
    <title><?php echo htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="keywords" content="<?php echo htmlspecialchars($seo['keywords'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
    <meta name="author" content="<?php echo htmlspecialchars(BUSINESS_NAME, ENT_QUOTES, 'UTF-8'); ?>">
    <link rel="canonical" href="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">

    <!-- Open Graph / Facebook / WhatsApp Preview -->
    <meta property="og:locale" content="en_IN">
    <meta property="og:type" content="<?php echo htmlspecialchars($seo['og_type'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:title" content="<?php echo htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:url" content="<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:site_name" content="<?php echo htmlspecialchars(BUSINESS_NAME, ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image" content="<?php echo htmlspecialchars($seo['og_image'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta property="og:image:width" content="1024">
    <meta property="og:image:height" content="1024">
    <meta property="og:image:alt" content="<?php echo htmlspecialchars(BUSINESS_NAME . ' Official Emblem', ENT_QUOTES, 'UTF-8'); ?>">

    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="twitter:image" content="<?php echo htmlspecialchars($seo['og_image'], ENT_QUOTES, 'UTF-8'); ?>">

    <!-- Google Verification & Search Engine Metadata -->
    <meta name="google-site-verification" content="<?php echo htmlspecialchars(GOOGLE_SITE_VERIFICATION, ENT_QUOTES, 'UTF-8'); ?>">
    <meta name="theme-color" content="#1a2b4c">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="Ranchi">
    <meta name="geo.position" content="<?php echo RANCHI_GEO_LAT; ?>;<?php echo RANCHI_GEO_LNG; ?>">
    <meta name="ICBM" content="<?php echo RANCHI_GEO_LAT; ?>, <?php echo RANCHI_GEO_LNG; ?>">

    <!-- Favicons & App Icons -->
    <link rel="icon" type="image/png" href="<?php echo $base_url; ?>/assets/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo $base_url; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo $base_url; ?>/assets/images/favicon.png">

    <!-- Structured Data / JSON-LD MovingCompany Schema (Verified Entity) -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "MovingCompany",
      "@id": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/#movingcompany",
      "name": "<?php echo BUSINESS_NAME; ?>",
      "alternateName": "<?php echo BRAND_SHORT_NAME; ?>",
      "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
      "logo": {
        "@type": "ImageObject",
        "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png",
        "width": 1024,
        "height": 1024
      },
      "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png",
      "description": "<?php echo htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>",
      "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
      "email": "<?php echo OFFICIAL_EMAIL; ?>",
      "priceRange": "₹₹",
      "currenciesAccepted": "INR",
      "paymentAccepted": "Cash, UPI, Net Banking, Credit Card, Debit Card",
      "address": {
        "@type": "PostalAddress",
        "streetAddress": "<?php echo RANCHI_HQ_STREET; ?>",
        "addressLocality": "<?php echo RANCHI_HQ_CITY; ?>",
        "addressRegion": "<?php echo RANCHI_HQ_STATE; ?>",
        "postalCode": "<?php echo RANCHI_HQ_PINCODE; ?>",
        "addressCountry": "IN"
      },
      "geo": {
        "@type": "GeoCoordinates",
        "latitude": <?php echo RANCHI_GEO_LAT; ?>,
        "longitude": <?php echo RANCHI_GEO_LNG; ?>
      },
      "openingHoursSpecification": [
        {
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
        }
      ],
      "areaServed": [
        {
          "@type": "State",
          "name": "Jharkhand"
        },
        {
          "@type": "City",
          "name": "Ranchi"
        },
        {
          "@type": "City",
          "name": "Bokaro"
        },
        {
          "@type": "City",
          "name": "Dhanbad"
        },
        {
          "@type": "City",
          "name": "Jamshedpur"
        },
        {
          "@type": "City",
          "name": "Hazaribagh"
        },
        {
          "@type": "City",
          "name": "Deoghar"
        },
        {
          "@type": "City",
          "name": "Giridih"
        },
        {
          "@type": "City",
          "name": "Ramgarh"
        }
      ],
      "sameAs": [
        "https://share.google/ThfGaS541NwFKVsQZ",
        "https://shreeashirwadpackersandmovers.com/",
        "<?php echo SOCIAL_FACEBOOK; ?>",
        "<?php echo SOCIAL_TWITTER; ?>",
        "<?php echo SOCIAL_INSTAGRAM; ?>",
        "<?php echo SOCIAL_YOUTUBE; ?>",
        "<?php echo SOCIAL_PINTEREST; ?>"
      ],
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "bestRating": "5",
        "worstRating": "1",
        "ratingCount": "664",
        "reviewCount": "664"
      },
      "review": [
        {
          "@type": "Review",
          "author": { "@type": "Person", "name": "Amit Verma" },
          "datePublished": "2026-09-05",
          "reviewBody": "Shifted 2 BHK household items and Activa from Harmu to Bokaro. 4-layer packing was exceptional with zero scratches.",
          "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" }
        },
        {
          "@type": "Review",
          "author": { "@type": "Person", "name": "Sunita Sharma" },
          "datePublished": "2026-08-22",
          "reviewBody": "As a Central Govt officer transferring to Bangalore, getting proper IBA approved bills was critical. My claim was cleared in 4 days.",
          "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" }
        },
        {
          "@type": "Review",
          "author": { "@type": "Person", "name": "Rajeshwar Prasad Singh" },
          "datePublished": "2026-08-28",
          "reviewBody": "Elderly couple moving 3 BHK duplex in Morabadi. Boys were polite and reassembled teakwood beds before evening.",
          "reviewRating": { "@type": "Rating", "ratingValue": "5", "bestRating": "5" }
        }
      ],
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Relocation and Shifting Services",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Residential Household Shifting" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Commercial Office Relocation" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Car Transportation Carrier Service" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Bike Motorcycle Parcel Transport" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Professional 4-Layer Packing and Unpacking" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Heavy Goods Loading and Unloading" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Warehousing and Household Storage" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Domestic Intercity Shifting Pan-India" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Comprehensive Transit Insurance Coverage" } }
        ]
      },
      "contactPoint": [
        {
          "@type": "ContactPoint",
          "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
          "contactType": "customer service",
          "areaServed": "IN",
          "availableLanguage": ["English", "Hindi"]
        },
        {
          "@type": "ContactPoint",
          "telephone": "<?php echo SECONDARY_PHONE_RAW; ?>",
          "contactType": "sales",
          "areaServed": "IN",
          "availableLanguage": ["English", "Hindi"]
        }
      ],
      "foundingDate": "2010",
      "award": "IBA Approved Relocation Service Provider (Indian Banks' Association)",
      "hasCredential": [
        {
          "@type": "EducationalOccupationalCredential",
          "name": "ISO 9001:2015 Quality Management Certification",
          "credentialCategory": "Quality Standard"
        },
        {
          "@type": "EducationalOccupationalCredential",
          "name": "IBA Approved Transporter Certification",
          "credentialCategory": "Government & Bank Transfer Approval"
        }
      ],
      "knowsAbout": [
        "Household Goods Relocation",
        "Commercial Office Shifting",
        "Hydraulic Enclosed Car Carrier Transportation",
        "Motorcycle & Scooter Wooden Crate Packing",
        "IBA Approved Relocation Billing for Government Employees",
        "Industrial Machinery Moving",
        "4-Layer Protective Packing Methodology",
        "Secure Warehousing and Household Storage Facilities"
      ]
    }
    </script>

    <!-- Product & Offer Schema for Google Search Rich Snippet Stars & Price Range -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Product",
      "@id": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>#product",
      "name": "<?php echo htmlspecialchars($seo['title'], ENT_QUOTES, 'UTF-8'); ?>",
      "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png",
      "description": "<?php echo htmlspecialchars($seo['description'], ENT_QUOTES, 'UTF-8'); ?>",
      "brand": {
        "@type": "Brand",
        "name": "<?php echo BUSINESS_NAME; ?>"
      },
      "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "bestRating": "5",
        "worstRating": "1",
        "ratingCount": "664",
        "reviewCount": "664"
      },
      "offers": {
        "@type": "AggregateOffer",
        "priceCurrency": "INR",
        "lowPrice": "1500",
        "highPrice": "50000",
        "offerCount": "9",
        "priceValidUntil": "2027-12-31",
        "availability": "https://schema.org/InStock",
        "url": "<?php echo htmlspecialchars($canonical_url, ENT_QUOTES, 'UTF-8'); ?>"
      }
    }
    </script>

    <?php if ($page_identifier === 'about'): ?>
    <!-- BreadcrumbList Schema for Google Search -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "About Us",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/about"
        }
      ]
    }
    </script>

    <!-- AboutPage Schema for Google E-E-A-T & Knowledge Graph -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "AboutPage",
      "name": "About Shree Ashirwad Packers and Movers",
      "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/about",
      "description": "Learn more about Shree Ashirwad Packers and Movers, Jharkhand's leading relocation company since 2009 with IBA approved billing and ISO 9001:2015 certification.",
      "mainEntity": {
        "@type": "MovingCompany",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
        "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
        "sameAs": [
          "https://share.google/ThfGaS541NwFKVsQZ",
          "<?php echo SOCIAL_FACEBOOK; ?>",
          "<?php echo SOCIAL_TWITTER; ?>",
          "<?php echo SOCIAL_INSTAGRAM; ?>",
          "<?php echo SOCIAL_YOUTUBE; ?>",
          "<?php echo SOCIAL_PINTEREST; ?>"
        ]
      }
    }
    </script>

    <!-- FAQPage JSON-LD Structured Data for About Us Page -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Who is the owner of Shree Ashirwad Packers and Movers in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Shree Ashirwad Packers and Movers is an established independent logistics enterprise founded in 2009 in Harmu, Ranchi, managed by seasoned relocation professionals with over 15 years of industry experience across Jharkhand."
          }
        },
        {
          "@type": "Question",
          "name": "Are your moving bills officially IBA approved for Bank and Government employee claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100%. Shree Ashirwad Packers provides legitimate IBA-approved bills and 100% GST-compliant invoices (SAC 996511) accepted for claim reimbursement by SBI, PNB, Canara Bank, Bank of India, Indian Railways, Coal India (CCL), SAIL Bokaro, CMPDI, and Central Defence units."
          }
        },
        {
          "@type": "Question",
          "name": "Does Shree Ashirwad Packers own its moving container trucks?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Unlike transport brokers or online aggregators who sub-contract goods to third-party open trucks, Shree Ashirwad Packers owns and operates its own dedicated fleet of all-weather, sealed container vehicles equipped with real-time GPS tracking."
          }
        },
        {
          "@type": "Question",
          "name": "Which areas in Jharkhand do you provide relocation services?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We operate active branches in Ranchi (Harmu Bypass Road) and Bokaro Steel City (Sector 12/A), and provide comprehensive packing, shifting, car transport, and warehousing across all 24 districts of Jharkhand including Jamshedpur, Dhanbad, Deoghar, Hazaribagh, Ramgarh, and Giridih."
          }
        },
        {
          "@type": "Question",
          "name": "What type of moving insurance is provided for household goods?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We arrange 100% Comprehensive Transit Insurance with leading nationalized insurance companies covering risks of fire, highway collision, vehicle overturning, and natural calamities under Full Value Protection."
          }
        },
        {
          "@type": "Question",
          "name": "How can I book or contact Shree Ashirwad Packers for a home survey?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can call our direct customer helpline at 8409531615 or 9835565233, or contact us via WhatsApp for a quick estimate and a free in-home physical or virtual survey."
          }
        }
      ]
    }
    </script>
    <?php endif; ?>

    <?php if ($page_identifier === 'residential-shifting'): ?>
    <!-- BreadcrumbList Schema for Residential Shifting -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Services",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/#services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Residential Shifting",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/residential-shifting/"
        }
      ]
    }
    </script>

    <!-- Service Schema for Residential Shifting -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Residential Shifting and Household Relocation",
      "name": "Residential Shifting Services in Ranchi",
      "provider": {
        "@type": "MovingCompany",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
        "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
        "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png"
      },
      "areaServed": [
        { "@type": "City", "name": "Ranchi" },
        { "@type": "City", "name": "Bokaro" },
        { "@type": "City", "name": "Jamshedpur" },
        { "@type": "City", "name": "Dhanbad" },
        { "@type": "State", "name": "Jharkhand" }
      ],
      "description": "Professional residential household shifting in Ranchi including 5-layer protective packing, modular furniture dismantling, containerized transport, and doorstep unpacking.",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Residential Shifting Packages",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "1 BHK Household Shifting" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "2 BHK Family Home Relocation" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "3 BHK Luxury Apartment Shifting" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Independent Villa & Bungalow Shifting" } }
        ]
      }
    }
    </script>

    <!-- FAQPage Schema for Residential Shifting -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does residential shifting cost in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Local residential shifting in Ranchi starts from ₹3,500 to ₹6,500 for a 1 BHK, ₹5,500 to ₹10,500 for a 2 BHK, and ₹9,000 to ₹16,000 for a 3 BHK family apartment depending on volume, packing materials, and elevator access."
          }
        },
        {
          "@type": "Question",
          "name": "Do your carpenters dismantle and assemble modular double beds and wardrobes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our permanent crew includes experienced furniture carpenters who carefully dismantle hydraulic king/queen beds, modular sliding wardrobes, and dining tables, and reassemble them at your new home."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect fragile glassware, kitchen crockery, and LED TVs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We use a scientific 5-layer packing system: virgin 100 GSM bubble wrap, EPE foam sheets, heavy-duty 7-ply corrugated sheets, corner protectors, and custom wooden crating for large LED TVs."
          }
        },
        {
          "@type": "Question",
          "name": "Are your residential moving bills IBA approved for Bank and Government employee claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100%. We provide complete IBA-approved documentation including official Bilty (LR), 100% GST-compliant invoice (SAC 996511), itemized packing list, and money receipt for full employer claim reimbursement."
          }
        },
        {
          "@type": "Question",
          "name": "How long does a local household shifting move take in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "A standard 1 BHK or 2 BHK local move in Ranchi is completed within 5 to 8 hours on the same day, from morning packing arrival to afternoon placement and unpacking at your new home."
          }
        },
        {
          "@type": "Question",
          "name": "How far in advance should I book Shree Ashirwad Packers for house shifting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We recommend booking 24 to 48 hours in advance for local Ranchi shifts, and 3 to 5 days prior for intercity relocations. Same-day emergency bookings are also accommodated based on truck availability."
          }
        }
      ]
    }
    </script>
    <?php endif; ?>

    <?php if ($page_identifier === 'business-shifting'): ?>
    <!-- BreadcrumbList Schema for Business Shifting -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Services",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/#services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Business Shifting",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/business-shifting/"
        }
      ]
    }
    </script>

    <!-- Service Schema for Business Shifting -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Commercial Office Relocation and Corporate Business Shifting",
      "name": "Business Shifting Services in Ranchi",
      "provider": {
        "@type": "MovingCompany",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
        "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
        "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png"
      },
      "areaServed": [
        { "@type": "City", "name": "Ranchi" },
        { "@type": "City", "name": "Bokaro" },
        { "@type": "City", "name": "Jamshedpur" },
        { "@type": "City", "name": "Dhanbad" },
        { "@type": "State", "name": "Jharkhand" }
      ],
      "description": "Zero-downtime commercial business shifting and corporate office relocation in Ranchi. Specialized IT server moving, modular workstation carpentry, confidential file custody, and complete GST billing.",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Commercial Relocation Solutions",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Corporate Office Relocation" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "IT Server Rack & Data Center Moving" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Bank & Financial Branch Shifting" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Commercial Goods & Machinery Transport" } }
        ]
      }
    }
    </script>

    <!-- FAQPage Schema for Business Shifting -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do you ensure zero business downtime during office relocation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We execute a disciplined weekend shifting roadmap: packing begins Friday evening after office hours, transit and workstation reassembly take place over Saturday and Sunday, and full network setup is completed so your employees resume work normally on Monday morning."
          }
        },
        {
          "@type": "Question",
          "name": "How are sensitive IT servers and office network equipment packed?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We use anti-static bubble wrap, custom foam padding, cable color-coding tags, and shock-resistant sealed containers. Server racks are transported in dedicated shock-absorbing crates to protect hardware components."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide GST tax invoices with Input Tax Credit (ITC) for corporate moves?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100%. We issue complete corporate GST invoices under SAC code 996511 / 996791 detailing CGST, SGST, or IGST, complete with company PAN and GSTIN for seamless corporate accounts audit and tax credit."
          }
        },
        {
          "@type": "Question",
          "name": "Can your team dismantle and reassemble modular office workstations and cubicles?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our permanent crew includes experienced office furniture carpenters who systematically dismantle partition screens, raceways, conference tables, and executive desks, and reassemble them according to your new floor layout."
          }
        },
        {
          "@type": "Question",
          "name": "How do you manage confidentiality for legal files and audit archives?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Confidential corporate documents are packed into numbered, tamper-evident security crates sealed with one-time barcode locks. A detailed chain-of-custody manifest is signed by our move manager and your company representative."
          }
        },
        {
          "@type": "Question",
          "name": "How early should a company book Shree Ashirwad Packers for office relocation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For small offices (under 20 desks), 3 to 5 days advance notice is ideal. For large corporate branches or multi-floor relocations (50-200+ desks), we recommend scheduling a site survey 1 to 2 weeks prior."
          }
        }
      ]
    }
    </script>
    <?php endif; ?>

    <?php if ($page_identifier === 'vehicle-shifting'): ?>
    <!-- BreadcrumbList Schema for Vehicle Shifting -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Services",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/#services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Vehicle Shifting",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/vehicle-shifting/"
        }
      ]
    }
    </script>

    <!-- Service Schema for Vehicle Shifting -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Car Carrier Transport and Two-Wheeler Motorcycle Shifting",
      "name": "Vehicle Shifting Services in Ranchi",
      "provider": {
        "@type": "MovingCompany",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
        "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
        "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png"
      },
      "areaServed": [
        { "@type": "City", "name": "Ranchi" },
        { "@type": "City", "name": "Bokaro" },
        { "@type": "City", "name": "Jamshedpur" },
        { "@type": "City", "name": "Dhanbad" },
        { "@type": "State", "name": "Jharkhand" }
      ],
      "description": "Safe, enclosed hydraulic car transportation and wooden-crated motorcycle bike shifting from Ranchi to all 28 Indian states. Zero odometer transit, IBA approved bills, and comprehensive transit insurance.",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Vehicle Transportation Solutions",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Hatchback & Sedan Car Transport" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "SUV & Luxury Car Carrier Transit" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Two-Wheeler Motorcycle Parcel Service" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Scooter & EV Two-Wheeler Crated Shifting" } }
        ]
      }
    }
    </script>

    <!-- FAQPage Schema for Vehicle Shifting -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much does car transport from Ranchi to other states cost?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Car transportation charges generally range from ₹2,500 to ₹4,500 for local intra-city shifts, ₹9,000 to ₹16,000 for regional moves (such as Kolkata or Patna), and ₹14,000 to ₹24,000 for long-distance metros (such as Delhi, Bengaluru, Mumbai, or Pune) in enclosed hydraulic car carriers."
          }
        },
        {
          "@type": "Question",
          "name": "How do you pack and secure motorcycles, scooters, and bikes for transit?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Two-wheelers undergo a 4-layer packaging process: bubble wrap on painted petrol tanks, foam protectors on mirrors, corrugated sheets on engine exhausts, and heavy-duty wooden crate framing with upright wheel chocks."
          }
        },
        {
          "@type": "Question",
          "name": "Do you transport cars by driving them or using dedicated enclosed carriers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We transport cars exclusively inside specialized enclosed car carrier trucks equipped with hydraulic loading ramps. Your car is never driven over long-distance highways, ensuring zero odometer wear and total safety."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are required for car and bike shifting from Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You will need photocopies of the vehicle Registration Certificate (RC), valid Vehicle Insurance Policy, Pollution Under Control (PUC) certificate, and the owner's Government ID (Aadhaar or PAN Card)."
          }
        },
        {
          "@type": "Question",
          "name": "Is transit insurance included for vehicle shifting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We arrange comprehensive Marine Transit Insurance through leading nationalized insurers covering total declared vehicle value against accidental transit risks, fire, or overturning."
          }
        },
        {
          "@type": "Question",
          "name": "Are vehicle transportation bills IBA approved for Bank and Government employee claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100%. We provide complete IBA-approved Lorry Receipts (LR/Bilty), GST tax invoices with SAC code 996511, and vehicle condition inspection reports accepted by all public sector banks, PSUs, and central government departments."
          }
        }
      ]
    }
    </script>
    <?php endif; ?>

    <?php if ($page_identifier === 'packing-and-unpacking'): ?>
    <!-- BreadcrumbList Schema for Packing and Unpacking -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Services",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/#services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Packing and Unpacking",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/packing-and-unpacking/"
        }
      ]
    }
    </script>

    <!-- Service Schema for Packing and Unpacking -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Professional Packing and Unpacking Services",
      "name": "Packing and Unpacking Services in Ranchi",
      "provider": {
        "@type": "MovingCompany",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
        "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
        "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png"
      },
      "areaServed": [
        { "@type": "City", "name": "Ranchi" },
        { "@type": "City", "name": "Bokaro" },
        { "@type": "City", "name": "Jamshedpur" },
        { "@type": "City", "name": "Dhanbad" },
        { "@type": "State", "name": "Jharkhand" }
      ],
      "description": "Engineered 5-layer protective packing, virgin air bubble wrap cushioning, heavy-duty 5/7-ply corrugated cartons, custom wooden crating for electronics, modular furniture dismantling, and complete room-by-room unpacking and debris cleanup in Ranchi.",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Packing and Unpacking Solutions",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "5-Layer Household Goods Packing" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Fragile Glassware & Crockery Double-Bubble Wrapping" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Custom Wooden Crating for LED TVs & Appliances" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Furniture Dismantling, Reassembly & Unpacking Setup" } }
        ]
      }
    }
    </script>

    <!-- FAQPage Schema for Packing and Unpacking -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What packing materials do Shree Ashirwad Packers use for household goods in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We utilize an engineered 5-layer packing system: 100 GSM virgin air bubble wrap, heavy-duty 5-ply and 7-ply corrugated carton boxes, EPE foam sheets, high-strength stretch film, and reinforced self-adhesive security tape, with custom wooden crates for delicate glass and electronics."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide complete unpacking and furniture reassembly at the destination?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our expert moving crew unloads, unpacks every box systematically, reassembles beds, wardrobes, and dining tables, positions major furniture items in your designated rooms, and disposes of all packing waste."
          }
        },
        {
          "@type": "Question",
          "name": "How are fragile items like glassware, porcelain, and kitchen crockery protected?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Delicate crockery and glassware are individually wrapped in double layers of virgin bubble wrap, nested with tissue and corrugated divider inserts inside heavy-duty double-wall cartons, and marked with high-visibility Fragile labels."
          }
        },
        {
          "@type": "Question",
          "name": "Can I hire Shree Ashirwad Packers only for packing services if I arrange my own vehicle?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we offer standalone professional packing services. Our certified packers bring all premium packing materials and complete the packing of your home, apartment, or office with zero obligation for vehicle transit."
          }
        },
        {
          "@type": "Question",
          "name": "How do you pack large LED TVs, computers, and sensitive electronic appliances?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Large screen LED TVs and monitors are wrapped in anti-static foam, cushioned with thick thermocol corner protectors, encased in heavy-duty TV cartons, and placed inside custom-built rigid wooden crates."
          }
        },
        {
          "@type": "Question",
          "name": "Will your team dismantle and reassemble double beds, dining tables, and modular wardrobes?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our skilled carpenters dismantle king/queen size beds, modular cupboards, and dining tables with appropriate tools. All screws, nuts, and bolts are sealed in labeled pouches and securely taped to the furniture frame."
          }
        },
        {
          "@type": "Question",
          "name": "Do you collect and clean up packing material debris after unpacking?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Once unpacking and positioning are completed, our crew collects all empty corrugated boxes, torn bubble wrap, tape scraps, and protective films, leaving your new home neat and clean."
          }
        },
        {
          "@type": "Question",
          "name": "Are packing and unpacking charges covered under IBA approved bills for Bank employee claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100%. Our official invoices clearly itemize packing material costs, labor charges, and transport under GST SAC Code 996511 / 996791, fully complying with Indian Banks' Association (IBA) reimbursement rules for Bank and Central Government employees."
          }
        }
      ]
    }
    </script>
    <?php endif; ?>

    <?php if ($page_identifier === 'loading-and-unloading-services'): ?>
    <!-- BreadcrumbList Schema for Loading and Unloading -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Services",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/#services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Loading and Unloading Services",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/loading-and-unloading-services/"
        }
      ]
    }
    </script>

    <!-- Service Schema for Loading and Unloading -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Professional Loading and Unloading Services",
      "name": "Loading and Unloading Services in Ranchi",
      "provider": {
        "@type": "MovingCompany",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
        "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
        "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png"
      },
      "areaServed": [
        { "@type": "City", "name": "Ranchi" },
        { "@type": "City", "name": "Bokaro" },
        { "@type": "City", "name": "Jamshedpur" },
        { "@type": "City", "name": "Dhanbad" },
        { "@type": "State", "name": "Jharkhand" }
      ],
      "description": "Scientific heavy lifting, hydraulic trolley handling, specialized staircase maneuvering, balanced truck weight distribution, and damage-free destination offloading across Ranchi and Jharkhand.",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Loading and Unloading Solutions",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Household Goods Loading & Container Truck Stacking" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Multi-Story Apartment Staircase Heavy Asset Maneuvering" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Commercial Office & Industrial Machinery Rigging" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Destination Offloading & In-Home Goods Staging" } }
        ]
      }
    }
    </script>

    <!-- FAQPage Schema for Loading and Unloading -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How do your movers handle heavy furniture on narrow staircases without elevators in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our permanent moving crews utilize high-tensile nylon shoulder-dolly rigging straps, stair-climbing hand trucks, and non-slip handling gloves. We pad stair railings and doorframes, employing synchronized 4-man lifting maneuvers that leverage ergonomic body mechanics rather than reckless force."
          }
        },
        {
          "@type": "Question",
          "name": "Can I hire Shree Ashirwad Packers only for loading or unloading my own rented truck?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, absolutely. We provide labor-only loading and unloading services in Ranchi and Bokaro. Our professional crew brings heavy-duty platform dollies, moving blankets, and tie-down ratchet straps to efficiently load or unload your self-arranged container or truck."
          }
        },
        {
          "@type": "Question",
          "name": "What specialized equipment do you use for safe loading and unloading in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We deploy heavy-duty hydraulic pallet jacks, 4-wheel furniture dollies with non-marking rubber wheels, multi-angle aluminum loading ramps, staircase climbing hand trucks, industrial ratchet tie-downs, and quilted furniture pads."
          }
        },
        {
          "@type": "Question",
          "name": "How do you balance weight inside the container truck to prevent transit damage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We follow a strict 4-tier loading methodology: heaviest appliances and solid wood furniture are anchored forward over the truck axles, medium corrugated cartons interlock in the middle deck, light fragile boxes rest on top tiers, and all tiers are secured with E-track load-lock ratchet straps."
          }
        },
        {
          "@type": "Question",
          "name": "Are your loading and unloading crews permanent trained staff or casual daily laborers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "100% of our loading handlers are full-time, background-verified permanent employees trained in ergonomic lifting, industrial rigging, and safe material handling. We never subcontract or hire unvetted casual laborers from the street."
          }
        },
        {
          "@type": "Question",
          "name": "What safety precautions are taken to protect apartment floors, doorframes, and walls?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Before lifting begins, our team lays down neoprene floor runners to shield tiles and hardwood from scuffs, installs foam door jamb protectors on main entrances, and pads corner moldings with quilted moving blankets."
          }
        },
        {
          "@type": "Question",
          "name": "How are loading and unloading charges calculated in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Charges depend on the household volume (1 BHK, 2 BHK, 3 BHK, or Villa), floor levels at origin and destination, availability of working elevators, walking lead distance from the truck to the door, and any oversized heavy assets like heavy iron safes or pianos."
          }
        },
        {
          "@type": "Question",
          "name": "Are loading and unloading bills IBA approved for Bank and Central Government employee claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100%. Our moving bills, consignment notes (LR/Bilty), and GST invoices (SAC Code 996511 / 996791) clearly itemize loading, transport, and unloading charges, fully compliant with Indian Banks' Association (IBA) reimbursement rules for Bank and Central Government staff."
          }
        }
      ]
    }
    </script>
    <?php endif; ?>

    <?php if ($page_identifier === 'warehouse-service'): ?>
    <!-- BreadcrumbList Schema for Warehouse Service -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Services",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/#services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Warehouse Service",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/warehouse-service/"
        }
      ]
    }
    </script>

    <!-- Service Schema for Warehouse Service -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Warehousing and Household Storage Services",
      "name": "Warehouse Services in Ranchi",
      "provider": {
        "@type": "MovingCompany",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
        "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
        "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png"
      },
      "areaServed": [
        { "@type": "City", "name": "Ranchi" },
        { "@type": "City", "name": "Bokaro" },
        { "@type": "City", "name": "Jamshedpur" },
        { "@type": "City", "name": "Dhanbad" },
        { "@type": "State", "name": "Jharkhand" }
      ],
      "description": "Secure, climate-protected, pest-controlled warehousing and household storage facility in Ranchi featuring 24/7 CCTV surveillance, elevated pallet racking, and flexible short-term and long-term rental agreements.",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Warehousing and Storage Solutions",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Short-Term Household Goods Storage" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Long-Term Furniture & Appliance Warehousing" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Commercial Inventory & Palletized Storage" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Corporate File Archival & Document Storage" } }
        ]
      }
    }
    </script>

    <!-- FAQPage Schema for Warehouse Service -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How secure is the Shree Ashirwad Packers warehouse facility in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our warehousing facility features 24/7 high-definition CCTV camera coverage with remote cloud backup, physical perimeter fencing, security guards on duty 24/7, multi-zone smoke detectors, industrial fire extinguishers, and strict biometric entry control."
          }
        },
        {
          "@type": "Question",
          "name": "How are monthly warehouse storage charges calculated in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Storage charges are calculated based on the volume of space occupied (cubic feet or square feet) and the rental duration. Typical monthly rates range from ₹1,500 to ₹2,500 for a 1 BHK, ₹2,800 to ₹4,500 for a 2 BHK, and ₹4,500 to ₹7,000 for a 3 BHK, with significant discounts on long-term 6-month or 1-year contracts."
          }
        },
        {
          "@type": "Question",
          "name": "Can I store household goods for just a few days or weeks during home renovation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer fully flexible storage plans starting from as short as 7 days, up to multiple months or years. You pay only for the exact duration your belongings remain safely in our warehouse."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect furniture and wooden goods from termites, moisture, and dust?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "All items are wrapped in moisture-proof stretch film and protective moving blankets, then stored on elevated heavy-duty plastic or treated wooden pallets 6 inches above the floor. Our facilities undergo routine quarterly biological pest control and humidity monitoring."
          }
        },
        {
          "@type": "Question",
          "name": "Can I retrieve some of my stored items while the rest remains in the warehouse?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, partial withdrawals are permitted. Thanks to our serialized barcode inventory system, our warehouse supervisor can retrieve specific labeled boxes with 24 hours advance notice."
          }
        },
        {
          "@type": "Question",
          "name": "Are warehouse and storage bills IBA approved for Bank and Central Government employee claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100%. We provide official GST tax invoices under SAC Code 996791 (Storage and Warehousing Services), warehouse deposit receipts, and verified inventory manifests fully accepted by PSUs, nationalized banks (SBI, PNB), Railways, and Central Government audit departments for transit storage allowances."
          }
        },
        {
          "@type": "Question",
          "name": "What insurance coverage is provided for stored household goods in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "All stored assets are protected under Comprehensive Warehouse Floater Insurance covering accidental risks including warehouse fire, lightning, earthquake, cyclone, structural flooding, and burglary under declared value."
          }
        },
        {
          "@type": "Question",
          "name": "How are items tracked and cataloged inside the storage facility?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Upon arrival, every box and wrapped furniture item is affixed with a unique serialized barcode tag. You receive a digital copy and signed physical copy of the Warehouse Intake Manifest detailing item descriptions, condition notes, and rack bay coordinates."
          }
        }
      ]
    }
    </script>
    <?php endif; ?>

    <?php if ($page_identifier === 'international-service'): ?>
    <!-- BreadcrumbList Schema for International Service -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Services",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/#services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "International Service",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/international-service/"
        }
      ]
    }
    </script>

    <!-- Service Schema for International Service -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "International Moving and Global Relocation Services",
      "name": "International Moving Services in Ranchi",
      "provider": {
        "@type": "MovingCompany",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
        "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
        "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png"
      },
      "areaServed": [
        { "@type": "Country", "name": "United States" },
        { "@type": "Country", "name": "United Kingdom" },
        { "@type": "Country", "name": "Canada" },
        { "@type": "Country", "name": "Australia" },
        { "@type": "Country", "name": "United Arab Emirates" },
        { "@type": "Country", "name": "Germany" },
        { "@type": "Country", "name": "Singapore" },
        { "@type": "City", "name": "Ranchi" },
        { "@type": "State", "name": "Jharkhand" }
      ],
      "description": "Comprehensive international moving services from Ranchi and Jharkhand to over 150 countries worldwide. Ocean freight FCL/LCL, express air cargo, ISPM-15 heat-treated export crating, Indian port customs clearance, and global doorstep delivery.",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "International Relocation Solutions",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "FCL Full Container Load Ocean Shipping" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "LCL Consolidated Liftvan Sea Freight" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Express Air Cargo Baggage & Relocation" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "ISPM-15 Certified Export Crating & Customs Clearance" } }
        ]
      }
    }
    </script>

    <!-- FAQPage Schema for International Service -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How long does international sea freight shipping take from Ranchi to the USA, UK, or Australia?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Total door-to-door transit times typically range from 30 to 45 days for the UK and European ports, 35 to 55 days for US East and West Coast ports, 25 to 40 days for Australia, and 15 to 25 days for the UAE and Middle East, including customs clearance and road-feeder transit from Ranchi."
          }
        },
        {
          "@type": "Question",
          "name": "What is ISPM-15 certified wooden crating and why is it mandatory for overseas moving?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "ISPM-15 (International Standards for Phytosanitary Measures No. 15) requires all raw timber packaging to be debarked and heat-treated to 56°C for 30 minutes, stamped with official IPPC markings. Foreign customs authorities (especially USA, Canada, Australia, and UK) immediately confiscate or re-export shipments packed in untreated wood to protect local ecosystems from invasive timber pests."
          }
        },
        {
          "@type": "Question",
          "name": "What documents are required for Indian customs clearance when moving overseas from Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You will need: a valid original Passport, long-term Visa or Work Permit / Permanent Residency (PR) Card, confirmed Air Ticket, Indian Customs Baggage Declaration Form signed by the shipper, detailed itemized Packing List with values, and an Employer Transfer Letter (for Transfer of Residence duty concessions)."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between FCL (Full Container Load) and LCL (Less than Container Load)?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "FCL provides exclusive use of a dedicated 20ft (holds ~1-2 BHK) or 40ft (holds ~3-4 BHK) steel marine container sealed at your Ranchi home until overseas delivery. LCL consolidates smaller shipments (few boxes or partial furniture) inside custom wooden liftvans shared with other cargo in a single container, significantly reducing costs for smaller loads."
          }
        },
        {
          "@type": "Question",
          "name": "Can I send urgent luggage or essential items by air freight instead of sea shipping?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer express international air cargo forwarding for essential clothing, kitchenware, baby equipment, and work laptops with 5 to 8 business days delivery, allowing you to settle in immediately while your primary ocean freight container is in transit."
          }
        },
        {
          "@type": "Question",
          "name": "Are your international moving invoices and bills IBA approved for Bank and PSU employee claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100%. Our moving bills, export documentation, and GST tax invoices comply with Indian Banks' Association (IBA) guidelines, accepted by public sector banks, PSUs, and multinational corporations for overseas transfer reimbursements."
          }
        },
        {
          "@type": "Question",
          "name": "How are customs duties and taxes handled at destination countries?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Most countries permit duty-free and tax-free import of used personal household goods under Transfer of Residence (ToR) or personal effects exemptions, provided you have owned and used the goods for at least 6 to 12 months prior to shipping. Our customs team prepares all prerequisite declaration forms."
          }
        },
        {
          "@type": "Question",
          "name": "What insurance coverage is provided for international overseas moves?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We arrange Comprehensive Marine All-Risk Transit Insurance through international maritime underwriters, covering the consignment from doorstep pickup in Ranchi, ocean or air transit, port handling, through to delivery and unpacking at your international residence under declared value."
          }
        }
      ]
    }
    </script>
    <?php endif; ?>

    <?php if ($page_identifier === 'domestics-service'): ?>
    <!-- BreadcrumbList Schema for Domestic Moving Service -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Services",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/#services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Domestic Service",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/domestics-service/"
        }
      ]
    }
    </script>

    <!-- Service Schema for Domestic Moving Service -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Domestic Shifting and Intercity Relocation Services",
      "name": "Domestic Moving Services in Ranchi",
      "provider": {
        "@type": "MovingCompany",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
        "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
        "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png"
      },
      "areaServed": [
        { "@type": "City", "name": "Ranchi" },
        { "@type": "City", "name": "Bokaro" },
        { "@type": "City", "name": "Dhanbad" },
        { "@type": "City", "name": "Jamshedpur" },
        { "@type": "State", "name": "Jharkhand" },
        { "@type": "City", "name": "Delhi" },
        { "@type": "City", "name": "Kolkata" },
        { "@type": "City", "name": "Bengaluru" },
        { "@type": "City", "name": "Mumbai" },
        { "@type": "City", "name": "Hyderabad" },
        { "@type": "City", "name": "Pune" },
        { "@type": "City", "name": "Patna" },
        { "@type": "Country", "name": "India" }
      ],
      "description": "All-India domestic shifting and intercity relocation services from Ranchi and Jharkhand. Featuring dedicated closed container trucks, GPS live tracking, multi-layer shockproof packing, IBA approved billing, and zero transshipment guarantee.",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Domestic Relocation Solutions",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Dedicated Full Truck Load (FTL) Container Shifting" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Shared Part-Load (LTL) Economical Shifting" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Intercity Combined Household & Vehicle Transport" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "IBA Approved Bank & PSU Employee Transfer Relocation" } }
        ]
      }
    }
    </script>

    <!-- FAQPage Schema for Domestic Moving Service -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How long does intercity domestic shifting take from Ranchi to metro cities across India?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Average road transit times from Ranchi in our dedicated closed container fleet: Kolkata or Patna: 24 to 36 hours; Delhi NCR, Lucknow, or Kanpur: 3 to 4 days; Mumbai, Pune, or Ahmedabad: 4 to 5 days; Bengaluru, Hyderabad, or Chennai: 4 to 6 days. Shared part-load consignments may take an additional 1 to 2 days for hub coordination."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Full Truck Load (FTL) and Part Load (LTL) domestic moving?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Full Truck Load (FTL) assigns a dedicated closed container truck exclusively to your household, sealed at your Ranchi home with a numbered tamper-proof seal and opened only at your new destination, delivering the fastest transit with zero transshipment. Part Load (LTL) consolidates smaller consignments (1 BHK or partial goods) inside a shared container with partitioned wooden dividers and color-coded labels, saving up to 40% in transportation costs."
          }
        },
        {
          "@type": "Question",
          "name": "Are your domestic moving bills and GST invoices IBA approved for Bank and Central Government employee claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100%. Shree Ashirwad Packers provides fully compliant IBA-approved moving bills, Consignment Notes (Lorry Receipt / LR Bilty), verified itemized inventory manifests, and 100% GST tax invoices (SAC 996511 / 996791). Our documentation is officially accepted by all nationalized banks (SBI, PNB, BOB, Canara), Defence (Army, Airforce, Navy), Railways, PSUs, and Central Govt audit divisions."
          }
        },
        {
          "@type": "Question",
          "name": "How are domestic moving charges calculated from Ranchi to other Indian states?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Intercity domestic moving charges are calculated based on three primary factors: total distance in kilometers, volume and weight of household goods (dictating container size: 14ft, 17ft, 19ft, or 24ft), and packing service grade. Charges include packing materials, labor, highway toll taxes, national permit fees, e-Way bills, loading, transit, and unloading at destination."
          }
        },
        {
          "@type": "Question",
          "name": "Do you transfer goods to local third-party trucks at intermediate state borders?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "No, never. We maintain a strict Zero Transshipment Guarantee. Your household goods remain inside the exact same closed container truck loaded at your Ranchi doorstep all the way until it pulls up outside your destination residence in another state, eliminating handling damages, lost cartons, and warehouse drops."
          }
        },
        {
          "@type": "Question",
          "name": "Can I track my intercity moving truck while it travels across national highways?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every vehicle in our long-distance fleet is outfitted with GPS satellite tracking hardware. You receive continuous SMS milestone updates at key border crossings and toll plazas, and our 24/7 highway coordination desk provides live GPS location coordinates upon request."
          }
        },
        {
          "@type": "Question",
          "name": "What type of transit insurance is provided for long-distance domestic relocation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We provide Comprehensive All-Risk Transit Insurance underwritten by leading national insurance partners. It protects your belongings against highway collisions, vehicle overturn, fire, explosion, flash floods, and severe transit accidents based on your declared item values."
          }
        },
        {
          "@type": "Question",
          "name": "Can you transport my car or two-wheeler bike in the same domestic moving truck?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. For complete family relocations, we deploy specialized 24ft or 32ft MX closed container trucks featuring integrated vehicle wheel-chock fixtures and safety tie-down lashings, enabling safe combined transit of your entire 2-3 BHK household plus your car or motorcycle under one single consignment note."
          }
        }
      ]
    }
    </script>
    <?php endif; ?>

    <?php if ($page_identifier === 'insurance-service'): ?>
    <!-- BreadcrumbList Schema for Insurance Service -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Services",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/#services"
        },
        {
          "@type": "ListItem",
          "position": 3,
          "name": "Insurance Service",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/insurance-service/"
        }
      ]
    }
    </script>

    <!-- Service Schema for Insurance Service -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "Service",
      "serviceType": "Transit Insurance and Household Moving Protection Services",
      "name": "Insurance Services in Ranchi",
      "provider": {
        "@type": "MovingCompany",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
        "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
        "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png"
      },
      "areaServed": [
        { "@type": "City", "name": "Ranchi" },
        { "@type": "City", "name": "Bokaro" },
        { "@type": "City", "name": "Dhanbad" },
        { "@type": "City", "name": "Jamshedpur" },
        { "@type": "State", "name": "Jharkhand" },
        { "@type": "Country", "name": "India" }
      ],
      "description": "Comprehensive transit insurance and goods moving protection services in Ranchi by Shree Ashirwad Packers. Full Value Protection, Transit-Only and All-Risk policies underwritten by leading national general insurance partners, fast 7-day claim settlement, and 100% IBA approved documentation.",
      "hasOfferCatalog": {
        "@type": "OfferCatalog",
        "name": "Moving Transit Insurance Solutions",
        "itemListElement": [
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Comprehensive All-Risk Door-to-Door Moving Insurance" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Highway Transit-Only Road Collision & Fire Insurance" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "Automobile Four-Wheeler & Two-Wheeler Transit Protection" } },
          { "@type": "Offer", "itemOffered": { "@type": "Service", "name": "IBA Approved Bank & PSU Transit Insurance Billing" } }
        ]
      }
    }
    </script>

    <!-- FAQPage Schema for Insurance Service -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Why is transit insurance necessary when hiring professional packers and movers in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "While our professional 5-layer packing and dedicated closed containers minimize transit risks, interstate highway relocations face unpredictable external perils such as multi-vehicle highway collisions, vehicle overturn, road cave-ins, structural fire, flash floods, or severe weather calamities. Transit insurance guarantees complete financial reimbursement based on your declared asset valuation without prolonged carrier liability disputes."
          }
        },
        {
          "@type": "Question",
          "name": "What is the difference between Transit-Only Insurance and Comprehensive All-Risk Insurance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Transit-Only Insurance covers damage or total loss resulting strictly from vehicle accidents while in highway transit (collision, vehicle overturning, fire, explosion, or natural disasters), with a standard premium of approximately 1.5% of declared goods value. Comprehensive All-Risk Insurance covers the complete end-to-end lifecycle including handling during loading, transit vibrations, unloading, and unpacking inside your destination home, with a premium of approximately 3.0% of declared value."
          }
        },
        {
          "@type": "Question",
          "name": "How are transit insurance premiums calculated for household shifting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Transit insurance premiums are calculated as a small percentage of the total declared replacement value of your household goods. For example, if you declare an itemized household inventory value of ₹5,00,000, a 1.5% Transit-Only policy requires a premium of ₹7,500 plus 18% GST, giving you comprehensive legal coverage against highway losses."
          }
        },
        {
          "@type": "Question",
          "name": "Are your insurance certificates and bills IBA approved for Bank and Central Government employee claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100%. Shree Ashirwad Packers issues authentic Insurance Cover Notes and GST Tax Invoices under SAC Code 997139, paired with official IBA Approved Lorry Receipts (LR Bilty) noting the insured declared sum. Our documentation is fully accepted by nationalized banks (SBI, PNB, BOB, Canara), Defence (Army, Navy, Airforce), Railways, PSUs, and Central Govt audit divisions for complete insurance reimbursement."
          }
        },
        {
          "@type": "Question",
          "name": "What items are strictly excluded from transit insurance coverage?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Standard general insurance policy exclusions include: cash, currency notes, negotiable instruments, gold, jewelry, precious gemstones, living house plants, perishable food items, and contraband. Customers are strictly advised to carry cash, jewelry, and vital personal documents personally."
          }
        },
        {
          "@type": "Question",
          "name": "How does the damage claim settlement process work if an item is damaged?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "If damage is discovered upon destination delivery, our 5-step rapid protocol applies: 1) Note the damage immediately on the delivery receipt / LR copy before our driver departs; 2) Take clear high-resolution photographs and videos of the damaged item and packaging; 3) Notify our customer support desk within 48 hours; 4) Submit an itemized claim form with original purchase receipt or repair estimate; 5) An independent insurance surveyor assesses the item and your compensation or repair payout is disbursed within 7 to 14 business days."
          }
        },
        {
          "@type": "Question",
          "name": "Does transit insurance cover two-wheelers and cars during intercity relocation?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer specialized transit insurance for motorbikes, scooters, and passenger cars. Before loading, a comprehensive Vehicle Inspection Report documents odometer reading, preexisting scratches, and fuel level. The vehicle is insured against transit collisions, carrier overturning, fire, and structural transport damage under declared IDV (Insured Declared Value)."
          }
        },
        {
          "@type": "Question",
          "name": "Can I insure individual valuable items like a large LED TV or double-door refrigerator separately?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our itemized inventory valuation sheet allows you to specify distinct declared values for premium high-value appliances, customized modular furniture, and delicate electronics, ensuring proportional and accurate compensation in case of localized transit damage."
          }
        }
      ]
    }
    </script>
    <?php endif; ?>

    <?php if ($page_identifier === 'gallery'): ?>
    <!-- BreadcrumbList Schema for Gallery -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Work Proof & Gallery",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/gallery"
        }
      ]
    }
    </script>

    <!-- CollectionPage & ImageGallery Schema for Work Proof -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "CollectionPage",
      "name": "Shree Ashirwad Packers and Movers - Operational Proof & Work Gallery",
      "description": "Authentic photographic and operational proof of household relocations, office shifting, vehicle transport, 5-layer packing, and warehouse storage by Shree Ashirwad Packers in Ranchi and Jharkhand.",
      "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/gallery",
      "provider": {
        "@type": "MovingCompany",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
        "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
        "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png"
      },
      "mainEntity": {
        "@type": "ImageGallery",
        "name": "Real Relocation Operations Photo Gallery",
        "description": "Verified on-ground photographs of moving trucks, professional packing crews, heavy furniture handling, and certified storage facilities in Ranchi.",
        "image": [
          {
            "@type": "ImageObject",
            "contentUrl": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/images/shree-ashirwad-verified-moving-truck-jharkhand.jpg",
            "name": "Shree Ashirwad Verified Moving Truck in Jharkhand",
            "caption": "Dedicated closed container moving truck operated by Shree Ashirwad Packers across Jharkhand highways."
          },
          {
            "@type": "ImageObject",
            "contentUrl": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/images/professional-loading-crew-ranchi.jpg",
            "name": "Professional Loading Crew in Ranchi",
            "caption": "Trained in-house loading and rigging crew handling heavy household goods in Ranchi."
          },
          {
            "@type": "ImageObject",
            "contentUrl": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/images/wooden-furniture-wrapping-bokaro.jpg",
            "name": "Wooden Furniture Protective Wrapping in Bokaro",
            "caption": "5-layer protective bubble and corrugated packaging for solid teakwood furniture."
          },
          {
            "@type": "ImageObject",
            "contentUrl": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg",
            "name": "Commercial Goods Storage Warehouse in Ranchi",
            "caption": "Palletized, 24/7 CCTV monitored secure household and commercial storage facility in Ranchi."
          },
          {
            "@type": "ImageObject",
            "contentUrl": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/images/car-transport-carrier-loading-jharkhand.jpg",
            "name": "Car Transport Carrier Loading in Jharkhand",
            "caption": "Hydraulic enclosed car carrier loading passenger vehicles with safety wheel chocks."
          }
        ]
      }
    }
    </script>

    <!-- FAQPage Schema for Gallery & Verification -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "Are the photos in this gallery real on-ground operations of Shree Ashirwad Packers?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100%. Every photo displayed in this gallery depicts genuine relocation projects executed by our full-time, permanent moving crew, our dedicated closed container fleet, and our certified warehouse facility in Ranchi and across Jharkhand. We never use fake stock photos."
          }
        },
        {
          "@type": "Question",
          "name": "How can I verify Shree Ashirwad Packers IBA approval and ISO 9001:2015 certification?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our IBA approval code and ISO 9001:2015 certificate numbers are printed on our official consignment notes (LR Bilty) and GST invoices. Clients can verify our credentials at our Ranchi headquarters at Morabadi or request digital verification copies via WhatsApp at 8409531615."
          }
        },
        {
          "@type": "Question",
          "name": "Can I inspect the moving truck and packing materials before the relocation date?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, absolutely. We welcome customers to visit our central fleet depot and warehouse in Ranchi or request a pre-move physical survey where our move manager presents material samples including 100 GSM bubble wrap, 5-ply cartons, and EPE foam sheets."
          }
        },
        {
          "@type": "Question",
          "name": "Do you use permanent company employees or temporary daily-wage laborers for moving?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We employ 100% full-time, payroll-employed packing technicians and loading specialists who are police-verified, background-checked, and rigorously trained in furniture carpentry, appliance handling, and heavy rigging."
          }
        },
        {
          "@type": "Question",
          "name": "Can I visit your warehouse facility in Ranchi to inspect goods storage conditions?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Our warehousing facility in Ranchi is open for scheduled customer visits Monday through Saturday. You can inspect our elevated pallet racking, 24/7 CCTV surveillance system, fire safety equipment, and quarterly pest-control documentation."
          }
        },
        {
          "@type": "Question",
          "name": "Do your trucks have GPS live tracking that clients can monitor?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Every long-distance container truck in our fleet is equipped with satellite GPS transponders. Our central control room in Ranchi monitors highway movements 24/7, and clients receive live waypoint location updates during intercity moves."
          }
        },
        {
          "@type": "Question",
          "name": "What proof do you provide for employer transfer reimbursement claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We issue comprehensive audit-ready documentation: IBA-approved Consignment Note (LR Bilty), 100% GST Tax Invoice (SAC 996511 / 996791), serialized itemized packing manifest, weighbridge slips, and insurance cover notes accepted by all Banks, Defence, Railways, and PSUs."
          }
        },
        {
          "@type": "Question",
          "name": "How do you protect luxury furniture and expensive LED TVs from transit scratches?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We apply a scientific 5-layer packaging standard: virgin 100 GSM air bubble film, EPE shock foam, heavy-duty 7-ply corrugated sheets, edge corner guards, and custom wooden crating for large LED/OLED televisions and glass tabletops."
          }
        }
      ]
    }
    </script>
    <?php endif; ?>

    <?php if ($page_identifier === 'contact'): ?>
    <!-- BreadcrumbList Schema for Contact Us -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        {
          "@type": "ListItem",
          "position": 1,
          "name": "Home",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/"
        },
        {
          "@type": "ListItem",
          "position": 2,
          "name": "Contact Us",
          "item": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/contact"
        }
      ]
    }
    </script>

    <!-- ContactPage Schema -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "ContactPage",
      "name": "Contact Shree Ashirwad Packers and Movers Ranchi",
      "description": "Official contact information, office address, phone numbers, and branch locations for Shree Ashirwad Packers and Movers in Ranchi and Jharkhand.",
      "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/contact",
      "mainEntity": {
        "@type": "MovingCompany",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "telephone": "<?php echo PRIMARY_PHONE_RAW; ?>",
        "email": "<?php echo OFFICIAL_EMAIL; ?>",
        "url": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/",
        "image": "<?php echo PRODUCTION_CANONICAL_DOMAIN; ?>/assets/images/logo.png",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "<?php echo RANCHI_HQ_STREET; ?>",
          "addressLocality": "<?php echo RANCHI_HQ_CITY; ?>",
          "addressRegion": "<?php echo RANCHI_HQ_STATE; ?>",
          "postalCode": "<?php echo RANCHI_HQ_PINCODE; ?>",
          "addressCountry": "IN"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": <?php echo RANCHI_GEO_LAT; ?>,
          "longitude": <?php echo RANCHI_GEO_LNG; ?>
        },
        "openingHoursSpecification": {
          "@type": "OpeningHoursSpecification",
          "dayOfWeek": [
            "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"
          ],
          "opens": "00:00",
          "closes": "23:59"
        }
      }
    }
    </script>

    <!-- FAQPage Schema for Contact & Booking -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "What is the primary customer helpline and contact number for Shree Ashirwad Packers in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our primary 24/7 helpline numbers are 8409531615 and 9835565233. You can call or message us on WhatsApp at any time for instant moving quotes, pre-move home surveys, and active consignment tracking."
          }
        },
        {
          "@type": "Question",
          "name": "Where is the main headquarters office of Shree Ashirwad Packers located in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Our headquarters office is located at Morabadi / Bariatu Road, Near Oxygen Park, Ranchi, Jharkhand - 834008. We welcome clients to visit our office Monday through Sunday between 8:00 AM and 9:00 PM."
          }
        },
        {
          "@type": "Question",
          "name": "How quickly can I get a written moving estimate from your team?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "You can get an instant preliminary estimate in under 5 minutes by calling 8409531615 or sharing your household inventory list and video on WhatsApp. For comprehensive moves, our surveyor conducts a free in-home physical survey within 2 to 4 hours."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide free in-home pre-move physical surveys across Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100% free of charge and with zero obligation. Our experienced move manager visits your home in Morabadi, Kanke Road, Harmu, Doranda, Bariatu, Ashok Nagar, or any Ranchi locality to assess volume, furniture dismantling needs, and truck parking access."
          }
        },
        {
          "@type": "Question",
          "name": "How far in advance should I book Shree Ashirwad Packers for local or intercity shifting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For local moves within Ranchi, we recommend booking 24 to 48 hours in advance. For long-distance intercity domestic moves, 3 to 5 days advance booking ensures optimal closed container allocation. Emergency same-day bookings are also accommodated."
          }
        },
        {
          "@type": "Question",
          "name": "What payment methods are accepted for moving services?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We accept all official payment modes: UPI (Google Pay, PhonePe, Paytm), Net Banking (NEFT/RTGS/IMPS), Credit Cards, Debit Cards, Cheque, and Cash, with complete GST tax invoices issued under SAC Code 996511 / 996791."
          }
        },
        {
          "@type": "Question",
          "name": "Can I reschedule or cancel my moving date if my plans change?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. We offer flexible rescheduling with zero cancellation or penalty fees if notified at least 24 hours prior to the scheduled packing time. Simply call our customer support desk at 8409531615 to update your preferred moving date."
          }
        },
        {
          "@type": "Question",
          "name": "Do you have branch offices in other districts of Jharkhand besides Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes. Shree Ashirwad Packers maintains active regional branch hubs in Bokaro Steel City (Chas), Dhanbad (Bank More), Jamshedpur (Bistupur), Hazaribagh, Deoghar, Ramgarh, and Giridih providing direct on-ground moving and storage support."
          }
        }
      ]
    }
    </script>
    <?php endif; ?>

    <?php if ($page_identifier === 'home'): ?>
    <!-- FAQPage JSON-LD Structured Data Schema for Google Search Rich Snippets -->
    <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "FAQPage",
      "mainEntity": [
        {
          "@type": "Question",
          "name": "How much do packers and movers in Ranchi charge for local household shifting?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Local shifting charges in Ranchi generally start from ₹3,500 to ₹6,500 for a 1 BHK, ₹5,500 to ₹10,500 for a 2 BHK, and ₹9,000 to ₹16,000 for a 3 BHK family home. Pricing depends on volume, floor levels, elevator availability, and custom crating needs."
          }
        },
        {
          "@type": "Question",
          "name": "Are your moving bills and GST invoices officially IBA approved for Bank and Central Govt employee claims?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, 100%. Shree Ashirwad Packers provides fully compliant IBA-approved moving bills and GST tax invoices (SAC code 996511 / 996791) accepted by all PSUs, Indian Banks (SBI, PNB, BOB, Canara), Railways, and Central Government departments."
          }
        },
        {
          "@type": "Question",
          "name": "How early should I book Shree Ashirwad Packers and Movers in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "For local moves within Ranchi, booking 24 to 48 hours in advance is recommended. For intercity domestic moves, 3 to 5 days prior booking is advised. Emergency same-day bookings are also accommodated."
          }
        },
        {
          "@type": "Question",
          "name": "What items are covered under comprehensive transit insurance?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Comprehensive transit insurance covers physical loss or damage caused by highway accidents, vehicle collision, overturning, fire, explosion, or natural calamities under Full Value Protection."
          }
        },
        {
          "@type": "Question",
          "name": "What packing materials do you use for delicate glassware, electronics, and LED TVs?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "We use an engineered 4-layer packing process: virgin 100 GSM air bubble wrap, heavy-duty 5-ply and 7-ply corrugated cartons, EPE foam edge guards, and industrial stretch film, with wooden crates for large LED screens."
          }
        },
        {
          "@type": "Question",
          "name": "Do you offer car and bike transportation services from Ranchi to other states?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we operate specialized vehicle transportation using hydraulic closed car carriers and wooden-crate bike transport from Ranchi and Bokaro to all Indian states."
          }
        },
        {
          "@type": "Question",
          "name": "How long does intercity moving take from Ranchi to metro cities like Delhi, Bangalore, or Kolkata?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Transit times: Kolkata/Patna: 24 to 48 hours; Delhi NCR/Lucknow: 3 to 5 days; Bangalore/Hyderabad/Mumbai/Pune: 5 to 7 days in dedicated closed containers."
          }
        },
        {
          "@type": "Question",
          "name": "Do you provide warehousing and temporary storage services in Ranchi?",
          "acceptedAnswer": {
            "@type": "Answer",
            "text": "Yes, we offer clean, 24/7 CCTV-monitored, elevated, pest-controlled warehousing facilities in Ranchi and Bokaro for short-term and long-term storage."
          }
        }
      ]
    }
    </script>
    <?php endif; ?>
    <?php
}
