import re
import os

routes = [
    (1, "dhanbad-to-jamshedpur-packers-and-movers"),
    (2, "dhanbad-to-dumka-packers-and-movers"),
    (3, "dhanbad-to-giridih-packers-and-movers"),
    (4, "dhanbad-to-ramgarh-packers-and-movers"),
    (5, "dhanbad-to-chaibasa-packers-and-movers"),
    (6, "jamshedpur-to-dhanbad-packers-and-movers"),
    (7, "dumka-to-dhanbad-packers-and-movers"),
    (8, "giridih-to-dhanbad-packers-and-movers"),
    (9, "ramgarh-to-dhanbad-packers-and-movers"),
    (10, "koderma-to-dhanbad-packers-and-movers"),
    (11, "dhanbad-to-bangalore-packers-and-movers"),
    (12, "dhanbad-to-pune-packers-and-movers"),
    (13, "dhanbad-to-mumbai-packers-and-movers"),
    (14, "dhanbad-to-hyderabad-packers-and-movers"),
    (15, "dhanbad-to-asansol-packers-and-movers"),
    (16, "kolkata-to-dhanbad-packers-and-movers"),
    (17, "patna-to-dhanbad-packers-and-movers"),
    (18, "delhi-to-dhanbad-packers-and-movers"),
    (19, "bangalore-to-dhanbad-packers-and-movers"),
    (20, "asansol-to-dhanbad-packers-and-movers")
]

# Read sitemap
sitemap_path = "d:/shreeashirwadpackers/sitemap.xml"
with open(sitemap_path, "r", encoding="utf-8") as f:
    sitemap_content = f.read()

print(f"{'#':<3} | {'Slug':<44} | {'Exists':<6} | {'Words':<6} | {'Imgs':<4} | {'Schema':<6} | {'Sitemap':<7} | {'Status'}")
print("-" * 98)

for num, slug in routes:
    filepath = f"d:/shreeashirwadpackers/pages/{slug}.php"
    exists = os.path.exists(filepath)
    words = "-"
    imgs = "-"
    schema = "-"
    sitemap = "YES" if slug in sitemap_content else "NO"
    status = "NOT STARTED"
    
    if exists:
        with open(filepath, "r", encoding="utf-8") as f:
            code = f.read()
        
        # strip php tags, script, style, html tags
        clean_code = re.sub(r'<\?php.*?\?>', '', code, flags=re.DOTALL)
        clean_code = re.sub(r'<script.*?</script>', '', clean_code, flags=re.DOTALL)
        clean_code = re.sub(r'<style.*?</style>', '', clean_code, flags=re.DOTALL)
        clean_code = re.sub(r'<[^>]+>', ' ', clean_code)
        raw_words = clean_code.split()
        words = len(raw_words)
        
        # count images
        img_matches = re.findall(r'<img[^>]+src=["\']([^"\']+)["\']', code)
        imgs = len(img_matches)
        
        # count schemas
        schemas = re.findall(r'<script\s+type=["\']application/ld\+json["\']', code)
        schema = len(schemas)
        
        if words >= 1500 and imgs >= 4 and schema >= 4 and sitemap == "YES":
            status = "COMPLETED"
        elif sitemap == "NO":
            status = "NOT IN SITEMAP"
        else:
            status = "INCOMPLETE"
            
    print(f"{num:<3} | {slug:<44} | {'YES' if exists else 'NO':<6} | {str(words):<6} | {str(imgs):<4} | {str(schema):<6} | {sitemap:<7} | {status}")
