import re
import os

files = [
    'pages/ranchi-to-godda-packers-and-movers.php',
    'pages/godda-to-ranchi-packers-and-movers.php',
    'pages/ranchi-to-khunti-packers-and-movers.php',
    'pages/khunti-to-ranchi-packers-and-movers.php',
    'pages/ranchi-to-latehar-packers-and-movers.php',
    'pages/latehar-to-ranchi-packers-and-movers.php',
    'pages/ranchi-to-sahibganj-packers-and-movers.php',
    'pages/sahibganj-to-ranchi-packers-and-movers.php',
    'pages/ranchi-to-saraikela-packers-and-movers.php',
    'pages/saraikela-to-ranchi-packers-and-movers.php'
]

for f in files:
    if not os.path.exists(f):
        print(f"NOT FOUND: {f}")
        continue
    content = open(f, encoding='utf-8').read()
    links = re.findall(r'href=[\'"]<\?php echo SITE_BASE_URL; \?>/([^\'"]+)[\'"]', content)
    meaningful = [l for l in links if not l.startswith(('contact', 'assets', 'images', '#'))]
    print(f"{f:50}: {len(meaningful)} links -> {meaningful}")
