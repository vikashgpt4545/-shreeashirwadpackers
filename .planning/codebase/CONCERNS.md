---
last_mapped_commit: 1f9100432c2fe6c2aee20cf39e82d71c4a2c8dea
last_mapped_at: 2026-11-07
---
# Technical Debt & Concerns

**Analysis Date:** 2026-11-07

## Current State & Identified Areas of Attention

### 1. Legacy Hardcoded Contact Details
- **Issue:** Several older landing pages in `pages/` still contain hardcoded legacy phone numbers (`9835565233`, `084095 31615`) in body content, CTAs, action bars, or JSON-LD schemas.
- **Remediation:** Systematically replace hardcoded body and schema phone numbers with constants (`SECONDARY_PHONE_RAW` and `SECONDARY_PHONE`).
- **Critical Constraint:** Never touch the `$page_title` variable or `<title>` tag, even if it mentions `9835565233`.

### 2. Fabricated Branch Addresses in Un-migrated Corridors
- **Issue:** In some early corridor pages, arbitrary street addresses or fictitious pin codes were written into the `MovingCompany` schema (e.g. `Plot No 42, Balidih Industrial Area 827014`).
- **Remediation:** Update destination or Bokaro branch schemas to the verified official branch address from `includes/config.php`:
  `Plot no - 54/c, Post office sector - 12/A, Bokaro Steel City, Jharkhand - 827012`.

### 3. Missing Canonical Sitemap Entries
- **Issue:** As new corridor pages were developed, several active routes were not added to `sitemap.xml`.
- **Remediation:** Audit all live route files against `sitemap.xml` and append missing canonical `<url>` nodes with priority `0.80` and `weekly` change frequency.

### 4. Non-Existent Route Links (Broken Internal Links)
- **Issue:** Some pages attempted to link to planned but non-existent files:
  - `pages/office-shifting-services-in-bokaro.php` (does not exist)
  - `pages/local-shifting-services-in-bokaro.php` (does not exist)
  - `pages/packers-and-movers-charges-in-bokaro.php` (does not exist)
  - `pages/iba-approved-packers-and-movers-in-bokaro.php` (does not exist)
  - `pages/bokaro-to-jamtara-packers-and-movers.php` (does not exist)
  - `pages/visakhapatnam-to-bokaro-packers-and-movers.php` (does not exist)
- **Remediation:** Never link to these missing files. When connecting cluster links, link only to verified existing files (`household-shifting-services-in-bokaro.php`, `car-transport-in-bokaro.php`, `bike-transport-in-bokaro.php`, `complete-guide-to-house-shifting-in-bokaro.php`, `packers-and-movers-in-sector-4-bokaro.php`, `packers-and-movers-in-chas.php`, etc.).

### 5. Domain Redirection & External Assets
- **Issue:** User previously noted domains `shreeashirwadpackersandmovers.com` and `shreeashirwadpackers.in`.
- **Status:** The active canonical domain is `https://www.shreeashirwadpackers.com`. Any alternate domains must 301 redirect to the main domain via DNS/cPanel to avoid split domain authority.
