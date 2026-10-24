import re
from urllib.parse import urlparse
from pypdf import PdfReader

pdf1_path = r"C:\Users\vikash\.gemini\antigravity-ide\brain\b0b92f1b-3980-4de4-90cf-a19ce85dc35d\.user_uploaded\media_1792732403421.pdf"
pdf2_path = r"C:\Users\vikash\.gemini\antigravity-ide\brain\b0b92f1b-3980-4de4-90cf-a19ce85dc35d\.user_uploaded\media_1792732409327.pdf"

def get_root_domain(url):
    try:
        netloc = urlparse(url).netloc.lower()
        if netloc.startswith("www."):
            netloc = netloc[4:]
        parts = netloc.split(".")
        if len(parts) >= 2:
            if len(parts) >= 3 and parts[-2] in ["co", "com", "org", "net", "edu", "gov"]:
                return ".".join(parts[-3:])
            return ".".join(parts[-2:])
        return netloc
    except Exception:
        return ""

# 1. Parse PDF 1 (Our Existing Backlinks)
reader1 = PdfReader(pdf1_path)
our_existing_domains = set()
for page in reader1.pages:
    text = page.extract_text() or ""
    # find all URLs
    urls = re.findall(r"https?://[^\s<>\"')]+", text)
    for u in urls:
        root = get_root_domain(u)
        if root and "shreeashirwadpackers" not in root and "backlinks.live" not in root:
            our_existing_domains.add(root)

print(f"Our Verified Existing Platforms: {len(our_existing_domains)}")
for d in sorted(our_existing_domains):
    print(" -", d)

# 2. Parse PDF 2 (Competitor Agarwal Packers) with exact DA and URL reconstruction
reader2 = PdfReader(pdf2_path)

records = []
current_da = None
buffer_url = ""

for page_idx, page in enumerate(reader2.pages):
    text = page.extract_text() or ""
    lines = [l.strip() for l in text.split("\n") if l.strip()]
    i = 0
    while i < len(lines):
        line = lines[i]
        # Check if line is DA
        if re.match(r"^\d{1,3}$", line):
            current_da = int(line)
            i += 1
            continue
        
        # Check if line contains a URL starting with http
        if line.startswith("http://") or line.startswith("https://"):
            full_url = line
            # Check if URL was wrapped to next line
            if i + 1 < len(lines) and not (lines[i+1].startswith("http://") or lines[i+1].startswith("https://") or re.match(r"^\d{4}-\d{2}-\d{2}$", lines[i+1]) or re.match(r"^\d{1,3}$", lines[i+1])):
                full_url += lines[i+1]
                i += 1
            
            root = get_root_domain(full_url)
            if root and "agarwalpackers" not in root and "backlinks.live" not in root and "moneyrobot" not in root:
                records.append({
                    "da": current_da or 40,
                    "url": full_url,
                    "root": root
                })
        i += 1

print(f"Total parsed competitor source links: {len(records)}")

# Group by root platform
platform_map = {}
for r in records:
    root = r["root"]
    if root not in platform_map:
        platform_map[root] = {
            "root": root,
            "da": r["da"],
            "count": 0,
            "sample_urls": []
        }
    platform_map[root]["count"] += 1
    platform_map[root]["da"] = max(platform_map[root]["da"], r["da"])
    if len(platform_map[root]["sample_urls"]) < 2 and r["url"] not in platform_map[root]["sample_urls"]:
        platform_map[root]["sample_urls"].append(r["url"])

# Split into EXCLUDED (Already Done) vs TARGETS (To Build)
to_build = []
already_done = []

for root, data in platform_map.items():
    if root in our_existing_domains:
        already_done.append(data)
    else:
        to_build.append(data)

# Sort by DA descending, then count descending
to_build.sort(key=lambda x: (x["da"], x["count"]), reverse=True)
already_done.sort(key=lambda x: (x["da"], x["count"]), reverse=True)

print(f"Already done to exclude: {len(already_done)}")
print(f"Fresh target platforms: {len(to_build)}")

# Categorize targets
bookmarking = []
web20_blogs = []
directories_pr = []
blog_comments = []

for p in to_build:
    r = p["root"]
    da = p["da"]
    if any(k in r for k in ["bookmark", "social", "layer", "hit", "sparkle", "special", "delta", "ace", "media"]):
        bookmarking.append(p)
    elif any(k in r for k in ["blog", "hub", "press", "news", "story", "write", "post", "review", "typepad"]):
        web20_blogs.append(p)
    elif any(k in r for k in ["directory", "yellowpages", "catalog", "market", "alternative", "cybrhome", "moverdb", "viesearch", "whatshot"]):
        directories_pr.append(p)
    else:
        blog_comments.append(p)

# Generate Markdown Document
out_file = r"d:\shreeashirwadpackers\COMPETITOR_BACKLINK_TARGET_LIST.md"
with open(out_file, "w", encoding="utf-8") as f:
    f.write("# Master Competitor Backlink Target List (COMPETITOR_BACKLINK_TARGET_LIST.md)\n")
    f.write("**Source**: PDF 1 (`shreeashirwadpackers.com` 53 Backlinks) vs PDF 2 (`agarwalpackers.com` 2,199 Backlinks)\n")
    f.write(f"**Our Existing Platforms (100% EXCLUDED)**: {len(our_existing_domains)} platforms\n")
    f.write(f"**Competitor Platforms to Target**: {len(to_build)} unique platforms (Zero duplicates, zero overlapping)\n\n")
    f.write("---\n\n")

    f.write("## 1. Our Existing Backlinks (EXCLUDED — Already Live, Do Not Repeat)\n")
    f.write("You already have backlinks on these domains. We will NOT create duplicates here:\n\n")
    f.write("| # | Existing Platform Domain | Status |\n")
    f.write("|:---:|:---|:---:|\n")
    for idx, d in enumerate(sorted(our_existing_domains), 1):
        f.write(f"| {idx} | `{d}` | ✅ [x] ALREADY LIVE |\n")

    f.write("\n---\n\n")
    f.write("## 2. High-DA Social Bookmarking & Syndication Networks (Agarwal Movers Primary Network)\n")
    f.write("Agarwal Packers uses these high-DA (DA 80–89) bookmarking sites to power their city pages:\n\n")
    f.write("| # | Platform Domain | Domain Authority (DA) | Competitor Backlinks | Target Anchor & URL to Submit |\n")
    f.write("|:---:|:---|:---:|:---:|:---|\n")
    for idx, p in enumerate(bookmarking, 1):
        f.write(f"| {idx} | **`{p['root']}`** | **DA {p['da']}** | {p['count']} links | Anchor: `Packers and Movers Ranchi`<br>URL: `https://shreeashirwadpackers.com/` |\n")

    f.write("\n---\n\n")
    f.write("## 3. High-DA Web 2.0 Blogs & Article Publishing Platforms\n")
    f.write("Platforms where competitor publishes moving guides, checklists, and route articles:\n\n")
    f.write("| # | Platform Domain | Domain Authority (DA) | Competitor Backlinks | Strategy |\n")
    f.write("|:---:|:---|:---:|:---:|:---|\n")
    for idx, p in enumerate(web20_blogs, 1):
        f.write(f"| {idx} | **`{p['root']}`** | **DA {p['da']}** | {p['count']} links | Publish Ranchi Relocation Guide with in-body link |\n")

    f.write("\n---\n\n")
    f.write("## 4. Industry Directories, Moving Aggregators & Alternatives\n\n")
    f.write("| # | Platform Domain | Domain Authority (DA) | Competitor Backlinks | Direct Submission URL |\n")
    f.write("|:---:|:---|:---:|:---:|:---|\n")
    for idx, p in enumerate(directories_pr, 1):
        f.write(f"| {idx} | **`{p['root']}`** | **DA {p['da']}** | {p['count']} links | `https://{p['root']}/` |\n")

    f.write("\n---\n\n")
    f.write("## 5. Other Contextual & Authority Web Mentions\n\n")
    f.write("| # | Platform Domain | Domain Authority (DA) | Competitor Backlinks | Target URL |\n")
    f.write("|:---:|:---|:---:|:---:|:---|\n")
    for idx, p in enumerate(blog_comments, 1):
        f.write(f"| {idx} | **`{p['root']}`** | **DA {p['da']}** | {p['count']} links | `https://{p['root']}/` |\n")

print("COMPETITOR_BACKLINK_TARGET_LIST.md generated successfully!")
