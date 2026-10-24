import os, re
from collections import Counter

existing = set(os.listdir('pages'))
with open('keywords-all-unique.txt', 'r', encoding='utf-8') as f:
    kws = [l.strip().lower() for l in f if l.strip()]

candidates = [
    'goa', 'kalyan-dombivli', 'hubli-dharwad', 'bhubaneswar-smart-city',
    'pimpri-chinchwad', 'greater-noida-west', 'dwarka-expressway',
    'sohna-road-gurgaon', 'golf-course-road-gurgaon', 'new-gurgaon',
    'whitefield-kadugodi', 'sarjapur-road-bangalore', 'kundalahalli-bangalore',
    'kalyan-nagar-bangalore', 'baner-pashan-pune', 'viman-nagar-pune',
    'kondapur-hyderabad', 'madhapur-hitec-city', 'porur-chennai', 'tambaram-chennai',
    'rajarhat-kolkata', 'salt-lake-sector-5', 'ghodbunder-road-thane', 'mira-bhayandar'
]

results = []
for c in candidates:
    slug = f"packers-and-movers-in-{c}.php"
    has_exact = slug in existing
    # check if base name in any file
    base = c.split('-')[0]
    similar = [f for f in existing if c in f]
    results.append((c, slug, has_exact, len(similar)))

print(f"{'Candidate':<30} | {'Exact Exists':<12} | {'Similar Exists':<12}")
print("-" * 60)
for c, slug, exact, sim in results:
    print(f"{c:<30} | {str(exact):<12} | {str(sim > 0):<12}")
