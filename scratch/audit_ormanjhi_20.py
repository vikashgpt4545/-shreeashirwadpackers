import os
import re
import subprocess
import xml.etree.ElementTree as ET

routes = [
    (1, "ormanjhi-to-ranchi-packers-and-movers", "Group 1: Ormanjhi -> Inside Jharkhand"),
    (2, "ormanjhi-to-ramgarh-packers-and-movers", "Group 1: Ormanjhi -> Inside Jharkhand"),
    (3, "ormanjhi-to-hazaribagh-packers-and-movers", "Group 1: Ormanjhi -> Inside Jharkhand"),
    (4, "ormanjhi-to-bokaro-packers-and-movers", "Group 1: Ormanjhi -> Inside Jharkhand"),
    (5, "ormanjhi-to-dhanbad-packers-and-movers", "Group 1: Ormanjhi -> Inside Jharkhand"),
    (6, "ranchi-to-ormanjhi-packers-and-movers", "Group 2: Inside Jharkhand -> Ormanjhi"),
    (7, "ramgarh-to-ormanjhi-packers-and-movers", "Group 2: Inside Jharkhand -> Ormanjhi"),
    (8, "hazaribagh-to-ormanjhi-packers-and-movers", "Group 2: Inside Jharkhand -> Ormanjhi"),
    (9, "bokaro-to-ormanjhi-packers-and-movers", "Group 2: Inside Jharkhand -> Ormanjhi"),
    (10, "dhanbad-to-ormanjhi-packers-and-movers", "Group 2: Inside Jharkhand -> Ormanjhi"),
    (11, "ormanjhi-to-patna-packers-and-movers", "Group 3: Ormanjhi -> Outside Jharkhand"),
    (12, "ormanjhi-to-kolkata-packers-and-movers", "Group 3: Ormanjhi -> Outside Jharkhand"),
    (13, "ormanjhi-to-delhi-packers-and-movers", "Group 3: Ormanjhi -> Outside Jharkhand"),
    (14, "ormanjhi-to-bangalore-packers-and-movers", "Group 3: Ormanjhi -> Outside Jharkhand"),
    (15, "ormanjhi-to-pune-packers-and-movers", "Group 3: Ormanjhi -> Outside Jharkhand"),
    (16, "patna-to-ormanjhi-packers-and-movers", "Group 4: Outside Jharkhand -> Ormanjhi"),
    (17, "kolkata-to-ormanjhi-packers-and-movers", "Group 4: Outside Jharkhand -> Ormanjhi"),
    (18, "delhi-to-ormanjhi-packers-and-movers", "Group 4: Outside Jharkhand -> Ormanjhi"),
    (19, "bangalore-to-ormanjhi-packers-and-movers", "Group 4: Outside Jharkhand -> Ormanjhi"),
    (20, "asansol-to-ormanjhi-packers-and-movers", "Group 4: Outside Jharkhand -> Ormanjhi")
]

# Load sitemap
tree = ET.parse('d:/shreeashirwadpackers/sitemap.xml')
sitemap_urls = set(elem.text.strip() for elem in tree.iter('{http://www.sitemaps.org/schemas/sitemap/0.9}loc'))

print(f"{'#':<3} | {'Slug':<40} | {'Exists':<6} | {'Words':<6} | {'Imgs':<4} | {'Schema':<6} | {'Lint':<5} | {'Sitemap':<7} | {'Status'}")
print("-" * 105)

total_passed = 0

for num, slug, grp in routes:
    path = os.path.join('d:/shreeashirwadpackers/pages', f"{slug}.php")
    sitemap_match = f"https://www.shreeashirwadpackers.com/{slug}" in sitemap_urls
    
    if not os.path.exists(path):
        print(f"{num:<3} | {slug:<40} | {'NO':<6} | {'-':<6} | {'-':<4} | {'-':<6} | {'-':<5} | {('YES' if sitemap_match else 'NO'):<7} | NOT STARTED")
        continue

    with open(path, 'r', encoding='utf-8', errors='ignore') as f:
        html = f.read()

    # PHP Lint
    lint_res = subprocess.run([r"C:\xampp\php\php.exe", "-l", path], capture_output=True, text=True)
    lint_pass = "No syntax errors detected" in lint_res.stdout

    # Title
    title_m = re.search(r'<title>(.*?)</title>', html, re.DOTALL)
    title = title_m.group(1).strip() if title_m else ''

    # Meta desc & keywords
    desc_m = re.search(r'<meta\s+name=["\']description["\']\s+content=["\']([^"\']+)["\']', html)
    desc = desc_m.group(1).strip() if desc_m else ''
    kw_m = re.search(r'<meta\s+name=["\']keywords["\']\s+content=["\']([^"\']+)["\']', html)
    has_keywords = bool(kw_m and len(kw_m.group(1).strip()) > 20)

    # DOCTYPE and CSS
    has_doctype = '<!DOCTYPE html>' in html or '<!doctype html>' in html.lower()
    has_css = '/assets/css/style.css' in html

    # Images
    imgs = re.findall(r'<img\s+[^>]*src=["\']([^"\']+)["\']', html)
    valid_imgs = [i for i in imgs if 'images/' in i and not i.endswith('.svg')]

    # Schemas
    schemas = re.findall(r'<script\s+type=["\']application/ld\+json["\']>(.*?)</script>', html, re.DOTALL)

    # Check for forbidden patterns: sidebar or red root override
    has_bad_sidebar = 'sidebar-wrapper' in html or 'Need Immediate Assistance?' in html
    has_bad_root = '--primary: #d32f2f' in html or '--primary-dark: #b71c1c' in html

    # Visible word count
    body = html
    body = re.sub(r'<\?php.*?\?>', ' ', body, flags=re.DOTALL)
    body = re.sub(r'<script.*?</script>', ' ', body, flags=re.DOTALL)
    body = re.sub(r'<style.*?</style>', ' ', body, flags=re.DOTALL)
    body = re.sub(r'<nav.*?</nav>', ' ', body, flags=re.DOTALL)
    body = re.sub(r'<header.*?</header>', ' ', body, flags=re.DOTALL)
    body = re.sub(r'<footer.*?</footer>', ' ', body, flags=re.DOTALL)
    body = re.sub(r'<[^>]+>', ' ', body)
    words = len(body.split())

    # Rules evaluation
    word_pass = words >= 1500
    img_pass = len(valid_imgs) >= 4
    schema_pass = len(schemas) >= 4
    wrapper_pass = has_doctype and has_css
    clean_pass = not has_bad_sidebar and not has_bad_root

    is_all_passed = (word_pass and img_pass and schema_pass and lint_pass and 
                     sitemap_match and has_keywords and wrapper_pass and clean_pass)

    status = "PASSED" if is_all_passed else "FAIL: "
    if not is_all_passed:
        reasons = []
        if not word_pass: reasons.append(f"words({words})<1500")
        if not img_pass: reasons.append(f"imgs({len(valid_imgs)})<4")
        if not schema_pass: reasons.append(f"schemas({len(schemas)})<4")
        if not lint_pass: reasons.append("lint-failed")
        if not sitemap_match: reasons.append("sitemap-missing")
        if not has_keywords: reasons.append("keywords-missing")
        if not wrapper_pass: reasons.append("wrapper-missing")
        if not clean_pass: reasons.append("sidebar-or-root-override")
        status += ", ".join(reasons)
    else:
        total_passed += 1

    print(f"{num:<3} | {slug:<40} | {'YES':<6} | {words:<6} | {len(valid_imgs):<4} | {len(schemas):<6} | {('PASS' if lint_pass else 'FAIL'):<5} | {('YES' if sitemap_match else 'NO'):<7} | {status}")

print("-" * 105)
print(f"Total Routes Verified and Passed: {total_passed}/{len(routes)}")
