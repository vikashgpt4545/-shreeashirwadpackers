import os
import glob

pages_dir = 'pages'
php_files = glob.glob(os.path.join(pages_dir, '*.php'))

missing_both = []
missing_fa_only = []
missing_fonts_only = []

for filepath in sorted(php_files):
    filename = os.path.basename(filepath)
    with open(filepath, 'r', encoding='utf-8', errors='ignore') as f:
        c = f.read()

    has_style = 'style.css' in c
    has_fa = 'font-awesome' in c
    has_fonts = 'fonts.googleapis.com' in c

    if not has_style and not has_fa and not has_fonts:
        missing_both.append(filename)
    elif not has_style:
        print(f"File {filename} has missing style but has_fa={has_fa}, has_fonts={has_fonts}")

print(f"Total files missing style.css, font-awesome, and fonts: {len(missing_both)}")
for fn in missing_both:
    print(" ", fn)
