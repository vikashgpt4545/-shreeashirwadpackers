import glob
import re

files = glob.glob('pages/*.php')
css_patterns = {}

for f in files:
    with open(f, 'r', encoding='utf-8', errors='ignore') as fp:
        c = fp.read()
    links = re.findall(r'<link[^>]+rel=["\']stylesheet["\'][^>]*>', c)
    for l in links:
        href_match = re.search(r'href=["\']([^"\']+)["\']', l)
        href = href_match.group(1) if href_match else 'no-href'
        css_patterns[href] = css_patterns.get(href, 0) + 1

print("CSS link patterns across all pages:")
for href, count in sorted(css_patterns.items(), key=lambda x: -x[1]):
    print(f"  {count}x: {href}")
