import re
import os

with open("PAN_INDIA_HUB_PAGE_PROGRESS.md", "r", encoding="utf-8") as f:
    lines = f.readlines()

missing = []
all_found = []
for idx, line in enumerate(lines, 1):
    m = re.search(r'`(pages/packers-and-movers-in-[a-z0-9-]+\.php)`', line)
    if m:
        path = m.group(1)
        all_found.append(path)
        if not os.path.exists(path):
            missing.append((idx, path, line.strip()))

print(f"Total pages referenced in tables: {len(all_found)}")
print(f"Total physically missing pages: {len(missing)}")
for idx, path, line in missing:
    print(f"Line {idx}: {path}")
