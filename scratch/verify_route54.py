import urllib.request
import re
from bs4 import BeautifulSoup

url = "http://127.0.0.1:8000/ranchi-to-haridwar-packers-and-movers"
try:
    req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
    with urllib.request.urlopen(req) as resp:
        html = resp.read().decode('utf-8', errors='ignore')
        status = resp.status
except Exception as e:
    print(f"Error fetching URL: {e}")
    exit(1)

soup = BeautifulSoup(html, 'html.parser')

# Check Title
title = soup.title.string if soup.title else ""

# Remove scripts, styles, header, footer
for tag in soup(['script', 'style', 'header', 'footer', 'nav']):
    tag.decompose()

# Also remove copyright/bottom bar if any
text = soup.get_text(separator=' ')
words = [w for w in text.split() if w.strip()]
word_count = len(words)

# Check schemas
schemas = re.findall(r'<script type="application/ld\+json">(.*?)</script>', html, re.DOTALL)

# Check images in main content
images = re.findall(r'<img [^>]*src=["\']([^"\']+)["\']', html)

# Check for raw LaTeX syntax
latex_matches = re.findall(r'\$\w+\$|\$\\rightarrow\$', html)

print(f"STATUS: {status}")
print(f"TITLE: {title}")
print(f"WORD_COUNT: {word_count}")
print(f"SCHEMAS_FOUND: {len(schemas)}")
print(f"IMAGES_FOUND: {len(images)}")
print(f"LATEX_ERRORS: {len(latex_matches)}")
if latex_matches:
    print(f"LATEX MATCHES: {latex_matches[:5]}")
