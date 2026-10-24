import os

broken_files = [
    'pages/packers-and-movers-in-ambikapur.php',
    'pages/packers-and-movers-in-baramulla.php',
    'pages/packers-and-movers-in-champa.php',
    'pages/packers-and-movers-in-civic-center-bhilai.php',
    'pages/packers-and-movers-in-devendra-nagar-raipur.php',
    'pages/packers-and-movers-in-dhamtari.php',
    'pages/packers-and-movers-in-jagdalpur.php',
    'pages/packers-and-movers-in-mahasamund.php',
    'pages/packers-and-movers-in-naya-raipur.php',
    'pages/packers-and-movers-in-nehru-nagar-bhilai.php',
    'pages/packers-and-movers-in-padmanabhpur-durg.php',
    'pages/packers-and-movers-in-pandri-raipur.php',
    'pages/packers-and-movers-in-rajnandgaon.php',
    'pages/packers-and-movers-in-risali-bhilai.php',
    'pages/packers-and-movers-in-sarona-raipur.php',
    'pages/packers-and-movers-in-sector-6-bhilai.php',
    'pages/packers-and-movers-in-shankar-nagar-raipur.php',
    'pages/packers-and-movers-in-supela-bhilai.php',
    'pages/packers-and-movers-in-tatibandh-raipur.php',
    'pages/packers-and-movers-in-telibandha-raipur.php',
    'pages/packers-and-movers-in-vip-road-raipur.php'
]

fixed_count = 0
for f in broken_files:
    if os.path.exists(f):
        with open(f, 'r', encoding='utf-8') as fp:
            content = fp.read()
        if "dirname(__DIR__) . '/init.php'" in content:
            new_content = content.replace("require_once dirname(__DIR__) . '/init.php';", "require_once __DIR__ . '/../includes/config.php';")
            with open(f, 'w', encoding='utf-8') as fp:
                fp.write(new_content)
            fixed_count += 1
            print(f"Fixed: {f}")
        else:
            print(f"Target pattern not found in {f}")
    else:
        print(f"File not found: {f}")

print(f"Total files fixed: {fixed_count}")
