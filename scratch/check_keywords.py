import glob

files = [
    'pages/ramgarh-to-bokaro-packers-and-movers.php',
    'pages/giridih-to-ramgarh-packers-and-movers.php',
    'pages/dumka-to-giridih-packers-and-movers.php',
    'pages/jamtara-to-asansol-packers-and-movers.php',
    'pages/bokaro-to-dhanbad-packers-and-movers.php',
    'pages/ranchi-to-deoghar-packers-and-movers.php',
    'pages/koderma-to-bokaro-packers-and-movers.php',
    'pages/koderma-to-deoghar-packers-and-movers.php',
    'pages/koderma-to-dumka-packers-and-movers.php'
]

for f in files:
    with open(f, 'r', encoding='utf-8', errors='ignore') as fp:
        c = fp.read()
    has_kw = ('name="keywords"' in c) or ("name='keywords'" in c)
    print(f'{f}: {has_kw}')
