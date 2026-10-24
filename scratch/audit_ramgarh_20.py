import os
import re
import json
import xml.etree.ElementTree as ET

routes = [
    # Group 1: Ramgarh -> Inside Jharkhand (5 routes)
    (1, "ramgarh-to-deoghar-packers-and-movers", "Group 1: Ramgarh -> Inside Jharkhand"),
    (2, "ramgarh-to-koderma-packers-and-movers", "Group 1: Ramgarh -> Inside Jharkhand"),
    (3, "ramgarh-to-chaibasa-packers-and-movers", "Group 1: Ramgarh -> Inside Jharkhand"),
    (4, "ramgarh-to-godda-packers-and-movers", "Group 1: Ramgarh -> Inside Jharkhand"),
    (5, "ramgarh-to-sahibganj-packers-and-movers", "Group 1: Ramgarh -> Inside Jharkhand"),
    # Group 2: Inside Jharkhand -> Ramgarh (5 routes)
    (6, "bokaro-to-ramgarh-packers-and-movers", "Group 2: Inside Jharkhand -> Ramgarh"),
    (7, "deoghar-to-ramgarh-packers-and-movers", "Group 2: Inside Jharkhand -> Ramgarh"),
    (8, "koderma-to-ramgarh-packers-and-movers", "Group 2: Inside Jharkhand -> Ramgarh"),
    (9, "chaibasa-to-ramgarh-packers-and-movers", "Group 2: Inside Jharkhand -> Ramgarh"),
    (10, "sahibganj-to-ramgarh-packers-and-movers", "Group 2: Inside Jharkhand -> Ramgarh"),
    # Group 3: Ramgarh -> Outside Jharkhand (5 routes)
    (11, "ramgarh-to-kolkata-packers-and-movers", "Group 3: Ramgarh -> Outside Jharkhand"),
    (12, "ramgarh-to-patna-packers-and-movers", "Group 3: Ramgarh -> Outside Jharkhand"),
    (13, "ramgarh-to-delhi-packers-and-movers", "Group 3: Ramgarh -> Outside Jharkhand"),
    (14, "ramgarh-to-bangalore-packers-and-movers", "Group 3: Ramgarh -> Outside Jharkhand"),
    (15, "ramgarh-to-pune-packers-and-movers", "Group 3: Ramgarh -> Outside Jharkhand"),
    # Group 4: Outside Jharkhand -> Ramgarh (5 routes)
    (16, "kolkata-to-ramgarh-packers-and-movers", "Group 4: Outside Jharkhand -> Ramgarh"),
    (17, "patna-to-ramgarh-packers-and-movers", "Group 4: Outside Jharkhand -> Ramgarh"),
    (18, "delhi-to-ramgarh-packers-and-movers", "Group 4: Outside Jharkhand -> Ramgarh"),
    (19, "bangalore-to-ramgarh-packers-and-movers", "Group 4: Outside Jharkhand -> Ramgarh"),
    (20, "asansol-to-ramgarh-packers-and-movers", "Group 4: Outside Jharkhand -> Ramgarh")
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

    # Clean body text
    body_m = re.search(r'<body[^>]*>(.*?)</body>', html, re.DOTALL | re.IGNORECASE)
    body_text = body_m.group(1) if body_m else html
    body_clean = re.sub(r'<\?php.*?\?>', ' ', body_text, flags=re.DOTALL)
    body_clean = re.sub(r'<script[^>]*>.*?</script>', ' ', body_clean, flags=re.DOTALL | re.IGNORECASE)
    body_clean = re.sub(r'<style[^>]*>.*?</style>', ' ', body_clean, flags=re.DOTALL | re.IGNORECASE)
    body_clean = re.sub(r'<[^>]+>', ' ', body_clean)
    words = len(body_clean.split())

    # Images
    imgs = len(re.findall(r'<img\s+[^>]*src=["\']([^"\']+)["\']', html, re.IGNORECASE))

    # Schemas
    schema_blocks = re.findall(r'<script\s+type=["\']application/ld\+json["\']>(.*?)</script>', html, re.DOTALL | re.IGNORECASE)
    schema_types = []
    for sb in schema_blocks:
        sb_clean = re.sub(r'<\?php.*?\?>', '""', sb)
        try:
            parsed = json.loads(sb_clean)
            st = parsed.get('@type', 'Unknown')
            schema_types.append(st)
        except Exception:
            schema_types.append('InvalidJSON')

    is_complete = (
        words >= 1500 and
        imgs >= 4 and
        len(schema_blocks) >= 4 and
        sitemap_match
    )

    if is_complete:
        total_passed += 1
        status = "COMPLETED"
    else:
        status = "INCOMPLETE"

    print(f"{num:<3} | {slug:<42} | {'YES':<6} | {words:<6} | {imgs:<4} | {len(schema_blocks):<6} | {('YES' if sitemap_match else 'NO'):<7} | {status}")

print("-" * 95)
print(f"Total Routes Audited: {len(routes)} | Passed: {total_passed}/{len(routes)}")
