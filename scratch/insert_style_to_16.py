import os

missing_16 = [
    'chakradharpur-to-saraikela-packers-and-movers.php',
    'ranchi-to-chakradharpur-packers-and-movers.php',
    'chaibasa-to-chakradharpur-packers-and-movers.php',
    'jamshedpur-to-chakradharpur-packers-and-movers.php',
    'dhanbad-to-chakradharpur-packers-and-movers.php',
    'bokaro-to-chakradharpur-packers-and-movers.php',
    'chakradharpur-to-rourkela-packers-and-movers.php',
    'chakradharpur-to-kolkata-packers-and-movers.php',
    'chakradharpur-to-patna-packers-and-movers.php',
    'chakradharpur-to-bhubaneswar-packers-and-movers.php',
    'chakradharpur-to-delhi-packers-and-movers.php',
    'rourkela-to-chakradharpur-packers-and-movers.php',
    'kolkata-to-chakradharpur-packers-and-movers.php',
    'patna-to-chakradharpur-packers-and-movers.php',
    'bhubaneswar-to-chakradharpur-packers-and-movers.php',
    'delhi-to-chakradharpur-packers-and-movers.php'
]

block_to_insert = """
    <!-- Preload Critical Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">"""

target_pattern = '<meta name="twitter:image" content="<?php echo $og_image; ?>">'

updated = 0
for fn in missing_16:
    path = os.path.join('pages', fn)
    with open(path, 'r', encoding='utf-8') as f:
        content = f.read()

    if target_pattern not in content:
        print(f"ERROR: target_pattern not found in {fn}")
        continue

    # Double-check style.css is not already there
    if 'style.css' in content:
        print(f"Skipping {fn}, style.css already present")
        continue

    new_content = content.replace(target_pattern, target_pattern + '\n' + block_to_insert, 1)
    with open(path, 'w', encoding='utf-8') as f:
        f.write(new_content)
    updated += 1
    print(f"Successfully inserted styles into {fn}")

print(f"\nTotal files updated: {updated}/{len(missing_16)}")
