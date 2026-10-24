import urllib.request
import re
import os
import sys
from html.parser import HTMLParser

class PageValidator(HTMLParser):
    def __init__(self):
        super().__init__()
        self.in_script = False
        self.in_style = False
        self.in_header_or_footer = False
        self.text = []
        self.images = []
        self.consecutive_p = 0
        self.max_consecutive_p = 0

    def handle_starttag(self, tag, attrs):
        attrs_dict = dict(attrs)
        if tag in ['script', 'style']:
            self.in_script = (tag == 'script')
            self.in_style = (tag == 'style')
        if tag in ['header', 'footer']:
            self.in_header_or_footer = True
        if tag == 'img':
            self.images.append(attrs_dict.get('src', ''))

        # Track consecutive <p> tags
        if not self.in_header_or_footer and not self.in_script and not self.in_style:
            if tag == 'p':
                self.consecutive_p += 1
                if self.consecutive_p > self.max_consecutive_p:
                    self.max_consecutive_p = self.consecutive_p
            elif tag in ['div', 'section', 'ul', 'ol', 'table', 'h1', 'h2', 'h3', 'h4', 'h5', 'h6', 'blockquote', 'hr']:
                self.consecutive_p = 0

    def handle_endtag(self, tag):
        if tag in ['script', 'style']:
            self.in_script = False
            self.in_style = False
        if tag in ['header', 'footer']:
            self.in_header_or_footer = False
        if tag in ['section', 'article']:
            self.consecutive_p = 0

    def handle_data(self, data):
        if not self.in_script and not self.in_style and not self.in_header_or_footer:
            self.text.append(data)

def verify_images_on_disk(image_urls):
    missing = []
    for url in image_urls:
        filename = url.split('/')[-1].split('?')[0]
        path1 = os.path.join('images', filename)
        path2 = os.path.join('assets', 'images', filename)
        if not os.path.exists(path1) and not os.path.exists(path2):
            missing.append(url)
    return missing

def test_page(slug):
    url = f'http://127.0.0.1:8000/{slug}'
    req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
    try:
        with urllib.request.urlopen(req) as resp:
            status = resp.status
            html = resp.read().decode('utf-8', errors='ignore')
    except Exception as e:
        print(f"FAILED to fetch {url}: {e}")
        return False

    validator = PageValidator()
    validator.feed(html)
    full_text = ' '.join(validator.text)
    words = re.findall(r'\b[a-zA-Z0-9_\-\']+\b', full_text)
    word_count = len(words)

    schemas = re.findall(r'<script\s+type=[\'"]application/ld\+json[\'"]>(.*?)</script>', html, re.DOTALL)

    # Check images on disk
    missing_images = verify_images_on_disk(validator.images)

    # Also check schema image
    schema_images = re.findall(r'[\'"]image[\'"]\s*:\s*[\'"]([^\'"]+)[\'"]', html)
    missing_schema_images = verify_images_on_disk(schema_images)

    print(f"=== Report for /{slug} ===")
    print(f"HTTP Status: {status}")
    print(f"Visible Word Count (excluding header/footer/scripts): {word_count} (Req: >= 1600)")
    print(f"Schemas Count: {len(schemas)} (Req: 4)")
    print(f"Images Count: {len(validator.images)}")
    for img in validator.images:
        print(f"  - {img}")

    if missing_images or missing_schema_images:
        print(f"ERROR: MISSING IMAGE FILES ON DISK:")
        for m in missing_images:
            print(f"  [BROKEN IMG]: {m}")
        for m in missing_schema_images:
            print(f"  [BROKEN SCHEMA IMG]: {m}")
    else:
        print("ALL IMAGES VERIFIED ON DISK (100% OK)")

    if validator.max_consecutive_p > 3:
        print(f"WARNING: Max consecutive <p> tags without visual break: {validator.max_consecutive_p} (Req: <= 3)")
    else:
        print(f"Content Chunking: PASS (Max consecutive <p> = {validator.max_consecutive_p})")

    # Check style prefix and orphaned classes
    with open(f'pages/{slug}.php', 'r', encoding='utf-8') as f:
        file_content = f.read()

    style_matches = re.findall(r'<style>(.*?)</style>', file_content, re.DOTALL)
    orphaned_classes = set()
    if style_matches:
        style_content = style_matches[0]
        prefixes = set(re.findall(r'\.([a-z0-9]+)-[a-z0-9\-]+', style_content))
        print(f"CSS prefixes found in <style>: {prefixes}")
        for pfx in prefixes:
            style_rules = set(re.findall(rf'\.({pfx}-[a-z0-9\-]+)', style_content))
            body_classes = set(re.findall(rf'class=[\'"][^\'"]*?\b({pfx}-[a-z0-9\-]+)\b', file_content))
            orphaned = body_classes - style_rules
            print(f"Prefix '{pfx}': {len(style_rules)} rules in style, {len(body_classes)} classes in markup, {len(orphaned)} orphaned in body")
            if orphaned:
                print(f"  ORPHANED CLASSES: {orphaned}")
                orphaned_classes.update(orphaned)

    links = re.findall(r'href=[\'"](.*?)[\'"]', file_content)
    site_links = [l for l in links if 'SITE_BASE_URL' in l]
    print(f"Internal SITE_BASE_URL links in file: {len(site_links)}")

    is_compliant = (word_count >= 1600 and 
                    len(schemas) == 4 and 
                    not missing_images and 
                    not missing_schema_images and 
                    not orphaned_classes and 
                    validator.max_consecutive_p <= 3)

    print(f"Overall Status: {'[COMPLIANT - PASS]' if is_compliant else '[NON-COMPLIANT - FAIL]'}")
    return is_compliant

if __name__ == '__main__':
    slug = sys.argv[1] if len(sys.argv) > 1 else 'packers-and-movers-in-patna'
    ok = test_page(slug)
    if not ok:
        sys.exit(1)
