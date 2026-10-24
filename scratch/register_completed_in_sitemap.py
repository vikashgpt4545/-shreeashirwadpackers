import xml.etree.ElementTree as ET
import os

sitemap_path = 'sitemap.xml'
tree = ET.parse(sitemap_path)
root = tree.getroot()

# The namespace
ns = '{http://www.sitemaps.org/schemas/sitemap/0.9}'
ET.register_namespace('', 'http://www.sitemaps.org/schemas/sitemap/0.9')

existing_urls = set(loc.text.strip().rstrip('/') for loc in root.findall(f'{ns}url/{ns}loc'))

with open('PAN_INDIA_HUB_PAGE_PROGRESS.md', 'r', encoding='utf-8') as f:
    lines = f.readlines()

added_count = 0
for line in lines:
    if '[x] COMPLETED' in line and '|' in line:
        parts = [p.strip() for p in line.split('|')]
        if len(parts) >= 7 and parts[1].isdigit():
            num = int(parts[1])
            name = parts[3]
            clean_file = parts[5].replace('`', '').strip()
            clean_slug = parts[6].replace('`', '').strip()
            full_url = f'https://www.shreeashirwadpackers.com/{clean_slug}'
            
            if os.path.exists(clean_file) and full_url not in existing_urls:
                url_elem = ET.SubElement(root, f'{ns}url')
                
                loc_elem = ET.SubElement(url_elem, f'{ns}loc')
                loc_elem.text = full_url
                
                lastmod_elem = ET.SubElement(url_elem, f'{ns}lastmod')
                lastmod_elem.text = '2026-10-19T19:30:00+05:30'
                
                changefreq_elem = ET.SubElement(url_elem, f'{ns}changefreq')
                changefreq_elem.text = 'weekly'
                
                priority_elem = ET.SubElement(url_elem, f'{ns}priority')
                priority_elem.text = '0.80'
                
                existing_urls.add(full_url)
                added_count += 1

print(f'Added {added_count} new URLs to sitemap.')

# Write back to file with proper XML declaration and indentation
import xml.dom.minidom

xml_str = ET.tostring(root, encoding='utf-8')
dom = xml.dom.minidom.parseString(xml_str)
pretty_xml = dom.toprettyxml(indent='  ', encoding='utf-8').decode('utf-8')

# Remove blank lines introduced by toprettyxml
clean_lines = [line for line in pretty_xml.splitlines() if line.strip()]
final_xml = '\n'.join(clean_lines) + '\n'

with open(sitemap_path, 'w', encoding='utf-8') as f:
    f.write(final_xml)

print(f'Successfully updated {sitemap_path}.')
