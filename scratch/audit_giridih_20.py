import os
import re
import xml.etree.ElementTree as ET

routes = [
    ("1", "giridih-to-ramgarh-packers-and-movers"),
    ("2", "giridih-to-koderma-packers-and-movers"),
    ("3", "giridih-to-godda-packers-and-movers"),
    ("4", "giridih-to-chaibasa-packers-and-movers"),
    ("5", "giridih-to-sahibganj-packers-and-movers"),
    ("6", "ramgarh-to-giridih-packers-and-movers"),
    ("7", "koderma-to-giridih-packers-and-movers"),
    ("8", "godda-to-giridih-packers-and-movers"),
    ("9", "chaibasa-to-giridih-packers-and-movers"),
    ("10", "sahibganj-to-giridih-packers-and-movers"),
    ("11", "giridih-to-kolkata-packers-and-movers"),
    ("12", "giridih-to-patna-packers-and-movers"),
    ("13", "giridih-to-delhi-packers-and-movers"),
    ("14", "giridih-to-bangalore-packers-and-movers"),
    ("15", "giridih-to-pune-packers-and-movers"),
    ("16", "kolkata-to-giridih-packers-and-movers"),
    ("17", "patna-to-giridih-packers-and-movers"),
    ("18", "delhi-to-giridih-packers-and-movers"),
    ("19", "bangalore-to-giridih-packers-and-movers"),
    ("20", "asansol-to-giridih-packers-and-movers"),
]

tree = ET.parse("sitemap.xml")
root = tree.getroot()
sitemap_locs = {elem.text.strip() for elem in root.findall(".//{http://www.sitemaps.org/schemas/sitemap/0.9}loc")}

print(f"{'#':<4}| {'Slug':<45}| {'Exists':<7}| {'Words':<7}| {'Imgs':<5}| {'Schema':<7}| {'Sitemap':<8}| {'Status'}")
print("-" * 98)

for num, slug in routes:
    path = f"pages/{slug}.php"
    exists = os.path.exists(path)
    words = 0
    imgs = 0
    schemas = 0
    in_sitemap = f"https://www.shreeashirwadpackers.com/{slug}" in sitemap_locs
    
    if exists:
        with open(path, "r", encoding="utf-8", errors="ignore") as f:
            content = f.read()
            
        imgs = len(re.findall(r'<img[^>]+src=["\']([^"\']+)["\']', content))
        schemas = len(re.findall(r'<script type=["\']application/ld\+json["\']>', content))
        
        # calculate visible words approximately
        text = re.sub(r'<script.*?</script>', ' ', content, flags=re.DOTALL)
        text = re.sub(r'<style.*?</style>', ' ', text, flags=re.DOTALL)
        text = re.sub(r'<[^>]+>', ' ', text)
        words = len(re.findall(r'\b[a-zA-Z0-9_-]+\b', text))
        
    status = "COMPLETED" if exists and words >= 1500 and imgs >= 4 and schemas >= 4 and in_sitemap else "PENDING"
    print(f"{num:<4}| {slug:<45}| {'YES' if exists else 'NO':<7}| {words:<7}| {imgs:<5}| {schemas:<7}| {'YES' if in_sitemap else 'NO':<8}| {status}")
