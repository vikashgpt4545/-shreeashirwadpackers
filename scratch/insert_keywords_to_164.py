import json
import os
import re
import subprocess

with open('scratch/missing_keywords_report.json', 'r', encoding='utf-8') as f:
    data = json.load(f)

missing = data['missing_files']

updated_files = []
failed_files = []

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
        print(f"FAILED: No keywords found for {fn}")
        failed_files.append((fn, "No keywords found"))
        continue

    # Escape any double quotes in kw if present
    kw_escaped = kw.replace('"', '&quot;')
    meta_tag = f'    <meta name="keywords" content="{kw_escaped}">'

    # Find the meta description line
    m_desc = re.search(r'(<meta\s+name=[\'"]description[\'"][^>]+>)', content, re.IGNORECASE)
    if not m_desc:
        print(f"FAILED: No meta description tag found in {fn}")
        failed_files.append((fn, "No description tag"))
        continue

    desc_line = m_desc.group(1)
    
    # We replace desc_line with desc_line + newline + meta_tag
    new_content = content.replace(desc_line, desc_line + '\n' + meta_tag, 1)

    if new_content == content:
        print(f"FAILED: Replacement did not alter content in {fn}")
        failed_files.append((fn, "Replacement failed"))
        continue

    with open(filepath, 'w', encoding='utf-8') as f:
        f.write(new_content)

    updated_files.append(fn)

print(f"\n--- EXECUTION SUMMARY ---")
print(f"Total targeted files: {len(missing)}")
print(f"Successfully updated files: {len(updated_files)}")
print(f"Failed files: {len(failed_files)}")

if failed_files:
    for fn, reason in failed_files:
        print(f"  {fn}: {reason}")
