---
last_mapped_commit: 1f9100432c2fe6c2aee20cf39e82d71c4a2c8dea
last_mapped_at: 2026-11-07
---
# Architecture

**Analysis Date:** 2026-11-07

## Pattern Overview

**Overall Pattern:** Modular PHP Multi-Landing Page Architecture with Centralized Front-Controller Routing and Hierarchical Semantic Silos.

**Key Characteristics:**
- **Zero Framework Bloat:** Ultra-fast raw PHP delivery with instant server response times (<50ms).
- **Dual Routing Model:**
  - *Production:* Apache `.htaccess` with `RewriteEngine` mapping clean URL slugs (`/slug`) to their corresponding PHP template in `pages/slug.php` or `pages/slug/index.php`.
  - *Local Development:* Native `router.php` running via `php -S localhost:8000 router.php`, replicating Apache rewrites, static asset delivery, and query parameter handling.
- **Topical Cluster Architecture (Silos):**
  - **Hub Pages:** High-authority city hubs (e.g. `packers-and-movers-in-bokaro.php`, `packers-and-movers-in-ranchi.php`).
  - **Sub-Division & Sector Pages:** Granular local territory pages (e.g. `packers-and-movers-in-sector-4-bokaro.php`, `chas.php`, `bermo.php`).
  - **Service & Guide Silos:** Specific offerings (e.g. `household-shifting-services-in-bokaro.php`, `car-transport-in-bokaro.php`, `bike-transport-in-bokaro.php`).
  - **Interdistrict & Interstate Corridor Pairs:** Bidirectional pairs connecting hubs (e.g., `bokaro-to-delhi-packers-and-movers.php` and `delhi-to-bokaro-packers-and-movers.php`).

## Conceptual Layers

### 1. Configuration & Global State (`includes/`)
- `includes/config.php`: Single Source of Truth for verified NAP (Name, Address, Phone), canonical domain (`https://www.shreeashirwadpackers.com`), branch addresses, geo-coordinates, and environment detection.
- `includes/seo.php`: Dynamic metadata calculation, meta tags, and Open Graph header generation.
- `includes/cluster-helper.php`: Internal linking matrix generating contextual link clusters between parent hubs, child sectors, and connected highway corridors.

### 2. Layout & Shell Components (`includes/`)
- `includes/header.php`: Global responsive navigation, desktop/mobile menus, direct call CTA buttons, and brand logo.
- `includes/footer.php`: Comprehensive global footer featuring city directory links, company registration info, verified NAP, and dynamic copyright year.

### 3. Route Handlers / Page Templates (`pages/`)
Each file in `pages/` is a self-contained landing page template containing:
- **Head Metadata:** `$page_title`, `$page_description`, `$canonical_url`.
- **Structured Data:** 4 standard JSON-LD schemas (`MovingCompany`, `Service`, `BreadcrumbList`, `FAQPage`).
- **Scoped Styles:** Scoped CSS classes avoiding global stylesheet pollution.
- **Visual Breadcrumbs:** Semantic user trail linking back to parent Hubs.
- **Hero & Conversion Section:** Route-specific lead magnet, trust pills, call buttons.
- **Competitor Target Box:** Natural keyword density targeting local and intercity intent.
- **Route Logistics & Corridor Analysis:** Route distance, highway milestones (e.g. NH-114A, NH-23, NH-19), packaging protocols.
- **Pricing & Tariff Tables:** Transparent vehicle/apartment size cost matrices.
- **Interactive FAQ Accordion:** Route-specific questions and clear answers.
- **Route Cluster Navigation:** Lateral and hierarchical internal links connecting related corridors.

## Data & Request Flow

```
User Request (e.g. GET /delhi-to-bokaro-packers-and-movers)
    │
    ▼
Rewrite Layer (router.php locally OR .htaccess in production)
    │
    ▼
Page Controller (pages/delhi-to-bokaro-packers-and-movers.php)
    │
    ├─► Includes includes/config.php (Loads verified NAP & constants)
    ├─► Outputs Meta & JSON-LD Schemas (Bokaro Branch Geo, NAP, FAQ, Breadcrumbs)
    ├─► Includes includes/header.php (Global Nav)
    ├─► Renders Visual Breadcrumbs, Hero CTA, Corridor Details, Pricing
    ├─► Renders Route Cluster Box (Links to Bokaro Hub, Return Route, Sectors)
    └─► Includes includes/footer.php (Global Directory & NAP)
```
