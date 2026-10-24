import re

koderma_routes = [
    "koderma-to-bokaro-packers-and-movers",
    "koderma-to-deoghar-packers-and-movers",
    "koderma-to-dumka-packers-and-movers",
    "koderma-to-chaibasa-packers-and-movers",
    "koderma-to-godda-packers-and-movers",
    "bokaro-to-koderma-packers-and-movers",
    "deoghar-to-koderma-packers-and-movers",
    "dhanbad-to-koderma-packers-and-movers",
    "dumka-to-koderma-packers-and-movers",
    "chaibasa-to-koderma-packers-and-movers",
    "koderma-to-kolkata-packers-and-movers",
    "koderma-to-patna-packers-and-movers",
    "koderma-to-delhi-packers-and-movers",
    "koderma-to-bangalore-packers-and-movers",
    "koderma-to-pune-packers-and-movers",
    "kolkata-to-koderma-packers-and-movers",
    "patna-to-koderma-packers-and-movers",
    "delhi-to-koderma-packers-and-movers",
    "bangalore-to-koderma-packers-and-movers",
    "asansol-to-koderma-packers-and-movers"
]

all_passed = True
for idx, r in enumerate(koderma_routes, 1):
    path = f"pages/{r}.php"
    with open(path, "r", encoding="utf-8") as f:
        content = f.read()
    
    kw_match = re.search(r'<meta\s+name=["\']keywords["\']\s+content=["\']([^"\']+)["\']', content)
    if kw_match:
        kw = kw_match.group(1)
        count = len(kw.split(","))
        print(f"[{idx:2d}/20] {r}: FOUND ({count} keywords)")
    else:
        print(f"[{idx:2d}/20] {r}: MISSING KEYWORDS META TAG!")
        all_passed = False

if all_passed:
    print("\nALL 20 KODERMA ROUTE PAGES HAVE VERIFIED META KEYWORDS TAGS!")
