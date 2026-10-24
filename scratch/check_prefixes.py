import glob, re

prefixes = [
    'cngg', 'ggc', 'ndbg', 'bgnd', 'ahpn', 'pnah', 'ahhy', 'hyah',
    'mbng', 'ngmb', 'idbp', 'bpid', 'jpbg', 'bgjp', 'dlbp', 'bpdl',
    'dldh', 'dhdl', 'cnbb', 'bbcn', 'cntr', 'trcn', 'cntv', 'tvcn',
    'cnvj', 'vjcn', 'mbcb', 'cbmb', 'mbga', 'gamb', 'pnga', 'gapn',
    'bgmy', 'mybg', 'bgmg', 'mgbg', 'hdkn', 'knhd', 'hdkk', 'kkhd',
    'hdrj', 'rjhd'
]

pages = glob.glob('pages/*.php')
collisions = {}
for p in pages:
    with open(p, 'r', encoding='utf-8', errors='ignore') as f:
        content = f.read()
    for pfx in prefixes:
        if re.search(r'[\.\'\"]' + re.escape(pfx) + r'-', content):
            collisions.setdefault(pfx, []).append(p)

for pfx, files in collisions.items():
    print(f'Collision for {pfx}: {files}')

if not collisions:
    print('ALL 42 PREFIXES ARE 100% COLLISION FREE!')
