# AI Page Creation Rules & Permanent Operating Standard (AI_PAGE_CREATION_RULES.md)
**Project**: Shree Ashirwad Packers and Movers (`shreeashirwadpackers`)  
**Scope**: Permanent quality standards, design rules, technical SEO criteria, image requirements, word-count constraints, mandatory quality checklist, and embedded internal linking rules for all Route Corridors, Pan-India City Authority Hubs (Tier 1), and Hyper-Local Neighborhood Hubs (Tier 2).

---

## 1. Core Operating Principles
1. **50-Page Non-Stop Handcrafting Batches**: When page creation commences, execute the planned batch of **50 pages in one go without stopping or pausing**. Do not stop prematurely after single pages or small subsets. Complete the entire 50-page batch, verify all pages, and then present the comprehensive report.
2. **Zero Automation / Zero Bulk Generation Scripts**: Never run generator scripts, automation, scrapers, crawlers, loops, or templating bots to create or write pages. Each of the 50 pages must be individually handcrafted with full authentic content, localized landmarks, pricing, and schemas.
3. **No Code Reuse by Simple String Replacement**: Every page must have an independent, route-specific layout concept, section sequence, and custom angle. Do not duplicate a template and simply swap city names.
4. **Preserve Existing Architecture**: Never overwrite, delete, rename, or break existing pages, URLs, 301 redirects, global components (`header.php`, `footer.php`, `config.php`, `seo.php`), or database records.
5. **Verified Evidence Only**: Never invent facts, phone numbers, prices, customer testimonials, distances, transit times, or office locations. If data is unverified, state the limitation clearly.
6. **Concurrent Quad-Chat Territory Partition**:
   - **Chat 1 (`3e493272-ffad-4c5b-a2ab-e8a45f211ac5`)**: Exclusively handles North India Expansion (Punjab, Chandigarh, Uttarakhand, Himachal Pradesh, Jammu & Kashmir).
   - **Chat 2 (`e4c5c124-07a7-4a91-bbfb-c5653cac8485`)**: Exclusively handles Western Hubs &mdash; Gujarat (45 Hubs: 20 Cities + 25 Localities).
   - **Chat 3 (`b13ca1a9-481b-40bb-91ae-ca7c5c084375`)**: Exclusively handles Central Hubs &mdash; Madhya Pradesh (47 Hubs: 22 Cities + 25 Localities).
   - **Chat 4 (`96b67ba7-1cb0-42d2-b5c0-4375d41ecff1`)**: Exclusively handles Western Hubs &mdash; Rajasthan (36 Hubs: 16 Cities + 20 Localities).
   - Zero file collisions, zero duplicate writing, and zero interference across threads.

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
* **MANDATORY Full HTML5 Document Shell & Core Stylesheet Architecture**:
  * `includes/header.php` and `includes/footer.php` are purely body/navigation markup components. They **DO NOT** output `<!DOCTYPE html>`, `<head>`, or stylesheet link tags.
  * Every page created in `pages/` **MUST** be authored as a complete, self-contained HTML5 document with this exact structural skeleton:
    ```php
    <?php
    $page_title = "...";
    $page_description = "...";
    $canonical_url = "...";
    $current_page = 'services';

    require_once __DIR__ . '/../includes/config.php';
    require_once __DIR__ . '/../includes/seo.php';
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?php echo htmlspecialchars($page_title); ?></title>
        <meta name="description" content="<?php echo htmlspecialchars($page_description); ?>">
        <meta name="keywords" content="...">
        <link rel="canonical" href="<?php echo $canonical_url; ?>">
        <!-- OpenGraph & Twitter tags -->
        <!-- Favicon & Geo tags -->
        <!-- Google Fonts & FontAwesome -->
        <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">
        <!-- 4 JSON-LD Schemas -->
        <!-- Scoped Page <style> -->
    </head>
    <body>
    <?php require_once __DIR__ . '/../includes/header.php'; ?>

    <!-- Main Landing Page Content (Hero, Logistics, Pricing Table, Services, Process, FAQ, Cluster Nav, CTA) -->

    <?php require_once __DIR__ . '/../includes/footer.php'; ?>
    </body>
    </html>
    ```
  * Never omit `<!DOCTYPE html>`, `<head>`, `<link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">`, or `<body>`. Omitting this shell will cause the browser to render unstyled, broken raw text.
* **STRICT Header & Footer Brand Integrity**:
  * NEVER override `:root` global CSS variables (`--primary`, `--primary-dark`, `--accent`, `--font-main`) in page-level `<style>` tags. Doing so corrupts the website's global header and footer branding (e.g., turning header elements red or distorting footer navy background).
  * If page-scoped styling is needed, always prefix variables (e.g., `--orm-primary`) or rely directly on classes from `/assets/css/style.css`.
  * Header and footer colors, fonts, and layouts must remain 100% identical and consistent across every single page of the website.
* **NO Mobile-Breaking Sidebars or Floating Route Widgets**:
  * DO NOT introduce desktop two-column sidebar wrappers (`<aside class="sidebar-wrapper">` with "Related Moving Routes" or floating "Need Immediate Assistance?" widgets) that collapse awkwardly, overlap, or cause layout bugs on mobile devices.
  * All route pages must use clean, responsive full-width section architecture (`section`, `container`, `row`, `col-lg-*`) where cards and columns gracefully stack to 100% width on mobile screens ($\le 768\text{px}$).
* Zero horizontal overflow on mobile viewports ($\le 360\text{px}$).
* No broken images, missing classes, or unclosed HTML tags.

---

## 3. Content Originality & Depth Standards
1. **Word Count**: Every page must contain **at least 1,600 visible, meaningful words** (editorial target: 1,700–2,100 words). Exclude HTML tags, CSS, JavaScript, JSON-LD schema, global navigation, and footer text.
2. **Original Phrasing**: Do not copy paragraphs from previous pages. Write route-specific observations regarding local geography, colony names, pickup challenges, highway infrastructure, and destination realities.
3. **Zero Doorway Tactics**: Every page must solve real user queries for that specific city-to-city pair, providing genuine information on routes, tolls, loading safety, and delivery timelines.
4. **Content Chunking & Visual Balance Standard**:
   - **No Walls of Text**: Never output more than 2 to 3 consecutive `<p>` paragraphs in a single uninterrupted block.
   - **Visual Breaks**: Break up narrative descriptions with stylized highlight boxes, bulleted capability lists, or 2x2 micro-metric cards.
   - **Column Height Balance**: In 2-column layouts (like Section 1), ensure the text column and visual column are vertically balanced. Place a complementary service guarantee box or secondary highlight card below the image so the visual column matches the text height without awkward whitespace gaps.

---

## 4. Image Standards
1. **Asset Verification**: Only use images that physically exist in `images/` or `assets/images/`. Never guess or invent image filenames (e.g. `household-goods-truck-loading-ranchi.jpg`).
2. **Image Count**: Use **at least four relevant images** per page.
3. **Hero & Content Image Styling**: Constrain image dimensions appropriately (`max-width: 550px; height: 280px; object-fit: cover; border-radius: 10px;` or full-width responsive figure containers) to maintain consistent visual hierarchy and prevent layout shifts.
4. **Accessibility & SEO**: Provide descriptive, unique `alt` and `title` attributes on every `<img>` tag matching the image content and route context.
5. **Dimension Containment & Aspect Ratio Protection**: All images must be wrapped in a class-defined container with explicit max-width and aspect ratio constraints (e.g. `max-width: 550px; margin: 0 auto; overflow: hidden; border-radius: 12px;` or `aspect-ratio: 4/3` / `16/9` / `3/4`). Portrait images must NEVER be placed inside unconstrained block containers that cause them to stretch vertically to 1200px+.
6. **Mandatory Pre-Publish Disk Existence Audit**: Every page must be validated through `scratch/validate_page.py` ensuring 100% of referenced image files exist on disk with 0 broken 404 images.

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
- [ ] Route or Hub confirmed as brand-new (no duplication with existing pages, sitemap, or router redirects).
- [ ] Research & design brief completed or planned in active progress ledger.
- [ ] Dedicated, unique design concept implemented (not a copy-paste of the prior page).
- [ ] Complete HTML5 Document Shell present: `<!DOCTYPE html>`, `<head>`, `<link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">`, `<body>`, `header.php`, `footer.php`, and `</body></html>`.
- [ ] Visually structured landing page layout (hero, badges, tables, process steps, service cards, FAQ).
- [ ] Visible word count $\ge 1,600$ verified on actual rendered HTML.
- [ ] At least 4 existing image assets verified on disk and embedded with descriptive alt tags.
- [ ] 100% Scoped CSS Class Parity verified (zero orphaned or mismatched prefixes like `rkz-` on a `kzr-` page; all image wrappers and tables are fully styled and visually contained).
- [ ] Title tag (50–60 chars) and meta description (140–160 chars) verified.
- [ ] Canonical URL verified (no `.php`, no trailing slash).
- [ ] Valid JSON-LD schemas embedded without syntax errors (MovingCompany, BreadcrumbList, Service, FAQPage).
- [ ] Mobile responsive layout confirmed (zero overflow, clean spacing, full-width responsive containers).
- [ ] Contextual internal links built directly into the page code (Pillar link, Cluster module with 3–6 links, Rate Calculator).
- [ ] 0 PHP syntax errors verified via `php -l`.
- [ ] 100% HTTP 200 OK verified on live server.
- [ ] Progress recorded in the corresponding progress ledger (`PAN_INDIA_HUB_PAGE_PROGRESS.md` or `RANCHI_ROUTE_PAGE_PROGRESS.md`).

---

## 7. Pan-India City & Hyper-Local Neighborhood Hub Architecture (Tier 1 & Tier 2)

### A. Two-Tier Authority Hierarchy
1. **Tier 1: City / Town Authority Hubs (`packers-and-movers-in-[city].php`)**:
   - **Target File**: `pages/packers-and-movers-in-[city].php`
   - **Target URL**: `https://www.shreeashirwadpackers.com/packers-and-movers-in-[city]`
   - **Role**: Primary organic authority pillar for the entire metropolitan area, district, or municipal territory.
   - **Content Blueprint**:
     - Local moving challenges specific to that city (e.g. municipal heavy-vehicle entry timings, ring roads, no-entry zones, bridge tolls, monsoon logistics).
     - Localized moving pricing schedule (1 BHK, 2 BHK, 3 BHK, 4 BHK, car and bike carrier tariffs).
     - Relocation services breakdown: Local household shifting, intercity long-distance shifting, corporate & office moves, industrial machinery shifting, vehicle carriers, secure warehousing.
     - Key industrial zones, IT corridors, residential sectors, cantonments, and institutions served.
     - 5 to 7 detailed, city-specific FAQs addressing real packing, transit time, insurance, and billing questions.

2. **Tier 2: Hyper-Local Neighborhood & Locality Hubs (`packers-and-movers-in-[locality]-[city].php`)**:
   - **Target File**: `pages/packers-and-movers-in-[locality]-[city].php`
   - **Target URL**: `https://www.shreeashirwadpackers.com/packers-and-movers-in-[locality]-[city]`
   - **Role**: Hyper-targeted landing page engineered for ultra-high conversion from specific residential colonies, apartment complexes, commercial districts, or suburban enclaves.
   - **Content Blueprint**:
     - Colony-level geography: Lane widths, high-rise service elevator booking policies, security gate permissions, parking restrictions for moving trucks, quiet residential moving hours.
     - Tailored service offerings: White-glove luxury flat shifting, modular kitchen dismantling, delicate glassware/antique crating, fast student & bachelor room relocations.
     - Proximity & rapid mobilization: Local survey team dispatch time (within 30–60 minutes), local truck parking hubs, same-day packing capability.
     - Transparent locality pricing grid and realistic packing material specifications.
     - 5 to 7 locality-tailored FAQs.

---

## 8. Mandatory In-Creation Internal Linking Protocol (Zero Post-Hoc Retrofitting)

Internal linking is **mandatory at page creation time** and must be integrated directly into the page's HTML structure during the authoring phase. A page created without complete internal linking violates quality standards.

### Internal Linking Rules by Page Tier:
1. **Tier 1 (City Authority Hubs)**:
   - **Pillar / HQ Link**: At least 1 contextual in-body link to Shree Ashirwad Packers headquarters / parent hub (`/packers-and-movers-in-ranchi`).
   - **Cost Calculator / Tariff Link**: At least 1 contextual link to the live rate calculator (`/packers-and-movers-charges-in-ranchi`).
   - **Hyper-Local Cluster Module**: A dedicated, responsive section (`<section class="local-neighborhoods">` or `<div class="hub-cluster-grid">`) containing **4 to 8 internal links** to planned or active sister neighborhood hubs in that city (e.g. `/packers-and-movers-in-[locality]-[city]`).
   - **Interstate Corridor Links**: Contextual links to live reciprocal route pages connecting that city (e.g. `/ranchi-to-[city]-packers-and-movers` or `/[city]-to-ranchi-packers-and-movers`, verified against existing files in `pages/`).

2. **Tier 2 (Hyper-Local Neighborhood Hubs)**:
   - **Parent City Hub Link (Mandatory Pillar)**: Prominent breadcrumb link AND at least 1 in-body contextual link to the parent city authority hub (`/packers-and-movers-in-[city]`).
   - **Sister Locality Cluster Module**: A dedicated cluster section featuring **4 to 6 internal links** to adjacent residential or commercial localities within the same parent city.
   - **HQ / Intercity Authority Link**: In-text link to `/packers-and-movers-in-ranchi` for intercity and national moves.
   - **Tariff Calculator Link**: In-text link to `/packers-and-movers-charges-in-ranchi` within the pricing section.

### Linking Integrity Standards:
- **Zero Dead Ends**: No page may have 0 internal links. Every page must function as a well-connected node in the site topology.
- **Zero Broken Links (0 404s)**: Every target slug must physically exist in `pages/` or have an active route in `router.php`. For planned future sibling pages in the same batch, verify the exact filename and slug format against `PAN_INDIA_HUB_PAGE_PROGRESS.md`.
- **Descriptive Anchor Text**: Anchors must be descriptive and varied (e.g. *"explore verified packers and movers in Kankarbagh Patna"*, *"view complete home shifting services in Patna"*), avoiding repetitive "click here" or raw URL strings.
