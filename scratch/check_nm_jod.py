import re

for f in ['ranchi-to-navi-mumbai-packers-and-movers.php', 'navi-mumbai-to-ranchi-packers-and-movers.php', 'jodhpur-to-ranchi-packers-and-movers.php']:
    c = open(f'pages/{f}', encoding='utf-8').read()
    links = re.findall(r'href=[\'"]<\?php echo SITE_BASE_URL; \?>/([^\'"]+)[\'"]', c)
    print(f, len(links), links)
