import os
import re

routes = [
    # Group 1: Dumka -> Inside JH (Routes 1-5)
    "dumka-to-giridih-packers-and-movers",
    "dumka-to-hazaribagh-packers-and-movers",
    "dumka-to-ramgarh-packers-and-movers",
    "dumka-to-godda-packers-and-movers",
    "dumka-to-sahibganj-packers-and-movers",
    # Group 2: Inside JH -> Dumka (Routes 6-10)
    "bokaro-to-dumka-packers-and-movers",
    "giridih-to-dumka-packers-and-movers",
    "hazaribagh-to-dumka-packers-and-movers",
    "ramgarh-to-dumka-packers-and-movers",
    "godda-to-dumka-packers-and-movers",
    # Group 3: Dumka -> Outside JH (Routes 11-15)
    "dumka-to-delhi-packers-and-movers",
    "dumka-to-bangalore-packers-and-movers",
    "dumka-to-pune-packers-and-movers",
    "dumka-to-asansol-packers-and-movers",
    "dumka-to-durgapur-packers-and-movers",
    # Group 4: Outside JH -> Dumka (Routes 16-20)
    "kolkata-to-dumka-packers-and-movers",
    "patna-to-dumka-packers-and-movers",
    "delhi-to-dumka-packers-and-movers",
    "bangalore-to-dumka-packers-and-movers",
    "asansol-to-dumka-packers-and-movers",
]

sitemap_path = 'sitemap.xml'
sitemap_content = ''
if os.path.exists(sitemap_path):
    with open(sitemap_path, 'r', encoding='utf-8') as f:
        sitemap_content = f.read()

print(f"{'#':<3} | {'Slug':<44} | {'Exists':<6} | {'Words':<6} | {'Imgs':<4} | {'Schema':<6} | {'Sitemap':<7} | {'Status'}")
print("-" * 98)

for i, slug in enumerate(routes, 1):
    file_path = f"pages/{slug}.php"
    exists = os.path.exists(file_path)
    words = 0
    imgs = 0
    schemas = 0
    in_sitemap = f"https://www.shreeashirwadpackers.com/{slug}" in sitemap_content

    if exists:
        with open(file_path, 'r', encoding='utf-8') as f:
            content = f.read()
            # Count schemas
            schemas = len(re.findall(r'<script\s+type=[\'"]application/ld\+json[\'"]>', content, re.IGNORECASE))
            # Count images
            imgs = len(re.findall(r'<img\s+[^>]*src=[\'"][^\'"]+[\'"]', content, re.IGNORECASE))
            # Extract visible text roughly
            # strip scripts and styles
            clean = re.sub(r'<script.*?</script>', '', content, flags=re.DOTALL | re.IGNORECASE)
            clean = re.sub(r'<style.*?</style>', '', clean, flags=re.DOTALL | re.IGNORECASE)
            clean = re.sub(r'<\?php.*?\?>', '', clean, flags=re.DOTALL)
            clean = re.sub(r'<[^>]+>', ' ', clean)
            words = len(re.findall(r'\b[a-zA-Z0-9_-]+\b', clean))

    status = "COMPLETED" if exists and words >= 1500 and imgs >= 4 and schemas >= 4 and in_sitemap else "PENDING"
    print(f"{i:<3} | {slug:<44} | {'YES' if exists else 'NO':<6} | {words:<6} | {imgs:<4} | {schemas:<6} | {'YES' if in_sitemap else 'NO':<7} | {status}")
