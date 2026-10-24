import glob
import re
import os

# 1. Read keywords-all-unique.txt
with open('keywords-all-unique.txt', 'r', encoding='utf-8') as f:
    kws = [l.strip() for l in f if l.strip()]

print(f"Total keywords in keywords-all-unique.txt: {len(kws)}")

# 2. Extract meta keywords and slugs from all pages/*.php
page_files = glob.glob('pages/*.php')
meta_kws_set = set()
slugs_set = set()
page_routes = []
location_pages = []

for pf in page_files:
    slug = os.path.basename(pf)[:-4].lower()
    slugs_set.add(slug)
    slugs_set.add(slug.replace('-', ' '))
    
    # Check if corridor
    m_route = re.match(r'^(?:packers-and-movers-)?([a-z0-9-]+)-to-([a-z0-9-]+)(?:-packers-and-movers)?$', slug)
    if m_route and '-to-' in slug:
        parts = slug.split('-to-')
        orig = parts[0].replace('packers-and-movers-', '').replace('-packers-and-movers', '').strip()
        dest = parts[1].replace('packers-and-movers-', '').replace('-packers-and-movers', '').strip()
        if orig and dest:
            page_routes.append((orig.replace('-', ' '), dest.replace('-', ' '), slug))
            
    # Check if local page: packers-and-movers-in-[place]
    m_loc = re.match(r'^packers-and-movers-in-([a-z0-9-]+)$', slug)
    if m_loc:
        place = m_loc.group(1).replace('-', ' ')
        location_pages.append((place, slug))

    try:
        with open(pf, 'r', encoding='utf-8', errors='ignore') as f:
            content = f.read()
        m = re.search(r'<meta\s+name=[\"\']keywords[\"\']\s+content=[\"\']([^\"\']+)[\"\']', content, re.IGNORECASE)
        if m:
            for item in m.group(1).split(','):
                cleaned = item.strip().lower()
                if cleaned:
                    meta_kws_set.add(cleaned)
    except Exception as e:
        pass

print(f"Total pages inspected: {len(page_files)}")
print(f"Total unique meta keywords in pages: {len(meta_kws_set)}")
print(f"Total corridor routes found: {len(page_routes)}")
print(f"Total location pages found: {len(location_pages)}")

# Match 1: exact match in meta_kws_set
m1 = [k for k in kws if k.lower() in meta_kws_set]
print(f"Match 1: Keywords found exactly in meta keywords tag: {len(m1)}")

# Match 2: exact match with slug
m2 = [k for k in kws if k.lower() in slugs_set]
print(f"Match 2: Keywords matching page slug as text: {len(m2)}")

# Let's inspect corridors in keywords
matched_corridor_kws = []
for k in kws:
    k_low = k.lower()
    for orig, dest, slug in page_routes:
        # Check if orig and dest are in k_low
        if orig in k_low and dest in k_low and 'to' in k_low:
            matched_corridor_kws.append((k, slug))
            break

print(f"Match 3: Keywords matching existing corridor routes: {len(matched_corridor_kws)}")

# Let's inspect location pages in keywords
matched_loc_kws = []
for k in kws:
    k_low = k.lower()
    # If it is a local query for an existing location page
    for place, slug in location_pages:
        # e.g., 'packers and movers in [place]' or '[place] packers and movers'
        if f"in {place}" in k_low or f"at {place}" in k_low or f"near {place}" in k_low or k_low.endswith(f" {place}") or k_low.startswith(f"{place} "):
            matched_loc_kws.append((k, slug))
            break

print(f"Match 4: Keywords matching existing location pages: {len(matched_loc_kws)}")
