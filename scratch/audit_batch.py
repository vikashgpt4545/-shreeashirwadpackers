import urllib.request
import re

pages = [
    'packers-and-movers-in-goa',
    'packers-and-movers-in-kalyan-dombivli',
    'packers-and-movers-in-hubli-dharwad',
    'packers-and-movers-in-bhubaneswar-smart-city',
    'packers-and-movers-in-pimpri-chinchwad',
    'packers-and-movers-in-greater-noida-west',
    'packers-and-movers-in-dwarka-expressway',
    'packers-and-movers-in-golf-course-road-gurgaon',
    'packers-and-movers-in-new-gurgaon',
    'packers-and-movers-in-whitefield-kadugodi',
    'packers-and-movers-in-baner-pashan-pune',
    'packers-and-movers-in-rajarhat-kolkata',
    'packers-and-movers-gst-rate',
    'iba-approved-packers-and-movers-bill-format',
    'how-to-calculate-packers-and-movers-charges',
    'packing-material-box-cost-guide',
    'household-goods-transit-insurance-claim-guide'
]

print(f"{'Page Slug':<50} | {'Status':<6} | {'Words':<6} | {'Schemas':<7} | {'Result'}")
print("-" * 85)

for p in pages:
    url = f"http://127.0.0.1:8000/{p}"
    try:
        resp = urllib.request.urlopen(url)
        code = resp.getcode()
        html = resp.read().decode('utf-8', errors='ignore')
        
        clean = re.sub(r'<(script|style|header|footer)[^>]*>.*?</\1>', '', html, flags=re.DOTALL)
        clean = re.sub(r'<[^>]+>', ' ', clean)
        words = len(clean.split())
        
        schemas = len(re.findall(r'<script type="application/ld\+json">', html))
        
        ok = (code == 200 and words >= 1600 and schemas == 4)
        status_str = "[PASS]" if ok else "[FAIL]"
        print(f"{p:<50} | {code:<6} | {words:<6} | {schemas:<7} | {status_str}")
    except Exception as e:
        print(f"{p:<50} | ERROR: {e}")
