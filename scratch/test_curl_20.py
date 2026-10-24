import urllib.request

routes = [
    "dhanbad-to-jamshedpur-packers-and-movers",
    "dhanbad-to-dumka-packers-and-movers",
    "dhanbad-to-giridih-packers-and-movers",
    "dhanbad-to-ramgarh-packers-and-movers",
    "dhanbad-to-chaibasa-packers-and-movers",
    "jamshedpur-to-dhanbad-packers-and-movers",
    "dumka-to-dhanbad-packers-and-movers",
    "giridih-to-dhanbad-packers-and-movers",
    "ramgarh-to-dhanbad-packers-and-movers",
    "koderma-to-dhanbad-packers-and-movers",
    "dhanbad-to-bangalore-packers-and-movers",
    "dhanbad-to-pune-packers-and-movers",
    "dhanbad-to-mumbai-packers-and-movers",
    "dhanbad-to-hyderabad-packers-and-movers",
    "dhanbad-to-asansol-packers-and-movers",
    "kolkata-to-dhanbad-packers-and-movers",
    "patna-to-dhanbad-packers-and-movers",
    "delhi-to-dhanbad-packers-and-movers",
    "bangalore-to-dhanbad-packers-and-movers",
    "asansol-to-dhanbad-packers-and-movers"
]

all_ok = True
for idx, r in enumerate(routes, 1):
    url = f"http://127.0.0.1:8000/{r}"
    try:
        res = urllib.request.urlopen(url, timeout=5)
        status = res.getcode()
        print(f"{idx:2d}. {status} OK  -> {r}")
    except Exception as e:
        all_ok = False
        print(f"{idx:2d}. FAIL    -> {r} ({e})")

print(f"\nALL 20 ROUTES HTTP 200: {all_ok}")
