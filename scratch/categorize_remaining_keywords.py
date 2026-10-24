import re
from collections import Counter

with open('keywords-all-unique.txt', 'r', encoding='utf-8') as f:
    kws = [l.strip() for l in f if l.strip()]

# Major Indian Cities & States dictionary for route detection
cities_known = {
    'mumbai', 'delhi', 'bangalore', 'bengaluru', 'hyderabad', 'chennai', 'kolkata', 'pune', 'ahmedabad',
    'jaipur', 'lucknow', 'chandigarh', 'indore', 'bhopal', 'patna', 'nagpur', 'vadodara', 'surat', 'rajkot',
    'visakhapatnam', 'vizag', 'vijayawada', 'guntur', 'coimbatore', 'madurai', 'kochi', 'cochin', 'trivandrum',
    'thiruvananthapuram', 'calicut', 'kozhikode', 'thrissur', 'bhubaneswar', 'cuttack', 'rourkela', 'puri',
    'guwahati', 'shillong', 'silchar', 'dehradun', 'haridwar', 'rishikesh', 'roorkee', 'agra', 'varanasi',
    'kanpur', 'prayagraj', 'allahabad', 'meerut', 'bareilly', 'aligarh', 'moradabad', 'gorakhpur', 'noida',
    'greater noida', 'gurgaon', 'gurugram', 'ghaziabad', 'faridabad', 'amritsar', 'ludhiana', 'jalandhar',
    'mysore', 'mysuru', 'hubli', 'hubballi', 'belgaum', 'belagavi', 'mangalore', 'mangaluru', 'gulbarga',
    'kalaburagi', 'shimoga', 'udupi', 'gwalior', 'jabalpur', 'ujjain', 'sagar', 'satna', 'raipur', 'bilaspur',
    'durg', 'bhilai', 'korba', 'jodhpur', 'udaipur', 'kota', 'bikaner', 'ajmer', 'alwar', 'nashik', 'aurangabad',
    'solapur', 'amravati', 'kolhapur', 'sangli', 'nanded', 'jalgaon', 'tirupati', 'kurnool', 'nellore',
    'kakinada', 'rajahmundry', 'anantapur', 'warangal', 'nizamabad', 'karimnagar', 'khammam', 'salem',
    'tiruchirappalli', 'trichy', 'tirunelveli', 'erode', 'vellore', 'thanjavur', 'nagercoil', 'dindigul',
    'ranchi', 'jamshedpur', 'dhanbad', 'bokaro', 'deoghar', 'hazaribagh', 'asansol', 'durgapur', 'siliguri',
    'kerala', 'goa', 'assam', 'odisha', 'orissa', 'punjab', 'haryana', 'himachal', 'shimla', 'jammu', 'srinagar'
}

# Categorization buckets
corridor_queries = [] # (kw, city1, city2)
service_queries = {
    'bike_two_wheeler': [],
    'car_transport': [],
    'single_item_luggage': [],
    'office_commercial': [],
    'storage_warehousing': [],
    'pet_plant_moving': [],
    'fragile_furniture_electronics': [],
    'mini_truck_tempo': [],
    'international_moving': []
}
cost_calculator_queries = []
city_location_queries = Counter()
general_high_intent = []

for kw in kws:
    k_low = kw.lower()
    
    # 1. Intercity Corridor check with known cities
    found_corridor = False
    for c1 in cities_known:
        if c1 in k_low:
            for c2 in cities_known:
                if c1 != c2 and c2 in k_low and (' to ' in k_low or ' from ' in k_low):
                    # Check order if possible
                    corridor_queries.append((kw, c1, c2))
                    found_corridor = True
                    break
            if found_corridor:
                break
    if found_corridor:
        continue

    # 2. Service Intent categories
    if any(w in k_low for w in ['bike', 'motorcycle', 'scooter', 'activa', 'two wheeler', 'bullet', 'royal enfield', 'pulsar', 'two-wheeler']):
        service_queries['bike_two_wheeler'].append(kw)
        continue
    if any(w in k_low for w in ['car ', 'cars', 'sedan', 'suv', 'hatchback', 'car carrier', 'car transport', 'car shifting']):
        service_queries['car_transport'].append(kw)
        continue
    if any(w in k_low for w in ['luggage', 'single item', 'few items', 'parcel', 'courier', 'box delivery', 'baggage', 'small shifting', 'only fridge', 'only bed', 'sofa shifting', 'wardrobe']):
        service_queries['single_item_luggage'].append(kw)
        continue
    if any(w in k_low for w in ['office', 'corporate', 'commercial', 'data center', 'server', 'shop', 'business', 'it company']):
        service_queries['office_commercial'].append(kw)
        continue
    if any(w in k_low for w in ['storage', 'warehouse', 'warehousing', 'household storage', 'goods storage']):
        service_queries['storage_warehousing'].append(kw)
        continue
    if any(w in k_low for w in ['pet', 'dog', 'cat', 'plant', 'plants', 'aquarium']):
        service_queries['pet_plant_moving'].append(kw)
        continue
    if any(w in k_low for w in ['furniture', 'fragile', 'piano', 'antique', 'painting', 'glass', 'crockery', 'wooden crate']):
        service_queries['fragile_furniture_electronics'].append(kw)
        continue
    if any(w in k_low for w in ['tempo', 'chota hathi', 'mini truck', 'pickup', 'tata ace', 'bolero maxi']):
        service_queries['mini_truck_tempo'].append(kw)
        continue
    if any(w in k_low for w in ['international', 'overseas', 'dubai', 'usa', 'canada', 'uk', 'abroad', 'singapore', 'australia']):
        service_queries['international_moving'].append(kw)
        continue

    # 3. Cost, Rates, GST & Calculator Intent
    if any(w in k_low for w in ['rate', 'rates', 'cost', 'costs', 'charge', 'charges', 'price', 'pricing', 'calculator', 'estimate', 'quotation', 'per km', 'gst', 'bill', 'receipt', 'tariff']):
        cost_calculator_queries.append(kw)
        continue

    # 4. Location queries for uncovered cities / states
    found_city = False
    for c in cities_known:
        if c in k_low:
            city_location_queries[c] += 1
            found_city = True
            break
    if found_city:
        continue

    # 5. General moving / high intent
    general_high_intent.append(kw)

print(f"=== STRATEGIC BREAKDOWN OF REMAINING 9,024 KEYWORDS ===")
print(f"1. Unbuilt Intercity Corridors: {len(corridor_queries)}")
print(f"2. Specialized Service Intent:")
for s, items in service_queries.items():
    print(f"   - {s}: {len(items)} queries")
total_services = sum(len(items) for items in service_queries.values())
print(f"   Total Specialized Services: {total_services}")
print(f"3. Cost / Pricing / Tariff Calculator Intent: {len(cost_calculator_queries)}")
print(f"4. Emerging / Uncovered City Hub Queries: {sum(city_location_queries.values())}")
print(f"5. General Movers & Packers Search Intent: {len(general_high_intent)}")

# Save breakdown details for report
with open('scratch/keyword_opportunity_breakdown.txt', 'w', encoding='utf-8') as f:
    f.write(f"Total Keywords: {len(kws)}\n")
    f.write(f"Corridors: {len(corridor_queries)}\n")
    f.write(f"Services: {total_services}\n")
    f.write(f"Pricing/Calculator: {len(cost_calculator_queries)}\n")
    f.write(f"Uncovered Cities: {sum(city_location_queries.values())}\n")
    f.write(f"General: {len(general_high_intent)}\n\n")

    f.write("=== TOP UNBUILT CORRIDORS ===\n")
    c_counts = Counter((c1, c2) for _, c1, c2 in corridor_queries)
    for (c1, c2), cnt in c_counts.most_common(40):
        f.write(f"  {c1} to {c2}: {cnt} queries\n")

    f.write("\n=== TOP UNCOVERED CITY HUBS ===\n")
    for c, cnt in city_location_queries.most_common(30):
        f.write(f"  {c}: {cnt} queries\n")
