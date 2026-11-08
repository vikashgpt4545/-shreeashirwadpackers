# Shree Ashirwad Packers and Movers Web Platform

## What This Is

The official production website and high-performance lead-generation engine for Shree Ashirwad Packers and Movers (`https://www.shreeashirwadpackers.com`), a premier relocation and logistics provider headquartered in Ranchi with primary branches in Bokaro Steel City and across Eastern India. The platform hosts 100+ dedicated route landing pages, city hubs, and service portals optimized for Google local and organic search rankings.

## Core Value

Zero-regression, 100% compliant local & intercity SEO ranking engine delivering transparent moving quotes and customer inquiries without compromising existing page titles or fabricating business facts.

## Business Context

- **Customer:** Families, industrial PSU engineers (SAIL, CCL, NTPC), corporate transferees, defense personnel, and business merchants moving locally or intercity.
- **Revenue Model:** Household shifting, corporate office relocation, car carrier transport, two-wheeler parcel, and warehousing services.
- **Success Metric:** Top 3 Google search rankings for regional/intercity keywords, zero broken internal links, and instant click-to-call / WhatsApp lead conversions.

## Non-Negotiable Directives (User Directives)

1. **NEVER CHANGE PAGE `<title>` TAGS:**
   - Under NO circumstances may `<title>` tags or `$page_title` variables be altered, rephrased, lengthened, or shortened on existing pages.
   - Even if `$page_title` contains older numbers or legacy text, it must remain strictly untouched.
2. **NO SCRIPTS / NO BULK LOOPS:**
   - Zero automated bulk Python, PHP, Bash, or PowerShell find-and-replace scripts or scanners.
   - Every file must be inspected and edited individually via verified file read and edit tools.
3. **ZERO ASSUMPTIONS (VERIFIED FACTS ONLY):**
   - Never fabricate addresses, pincodes, employee counts, or review figures.
   - Use only verified constants from `includes/config.php`:
     - **Bokaro Branch Address:** `Plot no - 54/c, Post office sector - 12/A, Bokaro, Jharkhand - 827012`
     - **Bokaro Coordinates:** Latitude `23.6693`, Longitude `86.1511`
     - **Ranchi HQ Address:** `Anandpuri Chowk, Vidyanagar Road, Harmu, Ranchi, Jharkhand - 834002`
     - **Official Phone:** `+91 8409531615` (`8409531615` / `+918409531615`)
     - **Official Email:** `enquiry@shreeashirwadpackers.com`

## Requirements

### Validated (Completed)
- [x] Global configuration architecture (`includes/config.php`, `router.php`, `.htaccess`).
- [x] Bokaro Core Hub Page (`pages/packers-and-movers-in-bokaro.php`).
- [x] Bokaro Service & Guide Cluster (4 pages: Household Shifting, Car Transport, Bike Transport, Complete Shifting Guide).
- [x] Bokaro Sub-Division & Sector Pages (11 pages: Sectors 4, 12, Chas, Bermo, Phusro, Chandrapura, Gomia, Jaridih, Kasmar, Petarwar, Chandankiyari).
- [x] Outbound Regional Corridors (7 pages: Koderma, Bagodar, Ormanjhi, Kurdeg, Chandil, Chakradharpur, Adityapur).
- [x] Major Outbound Corridors (Ranchi, Dhanbad, Jamshedpur, Patna, Kolkata, Delhi, Bangalore, Pune, Hyderabad, Mumbai, etc.).
- [x] Inbound Regional Corridors (Hazaribagh, Jamshedpur, Deoghar, Giridih, Ramgarh, Dumka to Bokaro).

### Active (In Progress)
- [ ] Complete Inbound Major Corridors: `delhi-to-bokaro`, `kolkata-to-bokaro`, `patna-to-bokaro` (completed), remaining: `durgapur-to-bokaro`, `rourkela-to-bokaro`, `jamtara-to-bokaro`.
- [ ] Complete Inbound Sub-Division Corridors: `koderma-to-bokaro`, `bagodar-to-bokaro`, `ormanjhi-to-bokaro`, `kurdeg-to-bokaro`, `chandil-to-bokaro`, `chakradharpur-to-bokaro`, `adityapur-to-bokaro`.
- [ ] Complete Intercity Long-Haul Corridors (41 corridor pairs).
- [ ] Comprehensive `sitemap.xml` update with 100% live route inclusion.

### Out of Scope
- Creating non-existent pages that are not in the business plan (e.g., `office-shifting-services-in-bokaro.php`, `visakhapatnam-to-bokaro-packers-and-movers.php`).
- Modifying core CSS framework or introducing bulky third-party frontend dependencies.

## Key Decisions

| Decision | Rationale | Outcome |
|---|---|---|
| Preserve all original `<title>` tags | Explicit user instruction; maintains indexed SERP equity | ✓ Good |
| Centralize NAP in `includes/config.php` | Ensures single source of truth across all 100+ pages | ✓ Good |
| Manual file editing instead of scripts | Prevents unintentional regex damage or syntax corruption | ✓ Good |
| Native PHP router for local development | Replicates `.htaccess` production behavior on local port 8000 | ✓ Good |

---
*Last updated: 2026-11-07 during GSD brownfield onboarding*

