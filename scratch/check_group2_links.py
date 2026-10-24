import re
import os

group2_pairs = [
    ('ranchi-to-navi-mumbai-packers-and-movers.php', 'navi-mumbai-to-ranchi-packers-and-movers.php'),
    ('ranchi-to-thane-packers-and-movers.php', 'thane-to-ranchi-packers-and-movers.php'),
    ('ranchi-to-nashik-packers-and-movers.php', 'nashik-to-ranchi-packers-and-movers.php'),
    ('ranchi-to-aurangabad-packers-and-movers.php', 'aurangabad-to-ranchi-packers-and-movers.php'),
    ('ranchi-to-solapur-packers-and-movers.php', 'solapur-to-ranchi-packers-and-movers.php'),
    ('ranchi-to-kolhapur-packers-and-movers.php', 'kolhapur-to-ranchi-packers-and-movers.php'),
    ('ranchi-to-rajkot-packers-and-movers.php', 'rajkot-to-ranchi-packers-and-movers.php'),
    ('ranchi-to-bhavnagar-packers-and-movers.php', 'bhavnagar-to-ranchi-packers-and-movers.php'),
    ('ranchi-to-jamnagar-packers-and-movers.php', 'jamnagar-to-ranchi-packers-and-movers.php'),
    ('ranchi-to-vapi-packers-and-movers.php', 'vapi-to-ranchi-packers-and-movers.php'),
    ('ranchi-to-kota-packers-and-movers.php', 'kota-to-ranchi-packers-and-movers.php'),
    ('ranchi-to-jodhpur-packers-and-movers.php', 'jodhpur-to-ranchi-packers-and-movers.php')
]

for out_f, in_f in group2_pairs:
    for f in [out_f, in_f]:
        path = os.path.join('pages', f)
        if not os.path.exists(path):
            print(f"NOT FOUND: {path}")
            continue
        content = open(path, encoding='utf-8').read()
        links = re.findall(r'href=[\'"]<\?php echo SITE_BASE_URL; \?>/([^\'"]+)[\'"]', content)
        meaningful = [l for l in links if not l.startswith(('contact', 'assets', 'images', '#'))]
        print(f"{f:48}: {len(meaningful)} links -> {meaningful}")
