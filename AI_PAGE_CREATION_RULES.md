# AI Page Creation Rules & Permanent Operating Standard (AI_PAGE_CREATION_RULES.md)
**Project**: Shree Ashirwad Packers and Movers (`shreeashirwadpackers`)  
**Scope**: Permanent quality standards, design rules, technical SEO criteria, image requirements, word-count constraints, and mandatory quality checklist for all 50 Ranchi Route Pages.

---

## 1. Core Operating Principles
1. **One Page at a Time**: Complete research, design, implementation, and quality verification of the active page before planning or starting any subsequent page.
2. **Zero Automation / Zero Bulk Generation**: Never run generator scripts, automation, crawlers, loops, or templating bots to create, rewrite, or validate pages. Handcraft each page individually.
3. **No Code Reuse by Simple String Replacement**: Every page must have an independent, route-specific layout concept, section sequence, and custom angle. Do not duplicate a template and simply swap city names.
4. **Preserve Existing Architecture**: Never overwrite, delete, rename, or break existing pages, URLs, 301 redirects, global components (`header.php`, `footer.php`, `config.php`, `seo.php`), or database records.
5. **Verified Evidence Only**: Never invent facts, phone numbers, prices, customer testimonials, distances, transit times, or office locations. If data is unverified, state the limitation clearly.

---

## 2. Landing Page Design & Visual Architecture
A route page must look and function like a high-converting, designed commercial landing page—not a flat wall of text.

### Mandatory Visual Elements (Varied by Route Concept)
* **Custom Route Hero**:
  * Impactful single `<h1>` featuring primary keyword naturally.
  * Clear value proposition paragraph (1-2 sentences).
  * Route highlight pills / feature badges (e.g., Transit Hours, GPS Container, Insurance, IBA Reimbursement).
* **Direct Lead Capture / Quick Contact Bar**:
  * Click-to-call buttons (`8409531615` / `9835565233`) and direct WhatsApp quote link.
  * Quotation CTA banner leading to quotation form or phone inquiry.
* **Corridor Logistics & Roadway Breakdown**:
  * Route map summary card (Highways taken, distance, key tolls, ghat sections, state border checkpoints).
* **Transparent Tariff & Pricing Schedule**:
  * Well-structured HTML table detailing 1 BHK, 2 BHK, 3 BHK, car transport, and bike shifting cost estimates.
* **Specialized Moving Services Grid**:
  * Responsive cards explaining household shifting, vehicle carriers, corporate relocation, and packing tiers.
* **Interactive Step-by-Step Moving Process**:
  * 4 to 6 numbered workflow steps (Pre-move survey $\rightarrow$ Multi-layer packing $\rightarrow$ GPS loading $\rightarrow$ Transit $\rightarrow$ Unloading & setup).
* **Audience / Sector-Specific Relocation Advisory**:
  * Targeted guide tailored to the route (e.g., Doctors/Staff for AIIMS, PSU/Government officers for Secretariat, IT workers for tech corridors, defense transfers).
* **Route FAQ Accordion**:
  * 5 to 7 practical, non-generic questions specifically addressing the route's real moving challenges.
* **Cluster Navigation Module**:
  * Grid linking to connected regional hubs, state capital authority pages, and related routes.

### Design Integrity Guidelines
* Clean typography utilizing Google Fonts (`Plus Jakarta Sans` / `Outfit`).
* Modern CSS styling with consistent border radiuses, subtle box-shadows, responsive CSS grids, and mobile-first spacing.
* Zero horizontal overflow on mobile viewports ($\le 360\text{px}$).
* No broken images, missing classes, or unclosed HTML tags.

---

## 3. Content Originality & Depth Standards
1. **Word Count**: Every page must contain **at least 1,500 visible, meaningful words** (editorial target: 1,700–2,100 words). Exclude HTML tags, CSS, JavaScript, JSON-LD schema, global navigation, and footer text.
2. **Original Phrasing**: Do not copy paragraphs from previous pages. Write route-specific observations regarding local geography, colony names, pickup challenges, highway infrastructure, and destination realities.
3. **Zero Doorway Tactics**: Every page must solve real user queries for that specific city-to-city pair, providing genuine information on routes, tolls, loading safety, and delivery timelines.

---

## 4. Image Standards
1. **Asset Verification**: Only use images that physically exist in `images/` or `assets/images/`.
2. **Image Count**: Use **at least four relevant images** per page.
3. **Hero & Content Image Styling**: Constrain image dimensions appropriately (`max-width: 550px; height: 280px; object-fit: cover; border-radius: 10px;` or full-width responsive figure containers) to maintain consistent visual hierarchy and prevent layout shifts.
4. **Accessibility & SEO**: Provide descriptive, unique `alt` and `title` attributes on every `<img>` tag matching the image content and route context.

---

## 5. Technical SEO & Schema Standards
1. **Page Title**: 50–60 characters. Must naturally incorporate the primary target keyword and brand anchor.
2. **Meta Description**: 140–160 characters. Concise summary of route distance, transit time, packing guarantee, and phone number.
3. **Canonical URL**: Exact production URL matching `https://www.shreeashirwadpackers.com/[slug]` without `.php` and without trailing slash.
4. **Structured Data (JSON-LD)**: Every page must implement 3 to 4 valid schemas:
   * `MovingCompany` schema (with address, geocoordinates, telephone, price range, and service area).
   * `BreadcrumbList` schema.
   * `FAQPage` schema (with exact question/answer pairs mirroring visible text).
   * `Service` or `OfferCatalog` schema.

---

## 6. Pre-Publish Quality Checklist
Before marking any page complete, every item must be explicitly verified:
- [ ] Route confirmed as brand-new (no duplication with existing pages, sitemap, or router redirects).
- [ ] Research & design brief completed in `RANCHI_ROUTE_PAGE_BRIEFS.md`.
- [ ] Dedicated, unique design concept implemented (not a copy-paste of the prior page).
- [ ] Visually structured landing page layout (hero, badges, tables, process steps, service cards, FAQ).
- [ ] Visible word count $\ge 1,500$ verified on actual rendered HTML.
- [ ] At least 4 existing image assets verified on disk and embedded with descriptive alt tags.
- [ ] Title tag (50–60 chars) and meta description (140–160 chars) verified.
- [ ] Canonical URL verified (no `.php`, no trailing slash).
- [ ] Valid JSON-LD schemas embedded without syntax errors.
- [ ] Mobile responsive layout confirmed (zero overflow, clean spacing).
- [ ] Contextual internal links to Ranchi authority hub and connected routes verified.
- [ ] Progress recorded in `RANCHI_ROUTE_PAGE_PROGRESS.md`.
