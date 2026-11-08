---
last_mapped_commit: 1f9100432c2fe6c2aee20cf39e82d71c4a2c8dea
last_mapped_at: 2026-11-07
---
# External Integrations

**Analysis Date:** 2026-11-07

## Overview

The Shree Ashirwad Packers and Movers web platform is built for high conversion, local SEO dominance, and fast customer acquisition across Jharkhand, Bihar, and major Indian interstate corridors. External integrations are deliberately kept lean and client-side to preserve instant server response times (<50ms TTFB).

## Active Integrations

### 1. Direct Telephony & Click-to-Call
- **Protocol:** `tel:` URI scheme
- **Configuration:** Centrally defined in `includes/config.php`
- **Constants:**
  - `PRIMARY_PHONE` / `SECONDARY_PHONE`: `+91 8409531615`
  - `SECONDARY_PHONE_RAW`: `+918409531615`
- **Placement:** Sticky floating mobile call buttons, top header bars, hero CTAs, and quick quote strips.

### 2. WhatsApp Business Messaging API
- **Protocol:** `https://api.whatsapp.com/send`
- **Configuration:** Dynamic URL generation linking to phone `+918409531615` with pre-filled route-specific inquiry text (e.g., `Hello Shree Ashirwad Packers, I need a relocation quote...`).
- **Placement:** Floating action buttons and mobile bottom action bars.

### 3. Google Maps Directions & Geolocation
- **Protocol:** `https://www.google.com/maps/dir/?api=1`
- **Bokaro Branch Verified Coordinates:** Latitude `23.6693`, Longitude `86.1511`
- **Destination:** `Plot no - 54/c, Post office sector - 12/A, Bokaro, Jharkhand 827012`
- **Ranchi HQ Verified Coordinates:** Anandpuri Chowk, Vidyanagar Road, Harmu, Ranchi - 834002

### 4. Search Engine Indexing & Rich Snippets
- **Protocol:** Schema.org JSON-LD scripts embedded in HTML `<head>`
- **Schemas Implemented:**
  - `MovingCompany` (NAP + Geo + Opening Hours + Social Profiles)
  - `Service` (Catalogued relocation services)
  - `BreadcrumbList` (Navigational trail)
  - `FAQPage` (Rich snippet expandable FAQs)
- **Sitemap:** Dynamic/static XML sitemap located at `sitemap.xml` registered with Google Search Console.

### 5. Email & Lead Handling
- **Official Inquiries:** `enquiry@shreeashirwadpackers.com`
- **Protocol:** `mailto:` links and contact submission handling.
