import os
import glob
import re

pages_dir = 'pages'
php_files = glob.glob(os.path.join(pages_dir, '*.php'))

link_variants = {}

for filepath in sorted(php_files):
    filename = os.path.basename(filepath)
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()

    # Find any line with style.css or style.min.css
    matches = [line.strip() for line in content.splitlines() if 'style.css' in line or 'style.min.css' in line]
    if matches:
        variant = " | ".join(matches)
        if variant not in link_variants:
            link_variants[variant] = []
        link_variants[variant].append(filename)

print(f"Total link tag patterns found across 783 pages: {len(link_variants)}\n")
for pattern, files in link_variants.items():
    print(f"Pattern ({len(files)} files):\n  {pattern}\n  Sample: {files[0]}\n")
