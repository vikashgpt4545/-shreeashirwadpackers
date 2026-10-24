import json
import os
import re

with open('scratch/missing_keywords_report.json', 'r', encoding='utf-8') as f:
    data = json.load(f)

missing = data['missing_files']

desc_patterns = {}
for item in missing:
    fn = item['filename']
    filepath = os.path.join('pages', fn)
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()

    # Find meta description line
    m = re.search(r'(<meta\s+name=[\'"]description[\'"][^>]+>)', content, re.IGNORECASE)
    if m:
        tag = m.group(1).strip()
        # sanitize to see pattern
        pat = re.sub(r'content=[\'"][^\'"]*[\'"]', 'content="..."', tag)
        desc_patterns[pat] = desc_patterns.get(pat, 0) + 1
    else:
        print(f"NO meta description in {fn}")

print("Description patterns found:")
for p, c in desc_patterns.items():
    print(f"  {p} -> {c} files")
