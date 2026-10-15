import urllib.request
import re
import json

url = "http://127.0.0.1:8000/gaya-to-ranchi-packers-and-movers"
req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
try:
    resp = urllib.request.urlopen(req)
    status = resp.status
    html = resp.read().decode('utf-8')
except Exception as e:
    print(f"FAILED TO FETCH: {e}")
    exit(1)

print(f"HTTP Status: {status}")

# Word count in main wrapper
m = re.search(r'<div class="r2gay-wrapper">(.*?)<script>', html, re.DOTALL)
if not m:
    print("ERROR: .r2gay-wrapper not found!")
    exit(1)

wrapper_content = m.group(1)
clean_text = re.sub(r'<[^>]+>', ' ', wrapper_content)
clean_text = re.sub(r'\s+', ' ', clean_text).strip()
words = re.findall(r'\b[A-Za-z0-9\'-]+\b', clean_text)
word_count = len(words)
print(f"Visible Word Count: {word_count}")

# Check Schemas
schemas = re.findall(r'<script type="application/ld\+json">(.*?)</script>', html, re.DOTALL)
schema_types = []
for s in schemas:
    try:
        data = json.loads(s.strip())
        if '@type' in data:
            schema_types.append(data['@type'])
    except Exception as e:
        print(f"Schema parsing error: {e}")
print(f"Found Schemas ({len(schemas)}): {schema_types}")

# Check Images in wrapper
imgs = re.findall(r'<img[^>]+>', wrapper_content)
print(f"Images in content: {len(imgs)}")
for img in imgs:
    src = re.search(r'src="([^"]+)"', img)
    alt = re.search(r'alt="([^"]+)"', img)
    print(f" - Src: {src.group(1) if src else 'N/A'}, Alt: {alt.group(1) if alt else 'N/A'}")

# Check for LaTeX syntax
latex_matches = re.findall(r'(\$\S.*?\S\$|\\rightarrow)', html)
print(f"LaTeX syntax matches found: {len(latex_matches)}")
if latex_matches:
    print(f"Matches: {latex_matches[:5]}")

# Check for style.css and fonts
has_style_css = 'assets/css/style.css' in html
has_fonts = 'fonts.googleapis.com' in html
print(f"Has style.css: {has_style_css}")
print(f"Has fonts: {has_fonts}")

if status == 200 and word_count >= 1500 and len(schemas) >= 4 and len(imgs) == 4 and len(latex_matches) == 0 and has_style_css:
    print("\n>>> ROUTE 64 VERIFICATION PASSED! <<<")
else:
    print("\n>>> ROUTE 64 VERIFICATION FAILED! <<<")
