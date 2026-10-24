import urllib.request

test_slugs = [
    'koderma-to-dumka-packers-and-movers',
    'koderma-to-chaibasa-packers-and-movers',
    'bokaro-to-koderma-packers-and-movers',
    'koderma-to-kolkata-packers-and-movers',
    'asansol-to-koderma-packers-and-movers'
]

for s in test_slugs:
    url = f'http://127.0.0.1:8000/{s}'
    try:
        resp = urllib.request.urlopen(url)
        html = resp.read().decode('utf-8')
        has_doctype = '<!DOCTYPE html>' in html or '<!doctype html>' in html.lower()
        has_css = '/assets/css/style.css' in html
        has_topbar = 'class="topbar"' in html
        has_footer = 'class="site-footer"' in html
        has_body_close = '</body>' in html and '</html>' in html
        print(f"{s}: Status {resp.status} | DOCTYPE: {has_doctype} | style.css: {has_css} | topbar: {has_topbar} | footer: {has_footer} | </body></html>: {has_body_close}")
    except Exception as e:
        print(f"{s}: ERROR: {e}")
