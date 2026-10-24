import re

src_file = 'keywords-all-unique.txt'
report_file = 'scratch/removed_keywords_report.txt'

with open(src_file, 'r', encoding='utf-8', errors='ignore') as f:
    lines = [line.strip() for line in f if line.strip()]

# Competitor brand names to eliminate (both Indian & Foreign)
competitors = [
    'agarwal', 'agrawal', 'agrwal', 'agrwaal', 'aggarwal', 'aaggarwal', 'aggaewal',
    'agrasen', 'agree home', 'aitco', 'ajv', 'ak courier', 'ak couriers', 'amravati packers',
    'an logistics', 'air 1 moving', 'faisal', 'soni packers', 'orange packers', 'ez movers',
    'shreeji', 'divya packers', 'ekart', 'future packers', 'johnson movers', 'shreeram packers',
    'tnt', 'anjana', 'century movers', 'chetak', 'chicagoland', 'citylink', 'indianapolis',
    'kaveri', 'kesineni', 'kohinoor', 'latway', 'laxmi', 'mondial', 'movax', 'myhome packers',
    'paradise packers', 'allied', 'crown relocations', 'gati', 'vrl', 'tci', 'dtdc', 'bluedart',
    'delhivery', 'safexpress', 'assureshift', 'logisticmart', 'shiftfreight', 'packerswala',
    'nobroker', 'magicbricks', 'quikr', 'sulekha', 'justdial', 'urban company', 'urbanclap',
    'porter', 'leo packers', 'apml', 'baba packers', 'bajrang packers', 'balaji packers',
    'bhavani packers', 'bluechip', 'bluestar', 'choudhary packers', 'daksh packers',
    'diamond packers', 'eagle packers', 'everest packers', 'ganesh packers', 'garuda packers',
    'globe packers', 'golden packers', 'goodluck packers', 'goyal packers', 'guru packers',
    'hans packers', 'hariom packers', 'hindustan packers', 'ideal packers', 'jaishree',
    'janata packers', 'jindal packers', 'kalyan packers', 'kavita packers', 'kiran packers',
    'krishna packers', 'kuber packers', 'mahalaxmi', 'mahavir', 'mahesh packers', 'manish packers',
    'maruti packers', 'max packers', 'metro packers', 'modern packers', 'mohan packers',
    'mukesh packers', 'navata', 'om logistics', 'om packers', 'omkar packers', 'oriental packers',
    'pacific packers', 'panwar packers', 'paramount packers', 'pawan packers', 'pioneer packers',
    'pooja packers', 'prakash packers', 'prasad packers', 'pratap packers', 'premier packers',
    'prime packers', 'prince packers', 'priyanka packers', 'radhey packers', 'rahul packers',
    'raj packers', 'rajasthan packers', 'rajdhani packers', 'rajesh packers', 'rajput packers',
    'rakesh packers', 'ram packers', 'ramesh packers', 'ratan packers', 'ravi packers',
    'reliance packers', 'riddhi packers', 'rk packers', 'royal packers', 'sagar packers',
    'sai packers', 'sainik packers', 'samrat packers', 'sanjay packers', 'santa fe',
    'santosh packers', 'sarvodaya packers', 'satyam packers', 'sharma packers', 'shiva packers',
    'shivaji packers', 'shree ganesh', 'shree maruti', 'shree ram', 'shri ram', 'siddhi packers',
    'singh packers', 'somesh packers', 'speed packers', 'star packers', 'sudhir packers',
    'sunil packers', 'super packers', 'supreme packers', 'suraj packers', 'surya packers',
    'swastik packers', 'tirupati packers', 'universal packers', 'uttam packers', 'varuna packers',
    'vayu packers', 'ved packers', 'vijay packers', 'vikas packers', 'vinayak packers',
    'vipin packers', 'vishal packers', 'welcome packers', 'yaduvanshi', 'yadav packers'
]
comp_re = re.compile(r'\b(' + '|'.join(re.escape(c) for c in competitors) + r')\b', re.I)

# Typo and malformed queries
typo_re = re.compile(
    r'\b('
    r'packers and movers i\b|packers and movers i(?![n\s])\w+|packers and movers imn\b|itrastate|nd movr|pcker'
    r'|pakers|pakrs|pakres|movrs|moevrs|shifitng|sifting|relocatin|transprot'
    r')\b', re.I
)

# Foreign and non-moving terms
foreign_non_moving = re.compile(
    r'\b('
    r'america|american|50 states|all 50 states|3pl|almari|food package|drop box|pickle|vacuum'
    r'|air 1 moving|car insurance|repair shops|mechanic|breeders|cement dealers|carton box in'
    r'|moving ads|moving adiz|movez wakad|ups service|ups velachery|cargoplan|cargott|carryvans'
    r')\b', re.I
)

clean_candidates = []
rejected = []

for l in lines:
    low = l.lower()
    reason = None
    if typo_re.search(low):
        reason = 'Typo / Malformed Query'
    elif comp_re.search(low):
        reason = 'Competitor Brand Name'
    elif foreign_non_moving.search(low):
        reason = 'Foreign / Non-moving / Retail'
    
    if reason:
        rejected.append((l, reason))
    else:
        clean_candidates.append(l)

with open(src_file, 'w', encoding='utf-8') as f:
    for kw in clean_candidates:
        f.write(kw + '\n')

with open(report_file, 'a', encoding='utf-8') as f:
    f.write('\n' + '='*80 + '\n')
    f.write('ADDITIONAL REMOVED IN STAGE 8 (JHARKHAND-STANDARD CLEAN: COMPETITORS, TYPOS, AMERICAN):\n')
    f.write('='*80 + '\n')
    for kw, r in rejected:
        f.write(f'[{r}] {kw}\n')

print(f'Jharkhand Standard Clean Applied:')
print(f'Before: {len(lines)}')
print(f'Removed: {len(rejected)}')
print(f'Final Kept: {len(clean_candidates)}')
