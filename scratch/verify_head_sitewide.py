import os, glob

pages = glob.glob('pages/*.php')
missing_style = []
missing_doctype = []
missing_head = []

for p in pages:
    with open(p, 'r', encoding='utf-8', errors='ignore') as f:
        c = f.read()
    if 'style.css' not in c:
        missing_style.append(p)
    if '<!DOCTYPE' not in c and '<!doctype' not in c:
        missing_doctype.append(p)
    if '<head' not in c:
        missing_head.append(p)

print(f"Total scanned: {len(pages)}")
print(f"Missing style.css: {len(missing_style)} -> {missing_style}")
print(f"Missing DOCTYPE: {len(missing_doctype)} -> {missing_doctype}")
print(f"Missing <head: {len(missing_head)} -> {missing_head}")
