import os
import re

pages_dir = 'pages'
all_files = [f for f in os.listdir(pages_dir) if f.endswith('.php')]

left_hero = []
left_headings = []
grid_260 = []

for f in all_files:
    path = os.path.join(pages_dir, f)
    with open(path, 'r', encoding='utf-8', errors='ignore') as fp:
        content = fp.read()
    
    # Check if page has scoped style
    style_matches = re.findall(r'<style>(.*?)</style>', content, re.DOTALL)
    if not style_matches:
        continue
    style = style_matches[0]
    
    # Check if hero is left aligned (e.g. hero has no text-align: center)
    hero_match = re.search(r'\.([a-z0-9]+)-hero(?:-section)?\s*\{([^}]+)\}', style)
    if hero_match:
        hero_css = hero_match.group(2)
        if 'text-align:\s*center' not in hero_css and 'text-align: center' not in hero_css:
            left_hero.append((f, hero_match.group(1)))
            
    if 'minmax(260px, 1fr)' in style or 'minmax(250px, 1fr)' in style:
        grid_260.append(f)

print(f"Total PHP files in pages: {len(all_files)}")
print(f"Files with left-aligned hero: {len(left_hero)}")
print(f"Files with 260px/250px grid: {len(grid_260)}")

print("\nRecent Batch 4 files with left-aligned hero:")
for f, pfx in left_hero:
    if any(k in f for k in ['noida', 'delhi', 'dwarka', 'rohini', 'janakpuri', 'pitampura', 'laxmi-nagar', 'vasant-kunj', 'saket', 'uttam-nagar', 'paschim-vihar', 'karol-bagh', 'lajpat-nagar', 'mayur-vihar']):
        print(f"  - {f} (prefix: {pfx})")
