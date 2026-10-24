import os
import re

missing_16 = [
    'bhubaneswar-to-chakradharpur-packers-and-movers.php',
    'bokaro-to-chakradharpur-packers-and-movers.php',
    'chaibasa-to-chakradharpur-packers-and-movers.php',
    'chakradharpur-to-bhubaneswar-packers-and-movers.php',
    'chakradharpur-to-delhi-packers-and-movers.php',
    'chakradharpur-to-kolkata-packers-and-movers.php',
    'chakradharpur-to-patna-packers-and-movers.php',
    'chakradharpur-to-rourkela-packers-and-movers.php',
    'chakradharpur-to-saraikela-packers-and-movers.php',
    'delhi-to-chakradharpur-packers-and-movers.php',
    'dhanbad-to-chakradharpur-packers-and-movers.php',
    'jamshedpur-to-chakradharpur-packers-and-movers.php',
    'kolkata-to-chakradharpur-packers-and-movers.php',
    'patna-to-chakradharpur-packers-and-movers.php',
    'ranchi-to-chakradharpur-packers-and-movers.php',
    'rourkela-to-chakradharpur-packers-and-movers.php'
]

print("Checking the 16 files for any css files linked:")
for fn in missing_16:
    path = os.path.join('pages', fn)
    with open(path, 'r', encoding='utf-8', errors='ignore') as f:
        c = f.read()
    css_links = re.findall(r'<link[^>]+rel=[\'"]stylesheet[\'"][^>]*>', c, re.IGNORECASE)
    # also check <style> tags
    style_tags = re.findall(r'<style[^>]*>.*?</style>', c, re.DOTALL | re.IGNORECASE)
    print(f"{fn}:")
    print(f"  Stylesheet links: {css_links}")
    print(f"  Embedded <style> tags count: {len(style_tags)}")
