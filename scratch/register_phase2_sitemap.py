import xml.etree.ElementTree as ET

sitemap_path = 'sitemap.xml'
with open(sitemap_path, 'r', encoding='utf-8') as f:
    content = f.read()

new_slugs = [
    'single-item-furniture-shifting-service',
    'luggage-delivery-and-baggage-transport',
    'pet-relocation-services-india',
    'indoor-plant-relocation-services',
    'data-center-server-and-office-relocation',
    'household-goods-storage-and-warehousing',
    'fragile-antique-and-piano-moving-service',
    'interstate-bike-parcel-and-courier-service'
]

entries = []
for s in new_slugs:
    loc = f"https://www.shreeashirwadpackers.com/{s}"
    if loc in content:
        print(f"Skipping already present: {loc}")
        continue
    entry = f"""  <url>
    <loc>{loc}</loc>
    <lastmod>2026-10-22T21:40:00+05:30</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.85</priority>
  </url>"""
    entries.append(entry)

if entries:
    new_xml_block = '\n' + '\n'.join(entries) + '\n</urlset>'
    content = content.replace('</urlset>', new_xml_block)
    with open(sitemap_path, 'w', encoding='utf-8') as f:
        f.write(content)
    print(f"Added {len(entries)} new URLs to sitemap.xml")

# Verify with ElementTree
tree = ET.parse(sitemap_path)
root = tree.getroot()
urls = root.findall('{http://www.sitemaps.org/schemas/sitemap/0.9}url')
print(f"Total valid URLs in sitemap.xml: {len(urls)}")
