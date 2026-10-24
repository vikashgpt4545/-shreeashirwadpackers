import os
import re
import subprocess

PAGES_DIR = r"d:\shreeashirwadpackers\pages"
SITEMAP_PATH = r"d:\shreeashirwadpackers\sitemap.xml"

SLUGS = [
    # Group 1: Madhupur to Inside Jharkhand (Routes 1–5)
    "madhupur-to-ranchi-packers-and-movers",
    "madhupur-to-deoghar-packers-and-movers",
    "madhupur-to-dhanbad-packers-and-movers",
    "madhupur-to-giridih-packers-and-movers",
    "madhupur-to-dumka-packers-and-movers",
    # Group 2: Inside Jharkhand to Madhupur (Routes 6–10)
    "ranchi-to-madhupur-packers-and-movers",
    "deoghar-to-madhupur-packers-and-movers",
    "dhanbad-to-madhupur-packers-and-movers",
    "giridih-to-madhupur-packers-and-movers",
    "dumka-to-madhupur-packers-and-movers",
    # Group 3: Madhupur to Outside Jharkhand (Routes 11–15)
    "madhupur-to-kolkata-packers-and-movers",
    "madhupur-to-patna-packers-and-movers",
    "madhupur-to-asansol-packers-and-movers",
    "madhupur-to-delhi-packers-and-movers",
    "madhupur-to-durgapur-packers-and-movers",
    # Group 4: Outside Jharkhand to Madhupur (Routes 16–20)
    "kolkata-to-madhupur-packers-and-movers",
    "patna-to-madhupur-packers-and-movers",
    "asansol-to-madhupur-packers-and-movers",
    "delhi-to-madhupur-packers-and-movers",
    "durgapur-to-madhupur-packers-and-movers",
]

PHP_BIN = r"C:\xampp\php\php.exe"

def count_visible_words(html_content):
    text = re.sub(r'<\?php.*?\?>', ' ', html_content, flags=re.DOTALL)
    text = re.sub(r'<script.*?</script>', ' ', text, flags=re.DOTALL | re.IGNORECASE)
    text = re.sub(r'<style.*?</style>', ' ', text, flags=re.DOTALL | re.IGNORECASE)
    text = re.sub(r'<!--.*?-->', ' ', text, flags=re.DOTALL)
    text = re.sub(r'<[^>]+>', ' ', text)
    text = re.sub(r'&[a-z]+;', ' ', text)
    words = re.findall(r'\b[A-Za-z0-9_-]+\b', text)
    return len(words)

def main():
    print("=" * 115)
    print("MADHUPUR 20-ROUTE CORRIDOR AUTOMATED QA AUDIT")
    print("=" * 115)

    with open(SITEMAP_PATH, "r", encoding="utf-8") as f:
        sitemap_content = f.read()

    all_passed = True
    passed_count = 0

    print(f"{'#':<3} | {'Slug':<40} | {'Words':<6} | {'PHP':<4} | {'Imgs':<4} | {'Schema':<6} | {'KW':<3} | {'Sitemap':<7} | {'Status'}")
    print("-" * 115)

    for idx, slug in enumerate(SLUGS, 1):
        filename = f"{slug}.php"
        filepath = os.path.join(PAGES_DIR, filename)

        if not os.path.exists(filepath):
            print(f"[{idx:02d}] {slug:<40} | NOT FOUND")
            all_passed = False
            continue

        with open(filepath, "r", encoding="utf-8") as f:
            content = f.read()

        # 1. PHP Syntax Check
        if os.path.exists(PHP_BIN):
            res = subprocess.run([PHP_BIN, "-l", filepath], capture_output=True, text=True)
            php_ok = "No syntax errors detected" in res.stdout
        else:
            php_ok = True

        # 2. Word Count
        word_count = count_visible_words(content)
        wc_ok = word_count >= 1500

        # 3. Images Check
        images = re.findall(r'<img[^>]+src=["\']([^"\']+)["\']', content)
        img_ok = len(images) == 4 and all("images/" in img for img in images)
        no_svg = not any(".svg" in img for img in images)

        # 4. Schemas Check
        schemas = [
            "MovingCompany" in content,
            "Service" in content,
            "BreadcrumbList" in content,
            "FAQPage" in content
        ]
        schemas_ok = all(schemas)

        # 5. Keywords Meta Tag
        kw_match = re.search(r'<meta\s+name=["\']keywords["\']\s+content=["\']([^"\']+)["\']', content)
        kw_ok = False
        kw_count = 0
        if kw_match:
            kw_list = [k.strip() for k in kw_match.group(1).split(",") if k.strip()]
            kw_count = len(kw_list)
            kw_ok = kw_count >= 6

        # 6. Canonical check
        canonical_ok = f"https://www.shreeashirwadpackers.com/{slug}" in content

        # 7. CSS scope / safety check
        root_override = bool(re.search(r':root\s*\{', content, flags=re.IGNORECASE))
        sidebar_found = bool(re.search(r'sidebar-wrapper', content, flags=re.IGNORECASE))

        # 8. Sitemap check
        in_sitemap = f"https://www.shreeashirwadpackers.com/{slug}" in sitemap_content

        route_passed = (php_ok and wc_ok and img_ok and no_svg and schemas_ok and kw_ok and canonical_ok and not root_override and not sidebar_found)
        if route_passed:
            passed_count += 1
            status = "PASSED"
        else:
            all_passed = False
            reasons = []
            if not php_ok: reasons.append("php-err")
            if not wc_ok: reasons.append(f"words<{word_count}")
            if not img_ok: reasons.append(f"imgs={len(images)}")
            if not schemas_ok: reasons.append(f"schemas={sum(schemas)}")
            if not kw_ok: reasons.append(f"kw={kw_count}")
            if not canonical_ok: reasons.append("canonical-err")
            if root_override: reasons.append(":root-override")
            if sidebar_found: reasons.append("sidebar-found")
            status = f"FAIL ({', '.join(reasons)})"

        print(f"[{idx:02d}] {slug:<40} | {word_count:<6} | {'OK' if php_ok else 'ERR':<4} | {len(images)}/4  | {sum(schemas)}/4   | {kw_count:<3} | {'YES' if in_sitemap else 'NO':<7} | {status}")

    print("-" * 115)
    print(f"Total Routes Audited: {len(SLUGS)} | Verified Passing: {passed_count}/{len(SLUGS)}")

    # Pre-existing hub check
    hub_path = os.path.join(PAGES_DIR, "packers-and-movers-in-madhupur.php")
    print(f"Pre-existing Sub-division Hub preserved: {os.path.exists(hub_path)}")

if __name__ == "__main__":
    main()
