import urllib.request
import ssl
import xml.etree.ElementTree as ET
import json
import os

ctx = ssl.create_default_context()
ctx.check_hostname = False
ctx.verify_mode = ssl.CERT_NONE
headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'}

sitemaps = [
    'https://suryapackersranchi.in/post-sitemap.xml',
    'https://suryapackersranchi.in/page-sitemap1.xml',
    'https://suryapackersranchi.in/page-sitemap2.xml',
    'https://suryapackersranchi.in/category-sitemap.xml'
]

results = {}

for sm in sitemaps:
    try:
        req = urllib.request.Request(sm, headers=headers)
        with urllib.request.urlopen(req, context=ctx, timeout=20) as resp:
            data = resp.read()
        tree = ET.fromstring(data)
        urls = []
        for url_elem in tree.findall('{http://www.sitemaps.org/schemas/sitemap/0.9}url'):
            loc = url_elem.find('{http://www.sitemaps.org/schemas/sitemap/0.9}loc')
            lastmod = url_elem.find('{http://www.sitemaps.org/schemas/sitemap/0.9}lastmod')
            urls.append({
                'loc': loc.text if loc is not None else '',
                'lastmod': lastmod.text if lastmod is not None else ''
            })
        results[sm] = urls
        print(f"Loaded {len(urls)} URLs from {sm}")
    except Exception as e:
        print(f"Error loading {sm}: {e}")

with open('scratch/surya_sitemap_urls.json', 'w', encoding='utf-8') as f:
    json.dump(results, f, indent=2)

all_surya_urls = []
for k, v in results.items():
    all_surya_urls.extend([item['loc'] for item in v])

print(f"\nTOTAL unique URLs across Surya Packers Ranchi: {len(set(all_surya_urls))}")
