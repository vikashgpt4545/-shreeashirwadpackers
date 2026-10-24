import os
import re
import urllib.parse
import xml.etree.ElementTree as ET

pages_dir = r"d:\shreeashirwadpackers\pages"
sitemap_path = r"d:\shreeashirwadpackers\sitemap.xml"
progress_path = r"d:\shreeashirwadpackers\PAN_INDIA_HUB_PAGE_PROGRESS.md"

# 1. Parse sitemap.xml slugs
tree = ET.parse(sitemap_path)
root = tree.getroot()
namespace = {'ns': 'http://www.sitemaps.org/schemas/sitemap/0.9'}
sitemap_slugs = set()
for url_tag in root.findall('ns:url', namespace):
    loc = url_tag.find('ns:loc', namespace)
    if loc is not None and loc.text:
        path = urllib.parse.urlparse(loc.text.strip()).path.strip('/')
        sitemap_slugs.add(path)

print(f"Total unique URL slugs in sitemap.xml: {len(sitemap_slugs)}")

# 2. Parse PAN_INDIA_HUB_PAGE_PROGRESS.md
completed_pan_india = []
with open(progress_path, 'r', encoding='utf-8') as f:
    for line in f:
        if '[x] COMPLETED' in line and '|' in line:
            parts = [p.strip() for p in line.split('|')]
            if len(parts) >= 8 and parts[1].isdigit():
                page_num = int(parts[1])
                place = parts[3]
                target_file = parts[5].replace('`', '')
                slug = parts[6].replace('`', '').strip('/')
                completed_pan_india.append({
                    'num': page_num,
                    'place': place,
                    'file': target_file,
                    'slug': slug
                })

print(f"Total completed Pan-India hubs in ledger: {len(completed_pan_india)}")

# Check completed Pan-India hubs in sitemap
missing_pan_india_in_sitemap = []
for hub in completed_pan_india:
    if hub['slug'] not in sitemap_slugs:
        missing_pan_india_in_sitemap.append(hub)

print(f"Completed Pan-India hubs missing from sitemap: {len(missing_pan_india_in_sitemap)}")

# Check all pages/ in sitemap
all_php_files = [f for f in os.listdir(pages_dir) if f.endswith('.php')]
missing_all_pages_in_sitemap = []
for f in all_php_files:
    slug = f[:-4] # strip .php
    if slug not in sitemap_slugs:
        missing_all_pages_in_sitemap.append(f)

print(f"Total PHP files in pages/ missing from sitemap: {len(missing_all_pages_in_sitemap)}")

# 3. Meta Keywords check
missing_meta_keywords = []
has_meta_keywords = []

for f in all_php_files:
    fpath = os.path.join(pages_dir, f)
    with open(fpath, 'r', encoding='utf-8', errors='ignore') as fp:
        content = fp.read()
    if re.search(r'<meta\s+name=["\']keywords["\']', content, re.IGNORECASE) or re.search(r'\$page_keywords\s*=', content):
        has_meta_keywords.append(f)
    else:
        missing_meta_keywords.append(f)

print(f"Total pages WITH meta keywords: {len(has_meta_keywords)}")
print(f"Total pages MISSING meta keywords: {len(missing_meta_keywords)}")

# 4. In-body Interlinking check
# Check how many <a> links pointing to internal pages exist in the file
link_pattern = re.compile(r'<a\s+[^>]*href=["\']([^"\']+)["\']', re.IGNORECASE)
zero_in_body_links = []
under_4_in_body_links = []

for f in all_php_files:
    fpath = os.path.join(pages_dir, f)
    with open(fpath, 'r', encoding='utf-8', errors='ignore') as fp:
        content = fp.read()
    
    # Extract links
    hrefs = link_pattern.findall(content)
    # Exclude external links and contact protocols
    internal_hrefs = []
    for h in hrefs:
        h_clean = h.strip()
        if h_clean.startswith('tel:') or h_clean.startswith('mailto:') or h_clean.startswith('javascript:'):
            continue
        if 'wa.me' in h_clean or 'api.whatsapp.com' in h_clean or 'google.com/maps' in h_clean:
            continue
        if h_clean.startswith('http://') or h_clean.startswith('https://'):
            if 'shreeashirwadpackers.com' in h_clean:
                internal_hrefs.append(h_clean)
        else:
            # relative or php variable url
            internal_hrefs.append(h_clean)
            
    if len(internal_hrefs) == 0:
        zero_in_body_links.append(f)
    elif len(internal_hrefs) < 4:
        under_4_in_body_links.append((f, len(internal_hrefs)))

print(f"Total pages with 0 in-body internal links: {len(zero_in_body_links)}")
print(f"Total pages with < 4 in-body internal links: {len(under_4_in_body_links)}")

# Save detailed report
with open(r"d:\shreeashirwadpackers\scratch\comprehensive_audit_report.txt", "w", encoding="utf-8") as out:
    out.write("==================================================\n")
    out.write("1. SITEMAP AUDIT\n")
    out.write("==================================================\n")
    out.write(f"Completed Pan-India hubs missing from sitemap: {len(missing_pan_india_in_sitemap)}\n")
    for h in missing_pan_india_in_sitemap:
        out.write(f"  - #{h['num']} {h['place']} ({h['slug']})\n")
    out.write(f"\nAll pages in pages/ missing from sitemap: {len(missing_all_pages_in_sitemap)}\n")
    for f in missing_all_pages_in_sitemap:
        out.write(f"  - {f}\n")

    out.write("\n==================================================\n")
    out.write("2. META KEYWORDS AUDIT\n")
    out.write("==================================================\n")
    out.write(f"Total pages missing meta keywords: {len(missing_meta_keywords)}\n")
    for f in missing_meta_keywords:
        out.write(f"  - {f}\n")

    out.write("\n==================================================\n")
    out.write("3. INTERLINKING AUDIT\n")
    out.write("==================================================\n")
    out.write(f"Total pages with 0 internal links in body: {len(zero_in_body_links)}\n")
    for f in zero_in_body_links:
        out.write(f"  - {f}\n")
    out.write(f"\nTotal pages with under 4 internal links in body: {len(under_4_in_body_links)}\n")
    for f, count in under_4_in_body_links:
        out.write(f"  - {f} ({count} links)\n")
