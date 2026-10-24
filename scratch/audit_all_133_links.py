import re
import os

md_path = 'RANCHI_ROUTE_PAGE_PROGRESS.md'
md_content = open(md_path, encoding='utf-8').read()

# Extract all route slugs in markdown tables: `slug`
slugs = re.findall(r'\| \d+ \| `([^`]+)`', md_content)
print(f"Total slugs found in {md_path}: {len(slugs)}")

results = []
for s in slugs:
    file_path = os.path.join('pages', f'{s}.php')
    if not os.path.exists(file_path):
        results.append((s, -1, 'FILE NOT FOUND', []))
        continue
    content = open(file_path, encoding='utf-8').read()
    links = re.findall(r'href=[\'"]<\?php echo SITE_BASE_URL; \?>/([^\'"]+)[\'"]', content)
    # Also find standard hrefs
    std_links = re.findall(r'href=[\'"]/(?!/)([^\'"]+)[\'"]', content)
    all_links = set(links + std_links)
    meaningful = [l for l in all_links if not l.startswith(('contact', 'assets', 'images', 'favicon', '#', 'tel:', 'mailto:', 'http'))]
    results.append((s, len(meaningful), file_path, meaningful))

print("\n--- PAGES NEEDING UPGRADES (meaningful links < 3) ---")
needing_upgrade = [r for r in results if r[1] < 3]
for s, count, fp, m in needing_upgrade:
    print(f"{s:55} : {count} meaningful links")

print(f"\nTotal needing upgrade: {len(needing_upgrade)} of {len(slugs)}")
print(f"Total already compliant (>=3 links): {len(slugs) - len(needing_upgrade)} of {len(slugs)}")
