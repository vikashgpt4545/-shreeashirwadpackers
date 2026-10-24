import glob
import re

missing = [f for f in glob.glob('pages/*.php') if '<!DOCTYPE' not in open(f, encoding='utf-8', errors='ignore').read() and '<!doctype' not in open(f, encoding='utf-8', errors='ignore').read()]

for f in sorted(missing):
    c = open(f, encoding='utf-8', errors='ignore').read()
    php = re.search(r'<\?php(.*?)\?>', c, re.DOTALL).group(1)
    
    title = re.search(r'\$page_title\s*=\s*["\'](.*?)["\'];', php)
    desc = re.search(r'\$(?:page_desc|page_description|meta_description)\s*=\s*["\'](.*?)["\'];', php)
    canon = re.search(r'\$canonical_url\s*=\s*(.*?);', php)
    
    t_val = title.group(1) if title else 'MISSING'
    d_val = desc.group(1) if desc else 'MISSING'
    c_val = canon.group(1).strip() if canon else 'MISSING'
    
    print(f'{f}:')
    print(f'   Title: {t_val[:50]}...')
    print(f'   Desc:  {d_val[:50]}...')
    print(f'   Canon: {c_val}')
