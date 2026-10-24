import os
import glob

pages_dir = 'pages'
php_files = glob.glob(os.path.join(pages_dir, '*.php'))

print(f"Checking {len(php_files)} files...")
missing_fa = []
missing_fonts = []

for filepath in sorted(php_files):
    filename = os.path.basename(filepath)
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        c = f.read()

    if 'font-awesome' not in c:
        missing_fa.append(filename)
    if 'fonts.googleapis.com' not in c:
        missing_fonts.append(filename)

print("Files missing font-awesome:", len(missing_fa))
print("Files missing google fonts:", len(missing_fonts))
print("Are they identical to the 16 missing style.css?", sorted(missing_fa) == sorted(missing_fonts))
