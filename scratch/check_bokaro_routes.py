import urllib.request
import re
import json
import os

routes = [
    ('delhi-to-bokaro-packers-and-movers', 16),
    ('kolkata-to-bokaro-packers-and-movers', 17),
    ('patna-to-bokaro-packers-and-movers', 18)
]

for slug, num in routes:
    url = f'http://127.0.0.1:8000/{slug}'
    try:
        req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
        with urllib.request.urlopen(req) as resp:
            status = resp.getcode()
            html = resp.read().decode('utf-8', errors='ignore')
            title_m = re.search(r'<title>(.*?)</title>', html, re.DOTALL)
            title = title_m.group(1).strip() if title_m else 'NO TITLE'
            desc_m = re.search(r'<meta name="description" content="(.*?)"', html)
            desc = desc_m.group(1).strip() if desc_m else 'NO DESC'
            imgs = re.findall(r'<img[^>]+src=[\'"]([^\'"]+)[\'"]', html)
            schemas = re.findall(r'<script type="application/ld\+json">(.*?)</script>', html, re.DOTALL)
            latex = re.findall(r'\$\\rightarrow\$|\$\\leftarrow\$', html)
            clean = re.sub(r'<script[^>]*>.*?</script>', ' ', html, flags=re.DOTALL)
            clean = re.sub(r'<style[^>]*>.*?</style>', ' ', clean, flags=re.DOTALL)
            clean = re.sub(r'<header[^>]*>.*?</header>', ' ', clean, flags=re.DOTALL)
            clean = re.sub(r'<footer[^>]*>.*?</footer>', ' ', clean, flags=re.DOTALL)
            clean = re.sub(r'<[^>]+>', ' ', clean)
            words = re.findall(r"\b[A-Za-z0-9'-]+\b", clean)
            has_style = 'assets/css/style.css' in html
            print(f'Route {num} ({slug}): Status {status}, Words: {len(words)}, Images: {len(imgs)}, Schemas: {len(schemas)}, Latex: {len(latex)}, StyleCSS: {has_style}, Title: {len(title)} chars ("{title}"), Desc: {len(desc)} chars')
    except Exception as e:
        print(f'Route {num} ({slug}) ERROR: {e}')
