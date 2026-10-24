import glob
import re
import os
import json

# 1. Read keywords
with open('keywords-all-unique.txt', 'r', encoding='utf-8') as f:
    keywords = [line.strip() for line in f if line.strip()]

print(f"Total keywords in file: {len(keywords)}")

# 2. Parse all pages
php_files = glob.glob('pages/*.php')
print(f"Total PHP files: {len(php_files)}")

slugs_set = set()
meta_kws_set = set()
corridor_pairs = set() # (orig_words, dest_words)
location_places = set() # place_words

for f in php_files:
    slug = os.path.basename(f)[:-4].lower()
    slugs_set.add(slug)
    slugs_set.add(slug.replace('-', ' '))

    # Extract meta keywords
    try:
        with open(f, 'r', encoding='utf-8', errors='ignore') as fp:
            content = fp.read()
        m_meta = re.search(r'<meta\s+name=[\"\']keywords[\"\']\s+content=[\"\']([^\"\']+)[\"\']', content, re.IGNORECASE)
        if m_meta:
            for item in m_meta.group(1).split(','):
                k = item.strip().lower()
                if k:
                    meta_kws_set.add(k)
    except Exception:
        pass

    # Corridor route
    if '-to-' in slug:
        parts = slug.split('-to-')
        orig = parts[0].replace('packers-and-movers-', '').replace('-packers-and-movers', '').strip()
        dest = parts[1].replace('packers-and-movers-', '').replace('-packers-and-movers', '').strip()
        orig_words = orig.replace('-', ' ').strip()
        dest_words = dest.replace('-', ' ').strip()
        if orig_words and dest_words:
            corridor_pairs.add((orig_words, dest_words, slug))

    # Location hub
    if slug.startswith('packers-and-movers-in-'):
        place = slug.replace('packers-and-movers-in-', '').strip()
        place_words = place.replace('-', ' ').strip()
        if place_words:
            location_places.add((place_words, slug))

# Sort location places by length descending
sorted_places = sorted(list(location_places), key=lambda x: len(x[0]), reverse=True)

print(f"Total unique meta keywords in pages: {len(meta_kws_set)}")
print(f"Total live corridor routes: {len(corridor_pairs)}")
print(f"Total live location places: {len(sorted_places)}")

# Moving intent terms
moving_terms = {
    'packer', 'packers', 'mover', 'movers', 'shifting', 'relocation', 
    'transport', 'cargo', 'parcel', 'courier', 'luggage', 'relocating',
    'goods', 'house', 'home', 'office', 'vehicle', 'car', 'bike'
}

used_keywords = {} # kw -> (category, detail)

for kw in keywords:
    kw_lower = kw.lower().strip()
    kw_tokens = set(re.findall(r'\b[a-z0-9]+\b', kw_lower))

    # Check 1: Exact meta keywords match
    if kw_lower in meta_kws_set:
        used_keywords[kw] = ('meta_keyword', 'exact_meta_tag')
        continue

    # Check 2: Exact page slug match
    kw_slug = re.sub(r'[^a-z0-9]+', '-', kw_lower).strip('-')
    if kw_slug in slugs_set or kw_lower in slugs_set:
        used_keywords[kw] = ('page_slug', kw_slug)
        continue

    # Check 3: Check if query has "to" (Directional / Corridor query)
    # E.g. "bangalore to delhi", "from patna to ranchi", "shifting items from pune to goa"
    if 'to' in kw_tokens:
        # Check against existing live corridor pairs
        matched_corridor = False
        for orig, dest, r_slug in corridor_pairs:
            orig_first = orig.split()[0]
            dest_first = dest.split()[0]
            if orig_first in kw_tokens and dest_first in kw_tokens:
                pattern = r'\b' + re.escape(orig) + r'\b.*?\bto\b.*?\b' + re.escape(dest) + r'\b'
                if re.search(pattern, kw_lower):
                    used_keywords[kw] = ('corridor_live', r_slug)
                    matched_corridor = True
                    break
        if matched_corridor:
            continue
        
        # NOTE: If it has 'to' and it's a corridor query (e.g. 'A to B') but the corridor is NOT in our live corridors,
        # DO NOT mark it as used by a local page! It's an unbuilt corridor!
        # Detect if it looks like an intercity move:
        # e.g., "from [city] to [city]" or "[city] to [city]"
        # If so, keep it in the pool for future corridors!
        m_to = re.search(r'\b([a-z]+)\s+to\s+([a-z]+)\b', kw_lower)
        if m_to:
            word1, word2 = m_to.group(1), m_to.group(2)
            # If neither word is a common preposition/stopword (like 'door to door', 'day to day', 'want to', 'how to', 'ready to', 'need to')
            non_place = {'door', 'day', 'how', 'want', 'need', 'ready', 'able', 'easy', 'time', 'date', 'place', 'call', 'way', 'close', 'next', 'up', 'back', 'due'}
            if word1 not in non_place and word2 not in non_place:
                # This is an unbuilt intercity route query! Keep it unused!
                continue

    # Check 4: Local Location query
    # If the query mentions a place for which we have a live location page:
    # E.g. "packers and movers in [place]", "house shifting [place]", "[place] movers"
    if kw_tokens.intersection(moving_terms):
        matched_loc = False
        for place, l_slug in sorted_places:
            place_words = place.split()
            # If all words of the place name are in query
            if all(pw in kw_tokens for pw in place_words):
                if re.search(r'\b' + re.escape(place) + r'\b', kw_lower):
                    used_keywords[kw] = ('location_live', l_slug)
                    matched_loc = True
                    break
        if matched_loc:
            continue

print(f"\n================ REFINED AUDIT SUMMARY ================")
print(f"Total initial keywords: {len(keywords)}")
print(f"Total used keywords found: {len(used_keywords)}")
print(f"Total unused keywords remaining: {len(keywords) - len(used_keywords)}")

cat_counts = {}
for kw, (cat, det) in used_keywords.items():
    cat_counts[cat] = cat_counts.get(cat, 0) + 1

print("\nCategory breakdown:")
for c, cnt in cat_counts.items():
    print(f"  - {c}: {cnt}")

out_data = {kw: {'category': cat, 'detail': det} for kw, (cat, det) in used_keywords.items()}
with open('scratch/refined_used_keywords.json', 'w', encoding='utf-8') as f:
    json.dump(out_data, f, indent=2)

print("\nSaved to scratch/refined_used_keywords.json")
