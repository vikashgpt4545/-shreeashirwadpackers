import os
import re
import urllib.parse

pages_dir = r"d:\shreeashirwadpackers\pages"
router_path = r"d:\shreeashirwadpackers\router.php"
progress_path = r"d:\shreeashirwadpackers\PAN_INDIA_HUB_PAGE_PROGRESS.md"

all_php_files = set(f[:-4] for f in os.listdir(pages_dir) if f.endswith('.php'))

# Extract all routes and redirects from router.php
router_routes = set()
with open(router_path, 'r', encoding='utf-8') as f:
    text = f.read()

for m in re.finditer(r"['\"]([a-zA-Z0-9\-_]+)['\"]\s*=>", text):
    router_routes.add(m.group(1))

# Common root pages & services
common_routes = {
    '', 'about', 'gallery', 'contact', 'pay-online', 
    'residential-shifting', 'business-shifting', 'vehicle-shifting',
    'packing-and-unpacking', 'loading-and-unloading-services',
    'warehouse-service', 'international-service', 'domestics-service',
    'insurance-service'
}

valid_targets = all_php_files | router_routes | common_routes

# Parse Pan-India completed pages
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
                    'file': os.path.basename(target_file),
                    'slug': slug
                })

link_pattern = re.compile(r'<a\s+[^>]*href=["\']([^"\']+)["\']', re.IGNORECASE)

# 1. Audit Pan-India Completed Hubs (320 pages)
pan_results = []
for p in completed_pan_india:
    fpath = os.path.join(pages_dir, p['file'])
    if not os.path.exists(fpath):
        continue
    with open(fpath, 'r', encoding='utf-8', errors='ignore') as fp:
        content = fp.read()
    
    hrefs = link_pattern.findall(content)
    internal_links = []
    broken_links = []
    for h in hrefs:
        h_clean = h.strip()
        if h_clean.startswith(('tel:', 'mailto:', 'javascript:', '#')):
            continue
        if 'wa.me' in h_clean or 'api.whatsapp.com' in h_clean or 'google.com' in h_clean:
            continue
        
        # Clean slug
        slug = ""
        if '<?php echo SITE_BASE_URL; ?>/' in h_clean:
            slug = h_clean.replace('<?php echo SITE_BASE_URL; ?>/', '').strip('/')
        elif '<?php echo $base_url; ?>/' in h_clean:
            slug = h_clean.replace('<?php echo $base_url; ?>/', '').strip('/')
        elif h_clean.startswith('/'):
            slug = h_clean.strip('/')
        elif 'shreeashirwadpackers.com/' in h_clean:
            slug = urllib.parse.urlparse(h_clean).path.strip('/')
        elif not h_clean.startswith('http'):
            slug = h_clean.strip('/')
            
        slug = slug.split('?')[0].split('#')[0].rstrip('/')
        if slug is not None:
            internal_links.append(slug)
            if slug not in valid_targets:
                broken_links.append(slug)
                
    has_calc = bool(re.search(r'packers-and-movers-charges-in-ranchi', content))
    has_hq = bool(re.search(r'packers-and-movers-in-ranchi', content))
    
    pan_results.append({
        'num': p['num'],
        'file': p['file'],
        'total_internal': len(internal_links),
        'broken': broken_links,
        'has_calc': has_calc,
        'has_hq': has_hq
    })

pan_broken = [p for p in pan_results if len(p['broken']) > 0]
pan_no_calc = [p for p in pan_results if not p['has_calc']]
pan_no_hq = [p for p in pan_results if not p['has_hq']]
pan_low_links = [p for p in pan_results if p['total_internal'] < 4]

print(f"=== PAN-INDIA COMPLETED HUBS (320 pages) ===")
print(f"Broken internal links: {len(pan_broken)}")
print(f"Missing calculator link: {len(pan_no_calc)}")
print(f"Missing HQ link: {len(pan_no_hq)}")
print(f"Fewer than 4 in-body internal links: {len(pan_low_links)}")

if pan_broken:
    print("\nSample broken links in Pan-India pages:")
    for p in pan_broken[:5]:
        print(f"  #{p['num']} {p['file']}: {p['broken']}")

# 2. Audit All 1,270 Pages in pages/
all_results = []
for f in os.listdir(pages_dir):
    if not f.endswith('.php'):
        continue
    fpath = os.path.join(pages_dir, f)
    with open(fpath, 'r', encoding='utf-8', errors='ignore') as fp:
        content = fp.read()
    
    hrefs = link_pattern.findall(content)
    internal_links = []
    broken_links = []
    for h in hrefs:
        h_clean = h.strip()
        if h_clean.startswith(('tel:', 'mailto:', 'javascript:', '#')):
            continue
        if 'wa.me' in h_clean or 'api.whatsapp.com' in h_clean or 'google.com' in h_clean:
            continue
            
        slug = ""
        if '<?php echo SITE_BASE_URL; ?>/' in h_clean:
            slug = h_clean.replace('<?php echo SITE_BASE_URL; ?>/', '').strip('/')
        elif '<?php echo $base_url; ?>/' in h_clean:
            slug = h_clean.replace('<?php echo $base_url; ?>/', '').strip('/')
        elif h_clean.startswith('/'):
            slug = h_clean.strip('/')
        elif 'shreeashirwadpackers.com/' in h_clean:
            slug = urllib.parse.urlparse(h_clean).path.strip('/')
        elif not h_clean.startswith('http'):
            slug = h_clean.strip('/')
            
        slug = slug.split('?')[0].split('#')[0].rstrip('/')
        if slug is not None:
            internal_links.append(slug)
            if slug not in valid_targets:
                broken_links.append(slug)
                
    all_results.append({
        'file': f,
        'count': len(internal_links),
        'broken': broken_links
    })

all_0_links = [a for a in all_results if a['count'] == 0]
all_low_links = [a for a in all_results if a['count'] < 3]
all_broken = [a for a in all_results if len(a['broken']) > 0]

print(f"\n=== ALL 1,270 PAGES IN PAGES/ ===")
print(f"Pages with 0 internal links: {len(all_0_links)}")
print(f"Pages with < 3 internal links: {len(all_low_links)}")
print(f"Pages with broken link targets: {len(all_broken)}")

if all_broken:
    print("\nSample broken links across all pages:")
    for a in all_broken[:5]:
        print(f"  {a['file']}: {a['broken']}")
