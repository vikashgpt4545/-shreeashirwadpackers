import os

css_block = """
/* ==========================================================================
   GLOBAL MOBILE RESPONSIVENESS & OVERFLOW CUTOFF PROTECTION
   Ensures zero horizontal scrolling, no cut-off headers, full responsive layout
   ========================================================================== */

/* Universal Responsive Box-Sizing & Viewport Guard */
html, body {
  overflow-x: hidden !important;
  max-width: 100% !important;
  width: 100% !important;
}

*, *::before, *::after {
  box-sizing: border-box;
}

/* Ensure all images and embedded media never cause horizontal stretch */
img, video, iframe, canvas, svg {
  max-width: 100% !important;
  height: auto;
}

[class*="img-showcase"] img,
.img-showcase img {
  max-width: 100% !important;
  height: auto !important;
}

/* Universal Table Wrapper Protection */
[class*="table-"][class*="-wrapper"],
[class*="-table-wrapper"],
[class*="-table-container"],
.table-responsive,
.pricing-table-container,
.pricing-table-wrapper,
.comparison-table-wrapper,
[style*="overflow-x:auto"],
[style*="overflow-x: auto"] {
  display: block !important;
  width: 100% !important;
  max-width: 100% !important;
  box-sizing: border-box !important;
  overflow-x: auto !important;
  -webkit-overflow-scrolling: touch !important;
}

/* Universal Route Container & Content Safety */
main,
[class*="route-"][class*="-container"],
.route-main-content,
.route-dumka-container,
.article-content {
  width: 100% !important;
  max-width: 100% !important;
  box-sizing: border-box !important;
  overflow-x: hidden !important;
}

/* Decorative Glow Elements Containment */
.hero-glow,
.hero-glow-1,
.hero-glow-2,
[class*="hero-glow"] {
  max-width: 100vw !important;
  overflow: hidden !important;
  pointer-events: none !important;
}

.hero-section,
.page-hero,
.route-hero,
[class*="hero-"][class*="-section"],
[class*="-hero"] {
  overflow: hidden !important;
  position: relative !important;
}

/* Fix grid auto-fit minmax containers that cause mobile overflow */
@media (max-width: 768px) {
  [style*="minmax(320px"],
  [style*="minmax(300px"],
  [style*="minmax(280px"],
  [style*="minmax(260px"],
  [style*="minmax(250px"],
  .grid-cards,
  .steps-container,
  .cluster-grid-deoghar,
  .feature-box-grid,
  [class*="cluster-grid"],
  [class*="grid-cards"],
  [class*="steps-container"] {
    grid-template-columns: 1fr !important;
  }
}

/* Tablet & Mobile Breakpoint (<= 991px) */
@media (max-width: 991px) {
  .route-hero .container {
    display: grid !important;
    grid-template-columns: minmax(0, 1fr) !important;
    gap: 30px !important;
    width: 100% !important;
    max-width: 100% !important;
    padding-left: 16px !important;
    padding-right: 16px !important;
    box-sizing: border-box !important;
  }
  .hero-content {
    min-width: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
  }
  .hero-content h1 {
    font-size: 2.1rem !important;
    line-height: 1.25 !important;
    overflow-wrap: break-word !important;
    word-break: normal !important;
  }
  .hero-form-card {
    min-width: 0 !important;
    width: 100% !important;
    max-width: 100% !important;
    box-sizing: border-box !important;
  }
}

/* Smartphone Breakpoint (<= 768px) */
@media (max-width: 768px) {
  .route-hero {
    padding: 40px 0 35px !important;
  }
  .route-hero .container {
    grid-template-columns: minmax(0, 1fr) !important;
    padding-left: 15px !important;
    padding-right: 15px !important;
    gap: 25px !important;
  }
  .hero-content h1 {
    font-size: 1.75rem !important;
    line-height: 1.25 !important;
    margin-bottom: 14px !important;
    overflow-wrap: break-word !important;
    word-break: normal !important;
  }
  .hero-lead {
    font-size: 0.95rem !important;
    line-height: 1.55 !important;
    margin-bottom: 20px !important;
    overflow-wrap: break-word !important;
  }
  .hero-badges {
    display: flex !important;
    flex-wrap: wrap !important;
    gap: 8px !important;
    margin-bottom: 16px !important;
  }
  .badge-item {
    font-size: 0.78rem !important;
    padding: 5px 11px !important;
    max-width: 100% !important;
    box-sizing: border-box !important;
    white-space: normal !important;
  }
  .hero-cta-group {
    display: flex !important;
    flex-direction: column !important;
    gap: 10px !important;
    width: 100% !important;
  }
  .hero-cta-group a,
  .btn-primary-hero,
  .btn-call-hero {
    width: 100% !important;
    text-align: center !important;
    justify-content: center !important;
    box-sizing: border-box !important;
    padding: 12px 18px !important;
    font-size: 0.95rem !important;
  }
  .hero-form-card {
    padding: 22px 16px !important;
  }
  .hero-form-card h3 {
    font-size: 1.25rem !important;
  }
  .hero-form-card .form-row {
    flex-direction: column !important;
    gap: 0 !important;
  }
  .hero-form-card .form-group {
    width: 100% !important;
    max-width: 100% !important;
    margin-bottom: 10px !important;
    box-sizing: border-box !important;
  }
  .hero-form-card input,
  .hero-form-card select {
    width: 100% !important;
    max-width: 100% !important;
    box-sizing: border-box !important;
    font-size: 0.92rem !important;
  }
  .hero-form-card .form-submit-btn {
    width: 100% !important;
    box-sizing: border-box !important;
    font-size: 0.95rem !important;
    padding: 12px 16px !important;
  }
  .route-main-content,
  .route-dumka-container {
    padding: 30px 15px 50px !important;
    font-size: 0.98rem !important;
  }
  .route-main-content h2,
  .section-dumka-title {
    font-size: 1.5rem !important;
    margin: 30px 0 14px !important;
  }
  .route-main-content h3 {
    font-size: 1.2rem !important;
  }
  .cta-banner {
    padding: 28px 16px !important;
    margin: 30px 0 !important;
  }
  .cta-banner h3 {
    font-size: 1.35rem !important;
  }
  .cta-btn-amber {
    width: 100% !important;
    text-align: center !important;
    box-sizing: border-box !important;
  }
  .cluster-box-deoghar {
    padding: 18px 14px !important;
  }
}

/* Small Smartphone Breakpoint (<= 480px) */
@media (max-width: 480px) {
  .hero-content h1 {
    font-size: 1.55rem !important;
    line-height: 1.25 !important;
  }
  .badge-item {
    font-size: 0.74rem !important;
    padding: 4px 9px !important;
  }
  .route-hero {
    padding: 32px 0 28px !important;
  }
}
"""

targets = [
    'assets/css/style.src.css',
    'assets/css/style.css',
    'assets/css/style.min.css'
]

for t in targets:
    with open(t, 'r', encoding='utf-8') as f:
        content = f.read()
    if 'GLOBAL MOBILE RESPONSIVENESS & OVERFLOW CUTOFF PROTECTION' not in content:
        with open(t, 'a', encoding='utf-8') as f:
            f.write('\n' + css_block.strip() + '\n')
        print(f"Updated {t}")
    else:
        print(f"Already present in {t}")
