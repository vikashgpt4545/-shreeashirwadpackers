import re
import os
import sys

def verify_page(file_path, expected_prefix):
    if not os.path.exists(file_path):
        return False, f"File {file_path} does not exist"
    
    with open(file_path, 'r', encoding='utf-8') as f:
        content = f.read()

    errors = []

    # 1. Shell checks
    if "<!DOCTYPE html>" not in content:
        errors.append("Missing <!DOCTYPE html>")
    if "<link rel=\"stylesheet\" href=\"<?php echo SITE_BASE_URL; ?>/assets/css/style.css\">" not in content:
        errors.append("Missing style.css link")
    if "header.php" not in content or "footer.php" not in content:
        errors.append("Missing header or footer include")

    # 2. Meta Keywords
    m_kw = re.search(r'<meta\s+name=["\']keywords["\']\s+content=["\']([^"\']+)["\']', content)
    if not m_kw:
        errors.append("Missing <meta name=\"keywords\"> tag")
    
    m_desc = re.search(r'<meta\s+name=["\']description["\']\s+content=["\']([^"\']+)["\']', content)
    if not m_desc:
        errors.append("Missing <meta name=\"description\"> tag")

    # 3. Schemas (4 expected: MovingCompany, BreadcrumbList, Service, FAQPage)
    schemas = re.findall(r'"@type":\s*"([^"]+)"', content)
    for expected_s in ['MovingCompany', 'BreadcrumbList', 'Service', 'FAQPage']:
        if expected_s not in schemas:
            errors.append(f"Missing schema: {expected_s}")

    # 4. Images physical existence
    img_matches = re.findall(r'<img[^>]+src=["\']([^"\']+)["\']', content)
    if len(img_matches) < 4:
        errors.append(f"Expected at least 4 images, found {len(img_matches)}")
    for img in img_matches:
        img_clean = re.sub(r'<\?php.*?\?>/?', '', img).strip('/')
        if not os.path.exists(img_clean):
            errors.append(f"Image not on disk: {img_clean}")

    # 5. Class prefix parity
    # Extract declared classes in <style>
    style_content = re.search(r'<style>(.*?)</style>', content, re.DOTALL)
    if not style_content:
        errors.append("Missing <style> block")
    else:
        declared_classes = set(re.findall(r'\.([a-zA-Z0-9_\-]+)', style_content.group(1)))
        # Check body classes
        body_content = re.search(r'<body>(.*?)</body>', content, re.DOTALL)
        if body_content:
            used_classes = set()
            for m in re.finditer(r'class=["\']([^"\']+)["\']', body_content.group(1)):
                for c in m.group(1).split():
                    used_classes.add(c)
            # Check for foreign prefixes
            for c in used_classes:
                if not c.startswith(expected_prefix):
                    errors.append(f"Class '{c}' does not start with expected prefix '{expected_prefix}'")
                elif c not in declared_classes:
                    errors.append(f"Class '{c}' used in body but not declared in <style>")

    # 6. Word count (excluding scripts, styles, php tags)
    clean_text = re.sub(r'<\?php.*?\?>', ' ', content, flags=re.DOTALL)
    clean_text = re.sub(r'<script.*?</script>', ' ', clean_text, flags=re.DOTALL)
    clean_text = re.sub(r'<style.*?</style>', ' ', clean_text, flags=re.DOTALL)
    clean_text = re.sub(r'<[^>]+>', ' ', clean_text)
    words = [w for w in clean_text.split() if len(w) > 1]
    word_count = len(words)
    if word_count < 1600:
        errors.append(f"Word count too low: {word_count} words (minimum 1,600 required)")

    # 7. Internal links check
    if 'packers-and-movers-charges-in-ranchi' not in content:
        errors.append("Missing tariff calculator link")

    return len(errors) == 0, errors, word_count

if __name__ == '__main__':
    fpath = sys.argv[1]
    if len(sys.argv) > 2:
        pfx = sys.argv[2]
    else:
        with open(fpath, 'r', encoding='utf-8') as f:
            txt = f.read()
        m = re.search(r'<style>\s*\.([a-z0-9]+)-', txt)
        pfx = m.group(1) + '-' if m else 'pfx-'
    ok, errs, wc = verify_page(fpath, pfx)
    print(f"File: {fpath} | Prefix: {pfx} | Word Count: {wc}")
    if ok:
        print("ALL AUDIT CHECKS PASSED (100% COMPLIANT)!")
    else:
        print("ERRORS FOUND:")
        for e in errs:
            print("  -", e)
