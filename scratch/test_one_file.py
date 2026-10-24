import urllib.request, re

req = urllib.request.urlopen("http://127.0.0.1:8000/")
html = req.read().decode("utf-8")
title = re.search(r"<title>(.*?)</title>", html)
kw = re.search(r'<meta name="keywords" content="(.*?)"', html)
print("LIVE TITLE:", title.group(1) if title else "NONE")
print("MAIN KEYWORDS:", kw.group(1)[:70] if kw else "NONE")


assert target in content, "Target line not found in file!"

new_content = content.replace(target, target + '\n' + meta_tag, 1)

with open(filepath, 'w', encoding='utf-8') as f:
    f.write(new_content)

print("Updated godda-to-dumka successfully.")
