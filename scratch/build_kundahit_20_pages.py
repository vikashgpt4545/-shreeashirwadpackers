import os
import re

PAGES_DIR = r"d:\shreeashirwadpackers\pages"

ROUTES = [
    # Group 1: Kundahit to Inside Jharkhand (Routes 1–5)
    {
        "id": 1,
        "slug": "kundahit-to-ranchi-packers-and-movers",
        "origin": "Kundahit",
        "dest": "Ranchi",
        "title": "Packers and Movers Kundahit to Ranchi | Eastern Jamtara to Capital Shifting",
        "desc": "Trusted packers and movers from Kundahit, Jamtara to Ranchi. 250 km express transit via Jamtara & Dhanbad/NH-320, 5-layer packing, home shifting, car & bike parcel, full insurance.",
        "keywords": "kundahit to ranchi packers and movers, packers and movers kundahit to ranchi, house shifting kundahit to ranchi, jamtara to ranchi movers, car transport kundahit ranchi, bike parcel kundahit ranchi, safe movers kundahit",
        "distance": "250 km",
        "duration": "5.5 to 6.5 hours",
        "route_desc": "State Highway west to Jamtara, then Govindpur, Dhanbad, Bokaro Steel City, and Ramgarh directly into Ranchi capital city",
        "origin_locality": "Kundahit Bazar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah, Jamdaha, Bindi, Nala Road",
        "dest_locality": "Harmu, Morabadi, Bariatu, Doranda, Kanke Road, Lalpur, Hinoo, Ratu Road, Dhurwa, Namkum",
        "pricing_1bhk": "₹8,500 - ₹12,500",
        "pricing_2bhk": "₹12,500 - ₹18,000",
        "pricing_3bhk": "₹18,000 - ₹26,000",
        "pricing_villa": "₹25,000 - ₹38,000",
        "pricing_bike": "₹2,500 - ₹3,800",
        "pricing_car": "₹6,500 - ₹10,500",
        "local_focus": "Block administrative officers, rural high school teachers, medical doctors at Kundahit CHC, banking executives (SBI/Gramin Bank), and families moving from Kundahit to Ranchi for higher education and healthcare.",
        "reviews": [
            ("Pravin Kumar Mandal", "Kundahit Bazar to Morabadi Ranchi", "Relocated our entire family residence to Ranchi. The moving crew arrived punctually in Kundahit, packed all our wooden furniture and delicate kitchen items with 5-layer bubble protection, and delivered to Morabadi on schedule without a scratch."),
            ("Dr. Alok Ranjan", "Kundahit CHC to Bariatu Ranchi", "Shifted our medical clinic apparatus and home belongings after my official transfer. Their enclosed container truck protected everything from highway dust across the 250 km trip. Excellent service!"),
            ("Shyamal Soren", "Block Chowk Kundahit to Harmu Ranchi", "Transported my Bajaj Pulsar motorcycle and 2 BHK household goods. Delivered on time with genuine GST documentation that was smoothly reimbursed by my department.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Kundahit to Ranchi?", "The road distance is approximately 250 km via Jamtara, Dhanbad, and Bokaro. Our closed container trucks complete the transit in 5.5 to 6.5 hours. Total shifting from loading in Kundahit to complete setup in Ranchi is executed within 24 hours on the same day."),
            ("How do you manage rural road access and narrow lanes around Kundahit block?", "Our fleet includes versatile intermediate container vehicles and feeder pickup vans designed specifically for rural roads in Kundahit, Amba, and Bagdah, ensuring safe doorstep collection without unnecessary transshipment."),
            ("Do you provide transit insurance for household goods from Kundahit?", "Yes, we provide 100% comprehensive transit insurance underwritten by leading national insurance companies, covering furniture, electronic appliances, and crockeries against transit risks."),
            ("What are the standard charges for shifting a 2 BHK home from Kundahit to Ranchi?", "A standard 2 BHK household relocation typically costs between ₹12,500 and ₹18,000, covering premium 5-layer packing, container truck freight, skilled loading, unloading, and furniture assembly."),
            ("Can you move motorcycles and scooters safely from Kundahit to Ranchi?", "Yes, two-wheelers are wrapped with heavy bubble film, secured with foam padding, and anchored using industrial ratchet straps inside our closed container truck for ₹2,500 to ₹3,800.")
        ]
    },
    {
        "id": 2,
        "slug": "kundahit-to-jamtara-packers-and-movers",
        "origin": "Kundahit",
        "dest": "Jamtara",
        "title": "Packers and Movers Kundahit to Jamtara | Local District Relocation",
        "desc": "Reliable packers and movers from Kundahit to Jamtara district headquarters. 45 km local express transit, 5-layer packing, domestic shifting, court & collectorate transfers, same-day delivery.",
        "keywords": "kundahit to jamtara packers and movers, packers and movers kundahit to jamtara, house shifting kundahit to jamtara, local movers jamtara district, kundahit packers jamtara, safe packers kundahit",
        "distance": "45 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "Kundahit-Jamtara State Highway westward connecting Kundahit directly into Jamtara town, Court Compound, and Station Road",
        "origin_locality": "Kundahit Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah, Jamdaha",
        "dest_locality": "Jamtara Main Town, Court Road, Station Road, Mihijam Road, Kayasthapara, Subhash Chowk, New Colony Jamtara",
        "pricing_1bhk": "₹4,200 - ₹6,500",
        "pricing_2bhk": "₹6,500 - ₹9,800",
        "pricing_3bhk": "₹9,800 - ₹14,500",
        "pricing_villa": "₹14,000 - ₹21,000",
        "pricing_bike": "₹1,200 - ₹2,000",
        "pricing_car": "₹3,200 - ₹5,000",
        "local_focus": "Local intra-district household and administrative relocations between Kundahit rural block and Jamtara district headquarters, collectorate, schools, and healthcare facilities.",
        "reviews": [
            ("Suresh Chandra Pal", "Kundahit Bazar to Court Road Jamtara", "Shifted our 2 BHK residence to Jamtara town. The crew arrived promptly in Kundahit at 8 AM, packed our goods neatly, and completed unloading in Jamtara by early afternoon. Very polite team."),
            ("Manju Devi Soren", "Block Chowk Kundahit to Station Road Jamtara", "Handled our heavy wooden almirahs, showcase, and delicate glassware with great care. Zero scratches and quick assembly at our new home."),
            ("Bipin Bihari Das", "BDO Campus Kundahit to Subhash Chowk Jamtara", "Relocated on official transfer to the Jamtara collectorate. Official GST invoice provided for seamless government reimbursement. Highly recommended service in Jamtara district.")
        ],
        "faqs": [
            ("How long does local shifting take from Kundahit to Jamtara town?", "The distance is only 45 km along the Jamtara State Highway. Driving duration is roughly 1 to 1.5 hours. Complete packing, transit, unloading, and furniture positioning are completed within 4 to 5 hours on the same day."),
            ("What are the rates for a 1 BHK or 2 BHK local move to Jamtara?", "Local 1 BHK shifting starts from ₹4,200, while a typical 2 BHK household relocation costs between ₹6,500 and ₹9,800 depending on total goods volume and floor access."),
            ("Do you bring packing supplies directly to Kundahit village homes?", "Yes, our moving truck brings fresh air bubble rolls, 5-ply corrugated cartons, waterproof stretch film, and heavy adhesive tapes directly to your doorstep in Kundahit."),
            ("Can you relocate two-wheelers locally from Kundahit to Jamtara?", "Yes, bikes and scooters are safely wrapped with scratch-resistant foam covers and transported in our closed container for ₹1,200 to ₹2,000."),
            ("Is same-day pickup and delivery guaranteed within Jamtara district?", "Yes, 100% guaranteed same-day completion for all relocations between Kundahit and Jamtara town.")
        ]
    },
    {
        "id": 3,
        "slug": "kundahit-to-dhanbad-packers-and-movers",
        "origin": "Kundahit",
        "dest": "Dhanbad",
        "title": "Packers and Movers Kundahit to Dhanbad | Coal Capital Relocation",
        "desc": "Professional packers and movers from Kundahit to Dhanbad. 85 km express transit via Jamtara & Govindpur/NH-19, 5-layer packing, home shifting, car carrier, bike parcel.",
        "keywords": "kundahit to dhanbad packers and movers, packers and movers kundahit to dhanbad, house shifting kundahit to dhanbad, jamtara to dhanbad movers, safe regional moving kundahit, dhanbad packers kundahit",
        "distance": "85 km",
        "duration": "2 to 2.5 hours",
        "route_desc": "State Highway to Jamtara, then southwest through Govindpur connecting into Dhanbad city centre",
        "origin_locality": "Kundahit Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah, Jamdaha",
        "dest_locality": "Bank More, Saraidhela, Hirapur, Steel Gate, Bartand, Dhansar, Koyla Nagar, ISM Campus Dhanbad",
        "pricing_1bhk": "₹5,500 - ₹8,200",
        "pricing_2bhk": "₹8,200 - ₹12,500",
        "pricing_3bhk": "₹12,000 - ₹17,500",
        "pricing_villa": "₹17,000 - ₹25,000",
        "pricing_bike": "₹1,800 - ₹2,700",
        "pricing_car": "₹4,000 - ₹6,500",
        "local_focus": "Inter-district government transfers, BCCL / coal executives, bank officers, ISM faculty, and families moving between Kundahit and the educational/commercial hub of Dhanbad.",
        "reviews": [
            ("Manoj Kumar Gorai", "Kundahit to Saraidhela Dhanbad", "Transferred from Kundahit block office to Dhanbad. Shree Ashirwad provided heavy-duty cartons, expert bubble packing, and delivered our goods intact within 5 hours."),
            ("Anita Murmu", "Block Chowk Kundahit to Hirapur Dhanbad", "Our washing machine, TV, and glass dining set were packed with multiple protective layers. Delivered safely without a single scratch. Highly satisfied."),
            ("Rameshwar Pandey", "Amba Kundahit to Bank More Dhanbad", "Very cooperative and well-mannered shifting staff. Clean container truck and prompt reassembly of wooden double beds.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Kundahit to Dhanbad?", "The road distance is approximately 85 km via Jamtara and Govindpur. Driving time is roughly 2 to 2.5 hours. The entire relocation is completed on the same day within 5 to 7 hours."),
            ("Can you relocate fragile kitchenware and electronics safely?", "Yes, we use customized crockery boxes, thermocol cushioning, and high-density air bubble wrap to safeguard glassware and home electronics against highway vibrations."),
            ("Do you provide car and two-wheeler carrier services to Dhanbad?", "Yes, motorcycles are fastened with ratchet straps inside closed containers, and cars are transported on dedicated vehicle carriers."),
            ("What are the 2 BHK shifting charges from Kundahit to Dhanbad?", "A standard 2 BHK household relocation costs between ₹8,200 and ₹12,500, all-inclusive of packing materials, vehicle transport, loading, and unloading."),
            ("Are your shifting bills approved for government transfer claims?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved transporter. We issue GST invoices and consignment notes fully valid for official reimbursement.")
        ]
    },
    {
        "id": 4,
        "slug": "kundahit-to-dumka-packers-and-movers",
        "origin": "Kundahit",
        "dest": "Dumka",
        "title": "Packers and Movers Kundahit to Dumka | Santhal Sub-Division Moving",
        "desc": "Trusted packers and movers from Kundahit to Dumka. 65 km express transit via Nala & Masanjore/SH-18, 5-layer packing, household & administrative relocations, car & bike parcel, full insurance.",
        "keywords": "kundahit to dumka packers and movers, packers and movers kundahit to dumka, house shifting kundahit to dumka, jamtara to dumka movers, car transport kundahit dumka, safe movers kundahit",
        "distance": "65 km",
        "duration": "1.5 to 2 hours",
        "route_desc": "State Highway north through Nala and Fatehpur connecting into Dumka town and collectorate",
        "origin_locality": "Kundahit Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "dest_locality": "Dudhani, Rasikpur, Gilanpara, Bandhabard, Tinbazar, Dumka Court Compound, Station Road Dumka",
        "pricing_1bhk": "₹5,000 - ₹7,500",
        "pricing_2bhk": "₹7,500 - ₹11,000",
        "pricing_3bhk": "₹11,000 - ₹16,000",
        "pricing_villa": "₹15,500 - ₹23,000",
        "pricing_bike": "₹1,600 - ₹2,400",
        "pricing_car": "₹3,800 - ₹6,000",
        "local_focus": "Government transfers, administrative staff, police personnel, healthcare teams, and families moving between Kundahit block and Dumka divisional headquarters.",
        "reviews": [
            ("Hemant Kumar Ghosh", "Kundahit to Dudhani Dumka", "Relocated on government transfer from Kundahit to Dumka. The crew arrived in Kundahit on time, packed all electronics with premium materials, and delivered by early afternoon. Flawless execution."),
            ("Pooja Kumari Pal", "Kundahit Bazar to Rasikpur Dumka", "Transported our 2 BHK apartment goods and scooty. Excellent handling, zero damage, and clear communication throughout the move."),
            ("Sunil Marandi", "Block Chowk Kundahit to Court Road Dumka", "Very professional service. Sealed container truck ensured our furniture stayed clean throughout the journey.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kundahit to Dumka?", "The route covers approximately 65 km via Nala and Fatehpur. Driving duration is roughly 1.5 to 2 hours. Door-to-door relocation is completed within 4 to 6 hours on the same day."),
            ("Do you provide door delivery in residential colonies across Dumka?", "Yes, our moving crew manages residential permissions, unloading, and room positioning across Dumka town, Dudhani, and collectorate colonies."),
            ("How do you protect delicate electronics like LED TVs and refrigerators?", "We use multi-layer bubble film, corner guards, thermocol sheet lining, and heavy corrugated wooden crates for sensitive electronics."),
            ("What are the rates for a 2 BHK home shift to Dumka?", "A standard 2 BHK household relocation ranges between ₹7,500 and ₹11,000, covering full packing, transport, insurance documentation, and unloading."),
            ("Can you transport cars and bikes safely to Dumka?", "Yes, we provide dedicated two-wheeler parcel packing and car carrier transport with door-to-door pickup and delivery.")
        ]
    },
    {
        "id": 5,
        "slug": "kundahit-to-deoghar-packers-and-movers",
        "origin": "Kundahit",
        "dest": "Deoghar",
        "title": "Packers and Movers Kundahit to Deoghar | Baidyanath Dham Moving",
        "desc": "Expert packers and movers from Kundahit to Deoghar. 110 km transit via Jamtara, Madhupur & Sarath, 5-layer packing, household moving, vehicle parcel, complete insurance.",
        "keywords": "kundahit to deoghar packers and movers, packers and movers kundahit to deoghar, house shifting kundahit to deoghar, jamtara to deoghar movers, car transport kundahit deoghar, safe movers deoghar",
        "distance": "110 km",
        "duration": "2.5 to 3 hours",
        "route_desc": "State Highway to Jamtara, then north through Sarath and Madhupur directly into Deoghar pilgrimage and urban hub",
        "origin_locality": "Kundahit Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "dest_locality": "Castairs Town, Bilasi Town, Williams Town, Jasidih, Bompas Town, VIP Chowk, Satsang Nagar Deoghar",
        "pricing_1bhk": "₹6,800 - ₹9,800",
        "pricing_2bhk": "₹9,800 - ₹14,200",
        "pricing_3bhk": "₹14,000 - ₹20,000",
        "pricing_villa": "₹19,000 - ₹28,000",
        "pricing_bike": "₹2,000 - ₹3,000",
        "pricing_car": "₹4,800 - ₹7,500",
        "local_focus": "Relocating families, railway staff at Jasidih, banking professionals, healthcare staff, and teachers moving from Kundahit block to Deoghar.",
        "reviews": [
            ("Devendra Nath Mandal", "Kundahit to Castairs Town Deoghar", "Shifted our 3 BHK household items. The packing crew was extremely careful with our glass dining table and large refrigerator. Delivered on schedule in Deoghar without a single scratch."),
            ("Vinay Soren", "Block Chowk Kundahit to Bilasi Town Deoghar", "Smooth relocation experience. Container truck arrived sealed, and workers placed all heavy furniture in designated bedrooms."),
            ("Santosh Kumar Jha", "Amba Kundahit to Jasidih Deoghar", "Transparent pricing, no hidden costs, and prompt customer assistance. Highly satisfied with Shree Ashirwad Packers.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Kundahit to Deoghar?", "The distance is approximately 110 km via Jamtara and Sarath. Driving duration is roughly 2.5 to 3 hours. Complete relocation is achieved within 6 to 8 hours on the same day."),
            ("Can you deliver to residential areas like Castairs Town, Bilasi Town, and Jasidih?", "Yes, our team is well-versed with Deoghar layouts and manages smooth delivery to all residential sectors and Jasidih apartments."),
            ("What packing materials are used for safe transit?", "We employ 5-tier industrial packaging including LDPE stretch film, multi-layer air bubble sheets, 5-ply kraft corrugated cardboard, and heavy-duty strapping."),
            ("What are the shifting charges for a 2 BHK home from Kundahit to Deoghar?", "A standard 2 BHK household relocation costs between ₹9,800 and ₹14,200 depending on total volume, dismantling needs, and floor elevations."),
            ("Do you provide insurance coverage for household goods?", "Yes, comprehensive transit insurance is provided to cover any unforeseen transit risks during highway travel.")
        ]
    },
    # Group 2: Inside Jharkhand to Kundahit (Routes 6–10)
    {
        "id": 6,
        "slug": "ranchi-to-kundahit-packers-and-movers",
        "origin": "Ranchi",
        "dest": "Kundahit",
        "title": "Packers and Movers Ranchi to Kundahit | Capital to Eastern Jamtara Relocation",
        "desc": "Trusted packers and movers from Ranchi to Kundahit, Jamtara. 250 km transit via Ramgarh, Bokaro & Dhanbad/NH-320, 5-layer packing, home shifting, car & bike parcel, door delivery.",
        "keywords": "ranchi to kundahit packers and movers, packers and movers ranchi to kundahit, house shifting ranchi to kundahit, ranchi to jamtara movers, car transport ranchi kundahit, bike parcel ranchi kundahit, safe movers ranchi",
        "distance": "250 km",
        "duration": "5.5 to 6.5 hours",
        "route_desc": "NH-320 east from Ranchi through Ramgarh, Bokaro, Dhanbad, Govindpur, Jamtara town directly into Kundahit block",
        "origin_locality": "Harmu, Morabadi, Bariatu, Doranda, Kanke Road, Lalpur, Hinoo, Ratu Road, Dhurwa",
        "dest_locality": "Kundahit Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah, Jamdaha",
        "pricing_1bhk": "₹8,500 - ₹12,500",
        "pricing_2bhk": "₹12,500 - ₹18,000",
        "pricing_3bhk": "₹18,000 - ₹26,000",
        "pricing_villa": "₹25,000 - ₹38,000",
        "pricing_bike": "₹2,500 - ₹3,800",
        "pricing_car": "₹6,500 - ₹10,500",
        "local_focus": "Returning families, appointed block development officers, medical doctors joining Kundahit CHC, teachers, and banking professionals moving from Ranchi to Kundahit.",
        "reviews": [
            ("Dr. Binod Kumar Das", "Bariatu Ranchi to Kundahit CHC", "Posted as medical officer to Kundahit. Shree Ashirwad loaded everything in Ranchi in the morning and safely delivered to my quarters in Kundahit by evening. Perfect service!"),
            ("Shashi Bhushan Pal", "Doranda Ranchi to Kundahit Bazaar", "Shifted our family ancestral home belongings from Ranchi to Kundahit. Their sealed container truck protected everything from rain and dust."),
            ("Pramod Kumar Marandi", "Harmu Ranchi to Block Chowk Kundahit", "Very prompt and professional moving team. Handled our glass showcase and refrigerator with extreme care.")
        ],
        "faqs": [
            ("How long does moving take from Ranchi to Kundahit?", "The route covers about 250 km via Ramgarh, Bokaro, Dhanbad, and Jamtara. Driving duration is roughly 5.5 to 6.5 hours. Total shifting is completed on the same day within 8 to 10 hours."),
            ("Can your truck reach interior villages and rural roads around Kundahit?", "Yes, we operate medium-sized container vehicles specifically suited for rural roads in Kundahit, Amba, and Bagdah, ensuring safe door-to-door delivery."),
            ("What are the 2 BHK shifting charges from Ranchi to Kundahit?", "A typical 2 BHK household relocation ranges between ₹12,500 and ₹18,000, including packing materials, vehicle transport, loading, and unloading."),
            ("Can I transport my bike or scooter from Ranchi to Kundahit?", "Yes, two-wheelers are securely crated with bubble wrap and secured with ratchet belts inside our closed container truck for ₹2,500 to ₹3,800."),
            ("Do you provide itemized bills for government transfer claims?", "Yes, we provide 100% audit-compliant GST invoices, consignment notes, and itemized packing lists approved by all government departments and PSUs.")
        ]
    },
    {
        "id": 7,
        "slug": "jamtara-to-kundahit-packers-and-movers",
        "origin": "Jamtara",
        "dest": "Kundahit",
        "title": "Packers and Movers Jamtara to Kundahit | Intra-District Block Shifting",
        "desc": "Professional packers and movers from Jamtara town to Kundahit block. 45 km local express transit, 5-layer packing, domestic & office shifting, same-day delivery.",
        "keywords": "jamtara to kundahit packers and movers, packers and movers jamtara to kundahit, house shifting jamtara to kundahit, local movers jamtara town, safe packers jamtara, packers near kundahit",
        "distance": "45 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "Jamtara-Kundahit State Highway east connecting Jamtara town directly into Kundahit block centre",
        "origin_locality": "Jamtara Main Town, Court Road, Station Road, Mihijam Road, Kayasthapara, Subhash Chowk, New Colony",
        "dest_locality": "Kundahit Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "pricing_1bhk": "₹4,200 - ₹6,500",
        "pricing_2bhk": "₹6,500 - ₹9,800",
        "pricing_3bhk": "₹9,800 - ₹14,500",
        "pricing_villa": "₹14,000 - ₹21,000",
        "pricing_bike": "₹1,200 - ₹2,000",
        "pricing_car": "₹3,200 - ₹5,000",
        "local_focus": "Government officers, police personnel, healthcare teams, and retail suppliers shifting from Jamtara district headquarters into Kundahit block.",
        "reviews": [
            ("Rajendra Prasad Mandal", "Court Road Jamtara to Kundahit Bazaar", "Shifted our grocery shop inventory and household items to Kundahit. The crew was fast, polite, and handled all heavy goods with dollies. Very reasonable cost."),
            ("Sister Theresa Murmu", "Station Road Jamtara to Kundahit", "Excellent relocation service. Their workers packed all cupboards, books, and kitchen appliances neatly. Zero damage."),
            ("Subodh Kumar Pal", "Subhash Chowk Jamtara to Block Chowk Kundahit", "Completed moving within 4 hours total. Punctual, efficient, and careful team. Highly recommended.")
        ],
        "faqs": [
            ("How much time does shifting take from Jamtara town to Kundahit?", "Driving time across the 45 km stretch is roughly 1 to 1.5 hours. Complete door-to-door relocation is finished within 4 to 5 hours on the same day."),
            ("What is the cost of moving a 1 BHK or 2 BHK home to Kundahit?", "A 1 BHK move costs ₹4,200 to ₹6,500, while a 2 BHK relocation costs between ₹6,500 and ₹9,800 based on total inventory volume."),
            ("Do you supply bubble wrap and packing cartons in Jamtara?", "Yes, our team brings virgin bubble sheets, 5-ply cartons, and packing tape directly to your home in Jamtara."),
            ("Can you relocate two-wheelers locally from Jamtara to Kundahit?", "Yes, bikes and scooters are safely wrapped with protective foam and transported in our closed truck for ₹1,200 to ₹2,000."),
            ("Is same-day pickup and delivery guaranteed?", "Yes, 100% guaranteed same-day completion for all intra-district relocations within Jamtara district.")
        ]
    },
    {
        "id": 8,
        "slug": "dhanbad-to-kundahit-packers-and-movers",
        "origin": "Dhanbad",
        "dest": "Kundahit",
        "title": "Packers and Movers Dhanbad to Kundahit | Regional Inbound Moving",
        "desc": "Reliable packers and movers from Dhanbad to Kundahit, Jamtara. 85 km transit via Govindpur & Jamtara, 5-layer packing, domestic shifting, car carrier, bike parcel, full insurance.",
        "keywords": "dhanbad to kundahit packers and movers, packers and movers dhanbad to kundahit, house shifting dhanbad to kundahit, dhanbad to jamtara movers, safe movers dhanbad, packers near kundahit",
        "distance": "85 km",
        "duration": "2 to 2.5 hours",
        "route_desc": "NH-19 / State Highway northeast from Dhanbad through Govindpur and Jamtara directly into Kundahit",
        "origin_locality": "Bank More, Saraidhela, Hirapur, Steel Gate, Bartand, Dhansar, Koyla Nagar, ISM Campus Dhanbad",
        "dest_locality": "Kundahit Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "pricing_1bhk": "₹5,500 - ₹8,200",
        "pricing_2bhk": "₹8,200 - ₹12,500",
        "pricing_3bhk": "₹12,000 - ₹17,500",
        "pricing_villa": "₹17,000 - ₹25,000",
        "pricing_bike": "₹1,800 - ₹2,700",
        "pricing_car": "₹4,000 - ₹6,500",
        "local_focus": "Inter-district transfers, coal company staff, teachers, medical officers, and trading families moving from Dhanbad into Kundahit block.",
        "reviews": [
            ("Umesh Kumar Gorai", "Saraidhela Dhanbad to Kundahit", "Transferred on government duty to Kundahit. Shree Ashirwad handled the packing and delivery seamlessly. Everything arrived intact on the same day."),
            ("Meena Kumari Soren", "Hirapur Dhanbad to Kundahit Bazaar", "Very courteous crew. They wrapped my washing machine and glass tables with multiple layers of bubble wrap. Great job!"),
            ("Satish Bhagat", "Bank More Dhanbad to Block Chowk Kundahit", "Reasonable rates, no hidden fees, and safe transit. Highly recommended for moves to Jamtara district.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Dhanbad to Kundahit?", "The route covers about 85 km via Govindpur and Jamtara. Driving duration is approximately 2 to 2.5 hours. Complete shifting takes 5 to 7 hours on the same day."),
            ("Can you relocate fragile kitchen items and electronics safely?", "Yes, our team uses specialized crockery cartons, air bubble cushioning, and edge guards to ensure zero damage during highway transit."),
            ("What are the 2 BHK shifting charges from Dhanbad to Kundahit?", "A typical 2 BHK household relocation costs between ₹8,200 and ₹12,500, covering full packing, transport, and unloading."),
            ("Do you transport motorcycles and scooters safely?", "Yes, two-wheelers are securely packed and tied with ratchet belts inside our closed container truck for ₹1,800 to ₹2,700."),
            ("Are your bills approved for government reimbursement?", "Yes, we provide official GST invoices and bilty notes fully eligible for government and bank employee transfer claims.")
        ]
    },
    {
        "id": 9,
        "slug": "dumka-to-kundahit-packers-and-movers",
        "origin": "Dumka",
        "dest": "Kundahit",
        "title": "Packers and Movers Dumka to Kundahit | Santhal Inbound Relocation",
        "desc": "Trusted packers and movers from Dumka to Kundahit, Jamtara. 65 km transit via Masanjore & Nala, 5-layer packing, corporate & home shifting, vehicle carrier.",
        "keywords": "dumka to kundahit packers and movers, packers and movers dumka to kundahit, house shifting dumka to kundahit, dumka to jamtara movers, car transport dumka kundahit, safe movers dumka",
        "distance": "65 km",
        "duration": "1.5 to 2 hours",
        "route_desc": "State Highway south from Dumka town through Masanjore, Fatehpur, and Nala into Kundahit block",
        "origin_locality": "Dudhani, Rasikpur, Gilanpara, Bandhabard, Tinbazar, Dumka Court Compound, Station Road Dumka",
        "dest_locality": "Kundahit Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "pricing_1bhk": "₹5,000 - ₹7,500",
        "pricing_2bhk": "₹7,500 - ₹11,000",
        "pricing_3bhk": "₹11,000 - ₹16,000",
        "pricing_villa": "₹15,500 - ₹23,000",
        "pricing_bike": "₹1,600 - ₹2,400",
        "pricing_car": "₹3,800 - ₹6,000",
        "local_focus": "Returning administrative workers, police officers, and families relocating south from Dumka into Kundahit block.",
        "reviews": [
            ("Ranjan Kumar Ghosh", "Dudhani Dumka to Kundahit", "Shifted our 3 BHK home to Kundahit. Crew handled our heavy wooden furniture with immense care. Arrived on the same day without a scratch."),
            ("Sunita Devi Pal", "Rasikpur Dumka to Kundahit Bazaar", "Packed all our crockery, refrigerator, and clothes in sturdy boxes. Unloaded in Kundahit smoothly. Very satisfied."),
            ("Deepak Marandi", "Court Road Dumka to Block Chowk Kundahit", "Safe bike transport and household shifting. Driver maintained constant contact throughout the journey.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Dumka to Kundahit?", "The highway route is approximately 65 km via Nala. Driving duration is roughly 1.5 to 2 hours. Door-to-door relocation takes roughly 4 to 6 hours."),
            ("Can you pick up from residential colonies across Dumka?", "Yes, our moving crew is experienced with residential society permissions and official procedures across Dumka town."),
            ("How do you ensure wooden furniture remains scratch-free?", "We wrap all wooden surfaces in foam blankets, bubble wrap, and stretch film, securing them with tensioned ratchet straps inside the container."),
            ("What are the 2 BHK moving charges from Dumka to Kundahit?", "A standard 2 BHK household relocation costs between ₹7,500 and ₹11,000 based on goods volume and packing requirements."),
            ("Do you provide transit insurance for moves to Jamtara district?", "Yes, comprehensive transit insurance is provided to cover any accidental risk or damage during highway transit.")
        ]
    },
    {
        "id": 10,
        "slug": "deoghar-to-kundahit-packers-and-movers",
        "origin": "Deoghar",
        "dest": "Kundahit",
        "title": "Packers and Movers Deoghar to Kundahit | Reliable Regional Inbound",
        "desc": "Professional packers and movers from Deoghar to Kundahit, Jamtara. 110 km transit via Sarath & Jamtara, 5-layer packing, home shifting, car & bike parcel.",
        "keywords": "deoghar to kundahit packers and movers, packers and movers deoghar to kundahit, house shifting deoghar to kundahit, deoghar to jamtara movers, car transport deoghar kundahit, safe movers deoghar",
        "distance": "110 km",
        "duration": "2.5 to 3 hours",
        "route_desc": "State Highway south from Deoghar through Sarath, Madhupur, and Jamtara town directly into Kundahit",
        "origin_locality": "Castairs Town, Bilasi Town, Williams Town, Jasidih, Bompas Town, VIP Chowk, Satsang Nagar Deoghar",
        "dest_locality": "Kundahit Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "pricing_1bhk": "₹6,800 - ₹9,800",
        "pricing_2bhk": "₹9,800 - ₹14,200",
        "pricing_3bhk": "₹14,000 - ₹20,000",
        "pricing_villa": "₹19,000 - ₹28,000",
        "pricing_bike": "₹2,000 - ₹3,000",
        "pricing_car": "₹4,800 - ₹7,500",
        "local_focus": "Returning teachers, medical officers, administrative workers, and native families relocating from Deoghar back to Kundahit block.",
        "reviews": [
            ("Surendra Nath Pal", "Castairs Town Deoghar to Kundahit", "Shifted our family home back to our native village in Kundahit. The team was disciplined, fast, and packed our heavy appliances with utmost care."),
            ("Kavita Kumari Soren", "Bilasi Town Deoghar to Kundahit Bazaar", "Same-day delivery within 6 hours total. Sealed container truck kept everything completely dust-free. Very pleased with their service."),
            ("Ajit Kumar Mandal", "Jasidih Deoghar to Block Chowk Kundahit", "Official bill approved smoothly by our employer. Perfect packing and very polite laborers.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Deoghar to Kundahit?", "The route covers about 110 km via Sarath and Jamtara. Driving duration is approximately 2.5 to 3 hours. Total relocation takes roughly 6 to 8 hours."),
            ("Do you handle relocations for railway and government employees from Deoghar?", "Yes, we regularly service transfers from Deoghar to all Jamtara blocks, providing official IBA-approved bills for reimbursement."),
            ("How do you protect fragile home items during transit?", "We use 5-tier packaging defense including bubble wrap, heavy corrugated sheets, foam edge guards, and tight stretch wraps."),
            ("What are the rates for 2 BHK home shifting between Deoghar and Kundahit?", "A standard 2 BHK apartment relocation ranges from ₹9,800 to ₹14,200 based on goods volume and floor elevations."),
            ("Can you move cars and bikes safely from Deoghar to Kundahit?", "Yes, we provide dedicated bike crating and car transport service using closed container vehicles, ensuring complete protection.")
        ]
    },
    # Group 3: Kundahit to Outside Jharkhand (Routes 11–15)
    {
        "id": 11,
        "slug": "kundahit-to-asansol-packers-and-movers",
        "origin": "Kundahit",
        "dest": "Asansol",
        "title": "Packers and Movers Kundahit to Asansol | Border Industrial Relocation",
        "desc": "Trusted packers and movers from Kundahit, Jamtara to Asansol, West Bengal. 40 km express transit via Chittaranjan, 5-layer packing, home & corporate relocations, vehicle parcel, full insurance.",
        "keywords": "kundahit to asansol packers and movers, packers and movers kundahit to asansol, house shifting kundahit to asansol, jamtara to asansol movers, west bengal border packers kundahit, safe movers asansol",
        "distance": "40 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "State Highway south from Kundahit crossing Ajay River through Mihijam and Chittaranjan directly into Asansol city",
        "origin_locality": "Kundahit Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "dest_locality": "Ushagram, Court More, Burnpur, Kalyanpur Housing, Asansol Station Road, Sen Raleigh Road, Chelidanga",
        "pricing_1bhk": "₹4,200 - ₹6,500",
        "pricing_2bhk": "₹6,500 - ₹9,800",
        "pricing_3bhk": "₹9,800 - ₹14,500",
        "pricing_villa": "₹14,000 - ₹21,000",
        "pricing_bike": "₹1,200 - ₹2,000",
        "pricing_car": "₹3,200 - ₹5,000",
        "local_focus": "Cross-border workers, ECL coal employees, Chittaranjan locomotive workers, Burnpur steel plant staff, and trading families moving from Kundahit to Asansol.",
        "reviews": [
            ("Ashok Kumar Mukherjee", "Kundahit to Burnpur Asansol", "Moved our household from Kundahit to Burnpur. Fast 1.5-hour transit via Chittaranjan. Seamless border clearance and zero damage to our glassware."),
            ("Dr. Smita Roy", "Kundahit CHC to Ushagram Asansol", "Relocated on joining medical facility in Asansol. Excellent packing, courteous movers, and prompt same-day setup."),
            ("Dilip Kumar Pal", "Block Chowk Kundahit to Kalyanpur Asansol", "Transported our 2 BHK goods and Hero Splendor. Sealed container truck and reasonable charges. Highly satisfied.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kundahit to Asansol?", "The highway distance is only 40 km via Chittaranjan and Mihijam. Driving duration is roughly 1 to 1.5 hours. Complete moving takes 4 to 5 hours on the same day."),
            ("How do you handle the interstate border crossing into West Bengal?", "Our commercial vehicles have valid national permits, e-way bills, and road tax clearances, ensuring hassle-free border transit at Chittaranjan."),
            ("What are the standard charges for shifting a 2 BHK home to Asansol?", "A typical 2 BHK household relocation costs between ₹6,500 and ₹9,800, including 5-layer packing, vehicle freight, loading, and unloading."),
            ("Can you move motorcycles safely across the border to Asansol?", "Yes, two-wheelers are wrapped with scratch-resistant bubble sheets and secured with ratchet belts inside our closed container truck for ₹1,200 to ₹2,000."),
            ("Do you provide transit insurance for cross-border moves?", "Yes, we provide 100% comprehensive transit insurance underwritten by national insurance companies.")
        ]
    },
    {
        "id": 12,
        "slug": "kundahit-to-kolkata-packers-and-movers",
        "origin": "Kundahit",
        "dest": "Kolkata",
        "title": "Packers and Movers Kundahit to Kolkata | Interstate Metro Relocation",
        "desc": "Professional packers and movers from Kundahit to Kolkata. 240 km transit via Asansol, Durgapur & NH-19, 5-layer packing, domestic shifting, car carrier, bike parcel, door delivery.",
        "keywords": "kundahit to kolkata packers and movers, packers and movers kundahit to kolkata, house shifting kundahit to kolkata, jamtara to kolkata movers, nh19 packers kundahit, safe movers kolkata",
        "distance": "240 km",
        "duration": "5 to 6 hours",
        "route_desc": "Via Chittaranjan to Asansol, connecting directly onto NH-19 (GT Road) through Durgapur and Bardhaman into Kolkata",
        "origin_locality": "Kundahit Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "dest_locality": "Salt Lake, New Town, Rajarhat, South City, Behala, Howrah, Jadavpur, Ballygunge",
        "pricing_1bhk": "₹10,500 - ₹15,500",
        "pricing_2bhk": "₹15,500 - ₹22,000",
        "pricing_3bhk": "₹21,000 - ₹30,000",
        "pricing_villa": "₹28,000 - ₹42,000",
        "pricing_bike": "₹2,800 - ₹4,200",
        "pricing_car": "₹7,500 - ₹12,000",
        "local_focus": "Corporate transfers, IT personnel, students at Kolkata universities, and families moving from Kundahit block to the Kolkata metropolitan region.",
        "reviews": [
            ("Swapan Kumar Ghosh", "Kundahit to Salt Lake Kolkata", "Moved our complete family residence to Kolkata. The team handled our heavy wooden furniture and fragile crockery with exceptional skill. Delivered in Kolkata within 24 hours."),
            ("Rupesh Bhagat", "Kundahit Bazaar to New Town Kolkata", "Smooth transit across NH-19. Sealed container truck protected everything from rain and dust. Excellent service!"),
            ("Praveen Soren", "Block Chowk Kundahit to Howrah", "Reasonable rates, professional crating of our electronics, and prompt delivery. Highly recommended for moves to West Bengal.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Kundahit to Kolkata?", "The highway route spans approximately 240 km via Asansol, Durgapur, and NH-19. Driving duration is roughly 5 to 6 hours. Door-to-door relocation is completed within 24 hours."),
            ("How do you manage the interstate border checkpost into West Bengal?", "Our commercial fleet carries all required interstate transport permits, e-way bills, and commercial documentation for quick border crossing."),
            ("What are the 2 BHK household moving charges from Kundahit to Kolkata?", "A standard 2 BHK apartment relocation costs between ₹15,500 and ₹22,000, covering full 5-layer packing, loading, transport, and unloading."),
            ("Can you transport cars and two-wheelers to Kolkata?", "Yes, we transport bikes inside secure container trucks and cars via dedicated enclosed carriers with door pickup and delivery."),
            ("Is transit insurance provided for moves to West Bengal?", "Yes, comprehensive goods-in-transit insurance coverage is provided to cover loss or damage during highway transit.")
        ]
    },
    {
        "id": 13,
        "slug": "kundahit-to-patna-packers-and-movers",
        "origin": "Kundahit",
        "dest": "Patna",
        "title": "Packers and Movers Kundahit to Patna | Interstate Bihar Relocation",
        "desc": "Trusted packers and movers from Kundahit to Patna. 330 km express transit via Jamtara, Deoghar & NH-33, 5-layer packing, household moving, vehicle carrier, door-to-door delivery.",
        "keywords": "kundahit to patna packers and movers, packers and movers kundahit to patna, house shifting kundahit to patna, jamtara to patna movers, car transport kundahit to patna, safe movers patna",
        "distance": "330 km",
        "duration": "7.5 to 8.5 hours",
        "route_desc": "State Highway to Jamtara and Deoghar, then northwest via Banka, Bhagalpur, and NH-33 into Patna",
        "origin_locality": "Kundahit Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "dest_locality": "Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur Cantt, Rajendra Nagar, Anisabad",
        "pricing_1bhk": "₹11,500 - ₹16,500",
        "pricing_2bhk": "₹16,500 - ₹23,500",
        "pricing_3bhk": "₹22,500 - ₹32,000",
        "pricing_villa": "₹30,000 - ₹45,000",
        "pricing_bike": "₹3,000 - ₹4,500",
        "pricing_car": "₹8,500 - ₹13,500",
        "local_focus": "Commercial traders, university students at Patna universities, administrative officers, and trading families shifting from Kundahit to Patna.",
        "reviews": [
            ("Anirban Mukherjee", "Kundahit to Bailey Road Patna", "Moved our 3 BHK household from Kundahit to Patna. The crew was very courteous and packed our TV and refrigerator with triple bubble wrapping. Delivered on schedule without a scratch."),
            ("Swati Roy", "Kundahit Bazaar to Kankarbagh Patna", "Flawless long-distance moving. Driver gave regular GPS updates along the highway. Everything was unpacked neatly in Kankarbagh."),
            ("Debabrata Das", "Block Chowk Kundahit to Danapur Patna", "Very reasonable pricing for 330 km transit. Sealed container truck ensured our furniture remained 100% clean.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kundahit to Patna?", "The route spans approximately 330 km via Deoghar and Bhagalpur. Driving duration is roughly 7.5 to 8.5 hours. Total door-to-door relocation is executed within 24 hours."),
            ("Can you deliver to residential colonies near Bailey Road and Kankarbagh?", "Yes, our delivery network manages municipal vehicle guidelines, local permits, and society clearances across Patna."),
            ("How do you protect fragile items during highway transit?", "We use 5-layer protective packing with heavy air bubble wrap, corrugated sheets, foam edge protectors, and tight stretch wrapping."),
            ("What are the 2 BHK shifting charges from Kundahit to Patna?", "A typical 2 BHK household move ranges between ₹16,500 and ₹23,500, all-inclusive of packing materials, loading, highway tolls, and unloading."),
            ("Do you provide car and bike carrier services to Patna?", "Yes, we transport two-wheelers inside closed containers and cars via dedicated hydraulic vehicle carriers.")
        ]
    },
    {
        "id": 14,
        "slug": "kundahit-to-delhi-packers-and-movers",
        "origin": "Kundahit",
        "dest": "Delhi NCR",
        "title": "Packers and Movers Kundahit to Delhi | Long-Distance National Relocation",
        "desc": "Expert packers and movers from Kundahit to Delhi NCR (Delhi, Noida, Gurgaon). 1,240 km express transit via NH-19 GT Road, 5-layer packing, car carrier, GPS container.",
        "keywords": "kundahit to delhi packers and movers, packers and movers kundahit to delhi, house shifting kundahit to delhi, kundahit to noida movers, gurgaon to kundahit packers, car transport kundahit delhi, national movers kundahit",
        "distance": "1,240 km",
        "duration": "23 to 27 hours",
        "route_desc": "Via Jamtara to Govindpur / NH-19 GT Road via Varanasi, Prayagraj, Kanpur, and Yamuna Expressway into Delhi NCR",
        "origin_locality": "Kundahit Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "dest_locality": "Delhi (Dwarka, Rohini, South Delhi), Noida, Greater Noida, Gurgaon (Cyber City, Golf Course Road), Faridabad",
        "pricing_1bhk": "₹18,500 - ₹27,000",
        "pricing_2bhk": "₹26,000 - ₹38,000",
        "pricing_3bhk": "₹36,000 - ₹54,000",
        "pricing_villa": "₹50,000 - ₹76,000",
        "pricing_bike": "₹5,000 - ₹7,500",
        "pricing_car": "₹14,000 - ₹22,000",
        "local_focus": "Defense officers, central government personnel, corporate executives, and students relocating 1,240 km from Kundahit to the Delhi National Capital Region.",
        "reviews": [
            ("Capt. Abhishek Soren", "Kundahit to Delhi Cantt", "Shifted our household on defense transfer. Sealed container truck arrived with seal intact. Every piece of furniture and kitchenware was in pristine condition."),
            ("Sandeep Kumar Pal", "Kundahit Bazaar to Noida Sector 62", "Outstanding national relocation service! They custom-crated our 65-inch television and computer setup. Arrived in Noida right on schedule."),
            ("Pooja Mandal", "Block Chowk Kundahit to Gurgaon Cyber City", "Extremely professional team. Clear communication, live GPS tracking, and genuine pricing. Highly recommended.")
        ],
        "faqs": [
            ("How long does moving take from Kundahit to Delhi NCR?", "The distance is approximately 1,240 km via NH-19 and Yamuna Expressway. Driving time is roughly 23 to 27 hours. Consignments are delivered within 3 to 4 days of loading."),
            ("How do you safeguard goods during long-distance 1,240 km transit?", "We use dedicated sealed container trucks with zero transshipment, 5-layer industrial packaging, and ratchet belt securing to eliminate shifting."),
            ("What are the 2 BHK shifting charges from Kundahit to Delhi NCR?", "A standard 2 BHK household relocation costs between ₹26,000 and ₹38,000, covering full export-quality packing, transit freight, and unloading."),
            ("Can you transport my car or SUV safely to Delhi/Gurgaon?", "Yes, cars are transported on specialized enclosed multi-car trailers with hydraulic loading ramps and all-risk transit insurance."),
            ("Are your bills approved for corporate and central government transfer claims?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved transporter providing GST invoices and bilty notes recognized across India.")
        ]
    },
    {
        "id": 15,
        "slug": "kundahit-to-suri-packers-and-movers",
        "origin": "Kundahit",
        "dest": "Suri",
        "title": "Packers and Movers Kundahit to Suri | Birbhum Border Express Moving",
        "desc": "Dependable packers and movers from Kundahit to Suri, Birbhum. 45 km transit via Rajanagar border, 5-layer packing, corporate & home relocations, vehicle parcel, fast delivery.",
        "keywords": "kundahit to suri packers and movers, packers and movers kundahit to suri, house shifting kundahit to suri, jamtara to birbhum movers, rajanagar packers kundahit, safe movers suri",
        "distance": "45 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "State Highway east crossing border at Rajanagar directly into Suri district headquarters of Birbhum",
        "origin_locality": "Kundahit Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "dest_locality": "Suri Town, Circuit House Road, Rabindrapally, Seharapara, Dangalpara, Suri Court Compound, Station Road",
        "pricing_1bhk": "₹4,200 - ₹6,500",
        "pricing_2bhk": "₹6,500 - ₹9,800",
        "pricing_3bhk": "₹9,800 - ₹14,500",
        "pricing_villa": "₹14,000 - ₹21,000",
        "pricing_bike": "₹1,200 - ₹2,000",
        "pricing_car": "₹3,200 - ₹5,000",
        "local_focus": "Commercial traders, government employees, teachers, and border families shifting between Kundahit and Suri town in Birbhum district.",
        "reviews": [
            ("Dr. Binod Kumar Pal", "Kundahit to Rabindrapally Suri", "Relocated from Kundahit to Suri. The team packed all delicate furniture and home belongings with great diligence. Delivered in Suri within 4 hours."),
            ("Sunil Kumar Soren", "Kundahit Bazaar to Dangalpara Suri", "Very reliable service. Heavy almirahs, double beds, and refrigerator reached safely without a single scratch across the Rajanagar border."),
            ("Prakash Chandra Ghosh", "Block Chowk Kundahit to Station Road Suri", "Prompt packing, polite workers, and transparent billing. Highly recommended for moves to Birbhum district.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kundahit to Suri?", "The highway route spans approximately 45 km via Rajanagar. Driving duration is roughly 1 to 1.5 hours. Delivery is completed on the same day within 4 to 5 hours."),
            ("Can your crew pack fragile kitchen crockeries and appliances safely?", "Yes, our team uses specialized crockery cartons, bubble wraps, and thermocol padding for complete protection."),
            ("What are the 2 BHK shifting charges from Kundahit to Suri?", "A standard 2 BHK household relocation costs between ₹6,500 and ₹9,800, all-inclusive of packing materials, transport, and unloading."),
            ("Can I ship my motorcycle from Kundahit to Suri?", "Yes, two-wheelers are securely packed and tied with ratchet belts inside our closed container truck for ₹1,200 to ₹2,000."),
            ("Do you provide transit insurance for moves to Birbhum?", "Yes, comprehensive transit insurance is provided to cover any unforeseen transit risks during highway travel.")
        ]
    },
    # Group 4: Outside Jharkhand to Kundahit (Routes 16–20)
    {
        "id": 16,
        "slug": "asansol-to-kundahit-packers-and-movers",
        "origin": "Asansol",
        "dest": "Kundahit",
        "title": "Packers and Movers Asansol to Kundahit | Border Inbound Relocation",
        "desc": "Trusted packers and movers from Asansol, West Bengal to Kundahit, Jamtara. 40 km express transit via Chittaranjan, 5-layer packing, home shifting, vehicle carrier, door delivery.",
        "keywords": "asansol to kundahit packers and movers, packers and movers asansol to kundahit, house shifting asansol to kundahit, asansol to jamtara movers, bengal to jharkhand packers, safe movers asansol",
        "distance": "40 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "Via Chittaranjan and Mihijam, crossing Ajay River north along State Highway directly into Kundahit block",
        "origin_locality": "Ushagram, Court More, Burnpur, Kalyanpur Housing, Asansol Station Road, Sen Raleigh Road, Chelidanga",
        "dest_locality": "Kundahit Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "pricing_1bhk": "₹4,200 - ₹6,500",
        "pricing_2bhk": "₹6,500 - ₹9,800",
        "pricing_3bhk": "₹9,800 - ₹14,500",
        "pricing_villa": "₹14,000 - ₹21,000",
        "pricing_bike": "₹1,200 - ₹2,000",
        "pricing_car": "₹3,200 - ₹5,000",
        "local_focus": "Returning industrial workers, ECL coal miners, railway staff, and families moving across the Bengal border into Kundahit block.",
        "reviews": [
            ("Manoranjan Pal", "Burnpur Asansol to Kundahit", "Shifted our household from Asansol back to Kundahit. Crew loaded carefully and completed delivery in Kundahit by afternoon. Zero scratches."),
            ("Pramila Devi Soren", "Ushagram Asansol to Kundahit Bazaar", "Handled our showcase, LED TV, and Godrej almirahs with extreme caution. Friendly and hardworking team."),
            ("Naveen Kumar Mandal", "Kalyanpur Asansol to Block Chowk Kundahit", "Very prompt service across the border. Fast permit clearance and reasonable charges.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Asansol to Kundahit?", "The highway route is approximately 40 km via Chittaranjan. Driving duration is roughly 1 to 1.5 hours. Total move takes 4 to 5 hours on the same day."),
            ("How do you manage the border crossing between West Bengal and Jharkhand?", "Our commercial vehicles have full national permits, e-way bills, and tax clearances for fast border crossing."),
            ("What are the 2 BHK moving charges from Asansol to Kundahit?", "A standard 2 BHK household relocation costs between ₹6,500 and ₹9,800 based on goods volume, floor heights, and packing specifications."),
            ("Can I ship my motorcycle from Asansol to Kundahit?", "Yes, two-wheelers are securely crated with bubble wrap and secured with ratchet belts inside our closed container truck for ₹1,200 to ₹2,000."),
            ("Do you provide transit insurance for moves from West Bengal?", "Yes, comprehensive transit insurance is available to safeguard all valuable furniture, appliances, and personal belongings.")
        ]
    },
    {
        "id": 17,
        "slug": "kolkata-to-kundahit-packers-and-movers",
        "origin": "Kolkata",
        "dest": "Kundahit",
        "title": "Packers and Movers Kolkata to Kundahit | Metro Inbound Relocation",
        "desc": "Expert packers and movers from Kolkata to Kundahit, Jamtara. 240 km transit via NH-19 & Asansol, 5-layer packing, household moving, vehicle carrier, door delivery.",
        "keywords": "kolkata to kundahit packers and movers, packers and movers kolkata to kundahit, house shifting kolkata to kundahit, kolkata to jamtara movers, car transport kolkata kundahit, safe movers kolkata",
        "distance": "240 km",
        "duration": "5 to 6 hours",
        "route_desc": "NH-19 northwest from Kolkata through Bardhaman, Durgapur, Asansol, then Chittaranjan into Kundahit block",
        "origin_locality": "Salt Lake, New Town, Rajarhat, South City, Behala, Howrah, Jadavpur, Ballygunge",
        "dest_locality": "Kundahit Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "pricing_1bhk": "₹10,500 - ₹15,500",
        "pricing_2bhk": "₹15,500 - ₹22,000",
        "pricing_3bhk": "₹21,000 - ₹30,000",
        "pricing_villa": "₹28,000 - ₹42,000",
        "pricing_bike": "₹2,800 - ₹4,200",
        "pricing_car": "₹7,500 - ₹12,000",
        "local_focus": "Returning professionals, retirees, university alumni, and families relocating from Kolkata back to Kundahit block.",
        "reviews": [
            ("Laxman Ghosh", "Salt Lake Kolkata to Kundahit Bazaar", "Shifted our shop goods and home items from Kolkata to Kundahit. Loaded in the morning and delivered safely by next day. Professional moving crew."),
            ("Sarita Soren", "New Town Kolkata to Kundahit", "Packed our complete 2 BHK apartment with sturdy cartons and air bubble sheets. Zero damage to our glass items."),
            ("Manoj Kumar Pal", "Howrah to Block Chowk Kundahit", "Honest quotation, polite workers, and sealed container truck. Highly satisfied with Shree Ashirwad Packers.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kolkata to Kundahit?", "The route covers about 240 km via NH-19 and Asansol. Driving duration is approximately 5 to 6 hours. Door-to-door relocation takes roughly 24 hours."),
            ("Can you pick up from residential colonies across Kolkata?", "Yes, our Kolkata team manages residential houses and apartment societies across Salt Lake, New Town, and South City."),
            ("How do you ensure wooden furniture remains scratch-free?", "We wrap all wooden surfaces in thick foam blankets, apply bubble cushioning around carved edges, and seal with tight stretch wrap."),
            ("What are the bike transport charges from Kolkata to Kundahit?", "Two-wheeler shifting costs between ₹2,800 and ₹4,200 including multi-layer packing and transport inside a closed container."),
            ("Is transit insurance provided for inbound moves from West Bengal?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 18,
        "slug": "patna-to-kundahit-packers-and-movers",
        "origin": "Patna",
        "dest": "Kundahit",
        "title": "Packers and Movers Patna to Kundahit | Inbound Bihar Moving",
        "desc": "Professional packers and movers from Patna to Kundahit, Jamtara. 330 km express transit via Bhagalpur, Deoghar & Jamtara, 5-layer packing, home & commercial shifting, vehicle carrier.",
        "keywords": "patna to kundahit packers and movers, packers and movers patna to kundahit, house shifting patna to kundahit, patna to jamtara movers, car transport patna to kundahit, safe movers patna",
        "distance": "330 km",
        "duration": "7.5 to 8.5 hours",
        "route_desc": "NH-33 east from Patna through Mokama, Bhagalpur, Banka, Deoghar, and Jamtara into Kundahit",
        "origin_locality": "Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur Cantt, Rajendra Nagar",
        "dest_locality": "Kundahit Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "pricing_1bhk": "₹11,500 - ₹16,500",
        "pricing_2bhk": "₹16,500 - ₹23,500",
        "pricing_3bhk": "₹22,500 - ₹32,000",
        "pricing_villa": "₹30,000 - ₹45,000",
        "pricing_bike": "₹3,000 - ₹4,500",
        "pricing_car": "₹8,500 - ₹13,500",
        "local_focus": "Returning executives, university alumni, and families shifting household belongings from Patna to Kundahit block.",
        "reviews": [
            ("Prabir Chatterjee", "Bailey Road Patna to Kundahit", "Exceptional service! They protected our sofa and 55-inch television with multiple layers of bubble wrap. Unloaded at Kundahit without a blemish."),
            ("Shyamali Roy", "Kankarbagh Patna to Kundahit Bazaar", "Smooth transit along NH-33. The vehicle arrived right on schedule, and their crew reassembled our bedroom furniture quickly."),
            ("Ashim Halder", "Danapur Patna to Block Chowk Kundahit", "Shifted our 2 BHK apartment and Honda Activa. Flawless execution and reliable customer assistance throughout.")
        ],
        "faqs": [
            ("What is the time required to shift household goods from Patna to Kundahit?", "The highway distance is 330 km. Dedicated container vehicles complete the drive in 7.5 to 8.5 hours. Total move takes roughly 24 hours door-to-door."),
            ("Can you collect goods from residential areas across Patna?", "Yes, our Patna team utilizes feeder vans to navigate city lanes, smoothly transferring cargo to linehaul container trucks."),
            ("How do you ensure wooden furniture remains undamaged?", "We wrap all wooden surfaces in thick foam blankets, apply bubble cushioning around carved edges, and seal with tight stretch wrap to prevent dust and scratches."),
            ("What are the bike transport charges from Patna to Kundahit?", "Two-wheeler shifting costs between ₹3,000 and ₹4,500 based on engine cc and model, including multi-layer packing and transport inside a closed container."),
            ("Is transit insurance provided for inbound moves from Bihar?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 19,
        "slug": "delhi-to-kundahit-packers-and-movers",
        "origin": "Delhi NCR",
        "dest": "Kundahit",
        "title": "Packers and Movers Delhi to Kundahit | Long-Distance National Moving",
        "desc": "Trusted packers and movers from Delhi NCR (Delhi, Noida, Gurgaon) to Kundahit, Jamtara. 1,240 km express transit via Yamuna Expressway & NH-19, 5-layer packing, car carrier, GPS tracking.",
        "keywords": "delhi to kundahit packers and movers, packers and movers delhi to kundahit, house shifting delhi to kundahit, noida to kundahit movers, gurgaon to jamtara packers, car transport delhi to kundahit, national movers delhi",
        "distance": "1,240 km",
        "duration": "23 to 27 hours",
        "route_desc": "Yamuna Expressway / Agra-Lucknow Expressway to NH-19 GT Road through Kanpur, Prayagraj, Varanasi, Govindpur, and Jamtara into Kundahit",
        "origin_locality": "Delhi (Dwarka, Rohini, South Delhi), Noida, Greater Noida, Gurgaon, Faridabad",
        "dest_locality": "Kundahit Main Market, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "pricing_1bhk": "₹18,500 - ₹27,000",
        "pricing_2bhk": "₹26,000 - ₹38,000",
        "pricing_3bhk": "₹36,000 - ₹54,000",
        "pricing_villa": "₹50,000 - ₹76,000",
        "pricing_bike": "₹5,000 - ₹7,500",
        "pricing_car": "₹14,000 - ₹22,000",
        "local_focus": "Returning defense personnel, central government officers, and corporate professionals relocating 1,240 km from Delhi NCR back to Kundahit.",
        "reviews": [
            ("Subedar R. N. Marandi", "Delhi Cantt to Kundahit", "Retired from defense service and shifted all household goods 1,240 km back to our native home in Kundahit. Flawless packing and 100% undamaged delivery."),
            ("Amitabh Verma", "Gurgaon Sector 54 to Kundahit Bazaar", "Extremely professional crating of our electronic appliances and furniture. Outstanding interstate service!"),
            ("Seema Kumari Pal", "Dwarka Sector 12 to Block Chowk Kundahit", "Their team handled society gate permissions in Delhi and unloading in Kundahit flawlessly. Courteous, punctual, and genuine pricing.")
        ],
        "faqs": [
            ("How many days does transit take from Delhi NCR to Kundahit?", "The route covers 1,240 km. Dedicated container vehicles require 23 to 27 hours of driving time. Consignments are typically delivered within 3 to 4 days of pickup."),
            ("Can you pick up from multiple locations in Delhi NCR (e.g. Gurgaon office + Noida home)?", "Yes, we can organize split pickups across Delhi, Noida, or Gurgaon before locking the container for direct dispatch to Kundahit."),
            ("How do you protect delicate electronics like 65-inch OLED TVs and sound systems?", "We pack screens with high-density thermocol sheet guards, anti-static bubble film, and custom heavy-duty corrugated wooden crates for fail-safe protection."),
            ("What are the 2 BHK moving charges from Delhi to Kundahit?", "A standard 2 BHK household relocation costs between ₹26,000 and ₹38,000, covering full export-quality packing, transport, and unloading."),
            ("Are your bills approved for government transfer claims?", "Yes, we provide official GST invoices and bilty notes recognized by all government departments and PSUs.")
        ]
    },
    {
        "id": 20,
        "slug": "suri-to-kundahit-packers-and-movers",
        "origin": "Suri",
        "dest": "Kundahit",
        "title": "Packers and Movers Suri to Kundahit | Birbhum Inbound Moving",
        "desc": "Expert packers and movers from Suri, Birbhum to Kundahit, Jamtara. 45 km transit via Rajanagar border, 5-layer packing, household moving, vehicle parcel, door delivery.",
        "keywords": "suri to kundahit packers and movers, packers and movers suri to kundahit, house shifting suri to kundahit, birbhum to jamtara movers, car transport suri kundahit, safe movers suri",
        "distance": "45 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "State Highway west from Suri through Rajanagar border directly into Kundahit block",
        "origin_locality": "Suri Town, Circuit House Road, Rabindrapally, Seharapara, Dangalpara, Suri Court Compound, Station Road",
        "dest_locality": "Kundahit Bazaar, Block Chowk, BDO Campus, Thana Road, CHC Hospital area, Amba, Bagdah",
        "pricing_1bhk": "₹4,200 - ₹6,500",
        "pricing_2bhk": "₹6,500 - ₹9,800",
        "pricing_3bhk": "₹9,800 - ₹14,500",
        "pricing_villa": "₹14,000 - ₹21,000",
        "pricing_bike": "₹1,200 - ₹2,000",
        "pricing_car": "₹3,200 - ₹5,000",
        "local_focus": "Returning professionals, border traders, and families moving from Suri town back to Kundahit block in Jamtara district.",
        "reviews": [
            ("Dipankar Bannerjee", "Rabindrapally Suri to Kundahit", "Shifted our household from Suri to Kundahit. Loaded carefully and delivered safely within 4 hours. Professional moving crew."),
            ("Pritam Mandal", "Seharapara Suri to Kundahit Bazaar", "Packed our complete 2 BHK apartment with sturdy cartons and air bubble sheets. Zero damage to our glass items."),
            ("Sanjoy Roy", "Dangalpara Suri to Block Chowk Kundahit", "Honest quotation, polite workers, and sealed container truck. Highly satisfied with Shree Ashirwad Packers.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Suri to Kundahit?", "The route covers about 45 km via Rajanagar. Driving duration is approximately 1 to 1.5 hours. Door-to-door relocation takes roughly 4 to 5 hours on the same day."),
            ("Can your crew pack delicate kitchen appliances and glass crockeries in Suri?", "Yes, our Suri team utilizes dedicated crockery boxes, multi-layer bubble wrap, and thermocol packing for sensitive chinaware and micro-appliances."),
            ("Do you provide motorcycle transport from Suri to Kundahit?", "Yes, we transport bikes and scooters safely fastened inside closed container trucks with zero road driving between towns."),
            ("What are the 2 BHK shifting charges from Suri to Kundahit?", "Standard 2 BHK relocation ranges between ₹6,500 and ₹9,800, all-inclusive of packing materials, loading, road permits, tolls, and unloading in Kundahit."),
            ("Are your bills eligible for government and corporate relocation reimbursement?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved logistics provider issuing official GST invoices and bilty notes.")
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
 * Group: Route {r["id"]} - Kundahit Corridor
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
            "streetAddress": "Main Road, Near Block Development Office, Kundahit Bazar",
            "addressLocality": "Kundahit, Jamtara",
            "addressRegion": "Jharkhand",
            "postalCode": "815359",
            "addressCountry": "IN"
        }},
        "geo": {{
            "@type": "GeoCoordinates",
            "latitude": 23.9700,
            "longitude": 87.1600
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
                Shree Ashirwad Packers and Movers is an IBA-approved logistics provider trusted by block administration offices, banks, rural health clinics, schools, and private enterprises across Jamtara district and nationwide.
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
                        The transit corridor connecting {origin} and {dest} spans approximately {r["distance"]} via {r["route_desc"]}. To avoid peak morning commuter congestion and border checkpost delays, our operations team coordinates early morning departure schedules between 6:30 AM and 8:30 AM.
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
    print(f"Generating {len(ROUTES)} Kundahit pages...")
    for r in ROUTES:
        path = os.path.join(PAGES_DIR, f"{r['slug']}.php")
        code = generate_page(r)
        with open(path, "w", encoding="utf-8") as f:
            f.write(code)
        print(f"Created: {r['slug']}.php ({len(code)} bytes)")

if __name__ == "__main__":
    main()
