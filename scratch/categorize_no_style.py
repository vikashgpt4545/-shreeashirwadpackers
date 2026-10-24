import os
import glob
import re

pages = glob.glob('pages/*.php')
no_style = []

for p in pages:
    with open(p, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
    if '<style' not in content:
        no_style.append((p, content))

print(f"Total pages without <style>: {len(no_style)}")

# Let's inspect what types of pages these 166 are:
# E.g. Hub pages (packers-and-movers-in-X)? Guide pages? Service pages? Route pages?
archetypes = {}
for p, content in no_style:
    filename = os.path.basename(p)
    if filename.startswith('packers-and-movers-in-'):
        arch = 'Local Hub (packers-and-movers-in-*)'
    elif 'guide' in filename or 'tips' in filename or 'fraud' in filename:
        arch = 'Guide / Blog'
    elif filename in ['about.php', 'contact.php', 'gallery.php', 'privacy.php', 'terms.php', 'services.php', 'business-shifting.php', 'residential-shifting.php', 'vehicle-shifting.php', 'packing-and-unpacking.php', 'warehouse-storage.php']:
        arch = 'Core Website / Service Page'
    elif filename.startswith('bike-transport') or filename.startswith('car-transport') or filename.startswith('luggage-transport'):
        arch = 'Specific Transport Hub'
    elif '-to-' in filename:
        arch = 'Intercity Route Page (*-to-*)'
    else:
        arch = 'Other'
    archetypes.setdefault(arch, []).append(filename)

for arch, flist in archetypes.items():
    print(f"\n{arch}: {len(flist)} pages")
    print("  Examples:", flist[:5])
