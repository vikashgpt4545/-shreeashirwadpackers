<?php
/**
 * Packers and Movers in Bagodar - Shree Ashirwad Packers and Movers
 * Pure Core PHP Implementation
 * 
 * Target URL: https://www.shreeashirwadpackers.com/packers-and-movers-in-bagodar
 * Title: Packers and Movers in Bagodar - 8409531615
 * Region: Bagodar (GT Road NH-19, Harihar Dham), Giridih District, Jharkhand
 * Coordinates: 24.0833° N, 85.9667° E
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$page_title = "Packers and Movers in Bagodar - 8409531615";
$page_description = "Hire top packers and movers in Bagodar by Shree Ashirwad Packers. IBA approved bills, 5-layer packing, home shifting, GT Road corridor transit & car carrier. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/packers-and-movers-in-bagodar";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $page_description; ?>">
  <meta name="keywords" content="packers and movers in bagodar, packers and movers bagodar, best packers and movers in bagodar, packers and movers bagodar giridih, household shifting bagodar, packers and movers near harihar dham, car transport bagodar, bike parcel bagodar, iba approved packers bagodar">
  <meta name="robots" content="index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1">
  <meta name="author" content="<?php echo htmlspecialchars(BUSINESS_NAME, ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Open Graph / Facebook / WhatsApp Preview -->
  <meta property="og:locale" content="en_IN">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:description" content="<?php echo $page_description; ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:site_name" content="<?php echo htmlspecialchars(BUSINESS_NAME, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="1600">
  <meta property="og:image:alt" content="Packers and Movers in Bagodar Shree Ashirwad Packers">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo $page_title; ?>">
  <meta name="twitter:description" content="<?php echo $page_description; ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg">

  <!-- CSS Stylesheets -->
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Schema.org JSON-LD Structured Data -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "MovingCompany",
        "@id": "<?php echo $canonical_url; ?>#movingcompany",
        "name": "Shree Ashirwad Packers and Movers Bagodar",
        "url": "<?php echo $canonical_url; ?>",
        "logo": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "image": "<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg",
        "description": "Leading packers and movers in Bagodar, Giridih situated along the Grand Trunk Road (NH-19) providing 5-layer protective packing, household shifting, GT Road express transit, car carrier, and IBA-approved documentation.",
        "telephone": "+91-8409531615",
        "priceRange": "₹3,000 - ₹50,000",
        "keywords": "packers and movers in bagodar, packers and movers bagodar, best packers and movers in bagodar, packers and movers bagodar giridih, household shifting bagodar, packers and movers near harihar dham, car transport bagodar, bike parcel bagodar, iba approved packers bagodar",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "Grand Trunk Road (NH-19), Near Harihar Dham & Bagodar Chowk",
          "addressLocality": "Bagodar, Giridih",
          "addressRegion": "Jharkhand",
          "postalCode": "825322",
          "addressCountry": "IN"
        },
        "geo": {
          "@type": "GeoCoordinates",
          "latitude": 24.0833,
          "longitude": 85.9667
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
            "opens": "07:00",
            "closes": "22:00"
          }
        ],
        "areaServed": [
          { "@type": "City", "name": "Bagodar" },
          { "@type": "AdministrativeArea", "name": "Harihar Dham" },
          { "@type": "AdministrativeArea", "name": "Atka" },
          { "@type": "AdministrativeArea", "name": "Donlo" },
          { "@type": "AdministrativeArea", "name": "Hesla" },
          { "@type": "AdministrativeArea", "name": "Kushmarja" },
          { "@type": "AdministrativeArea", "name": "Bandkharo" },
          { "@type": "AdministrativeArea", "name": "Saria Road Junction" }
        ],
        "hasOfferCatalog": {
          "@type": "OfferCatalog",
          "name": "Moving & Relocation Services Bagodar",
          "itemListElement": [
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Household Goods Shifting in Bagodar"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Grand Trunk Road (NH-19) Express Intercity Relocation"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Bagodar to Ranchi, Dhanbad & Bokaro Shifting"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Car Carrier & Bike Parcel Service Bagodar"
              }
            },
            {
              "@type": "Offer",
              "itemOffered": {
                "@type": "Service",
                "name": "Government & Police Officer Transfer Relocations"
              }
            }
          ]
        }
      },
      {
        "@type": "BreadcrumbList",
        "@id": "<?php echo $canonical_url; ?>#breadcrumb",
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
            "name": "Bagodar",
            "item": "<?php echo $canonical_url; ?>"
          }
        ]
      },
      {
        "@type": "FAQPage",
        "@id": "<?php echo $canonical_url; ?>#faq",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What are the packers and movers charges in Bagodar, Giridih?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "For local moves within Bagodar and surrounding localities, rates range from ₹3,000 to ₹5,500 for a 1 BHK, ₹5,500 to ₹9,200 for a 2 BHK, and ₹9,000 to ₹14,500 for a 3 BHK. For intercity moves to Giridih town, Dhanbad, Bokaro, Ranchi, or Kolkata along NH-19, pricing depends on cargo volume, distance, floor levels, and packing materials."
            }
          },
          {
            "@type": "Question",
            "name": "How does your location on the Grand Trunk Road (NH-19) benefit relocations from Bagodar?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Being located directly on the 6-lane Grand Trunk Road (NH-19) enables swift, non-stop freight transit. Our container trucks can reach Kolkata, Varanasi, Delhi, Dhanbad, and Asansol directly without navigating congested city interiors or detours, ensuring faster transit times and lower freight costs."
            }
          },
          {
            "@type": "Question",
            "name": "Are your moving bills valid for government transfer claims in Bagodar?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, 100%. Shree Ashirwad Packers and Movers provides official IBA-approved bills, GST invoices, consignment notes (bilty), and transit insurance policies that meet all reimbursement criteria for state and central government staff, teachers, police personnel, and bank officers."
            }
          },
          {
            "@type": "Question",
            "name": "Do you provide moving services near Harihar Dham and rural areas of Bagodar?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. We serve all areas of Bagodar block including Harihar Dham temple area, Atka, Donlo, Hesla, Kushmarja, Bandkharo, Jamunia bridge, and rural belts connecting to Saria and Dumri. Our trucks reach your exact doorstep."
            }
          },
          {
            "@type": "Question",
            "name": "How do you protect delicate electronics, glass, and furniture during transit?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We use an advanced 5-layer protective packaging system: virgin air bubble wrap, heavy-gauge corrugated edge protectors, shock-absorbent thermocol padding, moisture-resistant stretch film, and 7-ply export-grade master cartons. Items are locked inside closed container vehicles with cargo straps."
            }
          },
          {
            "@type": "Question",
            "name": "Can you shift two-wheelers and cars from Bagodar to other cities across India?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. We provide specialized bike parcel and car transportation services from Bagodar. Two-wheelers receive multi-layer bubble wrapping and foam shielding, while four-wheelers are moved in enclosed carriers with GPS tracking and comprehensive transit insurance."
            }
          },
          {
            "@type": "Question",
            "name": "How much advance notice is required to book a move in Bagodar?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We recommend booking 2 to 4 days prior to your preferred moving date to ensure optimal scheduling and pre-move survey. However, due to our frequent fleet movements along NH-19, same-day emergency shifting is also available."
            }
          },
          {
            "@type": "Question",
            "name": "Do you provide unpacking and furniture reassembly at the destination?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes. Our complete relocation service includes careful unloading, unpacking, furniture reassembly (beds, wardrobes, dining tables), room-wise placement, and clean disposal of packing debris so you can settle in immediately."
            }
          }
        ]
      }
    ]
  }
  </script>
</head>
<body style="font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif; color: #334155; background-color: #f8fafc; margin: 0; padding: 0; line-height: 1.6;">

<?php include_once __DIR__ . '/includes/header.php'; ?>

<!-- HERO SECTION -->
<section style="background: linear-gradient(135deg, #0f172a 0%, #1e3a8a 60%, #172554 100%); color: #ffffff; padding: 50px 0 60px; position: relative; overflow: hidden;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb" style="margin-bottom: 24px;">
      <ol style="display: flex; flex-wrap: wrap; list-style: none; padding: 0; margin: 0; font-size: 14px; gap: 8px;">
        <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #94a3b8; text-decoration: none;">Home</a></li>
        <li style="color: #94a3b8;">/</li>
        <li><a href="<?php echo SITE_BASE_URL; ?>/#service-areas" style="color: #94a3b8; text-decoration: none;">Jharkhand</a></li>
        <li style="color: #94a3b8;">/</li>
        <li style="color: #ffffff; font-weight: 600;" aria-current="page">Packers and Movers in Bagodar</li>
      </ol>
    </nav>

    <div style="max-width: 880px;">
      <div style="display: inline-flex; align-items: center; background: rgba(243, 156, 18, 0.2); border: 1px solid rgba(243, 156, 18, 0.4); padding: 6px 14px; border-radius: 30px; font-size: 13px; font-weight: 600; color: #f39c12; margin-bottom: 18px; letter-spacing: 0.5px; text-transform: uppercase;">
        ★ #1 Relocation Specialists on Grand Trunk Road (NH-19) Corridor
      </div>
      <h1 style="font-size: clamp(28px, 4.2vw, 44px); font-weight: 800; line-height: 1.25; margin-bottom: 18px; color: #ffffff;">
        Packers and Movers in Bagodar <span style="background: linear-gradient(90deg, #f39c12, #f1c40f); background-clip: text; -webkit-background-clip: text; -webkit-text-fill-color: transparent;">- 8409531615</span>
      </h1>
      <p style="font-size: 17px; line-height: 1.7; color: #e2e8f0; margin-bottom: 28px; max-width: 820px;">
        Welcome to Shree Ashirwad Packers and Movers in Bagodar — your premier relocation expert positioned strategically along India's historic economic lifeline, the Grand Trunk Road (National Highway 19). Home to the iconic 65-foot Shiv Lingam at Harihar Dham and serving as a crucial highway junction connecting Giridih, Hazaribagh, Dhanbad, and Bokaro, Baghmara represents a vital transit hub for families, government officials, traders, and interstate businesses. We provide 5-layer protective packing, IBA-approved documentation, zero-damage handling, and all-weather closed container transit.
      </p>

      <!-- CTAs -->
      <div style="display: flex; flex-wrap: wrap; gap: 14px; align-items: center;">
        <a href="tel:+918409531615" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 13px 26px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; box-shadow: 0 4px 14px rgba(243, 156, 18, 0.4); transition: transform 0.2s ease;">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 011.02-.24 11.72 11.72 0 003.68.59 1 1 0 011 1V20a1 1 0 01-1 1A17 17 0 013 4a1 1 0 011-1h3.5a1 1 0 011 1 11.72 11.72 0 00.59 3.68 1 1 0 01-.24 1.02l-2.23 2.09z"/></svg>
          Call: 8409531615
        </a>
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Bagodar" target="_blank" rel="noopener" class="btn" style="background: #25d366; color: #ffffff; font-weight: 700; padding: 13px 26px; border-radius: 8px; text-decoration: none; display: inline-flex; align-items: center; gap: 9px; box-shadow: 0 4px 14px rgba(37, 211, 102, 0.35); transition: transform 0.2s ease;">
          <svg width="18" height="18" fill="currentColor" viewBox="0 0 24 24"><path d="M12.04 2c-5.46 0-9.91 4.45-9.91 9.91 0 1.75.46 3.45 1.32 4.95L2.05 22l5.25-1.38c1.45.79 3.08 1.21 4.74 1.21 5.46 0 9.91-4.45 9.91-9.91 0-5.46-4.45-9.92-9.91-9.92zM12.04 20.08c-1.48 0-2.93-.4-4.2-1.15l-.3-.18-3.12.82.83-3.04-.2-.31c-.82-1.31-1.26-2.83-1.26-4.39 0-4.49 3.65-8.14 8.14-8.14 4.49 0 8.14 3.65 8.14 8.14 0 4.49-3.65 8.14-8.14 8.14zm4.46-6.1c-.24-.12-1.45-.72-1.67-.8-.23-.09-.39-.12-.56.12-.17.24-.65.8-.8 1.04-.15.24-.3.27-.55.15-.24-.12-1.03-.38-1.96-1.21-.73-.65-1.22-1.45-1.36-1.7-.14-.24-.01-.38.11-.5.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.17.04-.31-.02-.43s-.56-1.35-.77-1.85c-.2-.49-.41-.42-.56-.43h-.48c-.16 0-.43.06-.66.31-.23.24-.88.86-.88 2.1 0 1.23.9 2.42 1.02 2.59.13.17 1.77 2.7 4.29 3.79.6.26 1.07.41 1.44.53.6.19 1.15.16 1.58.1.48-.07 1.45-.59 1.66-1.16.2-.57.2-1.06.14-1.16-.06-.1-.23-.16-.48-.28z"/></svg>
          WhatsApp Instant Quote
        </a>
      </div>
    </div>
  </div>
</section>

<!-- KEY TRUST SIGNALS STRIP -->
<section style="background: #ffffff; border-bottom: 1px solid #e2e8f0; padding: 22px 0;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 20px; text-align: center;">
      <div style="padding: 10px; border-right: 1px solid #f1f5f9;">
        <div style="font-size: 24px; font-weight: 800; color: #1e3a8a; margin-bottom: 4px;">12+ Years</div>
        <div style="font-size: 13px; color: #64748b; font-weight: 600; text-transform: uppercase;">GT Road Highway Expertise</div>
      </div>
      <div style="padding: 10px; border-right: 1px solid #f1f5f9;">
        <div style="font-size: 24px; font-weight: 800; color: #f39c12; margin-bottom: 4px;">IBA Approved</div>
        <div style="font-size: 13px; color: #64748b; font-weight: 600; text-transform: uppercase;">100% Claim Compliant</div>
      </div>
      <div style="padding: 10px; border-right: 1px solid #f1f5f9;">
        <div style="font-size: 24px; font-weight: 800; color: #1e3a8a; margin-bottom: 4px;">Zero Damage</div>
        <div style="font-size: 13px; color: #64748b; font-weight: 600; text-transform: uppercase;">5-Layer Protective Wrap</div>
      </div>
      <div style="padding: 10px;">
        <div style="font-size: 24px; font-weight: 800; color: #10b981; margin-bottom: 4px;">24x7 Support</div>
        <div style="font-size: 13px; color: #64748b; font-weight: 600; text-transform: uppercase;">Personal Move Manager</div>
      </div>
    </div>
  </div>
</section>

<!-- QUICK QUOTE FORM STRIP -->
<section style="background: #f1f5f9; padding: 34px 0; border-bottom: 1px solid #e2e8f0;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <div style="background: #ffffff; border-radius: 12px; padding: 26px; box-shadow: 0 4px 16px rgba(0,0,0,0.06); border: 1px solid #e2e8f0;">
      <div style="text-align: center; margin-bottom: 20px;">
        <h2 style="font-size: 22px; font-weight: 800; color: #0f172a; margin: 0 0 6px;">Request a Free Moving Quote in Bagodar</h2>
        <p style="font-size: 14px; color: #64748b; margin: 0;">Submit your relocation details for an accurate, binding price quotation within 15 minutes.</p>
      </div>
      <form action="<?php echo SITE_BASE_URL; ?>/submit-quote.php" method="POST" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 14px; align-items: end;">
        <div>
          <label style="display: block; font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 6px;">Your Name</label>
          <input type="text" name="name" required placeholder="Full Name" style="width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; box-sizing: border-box;">
        </div>
        <div>
          <label style="display: block; font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 6px;">Contact Phone</label>
          <input type="tel" name="phone" required placeholder="10-digit mobile" style="width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; box-sizing: border-box;">
        </div>
        <div>
          <label style="display: block; font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 6px;">Pickup Address (Bagodar)</label>
          <input type="text" name="pickup" required placeholder="E.g., Harihar Dham, Bagodar Chowk, Atka" style="width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; box-sizing: border-box;">
        </div>
        <div>
          <label style="display: block; font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 6px;">Destination City</label>
          <input type="text" name="destination" required placeholder="E.g., Giridih, Ranchi, Kolkata, Delhi" style="width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; box-sizing: border-box;">
        </div>
        <div>
          <label style="display: block; font-size: 13px; font-weight: 600; color: #334155; margin-bottom: 6px;">Move Type</label>
          <select name="move_type" style="width: 100%; padding: 10px 12px; border: 1px solid #cbd5e1; border-radius: 6px; font-size: 14px; box-sizing: border-box;">
            <option value="1BHK">1 BHK Household</option>
            <option value="2BHK">2 BHK Household</option>
            <option value="3BHK">3 BHK Household</option>
            <option value="4BHK">4+ BHK / Bungalow</option>
            <option value="Vehicle">Car / Bike Transport</option>
            <option value="Office">Commercial / Office Shift</option>
          </select>
        </div>
        <div>
          <button type="submit" style="width: 100%; background: #1e3a8a; color: #ffffff; font-weight: 700; padding: 11px 16px; border: none; border-radius: 6px; font-size: 14px; cursor: pointer; transition: background 0.2s ease;">
            Get Free Quote
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

<!-- SECTION 1: DETAILED INTRODUCTION & LOCAL EXPERTISE -->
<section style="padding: 60px 0; background: #ffffff;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <div style="max-width: 900px; margin: 0 auto; text-align: center; margin-bottom: 40px;">
      <div style="color: #f39c12; font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
        Grand Trunk Road Highway Gateway
      </div>
      <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0f172a; line-height: 1.3;">
        Leading Packers and Movers in Bagodar, Giridih
      </h2>
      <p style="font-size: 16px; line-height: 1.75; color: #475569; margin-top: 14px;">
        Bagodar, situated at the crucial junction of the 6-lane Grand Trunk Road (National Highway 19) and State Highway 13 in Giridih district, is one of Jharkhand's most strategically positioned transit and commercial towns. Renowned across the country for <strong>Harihar Dham</strong>, which enshrines the world's tallest Shiva Lingam at 65 feet, Bagodar combines rich spiritual heritage with vibrant highway logistics. Serving as the primary gateway linking Giridih town, Hazaribagh, Dhanbad, and Bokaro to the major industrial freight corridors between Kolkata and Delhi, Bagodar experiences high relocation demand from government personnel, business families, and interstate professionals.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center; margin-top: 30px;">
      <div>
        <h3 style="font-size: 22px; font-weight: 700; color: #1e3a8a; margin-bottom: 14px;">
          Unmatched Highway Connectivity & Precision Packaging
        </h3>
        <p style="font-size: 15px; line-height: 1.8; color: #475569; margin-bottom: 14px;">
          At <strong>Shree Ashirwad Packers and Movers</strong>, we bring more than a decade of proven relocation mastery to Bagodar and the GT Road corridor. Because Bagodar sits directly on NH-19, our fleet of all-weather closed container trucks provides swift, non-stop freight transit to major metropolitan hubs including Kolkata, Asansol, Durgapur, Varanasi, Patna, and Delhi without experiencing congested detour delays.
        </p>
        <p style="font-size: 15px; line-height: 1.8; color: #475569; margin-bottom: 14px;">
          Our moving services cater extensively to administrative officers at the Bagodar Block Development Office, local judicial staff, police officers, healthcare professionals, bank managers (SBI, BOI, Gramin Bank), and retail business families across Bagodar Bazar, Atka, and Harihar Dham. Furthermore, because many families in Bagodar have members working in metropolitan centers or overseas, we specialize in high-value household shipments, electronic appliances moving, and safe vehicle carriers.
        </p>
        <p style="font-size: 15px; line-height: 1.8; color: #475569; margin-bottom: 14px;">
          Every relocation is backed by our engineered 5-layer protective packing system, ensuring that wooden furniture, glass dining tables, LED televisions, and delicate religious items travel in pristine condition across both highway expressways and rural arterial roads.
        </p>
        <ul style="padding-left: 20px; color: #334155; font-size: 14.5px; line-height: 1.8; margin-bottom: 20px;">
          <li><strong>Direct GT Road Express Logistics:</strong> High-speed container transit to Kolkata, Dhanbad, Asansol, Varanasi, and Delhi.</li>
          <li><strong>Inter-District Connectivity:</strong> Fast 1-hour connection to Giridih town, Hazaribagh, Bokaro, and Dhanbad.</li>
          <li><strong>100% IBA-Approved Documentation:</strong> Full GST invoice, consignment bilty, and insurance compliance for official claims.</li>
          <li><strong>Trained In-House Moving Crew:</strong> Background-verified personnel trained in carpentry disassembly and heavy item handling.</li>
          <li><strong>Dust & Moisture-Proof Packaging:</strong> Multi-layer stretch film and bubble wrap safeguarding goods against highway grime and rain.</li>
        </ul>
      </div>

      <div style="text-align: center;">
        <div style="aspect-ratio: 3/4; max-width: 400px; margin: 0 auto; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 28px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
          <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" 
               alt="Household Shifting Services in Bagodar Shree Ashirwad Packers" 
               style="width: 100%; height: 100%; object-fit: cover; display: block;" 
               loading="lazy" 
               width="400" 
               height="533">
        </div>
        <p style="font-size: 13px; color: #64748b; margin-top: 10px; font-style: italic;">
          Professional 5-layer packing and household moving in Bagodar, Giridih
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 2: CORE SERVICES -->
<section style="padding: 60px 0; background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <div style="text-align: center; max-width: 780px; margin: 0 auto 40px;">
      <div style="color: #f39c12; font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
        Comprehensive Moving Spectrum
      </div>
      <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0f172a; line-height: 1.3;">
        Our Relocation Services in Bagodar
      </h2>
      <p style="font-size: 16px; color: #64748b; line-height: 1.7; margin-top: 12px;">
        Tailored moving solutions designed to meet the demands of families, government staff, commercial enterprises, and highway transport across Bagodar.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); gap: 24px;">
      <!-- Service 1 -->
      <div style="background: #ffffff; padding: 28px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.04); border: 1px solid #e2e8f0; transition: transform 0.2s ease;">
        <div style="width: 48px; height: 48px; background: #eff6ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #1e3a8a; font-size: 20px; margin-bottom: 18px;">
          <i class="fa-solid fa-house-chimney"></i>
        </div>
        <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Household Shifting</h3>
        <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
          Full-service residential moving encompassing modular furniture dismantling, 5-layer bubble and corrugated packaging, fragile chinaware boxing, safe transit, and complete reassembly at your new address.
        </p>
      </div>

      <!-- Service 2 -->
      <div style="background: #ffffff; padding: 28px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.04); border: 1px solid #e2e8f0; transition: transform 0.2s ease;">
        <div style="width: 48px; height: 48px; background: #fef3c7; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #d97706; font-size: 20px; margin-bottom: 18px;">
          <i class="fa-solid fa-route"></i>
        </div>
        <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">GT Road (NH-19) Express Shifting</h3>
        <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
          High-speed, long-distance container transit connecting Bagodar to Kolkata, Asansol, Durgapur, Varanasi, Kanpur, and Delhi with dedicated closed container vehicles and GPS monitoring.
        </p>
      </div>

      <!-- Service 3 -->
      <div style="background: #ffffff; padding: 28px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.04); border: 1px solid #e2e8f0; transition: transform 0.2s ease;">
        <div style="width: 48px; height: 48px; background: #ecfdf5; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #059669; font-size: 20px; margin-bottom: 18px;">
          <i class="fa-solid fa-car-side"></i>
        </div>
        <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Car Carrier & Bike Parcel</h3>
        <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
          Safe vehicle delivery across India. Multi-layer foam wrapping and handlebar protection for bikes, and enclosed containerized car carriers with full insurance coverage.
        </p>
      </div>

      <!-- Service 4 -->
      <div style="background: #ffffff; padding: 28px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.04); border: 1px solid #e2e8f0; transition: transform 0.2s ease;">
        <div style="width: 48px; height: 48px; background: #f3e8ff; border-radius: 10px; display: flex; align-items: center; justify-content: center; color: #7c3aed; font-size: 20px; margin-bottom: 18px;">
          <i class="fa-solid fa-warehouse"></i>
        </div>
        <h3 style="font-size: 19px; font-weight: 700; color: #0f172a; margin-bottom: 12px;">Warehousing & Safe Storage</h3>
        <p style="font-size: 14.5px; line-height: 1.7; color: #475569; margin: 0;">
          Short-term and long-term secure warehousing solutions. Our clean, pest-controlled, 24x7 CCTV-monitored facilities safeguard your household goods or business inventories during home construction or transitions.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 3: STEP-BY-STEP MOVING METHODOLOGY -->
<section style="padding: 60px 0; background: #ffffff;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
      <div style="order: 2;">
        <div style="color: #f39c12; font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
          Systematic Workflow
        </div>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0f172a; margin-bottom: 18px; line-height: 1.3;">
          Our 5-Stage Moving Protocol for Bagodar Relocations
        </h2>
        <p style="font-size: 16px; line-height: 1.75; color: #475569; margin-bottom: 20px;">
          Managing moves along major national highways and rural towns demands discipline and rigorous safety standards. Every move in Bagodar follows our tested 5-stage protocol:
        </p>

        <div style="display: flex; flex-direction: column; gap: 16px;">
          <div style="display: flex; gap: 14px; align-items: flex-start;">
            <div style="min-width: 32px; height: 32px; background: #1e3a8a; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 14px; margin-top: 2px;">1</div>
            <div>
              <h4 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0 0 4px;">Free Pre-Move Inventory Survey</h4>
              <p style="font-size: 14px; color: #475569; margin: 0; line-height: 1.6;">Our moving consultant visits your residence in Bagodar or conducts a digital video assessment to calculate cargo volume, inspect access, and plan vehicle capacity.</p>
            </div>
          </div>

          <div style="display: flex; gap: 14px; align-items: flex-start;">
            <div style="min-width: 32px; height: 32px; background: #1e3a8a; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 14px; margin-top: 2px;">2</div>
            <div>
              <h4 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0 0 4px;">5-Layer Protective Packaging</h4>
              <p style="font-size: 14px; color: #475569; margin: 0; line-height: 1.6;">Our crew applies virgin bubble wrap, 7-ply corrugated cartons, high-density foam edge protectors, and moisture-proof stretch film to prevent scratches and impact damage.</p>
            </div>
          </div>

          <div style="display: flex; gap: 14px; align-items: flex-start;">
            <div style="min-width: 32px; height: 32px; background: #1e3a8a; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 14px; margin-top: 2px;">3</div>
            <div>
              <h4 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0 0 4px;">Scientific Loading & Cargo Anchoring</h4>
              <p style="font-size: 14px; color: #475569; margin: 0; line-height: 1.6;">Trained loaders use hydraulic tailgates, dollies, and safety straps. Heavy furniture creates the base layer while fragile cartons are cushioned securely on upper tiers.</p>
            </div>
          </div>

          <div style="display: flex; gap: 14px; align-items: flex-start;">
            <div style="min-width: 32px; height: 32px; background: #1e3a8a; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 14px; margin-top: 2px;">4</div>
            <div>
              <h4 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0 0 4px;">GPS-Tracked Highway Container Transit</h4>
              <p style="font-size: 14px; color: #475569; margin: 0; line-height: 1.6;">Your shipment travels inside an all-weather closed container truck driven by professional drivers experienced with NH-19 and national highway corridors.</p>
            </div>
          </div>

          <div style="display: flex; gap: 14px; align-items: flex-start;">
            <div style="min-width: 32px; height: 32px; background: #1e3a8a; color: #ffffff; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: 700; font-size: 14px; margin-top: 2px;">5</div>
            <div>
              <h4 style="font-size: 16px; font-weight: 700; color: #0f172a; margin: 0 0 4px;">Unloading, Reassembly & Room Placement</h4>
              <p style="font-size: 14px; color: #475569; margin: 0; line-height: 1.6;">At your new address, our staff unloads goods, reassembles beds and tables, places heavy items in designated rooms, and disposes of all packing waste cleanly.</p>
            </div>
          </div>
        </div>
      </div>

      <div style="order: 1; text-align: center;">
        <div style="aspect-ratio: 3/4; max-width: 400px; margin: 0 auto; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 28px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
          <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" 
               alt="Door to Door Delivery Truck Bagodar Shree Ashirwad Packers" 
               style="width: 100%; height: 100%; object-fit: cover; display: block;" 
               loading="lazy" 
               width="400" 
               height="533">
        </div>
        <p style="font-size: 13px; color: #64748b; margin-top: 10px; font-style: italic;">
          All-weather container trucks delivering door-to-door across Bagodar & NH-19
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 4: RATE CARD & INTERCITY TRANSIT ESTIMATES -->
<section style="padding: 60px 0; background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <div style="text-align: center; max-width: 760px; margin: 0 auto 40px;">
      <div style="color: #f39c12; font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
        100% Honest Pricing
      </div>
      <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0f172a; line-height: 1.3;">
        Packers and Movers Bagodar Cost & Rate Card
      </h2>
      <p style="font-size: 16px; color: #64748b; line-height: 1.7; margin-top: 12px;">
        Transparent, competitive pricing for local moves in Bagodar as well as regional and nationwide relocations.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px;">
      <!-- Rate Card Table -->
      <div style="background: #ffffff; border-radius: 12px; padding: 24px; box-shadow: 0 4px 14px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
        <h3 style="font-size: 18px; font-weight: 700; color: #1e3a8a; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
          <i class="fa-solid fa-calculator" style="color: #f39c12;"></i> Local Shifting Rates in Bagodar & Giridih
        </h3>
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; font-size: 14px; text-align: left;">
            <thead>
              <tr style="background: #f1f5f9; border-bottom: 2px solid #cbd5e1;">
                <th style="padding: 10px 12px; font-weight: 700; color: #334155;">Move Type</th>
                <th style="padding: 10px 12px; font-weight: 700; color: #334155;">Packing & Labour</th>
                <th style="padding: 10px 12px; font-weight: 700; color: #334155;">Total Est. Cost</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid #e2e8f0;">
                <td style="padding: 10px 12px; font-weight: 600;">1 BHK Home Shift</td>
                <td style="padding: 10px 12px; color: #64748b;">₹1,800 - ₹2,800</td>
                <td style="padding: 10px 12px; font-weight: 700; color: #16a34a;">₹3,000 - ₹5,500</td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                <td style="padding: 10px 12px; font-weight: 600;">2 BHK Home Shift</td>
                <td style="padding: 10px 12px; color: #64748b;">₹2,800 - ₹4,500</td>
                <td style="padding: 10px 12px; font-weight: 700; color: #16a34a;">₹5,500 - ₹9,200</td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0;">
                <td style="padding: 10px 12px; font-weight: 600;">3 BHK Home Shift</td>
                <td style="padding: 10px 12px; color: #64748b;">₹4,500 - ₹6,800</td>
                <td style="padding: 10px 12px; font-weight: 700; color: #16a34a;">₹9,000 - ₹14,500</td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                <td style="padding: 10px 12px; font-weight: 600;">4 BHK / Bungalow</td>
                <td style="padding: 10px 12px; color: #64748b;">₹6,500 - ₹10,200</td>
                <td style="padding: 10px 12px; font-weight: 700; color: #16a34a;">₹14,000 - ₹22,000</td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0;">
                <td style="padding: 10px 12px; font-weight: 600;">Two-Wheeler Transport</td>
                <td style="padding: 10px 12px; color: #64748b;">₹700 - ₹1,300</td>
                <td style="padding: 10px 12px; font-weight: 700; color: #16a34a;">₹1,800 - ₹3,500</td>
              </tr>
              <tr>
                <td style="padding: 10px 12px; font-weight: 600;">Commercial / Retail Shift</td>
                <td style="padding: 10px 12px; color: #64748b;">Site Survey</td>
                <td style="padding: 10px 12px; font-weight: 700; color: #16a34a;">₹7,500 - ₹24,000+</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p style="font-size: 12px; color: #64748b; margin-top: 12px; line-height: 1.5;">
          * Quotes reflect standard ground-level shifting or elevator-equipped premises. Floor levels and carrying distance may adjust estimates slightly.
        </p>
      </div>

      <!-- Transit Timeline Table -->
      <div style="background: #ffffff; border-radius: 12px; padding: 24px; box-shadow: 0 4px 14px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
        <h3 style="font-size: 18px; font-weight: 700; color: #1e3a8a; margin-bottom: 16px; display: flex; align-items: center; gap: 8px;">
          <i class="fa-solid fa-truck-fast" style="color: #f39c12;"></i> Intercity Distance & Transit Timelines
        </h3>
        <div style="overflow-x: auto;">
          <table style="width: 100%; border-collapse: collapse; font-size: 14px; text-align: left;">
            <thead>
              <tr style="background: #f1f5f9; border-bottom: 2px solid #cbd5e1;">
                <th style="padding: 10px 12px; font-weight: 700; color: #334155;">Destination</th>
                <th style="padding: 10px 12px; font-weight: 700; color: #334155;">Approx. Distance</th>
                <th style="padding: 10px 12px; font-weight: 700; color: #334155;">Delivery Timeline</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid #e2e8f0;">
                <td style="padding: 10px 12px; font-weight: 600;">Bagodar to Giridih (Town)</td>
                <td style="padding: 10px 12px; color: #64748b;">50 km</td>
                <td style="padding: 10px 12px; font-weight: 700; color: #1e3a8a;">Same Day (3-4 Hrs)</td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                <td style="padding: 10px 12px; font-weight: 600;">Bagodar to Dhanbad</td>
                <td style="padding: 10px 12px; color: #64748b;">60 km</td>
                <td style="padding: 10px 12px; font-weight: 700; color: #1e3a8a;">Same Day (3-4 Hrs)</td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0;">
                <td style="padding: 10px 12px; font-weight: 600;">Bagodar to Bokaro Steel City</td>
                <td style="padding: 10px 12px; color: #64748b;">55 km</td>
                <td style="padding: 10px 12px; font-weight: 700; color: #1e3a8a;">Same Day (3-4 Hrs)</td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                <td style="padding: 10px 12px; font-weight: 600;">Bagodar to Hazaribagh</td>
                <td style="padding: 10px 12px; color: #64748b;">65 km</td>
                <td style="padding: 10px 12px; font-weight: 700; color: #1e3a8a;">Same Day (3-4 Hrs)</td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0;">
                <td style="padding: 10px 12px; font-weight: 600;">Bagodar to Ranchi</td>
                <td style="padding: 10px 12px; color: #64748b;">135 km</td>
                <td style="padding: 10px 12px; font-weight: 700; color: #1e3a8a;">24 Hours</td>
              </tr>
              <tr style="border-bottom: 1px solid #e2e8f0; background: #fafafa;">
                <td style="padding: 10px 12px; font-weight: 600;">Bagodar to Kolkata (via NH-19)</td>
                <td style="padding: 10px 12px; color: #64748b;">330 km</td>
                <td style="padding: 10px 12px; font-weight: 700; color: #1e3a8a;">24 - 36 Hours</td>
              </tr>
              <tr>
                <td style="padding: 10px 12px; font-weight: 600;">Bagodar to Patna / Delhi</td>
                <td style="padding: 10px 12px; color: #64748b;">280 / 1,140 km</td>
                <td style="padding: 10px 12px; font-weight: 700; color: #1e3a8a;">2 - 5 Days</td>
              </tr>
            </tbody>
          </table>
        </div>
        <p style="font-size: 12px; color: #64748b; margin-top: 12px; line-height: 1.5;">
          * Dedicated containers offer direct highway transit along NH-19 without transshipment stops. Part-load consignments follow scheduled freight windows.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 5: LOCALITIES & COVERAGE IN BAGODAR -->
<section style="padding: 60px 0; background: #ffffff;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
      <div>
        <div style="color: #f39c12; font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
          Comprehensive Regional Reach
        </div>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0f172a; margin-bottom: 16px; line-height: 1.3;">
          Localities & Villages We Serve Across Bagodar Block
        </h2>
        <p style="font-size: 15.5px; line-height: 1.75; color: #475569; margin-bottom: 18px;">
          From the vibrant commercial center along the Grand Trunk Road to peaceful residential settlements around Harihar Dham and rural panchayats, Shree Ashirwad Packers and Movers maintains an active field team ready for instant deployment across Bagodar:
        </p>

        <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 14px;">
          <div style="background: #f8fafc; padding: 12px 14px; border-radius: 8px; border-left: 3px solid #1e3a8a;">
            <strong style="color: #0f172a; font-size: 14px;">Bagodar Chowk & Main Market</strong>
            <p style="font-size: 12.5px; color: #64748b; margin: 3px 0 0;">NH-19 highway junction, BDO office, police station & retail stores</p>
          </div>
          <div style="background: #f8fafc; padding: 12px 14px; border-radius: 8px; border-left: 3px solid #f39c12;">
            <strong style="color: #0f172a; font-size: 14px;">Harihar Dham Temple Area</strong>
            <p style="font-size: 12.5px; color: #64748b; margin: 3px 0 0;">World-renowned pilgrimage zone, guest houses & residential colonies</p>
          </div>
          <div style="background: #f8fafc; padding: 12px 14px; border-radius: 8px; border-left: 3px solid #1e3a8a;">
            <strong style="color: #0f172a; font-size: 14px;">Atka & GT Road East</strong>
            <p style="font-size: 12.5px; color: #64748b; margin: 3px 0 0;">Highway commercial hubs, automobile workshops & family homes</p>
          </div>
          <div style="background: #f8fafc; padding: 12px 14px; border-radius: 8px; border-left: 3px solid #f39c12;">
            <strong style="color: #0f172a; font-size: 14px;">Donlo & Hesla</strong>
            <p style="font-size: 12.5px; color: #64748b; margin: 3px 0 0;">Agricultural belts, local schools & community centers</p>
          </div>
          <div style="background: #f8fafc; padding: 12px 14px; border-radius: 8px; border-left: 3px solid #1e3a8a;">
            <strong style="color: #0f172a; font-size: 14px;">Kushmarja & Bandkharo</strong>
            <p style="font-size: 12.5px; color: #64748b; margin: 3px 0 0;">Residential villages with road connectivity towards Hazaribagh border</p>
          </div>
          <div style="background: #f8fafc; padding: 12px 14px; border-radius: 8px; border-left: 3px solid #f39c12;">
            <strong style="color: #0f172a; font-size: 14px;">Saria Road Junction</strong>
            <p style="font-size: 12.5px; color: #64748b; margin: 3px 0 0;">Connecting highway route towards Hazaribagh Road railway station</p>
          </div>
          <div style="background: #f8fafc; padding: 12px 14px; border-radius: 8px; border-left: 3px solid #1e3a8a;">
            <strong style="color: #0f172a; font-size: 14px;">Jamunia River Sector</strong>
            <p style="font-size: 12.5px; color: #64748b; margin: 3px 0 0;">Riverside villages, farms & quiet residential pockets</p>
          </div>
          <div style="background: #f8fafc; padding: 12px 14px; border-radius: 8px; border-left: 3px solid #f39c12;">
            <strong style="color: #0f172a; font-size: 14px;">Dumri & Parasnath Border</strong>
            <p style="font-size: 12.5px; color: #64748b; margin: 3px 0 0;">Eastern highway corridor connecting towards Jain pilgrimage centers</p>
          </div>
        </div>
      </div>

      <div style="text-align: center;">
        <div style="aspect-ratio: 3/4; max-width: 400px; margin: 0 auto; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 28px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
          <img src="<?php echo SITE_BASE_URL; ?>/images/car-transport-carrier-loading-jharkhand.jpg" 
               alt="Car and Bike Transportation Services Bagodar Shree Ashirwad Packers" 
               style="width: 100%; height: 100%; object-fit: cover; display: block;" 
               loading="lazy" 
               width="400" 
               height="533">
        </div>
        <p style="font-size: 13px; color: #64748b; margin-top: 10px; font-style: italic;">
          Vehicle carrier and bike parcel transportation in Bagodar
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 6: PACKING MATERIALS & QUALITY STANDARDS -->
<section style="padding: 60px 0; background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <div style="text-align: center; max-width: 780px; margin: 0 auto 40px;">
      <div style="color: #f39c12; font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
        Zero Damage Standard
      </div>
      <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0f172a; line-height: 1.3;">
        Engineered 5-Layer Packing System
      </h2>
      <p style="font-size: 16px; color: #64748b; line-height: 1.7; margin-top: 12px;">
        Our protective packaging materials ensure your household goods and commercial equipment arrive at their destination without scratches, breakage, or highway dust contamination.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
      <div style="background: #ffffff; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0;">
        <div style="font-size: 28px; color: #1e3a8a; margin-bottom: 12px;"><i class="fa-solid fa-layer-group"></i></div>
        <h3 style="font-size: 17px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Multi-Layer Air Bubble Wrap</h3>
        <p style="font-size: 14px; color: #475569; line-height: 1.6; margin: 0;">
          Virgin air bubble rolls cushion LED televisions, computer equipment, audio systems, and glassware against road shocks and sudden highway braking.
        </p>
      </div>

      <div style="background: #ffffff; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0;">
        <div style="font-size: 28px; color: #f39c12; margin-bottom: 12px;"><i class="fa-solid fa-box"></i></div>
        <h3 style="font-size: 17px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">7-Ply Corrugated Cartons</h3>
        <p style="font-size: 14px; color: #475569; line-height: 1.6; margin: 0;">
          Heavy-gauge cartons maintain structural rigidity during stacking inside container trucks, protecting books, kitchen utensils, clothing, and temple souvenirs without bending.
        </p>
      </div>

      <div style="background: #ffffff; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0;">
        <div style="font-size: 28px; color: #10b981; margin-bottom: 12px;"><i class="fa-solid fa-shield-halved"></i></div>
        <h3 style="font-size: 17px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Edge Protectors & EPE Foam</h3>
        <p style="font-size: 14px; color: #475569; line-height: 1.6; margin: 0;">
          L-shaped rigid corner guards and high-density foam padding safeguard delicate wooden furniture edges, tables, and wardrobes from abrasive rubbing.
        </p>
      </div>

      <div style="background: #ffffff; padding: 24px; border-radius: 12px; border: 1px solid #e2e8f0;">
        <div style="font-size: 28px; color: #6366f1; margin-bottom: 12px;"><i class="fa-solid fa-film"></i></div>
        <h3 style="font-size: 17px; font-weight: 700; color: #0f172a; margin-bottom: 8px;">Moisture-Proof Stretch Film</h3>
        <p style="font-size: 14px; color: #475569; line-height: 1.6; margin: 0;">
          Tough industrial stretch film binds packed cartons tightly, sealing goods completely against rain, highway dust, and dampness throughout transport.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 7: WHY CHOOSE SHREE ASHIRWAD IN BAGODAR -->
<section style="padding: 60px 0; background: #ffffff;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 36px; align-items: center;">
      <div style="order: 1; text-align: center;">
        <div style="aspect-ratio: 3/4; max-width: 400px; margin: 0 auto; overflow: hidden; border-radius: 14px; box-shadow: 0 12px 28px rgba(0,0,0,0.12); border: 1px solid #e2e8f0;">
          <img src="<?php echo SITE_BASE_URL; ?>/images/commercial-goods-storage-warehouse-ranchi.jpg" 
               alt="Warehouse Storage Facility Bagodar Shree Ashirwad Packers" 
               style="width: 100%; height: 100%; object-fit: cover; display: block;" 
               loading="lazy" 
               width="400" 
               height="533">
        </div>
        <p style="font-size: 13px; color: #64748b; margin-top: 10px; font-style: italic;">
          Secure warehousing and storage facility supporting Bagodar consignments
        </p>
      </div>

      <div style="order: 2;">
        <div style="color: #f39c12; font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
          The Ashirwad Advantage
        </div>
        <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0f172a; margin-bottom: 18px; line-height: 1.3;">
          Why Bagodar Families & Officials Choose Us
        </h2>
        <p style="font-size: 15.5px; line-height: 1.75; color: #475569; margin-bottom: 18px;">
          Whether moving an apartment, a business premise, or ancestral home in Bagodar, Shree Ashirwad Packers and Movers delivers proven excellence:
        </p>

        <div style="display: flex; flex-direction: column; gap: 14px;">
          <div style="display: flex; gap: 12px; align-items: flex-start;">
            <div style="color: #10b981; font-size: 18px; margin-top: 2px;"><i class="fa-solid fa-circle-check"></i></div>
            <div>
              <strong style="color: #0f172a; font-size: 15px;">IBA-Approved Official Invoices:</strong>
              <p style="font-size: 14px; color: #475569; margin: 2px 0 0; line-height: 1.6;">We furnish itemized GST bills, IBA consignment notes (bilty), and transit insurance receipts recognized by state/central government departments, schools, and banks for transfer reimbursement.</p>
            </div>
          </div>

          <div style="display: flex; gap: 12px; align-items: flex-start;">
            <div style="color: #10b981; font-size: 18px; margin-top: 2px;"><i class="fa-solid fa-circle-check"></i></div>
            <div>
              <strong style="color: #0f172a; font-size: 15px;">Full-Time Professional Crew:</strong>
              <p style="font-size: 14px; color: #475569; margin: 2px 0 0; line-height: 1.6;">Our background-verified, uniformed crew members are skilled in carpentry dismantling, heavy appliance handling, and courteous customer communication. We never use untrained casual labor.</p>
            </div>
          </div>

          <div style="display: flex; gap: 12px; align-items: flex-start;">
            <div style="color: #10b981; font-size: 18px; margin-top: 2px;"><i class="fa-solid fa-circle-check"></i></div>
            <div>
              <strong style="color: #0f172a; font-size: 15px;">Transparent Pricing with Zero Hidden Costs:</strong>
              <p style="font-size: 14px; color: #475569; margin: 2px 0 0; line-height: 1.6;">Our written quotations are completely binding. You will never encounter unexpected fuel markups, toll surprises, or unloading demands at your destination.</p>
            </div>
          </div>

          <div style="display: flex; gap: 12px; align-items: flex-start;">
            <div style="color: #10b981; font-size: 18px; margin-top: 2px;"><i class="fa-solid fa-circle-check"></i></div>
            <div>
              <strong style="color: #0f172a; font-size: 15px;">Prime Highway Location (GT Road NH-19):</strong>
              <p style="font-size: 14px; color: #475569; margin: 2px 0 0; line-height: 1.6;">Direct access to the 6-lane national expressway ensures rapid transit times to both eastern metropolitan cities (Kolkata, Durgapur) and northern states (Bihar, UP, Delhi).</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 8: INTERACTIVE MAP & LOCAL CONTACT INFO -->
<section style="padding: 60px 0; background: #f8fafc; border-top: 1px solid #e2e8f0; border-bottom: 1px solid #e2e8f0;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <div style="text-align: center; max-width: 760px; margin: 0 auto 36px;">
      <div style="color: #f39c12; font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
        Local Reach & Quick Contact
      </div>
      <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0f172a; line-height: 1.3;">
        Our Bagodar Office & Map Location
      </h2>
      <p style="font-size: 16px; color: #64748b; line-height: 1.7; margin-top: 10px;">
        Reach out to our local moving desk for rapid on-site audits, packing supplies delivery, and prompt booking across Bagodar.
      </p>
    </div>

    <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 30px; align-items: start;">
      <!-- Contact Card -->
      <div style="background: #ffffff; padding: 30px; border-radius: 12px; box-shadow: 0 4px 16px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
        <h3 style="font-size: 20px; font-weight: 700; color: #1e3a8a; margin-bottom: 18px; display: flex; align-items: center; gap: 8px;">
          <i class="fa-solid fa-location-dot" style="color: #f39c12;"></i> Bagodar Operational Desk
        </h3>
        
        <div style="margin-bottom: 18px;">
          <strong style="display: block; font-size: 13px; color: #64748b; text-transform: uppercase; margin-bottom: 4px;">Service Address:</strong>
          <p style="font-size: 15px; color: #1e293b; margin: 0; line-height: 1.6;">
            Shree Ashirwad Packers and Movers<br>
            Grand Trunk Road (NH-19), Near Harihar Dham & Bagodar Chowk<br>
            Bagodar, Giridih, Jharkhand – 825322
          </p>
        </div>

        <div style="margin-bottom: 18px;">
          <strong style="display: block; font-size: 13px; color: #64748b; text-transform: uppercase; margin-bottom: 4px;">Phone / 24x7 Helpline:</strong>
          <p style="font-size: 18px; font-weight: 800; color: #1e3a8a; margin: 0;">
            <a href="tel:+918409531615" style="color: #1e3a8a; text-decoration: none;">+91 8409531615</a>
          </p>
        </div>

        <div style="margin-bottom: 18px;">
          <strong style="display: block; font-size: 13px; color: #64748b; text-transform: uppercase; margin-bottom: 4px;">WhatsApp Instant Booking:</strong>
          <p style="font-size: 15px; font-weight: 700; color: #16a34a; margin: 0;">
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Bagodar" target="_blank" rel="noopener" style="color: #16a34a; text-decoration: none;">+91 8409531615 (Chat Online)</a>
          </p>
        </div>

        <div style="margin-bottom: 18px;">
          <strong style="display: block; font-size: 13px; color: #64748b; text-transform: uppercase; margin-bottom: 4px;">Operating Hours:</strong>
          <p style="font-size: 14.5px; color: #475569; margin: 0;">
            Monday to Sunday: 7:00 AM – 10:00 PM (Emergency dispatches available 24/7)
          </p>
        </div>

        <div style="padding-top: 14px; border-top: 1px solid #f1f5f9;">
          <a href="tel:+918409531615" style="display: inline-block; width: 100%; text-align: center; background: #f39c12; color: #ffffff; font-weight: 700; padding: 12px; border-radius: 8px; text-decoration: none; box-sizing: border-box;">
            Call Now for Instant Booking
          </a>
        </div>
      </div>

      <!-- Google Map Embed -->
      <div style="background: #ffffff; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 16px rgba(0,0,0,0.05); border: 1px solid #e2e8f0;">
        <div style="padding: 16px 20px; background: #f8fafc; border-bottom: 1px solid #e2e8f0;">
          <strong style="font-size: 15px; color: #1e293b;"><i class="fa-solid fa-map-location-dot" style="color: #1e3a8a; margin-right: 6px;"></i> Bagodar Service Territory</strong>
        </div>
        <div style="height: 380px; width: 100%;">
          <iframe 
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58322.25841029285!2d85.92216738188177!3d24.08332129841322!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39f3761200000001%3A0x6b4df3b84175d79!2sBagodar%2C%20Jharkhand%20825322!5e0!3m2!1sen!2sin!4v1700000000000!5m2!1sen!2sin" 
            width="100%" 
            height="100%" 
            style="border:0;" 
            allowfullscreen="" 
            loading="lazy" 
            referrerpolicy="no-referrer-when-downgrade" 
            title="Google Map of Bagodar, Giridih">
          </iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 9: FAQS (8 LOCALIZED QUESTIONS) -->
<section style="padding: 60px 0; background: #ffffff;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <div style="text-align: center; max-width: 780px; margin: 0 auto 40px;">
      <div style="color: #f39c12; font-weight: 700; font-size: 14px; text-transform: uppercase; letter-spacing: 1px; margin-bottom: 8px;">
        Frequently Asked Questions
      </div>
      <h2 style="font-size: clamp(24px, 3.2vw, 34px); font-weight: 800; color: #0f172a; line-height: 1.3;">
        Questions About Moving in Bagodar
      </h2>
      <p style="font-size: 16px; color: #64748b; line-height: 1.7; margin-top: 10px;">
        Clear answers to help you plan an effortless, economical relocation in Bagodar and Giridih district.
      </p>
    </div>

    <div style="max-width: 920px; margin: 0 auto; display: flex; flex-direction: column; gap: 16px;">
      <!-- FAQ 1 -->
      <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
        <h3 style="font-size: 17px; font-weight: 700; color: #0f172a; margin: 0 0 10px; display: flex; align-items: center; gap: 10px;">
          <span style="color: #f39c12; font-size: 18px;">Q1.</span> What are the packers and movers charges in Bagodar, Giridih?
        </h3>
        <p style="font-size: 14.5px; color: #475569; margin: 0; line-height: 1.7;">
          For local moves within Bagodar and surrounding localities, rates range from ₹3,000 to ₹5,500 for a 1 BHK, ₹5,500 to ₹9,200 for a 2 BHK, and ₹9,000 to ₹14,500 for a 3 BHK. For intercity moves to Giridih town, Dhanbad, Bokaro, Ranchi, or Kolkata along NH-19, pricing depends on cargo volume, distance, floor levels, and packing materials.
        </p>
      </div>

      <!-- FAQ 2 -->
      <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
        <h3 style="font-size: 17px; font-weight: 700; color: #0f172a; margin: 0 0 10px; display: flex; align-items: center; gap: 10px;">
          <span style="color: #f39c12; font-size: 18px;">Q2.</span> How does your location on the Grand Trunk Road (NH-19) benefit relocations from Bagodar?
        </h3>
        <p style="font-size: 14.5px; color: #475569; margin: 0; line-height: 1.7;">
          Being located directly on the 6-lane Grand Trunk Road (NH-19) enables swift, non-stop freight transit. Our container trucks can reach Kolkata, Varanasi, Delhi, Dhanbad, and Asansol directly without navigating congested city interiors or detours, ensuring faster transit times and lower freight costs.
        </p>
      </div>

      <!-- FAQ 3 -->
      <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
        <h3 style="font-size: 17px; font-weight: 700; color: #0f172a; margin: 0 0 10px; display: flex; align-items: center; gap: 10px;">
          <span style="color: #f39c12; font-size: 18px;">Q3.</span> Are your moving bills valid for government transfer claims in Bagodar?
        </h3>
        <p style="font-size: 14.5px; color: #475569; margin: 0; line-height: 1.7;">
          Yes, 100%. Shree Ashirwad Packers and Movers provides official IBA-approved bills, GST invoices, consignment notes (bilty), and transit insurance policies that meet all reimbursement criteria for state and central government staff, teachers, police personnel, and bank officers.
        </p>
      </div>

      <!-- FAQ 4 -->
      <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
        <h3 style="font-size: 17px; font-weight: 700; color: #0f172a; margin: 0 0 10px; display: flex; align-items: center; gap: 10px;">
          <span style="color: #f39c12; font-size: 18px;">Q4.</span> Do you provide moving services near Harihar Dham and rural areas of Bagodar?
        </h3>
        <p style="font-size: 14.5px; color: #475569; margin: 0; line-height: 1.7;">
          Yes. We serve all areas of Bagodar block including Harihar Dham temple area, Atka, Donlo, Hesla, Kushmarja, Bandkharo, Jamunia bridge, and rural belts connecting to Saria and Dumri. Our trucks reach your exact doorstep.
        </p>
      </div>

      <!-- FAQ 5 -->
      <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
        <h3 style="font-size: 17px; font-weight: 700; color: #0f172a; margin: 0 0 10px; display: flex; align-items: center; gap: 10px;">
          <span style="color: #f39c12; font-size: 18px;">Q5.</span> How do you protect delicate electronics, glass, and furniture during transit?
        </h3>
        <p style="font-size: 14.5px; color: #475569; margin: 0; line-height: 1.7;">
          We use an advanced 5-layer protective packaging system: virgin air bubble wrap, heavy-gauge corrugated edge protectors, shock-absorbent thermocol padding, moisture-resistant stretch film, and 7-ply export-grade master cartons. Items are locked inside closed container vehicles with cargo straps.
        </p>
      </div>

      <!-- FAQ 6 -->
      <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
        <h3 style="font-size: 17px; font-weight: 700; color: #0f172a; margin: 0 0 10px; display: flex; align-items: center; gap: 10px;">
          <span style="color: #f39c12; font-size: 18px;">Q6.</span> Can you shift two-wheelers and cars from Bagodar to other cities across India?
        </h3>
        <p style="font-size: 14.5px; color: #475569; margin: 0; line-height: 1.7;">
          Yes. We provide specialized bike parcel and car transportation services from Bagodar. Two-wheelers receive multi-layer bubble wrapping and foam shielding, while four-wheelers are moved in enclosed carriers with GPS tracking and comprehensive transit insurance.
        </p>
      </div>

      <!-- FAQ 7 -->
      <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
        <h3 style="font-size: 17px; font-weight: 700; color: #0f172a; margin: 0 0 10px; display: flex; align-items: center; gap: 10px;">
          <span style="color: #f39c12; font-size: 18px;">Q7.</span> How much advance notice is required to book a move in Bagodar?
        </h3>
        <p style="font-size: 14.5px; color: #475569; margin: 0; line-height: 1.7;">
          We recommend booking 2 to 4 days prior to your preferred moving date to ensure optimal scheduling and pre-move survey. However, due to our frequent fleet movements along NH-19, same-day emergency shifting is also available.
        </p>
      </div>

      <!-- FAQ 8 -->
      <div style="background: #f8fafc; border: 1px solid #e2e8f0; border-radius: 10px; padding: 20px;">
        <h3 style="font-size: 17px; font-weight: 700; color: #0f172a; margin: 0 0 10px; display: flex; align-items: center; gap: 10px;">
          <span style="color: #f39c12; font-size: 18px;">Q8.</span> Do you provide unpacking and furniture reassembly at the destination?
        </h3>
        <p style="font-size: 14.5px; color: #475569; margin: 0; line-height: 1.7;">
          Yes. Our complete relocation service includes careful unloading, unpacking, furniture reassembly (beds, wardrobes, dining tables), room-wise placement, and clean disposal of packing debris so you can settle in immediately.
        </p>
      </div>
    </div>
  </div>
</section>

<!-- SECTION 10: INTER-DISTRICT & REGIONAL QUICK LINKS -->
<section style="padding: 50px 0; background: #f1f5f9; border-top: 1px solid #e2e8f0;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <div style="text-align: center; margin-bottom: 24px;">
      <h3 style="font-size: 18px; font-weight: 700; color: #0f172a; margin: 0 0 6px;">Our Moving Network in Giridih & Neighboring Districts</h3>
      <p style="font-size: 13.5px; color: #64748b; margin: 0;">Explore our verified packing and moving services in nearby towns and cities:</p>
    </div>

    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 10px; max-width: 1000px; margin: 0 auto;">
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-giridih" style="background: #ffffff; border: 1px solid #cbd5e1; padding: 6px 14px; border-radius: 20px; font-size: 13px; color: #1e3a8a; text-decoration: none; font-weight: 600;">Giridih</a>
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-dhanbad" style="background: #ffffff; border: 1px solid #cbd5e1; padding: 6px 14px; border-radius: 20px; font-size: 13px; color: #1e3a8a; text-decoration: none; font-weight: 600;">Dhanbad</a>
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-bokaro" style="background: #ffffff; border: 1px solid #cbd5e1; padding: 6px 14px; border-radius: 20px; font-size: 13px; color: #1e3a8a; text-decoration: none; font-weight: 600;">Bokaro</a>
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-baghmara" style="background: #ffffff; border: 1px solid #cbd5e1; padding: 6px 14px; border-radius: 20px; font-size: 13px; color: #1e3a8a; text-decoration: none; font-weight: 600;">Baghmara</a>
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-hazaribagh" style="background: #ffffff; border: 1px solid #cbd5e1; padding: 6px 14px; border-radius: 20px; font-size: 13px; color: #1e3a8a; text-decoration: none; font-weight: 600;">Hazaribagh</a>
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-koderma" style="background: #ffffff; border: 1px solid #cbd5e1; padding: 6px 14px; border-radius: 20px; font-size: 13px; color: #1e3a8a; text-decoration: none; font-weight: 600;">Koderma</a>
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ramgarh" style="background: #ffffff; border: 1px solid #cbd5e1; padding: 6px 14px; border-radius: 20px; font-size: 13px; color: #1e3a8a; text-decoration: none; font-weight: 600;">Ramgarh</a>
      <a href="<?php echo SITE_BASE_URL; ?>/" style="background: #ffffff; border: 1px solid #cbd5e1; padding: 6px 14px; border-radius: 20px; font-size: 13px; color: #1e3a8a; text-decoration: none; font-weight: 600;">Ranchi</a>
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-deoghar" style="background: #ffffff; border: 1px solid #cbd5e1; padding: 6px 14px; border-radius: 20px; font-size: 13px; color: #1e3a8a; text-decoration: none; font-weight: 600;">Deoghar</a>
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-jamtara" style="background: #ffffff; border: 1px solid #cbd5e1; padding: 6px 14px; border-radius: 20px; font-size: 13px; color: #1e3a8a; text-decoration: none; font-weight: 600;">Jamtara</a>
    </div>
  </div>
</section>

<!-- Section: Google My Business Authentic Reviews -->
<?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

<!-- FINAL CALL TO ACTION BANNER -->
<section style="background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%); color: #ffffff; padding: 50px 0; text-align: center;">
  <div class="container" style="max-width: 1140px; margin: 0 auto; padding: 0 20px;">
    <h2 style="font-size: clamp(24px, 3.2vw, 36px); font-weight: 800; margin-bottom: 14px;">
      Planning a Move in Bagodar or Along the GT Road?
    </h2>
    <p style="font-size: 16.5px; color: #e2e8f0; max-width: 720px; margin: 0 auto 28px; line-height: 1.7;">
      Get in touch with our certified relocation specialists today for a free on-site survey and a binding, transparent price quotation with zero hidden charges.
    </p>
    <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 14px;">
      <a href="tel:+918409531615" class="btn" style="background: #f39c12; color: #ffffff; font-weight: 700; padding: 13px 30px; border-radius: 8px; text-decoration: none; font-size: 16px; box-shadow: 0 4px 14px rgba(243, 156, 18, 0.4);">
        <i class="fa-solid fa-phone" style="margin-right: 8px;"></i> Call 8409531615
      </a>
      <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20need%20moving%20services%20in%20Bagodar" target="_blank" rel="noopener" class="btn" style="background: #25d366; color: #ffffff; font-weight: 700; padding: 13px 30px; border-radius: 8px; text-decoration: none; font-size: 16px; box-shadow: 0 4px 14px rgba(37, 211, 102, 0.35);">
        <i class="fa-brands fa-whatsapp" style="margin-right: 8px;"></i> WhatsApp Quote
      </a>
    </div>
  </div>
</section>

<?php include_once __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
