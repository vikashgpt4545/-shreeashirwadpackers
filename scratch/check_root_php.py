import os
import glob

root_php = glob.glob('*.php')
print("Root PHP files:", root_php)

for r in root_php:
    with open(r, 'r', encoding='utf-8', errors='ignore') as f:
        c = f.read()
    has_header = 'header.php' in c
    has_style = 'style.css' in c or 'style.min.css' in c
    print(f"  {r}: includes header.php? {has_header} | has style.css? {has_style}")
