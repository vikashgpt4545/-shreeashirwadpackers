import os
import re

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

for fn in missing_16:
    path = os.path.join('pages', fn)
    with open(path, 'r', encoding='utf-8') as f:
        c = f.read()

    # Look for twitter:image
    match = re.search(r'(<meta\s+name=[\'"]twitter:image[\'"][^>]+>)', c)
    if match:
        idx = c.find(match.group(1))
        snippet = c[idx:idx+250]
        print(f"--- {fn} ---")
        print(snippet[:180].strip())
    else:
        print(f"NO twitter:image match in {fn}")
