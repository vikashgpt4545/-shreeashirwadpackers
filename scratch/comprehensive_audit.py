import os
import glob
import re
import json

pages_dir = 'pages'
php_files = glob.glob(os.path.join(pages_dir, '*.php'))

report = {
    'total_files': len(php_files),
    'missing_style_css': [],
    'has_style_css': [],
    'bad_style_path': [],
    'missing_font_awesome': [],
    'corridor_breakdown': {}
}

for filepath in sorted(php_files):
    filename = os.path.basename(filepath)
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()

    # Search for stylesheet links to style.css
    style_matches = re.findall(r'<link[^>]+style(?:\.min)?\.css[^>]*>', content, re.IGNORECASE)
    fa_matches = re.findall(r'<link[^>]+font-awesome[^>]*>', content, re.IGNORECASE)

    has_style = len(style_matches) > 0
    has_fa = len(fa_matches) > 0

    if not has_style:
        report['missing_style_css'].append(filename)
    else:
        report['has_style_css'].append(filename)
        # Check if the path uses SITE_BASE_URL or relative
        for sm in style_matches:
            if 'SITE_BASE_URL' not in sm and 'http' not in sm and sm.startswith('<link') and 'href="/' not in sm and 'href="<?php echo $base_url' not in sm:
                report['bad_style_path'].append({'file': filename, 'tag': sm})

    if not has_fa:
        report['missing_font_awesome'].append(filename)

print("Total files:", report['total_files'])
print("Files missing style.css:", len(report['missing_style_css']))
print("Files with style.css:", len(report['has_style_css']))
print("Files with bad style path:", len(report['bad_style_path']))
print("Files missing font awesome:", len(report['missing_font_awesome']))

print("\n--- EXACT LIST OF PAGES MISSING STYLE.CSS ---")
for fn in report['missing_style_css']:
    print(fn)

with open('scratch/detailed_audit_report.json', 'w', encoding='utf-8') as out:
    json.dump(report, out, indent=2)
