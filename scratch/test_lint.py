import subprocess

routes = [
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

all_clean = True
for r in routes:
    res = subprocess.run([r"C:\xampp\php\php.exe", "-l", f"pages/{r}.php"], capture_output=True, text=True)
    if "No syntax errors detected" not in res.stdout:
        print(f"FAILED: {r}: {res.stdout.strip()} {res.stderr.strip()}")
        all_clean = False

if all_clean:
    print("ALL 20 KODERMA ROUTE PAGES HAVE ZERO SYNTAX ERRORS!")
