import json
import os

# 1. Load audit results
with open('scratch/refined_used_keywords.json', 'r', encoding='utf-8') as f:
    used_map = json.load(f)

print(f"Total used keywords to remove: {len(used_map)}")

# 2. Read current keywords-all-unique.txt
with open('keywords-all-unique.txt', 'r', encoding='utf-8') as f:
    all_kws = [line.strip() for line in f if line.strip()]

print(f"Total initial keywords in keywords-all-unique.txt: {len(all_kws)}")

used_list = []
remaining_list = []

for kw in all_kws:
    if kw in used_map:
        used_list.append((kw, used_map[kw]))
    else:
        remaining_list.append(kw)

print(f"Found {len(used_list)} used keywords to remove.")
print(f"Remaining keywords: {len(remaining_list)}")

# 3. Save comprehensive used keywords archive
with open('scratch/completed_keywords_archive.txt', 'w', encoding='utf-8') as f:
    f.write(f"TOTAL COMPLETED & USED KEYWORDS REMOVED: {len(used_list)}\n")
    f.write("=" * 80 + "\n\n")
    for kw, meta in used_list:
        f.write(f"[{meta['category']} -> {meta['detail']}] {kw}\n")

# Also append to scratch/completed_corridor_keywords.txt
with open('scratch/completed_corridor_keywords.txt', 'a', encoding='utf-8') as f:
    f.write(f"\n\nTOTAL USED KEYWORDS PURGED ACROSS LIVE PAGES: {len(used_list)}\n")
    f.write("=" * 80 + "\n")
    for kw, meta in used_list:
        f.write(f"{kw}\n")

# 4. Overwrite keywords-all-unique.txt with remaining clean keywords
with open('keywords-all-unique.txt', 'w', encoding='utf-8') as f:
    for kw in remaining_list:
        f.write(kw + "\n")

# 5. Verify
with open('keywords-all-unique.txt', 'r', encoding='utf-8') as f:
    verify_kws = [line.strip() for line in f if line.strip()]

print(f"Successfully updated keywords-all-unique.txt!")
print(f"Verified line count: {len(verify_kws)}")
