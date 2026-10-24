import os

sitewide_component_css = """
/* ==========================================================================
   SITEWIDE ESSENTIAL COMPONENT STYLES
   Provides rich, modern styles for breadcrumbs, hero lead forms, corridor
   breakdowns, vehicle cards, pricing tables, process grids, and FAQ accordions.
   ========================================================================== */

/* --- 1. Breadcrumbs System --- */
.breadcrumb-container,
.breadcrumbs-section {
  background: #f8fafc;
  padding: 12px 0;
  border-bottom: 1px solid #e2e8f0;
  width: 100%;
}
.breadcrumb {
  display: flex;
  flex-wrap: wrap;
  padding: 0;
  margin: 0;
  list-style: none !important;
  font-size: 0.88rem;
  line-height: 1.5;
  align-items: center;
}
.breadcrumb-item {
  display: inline-flex;
  align-items: center;
  color: #64748b;
  margin: 0;
  padding: 0;
  list-style: none !important;
}
.breadcrumb-item + .breadcrumb-item {
  padding-left: 0.6rem;
}
.breadcrumb-item + .breadcrumb-item::before {
  display: inline-block;
  padding-right: 0.6rem;
  color: #94a3b8;
  content: "/";
  font-weight: 400;
}
.breadcrumb-item a {
  color: var(--accent);
  text-decoration: none;
  font-weight: 500;
  transition: var(--transition);
  display: inline-flex;
  align-items: center;
  gap: 5px;
}
.breadcrumb-item a:hover {
  color: var(--accent-hover);
  text-decoration: underline;
}
.breadcrumb-item.active {
  color: #0f223d;
  font-weight: 600;
}

/* --- 2. Route Hero Component --- */
.route-hero {
  background: linear-gradient(135deg, #0b1528 0%, #0f223d 60%, #1a3a60 100%);
  color: #ffffff;
  padding: 50px 0 45px 0;
  position: relative;
  overflow: hidden;
}
.route-hero h1 {
  font-size: 2.25rem;
  font-weight: 800;
  line-height: 1.22;
  margin-bottom: 16px;
  color: #ffffff;
  letter-spacing: -0.02em;
}
.hero-badge {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  background: rgba(255, 255, 255, 0.1);
  border: 1px solid rgba(255, 255, 255, 0.2);
  backdrop-filter: blur(8px);
  padding: 5px 14px;
  border-radius: var(--radius-full);
  font-size: 0.8rem;
  font-weight: 600;
  color: #fed7aa;
  margin-bottom: 16px;
  width: fit-content;
}
.hero-subtitle {
  font-size: 1.02rem;
  color: #cbd5e1;
  line-height: 1.6;
  margin-bottom: 22px;
  max-width: 650px;
}
.hero-features {
  display: flex;
  flex-direction: column;
  gap: 10px;
  margin-bottom: 26px;
}
.feat-item {
  display: inline-flex;
  align-items: center;
  gap: 10px;
  color: #f1f5f9;
  font-size: 0.92rem;
  font-weight: 500;
}
.feat-item i {
  color: #22c55e;
  font-size: 1.05rem;
  flex-shrink: 0;
}
.hero-cta {
  display: flex;
  align-items: center;
  gap: 14px;
  flex-wrap: wrap;
}
.route-hero .btn {
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 8px;
  font-weight: 700;
  font-size: 0.95rem;
  padding: 12px 24px;
  border-radius: var(--radius-md);
  text-decoration: none;
  cursor: pointer;
  transition: var(--transition);
  border: none;
}
.route-hero .btn-primary {
  background: linear-gradient(135deg, #ff6a28 0%, #ea580c 100%);
  color: #ffffff !important;
  box-shadow: 0 4px 14px rgba(234, 88, 12, 0.4);
}
.route-hero .btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(234, 88, 12, 0.55);
}
.route-hero .btn-outline {
  background: rgba(255, 255, 255, 0.1);
  color: #ffffff !important;
  border: 1.5px solid rgba(255, 255, 255, 0.35);
  backdrop-filter: blur(6px);
}
.route-hero .btn-outline:hover {
  background: #ffffff;
  color: #0f223d !important;
  border-color: #ffffff;
}

/* --- 3. Lead Quote Card & Form --- */
.quote-card {
  background: #ffffff;
  color: #1e293b;
  padding: 24px 22px;
  border-radius: var(--radius-lg);
  box-shadow: 0 20px 45px -10px rgba(0, 0, 0, 0.45);
  border-top: 4px solid var(--accent);
  position: relative;
  box-sizing: border-box;
}
.quote-card h3 {
  font-size: 1.35rem;
  font-weight: 800;
  color: #0f223d;
  margin-bottom: 4px;
  line-height: 1.25;
}
.quote-card p {
  font-size: 0.85rem;
  color: #64748b;
  margin-bottom: 18px;
}
.route-lead-form {
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.route-lead-form .form-group {
  display: flex;
  flex-direction: column;
  gap: 4px;
}
.route-lead-form label {
  font-size: 0.78rem;
  font-weight: 700;
  color: #334155;
  text-transform: uppercase;
  letter-spacing: 0.03em;
  display: flex;
  align-items: center;
  gap: 6px;
}
.route-lead-form label i {
  color: var(--accent);
}
.route-lead-form .form-row {
  display: flex;
  gap: 10px;
}
.route-lead-form .col-6 {
  flex: 1 1 50%;
  width: 50%;
  display: flex;
  flex-direction: column;
  gap: 4px;
  box-sizing: border-box;
}
.route-lead-form .form-control {
  width: 100%;
  padding: 10px 14px;
  border: 1.5px solid #cbd5e1;
  border-radius: var(--radius-sm);
  background: #f8fafc;
  color: #0f172a;
  font-size: 0.92rem;
  font-weight: 500;
  height: auto;
  box-sizing: border-box;
  transition: var(--transition);
}
.route-lead-form .form-control:focus {
  outline: none;
  border-color: var(--accent);
  background: #ffffff;
  box-shadow: 0 0 0 3px rgba(255, 106, 40, 0.15);
}
.route-lead-form .form-control[readonly] {
  background: #f1f5f9;
  color: #475569;
  cursor: default;
}
.btn-submit-lead {
  background: linear-gradient(135deg, #ff6a28 0%, #ea580c 100%);
  color: #ffffff !important;
  font-weight: 800;
  font-size: 1rem;
  padding: 13px 20px;
  border: none;
  border-radius: var(--radius-sm);
  cursor: pointer;
  width: 100%;
  display: inline-flex;
  align-items: center;
  justify-content: center;
  gap: 10px;
  box-shadow: 0 4px 15px rgba(234, 88, 12, 0.35);
  transition: var(--transition);
  margin-top: 6px;
}
.btn-submit-lead:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 22px rgba(234, 88, 12, 0.5);
  background: linear-gradient(135deg, #ea580c 0%, #c2410c 100%);
}

/* --- 4. Section Typography & Headings --- */
.section {
  padding: 60px 0;
  position: relative;
}
.section.bg-light {
  background-color: #f8fafc;
}
.sub-badge {
  display: inline-block;
  background: #fff7ed;
  color: #ea580c;
  font-size: 0.8rem;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 0.05em;
  padding: 4px 14px;
  border-radius: var(--radius-full);
  border: 1px solid #ffedd5;
  margin-bottom: 12px;
}
.section-title h2 {
  font-size: 2.15rem;
  font-weight: 800;
  color: #0f223d;
  line-height: 1.25;
  margin-bottom: 12px;
  letter-spacing: -0.02em;
}
.section-title p {
  font-size: 1rem;
  color: #64748b;
  max-width: 760px;
  margin: 0 auto 36px;
  line-height: 1.6;
}

/* --- 5. Route Profile & Visual Corridor --- */
.route-text-content {
  font-size: 0.98rem;
  line-height: 1.7;
  color: #334155;
}
.route-text-content p {
  margin-bottom: 16px;
}
.route-specs-list {
  list-style: none !important;
  padding: 0;
  margin: 20px 0;
  display: flex;
  flex-direction: column;
  gap: 10px;
}
.route-specs-list li {
  position: relative;
  padding-left: 26px;
  font-size: 0.92rem;
  color: #1e293b;
  line-height: 1.55;
  list-style: none !important;
}
.route-specs-list li::before {
  content: '✓';
  position: absolute;
  left: 0;
  top: 1px;
  color: var(--accent);
  font-weight: 800;
  font-size: 1rem;
}
.route-visual-card {
  background: #ffffff;
  border-radius: var(--radius-md);
  overflow: hidden;
  box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
  border: 1px solid #e2e8f0;
}
.route-visual-card img {
  width: 100%;
  height: 290px;
  object-fit: cover;
  display: block;
}
.visual-caption {
  padding: 18px 20px;
  background: #ffffff;
}
.visual-caption h4 {
  font-size: 1.05rem;
  font-weight: 700;
  color: #0f223d;
  margin-bottom: 6px;
}
.visual-caption p {
  font-size: 0.88rem;
  color: #64748b;
  margin: 0;
  line-height: 1.5;
}

/* --- 6. Tariff Schedule Table --- */
.tariff-table {
  width: 100%;
  border-collapse: collapse;
  background: #ffffff;
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.04);
}
.tariff-table th {
  background: #0f223d;
  color: #ffffff;
  font-weight: 700;
  padding: 14px 16px;
  font-size: 0.92rem;
  text-align: left;
  border: 1px solid #1a3a60;
}
.tariff-table td {
  padding: 14px 16px;
  font-size: 0.9rem;
  color: #334155;
  border: 1px solid #e2e8f0;
  vertical-align: middle;
}
.tariff-table tbody tr:nth-child(even) {
  background: #f8fafc;
}
.tariff-table tbody tr:hover {
  background: #f1f5f9;
}
.pricing-notes {
  margin-top: 14px;
  font-size: 0.85rem;
  color: #64748b;
  display: flex;
  align-items: center;
  gap: 8px;
}

/* --- 7. Packing Standards Accordion & Steps --- */
.packing-steps-accordion {
  display: flex;
  flex-direction: column;
  gap: 14px;
}
.layer-item {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: var(--radius-md);
  padding: 16px 20px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
  display: flex;
  align-items: flex-start;
  gap: 16px;
  transition: var(--transition);
}
.layer-item:hover {
  border-color: var(--accent);
  box-shadow: 0 4px 14px rgba(255, 106, 40, 0.12);
  transform: translateX(4px);
}
.layer-number {
  background: var(--accent);
  color: #ffffff;
  font-size: 0.82rem;
  font-weight: 800;
  width: 32px;
  height: 32px;
  border-radius: 50%;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-shrink: 0;
  box-shadow: 0 2px 8px rgba(255, 106, 40, 0.35);
}
.layer-desc h4 {
  font-size: 1.02rem;
  font-weight: 700;
  color: #0f223d;
  margin-bottom: 4px;
}
.layer-desc p {
  font-size: 0.88rem;
  color: #64748b;
  margin: 0;
  line-height: 1.5;
}

/* --- 8. Vehicle Transit Section --- */
.vehicle-card {
  background: #ffffff;
  border-radius: var(--radius-md);
  overflow: hidden;
  border: 1px solid #e2e8f0;
  box-shadow: 0 4px 14px rgba(0, 0, 0, 0.05);
  display: flex;
  flex-direction: column;
  height: 100%;
  transition: var(--transition);
}
.vehicle-card:hover {
  transform: translateY(-4px);
  border-color: var(--accent);
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.09);
}
.vehicle-card-img {
  height: 200px;
  overflow: hidden;
  position: relative;
}
.vehicle-card-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  transition: transform 0.4s ease;
}
.vehicle-card:hover .vehicle-card-img img {
  transform: scale(1.04);
}
.vehicle-card-body {
  padding: 22px;
  display: flex;
  flex-direction: column;
  flex-grow: 1;
}
.vehicle-card-body h3 {
  font-size: 1.18rem;
  font-weight: 700;
  color: #0f223d;
  margin-bottom: 10px;
}
.vehicle-card-body p {
  font-size: 0.9rem;
  color: #475569;
  line-height: 1.6;
  margin-bottom: 16px;
}
.card-features-list {
  list-style: none !important;
  padding: 0;
  margin: 0;
  display: flex;
  flex-direction: column;
  gap: 8px;
}
.card-features-list li {
  font-size: 0.85rem;
  color: #334155;
  display: flex;
  align-items: center;
  gap: 8px;
  list-style: none !important;
}
.card-features-list li i {
  color: var(--accent);
  font-size: 0.95rem;
  flex-shrink: 0;
}

/* --- 9. Corporate Relocation & Document Perks --- */
.corporate-details {
  font-size: 0.95rem;
  color: #334155;
  line-height: 1.65;
}
.corporate-details p {
  margin-bottom: 16px;
}
.document-perks {
  display: grid;
  grid-template-columns: repeat(2, 1fr);
  gap: 14px;
  margin-top: 20px;
}
.doc-item {
  background: #ffffff;
  border-radius: 8px;
  padding: 14px 16px;
  border-left: 3px solid #0284c7;
  border-top: 1px solid #e2e8f0;
  border-right: 1px solid #e2e8f0;
  border-bottom: 1px solid #e2e8f0;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.04);
}
.doc-item h5 {
  font-size: 0.92rem;
  font-weight: 700;
  color: #0f223d;
  margin-bottom: 4px;
  display: flex;
  align-items: center;
  gap: 8px;
}
.doc-item h5 i {
  color: #0284c7;
}
.doc-item p {
  font-size: 0.82rem;
  color: #64748b;
  margin: 0;
  line-height: 1.45;
}
.corporate-box {
  background: linear-gradient(135deg, #0b1528 0%, #0f223d 100%);
  color: #ffffff;
  border-radius: var(--radius-md);
  padding: 28px;
  box-shadow: 0 10px 30px rgba(15, 34, 61, 0.2);
}
.corporate-box h4 {
  font-size: 1.15rem;
  font-weight: 700;
  color: #fed7aa;
  margin-bottom: 10px;
}
.corporate-box p {
  font-size: 0.88rem;
  color: #cbd5e1;
  margin-bottom: 18px;
  line-height: 1.55;
}
.psu-list {
  list-style: none !important;
  padding: 0;
  margin: 0 0 22px 0;
  display: flex;
  flex-direction: column;
  gap: 8px;
}
.psu-list li {
  font-size: 0.86rem;
  color: #f1f5f9;
  display: flex;
  align-items: center;
  gap: 8px;
  list-style: none !important;
}
.psu-list li i {
  color: #22c55e;
  font-size: 0.9rem;
  flex-shrink: 0;
}

/* --- 10. Localities Boxes & Tag Badges --- */
.locality-box {
  background: #ffffff;
  border-radius: var(--radius-md);
  padding: 24px;
  border: 1px solid #e2e8f0;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.04);
  height: 100%;
  box-sizing: border-box;
}
.locality-box h3 {
  font-size: 1.15rem;
  font-weight: 700;
  color: #0f223d;
  margin-bottom: 10px;
  display: flex;
  align-items: center;
  gap: 8px;
}
.locality-box p {
  font-size: 0.88rem;
  color: #64748b;
  margin-bottom: 16px;
}
.locality-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
}
.tag {
  background: #f1f5f9;
  color: #334155;
  font-size: 0.82rem;
  font-weight: 600;
  padding: 5px 12px;
  border-radius: var(--radius-full);
  border: 1px solid #e2e8f0;
  display: inline-block;
  transition: var(--transition);
}
.tag:hover {
  background: #fff7ed;
  color: #ea580c;
  border-color: #fed7aa;
}

/* --- 11. Workflow 5-Step Process Grid --- */
.process-grid {
  display: grid;
  grid-template-columns: repeat(5, 1fr);
  gap: 18px;
  margin-top: 24px;
}
.process-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: var(--radius-md);
  padding: 22px 18px;
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
  display: flex;
  flex-direction: column;
  transition: var(--transition);
  position: relative;
}
.process-card:hover {
  transform: translateY(-4px);
  border-color: var(--accent);
  box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
}
.process-step {
  display: inline-block;
  background: #fff7ed;
  color: #ea580c;
  border: 1px solid #ffedd5;
  font-size: 0.76rem;
  font-weight: 800;
  padding: 3px 10px;
  border-radius: var(--radius-full);
  margin-bottom: 12px;
  width: fit-content;
  text-transform: uppercase;
}
.process-card h4 {
  font-size: 1.05rem;
  font-weight: 700;
  color: #0f223d;
  margin-bottom: 8px;
}
.process-card p {
  font-size: 0.85rem;
  color: #64748b;
  line-height: 1.55;
  margin: 0;
}

/* --- 12. Pre-Move Checklist Section --- */
.checklist-section .checklist-item {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: var(--radius-md);
  padding: 18px 20px;
  margin-bottom: 16px;
  box-shadow: 0 2px 6px rgba(0, 0, 0, 0.03);
  display: flex;
  align-items: flex-start;
  gap: 16px;
  transition: var(--transition);
}
.checklist-section .checklist-item:hover {
  border-color: #cbd5e1;
  box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
}
.checklist-section .checklist-item i {
  font-size: 1.35rem;
  color: var(--accent);
  margin-top: 3px;
  flex-shrink: 0;
}
.checklist-section .checklist-item h5 {
  font-size: 0.98rem;
  font-weight: 700;
  color: #0f223d;
  margin-bottom: 4px;
}
.checklist-section .checklist-item p {
  font-size: 0.86rem;
  color: #64748b;
  margin: 0;
  line-height: 1.5;
}

/* --- 13. FAQ Accordion System --- */
.accordion {
  display: flex;
  flex-direction: column;
  gap: 12px;
}
.card.faq-card {
  background: #ffffff;
  border: 1px solid #e2e8f0;
  border-radius: var(--radius-md);
  box-shadow: 0 2px 8px rgba(0, 0, 0, 0.04);
  overflow: hidden;
  transition: var(--transition);
}
.card.faq-card:hover {
  border-color: #cbd5e1;
}
.faq-card .card-header {
  background: #ffffff;
  padding: 0;
  border-bottom: none;
}
.faq-card .card-header h3 {
  margin: 0;
}
.faq-card .btn-link {
  width: 100%;
  display: flex;
  align-items: center;
  gap: 12px;
  padding: 16px 20px;
  font-size: 1rem;
  font-weight: 700;
  color: #0f223d;
  text-decoration: none;
  background: transparent;
  border: none;
  cursor: pointer;
  text-align: left;
  transition: var(--transition);
  position: relative;
  box-sizing: border-box;
}
.faq-card .btn-link:hover {
  color: var(--accent);
  background: #f8fafc;
}
.faq-card .btn-link i {
  color: var(--accent);
  font-size: 1.1rem;
  flex-shrink: 0;
}
.faq-card .collapse {
  display: none;
}
.faq-card .collapse.show {
  display: block;
}
.faq-card .card-body {
  padding: 4px 20px 20px 44px;
  font-size: 0.92rem;
  color: #475569;
  line-height: 1.65;
  border-top: 1px solid #f8fafc;
}

/* --- 14. CTA Section & Buttons --- */
.cta-section {
  padding: 65px 0;
  background: linear-gradient(135deg, #0b1528 0%, #0f223d 60%, #1a3a60 100%);
  color: #ffffff;
}
.cta-section h2 {
  font-size: 2.1rem;
  font-weight: 800;
  color: #ffffff;
  margin-bottom: 14px;
}
.cta-section p {
  font-size: 1.05rem;
  color: #cbd5e1;
  max-width: 720px;
  margin: 0 auto 28px;
  line-height: 1.6;
}
.cta-buttons {
  display: flex;
  align-items: center;
  justify-content: center;
  gap: 16px;
  flex-wrap: wrap;
}
.cta-buttons .btn {
  display: inline-flex;
  align-items: center;
  gap: 8px;
  font-weight: 700;
  font-size: 1rem;
  padding: 13px 28px;
  border-radius: var(--radius-md);
  text-decoration: none;
  transition: var(--transition);
}
.cta-buttons .btn-primary {
  background: linear-gradient(135deg, #ff6a28 0%, #ea580c 100%);
  color: #ffffff !important;
  box-shadow: 0 4px 16px rgba(234, 88, 12, 0.4);
}
.cta-buttons .btn-primary:hover {
  transform: translateY(-2px);
  box-shadow: 0 6px 22px rgba(234, 88, 12, 0.55);
}
.cta-buttons .btn-outline {
  background: rgba(255, 255, 255, 0.1);
  color: #ffffff !important;
  border: 1.5px solid rgba(255, 255, 255, 0.35);
  backdrop-filter: blur(6px);
}
.cta-buttons .btn-outline:hover {
  background: #ffffff;
  color: #0f223d !important;
  border-color: #ffffff;
}

/* --- 15. General Utilities & Helpers --- */
.p-4 { padding: 1.5rem !important; }
.mt-3 { margin-top: 1rem !important; }
.mb-0 { margin-bottom: 0 !important; }
.rounded-3 { border-radius: 0.5rem !important; }
.text-left { text-align: left !important; }
.text-success { color: #10b981 !important; }
.text-primary { color: #ff6a28 !important; }
.badge-tag {
  display: inline-block;
  padding: 4px 12px;
  border-radius: var(--radius-full);
  font-size: 0.8rem;
  font-weight: 600;
  background: #fff7ed;
  color: #ea580c;
  border: 1px solid #fed7aa;
}
.btn-block {
  display: block !important;
  width: 100% !important;
}
.btn-secondary {
  background-color: #64748b;
  color: #ffffff !important;
}
.btn-secondary-custom {
  background-color: #0284c7;
  color: #ffffff !important;
}
.col-brand {
  color: var(--primary) !important;
}
.badge-yes {
  color: #10b981;
  font-weight: 700;
}
.badge-no {
  color: #ef4444;
  font-weight: 700;
}

/* --- 16. Responsive Overrides for New Components --- */
@media (max-width: 991px) {
  .route-hero {
    padding: 35px 0 !important;
  }
  .route-hero h1 {
    font-size: 1.85rem !important;
  }
  .process-grid {
    grid-template-columns: repeat(2, 1fr) !important;
  }
  .document-perks {
    grid-template-columns: 1fr !important;
  }
}
@media (max-width: 768px) {
  .process-grid {
    grid-template-columns: 1fr !important;
  }
  .route-lead-form .form-row {
    flex-direction: column !important;
    gap: 12px !important;
  }
  .route-lead-form .col-6 {
    width: 100% !important;
    flex: 1 1 100% !important;
  }
  .faq-card .card-body {
    padding: 4px 16px 16px 20px !important;
  }
  .cta-section h2 {
    font-size: 1.6rem !important;
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
    if 'SITEWIDE ESSENTIAL COMPONENT STYLES' not in content:
        with open(t, 'a', encoding='utf-8') as f:
            f.write('\n' + sitewide_component_css.strip() + '\n')
        print(f"Appended sitewide component styles to {t}")
    else:
        print(f"Component styles already present in {t}")
