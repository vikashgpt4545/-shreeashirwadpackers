import urllib.request
import ssl
import re
import json

ctx = ssl.create_default_context()
ctx.check_hostname = False
ctx.verify_mode = ssl.CERT_NONE
headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'}

test_urls = [
    'https://suryapackersranchi.in/',
    'https://suryapackersranchi.in/packers-and-movers-ranchi/',
    'https://suryapackersranchi.in/packers-and-movers-kanke-ranchi/',
    'https://suryapackersranchi.in/packers-movers-from-ranchi-to-patna/',
    'https://suryapackersranchi.in/how-much-packers-movers-charge-ranchi/'
]

for u in test_urls:
    try:
        req = urllib.request.Request(u, headers=headers)
        with urllib.request.urlopen(req, context=ctx, timeout=20) as resp:
            html = resp.read().decode('utf-8', errors='ignore')
        
        title_m = re.search(r'<title>(.*?)</title>', html, re.I)
        title = title_m.group(1).strip() if title_m else 'No title'
        
        desc_m = re.search(r'<meta\s+name=["\']description["\']\s+content=["\'](.*?)["\']', html, re.I)
        desc = desc_m.group(1).strip() if desc_m else 'No desc'
        
        # Word count
        text = re.sub(r'<script.*?</script>', '', html, flags=re.DOTALL)
        text = re.sub(r'<style.*?</style>', '', text, flags=re.DOTALL)
        text = re.sub(r'<[^>]+>', ' ', text)
        words = len(text.split())
        
        # Schemas
        schemas = re.findall(r'"@type"\s*:\s*"([^"]+)"', html)
        
        # Headings H1, H2
        h1s = [re.sub(r'<[^>]+>', '', h).strip() for h in re.findall(r'<h1[^>]*>(.*?)</h1>', html, re.I | re.DOTALL)]
        h2s = [re.sub(r'<[^>]+>', '', h).strip() for h in re.findall(r'<h2[^>]*>(.*?)</h2>', html, re.I | re.DOTALL)]
        
        # Phone
        phones = set(re.findall(r'(?:\+91[-\s]?)?[6-9]\d{9}', html))
        
        # Images count
        imgs = re.findall(r'<img[^>]+src=["\']([^"\']+)["\']', html, re.I)

        print(f"==================================================")
        print(f"URL: {u}")
        print(f"Title: {title}")
        print(f"Meta Description: {desc}")
        print(f"Word Count: {words}")
        print(f"H1 Tags: {h1s}")
        print(f"H2 Tags (Top 5): {h2s[:5]}")
        print(f"Schemas Found: {list(set(schemas))}")
        print(f"Phone Numbers: {list(phones)}")
        print(f"Images Count: {len(imgs)}")
        print(f"==================================================\n")
    except Exception as e:
        print(f"Error fetching {u}: {e}\n")
