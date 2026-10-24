import subprocess

res = subprocess.run(['git', 'status', '--porcelain'], capture_output=True, text=True)
lines = res.stdout.splitlines()

categories = {
    'website_pages': [],
    'website_assets': [],
    'website_includes': [],
    'website_root_core': [], # router.php, sitemap.xml, index.php, robots.txt, etc.
    'agent_rules_and_docs': [], # AGENTS.md, AI_PAGE_CREATION_RULES.md, PROJECT_STATE.md, TASK_PROGRESS.md, etc.
    'scratch_and_temp': [],
    'data_and_credentials': [], # service_account.json, xlsx, txt keywords
    'other': []
}

for line in lines:
    status = line[:2]
    filename = line[3:].strip()
    
    if filename.startswith('pages/'):
        categories['website_pages'].append((status, filename))
    elif filename.startswith('assets/'):
        categories['website_assets'].append((status, filename))
    elif filename.startswith('images/'):
        categories['website_assets'].append((status, filename))
    elif filename.startswith('includes/'):
        categories['website_includes'].append((status, filename))
    elif filename.startswith('scratch/'):
        categories['scratch_and_temp'].append((status, filename))
    elif filename.endswith('.md') or filename.startswith('.agents/'):
        categories['agent_rules_and_docs'].append((status, filename))
    elif filename in ['service_account.json', 'all-keywords.xlsx', 'disavow.txt'] or filename.startswith('keywords-'):
        categories['data_and_credentials'].append((status, filename))
    elif filename in ['router.php', 'sitemap.xml', 'index.php', 'robots.txt', '.htaccess', 'favicon.ico', 'favicon.png', 'sitemap.xsl', 'submit-quote.php']:
        categories['website_root_core'].append((status, filename))
    else:
        categories['other'].append((status, filename))

for cat, items in categories.items():
    print(f"=== {cat} ({len(items)} items) ===")
    for s, fn in items[:10]:
        print(f"  [{s}] {fn}")
    if len(items) > 10:
        print(f"  ... and {len(items)-10} more")
