import urllib.request
import re
import json

url = 'http://127.0.0.1:8000/kolkata-to-bokaro-packers-and-movers'
try:
    req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
    with urllib.request.urlopen(req) as resp:
        html = resp.read().decode('utf-8')
        code = resp.getcode()
except Exception as e:
    print('Failed to fetch:', e)
    exit(1)

print('HTTP Status:', code)

# Check main tag word count
main_match = re.search(r'<main[^>]*>(.*?)</main>', html, re.DOTALL)
if main_match:
    main_text = re.sub(r'<script.*?</script>', ' ', main_match.group(1), flags=re.DOTALL)
    main_text = re.sub(r'<style.*?</style>', ' ', main_text, flags=re.DOTALL)
    main_text = re.sub(r'<[^>]+>', ' ', main_text)
    words = len(main_text.split())
    print('Main Word Count:', words)
else:
    print('No <main> tag found!')

# Check hero word count
hero_match = re.search(r'<section class=\"k2bko-hero\"[^>]*>(.*?)</section>', html, re.DOTALL)
if hero_match:
    hero_text = re.sub(r'<[^>]+>', ' ', hero_match.group(1))
    hero_words = len(hero_text.split())
    print('Hero Word Count:', hero_words)

# Schemas
schemas = re.findall(r'<script type="application/ld\+json">(.*?)</script>', html, re.DOTALL)
print('Schemas found:', len(schemas))
for i, s in enumerate(schemas, 1):
    try:
        data = json.loads(s.strip())
        print(f' Schema {i} Type:', data.get('@type'))
    except Exception as err:
        print(f' Schema {i} JSON ERROR:', err)

# Images
img_matches = re.findall(r'<img\s+([^>]+)>', html)
print(f'Total <img> tags: {len(img_matches)}')
route_imgs = 0
for m in img_matches:
    src_m = re.search(r'src="([^"]+)"', m)
    alt_m = re.search(r'alt="([^"]+)"', m)
    src = src_m.group(1) if src_m else ''
    alt = alt_m.group(1) if alt_m else ''
    if '/images/' in src:
        route_imgs += 1
        print(f' Route Img {route_imgs}: {src} | Alt: {alt[:50]}...')

print(f'Verified route images: {route_imgs}')

# LaTeX check
latex = re.findall(r'\$[^\$]+\$', html)
print('LaTeX patterns found:', len(latex), latex)
