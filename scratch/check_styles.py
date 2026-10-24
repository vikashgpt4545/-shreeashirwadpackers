import re

with open('scratch/kolkata_phusro_dump.html', 'r', encoding='utf-8', errors='ignore') as f:
    html = f.read()

# Check all style attributes
for m in re.finditer(r'style="([^"]+)"', html):
    s = m.group(1)
    if any(k in s for k in ['width', 'overflow', 'position', 'margin', 'padding']):
        print('Inline style:', s)
