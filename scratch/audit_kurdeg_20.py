import os
import re
import subprocess

PAGES_DIR = r"d:\shreeashirwadpackers\pages"
SITEMAP_PATH = r"d:\shreeashirwadpackers\sitemap.xml"

ROUTES = [
    "kurdeg-to-ranchi-packers-and-movers",
    "kurdeg-to-simdega-packers-and-movers",
    "kurdeg-to-gumla-packers-and-movers",
    "kurdeg-to-jamshedpur-packers-and-movers",
    "kurdeg-to-bokaro-packers-and-movers",
    "ranchi-to-kurdeg-packers-and-movers",
    "simdega-to-kurdeg-packers-and-movers",
    "gumla-to-kurdeg-packers-and-movers",
    "jamshedpur-to-kurdeg-packers-and-movers",
    "bokaro-to-kurdeg-packers-and-movers",
    "kurdeg-to-rourkela-packers-and-movers",
    "kurdeg-to-raipur-packers-and-movers",
    "kurdeg-to-kolkata-packers-and-movers",
    "kurdeg-to-delhi-packers-and-movers",
    "kurdeg-to-patna-packers-and-movers",
    "rourkela-to-kurdeg-packers-and-movers",
    "raipur-to-kurdeg-packers-and-movers",
    "kolkata-to-kurdeg-packers-and-movers",
    "delhi-to-kurdeg-packers-and-movers",
    "patna-to-kurdeg-packers-and-movers"
]

def audit():
    with open(SITEMAP_PATH, "r", encoding="utf-8") as f:
        sitemap_content = f.read()

    print(f"{'#':<3} | {'Slug':<40} | {'Exists':<6} | {'Words':<6} | {'Imgs':<4} | {'Schema':<6} | {'Lint':<5} | {'Sitemap':<7} | {'Status'}")
    print("-" * 105)

    passed_count = 0
    for idx, slug in enumerate(ROUTES, 1):
        filename = f"{slug}.php"
        filepath = os.path.join(PAGES_DIR, filename)

        if not os.path.exists(filepath):
            print(f"{idx:<3} | {slug:<40} | {'NO':<6} | {'-':<6} | {'-':<4} | {'-':<6} | {'-':<5} | {'NO':<7} | NOT STARTED")
            continue

        with open(filepath, "r", encoding="utf-8") as f:
            content = f.read()

        # Word count calculation (excluding script, style, php)
        text = re.sub(r'<script.*?</script>', '', content, flags=re.DOTALL)
        text = re.sub(r'<style.*?</style>', '', text, flags=re.DOTALL)
        text = re.sub(r'<\?php.*?\?>', '', text, flags=re.DOTALL)
        text = re.sub(r'<[^>]+>', ' ', text)
        words = len(re.findall(r'\b[a-zA-Z0-9_-]+\b', text))

        # Images count
        imgs = len(re.findall(r'<img\s+[^>]*src=[\'"][^\'"]+[\'"]', content, flags=re.IGNORECASE))

        # Schemas count
        schemas = len(re.findall(r'<script\s+type=[\'"]application/ld\+json[\'"]', content, flags=re.IGNORECASE))

        # Scoped CSS check (:root variable overrides forbidden)
        root_override = bool(re.search(r':root\s*\{', content, flags=re.IGNORECASE))

        # Mobile UX check (sidebar wrapper forbidden)
        sidebar_found = bool(re.search(r'sidebar-wrapper', content, flags=re.IGNORECASE))

        # Keywords meta check
        keywords_meta = bool(re.search(r'<meta\s+name=[\'"]keywords[\'"]', content, flags=re.IGNORECASE))

        # PHP lint
        res = subprocess.run(["C:\\xampp\\php\\php.exe", "-l", filepath], capture_output=True, text=True)
        lint_pass = "PASS" if "No syntax errors detected" in res.stdout else "FAIL"

        # Sitemap presence
        in_sitemap = f"https://www.shreeashirwadpackers.com/{slug}" in sitemap_content
        sitemap_str = "YES" if in_sitemap else "NO"

        # Overall Status
        issues = []
        if words < 1500:
            issues.append(f"words<{words}")
        if imgs != 4:
            issues.append(f"imgs={imgs}")
        if schemas != 4:
            issues.append(f"schemas={schemas}")
        if lint_pass != "PASS":
            issues.append("lint-fail")
        if not in_sitemap:
            issues.append("sitemap-missing")
        if root_override:
            issues.append(":root-override")
        if sidebar_found:
            issues.append("sidebar-found")
        if not keywords_meta:
            issues.append("no-keywords")

        if not issues:
            status = "PASSED"
            passed_count += 1
        else:
            status = "FAIL (" + ", ".join(issues) + ")"

        print(f"{idx:<3} | {slug:<40} | {'YES':<6} | {words:<6} | {imgs:<4} | {schemas:<6} | {lint_pass:<5} | {sitemap_str:<7} | {status}")

    print("-" * 105)
    print(f"Total Routes Verified and Passed: {passed_count}/{len(ROUTES)}")

if __name__ == "__main__":
    audit()
