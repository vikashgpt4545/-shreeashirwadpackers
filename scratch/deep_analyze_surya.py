import urllib.request
import ssl
import re
import json

ctx = ssl.create_default_context()
ctx.check_hostname = False
ctx.verify_mode = ssl.CERT_NONE
headers = {'User-Agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64)'}

def fetch_url(url):
    req = urllib.request.Request(url, headers=headers)
    with urllib.request.urlopen(req, context=ctx, timeout=20) as resp:
        return resp.read().decode('utf-8', errors='ignore')

homepage_html = fetch_url('https://suryapackersranchi.in/')

# Detect WordPress plugins / theme
plugins = set(re.findall(r'/wp-content/plugins/([a-zA-Z0-9_\-]+)/', homepage_html))
theme = set(re.findall(r'/wp-content/themes/([a-zA-Z0-9_\-]+)/', homepage_html))

# Check forms
forms = re.findall(r'<form[^>]*>(.*?)</form>', homepage_html, re.DOTALL | re.I)
form_fields = []
for f in forms:
    inputs = re.findall(r'<input[^>]+name=["\']([^"\']+)["\']', f, re.I)
    form_fields.append(inputs)

# Check call / whatsapp CTAs
call_links = re.findall(r'href=["\'](tel:[^"\']+|https://wa\.me/[^"\']+|https://api\.whatsapp\.com/[^"\']+)["\']', homepage_html, re.I)

# Check tables
table_matches = re.findall(r'<table[^>]*>(.*?)</table>', homepage_html, re.DOTALL | re.I)
tables_data = []
for t in table_matches:
    rows = re.findall(r'<tr[^>]*>(.*?)</tr>', t, re.DOTALL | re.I)
    tables_data.append(len(rows))

# Check addresses mentioned
addresses = re.findall(r'(?:Harmu|Lalpur|Bariatu|Booty More|Doranda|Hatia|Morabadi|Kokar|Ratu Road|Kanke|Ranchi|Jharkhand)[^<>\n\r]{0,100}', homepage_html, re.I)

# Fetch a blog post
sample_blog_url = 'https://suryapackersranchi.in/how-much-packers-movers-charge-ranchi/'
blog_html = fetch_url(sample_blog_url)

blog_h2s = [re.sub(r'<[^>]+>', '', h).strip() for h in re.findall(r'<h2[^>]*>(.*?)</h2>', blog_html, re.DOTALL | re.I)]
blog_h3s = [re.sub(r'<[^>]+>', '', h).strip() for h in re.findall(r'<h3[^>]*>(.*?)</h3>', blog_html, re.DOTALL | re.I)]

# Word count of blog
b_text = re.sub(r'<script.*?</script>', '', blog_html, flags=re.DOTALL)
b_text = re.sub(r'<style.*?</style>', '', b_text, flags=re.DOTALL)
b_text = re.sub(r'<[^>]+>', ' ', b_text)
blog_word_count = len(b_text.split())

# Check blog internal links
blog_links = re.findall(r'href=["\'](https://suryapackersranchi\.in/[^"\'#]+)["\']', blog_html, re.I)

report = {
    "theme": list(theme),
    "plugins": list(plugins),
    "forms_count": len(forms),
    "form_fields": form_fields,
    "call_links": list(set(call_links)),
    "tables_count": len(table_matches),
    "table_rows": tables_data,
    "sample_blog_word_count": blog_word_count,
    "sample_blog_h2s": blog_h2s,
    "sample_blog_h3s": blog_h3s,
    "sample_blog_internal_links_count": len(set(blog_links)),
    "sample_blog_internal_links": list(set(blog_links))[:10]
}

with open('scratch/deep_surya_analysis.json', 'w', encoding='utf-8') as f:
    json.dump(report, f, indent=2)

print("Analysis Complete! Output saved to scratch/deep_surya_analysis.json")
