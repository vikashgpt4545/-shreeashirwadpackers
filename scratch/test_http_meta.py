import urllib.request
import re

url = "http://127.0.0.1:8000/koderma-to-deoghar-packers-and-movers"
resp = urllib.request.urlopen(url)
html = resp.read().decode("utf-8")

title = re.search(r"<title>(.*?)</title>", html)
desc = re.search(r'<meta\s+name=["\']description["\']\s+content=["\']([^"\']+)["\']', html)
kw = re.search(r'<meta\s+name=["\']keywords["\']\s+content=["\']([^"\']+)["\']', html)

print("HTTP Status: ", resp.status)
print("Title:       ", title.group(1) if title else "MISSING")
print("Description: ", desc.group(1) if desc else "MISSING")
print("Keywords:    ", kw.group(1) if kw else "MISSING")
