<?php
/**
 * Pay Online Page - Shree Ashirwad Packers and Movers
 * Official Bank Transfer & Digital Payment Portal
 * 
 * Preserving exact canonical URL: https://www.shreeashirwadpackers.com/pay-online
 */

require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/seo.php';

$page_title = "Pay Online - Shree Ashirwad Packers and Movers - 8409531615";
$meta_description = "Pay your moving invoice online securely with Shree Ashirwad Packers & Movers. Official Axis Bank Upper Bazaar Ranchi account details: 921020039005609, IFSC: UTIB0004102.";
$canonical_url = "https://www.shreeashirwadpackers.com/pay-online";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <!-- SEO Meta Tags -->
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="<?php echo $meta_description; ?>">
  <meta name="keywords" content="pay online shree ashirwad packers, packers and movers bank transfer, axis bank payment packers and movers, moving invoice payment ranchi, shree ashirwad packers account details, upi payment packers and movers">
  <link rel="canonical" href="<?php echo $canonical_url; ?>">
  <meta name="robots" content="index, follow">

  <!-- Open Graph / Social Media -->
  <meta property="og:locale" content="en_IN">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?php echo $page_title; ?>">
  <meta property="og:description" content="<?php echo $meta_description; ?>">
  <meta property="og:url" content="<?php echo $canonical_url; ?>">
  <meta property="og:site_name" content="<?php echo BUSINESS_NAME; ?>">
  <meta property="og:image" content="<?php echo SITE_BASE_URL; ?>/assets/images/logo.png">

  <!-- Fonts & Icons -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Outfit:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <!-- Core Stylesheet -->
  <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

  <!-- Schema.org JSON-LD -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "MovingCompany",
        "@id": "https://www.shreeashirwadpackers.com/#movingcompany",
        "name": "<?php echo BUSINESS_NAME; ?>",
        "url": "https://www.shreeashirwadpackers.com/",
        "logo": "https://www.shreeashirwadpackers.com/assets/images/logo.png",
        "telephone": "+91-8409531615",
        "priceRange": "₹₹",
        "address": {
          "@type": "PostalAddress",
          "streetAddress": "<?php echo RANCHI_HQ_STREET; ?>",
          "addressLocality": "<?php echo RANCHI_HQ_CITY; ?>",
          "addressRegion": "<?php echo RANCHI_HQ_STATE; ?>",
          "postalCode": "<?php echo RANCHI_HQ_PINCODE; ?>",
          "addressCountry": "IN"
        },
        "paymentAccepted": "Cash, Credit Card, Bank Transfer, NEFT, RTGS, IMPS, UPI"
      },
      {
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
            "name": "Pay Online",
            "item": "https://www.shreeashirwadpackers.com/pay-online"
          }
        ]
      },
      {
        "@type": "FAQPage",
        "mainEntity": [
          {
            "@type": "Question",
            "name": "What are the official bank details for paying Shree Ashirwad Packers and Movers?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "The official current account details are: Bank: Axis Bank, Upper Bazaar, Ranchi. Account Holder: Shree Ashirwad Packers & Movers. Account Number: 921020039005609. IFSC Code: UTIB0004102."
            }
          },
          {
            "@type": "Question",
            "name": "What payment methods are accepted for shifting services?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "We accept Direct Bank Transfer (NEFT, RTGS, IMPS), UPI (Google Pay, PhonePe, Paytm, BHIM), Net Banking, and Cheques for corporate contracts."
            }
          },
          {
            "@type": "Question",
            "name": "How do I receive payment confirmation after transferring funds?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Once you make the transfer, please share the transaction UTR number or screenshot on WhatsApp at 8409531615. Our accounts desk will issue an official payment receipt and update your GST invoice immediately."
            }
          },
          {
            "@type": "Question",
            "name": "Do you accept advance token payments for booking moving dates?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, an initial token advance is accepted to lock in your moving date and schedule packing crew and vehicles. The remaining balance is paid as per your agreement terms."
            }
          },
          {
            "@type": "Question",
            "name": "Are online payments covered by official GST invoices?",
            "acceptedAnswer": {
              "@type": "Answer",
              "text": "Yes, 100% of payments made to our official Axis Bank account are acknowledged with official GST-compliant tax invoices and IBA-approved consignment bills."
            }
          }
        ]
      }
    ]
  }
  </script>

  <style>
    .pay-hero {
      background: linear-gradient(135deg, #07152b 0%, #0f2b5c 50%, #163d7a 100%);
      padding: 70px 0 50px;
      color: #ffffff;
      text-align: center;
      position: relative;
    }
    .pay-hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(16, 185, 129, 0.15);
      border: 1px solid rgba(16, 185, 129, 0.4);
      color: #34d399;
      font-size: 0.85rem;
      font-weight: 700;
      padding: 6px 16px;
      border-radius: 9999px;
      margin-bottom: 18px;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .bank-card-container {
      max-width: 620px;
      margin: 0 auto;
      background: linear-gradient(135deg, #870038 0%, #9e144a 45%, #b81c5a 100%);
      border-radius: 20px;
      padding: 35px 30px;
      color: #ffffff;
      box-shadow: 0 20px 45px rgba(135, 0, 56, 0.35);
      position: relative;
      overflow: hidden;
      border: 1px solid rgba(255, 255, 255, 0.2);
    }
    .bank-card-container::before {
      content: '';
      position: absolute;
      top: -80px;
      right: -80px;
      width: 220px;
      height: 220px;
      background: rgba(255, 255, 255, 0.08);
      border-radius: 50%;
      pointer-events: none;
    }
    .bank-card-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      border-bottom: 1px solid rgba(255, 255, 255, 0.18);
      padding-bottom: 18px;
      margin-bottom: 22px;
    }
    .bank-card-chip {
      width: 46px;
      height: 34px;
      background: linear-gradient(135deg, #fef08a, #ca8a04);
      border-radius: 6px;
      position: relative;
      box-shadow: inset 0 1px 2px rgba(0,0,0,0.25);
    }
    .bank-detail-row {
      display: flex;
      justify-content: space-between;
      align-items: center;
      padding: 12px 0;
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
      flex-wrap: wrap;
      gap: 8px;
    }
    .bank-detail-label {
      font-size: 0.85rem;
      color: rgba(255, 255, 255, 0.8);
      font-weight: 500;
      text-transform: uppercase;
      letter-spacing: 0.5px;
    }
    .bank-detail-val {
      font-size: 1.15rem;
      font-weight: 700;
      color: #ffffff;
      font-family: 'Outfit', sans-serif;
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .btn-copy {
      background: rgba(255, 255, 255, 0.2);
      border: 1px solid rgba(255, 255, 255, 0.4);
      color: #ffffff;
      padding: 4px 10px;
      border-radius: 6px;
      font-size: 0.75rem;
      font-weight: 600;
      cursor: pointer;
      display: inline-flex;
      align-items: center;
      gap: 5px;
      transition: all 0.2s ease;
    }
    .btn-copy:hover {
      background: #ffffff;
      color: #870038;
    }
    .copy-success-tooltip {
      position: fixed;
      bottom: 24px;
      right: 24px;
      background: #10b981;
      color: #ffffff;
      padding: 12px 20px;
      border-radius: 8px;
      font-size: 0.95rem;
      font-weight: 600;
      box-shadow: 0 10px 25px rgba(0,0,0,0.2);
      display: none;
      z-index: 9999;
      animation: fadeIn 0.3s ease;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
    .payment-step-card {
      background: #ffffff;
      border-radius: 12px;
      padding: 28px;
      box-shadow: 0 4px 15px rgba(0,0,0,0.05);
      border: 1px solid #e2e8f0;
      transition: all 0.3s ease;
      height: 100%;
    }
    .payment-step-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 10px 25px rgba(0,0,0,0.08);
      border-color: #0284c7;
    }
    .step-badge {
      width: 44px;
      height: 44px;
      border-radius: 50%;
      background: #e0f2fe;
      color: #0284c7;
      font-size: 1.1rem;
      font-weight: 800;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 16px;
    }
    .payment-form-card {
      background: #ffffff;
      border-radius: 16px;
      padding: 40px;
      box-shadow: 0 10px 30px rgba(0,0,0,0.08);
      border: 1px solid #e2e8f0;
    }
    .form-group {
      margin-bottom: 20px;
    }
    .form-group label {
      display: block;
      font-size: 0.9rem;
      font-weight: 600;
      color: #1e293b;
      margin-bottom: 8px;
    }
    .form-control-custom {
      width: 100%;
      padding: 12px 16px;
      border: 1px solid #cbd5e1;
      border-radius: 8px;
      font-size: 0.98rem;
      font-family: inherit;
      color: #0f172a;
      transition: border-color 0.2s ease;
      box-sizing: border-box;
    }
    .form-control-custom:focus {
      outline: none;
      border-color: #0284c7;
      box-shadow: 0 0 0 3px rgba(2, 132, 199, 0.15);
    }
  </style>
</head>
<body class="page-template">

  <!-- Header -->
  <?php include __DIR__ . '/includes/header.php'; ?>

  <!-- 1. Hero Section -->
  <section class="pay-hero">
    <div class="container" style="max-width: 1100px; margin: 0 auto; padding: 0 20px;">
      
      <!-- Breadcrumb Trail -->
      <nav aria-label="Breadcrumb" style="margin-bottom: 20px;">
        <ul style="list-style: none; display: flex; justify-content: center; gap: 10px; margin: 0; padding: 0; font-size: 0.9rem; color: #94a3b8;">
          <li><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #cbd5e1; text-decoration: none;"><i class="fa fa-home"></i> Home</a></li>
          <li><span>/</span></li>
          <li style="color: #ffc107; font-weight: 600;">Pay Online</li>
        </ul>
      </nav>

      <div class="pay-hero-badge">
        <i class="fa-solid fa-shield-halved"></i> 100% Secure & Verified Payment Channels
      </div>
      
      <h1 style="font-family: 'Outfit', sans-serif; font-size: clamp(2rem, 4vw, 2.8rem); font-weight: 800; line-height: 1.25; margin-bottom: 16px;">
        Pay Online for Your Relocation Services
      </h1>
      
      <p style="font-size: 1.1rem; color: #cbd5e1; max-width: 780px; margin: 0 auto 30px; line-height: 1.7;">
        Safely pay your moving advance, transit freight, or final relocation invoice directly into the official corporate bank account of Shree Ashirwad Packers and Movers. We accept NEFT, RTGS, IMPS, Net Banking, and UPI transfers with immediate GST receipts.
      </p>

      <!-- Trust Badges Strip -->
      <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 24px; color: #e2e8f0; font-size: 0.9rem;">
        <div style="display: flex; align-items: center; gap: 8px;">
          <i class="fa-solid fa-building-columns" style="color: #ffc107;"></i> Official Corporate Account
        </div>
        <div style="display: flex; align-items: center; gap: 8px;">
          <i class="fa-solid fa-file-invoice-dollar" style="color: #10b981;"></i> IBA Approved & GST Compliant
        </div>
        <div style="display: flex; align-items: center; gap: 8px;">
          <i class="fa-solid fa-lock" style="color: #38bdf8;"></i> Bank Grade 256-Bit Security
        </div>
        <div style="display: flex; align-items: center; gap: 8px;">
          <i class="fa-solid fa-receipt" style="color: #a855f7;"></i> Instant Payment Acknowledgment
        </div>
      </div>
    </div>
  </section>

  <!-- 2. Main Payment Details Section -->
  <section style="padding: 70px 0; background: #f8fafc;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #0284c7; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Official Banking Information</span>
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 10px;">
          Bank Transfer Details (NEFT / RTGS / IMPS)
        </h2>
        <div style="width: 70px; height: 3px; background: #870038; margin: 15px auto;"></div>
        <p style="color: #64748b; font-size: 1.05rem; max-width: 720px; margin: 0 auto;">
          If you prefer to pay via direct bank transfer, mobile banking app, or net banking, please remit funds to the following official corporate account:
        </p>
      </div>

      <!-- Featured Bank Transfer Card -->
      <div class="bank-card-container">
        
        <div class="bank-card-header">
          <div>
            <div style="font-size: 1.4rem; font-weight: 800; font-family: 'Outfit', sans-serif; letter-spacing: 0.5px;">
              <i class="fa-solid fa-building-columns"></i> AXIS BANK
            </div>
            <div style="font-size: 0.8rem; color: rgba(255, 255, 255, 0.75); margin-top: 2px;">
              Upper Bazaar Branch, Ranchi
            </div>
          </div>
          <div class="bank-card-chip"></div>
        </div>

        <!-- Account Holder -->
        <div class="bank-detail-row">
          <div class="bank-detail-label">Account Holder Name</div>
          <div class="bank-detail-val">
            <span>Shree Ashirwad Packers & Movers</span>
            <button type="button" class="btn-copy" onclick="copyToClipboard('Shree Ashirwad Packers & Movers', 'Account Holder Name')">
              <i class="fa-regular fa-copy"></i> Copy
            </button>
          </div>
        </div>

        <!-- Account Number -->
        <div class="bank-detail-row">
          <div class="bank-detail-label">Account Number</div>
          <div class="bank-detail-val" style="font-size: 1.35rem; color: #fef08a; letter-spacing: 1px;">
            <span>921020039005609</span>
            <button type="button" class="btn-copy" onclick="copyToClipboard('921020039005609', 'Account Number')">
              <i class="fa-regular fa-copy"></i> Copy
            </button>
          </div>
        </div>

        <!-- IFSC Code -->
        <div class="bank-detail-row">
          <div class="bank-detail-label">IFSC Code</div>
          <div class="bank-detail-val" style="font-size: 1.35rem; color: #fef08a; letter-spacing: 1px;">
            <span>UTIB0004102</span>
            <button type="button" class="btn-copy" onclick="copyToClipboard('UTIB0004102', 'IFSC Code')">
              <i class="fa-regular fa-copy"></i> Copy
            </button>
          </div>
        </div>

        <!-- Account Type -->
        <div class="bank-detail-row">
          <div class="bank-detail-label">Account Type</div>
          <div class="bank-detail-val" style="font-size: 1rem;">
            Current Account (Corporate / Business)
          </div>
        </div>

        <!-- Branch Address -->
        <div class="bank-detail-row" style="border-bottom: none; padding-bottom: 0;">
          <div class="bank-detail-label">Branch Location</div>
          <div class="bank-detail-val" style="font-size: 0.95rem; font-weight: 500;">
            Upper Bazaar, Ranchi, Jharkhand
          </div>
        </div>

        <div style="margin-top: 25px; padding-top: 15px; border-top: 1px dashed rgba(255, 255, 255, 0.2); font-size: 0.8rem; color: rgba(255, 255, 255, 0.85); display: flex; align-items: center; justify-content: space-between; flex-wrap: wrap; gap: 10px;">
          <span><i class="fa-solid fa-circle-check" style="color: #34d399;"></i> Verified Official Business Account</span>
          <span>Axis Bank IFSC: UTIB0004102</span>
        </div>

      </div>

      <!-- Quick Action Buttons below card -->
      <div style="display: flex; justify-content: center; gap: 15px; margin-top: 30px; flex-wrap: wrap;">
        <a href="https://wa.me/918409531615?text=Hello%20Shree%20Ashirwad%20Packers,%20I%20have%20transferred%20the%20payment%20to%20your%20Axis%20Bank%20account.%20Please%20find%20my%20UTR%20details." target="_blank" rel="noopener noreferrer" style="background: #25d366; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);">
          <i class="fa-brands fa-whatsapp" style="font-size: 1.2rem;"></i> Share Transfer UTR on WhatsApp
        </a>
        <a href="tel:+918409531615" style="background: #0f172a; color: #ffffff; padding: 14px 28px; border-radius: 8px; font-weight: 700; text-decoration: none; display: inline-flex; align-items: center; gap: 10px; font-size: 1rem; border: 1px solid #334155;">
          <i class="fa-solid fa-phone-volume"></i> Call Accounts Helpline: 8409531615
        </a>
      </div>

    </div>
  </section>

  <!-- 3. Step-by-Step Payment Process -->
  <section style="padding: 70px 0; background: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 50px;">
        <span style="color: #0284c7; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Simple & Transparent</span>
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 10px;">
          How to Complete Your Payment in 4 Easy Steps
        </h2>
        <div style="width: 70px; height: 3px; background: #0284c7; margin: 15px auto;"></div>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); gap: 24px;">
        
        <!-- Step 1 -->
        <div class="payment-step-card">
          <div class="step-badge">01</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Confirm Amount</h3>
          <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
            Confirm your booking advance or final invoice amount with your dedicated move coordinator along with your unique quotation or LR Bilty number.
          </p>
        </div>

        <!-- Step 2 -->
        <div class="payment-step-card">
          <div class="step-badge" style="background: #fef3c7; color: #d97706;">02</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Add Beneficiary</h3>
          <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
            Add <strong>Shree Ashirwad Packers & Movers</strong> as a beneficiary in your banking app using Account No: <strong>921020039005609</strong> and IFSC: <strong>UTIB0004102</strong>.
          </p>
        </div>

        <!-- Step 3 -->
        <div class="payment-step-card">
          <div class="step-badge" style="background: #ecfdf5; color: #059669;">03</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Transfer Funds</h3>
          <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
            Initiate the payment via IMPS (instant), NEFT, RTGS, or UPI. Save or take a screenshot of the transaction reference / UTR number for your records.
          </p>
        </div>

        <!-- Step 4 -->
        <div class="payment-step-card">
          <div class="step-badge" style="background: #ede9fe; color: #7c3aed;">04</div>
          <h3 style="font-size: 1.2rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Get Official Receipt</h3>
          <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
            Share the payment reference via our online form or WhatsApp at <strong>8409531615</strong>. Receive instant acknowledgment and official GST tax receipt.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Section: Payment Milestones & Modes Comparison -->
  <section style="padding: 70px 0; background: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #0284c7; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Payment Clarity</span>
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 10px;">
          Relocation Payment Milestones & Options
        </h2>
        <div style="width: 70px; height: 3px; background: #0284c7; margin: 15px auto;"></div>
        <p style="color: #64748b; font-size: 1.05rem; max-width: 780px; margin: 0 auto;">
          To ensure complete transparency and mutual trust, our standard residential and commercial shifting contracts follow a structured 3-stage payment milestone schedule:
        </p>
      </div>

      <!-- 3 Milestones Grid -->
      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(300px, 1fr)); gap: 24px; margin-bottom: 50px;">
        
        <div style="background: #f8fafc; border-top: 4px solid #0284c7; padding: 28px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px;">
            <span style="font-size: 0.85rem; font-weight: 800; color: #0284c7; text-transform: uppercase;">Milestone 1</span>
            <span style="background: #e0f2fe; color: #0284c7; font-weight: 700; font-size: 0.85rem; padding: 4px 10px; border-radius: 20px;">10% - 20%</span>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Booking Advance Token</h3>
          <p style="font-size: 0.95rem; color: #64748b; line-height: 1.7; margin: 0;">
            Transferred at the time of quotation approval to lock in your moving date, reserve our dedicated container truck, and allocate trained packing crew and packaging materials.
          </p>
        </div>

        <div style="background: #f8fafc; border-top: 4px solid #f59e0b; padding: 28px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px;">
            <span style="font-size: 0.85rem; font-weight: 800; color: #f59e0b; text-transform: uppercase;">Milestone 2</span>
            <span style="background: #fef3c7; color: #d97706; font-weight: 700; font-size: 0.85rem; padding: 4px 10px; border-radius: 20px;">70% - 80%</span>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Loading & Dispatch Clearance</h3>
          <p style="font-size: 0.95rem; color: #64748b; line-height: 1.7; margin: 0;">
            Transferred once all household items are professionally packed in 5 layers, loaded into the closed container vehicle, and the official Lorry Receipt (LR Bilty) is issued.
          </p>
        </div>

        <div style="background: #f8fafc; border-top: 4px solid #10b981; padding: 28px; border-radius: 12px; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
          <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 14px;">
            <span style="font-size: 0.85rem; font-weight: 800; color: #10b981; text-transform: uppercase;">Milestone 3</span>
            <span style="background: #ecfdf5; color: #059669; font-weight: 700; font-size: 0.85rem; padding: 4px 10px; border-radius: 20px;">Remaining 10%</span>
          </div>
          <h3 style="font-size: 1.25rem; font-weight: 700; color: #0f172a; margin-bottom: 10px;">Final Delivery & Setup</h3>
          <p style="font-size: 0.95rem; color: #64748b; line-height: 1.7; margin: 0;">
            Settled upon doorstep arrival, safe unloading into your new residence or office, room-specific placement, modular furniture assembly, and full client satisfaction check.
          </p>
        </div>

      </div>

      <!-- Comparison Table of Transfer Modes -->
      <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 12px; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.04);">
        <div style="background: #0f172a; color: #ffffff; padding: 18px 24px;">
          <h3 style="margin: 0; font-size: 1.2rem; font-weight: 700;">Accepted Bank Transfer Modes & Clearance Times</h3>
        </div>
        <div class="table-responsive">
          <table class="table" style="margin-bottom: 0;">
            <thead>
              <tr style="background: #f8fafc; border-bottom: 2px solid #e2e8f0; color: #1e293b;">
                <th style="font-weight: 700;">Transfer Mode</th>
                <th style="font-weight: 700;">Clearance Speed</th>
                <th style="font-weight: 700;">Transaction Limit</th>
                <th style="font-weight: 700;">Availability</th>
                <th style="font-weight: 700;">Recommended For</th>
              </tr>
            </thead>
            <tbody>
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="font-weight: 700; color: #0284c7;"><i class="fa-solid fa-bolt" style="margin-right: 6px;"></i> IMPS Transfer</td>
                <td>Instant (Within seconds)</td>
                <td>Up to ₹5,00,000</td>
                <td>24x7x365</td>
                <td>Token booking advances and urgent move dispatch</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9; background: #fafafa;">
                <td style="font-weight: 700; color: #0284c7;"><i class="fa-solid fa-building-columns" style="margin-right: 6px;"></i> NEFT Transfer</td>
                <td>Within 30 minutes</td>
                <td>No maximum limit</td>
                <td>24x7x365</td>
                <td>Standard household shifting balance settlements</td>
              </tr>
              <tr style="border-bottom: 1px solid #f1f5f9;">
                <td style="font-weight: 700; color: #0284c7;"><i class="fa-solid fa-briefcase" style="margin-right: 6px;"></i> RTGS Transfer</td>
                <td>Real-time (Within 10 mins)</td>
                <td>Minimum ₹2,00,000</td>
                <td>24x7x365</td>
                <td>High-volume corporate relocations & commercial contracts</td>
              </tr>
              <tr style="background: #fafafa;">
                <td style="font-weight: 700; color: #0284c7;"><i class="fa-solid fa-mobile-screen-button" style="margin-right: 6px;"></i> UPI Apps (GPay / PhonePe)</td>
                <td>Instant</td>
                <td>Up to ₹1,00,000 / day</td>
                <td>24x7x365</td>
                <td>Quick mobile transfers and on-the-spot token payments</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

    </div>
  </section>

  <!-- 4. Interactive Payment Notification Form -->
  <section style="padding: 70px 0; background: #f8fafc;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 40px;">
        <span style="color: #0284c7; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Already Paid?</span>
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 10px;">
          Submit Payment Confirmation Online
        </h2>
        <p style="color: #64748b; font-size: 1rem; margin-top: 10px;">
          Fill out this quick form after completing your bank transfer so our accounts desk can verify the remittance and issue your official receipt promptly:
        </p>
      </div>

      <div class="payment-form-card">
        <form id="paymentNotifyForm" onsubmit="handlePaymentSubmit(event)">
          
          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;" class="form-row-2col">
            <div class="form-group">
              <label for="payerName"><i class="fa-regular fa-user" style="color: #0284c7;"></i> Full Name *</label>
              <input type="text" id="payerName" class="form-control-custom" placeholder="e.g. Rajesh Kumar" required>
            </div>
            
            <div class="form-group">
              <label for="payerPhone"><i class="fa-solid fa-phone" style="color: #0284c7;"></i> Contact Phone Number *</label>
              <input type="tel" id="payerPhone" class="form-control-custom" placeholder="e.g. 9835565233" required pattern="[0-9]{10}">
            </div>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;" class="form-row-2col">
            <div class="form-group">
              <label for="consignmentNo"><i class="fa-solid fa-file-lines" style="color: #0284c7;"></i> Consignment / Quotation No. *</label>
              <input type="text" id="consignmentNo" class="form-control-custom" placeholder="e.g. SAPM-2026-482" required>
            </div>

            <div class="form-group">
              <label for="amountPaid"><i class="fa-solid fa-indian-rupee-sign" style="color: #0284c7;"></i> Amount Transferred (₹) *</label>
              <input type="number" id="amountPaid" class="form-control-custom" placeholder="e.g. 12500" required min="100">
            </div>
          </div>

          <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 20px;" class="form-row-2col">
            <div class="form-group">
              <label for="paymentMode"><i class="fa-solid fa-credit-card" style="color: #0284c7;"></i> Payment Method *</label>
              <select id="paymentMode" class="form-control-custom" required>
                <option value="NEFT / RTGS">NEFT / RTGS (Axis Bank)</option>
                <option value="IMPS">IMPS Instant Transfer</option>
                <option value="UPI">UPI (Google Pay / PhonePe / Paytm)</option>
                <option value="Net Banking">Net Banking</option>
                <option value="Other">Other Bank Transfer</option>
              </select>
            </div>

            <div class="form-group">
              <label for="utrNumber"><i class="fa-solid fa-hashtag" style="color: #0284c7;"></i> Bank Transaction / UTR No. *</label>
              <input type="text" id="utrNumber" class="form-control-custom" placeholder="e.g. 425619873412" required>
            </div>
          </div>

          <div class="form-group">
            <label for="paymentRemarks"><i class="fa-regular fa-comment-dots" style="color: #0284c7;"></i> Remarks / Notes (Optional)</label>
            <input type="text" id="paymentRemarks" class="form-control-custom" placeholder="e.g. Advance for Ranchi to Jamshedpur house shift">
          </div>

          <div style="text-align: center; margin-top: 30px;">
            <button type="submit" style="background: #0284c7; color: #ffffff; padding: 16px 36px; border: none; border-radius: 8px; font-size: 1.05rem; font-weight: 700; cursor: pointer; display: inline-flex; align-items: center; gap: 10px; transition: all 0.2s ease;">
              <i class="fa-solid fa-paper-plane"></i> Submit Payment Confirmation
            </button>
            <p style="font-size: 0.85rem; color: #64748b; margin-top: 12px;">
              <i class="fa-solid fa-lock" style="color: #10b981;"></i> Your payment confirmation is encrypted and verified securely.
            </p>
          </div>

        </form>

        <div id="formSuccessMessage" style="display: none; background: #ecfdf5; border: 1px solid #10b981; padding: 25px; border-radius: 10px; text-align: center; margin-top: 25px;">
          <i class="fa-solid fa-circle-check" style="font-size: 2.5rem; color: #10b981; margin-bottom: 10px;"></i>
          <h4 style="color: #065f46; font-size: 1.3rem; margin-bottom: 8px;">Payment Notification Received!</h4>
          <p style="color: #047857; margin-bottom: 15px; font-size: 0.95rem;">
            Thank you. Our accounts team is verifying your transaction. We will dispatch your official payment receipt on WhatsApp shortly.
          </p>
          <a id="whatsappConfirmLink" href="#" target="_blank" rel="noopener noreferrer" style="display: inline-flex; align-items: center; gap: 8px; background: #25d366; color: #ffffff; padding: 10px 20px; border-radius: 6px; font-weight: 700; text-decoration: none; font-size: 0.9rem;">
            <i class="fa-brands fa-whatsapp"></i> Also Send on WhatsApp for Faster Clearance
          </a>
        </div>
      </div>

    </div>
  </section>

  <!-- 5. Payment Security & Policies -->
  <section style="padding: 70px 0; background: #ffffff;">
    <div class="container" style="max-width: 1200px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #0284c7; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Security & Standards</span>
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 10px;">
          Payment Safety Guidelines & Guarantees
        </h2>
        <div style="width: 70px; height: 3px; background: #0284c7; margin: 15px auto;"></div>
      </div>

      <div style="display: grid; grid-template-columns: repeat(auto-fit, minmax(320px, 1fr)); gap: 24px;">
        
        <div style="background: #f8fafc; border-left: 4px solid #0284c7; padding: 25px; border-radius: 0 10px 10px 0;">
          <h4 style="font-size: 1.15rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;">
            <i class="fa-solid fa-shield-halved" style="color: #0284c7; margin-right: 8px;"></i> Remit Only to Corporate Account
          </h4>
          <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
            Always ensure that transfers are addressed exclusively to <strong>Shree Ashirwad Packers & Movers</strong>. Never send money to personal bank accounts of individual drivers or daily laborers.
          </p>
        </div>

        <div style="background: #f8fafc; border-left: 4px solid #10b981; padding: 25px; border-radius: 0 10px 10px 0;">
          <h4 style="font-size: 1.15rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;">
            <i class="fa-solid fa-file-invoice" style="color: #10b981; margin-right: 8px;"></i> 100% IBA & GST Invoicing
          </h4>
          <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
            Every rupee transferred to our Axis Bank account is documented with a valid GST-compliant invoice and IBA-approved consignment note for your official corporate or government transfer reimbursement.
          </p>
        </div>

        <div style="background: #f8fafc; border-left: 4px solid #f59e0b; padding: 25px; border-radius: 0 10px 10px 0;">
          <h4 style="font-size: 1.15rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;">
            <i class="fa-solid fa-ban" style="color: #f59e0b; margin-right: 8px;"></i> Zero Hidden Surcharges
          </h4>
          <p style="font-size: 0.92rem; color: #64748b; line-height: 1.6; margin: 0;">
            The amount agreed upon in your official quotation covers packing supplies, labor, vehicle freight, and tolls. We do not demand unexpected hidden surcharges on delivery day.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- 6. Payment FAQs -->
  <section style="padding: 70px 0; background: #f8fafc;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      
      <div style="text-align: center; margin-bottom: 45px;">
        <span style="color: #0284c7; font-weight: 700; text-transform: uppercase; letter-spacing: 1px; font-size: 0.85rem;">Frequently Asked Questions</span>
        <h2 style="font-family: 'Outfit', sans-serif; font-size: 2.2rem; font-weight: 800; color: #0f172a; margin-top: 10px;">
          Frequently Asked Questions About Payments
        </h2>
        <div style="width: 70px; height: 3px; background: #0284c7; margin: 15px auto;"></div>
      </div>

      <div style="display: flex; flex-direction: column; gap: 16px;">
        
        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;">
            <i class="fa-solid fa-circle-question" style="color: #0284c7; margin-right: 8px;"></i> What are the official Axis Bank details for Shree Ashirwad Packers?
          </h4>
          <p style="font-size: 0.95rem; color: #64748b; line-height: 1.7; margin: 0;">
            Bank Name: <strong>Axis Bank, Upper Bazaar, Ranchi</strong><br>
            Account Holder: <strong>Shree Ashirwad Packers & Movers</strong><br>
            Account Number: <strong>921020039005609</strong><br>
            IFSC Code: <strong>UTIB0004102</strong><br>
            Account Type: <strong>Current Account</strong>
          </p>
        </div>

        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;">
            <i class="fa-solid fa-circle-question" style="color: #0284c7; margin-right: 8px;"></i> Can I pay via UPI (Google Pay, PhonePe, Paytm)?
          </h4>
          <p style="font-size: 0.95rem; color: #64748b; line-height: 1.7; margin: 0;">
            Yes, UPI payments can be transferred directly to our Axis Bank account using the virtual payment address or our registered official number. Contact our accounts desk at 8409531615 for current UPI QR codes.
          </p>
        </div>

        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;">
            <i class="fa-solid fa-circle-question" style="color: #0284c7; margin-right: 8px;"></i> How soon will I receive an acknowledgment after bank transfer?
          </h4>
          <p style="font-size: 0.95rem; color: #64748b; line-height: 1.7; margin: 0;">
            For IMPS and UPI, bank clearance is immediate. Once you share the UTR reference number, our accounts department sends a digitally signed payment acknowledgment on WhatsApp or email within 15 minutes.
          </p>
        </div>

        <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 22px;">
          <h4 style="font-size: 1.1rem; font-weight: 700; color: #0f172a; margin-bottom: 8px;">
            <i class="fa-solid fa-circle-question" style="color: #0284c7; margin-right: 8px;"></i> Will I receive an IBA-approved bill for reimbursement?
          </h4>
          <p style="font-size: 0.95rem; color: #64748b; line-height: 1.7; margin: 0;">
            Yes, absolutely. We issue complete documentation including GST invoices, lorry receipts (bilty), money receipts, and insurance vouchers fully compliant with government, PSU, and defense transfer policies.
          </p>
        </div>

      </div>

    </div>
  </section>

  <!-- Google My Business Authentic Reviews -->
  <?php include __DIR__ . '/includes/sections/gmb-reviews.php'; ?>

  <!-- Call to Action Banner -->
  <section style="background: linear-gradient(135deg, #0284c7, #07152b); padding: 60px 0; color: #ffffff; text-align: center;">
    <div class="container" style="max-width: 900px; margin: 0 auto; padding: 0 20px;">
      <h2 style="font-size: 2.2rem; font-weight: 800; margin-bottom: 14px; font-family: 'Outfit', sans-serif;">
        Need Assistance with Your Payment?
      </h2>
      <p style="font-size: 1.05rem; color: #cbd5e1; margin-bottom: 30px; line-height: 1.7;">
        Our customer accounts desk is available 24/7 to assist with payment confirmations, GST invoice copies, or corporate billing queries.
      </p>
      <div style="display: flex; justify-content: center; gap: 15px; flex-wrap: wrap;">
        <a href="tel:+918409531615" style="background: #ffc107; color: #0a192f; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 1.05rem; display: inline-flex; align-items: center; gap: 8px;">
          <i class="fa-solid fa-phone"></i> Call 8409531615
        </a>
        <a href="<?php echo SITE_BASE_URL; ?>/contact" style="background: #ffffff; color: #0284c7; padding: 14px 32px; border-radius: 8px; font-weight: 700; text-decoration: none; font-size: 1.05rem; display: inline-flex; align-items: center; gap: 8px;">
          <i class="fa-solid fa-envelope"></i> Contact Us
        </a>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include __DIR__ . '/includes/footer.php'; ?>

  <!-- Copy to Clipboard Tooltip & Script -->
  <div id="copyTooltip" class="copy-success-tooltip">
    <i class="fa-solid fa-check"></i> <span id="copyTooltipText">Copied to clipboard!</span>
  </div>

  <script>
    function copyToClipboard(text, label) {
      if (navigator.clipboard && window.isSecureContext) {
        navigator.clipboard.writeText(text).then(showTooltip).catch(fallbackCopy);
      } else {
        fallbackCopy();
      }

      function fallbackCopy() {
        var textArea = document.createElement("textarea");
        textArea.value = text;
        textArea.style.position = "fixed";
        textArea.style.left = "-999999px";
        textArea.style.top = "-999999px";
        document.body.appendChild(textArea);
        textArea.focus();
        textArea.select();
        try {
          document.execCommand('copy');
          showTooltip();
        } catch (err) {
          alert('Failed to copy. Please manually copy: ' + text);
        }
        document.body.removeChild(textArea);
      }

      function showTooltip() {
        var tooltip = document.getElementById('copyTooltip');
        var textSpan = document.getElementById('copyTooltipText');
        textSpan.innerText = label + ' copied: ' + text;
        tooltip.style.display = 'block';
        setTimeout(function() {
          tooltip.style.display = 'none';
        }, 3000);
      }
    }

    function handlePaymentSubmit(event) {
      event.preventDefault();
      var name = document.getElementById('payerName').value;
      var phone = document.getElementById('payerPhone').value;
      var consignment = document.getElementById('consignmentNo').value;
      var amount = document.getElementById('amountPaid').value;
      var mode = document.getElementById('paymentMode').value;
      var utr = document.getElementById('utrNumber').value;
      var remarks = document.getElementById('paymentRemarks').value;

      var waMsg = "Hello Shree Ashirwad Packers, I have completed a payment:%0A" +
                  "*Name:* " + encodeURIComponent(name) + "%0A" +
                  "*Phone:* " + encodeURIComponent(phone) + "%0A" +
                  "*Consignment No:* " + encodeURIComponent(consignment) + "%0A" +
                  "*Amount:* Rs. " + encodeURIComponent(amount) + "%0A" +
                  "*Payment Mode:* " + encodeURIComponent(mode) + "%0A" +
                  "*UTR / Reference No:* " + encodeURIComponent(utr) + "%0A" +
                  (remarks ? "*Remarks:* " + encodeURIComponent(remarks) + "%0A" : "") +
                  "%0APlease verify and send my official receipt.";

      var waLink = "https://wa.me/918409531615?text=" + waMsg;
      document.getElementById('whatsappConfirmLink').href = waLink;
      document.getElementById('formSuccessMessage').style.display = 'block';
      document.getElementById('paymentNotifyForm').reset();
      document.getElementById('formSuccessMessage').scrollIntoView({ behavior: 'smooth' });
    }
  </script>

</body>
</html>
