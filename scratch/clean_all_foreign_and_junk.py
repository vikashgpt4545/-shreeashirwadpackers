import re

src_file = 'keywords-all-unique.txt'
report_file = 'scratch/removed_keywords_report.txt'

with open(src_file, 'r', encoding='utf-8', errors='ignore') as f:
    lines = [line.strip() for line in f if line.strip()]

# 1. Foreign Languages (Portuguese, Spanish, Turkish, Vietnamese, Indonesian, Dutch, German, French, Italian)
foreign_lang = re.compile(
    r'\b('
    # Portuguese / Spanish
    r'mudanca|mudancas|caminhao|carrinhas|flete|fletes|mudanza|mudanzas|trasteo|trasteos|carretos|empresa de mudanca|transportadora de mudanca|frete|barato|residenciais'
    # Turkish
    r'|evden|eve|nakliyat|nakliye|tasima|tasma|esya|kamyonet|asansorlu|sehirler|arasi|aparat|subesi'
    # Vietnamese
    r'|chuyen|nha|dich|vu|tron|goi|gia|re|chuyển|nhà'
    # Indonesian / Malay
    r'|pindahan|jasa|lori|sewa|angkut|barang|tumpang|biaya'
    # French / German / Dutch / Italian
    r'|demenagement|demenageur|umzug|umzuege|trasloco|traslochi|verhuizen|verhuizing|vervoeren|goedkoop'
    r')\b', re.I
)

# 2. Local non-moving services, stores, utilities
unrelated_services = re.compile(
    r'\b('
    # Cable, TV, Broadband, DTH, Internet
    r'cable tv|cable operators?|cable providers?|broadband|wifi support|wifi providers?|dth service|dish tv|tata sky|act fibernet|hathway|cablemover'
    # Passenger cabs, taxis, call drivers, rentals
    r'|call drivers?|cab service|taxi service|outstation cab|cabs in|taxis in|car rental for|bus tickets?|travels pickup|private van'
    # Retail stores, bakeries, printing, gifts
    r'|printers?|printing|xerox|cake walkers?|cakes?|bakery|bakeries|pastr(y|ies)|sweet shop|archies|stationery|flower shop|florist|supermarket'
    # Retail courier brand outlets & Post offices
    r'|aramex|post office|speed post|amazon courier|amazon office|flipkart delivery|fedex office|dhl counter|dtdc branch'
    # Domestic maids, babysitters, home repair
    r'|baby sitter|babysitter|maid services?|maids? in|cook in|cook for|salon|parlour|spa in|massage in|electrician|plumber|pest control|ac repair|ac service|painter|carpenter in'
    # Banks, Real estate, civic
    r'|andhrabank|bank of|atm in|atm near|builders? contac|air pollution|app for crossing'
    # Visa & Immigration
    r'|migration coimbatore|visa consultancy'
    # Hauling (US junk removal)
    r'|hauling|haulers?'
    # Specific competitor brands / products
    r'|a packers and movers|apex relocation|buy movepack|college hunks|fomenji'
    r')\b', re.I
)

removed = []
kept = []

for l in lines:
    low = l.lower()
    r = None
    if foreign_lang.search(low):
        r = 'Foreign Language (Portuguese/Turkish/Vietnamese/Indonesian/Dutch)'
    elif unrelated_services.search(low):
        r = 'Unrelated Local Service / Retail Store / Utility / Competitor'

    if r:
        removed.append((l, r))
    else:
        kept.append(l)

# Write cleaned keywords back
with open(src_file, 'w', encoding='utf-8') as f:
    for kw in kept:
        f.write(kw + '\n')

# Append to audit report
with open(report_file, 'a', encoding='utf-8') as f:
    f.write('\n' + '='*80 + '\n')
    f.write('ADDITIONAL REMOVED IN STAGE 5 (FOREIGN LANGUAGES & NON-RELOCATION UTILITIES):\n')
    f.write('='*80 + '\n')
    for kw, r in removed:
        f.write(f'[{r}] {kw}\n')

print(f'Stage 5 Clean Complete:')
print(f'Before: {len(lines)}')
print(f'Removed: {len(removed)}')
print(f'Final Kept: {len(kept)}')

# Verify user-flagged samples are 100% gone
test_terms = ['a packers and movers', 'amazon courier', 'apex relocation', 'appliance hauling', 'aramex', 'c k printers', 'cable tv', 'cake walkers', 'call drivers', 'caminhao']
for t in test_terms:
    found_in_kept = [k for k in kept if t in k.lower()]
    print(f'Verification for \"{t}\": {len(found_in_kept)} remaining in kept (MUST BE 0)')
