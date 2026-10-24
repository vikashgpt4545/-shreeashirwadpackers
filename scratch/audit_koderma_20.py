import os
import re
import json
import xml.etree.ElementTree as ET

routes = [
    # Group 1: Koderma -> Inside Jharkhand (5 routes)
    (1, "koderma-to-bokaro-packers-and-movers", "Group 1: Koderma -> Inside Jharkhand"),
    (2, "koderma-to-deoghar-packers-and-movers", "Group 1: Koderma -> Inside Jharkhand"),
    (3, "koderma-to-dumka-packers-and-movers", "Group 1: Koderma -> Inside Jharkhand"),
    (4, "koderma-to-chaibasa-packers-and-movers", "Group 1: Koderma -> Inside Jharkhand"),
    (5, "koderma-to-godda-packers-and-movers", "Group 1: Koderma -> Inside Jharkhand"),
    # Group 2: Inside Jharkhand -> Koderma (5 routes)
    (6, "bokaro-to-koderma-packers-and-movers", "Group 2: Inside Jharkhand -> Koderma"),
    (7, "deoghar-to-koderma-packers-and-movers", "Group 2: Inside Jharkhand -> Koderma"),
    (8, "dhanbad-to-koderma-packers-and-movers", "Group 2: Inside Jharkhand -> Koderma"),
    (9, "dumka-to-koderma-packers-and-movers", "Group 2: Inside Jharkhand -> Koderma"),
    (10, "chaibasa-to-koderma-packers-and-movers", "Group 2: Inside Jharkhand -> Koderma"),
    # Group 3: Koderma -> Outside Jharkhand (5 routes)
    (11, "koderma-to-kolkata-packers-and-movers", "Group 3: Koderma -> Outside Jharkhand"),
    (12, "koderma-to-patna-packers-and-movers", "Group 3: Koderma -> Outside Jharkhand"),
    (13, "koderma-to-delhi-packers-and-movers", "Group 3: Koderma -> Outside Jharkhand"),
    (14, "koderma-to-bangalore-packers-and-movers", "Group 3: Koderma -> Outside Jharkhand"),
    (15, "koderma-to-pune-packers-and-movers", "Group 3: Koderma -> Outside Jharkhand"),
    # Group 4: Outside Jharkhand -> Koderma (5 routes)
    (16, "kolkata-to-koderma-packers-and-movers", "Group 4: Outside Jharkhand -> Koderma"),
    (17, "patna-to-koderma-packers-and-movers", "Group 4: Outside Jharkhand -> Koderma"),
    (18, "delhi-to-koderma-packers-and-movers", "Group 4: Outside Jharkhand -> Koderma"),
    (19, "bangalore-to-koderma-packers-and-movers", "Group 4: Outside Jharkhand -> Koderma"),
    (20, "asansol-to-koderma-packers-and-movers", "Group 4: Outside Jharkhand -> Koderma")
]

# Load sitemap
tree = ET.parse('d:/shreeashirwadpackers/sitemap.xml')
sitemap_urls = set(elem.text.strip() for elem in tree.iter('{http://www.sitemaps.org/schemas/sitemap/0.9}loc'))

print(f"{'#':<3} | {'Slug':<42} | {'Exists':<6} | {'Words':<6} | {'Imgs':<4} | {'Schema':<6} | {'Sitemap':<7} | {'Status'}")
print("-" * 95)

total_passed = 0

for num, slug, grp in routes:
    path = os.path.join('d:/shreeashirwadpackers/pages', f"{slug}.php")
    sitemap_match = f"https://www.shreeashirwadpackers.com/{slug}" in sitemap_urls
    
    if not os.path.exists(path):
        print(f"{num:<3} | {slug:<42} | {'NO':<6} | {'-':<6} | {'-':<4} | {'-':<6} | {('YES' if sitemap_match else 'NO'):<7} | NOT STARTED")
        continue

    with open(path, 'r', encoding='utf-8', errors='ignore') as f:
        html = f.read()

    # Title
    title_m = re.search(r'<title>(.*?)</title>', html, re.DOTALL)
    title = title_m.group(1).strip() if title_m else ''

    # Meta desc
    desc_m = re.search(r'<meta\s+name=["\']description["\']\s+content=["\']([^"\']+)["\']', html)
    desc = desc_m.group(1).strip() if desc_m else ''

    # Images
    imgs = re.findall(r'<img\s+[^>]*src=["\']([^"\']+)["\']', html)
    valid_imgs = [i for i in imgs if 'images/' in i and not i.endswith('.svg')]

    # Schemas
    schemas = re.findall(r'<script\s+type=["\']application/ld\+json["\']>(.*?)</script>', html, re.DOTALL)
    schema_types = []
    for s in schemas:
        try:
            data = json.loads(s)
            stype = data.get('@type', '')
            schema_types.append(stype)
        except:
            pass

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
    all_pass = word_pass and img_pass and schema_pass and sitemap_match

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
        status += ", ".join(fails)

    print(f"{num:<3} | {slug:<42} | {'YES':<6} | {words:<6} | {len(valid_imgs):<4} | {len(schemas):<6} | {('YES' if sitemap_match else 'NO'):<7} | {status}")

print("-" * 95)
print(f"Total Routes Verified and Passed: {total_passed}/20")
