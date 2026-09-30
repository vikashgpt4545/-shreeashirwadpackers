<?php
/**
 * Pet Relocation and Animal Transport in Ranchi - Shree Ashirwad Packers and Movers
 * 
 * High-performance, fully SEO-optimized dedicated service landing page for certified pet moving,
 * climate-controlled dog & cat transport, IATA-compliant crates, and veterinary care in Ranchi.
 * State Capital Hub & Chota Nagpur Regional Headquarters.
 * Target Keyword: pet relocation and animal transport in ranchi / pet movers ranchi
 */

// Define page-specific metadata
$page_title = "Pet Relocation and Animal Transport in Ranchi | Safe Pet Movers - Shree Ashirwad";
$page_description = "Certified pet relocation and animal transport in Ranchi by Shree Ashirwad. Climate-controlled pet cabs, IATA approved travel crates, vet checkups, dog & cat transport across India. Call 8409531615.";
$canonical_url = "https://www.shreeashirwadpackers.com/pet-relocation-and-animal-transport-in-ranchi";

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo htmlspecialchars($page_title); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="keywords" content="pet relocation and animal transport in ranchi, pet movers ranchi, dog transport services ranchi, pet taxi ranchi, cat shifting service ranchi, pet transport from ranchi to bangalore, pet movers ranchi to delhi, IATA pet crates ranchi">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">

  <!-- Favicon -->
  <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
  <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">

  <!-- Typography & CSS -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

  <!-- Open Graph -->
  <meta property="og:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:type" content="article">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg">
  <meta property="og:image:alt" content="Pet Relocation and Animal Transport in Ranchi - Shree Ashirwad Safe Pet Movers">
  <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
  <meta property="og:locale" content="en_IN">

  <!-- Twitter Cards -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?php echo htmlspecialchars($page_title); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($page_description); ?>">
  <meta name="twitter:image" content="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg">

  <!-- Geo Meta Tags for Ranchi -->
  <meta name="geo.region" content="IN-JH">
  <meta name="geo.placename" content="Ranchi">
  <meta name="geo.position" content="23.3639813;85.3090259">
  <meta name="ICBM" content="23.3639813, 85.3090259">

  <!-- Structured Data: LocalBusiness / MovingCompany Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "MovingCompany",
    "name": "Shree Ashirwad Packers and Movers Ranchi",
    "image": "<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg",
    "@id": "https://www.shreeashirwadpackers.com/#movingcompany",
    "url": "https://www.shreeashirwadpackers.com",
    "telephone": "+91-8409531615",
    "priceRange": "₹2,500 - ₹28,000",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Anandpuri Chowk, Vidyanagar Road, Harmu Housing Colony",
      "addressLocality": "Ranchi",
      "addressRegion": "Jharkhand",
      "postalCode": "834001",
      "addressCountry": "IN"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": 23.3639813,
      "longitude": 85.3090259
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
    "aggregateRating": {
      "@type": "AggregateRating",
      "ratingValue": "4.9",
      "reviewCount": "620"
    }
  }
  </script>

  <!-- Structured Data: Service Schema for Pet Relocation -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Service",
    "serviceType": "Pet Relocation and Animal Transport Service in Ranchi",
    "provider": {
      "@type": "MovingCompany",
      "name": "Shree Ashirwad Packers and Movers"
    },
    "areaServed": {
      "@type": "City",
      "name": "Ranchi"
    },
    "hasOfferCatalog": {
      "@type": "OfferCatalog",
      "name": "Pet Transport Packages",
      "itemListElement": [
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Local Pet Taxi & Vet Visit Transit in Ranchi"
          },
          "priceSpecification": {
            "@type": "PriceSpecification",
            "price": "1800",
            "priceCurrency": "INR"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Interstate Road Pet Relocation (Dedicated AC Van)"
          },
          "priceSpecification": {
            "@type": "PriceSpecification",
            "price": "8500",
            "priceCurrency": "INR"
          }
        },
        {
          "@type": "Offer",
          "itemOffered": {
            "@type": "Service",
            "name": "Domestic Air Pet Cargo Coordination from Ranchi (IXR)"
          },
          "priceSpecification": {
            "@type": "PriceSpecification",
            "price": "14500",
            "priceCurrency": "INR"
          }
        }
      ]
    }
  }
  </script>

  <!-- Structured Data: BreadcrumbList Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "BreadcrumbList",
    "itemListElement": [
      {
        "@type": "ListItem",
        "position": 1,
        "name": "Home",
        "item": "https://www.shreeashirwadpackers.com/"
      },
      {
        "@type": "ListItem",
        "position": 2,
        "name": "Specialized Services",
        "item": "https://www.shreeashirwadpackers.com/services"
      },
      {
        "@type": "ListItem",
        "position": 3,
        "name": "Pet Relocation and Animal Transport in Ranchi",
        "item": "https://www.shreeashirwadpackers.com/pet-relocation-and-animal-transport-in-ranchi"
      }
    ]
  }
  </script>

  <!-- Structured Data: FAQPage Schema -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "FAQPage",
    "mainEntity": [
      {
        "@type": "Question",
        "name": "How does Shree Ashirwad transport pets safely from Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We provide two safe transit methods: (1) Climate-Controlled Road Transport in dedicated, air-conditioned pet vehicles accompanied by trained animal handlers who manage scheduled exercise, hydration, and feeding breaks every 3 to 4 hours; and (2) Air Cargo Coordination via Ranchi Birsa Munda Airport (IXR) utilizing IATA-approved airline travel crates, priority live-animal booking, and destination airport pickup."
        }
      },
      {
        "@type": "Question",
        "name": "What travel documentation is required for moving pets interstate from Ranchi?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Interstate pet travel in India requires: (1) Up-to-date Rabies Vaccination Certificate (administered at least 30 days prior and not older than 1 year), (2) Complete DHPPi / FVRCP vaccination record, and (3) A certified Fit-to-Travel / Fit-to-Fly Health Certificate issued by a registered veterinary doctor in Ranchi within 24 to 48 hours of departure. We assist in coordinating vet checkups and paperwork."
        }
      },
      {
        "@type": "Question",
        "name": "What sizes of IATA-approved pet travel crates do you provide?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We provide IATA Live Animal Regulations (LAR) compliant fiber and composite travel crates in all sizes: Small (Cats, Pugs, Shih Tzus), Medium (Beagles, Cocker Spaniels), Large (Labradors, Golden Retrievers), and Extra-Large / Custom Timber Reinforced Crates (German Shepherds, Rottweilers, Great Danes). Crates feature 360-degree ventilation, spill-proof water bowls, and absorbent pee-pads."
        }
      },
      {
        "@type": "Question",
        "name": "Can my pet travel in the same truck as my household furniture?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "No! Under no circumstances do we ever place live animals inside closed cargo containers with household goods. Closed cargo trucks lack adequate ventilation, climate control, and human supervision, posing fatal risks of heatstroke and asphyxiation. Pets always travel in dedicated, air-conditioned passenger pet cabs or through verified commercial airline live-animal cargo."
        }
      },
      {
        "@type": "Question",
        "name": "How do you manage meals, hydration, and bathroom breaks during long road trips?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "During road transit, our dedicated pet handlers stop every 3 to 4 hours at safe, clean highway resting areas. Dogs are leashed for gentle walking and bathroom relief. Fresh bottled mineral water is provided continuously, and meals are served strictly according to the customized feeding schedule provided by you."
        }
      },
      {
        "@type": "Question",
        "name": "How much does pet relocation cost from Ranchi to other Indian cities?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "Pet relocation charges depend on the pet's size, travel crate dimensions, and mode of transit. Local pet taxi within Ranchi ranges from ₹1,500 to ₹2,800. Interstate road transport to regional hubs like Patna or Kolkata costs ₹6,500 to ₹11,000. Long-distance air or dedicated AC van relocation to Bangalore, Pune, Delhi, or Mumbai ranges from ₹12,000 to ₹24,000 including crate, vet health clearance, and doorstep delivery."
        }
      },
      {
        "@type": "Question",
        "name": "How can I help my dog or cat prepare for travel anxiety?",
        "acceptedAnswer": {
          "@type": "Answer",
          "text": "We deliver the travel crate to your Ranchi residence 3 to 5 days before the journey so your pet can sleep inside and associate the crate with comfort and safety. Place an unwashed t-shirt with your scent and their favorite chew toy inside. Fast your pet from heavy meals 4 to 6 hours before departure to prevent motion sickness."
        }
      }
    ]
  }
  </script>

  <style>
    /* Full-width clean styling */
    .pet-hero {
      background: linear-gradient(135deg, #005f73 0%, #0a9396 50%, #94d2bd 100%);
      color: #ffffff;
      padding: 65px 20px 50px;
      text-align: center;
    }
    .pet-hero h1 {
      font-size: 2.5rem;
      font-weight: 800;
      line-height: 1.25;
      margin-bottom: 18px;
      color: #ffffff;
    }
    .pet-hero p {
      font-size: 1.15rem;
      max-width: 860px;
      margin: 0 auto 25px;
      line-height: 1.6;
      color: #e9d8a6;
    }
    .pet-badge-bar {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 12px;
      margin-top: 15px;
    }
    .pet-pill {
      background: rgba(255, 255, 255, 0.15);
      border: 1px solid rgba(255, 255, 255, 0.3);
      padding: 6px 16px;
      border-radius: 25px;
      font-size: 0.88rem;
      font-weight: 600;
      color: #001219;
      background: #e9d8a6;
    }
    .pet-content {
      max-width: 1160px;
      margin: 0 auto;
      padding: 45px 20px 70px;
      color: #2b2d42;
      line-height: 1.75;
      font-size: 1.05rem;
    }
    .pet-content h2 {
      font-size: 1.95rem;
      color: #005f73;
      margin: 45px 0 18px;
      font-weight: 700;
      border-bottom: 2px solid #e2e8f0;
      padding-bottom: 12px;
    }
    .pet-content h3 {
      font-size: 1.35rem;
      color: #0a9396;
      margin: 30px 0 12px;
      font-weight: 600;
    }
    .table-container {
      overflow-x: auto;
      margin: 25px 0 35px;
      border-radius: 8px;
      box-shadow: 0 4px 14px rgba(0,0,0,0.06);
    }
    .pet-table {
      width: 100%;
      border-collapse: collapse;
      background: #ffffff;
      font-size: 0.98rem;
    }
    .pet-table th {
      background: #005f73;
      color: #ffffff;
      padding: 14px 18px;
      font-weight: 600;
      text-transform: uppercase;
      font-size: 0.88rem;
    }
    .pet-table td {
      padding: 13px 18px;
      border-bottom: 1px solid #edf2f7;
    }
    .pet-table tr:nth-child(even) {
      background: #f8fafc;
    }
    .grid-pet {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
      gap: 22px;
      margin: 30px 0;
    }
    .pet-card {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 24px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.04);
      transition: transform 0.2s ease;
    }
    .pet-card:hover {
      transform: translateY(-3px);
    }
    .pet-card h4 {
      font-size: 1.15rem;
      color: #005f73;
      margin-bottom: 10px;
      font-weight: 700;
    }
    .paw-box {
      background: rgba(233, 216, 166, 0.25);
      border-left: 5px solid #005f73;
      padding: 22px 25px;
      border-radius: 6px;
      margin: 30px 0;
    }
    .faq-layout-pet {
      margin: 35px 0;
    }
    .faq-item-pet {
      background: #ffffff;
      border: 1px solid #e2e8f0;
      border-radius: 8px;
      margin-bottom: 12px;
      overflow: hidden;
    }
    .faq-q-pet {
      background: #f8fafc;
      padding: 16px 20px;
      font-weight: 600;
      color: #005f73;
      cursor: pointer;
    }
    .faq-a-pet {
      padding: 16px 20px;
      color: #4a5568;
      border-top: 1px solid #edf2f7;
      line-height: 1.65;
    }
    .cta-banner-pet {
      background: linear-gradient(135deg, #005f73 0%, #0a9396 100%);
      color: #ffffff;
      text-align: center;
      padding: 45px 25px;
      border-radius: 12px;
      margin: 50px 0 20px;
    }
    .cta-btn-gold {
      display: inline-block;
      background: #ee9b00;
      color: #ffffff;
      padding: 12px 32px;
      border-radius: 30px;
      font-weight: 700;
      text-decoration: none;
      margin-top: 15px;
      font-size: 1.05rem;
      transition: background 0.2s ease;
    }
    .cta-btn-gold:hover {
      background: #ca6702;
    }
    .cluster-box-pet {
      background: #f8fafc;
      border: 1px solid #e2e8f0;
      border-radius: 10px;
      padding: 26px;
      margin-top: 50px;
    }
    .cluster-grid-pet {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 12px;
      margin-top: 15px;
    }
    .cluster-link-pet {
      display: block;
      padding: 10px 14px;
      background: #ffffff;
      border: 1px solid #cbd5e1;
      border-radius: 6px;
      color: #005f73;
      text-decoration: none;
      font-weight: 500;
      font-size: 0.92rem;
      transition: all 0.2s ease;
    }
    .cluster-link-pet:hover {
      background: #005f73;
      color: #ffffff;
      border-color: #005f73;
    }
  </style>
</head>
<body>

<?php include __DIR__ . '/../includes/header.php'; ?>

<!-- Hero Section -->
<section class="pet-hero">
  <div class="container">
    <h1>Pet Relocation and Animal Transport in Ranchi | Safe, Certified Pet Movers</h1>
    <p>Compassionate, stress-free relocation for beloved dogs, cats, birds, and companion animals. Climate-controlled pet cabs, IATA-compliant travel crates, veterinary health clearances, and dedicated road & air transit from Ranchi across India.</p>
    <div class="pet-badge-bar">
      <span class="pet-pill">🐾 100% Climate-Controlled Transit</span>
      <span class="pet-pill">🐾 IATA Approved Travel Crates</span>
      <span class="pet-pill">🐾 Vet Health Check & Clearance</span>
      <span class="pet-pill">🐾 Zero Stress, Zero Cargo Mixing</span>
    </div>
  </div>
</section>

<!-- Main Body Content -->
<main class="pet-content">

  <!-- First Verified Image: Constrained as required -->
  <div style="text-align: center; margin: 0 auto 35px;">
    <img src="<?php echo SITE_BASE_URL; ?>/images/complete-household-packing-dhanbad.jpg" alt="Pet Relocation and Animal Transport in Ranchi - Safe Handlers" style="max-width: 550px; height: 280px; object-fit: cover; border-radius: 10px; margin: 0 auto; display: block;" loading="lazy">
    <p style="font-size: 0.88rem; color: #64748b; margin-top: 8px;">Dedicated animal care handlers providing gentle supervision and safe crate placement for pet relocations in Ranchi.</p>
  </div>

  <h2>Treating Pets Like Family: Compassionate Animal Logistics in Ranchi</h2>
  <p>Pets are not mere luggage or inanimate cargo—they are cherished family members who experience stress, anxiety, and disorientation when their familiar home environment is disrupted. When families in Ranchi relocate locally across neighborhoods like Harmu, Morabadi, Kanke Road, and Bariatu, or embark on major interstate moves to Bangalore, Pune, Delhi, Mumbai, or Kolkata, transporting their dogs, cats, or companion birds requires specialized animal-welfare expertise.</p>

  <p>At <strong>Shree Ashirwad Packers and Movers</strong>, operating from our owned headquarters at Anandpuri Chowk, Vidyanagar Road, Harmu, Ranchi, we offer a dedicated <strong>Pet Relocation & Animal Transport Division</strong>. We strictly enforce a compassionate, zero-cruelty standard. We never mix live animals with heavy furniture in freight trucks. Instead, your pets travel in dedicated, air-conditioned pet vehicles accompanied by trained animal handlers, or via certified commercial airline pet cargo from Birsa Munda Airport (IXR), ensuring comfort, safety, and regular care throughout the journey.</p>

  <div class="paw-box">
    <strong>Our Ethical Animal Welfare Pledge:</strong> We strictly prohibit placing pets inside dark, enclosed cargo freight containers. All animals travel exclusively in sanitized, air-conditioned passenger compartments or approved airline live-animal cargo holds with verified airflow, temperature regulation, and mandatory feeding and walking stops every 3 to 4 hours.
  </div>

  <h2>Pet Relocation Tariff Schedule in Ranchi</h2>
  <p>Our pet relocation rates are transparent, covering premium IATA-approved crates, veterinary clearance coordination, hydration supplies, and door-to-door transit:</p>

  <div class="table-container">
    <table class="pet-table">
      <thead>
        <tr>
          <th>Pet Category / Move Type</th>
          <th>Travel Crate & Mode</th>
          <th>Care Services Included</th>
          <th>Estimated Tariff Range</th>
          <th>Standard Transit Time</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><strong>Local Pet Taxi (Within Ranchi)</strong></td>
          <td>Air-Conditioned Pet Cab</td>
          <td>Doorstep Pickup, Vet Visit, Safe Drop</td>
          <td><strong style="color: #005f73;">₹1,500 - ₹2,800</strong></td>
          <td>Same Day (1 - 3 Hours)</td>
        </tr>
        <tr>
          <td><strong>Small Dog / Cat (Interstate Road)</strong></td>
          <td>IATA Small / Medium Crate in AC Van</td>
          <td>Hydration, Food, 3-Hr Walking Breaks</td>
          <td><strong style="color: #005f73;">₹6,500 - ₹10,500</strong></td>
          <td>1 to 3 Days</td>
        </tr>
        <tr>
          <td><strong>Large Dog (Labrador / Golden / GSD)</strong></td>
          <td>IATA Large / XL Timber-Reinforced Crate</td>
          <td>Dedicated Handler, Exercise & Food</td>
          <td><strong style="color: #005f73;">₹11,000 - ₹18,000</strong></td>
          <td>2 to 4 Days (Road AC)</td>
        </tr>
        <tr>
          <td><strong>Domestic Air Cargo from Ranchi (IXR)</strong></td>
          <td>IATA Certified Flight Crate</td>
          <td>Airport Handling, Clearance & Flight Delivery</td>
          <td><strong style="color: #005f73;">₹14,500 - ₹26,000</strong></td>
          <td>Same Day / 24 Hours</td>
        </tr>
        <tr>
          <td><strong>Birds & Small Companion Animals</strong></td>
          <td>Custom Secure Mesh Carrier</td>
          <td>Temperature Stabilization & Seed/Water Feed</td>
          <td><strong style="color: #005f73;">₹3,500 - ₹6,500</strong></td>
          <td>Priority Direct Transit</td>
        </tr>
      </tbody>
    </table>
  </div>

  <h2>Comprehensive Pet Care Logistics: Road vs. Air Transit</h2>
  <p>Depending on your destination city, pet temperament, and timeline, we offer two verified transit channels:</p>

  <div class="grid-pet">
    <div class="pet-card">
      <h4>🚗 1. Climate-Controlled Road Pet Transit</h4>
      <p>Ideal for anxious pets, senior animals, or heavy dog breeds (Rottweilers, Mastiffs) that exceed commercial airline cargo limits. Animals travel in sanitized, temperature-regulated vehicles with continuous handler companionship. Drivers stop every 3 to 4 hours at safe highway green zones for leashed walks, bathroom breaks, and hydration.</p>
    </div>

    <div class="pet-card">
      <h4>✈️ 2. Domestic Air Cargo from Birsa Munda Airport</h4>
      <p>The fastest route for long-distance relocations to Bangalore, Chennai, Mumbai, or Hyderabad. We coordinate airline live-animal cargo space, supply IATA-approved flight crates, manage terminal customs and security clearances, and ensure priority transfer to pressurized, temperature-controlled aircraft cargo bays.</p>
    </div>
  </div>

  <h2>IATA-Compliant Travel Crate Sizing & Comfort Engineering</h2>
  <p>The International Air Transport Association (IATA) Live Animals Regulations (LAR) specify rigorous dimensional criteria for pet travel crates. A proper crate prevents claustrophobic panic and allows natural movement:</p>
  <ul>
    <li><strong>Sizing Formula:</strong> The crate must be tall enough for your dog or cat to stand completely erect without their head or ears touching the ceiling, wide enough to turn around effortlessly, and long enough to lie down in a natural sprawling posture.</li>
    <li><strong>360-Degree Cross Ventilation:</strong> Heavy-gauge metal mesh grilles on all four sides ensure continuous fresh air circulation.</li>
    <li><strong>Leak-Proof Floor Pan with Absorbent Bedding:</strong> Fitted with thick, hygienic moisture-absorbent pee-pads and non-slip rubber mats.</li>
    <li><strong>Exterior Water Funnel & Spill-Proof Dispenser:</strong> Allows handlers to refill fresh water bottles from outside the crate without unlatching the primary door, preventing accidental escapes.</li>
  </ul>

  <h2>Veterinary Health Protocols & Legal Documentation in Ranchi</h2>
  <p>Interstate animal transport requires full compliance with Indian veterinary and municipal regulations to avoid border delays or airline denial:</p>

  <div class="grid-pet">
    <div class="pet-card">
      <h4>💉 1. Rabies & Core Vaccination Records</h4>
      <p>Pets must possess an official vaccination booklet displaying up-to-date Anti-Rabies vaccination (administered at least 30 days prior and within 12 months) and core vaccines (DHPPi for dogs, FVRCP for cats).</p>
    </div>

    <div class="pet-card">
      <h4>🩺 2. Certified Fit-to-Travel Health Certificate</h4>
      <p>Issued by a registered government or private veterinary practitioner in Ranchi within 24 to 48 hours of departure, certifying that the animal is free from infectious skin diseases, ticks, and clinical illness.</p>
    </div>

    <div class="pet-card">
      <h4>🏷️ 3. Microchipping & Identification Tags</h4>
      <p>For air cargo and long-distance road trips, we verify that pets carry an ISO-compliant 15-digit subcutaneous microchip and a sturdy collar tag displaying owner contact numbers and destination addresses.</p>
    </div>

    <div class="pet-card">
      <h4>📋 4. Personalized Diet & Medication Schedule</h4>
      <p>Owners supply their pet's regular kibble, special dietary supplements, and prescription medications. Our handlers adhere strictly to feeding times and portion sizes to prevent gastrointestinal upset.</p>
    </div>
  </div>

  <h2>Breed-Specific Travel Logistics & Sensitive Animal Care</h2>
  <p>Different dog and cat breeds have unique physiological characteristics that dictate specialized travel arrangements:</p>

  <div class="grid-pet">
    <div class="pet-card">
      <h4>🐶 Brachycephalic (Short-Snout) Breeds</h4>
      <p>Breeds like Pugs, French Bulldogs, Boxers, and Persian cats have compressed respiratory systems vulnerable to heat exhaustion and airway constriction. For these sensitive pets, commercial airlines often restrict cargo travel. We recommend dedicated, climate-controlled road transport with continuous air-conditioning maintained between 20°C and 22°C.</p>
    </div>

    <div class="pet-card">
      <h4>🐕 Large & High-Energy Working Breeds</h4>
      <p>Breeds like German Shepherds, Golden Retrievers, Labradors, and Dobermans require larger, reinforced travel crates that accommodate their tall shoulder height and powerful build. Handlers plan extended walking and exercise stops at clean highway resting facilities to dissipate pent-up energy.</p>
    </div>

    <div class="pet-card">
      <h4>🐱 Feline Relocation: Cats & Kittens</h4>
      <p>Cats are intensely territorial and easily spooked by sudden auditory stimuli. Feline travel crates are lined with soft fleece blankets and covered with a breathable dark cotton sheet to simulate a comforting den. Crate latches are double-secured with security zip-ties to prevent accidental escape.</p>
    </div>

    <div class="pet-card">
      <h4>🦜 Exotic Birds & Small Mammals</h4>
      <p>Companion birds (parakeets, cockatiels), rabbits, and guinea pigs require draft-free, temperature-stabilized carriers shielded from direct sunlight and vehicle exhaust fumes. Perches are lowered to prevent falling, and fresh fruit/water gels are provided for in-transit hydration.</p>
    </div>
  </div>

  <h2>Domestic Air Cargo Coordination at Birsa Munda Airport (IXR)</h2>
  <p>Transporting pets via scheduled domestic airlines out of Ranchi requires strict adherence to airline live-animal policies (such as Air India and IndiGo):</p>
  <ul>
    <li><strong>Advance Cargo Manifest Booking:</strong> Live animals cannot be booked last-minute; cargo space must be reserved at least 48 to 72 hours prior to flight departure.</li>
    <li><strong>Terminal Reception & Veterinary Check:</strong> Pets arrive at the Birsa Munda Airport cargo terminal 3 hours before flight departure. Our handlers escort your pet through security X-ray screening and airport veterinary inspection.</li>
    <li><strong>Pressurized & Heated Aircraft Hold:</strong> Pets travel in the forward lower cargo compartment (Hold 1), which is maintained at the exact same atmospheric pressure and temperature (21°C) as the passenger cabin.</li>
    <li><strong>Destination Priority Baggage Clearance:</strong> Upon arrival in Bangalore, Mumbai, Chennai, or Delhi, our destination team clears cargo customs and delivers your pet directly to your new doorstep.</li>
  </ul>

  <h2>Post-Relocation Pet Acclimatization: Settling into Your New Home</h2>
  <p>Arriving in a new city with unfamiliar smells and sounds can cause temporary behavioral anxiety. Our animal behavior specialists suggest the following transition tips:</p>
  <ul>
    <li><strong>Establish a Safe Room First:</strong> Designate a quiet bedroom in your new home as your pet's 'safe zone'. Place their familiar bed, water bowl, and toys inside before introducing them to the rest of the house.</li>
    <li><strong>Maintain Feeding & Walking Routines:</strong> Keep breakfast, dinner, and walking schedules identical to your Ranchi routine to provide emotional stability and routine predictability.</li>
    <li><strong>Secure Windows & Balconies:</strong> High-rise apartments in metros require immediate mesh netting on balconies and windows to prevent accidental falls.</li>
    <li><strong>Locate a Trusted Local Vet Promptly:</strong> Register your pet with a reputable 24/7 veterinary hospital in your new neighborhood within the first week of arrival.</li>
  </ul>

  <h2>14-Day Pet Relocation Timeline Checklist</h2>
  <p>Review this practical preparation checklist to ensure a relaxed, healthy relocation journey:</p>
  <div class="paw-box">
    <ol style="margin-bottom:0; padding-left:20px;">
      <li><strong>14 Days Before Move:</strong> Contact Shree Ashirwad at +91 8409531615. Measure your pet (length from nose to tail base, and height from floor to top of ears) to reserve the ideal IATA travel crate.</li>
      <li><strong>10 Days Before Move:</strong> Visit your local vet in Ranchi to review vaccination cards. Ensure Anti-Rabies and core DHPPi / FVRCP boosters are fully up to date.</li>
      <li><strong>7 Days Before Move:</strong> Receive the travel crate at home. Begin positive crate association by feeding treats and encouraging naps inside the open crate.</li>
      <li><strong>2 Days Before Move:</strong> Complete the mandatory pre-travel veterinary physical checkup to obtain the official Fit-to-Travel Health Certificate.</li>
      <li><strong>Travel Day (4 Hours Prior):</strong> Feed your pet a light, easily digestible meal, followed by a vigorous walk. Withhold food 4 hours before departure, but keep water accessible.</li>
      <li><strong>Arrival:</strong> Greet your pet with calm, loving praise, offer fresh water, and allow them to explore their new home room by room at their own pace.</li>
    </ol>
  </div>

  <h2>Crate Training & Pre-Travel Preparation Guide for Pet Parents</h2>
  <p>To ensure your furry companion experiences zero anxiety during the move, follow this practical pre-move routine:</p>
  <ul>
    <li><strong>Crate Familiarization (5 Days Prior):</strong> We deliver the travel crate to your Ranchi home early. Keep the door open, place their favorite blanket and treats inside, and allow your pet to explore and nap inside voluntarily.</li>
    <li><strong>Scent Comfort:</strong> Place an unwashed t-shirt carrying your personal scent inside the crate to provide reassuring familiar aroma during transit.</li>
    <li><strong>Pre-Travel Fasting:</strong> Avoid feeding heavy meals 4 to 6 hours before departure to prevent motion sickness and vomiting, though fresh water should always remain available.</li>
    <li><strong>Pre-Trip Exercise:</strong> Take dogs on a vigorous, tiring walk 30 minutes before pickup so they enter the travel crate relaxed and ready to sleep.</li>
  </ul>

  <h2>Frequently Asked Questions (FAQ) - Pet Relocation</h2>
  <div class="faq-layout-pet">
    <div class="faq-item-pet">
      <div class="faq-q-pet">How does Shree Ashirwad transport pets safely from Ranchi?</div>
      <div class="faq-a-pet">We provide two safe transit methods: (1) Climate-Controlled Road Transport in dedicated, air-conditioned pet vehicles accompanied by trained animal handlers who manage scheduled exercise, hydration, and feeding breaks every 3 to 4 hours; and (2) Air Cargo Coordination via Ranchi Birsa Munda Airport (IXR) utilizing IATA-approved airline travel crates, priority live-animal booking, and destination airport pickup.</div>
    </div>
    <div class="faq-item-pet">
      <div class="faq-q-pet">What travel documentation is required for moving pets interstate from Ranchi?</div>
      <div class="faq-a-pet">Interstate pet travel in India requires: (1) Up-to-date Rabies Vaccination Certificate (administered at least 30 days prior and not older than 1 year), (2) Complete DHPPi / FVRCP vaccination record, and (3) A certified Fit-to-Travel / Fit-to-Fly Health Certificate issued by a registered veterinary doctor in Ranchi within 24 to 48 hours of departure. We assist in coordinating vet checkups and paperwork.</div>
    </div>
    <div class="faq-item-pet">
      <div class="faq-q-pet">What sizes of IATA-approved pet travel crates do you provide?</div>
      <div class="faq-a-pet">We provide IATA Live Animal Regulations (LAR) compliant fiber and composite travel crates in all sizes: Small (Cats, Pugs, Shih Tzus), Medium (Beagles, Cocker Spaniels), Large (Labradors, Golden Retrievers), and Extra-Large / Custom Timber Reinforced Crates (German Shepherds, Rottweilers, Great Danes). Crates feature 360-degree ventilation, spill-proof water bowls, and absorbent pee-pads.</div>
    </div>
    <div class="faq-item-pet">
      <div class="faq-q-pet">Can my pet travel in the same truck as my household furniture?</div>
      <div class="faq-a-pet">No! Under no circumstances do we ever place live animals inside closed cargo containers with household goods. Closed cargo trucks lack adequate ventilation, climate control, and human supervision, posing fatal risks of heatstroke and asphyxiation. Pets always travel in dedicated, air-conditioned passenger pet cabs or through verified commercial airline live-animal cargo.</div>
    </div>
    <div class="faq-item-pet">
      <div class="faq-q-pet">How do you manage meals, hydration, and bathroom breaks during long road trips?</div>
      <div class="faq-a-pet">During road transit, our dedicated pet handlers stop every 3 to 4 hours at safe, clean highway resting areas. Dogs are leashed for gentle walking and bathroom relief. Fresh bottled mineral water is provided continuously, and meals are served strictly according to the customized feeding schedule provided by you.</div>
    </div>
  </div>

  <!-- Call to Action Banner -->
  <div class="cta-banner-pet">
    <h3>Relocating with Pets? Give Your Furry Family Member a First-Class Move!</h3>
    <p>Schedule a pet travel assessment with our animal care specialists in Ranchi. Climate-controlled cabs, IATA crates, and compassionate door-to-door transit.</p>
    <a href="tel:+918409531615" class="cta-btn-gold">📞 Pet Relocation Desk: +91 8409531615</a>
    <p style="font-size: 0.9rem; margin-top: 15px; color: #e9d8a6;">Headquarters: Anandpuri Chowk, Vidyanagar Road, Harmu, Ranchi - 834001</p>
  </div>

  <!-- Cluster Internal Linking Grid -->
  <div class="cluster-box-pet">
    <h3 style="margin-top:0;">Related Relocation Services & Regional Highway Routes</h3>
    <p style="font-size: 0.95rem; color: #64748b;">Explore connected moving services, rate charts, and regional corridors from Ranchi:</p>
    <div class="cluster-grid-pet">
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-in-ranchi-jharkhand" class="cluster-link-pet">📍 Ranchi Main Hub & City HQ</a>
      <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" class="cluster-link-pet">💰 Ranchi Relocation Tariff Chart</a>
      <a href="<?php echo SITE_BASE_URL; ?>/complete-guide-to-house-shifting-in-ranchi" class="cluster-link-pet">📖 Complete Ranchi Shifting Guide</a>
      <a href="<?php echo SITE_BASE_URL; ?>/household-shifting-services-in-ranchi" class="cluster-link-pet">🏠 Household Shifting Ranchi</a>
      <a href="<?php echo SITE_BASE_URL; ?>/senior-citizen-assisted-relocation-in-ranchi" class="cluster-link-pet">🌿 Senior Citizen Assisted Moving</a>
      <a href="<?php echo SITE_BASE_URL; ?>/same-day-express-packers-and-movers-in-ranchi" class="cluster-link-pet">⚡ Same Day Express Shifting</a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-bangalore-packers-and-movers" class="cluster-link-pet">🛣️ Ranchi to Bangalore Movers</a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-pune-packers-and-movers" class="cluster-link-pet">🛣️ Ranchi to Pune Movers</a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-mumbai-packers-and-movers" class="cluster-link-pet">🛣️ Ranchi to Mumbai Movers</a>
      <a href="<?php echo SITE_BASE_URL; ?>/ranchi-to-delhi-packers-and-movers" class="cluster-link-pet">🛣️ Ranchi to Delhi Movers</a>
      <a href="<?php echo SITE_BASE_URL; ?>/car-transport-in-ranchi" class="cluster-link-pet">🚗 Car Carrier Services Ranchi</a>
      <a href="<?php echo SITE_BASE_URL; ?>/bike-transport-in-ranchi" class="cluster-link-pet">🏍️ Bike Transport in Ranchi</a>
    </div>
  </div>

</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

</body>
</html>
