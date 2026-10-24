import os
import re

progress_file = 'PAN_INDIA_HUB_PAGE_PROGRESS.md'
with open(progress_file, 'r', encoding='utf-8') as f:
    text = f.read()

# Extract all completed page targets
matches = re.findall(r'\|\s*(\d+)\s*\|\s*(City|Local)\s*\|[^|]+\|[^|]+\|\s*`pages/([^`]+)`\s*\|[^|]+\|\s*\[x\]\s*COMPLETED', text)

print(f"Total completed Pan-India pages in progress doc: {len(matches)}")

left_aligned_pan_india = []
for num, level, filename in matches:
    path = os.path.join('pages', filename)
    if not os.path.exists(path):
        continue
    with open(path, 'r', encoding='utf-8', errors='ignore') as fp:
        code = fp.read()
    
    style_m = re.findall(r'<style>(.*?)</style>', code, re.DOTALL)
    if not style_m:
        continue
    style = style_m[0]
    
    # check hero text-align: center
    hero_m = re.search(r'\.([a-z0-9]+)-hero(?:-section)?\s*\{([^}]+)\}', style)
    if hero_m:
        css = hero_m.group(2)
        if 'text-align: center' not in css:
            left_aligned_pan_india.append((num, level, filename, hero_m.group(1)))

print(f"\nPan-India completed pages with left-aligned hero: {len(left_aligned_pan_india)}")
for num, level, fn, pfx in left_aligned_pan_india:
    print(f"  Page {num} ({level}): {fn} (prefix: {pfx})")
