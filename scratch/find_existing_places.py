import os
import glob
import re

php_files = glob.glob('pages/*.php')

places_with_pages = set()
hub_places = set()
corridor_origins = set()
corridor_destinations = set()

for f in php_files:
    slug = os.path.basename(f)[:-4] # strip .php

    # Check if hub page
    m_hub = re.match(r'packers-and-movers-in-([a-z0-9-]+)', slug)
    if m_hub:
        hub_places.add(m_hub.group(1))

    # Check if route page
    m_route = re.match(r'([a-z0-9-]+)-to-([a-z0-9-]+)-packers-and-movers', slug)
    if m_route:
        corridor_origins.add(m_route.group(1))
        corridor_destinations.add(m_route.group(2))

all_places_used = hub_places.union(corridor_origins).union(corridor_destinations)

print(f"Total unique place slugs in pages/: {len(all_places_used)}")
print(f"Hub pages count: {len(hub_places)}")
print(f"Corridor origins count: {len(corridor_origins)}")

# Also let's inspect keywords-jharkhand.txt if it exists
if os.path.exists('keywords-jharkhand.txt'):
    with open('keywords-jharkhand.txt', 'r', encoding='utf-8') as kf:
        jh_content = kf.read()
    print(f"keywords-jharkhand.txt lines: {len(jh_content.splitlines())}")

# Let's see all hub pages
print("\nHub pages (packers-and-movers-in-...):")
for p in sorted(hub_places):
    print(f"  {p}")

# Corridors that have 20-route batches
corridor_counts = {}
for orig in corridor_origins:
    count = len(glob.glob(f'pages/{orig}-to-*.php'))
    corridor_counts[orig] = count

print("\nCorridors with outbound count >= 10:")
for orig, count in sorted(corridor_counts.items(), key=lambda x: x[1], reverse=True):
    if count >= 10:
        print(f"  {orig}: {count} routes")
