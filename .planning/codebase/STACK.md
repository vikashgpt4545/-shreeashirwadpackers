---
last_mapped_commit: 1f9100432c2fe6c2aee20cf39e82d71c4a2c8dea
last_mapped_at: 2026-11-07
---
# Technology Stack

**Analysis Date:** 2026-11-07

## Languages

**Primary:**
- PHP (8.x / 7.4+ compatible) - Server-side rendering, routing configuration, include management, dynamic SEO constants
- HTML5 - Semantic page structure, accessibility attributes, schema containers

**Secondary:**
- CSS3 - Scoped corridor styles, CSS custom properties (variables), media queries for responsive layouts
- JavaScript (Vanilla ES6+) - Client-side UI interactions, mobile navigation toggle, FAQ accordion handlers
- XML - Search engine sitemaps (`sitemap.xml`)

## Runtime & Hosting

**Server Environment:**
- Production: Apache HTTP Server with `mod_rewrite`, `mod_deflate`, `mod_headers`, and `mod_expires` enabled via `.htaccess`
- Local Development: PHP built-in web server (`php -S localhost:8000 router.php`)

**Configuration & Routing:**
- Centralized constants: `includes/config.php`
- Local request dispatcher: `router.php`
- Production rewrite rules: `.htaccess`

## Frameworks & Libraries

**Backend:**
- Pure Vanilla PHP (Zero external runtime framework overhead for maximum page speed and TTFB)

**Frontend / UI:**
- Modern CSS with custom properties (`:root`) scoped per corridor/landing page
- Google Fonts: `Outfit` (Headings, 400-900) & `Plus Jakarta Sans` (Body, 300-800)
- Inline SVGs for crisp, lightweight iconography with zero external icon font requests

**Structured Data / Schemas:**
- Schema.org JSON-LD implementations:
  - `MovingCompany` (Local business NAP, geo-coordinates, priceRange, openingHours)
  - `Service` (Service type, areaServed, description, offer specifications)
  - `BreadcrumbList` (Navigational hierarchy for Google SERP breadcrumbs)
  - `FAQPage` (Interactive rich snippet FAQs with questions & answers)

## Key Dependencies & Integrations

1. **Google Maps Directions API**:
   - Bokaro Branch link: `https://www.google.com/maps/dir/?api=1&destination=Plot+no+-+54/c,+Post+office+sector+-+12/A,+Bokaro,+Jharkhand+827012`
2. **WhatsApp Click-to-Chat API**:
   - Instant lead generation links via `https://api.whatsapp.com/send?phone=...`
3. **Telephony Integration**:
   - Standard RFC 3966 `tel:` links using verified project constants: `SECONDARY_PHONE_RAW` (`+918409531615`) and `SECONDARY_PHONE` (`+91 8409531615`)
4. **Google Search Console & Analytics**:
   - Canonical URL enforcement and sitemap submission (`sitemap.xml`)
