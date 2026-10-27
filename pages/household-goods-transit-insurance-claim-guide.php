<?php
/**
 * Page: Household Goods Transit Insurance Claim Guide
 * Focus: Complete Guide on Moving Insurance, All-Risk vs Transit-Only, Claim Filing Protocol, Surveyor Assessment & Settlement
 */
if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__));
}
require_once BASE_PATH . '/includes/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Household Goods Transit Insurance Claim Guide | Step-by-Step Settlement Process</title>
    <meta name="description" content="Complete guide to household goods transit insurance claims in India. All-risk vs transit-only coverage, 3% premium rules, damage reporting timeline, surveyor inspection &amp; fast settlement.">
    <meta name="keywords" content="household goods transit insurance claim guide, packers and movers insurance claim, transit insurance for household goods, all risk moving insurance, shifting damage compensation process, moving insurance surveyor inspection">
    <link rel="canonical" href="<?php echo SITE_BASE_URL; ?>/household-goods-transit-insurance-claim-guide">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- Schema 1: MovingCompany -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers Insurance & Claims Desk",
        "image": "<?php echo SITE_BASE_URL; ?>/assets/images/logo.png",
        "@id": "<?php echo SITE_BASE_URL; ?>/household-goods-transit-insurance-claim-guide#movingcompany",
        "url": "<?php echo SITE_BASE_URL; ?>/household-goods-transit-insurance-claim-guide",
        "telephone": "+918409531615",
        "priceRange": "₹3,500 - ₹65,000",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Harmu Road, Near Sahajanand Chowk",
            "addressLocality": "Ranchi",
            "addressRegion": "Jharkhand",
            "postalCode": "834002",
            "addressCountry": "IN"
        },
        "geo": {
            "@type": "GeoCoordinates",
            "latitude": 23.3441,
            "longitude": 85.3096
        },
        "openingHoursSpecification": {
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"],
            "opens": "07:00",
            "closes": "22:00"
        },
        "areaServed": {
            "@type": "Country",
            "name": "India"
        },
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://twitter.com/ashirwadpackers"
        ]
    }
    </script>

    <!-- Schema 2: BreadcrumbList -->
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
                "name": "Moving & Relocation Guides",
                "item": "<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi"
            },
            {
                "@type": "ListItem",
                "position": 3,
                "name": "Transit Insurance Claim Guide",
                "item": "<?php echo SITE_BASE_URL; ?>/household-goods-transit-insurance-claim-guide"
            }
        ]
    }
    </script>

    <!-- Schema 3: Service -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Transit Insurance & Claims Assistance Services",
        "provider": {
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers"
        },
        "areaServed": {
            "@type": "Country",
            "name": "India"
        },
        "hasOfferCatalog": {
            "@type": "OfferCatalog",
            "name": "Transit Insurance Protection Solutions",
            "itemListElement": [
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "All-Risk Comprehensive Household Goods Transit Insurance (3% Valuation)"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Transit-Only Total Loss & Collision Insurance (1.5% Valuation)"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Fast-Track Claim Assistance & Insurance Surveyor Coordination"
                    }
                },
                {
                    "@type": "Offer",
                    "itemOffered": {
                        "@type": "Service",
                        "name": "Vehicle Transit Condition Inspection & Damage Settlement"
                    }
                }
            ]
        }
    }
    </script>

    <!-- Schema 4: FAQPage -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What is the difference between All-Risk Insurance and Transit-Only Insurance?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "All-Risk Transit Insurance (typically 3% of declared value) covers loss and damage caused by accidental handling, loading, unloading, jerks, transit collisions, overturn, fire, and water ingress. Transit-Only Insurance (typically 1.5% of declared value) is much narrower; it only covers loss or total damage occurring while the vehicle is in motion due to highway collisions, vehicle overturn, or vehicular fire, excluding handling damage during loading and unloading."
                }
            },
            {
                "@type": "Question",
                "name": "What is the critical first step if goods arrive damaged at my destination?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The absolute most critical step is to immediately endorse the damage on the physical Lorry Receipt (LR Bilty) or Delivery Acknowledgment copy before the truck driver leaves your premises. Note clearly: 'Received in damaged condition subject to insurance inspection - Carton #X broken / Washing machine dented', and have the driver sign. Signing a clean acknowledgment forfeits your legal right to file an insurance claim."
                }
            },
            {
                "@type": "Question",
                "name": "What is the deadline for filing a transit insurance claim after delivery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Insurance underwriters strictly mandate that initial written notice of loss or damage must be submitted within 24 to 48 hours of physical delivery. Submitting claims weeks later or discarding damaged packaging before a surveyor inspects the cargo results in immediate claim repudiation."
                }
            },
            {
                "@type": "Question",
                "name": "Which documents must be submitted to the insurance surveyor?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Your claim package must contain: 1) Original Marine Transit Insurance Policy Certificate; 2) Consignment Note (LR Bilty) with delivery damage endorsement; 3) Itemized Packing Inventory List matching box numbers; 4) High-resolution date-stamped photos/videos of damaged goods and original packaging; 5) Official repair estimate or original purchase invoice; and 6) Filled and signed Claim Form with bank details."
                }
            },
            {
                "@type": "Question",
                "name": "How is depreciation calculated on damaged electronic appliances or furniture?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Insurance surveyors apply standard IRDAI depreciation schedules based on the age of the asset: roughly 10% for items under 1 year old; 20% for 1-2 years; 30% for 2-3 years; and up to 50% for items over 5 years. For repairable goods, insurance reimburses the full certified technician repair bill minus a nominal policy deductible."
                }
            },
            {
                "@type": "Question",
                "name": "Does transit insurance cover jewelry, currency, or important personal documents?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "No. Under standard marine cargo transit insurance clauses across India, high-value bullion, gold/diamond jewelry, cash currency, stamps, share certificates, passports, and personal legal deeds are strictly excluded from coverage. Customers must carry cash, jewelry, and vital documents personally during relocation."
                }
            }
        ]
    }
    </script>

    <style>
        .ticg-wrap {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            color: #1e293b;
            line-height: 1.65;
            background-color: #ffffff;
        }
        .ticg-hero {
            background: linear-gradient(135deg, #1e3a8a 0%, #172554 50%, #0f172a 100%);
            color: #ffffff;
            padding: 64px 20px 54px;
            text-align: center;
        }
        .ticg-hero h1 {
            font-size: 2.35rem;
            font-weight: 800;
            line-height: 1.25;
            max-width: 960px;
            margin: 0 auto 16px;
            color: #ffffff;
        }
        .ticg-hero p {
            font-size: 1.15rem;
            max-width: 860px;
            margin: 0 auto 24px;
            color: #bfdbfe;
        }
        .ticg-badge-row {
            display: flex;
            justify-content: center;
            gap: 12px;
            flex-wrap: wrap;
            margin-bottom: 28px;
        }
        .ticg-badge {
            background: rgba(255, 255, 255, 0.16);
            border: 1px solid rgba(255, 255, 255, 0.32);
            padding: 6px 16px;
            border-radius: 9999px;
            font-size: 0.88rem;
            font-weight: 600;
            color: #eff6ff;
        }
        .ticg-btn-row {
            display: flex;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
        }
        .ticg-btn-call {
            background: #f97316;
            color: #ffffff;
            font-weight: 700;
            padding: 14px 28px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-block;
        }
        .ticg-btn-call:hover {
            background: #ea580c;
            transform: translateY(-2px);
        }
        .ticg-btn-whatsapp {
            background: #2563eb;
            color: #ffffff;
            font-weight: 700;
            padding: 14px 28px;
            border-radius: 8px;
            text-decoration: none;
            transition: all 0.2s ease;
            display: inline-block;
        }
        .ticg-btn-whatsapp:hover {
            background: #1d4ed8;
            transform: translateY(-2px);
        }
        .ticg-section {
            max-width: 1160px;
            margin: 0 auto;
            padding: 50px 20px;
        }
        .ticg-section-heading {
            font-size: 1.9rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 12px;
            border-left: 5px solid #2563eb;
            padding-left: 14px;
        }
        .ticg-subtext {
            color: #64748b;
            font-size: 1.05rem;
            margin-bottom: 26px;
        }
        .ticg-img-container {
            max-width: 580px;
            margin: 24px auto;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 14px rgba(0,0,0,0.08);
        }
        .ticg-img-container img {
            width: 100%;
            height: auto;
            display: block;
        }
        .ticg-grid-2 {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
            gap: 24px;
            margin: 28px 0;
        }
        .ticg-card {
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 24px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .ticg-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(0,0,0,0.08);
            border-color: #93c5fd;
        }
        .ticg-card h3 {
            font-size: 1.25rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 12px;
        }
        .ticg-card p {
            color: #475569;
            font-size: 0.96rem;
            margin-bottom: 12px;
        }
        .ticg-card ul {
            margin: 0;
            padding-left: 20px;
            color: #334155;
            font-size: 0.92rem;
        }
        .ticg-card ul li {
            margin-bottom: 8px;
        }
        .ticg-highlight-box {
            background: #eff6ff;
            border-left: 4px solid #2563eb;
            border-radius: 0 8px 8px 0;
            padding: 20px;
            margin: 28px 0;
        }
        .ticg-highlight-box h4 {
            font-size: 1.15rem;
            font-weight: 700;
            color: #1e3a8a;
            margin-bottom: 8px;
        }
        .ticg-highlight-box p {
            font-size: 0.96rem;
            color: #1e40af;
            margin-bottom: 0;
        }
        .ticg-table-wrapper {
            overflow-x: auto;
            margin: 28px 0;
            border-radius: 10px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 2px 8px rgba(0,0,0,0.04);
        }
        .ticg-table {
            width: 100%;
            border-collapse: collapse;
            font-size: 0.95rem;
            text-align: left;
        }
        .ticg-table th {
            background: #1e3a8a;
            color: #ffffff;
            padding: 14px 18px;
            font-weight: 700;
        }
        .ticg-table td {
            padding: 14px 18px;
            border-bottom: 1px solid #e2e8f0;
            color: #334155;
        }
        .ticg-table tr:nth-child(even) td {
            background: #f8fafc;
        }
        .ticg-step-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 16px;
            margin: 28px 0;
        }
        .ticg-step-card {
            background: #f8fafc;
            border: 1px solid #cbd5e1;
            border-radius: 10px;
            padding: 20px 16px;
            text-align: center;
        }
        .ticg-step-number {
            display: inline-block;
            width: 38px;
            height: 38px;
            line-height: 38px;
            background: #2563eb;
            color: #ffffff;
            font-weight: 800;
            border-radius: 50%;
            margin-bottom: 12px;
            font-size: 1rem;
        }
        .ticg-step-card h4 {
            font-size: 1.05rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 8px;
        }
        .ticg-step-card p {
            font-size: 0.88rem;
            color: #64748b;
            margin-bottom: 0;
        }
        .ticg-faq-item {
            border-bottom: 1px solid #bfdbfe;
            padding: 20px 0;
        }
        .ticg-faq-item h3 {
            font-size: 1.15rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 10px;
        }
        .ticg-faq-item p {
            color: #475569;
            font-size: 0.98rem;
            margin-bottom: 0;
        }
        .ticg-cluster-module {
            background: #eff6ff;
            border: 1px solid #bfdbfe;
            border-radius: 12px;
            padding: 28px;
            margin: 40px 0 20px;
        }
        .ticg-cluster-module h3 {
            font-size: 1.3rem;
            font-weight: 800;
            color: #0f172a;
            margin-bottom: 16px;
        }
        .ticg-cluster-links {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 12px;
        }
        .ticg-cluster-links a {
            display: block;
            padding: 10px 14px;
            background: #ffffff;
            border: 1px solid #93c5fd;
            border-radius: 6px;
            color: #1e3a8a;
            text-decoration: none;
            font-weight: 600;
            font-size: 0.92rem;
            transition: all 0.2s ease;
        }
        .ticg-cluster-links a:hover {
            border-color: #2563eb;
            color: #2563eb;
            background: #dbeafe;
            transform: translateX(3px);
        }
        .ticg-cta-banner {
            background: linear-gradient(135deg, #1e3a8a 0%, #0f172a 100%);
            border-radius: 14px;
            padding: 40px 24px;
            text-align: center;
            color: #ffffff;
            margin: 50px 0 20px;
        }
        .ticg-cta-banner h2 {
            font-size: 1.8rem;
            font-weight: 800;
            margin-bottom: 12px;
            color: #ffffff;
        }
        .ticg-cta-banner p {
            color: #bfdbfe;
            font-size: 1.05rem;
            max-width: 720px;
            margin: 0 auto 24px;
        }
        @media (max-width: 768px) {
            .ticg-hero h1 { font-size: 1.85rem; }
            .ticg-hero { padding: 50px 16px 40px; }
            .ticg-section { padding: 36px 16px; }
            .ticg-section-heading { font-size: 1.45rem; }
            .ticg-step-container { grid-template-columns: 1fr; }
        }
    </style>
</head>
<body class="ticg-wrap">
    <?php include BASE_PATH . '/includes/header.php'; ?>

    <!-- Hero Section -->
    <section class="ticg-hero">
        <div class="ticg-badge-row">
            <span class="ticg-badge">Official Insurance Claims Guide</span>
            <span class="ticg-badge">All-Risk vs Transit-Only Explained</span>
            <span class="ticg-badge">Fast-Track Surveyor Protocol</span>
            <span class="ticg-badge">100% Legally Audited Settlements</span>
        </div>
        <h1>Household Goods Transit Insurance Claim Guide (Step-by-Step Settlement)</h1>
        <p>A definitive consumer guide to claiming transit insurance compensation for damaged or lost household goods during relocation in India. Understand the vital differences between 3% All-Risk and 1.5% Transit-Only policies, learn the 24-hour reporting mandate, surveyor inspection procedures, and document checklists.</p>
        <div class="ticg-btn-row">
            <a href="tel:+918409531615" class="ticg-btn-call">Call Claims Desk: 8409531615</a>
            <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20need%20help%20filing%20a%20transit%20insurance%20claim" class="ticg-btn-whatsapp" target="_blank" rel="noopener">WhatsApp Claims Helpdesk</a>
        </div>
    </section>

    <!-- Main Container -->
    <main class="ticg-section">
        <!-- Section 1: Overview and Core Principles -->
        <div class="ticg-highlight-box">
            <h4>Protecting Your Financial Interests During Unforeseen Highway Incidents</h4>
            <p>Even with the most rigorous 5-ply packaging, specialized bubble cushioning, and experienced loading crews, intercity highway transit carries inherent external hazards: sudden vehicle collisions, emergency braking impacts, severe monsoon flooding, or road transit jolts. Having an authentic, underwritten transit insurance policy provides vital peace of mind. However, navigating the claims process when an item arrives damaged requires strict adherence to statutory insurance protocols. Shree Ashirwad Packers and Movers guides you through every step to ensure swift, fair settlement from leading national insurance underwriters.</p>
        </div>

        <h2 class="ticg-section-heading">Understanding Transit Insurance: All-Risk vs Transit-Only Policy</h2>
        <p>Before moving, understanding what your insurance policy covers is essential to avoid shock during a claim:</p>

        <p><strong>1. All-Risk Comprehensive Insurance (3% of Declared Value):</strong> This is the premier coverage tier for household shifting. It covers physical loss or damage caused by accidental handling, loading, transit vibrations, road bumps, accidental vehicle overturn, fire, and water ingress. If an LED TV screen cracks, a wooden dining table suffers a deep gouge, or a carton of chinaware breaks, an All-Risk policy compensates you for repair or replacement value minus a standard deductible.</p>

        <div class="ticg-img-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/door-to-door-delivery-truck-jharkhand.jpg" alt="Door to door delivery truck for insured safe household shifting across India" width="580" height="386" loading="lazy">
        </div>

        <p><strong>2. Transit-Only / Road Hazard Insurance (1.5% of Declared Value):</strong> This is a budget-tier policy with much narrower coverage. It <strong>only</strong> covers total loss or catastrophic destruction occurring while the vehicle is in motion due to highway collisions, vehicular fire, vehicle overturn, or acts of God (force majeure). It strictly <strong>excludes</strong> handling damages, scratches, chipped edges, or localized breakages during loading, unloading, or transit stops.</p>

        <!-- Section 2: Comparative Insurance Matrix -->
        <h2 class="ticg-section-heading">Comparative Coverage Matrix: All-Risk vs Transit-Only</h2>
        <p class="ticg-subtext">Review the scope of coverage, premium rates, and typical exclusions across standard moving insurance policies in India:</p>

        <div class="ticg-table-wrapper">
            <table class="ticg-table">
                <thead>
                    <tr>
                        <th>Damage / Incident Scenario</th>
                        <th>All-Risk Comprehensive Policy (3% Premium)</th>
                        <th>Transit-Only Policy (1.5% Premium)</th>
                        <th>Claim Admissibility</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Glassware / Crockery broken in box</strong></td>
                        <td>Covered (if professionally packed by mover)</td>
                        <td>Excluded</td>
                        <td>Admissible only under All-Risk coverage</td>
                    </tr>
                    <tr>
                        <td><strong>LED TV / Washing Machine dented or cracked</strong></td>
                        <td>Covered (repair or depreciated replacement)</td>
                        <td>Excluded</td>
                        <td>Requires surveyor verification and technician estimate</td>
                    </tr>
                    <tr>
                        <td><strong>Highway Truck Overturn / Collision</strong></td>
                        <td>100% Fully Covered</td>
                        <td>100% Fully Covered</td>
                        <td>Admissible under both policies with police FIR</td>
                    </tr>
                    <tr>
                        <td><strong>Container Fire or Lightning Strike</strong></td>
                        <td>100% Fully Covered</td>
                        <td>100% Fully Covered</td>
                        <td>Admissible under both policies with surveyor audit</td>
                    </tr>
                    <tr>
                        <td><strong>Water Damage from Heavy Monsoon Rain</strong></td>
                        <td>Covered (if container develops roof breach)</td>
                        <td>Excluded (unless truck overturns in water)</td>
                        <td>Admissible under All-Risk policy</td>
                    </tr>
                    <tr>
                        <td><strong>Jewelry, Cash, Passports &amp; Gold</strong></td>
                        <td>Permanently Excluded by Law</td>
                        <td>Permanently Excluded by Law</td>
                        <td>Zero reimbursement; must be carried personally</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="ticg-highlight-box">
            <h4>The #1 Mistake: Signing a Clean Delivery Acknowledgment</h4>
            <p>The single most catastrophic mistake consumers make is signing the driver's delivery receipt without inspecting their belongings. If you sign a receipt stating "Received all goods in good condition without damage", the insurance underwriter will instantly reject your claim on the grounds of "clean discharge". <strong>Always inspect exterior carton conditions before signing</strong>, and endorse any visible damage explicitly on the physical LR Bilty before the delivery team departs.</p>
        </div>

        <div class="ticg-img-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Weatherproof container truck for insured intercity relocation with complete claim protection" width="580" height="386" loading="lazy">
        </div>

        <!-- Section 3: The 6-Step Claim Settlement Protocol -->
        <h2 class="ticg-section-heading">The Step-by-Step Claim Settlement Protocol</h2>
        <p>If an unfortunate transit damage or loss incident occurs, follow this strict 6-step protocol to secure fast, full settlement:</p>

        <div class="ticg-step-container">
            <div class="ticg-step-card">
                <div class="ticg-step-number">01</div>
                <h4>Endorse the LR Bilty</h4>
                <p>Note damaged or missing cartons directly on the delivery copy: "Carton #24 crushed; TV panel cracked", and obtain driver's signature.</p>
            </div>
            <div class="ticg-step-card">
                <div class="ticg-step-number">02</div>
                <h4>Capture Photo Evidence</h4>
                <p>Take high-resolution, timestamped photos and continuous video showing the damaged item, box labels, and packing materials.</p>
            </div>
            <div class="ticg-step-card">
                <div class="ticg-step-number">03</div>
                <h4>Notify Within 24-48 Hours</h4>
                <p>Submit formal written notice via email to the moving company and insurance company claims desk within the 48-hour statutory window.</p>
            </div>
            <div class="ticg-step-card">
                <div class="ticg-step-number">04</div>
                <h4>Surveyor Inspection</h4>
                <p>An authorized IRDAI surveyor inspects the items physically or via digital video call. Do not discard boxes before inspection.</p>
            </div>
            <div class="ticg-step-card">
                <div class="ticg-step-number">05</div>
                <h4>Submit Claim Dossier</h4>
                <p>Submit the filled claim form, original policy, LR Bilty, repair quotation from an authorized service center, and bank details.</p>
            </div>
        </div>

        <div class="ticg-img-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/bubble-wrap-household-cartons-jharkhand.jpg" alt="High density bubble wrap and corrugated carton packaging inspected for transit insurance claims" width="580" height="386" loading="lazy">
        </div>

        <!-- Section 4: Mandatory Documents for Claim Approval -->
        <h2 class="ticg-section-heading">Checklist: Required Documents for Claim Settlement</h2>
        <p>Insurance surveyors require a complete documentary dossier before approving financial disbursement:</p>

        <div class="ticg-grid-2">
            <div class="ticg-card">
                <h3>Primary Carriage Documents</h3>
                <p>Documents proving legal road transit and custody:</p>
                <ul>
                    <li>Original Marine Cargo Transit Insurance Policy Certificate with policy number.</li>
                    <li>Consignment Note / Lorry Receipt (LR Bilty) with written delivery damage endorsement.</li>
                    <li>Official GST Tax Invoice from the moving company with SAC Code 9987.</li>
                    <li>Insurance premium receipt showing 18% GST charged under SAC Code 9971.</li>
                </ul>
            </div>

            <div class="ticg-card">
                <h3>Asset &amp; Damage Proof</h3>
                <p>Evidence quantifying the exact financial loss:</p>
                <ul>
                    <li>Itemized Packing List / Inventory Manifest identifying the specific damaged carton number.</li>
                    <li>High-resolution date-stamped photographs and unboxing video footage.</li>
                    <li>Official repair estimate from an authorized brand technician (for repairable electronics).</li>
                    <li>Original purchase invoice or current market replacement value estimate.</li>
                </ul>
            </div>
            <div class="ticg-card">
                <h3>Surveyor Evaluation Standards</h3>
                <p>How the insurance assessor evaluates your loss:</p>
                <ul>
                    <li>Physical verification of impact marks, packaging puncture points, and handling stress cracks.</li>
                    <li>Technical assessment of repair viability vs total economic loss replacement.</li>
                    <li>Cross-referencing declared inventory value on the consignment manifest against original invoice proofs.</li>
                    <li>Preparation of the formal IRDAI Surveyor Survey Report within 7 working days.</li>
                </ul>
            </div>
            <div class="ticg-card">
                <h3>Disbursement &amp; Depreciation Rules</h3>
                <p>Understanding the final payout structure:</p>
                <ul>
                    <li>Settlement is processed directly to the policyholder's bank account via NEFT/RTGS transfer.</li>
                    <li>IRDAI depreciation schedule applies to age of asset (10% to 50% based on years of use).</li>
                    <li>Standard policy deductible / excess clause (typically Rs. 1,000 to Rs. 2,500) is deducted from total payout.</li>
                    <li>Salvage retention option allows policyholders to keep damaged items with minor deductions.</li>
                </ul>
            </div>
        </div>

        <p>To verify proper billing protocols for insurance reimbursement, check our guide on <a href="<?php echo SITE_BASE_URL; ?>/iba-approved-packers-and-movers-bill-format" style="color: #1e3a8a; font-weight: 700; text-decoration: underline;">IBA Approved Packers and Movers Bill Formats</a>, explore our guide on <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-gst-rate" style="color: #1e3a8a; font-weight: 700; text-decoration: underline;">Packers and Movers GST Rates (18% vs 5%)</a>, and calculate relocation costs with our <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-in-ranchi" style="color: #1e3a8a; font-weight: 700; text-decoration: underline;">live moving rate calculator</a>.</p>

        <div class="ticg-img-container">
            <img src="<?php echo SITE_BASE_URL; ?>/images/sofa-furniture-protective-packing-ranchi.jpg" alt="Sofa furniture protective wrapping and edge padding with full transit insurance protection" width="580" height="386" loading="lazy">
        </div>

        <!-- Section 5: Why Choose Shree Ashirwad for Insured Moving -->
        <h2 class="ticg-section-heading">Why Choose Shree Ashirwad for 100% Insured Relocations</h2>
        <p>Discover the core advantages that make our transit protection the most reliable across India:</p>

        <div class="ticg-grid-2">
            <div class="ticg-card">
                <h3>National Underwriter Partnerships</h3>
                <p>We issue genuine, digital insurance policies backed by leading national insurance companies (such as Oriental Insurance, United India, and New India Assurance), guaranteeing financial solvency.</p>
            </div>
            <div class="ticg-card">
                <h3>Fast-Track Claims Coordination</h3>
                <p>Our dedicated corporate claims desk assists you directly through the surveyor appointment, documentation submission, and fast-track claim settlement, eliminating bureaucratic delays.</p>
            </div>
            <div class="ticg-card">
                <h3>Zero Hidden Clauses</h3>
                <p>We clearly explain policy terms, deductibles, and depreciation schedules in advance. You receive a formal policy certificate with policy numbers before the container vehicle departs.</p>
            </div>
            <div class="ticg-card">
                <h3>Trained In-House Packaging Crews</h3>
                <p>Insurance claims require proof that goods were professionally packed. Our full-time certified crews use 4-layer virgin packaging materials, satisfying all insurance packaging covenants.</p>
            </div>
        </div>

        <!-- Section 6: FAQs -->
        <h2 class="ticg-section-heading">Frequently Asked Questions: Transit Insurance Claims</h2>
        <div class="ticg-faq-item">
            <h3>What is the difference between All-Risk Insurance and Transit-Only Insurance?</h3>
            <p>All-Risk Transit Insurance (typically 3% of declared value) covers loss and damage caused by accidental handling, loading, unloading, jerks, transit collisions, overturn, fire, and water ingress. Transit-Only Insurance (typically 1.5% of declared value) is much narrower; it only covers loss or total damage occurring while the vehicle is in motion due to highway collisions, vehicle overturn, or vehicular fire, excluding handling damage during loading and unloading.</p>
        </div>
        <div class="ticg-faq-item">
            <h3>What is the critical first step if goods arrive damaged at my destination?</h3>
            <p>The absolute most critical step is to immediately endorse the damage on the physical Lorry Receipt (LR Bilty) or Delivery Acknowledgment copy before the truck driver leaves your premises. Note clearly: 'Received in damaged condition subject to insurance inspection - Carton #X broken / Washing machine dented', and have the driver sign. Signing a clean acknowledgment forfeits your legal right to file an insurance claim.</p>
        </div>
        <div class="ticg-faq-item">
            <h3>What is the deadline for filing a transit insurance claim after delivery?</h3>
            <p>Insurance underwriters strictly mandate that initial written notice of loss or damage must be submitted within 24 to 48 hours of physical delivery. Submitting claims weeks later or discarding damaged packaging before a surveyor inspects the cargo results in immediate claim repudiation.</p>
        </div>
        <div class="ticg-faq-item">
            <h3>Which documents must be submitted to the insurance surveyor?</h3>
            <p>Your claim package must contain: 1) Original Marine Transit Insurance Policy Certificate; 2) Consignment Note (LR Bilty) with delivery damage endorsement; 3) Itemized Packing Inventory List matching box numbers; 4) High-resolution date-stamped photos/videos of damaged goods and original packaging; 5) Official repair estimate or original purchase invoice; and 6) Filled and signed Claim Form with bank details.</p>
        </div>
        <div class="ticg-faq-item">
            <h3>How is depreciation calculated on damaged electronic appliances or furniture?</h3>
            <p>Insurance surveyors apply standard IRDAI depreciation schedules based on the age of the asset: roughly 10% for items under 1 year old; 20% for 1-2 years; 30% for 2-3 years; and up to 50% for items over 5 years. For repairable goods, insurance reimburses the full certified technician repair bill minus a nominal policy deductible.</p>
        </div>
        <div class="ticg-faq-item">
            <h3>Does transit insurance cover jewelry, currency, or important personal documents?</h3>
            <p>No. Under standard marine cargo transit insurance clauses across India, high-value bullion, gold/diamond jewelry, cash currency, stamps, share certificates, passports, and personal legal deeds are strictly excluded from coverage. Customers must carry cash, jewelry, and vital documents personally during relocation.</p>
        </div>

        <!-- Section 7: Connected Cluster Module -->
        <div class="ticg-cluster-module">
            <h3>Explore Essential Moving Tariff &amp; Billing Guides</h3>
            <p style="color: #64748b; font-size: 0.95rem; margin-bottom: 16px;">Access our comprehensive knowledge base of relocation rate cards, billing documentation, and claim guides:</p>
            <div class="ticg-cluster-links">
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-gst-rate">Packers and Movers GST Rate Guide</a>
                <a href="<?php echo SITE_BASE_URL; ?>/iba-approved-packers-and-movers-bill-format">IBA Approved Bill Format Guide</a>
                <a href="<?php echo SITE_BASE_URL; ?>/how-to-calculate-packers-and-movers-charges">How to Calculate Moving Charges</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packing-material-box-cost-guide">Packing Material &amp; Box Cost Guide</a>
                <a href="<?php echo SITE_BASE_URL; ?>/packers-and-movers-charges-per-km">Packers and Movers Charges Per KM</a>
                <a href="<?php echo SITE_BASE_URL; ?>/single-item-furniture-shifting-service">Single Item Shifting Services</a>
                <a href="<?php echo SITE_BASE_URL; ?>/household-goods-storage-and-warehousing">Household Storage &amp; Warehousing</a>
                <a href="<?php echo SITE_BASE_URL; ?>/">Shree Ashirwad Central Company Headquarters</a>
            </div>
        </div>

        <!-- Section 8: CTA Banner -->
        <div class="ticg-cta-banner">
            <h2>Book 100% Insured Shifting with Complete Peace of Mind</h2>
            <p>Protect your household assets with genuine underwritten marine transit insurance from leading national insurance companies. Contact Shree Ashirwad Packers and Movers today for a free quote.</p>
            <div class="ticg-btn-row">
                <a href="tel:+918409531615" class="ticg-btn-call">Call Claims Desk: 8409531615</a>
                <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad,%20I%20want%20insured%20moving%20services" class="ticg-btn-whatsapp" target="_blank" rel="noopener">WhatsApp Insurance Desk</a>
            </div>
        </div>
    </main>

    <?php include BASE_PATH . '/includes/footer.php'; ?>
</body>
</html>
