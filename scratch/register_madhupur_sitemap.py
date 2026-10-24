import re
from datetime import datetime

SITEMAP_PATH = r"d:\shreeashirwadpackers\sitemap.xml"

SLUGS = [
    # Group 1
    "madhupur-to-ranchi-packers-and-movers",
    "madhupur-to-deoghar-packers-and-movers",
    "madhupur-to-dhanbad-packers-and-movers",
    "madhupur-to-giridih-packers-and-movers",
    "madhupur-to-dumka-packers-and-movers",
    # Group 2
    "ranchi-to-madhupur-packers-and-movers",
    "deoghar-to-madhupur-packers-and-movers",
    "dhanbad-to-madhupur-packers-and-movers",
    "giridih-to-madhupur-packers-and-movers",
    "dumka-to-madhupur-packers-and-movers",
    # Group 3
    "madhupur-to-kolkata-packers-and-movers",
    "madhupur-to-patna-packers-and-movers",
    "madhupur-to-asansol-packers-and-movers",
    "madhupur-to-delhi-packers-and-movers",
    "madhupur-to-durgapur-packers-and-movers",
    # Group 4
    "kolkata-to-madhupur-packers-and-movers",
    "patna-to-madhupur-packers-and-movers",
    "asansol-to-madhupur-packers-and-movers",
    "delhi-to-madhupur-packers-and-movers",
    "durgapur-to-madhupur-packers-and-movers",
]

def main():
    with open(SITEMAP_PATH, "r", encoding="utf-8") as f:
        content = f.read()

    existing_urls = re.findall(r'<loc>(https://www\.shreeashirwadpackers\.com/[^<]+)</loc>', content)
    print(f"Current total URLs in sitemap: {len(existing_urls)}")

    new_entries = []
    base_time = "2026-10-17T18:47:"

    for idx, slug in enumerate(SLUGS, 1):
        full_url = f"https://www.shreeashirwadpackers.com/{slug}"
        if full_url in existing_urls:
            print(f"Skipping already registered URL: {full_url}")
            continue

        sec = f"{idx:02d}"
        lastmod = f"{base_time}{sec}+05:30"
        entry = f"""  <url>
    <loc>{full_url}</loc>
    <lastmod>{lastmod}</lastmod>
    <changefreq>weekly</changefreq>
    <priority>0.85</priority>
  </url>"""
        new_entries.append(entry)

    if not new_entries:
        print("No new URLs to add.")
        return

    xml_snippet = "\n" + "\n".join(new_entries) + "\n</urlset>"
    updated_content = content.replace("</urlset>", xml_snippet)

    with open(SITEMAP_PATH, "w", encoding="utf-8") as f:
        f.write(updated_content)

    with open(SITEMAP_PATH, "r", encoding="utf-8") as f:
        final_urls = re.findall(r'<loc>(https://www\.shreeashirwadpackers\.com/[^<]+)</loc>', f.read())

    print(f"Successfully appended {len(new_entries)} URLs!")
    print(f"Updated total URLs in sitemap: {len(final_urls)} (Expected: 778)")

if __name__ == "__main__":
    main()
