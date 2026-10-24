import os, re
from collections import Counter

with open('keywords-all-unique.txt', 'r', encoding='utf-8') as f:
    keywords = [line.strip() for line in f if line.strip()]

# Let's find keywords with "packers and movers in [X]" or "[X] packers and movers"
unbuilt_hubs = []
existing_pages = set(os.listdir('pages'))

pattern = re.compile(r'packers and movers in ([a-z\s\-]+)', re.IGNORECASE)
hub_counts = Counter()

for kw in keywords:
    m = pattern.search(kw)
    if m:
        place = m.group(1).strip()
        # slugify
        slug = 'packers-and-movers-in-' + re.sub(r'[^a-z0-9]+', '-', place.lower()).strip('-') + '.php'
        if slug not in existing_pages and not slug.endswith('-to-'):
            hub_counts[place] += 1

print("Top unbuilt 'packers and movers in [place]' queries in keywords-all-unique.txt:")
for place, count in hub_counts.most_common(40):
    slug = 'packers-and-movers-in-' + re.sub(r'[^a-z0-9]+', '-', place.lower()).strip('-') + '.php'
    print(f"  - {place} ({count} queries) -> {slug} (Exists: {slug in existing_pages})")
