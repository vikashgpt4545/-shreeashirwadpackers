import os, re
from collections import Counter

existing = set(os.listdir('pages'))

# Read keywords
with open('keywords-all-unique.txt', 'r', encoding='utf-8') as f:
    kws = [l.strip().lower() for l in f if l.strip()]

# Test high-volume unbuilt targets
target_cities = [
    'goa', 'kalyan-dombivli', 'hubli-dharwad', 'bhubaneswar-smart-city',
    'pimpri-chinchwad', 'secunderabad', 'indirapuram', 'greater-noida-west',
    'thane-west', 'navi-mumbai', 'dwarka-expressway', 'electronic-city'
]

for t in target_cities:
    slug = f"packers-and-movers-in-{t}.php"
    # check variations
    matches = [f for f in existing if t.replace('-', '') in f.replace('-', '')]
    print(f"{t}: {slug in existing} | similar: {matches[:3]}")
