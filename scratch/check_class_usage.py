import os
import glob
import re

pages = glob.glob('pages/*.php')

classes_to_check = [
    'breadcrumb-container',
    'quote-card',
    'route-lead-form',
    'btn-submit-lead',
    'route-profile-section',
    'sub-badge',
    'route-text-content',
    'route-specs-list',
    'route-visual-card',
    'visual-caption',
    'tariff-table',
    'pricing-notes',
    'packing-standards-section',
    'packing-visual-wrapper',
    'packing-steps-accordion',
    'layer-item',
    'layer-number',
    'layer-desc',
    'vehicle-transit-section',
    'vehicle-card',
    'vehicle-card-img',
    'vehicle-card-body',
    'card-features-list',
    'corporate-transfer-section',
    'corporate-details',
    'document-perks',
    'doc-item',
    'corporate-box',
    'psu-list',
    'locality-box',
    'locality-tags',
    'process-grid',
    'process-card',
    'process-step',
    'checklist-section',
    'checklist-item',
    'faq-section',
    'faq-card',
    'cta-section',
    'cta-buttons'
]

results = {c: [] for c in classes_to_check}

for p in pages:
    with open(p, 'r', encoding='utf-8', errors='ignore') as f:
        c = f.read()
    for cls in classes_to_check:
        if cls in c:
            results[cls].append(p)

for cls, flist in results.items():
    print(f"{cls}: {len(flist)} pages")
