import os
import glob
import re
from collections import Counter

with open('assets/css/style.css', 'r', encoding='utf-8') as f:
    main_css = f.read()

pages = glob.glob('pages/*.php')
missing_class_usage = Counter()

for p in pages:
    with open(p, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
    
    # Extract internal style content if present
    internal_styles = "".join(re.findall(r'<style[^>]*>(.*?)</style>', content, re.DOTALL))
    combined_css = main_css + " " + internal_styles
    
    # Extract all classes in this page
    classes = set()
    for m in re.findall(r'class=["\']([^"\']+)["\']', content):
        for cls in m.split():
            classes.add(cls)
            
    for cls in classes:
        # Ignore FontAwesome, standard utility or html tag classes
        if cls.startswith('fa-') or cls in ['fa', 'fas', 'far', 'fab', 'fa-solid']:
            continue
        if cls.startswith('js-') or cls.startswith('wp-'):
            continue
        # Check if class is in combined_css
        if f'.{cls}' not in combined_css:
            missing_class_usage[cls] += 1

print(f"Top 60 classes used in pages that are NOT in style.css or in internal <style>:")
for cls, count in missing_class_usage.most_common(60):
    print(f"  {cls}: {count} pages")
