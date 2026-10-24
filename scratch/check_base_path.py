import glob
import re

files = glob.glob('pages/*.php')
uses_base_path = []
defines_base_path = []
broken_base_path = []

for f in files:
    with open(f, 'r', encoding='utf-8', errors='ignore') as fp:
        content = fp.read()
    has_use = 'BASE_PATH' in content
    has_def = "define('BASE_PATH'" in content or 'define("BASE_PATH"' in content
    
    if has_use and not has_def:
        broken_base_path.append(f)
    elif has_use and has_def:
        defines_base_path.append(f)

print(f"Total pages: {len(files)}")
print(f"Pages using BASE_PATH without defining it: {len(broken_base_path)}")
for b in broken_base_path:
    print(" ", b)
