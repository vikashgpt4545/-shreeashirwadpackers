import re

for fn in ['pages/ranchi-to-navi-mumbai-packers-and-movers.php', 'pages/ranchi-to-garhwa-packers-and-movers.php']:
    c = open(fn, encoding='utf-8').read()
    php_links = re.findall(r'href=[\'"]<\?php echo SITE_BASE_URL; \?>/([^\'"]+)[\'"]', c)
    std_links = re.findall(r'href=[\'"]/(?!/)([^\'"]+)[\'"]', c)
    print(fn)
    print("  PHP links:", set(php_links))
    print("  Std links:", set(std_links))
