import json
import os
import re

with open('scratch/missing_keywords_report.json', 'r', encoding='utf-8') as f:
    data = json.load(f)

missing = data['missing_files']

extracted_keywords = {}
empty_or_bad = []

for item in missing:
    fn = item['filename']
    filepath = os.path.join('pages', fn)
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()

    kw = ""
    # Check for "Focus Keywords:" or "Keywords:" in top docblock
    m = re.search(r'(?:Focus Keywords|Keywords):\s*([^\r\n*]+)', content, re.IGNORECASE)
    if m:
        kw = m.group(1).strip()
        # Clean up any trailing */
        kw = re.sub(r'\s*\*/.*', '', kw).strip()
    elif fn == 'patna-to-bokaro-packers-and-movers.php':
        kw = "patna to bokaro packers and movers, packers and movers patna to bokaro, house shifting patna to bokaro, car transport patna to bokaro, bike parcel patna to bokaro, intercity relocation patna to bokaro"
    
    if not kw or len(kw) < 10:
        empty_or_bad.append((fn, kw))
    else:
        extracted_keywords[fn] = kw

print(f"Total files: {len(missing)}")
print(f"Successfully extracted keywords: {len(extracted_keywords)}")
print(f"Empty or bad: {len(empty_or_bad)}")

if empty_or_bad:
    for fn, kw in empty_or_bad:
        print(f"  BAD: {fn} -> '{kw}'")

# Print 10 samples
print("\nSample 10 extracted keywords:")
for fn in list(extracted_keywords.keys())[:10]:
    print(f"  {fn} -> {extracted_keywords[fn]}")
