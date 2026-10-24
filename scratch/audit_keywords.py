import os
import re

with open('keywords-jharkhand.txt', 'r', encoding='utf-8') as f:
    raw_keywords = [line.strip() for line in f if line.strip()]

pages = [p for p in os.listdir('pages') if p.endswith('.php')]

new_pages_targets = {
    'dhanbad to vizag': 'dhanbad-to-vizag-packers-and-movers.php',
    'nagpur to jharkhand': 'nagpur-to-jharkhand-packers-and-movers.php',
    'in garhwa': 'packers-and-movers-in-garhwa.php',
    'in tandwa': 'packers-and-movers-in-tandwa.php',
    'in bahragora': 'packers-and-movers-in-bahragora.php',
    'in jhumri telaiya': 'packers-and-movers-in-jhumri-telaiya.php',
    'in sector 4 bokaro': 'packers-and-movers-in-sector-4-bokaro.php',
    'in sector 12 bokaro': 'packers-and-movers-in-sector-12-bokaro.php',
}

existing_matched = []
new_targeted = []
in_content_list = []

for kw in raw_keywords:
    kw_l = kw.lower()
    matched = None
    
    # 1. Existing check
    for p in pages:
        stem = p.replace('.php', '')
        clean_stem = stem.replace('-', ' ')
        if kw_l == clean_stem:
            matched = p
            break
        if kw_l.startswith('best packers and movers in '):
            loc = kw_l.replace('best packers and movers in ', '').strip().replace(' ', '-')
            if stem == f'packers-and-movers-in-{loc}':
                matched = p
                break
        elif kw_l.startswith('packers and movers in '):
            loc = kw_l.replace('packers and movers in ', '').strip().replace(' ', '-')
            if stem == f'packers-and-movers-in-{loc}':
                matched = p
                break
        elif kw_l.startswith('movers and packers in '):
            loc = kw_l.replace('movers and packers in ', '').strip().replace(' ', '-')
            if stem == f'packers-and-movers-in-{loc}':
                matched = p
                break
                
    if matched:
        existing_matched.append((kw, matched))
        continue
        
    # 2. New target check
    is_new = False
    for k, v in new_pages_targets.items():
        if k in kw_l:
            new_targeted.append((kw, v))
            is_new = True
            break
            
    if not is_new:
        in_content_list.append(kw)

print(f"Total: {len(raw_keywords)}")
print(f"Existing Matches: {len(existing_matched)}")
print(f"New Target Matches: {len(new_targeted)}")
print(f"In-Content Enrichment Matches: {len(in_content_list)}")

print("\n--- ALL IN-CONTENT KEYWORDS ---")
for idx, kw in enumerate(in_content_list, 1):
    print(f"{idx}. {kw}")
