import json

# Read data from the previous extraction
# We can re-run the grouping from extract_backlinks or load to_build
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

# Read PDF 1
reader1 = PdfReader(pdf1_path)
our_existing = set()
for page in reader1.pages:
    text = page.extract_text() or ""
    urls = re.findall(r"https?://[^\s<>\"')]+", text)
    for u in urls:
        r = get_root_domain(u)
        if r and "shreeashirwadpackers" not in r and "backlinks.live" not in r:
            our_existing.add(r)

# Read PDF 2
reader2 = PdfReader(pdf2_path)
comp_records = []
current_da = None

for page in reader2.pages:
    text = page.extract_text() or ""
    lines = [l.strip() for l in text.split("\n") if l.strip()]
    i = 0
    while i < len(lines):
        line = lines[i]
        if re.match(r"^\d{1,3}$", line):
            current_da = int(line)
            i += 1
            continue
        if line.startswith("http://") or line.startswith("https://"):
            full_url = line
            if i + 1 < len(lines) and not (lines[i+1].startswith("http://") or lines[i+1].startswith("https://") or re.match(r"^\d{4}-\d{2}-\d{2}$", lines[i+1]) or re.match(r"^\d{1,3}$", lines[i+1])):
                full_url += lines[i+1]
                i += 1
            root = get_root_domain(full_url)
            if root and "agarwalpackers" not in root and "backlinks.live" not in root and "moneyrobot" not in root:
                comp_records.append({"da": current_da or 40, "root": root, "url": full_url})
        i += 1

# Deduplicate by root domain
platforms = {}
for r in comp_records:
    root = r["root"]
    if root not in platforms:
        platforms[root] = {"root": root, "da": r["da"], "count": 0}
    platforms[root]["count"] += 1
    platforms[root]["da"] = max(platforms[root]["da"], r["da"])

# Filter out our existing
to_build = [p for root, p in platforms.items() if root not in our_existing]
to_build.sort(key=lambda x: (x["da"], x["count"]), reverse=True)

out_file = r"d:\shreeashirwadpackers\BACKLINK_DAILY_PLAN.md"

with open(out_file, "w", encoding="utf-8") as f:
    f.write("# Backlink Daily Action Plan (BACKLINK_DAILY_PLAN.md)\n")
    f.write("**Target Website**: `https://shreeashirwadpackers.com/`\n")
    f.write("**Target GMB**: `https://share.google/0U65Vc4zAVDwVlPfD`\n")
    f.write(f"**Total Fresh Backlinks to Build**: {len(to_build)} High-DA Platforms\n")
    f.write("**Schedule**: 10 links per day (Batches of 10 for easy human execution)\n\n")
    f.write("---\n\n")

    f.write("## 📋 Universal Copy-Paste Cheat Sheet (Use on every site)\n")
    f.write("Keep this open and copy-paste these 4 lines into every submission form:\n\n")
    f.write("- **Website URL**: `https://shreeashirwadpackers.com/`\n")
    f.write("- **Title / Anchor**: `Packers and Movers Ranchi - 9835565233`\n")
    f.write("- **Tags / Keywords**: `Packers and Movers Ranchi, household shifting ranchi, packers and movers in ranchi`\n")
    f.write("- **Description**: `Shree Ashirwad Packers and Movers provides safe, fast, and reliable household shifting, vehicle transport, and corporate relocation services in Ranchi, Jharkhand. Call +91 9835565233.`\n\n")
    f.write("---\n\n")

    f.write("## ⚡ How to Do 1 Link in 3 Minutes\n")
    f.write("1. Click the link in the table below to open the website.\n")
    f.write("2. Click **'Register'** or **'Submit Story'** / **'Add Bookmark'** / **'Submit Link'**.\n")
    f.write("3. Paste the URL, Title, Tags, and Description from the Cheat Sheet above.\n")
    f.write("4. Click **Submit**.\n")
    f.write("5. Change `[ ] Pending` to `[x] Done` in this file to save your progress!\n\n")
    f.write("---\n\n")

    f.write("## 🚫 Excluded Sites (You Already Have Links Here — DO NOT REDO)\n")
    f.write("<details><summary>Click to view 34 platforms you already have</summary>\n\n")
    f.write("| # | Existing Platform | Status |\n|:---:|:---|:---:|\n")
    for i, d in enumerate(sorted(our_existing), 1):
        f.write(f"| {i} | `{d}` | ✅ [x] ALREADY LIVE |\n")
    f.write("\n</details>\n\n")
    f.write("---\n\n")

    # Generate daily batches of 10
    batch_size = 10
    total_batches = (len(to_build) + batch_size - 1) // batch_size

    for b in range(total_batches):
        start_idx = b * batch_size
        end_idx = min(start_idx + batch_size, len(to_build))
        batch_items = to_build[start_idx:end_idx]
        day_num = b + 1
        
        f.write(f"### 📅 Batch {day_num} (Day {day_num} — Links {start_idx + 1} to {end_idx})\n\n")
        f.write("| # | Platform Name | Domain Authority | Clickable Website Link | Status |\n")
        f.write("|:---:|:---|:---:|:---|:---:|\n")
        for i, item in enumerate(batch_items, start_idx + 1):
            dom = item["root"]
            da = item["da"]
            f.write(f"| {i} | **`{dom}`** | **DA {da}** | [Visit {dom}](https://{dom}/) | [ ] Pending |\n")
        f.write("\n---\n\n")

print(f"Generated BACKLINK_DAILY_PLAN.md with {total_batches} daily batches!")
