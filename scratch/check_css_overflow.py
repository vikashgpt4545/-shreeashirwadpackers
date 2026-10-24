import re

with open('scratch/kolkata_phusro_dump.html', 'r', encoding='utf-8', errors='ignore') as f:
    html = f.read()

with open('assets/css/style.css', 'r', encoding='utf-8', errors='ignore') as f:
    css = f.read()

# Extract embedded styles
embedded_styles = '\n'.join(re.findall(r'<style[^>]*>(.*?)</style>', html, re.DOTALL))
full_css = css + '\n' + embedded_styles

# Look for min-width, width in px, grid-template-columns with fixed px
print("--- Check min-width ---")
for m in re.finditer(r'([^{}]+)\{([^}]+)\}', full_css):
    sel = m.group(1).strip()
    decl = m.group(2).strip()
    if 'min-width' in decl:
        # filter for relevant ones
        for prop in decl.split(';'):
            if 'min-width' in prop:
                val = prop.split(':')[1].strip()
                if 'px' in val:
                    px_val = re.findall(r'(\d+)px', val)
                    if px_val and int(px_val[0]) > 300:
                        print(f"min-width > 300: {sel} -> {prop}")

print("\n--- Check table styles ---")
for m in re.finditer(r'([^{}]+)\{([^}]+)\}', full_css):
    sel = m.group(1).strip()
    decl = m.group(2).strip()
    if 'table' in sel.lower() or 'pricing' in sel.lower():
        print(f"{sel} -> {decl[:100]}...")

print("\n--- Check grid-template-columns ---")
for m in re.finditer(r'([^{}]+)\{([^}]+)\}', full_css):
    sel = m.group(1).strip()
    decl = m.group(2).strip()
    if 'grid-template-columns' in decl:
        if 'minmax' in decl or 'repeat' in decl or 'fr' in decl:
            # check if it affects mobile
            if not ('@media' in sel):
                # find minmax with px > 250
                px_val = re.findall(r'minmax\((\d+)px', decl)
                if px_val and int(px_val[0]) > 250:
                    print(f"Grid minmax > 250: {sel} -> {decl}")
