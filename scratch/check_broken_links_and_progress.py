import os
import re

# Load router.php to get redirect map and known routes
router_code = open('router.php', encoding='utf-8').read()
redirect_map_matches = re.findall(r"'([^']+)'\s*=>\s*'([^']+)'", router_code)
redirect_map = {k: v for k, v in redirect_map_matches}

# Extract all pages in pages/ directory
pages_dir = 'pages'
existing_pages = set()
for f in os.listdir(pages_dir):
    if f.endswith('.php'):
        existing_pages.add(f[:-4])

root_files = set()
for f in os.listdir('.'):
    if f.endswith('.php'):
        root_files.add(f[:-4])

def is_valid_target(slug):
    slug = slug.strip().strip('/')
    if not slug: # root /
        return True
    # Strip any anchor or query params
    slug = slug.split('#')[0].split('?')[0]
    if not slug:
        return True
    if slug.endswith('.php'):
        slug = slug[:-4]
    
    # Check if page file exists
    if slug in existing_pages:
        return True
    if slug in root_files:
        return True
    if slug in redirect_map:
        return True
    
    # Specific known valid endpoints
    if slug in ['contact', 'about', 'gallery', 'pricing', 'cost-calculator',
                'residential-shifting', 'business-shifting', 'vehicle-shifting',
                'packing-and-unpacking', 'loading-and-unloading-services',
                'warehouse-service', 'international-service', 'domestics-service',
                'insurance-service']:
        # verify if file actually exists
        if os.path.exists(os.path.join('pages', f'{slug}.php')) or os.path.exists(f'{slug}.php'):
            return True
        return False
        
    return False

# 1. Check all 133 slugs in RANCHI_ROUTE_PAGE_PROGRESS.md
md_path = 'RANCHI_ROUTE_PAGE_PROGRESS.md'
md_content = open(md_path, encoding='utf-8').read()
ranchi_slugs = re.findall(r'\| \d+ \| `([^`]+)`', md_content)

print(f"=== 133 RANCHI CORRIDORS LINK AUDIT ===")
print(f"Total slugs in ledger: {len(ranchi_slugs)}")

corridor_broken_links = {}
corridor_calc_links = {}
compliant_corridors = []
non_compliant_corridors = []

for s in ranchi_slugs:
    file_path = os.path.join('pages', f'{s}.php')
    if not os.path.exists(file_path):
        non_compliant_corridors.append((s, 0, 'File not found'))
        continue
    content = open(file_path, encoding='utf-8').read()
    
    # Extract links
    php_links = re.findall(r'href=[\'"]<\?php echo SITE_BASE_URL; \?>/([^\'"]*)[\'"]', content)
    std_links = re.findall(r'href=[\'"]/(?!/)([^\'"]*)[\'"]', content)
    all_links = set(php_links + std_links)
    
    # meaningful internal links (exclude assets, contact, tel, mailto, etc)
    meaningful = []
    for l in all_links:
        clean_l = l.split('#')[0].split('?')[0].strip('/')
        if not clean_l:
            continue
        if clean_l.startswith(('assets', 'images', 'favicon', 'tel:', 'mailto:', 'javascript:')):
            continue
        meaningful.append(clean_l)
        
        # Check validity
        if not is_valid_target(clean_l):
            if s not in corridor_broken_links:
                corridor_broken_links[s] = []
            corridor_broken_links[s].append(clean_l)
            
        # Check if calculator
        if 'calc' in clean_l or 'pricing' in clean_l:
            if s not in corridor_calc_links:
                corridor_calc_links[s] = []
            corridor_calc_links[s].append(clean_l)
            
    if len(meaningful) >= 3:
        compliant_corridors.append((s, len(meaningful)))
    else:
        non_compliant_corridors.append((s, len(meaningful), 'Less than 3 links'))

print(f"Compliant (>=3 meaningful links): {len(compliant_corridors)} of {len(ranchi_slugs)}")
print(f"Non-compliant (<3 meaningful links): {len(non_compliant_corridors)} of {len(ranchi_slugs)}")
for s, cnt, reason in non_compliant_corridors:
    print(f"  - {s}: {cnt} links ({reason})")

print(f"\nCorridors with BROKEN / 404 links: {len(corridor_broken_links)}")
for s, blist in corridor_broken_links.items():
    print(f"  - {s}: {blist}")

print(f"\nCorridors with CALC / PRICING links: {len(corridor_calc_links)}")
for s, clist in corridor_calc_links.items():
    print(f"  - {s}: {clist}")

# 2. Check ALL pages in pages/ directory for calculator / pricing links
print("\n=== SCANNING ALL PAGES IN pages/ FOR CALCULATOR / PRICING LINKS ===")
all_calc_links = {}
all_broken_links_total = 0

for f in os.listdir('pages'):
    if not f.endswith('.php'):
        continue
    filepath = os.path.join('pages', f)
    content = open(filepath, encoding='utf-8').read()
    php_links = re.findall(r'href=[\'"]<\?php echo SITE_BASE_URL; \?>/([^\'"]*)[\'"]', content)
    std_links = re.findall(r'href=[\'"]/(?!/)([^\'"]*)[\'"]', content)
    for l in set(php_links + std_links):
        clean_l = l.split('#')[0].split('?')[0].strip('/')
        if 'calc' in clean_l or 'pricing' in clean_l:
            if f not in all_calc_links:
                all_calc_links[f] = []
            all_calc_links[f].append((clean_l, is_valid_target(clean_l)))

print(f"Total files linking to calc or pricing: {len(all_calc_links)}")
for f, links in all_calc_links.items():
    for target, valid in links:
        status = "VALID (200)" if valid else "404 BROKEN"
        print(f"  - {f}: target='{target}' -> {status}")
