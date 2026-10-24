import os
import re
import subprocess
import xml.etree.ElementTree as ET

pages = [
    'pages/ranchi-to-phusro-packers-and-movers.php',
    'pages/dhanbad-to-phusro-packers-and-movers.php',
    'pages/jamshedpur-to-phusro-packers-and-movers.php',
    'pages/hazaribagh-to-phusro-packers-and-movers.php',
    'pages/giridih-to-phusro-packers-and-movers.php',
    'pages/phusro-to-kolkata-packers-and-movers.php',
    'pages/phusro-to-patna-packers-and-movers.php',
    'pages/phusro-to-delhi-packers-and-movers.php',
    'pages/phusro-to-bangalore-packers-and-movers.php',
    'pages/phusro-to-pune-packers-and-movers.php',
    'pages/kolkata-to-phusro-packers-and-movers.php',
    'pages/patna-to-phusro-packers-and-movers.php',
    'pages/delhi-to-phusro-packers-and-movers.php',
    'pages/bangalore-to-phusro-packers-and-movers.php'
]

advisory_html = '''
                <div class="route-advisory-card" style="background:#f8fafc; border-left:4px solid var(--accent); padding:22px; border-radius:8px; margin:30px 0; border-top:1px solid #e2e8f0; border-right:1px solid #e2e8f0; border-bottom:1px solid #e2e8f0;">
                    <h3 style="color:var(--primary); font-size:1.25rem; margin-top:0; margin-bottom:10px;"><i class="fa-solid fa-circle-check" style="color:var(--accent);"></i> Verified Intercity Shifting Advisory for Phusro & Bermo Coalfield Corridor</h3>
                    <p style="margin-bottom:10px; font-size:0.95rem; line-height:1.65; color:#334155;">Relocating households, delicate electronic appliances, and family automobiles across the Phusro corridor requires systematic scheduling and compliant freight handling. Our logistics managers recommend reserving your dedicated container vehicle at least 3 to 5 business days in advance to secure optimal dispatch slots. For public sector personnel undergoing transfers across Central Coalfields Limited (CCL), Eastern Coalfields Limited (ECL), Damodar Valley Corporation (DVC), or nationalized banks, ensure your inventory manifest and billing address match your official transfer office guidelines for prompt claim settlement.</p>
                    <p style="margin-bottom:0; font-size:0.95rem; line-height:1.65; color:#334155;">To guarantee maximum protection against highway vibration, all large white goods such as refrigerators, smart LED screens, and front-loading washing machines are wrapped in multi-layer bubble wrap, edge guards, and virgin stretch film. We advise keeping personal identity documents, property certificates, family jewelry, and essential medical supplies separately in your personal custody during loading and highway transit.</p>
                </div>
'''

for p in pages:
    with open(p, 'r', encoding='utf-8') as f:
        content = f.read()

    # 1. Remove the sidebar HTML
    content = re.sub(r'<!--\s*Sidebar\s*-->\s*<aside class="sidebar-wrapper">.*?</aside>', '', content, flags=re.DOTALL)

    # 2. Add advisory block inside article before closing </article> if not present
    if 'Verified Intercity Shifting Advisory for Phusro' not in content:
        content = content.replace('</article>', advisory_html + '\n            </article>')

    # 3. Clean up the CSS:
    # Replace the red :root override with scoped non-conflicting variables
    old_root_pattern = r':root\s*\{[^}]*--primary:\s*#d32f2f;[^}]*\}'
    clean_root = ''':root {
            --secondary: #1b3860;
            --white: #ffffff;
            --border-color: #e2e8f0;
            --card-shadow: 0 4px 15px rgba(0,0,0,0.08);
            --transition: all 0.25s ease;
        }'''
    content = re.sub(old_root_pattern, clean_root, content)

    # Remove body and h1-h6 font/color overrides that conflict with style.css
    content = re.sub(r'body\s*\{[^}]*font-family:\s*\'Inter\'[^}]*\}', '', content)
    content = re.sub(r'h1,\s*h2,\s*h3,\s*h4,\s*h5,\s*h6\s*\{[^}]*font-family:\s*\'Montserrat\'[^}]*\}', '', content)

    # Replace red in route-hero background
    content = content.replace('rgba(211, 47, 47, 0.9)', 'rgba(15, 34, 61, 0.95)')
    content = content.replace('rgba(13, 71, 161, 0.95)', 'rgba(27, 56, 96, 0.95)')

    # Replace .content-grid 2-column with 100% full width layout
    old_grid_css = r'\.content-grid\s*\{[^}]*display:\s*grid;[^}]*grid-template-columns:\s*2fr\s+1fr;[^}]*\}'
    new_grid_css = '''.content-grid {
            display: block;
            width: 100%;
        }
        .article-content {
            width: 100%;
            max-width: 100%;
        }'''
    content = re.sub(old_grid_css, new_grid_css, content)

    # Remove sidebar CSS classes from style tag
    sidebar_css_patterns = [
        r'\.sidebar-card\s*\{[^}]*\}',
        r'\.sidebar-card\s+h3\s*\{[^}]*\}',
        r'\.sidebar-links\s*\{[^}]*\}',
        r'\.sidebar-links\s+li\s*\{[^}]*\}',
        r'\.sidebar-links\s+li\s+a\s*\{[^}]*\}',
        r'\.sidebar-links\s+li\s+a:hover\s*\{[^}]*\}',
        r'\.contact-box-widget\s*\{[^}]*\}',
        r'\.contact-box-widget\s+h4\s*\{[^}]*\}',
        r'\.contact-box-widget\s+p\s*\{[^}]*\}',
        r'\.contact-box-widget\s+\.call-number\s*\{[^}]*\}',
        r'\.sidebar-wrapper\s*\{[^}]*\}'
    ]
    for pat in sidebar_css_patterns:
        content = re.sub(pat, '', content)

    # Button colors: use website brand orange
    content = content.replace('background-color: var(--accent);\n            color: #000;', 'background: linear-gradient(135deg, #ff6a28 0%, #ea580c 100%);\n            color: #ffffff;')
    content = content.replace('background: var(--primary);\n            color: var(--white);', 'background: linear-gradient(135deg, #ff6a28 0%, #ea580c 100%);\n            color: #ffffff;')
    content = content.replace('background: var(--primary-dark);', 'background: linear-gradient(135deg, #ea580c 0%, #c2410c 100%);')

    # Save cleaned file
    with open(p, 'w', encoding='utf-8') as f:
        f.write(content)

print("All 14 Phusro pages updated successfully.")
