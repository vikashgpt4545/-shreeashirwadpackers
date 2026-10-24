import re
import glob

def fix_page(content, filename):
    # 1. Identify initial PHP block
    php_match = re.search(r'^(<\?php.*?\?>)', content, re.DOTALL)
    if not php_match:
        raise ValueError(f"No initial PHP block found in {filename}")
    
    initial_php = php_match.group(1)
    
    # Remove header.php from initial_php
    new_initial_php = re.sub(
        r'[ \t]*(?:require_once|include_once|require|include)\s+.*header\.php[\'"];?\r?\n?',
        '',
        initial_php
    )
    
    # Ensure APP_INIT check exists
    if 'APP_INIT' not in new_initial_php:
        app_init_code = "\nif (!defined('APP_INIT')) {\n    require_once __DIR__ . '/../includes/config.php';\n}\n"
        # insert after opening <?php and optional comment docstring
        docstring_match = re.search(r'^(<\?php\s*(?:/\*\*.*?\*/\s*)?)', new_initial_php, re.DOTALL)
        if docstring_match:
            insert_pos = docstring_match.end()
            new_initial_php = new_initial_php[:insert_pos].rstrip() + "\n" + app_init_code + new_initial_php[insert_pos:].lstrip()
        else:
            new_initial_php = re.sub(r'^(<\?php\s*)', r'\1' + app_init_code, new_initial_php)

    head_markup = """<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc ?? $page_description ?? $meta_description); ?>">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="<?php echo $route_origin ?? 'Koderma'; ?>">

    <!-- Open Graph Metadata -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="<?php echo htmlspecialchars($og_title ?? $page_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($og_description ?? $page_desc ?? $page_description ?? $meta_description); ?>">
    <meta property="og:url" content="<?php echo $og_url ?? $canonical_url; ?>">
    <meta property="og:image" content="<?php echo $og_image ?? (SITE_BASE_URL . '/images/safe-transit-container-truck-ranchi.jpg'); ?>">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($og_title ?? $page_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($og_description ?? $page_desc ?? $page_description ?? $meta_description); ?>">
    <meta name="twitter:image" content="<?php echo $og_image ?? (SITE_BASE_URL . '/images/safe-transit-container-truck-ranchi.jpg'); ?>">

    <!-- Favicon & Stylesheets -->
    <link rel="icon" type="image/png" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="shortcut icon" href="<?php echo SITE_BASE_URL; ?>/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo SITE_BASE_URL; ?>/assets/images/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&family=Outfit:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
"""

    rest = content[php_match.end():]
    
    # 2. Find </style>
    style_end_pos = rest.find('</style>')
    if style_end_pos == -1:
        raise ValueError(f"No </style> tag found in {filename}")
    
    after_style = style_end_pos + len('</style>')
    style_block = rest[:after_style]
    after_style_content = rest[after_style:]
    
    header_inclusion = "\n</head>\n<body>\n    <?php require_once __DIR__ . '/../includes/header.php'; ?>\n"
    
    # 3. Find footer.php inclusion
    footer_pos = after_style_content.rfind('footer.php')
    if footer_pos == -1:
        raise ValueError(f"No footer.php found in {filename}")
    php_ftr_pos = after_style_content.rfind('<?php', 0, footer_pos)
    
    body_content = after_style_content[:php_ftr_pos]
    
    footer_block = "    <?php require_once __DIR__ . '/../includes/footer.php'; ?>\n</body>\n</html>\n"

    final_result = new_initial_php.strip() + "\n" + head_markup + style_block.strip() + header_inclusion + body_content.rstrip() + "\n\n" + footer_block
    return final_result

# Dry run test on koderma-to-dumka
with open('pages/koderma-to-dumka-packers-and-movers.php', 'r', encoding='utf-8') as f:
    orig = f.read()

fixed = fix_page(orig, 'pages/koderma-to-dumka-packers-and-movers.php')

print(f"Orig len: {len(orig)}, Fixed len: {len(fixed)}")
print("\n=== TOP 25 LINES ===")
for i, line in enumerate(fixed.splitlines()[:25]):
    print(f"{i+1}: {line}")

print("\n=== AROUND </STYLE> AND <BODY> ===")
body_idx = fixed.find('<body>')
print(fixed[body_idx-100:body_idx+150])

print("\n=== BOTTOM 15 LINES ===")
for i, line in enumerate(fixed.splitlines()[-15:]):
    print(f"{i+1}: {line}")
