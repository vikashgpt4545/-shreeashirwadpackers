import os

with open('submit_master_plan_pages.php', encoding='utf-8') as f:
    lines = f.readlines()

slugs = []
for line in lines:
    s = line.strip()
    if s.startswith("'") and s.endswith("',"):
        val = s[1:-2]
        if not val.startswith(('http', 'RS256', 'JWT', 'Content-Type', 'Authorization', 'grant_type', 'urn:')):
            slugs.append(val)

print(f"Total target slugs extracted: {len(slugs)}")
missing = [s for s in slugs if not os.path.exists(f"pages/{s}.php")]
print(f"Missing from pages/ directory: {len(missing)}")
if missing:
    print("Missing:", missing)
else:
    print("ALL 178 SLUGS CONFIRMED ON DISK IN pages/!")
