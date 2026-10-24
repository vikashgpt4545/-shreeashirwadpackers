import os
import glob
import re

pages_dir = 'pages'
php_files = glob.glob(os.path.join(pages_dir, '*.php'))

print(f"Total PHP files in {pages_dir}: {len(php_files)}")

has_style_in_link = []
missing_style_completely = []
style_not_in_link = []

for filepath in sorted(php_files):
    filename = os.path.basename(filepath)
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        lines = f.readlines()

    found_link = False
    found_any = False
    found_lines = []

    for idx, line in enumerate(lines, 1):
        if 'style.css' in line or 'style.min.css' in line:
            found_any = True
            found_lines.append((idx, line.strip()))
            if '<link' in line:
                found_link = True

    if found_link:
        has_style_in_link.append((filename, found_lines))
    elif found_any:
        style_not_in_link.append((filename, found_lines))
    else:
        missing_style_completely.append(filename)

print(f"\n1. Files with style.css in <link>: {len(has_style_in_link)}")
print(f"2. Files with style.css mentioned but NOT in <link>: {len(style_not_in_link)}")
print(f"3. Files COMPLETELY MISSING style.css: {len(missing_style_completely)}")

print("\n--- List of Files with style.css mentioned but NOT in <link> ---")
for fn, lns in style_not_in_link:
    print(f"  {fn}: {lns}")

print("\n--- List of Files COMPLETELY MISSING style.css ---")
for fn in missing_style_completely:
    print(f"  {fn}")
