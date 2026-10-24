import glob

files = glob.glob('pages/*.php')
missing = []
for f in files:
    with open(f, 'r', encoding='utf-8', errors='ignore') as fp:
        c = fp.read()
    if '<!DOCTYPE' not in c and '<!doctype' not in c:
        missing.append(f)

print(f"Total missing DOCTYPE/style.css: {len(missing)}")
for idx, m in enumerate(missing, 1):
    print(f"{idx}. {m}")
