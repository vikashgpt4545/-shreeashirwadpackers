---
last_mapped_commit: 1f9100432c2fe6c2aee20cf39e82d71c4a2c8dea
last_mapped_at: 2026-11-07
---
# Codebase Structure

**Analysis Date:** 2026-11-07

## Directory Layout

```
d:\shreeashirwadpackers\
├── .htaccess                     # Apache production URL rewrite rules & browser caching
├── router.php                    # Local PHP development server router (maps /slug to pages/slug.php)
├── index.php                     # Root fallback / homepage entry point
├── sitemap.xml                   # XML sitemap submitted to Google Search Console
├── robots.txt                    # Search engine crawling instructions
│
├── includes/                     # Shared global configuration and layout components
│   ├── config.php                # Master config: NAP, branch addresses, URLs, contact numbers
│   ├── header.php                # Global header & desktop/mobile navigation bar
│   ├── footer.php                # Global footer, company credentials, city links
│   ├── seo.php                   # Dynamic SEO metadata helpers
│   └── cluster-helper.php        # Topic cluster internal linking matrix helper
│
├── pages/                        # Individual landing pages (Hubs, Corridors, Sectors, Services)
│   ├── packers-and-movers-in-bokaro.php
│   ├── household-shifting-services-in-bokaro.php
│   ├── car-transport-in-bokaro.php
│   ├── bike-transport-in-bokaro.php
│   ├── complete-guide-to-house-shifting-in-bokaro.php
│   ├── packers-and-movers-in-sector-4-bokaro.php
│   ├── packers-and-movers-in-sector-12-bokaro.php
│   ├── packers-and-movers-in-chas.php
│   ├── packers-and-movers-in-bermo.php
│   ├── packers-and-movers-in-phusro.php
│   ├── [bokaro-to-*]-packers-and-movers.php   # Outbound corridor pages
│   ├── [*-to-bokaro]-packers-and-movers.php   # Inbound corridor pages
│   └── ... (Ranchi, Dhanbad, Jamshedpur hubs & corridors)
│
├── assets/                       # Static public assets
│   ├── css/
│   │   └── style.css             # Main stylesheet & global reset
│   ├── js/                       # Client-side scripts & interaction handlers
│   └── images/                   # Icons, badges, trust seals, and favicons
│
├── images/                       # High-resolution optimized photography
│   └── safe-transit-container-truck-ranchi.jpg
│
└── .planning/                    # GSD plan-driven tracking & codebase documentation
    ├── codebase/                 # Architectural maps, stack, conventions, integrations
    ├── PROJECT.md                # Project requirements & non-negotiable guidelines
    ├── ROADMAP.md                # Milestones, phases, and route execution tracking
    └── STATE.md                  # Current workflow progress and session memory
```

## Key File Locations & Roles

| File / Directory | Purpose | Modification Protocol |
|---|---|---|
| `includes/config.php` | Master constants: NAP, addresses, phone numbers, URLs | Single source of truth. Never hardcode phone numbers or addresses elsewhere. |
| `router.php` | Dev server URL routing | Must mirror `.htaccess` rewrite behavior for local testing. |
| `.htaccess` | Production web server rewrite rules | Handles 301 redirects, clean URLs without `.php`, and gzip compression. |
| `sitemap.xml` | Search engine indexing guide | Must be updated whenever new corridor pages are published. |
| `pages/` | Individual route templates | Edit manually with strict adherence to the No-Title-Change rule. |
