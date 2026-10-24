import os

proposed_routes = [
    'adityapur-to-jamshedpur-packers-and-movers',
    'adityapur-to-dhanbad-packers-and-movers',
    'adityapur-to-bokaro-packers-and-movers',
    'adityapur-to-chaibasa-packers-and-movers',
    'adityapur-to-ghatshila-packers-and-movers',
    'jamshedpur-to-adityapur-packers-and-movers',
    'dhanbad-to-adityapur-packers-and-movers',
    'bokaro-to-adityapur-packers-and-movers',
    'chaibasa-to-adityapur-packers-and-movers',
    'ghatshila-to-adityapur-packers-and-movers',
    'adityapur-to-kolkata-packers-and-movers',
    'adityapur-to-patna-packers-and-movers',
    'adityapur-to-bhubaneswar-packers-and-movers',
    'adityapur-to-delhi-packers-and-movers',
    'adityapur-to-pune-packers-and-movers',
    'kolkata-to-adityapur-packers-and-movers',
    'patna-to-adityapur-packers-and-movers',
    'bhubaneswar-to-adityapur-packers-and-movers',
    'delhi-to-adityapur-packers-and-movers',
    'pune-to-adityapur-packers-and-movers'
]

print("Checking proposed routes against existing pages/:")
for r in proposed_routes:
    fn = f"pages/{r}.php"
    exists = os.path.exists(fn)
    print(f"  {r}: Exists? {exists}")
