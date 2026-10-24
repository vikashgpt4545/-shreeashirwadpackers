import os
import re
from urllib.parse import urlparse
from pypdf import PdfReader

pdf1_path = r"C:\Users\vikash\.gemini\antigravity-ide\brain\b0b92f1b-3980-4de4-90cf-a19ce85dc35d\.user_uploaded\media_1792732403421.pdf"
pdf2_path = r"C:\Users\vikash\.gemini\antigravity-ide\brain\b0b92f1b-3980-4de4-90cf-a19ce85dc35d\.user_uploaded\media_1792732409327.pdf"

def extract_urls_from_pdf(filepath):
    reader = PdfReader(filepath)
    text = ""
    for page in reader.pages:
        t = page.extract_text()
        if t:
            text += t + "\n"
    
    # Find all http/https URLs
    urls = re.findall(r"https?://[^\s<>\"')]+", text)
    return text, urls

text1, urls1 = extract_urls_from_pdf(pdf1_path)
text2, urls2 = extract_urls_from_pdf(pdf2_path)

def get_domain(url):
    try:
        netloc = urlparse(url).netloc.lower()
        if netloc.startswith("www."):
            netloc = netloc[4:]
        return netloc
    except Exception:
        return ""

# Get existing domains from shreeashirwadpackers report
our_domains = set()
our_sources = set()
for u in urls1:
    d = get_domain(u)
    if "shreeashirwadpackers" not in d and d:
        our_domains.add(d)
        our_sources.add(u)

# Get competitor domains
comp_domains = {}
for u in urls2:
    d = get_domain(u)
    if "agarwalpackers" not in d and d:
        if d not in comp_domains:
            comp_domains[d] = []
        comp_domains[d].append(u)

print("Our existing unique referring domains count:", len(our_domains))
print("Competitor unique referring domains count:", len(comp_domains))

# Filter competitor domains that we already have
missing_from_us = {d: urls for d, urls in comp_domains.items() if d not in our_domains}
print("Competitor domains where WE HAVE NO BACKLINK YET:", len(missing_from_us))

# Sample 10 our domains:
print("\nSample of our existing domains (TO EXCLUDE):")
for d in list(our_domains)[:10]:
    print(" -", d)

# Sample 10 competitor domains to target:
print("\nSample of competitor domains to target:")
for d in list(missing_from_us.keys())[:10]:
    print(" +", d, f"(has {len(missing_from_us[d])} backlinks)")
