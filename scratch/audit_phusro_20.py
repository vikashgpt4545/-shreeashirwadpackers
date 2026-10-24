import os
import re
import json
import subprocess
import xml.etree.ElementTree as ET

routes = [
    (1, "phusro-to-ranchi-packers-and-movers", "Group 1: Phusro -> Inside Jharkhand"),
    (2, "phusro-to-dhanbad-packers-and-movers", "Group 1: Phusro -> Inside Jharkhand"),
    (3, "phusro-to-jamshedpur-packers-and-movers", "Group 1: Phusro -> Inside Jharkhand"),
    (4, "phusro-to-hazaribagh-packers-and-movers", "Group 1: Phusro -> Inside Jharkhand"),
    (5, "phusro-to-giridih-packers-and-movers", "Group 1: Phusro -> Inside Jharkhand"),
    (6, "ranchi-to-phusro-packers-and-movers", "Group 2: Inside Jharkhand -> Phusro"),
    (7, "dhanbad-to-phusro-packers-and-movers", "Group 2: Inside Jharkhand -> Phusro"),
    (8, "jamshedpur-to-phusro-packers-and-movers", "Group 2: Inside Jharkhand -> Phusro"),
    (9, "hazaribagh-to-phusro-packers-and-movers", "Group 2: Inside Jharkhand -> Phusro"),
    (10, "giridih-to-phusro-packers-and-movers", "Group 2: Inside Jharkhand -> Phusro"),
    (11, "phusro-to-kolkata-packers-and-movers", "Group 3: Phusro -> Outside Jharkhand"),
    (12, "phusro-to-patna-packers-and-movers", "Group 3: Phusro -> Outside Jharkhand"),
    (13, "phusro-to-delhi-packers-and-movers", "Group 3: Phusro -> Outside Jharkhand"),
    (14, "phusro-to-bangalore-packers-and-movers", "Group 3: Phusro -> Outside Jharkhand"),
    (15, "phusro-to-pune-packers-and-movers", "Group 3: Phusro -> Outside Jharkhand"),
    (16, "kolkata-to-phusro-packers-and-movers", "Group 4: Outside Jharkhand -> Phusro"),
    (17, "patna-to-phusro-packers-and-movers", "Group 4: Outside Jharkhand -> Phusro"),
    (18, "delhi-to-phusro-packers-and-movers", "Group 4: Outside Jharkhand -> Phusro"),
    (19, "bangalore-to-phusro-packers-and-movers", "Group 4: Outside Jharkhand -> Phusro"),
    (20, "asansol-to-phusro-packers-and-movers", "Group 4: Outside Jharkhand -> Phusro")
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
    all_pass = word_pass and img_pass and schema_pass and sitemap_match and lint_pass and wrapper_pass and has_keywords

    if all_pass:
        total_passed += 1
        status = "PASSED"
    else:
        status = "FAIL: "
        fails = []
        if not word_pass: fails.append(f"words<{words}")
        if not img_pass: fails.append(f"imgs<{len(valid_imgs)}")
        if not schema_pass: fails.append(f"schemas<{len(schemas)}")
        if not sitemap_match: fails.append("sitemap-missing")
        if not lint_pass: fails.append("lint-error")
        if not wrapper_pass: fails.append("wrapper-missing")
        if not has_keywords: fails.append("keywords-missing")
        status += ", ".join(fails)

    print(f"{num:<3} | {slug:<40} | {'YES':<6} | {words:<6} | {len(valid_imgs):<4} | {len(schemas):<6} | {('PASS' if lint_pass else 'FAIL'):<5} | {('YES' if sitemap_match else 'NO'):<7} | {status}")

print("-" * 105)
print(f"Total Routes Verified and Passed: {total_passed}/20")
