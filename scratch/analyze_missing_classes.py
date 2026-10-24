import os
import glob
import re
from collections import Counter

pages = glob.glob('pages/*.php')
no_style = []

for p in pages:
    with open(p, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
    if '<style' not in content:
        no_style.append((p, content))

print(f'Total pages without <style>: {len(no_style)}')

# Let's see what classes are most commonly used in these no_style pages
class_counter = Counter()
for p, content in no_style:
    # find all class="..."
    matches = re.findall(r'class=["\']([^"\']+)["\']', content)
    for m in matches:
        for cls in m.split():
            class_counter[cls] += 1

print("\nMost common classes in pages WITHOUT <style>:")
for cls, count in class_counter.most_common(50):
    print(f"  {cls}: {count} pages")

# Let's also see what sections or components exist in ormanjhi-to-hazaribagh-packers-and-movers.php
orm_classes = []
for p, content in no_style:
    if 'ormanjhi-to-hazaribagh' in p:
        matches = re.findall(r'class=["\']([^"\']+)["\']', content)
        for m in matches:
            for cls in m.split():
                if cls not in orm_classes:
                    orm_classes.append(cls)

print(f"\nAll unique classes in ormanjhi-to-hazaribagh ({len(orm_classes)} classes):")
print(", ".join(orm_classes))

# Now let's check which of these classes are defined in assets/css/style.css
with open('assets/css/style.css', 'r', encoding='utf-8', errors='ignore') as f:
    css_content = f.read()

missing_in_css = [c for c in orm_classes if f'.{c}' not in css_content]
print(f"\nClasses in ormanjhi-to-hazaribagh MISSING in style.css ({len(missing_in_css)}):")
print(", ".join(missing_in_css))
