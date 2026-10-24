import os
import glob
import re

pages_dir = 'pages'
php_files = glob.glob(os.path.join(pages_dir, '*.php'))

print(f"Total PHP files in {pages_dir}: {len(php_files)}")

results = {
    'missing_style_css': [],
    'has_style_css': [],
    'no_header_included': [],
    'has_inline_site_header': []
}

for filepath in sorted(php_files):
    filename = os.path.basename(filepath)
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()

    # Check if header.php is included
    has_header = ('header.php' in content)
    if not has_header:
        results['no_header_included'].append(filename)
        continue

    # Check if style.css or style.min.css is linked
    # <link ... href=".../style.css" or similar
    has_style_link = bool(re.search(r'href=[\'"][^\'"]*style(?:\.min)?\.css[\'"]', content, re.IGNORECASE))

    # Check if site-header or topbar is styled inline
    has_inline_header_css = ('.site-header' in content or '.topbar' in content) and '<style' in content

    if has_style_link:
        results['has_style_css'].append(filename)
    else:
        results['missing_style_css'].append({
            'filename': filename,
            'has_inline_header_css': has_inline_header_css
        })

print("\n--- SUMMARY ---")
print(f"Total pages checked: {len(php_files)}")
print(f"Pages with style.css/style.min.css link: {len(results['has_style_css'])}")
print(f"Pages with NO header.php: {len(results['no_header_included'])}")
print(f"Pages with header.php BUT MISSING style.css link: {len(results['missing_style_css'])}")

print("\nPages missing style.css link:")
for item in results['missing_style_css']:
    print(f"  {item['filename']} (inline header CSS: {item['has_inline_header_css']})")

if results['no_header_included']:
    print("\nPages without header.php:")
    for fn in results['no_header_included']:
        print(f"  {fn}")
