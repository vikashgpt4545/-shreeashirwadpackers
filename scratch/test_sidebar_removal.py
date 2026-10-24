import re

pages = [
    'pages/ranchi-to-phusro-packers-and-movers.php',
    'pages/dhanbad-to-phusro-packers-and-movers.php',
    'pages/jamshedpur-to-phusro-packers-and-movers.php',
    'pages/hazaribagh-to-phusro-packers-and-movers.php',
    'pages/giridih-to-phusro-packers-and-movers.php',
    'pages/phusro-to-kolkata-packers-and-movers.php',
    'pages/phusro-to-patna-packers-and-movers.php',
    'pages/phusro-to-delhi-packers-and-movers.php',
    'pages/phusro-to-bangalore-packers-and-movers.php',
    'pages/phusro-to-pune-packers-and-movers.php',
    'pages/kolkata-to-phusro-packers-and-movers.php',
    'pages/patna-to-phusro-packers-and-movers.php',
    'pages/delhi-to-phusro-packers-and-movers.php',
    'pages/bangalore-to-phusro-packers-and-movers.php'
]

for p in pages:
    with open(p, 'r', encoding='utf-8') as f:
        html = f.read()
    # Remove sidebar
    cleaned = re.sub(r'<!--\s*Sidebar\s*-->\s*<aside class="sidebar-wrapper">.*?</aside>', '', html, flags=re.DOTALL)
    body = cleaned
    body = re.sub(r'<\?php.*?\?>', ' ', body, flags=re.DOTALL)
    body = re.sub(r'<script.*?</script>', ' ', body, flags=re.DOTALL)
    body = re.sub(r'<style.*?</style>', ' ', body, flags=re.DOTALL)
    body = re.sub(r'<nav.*?</nav>', ' ', body, flags=re.DOTALL)
    body = re.sub(r'<header.*?</header>', ' ', body, flags=re.DOTALL)
    body = re.sub(r'<footer.*?</footer>', ' ', body, flags=re.DOTALL)
    body = re.sub(r'<[^>]+>', ' ', body)
    words = len(body.split())
    print(f'{p:50s} -> Words without sidebar: {words}')
