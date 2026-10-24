import glob
import os

candidates = [
    'adityapur', 'ghatshila', 'chas', 'jharia', 'katras', 'sindri',
    'patratu', 'mandu', 'bermo', 'gomia', 'barhi', 'jasidih',
    'godda', 'sahibganj', 'pakur', 'latehar', 'lohardaga', 'gumla',
    'simdega', 'khunti', 'daltonganj', 'chaibasa', 'chatra', 'rajmahal',
    'baharagora', 'noamundi', 'topchanchi', 'dumri', 'govindpur', 'nirsa'
]

for c in candidates:
    outbound = len(glob.glob(os.path.join('pages', f'{c}-to-*.php')))
    inbound = len(glob.glob(os.path.join('pages', f'*-to-{c}-packers-and-movers.php')))
    has_hub = os.path.exists(os.path.join('pages', f'packers-and-movers-in-{c}.php'))
    print(f"{c:15}: Outbound={outbound:2}, Inbound={inbound:2}, Total={outbound+inbound:2}, HasHub={has_hub}")
