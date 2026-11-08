---
last_mapped_commit: 1f9100432c2fe6c2aee20cf39e82d71c4a2c8dea
last_mapped_at: 2026-11-07
---
# Code & SEO Conventions

**Analysis Date:** 2026-11-07

## Non-Negotiable Project Directives

These directives supersede all general best practices and must be followed 100% across every phase of work:

1. **NEVER CHANGE PAGE `<title>` TAGS:**
   - Under NO circumstances may the `<title>` tag or `$page_title` variable be altered, lengthened, shortened, or replaced on existing pages.
   - Even if `$page_title` contains older text or numbers (e.g. `9835565233`), it must remain exactly as originally defined.

2. **NO SCRIPTS / NO BULK LOOPS:**
   - Zero Python, PHP, Bash, or PowerShell bulk find-and-replace scripts or scanners may be executed to modify files.
   - Every file must be inspected and edited individually via verified file read and edit tools to ensure zero accidental regressions.

3. **ZERO ASSUMPTIONS (VERIFIED FACTS ONLY):**
   - Never fabricate addresses, pincodes, employee counts, or review figures.
   - Use only verified constants from `includes/config.php`:
     - **Bokaro Branch Address:** `Plot no - 54/c, Post office sector - 12/A, Bokaro, Jharkhand - 827012`
     - **Bokaro Geo:** Latitude `23.6693`, Longitude `86.1511`
     - **Ranchi HQ Address:** `Anandpuri Chowk, Vidyanagar Road, Harmu, Ranchi, Jharkhand - 834002`
     - **Official Phone:** `+91 8409531615` (Raw: `+918409531615` or `8409531615`)
     - **Official Email:** `enquiry@shreeashirwadpackers.com`

---

## Coding Conventions

### 1. PHP Standards
- Use `require_once __DIR__ . '/includes/config.php';` or `require_once dirname(__DIR__) . '/includes/config.php';` depending on directory depth.
- Always use `htmlspecialchars()` when echoing user-controlled or dynamically injected variables into HTML attributes.
- Use explicit constants for telephony links:
  ```php
  <a href="tel:<?php echo SECONDARY_PHONE_RAW; ?>"><?php echo SECONDARY_PHONE; ?></a>
  ```

### 2. CSS Scoping
- Scope styles per page to avoid stylesheet collisions across 100+ files:
  - Example: `.grd2b-*` for Giridih to Bokaro, `.d2bko-*` for Delhi to Bokaro, `.rmg2b-*` for Ramgarh to Bokaro.
- Maintain responsive image safeguards with max-height/aspect-ratio constraints:
  ```css
  .corridor-img-container img {
    max-width: 440px !important;
    max-height: 220px !important;
    object-fit: cover !important;
    aspect-ratio: 16/9 !important;
  }
  ```

### 3. Schema Markup Standards
- Every corridor and landing page must contain 4 valid Schema.org JSON-LD scripts:
  1. `MovingCompany` (Local business NAP, geo-coordinates, telephone, priceRange).
  2. `Service` (Service type, areaServed with Origin and Destination cities, description).
  3. `BreadcrumbList` (Navigational hierarchy linking back to Hub).
  4. `FAQPage` (Real questions with detailed, helpful answers).

### 4. Internal Linking & Silo Building
- Always provide a **Visual Breadcrumb Bar** above the Hero section linking back to the relevant Hub (e.g. `Home / Bokaro Packers and Movers / Route Name`).
- At the bottom of each corridor page, provide a **Route Cluster Navigation** box linking to:
  - The parent City Hub (e.g. `/packers-and-movers-in-bokaro`)
  - The bidirectional return route (if existing)
  - Key local sectors (e.g. `/packers-and-movers-in-sector-4-bokaro`, `/packers-and-movers-in-chas`)
  - Major connected regional corridors (e.g. `/bokaro-to-ranchi-packers-and-movers`, `/bokaro-to-dhanbad-packers-and-movers`)
  - The pricing page (`/pricing`)
- **NEVER** link to non-existent pages (e.g., `office-shifting-services-in-bokaro.php`, `bokaro-to-jamtara-packers-and-movers.php`). Always verify file existence before linking.
