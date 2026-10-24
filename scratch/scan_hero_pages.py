import os
import re

pages_dir = 'pages'
all_pages = [f for f in os.listdir(pages_dir) if f.endswith('.php')]
print(f"Total pages in pages/: {len(all_pages)}")

route_hero_pages = []
other_hero_pages = []

for f in all_pages:
    path = os.path.join(pages_dir, f)
    with open(path, 'r', encoding='utf-8', errors='ignore') as fp:
        content = fp.read()
        if '.route-hero' in content:
            route_hero_pages.append(f)
        else:
            other_hero_pages.append(f)

print(f"Pages with .route-hero: {len(route_hero_pages)}")
print(f"Pages without .route-hero: {len(other_hero_pages)}")
