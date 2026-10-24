import os
import re

PAGES_DIR = r"d:\shreeashirwadpackers\pages"

ROUTES = [
    # Group 1: Kurdeg to Inside Jharkhand (Routes 1–5)
    {
        "id": 1,
        "slug": "kurdeg-to-ranchi-packers-and-movers",
        "origin": "Kurdeg",
        "dest": "Ranchi",
        "title": "Packers and Movers Kurdeg to Ranchi | Fast Capital Relocation",
        "desc": "Trusted packers and movers from Kurdeg, Simdega to Ranchi. 185 km express transit via Simdega/NH-143, 5-layer packing, home shifting, car & bike parcel, full insurance.",
        "keywords": "kurdeg to ranchi packers and movers, packers and movers kurdeg to ranchi, house shifting kurdeg to ranchi, simdega to ranchi movers, car transport kurdeg to ranchi, bike parcel kurdeg ranchi, safe movers kurdeg",
        "distance": "185 km",
        "duration": "4.5 to 5 hours",
        "route_desc": "Kurdeg-Simdega Road connecting to NH-143 via Kolebira, Torpa, and Khunti directly into Ranchi",
        "origin_locality": "Kurdeg Bazar, BDO Office Road, Kurdeg Thana, CHC Hospital area, Kinkel, Dumerbahar, Mahabuang, Chhattisgarh Border Road",
        "dest_locality": "Harmu, Morabadi, Bariatu, Doranda, Kanke Road, Lalpur, Hinoo, Ratu Road, Dhurwa, Namkum",
        "pricing_1bhk": "₹7,500 - ₹11,500",
        "pricing_2bhk": "₹11,500 - ₹16,500",
        "pricing_3bhk": "₹16,500 - ₹24,000",
        "pricing_villa": "₹22,000 - ₹34,000",
        "pricing_bike": "₹2,200 - ₹3,500",
        "pricing_car": "₹5,500 - ₹8,500",
        "local_focus": "Government officers from Kurdeg block development office, rural school teachers, banking executives, and families relocating to Ranchi for premier higher education and advanced healthcare.",
        "reviews": [
            ("Pankaj Kumar Kerketta", "Kurdeg Bazar to Harmu Ranchi", "Moved our complete family household to Ranchi. The team arrived on time in Kurdeg, packed all our glassware and wooden furniture with 5-layer bubble protection, and delivered to Harmu without a single scratch."),
            ("Dr. Rajeshwar Soren", "Kurdeg CHC to Bariatu Ranchi", "Shifted our medical clinic equipment and home belongings. Their enclosed container truck protected all sensitive instruments from highway dust across the 185 km trip. Outstanding service!"),
            ("Anand Minz", "Kinkel Kurdeg to Morabadi Ranchi", "Transported my Royal Enfield motorcycle and 2 BHK household items. Delivered on schedule with genuine GST billing that was immediately reimbursed by my department.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Kurdeg to Ranchi?", "The road distance is approximately 185 km via Simdega, Kolebira, and Khunti along NH-143. Our closed container trucks complete the journey in 4.5 to 5 hours. Total shifting from morning loading in Kurdeg to room placement in Ranchi takes 8 to 10 hours on the same day."),
            ("How do you manage rural road access and narrow lanes in Kurdeg block?", "Our fleet includes versatile intermediate container vehicles and feeder pickup vans designed for rural roads in Kurdeg, Kinkel, and Mahabuang, ensuring safe doorstep collection without transshipment risk."),
            ("Do you provide transit insurance for household goods from Kurdeg?", "Yes, we provide 100% comprehensive transit insurance underwritten by leading nationalized insurance companies, protecting all furniture, home electronics, and kitchenware against transit risks."),
            ("What are the standard charges for shifting a 2 BHK home from Kurdeg to Ranchi?", "A standard 2 BHK household relocation typically costs between ₹11,500 and ₹16,500, covering premium 5-layer packing, container truck freight, skilled loading, unloading, and furniture assembly."),
            ("Can you move motorcycles and scooters safely from Kurdeg to Ranchi?", "Yes, two-wheelers are wrapped with heavy bubble film, secured with foam padding, and anchored using industrial ratchet straps inside our closed container truck for ₹2,200 to ₹3,500.")
        ]
    },
    {
        "id": 2,
        "slug": "kurdeg-to-simdega-packers-and-movers",
        "origin": "Kurdeg",
        "dest": "Simdega",
        "title": "Packers and Movers Kurdeg to Simdega | Local District Shifting",
        "desc": "Reliable packers and movers from Kurdeg to Simdega town. 42 km local express transit, 5-layer packing, domestic shifting, collectorate & court transfers, same-day delivery.",
        "keywords": "kurdeg to simdega packers and movers, packers and movers kurdeg to simdega, house shifting kurdeg to simdega, local movers simdega district, rural movers kurdeg, safe packers kurdeg",
        "distance": "42 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "Kurdeg-Simdega Road connecting Kurdeg block directly into Simdega urban centre and Collectorate campus",
        "origin_locality": "Kurdeg Main Market, BDO Campus, Kurdeg Thana, Kinkel, Mahabuang, Dumerbahar",
        "dest_locality": "Simdega Main Road, Collectorate Road, Albert Ekka Stadium area, Saldega, Samtoli, Khuntitoli, Church Road",
        "pricing_1bhk": "₹4,000 - ₹6,500",
        "pricing_2bhk": "₹6,500 - ₹9,800",
        "pricing_3bhk": "₹9,500 - ₹14,000",
        "pricing_villa": "₹13,500 - ₹19,500",
        "pricing_bike": "₹1,200 - ₹2,000",
        "pricing_car": "₹3,000 - ₹4,800",
        "local_focus": "Local intra-district household and administrative relocations from Kurdeg rural block to Simdega district headquarters, courts, educational institutions, and police lines.",
        "reviews": [
            ("Suresh Kumar Bhagat", "Kurdeg to Saldega Simdega", "Shifted our 2 BHK residence within the district. The crew reached Kurdeg promptly at 8 AM, packed everything neatly, and completed unloading in Simdega by early afternoon. Very polite team."),
            ("Sister Mary Grace", "Kurdeg Mission to Church Road Simdega", "Handled institutional furniture, books, and delicate electronics with absolute care. Zero damage and quick setup at our new location."),
            ("Bipin Bihari Sahu", "BDO Office Kurdeg to Collectorate Simdega", "Relocated on official transfer. Official GST invoice provided for seamless government reimbursement. Highly recommended service in Simdega district.")
        ],
        "faqs": [
            ("How long does local shifting take from Kurdeg to Simdega town?", "The distance is 42 km along the main district road. Driving duration is roughly 1 to 1.5 hours. Complete packing, transit, unloading, and furniture positioning are completed within 4 to 5 hours on the same day."),
            ("What are the rates for a 1 BHK or 2 BHK local move to Simdega?", "Local 1 BHK shifting starts from ₹4,000, while a typical 2 BHK household relocation costs between ₹6,500 and ₹9,800 depending on total goods volume and floor access."),
            ("Do you bring packing supplies directly to Kurdeg village homes?", "Yes, our moving truck brings fresh bubble rolls, 5-ply corrugated cartons, waterproof stretch film, and heavy adhesive tapes directly to your doorstep in Kurdeg."),
            ("Can you relocate two-wheelers locally from Kurdeg to Simdega?", "Yes, bikes and scooters are safely wrapped with scratch-resistant foam covers and transported in our closed container for ₹1,200 to ₹2,000."),
            ("Is same-day pickup and delivery guaranteed within Simdega district?", "Yes, 100% guaranteed same-day completion for all relocations between Kurdeg and Simdega town.")
        ]
    },
    {
        "id": 3,
        "slug": "kurdeg-to-gumla-packers-and-movers",
        "origin": "Kurdeg",
        "dest": "Gumla",
        "title": "Packers and Movers Kurdeg to Gumla | Safe Inter-District Shifting",
        "desc": "Professional packers and movers from Kurdeg to Gumla. 115 km express transit via Simdega & Palkot/NH-143, 5-layer packing, household & administrative relocations, car carrier, bike parcel.",
        "keywords": "kurdeg to gumla packers and movers, packers and movers kurdeg to gumla, house shifting kurdeg to gumla, simdega to gumla movers, palkot packers gumla, safe interdistrict moving kurdeg",
        "distance": "115 km",
        "duration": "2.5 to 3 hours",
        "route_desc": "Kurdeg to Simdega connecting to NH-143 north through Palkot and Basia into Gumla district headquarters",
        "origin_locality": "Kurdeg Main Market, BDO Campus, Kurdeg Thana, Kinkel, Dumerbahar, Mahabuang",
        "dest_locality": "Gumla Main Road, DSP Road, Piska, Sisai Road, Tower Chowk, Danda More, Kotwali, Vikas Nagar",
        "pricing_1bhk": "₹6,500 - ₹9,800",
        "pricing_2bhk": "₹9,800 - ₹14,500",
        "pricing_3bhk": "₹14,000 - ₹20,500",
        "pricing_villa": "₹19,000 - ₹28,000",
        "pricing_bike": "₹2,000 - ₹3,000",
        "pricing_car": "₹4,800 - ₹7,500",
        "local_focus": "Inter-district government transfers, banking officers (SBI/JRGB), administrative staff, and families moving north from Simdega district to Gumla.",
        "reviews": [
            ("Manoj Kumar Baitha", "Kurdeg to DSP Road Gumla", "Transferred from Kurdeg block to Gumla. Shree Ashirwad provided heavy-duty cartons, expert bubble packing, and delivered our household goods intact within 6 hours."),
            ("Anita Kujur", "Kurdeg Bazar to Tower Chowk Gumla", "Our refrigerator, TV, and crockery were packed with multiple protective layers. Delivered safely without a scratch. Highly satisfied."),
            ("Rameshwar Prasad", "Kinkel Kurdeg to Sisai Road Gumla", "Very cooperative and well-mannered shifting staff. Clean container truck and prompt reassembly of wooden beds.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Kurdeg to Gumla?", "The road distance is approximately 115 km via Simdega and Palkot on NH-143. Driving time is roughly 2.5 to 3 hours. The entire relocation is completed on the same day within 6 to 8 hours."),
            ("Can you relocate fragile kitchenware and appliances safely?", "Yes, we use customized crockery boxes, thermocol cushioning, and high-density air bubble wrap to safeguard glassware and home appliances against road vibrations."),
            ("Do you provide car and two-wheeler carrier services to Gumla?", "Yes, motorcycles are fastened with ratchet straps inside closed containers, and cars are transported on dedicated vehicle carriers."),
            ("What are the 2 BHK shifting charges from Kurdeg to Gumla?", "A standard 2 BHK household relocation costs between ₹9,800 and ₹14,500, all-inclusive of packing materials, vehicle transport, loading, and unloading."),
            ("Are your shifting bills approved for government transfer claims?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved transporter. We issue GST invoices and consignment notes fully valid for official reimbursement.")
        ]
    },
    {
        "id": 4,
        "slug": "kurdeg-to-jamshedpur-packers-and-movers",
        "origin": "Kurdeg",
        "dest": "Jamshedpur",
        "title": "Packers and Movers Kurdeg to Jamshedpur | Industrial Steel City Moving",
        "desc": "Trusted packers and movers from Kurdeg to Jamshedpur (Tatanagar). 280 km transit via Simdega, Kolebira & Chaibasa, 5-layer packing, household & corporate relocations, car & bike parcel.",
        "keywords": "kurdeg to jamshedpur packers and movers, packers and movers kurdeg to jamshedpur, house shifting kurdeg to jamshedpur, tatanagar movers kurdeg, car transport kurdeg jamshedpur, steel city packers",
        "distance": "280 km",
        "duration": "6.5 to 7 hours",
        "route_desc": "Kurdeg via Simdega, Kolebira, Chaibasa, and NH-220 into Jamshedpur urban centres and Telco/Bistupur",
        "origin_locality": "Kurdeg Bazar, BDO Office Road, Kurdeg Thana, CHC Hospital area, Kinkel, Dumerbahar",
        "dest_locality": "Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Baridih, Mango, Golmuri, Adityapur Industrial Area",
        "pricing_1bhk": "₹9,500 - ₹14,500",
        "pricing_2bhk": "₹14,000 - ₹21,000",
        "pricing_3bhk": "₹20,000 - ₹29,000",
        "pricing_villa": "₹28,000 - ₹40,000",
        "pricing_bike": "₹2,800 - ₹4,200",
        "pricing_car": "₹7,500 - ₹12,000",
        "local_focus": "Relocating families, Tata Steel / vendor industrial workers, technical supervisors, and students moving from Kurdeg block to the industrial hub of Jamshedpur.",
        "reviews": [
            ("Hemant Kumar Singh", "Kurdeg to Telco Colony Jamshedpur", "Relocated our home from Kurdeg to Jamshedpur. The team arrived on time, packed all electronics with premium materials, and delivered next morning in Telco. Flawless execution."),
            ("Pooja Kumari", "Kurdeg Bazar to Kadma Jamshedpur", "Transported our 2 BHK apartment goods and scooty. Excellent handling, zero damage, and clear communication throughout the move."),
            ("Sunil Gope", "Mahabuang Kurdeg to Adityapur Jamshedpur", "Very professional service. Sealed container truck ensured our furniture stayed clean throughout the 280 km journey.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kurdeg to Jamshedpur?", "The route covers approximately 280 km via Simdega, Kolebira, and Chaibasa. Driving duration is roughly 6.5 to 7 hours. Door-to-door relocation is completed within 24 hours."),
            ("Do you provide door delivery in residential colonies like Telco and Kadma?", "Yes, our Jamshedpur delivery crew manages residential permissions, society gate passes, and room positioning across Bistupur, Sakchi, Kadma, and Telco."),
            ("How do you protect delicate electronics like LED TVs and computers?", "We use multi-layer bubble film, corner guards, thermocol sheet lining, and heavy corrugated wooden crates for sensitive electronics."),
            ("What are the rates for a 2 BHK home shift to Jamshedpur?", "A standard 2 BHK household relocation ranges between ₹14,000 and ₹21,000, covering full packing, transport, insurance documentation, and unloading."),
            ("Can you transport cars and bikes safely to Jamshedpur?", "Yes, we provide dedicated two-wheeler parcel packing and car carrier transport with door-to-door pickup and delivery.")
        ]
    },
    {
        "id": 5,
        "slug": "kurdeg-to-bokaro-packers-and-movers",
        "origin": "Kurdeg",
        "dest": "Bokaro",
        "title": "Packers and Movers Kurdeg to Bokaro | Steel City Relocation",
        "desc": "Expert packers and movers from Kurdeg to Bokaro Steel City. 295 km transit via Simdega, Ranchi Ring Road & NH-320, 5-layer packing, household moving, vehicle parcel, complete insurance.",
        "keywords": "kurdeg to bokaro packers and movers, packers and movers kurdeg to bokaro, house shifting kurdeg to bokaro, bokaro steel city movers, car transport kurdeg to bokaro, safe packers kurdeg",
        "distance": "295 km",
        "duration": "6.5 to 7.5 hours",
        "route_desc": "Kurdeg via Simdega, Kolebira, Ranchi Ring Road, Ramgarh, and NH-320 directly into Bokaro Steel City sectors",
        "origin_locality": "Kurdeg Main Market, BDO Campus, Kurdeg Thana, Kinkel, Mahabuang, Dumerbahar",
        "dest_locality": "Sector 1 to 12, Chas, Cooperative Colony, City Centre, Bokaro Thermal, Kurmidih",
        "pricing_1bhk": "₹10,000 - ₹15,000",
        "pricing_2bhk": "₹14,500 - ₹21,500",
        "pricing_3bhk": "₹21,000 - ₹30,000",
        "pricing_villa": "₹29,000 - ₹42,000",
        "pricing_bike": "₹3,000 - ₹4,500",
        "pricing_car": "₹8,000 - ₹13,000",
        "local_focus": "Steel plant employees (SAIL BSL), engineering contractors, bank personnel, and families shifting from Kurdeg to Bokaro Steel City.",
        "reviews": [
            ("Devendra Kumar Roy", "Kurdeg to Sector 4 Bokaro", "Shifted our 3 BHK household items. The packing crew was extremely careful with our glass dining table and large refrigerator. Delivered on schedule in Sector 4 without a blemish."),
            ("Vinay Tirkey", "Kurdeg Bazar to Chas Bokaro", "Smooth relocation experience. Container truck arrived sealed, and workers placed all heavy furniture in designated bedrooms."),
            ("Santosh Kumar Mahto", "Kinkel Kurdeg to Cooperative Colony Bokaro", "Transparent pricing, no hidden costs, and prompt customer assistance. Highly satisfied with Shree Ashirwad Packers.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Kurdeg to Bokaro?", "The distance is approximately 295 km via Simdega, Ranchi Ring Road, and Ramgarh. Driving duration is roughly 6.5 to 7.5 hours. Complete relocation is achieved within 24 hours of loading."),
            ("Can you deliver to SAIL quarters across Sectors 1 to 12 in Bokaro?", "Yes, our team is well-versed with Bokaro Steel City sector layouts and manages smooth delivery to all residential sectors and Chas colonies."),
            ("What packing materials are used for long-distance transport?", "We employ 5-tier industrial packaging including LDPE stretch film, multi-layer air bubble sheets, 5-ply kraft corrugated cardboard, and heavy-duty strapping."),
            ("What are the shifting charges for a 2 BHK home from Kurdeg to Bokaro?", "A standard 2 BHK household relocation costs between ₹14,500 and ₹21,500 depending on total volume, dismantling needs, and floor elevations."),
            ("Do you provide insurance coverage for household goods?", "Yes, comprehensive transit insurance is provided to cover any unforeseen transit risks during highway journey.")
        ]
    },
    # Group 2: Inside Jharkhand to Kurdeg (Routes 6–10)
    {
        "id": 6,
        "slug": "ranchi-to-kurdeg-packers-and-movers",
        "origin": "Ranchi",
        "dest": "Kurdeg",
        "title": "Packers and Movers Ranchi to Kurdeg | Inbound Capital Relocation",
        "desc": "Trusted packers and movers from Ranchi to Kurdeg, Simdega. 185 km transit via NH-143 & Kolebira, 5-layer packing, home shifting, car & bike parcel, door-to-door delivery.",
        "keywords": "ranchi to kurdeg packers and movers, packers and movers ranchi to kurdeg, house shifting ranchi to kurdeg, ranchi to simdega movers, car transport ranchi kurdeg, bike parcel ranchi kurdeg, safe movers ranchi",
        "distance": "185 km",
        "duration": "4.5 to 5 hours",
        "route_desc": "NH-143 from Ranchi via Khunti, Torpa, Kolebira, Simdega, turning onto Kurdeg Road",
        "origin_locality": "Harmu, Morabadi, Bariatu, Doranda, Kanke Road, Lalpur, Hinoo, Ratu Road, Dhurwa",
        "dest_locality": "Kurdeg Bazar, BDO Office Road, Kurdeg Thana, CHC Hospital area, Kinkel, Dumerbahar, Mahabuang",
        "pricing_1bhk": "₹7,500 - ₹11,500",
        "pricing_2bhk": "₹11,500 - ₹16,500",
        "pricing_3bhk": "₹16,500 - ₹24,000",
        "pricing_villa": "₹22,000 - ₹34,000",
        "pricing_bike": "₹2,200 - ₹3,500",
        "pricing_car": "₹5,500 - ₹8,500",
        "local_focus": "Returning families, appointed block development officers, medical doctors joining Kurdeg CHC, teachers, and banking professionals moving from Ranchi to Kurdeg.",
        "reviews": [
            ("Dr. Alok Kumar Das", "Bariatu Ranchi to Kurdeg CHC", "Posted as medical officer to Kurdeg. Shree Ashirwad loaded everything in Ranchi in the morning and safely delivered to my quarters in Kurdeg by evening. Perfect service!"),
            ("Shashi Bhushan Roy", "Doranda Ranchi to Kurdeg Bazar", "Shifted our family ancestral home belongings from Ranchi to Kurdeg. Their sealed container truck protected everything from rain and dust."),
            ("Pramod Kumar Toppo", "Harmu Ranchi to Kinkel Kurdeg", "Very prompt and professional moving team. Handled our glass showcase and refrigerator with extreme care.")
        ],
        "faqs": [
            ("How long does moving take from Ranchi to Kurdeg?", "The route covers about 185 km via Khunti and Simdega on NH-143. Driving duration is roughly 4.5 to 5 hours. Total shifting is completed on the same day within 8 to 10 hours."),
            ("Can your truck reach interior villages and rural roads around Kurdeg?", "Yes, we operate medium-sized container vehicles specifically suited for rural roads in Kurdeg, Kinkel, and Mahabuang, ensuring safe door-to-door delivery."),
            ("What are the 2 BHK shifting charges from Ranchi to Kurdeg?", "A typical 2 BHK household relocation ranges between ₹11,500 and ₹16,500, including packing materials, vehicle transport, loading, and unloading."),
            ("Can I transport my bike or scooter from Ranchi to Kurdeg?", "Yes, two-wheelers are securely crated with bubble wrap and secured with ratchet belts inside our closed container truck for ₹2,200 to ₹3,500."),
            ("Do you provide itemized bills for government transfer claims?", "Yes, we provide 100% audit-compliant GST invoices, consignment notes, and itemized packing lists approved by all government departments and PSUs.")
        ]
    },
    {
        "id": 7,
        "slug": "simdega-to-kurdeg-packers-and-movers",
        "origin": "Simdega",
        "dest": "Kurdeg",
        "title": "Packers and Movers Simdega to Kurdeg | Local Intra-District Moving",
        "desc": "Professional packers and movers from Simdega town to Kurdeg block. 42 km local express transit, 5-layer packing, domestic & office shifting, same-day delivery.",
        "keywords": "simdega to kurdeg packers and movers, packers and movers simdega to kurdeg, house shifting simdega to kurdeg, local movers simdega, kurdeg block movers, safe packers simdega",
        "distance": "42 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "Simdega-Kurdeg Road from district headquarters directly into Kurdeg block and market centre",
        "origin_locality": "Simdega Town, Collectorate Road, Albert Ekka Chowk, Saldega, Samtoli, Khuntitoli",
        "dest_locality": "Kurdeg Bazar, Block Development Office, Thana Chowk, Kinkel, Mahabuang, Dumerbahar",
        "pricing_1bhk": "₹4,000 - ₹6,500",
        "pricing_2bhk": "₹6,500 - ₹9,800",
        "pricing_3bhk": "₹9,500 - ₹14,000",
        "pricing_villa": "₹13,500 - ₹19,500",
        "pricing_bike": "₹1,200 - ₹2,000",
        "pricing_car": "₹3,000 - ₹4,800",
        "local_focus": "Local intra-district transfers of administrative staff, police personnel, healthcare teams, and retail suppliers shifting from Simdega district headquarters into Kurdeg.",
        "reviews": [
            ("Rajendra Prasad", "Simdega Town to Kurdeg Bazar", "Shifted our grocery shop inventory and household items. The crew was fast, polite, and handled all heavy goods with dollies. Very reasonable cost."),
            ("Sister Theresa", "Samtoli Simdega to Kurdeg Mission", "Excellent relocation service. Their workers packed all cupboards, books, and kitchen appliances neatly. Zero damage."),
            ("Subodh Kumar", "Saldega Simdega to Kinkel Kurdeg", "Completed moving within 4 hours total. Punctual, efficient, and careful team. Highly recommended.")
        ],
        "faqs": [
            ("How much time does shifting take from Simdega to Kurdeg?", "Driving time across the 42 km stretch is roughly 1 to 1.5 hours. Complete door-to-door relocation is finished within 4 to 5 hours on the same day."),
            ("What is the cost of moving a 1 BHK or 2 BHK home to Kurdeg?", "A 1 BHK move costs ₹4,000 to ₹6,500, while a 2 BHK relocation costs between ₹6,500 and ₹9,800 based on total inventory volume."),
            ("Do you supply bubble wrap and packing cartons in Simdega?", "Yes, our team brings virgin bubble sheets, 5-ply cartons, and packing tape directly to your home in Simdega."),
            ("Can you relocate two-wheelers locally from Simdega to Kurdeg?", "Yes, bikes and scooters are safely wrapped with protective foam and transported in our closed truck for ₹1,200 to ₹2,000."),
            ("Is same-day pickup and delivery guaranteed?", "Yes, 100% guaranteed same-day completion for all intra-district relocations within Simdega district.")
        ]
    },
    {
        "id": 8,
        "slug": "gumla-to-kurdeg-packers-and-movers",
        "origin": "Gumla",
        "dest": "Kurdeg",
        "title": "Packers and Movers Gumla to Kurdeg | Inter-District Relocation",
        "desc": "Reliable packers and movers from Gumla to Kurdeg, Simdega. 115 km transit via NH-143 & Palkot, 5-layer packing, domestic shifting, car carrier, bike parcel, full insurance.",
        "keywords": "gumla to kurdeg packers and movers, packers and movers gumla to kurdeg, house shifting gumla to kurdeg, gumla to simdega movers, palkot packers kurdeg, safe movers gumla",
        "distance": "115 km",
        "duration": "2.5 to 3 hours",
        "route_desc": "NH-143 south from Gumla through Basia and Palkot to Simdega, connecting to Kurdeg Road",
        "origin_locality": "Gumla Main Road, DSP Road, Piska, Sisai Road, Tower Chowk, Danda More, Kotwali",
        "dest_locality": "Kurdeg Main Market, BDO Campus, Kurdeg Thana, Kinkel, Dumerbahar, Mahabuang",
        "pricing_1bhk": "₹6,500 - ₹9,800",
        "pricing_2bhk": "₹9,800 - ₹14,500",
        "pricing_3bhk": "₹14,000 - ₹20,500",
        "pricing_villa": "₹19,000 - ₹28,000",
        "pricing_bike": "₹2,000 - ₹3,000",
        "pricing_car": "₹4,800 - ₹7,500",
        "local_focus": "Inter-district government transfers, school teachers, medical officers, and trading families moving south from Gumla into Kurdeg block.",
        "reviews": [
            ("Umesh Kumar", "Gumla DSP Road to Kurdeg", "Transferred on government duty to Kurdeg. Shree Ashirwad handled the packing and delivery seamlessly. Everything arrived intact on the same day."),
            ("Meena Kumari", "Tower Chowk Gumla to Kurdeg Bazar", "Very courteous crew. They wrapped my washing machine and glass tables with multiple layers of bubble wrap. Great job!"),
            ("Satish Bhagat", "Sisai Road Gumla to Kinkel Kurdeg", "Reasonable rates, no hidden fees, and safe transit. Highly recommended for moves to Simdega district.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Gumla to Kurdeg?", "The route covers about 115 km via Palkot and Simdega along NH-143. Driving duration is approximately 2.5 to 3 hours. Complete shifting takes 6 to 8 hours on the same day."),
            ("Can you relocate fragile kitchen items and electronics safely?", "Yes, our team uses specialized crockery cartons, air bubble cushioning, and edge guards to ensure zero damage during highway transit."),
            ("What are the 2 BHK shifting charges from Gumla to Kurdeg?", "A typical 2 BHK household relocation costs between ₹9,800 and ₹14,500, covering full packing, transport, and unloading."),
            ("Do you transport motorcycles and scooters safely?", "Yes, two-wheelers are securely packed and tied with ratchet belts inside our closed container truck for ₹2,000 to ₹3,000."),
            ("Are your bills approved for government reimbursement?", "Yes, we provide official GST invoices and bilty notes fully eligible for government and bank employee transfer claims.")
        ]
    },
    {
        "id": 9,
        "slug": "jamshedpur-to-kurdeg-packers-and-movers",
        "origin": "Jamshedpur",
        "dest": "Kurdeg",
        "title": "Packers and Movers Jamshedpur to Kurdeg | Safe Inbound Relocation",
        "desc": "Trusted packers and movers from Jamshedpur (Tatanagar) to Kurdeg, Simdega. 280 km transit via Chaibasa & Kolebira, 5-layer packing, corporate & home shifting, vehicle carrier.",
        "keywords": "jamshedpur to kurdeg packers and movers, packers and movers jamshedpur to kurdeg, house shifting jamshedpur to kurdeg, tatanagar to simdega movers, car transport jamshedpur kurdeg, safe movers jamshedpur",
        "distance": "280 km",
        "duration": "6.5 to 7 hours",
        "route_desc": "NH-220 from Jamshedpur via Chaibasa, Kolebira, Simdega into Kurdeg",
        "origin_locality": "Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Baridih, Mango, Adityapur",
        "dest_locality": "Kurdeg Bazar, BDO Office Road, Kurdeg Thana, CHC Hospital area, Kinkel, Dumerbahar",
        "pricing_1bhk": "₹9,500 - ₹14,500",
        "pricing_2bhk": "₹14,000 - ₹21,000",
        "pricing_3bhk": "₹20,000 - ₹29,000",
        "pricing_villa": "₹28,000 - ₹40,000",
        "pricing_bike": "₹2,800 - ₹4,200",
        "pricing_car": "₹7,500 - ₹12,000",
        "local_focus": "Returning industrial workers, retired employees, and families relocating from steel city Jamshedpur back to native homes in Kurdeg block.",
        "reviews": [
            ("Ranjan Kumar Mahto", "Telco Jamshedpur to Kurdeg", "Retired from industrial service and shifted our complete 3 BHK home back to Kurdeg. Crew handled our heavy wooden furniture with immense care. Arrived next morning without a scratch."),
            ("Sunita Devi", "Kadma Jamshedpur to Kurdeg Bazar", "Packed all our crockery, refrigerator, and clothes in sturdy boxes. Unloaded in Kurdeg smoothly. Very satisfied."),
            ("Deepak Soren", "Sonari Jamshedpur to Mahabuang Kurdeg", "Safe bike transport and household shifting. Driver maintained constant contact throughout the journey.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Jamshedpur to Kurdeg?", "The highway route is approximately 280 km via Chaibasa and Kolebira. Driving duration is roughly 6.5 to 7 hours. Door-to-door relocation takes roughly 24 hours."),
            ("Can you pick up from gated societies in Telco and Bistupur?", "Yes, our Jamshedpur crew is experienced with society gate passes, elevator bookings, and cooperative society clearances."),
            ("How do you ensure wooden furniture remains scratch-free?", "We wrap all wooden surfaces in foam blankets, bubble wrap, and stretch film, securing them with tensioned ratchet straps inside the container."),
            ("What are the 2 BHK moving charges from Jamshedpur to Kurdeg?", "A standard 2 BHK household relocation costs between ₹14,000 and ₹21,000 based on goods volume and packing requirements."),
            ("Do you provide transit insurance for moves to Simdega district?", "Yes, comprehensive transit insurance is provided to cover any accidental risk or damage during highway transit.")
        ]
    },
    {
        "id": 10,
        "slug": "bokaro-to-kurdeg-packers-and-movers",
        "origin": "Bokaro",
        "dest": "Kurdeg",
        "title": "Packers and Movers Bokaro to Kurdeg | Reliable Shifting Services",
        "desc": "Professional packers and movers from Bokaro Steel City to Kurdeg. 295 km express transit via Ramgarh, Ranchi Ring Road & NH-143, 5-layer packing, home shifting, car & bike parcel.",
        "keywords": "bokaro to kurdeg packers and movers, packers and movers bokaro to kurdeg, house shifting bokaro to kurdeg, bokaro to simdega movers, car transport bokaro kurdeg, safe movers bokaro",
        "distance": "295 km",
        "duration": "6.5 to 7.5 hours",
        "route_desc": "NH-320 from Bokaro Steel City through Ramgarh, Ranchi Ring Road, NH-143 via Simdega into Kurdeg",
        "origin_locality": "Sector 1 to 12, Chas, Cooperative Colony, City Centre, Bokaro Thermal",
        "dest_locality": "Kurdeg Main Market, BDO Campus, Kurdeg Thana, Kinkel, Mahabuang, Dumerbahar",
        "pricing_1bhk": "₹10,000 - ₹15,000",
        "pricing_2bhk": "₹14,500 - ₹21,500",
        "pricing_3bhk": "₹21,000 - ₹30,000",
        "pricing_villa": "₹29,000 - ₹42,000",
        "pricing_bike": "₹3,000 - ₹4,500",
        "pricing_car": "₹8,000 - ₹13,000",
        "local_focus": "SAIL retired officers, bank staff, and native families relocating from Bokaro Steel City back to Kurdeg block.",
        "reviews": [
            ("Surendra Nath Mishra", "Sector 4 Bokaro to Kurdeg", "Shifted our family home back to our village in Kurdeg. The team was disciplined, fast, and packed our heavy appliances with utmost care."),
            ("Kavita Kumari", "Chas Bokaro to Kurdeg Bazar", "Next-day delivery within 24 hours total. Sealed container truck kept everything completely dust-free. Very pleased with their service."),
            ("Ajit Kumar Pandey", "Sector 6 Bokaro to Kinkel Kurdeg", "Official bill approved smoothly by our PSU employer. Perfect packing and very polite laborers.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Bokaro to Kurdeg?", "The route covers about 295 km via Ramgarh, Ranchi Ring Road, and Simdega. Driving duration is approximately 6.5 to 7.5 hours. Total relocation takes roughly 24 hours."),
            ("Do you handle relocations for SAIL employees from Bokaro sectors?", "Yes, we regularly service transfers from Bokaro Steel City to all Jharkhand districts, providing official IBA-approved bills for reimbursement."),
            ("How do you protect fragile home items during transit?", "We use 5-tier packaging defense including bubble wrap, heavy corrugated sheets, foam edge guards, and tight stretch wraps."),
            ("What are the rates for 2 BHK home shifting between Bokaro and Kurdeg?", "A standard 2 BHK apartment relocation ranges from ₹14,500 to ₹21,500 based on goods volume and floor elevations."),
            ("Can you move cars and bikes safely from Bokaro?", "Yes, we provide dedicated bike crating and car transport service using closed container vehicles, ensuring complete protection.")
        ]
    },
    # Group 3: Kurdeg to Outside Jharkhand (Routes 11–15)
    {
        "id": 11,
        "slug": "kurdeg-to-rourkela-packers-and-movers",
        "origin": "Kurdeg",
        "dest": "Rourkela",
        "title": "Packers and Movers Kurdeg to Rourkela | Cross-Border Steel City Moving",
        "desc": "Trusted packers and movers from Kurdeg to Rourkela, Odisha. 95 km express transit via Simdega & Birmitrapur/NH-143, 5-layer packing, home & corporate relocations, vehicle parcel, full insurance.",
        "keywords": "kurdeg to rourkela packers and movers, packers and movers kurdeg to rourkela, house shifting kurdeg to rourkela, simdega to rourkela movers, odisha border packers kurdeg, safe movers rourkela",
        "distance": "95 km",
        "duration": "2 to 2.5 hours",
        "route_desc": "Kurdeg to Simdega, connecting to NH-143 south through Birmitrapur border crossing directly into Rourkela, Odisha",
        "origin_locality": "Kurdeg Bazar, BDO Office Road, Kurdeg Thana, CHC Hospital area, Kinkel, Dumerbahar",
        "dest_locality": "Civil Township, Koel Nagar, Chhend Colony, Panposh, Udit Nagar, Rourkela Steel Plant area, Basanti Colony",
        "pricing_1bhk": "₹5,500 - ₹8,500",
        "pricing_2bhk": "₹8,500 - ₹13,000",
        "pricing_3bhk": "₹13,000 - ₹18,500",
        "pricing_villa": "₹18,000 - ₹26,000",
        "pricing_bike": "₹1,800 - ₹2,800",
        "pricing_car": "₹4,500 - ₹7,000",
        "local_focus": "Cross-border relocations for Rourkela Steel Plant (SAIL) employees, NIT Rourkela faculty and students, healthcare staff, and business families moving between Simdega and Sundargarh district.",
        "reviews": [
            ("Ashok Kumar Pradhan", "Kurdeg to Koel Nagar Rourkela", "Moved our household from Kurdeg to Rourkela. Quick 2.5 hour transit via Birmitrapur. Seamless border clearance and zero damage to our glassware."),
            ("Dr. Smita Mohanty", "Kurdeg CHC to Civil Township Rourkela", "Relocated on joining Ispat General Hospital. Excellent packing, courteous movers, and prompt same-day setup in Rourkela."),
            ("Dilip Kumar Sahu", "Kurdeg Bazar to Panposh Rourkela", "Transported our 2 BHK goods and Hero Splendor. Sealed container truck and reasonable charges. Highly satisfied.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kurdeg to Rourkela?", "The highway distance is approximately 95 km via Simdega and Birmitrapur border crossing on NH-143. Driving duration is roughly 2 to 2.5 hours. Complete moving takes 5 to 7 hours on the same day."),
            ("How do you handle the interstate border crossing between Jharkhand and Odisha?", "Our commercial vehicles have valid national permits, e-way bills, and road tax clearances, ensuring hassle-free border transit at Birmitrapur."),
            ("What are the standard charges for shifting a 2 BHK home to Rourkela?", "A typical 2 BHK household relocation costs between ₹8,500 and ₹13,000, including 5-layer packing, vehicle freight, loading, and unloading."),
            ("Can you move motorcycles safely across the Odisha border?", "Yes, two-wheelers are wrapped with scratch-resistant bubble sheets and secured with ratchet belts inside our closed container truck for ₹1,800 to ₹2,800."),
            ("Do you provide transit insurance for cross-border moves?", "Yes, we provide 100% comprehensive transit insurance underwritten by national insurance companies.")
        ]
    },
    {
        "id": 12,
        "slug": "kurdeg-to-raipur-packers-and-movers",
        "origin": "Kurdeg",
        "dest": "Raipur",
        "title": "Packers and Movers Kurdeg to Raipur | Interstate Chhattisgarh Moving",
        "desc": "Professional packers and movers from Kurdeg to Raipur. 360 km transit via Jashpur, Raigarh & NH-53, 5-layer packing, domestic shifting, car carrier, bike parcel, door-to-door delivery.",
        "keywords": "kurdeg to raipur packers and movers, packers and movers kurdeg to raipur, house shifting kurdeg to raipur, jashpur to raipur movers, chhattisgarh border packers kurdeg, safe movers raipur",
        "distance": "360 km",
        "duration": "7.5 to 8.5 hours",
        "route_desc": "Interstate route westward via Chhattisgarh border, Jashpur Nagar, Kunkuri, Raigarh, Bilaspur, connecting to NH-53 into Raipur",
        "origin_locality": "Kurdeg Main Market, BDO Campus, Kurdeg Thana, Kinkel, Dumerbahar, Mahabuang, CG Border Checkpost",
        "dest_locality": "Shankar Nagar, Telibandha, Pandri, VIP Road, Tatibandh, Naya Raipur, Samta Colony, Devendra Nagar",
        "pricing_1bhk": "₹11,500 - ₹16,500",
        "pricing_2bhk": "₹16,000 - ₹23,000",
        "pricing_3bhk": "₹22,000 - ₹31,000",
        "pricing_villa": "₹29,000 - ₹42,000",
        "pricing_bike": "₹3,200 - ₹4,800",
        "pricing_car": "₹8,500 - ₹13,500",
        "local_focus": "Commercial relocations, traders, corporate executives, and students shifting from Kurdeg border block across Chhattisgarh to the state capital Raipur.",
        "reviews": [
            ("Vinod Kumar Agrawal", "Kurdeg to Telibandha Raipur", "Moved our complete family residence to Raipur. The team handled our heavy wooden furniture and fragile crockery with exceptional skill. Delivered in Raipur within 24 hours."),
            ("Rupesh Bhagat", "Kurdeg Bazar to Shankar Nagar Raipur", "Smooth transit across Jashpur and Raigarh. Sealed container truck protected everything from rain and dust. Excellent service!"),
            ("Praveen Ekka", "Kinkel Kurdeg to VIP Road Raipur", "Reasonable rates, professional crating of our electronics, and prompt delivery. Highly recommended for moves to Chhattisgarh.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Kurdeg to Raipur?", "The highway route spans approximately 360 km via Jashpur, Raigarh, and NH-53. Driving duration is roughly 7.5 to 8.5 hours. Door-to-door relocation is completed within 24 hours."),
            ("How do you manage the interstate border checkpost into Chhattisgarh?", "Our commercial fleet carries all required interstate transport permits, e-way bills, and commercial documentation for quick border crossing."),
            ("What are the 2 BHK household moving charges from Kurdeg to Raipur?", "A standard 2 BHK apartment relocation costs between ₹16,000 and ₹23,000, covering full 5-layer packing, loading, transport, and unloading."),
            ("Can you transport cars and two-wheelers to Raipur?", "Yes, we transport bikes inside secure container trucks and cars via dedicated enclosed carriers with door pickup and delivery."),
            ("Is transit insurance provided for moves to Chhattisgarh?", "Yes, comprehensive goods-in-transit insurance coverage is provided to cover loss or damage during highway transit.")
        ]
    },
    {
        "id": 13,
        "slug": "kurdeg-to-kolkata-packers-and-movers",
        "origin": "Kurdeg",
        "dest": "Kolkata",
        "title": "Packers and Movers Kurdeg to Kolkata | Interstate Metro Relocation",
        "desc": "Trusted packers and movers from Kurdeg, Simdega to Kolkata. 530 km express transit via NH-16/NH-49, 5-layer packing, household moving, vehicle carrier, door-to-door delivery.",
        "keywords": "kurdeg to kolkata packers and movers, packers and movers kurdeg to kolkata, house shifting kurdeg to kolkata, simdega to kolkata movers, car transport kurdeg to kolkata, safe movers kolkata",
        "distance": "530 km",
        "duration": "11 to 12.5 hours",
        "route_desc": "Kurdeg via Simdega, Rourkela or Ranchi Ring Road, NH-16 / NH-49 through Kharagpur into Kolkata / Greater Kolkata",
        "origin_locality": "Kurdeg Bazar, BDO Office Road, Kurdeg Thana, CHC Hospital area, Kinkel, Dumerbahar",
        "dest_locality": "Salt Lake, New Town, Rajarhat, South City, Behala, Howrah, Jadavpur, Ballygunge",
        "pricing_1bhk": "₹14,000 - ₹20,000",
        "pricing_2bhk": "₹19,000 - ₹27,000",
        "pricing_3bhk": "₹26,000 - ₹37,000",
        "pricing_villa": "₹35,000 - ₹52,000",
        "pricing_bike": "₹3,800 - ₹5,500",
        "pricing_car": "₹11,000 - ₹17,000",
        "local_focus": "IT professionals, corporate transfers, university students, and families shifting from Kurdeg block to the Kolkata metropolitan region.",
        "reviews": [
            ("Anirban Mukherjee", "Kurdeg to New Town Kolkata", "Moved our 3 BHK household from Kurdeg to Kolkata. The crew was very courteous and packed our TV and refrigerator with triple bubble wrapping. Delivered on schedule without a scratch."),
            ("Swati Roy", "Kurdeg Bazar to Salt Lake Kolkata", "Flawless long-distance moving. Driver gave regular GPS updates along the highway. Everything was unpacked neatly in Salt Lake."),
            ("Debabrata Das", "Mahabuang Kurdeg to Behala Kolkata", "Very reasonable pricing for 530 km transit. Sealed container truck ensured our furniture remained 100% clean.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kurdeg to Kolkata?", "The route spans approximately 530 km via NH-49 / NH-16 through Kharagpur. Driving duration is roughly 11 to 12.5 hours. Total door-to-door relocation is executed within 36 to 48 hours."),
            ("Can you deliver to high-rise gated societies in New Town and Rajarhat?", "Yes, our Kolkata delivery network manages society gate permits, elevator padding, and cooperative association guidelines."),
            ("How do you protect fragile items during 530 km highway transit?", "We use 5-layer protective packing with heavy air bubble wrap, corrugated sheets, foam edge protectors, and tight stretch wrapping."),
            ("What are the 2 BHK shifting charges from Kurdeg to Kolkata?", "A typical 2 BHK household move ranges between ₹19,000 and ₹27,000, all-inclusive of packing materials, loading, highway tolls, and unloading."),
            ("Do you provide car and bike carrier services to Kolkata?", "Yes, we transport two-wheelers inside closed containers and cars via dedicated hydraulic vehicle carriers.")
        ]
    },
    {
        "id": 14,
        "slug": "kurdeg-to-delhi-packers-and-movers",
        "origin": "Kurdeg",
        "dest": "Delhi NCR",
        "title": "Packers and Movers Kurdeg to Delhi | Long-Distance National Relocation",
        "desc": "Expert packers and movers from Kurdeg to Delhi NCR (Delhi, Noida, Gurgaon). 1,240 km express transit via Yamuna Expressway, 5-layer packing, car carrier, GPS container.",
        "keywords": "kurdeg to delhi packers and movers, packers and movers kurdeg to delhi, house shifting kurdeg to delhi, kurdeg to noida movers, gurgaon to kurdeg packers, car transport kurdeg delhi, national movers kurdeg",
        "distance": "1,240 km",
        "duration": "24 to 28 hours",
        "route_desc": "Kurdeg via Gumla, Lohardaga, Latehar, Daltonganj, Aurangabad, Varanasi, NH-19 GT Road / Yamuna Expressway into Delhi NCR",
        "origin_locality": "Kurdeg Main Market, BDO Campus, Kurdeg Thana, Kinkel, Dumerbahar, Mahabuang",
        "dest_locality": "Delhi (Dwarka, Rohini, South Delhi), Noida, Greater Noida, Gurgaon (Cyber City, Golf Course Road), Faridabad",
        "pricing_1bhk": "₹19,000 - ₹27,000",
        "pricing_2bhk": "₹26,000 - ₹39,000",
        "pricing_3bhk": "₹36,000 - ₹54,000",
        "pricing_villa": "₹49,000 - ₹78,000",
        "pricing_bike": "₹5,200 - ₹7,800",
        "pricing_car": "₹15,000 - ₹23,000",
        "local_focus": "Defense officers, central government personnel, corporate executives, and students relocating 1,240 km from Kurdeg to the Delhi National Capital Region.",
        "reviews": [
            ("Capt. Abhishek Tirkey", "Kurdeg to Delhi Cantt", "Shifted our household on defense transfer. Sealed container truck arrived with seal intact. Every piece of furniture and kitchenware was in pristine condition."),
            ("Sandeep Kumar Sharma", "Kurdeg Bazar to Noida Sector 62", "Outstanding national relocation service! They custom-crated our 65-inch television and computer setup. Arrived in Noida right on schedule."),
            ("Pooja Verma", "Kinkel Kurdeg to Gurgaon Cyber City", "Extremely professional team. Clear communication, live GPS tracking, and genuine pricing. Highly recommended.")
        ],
        "faqs": [
            ("How long does moving take from Kurdeg to Delhi NCR?", "The distance is approximately 1,240 km via NH-19 and Yamuna Expressway. Driving time is roughly 24 to 28 hours. Consignments are delivered within 3 to 4 days of loading."),
            ("How do you safeguard goods during long-distance 1,240 km transit?", "We use dedicated sealed container trucks with zero transshipment, 5-layer industrial packaging, and ratchet belt securing to eliminate shifting."),
            ("What are the 2 BHK shifting charges from Kurdeg to Delhi NCR?", "A standard 2 BHK household relocation costs between ₹26,000 and ₹39,000, covering full export-quality packing, transit freight, and unloading."),
            ("Can you transport my car or SUV safely to Delhi/Gurgaon?", "Yes, cars are transported on specialized enclosed multi-car trailers with hydraulic loading ramps and all-risk transit insurance."),
            ("Are your bills approved for corporate and central government transfer claims?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved transporter providing GST invoices and bilty notes recognized across India.")
        ]
    },
    {
        "id": 15,
        "slug": "kurdeg-to-patna-packers-and-movers",
        "origin": "Kurdeg",
        "dest": "Patna",
        "title": "Packers and Movers Kurdeg to Patna | Safe Inter-State Moving",
        "desc": "Dependable packers and movers from Kurdeg to Patna. 510 km transit via Ranchi Ring Road & NH-20, 5-layer packing, corporate & home relocations, vehicle parcel, fast delivery.",
        "keywords": "kurdeg to patna packers and movers, packers and movers kurdeg to patna, house shifting kurdeg to patna, simdega to patna movers, car transport kurdeg to patna, bike parcel kurdeg patna, safe movers kurdeg",
        "distance": "510 km",
        "duration": "11 to 12 hours",
        "route_desc": "Kurdeg via Simdega, Kolebira, Ranchi Ring Road, NH-20 through Hazaribagh, Barhi, Nawada / Gaya, Bakhtiyarpur into Patna",
        "origin_locality": "Kurdeg Bazar, BDO Office Road, Kurdeg Thana, CHC Hospital area, Kinkel, Dumerbahar",
        "dest_locality": "Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur Cantt, Rajendra Nagar, Anisabad",
        "pricing_1bhk": "₹13,000 - ₹18,500",
        "pricing_2bhk": "₹18,000 - ₹25,000",
        "pricing_3bhk": "₹24,000 - ₹34,000",
        "pricing_villa": "₹32,000 - ₹48,000",
        "pricing_bike": "₹3,500 - ₹5,000",
        "pricing_car": "₹10,000 - ₹15,000",
        "local_focus": "Educational relocations, healthcare transfers, government administrative personnel, and families shifting from Kurdeg block to Bihar's capital city Patna.",
        "reviews": [
            ("Dr. Binod Kumar Sinha", "Kurdeg CHC to Bailey Road Patna", "Relocated from Kurdeg to Patna. The team packed all delicate medical items and home belongings with great diligence. Delivered in Patna within 24 hours."),
            ("Sunil Kumar Singh", "Kurdeg Bazar to Kankarbagh Patna", "Very reliable service. Heavy almirahs, double beds, and refrigerator reached safely without a single scratch."),
            ("Prakash Chandra", "Mahabuang Kurdeg to Danapur Cantt Patna", "Prompt packing, polite workers, and transparent billing. Highly recommended for moves to Bihar.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kurdeg to Patna?", "The highway route spans approximately 510 km via Ranchi Ring Road, Hazaribagh, and NH-20. Driving duration is roughly 11 to 12 hours. Delivery is completed within 24 to 36 hours."),
            ("Can your crew pack fragile kitchen crockeries and appliances safely?", "Yes, our team uses specialized crockery cartons, bubble wraps, and thermocol padding for complete protection."),
            ("What are the 2 BHK shifting charges from Kurdeg to Patna?", "A standard 2 BHK household relocation costs between ₹18,000 and ₹25,000, all-inclusive of packing materials, transport, and unloading."),
            ("Can I ship my motorcycle from Kurdeg to Patna?", "Yes, two-wheelers are securely packed and tied with ratchet belts inside our closed container truck for ₹3,500 to ₹5,000."),
            ("Do you provide transit insurance for moves to Bihar?", "Yes, comprehensive transit insurance is provided to cover any unforeseen transit risks during highway travel.")
        ]
    },
    # Group 4: Outside Jharkhand to Kurdeg (Routes 16–20)
    {
        "id": 16,
        "slug": "rourkela-to-kurdeg-packers-and-movers",
        "origin": "Rourkela",
        "dest": "Kurdeg",
        "title": "Packers and Movers Rourkela to Kurdeg | Inbound Cross-Border Moving",
        "desc": "Trusted packers and movers from Rourkela, Odisha to Kurdeg. 95 km express transit via Birmitrapur/NH-143 & Simdega, 5-layer packing, steel city to rural relocations, vehicle carrier.",
        "keywords": "rourkela to kurdeg packers and movers, packers and movers rourkela to kurdeg, house shifting rourkela to kurdeg, rourkela to simdega movers, odisha to jharkhand packers, safe movers rourkela",
        "distance": "95 km",
        "duration": "2 to 2.5 hours",
        "route_desc": "NH-143 north through Birmitrapur border crossing into Simdega, turning onto Kurdeg Road",
        "origin_locality": "Civil Township, Koel Nagar, Chhend Colony, Panposh, Udit Nagar, Rourkela Steel Plant area",
        "dest_locality": "Kurdeg Bazar, BDO Office Road, Kurdeg Thana, CHC Hospital area, Kinkel, Dumerbahar",
        "pricing_1bhk": "₹5,500 - ₹8,500",
        "pricing_2bhk": "₹8,500 - ₹13,000",
        "pricing_3bhk": "₹13,000 - ₹18,500",
        "pricing_villa": "₹18,000 - ₹26,000",
        "pricing_bike": "₹1,800 - ₹2,800",
        "pricing_car": "₹4,500 - ₹7,000",
        "local_focus": "Rourkela Steel Plant workers, engineers, contractors, and families moving across the Odisha-Jharkhand border into Kurdeg block.",
        "reviews": [
            ("Manoranjan Sahu", "Koel Nagar Rourkela to Kurdeg", "Shifted our household from Rourkela back to Kurdeg. The crew arrived in Rourkela at 8 AM, loaded carefully, and completed delivery in Kurdeg by afternoon. Zero scratches."),
            ("Pramila Devi", "Panposh Rourkela to Kurdeg Bazar", "Handled our showcase, LED TV, and Godrej almirahs with extreme caution. Friendly and hardworking team."),
            ("Naveen Kumar", "Civil Township Rourkela to Kinkel Kurdeg", "Very prompt service across the border. Fast customs/permit clearance and reasonable charges.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Rourkela to Kurdeg?", "The highway route is approximately 95 km via Birmitrapur and Simdega on NH-143. Driving duration is roughly 2 to 2.5 hours. Total move takes 5 to 7 hours on the same day."),
            ("How do you manage the border crossing between Odisha and Jharkhand?", "Our commercial vehicles have full national permits, e-way bills, and green tax clearances for fast border crossing at Birmitrapur."),
            ("What are the 2 BHK moving charges from Rourkela to Kurdeg?", "A standard 2 BHK household relocation costs between ₹8,500 and ₹13,000 based on goods volume, floor heights, and packing specifications."),
            ("Can I ship my motorcycle from Rourkela to Kurdeg?", "Yes, two-wheelers are securely crated with bubble wrap and secured with ratchet belts inside our closed container truck for ₹1,800 to ₹2,800."),
            ("Do you provide transit insurance for moves from Odisha?", "Yes, comprehensive transit insurance is available to safeguard all valuable furniture, appliances, and personal belongings.")
        ]
    },
    {
        "id": 17,
        "slug": "raipur-to-kurdeg-packers-and-movers",
        "origin": "Raipur",
        "dest": "Kurdeg",
        "title": "Packers and Movers Raipur to Kurdeg | Interstate Inbound Relocation",
        "desc": "Expert packers and movers from Raipur, Chhattisgarh to Kurdeg. 360 km transit via Bilaspur, Raigarh & Jashpur, 5-layer packing, household moving, vehicle carrier, door delivery.",
        "keywords": "raipur to kurdeg packers and movers, packers and movers raipur to kurdeg, house shifting raipur to kurdeg, raipur to simdega movers, chhattisgarh to jharkhand packers, safe movers raipur",
        "distance": "360 km",
        "duration": "7.5 to 8.5 hours",
        "route_desc": "NH-53 / NH-49 via Bilaspur, Raigarh, Kunkuri, Jashpur Nagar into Kurdeg border checkpost",
        "origin_locality": "Shankar Nagar, Telibandha, Pandri, VIP Road, Tatibandh, Naya Raipur, Samta Colony",
        "dest_locality": "Kurdeg Main Market, BDO Campus, Kurdeg Thana, Kinkel, Dumerbahar, Mahabuang",
        "pricing_1bhk": "₹11,500 - ₹16,500",
        "pricing_2bhk": "₹16,000 - ₹23,000",
        "pricing_3bhk": "₹22,000 - ₹31,000",
        "pricing_villa": "₹29,000 - ₹42,000",
        "pricing_bike": "₹3,200 - ₹4,800",
        "pricing_car": "₹8,500 - ₹13,500",
        "local_focus": "Returning trading families, engineers, and government staff transferring from Chhattisgarh into Kurdeg block.",
        "reviews": [
            ("Laxman Agrawal", "Pandri Raipur to Kurdeg Bazar", "Shifted our business stock and home goods from Raipur to Kurdeg. Loaded yesterday morning and delivered safely today. Professional moving crew."),
            ("Sarita Kujur", "Telibandha Raipur to Kurdeg", "Packed our complete 2 BHK apartment with sturdy cartons and air bubble sheets. Zero damage to our glass items."),
            ("Manoj Kumar Verma", "Shankar Nagar Raipur to Kinkel Kurdeg", "Honest quotation, polite workers, and sealed container truck. Highly satisfied with Shree Ashirwad Packers.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Raipur to Kurdeg?", "The route covers about 360 km via Raigarh and Jashpur Nagar. Driving duration is approximately 7.5 to 8.5 hours. Door-to-door relocation takes roughly 24 hours."),
            ("Can you pick up from gated societies across Raipur and Naya Raipur?", "Yes, our Raipur team manages high-rise apartments and residential colonies across Raipur, preparing gate passes and elevator protective wraps."),
            ("How do you ensure antique wooden furniture remains scratch-free?", "We wrap all wooden surfaces in thick foam blankets, apply bubble cushioning around carved edges, and seal with tight stretch wrap."),
            ("What are the bike transport charges from Raipur to Kurdeg?", "Two-wheeler shifting costs between ₹3,200 and ₹4,800 including multi-layer packing and transport inside a closed container."),
            ("Is transit insurance provided for inbound moves from Chhattisgarh?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 18,
        "slug": "kolkata-to-kurdeg-packers-and-movers",
        "origin": "Kolkata",
        "dest": "Kurdeg",
        "title": "Packers and Movers Kolkata to Kurdeg | Inbound Metro Shifting",
        "desc": "Professional packers and movers from Kolkata to Kurdeg, Simdega. 530 km express transit via NH-16/NH-49 & Kharagpur, 5-layer packing, home & corporate shifting, vehicle carrier.",
        "keywords": "kolkata to kurdeg packers and movers, packers and movers kolkata to kurdeg, house shifting kolkata to kurdeg, kolkata to simdega movers, car transport kolkata to kurdeg, safe movers kolkata",
        "distance": "530 km",
        "duration": "11 to 12.5 hours",
        "route_desc": "NH-16 / NH-49 through Kharagpur, Purulia / Rourkela or Ranchi Ring Road, into Simdega and Kurdeg",
        "origin_locality": "Salt Lake, New Town, Rajarhat, South City, Behala, Howrah, Jadavpur",
        "dest_locality": "Kurdeg Bazar, BDO Office Road, Kurdeg Thana, CHC Hospital area, Kinkel, Dumerbahar",
        "pricing_1bhk": "₹14,000 - ₹20,000",
        "pricing_2bhk": "₹19,000 - ₹27,000",
        "pricing_3bhk": "₹26,000 - ₹37,000",
        "pricing_villa": "₹35,000 - ₹52,000",
        "pricing_bike": "₹3,800 - ₹5,500",
        "pricing_car": "₹11,000 - ₹17,000",
        "local_focus": "Returning executives, retired professionals, and families moving from Kolkata back to native residences in Kurdeg block.",
        "reviews": [
            ("Prabir Chatterjee", "Salt Lake Kolkata to Kurdeg", "Exceptional service! They protected our leather sofa and 55-inch television with multiple layers of bubble wrap. Unloaded at Kurdeg without a blemish."),
            ("Shyamali Roy", "New Town Kolkata to Kurdeg Bazar", "Smooth transit along NH-16. The vehicle arrived right on schedule, and their crew reassembled our bedroom furniture quickly."),
            ("Ashim Halder", "Howrah to Kinkel Kurdeg", "Shifted our 2 BHK apartment and Honda Activa. Flawless execution and reliable customer assistance throughout.")
        ],
        "faqs": [
            ("What is the time required to shift household goods from Kolkata to Kurdeg?", "The highway distance is 530 km. Dedicated container vehicles complete the drive in 11 to 12.5 hours. Packing is typically completed on day 1 with delivery in Kurdeg on day 2."),
            ("Can you collect goods from gated communities across Kolkata and Howrah?", "Yes, our Kolkata teams handle high-rise societies in New Town, Rajarhat, Salt Lake, and South Kolkata with full adherence to elevator and security protocols."),
            ("How do you ensure wooden furniture remains undamaged?", "We wrap all wooden surfaces in thick foam blankets, apply bubble cushioning around carved edges, and seal with tight stretch wrap to prevent dust and scratches."),
            ("What are the bike transport charges from Kolkata to Kurdeg?", "Two-wheeler shifting costs between ₹3,800 and ₹5,500 based on engine cc and model, including multi-layer packing and transport inside a closed container."),
            ("Is transit insurance provided for inbound moves from West Bengal?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 19,
        "slug": "delhi-to-kurdeg-packers-and-movers",
        "origin": "Delhi NCR",
        "dest": "Kurdeg",
        "title": "Packers and Movers Delhi to Kurdeg | Long-Distance National Moving",
        "desc": "Trusted packers and movers from Delhi NCR (Delhi, Noida, Gurgaon) to Kurdeg. 1,240 km express transit via Yamuna Expressway & NH-19, 5-layer packing, car carrier, GPS tracking.",
        "keywords": "delhi to kurdeg packers and movers, packers and movers delhi to kurdeg, house shifting delhi to kurdeg, noida to kurdeg movers, gurgaon to simdega packers, car transport delhi to kurdeg, national movers delhi",
        "distance": "1,240 km",
        "duration": "24 to 28 hours",
        "route_desc": "Yamuna Expressway / Agra-Lucknow Expressway to NH-19 GT Road through Varanasi, Daltonganj, Gumla, Simdega into Kurdeg",
        "origin_locality": "Delhi (Dwarka, Rohini, South Delhi), Noida, Greater Noida, Gurgaon, Faridabad",
        "dest_locality": "Kurdeg Main Market, BDO Campus, Kurdeg Thana, Kinkel, Dumerbahar, Mahabuang",
        "pricing_1bhk": "₹19,000 - ₹27,000",
        "pricing_2bhk": "₹26,000 - ₹39,000",
        "pricing_3bhk": "₹36,000 - ₹54,000",
        "pricing_villa": "₹49,000 - ₹78,000",
        "pricing_bike": "₹5,200 - ₹7,800",
        "pricing_car": "₹15,000 - ₹23,000",
        "local_focus": "Returning defense personnel, central government officers, and corporate professionals relocating 1,240 km from Delhi NCR back to Kurdeg.",
        "reviews": [
            ("Subedar R. N. Minz", "Delhi Cantt to Kurdeg", "Retired from defense service and shifted all household goods 1,240 km back to our native home in Kurdeg. Flawless packing and 100% undamaged delivery."),
            ("Amitabh Verma", "Gurgaon Sector 54 to Kurdeg Bazar", "Extremely professional crating of our electronic appliances and furniture. Outstanding interstate service!"),
            ("Seema Kumari", "Dwarka Sector 12 to Kinkel Kurdeg", "Their team handled society gate permissions in Delhi and unloading in Kurdeg flawlessly. Courteous, punctual, and genuine pricing.")
        ],
        "faqs": [
            ("How many days does transit take from Delhi NCR to Kurdeg?", "The route covers 1,240 km. Dedicated container vehicles require 24 to 28 hours of driving time. Consignments are typically delivered within 3 to 4 days of pickup."),
            ("Can you pick up from multiple locations in Delhi NCR (e.g. Gurgaon office + Noida home)?", "Yes, we can organize split pickups across Delhi, Noida, or Gurgaon before locking the container for direct dispatch to Kurdeg."),
            ("How do you protect delicate electronics like 65-inch OLED TVs and sound systems?", "We pack screens with high-density thermocol sheet guards, anti-static bubble film, and custom heavy-duty corrugated wooden crates for fail-safe protection."),
            ("What are the 2 BHK moving charges from Delhi to Kurdeg?", "A standard 2 BHK household relocation costs between ₹26,000 and ₹39,000, covering full export-quality packing, transport, and unloading."),
            ("Are your bills approved for government transfer claims?", "Yes, we provide official GST invoices and bilty notes recognized by all government departments and PSUs.")
        ]
    },
    {
        "id": 20,
        "slug": "patna-to-kurdeg-packers-and-movers",
        "origin": "Patna",
        "dest": "Kurdeg",
        "title": "Packers and Movers Patna to Kurdeg | Reliable Inbound Relocation",
        "desc": "Expert packers and movers from Patna to Kurdeg, Simdega. 510 km transit via NH-20 & Ranchi Ring Road, 5-layer packing, household moving, vehicle parcel, door delivery.",
        "keywords": "patna to kurdeg packers and movers, packers and movers patna to kurdeg, house shifting patna to kurdeg, patna to simdega movers, car transport patna kurdeg, bike parcel patna kurdeg, safe movers patna",
        "distance": "510 km",
        "duration": "11 to 12 hours",
        "route_desc": "NH-20 south via Nawada / Gaya, Barhi, Hazaribagh, Ranchi Ring Road, NH-143 via Simdega into Kurdeg",
        "origin_locality": "Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur Cantt, Rajendra Nagar",
        "dest_locality": "Kurdeg Bazar, BDO Office Road, Kurdeg Thana, CHC Hospital area, Kinkel, Dumerbahar",
        "pricing_1bhk": "₹13,000 - ₹18,500",
        "pricing_2bhk": "₹18,000 - ₹25,000",
        "pricing_3bhk": "₹24,000 - ₹34,000",
        "pricing_villa": "₹32,000 - ₹48,000",
        "pricing_bike": "₹3,500 - ₹5,000",
        "pricing_car": "₹10,000 - ₹15,000",
        "local_focus": "Appointed medical staff, bank managers, and families relocating from Bihar to Kurdeg block in Simdega district.",
        "reviews": [
            ("Dr. Pankaj Kumar", "Boring Road Patna to Kurdeg CHC", "Shifted our medical equipment and home items from Patna to Kurdeg. Crew loaded carefully and delivered next day in Kurdeg. Very satisfied."),
            ("Rameshwar Singh", "Danapur Patna to Kurdeg Bazar", "Packed all our crockery, refrigerator, and clothes in sturdy boxes. Unloaded in Kurdeg smoothly without any scratches."),
            ("Sunil Kumar Bhagat", "Kankarbagh Patna to Kinkel Kurdeg", "Fair pricing, excellent customer service, and fast transit through Hazaribagh and Ranchi. Highly recommended.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Patna to Kurdeg?", "The route covers about 510 km via NH-20 and Ranchi Ring Road. Driving duration is approximately 11 to 12 hours. Door-to-door relocation takes roughly 24 to 36 hours."),
            ("Can your crew pack delicate kitchen appliances and glass crockeries in Patna?", "Yes, our Patna team utilizes dedicated crockery boxes, multi-layer bubble wrap, and thermocol packing for sensitive chinaware and micro-appliances."),
            ("Do you provide car transport from Patna to Kurdeg?", "Yes, we transport cars via dedicated car trailers or safely fastened inside closed container trucks with zero road driving between cities."),
            ("What are the 2 BHK shifting charges from Patna to Kurdeg?", "Standard 2 BHK relocation ranges between ₹18,000 and ₹25,000, all-inclusive of packing materials, loading, road permits, tolls, and unloading in Kurdeg."),
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
 * Group: Route {r["id"]} - Kurdeg Corridor
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
            "streetAddress": "Main Road, Near Kurdeg Block Office & CHC Hospital",
            "addressLocality": "Kurdeg, Simdega",
            "addressRegion": "Jharkhand",
            "postalCode": "835212",
            "addressCountry": "IN"
        }},
        "geo": {{
            "@type": "GeoCoordinates",
            "latitude": 22.5600,
            "longitude": 84.1400
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
            "price": "4000",
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
                    Looking for dependable, stress-free shifting services from {origin} to {dest}? Shree Ashirwad Packers and Movers delivers certified, damage-free household relocations, vehicle transit, commercial office shifting, and specialized medical/corporate transfers across the {r["distance"]} corridor with complete 5-layer protective packaging and transit insurance coverage.
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
                Shree Ashirwad Packers and Movers brings over a decade of dedicated moving expertise to the {origin} to {dest} transportation route. Operating via {r["route_desc"]}, our specialized moving fleets ensure smooth, punctually scheduled, and fully secured relocations for apartments, independent villas, commercial shops, and government staff quarters.
            </p>
            <p>
                {r["local_focus"]} Whether you are moving delicate electronic appliances, heavy solid teakwood furniture, family heirlooms, or two-wheelers, our dedicated moving crew handles every phase with unmatched logistical discipline and technical precision.
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
                        <p>Specialized foam and thermocol padding for refrigerators, washing machines, and OLED televisions.</p>
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
                Shree Ashirwad Packers and Movers is an IBA-approved logistics provider trusted by block administration offices, banks, rural health clinics, schools, and private enterprises across Simdega district and nationwide.
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
                        The transit corridor connecting {origin} and {dest} spans approximately {r["distance"]} via {r["route_desc"]}. To avoid peak morning commuter congestion and mining truck traffic, our operations team coordinates early morning departure schedules between 6:30 AM and 8:30 AM.
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
    print(f"Generating {len(ROUTES)} Kurdeg pages...")
    for r in ROUTES:
        path = os.path.join(PAGES_DIR, f"{r['slug']}.php")
        code = generate_page(r)
        with open(path, "w", encoding="utf-8") as f:
            f.write(code)
        print(f"Created: {r['slug']}.php ({len(code)} bytes)")

if __name__ == "__main__":
    main()
