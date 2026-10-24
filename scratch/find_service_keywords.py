import re

keywords_file = 'keywords-all-unique.txt'
with open(keywords_file, 'r', encoding='utf-8') as f:
    keywords = [line.strip() for line in f if line.strip()]

cats = {
    '1_single_item': [r'\bsingle\b', r'\bone item\b', r'\bfew items\b', r'\bsofa shifting\b', r'\bbed shifting\b', r'\bfridge shifting\b', r'\balmirah\b', r'\bfurniture shifting\b'],
    '2_luggage_baggage': [r'\bluggage\b', r'\bbaggage\b', r'\bhostel shifting\b', r'\bstudent\b', r'\bparcel service\b', r'\bcourier service\b', r'\btrunk\b'],
    '3_pet_relocation': [r'\bpet\b', r'\bdog\b', r'\bcat\b', r'\banimal\b', r'\bpets\b'],
    '4_plant_relocation': [r'\bplant\b', r'\bplants\b', r'\bnursery\b', r'\bbalcony garden\b', r'\bflower pots\b'],
    '5_data_center_office': [r'\bdata center\b', r'\bserver\b', r'\bit relocation\b', r'\boffice shifting\b', r'\boffice relocation\b', r'\bcorporate\b', r'\bcommercial shifting\b'],
    '6_storage_warehousing': [r'\bwarehousing\b', r'\bwarehouse\b', r'\bhousehold storage\b', r'\bstorage facility\b', r'\bgoods storage\b', r'\bstorage charges\b'],
    '7_fragile_antique': [r'\bfragile\b', r'\bantique\b', r'\bpiano\b', r'\bcrating\b', r'\bwooden crate\b', r'\bglassware\b', r'\bartwork\b', r'\bsculpture\b', r'\bcrockery\b'],
    '8_bike_courier': [r'\bbike parcel\b', r'\bbike courier\b', r'\btwo wheeler parcel\b', r'\bmotorcycle parcel\b', r'\bbike transport\b', r'\bscooter parcel\b']
}

for cat_name, patterns in cats.items():
    print(f"=== {cat_name} ===")
    matches = []
    combined_pat = re.compile('|'.join(patterns), re.IGNORECASE)
    for kw in keywords:
        if combined_pat.search(kw):
            matches.append(kw)
    print(f"Found {len(matches)} queries. First 15:")
    for m in matches[:15]:
        print(f"  - {m}")
    print()
