import json
from collections import defaultdict

with open('scratch/missing_keywords_report.json', 'r', encoding='utf-8') as f:
    data = json.load(f)

missing = data['missing_files']

corridor_groups = defaultdict(list)

for item in missing:
    fn = item['filename']
    slug = fn.replace('.php', '')
    
    # Identify corridor by matching known patterns
    matched = False
    for c in ['dumka', 'deoghar', 'giridih', 'hazaribagh', 'dhanbad', 'ramgarh', 'jamtara', 'koderma', 'bokaro', 'godda', 'jamshedpur', 'asansol', 'kolkata', 'patna', 'delhi', 'bangalore', 'chaibasa', 'pune', 'sahibganj']:
        if f"-to-{c}" in slug or f"{c}-to-" in slug:
            corridor_groups[c.capitalize()].append(fn)
            matched = True
            break
    if not matched:
        corridor_groups['Other'].append(fn)

print(f"Total Missing: {len(missing)}")
for corr, files in sorted(corridor_groups.items(), key=lambda x: len(x[1]), reverse=True):
    print(f"\n### {corr} Corridor ({len(files)} pages):")
    for f in files:
        print(f"  - {f}")
