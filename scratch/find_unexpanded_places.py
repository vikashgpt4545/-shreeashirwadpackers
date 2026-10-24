import glob
import os
import re

completed_corridors = {
    'ranchi', 'dhanbad', 'jamshedpur', 'bokaro', 'deoghar', 'hazaribagh',
    'dumka', 'giridih', 'ramgarh', 'koderma', 'jamtara', 'bagodar',
    'chakradharpur', 'chandil', 'kathikund', 'kundahit', 'kurdeg',
    'lesliganj', 'madhupur', 'markacho', 'ormanjhi', 'phusro', 'senha'
}

hub_files = glob.glob(os.path.join('pages', 'packers-and-movers-in-*.php'))
hub_places = set()
for hf in hub_files:
    fn = os.path.basename(hf)
    m = re.match(r'packers-and-movers-in-([a-z0-9-]+)\.php', fn)
    if m:
        hub_places.add(m.group(1))

unexpanded_places = []
for p in sorted(hub_places):
    if p in completed_corridors:
        continue
    outbound = len(glob.glob(os.path.join('pages', f'{p}-to-*.php')))
    inbound = len(glob.glob(os.path.join('pages', f'*-to-{p}-packers-and-movers.php')))
    total_routes = outbound + inbound
    unexpanded_places.append((p, total_routes, outbound, inbound))

print(f"Places with hub pages that DO NOT have a dedicated 20-route corridor: {len(unexpanded_places)}\n")

for p, tot, out_c, in_c in unexpanded_places:
    print(f"Place: {p:25} | Total routes: {tot:2} (Outbound: {out_c:2}, Inbound: {in_c:2})")
