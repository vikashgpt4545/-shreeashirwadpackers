import re

src_file = 'keywords-all-unique.txt'
report_file = 'scratch/removed_keywords_report.txt'

with open(src_file, 'r', encoding='utf-8', errors='ignore') as f:
    lines = [line.strip() for line in f if line.strip()]

# Comprehensive Purge Criteria
purge_patterns = [
    # 1. Foreign Languages (German, Swiss-German, Nordic, Slavic, Romance, Asian, African)
    r'\b(zugelunternehmen|kosten|nachrusten|wohnwagen|verhuizer|verhuizen|przewoznicy|vagonka|carer|edullinen|muuttopalvelu|huonekalujen|kuljetus|hinnasto|hinta|maksaa|kalustekuljetin|butor|szallitas|koltoztetes|hazhozszallitas|fuvarozas|kanape|arak|olcson|orszagosan|ingyen|debrecen|budapest|flytning|flytte|flyttefirma|flyttebil|mbler|mbel|billig|billigste|klaver|flygel|ballerup|bestil|opbevaring|fragt|pakke|paketvagn|paketkarra|pakkevogn|pakkevogner|proffs|packare|mobler|stehovani|nabytku|celnice|praha|brno|przeprowadzki|mebli|warszawa|usugi|transportowe|krakow|mobila|mutari|mutat|mutare|bucuresti|cluj|depozitare|ieftin|traslochi|trasloco|mobili|trasporto|pianoforti|milano|torino|roma|consegna|sponda|idraulica|movimentazione|formati|mudanca|mudancas|caminhao|carrinhas|flete|fletes|mudanza|mudanzas|trasteo|trasteos|carretos|frete|cargaderas|citypaq|lisboa|porto|madrid|barcelona|evden|eve|nakliyat|nakliye|tasima|tasma|esya|kamyonet|asansorlu|sehirler|arasi|aparat|subesi|istanbul|ankara|izmir|beyaz|chuyen|nha|dich|vu|tron|goi|gia|re|hanoi|saigon|pindahan|jasa|lori|sewa|angkut|barang|tumpang|biaya|jakarta|rumah|pakrovejai|perevozka|mebeli|riyadh|vacature|stacaravan|verplaatsen|movinga|premiumversicherung)\b',
    
    # 2. Foreign Locations (Africa, Alaska, UK, US Towns, Canada, Australia)
    r'\b(fairbanks|kodiak|nairobi|lagos|kenya|tanzania|uganda|africa|white rock|southampton|ballerup|debrecen|budapest|helsinki|espoo|warszawa|krakow|praha|bucuresti|cluj|milano|lisboa|porto|madrid|barcelona|istanbul|ankara|izmir|hanoi|saigon|jakarta|riyadh)\b',
    r'\b(cargoplan uk|pickfords co uk|cost of packers and movers uk|furniture courier uk|furniture movers uk|furniture movers us|furniture transport uk|packcity uk|trust movers china|va cheap movers)\b',

    # 3. Local Politics, Police, Civic, Public Transport, Saw Mills, Towing
    r'\b(who is sp for|winners and losers in|air pollution|police station|rto office|passport office)\b',
    r'\b(buses from|bus route|metro timing|local train|towing van|valet parking)\b',
    r'\b(saw mill|wood saw mill|cement dealers?|cat breeders?|dog breeders?|breeders? in|wifi routers?|wifi service)\b',

    # 4. Local Trades & Store Errands (carpenters, painters, plumbers, mechanics, tyre dealers)
    r'\b(carpenters? in|painters? in|electricians? in|plumbers? in|mechanics? in|tailors? in|bridgestone dealers|carrier distributor|case lot fast mover|repair shops at|insurance provider)\b',

    # 5. Empty Boxes Shopping (Carton boxes, wooden boxes, cardboard boxes)
    r'\b(carton box in|carton box kphb|carton box buyer|carton box near|brown carton box|carton box dealers|carton box wholesaler|cardboard box in|cardboard boxes near|empty carton box|carton box in velachery|carton box sellers|carton box shop|carton box supplier|carton boxes shops|cartons in pimpri|buy carton boxes|adyar cardboard boxes|wooden boxes velachery)\b',

    # 6. US Air Travel Luggage & Pickle/Food Packaging
    r'\b(us food|us pickle|pickle pack|vacuum pack|vaccum packing|us packaging|us drop box|packing cover shop|us courier|us packers in|us packing in|us packing covers|use and throw luggage bags)\b',

    # 7. Computer UPS Inverters & Hardware
    r'\b(ups dealers?|ups service|ups velachery|ups in |ups repairs?|ups corrier|ups courier|famous ups|best ups|top 10 ups|top 5 ups|ups providers|ups pimpri|ups american)\b',

    # 8. Ads, Marketing, Media, Mobile Apps
    r'\b(moving ads|moving adiz|mover ads|homeshifting ads|company google ads|advertising for moving|ads ppt|movingadds|moving adverts|packers app|delievry mobile app|marketing not advertising|packing adverts|roof pad advertising|true way advertisements)\b',

    # 9. Gyms, Fitness, Dance Studios
    r'\b(movez wakad|dance class|fitness studio|zumba|aerobics)\b',

    # 10. Foreign Brands, US Brands & Portmanteaus
    r'\b(cargocushionpack|cargoplan|cargott|carryvans|us pro moving|capital city movers|2movers|bixmove|allcitymover|bookourshifting|indflytning|uship movers|movin on movers|moving again reviews|zip moving|wlh moving|white and co removals|white and company removals|white gold moving|whitemoon packers)\b',

    # 11. Courier Retail Shops & Branch Outlets
    r'\b(xpress bess courier|xpress deliveries|xpress courier|the professional couriers|professional couriers)\b',

    # 12. Labor needs
    r'\b(worker need)\b'
]
purge_re = re.compile('|'.join(purge_patterns), re.I)

purged = []
clean = []
for l in lines:
    if purge_re.search(l):
        purged.append(l)
    else:
        clean.append(l)

with open(src_file, 'w', encoding='utf-8') as f:
    for c in clean:
        f.write(c + '\n')

with open(report_file, 'a', encoding='utf-8') as f:
    f.write('\n' + '='*80 + '\n')
    f.write('ADDITIONAL REMOVED IN STAGE 7 (DEFINITIVE SWEEP):\n')
    f.write('='*80 + '\n')
    for p in purged:
        f.write(f'[DEFINITIVE_PURGE] {p}\n')

print(f'Definitive Sweep Complete:')
print(f'Before: {len(lines)}')
print(f'Removed: {len(purged)}')
print(f'Final Clean Count: {len(clean)}')
