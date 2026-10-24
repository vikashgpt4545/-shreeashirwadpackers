import subprocess
import os
import re
from html.parser import HTMLParser

php_file = 'pages/adityapur-to-jamshedpur-packers-and-movers.php'

# 1. PHP Syntax Check
res = subprocess.run([r'C:\xampp\php\php.exe', '-l', php_file], capture_output=True, text=True)
print("PHP Syntax:", res.stdout.strip())
assert 'No syntax errors detected' in res.stdout

with open(php_file, 'r', encoding='utf-8') as f:
    raw_content = f.read()

# 2. Check Meta Keywords & Description
has_kw = '<meta name="keywords"' in raw_content
has_desc = '<meta name="description"' in raw_content
has_style = 'style.css' in raw_content
print(f"Has Keywords: {has_kw} | Has Description: {has_desc} | Has Style: {has_style}")

# 3. Schemas count
schemas = re.findall(r'<script type="application/ld\+json">', raw_content)
print("JSON-LD Schemas found:", len(schemas))

# 4. Images physically existing on disk
img_srcs = re.findall(r'<img[^>]+src=[\'"]([^\'"]+)[\'"]', raw_content)
print(f"Images in HTML: {len(img_srcs)}")
for src in img_srcs:
    clean_src = src.replace('<?php echo SITE_BASE_URL; ?>/', '')
    exists = os.path.exists(clean_src)
    print(f"  {clean_src} -> Exists: {exists}")
    assert exists, f"Missing image {clean_src}"

# 5. Visible Word Count
class HTMLTextExtractor(HTMLParser):
    def __init__(self):
        super().__init__()
        self.text = []
        self.ignore = False

    def handle_starttag(self, tag, attrs):
        if tag in ['script', 'style']:
            self.ignore = True

    def handle_endtag(self, tag):
        if tag in ['script', 'style']:
            self.ignore = False

    def handle_data(self, data):
        if not self.ignore:
            self.text.append(data)

# Strip PHP blocks first
no_php = re.sub(r'<\?php.*?\?>', '', raw_content, flags=re.DOTALL)
parser = HTMLTextExtractor()
parser.feed(no_php)
full_text = ' '.join(parser.text)
words = [w for w in full_text.split() if len(w) > 1]
print("Visible Word Count:", len(words))

if len(words) < 1500:
    print(f"WARNING: Word count is {len(words)} (target >= 1500)")
else:
    print(f"SUCCESS: Word count is {len(words)} (>= 1500 target met!)")

print("\n--- ALL ROUTE 1 VERIFICATIONS COMPLETED ---")
