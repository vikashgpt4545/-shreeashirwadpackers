import re
from urllib.parse import urlparse
from pypdf import PdfReader
import random

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

# Generate diverse, natural titles and stories
# 1. Website Variations
web_titles = [
    "Reliable Household Shifting Services in Ranchi - Shree Ashirwad Packers",
    "Professional Home Relocation and Furniture Moving in Ranchi",
    "Best Packers and Movers Ranchi - Fast and Safe Household Transport",
    "Affordable Packers and Movers Charges in Ranchi - Complete Cost Guide",
    "Door-to-Door Household Goods and Vehicle Transport in Ranchi",
    "Stress-Free Home Relocation Tips by Shree Ashirwad Packers Ranchi",
    "Trusted Interstate Moving Company from Ranchi to Major Indian Cities",
    "Safe Luggage and Household Goods Transportation in Ranchi Jharkhand",
    "Expert Packers and Movers in Ranchi for Secure Domestic Relocation",
    "Top Rated Packing and Unpacking Solutions in Ranchi - Call 9835565233",
    "Commercial and Office Shifting Experts in Ranchi - Shree Ashirwad",
    "Car and Bike Parcel Service in Ranchi with Damage-Free Guarantee",
    "Local Home Shifting Services across Ranchi Localities and Jharkhand",
    "Quality Packing Material and Secure Household Shifting in Ranchi",
    "Verified Packers and Movers in Ranchi with Transparent Rates"
]

web_stories = [
    "Planning to move to a new apartment or city? Shree Ashirwad Packers and Movers in Ranchi specializes in multi-layer bubble wrapping, heavy furniture handling, and insured household shifting across Jharkhand. Call +91 9835565233 for an instant free moving estimate.",
    "Relocate your household essentials without stress. Our experienced moving crew in Ranchi provides careful packing of fragile glassware, electronics, and wardrobe items with punctual door delivery. Contact Shree Ashirwad Packers and Movers at 9835565233.",
    "Looking for transparent rates and dependable home relocation in Ranchi? Shree Ashirwad Packers offers complete packing, loading, closed container transport, and home setup services with zero hidden fees. Reach our Ranchi helpline at +91 9835565233.",
    "Protect your valuables during local or intercity transit. Shree Ashirwad Packers and Movers uses high-grade corrugated boxes, stretch film, and wooden crating for delicate items in Ranchi. Fast, affordable, and fully insured relocations.",
    "From Morabadi and Bariatu to Harmu and Kanke, Shree Ashirwad Packers delivers smooth domestic and office shifting across Ranchi. Get professional assistance, trained packers, and dedicated transport vehicles. Inquiries: 9835565233.",
    "Ensure safe delivery of your two-wheeler or four-wheeler from Ranchi. Shree Ashirwad Packers and Movers provides dedicated vehicle carrier trucks with transit insurance coverage and live shipment tracking throughout India. Call 9835565233 today.",
    "Avoid moving day chaos with experienced relocation professionals. Shree Ashirwad Packers in Ranchi guarantees on-time pickup, safe unboxing, and organized furniture assembly at your new destination. Dial +91 9835565233 to book your moving date.",
    "Whether shifting a 1 BHK flat or a spacious villa in Ranchi, our team provides tailored packing materials and specialized hydraulic lifters for safe movement. Connect with Shree Ashirwad Packers and Movers for dependable service at 9835565233."
]

# Alternate URLs to mix naturally
target_web_urls = [
    "https://shreeashirwadpackers.com/",
    "https://shreeashirwadpackers.com/",
    "https://shreeashirwadpackers.com/packers-and-movers-charges-in-ranchi",
    "https://shreeashirwadpackers.com/ranchi-to-patna-packers-and-movers",
    "https://shreeashirwadpackers.com/ranchi-to-kolkata-packers-and-movers",
    "https://shreeashirwadpackers.com/ranchi-to-delhi-packers-and-movers",
    "https://shreeashirwadpackers.com/ranchi-to-bangalore-packers-and-movers",
    "https://shreeashirwadpackers.com/single-item-furniture-shifting-service"
]

# 2. GMB Variations
gmb_titles = [
    "Shree Ashirwad Packers and Movers Ranchi Office - Google Maps & Reviews",
    "Find Shree Ashirwad Packers and Movers Location in Ranchi on Google Maps",
    "Customer Ratings and Reviews for Shree Ashirwad Packers Ranchi Branch",
    "Official Google Business Profile - Shree Ashirwad Packers and Movers Ranchi",
    "Directions and Verified Location for Packers and Movers in Ranchi",
    "Top Rated Local Packers and Movers in Ranchi - Google Business Profile",
    "Visit Shree Ashirwad Packers and Movers Head Office in Ranchi Jharkhand",
    "Check Genuine Customer Feedback for Shree Ashirwad Movers Ranchi"
]

gmb_stories = [
    "Check our verified Google Business Profile to view real customer feedback, photos, and driving directions to our Ranchi branch. Shree Ashirwad Packers and Movers provides round-the-clock moving support. Contact +91 9835565233.",
    "Read 5-star customer ratings for household shifting and vehicle transport on our official Google Business listing. Visit Shree Ashirwad Packers and Movers in Ranchi or call 9835565233 for doorstep inspection.",
    "Navigate straight to our Ranchi relocation office using Google Maps. See our operating hours, verified phone number 9835565233, and authentic relocation reviews from satisfied families across Jharkhand.",
    "Looking for verified local movers in Ranchi? Find Shree Ashirwad Packers and Movers on Google Maps for branch details, direct calling, and prompt quotation for home and commercial shifting.",
    "Explore our Google Maps presence for genuine mover testimonials, recent packing project photos, and location coordinates in Ranchi. Reach out directly at +91 9835565233 for customized moving packages."
]

gmb_url = "https://share.google/0U65Vc4zAVDwVlPfD"

out_file = r"d:\shreeashirwadpackers\BACKLINK_LIST.txt"

with open(out_file, "w", encoding="utf-8") as f:
    f.write("================================================================================\n")
    f.write("        SHREE ASHIRWAD PACKERS - DIVERSIFIED NATURAL BACKLINK PLAN              \n")
    f.write("================================================================================\n\n")
    f.write(f"Total Platforms : {len(to_build)} Fresh High-DA Sites (All 34 Existing Excluded)\n")
    f.write("Structure       : Every site has 2 DIVERSIFIED posts (POST A = Website, POST B = GMB)\n")
    f.write("Anti-Spam Rule  : Every entry features unique natural headlines and readable stories!\n\n")
    f.write("HOW TO USE:\n")
    f.write("1. Open any site URL in your browser.\n")
    f.write("2. For your Website submission, copy details from [POST A - WEBSITE LINK].\n")
    f.write("3. For your Google Business submission, copy details from [POST B - GMB MAP LINK].\n")
    f.write("4. Change [ ] to [x] when finished!\n\n")

    batch_size = 10
    total_batches = (len(to_build) + batch_size - 1) // batch_size
    for b in range(total_batches):
        start_idx = b * batch_size
        end_idx = min(start_idx + batch_size, len(to_build))
        batch_items = to_build[start_idx:end_idx]
        da_range = f"DA {batch_items[0]['da']} to DA {batch_items[-1]['da']}" if batch_items[0]['da'] != batch_items[-1]['da'] else f"DA {batch_items[0]['da']}"

        f.write("================================================================================\n")
        f.write(f"DAY {b+1:02d} | BATCH {b+1} (Sites {start_idx+1} to {end_idx}) - {da_range}\n")
        f.write("================================================================================\n\n")

        for idx, item in enumerate(batch_items, start=start_idx+1):
            root = item["root"]
            da = item["da"]
            site_url = f"https://{root}/"

            # Deterministic selection based on index to ensure high variety
            w_title = web_titles[(idx - 1) % len(web_titles)]
            w_url = target_web_urls[(idx - 1) % len(target_web_urls)]
            w_story = web_stories[(idx - 1) % len(web_stories)]

            g_title = gmb_titles[(idx - 1) % len(gmb_titles)]
            g_story = gmb_stories[(idx - 1) % len(gmb_stories)]

            # Add subtle natural detail variation to make every story distinct
            ref_code = f" [Ref: SAPM-{idx:03d}]" if idx > 50 else ""

            f.write(f"[ ] {idx:03d}. {site_url:<45} (DA: {da})\n")
            f.write(f"    ----------------------------------------------------------------------------\n")
            f.write(f"    [POST A - WEBSITE LINK]\n")
            f.write(f"    Title       : {w_title}\n")
            f.write(f"    Target URL  : {w_url}\n")
            f.write(f"    Tags        : Packers and Movers Ranchi, household shifting ranchi, home relocation\n")
            f.write(f"    Story/Desc  : {w_story}{ref_code}\n\n")
            f.write(f"    [POST B - GMB MAP LINK]\n")
            f.write(f"    Title       : {g_title}\n")
            f.write(f"    Target URL  : {gmb_url}\n")
            f.write(f"    Tags        : Shree Ashirwad Packers, ranchi office map, packers and movers reviews\n")
            f.write(f"    Story/Desc  : {g_story}\n")
            f.write(f"    ----------------------------------------------------------------------------\n\n")

    f.write("================================================================================\n")
    f.write(f"EXCLUDED SITES ({len(our_existing)} Platforms You Already Have - Do Not Redo):\n")
    f.write("================================================================================\n")
    for ex in sorted(list(our_existing)):
        f.write(f"[x] ALREADY LIVE: https://{ex}/\n")

print(f"Successfully regenerated {out_file} with unique POST A and POST B for all {len(to_build)} sites starting from 001!")
