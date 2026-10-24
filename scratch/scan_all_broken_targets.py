import os
import re

router_code = open('router.php', encoding='utf-8').read()
redirect_map_matches = re.findall(r"'([^']+)'\s*=>\s*'([^']+)'", router_code)
redirect_map = {k: v for k, v in redirect_map_matches}

existing_pages = set(f[:-4] for f in os.listdir('pages') if f.endswith('.php'))
root_files = set(f[:-4] for f in os.listdir('.') if f.endswith('.php'))

def check_target(slug):
    slug = slug.strip().strip('/')
    if not slug:
        return True
    slug = slug.split('#')[0].split('?')[0]
    if not slug:
        return True
    if slug.endswith('.php'):
        slug = slug[:-4]
    if slug in existing_pages or slug in root_files or slug in redirect_map:
        return True
    return False

broken_by_target = {}
pages_with_broken = {}

for f in sorted(os.listdir('pages')):
    if not f.endswith('.php'):
        continue
    content = open(os.path.join('pages', f), encoding='utf-8').read()
    
    # Extract links
    php_links = re.findall(r'href=[\'"]<\?php echo SITE_BASE_URL; \?>/([^\'"]*)[\'"]', content)
    std_links = re.findall(r'href=[\'"]/(?!/)([^\'"]*)[\'"]', content)
    
    for l in set(php_links + std_links):
        clean_l = l.split('#')[0].split('?')[0].strip('/')
        if not clean_l:
            continue
        if clean_l.startswith(('assets', 'images', 'favicon', 'tel:', 'mailto:', 'javascript:')):
            continue
            
        if not check_target(clean_l):
            if clean_l not in broken_by_target:
                broken_by_target[clean_l] = []
            broken_by_target[clean_l].append(f)
            
            if f not in pages_with_broken:
                pages_with_broken[f] = []
            pages_with_broken[f].append(clean_l)

print(f"Total distinct broken targets: {len(broken_by_target)}")
print("\nBreakdown by broken target (target -> number of files referencing it):")
for target, filelist in sorted(broken_by_target.items(), key=lambda x: len(x[1]), reverse=True):
    print(f"  {target:35} : referenced in {len(filelist)} pages (e.g. {filelist[0]})")
