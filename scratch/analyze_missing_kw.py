import json

with open('scratch/missing_keywords_report.json', 'r', encoding='utf-8') as f:
    data = json.load(f)

missing = data['missing_files']
print(f"Total missing: {len(missing)}")

has_doc_kw = [m for m in missing if m['has_doc_keywords']]
no_doc_kw = [m for m in missing if not m['has_doc_keywords']]

print(f"Missing meta tag, BUT HAS keywords in PHP docblock: {len(has_doc_kw)}")
print(f"Missing meta tag AND NO keywords in docblock: {len(no_doc_kw)}")

print("\n--- Sample with docblock keywords ---")
for m in has_doc_kw[:10]:
    print(f"  {m['filename']}: '{m['sample_keywords']}'")

print("\n--- Sample with NO docblock keywords ---")
for m in no_doc_kw[:10]:
    print(f"  {m['filename']}")
