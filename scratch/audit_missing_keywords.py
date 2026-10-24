import os
import glob
import re
import json

pages_dir = 'pages'
php_files = glob.glob(os.path.join(pages_dir, '*.php'))

print(f"Total PHP files in {pages_dir}: {len(php_files)}")

has_meta_keywords = []
missing_meta_keywords = []

for filepath in sorted(php_files):
    filename = os.path.basename(filepath)
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()

    # Check for meta keywords tag in HTML
    has_tag = bool(re.search(r'<meta\s+name=[\'"]keywords[\'"]', content, re.IGNORECASE))
    
    # Check for render_seo_tags call
    has_render = bool(re.search(r'render_seo_tags\(', content))

    # Check if keywords exist in PHP docblock or variables
    has_doc_keywords = bool(re.search(r'keywords?:', content, re.IGNORECASE))

    if has_tag or has_render:
        has_meta_keywords.append({
            'filename': filename,
            'via_render_seo': has_render,
            'via_tag': has_tag
        })
    else:
        # Extract docstring keywords if present
        doc_kw = ""
        m = re.search(r'Focus Keywords:\s*([^\n\r*]+)', content, re.IGNORECASE)
        if m:
            doc_kw = m.group(1).strip()
        elif re.search(r'Keywords:\s*([^\n\r*]+)', content, re.IGNORECASE):
            m2 = re.search(r'Keywords:\s*([^\n\r*]+)', content, re.IGNORECASE)
            doc_kw = m2.group(1).strip()

        missing_meta_keywords.append({
            'filename': filename,
            'has_doc_keywords': bool(doc_kw),
            'sample_keywords': doc_kw[:60] if doc_kw else ""
        })

print("\n--- AUDIT RESULTS ---")
print(f"Total pages scanned: {len(php_files)}")
print(f"Pages WITH <meta name='keywords'> tag: {len(has_meta_keywords)}")
print(f"Pages MISSING <meta name='keywords'> tag: {len(missing_meta_keywords)}")

# Corridor grouping for missing pages
corridors = {}
for item in missing_meta_keywords:
    fn = item['filename']
    # identify corridor
    parts = fn.replace('-packers-and-movers.php', '').replace('.php', '').split('-to-')
    if len(parts) == 2:
        prefix = parts[0]
    else:
        prefix = 'other'
    corridors[prefix] = corridors.get(prefix, 0) + 1

print("\nCorridors with missing keywords breakdown (sample):")
for corr, cnt in sorted(corridors.items(), key=lambda x: x[1], reverse=True)[:20]:
    print(f"  {corr}: {cnt} pages")

# Save detailed report to json
report = {
    'total_scanned': len(php_files),
    'with_keywords_count': len(has_meta_keywords),
    'missing_keywords_count': len(missing_meta_keywords),
    'missing_files': missing_meta_keywords
}

with open('scratch/missing_keywords_report.json', 'w', encoding='utf-8') as f:
    json.dump(report, f, indent=2)

print("\nSaved detailed report to scratch/missing_keywords_report.json")
