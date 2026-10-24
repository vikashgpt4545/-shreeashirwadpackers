import re

with open('assets/css/style.css', 'r', encoding='utf-8', errors='ignore') as f:
    css = f.read()

with open('pages/kolkata-to-phusro-packers-and-movers.php', 'r', encoding='utf-8', errors='ignore') as f:
    php = f.read()

all_code = css + '\n' + php

# Find all occurrences of px values between 280 and 340
matches = re.finditer(r'([^{};]+:[^;]*(2[8-9]\d|3[0-4]\d)px[^;]*;)', all_code)
for m in matches:
    print(m.group(0).strip())
