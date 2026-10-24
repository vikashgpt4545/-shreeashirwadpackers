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

reader1 = PdfReader(pdf1_path)
our_existing = set()
for page in reader1.pages:
    text = page.extract_text() or ""
    urls = re.findall(r"https?://[^\s<>\"')]+", text)
    for u in urls:
        r = get_root_domain(u)
        if r and "shreeashirwadpackers" not in r and "backlinks.live" not in r:
            our_existing.add(r)

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

platforms = {}
for r in comp_records:
    root = r["root"]
    if root not in platforms:
        platforms[root] = {"root": root, "da": r["da"], "count": 0}
    platforms[root]["count"] += 1
    platforms[root]["da"] = max(platforms[root]["da"], r["da"])

to_build = [p for root, p in platforms.items() if root not in our_existing]
to_build.sort(key=lambda x: (x["da"], x["count"]), reverse=True)

out_file = r"d:\shreeashirwadpackers\BACKLINK_LIST.txt"

with open(out_file, "w", encoding="utf-8") as f:
    f.write("================================================================================\n")
    f.write("             SHREE ASHIRWAD PACKERS - DAILY BACKLINK ACTION PLAN                \n")
    f.write("================================================================================\n\n")
    f.write("Website to Rank : https://shreeashirwadpackers.com/\n")
    f.write("Target GMB Map  : https://share.google/0U65Vc4zAVDwVlPfD\n")
    f.write(f"Total Targets   : {len(to_build)} Fresh Platforms (All 34 Existing Excluded)\n")
    f.write("Schedule        : 10 Links Per Day (1 Batch per Day)\n\n")
    f.write("--------------------------------------------------------------------------------\n")
    f.write("COPY-PASTE CHEAT SHEET (Copy and paste this into every submission):\n")
    f.write("--------------------------------------------------------------------------------\n")
    f.write("Website URL  : https://shreeashirwadpackers.com/\n")
    f.write("Title/Anchor : Packers and Movers Ranchi - 9835565233\n")
    f.write("Keywords     : Packers and Movers Ranchi, household shifting ranchi, packers and movers in ranchi\n")
    f.write("Description  : Shree Ashirwad Packers and Movers provides safe, fast, and reliable household shifting, vehicle transport, and corporate relocation services in Ranchi, Jharkhand. Call +91 9835565233.\n")
    f.write("Map / GMB    : https://share.google/0U65Vc4zAVDwVlPfD\n\n")
    f.write("--------------------------------------------------------------------------------\n")
    f.write("HOW TO USE (Super Simple):\n")
    f.write("1. Click any website URL below (in VS Code: Ctrl + Click to open).\n")
    f.write("2. Click 'Register' or 'Add Bookmark' / 'Submit Story' / 'Submit Link'.\n")
    f.write("3. Paste the URL, Title, Keywords, and Description from the Cheat Sheet above.\n")
    f.write("4. After submitting, change [ ] to [x] to mark it done!\n")
    f.write("--------------------------------------------------------------------------------\n\n")

    batch_size = 10
    total_batches = (len(to_build) + batch_size - 1) // batch_size
    for b in range(total_batches):
        start_idx = b * batch_size
        end_idx = min(start_idx + batch_size, len(to_build))
        batch_items = to_build[start_idx:end_idx]
        da_range = f"DA {batch_items[0]['da']} to DA {batch_items[-1]['da']}" if batch_items[0]['da'] != batch_items[-1]['da'] else f"DA {batch_items[0]['da']}"
        
        f.write("================================================================================\n")
        f.write(f"DAY {b+1:02d} | BATCH {b+1} (Links {start_idx+1} to {end_idx}) - {da_range}\n")
        f.write("================================================================================\n")
        for i, item in enumerate(batch_items, start=start_idx+1):
            root = item["root"]
            da = item["da"]
            url = f"https://{root}/"
            f.write(f"[ ] {i:03d}. {url:<45} (DA: {da})\n")
        f.write("\n")

    f.write("================================================================================\n")
    f.write(f"EXCLUDED SITES ({len(our_existing)} Platforms Where You Already Have Backlinks):\n")
    f.write("================================================================================\n")
    for ex in sorted(list(our_existing)):
        f.write(f"[x] ALREADY DONE: https://{ex}/\n")

print(f"Successfully generated {out_file} with {len(to_build)} sites across {total_batches} days!")
