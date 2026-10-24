import os
import re

# 1. Total files in pages/
all_files = [f for f in os.listdir('pages') if f.endswith('.php')]
print(f"Total PHP files in pages/: {len(all_files)}")

# 2. Check sitemap.xml
with open('sitemap.xml', 'r', encoding='utf-8') as f:
    sitemap_text = f.read()
sitemap_urls = re.findall(r'<loc>(.*?)</loc>', sitemap_text)
print(f"Total URLs in sitemap.xml: {len(sitemap_urls)}")

# 3. Check PAN_INDIA_HUB_PAGE_PROGRESS.md
with open('PAN_INDIA_HUB_PAGE_PROGRESS.md', 'r', encoding='utf-8') as f:
    lines = f.readlines()

table_rows = []
for line in lines:
    line_s = line.strip()
    if line_s.startswith('|') and 'pages/' in line_s:
        parts = [p.strip() for p in line_s.split('|')[1:-1]]
        table_rows.append(parts)

completed_in_ledger = 0
pending_in_ledger = 0
physically_exists = 0
physically_missing = 0
missing_files = []

for parts in table_rows:
    row_text = " | ".join(parts)
    status_col = parts[-1]
    
    # Extract file path
    m = re.search(r'pages/[\w\-]+\.php', row_text)
    if m:
        fpath = m.group(0).replace('/', os.sep)
        if os.path.exists(fpath):
            physically_exists += 1
        else:
            physically_missing += 1
            missing_files.append(fpath)
            
    if '[x]' in status_col:
        completed_in_ledger += 1
    else:
        pending_in_ledger += 1

print(f"Pan-India Ledger Rows: {len(table_rows)}")
print(f"Pan-India Ledger Marked Completed [x]: {completed_in_ledger}")
print(f"Pan-India Ledger Marked Pending [ ]: {pending_in_ledger}")
print(f"Pan-India Hub files that physically exist on disk: {physically_exists}")
print(f"Pan-India Hub files pending creation on disk: {physically_missing}")

# Check any discrepancy between completed_in_ledger and physically_exists
if physically_exists > completed_in_ledger:
    print(f"Note: {physically_exists - completed_in_ledger} file(s) exist on disk but are still marked [ ] in ledger (e.g. newly created).")

# 4. Check breakdown of all pages in pages/
# How many are corridor pages vs hub pages vs core service pages vs blog pages?
corridor_pages = [f for f in all_files if '-to-' in f]
in_city_pages = [f for f in all_files if f.startswith('packers-and-movers-in-')]
other_pages = [f for f in all_files if f not in corridor_pages and f not in in_city_pages]

print(f"Breakdown of 1,422 pages in pages/:")
print(f"  - Corridor / Route pages (*-to-*): {len(corridor_pages)}")
print(f"  - City & Locality Hub pages (packers-and-movers-in-*): {len(in_city_pages)}")
print(f"  - Core service / Blog / Special pages: {len(other_pages)}")
