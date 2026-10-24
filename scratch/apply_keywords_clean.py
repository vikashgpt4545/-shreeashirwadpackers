import json
import os
import re

with open('scratch/missing_keywords_report.json', 'r', encoding='utf-8') as f:
    data = json.load(f)

missing = data['missing_files']

# If missing_files is empty because of previous audit, regenerate the 164 list
if len(missing) == 0:
    print("Regenerating list of 164 files from pages...")
    import glob
    for p in glob.glob('pages/*.php'):
        with open(p, 'r', encoding='utf-8', errors='ignore') as f:
            c = f.read()
        if '<meta name="keywords"' not in c and "<meta name='keywords'" not in c and 'render_seo_tags(' not in c:
            missing.append({'filename': os.path.basename(p)})

print(f"Total files to update: {len(missing)}")

updated = []
errors = []

for item in missing:
    fn = item['filename']
    filepath = os.path.join('pages', fn)
    with open(filepath, 'r', encoding='utf-8') as f:
        content = f.read()

    # Safety check: already has keywords?
    if '<meta name="keywords"' in content or "<meta name='keywords'" in content:
        print(f"Skipping {fn}: already has meta keywords tag")
        continue

    # Extract keywords
    kw = ""
    m_kw = re.search(r'(?:Focus Keywords|Keywords):\s*([^\r\n*]+)', content, re.IGNORECASE)
    if m_kw:
        kw = m_kw.group(1).strip()
        kw = re.sub(r'\s*\*/.*', '', kw).strip()
    elif fn == 'patna-to-bokaro-packers-and-movers.php':
        kw = "patna to bokaro packers and movers, packers and movers patna to bokaro, house shifting patna to bokaro, car transport patna to bokaro, bike parcel patna to bokaro, intercity relocation patna to bokaro"

    if not kw:
        errors.append((fn, "No keywords found in docstring"))
        continue

    # Escape quotes if any
    kw_escaped = kw.replace('"', '&quot;')
    meta_tag = f'    <meta name="keywords" content="{kw_escaped}">'

    # Target line
    if fn == 'patna-to-bokaro-packers-and-movers.php':
        target_line = '    <meta name="description" content="<?php echo htmlspecialchars($pageDescription); ?>">'
    else:
        target_line = '    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">'

    if target_line not in content:
        errors.append((fn, f"Target line '{target_line}' not found"))
        continue

    new_content = content.replace(target_line, target_line + '\n' + meta_tag, 1)
    
    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(new_content)

    updated.append(fn)

print(f"\nSuccessfully updated: {len(updated)}/{len(missing)}")
print(f"Errors: {len(errors)}")

if errors:
    for fn, err in errors:
        print(f"  {fn}: {err}")
