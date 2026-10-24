import os, re

routes = []
with open('RANCHI_ROUTE_PAGE_PROGRESS.md', encoding='utf-8') as f:
    for line in f:
        # Match | # | `slug` |
        m = re.search(r'\|\s*\d+\s*\|\s*`([^`]+)`', line)
        if m:
            routes.append(m.group(1))

print(f'Total routes extracted from RANCHI_ROUTE_PAGE_PROGRESS.md: {len(routes)}')

has_links = []
missing_links = []

for r in routes:
    p = os.path.join('pages', r + '.php')
    if not os.path.exists(p):
        print(f'MISSING FILE: {p}')
        continue
    content = open(p, encoding='utf-8').read()
    hrefs = re.findall(r'<a\s+[^>]*href=[\'"]([^\'"]+)[\'"]', content, re.I)
    meaningful = [h for h in hrefs if not any(x in h for x in ['contact', 'tel:', 'whatsapp', 'api.whatsapp', 'mailto:', '#'])]
    if len(meaningful) >= 3:
        has_links.append((r, len(meaningful)))
    else:
        missing_links.append((r, len(meaningful)))

print(f'Ranchi routes WITH 3+ meaningful links: {len(has_links)}')
print(f'Ranchi routes with <3 meaningful links: {len(missing_links)}')

print('\nRoutes with <3 meaningful links:')
for r, c in missing_links:
    print(f'  {r:55} ({c} links)')
