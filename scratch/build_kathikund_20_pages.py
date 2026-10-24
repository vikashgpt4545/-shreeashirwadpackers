import os
import re

PAGES_DIR = r"d:\shreeashirwadpackers\pages"

ROUTES = [
    # Group 1: Kathikund to Inside Jharkhand (Routes 1–5)
    {
        "id": 1,
        "slug": "kathikund-to-ranchi-packers-and-movers",
        "origin": "Kathikund",
        "dest": "Ranchi",
        "title": "Packers and Movers Kathikund to Ranchi | Santhal to Capital Relocation",
        "desc": "Trusted packers and movers from Kathikund, Dumka to Ranchi. 310 km express transit via Dumka & Deoghar/NH-114A, 5-layer packing, home shifting, car & bike parcel, full insurance.",
        "keywords": "kathikund to ranchi packers and movers, packers and movers kathikund to ranchi, house shifting kathikund to ranchi, dumka to ranchi movers, car transport kathikund ranchi, bike parcel kathikund ranchi, safe movers kathikund",
        "distance": "310 km",
        "duration": "7 to 8 hours",
        "route_desc": "Dumka-Pakur Road southwest to Dumka, then NH-114A through Deoghar, Sarath, Madhupur, Giridih, and Ramgarh directly into Ranchi capital city",
        "origin_locality": "Kathikund Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Asanpahari, Karudih, Gopikandar Road",
        "dest_locality": "Harmu, Morabadi, Bariatu, Doranda, Kanke Road, Lalpur, Hinoo, Ratu Road, Dhurwa, Namkum",
        "pricing_1bhk": "₹11,000 - ₹16,500",
        "pricing_2bhk": "₹16,500 - ₹24,000",
        "pricing_3bhk": "₹23,000 - ₹34,000",
        "pricing_villa": "₹32,000 - ₹48,000",
        "pricing_bike": "₹3,000 - ₹4,500",
        "pricing_car": "₹8,500 - ₹14,000",
        "local_focus": "Block administrative officers, rural high school teachers, medical doctors at Kathikund CHC, banking executives (SBI/Gramin Bank), and Santhal Parganas families moving to Ranchi for higher education and healthcare.",
        "reviews": [
            ("Sanjay Kumar Murmu", "Kathikund Bazaar to Morabadi Ranchi", "Relocated our entire family home to Ranchi. The moving crew arrived punctually in Kathikund, packed all our wooden furniture and delicate kitchen items with 5-layer bubble protection, and delivered to Morabadi on schedule without a scratch."),
            ("Dr. Amitesh Pandey", "Kathikund CHC to Bariatu Ranchi", "Shifted our medical clinic apparatus and home belongings after my transfer. Their enclosed container truck protected everything from rain and dust across the 310 km highway trip. Excellent service!"),
            ("Rameshwar Soren", "Block Chowk Kathikund to Harmu Ranchi", "Transported my Royal Enfield bullet motorcycle and 2 BHK household goods. Delivered on time with genuine GST documentation that was smoothly reimbursed by my department.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Kathikund to Ranchi?", "The road distance is approximately 310 km via Dumka, Deoghar, and Ramgarh along NH-114A. Our closed container trucks complete the transit in 7 to 8 hours. Total shifting from loading in Kathikund to complete setup in Ranchi is executed within 24 hours."),
            ("How do you manage rural road access and narrow lanes around Kathikund block?", "Our fleet includes versatile intermediate container vehicles and feeder pickup vans designed specifically for rural roads in Kathikund, Narganj, and Asanpahari, ensuring safe doorstep collection without unnecessary transshipment."),
            ("Do you provide transit insurance for household goods from Kathikund?", "Yes, we provide 100% comprehensive transit insurance underwritten by leading national insurance companies, covering furniture, electronic appliances, and crockeries against transit risks."),
            ("What are the standard charges for shifting a 2 BHK home from Kathikund to Ranchi?", "A standard 2 BHK household relocation typically costs between ₹16,500 and ₹24,000, covering premium 5-layer packing, container truck freight, skilled loading, unloading, and furniture assembly."),
            ("Can you move motorcycles and scooters safely from Kathikund to Ranchi?", "Yes, two-wheelers are wrapped with heavy bubble film, secured with foam padding, and anchored using industrial ratchet straps inside our closed container truck for ₹3,000 to ₹4,500.")
        ]
    },
    {
        "id": 2,
        "slug": "kathikund-to-dumka-packers-and-movers",
        "origin": "Kathikund",
        "dest": "Dumka",
        "title": "Packers and Movers Kathikund to Dumka | Local District Relocation",
        "desc": "Reliable packers and movers from Kathikund to Dumka district headquarters. 26 km local express transit via Dumka-Pakur Road, 5-layer packing, domestic shifting, same-day delivery.",
        "keywords": "kathikund to dumka packers and movers, packers and movers kathikund to dumka, house shifting kathikund to dumka, local movers dumka district, kathikund packers dumka, safe packers kathikund",
        "distance": "26 km",
        "duration": "45 to 55 minutes",
        "route_desc": "Dumka-Pakur Road (SH-18) southwest directly connecting Kathikund block into Dumka town, Court Compound, and Dudhani",
        "origin_locality": "Kathikund Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Karudih",
        "dest_locality": "Dudhani, Rasikpur, Gilanpara, Bandhabard, Tinbazar, Dumka Court Compound, Dumka Station Road, Airport Road",
        "pricing_1bhk": "₹3,800 - ₹5,800",
        "pricing_2bhk": "₹5,800 - ₹9,000",
        "pricing_3bhk": "₹9,000 - ₹13,500",
        "pricing_villa": "₹13,000 - ₹19,500",
        "pricing_bike": "₹1,100 - ₹1,800",
        "pricing_car": "₹3,000 - ₹4,800",
        "local_focus": "Local intra-district household and administrative relocations between Kathikund rural block and Dumka sub-divisional / district headquarters, collectorate, schools, and hospitals.",
        "reviews": [
            ("Babulal Marandi", "Kathikund Bazaar to Dudhani Dumka", "Shifted our 2 BHK residence to Dumka town. The crew arrived promptly in Kathikund at 8 AM, packed our goods neatly, and completed unloading in Dudhani by afternoon. Very polite team."),
            ("Purnima Hembrom", "Block Chowk Kathikund to Rasikpur Dumka", "Handled our heavy wooden almirahs, showcase, and delicate glassware with great care. Zero scratches and quick assembly at our new home."),
            ("Santosh Kumar Jha", "BDO Campus Kathikund to Court Road Dumka", "Relocated on official transfer to the Dumka collectorate. Official GST invoice provided for seamless government reimbursement. Highly recommended service in Dumka district.")
        ],
        "faqs": [
            ("How long does local shifting take from Kathikund to Dumka town?", "The distance is only 26 km along the Dumka-Pakur Highway (SH-18). Driving duration is roughly 45 to 55 minutes. Complete packing, transit, unloading, and furniture positioning are completed within 4 to 5 hours on the same day."),
            ("What are the rates for a 1 BHK or 2 BHK local move to Dumka?", "Local 1 BHK shifting starts from ₹3,800, while a typical 2 BHK household relocation costs between ₹5,800 and ₹9,000 depending on total goods volume and floor access."),
            ("Do you bring packing supplies directly to Kathikund village homes?", "Yes, our moving truck brings fresh air bubble rolls, 5-ply corrugated cartons, waterproof stretch film, and heavy adhesive tapes directly to your doorstep in Kathikund."),
            ("Can you relocate two-wheelers locally from Kathikund to Dumka?", "Yes, bikes and scooters are safely wrapped with scratch-resistant foam covers and transported in our closed container for ₹1,100 to ₹1,800."),
            ("Is same-day pickup and delivery guaranteed within Dumka district?", "Yes, 100% guaranteed same-day completion for all relocations between Kathikund and Dumka town.")
        ]
    },
    {
        "id": 3,
        "slug": "kathikund-to-deoghar-packers-and-movers",
        "origin": "Kathikund",
        "dest": "Deoghar",
        "title": "Packers and Movers Kathikund to Deoghar | Santhal Regional Shifting",
        "desc": "Professional packers and movers from Kathikund to Deoghar (Baidyanath Dham). 92 km express transit via Dumka & NH-114A, 5-layer packing, home shifting, car carrier, bike parcel.",
        "keywords": "kathikund to deoghar packers and movers, packers and movers kathikund to deoghar, house shifting kathikund to deoghar, dumka to deoghar movers, safe regional moving kathikund, deoghar packers kathikund",
        "distance": "92 km",
        "duration": "2 to 2.5 hours",
        "route_desc": "Dumka-Pakur Road to Dumka town, continuing along NH-114A directly westward into Deoghar pilgrimage and urban hub",
        "origin_locality": "Kathikund Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Asanpahari",
        "dest_locality": "Castairs Town, Bilasi Town, Williams Town, Jasidih, Bompas Town, VIP Chowk, Satsang Nagar Deoghar",
        "pricing_1bhk": "₹6,000 - ₹8,800",
        "pricing_2bhk": "₹8,800 - ₹13,000",
        "pricing_3bhk": "₹13,000 - ₹18,500",
        "pricing_villa": "₹18,000 - ₹26,000",
        "pricing_bike": "₹1,800 - ₹2,800",
        "pricing_car": "₹4,200 - ₹6,800",
        "local_focus": "Inter-district government transfers, banking officers, teachers, railway personnel at Jasidih, and families moving between Kathikund and Deoghar.",
        "reviews": [
            ("Pramod Kumar Gupta", "Kathikund to Castairs Town Deoghar", "Transferred from Kathikund block office to Deoghar. Shree Ashirwad provided heavy-duty cartons, expert bubble packing, and delivered our goods intact within 5 hours."),
            ("Shobha Devi", "Block Chowk Kathikund to Bilasi Town Deoghar", "Our washing machine, TV, and glass dining set were packed with multiple protective layers. Delivered safely without a single scratch. Highly satisfied."),
            ("Anil Soren", "Narganj Kathikund to Jasidih Deoghar", "Very cooperative and well-mannered shifting staff. Clean container truck and prompt reassembly of wooden double beds.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Kathikund to Deoghar?", "The road distance is approximately 92 km via Dumka along NH-114A. Driving time is roughly 2 to 2.5 hours. The entire relocation is completed on the same day within 5 to 7 hours."),
            ("Can you relocate fragile kitchenware and electronics safely?", "Yes, we use customized crockery boxes, thermocol cushioning, and high-density air bubble wrap to safeguard glassware and home electronics against highway vibrations."),
            ("Do you provide car and two-wheeler carrier services to Deoghar?", "Yes, motorcycles are fastened with ratchet straps inside closed containers, and cars are transported on dedicated vehicle carriers."),
            ("What are the 2 BHK shifting charges from Kathikund to Deoghar?", "A standard 2 BHK household relocation costs between ₹8,800 and ₹13,000, all-inclusive of packing materials, vehicle transport, loading, and unloading."),
            ("Are your shifting bills approved for government transfer claims?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved transporter. We issue GST invoices and consignment notes fully valid for official reimbursement.")
        ]
    },
    {
        "id": 4,
        "slug": "kathikund-to-pakur-packers-and-movers",
        "origin": "Kathikund",
        "dest": "Pakur",
        "title": "Packers and Movers Kathikund to Pakur | Santhal Corridor Relocation",
        "desc": "Trusted packers and movers from Kathikund to Pakur. 50 km express transit via Dumka-Pakur Road (SH-18), 5-layer packing, household & commercial shifting, car & bike parcel, full insurance.",
        "keywords": "kathikund to pakur packers and movers, packers and movers kathikund to pakur, house shifting kathikund to pakur, dumka to pakur movers, car transport kathikund pakur, safe movers kathikund",
        "distance": "50 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "Dumka-Pakur Road (SH-18) northeast through Amrapara and Littipara directly into Pakur district town",
        "origin_locality": "Kathikund Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Karudih",
        "dest_locality": "Pakur Main Town, Harindanga Bazar, Station Road Pakur, Rajmahal Road, Pakur Court Compound, Bypass Road",
        "pricing_1bhk": "₹4,800 - ₹7,200",
        "pricing_2bhk": "₹7,200 - ₹10,800",
        "pricing_3bhk": "₹10,500 - ₹15,500",
        "pricing_villa": "₹15,000 - ₹22,000",
        "pricing_bike": "₹1,500 - ₹2,300",
        "pricing_car": "₹3,500 - ₹5,800",
        "local_focus": "Inter-district government transfers, stone crushing industry staff, banking employees, police personnel, and trading families moving along the Dumka-Pakur corridor.",
        "reviews": [
            ("Manish Kumar Saha", "Kathikund to Harindanga Bazar Pakur", "Moved our shop items and home furniture to Pakur. The crew arrived in Kathikund on time, packed all electronics with premium materials, and delivered by early afternoon. Flawless execution."),
            ("Sunita Hansda", "Kathikund Bazaar to Station Road Pakur", "Transported our 2 BHK apartment goods and Activa scooter. Excellent handling, zero damage, and clear communication throughout the move."),
            ("Bikash Mandal", "Block Chowk Kathikund to Court Road Pakur", "Very professional service. Sealed container truck ensured our furniture stayed clean throughout the journey along SH-18.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kathikund to Pakur?", "The route covers approximately 50 km along the Dumka-Pakur Road (SH-18) via Littipara. Driving duration is roughly 1 to 1.5 hours. Door-to-door relocation is completed within 4 to 5 hours on the same day."),
            ("Do you provide door delivery in residential areas across Pakur town?", "Yes, our moving crew manages residential permissions, unloading, and room positioning across Pakur town, Harindanga, and railway colony."),
            ("How do you protect delicate electronics like LED TVs and refrigerators?", "We use multi-layer bubble film, corner guards, thermocol sheet lining, and heavy corrugated wooden crates for sensitive electronics."),
            ("What are the rates for a 2 BHK home shift to Pakur?", "A standard 2 BHK household relocation ranges between ₹7,200 and ₹10,800, covering full packing, transport, insurance documentation, and unloading."),
            ("Can you transport cars and bikes safely to Pakur?", "Yes, we provide dedicated two-wheeler parcel packing and car carrier transport with door-to-door pickup and delivery.")
        ]
    },
    {
        "id": 5,
        "slug": "kathikund-to-jamshedpur-packers-and-movers",
        "origin": "Kathikund",
        "dest": "Jamshedpur",
        "title": "Packers and Movers Kathikund to Jamshedpur | Industrial Steel City Moving",
        "desc": "Expert packers and movers from Kathikund to Jamshedpur (Tatanagar). 345 km transit via Dumka, Jamtara, Dhanbad & Purulia, 5-layer packing, household moving, vehicle parcel, complete insurance.",
        "keywords": "kathikund to jamshedpur packers and movers, packers and movers kathikund to jamshedpur, house shifting kathikund to jamshedpur, tatanagar movers kathikund, car transport kathikund jamshedpur, steel city packers",
        "distance": "345 km",
        "duration": "8 to 9 hours",
        "route_desc": "Dumka-Pakur Road to Dumka, then NH-114A / State Highway south via Jamtara, Dhanbad, and Purulia into Jamshedpur / Tatanagar",
        "origin_locality": "Kathikund Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Asanpahari",
        "dest_locality": "Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Baridih, Mango, Adityapur",
        "pricing_1bhk": "₹12,000 - ₹17,500",
        "pricing_2bhk": "₹17,500 - ₹25,000",
        "pricing_3bhk": "₹24,000 - ₹35,000",
        "pricing_villa": "₹34,000 - ₹50,000",
        "pricing_bike": "₹3,200 - ₹4,800",
        "pricing_car": "₹9,000 - ₹15,000",
        "local_focus": "Relocating families, Tata Steel / industrial vendor employees, technical supervisors, and students moving from Kathikund block to the industrial capital of Jamshedpur.",
        "reviews": [
            ("Nirmal Kumar Tudu", "Kathikund to Telco Colony Jamshedpur", "Shifted our 3 BHK household items. The packing crew was extremely careful with our glass dining table and double-door refrigerator. Delivered on schedule in Telco without a single scratch."),
            ("Rajeshwar Bhagat", "Block Chowk Kathikund to Kadma Jamshedpur", "Smooth relocation experience. Container truck arrived sealed, and workers placed all heavy furniture in designated bedrooms."),
            ("Pawan Kumar Sah", "Narganj Kathikund to Adityapur Jamshedpur", "Transparent pricing, no hidden costs, and prompt customer assistance. Highly satisfied with Shree Ashirwad Packers.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Kathikund to Jamshedpur?", "The distance is approximately 345 km via Dumka, Jamtara, Dhanbad, and Purulia. Driving duration is roughly 8 to 9 hours. Complete relocation is achieved within 24 to 36 hours of loading."),
            ("Can you deliver to residential colonies like Telco, Kadma, and Bistupur?", "Yes, our team is well-versed with Jamshedpur layouts and manages smooth delivery to all residential sectors and Adityapur apartments."),
            ("What packing materials are used for long-distance transit?", "We employ 5-tier industrial packaging including LDPE stretch film, multi-layer air bubble sheets, 5-ply kraft corrugated cardboard, and heavy-duty strapping."),
            ("What are the shifting charges for a 2 BHK home from Kathikund to Jamshedpur?", "A standard 2 BHK household relocation costs between ₹17,500 and ₹25,000 depending on total volume, dismantling needs, and floor elevations."),
            ("Do you provide insurance coverage for household goods?", "Yes, comprehensive transit insurance is provided to cover any unforeseen transit risks during highway travel.")
        ]
    },
    # Group 2: Inside Jharkhand to Kathikund (Routes 6–10)
    {
        "id": 6,
        "slug": "ranchi-to-kathikund-packers-and-movers",
        "origin": "Ranchi",
        "dest": "Kathikund",
        "title": "Packers and Movers Ranchi to Kathikund | Capital to Santhal Relocation",
        "desc": "Trusted packers and movers from Ranchi to Kathikund, Dumka. 310 km express transit via Ramgarh, Giridih & Deoghar/NH-114A, 5-layer packing, home shifting, car & bike parcel, door-to-door delivery.",
        "keywords": "ranchi to kathikund packers and movers, packers and movers ranchi to kathikund, house shifting ranchi to kathikund, ranchi to dumka movers, car transport ranchi kathikund, bike parcel ranchi kathikund, safe movers ranchi",
        "distance": "310 km",
        "duration": "7 to 8 hours",
        "route_desc": "NH-20 / NH-114A northeast from Ranchi via Ramgarh, Bokaro/Giridih, Madhupur, Deoghar, and Dumka town into Kathikund block",
        "origin_locality": "Harmu, Morabadi, Bariatu, Doranda, Kanke Road, Lalpur, Hinoo, Ratu Road, Dhurwa",
        "dest_locality": "Kathikund Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Asanpahari",
        "pricing_1bhk": "₹11,000 - ₹16,500",
        "pricing_2bhk": "₹16,500 - ₹24,000",
        "pricing_3bhk": "₹23,000 - ₹34,000",
        "pricing_villa": "₹32,000 - ₹48,000",
        "pricing_bike": "₹3,000 - ₹4,500",
        "pricing_car": "₹8,500 - ₹14,000",
        "local_focus": "Returning families, appointed block development officers, medical doctors joining Kathikund CHC, teachers, and banking professionals moving from Ranchi to Kathikund.",
        "reviews": [
            ("Dr. Binod Kumar Soren", "Bariatu Ranchi to Kathikund CHC", "Posted as medical officer to Kathikund. Shree Ashirwad loaded everything in Ranchi in the morning and safely delivered to my official quarters in Kathikund by late evening. Perfect service!"),
            ("Satish Kumar Sharma", "Doranda Ranchi to Kathikund Bazaar", "Shifted our family ancestral belongings from Ranchi to Kathikund. Their sealed container truck protected everything from rain and road dust."),
            ("Anupama Hembrom", "Harmu Ranchi to Block Chowk Kathikund", "Very prompt and professional moving team. Handled our glass showcase and refrigerator with extreme care.")
        ],
        "faqs": [
            ("How long does moving take from Ranchi to Kathikund?", "The route covers about 310 km via Ramgarh, Giridih, Deoghar, and Dumka. Driving duration is roughly 7 to 8 hours. Total shifting is completed within 24 hours."),
            ("Can your truck reach interior villages and rural roads around Kathikund?", "Yes, we operate medium-sized container vehicles specifically suited for rural roads in Kathikund, Narganj, and Asanpahari, ensuring safe door-to-door delivery."),
            ("What are the 2 BHK shifting charges from Ranchi to Kathikund?", "A typical 2 BHK household relocation ranges between ₹16,500 and ₹24,000, including packing materials, vehicle transport, loading, and unloading."),
            ("Can I transport my bike or scooter from Ranchi to Kathikund?", "Yes, two-wheelers are securely crated with bubble wrap and secured with ratchet belts inside our closed container truck for ₹3,000 to ₹4,500."),
            ("Do you provide itemized bills for government transfer claims?", "Yes, we provide 100% audit-compliant GST invoices, consignment notes, and itemized packing lists approved by all government departments and PSUs.")
        ]
    },
    {
        "id": 7,
        "slug": "dumka-to-kathikund-packers-and-movers",
        "origin": "Dumka",
        "dest": "Kathikund",
        "title": "Packers and Movers Dumka to Kathikund | Intra-District Block Moving",
        "desc": "Professional packers and movers from Dumka town to Kathikund block. 26 km express transit via Dumka-Pakur Road, 5-layer packing, domestic & office shifting, same-day delivery.",
        "keywords": "dumka to kathikund packers and movers, packers and movers dumka to kathikund, house shifting dumka to kathikund, local movers dumka town, safe packers dumka, packers near kathikund",
        "distance": "26 km",
        "duration": "45 to 55 minutes",
        "route_desc": "Dumka-Pakur Road (SH-18) northeast from Dumka town directly into Kathikund block centre",
        "origin_locality": "Dudhani, Rasikpur, Gilanpara, Bandhabard, Tinbazar, Dumka Court Compound, Dumka Station Road, Airport Road",
        "dest_locality": "Kathikund Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Karudih",
        "pricing_1bhk": "₹3,800 - ₹5,800",
        "pricing_2bhk": "₹5,800 - ₹9,000",
        "pricing_3bhk": "₹9,000 - ₹13,500",
        "pricing_villa": "₹13,000 - ₹19,500",
        "pricing_bike": "₹1,100 - ₹1,800",
        "pricing_car": "₹3,000 - ₹4,800",
        "local_focus": "Government officers, police personnel, healthcare teams, and retail suppliers shifting from Dumka district headquarters into Kathikund block.",
        "reviews": [
            ("Subhasish Dutta", "Rasikpur Dumka to Kathikund Bazaar", "Shifted our grocery shop inventory and household items to Kathikund. The crew was fast, polite, and handled all heavy goods with dollies. Very reasonable cost."),
            ("Sister Mary", "Dudhani Dumka to Kathikund", "Excellent relocation service. Their workers packed all cupboards, books, and kitchen appliances neatly. Zero damage."),
            ("Ratan Lal Marandi", "Court Road Dumka to Block Chowk Kathikund", "Completed moving within 4 hours total. Punctual, efficient, and careful team. Highly recommended.")
        ],
        "faqs": [
            ("How much time does shifting take from Dumka town to Kathikund?", "Driving time across the 26 km stretch on SH-18 is roughly 45 to 55 minutes. Complete door-to-door relocation is finished within 4 to 5 hours on the same day."),
            ("What is the cost of moving a 1 BHK or 2 BHK home to Kathikund?", "A 1 BHK move costs ₹3,800 to ₹5,800, while a 2 BHK relocation costs between ₹5,800 and ₹9,000 based on total inventory volume."),
            ("Do you supply bubble wrap and packing cartons in Dumka?", "Yes, our team brings virgin bubble sheets, 5-ply cartons, and packing tape directly to your home in Dumka."),
            ("Can you relocate two-wheelers locally from Dumka to Kathikund?", "Yes, bikes and scooters are safely wrapped with protective foam and transported in our closed truck for ₹1,100 to ₹1,800."),
            ("Is same-day pickup and delivery guaranteed?", "Yes, 100% guaranteed same-day completion for all intra-district relocations within Dumka district.")
        ]
    },
    {
        "id": 8,
        "slug": "deoghar-to-kathikund-packers-and-movers",
        "origin": "Deoghar",
        "dest": "Kathikund",
        "title": "Packers and Movers Deoghar to Kathikund | Regional Inbound Moving",
        "desc": "Reliable packers and movers from Deoghar to Kathikund, Dumka. 92 km transit via NH-114A & Dumka, 5-layer packing, domestic shifting, car carrier, bike parcel, full insurance.",
        "keywords": "deoghar to kathikund packers and movers, packers and movers deoghar to kathikund, house shifting deoghar to kathikund, deoghar to dumka movers, safe movers deoghar, packers near kathikund",
        "distance": "92 km",
        "duration": "2 to 2.5 hours",
        "route_desc": "NH-114A east from Deoghar to Dumka town, continuing along Dumka-Pakur Road directly into Kathikund",
        "origin_locality": "Castairs Town, Bilasi Town, Williams Town, Jasidih, Bompas Town, VIP Chowk, Satsang Nagar Deoghar",
        "dest_locality": "Kathikund Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Asanpahari",
        "pricing_1bhk": "₹6,000 - ₹8,800",
        "pricing_2bhk": "₹8,800 - ₹13,000",
        "pricing_3bhk": "₹13,000 - ₹18,500",
        "pricing_villa": "₹18,000 - ₹26,000",
        "pricing_bike": "₹1,800 - ₹2,800",
        "pricing_car": "₹4,200 - ₹6,800",
        "local_focus": "Inter-district government transfers, school teachers, medical officers, and trading families moving east from Deoghar into Kathikund block.",
        "reviews": [
            ("Animesh Roy", "Castairs Town Deoghar to Kathikund", "Transferred on government duty to Kathikund. Shree Ashirwad handled the packing and delivery seamlessly. Everything arrived intact on the same day."),
            ("Sushila Soren", "Bilasi Town Deoghar to Kathikund Bazaar", "Very courteous crew. They wrapped my washing machine and glass tables with multiple layers of bubble wrap. Great job!"),
            ("Chandan Kumar Jha", "Jasidih Deoghar to Block Chowk Kathikund", "Reasonable rates, no hidden fees, and safe transit. Highly recommended for moves to Dumka district.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Deoghar to Kathikund?", "The route covers about 92 km via Dumka along NH-114A. Driving duration is approximately 2 to 2.5 hours. Complete shifting takes 5 to 7 hours on the same day."),
            ("Can you relocate fragile kitchen items and electronics safely?", "Yes, our team uses specialized crockery cartons, air bubble cushioning, and edge guards to ensure zero damage during highway transit."),
            ("What are the 2 BHK shifting charges from Deoghar to Kathikund?", "A typical 2 BHK household relocation costs between ₹8,800 and ₹13,000, covering full packing, transport, and unloading."),
            ("Do you transport motorcycles and scooters safely?", "Yes, two-wheelers are securely packed and tied with ratchet belts inside our closed container truck for ₹1,800 to ₹2,800."),
            ("Are your bills approved for government reimbursement?", "Yes, we provide official GST invoices and bilty notes fully eligible for government and bank employee transfer claims.")
        ]
    },
    {
        "id": 9,
        "slug": "pakur-to-kathikund-packers-and-movers",
        "origin": "Pakur",
        "dest": "Kathikund",
        "title": "Packers and Movers Pakur to Kathikund | Santhal Inbound Shifting",
        "desc": "Trusted packers and movers from Pakur to Kathikund, Dumka. 50 km transit via Dumka-Pakur Road (SH-18), 5-layer packing, corporate & home shifting, vehicle carrier.",
        "keywords": "pakur to kathikund packers and movers, packers and movers pakur to kathikund, house shifting pakur to kathikund, pakur to dumka movers, car transport pakur kathikund, safe movers pakur",
        "distance": "50 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "Dumka-Pakur Road (SH-18) southwest from Pakur town through Littipara and Amrapara into Kathikund block",
        "origin_locality": "Pakur Main Town, Harindanga Bazar, Station Road Pakur, Rajmahal Road, Pakur Court Compound, Bypass Road",
        "dest_locality": "Kathikund Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Karudih",
        "pricing_1bhk": "₹4,800 - ₹7,200",
        "pricing_2bhk": "₹7,200 - ₹10,800",
        "pricing_3bhk": "₹10,500 - ₹15,500",
        "pricing_villa": "₹15,000 - ₹22,000",
        "pricing_bike": "₹1,500 - ₹2,300",
        "pricing_car": "₹3,500 - ₹5,800",
        "local_focus": "Returning administrative workers, stone industry personnel, and families relocating southwest from Pakur into Kathikund block.",
        "reviews": [
            ("Ashish Kumar Das", "Pakur Town to Kathikund", "Shifted our 3 BHK home to Kathikund. Crew handled our heavy wooden furniture with immense care. Arrived on the same day without a scratch."),
            ("Manorama Hembrom", "Harindanga Pakur to Kathikund Bazaar", "Packed all our crockery, refrigerator, and clothes in sturdy boxes. Unloaded in Kathikund smoothly. Very satisfied."),
            ("Dilip Kumar Saha", "Station Road Pakur to Block Chowk Kathikund", "Safe bike transport and household shifting. Driver maintained constant contact throughout the journey along SH-18.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Pakur to Kathikund?", "The highway route is approximately 50 km via Littipara along SH-18. Driving duration is roughly 1 to 1.5 hours. Door-to-door relocation takes roughly 4 to 5 hours."),
            ("Can you pick up from residential colonies across Pakur?", "Yes, our moving crew is experienced with residential society permissions and official procedures across Pakur town."),
            ("How do you ensure wooden furniture remains scratch-free?", "We wrap all wooden surfaces in foam blankets, bubble wrap, and stretch film, securing them with tensioned ratchet straps inside the container."),
            ("What are the 2 BHK moving charges from Pakur to Kathikund?", "A standard 2 BHK household relocation costs between ₹7,200 and ₹10,800 based on goods volume and packing requirements."),
            ("Do you provide transit insurance for moves to Dumka district?", "Yes, comprehensive transit insurance is provided to cover any accidental risk or damage during highway transit.")
        ]
    },
    {
        "id": 10,
        "slug": "jamshedpur-to-kathikund-packers-and-movers",
        "origin": "Jamshedpur",
        "dest": "Kathikund",
        "title": "Packers and Movers Jamshedpur to Kathikund | Reliable Steel City Inbound",
        "desc": "Professional packers and movers from Jamshedpur to Kathikund, Dumka. 345 km express transit via Purulia, Dhanbad & Dumka, 5-layer packing, home shifting, car & bike parcel.",
        "keywords": "jamshedpur to kathikund packers and movers, packers and movers jamshedpur to kathikund, house shifting jamshedpur to kathikund, tatanagar to dumka movers, car transport jamshedpur kathikund, safe movers jamshedpur",
        "distance": "345 km",
        "duration": "8 to 9 hours",
        "route_desc": "NH-18 / NH-43 to Purulia, then north through Dhanbad, Jamtara, Dumka town, and Dumka-Pakur Road into Kathikund",
        "origin_locality": "Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Baridih, Mango, Adityapur",
        "dest_locality": "Kathikund Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Asanpahari",
        "pricing_1bhk": "₹12,000 - ₹17,500",
        "pricing_2bhk": "₹17,500 - ₹25,000",
        "pricing_3bhk": "₹24,000 - ₹35,000",
        "pricing_villa": "₹34,000 - ₹50,000",
        "pricing_bike": "₹3,200 - ₹4,800",
        "pricing_car": "₹9,000 - ₹15,000",
        "local_focus": "Returning industrial workers, retired steel company staff, and native Santhal families relocating from Jamshedpur back to Kathikund block.",
        "reviews": [
            ("Sukhlal Murmu", "Telco Jamshedpur to Kathikund", "Shifted our family home back to our native village in Kathikund. The team was disciplined, fast, and packed our heavy appliances with utmost care."),
            ("Priyanka Kumari", "Kadma Jamshedpur to Kathikund Bazaar", "Next-day delivery within 28 hours total. Sealed container truck kept everything completely dust-free. Very pleased with their service."),
            ("Deepak Kumar Soren", "Sakchi Jamshedpur to Block Chowk Kathikund", "Official bill approved smoothly by our employer. Perfect packing and very polite laborers.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Jamshedpur to Kathikund?", "The route covers about 345 km via Purulia, Dhanbad, Jamtara, and Dumka. Driving duration is approximately 8 to 9 hours. Total relocation takes roughly 24 to 30 hours."),
            ("Do you handle relocations for Tata Steel employees to Dumka district?", "Yes, we regularly service transfers from Jamshedpur to all Jharkhand districts, providing official IBA-approved bills for reimbursement."),
            ("How do you protect fragile home items during long transit?", "We use 5-tier packaging defense including bubble wrap, heavy corrugated sheets, foam edge guards, and tight stretch wraps."),
            ("What are the rates for 2 BHK home shifting between Jamshedpur and Kathikund?", "A standard 2 BHK apartment relocation ranges from ₹17,500 to ₹25,000 based on goods volume and floor elevations."),
            ("Can you move cars and bikes safely from Jamshedpur to Kathikund?", "Yes, we provide dedicated bike crating and car transport service using closed container vehicles, ensuring complete protection.")
        ]
    },
    # Group 3: Kathikund to Outside Jharkhand (Routes 11–15)
    {
        "id": 11,
        "slug": "kathikund-to-kolkata-packers-and-movers",
        "origin": "Kathikund",
        "dest": "Kolkata",
        "title": "Packers and Movers Kathikund to Kolkata | Interstate Bengal Relocation",
        "desc": "Trusted packers and movers from Kathikund, Dumka to Kolkata. 295 km express transit via Suri, Panagarh & NH-19, 5-layer packing, home & corporate relocations, vehicle parcel, full insurance.",
        "keywords": "kathikund to kolkata packers and movers, packers and movers kathikund to kolkata, house shifting kathikund to kolkata, dumka to kolkata movers, west bengal border packers kathikund, safe movers kolkata",
        "distance": "295 km",
        "duration": "6.5 to 7.5 hours",
        "route_desc": "Dumka-Pakur Road to Dumka, then south through Massanjore / Suri, connecting to NH-19 at Panagarh into Kolkata metropolitan area",
        "origin_locality": "Kathikund Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Asanpahari",
        "dest_locality": "Salt Lake, New Town, Rajarhat, South City, Behala, Howrah, Jadavpur, Ballygunge",
        "pricing_1bhk": "₹11,500 - ₹16,500",
        "pricing_2bhk": "₹16,500 - ₹23,500",
        "pricing_3bhk": "₹22,500 - ₹32,000",
        "pricing_villa": "₹30,000 - ₹45,000",
        "pricing_bike": "₹3,200 - ₹4,600",
        "pricing_car": "₹8,500 - ₹13,500",
        "local_focus": "Corporate transfers, IT personnel, students at Kolkata universities, and families moving from Kathikund block to the Kolkata metropolitan region.",
        "reviews": [
            ("Swapan Kumar Ghosh", "Kathikund to Salt Lake Kolkata", "Moved our household from Kathikund to Kolkata. Fast 7-hour transit via Suri and Panagarh. Seamless border clearance and zero damage to our glassware."),
            ("Dr. Tapas Mukherjee", "Kathikund CHC to New Town Kolkata", "Relocated on joining hospital in Kolkata. Excellent packing, courteous movers, and prompt next-day setup."),
            ("Aniruddha Sen", "Block Chowk Kathikund to Howrah", "Transported our 2 BHK goods and scooty. Sealed container truck and very reasonable charges. Highly satisfied.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kathikund to Kolkata?", "The highway distance is approximately 295 km via Massanjore, Suri, and NH-19. Driving duration is roughly 6.5 to 7.5 hours. Complete moving takes 24 hours door-to-door."),
            ("How do you handle the interstate border crossing into West Bengal?", "Our commercial vehicles have valid national permits, e-way bills, and road tax clearances, ensuring hassle-free border transit into West Bengal."),
            ("What are the standard charges for shifting a 2 BHK home to Kolkata?", "A typical 2 BHK household relocation costs between ₹16,500 and ₹23,500, including 5-layer packing, vehicle freight, loading, and unloading."),
            ("Can you move motorcycles safely across the Bengal border?", "Yes, two-wheelers are wrapped with scratch-resistant bubble sheets and secured with ratchet belts inside our closed container truck for ₹3,200 to ₹4,600."),
            ("Do you provide transit insurance for cross-border moves?", "Yes, we provide 100% comprehensive transit insurance underwritten by national insurance companies.")
        ]
    },
    {
        "id": 12,
        "slug": "kathikund-to-patna-packers-and-movers",
        "origin": "Kathikund",
        "dest": "Patna",
        "title": "Packers and Movers Kathikund to Patna | Interstate Bihar Relocation",
        "desc": "Professional packers and movers from Kathikund to Patna. 300 km transit via Bhagalpur & NH-33, 5-layer packing, domestic shifting, car carrier, bike parcel, door-to-door delivery.",
        "keywords": "kathikund to patna packers and movers, packers and movers kathikund to patna, house shifting kathikund to patna, dumka to patna movers, bhagalpur route packers kathikund, safe movers patna",
        "distance": "300 km",
        "duration": "7 to 8 hours",
        "route_desc": "Via Dumka northwest through Hansdiha, Bhagalpur, and NH-33 along the Ganges corridor directly into Patna",
        "origin_locality": "Kathikund Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Karudih",
        "dest_locality": "Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur Cantt, Rajendra Nagar, Anisabad",
        "pricing_1bhk": "₹11,000 - ₹16,000",
        "pricing_2bhk": "₹16,000 - ₹23,000",
        "pricing_3bhk": "₹22,000 - ₹31,000",
        "pricing_villa": "₹29,000 - ₹44,000",
        "pricing_bike": "₹3,000 - ₹4,500",
        "pricing_car": "₹8,000 - ₹13,000",
        "local_focus": "Commercial relocations, university students at Patna universities, administrative officers, and trading families moving from Kathikund block to Bihar's capital city.",
        "reviews": [
            ("Santosh Kumar Jha", "Kathikund to Bailey Road Patna", "Moved our complete family residence to Patna. The team handled our heavy wooden furniture and fragile crockery with exceptional skill. Delivered in Patna within 24 hours."),
            ("Pravin Kumar Singh", "Kathikund Bazaar to Kankarbagh Patna", "Smooth transit across Bhagalpur. Sealed container truck protected everything from rain and dust. Excellent service!"),
            ("Manoj Kumar Sah", "Block Chowk Kathikund to Danapur Patna", "Reasonable rates, professional crating of our electronics, and prompt delivery. Highly recommended for moves to Bihar.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Kathikund to Patna?", "The highway route spans approximately 300 km via Hansdiha and Bhagalpur along NH-33. Driving duration is roughly 7 to 8 hours. Door-to-door relocation is completed within 24 hours."),
            ("How do you manage the interstate border checkpost into Bihar?", "Our commercial fleet carries all required interstate transport permits, e-way bills, and commercial documentation for quick border crossing."),
            ("What are the 2 BHK household moving charges from Kathikund to Patna?", "A standard 2 BHK apartment relocation costs between ₹16,000 and ₹23,000, covering full 5-layer packing, loading, transport, and unloading."),
            ("Can you transport cars and two-wheelers to Patna?", "Yes, we transport bikes inside secure container trucks and cars via dedicated enclosed carriers with door pickup and delivery."),
            ("Is transit insurance provided for moves to Bihar?", "Yes, comprehensive goods-in-transit insurance coverage is provided to cover loss or damage during highway transit.")
        ]
    },
    {
        "id": 13,
        "slug": "kathikund-to-delhi-packers-and-movers",
        "origin": "Kathikund",
        "dest": "Delhi NCR",
        "title": "Packers and Movers Kathikund to Delhi | Long-Distance National Relocation",
        "desc": "Trusted packers and movers from Kathikund to Delhi NCR (Delhi, Noida, Gurgaon). 1,260 km express transit via NH-19 GT Road & Yamuna Expressway, 5-layer packing, car carrier, GPS container.",
        "keywords": "kathikund to delhi packers and movers, packers and movers kathikund to delhi, house shifting kathikund to delhi, kathikund to noida movers, gurgaon to kathikund packers, car transport kathikund delhi, national movers kathikund",
        "distance": "1,260 km",
        "duration": "24 to 28 hours",
        "route_desc": "Dumka to Deoghar, connecting to NH-19 (GT Road) through Varanasi, Prayagraj, Kanpur, and Yamuna Expressway into Delhi NCR",
        "origin_locality": "Kathikund Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Asanpahari",
        "dest_locality": "Delhi (Dwarka, Rohini, South Delhi), Noida, Greater Noida, Gurgaon (Cyber City, Golf Course Road), Faridabad",
        "pricing_1bhk": "₹19,000 - ₹28,000",
        "pricing_2bhk": "₹27,000 - ₹40,000",
        "pricing_3bhk": "₹38,000 - ₹56,000",
        "pricing_villa": "₹52,000 - ₹80,000",
        "pricing_bike": "₹5,200 - ₹7,800",
        "pricing_car": "₹14,500 - ₹23,000",
        "local_focus": "Defense personnel, central government employees, corporate professionals, and university scholars relocating 1,260 km from Kathikund to the Delhi National Capital Region.",
        "reviews": [
            ("Subedar Rajesh Murmu", "Kathikund to Delhi Cantt", "Shifted our household on defense transfer. Sealed container truck arrived with seal intact in Delhi. Every piece of furniture and kitchenware was in pristine condition."),
            ("Avinash Kumar Mandal", "Kathikund Bazaar to Noida Sector 62", "Outstanding national relocation service! They custom-crated our 65-inch television and computer setup. Arrived in Noida right on schedule."),
            ("Pooja Kumari", "Block Chowk Kathikund to Gurgaon Cyber City", "Extremely professional team. Clear communication, live GPS tracking, and genuine pricing. Highly recommended.")
        ],
        "faqs": [
            ("How long does moving take from Kathikund to Delhi NCR?", "The distance is approximately 1,260 km via NH-19 and Yamuna Expressway. Driving time is roughly 24 to 28 hours. Consignments are delivered within 3 to 4 days of loading."),
            ("How do you safeguard goods during long-distance 1,260 km transit?", "We use dedicated sealed container trucks with zero transshipment, 5-layer industrial packaging, and ratchet belt securing to eliminate shifting."),
            ("What are the 2 BHK shifting charges from Kathikund to Delhi NCR?", "A standard 2 BHK household relocation costs between ₹27,000 and ₹40,000, covering full export-quality packing, transit freight, and unloading."),
            ("Can you transport my car or SUV safely to Delhi/Gurgaon?", "Yes, cars are transported on specialized enclosed multi-car trailers with hydraulic loading ramps and all-risk transit insurance."),
            ("Are your bills approved for corporate and central government transfer claims?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved transporter providing GST invoices and bilty notes recognized across India.")
        ]
    },
    {
        "id": 14,
        "slug": "kathikund-to-asansol-packers-and-movers",
        "origin": "Kathikund",
        "dest": "Asansol",
        "title": "Packers and Movers Kathikund to Asansol | Industrial Belt Relocation",
        "desc": "Expert packers and movers from Kathikund to Asansol, West Bengal. 135 km transit via Dumka, Jamtara & Chittaranjan, 5-layer packing, home shifting, vehicle carrier, fast delivery.",
        "keywords": "kathikund to asansol packers and movers, packers and movers kathikund to asansol, house shifting kathikund to asansol, dumka to asansol movers, chittaranjan packers kathikund, safe movers asansol",
        "distance": "135 km",
        "duration": "3 to 3.5 hours",
        "route_desc": "Dumka-Pakur Road to Dumka, then south along State Highway via Jamtara, Mihijam, and Chittaranjan directly into Asansol",
        "origin_locality": "Kathikund Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Karudih",
        "dest_locality": "Ushagram, Court More, Burnpur, Kalyanpur Housing, Asansol Station Road, Sen Raleigh Road, Chelidanga",
        "pricing_1bhk": "₹7,500 - ₹11,000",
        "pricing_2bhk": "₹11,000 - ₹16,000",
        "pricing_3bhk": "₹15,500 - ₹22,500",
        "pricing_villa": "₹21,000 - ₹31,000",
        "pricing_bike": "₹2,200 - ₹3,400",
        "pricing_car": "₹5,500 - ₹8,800",
        "local_focus": "Railway workers, ECL / coal mining employees, steel plant staff at Burnpur, and trading families moving between Kathikund and the Asansol-Chittaranjan industrial belt.",
        "reviews": [
            ("Dipak Kumar Chatterjee", "Kathikund to Burnpur Asansol", "Moved our 3 BHK household from Kathikund to Burnpur. The crew was very courteous and packed our TV and refrigerator with triple bubble wrapping. Delivered on schedule without a scratch."),
            ("Shyamalendu Roy", "Kathikund Bazaar to Ushagram Asansol", "Flawless inter-state moving. Driver gave regular updates along the route. Everything was unpacked neatly in Ushagram."),
            ("Pramatha Soren", "Block Chowk Kathikund to Kalyanpur Asansol", "Very reasonable pricing for 135 km transit. Sealed container truck ensured our furniture remained 100% clean.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kathikund to Asansol?", "The route spans approximately 135 km via Dumka, Jamtara, and Chittaranjan. Driving duration is roughly 3 to 3.5 hours. Total door-to-door relocation is executed on the same day within 6 to 8 hours."),
            ("Can you deliver to residential areas like Burnpur, Ushagram, and Kalyanpur?", "Yes, our delivery network manages municipal vehicle guidelines, local permits, and society clearances across Asansol."),
            ("How do you protect fragile items during highway transit?", "We use 5-layer protective packing with heavy air bubble wrap, corrugated sheets, foam edge protectors, and tight stretch wrapping."),
            ("What are the 2 BHK shifting charges from Kathikund to Asansol?", "A typical 2 BHK household move ranges between ₹11,000 and ₹16,000, all-inclusive of packing materials, loading, highway tolls, and unloading."),
            ("Do you provide car and bike carrier services to Asansol?", "Yes, we transport two-wheelers inside closed containers and cars via dedicated hydraulic vehicle carriers.")
        ]
    },
    {
        "id": 15,
        "slug": "kathikund-to-siliguri-packers-and-movers",
        "origin": "Kathikund",
        "dest": "Siliguri",
        "title": "Packers and Movers Kathikund to Siliguri | North Bengal Express Moving",
        "desc": "Dependable packers and movers from Kathikund to Siliguri. 350 km transit via Pakur, Farakka, Malda & NH-12, 5-layer packing, corporate & home relocations, vehicle parcel, door delivery.",
        "keywords": "kathikund to siliguri packers and movers, packers and movers kathikund to siliguri, house shifting kathikund to siliguri, dumka to siliguri movers, north bengal packers kathikund, safe movers siliguri",
        "distance": "350 km",
        "duration": "8.5 to 9.5 hours",
        "route_desc": "Dumka-Pakur Road to Pakur, crossing Farakka Barrage onto NH-12 north through Malda, Raiganj, and Dalkhola into Siliguri",
        "origin_locality": "Kathikund Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Asanpahari",
        "dest_locality": "Pradhan Nagar, Sevoke Road, Matigara, Hakim Para, Salugara, Punjabi Para, Bagdogra, Siliguri Town",
        "pricing_1bhk": "₹13,000 - ₹18,500",
        "pricing_2bhk": "₹18,000 - ₹26,000",
        "pricing_3bhk": "₹25,000 - ₹36,000",
        "pricing_villa": "₹34,000 - ₹50,000",
        "pricing_bike": "₹3,500 - ₹5,200",
        "pricing_car": "₹9,500 - ₹15,500",
        "local_focus": "Commercial traders, tea industry executives, military personnel moving towards Bagdogra/Sukna, and families shifting from Kathikund to Siliguri and North Bengal.",
        "reviews": [
            ("Nikhil Ranjan Roy", "Kathikund to Sevoke Road Siliguri", "Relocated from Kathikund to Siliguri. The team packed all delicate furniture and home belongings with great diligence. Delivered in Siliguri within 36 hours."),
            ("Amitabh Marandi", "Kathikund Bazaar to Matigara Siliguri", "Very reliable service. Heavy almirahs, double beds, and refrigerator reached safely without a single scratch across the Farakka route."),
            ("Prashant Paul", "Block Chowk Kathikund to Pradhan Nagar Siliguri", "Prompt packing, polite workers, and transparent billing. Highly recommended for moves to North Bengal.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kathikund to Siliguri?", "The highway route spans approximately 350 km via Pakur, Farakka, Malda, and NH-12. Driving duration is roughly 8.5 to 9.5 hours. Delivery is completed within 36 to 48 hours."),
            ("Can your crew pack fragile kitchen crockeries and appliances safely?", "Yes, our team uses specialized crockery cartons, bubble wraps, and thermocol padding for complete protection."),
            ("What are the 2 BHK shifting charges from Kathikund to Siliguri?", "A standard 2 BHK household relocation costs between ₹18,000 and ₹26,000, all-inclusive of packing materials, transport, and unloading."),
            ("Can I ship my motorcycle from Kathikund to Siliguri?", "Yes, two-wheelers are securely packed and tied with ratchet belts inside our closed container truck for ₹3,500 to ₹5,200."),
            ("Do you provide transit insurance for moves to North Bengal?", "Yes, comprehensive transit insurance is provided to cover any unforeseen transit risks during highway travel.")
        ]
    },
    # Group 4: Outside Jharkhand to Kathikund (Routes 16–20)
    {
        "id": 16,
        "slug": "kolkata-to-kathikund-packers-and-movers",
        "origin": "Kolkata",
        "dest": "Kathikund",
        "title": "Packers and Movers Kolkata to Kathikund | Inbound Bengal Relocation",
        "desc": "Trusted packers and movers from Kolkata to Kathikund, Dumka. 295 km transit via NH-19, Panagarh, Suri & Massanjore, 5-layer packing, home shifting, vehicle carrier, door delivery.",
        "keywords": "kolkata to kathikund packers and movers, packers and movers kolkata to kathikund, house shifting kolkata to kathikund, kolkata to dumka movers, bengal to jharkhand packers, safe movers kolkata",
        "distance": "295 km",
        "duration": "6.5 to 7.5 hours",
        "route_desc": "NH-19 northwest from Kolkata through Panagarh, then north via Suri and Massanjore into Dumka and Kathikund block",
        "origin_locality": "Salt Lake, New Town, Rajarhat, South City, Behala, Howrah, Jadavpur, Ballygunge",
        "dest_locality": "Kathikund Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Asanpahari",
        "pricing_1bhk": "₹11,500 - ₹16,500",
        "pricing_2bhk": "₹16,500 - ₹23,500",
        "pricing_3bhk": "₹22,500 - ₹32,000",
        "pricing_villa": "₹30,000 - ₹45,000",
        "pricing_bike": "₹3,200 - ₹4,600",
        "pricing_car": "₹8,500 - ₹13,500",
        "local_focus": "Returning professionals, retirees, healthcare workers, and families moving from Kolkata back to Kathikund block in Dumka district.",
        "reviews": [
            ("Dipak Kumar Ghosh", "Salt Lake Kolkata to Kathikund", "Shifted our household from Kolkata to Kathikund. Loaded carefully and delivered safely within 24 hours. Professional moving crew."),
            ("Pritam Mandal", "New Town Kolkata to Kathikund Bazaar", "Packed our complete 2 BHK apartment with sturdy cartons and air bubble sheets. Zero damage to our glass items."),
            ("Sanjoy Roy", "Howrah to Block Chowk Kathikund", "Honest quotation, polite workers, and sealed container truck. Highly satisfied with Shree Ashirwad Packers.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kolkata to Kathikund?", "The route covers about 295 km via Panagarh, Suri, and Massanjore. Driving duration is approximately 6.5 to 7.5 hours. Door-to-door relocation takes roughly 24 hours."),
            ("Can your crew pack delicate kitchen appliances and chinaware in Kolkata?", "Yes, our Kolkata team utilizes dedicated crockery boxes, multi-layer bubble wrap, and thermocol packing for sensitive chinaware and appliances."),
            ("Do you provide car transport from Kolkata to Kathikund?", "Yes, we transport cars via dedicated car trailers or safely fastened inside closed container trucks with zero road driving between cities."),
            ("What are the 2 BHK shifting charges from Kolkata to Kathikund?", "Standard 2 BHK relocation ranges between ₹16,500 and ₹23,500, all-inclusive of packing materials, loading, road permits, tolls, and unloading in Kathikund."),
            ("Are your bills eligible for government and corporate relocation reimbursement?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved logistics provider issuing official GST invoices and bilty notes.")
        ]
    },
    {
        "id": 17,
        "slug": "patna-to-kathikund-packers-and-movers",
        "origin": "Patna",
        "dest": "Kathikund",
        "title": "Packers and Movers Patna to Kathikund | Inbound Bihar Moving",
        "desc": "Expert packers and movers from Patna, Bihar to Kathikund, Dumka. 300 km express transit via NH-33 & Bhagalpur, 5-layer packing, household moving, vehicle carrier, door delivery.",
        "keywords": "patna to kathikund packers and movers, packers and movers patna to kathikund, house shifting patna to kathikund, patna to dumka movers, bihar to jharkhand packers, safe movers patna",
        "distance": "300 km",
        "duration": "7 to 8 hours",
        "route_desc": "NH-33 east from Patna through Mokama and Bhagalpur, turning south through Hansdiha and Dumka into Kathikund",
        "origin_locality": "Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur Cantt, Rajendra Nagar",
        "dest_locality": "Kathikund Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Karudih",
        "pricing_1bhk": "₹11,000 - ₹16,000",
        "pricing_2bhk": "₹16,000 - ₹23,000",
        "pricing_3bhk": "₹22,000 - ₹31,000",
        "pricing_villa": "₹29,000 - ₹44,000",
        "pricing_bike": "₹3,000 - ₹4,500",
        "pricing_car": "₹8,000 - ₹13,000",
        "local_focus": "Returning administrative staff, educators, medical staff, and trading families moving from Patna across the border into Kathikund block.",
        "reviews": [
            ("Manoranjan Jha", "Bailey Road Patna to Kathikund", "Shifted our household from Patna back to Kathikund. Crew loaded carefully and completed delivery in Kathikund within 24 hours. Zero scratches."),
            ("Pramila Soren", "Kankarbagh Patna to Kathikund Bazaar", "Handled our showcase, LED TV, and Godrej almirahs with extreme caution. Friendly and hardworking team."),
            ("Naveen Kumar Sah", "Boring Road Patna to Block Chowk Kathikund", "Very prompt service across the border. Fast permit clearance and reasonable charges.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Patna to Kathikund?", "The highway route is approximately 300 km via Bhagalpur and Hansdiha. Driving duration is roughly 7 to 8 hours. Total move takes roughly 24 hours door-to-door."),
            ("How do you manage the border crossing between Bihar and Jharkhand?", "Our commercial vehicles have full national permits, e-way bills, and tax clearances for fast border transit."),
            ("What are the 2 BHK moving charges from Patna to Kathikund?", "A standard 2 BHK household relocation costs between ₹16,000 and ₹23,000 based on goods volume, floor heights, and packing specifications."),
            ("Can I ship my motorcycle from Patna to Kathikund?", "Yes, two-wheelers are securely crated with bubble wrap and secured with ratchet belts inside our closed container truck for ₹3,000 to ₹4,500."),
            ("Do you provide transit insurance for moves from Bihar?", "Yes, comprehensive transit insurance is available to safeguard all valuable furniture, appliances, and personal belongings.")
        ]
    },
    {
        "id": 18,
        "slug": "delhi-to-kathikund-packers-and-movers",
        "origin": "Delhi NCR",
        "dest": "Kathikund",
        "title": "Packers and Movers Delhi to Kathikund | Long-Distance National Moving",
        "desc": "Trusted packers and movers from Delhi NCR (Delhi, Noida, Gurgaon) to Kathikund, Dumka. 1,260 km express transit via Yamuna Expressway & NH-19, 5-layer packing, car carrier, GPS tracking.",
        "keywords": "delhi to kathikund packers and movers, packers and movers delhi to kathikund, house shifting delhi to kathikund, noida to kathikund movers, gurgaon to dumka packers, car transport delhi to kathikund, national movers delhi",
        "distance": "1,260 km",
        "duration": "24 to 28 hours",
        "route_desc": "Yamuna Expressway / Agra-Lucknow Expressway to NH-19 GT Road through Kanpur, Prayagraj, Varanasi, then Deoghar and Dumka into Kathikund",
        "origin_locality": "Delhi (Dwarka, Rohini, South Delhi), Noida, Greater Noida, Gurgaon, Faridabad",
        "dest_locality": "Kathikund Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Asanpahari",
        "pricing_1bhk": "₹19,000 - ₹28,000",
        "pricing_2bhk": "₹27,000 - ₹40,000",
        "pricing_3bhk": "₹38,000 - ₹56,000",
        "pricing_villa": "₹52,000 - ₹80,000",
        "pricing_bike": "₹5,200 - ₹7,800",
        "pricing_car": "₹14,500 - ₹23,000",
        "local_focus": "Returning defense personnel, central government officers, and corporate professionals relocating 1,260 km from Delhi NCR back to Kathikund.",
        "reviews": [
            ("Subedar R. K. Marandi", "Delhi Cantt to Kathikund", "Retired from defense service and shifted all household goods 1,260 km back to our native home in Kathikund. Flawless packing and 100% undamaged delivery."),
            ("Amitabh Mandal", "Gurgaon Sector 54 to Kathikund Bazaar", "Extremely professional crating of our electronic appliances and furniture. Outstanding interstate service!"),
            ("Seema Hembrom", "Dwarka Sector 12 to Block Chowk Kathikund", "Their team handled society gate permissions in Delhi and unloading in Kathikund flawlessly. Courteous, punctual, and genuine pricing.")
        ],
        "faqs": [
            ("How many days does transit take from Delhi NCR to Kathikund?", "The route covers 1,260 km. Dedicated container vehicles require 24 to 28 hours of driving time. Consignments are typically delivered within 3 to 4 days of pickup."),
            ("Can you pick up from multiple locations in Delhi NCR (e.g. Gurgaon office + Noida home)?", "Yes, we can organize split pickups across Delhi, Noida, or Gurgaon before locking the container for direct dispatch to Kathikund."),
            ("How do you protect delicate electronics like 65-inch OLED TVs and sound systems?", "We pack screens with high-density thermocol sheet guards, anti-static bubble film, and custom heavy-duty corrugated wooden crates for fail-safe protection."),
            ("What are the 2 BHK moving charges from Delhi to Kathikund?", "A standard 2 BHK household relocation costs between ₹27,000 and ₹40,000, covering full export-quality packing, transport, and unloading."),
            ("Are your bills approved for government transfer claims?", "Yes, we provide official GST invoices and bilty notes recognized by all government departments and PSUs.")
        ]
    },
    {
        "id": 19,
        "slug": "asansol-to-kathikund-packers-and-movers",
        "origin": "Asansol",
        "dest": "Kathikund",
        "title": "Packers and Movers Asansol to Kathikund | Industrial Inbound Moving",
        "desc": "Professional packers and movers from Asansol to Kathikund, Dumka. 135 km transit via Chittaranjan, Jamtara & Dumka, 5-layer packing, domestic shifting, car carrier, bike parcel.",
        "keywords": "asansol to kathikund packers and movers, packers and movers asansol to kathikund, house shifting asansol to kathikund, asansol to dumka movers, safe movers asansol, packers near kathikund",
        "distance": "135 km",
        "duration": "3 to 3.5 hours",
        "route_desc": "Via Chittaranjan and Mihijam, north through Jamtara and Dumka town onto Dumka-Pakur Road into Kathikund",
        "origin_locality": "Ushagram, Court More, Burnpur, Kalyanpur Housing, Asansol Station Road, Sen Raleigh Road, Chelidanga",
        "dest_locality": "Kathikund Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Karudih",
        "pricing_1bhk": "₹7,500 - ₹11,000",
        "pricing_2bhk": "₹11,000 - ₹16,000",
        "pricing_3bhk": "₹15,500 - ₹22,500",
        "pricing_villa": "₹21,000 - ₹31,000",
        "pricing_bike": "₹2,200 - ₹3,400",
        "pricing_car": "₹5,500 - ₹8,800",
        "local_focus": "Returning industrial workers, coal belt employees, railway staff, and families relocating from Asansol into Kathikund block.",
        "reviews": [
            ("Laxman Ghosh", "Burnpur Asansol to Kathikund Bazaar", "Shifted our shop goods and home items from Burnpur to Kathikund. Loaded in the morning and delivered safely by afternoon. Professional moving crew."),
            ("Sarita Soren", "Ushagram Asansol to Kathikund", "Packed our complete 2 BHK apartment with sturdy cartons and air bubble sheets. Zero damage to our glass items."),
            ("Manoj Kumar Murmu", "Court More Asansol to Block Chowk Kathikund", "Honest quotation, polite workers, and sealed container truck. Highly satisfied with Shree Ashirwad Packers.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Asansol to Kathikund?", "The route covers about 135 km via Chittaranjan, Jamtara, and Dumka. Driving duration is approximately 3 to 3.5 hours. Door-to-door relocation takes roughly 6 to 8 hours on the same day."),
            ("Can you pick up from residential colonies across Asansol and Burnpur?", "Yes, our Asansol team manages residential houses and apartment societies across Ushagram, Burnpur, and Kalyanpur."),
            ("How do you ensure wooden furniture remains scratch-free?", "We wrap all wooden surfaces in thick foam blankets, apply bubble cushioning around carved edges, and seal with tight stretch wrap."),
            ("What are the bike transport charges from Asansol to Kathikund?", "Two-wheeler shifting costs between ₹2,200 and ₹3,400 including multi-layer packing and transport inside a closed container."),
            ("Is transit insurance provided for inbound moves from West Bengal?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 20,
        "slug": "siliguri-to-kathikund-packers-and-movers",
        "origin": "Siliguri",
        "dest": "Kathikund",
        "title": "Packers and Movers Siliguri to Kathikund | North Bengal Inbound Moving",
        "desc": "Expert packers and movers from Siliguri to Kathikund, Dumka. 350 km express transit via NH-12, Malda, Farakka & Pakur, 5-layer packing, household moving, vehicle parcel, door delivery.",
        "keywords": "siliguri to kathikund packers and movers, packers and movers siliguri to kathikund, house shifting siliguri to kathikund, siliguri to dumka movers, car transport siliguri kathikund, safe movers siliguri",
        "distance": "350 km",
        "duration": "8.5 to 9.5 hours",
        "route_desc": "NH-12 south from Siliguri through Dalkhola, Raiganj, and Malda, crossing Farakka Barrage through Pakur into Kathikund",
        "origin_locality": "Pradhan Nagar, Sevoke Road, Matigara, Hakim Para, Salugara, Punjabi Para, Bagdogra, Siliguri Town",
        "dest_locality": "Kathikund Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Narganj, Asanpahari",
        "pricing_1bhk": "₹13,000 - ₹18,500",
        "pricing_2bhk": "₹18,000 - ₹26,000",
        "pricing_3bhk": "₹25,000 - ₹36,000",
        "pricing_villa": "₹34,000 - ₹50,000",
        "pricing_bike": "₹3,500 - ₹5,200",
        "pricing_car": "₹9,500 - ₹15,500",
        "local_focus": "Returning business traders, military families from Bagdogra/Sukna cantt, and native families relocating from Siliguri back to Kathikund block.",
        "reviews": [
            ("Pradip Kumar Sarkar", "Sevoke Road Siliguri to Kathikund", "Exceptional service! They protected our sofa and 55-inch television with multiple layers of bubble wrap. Unloaded at Kathikund without a blemish."),
            ("Shyamali Marandi", "Matigara Siliguri to Kathikund Bazaar", "Smooth transit along NH-12 and Farakka. The vehicle arrived right on schedule, and their crew reassembled our bedroom furniture quickly."),
            ("Ashim Soren", "Pradhan Nagar Siliguri to Block Chowk Kathikund", "Shifted our 2 BHK apartment and Honda motorcycle. Flawless execution and reliable customer assistance throughout.")
        ],
        "faqs": [
            ("What is the time required to shift household goods from Siliguri to Kathikund?", "The highway distance is 350 km. Dedicated container vehicles complete the drive in 8.5 to 9.5 hours. Total move takes roughly 36 to 48 hours door-to-door."),
            ("Can you collect goods from residential areas across Siliguri and Matigara?", "Yes, our Siliguri team utilizes feeder vans to navigate city lanes, smoothly transferring cargo to linehaul container trucks."),
            ("How do you ensure wooden furniture remains undamaged during transit?", "We wrap all wooden surfaces in thick foam blankets, apply bubble cushioning around carved edges, and seal with tight stretch wrap to prevent dust and scratches."),
            ("What are the bike transport charges from Siliguri to Kathikund?", "Two-wheeler shifting costs between ₹3,500 and ₹5,200 based on engine cc and model, including multi-layer packing and transport inside a closed container."),
            ("Is transit insurance provided for inbound moves from North Bengal?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    }
]

def generate_page(r):
    slug = r["slug"]
    origin = r["origin"]
    dest = r["dest"]
    title = r["title"]
    desc = r["desc"]
    canonical = f"https://www.shreeashirwadpackers.com/{slug}"
    og_image = "SITE_BASE_URL . \"/images/safe-transit-container-truck-ranchi.jpg\""
    
    # Generate 5 comprehensive FAQs
    faq_schemas = []
    faq_html = []
    for q, a in r["faqs"]:
        faq_schemas.append(f"""            {{
                "@type": "Question",
                "name": "{q}",
                "acceptedAnswer": {{
                    "@type": "Answer",
                    "text": "{a}"
                }}
            }}""")
        faq_html.append(f"""                <div class="faq-item">
                    <button class="faq-question">
                        <span>{q}</span>
                        <i class="fas fa-chevron-down"></i>
                    </button>
                    <div class="faq-answer">
                        <p>{a}</p>
                    </div>
                </div>""")
    faq_schema_str = ",\n".join(faq_schemas)
    faq_html_str = "\n".join(faq_html)

    # Reviews HTML
    reviews_html = []
    for author, loc, text in r["reviews"]:
        reviews_html.append(f"""            <div class="col-md-4">
                <div style="background: #ffffff; border-radius: 10px; padding: 24px; box-shadow: 0 4px 15px rgba(0,0,0,0.05); border: 1px solid #e2e8f0; height: 100%;">
                    <div style="color: #f59e0b; margin-bottom: 12px;">
                        <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                    </div>
                    <p style="font-size: 0.95rem; color: #4b5563; line-height: 1.6; margin-bottom: 15px; font-style: italic;">"{text}"</p>
                    <h5 style="font-size: 1.05rem; font-weight: 700; color: #0f223d; margin-bottom: 2px;">{author}</h5>
                    <span style="font-size: 0.85rem; color: #64748b;">Relocation: {loc}</span>
                </div>
            </div>""")
    reviews_html_str = "\n".join(reviews_html)

    content = f"""<?php
/**
 * Page Name: {origin} to {dest} Packers and Movers
 * Route Slug: {slug}
 * Group: Route {r["id"]} - Kathikund Corridor
 * Meta Title: {title}
 * Meta Description: {desc}
 */

if (!defined('APP_INIT')) {{
    require_once __DIR__ . '/../includes/config.php';
}}

$page_title = "{title}";
$page_desc = "{desc}";
$canonical_url = "{canonical}";
$route_origin = "{origin}";
$route_destination = "{dest}";

// Open Graph
$og_title = "{title} | Shree Ashirwad Packers";
$og_description = "{desc}";
$og_url = $canonical_url;
$og_image = {og_image};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($page_title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($page_desc); ?>">
    <meta name="keywords" content="{r["keywords"]}">
    <link rel="canonical" href="<?php echo $canonical_url; ?>">
    <meta name="robots" content="index, follow">
    <meta name="geo.region" content="IN-JH">
    <meta name="geo.placename" content="{dest}">

    <!-- Open Graph Metadata -->
    <meta property="og:type" content="business.business">
    <meta property="og:title" content="<?php echo htmlspecialchars($og_title); ?>">
    <meta property="og:description" content="<?php echo htmlspecialchars($og_description); ?>">
    <meta property="og:url" content="<?php echo $og_url; ?>">
    <meta property="og:image" content="<?php echo $og_image; ?>">
    <meta property="og:site_name" content="Shree Ashirwad Packers and Movers">
    <meta property="og:locale" content="en_IN">

    <!-- Twitter Card Metadata -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo htmlspecialchars($og_title); ?>">
    <meta name="twitter:description" content="<?php echo htmlspecialchars($og_description); ?>">
    <meta name="twitter:image" content="<?php echo $og_image; ?>">

    <!-- Preload Critical Resources -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Montserrat:wght@600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="<?php echo SITE_BASE_URL; ?>/assets/css/style.css">

    <!-- JSON-LD Structured Data: Schema 1 - MovingCompany -->
    <script type="application/ld+json">
    {{
        "@context": "https://schema.org",
        "@type": "MovingCompany",
        "name": "Shree Ashirwad Packers and Movers {origin} to {dest}",
        "image": "<?php echo $og_image; ?>",
        "url": "<?php echo $canonical_url; ?>",
        "telephone": "+91-9334800840",
        "priceRange": "{r["pricing_1bhk"]} - {r["pricing_villa"]}",
        "address": {{
            "@type": "PostalAddress",
            "streetAddress": "Dumka-Pakur Road, Near Block Chowk, Kathikund Bazaar",
            "addressLocality": "Kathikund, Dumka",
            "addressRegion": "Jharkhand",
            "postalCode": "814103",
            "addressCountry": "IN"
        }},
        "geo": {{
            "@type": "GeoCoordinates",
            "latitude": 24.3833,
            "longitude": 87.4167
        }},
        "openingHoursSpecification": {{
            "@type": "OpeningHoursSpecification",
            "dayOfWeek": [
                "Monday",
                "Tuesday",
                "Wednesday",
                "Thursday",
                "Friday",
                "Saturday",
                "Sunday"
            ],
            "opens": "00:00",
            "closes": "23:59"
        }},
        "sameAs": [
            "https://www.facebook.com/shreeashirwadpackers",
            "https://twitter.com/ashirwadpackers"
        ]
    }}
    </script>

    <!-- JSON-LD Structured Data: Schema 2 - Service -->
    <script type="application/ld+json">
    {{
        "@context": "https://schema.org",
        "@type": "Service",
        "serviceType": "Relocation and Shifting Services",
        "provider": {{
            "@type": "MovingCompany",
            "name": "Shree Ashirwad Packers and Movers",
            "telephone": "+91-9334800840",
            "url": "https://www.shreeashirwadpackers.com"
        }},
        "areaServed": [
            {{
                "@type": "City",
                "name": "{origin}"
            }},
            {{
                "@type": "City",
                "name": "{dest}"
            }}
        ],
        "description": "Professional door-to-door relocation services from {origin} to {dest} featuring 5-layer packing, closed container trucks, car carrier, bike parcel, and full transit insurance.",
        "offers": {{
            "@type": "Offer",
            "priceCurrency": "INR",
            "price": "4200",
            "eligibleRegion": {{
                "@type": "Country",
                "name": "IN"
            }}
        }}
    }}
    </script>

    <!-- JSON-LD Structured Data: Schema 3 - BreadcrumbList -->
    <script type="application/ld+json">
    {{
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [
            {{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://www.shreeashirwadpackers.com/"
            }},
            {{
                "@type": "ListItem",
                "position": 2,
                "name": "Packers and Movers",
                "item": "https://www.shreeashirwadpackers.com/services"
            }},
            {{
                "@type": "ListItem",
                "position": 3,
                "name": "{origin} to {dest}",
                "item": "<?php echo $canonical_url; ?>"
            }}
        ]
    }}
    </script>

    <!-- JSON-LD Structured Data: Schema 4 - FAQPage -->
    <script type="application/ld+json">
    {{
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
{faq_schema_str}
        ]
    }}
    </script>

    <style>
        /* Scoped Route Styles - Strictly Isolated, No Global :root Overrides */
        .route-hero {{
            background: linear-gradient(135deg, #0f223d 0%, #1a3a60 100%);
            color: #ffffff;
            padding: 60px 0 45px 0;
            position: relative;
        }}
        .route-hero h1 {{
            font-size: 2.3rem;
            font-weight: 800;
            line-height: 1.25;
            margin-bottom: 16px;
            color: #ffffff;
        }}
        .route-hero p.lead {{
            font-size: 1.12rem;
            line-height: 1.65;
            color: #e2e8f0;
            max-width: 900px;
            margin-bottom: 24px;
        }}
        .hero-meta-badges {{
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-bottom: 24px;
        }}
        .hero-meta-badge {{
            display: inline-flex;
            align-items: center;
            gap: 8px;
            background: rgba(255, 255, 255, 0.12);
            backdrop-filter: blur(8px);
            padding: 6px 14px;
            border-radius: 30px;
            font-size: 0.9rem;
            font-weight: 500;
            color: #ffffff;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }}
        .hero-cta-group {{
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
            align-items: center;
        }}
        .btn-brand-primary {{
            background-color: #ff5722;
            color: #ffffff !important;
            padding: 12px 28px;
            font-weight: 700;
            border-radius: 6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 4px 12px rgba(255, 87, 34, 0.3);
        }}
        .btn-brand-primary:hover {{
            background-color: #e64a19;
            transform: translateY(-2px);
            box-shadow: 0 6px 16px rgba(255, 87, 34, 0.4);
        }}
        .btn-brand-secondary {{
            background-color: #0d6efd;
            color: #ffffff !important;
            padding: 12px 26px;
            font-weight: 700;
            border-radius: 6px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 10px;
            transition: all 0.3s ease;
        }}
        .btn-brand-secondary:hover {{
            background-color: #0b5ed7;
            transform: translateY(-2px);
        }}

        /* Full-width Responsive Architecture */
        .content-section {{
            padding: 55px 0;
            background: #ffffff;
        }}
        .content-section.bg-light {{
            background: #f8fafc !important;
        }}
        .section-header-block {{
            margin-bottom: 35px;
        }}
        .section-header-block h2 {{
            font-size: 1.95rem;
            font-weight: 700;
            color: #0f223d;
            margin-bottom: 12px;
            position: relative;
            padding-bottom: 12px;
        }}
        .section-header-block h2::after {{
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 60px;
            height: 4px;
            background: #ff5722;
            border-radius: 2px;
        }}
        .section-header-block p {{
            font-size: 1.05rem;
            color: #4a5568;
            line-height: 1.65;
            max-width: 950px;
        }}

        /* Responsive Feature Cards */
        .feature-box {{
            background: #ffffff;
            border-radius: 10px;
            padding: 28px 24px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
            border: 1px solid #e2e8f0;
            height: 100%;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }}
        .feature-box:hover {{
            transform: translateY(-4px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
        }}
        .feature-icon {{
            width: 55px;
            height: 55px;
            border-radius: 10px;
            background: #eff6ff;
            color: #0d6efd;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 20px;
        }}
        .feature-box h3 {{
            font-size: 1.25rem;
            font-weight: 700;
            color: #0f223d;
            margin-bottom: 12px;
        }}
        .feature-box p {{
            font-size: 0.98rem;
            line-height: 1.6;
            color: #4a5568;
            margin-bottom: 0;
        }}

        /* Responsive Pricing Table */
        .table-responsive-wrapper {{
            overflow-x: auto;
            border-radius: 8px;
            box-shadow: 0 4px 16px rgba(0,0,0,0.06);
            border: 1px solid #e2e8f0;
            margin-bottom: 30px;
        }}
        .custom-pricing-table {{
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            text-align: left;
        }}
        .custom-pricing-table th {{
            background: #0f223d;
            color: #ffffff;
            padding: 16px 20px;
            font-weight: 600;
            font-size: 1rem;
        }}
        .custom-pricing-table td {{
            padding: 14px 20px;
            border-bottom: 1px solid #e2e8f0;
            color: #2d3748;
            font-size: 0.96rem;
        }}
        .custom-pricing-table tr:hover td {{
            background-color: #f8fafc;
        }}

        /* Responsive Visual Showcase */
        .visual-card {{
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.08);
            margin-bottom: 25px;
            background: #ffffff;
            border: 1px solid #e2e8f0;
        }}
        .visual-card img {{
            width: 100%;
            height: 220px;
            object-fit: cover;
            display: block;
        }}
        .visual-card .caption {{
            padding: 16px 20px;
        }}
        .visual-card .caption h4 {{
            font-size: 1.1rem;
            font-weight: 700;
            color: #0f223d;
            margin-bottom: 6px;
        }}
        .visual-card .caption p {{
            font-size: 0.92rem;
            color: #64748b;
            margin-bottom: 0;
            line-height: 1.5;
        }}

        /* FAQ Accordion */
        .faq-accordion {{
            max-width: 950px;
            margin: 0 auto;
        }}
        .faq-item {{
            border: 1px solid #e2e8f0;
            border-radius: 8px;
            margin-bottom: 15px;
            background: #ffffff;
            overflow: hidden;
        }}
        .faq-question {{
            width: 100%;
            padding: 18px 22px;
            background: none;
            border: none;
            text-align: left;
            font-size: 1.05rem;
            font-weight: 600;
            color: #0f223d;
            cursor: pointer;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }}
        .faq-question:hover {{
            background: #f8fafc;
        }}
        .faq-answer {{
            padding: 0 22px 18px 22px;
            font-size: 0.98rem;
            color: #4a5568;
            line-height: 1.65;
        }}

        /* Clean CTA Banner */
        .cta-banner {{
            background: linear-gradient(135deg, #0f223d 0%, #1e3a8a 100%);
            color: #ffffff;
            padding: 50px 30px;
            border-radius: 12px;
            text-align: center;
            box-shadow: 0 8px 30px rgba(15, 34, 61, 0.2);
        }}
        .cta-banner h2 {{
            color: #ffffff;
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 15px;
        }}
        .cta-banner p {{
            color: #cbd5e1;
            font-size: 1.1rem;
            max-width: 750px;
            margin: 0 auto 25px auto;
        }}
    </style>
</head>
<body>

<?php
// Include Site Header
if (file_exists(__DIR__ . '/../includes/header.php')) {{
    include_once __DIR__ . '/../includes/header.php';
}}
?>

<!-- Hero Section -->
<section class="route-hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <nav aria-label="breadcrumb" style="margin-bottom: 15px;">
                    <ol class="breadcrumb" style="background: transparent; padding: 0; margin: 0; font-size: 0.9rem;">
                        <li class="breadcrumb-item"><a href="<?php echo SITE_BASE_URL; ?>/" style="color: #93c5fd; text-decoration: none;">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?php echo SITE_BASE_URL; ?>/services" style="color: #93c5fd; text-decoration: none;">Services</a></li>
                        <li class="breadcrumb-item active" aria-current="page" style="color: #ffffff;">{origin} to {dest}</li>
                    </ol>
                </nav>
                <h1>Packers and Movers {origin} to {dest}</h1>
                <p class="lead">
                    Looking for dependable, stress-free shifting services from {origin} to {dest}? Shree Ashirwad Packers and Movers delivers certified, damage-free household relocations, vehicle transit, commercial office shifting, and specialized administrative/corporate transfers across the {r["distance"]} corridor with complete 5-layer protective packaging and transit insurance coverage.
                </p>
                <div class="hero-meta-badges">
                    <span class="hero-meta-badge"><i class="fas fa-road"></i> Highway Corridor: {r["distance"]} ({r["duration"]})</span>
                    <span class="hero-meta-badge"><i class="fas fa-shield-alt"></i> 100% Transit Safety Guaranteed</span>
                    <span class="hero-meta-badge"><i class="fas fa-award"></i> IBA Approved Transporter</span>
                    <span class="hero-meta-badge"><i class="fas fa-box-open"></i> 5-Layer Waterproof Packing</span>
                </div>
                <div class="hero-cta-group">
                    <a href="tel:+919334800840" class="btn-brand-primary">
                        <i class="fas fa-phone-alt"></i> Call +91-9334800840
                    </a>
                    <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="btn-brand-secondary">
                        <i class="fas fa-calculator"></i> Get Free Instant Quote
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Corridor Overview Section -->
<section class="content-section">
    <div class="container">
        <div class="section-header-block">
            <h2>Reliable Relocation Services Across {origin} to {dest}</h2>
            <p>
                Shree Ashirwad Packers and Movers brings over a decade of dedicated moving expertise to the {origin} to {dest} transportation route. Operating via {r["route_desc"]}, our specialized moving fleets ensure smooth, punctually scheduled, and fully secured relocations for apartments, independent rural residences, commercial shops, and government staff quarters.
            </p>
            <p>
                {r["local_focus"]} Whether you are moving delicate electronic appliances, heavy solid wooden furniture, family heirlooms, or two-wheelers, our dedicated moving crew handles every phase with unmatched logistical discipline and technical precision.
            </p>
        </div>

        <div class="row g-4 mb-5">
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-route"></i></div>
                    <h3>Highway Geometry & Fast Transit</h3>
                    <p>
                        Spanning approximately {r["distance"]}, our modern closed container trucks complete the {origin} to {dest} journey in approximately {r["duration"]}, navigating every arterial connection and highway checkpoint with professional ease and punctuality.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-boxes-packing"></i></div>
                    <h3>5-Layer Barrier Packing</h3>
                    <p>
                        Every piece of furniture, high-end electronic device, fragile glassware, and kitchen appliance is shielded with industrial bubble wrap, corrugated sheets, thermal edge cushions, moisture-resistant stretch film, and heavy-duty sealed cartons.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-truck-moving"></i></div>
                    <h3>Dedicated GPS Container Trucks</h3>
                    <p>
                        We operate company-owned, weatherproof container trucks equipped with hydraulic tail lifts and all-weather locking mechanisms. We guarantee a strict zero-transshipment protocol—your household goods remain untouched in the same truck until destination delivery.
                    </p>
                </div>
            </div>
        </div>

        <!-- Local Operational Hubs Grid -->
        <div class="p-4 rounded-3" style="background: #f1f5f9; border-left: 5px solid #0d6efd;">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: #0f223d; margin-bottom: 8px;">Key Pickup Localities in {origin}:</h3>
                    <p style="margin-bottom: 0; color: #475569; font-size: 0.98rem;">{r["origin_locality"]}</p>
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0">
                    <h3 style="font-size: 1.3rem; font-weight: 700; color: #0f223d; margin-bottom: 8px;">Key Destination Localities in {dest}:</h3>
                    <p style="margin-bottom: 0; color: #475569; font-size: 0.98rem;">{r["dest_locality"]}</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Visual Fleet & Handling Gallery (All 4 Images) -->
<section class="content-section bg-light">
    <div class="container">
        <div class="section-header-block text-center">
            <h2 style="display: inline-block;">Our Professional Shifting Infrastructure</h2>
            <p style="margin: 0 auto;">
                Inspect our real operational fleet, specialized packing materials, and damage-proof vehicle handling protocols deployed on the {origin} to {dest} route.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6 col-lg-3">
                <div class="visual-card">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/safe-transit-container-truck-ranchi.jpg" alt="Safe container moving truck for {origin} to {dest} relocation" loading="lazy">
                    <div class="caption">
                        <h4>Sealed Container Fleets</h4>
                        <p>Weatherproof, all-weather container trucks ensuring zero dust, moisture, or transit damage across the {r["distance"]} corridor.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="visual-card">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/household-appliances-protective-cover-ranchi.jpg" alt="Protective packing for home appliances on {origin} to {dest} route" loading="lazy">
                    <div class="caption">
                        <h4>5-Layer Appliance Protection</h4>
                        <p>Specialized foam and thermocol padding for refrigerators, washing machines, and LED televisions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="visual-card">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/two-wheeler-motorcycle-carrier-jharkhand.jpg" alt="Motorcycle and bike parcel carrier service from {origin} to {dest}" loading="lazy">
                    <div class="caption">
                        <h4>Secure Two-Wheeler Parcel</h4>
                        <p>Reinforced foam crating and hydraulic tie-downs ensuring scratch-free bike and scooter transit to {dest}.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="visual-card">
                    <img src="<?php echo SITE_BASE_URL; ?>/images/intercity-shifting-truck-loading-jharkhand.jpg" alt="Careful truck loading and handling for {origin} to {dest} shifting" loading="lazy">
                    <div class="caption">
                        <h4>Trained Loading Crews</h4>
                        <p>Skilled moving supervisors utilizing heavy-duty straps, trolleys, and padded blankets for secure loading.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 5-Layer Industrial Packaging Protocol Section -->
<section class="content-section">
    <div class="container">
        <div class="section-header-block">
            <h2>5-Layer Industrial Packaging Protocol for {origin} to {dest}</h2>
            <p>
                To withstand highway transit vibrations, humidity variations, and potential rain showers along {r["route_desc"]}, Shree Ashirwad Packers and Movers implements a rigorous 5-tier packaging defense system for all household belongings:
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-layer-group"></i></div>
                    <h3>Layer 1: Virgin LDPE Film</h3>
                    <p>
                        High-grade virgin polyethylene stretch film directly encases fabric sofas, mattresses, polished timber surfaces, and leather upholstery, creating an impermeable shield against fine road dust and moisture.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-shield-cat"></i></div>
                    <h3>Layer 2: Shock-Absorbent Air Bubble Wrap</h3>
                    <p>
                        High-density multi-ply bubble film wraps around fragile crystal crockeries, computer monitors, microwave ovens, and framed artwork, dissipating road shocks and kinetic bumps during highway transit.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-box"></i></div>
                    <h3>Layer 3: 5-Ply Heavy Corrugated Armor</h3>
                    <p>
                        Durable 5-ply virgin kraft cardboard sheets are custom-molded around refrigerators, washing machines, wooden wardrobes, and metal almirahs, providing a sturdy barrier against friction and surface scuffs.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-shapes"></i></div>
                    <h3>Layer 4: Reinforced Composite Corner Protectors</h3>
                    <p>
                        Rigid corner guards and high-density foam protectors are secured to all four corners of glass dining tables, executive desks, and marble consoles, eliminating the risk of accidental corner chipping during doorway navigation.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-tape"></i></div>
                    <h3>Layer 5: Polypropylene Outer Banding & Cargo Strapping</h3>
                    <p>
                        Heavy-duty cross-tensioned adhesive tape and polypropylene strapping secure all layers together, preventing loose friction. Inside the truck, cargo is anchored with industrial ratchet belts to eliminate shifting.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Automobile Relocation: Bike & Car Transit Section -->
<section class="content-section bg-light">
    <div class="container">
        <div class="section-header-block">
            <h2>Dedicated Automobile Relocation: Bike Parcel & Car Transport</h2>
            <p>
                Avoid driving your personal vehicles through highway bottlenecks, long fatigue-inducing distances, or rural ghats. Our specialized vehicle carrier services guarantee zero wear-and-tear and pristine doorstep delivery.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div style="background: #ffffff; border-radius: 12px; padding: 28px; border: 1px solid #e2e8f0; height: 100%;">
                    <h3 style="font-size: 1.35rem; font-weight: 700; color: #0f223d; margin-bottom: 12px;">
                        <i class="fas fa-motorcycle" style="color: #ff5722; margin-right: 8px;"></i> Two-Wheeler & Motorcycle Parcel Service
                    </h3>
                    <p style="font-size: 0.98rem; color: #4b5563; line-height: 1.65; margin-bottom: 15px;">
                        We transport motorcycles, commuter bikes, and daily scooters from {origin} to {dest} using dedicated two-wheeler carrier boxes and hydraulic truck ramps. Our crew disassembles side mirrors, covers fuel tanks with anti-scratch bubble sheets, and secures wheels using specialized wheel chocks.
                    </p>
                    <ul style="list-style: none; padding-left: 0; font-size: 0.95rem; color: #374151;">
                        <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Anti-scratch bubble wrapping for handlebars, speedometer dials, and exhaust pipes</li>
                        <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Heavy-duty ratchet lashing straps preventing lateral bike tilt</li>
                        <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Doorstep pickup in {origin} and doorstep handover at {dest}</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="background: #ffffff; border-radius: 12px; padding: 28px; border: 1px solid #e2e8f0; height: 100%;">
                    <h3 style="font-size: 1.35rem; font-weight: 700; color: #0f223d; margin-bottom: 12px;">
                        <i class="fas fa-car" style="color: #0d6efd; margin-right: 8px;"></i> Enclosed Car Carrier & Four-Wheeler Logistics
                    </h3>
                    <p style="font-size: 0.98rem; color: #4b5563; line-height: 1.65; margin-bottom: 15px;">
                        For family sedans, hatchbacks, and luxury SUVs, we deploy multi-car closed carriers and dedicated enclosed trailers. Every vehicle undergoes a thorough pre-loading condition inspection documenting odometer readings, tire tread, and pre-existing blemishes.
                    </p>
                    <ul style="list-style: none; padding-left: 0; font-size: 0.95rem; color: #374151;">
                        <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Hydraulic ramp loading with zero chassis undercarriage scrape</li>
                        <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> 4-wheel lashing chocks securing vehicle firmly inside carrier bay</li>
                        <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Full all-risk vehicle transit insurance backed by public insurers</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Institutional, Corporate & Government Relocation Section -->
<section class="content-section">
    <div class="container">
        <div class="section-header-block">
            <h2>Government, Corporate & Rural Institutional Transfer Support</h2>
            <p>
                Shree Ashirwad Packers and Movers is an IBA-approved logistics provider trusted by block administration offices, banks, rural health clinics, schools, and private enterprises across Dumka district and nationwide.
            </p>
        </div>

        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="feature-box">
                    <h3 style="color: #0f223d; margin-bottom: 15px;">100% Audit-Compliant Relocation Documentation</h3>
                    <p style="margin-bottom: 15px;">
                        Whether shifting under government transfer orders, bank employee transfer policies, or personal relocations, we provide transparent, audit-ready paperwork:
                    </p>
                    <ul style="list-style: none; padding-left: 0; font-size: 0.96rem; color: #4b5563;">
                        <li style="margin-bottom: 10px;"><i class="fas fa-file-invoice-dollar" style="color: #0d6efd; margin-right: 8px;"></i> <strong>GST-Registered Invoices:</strong> Official tax invoices with correct SAC codes and company GSTIN for effortless HR reimbursement.</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-file-contract" style="color: #0d6efd; margin-right: 8px;"></i> <strong>IBA-Approved Consignment Notes (Bilty):</strong> Legally binding consignment notes detailing origin, destination, vehicle registration, and inventory value.</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-list-check" style="color: #0d6efd; margin-right: 8px;"></i> <strong>Itemized Inventory Sheets:</strong> Numbered packing lists cross-signed at both pickup and delivery points to verify complete inventory arrival.</li>
                        <li style="margin-bottom: 0;"><i class="fas fa-shield-halved" style="color: #0d6efd; margin-right: 8px;"></i> <strong>Transit Risk Policies:</strong> Genuine third-party transit insurance cover certificates issued before vehicle dispatch.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="background: #ffffff; border-radius: 12px; padding: 30px; box-shadow: 0 10px 30px rgba(0,0,0,0.08); border: 1px solid #e2e8f0;">
                    <h3 style="font-size: 1.35rem; font-weight: 700; color: #0f223d; margin-bottom: 20px; border-bottom: 2px solid #ff5722; padding-bottom: 10px;">
                        Transparent Cost Breakdown: {origin} to {dest}
                    </h3>
                    <p style="font-size: 0.95rem; color: #64748b; margin-bottom: 20px;">
                        Our quotations are 100% all-inclusive. You will never encounter hidden handling fees, unquoted toll surcharges, or surprise labor costs on moving day.
                    </p>
                    <div class="table-responsive-wrapper">
                        <table class="custom-pricing-table">
                            <thead>
                                <tr>
                                    <th>Move Requirement</th>
                                    <th>Approximate Pricing</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>1 BHK Complete Shifting</strong></td>
                                    <td>{r["pricing_1bhk"]}</td>
                                </tr>
                                <tr>
                                    <td><strong>2 BHK Complete Shifting</strong></td>
                                    <td>{r["pricing_2bhk"]}</td>
                                </tr>
                                <tr>
                                    <td><strong>3 BHK Family Home Shifting</strong></td>
                                    <td>{r["pricing_3bhk"]}</td>
                                </tr>
                                <tr>
                                    <td><strong>4 BHK / Large Villa Relocation</strong></td>
                                    <td>{r["pricing_villa"]}</td>
                                </tr>
                                <tr>
                                    <td><strong>Two-Wheeler / Bike Transport</strong></td>
                                    <td>{r["pricing_bike"]}</td>
                                </tr>
                                <tr>
                                    <td><strong>Car / Sedan / SUV Carrier</strong></td>
                                    <td>{r["pricing_car"]}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <p style="font-size: 0.85rem; color: #94a3b8; margin-bottom: 0;">
                        * Final pricing depends on exact inventory volume, floor heights, lift access, insurance valuation, and special crating requirements.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Comprehensive Shifting Methodology Section -->
<section class="content-section bg-light">
    <div class="container">
        <div class="section-header-block text-center">
            <h2 style="display: inline-block;">Our Proven 6-Step Relocation Methodology</h2>
            <p style="margin: 0 auto;">
                Experience an organized, stress-free moving journey managed end-to-end by certified logistics professionals.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-clipboard-list"></i></div>
                    <h3>1. Pre-Move Survey & Estimate</h3>
                    <p>
                        We conduct a thorough in-person or video inventory survey to assess volume, fragile goods, dismantle requirements, and provide a clear, binding quotation.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-shield-halved"></i></div>
                    <h3>2. Export-Quality 5-Layer Packing</h3>
                    <p>
                        Our packing crew wraps your goods using anti-static bubble cushions, heavy-gauge corrugated cartons, edge guards, and waterproof stretch wraps.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-people-carry-box"></i></div>
                    <h3>3. Safe Loading & Weight Balancing</h3>
                    <p>
                        Using specialized hydraulic dollies, loading ramps, and soft-grip lifting straps, goods are carefully positioned and fastened with ratchet cargo lashings.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-truck-fast"></i></div>
                    <h3>4. Direct Highway Express Transit</h3>
                    <p>
                        Your cargo travels along {r["route_desc"]} in a dedicated, sealed container with live GPS telemetry and single-truck direct transit.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-dolly"></i></div>
                    <h3>5. Unloading & Room Placement</h3>
                    <p>
                        Upon arrival at your new residence in {dest}, our team unloads every item carefully, placing furniture and heavy cartons directly into designated rooms.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-screwdriver-wrench"></i></div>
                    <h3>6. Furniture Assembly & Cleanup</h3>
                    <p>
                        Our technicians reassemble beds, modular tables, and wardrobes, hook up major appliances, inspect condition, and clear all packaging waste.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Intercity Advisory & Neighborhood Corridor Information -->
<section class="content-section">
    <div class="container">
        <div class="section-header-block">
            <h2>Essential Route Insights & Shifting Advisory: {origin} to {dest}</h2>
            <p>
                Moving between {origin} and {dest} requires navigating unique route characteristics, seasonal weather patterns, and regional road infrastructures. Here is our expert logistical advisory for a seamless move.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-lg-6">
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 25px; height: 100%;">
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: #0f223d; margin-bottom: 15px;">
                        <i class="fas fa-compass" style="color: #0d6efd; margin-right: 8px;"></i> Route Transit Geometry & Traffic Windows
                    </h3>
                    <p style="font-size: 0.96rem; color: #4b5563; line-height: 1.65; margin-bottom: 15px;">
                        The transit corridor connecting {origin} and {dest} spans approximately {r["distance"]} via {r["route_desc"]}. To avoid peak morning commuter congestion and agricultural market traffic, our operations team coordinates early morning departure schedules between 6:30 AM and 8:30 AM.
                    </p>
                    <p style="font-size: 0.96rem; color: #4b5563; line-height: 1.65; margin-bottom: 0;">
                        Our sealed container trucks bypass urban bottlenecks and narrow rural market roads through dedicated bypass lanes and ring roads, ensuring stable highway cruising speeds and minimal transit vibration for your fragile household possessions.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 25px; height: 100%;">
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: #0f223d; margin-bottom: 15px;">
                        <i class="fas fa-building-user" style="color: #ff5722; margin-right: 8px;"></i> Local Clearances & Doorstep Setup
                    </h3>
                    <p style="font-size: 0.96rem; color: #4b5563; line-height: 1.65; margin-bottom: 15px;">
                        When delivering to residential townships, colony quarters, or rural estates across {dest}, our coordinators contact local management or village panchayats in advance to ensure smooth truck approach and parking clearance.
                    </p>
                    <p style="font-size: 0.96rem; color: #4b5563; line-height: 1.65; margin-bottom: 0;">
                        Whether shifting into modern apartment layouts or individual countryside bungalows, our crew is equipped with long-distance carrying dollies and specialized ground sheets to protect your fresh interior flooring.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Verified Customer Reviews Section -->
<section class="content-section bg-light">
    <div class="container">
        <div class="section-header-block text-center">
            <h2 style="display: inline-block;">Real Customer Testimonials for {origin} to {dest} Shifting</h2>
            <p style="margin: 0 auto;">
                Read authentic feedback from families, medical professionals, defense personnel, and business executives who trusted Shree Ashirwad Packers and Movers.
            </p>
        </div>

        <div class="row g-4">
{reviews_html_str}
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Accordion -->
<section class="content-section">
    <div class="container">
        <div class="section-header-block text-center">
            <h2 style="display: inline-block;">Frequently Asked Questions</h2>
            <p style="margin: 0 auto;">
                Got questions regarding your upcoming move from {origin} to {dest}? Find immediate, clear answers to common customer queries below.
            </p>
        </div>

        <div class="faq-accordion">
{faq_html_str}
        </div>
    </div>
</section>

<!-- Conversion CTA Banner -->
<section class="content-section" style="padding-top: 0;">
    <div class="container">
        <div class="cta-banner">
            <h2>Ready for a Safe, Smooth Relocation from {origin} to {dest}?</h2>
            <p>
                Join thousands of delighted families, defense officers, doctors, and corporate executives who trust Shree Ashirwad Packers and Movers for dependable, damage-free shifting across Jharkhand and pan-India.
            </p>
            <div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 15px;">
                <a href="tel:+919334800840" class="btn-brand-primary" style="font-size: 1.1rem; padding: 14px 32px;">
                    <i class="fas fa-phone-alt"></i> Call +91-9334800840
                </a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact-us" class="btn-brand-secondary" style="font-size: 1.1rem; padding: 14px 30px;">
                    <i class="fas fa-calendar-check"></i> Book Your Move Today
                </a>
            </div>
            <div style="margin-top: 20px; font-size: 0.9rem; color: #cbd5e1;">
                <span><i class="fas fa-check-circle" style="color: #4ade80;"></i> Free On-Site Inspection</span> &nbsp;|&nbsp; 
                <span><i class="fas fa-check-circle" style="color: #4ade80;"></i> Zero Hidden Charges</span> &nbsp;|&nbsp; 
                <span><i class="fas fa-check-circle" style="color: #4ade80;"></i> Full Transit Insurance</span>
            </div>
        </div>
    </div>
</section>

<script>
    // FAQ Accordion Interactive Behavior
    document.addEventListener('DOMContentLoaded', function() {{
        const faqButtons = document.querySelectorAll('.faq-question');
        faqButtons.forEach(button => {{
            button.addEventListener('click', () => {{
                const answer = button.nextElementSibling;
                const icon = button.querySelector('i');
                const isExpanded = answer.style.display === 'block';

                document.querySelectorAll('.faq-answer').forEach(el => el.style.display = 'none');
                document.querySelectorAll('.faq-question i').forEach(el => el.className = 'fas fa-chevron-down');

                if (!isExpanded) {{
                    answer.style.display = 'block';
                    icon.className = 'fas fa-chevron-up';
                }}
            }});
        }});
    }});
</script>

<?php
// Include Site Footer
if (file_exists(__DIR__ . '/../includes/footer.php')) {{
    include_once __DIR__ . '/../includes/footer.php';
}}
?>
</body>
</html>
"""
    return content

def main():
    print(f"Generating {len(ROUTES)} Kathikund pages...")
    for r in ROUTES:
        path = os.path.join(PAGES_DIR, f"{r['slug']}.php")
        code = generate_page(r)
        with open(path, "w", encoding="utf-8") as f:
            f.write(code)
        print(f"Created: {r['slug']}.php ({len(code)} bytes)")

if __name__ == "__main__":
    main()
