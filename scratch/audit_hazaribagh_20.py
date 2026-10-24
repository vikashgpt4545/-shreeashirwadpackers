import os
import re
import json
import xml.etree.ElementTree as ET

routes = [
    (1, "hazaribagh-to-dhanbad-packers-and-movers", "Group 1: Hazaribagh -> Inside Jharkhand"),
    (2, "hazaribagh-to-jamshedpur-packers-and-movers", "Group 1: Hazaribagh -> Inside Jharkhand"),
    (3, "hazaribagh-to-giridih-packers-and-movers", "Group 1: Hazaribagh -> Inside Jharkhand"),
    (4, "hazaribagh-to-ramgarh-packers-and-movers", "Group 1: Hazaribagh -> Inside Jharkhand"),
    (5, "hazaribagh-to-koderma-packers-and-movers", "Group 1: Hazaribagh -> Inside Jharkhand"),
    (6, "dhanbad-to-hazaribagh-packers-and-movers", "Group 2: Inside Jharkhand -> Hazaribagh"),
    (7, "jamshedpur-to-hazaribagh-packers-and-movers", "Group 2: Inside Jharkhand -> Hazaribagh"),
    (8, "giridih-to-hazaribagh-packers-and-movers", "Group 2: Inside Jharkhand -> Hazaribagh"),
    (9, "ramgarh-to-hazaribagh-packers-and-movers", "Group 2: Inside Jharkhand -> Hazaribagh"),
    (10, "koderma-to-hazaribagh-packers-and-movers", "Group 2: Inside Jharkhand -> Hazaribagh"),
    (11, "hazaribagh-to-bangalore-packers-and-movers", "Group 3: Hazaribagh -> Outside Jharkhand"),
    (12, "hazaribagh-to-pune-packers-and-movers", "Group 3: Hazaribagh -> Outside Jharkhand"),
    (13, "hazaribagh-to-hyderabad-packers-and-movers", "Group 3: Hazaribagh -> Outside Jharkhand"),
    (14, "hazaribagh-to-gaya-packers-and-movers", "Group 3: Hazaribagh -> Outside Jharkhand"),
    (15, "hazaribagh-to-asansol-packers-and-movers", "Group 3: Hazaribagh -> Outside Jharkhand"),
    (16, "patna-to-hazaribagh-packers-and-movers", "Group 4: Outside Jharkhand -> Hazaribagh"),
    (17, "kolkata-to-hazaribagh-packers-and-movers", "Group 4: Outside Jharkhand -> Hazaribagh"),
    (18, "delhi-to-hazaribagh-packers-and-movers", "Group 4: Outside Jharkhand -> Hazaribagh"),
    (19, "pune-to-hazaribagh-packers-and-movers", "Group 4: Outside Jharkhand -> Hazaribagh"),
    (20, "gaya-to-hazaribagh-packers-and-movers", "Group 4: Outside Jharkhand -> Hazaribagh"),
]

# Load sitemap
tree = ET.parse('d:/shreeashirwadpackers/sitemap.xml')
sitemap_urls = set(elem.text.strip() for elem in tree.iter('{http://www.sitemaps.org/schemas/sitemap/0.9}loc'))

print(f"{'#':<3} | {'Slug':<44} | {'Exists':<6} | {'Words':<6} | {'Imgs':<4} | {'Schema':<6} | {'Sitemap':<7} | {'Status'}")
print("-" * 98)

for num, slug, grp in routes:
    path = os.path.join('d:/shreeashirwadpackers/pages', f"{slug}.php")
    sitemap_match = f"https://www.shreeashirwadpackers.com/{slug}" in sitemap_urls
    
    if not os.path.exists(path):
        print(f"{num:<3} | {slug:<44} | {'NO':<6} | {'-':<6} | {'-':<4} | {'-':<6} | {('YES' if sitemap_match else 'NO'):<7} | NOT STARTED")
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
    words = len(re.findall(r"\b[A-Za-z0-9'-]+\b", body_clean))

    # Schemas
    schemas = re.findall(r'<script\s+type=["\']application/ld\+json["\']>(.*?)</script>', html, re.DOTALL)
    valid_schemas = 0
    for s in schemas:
        try:
            json.loads(s.strip())
            valid_schemas += 1
        except:
            pass

    # Images
    imgs = re.findall(r'<img[^>]+src=["\']([^"\']+)["\']', html)
    route_imgs = [src for src in imgs if 'images/' in src and 'assets/images' not in src]

    status = "READY"
    if words >= 1500 and valid_schemas >= 4 and len(route_imgs) >= 4 and sitemap_match:
        status = "COMPLETED"
    elif not sitemap_match:
        status = "NOT IN SITEMAP"
    else:
        status = "PARTIAL"

    print(f"{num:<3} | {slug:<44} | {'YES':<6} | {words:<6} | {len(route_imgs):<4} | {valid_schemas:<6} | {('YES' if sitemap_match else 'NO'):<7} | {status}")
