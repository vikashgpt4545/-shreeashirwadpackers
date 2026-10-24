import os
import glob

pages = glob.glob('pages/*.php')
no_style = []
with_style = []
with_btn_submit_lead = []
with_quote_card = []
with_breadcrumb_container = []

for p in pages:
    with open(p, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
    if '<style' not in content:
        no_style.append(p)
    else:
        with_style.append(p)
    if 'btn-submit-lead' in content:
        with_btn_submit_lead.append(p)
    if 'quote-card' in content:
        with_quote_card.append(p)
    if 'breadcrumb-container' in content:
        with_breadcrumb_container.append(p)

print(f'Total pages: {len(pages)}')
print(f'Pages with <style>: {len(with_style)}')
print(f'Pages WITHOUT <style>: {len(no_style)}')
print(f'Pages with btn-submit-lead: {len(with_btn_submit_lead)}')
print(f'Pages with quote-card: {len(with_quote_card)}')
print(f'Pages with breadcrumb-container: {len(with_breadcrumb_container)}')
print('First 20 pages without <style>:')
for p in no_style[:20]:
    print('  ', p)
