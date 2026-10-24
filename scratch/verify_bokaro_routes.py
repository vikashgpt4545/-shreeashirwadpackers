import urllib.request
import re
import json
import sys

def verify_url(slug):
    url = f"http://127.0.0.1:8000/{slug}"
    print(f"=== Verifying {url} ===")
    try:
        req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
        with urllib.request.urlopen(req) as resp:
            status = resp.status
            html = resp.read().decode('utf-8')
    except Exception as e:
        print(f"FAILED to fetch: {e}")
        return False

    print(f"HTTP Status: {status}")
    if status != 200:
        return False

    # Check word count excluding header, footer, scripts, styles
    body_match = re.search(r'<body[^>]*>(.*?)</body>', html, re.DOTALL | re.IGNORECASE)
    body_text = body_match.group(1) if body_match else html
    body_clean = re.sub(r'<header[^>]*>.*?</header>', ' ', body_text, flags=re.DOTALL | re.IGNORECASE)
    body_clean = re.sub(r'<footer[^>]*>.*?</footer>', ' ', body_clean, flags=re.DOTALL | re.IGNORECASE)
    body_clean = re.sub(r'<script[^>]*>.*?</script>', ' ', body_clean, flags=re.DOTALL | re.IGNORECASE)
    body_clean = re.sub(r'<style[^>]*>.*?</style>', ' ', body_clean, flags=re.DOTALL | re.IGNORECASE)
    text = re.sub(r'<[^>]+>', ' ', body_clean)
    words = len(text.split())
    print(f"Visible Word Count: {words}")
    word_pass = words >= 1500
    print(f"Word count >= 1500: {word_pass}")

    # Check schemas
    schemas = re.findall(r'<script type="application/ld\+json">(.*?)</script>', html, re.DOTALL)
    print(f"Schema count: {len(schemas)}")
    valid_schemas = 0
    schema_types = []
    for s in schemas:
        try:
            data = json.loads(s.strip())
            valid_schemas += 1
            schema_types.append(data.get("@type", "unknown"))
        except Exception as err:
            print(f"Schema JSON Error: {err}")
    print(f"Valid schemas: {valid_schemas} -> {schema_types}")

    # Check images (exclude header/footer assets/images)
    img_matches = re.findall(r'<img[^>]+src=["\']([^"\']+)["\'][^>]*alt=["\']([^"\']+)["\']', html)
    route_imgs = [src for src, alt in img_matches if '/images/' in src and 'assets/images' not in src and 'favicon' not in src]
    print(f"Route images count: {len(route_imgs)}")
    for img in route_imgs:
        print(f"  Img: {img}")

    # Check LaTeX
    latex_matches = re.findall(r'\$[^\$]+\$', html)
    print(f"LaTeX artifacts: {len(latex_matches)} {latex_matches}")

    # Check style.css link in head
    has_style_css = 'assets/css/style.css' in html
    print(f"Contains style.css link: {has_style_css}")

    # Check meta description and title
    title_match = re.search(r'<title>(.*?)</title>', html, re.IGNORECASE)
    meta_desc_match = re.search(r'<meta[^>]+name=["\']description["\'][^>]+content=["\']([^"\']+)["\']', html, re.IGNORECASE)
    print(f"Title: {title_match.group(1) if title_match else 'MISSING'}")
    print(f"Meta Desc: {meta_desc_match.group(1) if meta_desc_match else 'MISSING'}")

    passed = (status == 200 and word_pass and valid_schemas == 4 and len(route_imgs) == 4 and len(latex_matches) == 0 and has_style_css)
    print(f"OVERALL PASSED: {passed}\n")
    return passed

if __name__ == '__main__':
    slugs = sys.argv[1:] if len(sys.argv) > 1 else ['patna-to-bokaro-packers-and-movers']
    for slug in slugs:
        verify_url(slug)
