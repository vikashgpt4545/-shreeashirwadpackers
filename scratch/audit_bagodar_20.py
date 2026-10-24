import os
import re
import json
import subprocess
import xml.etree.ElementTree as ET

routes = [
    (1, "bagodar-to-ranchi-packers-and-movers", "Group 1: Bagodar -> Inside Jharkhand"),
    (2, "bagodar-to-giridih-packers-and-movers", "Group 1: Bagodar -> Inside Jharkhand"),
    (3, "bagodar-to-dhanbad-packers-and-movers", "Group 1: Bagodar -> Inside Jharkhand"),
    (4, "bagodar-to-bokaro-packers-and-movers", "Group 1: Bagodar -> Inside Jharkhand"),
    (5, "bagodar-to-hazaribagh-packers-and-movers", "Group 1: Bagodar -> Inside Jharkhand"),
    (6, "ranchi-to-bagodar-packers-and-movers", "Group 2: Inside Jharkhand -> Bagodar"),
    (7, "giridih-to-bagodar-packers-and-movers", "Group 2: Inside Jharkhand -> Bagodar"),
    (8, "dhanbad-to-bagodar-packers-and-movers", "Group 2: Inside Jharkhand -> Bagodar"),
    (9, "bokaro-to-bagodar-packers-and-movers", "Group 2: Inside Jharkhand -> Bagodar"),
    (10, "hazaribagh-to-bagodar-packers-and-movers", "Group 2: Inside Jharkhand -> Bagodar"),
    (11, "bagodar-to-kolkata-packers-and-movers", "Group 3: Bagodar -> Outside Jharkhand"),
    (12, "bagodar-to-patna-packers-and-movers", "Group 3: Bagodar -> Outside Jharkhand"),
    (13, "bagodar-to-delhi-packers-and-movers", "Group 3: Bagodar -> Outside Jharkhand"),
    (14, "bagodar-to-bangalore-packers-and-movers", "Group 3: Bagodar -> Outside Jharkhand"),
    (15, "bagodar-to-pune-packers-and-movers", "Group 3: Bagodar -> Outside Jharkhand"),
    (16, "kolkata-to-bagodar-packers-and-movers", "Group 4: Outside Jharkhand -> Bagodar"),
    (17, "patna-to-bagodar-packers-and-movers", "Group 4: Outside Jharkhand -> Bagodar"),
    (18, "delhi-to-bagodar-packers-and-movers", "Group 4: Outside Jharkhand -> Bagodar"),
    (19, "bangalore-to-bagodar-packers-and-movers", "Group 4: Outside Jharkhand -> Bagodar"),
    (20, "asansol-to-bagodar-packers-and-movers", "Group 4: Outside Jharkhand -> Bagodar")
]

# Load sitemap
tree = ET.parse('d:/shreeashirwadpackers/sitemap.xml')
sitemap_urls = set(elem.text.strip() for elem in tree.iter('{http://www.sitemaps.org/schemas/sitemap/0.9}loc'))

print(f"{'#':<3} | {'Slug':<42} | {'Exists':<6} | {'Words':<6} | {'Imgs':<4} | {'Schema':<6} | {'Lint':<5} | {'Sitemap':<7} | {'Status'}")
print("-" * 105)

total_passed = 0

for num, slug, grp in routes:
    path = os.path.join('d:/shreeashirwadpackers/pages', f"{slug}.php")
    sitemap_match = f"https://www.shreeashirwadpackers.com/{slug}" in sitemap_urls
    
    if not os.path.exists(path):
        print(f"{num:<3} | {slug:<42} | {'NO':<6} | {'-':<6} | {'-':<4} | {'-':<6} | {'-':<5} | {('YES' if sitemap_match else 'NO'):<7} | NOT STARTED")
        continue

    with open(path, 'r', encoding='utf-8', errors='ignore') as f:
        html = f.read()

    # PHP Lint
    lint_res = subprocess.run([r"C:\xampp\php\php.exe", "-l", path], capture_output=True, text=True)
    lint_pass = "No syntax errors detected" in lint_res.stdout

    # Title
    title_m = re.search(r'<title>(.*?)</title>', html, re.DOTALL)
    title = title_m.group(1).strip() if title_m else ''

    # Meta desc
    desc_m = re.search(r'<meta\s+name=["\']description["\']\s+content=["\']([^"\']+)["\']', html)
    desc = desc_m.group(1).strip() if desc_m else ''

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
    all_pass = word_pass and img_pass and schema_pass and sitemap_match and lint_pass and wrapper_pass

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
        status += ", ".join(fails)

    print(f"{num:<3} | {slug:<42} | {'YES':<6} | {words:<6} | {len(valid_imgs):<4} | {len(schemas):<6} | {('PASS' if lint_pass else 'FAIL'):<5} | {('YES' if sitemap_match else 'NO'):<7} | {status}")

print("-" * 105)
print(f"Total Routes Verified and Passed: {total_passed}/20")
