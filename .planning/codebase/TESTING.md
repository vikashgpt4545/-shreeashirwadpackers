---
last_mapped_commit: 1f9100432c2fe6c2aee20cf39e82d71c4a2c8dea
last_mapped_at: 2026-11-07
---
# Testing & Verification Protocols

**Analysis Date:** 2026-11-07

## Overview

Testing on `shreeashirwadpackers` focuses on zero-regression verification, ensuring strict adherence to the non-negotiable SEO guidelines, preserving existing `<title>` tags, verifying Schema.org JSON-LD validity, and checking link integrity.

## Testing Layers

### 1. PHP Syntax & Linting
- **Command:** `D:\php\php.exe -l <filename>`
- **Purpose:** Verifies that edited PHP files have valid syntax and will not produce fatal errors (500) upon deployment.

### 2. Local Runtime Testing
- **Local Dev Server:** Built-in PHP server via `router.php`:
  ```bash
  D:\php\php.exe -S localhost:8000 router.php
  ```
- **Verification checks:**
  - Route returns HTTP 200 OK without warnings or notices.
  - Rewrites work as expected without trailing `.php`.
  - Static images, stylesheets, and fonts load with HTTP 200.

### 3. Schema & JSON-LD Validation
- **Validation tool:** Google Rich Results Test / Schema.org Validator syntax rules.
- **Verification checks:**
  - Valid JSON syntax (no unescaped quotes or trailing commas).
  - Proper `@type` definitions: `MovingCompany`, `Service`, `BreadcrumbList`, `FAQPage`.
  - Correct telephone format (`+918409531615` / `+91 8409531615`).
  - Correct coordinates: Latitude `23.6693`, Longitude `86.1511` for Bokaro.

### 4. Non-Regression Safeguards
- **Title preservation check:** Confirm original `$page_title` and `<title>` match git baseline byte-for-byte.
- **Link existence check:** Confirm all cluster links point to actual existing files in `pages/`.
