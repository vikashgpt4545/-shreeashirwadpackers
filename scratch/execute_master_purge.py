import re

src_file = 'keywords-all-unique.txt'
report_file = 'scratch/removed_keywords_report.txt'

with open(src_file, 'r', encoding='utf-8', errors='ignore') as f:
    lines = [line.strip() for line in f if line.strip()]

# 1. Foreign Language Lexicon (Polish, Czech, Hungarian, Danish, Finnish, Swedish, German, Spanish, Portuguese, Italian, Romanian, Turkish, Vietnamese, Indonesian)
foreign_words = [
    'mobila', 'mutari', 'mutat', 'mutare', 'bucuresti', 'cluj', 'depozitare', 'ieftin',
    'traslochi', 'trasloco', 'mobili', 'trasporto', 'pianoforti', 'milano', 'torino', 'roma', 'consegna', 'sponda', 'idraulica', 'movimentazione', 'formati',
    'przeprowadzki', 'mebli', 'warszawa', 'usugi', 'transportowe', 'krakow',
    'stehovani', 'nabytku', 'celnice', 'praha', 'brno',
    'butor', 'szallitas', 'budapest', 'debrecen', 'koltoztetes', 'arak', 'olcson', 'orszagosan', 'ingyen', 'hazhozszallitas', 'fuvarozas', 'kanape',
    'flytning', 'flytte', 'flyttefirma', 'flyttebil', 'mbler', 'mbel', 'billig', 'billigste', 'klaver', 'flygel', 'ballerup', 'bestil', 'opbevaring', 'fragt',
    'muutto', 'muuttoapu', 'muuttokarry', 'muuttopalvelu', 'helsinki', 'espoo', 'kuljetus', 'kalustekuljetin', 'hinta', 'hinnasto', 'huonekalujen', 'edullinen', 'mita', 'maksaa',
    'flytt', 'flytta', 'flyttfirma', 'stockholm', 'pakke', 'paketvagn', 'paketkarra', 'pakkevogn', 'pakkevogner', 'proffs', 'packare', 'mobler',
    'demenagement', 'demenageur', 'demenager', 'meubles', 'paris', 'lyon', 'marseille',
    'umzug', 'umzuege', 'umzugsfirma', 'moebel', 'verhuizen', 'verhuizing', 'berlin', 'muenchen', 'hamburg',
    'mudanca', 'mudancas', 'caminhao', 'carrinhas', 'flete', 'fletes', 'mudanza', 'mudanzas', 'trasteo', 'trasteos', 'carretos', 'frete', 'cargaderas', 'citypaq', 'lisboa', 'porto', 'madrid', 'barcelona',
    'evden', 'eve', 'nakliyat', 'nakliye', 'tasima', 'tasma', 'esya', 'kamyonet', 'asansorlu', 'sehirler', 'arasi', 'aparat', 'subesi', 'istanbul', 'ankara', 'izmir', 'beyaz',
    'chuyen', 'nha', 'dich', 'vu', 'tron', 'goi', 'gia', 're', 'hanoi', 'saigon',
    'pindahan', 'jasa', 'lori', 'sewa', 'angkut', 'barang', 'tumpang', 'biaya', 'jakarta', 'rumah',
    'pakrovejai', 'perevozka', 'mebeli', 'riyadh'
]
foreign_re = re.compile(r'\b(' + '|'.join(foreign_words) + r')\b', re.I)

# 2. Foreign Locations / US Towns / Foreign Brands
foreign_loc_re = re.compile(
    r'\b('
    r'ahwatukee|alsip|annandale|anwil|bangor|bloomington|bluemound|brownsburg|fargo|wilmington|dulles|billings|dunwoody|downers grove|hickory|rockford|kildeer|whitefish|antioch|southampton|pickfords|britannia|bekins|stellaris|us pro moving|capital city movers|cargoplan|cargott|carryvans|cargocushionpack|2movers|bixmove|allcitymover|bookourshifting|indflytning|uship movers|movin on movers|moving again reviews|trust movers china|indiana movers|kentucky movers'
    r')\b', re.I
)

# 3. US Air Travel Luggage & Pickle/Food Packaging
us_flight_re = re.compile(
    r'\b('
    r'us food|us pickle|pickle pack|vacuum pack|us packaging|us drop box|packing cover shop|us courier|us packers in|us packing in|us packing covers|use and throw luggage bags'
    r')\b', re.I
)

# 4. Retail Shopping for Empty Cardboard/Carton Boxes (not shifting service)
empty_box_re = re.compile(
    r'\b('
    r'carton box in|carton box kphb|carton box buyer|carton box near|brown carton box|carton box dealers|carton box wholesaler|cardboard box in|cardboard boxes near|empty carton box|carton box in velachery|carton box sellers|carton box shop|carton box supplier|carton boxes shops|cartons in pimpri|buy carton boxes|adyar cardboard boxes'
    r')\b', re.I
)

# 5. Computer UPS (Power Inverters / Batteries)
comp_ups_re = re.compile(
    r'\b('
    r'ups dealers?|ups service|ups velachery|ups in |ups repairs?|ups corrier|ups courier|famous ups|best ups|top 10 ups|top 5 ups|ups providers|ups pimpri'
    r')\b', re.I
)

# 6. Ads / Marketing / Mobile Apps
ads_marketing_re = re.compile(
    r'\b('
    r'moving ads|moving adiz|mover ads|homeshifting ads|company google ads|advertising for moving|ads ppt|movingadds|moving adverts|packers app|delievry mobile app'
    r')\b', re.I
)

# 7. Gym / Dance / Fitness
gym_re = re.compile(r'\b(movez wakad|dance class|fitness studio|zumba|aerobics)\b', re.I)

# 8. Unrelated Retail Trades, Local Shops & Services
retail_trade_re = re.compile(
    r'\b('
    r'cement dealers?|cat breeders?|dog breeders?|breeders? in|carpenters? in|painters? in|electricians? in|plumbers? in|mechanics? in|tailors? in|bag dealers|bag manufacturers|bag repair|box repair|bridgestone dealers|carrier distributor|case lot fast mover|insurance provider|repair shops at'
    r')\b', re.I
)

# 9. Single Word Gibberish / Domains
single_junk = set([
    'bookmyshifting', 'caravanmover', 'cargamerealbeng', 'cargamessn', 'cargania', 'carmover', 'citypaq', 'fastpak', 'fastracklogisticspakers', 'gaticargomoverpackerin', 'indflytningspris', 'inpackerandmover', 'justpackermover', 'lordsmoveindia', 'mobilemooversincbangalore', 'movehindia', 'movingadds', 'movingworld', 'mymovingreviews', 'packcity', 'packmovefast', 'southpacker', 'themovingworld', 'vimovingcenter', 'butorszallitas', 'cargaderas', 'cargocushionpack', 'cargott', 'carryvans', 'indflytningspris', 'kalustekuljetin', 'mbeltransport', 'moebeltransporter', 'muuttoapu', 'muuttokarry', 'muuttopalvelu', 'paketkarra', 'paketvagn', 'pakkevogn', 'pakkevogner', 'pakrovejai'
])

removed = []
kept = []

for l in lines:
    low = l.lower()
    r = None
    if low in single_junk or (len(low.split()) == 1 and foreign_re.search(low)):
        r = 'Single Word Scraper / Foreign Junk'
    elif foreign_re.search(low):
        r = 'Foreign Language'
    elif foreign_loc_re.search(low):
        r = 'Foreign Location / Brand'
    elif us_flight_re.search(low):
        r = 'US Air Travel Food/Pickle Packing'
    elif empty_box_re.search(low):
        r = 'Retail Empty Box Shopping'
    elif comp_ups_re.search(low):
        r = 'Computer UPS Inverter Hardware'
    elif ads_marketing_re.search(low):
        r = 'Advertising / Marketing / App'
    elif gym_re.search(low):
        r = 'Gym / Dance Studio'
    elif retail_trade_re.search(low):
        r = 'Retail Trade / Shop / Non-moving Service'

    if r:
        removed.append((l, r))
    else:
        kept.append(l)

# Write back
with open(src_file, 'w', encoding='utf-8') as f:
    for kw in kept:
        f.write(kw + '\n')

with open(report_file, 'a', encoding='utf-8') as f:
    f.write('\n' + '='*80 + '\n')
    f.write('ADDITIONAL REMOVED IN STAGE 6 (MASTER RETAIL, FOREIGN & SHOP PURGE):\n')
    f.write('='*80 + '\n')
    for kw, r in removed:
        f.write(f'[{r}] {kw}\n')

print(f'Stage 6 Master Purge Complete:')
print(f'Before: {len(lines)}')
print(f'Removed: {len(removed)}')
print(f'Final Pristine Kept: {len(kept)}')
