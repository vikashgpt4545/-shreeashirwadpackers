import os
import re

PAGES_DIR = r"d:\shreeashirwadpackers\pages"

ROUTES = [
    # Group 1: Lesliganj to Inside Jharkhand (Routes 1–5)
    {
        "id": 1,
        "slug": "lesliganj-to-ranchi-packers-and-movers",
        "origin": "Lesliganj",
        "dest": "Ranchi",
        "title": "Packers and Movers Lesliganj to Ranchi | Fast Capital Relocation",
        "desc": "Trusted packers and movers from Lesliganj (Nilambar-Pitambar Pur), Palamu to Ranchi. 155 km express transit via NH-39, 5-layer packing, home shifting, car & bike parcel, full insurance.",
        "keywords": "lesliganj to ranchi packers and movers, packers and movers lesliganj to ranchi, house shifting lesliganj to ranchi, palamu to ranchi movers, car transport lesliganj to ranchi, bike parcel lesliganj ranchi, safe movers lesliganj",
        "distance": "155 km",
        "duration": "3.5 to 4 hours",
        "route_desc": "NH-39 southeast through Manika, Latehar, Chandwa, Kuru, and NH-143A directly into Ranchi capital city",
        "origin_locality": "Lesliganj Bazar, Nilambar-Pitambar Pur Chowk, BDO Campus, Thana Road, CHC Hospital area, Kundri, Palamu Fort Road",
        "dest_locality": "Harmu, Morabadi, Bariatu, Doranda, Kanke Road, Lalpur, Hinoo, Ratu Road, Dhurwa, Namkum",
        "pricing_1bhk": "₹7,000 - ₹10,500",
        "pricing_2bhk": "₹10,500 - ₹15,500",
        "pricing_3bhk": "₹15,000 - ₹22,000",
        "pricing_villa": "₹21,000 - ₹32,000",
        "pricing_bike": "₹2,000 - ₹3,200",
        "pricing_car": "₹5,000 - ₹8,000",
        "local_focus": "Block administrative officers, rural high school teachers, banking executives (SBI/Gramin Bank), and families moving from Lesliganj to Ranchi for higher education and healthcare.",
        "reviews": [
            ("Pramod Kumar Tiwari", "Lesliganj Bazar to Harmu Ranchi", "Moved our complete family residence to Ranchi. The team reached Lesliganj on time, packed our glassware and wooden almirahs with 5-layer bubble protection, and delivered to Harmu without a single scratch."),
            ("Dr. Arvind K. Shukla", "Lesliganj CHC to Bariatu Ranchi", "Shifted our medical clinic equipment and home belongings. Their enclosed container truck protected all sensitive instruments from highway dust across the 155 km trip. Outstanding service!"),
            ("Rameshwar Singh", "Kundri Lesliganj to Morabadi Ranchi", "Transported my Royal Enfield motorcycle and 2 BHK household items. Delivered on schedule with genuine GST billing that was immediately reimbursed by my department.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Lesliganj to Ranchi?", "The road distance is approximately 155 km via Latehar, Chandwa, and Kuru on NH-39. Our closed container trucks complete the drive in 3.5 to 4 hours. Total shifting from loading in Lesliganj to setup in Ranchi takes 6 to 8 hours on the same day."),
            ("How do you manage rural road access and narrow lanes in Lesliganj block?", "Our fleet includes versatile intermediate container vehicles and feeder pickup vans designed for rural roads in Lesliganj, Kundri, and Palamu Fort road, ensuring safe doorstep collection without transshipment."),
            ("Do you provide transit insurance for household goods from Lesliganj?", "Yes, we provide 100% comprehensive transit insurance underwritten by leading nationalized insurance companies, protecting all furniture, home electronics, and kitchenware against transit risks."),
            ("What are the standard charges for shifting a 2 BHK home from Lesliganj to Ranchi?", "A standard 2 BHK household relocation typically costs between ₹10,500 and ₹15,500, covering premium 5-layer packing, container truck freight, skilled loading, unloading, and furniture assembly."),
            ("Can you move motorcycles and scooters safely from Lesliganj to Ranchi?", "Yes, two-wheelers are wrapped with heavy bubble film, secured with foam padding, and anchored using industrial ratchet straps inside our closed container truck for ₹2,000 to ₹3,200.")
        ]
    },
    {
        "id": 2,
        "slug": "lesliganj-to-daltonganj-packers-and-movers",
        "origin": "Lesliganj",
        "dest": "Daltonganj",
        "title": "Packers and Movers Lesliganj to Daltonganj | Local District Shifting",
        "desc": "Reliable packers and movers from Lesliganj to Daltonganj (Medininagar). 18 km local express transit, 5-layer packing, domestic shifting, court & collectorate transfers, same-day delivery.",
        "keywords": "lesliganj to daltonganj packers and movers, packers and movers lesliganj to daltonganj, house shifting lesliganj to daltonganj, local movers palamu district, medininagar packers lesliganj, safe packers lesliganj",
        "distance": "18 km",
        "duration": "30 to 40 minutes",
        "route_desc": "Lesliganj-Medininagar Road connecting directly into Daltonganj district headquarters, Redma, and Court Road",
        "origin_locality": "Lesliganj Main Market, BDO Campus, Thana Chowk, Nilambar-Pitambar Pur, Kundri",
        "dest_locality": "Redma, Belwatika, Hamid Ganj, Shahpur, Chianki, Sudna, Daltonganj Station Road, Court Compound",
        "pricing_1bhk": "₹3,500 - ₹5,500",
        "pricing_2bhk": "₹5,500 - ₹8,500",
        "pricing_3bhk": "₹8,500 - ₹12,500",
        "pricing_villa": "₹12,000 - ₹18,000",
        "pricing_bike": "₹1,000 - ₹1,800",
        "pricing_car": "₹2,800 - ₹4,500",
        "local_focus": "Local intra-district household and administrative relocations between Lesliganj rural block and Daltonganj district headquarters, courts, schools, and hospitals.",
        "reviews": [
            ("Suresh Kumar Pandey", "Lesliganj to Redma Daltonganj", "Shifted our 2 BHK residence within Palamu district. The crew reached Lesliganj promptly at 8 AM, packed everything neatly, and completed unloading in Redma by afternoon. Very polite team."),
            ("Manju Devi", "Nilambar-Pitambar Pur to Belwatika Daltonganj", "Handled our heavy Godrej almirahs, showcase, and delicate glassware with great care. Zero scratches and quick assembly at our new flat."),
            ("Bipin Bihari Sahu", "BDO Campus Lesliganj to Court Road Daltonganj", "Relocated on official transfer. Official GST invoice provided for seamless government reimbursement. Highly recommended service in Palamu.")
        ],
        "faqs": [
            ("How long does local shifting take from Lesliganj to Daltonganj town?", "The distance is only 18 km along the main district highway. Driving duration is roughly 30 to 40 minutes. Complete packing, transit, unloading, and furniture positioning are completed within 3 to 4 hours on the same day."),
            ("What are the rates for a 1 BHK or 2 BHK local move to Daltonganj?", "Local 1 BHK shifting starts from ₹3,500, while a typical 2 BHK household relocation costs between ₹5,500 and ₹8,500 depending on total goods volume and floor access."),
            ("Do you bring packing supplies directly to Lesliganj village homes?", "Yes, our moving truck brings fresh bubble rolls, 5-ply corrugated cartons, waterproof stretch film, and heavy adhesive tapes directly to your doorstep in Lesliganj."),
            ("Can you relocate two-wheelers locally from Lesliganj to Daltonganj?", "Yes, bikes and scooters are safely wrapped with scratch-resistant foam covers and transported in our closed container for ₹1,000 to ₹1,800."),
            ("Is same-day pickup and delivery guaranteed within Palamu district?", "Yes, 100% guaranteed same-day completion for all relocations between Lesliganj and Daltonganj town.")
        ]
    },
    {
        "id": 3,
        "slug": "lesliganj-to-garhwa-packers-and-movers",
        "origin": "Lesliganj",
        "dest": "Garhwa",
        "title": "Packers and Movers Lesliganj to Garhwa | Safe Inter-District Shifting",
        "desc": "Professional packers and movers from Lesliganj to Garhwa. 52 km express transit via Medininagar & NH-39, 5-layer packing, household & administrative relocations, car carrier, bike parcel.",
        "keywords": "lesliganj to garhwa packers and movers, packers and movers lesliganj to garhwa, house shifting lesliganj to garhwa, palamu to garhwa movers, safe interdistrict moving lesliganj, garhwa packers lesliganj",
        "distance": "52 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "State Highway to Medininagar, connecting westward via NH-39 directly into Garhwa district town",
        "origin_locality": "Lesliganj Bazar, Thana Road, CHC area, Kundri, Nilambar-Pitambar Pur Chowk",
        "dest_locality": "Garhwa Main Town, Ranka More, Sahijana, Majhiaon Road, Tandwa, Station Road Garhwa",
        "pricing_1bhk": "₹4,500 - ₹7,000",
        "pricing_2bhk": "₹7,000 - ₹10,500",
        "pricing_3bhk": "₹10,500 - ₹15,500",
        "pricing_villa": "₹15,000 - ₹22,000",
        "pricing_bike": "₹1,500 - ₹2,200",
        "pricing_car": "₹3,500 - ₹5,500",
        "local_focus": "Inter-district government transfers, banking officers, administrative staff, and trading families moving between Palamu and Garhwa districts.",
        "reviews": [
            ("Manoj Kumar Gupta", "Lesliganj to Ranka More Garhwa", "Transferred from Lesliganj block office to Garhwa. Shree Ashirwad provided heavy-duty cartons, expert bubble packing, and delivered our goods intact within 4 hours."),
            ("Anita Kujur", "Nilambar-Pitambar Pur to Sahijana Garhwa", "Our washing machine, TV, and glass dining set were packed with multiple protective layers. Delivered safely without a scratch. Highly satisfied."),
            ("Rameshwar Prasad", "Kundri Lesliganj to Station Road Garhwa", "Very cooperative and well-mannered shifting staff. Clean container truck and prompt reassembly of wooden beds.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Lesliganj to Garhwa?", "The road distance is approximately 52 km via Medininagar along NH-39. Driving time is roughly 1 to 1.5 hours. The entire relocation is completed on the same day within 4 to 6 hours."),
            ("Can you relocate fragile kitchenware and appliances safely?", "Yes, we use customized crockery boxes, thermocol cushioning, and high-density air bubble wrap to safeguard glassware and home appliances against road vibrations."),
            ("Do you provide car and two-wheeler carrier services to Garhwa?", "Yes, motorcycles are fastened with ratchet straps inside closed containers, and cars are transported on dedicated vehicle carriers."),
            ("What are the 2 BHK shifting charges from Lesliganj to Garhwa?", "A standard 2 BHK household relocation costs between ₹7,000 and ₹10,500, all-inclusive of packing materials, vehicle transport, loading, and unloading."),
            ("Are your shifting bills approved for government transfer claims?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved transporter. We issue GST invoices and consignment notes fully valid for official reimbursement.")
        ]
    },
    {
        "id": 4,
        "slug": "lesliganj-to-latehar-packers-and-movers",
        "origin": "Lesliganj",
        "dest": "Latehar",
        "title": "Packers and Movers Lesliganj to Latehar | Forest Belt Relocation",
        "desc": "Trusted packers and movers from Lesliganj to Latehar. 65 km transit via Satbarwa & NH-39, 5-layer packing, household & administrative relocations, car & bike parcel, full insurance.",
        "keywords": "lesliganj to latehar packers and movers, packers and movers lesliganj to latehar, house shifting lesliganj to latehar, palamu to latehar movers, car transport lesliganj to latehar, safe movers lesliganj",
        "distance": "65 km",
        "duration": "1.5 to 2 hours",
        "route_desc": "State Highway south to Satbarwa connecting to NH-39 south through Manika into Latehar district headquarters",
        "origin_locality": "Lesliganj Main Market, BDO Campus, Nilambar-Pitambar Pur, Thana Chowk, Kundri",
        "dest_locality": "Latehar Main Road, Court Road, Station Road, Demu, Chandwa Mor, Bypass Road Latehar",
        "pricing_1bhk": "₹5,000 - ₹7,800",
        "pricing_2bhk": "₹7,800 - ₹11,500",
        "pricing_3bhk": "₹11,500 - ₹16,500",
        "pricing_villa": "₹16,000 - ₹24,000",
        "pricing_bike": "₹1,600 - ₹2,500",
        "pricing_car": "₹3,800 - ₹6,000",
        "local_focus": "Administrative and forestry department transfers, bank employees, police personnel, and families relocating across the Palamu-Latehar district boundary.",
        "reviews": [
            ("Hemant Kumar Singh", "Lesliganj to Court Road Latehar", "Relocated on government transfer from Lesliganj to Latehar. The team arrived on time, packed all electronics with premium materials, and delivered by early afternoon. Flawless execution."),
            ("Pooja Kumari", "Lesliganj Bazar to Station Road Latehar", "Transported our 2 BHK apartment goods and scooty. Excellent handling, zero damage, and clear communication throughout the move."),
            ("Sunil Gope", "Nilambar-Pitambar Pur to Demu Latehar", "Very professional service. Sealed container truck ensured our furniture stayed clean throughout the journey.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Lesliganj to Latehar?", "The route covers approximately 65 km via Satbarwa and Manika on NH-39. Driving duration is roughly 1.5 to 2 hours. Door-to-door relocation is completed within 4 to 6 hours on the same day."),
            ("Do you provide door delivery in residential colonies across Latehar?", "Yes, our moving crew manages residential permissions, unloading, and room positioning across Latehar town and railway colony."),
            ("How do you protect delicate electronics like LED TVs and computers?", "We use multi-layer bubble film, corner guards, thermocol sheet lining, and heavy corrugated wooden crates for sensitive electronics."),
            ("What are the rates for a 2 BHK home shift to Latehar?", "A standard 2 BHK household relocation ranges between ₹7,800 and ₹11,500, covering full packing, transport, insurance documentation, and unloading."),
            ("Can you transport cars and bikes safely to Latehar?", "Yes, we provide dedicated two-wheeler parcel packing and car carrier transport with door-to-door pickup and delivery.")
        ]
    },
    {
        "id": 5,
        "slug": "lesliganj-to-jamshedpur-packers-and-movers",
        "origin": "Lesliganj",
        "dest": "Jamshedpur",
        "title": "Packers and Movers Lesliganj to Jamshedpur | Industrial Steel City Moving",
        "desc": "Expert packers and movers from Lesliganj to Jamshedpur (Tatanagar). 285 km transit via Ranchi Ring Road & NH-43, 5-layer packing, household moving, vehicle parcel, complete insurance.",
        "keywords": "lesliganj to jamshedpur packers and movers, packers and movers lesliganj to jamshedpur, house shifting lesliganj to jamshedpur, tatanagar movers lesliganj, car transport lesliganj jamshedpur, steel city packers",
        "distance": "285 km",
        "duration": "6.5 to 7.5 hours",
        "route_desc": "NH-39 via Latehar and Kuru to Ranchi Ring Road, then NH-43 / NH-18 into Jamshedpur / Tatanagar",
        "origin_locality": "Lesliganj Bazar, SDO/BDO area, Nilambar-Pitambar Pur, CHC area, Kundri",
        "dest_locality": "Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Baridih, Mango, Adityapur",
        "pricing_1bhk": "₹9,500 - ₹14,500",
        "pricing_2bhk": "₹14,000 - ₹21,000",
        "pricing_3bhk": "₹20,000 - ₹29,000",
        "pricing_villa": "₹28,000 - ₹40,000",
        "pricing_bike": "₹2,800 - ₹4,200",
        "pricing_car": "₹7,500 - ₹12,000",
        "local_focus": "Relocating families, Tata Steel / vendor industrial workers, technical supervisors, and students moving from Lesliganj block to the industrial hub of Jamshedpur.",
        "reviews": [
            ("Devendra Kumar Roy", "Lesliganj to Telco Colony Jamshedpur", "Shifted our 3 BHK household items. The packing crew was extremely careful with our glass dining table and large refrigerator. Delivered on schedule in Telco without a blemish."),
            ("Vinay Tirkey", "Nilambar-Pitambar Pur to Kadma Jamshedpur", "Smooth relocation experience. Container truck arrived sealed, and workers placed all heavy furniture in designated bedrooms."),
            ("Santosh Kumar Mahto", "Kundri Lesliganj to Adityapur Jamshedpur", "Transparent pricing, no hidden costs, and prompt customer assistance. Highly satisfied with Shree Ashirwad Packers.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Lesliganj to Jamshedpur?", "The distance is approximately 285 km via Ranchi Ring Road and NH-43. Driving duration is roughly 6.5 to 7.5 hours. Complete relocation is achieved within 24 hours of loading."),
            ("Can you deliver to residential colonies like Telco, Kadma, and Bistupur?", "Yes, our team is well-versed with Jamshedpur layouts and manages smooth delivery to all residential sectors and Adityapur apartments."),
            ("What packing materials are used for long-distance transport?", "We employ 5-tier industrial packaging including LDPE stretch film, multi-layer air bubble sheets, 5-ply kraft corrugated cardboard, and heavy-duty strapping."),
            ("What are the shifting charges for a 2 BHK home from Lesliganj to Jamshedpur?", "A standard 2 BHK household relocation costs between ₹14,000 and ₹21,000 depending on total volume, dismantling needs, and floor elevations."),
            ("Do you provide insurance coverage for household goods?", "Yes, comprehensive transit insurance is provided to cover any unforeseen transit risks during highway journey.")
        ]
    },
    # Group 2: Inside Jharkhand to Lesliganj (Routes 6–10)
    {
        "id": 6,
        "slug": "ranchi-to-lesliganj-packers-and-movers",
        "origin": "Ranchi",
        "dest": "Lesliganj",
        "title": "Packers and Movers Ranchi to Lesliganj | Inbound Capital Relocation",
        "desc": "Trusted packers and movers from Ranchi to Lesliganj (Nilambar-Pitambar Pur). 155 km transit via Kuru & Latehar/NH-39, 5-layer packing, home shifting, car & bike parcel, door-to-door delivery.",
        "keywords": "ranchi to lesliganj packers and movers, packers and movers ranchi to lesliganj, house shifting ranchi to lesliganj, ranchi to palamu movers, car transport ranchi lesliganj, bike parcel ranchi lesliganj, safe movers ranchi",
        "distance": "155 km",
        "duration": "3.5 to 4 hours",
        "route_desc": "NH-143A / NH-39 northwest from Ranchi via Kuru, Chandwa, Latehar, and Satbarwa into Lesliganj block",
        "origin_locality": "Harmu, Morabadi, Bariatu, Doranda, Kanke Road, Lalpur, Hinoo, Ratu Road, Dhurwa",
        "dest_locality": "Lesliganj Bazar, Nilambar-Pitambar Pur Chowk, BDO Campus, Thana Road, CHC Hospital area, Kundri",
        "pricing_1bhk": "₹7,000 - ₹10,500",
        "pricing_2bhk": "₹10,500 - ₹15,500",
        "pricing_3bhk": "₹15,000 - ₹22,000",
        "pricing_villa": "₹21,000 - ₹32,000",
        "pricing_bike": "₹2,000 - ₹3,200",
        "pricing_car": "₹5,000 - ₹8,000",
        "local_focus": "Returning families, appointed block development officers, medical doctors joining Lesliganj CHC, teachers, and banking professionals moving from Ranchi to Lesliganj.",
        "reviews": [
            ("Dr. Alok Kumar Das", "Bariatu Ranchi to Lesliganj CHC", "Posted as medical officer to Lesliganj. Shree Ashirwad loaded everything in Ranchi in the morning and safely delivered to my quarters in Lesliganj by evening. Perfect service!"),
            ("Shashi Bhushan Roy", "Doranda Ranchi to Lesliganj Bazar", "Shifted our family ancestral home belongings from Ranchi to Lesliganj. Their sealed container truck protected everything from rain and dust."),
            ("Pramod Kumar Toppo", "Harmu Ranchi to Kundri Lesliganj", "Very prompt and professional moving team. Handled our glass showcase and refrigerator with extreme care.")
        ],
        "faqs": [
            ("How long does moving take from Ranchi to Lesliganj?", "The route covers about 155 km via Kuru and Latehar on NH-39. Driving duration is roughly 3.5 to 4 hours. Total shifting is completed on the same day within 6 to 8 hours."),
            ("Can your truck reach interior villages and rural roads around Lesliganj?", "Yes, we operate medium-sized container vehicles specifically suited for rural roads in Lesliganj, Kundri, and Nilambar-Pitambar Pur, ensuring safe door-to-door delivery."),
            ("What are the 2 BHK shifting charges from Ranchi to Lesliganj?", "A typical 2 BHK household relocation ranges between ₹10,500 and ₹15,500, including packing materials, vehicle transport, loading, and unloading."),
            ("Can I transport my bike or scooter from Ranchi to Lesliganj?", "Yes, two-wheelers are securely crated with bubble wrap and secured with ratchet belts inside our closed container truck for ₹2,000 to ₹3,200."),
            ("Do you provide itemized bills for government transfer claims?", "Yes, we provide 100% audit-compliant GST invoices, consignment notes, and itemized packing lists approved by all government departments and PSUs.")
        ]
    },
    {
        "id": 7,
        "slug": "daltonganj-to-lesliganj-packers-and-movers",
        "origin": "Daltonganj",
        "dest": "Lesliganj",
        "title": "Packers and Movers Daltonganj to Lesliganj | Local Intra-District Moving",
        "desc": "Professional packers and movers from Daltonganj (Medininagar) to Lesliganj block. 18 km local express transit, 5-layer packing, domestic & office shifting, same-day delivery.",
        "keywords": "daltonganj to lesliganj packers and movers, packers and movers daltonganj to lesliganj, house shifting daltonganj to lesliganj, medininagar to lesliganj movers, local movers daltonganj, safe packers daltonganj",
        "distance": "18 km",
        "duration": "30 to 40 minutes",
        "route_desc": "Medininagar-Lesliganj Road connecting Daltonganj town eastward directly into Lesliganj block centre",
        "origin_locality": "Redma, Belwatika, Hamid Ganj, Shahpur, Chianki, Sudna, Daltonganj Station Road, Court Compound",
        "dest_locality": "Lesliganj Main Market, BDO Campus, Thana Chowk, Nilambar-Pitambar Pur, Kundri",
        "pricing_1bhk": "₹3,500 - ₹5,500",
        "pricing_2bhk": "₹5,500 - ₹8,500",
        "pricing_3bhk": "₹8,500 - ₹12,500",
        "pricing_villa": "₹12,000 - ₹18,000",
        "pricing_bike": "₹1,000 - ₹1,800",
        "pricing_car": "₹2,800 - ₹4,500",
        "local_focus": "Government officers, police personnel, healthcare teams, and retail suppliers shifting from Daltonganj district headquarters into Lesliganj block.",
        "reviews": [
            ("Rajendra Prasad", "Redma Daltonganj to Lesliganj Bazar", "Shifted our grocery shop inventory and household items. The crew was fast, polite, and handled all heavy goods with dollies. Very reasonable cost."),
            ("Sister Theresa", "Belwatika Daltonganj to Lesliganj", "Excellent relocation service. Their workers packed all cupboards, books, and kitchen appliances neatly. Zero damage."),
            ("Subodh Kumar", "Sudna Daltonganj to Nilambar-Pitambar Pur", "Completed moving within 3.5 hours total. Punctual, efficient, and careful team. Highly recommended.")
        ],
        "faqs": [
            ("How much time does shifting take from Daltonganj to Lesliganj?", "Driving time across the 18 km stretch is roughly 30 to 40 minutes. Complete door-to-door relocation is finished within 3 to 4 hours on the same day."),
            ("What is the cost of moving a 1 BHK or 2 BHK home to Lesliganj?", "A 1 BHK move costs ₹3,500 to ₹5,500, while a 2 BHK relocation costs between ₹5,500 and ₹8,500 based on total inventory volume."),
            ("Do you supply bubble wrap and packing cartons in Daltonganj?", "Yes, our team brings virgin bubble sheets, 5-ply cartons, and packing tape directly to your home in Daltonganj."),
            ("Can you relocate two-wheelers locally from Daltonganj to Lesliganj?", "Yes, bikes and scooters are safely wrapped with protective foam and transported in our closed truck for ₹1,000 to ₹1,800."),
            ("Is same-day pickup and delivery guaranteed?", "Yes, 100% guaranteed same-day completion for all intra-district relocations within Palamu district.")
        ]
    },
    {
        "id": 8,
        "slug": "garhwa-to-lesliganj-packers-and-movers",
        "origin": "Garhwa",
        "dest": "Lesliganj",
        "title": "Packers and Movers Garhwa to Lesliganj | Inter-District Relocation",
        "desc": "Reliable packers and movers from Garhwa to Lesliganj, Palamu. 52 km transit via NH-39 & Medininagar, 5-layer packing, domestic shifting, car carrier, bike parcel, full insurance.",
        "keywords": "garhwa to lesliganj packers and movers, packers and movers garhwa to lesliganj, house shifting garhwa to lesliganj, garhwa to palamu movers, safe movers garhwa, packers near lesliganj",
        "distance": "52 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "NH-39 east from Garhwa town to Medininagar, continuing along State Highway directly into Lesliganj",
        "origin_locality": "Garhwa Main Town, Ranka More, Sahijana, Majhiaon Road, Tandwa, Station Road Garhwa",
        "dest_locality": "Lesliganj Main Market, BDO Campus, Thana Chowk, Nilambar-Pitambar Pur, Kundri",
        "pricing_1bhk": "₹4,500 - ₹7,000",
        "pricing_2bhk": "₹7,000 - ₹10,500",
        "pricing_3bhk": "₹10,500 - ₹15,500",
        "pricing_villa": "₹15,000 - ₹22,000",
        "pricing_bike": "₹1,500 - ₹2,200",
        "pricing_car": "₹3,500 - ₹5,500",
        "local_focus": "Inter-district government transfers, school teachers, medical officers, and trading families moving east from Garhwa into Lesliganj block.",
        "reviews": [
            ("Umesh Kumar", "Garhwa Ranka More to Lesliganj", "Transferred on government duty to Lesliganj. Shree Ashirwad handled the packing and delivery seamlessly. Everything arrived intact on the same day."),
            ("Meena Kumari", "Sahijana Garhwa to Lesliganj Bazar", "Very courteous crew. They wrapped my washing machine and glass tables with multiple layers of bubble wrap. Great job!"),
            ("Satish Bhagat", "Tandwa Garhwa to Nilambar-Pitambar Pur", "Reasonable rates, no hidden fees, and safe transit. Highly recommended for moves to Palamu district.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Garhwa to Lesliganj?", "The route covers about 52 km via Medininagar along NH-39. Driving duration is approximately 1 to 1.5 hours. Complete shifting takes 4 to 6 hours on the same day."),
            ("Can you relocate fragile kitchen items and electronics safely?", "Yes, our team uses specialized crockery cartons, air bubble cushioning, and edge guards to ensure zero damage during highway transit."),
            ("What are the 2 BHK shifting charges from Garhwa to Lesliganj?", "A typical 2 BHK household relocation costs between ₹7,000 and ₹10,500, covering full packing, transport, and unloading."),
            ("Do you transport motorcycles and scooters safely?", "Yes, two-wheelers are securely packed and tied with ratchet belts inside our closed container truck for ₹1,500 to ₹2,200."),
            ("Are your bills approved for government reimbursement?", "Yes, we provide official GST invoices and bilty notes fully eligible for government and bank employee transfer claims.")
        ]
    },
    {
        "id": 9,
        "slug": "latehar-to-lesliganj-packers-and-movers",
        "origin": "Latehar",
        "dest": "Lesliganj",
        "title": "Packers and Movers Latehar to Lesliganj | Safe Inbound Relocation",
        "desc": "Trusted packers and movers from Latehar to Lesliganj, Palamu. 65 km transit via NH-39 & Satbarwa, 5-layer packing, corporate & home shifting, vehicle carrier.",
        "keywords": "latehar to lesliganj packers and movers, packers and movers latehar to lesliganj, house shifting latehar to lesliganj, latehar to palamu movers, car transport latehar lesliganj, safe movers latehar",
        "distance": "65 km",
        "duration": "1.5 to 2 hours",
        "route_desc": "NH-39 north from Latehar through Manika and Satbarwa, turning onto State Highway into Lesliganj",
        "origin_locality": "Latehar Main Road, Court Road, Station Road, Demu, Chandwa Mor, Bypass Road Latehar",
        "dest_locality": "Lesliganj Bazar, BDO Office Road, Thana Road, CHC Hospital area, Kundri",
        "pricing_1bhk": "₹5,000 - ₹7,800",
        "pricing_2bhk": "₹7,800 - ₹11,500",
        "pricing_3bhk": "₹11,500 - ₹16,500",
        "pricing_villa": "₹16,000 - ₹24,000",
        "pricing_bike": "₹1,600 - ₹2,500",
        "pricing_car": "₹3,800 - ₹6,000",
        "local_focus": "Returning administrative workers, forest officers, and families relocating from Latehar district north into Lesliganj block.",
        "reviews": [
            ("Ranjan Kumar Mahto", "Latehar Main Road to Lesliganj", "Shifted our 3 BHK home back to Lesliganj. Crew handled our heavy wooden furniture with immense care. Arrived on the same day without a scratch."),
            ("Sunita Devi", "Court Road Latehar to Lesliganj Bazar", "Packed all our crockery, refrigerator, and clothes in sturdy boxes. Unloaded in Lesliganj smoothly. Very satisfied."),
            ("Deepak Soren", "Station Road Latehar to Nilambar-Pitambar Pur", "Safe bike transport and household shifting. Driver maintained constant contact throughout the journey.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Latehar to Lesliganj?", "The highway route is approximately 65 km via Manika and Satbarwa on NH-39. Driving duration is roughly 1.5 to 2 hours. Door-to-door relocation takes roughly 4 to 6 hours."),
            ("Can you pick up from government colony quarters in Latehar?", "Yes, our moving crew is experienced with colony gate permissions and official procedures across Latehar town."),
            ("How do you ensure wooden furniture remains scratch-free?", "We wrap all wooden surfaces in foam blankets, bubble wrap, and stretch film, securing them with tensioned ratchet straps inside the container."),
            ("What are the 2 BHK moving charges from Latehar to Lesliganj?", "A standard 2 BHK household relocation costs between ₹7,800 and ₹11,500 based on goods volume and packing requirements."),
            ("Do you provide transit insurance for moves to Palamu district?", "Yes, comprehensive transit insurance is provided to cover any accidental risk or damage during highway transit.")
        ]
    },
    {
        "id": 10,
        "slug": "jamshedpur-to-lesliganj-packers-and-movers",
        "origin": "Jamshedpur",
        "dest": "Lesliganj",
        "title": "Packers and Movers Jamshedpur to Lesliganj | Reliable Shifting Services",
        "desc": "Professional packers and movers from Jamshedpur to Lesliganj. 285 km express transit via Ranchi Ring Road & NH-39, 5-layer packing, home shifting, car & bike parcel.",
        "keywords": "jamshedpur to lesliganj packers and movers, packers and movers jamshedpur to lesliganj, house shifting jamshedpur to lesliganj, tatanagar to palamu movers, car transport jamshedpur lesliganj, safe movers jamshedpur",
        "distance": "285 km",
        "duration": "6.5 to 7.5 hours",
        "route_desc": "NH-18 / NH-43 to Ranchi Ring Road, then NH-39 northwest through Kuru and Latehar into Lesliganj",
        "origin_locality": "Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Baridih, Mango, Adityapur",
        "dest_locality": "Lesliganj Main Market, BDO Campus, Thana Chowk, Nilambar-Pitambar Pur, Kundri",
        "pricing_1bhk": "₹9,500 - ₹14,500",
        "pricing_2bhk": "₹14,000 - ₹21,000",
        "pricing_3bhk": "₹20,000 - ₹29,000",
        "pricing_villa": "₹28,000 - ₹40,000",
        "pricing_bike": "₹2,800 - ₹4,200",
        "pricing_car": "₹7,500 - ₹12,000",
        "local_focus": "Returning industrial workers, retired steel company staff, and native families relocating from Jamshedpur back to Lesliganj block.",
        "reviews": [
            ("Surendra Nath Mishra", "Telco Jamshedpur to Lesliganj", "Shifted our family home back to our native village in Lesliganj. The team was disciplined, fast, and packed our heavy appliances with utmost care."),
            ("Kavita Kumari", "Kadma Jamshedpur to Lesliganj Bazar", "Next-day delivery within 24 hours total. Sealed container truck kept everything completely dust-free. Very pleased with their service."),
            ("Ajit Kumar Pandey", "Sakchi Jamshedpur to Nilambar-Pitambar Pur", "Official bill approved smoothly by our employer. Perfect packing and very polite laborers.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Jamshedpur to Lesliganj?", "The route covers about 285 km via Ranchi Ring Road and NH-39. Driving duration is approximately 6.5 to 7.5 hours. Total relocation takes roughly 24 hours."),
            ("Do you handle relocations for Tata Steel employees from Jamshedpur?", "Yes, we regularly service transfers from Jamshedpur to all Jharkhand districts, providing official IBA-approved bills for reimbursement."),
            ("How do you protect fragile home items during transit?", "We use 5-tier packaging defense including bubble wrap, heavy corrugated sheets, foam edge guards, and tight stretch wraps."),
            ("What are the rates for 2 BHK home shifting between Jamshedpur and Lesliganj?", "A standard 2 BHK apartment relocation ranges from ₹14,000 to ₹21,000 based on goods volume and floor elevations."),
            ("Can you move cars and bikes safely from Jamshedpur?", "Yes, we provide dedicated bike crating and car transport service using closed container vehicles, ensuring complete protection.")
        ]
    },
    # Group 3: Lesliganj to Outside Jharkhand (Routes 11–15)
    {
        "id": 11,
        "slug": "lesliganj-to-patna-packers-and-movers",
        "origin": "Lesliganj",
        "dest": "Patna",
        "title": "Packers and Movers Lesliganj to Patna | Interstate Bihar Relocation",
        "desc": "Trusted packers and movers from Lesliganj to Patna, Bihar. 235 km express transit via Hariharganj & Aurangabad/NH-139, 5-layer packing, home & corporate relocations, vehicle parcel, full insurance.",
        "keywords": "lesliganj to patna packers and movers, packers and movers lesliganj to patna, house shifting lesliganj to patna, palamu to patna movers, bihar border packers lesliganj, safe movers patna",
        "distance": "235 km",
        "duration": "5.5 to 6.5 hours",
        "route_desc": "State Highway north through Chhatarpur, Hariharganj border, Aurangabad, Daudnagar, and NH-139 directly into Patna",
        "origin_locality": "Lesliganj Bazar, Nilambar-Pitambar Pur Chowk, BDO Campus, Thana Road, CHC Hospital area, Kundri",
        "dest_locality": "Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur Cantt, Rajendra Nagar, Anisabad",
        "pricing_1bhk": "₹9,000 - ₹13,500",
        "pricing_2bhk": "₹13,500 - ₹19,500",
        "pricing_3bhk": "₹19,000 - ₹27,000",
        "pricing_villa": "₹26,000 - ₹38,000",
        "pricing_bike": "₹2,600 - ₹3,800",
        "pricing_car": "₹7,000 - ₹11,000",
        "local_focus": "Educational relocations, healthcare transfers, government administrative personnel, and families shifting from Lesliganj block to Bihar's capital city Patna.",
        "reviews": [
            ("Ashok Kumar Pradhan", "Lesliganj to Bailey Road Patna", "Moved our household from Lesliganj to Patna. Quick 6-hour transit via Aurangabad. Seamless border clearance and zero damage to our glassware."),
            ("Dr. Smita Mohanty", "Lesliganj CHC to Kankarbagh Patna", "Relocated on joining medical institute in Patna. Excellent packing, courteous movers, and prompt same-day setup."),
            ("Dilip Kumar Sahu", "Nilambar-Pitambar Pur to Danapur Patna", "Transported our 2 BHK goods and Hero Splendor. Sealed container truck and reasonable charges. Highly satisfied.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Lesliganj to Patna?", "The highway distance is approximately 235 km via Hariharganj, Aurangabad, and NH-139. Driving duration is roughly 5.5 to 6.5 hours. Complete moving takes 10 to 12 hours on the same day."),
            ("How do you handle the interstate border crossing between Jharkhand and Bihar?", "Our commercial vehicles have valid national permits, e-way bills, and road tax clearances, ensuring hassle-free border transit at Hariharganj."),
            ("What are the standard charges for shifting a 2 BHK home to Patna?", "A typical 2 BHK household relocation costs between ₹13,500 and ₹19,500, including 5-layer packing, vehicle freight, loading, and unloading."),
            ("Can you move motorcycles safely across the Bihar border?", "Yes, two-wheelers are wrapped with scratch-resistant bubble sheets and secured with ratchet belts inside our closed container truck for ₹2,600 to ₹3,800."),
            ("Do you provide transit insurance for cross-border moves?", "Yes, we provide 100% comprehensive transit insurance underwritten by national insurance companies.")
        ]
    },
    {
        "id": 12,
        "slug": "lesliganj-to-gaya-packers-and-movers",
        "origin": "Lesliganj",
        "dest": "Gaya",
        "title": "Packers and Movers Lesliganj to Gaya | Pilgrimage & Educational Relocation",
        "desc": "Professional packers and movers from Lesliganj to Gaya. 145 km transit via Hariharganj & Dobhi/NH-22, 5-layer packing, domestic shifting, car carrier, bike parcel, door-to-door delivery.",
        "keywords": "lesliganj to gaya packers and movers, packers and movers lesliganj to gaya, house shifting lesliganj to gaya, palamu to gaya movers, dobhi packers lesliganj, safe movers gaya",
        "distance": "145 km",
        "duration": "3.5 to 4 hours",
        "route_desc": "State Highway north through Chhatarpur, Hariharganj, Dobhi, connecting to NH-22 directly into Gaya city",
        "origin_locality": "Lesliganj Main Market, BDO Campus, Thana Chowk, Nilambar-Pitambar Pur, Kundri",
        "dest_locality": "Gaya Town, AP Colony, Civil Lines, Rampur, Bodh Gaya Road, Delha, Station Road Gaya",
        "pricing_1bhk": "₹6,500 - ₹9,800",
        "pricing_2bhk": "₹9,800 - ₹14,500",
        "pricing_3bhk": "₹14,000 - ₹20,500",
        "pricing_villa": "₹19,000 - ₹28,000",
        "pricing_bike": "₹2,000 - ₹3,000",
        "pricing_car": "₹4,800 - ₹7,500",
        "local_focus": "Commercial relocations, railway staff at Gaya junction, pilgrims, teachers, and trading families moving from Lesliganj block to Gaya.",
        "reviews": [
            ("Vinod Kumar Agrawal", "Lesliganj to AP Colony Gaya", "Moved our complete family residence to Gaya. The team handled our heavy wooden furniture and fragile crockery with exceptional skill. Delivered in Gaya within 6 hours."),
            ("Rupesh Bhagat", "Lesliganj Bazar to Civil Lines Gaya", "Smooth transit across Dobhi. Sealed container truck protected everything from rain and dust. Excellent service!"),
            ("Praveen Ekka", "Nilambar-Pitambar Pur to Rampur Gaya", "Reasonable rates, professional crating of our electronics, and prompt delivery. Highly recommended for moves to Gaya.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Lesliganj to Gaya?", "The highway route spans approximately 145 km via Hariharganj and Dobhi on NH-22. Driving duration is roughly 3.5 to 4 hours. Door-to-door relocation is completed within 6 to 8 hours on the same day."),
            ("How do you manage the interstate border checkpost into Bihar?", "Our commercial fleet carries all required interstate transport permits, e-way bills, and commercial documentation for quick border crossing at Hariharganj."),
            ("What are the 2 BHK household moving charges from Lesliganj to Gaya?", "A standard 2 BHK apartment relocation costs between ₹9,800 and ₹14,500, covering full 5-layer packing, loading, transport, and unloading."),
            ("Can you transport cars and two-wheelers to Gaya?", "Yes, we transport bikes inside secure container trucks and cars via dedicated enclosed carriers with door pickup and delivery."),
            ("Is transit insurance provided for moves to Bihar?", "Yes, comprehensive goods-in-transit insurance coverage is provided to cover loss or damage during highway transit.")
        ]
    },
    {
        "id": 13,
        "slug": "lesliganj-to-varanasi-packers-and-movers",
        "origin": "Lesliganj",
        "dest": "Varanasi",
        "title": "Packers and Movers Lesliganj to Varanasi | Interstate UP Relocation",
        "desc": "Trusted packers and movers from Lesliganj to Varanasi. 240 km express transit via Sasaram & NH-19 GT Road, 5-layer packing, household moving, vehicle carrier, door-to-door delivery.",
        "keywords": "lesliganj to varanasi packers and movers, packers and movers lesliganj to varanasi, house shifting lesliganj to varanasi, palamu to varanasi movers, car transport lesliganj to varanasi, safe movers varanasi",
        "distance": "240 km",
        "duration": "5.5 to 6.5 hours",
        "route_desc": "Via Daltonganj, Garhwa Road, Sasaram connecting to NH-19 (GT Road) through Mughalsarai directly into Varanasi",
        "origin_locality": "Lesliganj Bazar, Nilambar-Pitambar Pur Chowk, BDO Campus, Thana Road, CHC Hospital area, Kundri",
        "dest_locality": "Sigra, Lanka, Mahmoorganj, Bhelupur, Cantt, Shivpur, Pandeypur, BHU Campus Varanasi",
        "pricing_1bhk": "₹9,500 - ₹14,000",
        "pricing_2bhk": "₹14,000 - ₹20,000",
        "pricing_3bhk": "₹19,500 - ₹28,000",
        "pricing_villa": "₹27,000 - ₹39,000",
        "pricing_bike": "₹2,800 - ₹4,200",
        "pricing_car": "₹7,500 - ₹12,000",
        "local_focus": "Commercial traders, university students at Banaras Hindu University (BHU), railway personnel, and families shifting from Lesliganj to Varanasi.",
        "reviews": [
            ("Anirban Mukherjee", "Lesliganj to Sigra Varanasi", "Moved our 3 BHK household from Lesliganj to Varanasi. The crew was very courteous and packed our TV and refrigerator with triple bubble wrapping. Delivered on schedule without a scratch."),
            ("Swati Roy", "Lesliganj Bazar to Lanka Varanasi", "Flawless long-distance moving. Driver gave regular GPS updates along the highway. Everything was unpacked neatly in Lanka."),
            ("Debabrata Das", "Nilambar-Pitambar Pur to Cantt Varanasi", "Very reasonable pricing for 240 km transit. Sealed container truck ensured our furniture remained 100% clean.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Lesliganj to Varanasi?", "The route spans approximately 240 km via Sasaram and NH-19 GT Road. Driving duration is roughly 5.5 to 6.5 hours. Total door-to-door relocation is executed within 24 hours."),
            ("Can you deliver to residential colonies near BHU Lanka and Sigra?", "Yes, our delivery network manages municipal vehicle guidelines, local permits, and society clearances across Varanasi."),
            ("How do you protect fragile items during highway transit?", "We use 5-layer protective packing with heavy air bubble wrap, corrugated sheets, foam edge protectors, and tight stretch wrapping."),
            ("What are the 2 BHK shifting charges from Lesliganj to Varanasi?", "A typical 2 BHK household move ranges between ₹14,000 and ₹20,000, all-inclusive of packing materials, loading, highway tolls, and unloading."),
            ("Do you provide car and bike carrier services to Varanasi?", "Yes, we transport two-wheelers inside closed containers and cars via dedicated hydraulic vehicle carriers.")
        ]
    },
    {
        "id": 14,
        "slug": "lesliganj-to-delhi-packers-and-movers",
        "origin": "Lesliganj",
        "dest": "Delhi NCR",
        "title": "Packers and Movers Lesliganj to Delhi | Long-Distance National Relocation",
        "desc": "Expert packers and movers from Lesliganj to Delhi NCR (Delhi, Noida, Gurgaon). 1,080 km express transit via Yamuna Expressway, 5-layer packing, car carrier, GPS container.",
        "keywords": "lesliganj to delhi packers and movers, packers and movers lesliganj to delhi, house shifting lesliganj to delhi, lesliganj to noida movers, gurgaon to lesliganj packers, car transport lesliganj delhi, national movers lesliganj",
        "distance": "1,080 km",
        "duration": "22 to 26 hours",
        "route_desc": "Via Garhwa Road to Sasaram, NH-19 GT Road via Varanasi, Prayagraj, Kanpur, and Yamuna Expressway into Delhi NCR",
        "origin_locality": "Lesliganj Main Market, BDO Campus, Thana Chowk, Nilambar-Pitambar Pur, Kundri",
        "dest_locality": "Delhi (Dwarka, Rohini, South Delhi), Noida, Greater Noida, Gurgaon (Cyber City, Golf Course Road), Faridabad",
        "pricing_1bhk": "₹17,000 - ₹25,000",
        "pricing_2bhk": "₹24,000 - ₹36,000",
        "pricing_3bhk": "₹34,000 - ₹50,000",
        "pricing_villa": "₹46,000 - ₹72,000",
        "pricing_bike": "₹4,800 - ₹7,200",
        "pricing_car": "₹13,000 - ₹21,000",
        "local_focus": "Defense officers, central government personnel, corporate executives, and students relocating 1,080 km from Lesliganj to the Delhi National Capital Region.",
        "reviews": [
            ("Capt. Abhishek Tirkey", "Lesliganj to Delhi Cantt", "Shifted our household on defense transfer. Sealed container truck arrived with seal intact. Every piece of furniture and kitchenware was in pristine condition."),
            ("Sandeep Kumar Sharma", "Lesliganj Bazar to Noida Sector 62", "Outstanding national relocation service! They custom-crated our 65-inch television and computer setup. Arrived in Noida right on schedule."),
            ("Pooja Verma", "Nilambar-Pitambar Pur to Gurgaon Cyber City", "Extremely professional team. Clear communication, live GPS tracking, and genuine pricing. Highly recommended.")
        ],
        "faqs": [
            ("How long does moving take from Lesliganj to Delhi NCR?", "The distance is approximately 1,080 km via Sasaram, NH-19, and Yamuna Expressway. Driving time is roughly 22 to 26 hours. Consignments are delivered within 3 to 4 days of loading."),
            ("How do you safeguard goods during long-distance 1,080 km transit?", "We use dedicated sealed container trucks with zero transshipment, 5-layer industrial packaging, and ratchet belt securing to eliminate shifting."),
            ("What are the 2 BHK shifting charges from Lesliganj to Delhi NCR?", "A standard 2 BHK household relocation costs between ₹24,000 and ₹36,000, covering full export-quality packing, transit freight, and unloading."),
            ("Can you transport my car or SUV safely to Delhi/Gurgaon?", "Yes, cars are transported on specialized enclosed multi-car trailers with hydraulic loading ramps and all-risk transit insurance."),
            ("Are your bills approved for corporate and central government transfer claims?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved transporter providing GST invoices and bilty notes recognized across India.")
        ]
    },
    {
        "id": 15,
        "slug": "lesliganj-to-kolkata-packers-and-movers",
        "origin": "Lesliganj",
        "dest": "Kolkata",
        "title": "Packers and Movers Lesliganj to Kolkata | Interstate Metro Relocation",
        "desc": "Dependable packers and movers from Lesliganj to Kolkata. 545 km transit via Ranchi Ring Road & NH-16, 5-layer packing, corporate & home relocations, vehicle parcel, fast delivery.",
        "keywords": "lesliganj to kolkata packers and movers, packers and movers lesliganj to kolkata, house shifting lesliganj to kolkata, palamu to kolkata movers, car transport lesliganj to kolkata, safe movers kolkata",
        "distance": "545 km",
        "duration": "11.5 to 13 hours",
        "route_desc": "NH-39 south to Ranchi Ring Road, then NH-16 / NH-49 via Baharagora and Kharagpur into Kolkata",
        "origin_locality": "Lesliganj Bazar, Nilambar-Pitambar Pur Chowk, BDO Campus, Thana Road, CHC Hospital area, Kundri",
        "dest_locality": "Salt Lake, New Town, Rajarhat, South City, Behala, Howrah, Jadavpur, Ballygunge",
        "pricing_1bhk": "₹14,000 - ₹20,000",
        "pricing_2bhk": "₹19,000 - ₹27,000",
        "pricing_3bhk": "₹26,000 - ₹37,000",
        "pricing_villa": "₹35,000 - ₹52,000",
        "pricing_bike": "₹3,800 - ₹5,500",
        "pricing_car": "₹11,000 - ₹17,000",
        "local_focus": "IT professionals, corporate transfers, university students, and families shifting from Lesliganj block to the Kolkata metropolitan region.",
        "reviews": [
            ("Dr. Binod Kumar Sinha", "Lesliganj to Salt Lake Kolkata", "Relocated from Lesliganj to Kolkata. The team packed all delicate books and home belongings with great diligence. Delivered in Kolkata within 36 hours."),
            ("Sunil Kumar Singh", "Lesliganj Bazar to New Town Kolkata", "Very reliable service. Heavy almirahs, double beds, and refrigerator reached safely without a single scratch."),
            ("Prakash Chandra", "Nilambar-Pitambar Pur to Howrah", "Prompt packing, polite workers, and transparent billing. Highly recommended for moves to West Bengal.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Lesliganj to Kolkata?", "The highway route spans approximately 545 km via Ranchi Ring Road, Baharagora, and NH-16. Driving duration is roughly 11.5 to 13 hours. Delivery is completed within 36 to 48 hours."),
            ("Can your crew pack fragile kitchen crockeries and appliances safely?", "Yes, our team uses specialized crockery cartons, bubble wraps, and thermocol padding for complete protection."),
            ("What are the 2 BHK shifting charges from Lesliganj to Kolkata?", "A standard 2 BHK household relocation costs between ₹19,000 and ₹27,000, all-inclusive of packing materials, transport, and unloading."),
            ("Can I ship my motorcycle from Lesliganj to Kolkata?", "Yes, two-wheelers are securely packed and tied with ratchet belts inside our closed container truck for ₹3,800 to ₹5,500."),
            ("Do you provide transit insurance for moves to West Bengal?", "Yes, comprehensive transit insurance is provided to cover any unforeseen transit risks during highway travel.")
        ]
    },
    # Group 4: Outside Jharkhand to Lesliganj (Routes 16–20)
    {
        "id": 16,
        "slug": "patna-to-lesliganj-packers-and-movers",
        "origin": "Patna",
        "dest": "Lesliganj",
        "title": "Packers and Movers Patna to Lesliganj | Inbound Bihar Moving",
        "desc": "Trusted packers and movers from Patna, Bihar to Lesliganj. 235 km express transit via NH-139, Daudnagar & Aurangabad, 5-layer packing, home shifting, vehicle carrier, door delivery.",
        "keywords": "patna to lesliganj packers and movers, packers and movers patna to lesliganj, house shifting patna to lesliganj, patna to palamu movers, bihar to jharkhand packers, safe movers patna",
        "distance": "235 km",
        "duration": "5.5 to 6.5 hours",
        "route_desc": "NH-139 south from Patna through Bikram, Daudnagar, Aurangabad, Hariharganj border into Lesliganj",
        "origin_locality": "Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur Cantt, Rajendra Nagar",
        "dest_locality": "Lesliganj Bazar, Nilambar-Pitambar Pur Chowk, BDO Campus, Thana Road, CHC Hospital area, Kundri",
        "pricing_1bhk": "₹9,000 - ₹13,500",
        "pricing_2bhk": "₹13,500 - ₹19,500",
        "pricing_3bhk": "₹19,000 - ₹27,000",
        "pricing_villa": "₹26,000 - ₹38,000",
        "pricing_bike": "₹2,600 - ₹3,800",
        "pricing_car": "₹7,000 - ₹11,000",
        "local_focus": "Returning government officers, healthcare workers, and families moving across the Bihar-Jharkhand border into Lesliganj block.",
        "reviews": [
            ("Manoranjan Sahu", "Bailey Road Patna to Lesliganj", "Shifted our household from Patna back to Lesliganj. Crew loaded carefully and completed delivery in Lesliganj by evening. Zero scratches."),
            ("Pramila Devi", "Kankarbagh Patna to Lesliganj Bazar", "Handled our showcase, LED TV, and Godrej almirahs with extreme caution. Friendly and hardworking team."),
            ("Naveen Kumar", "Boring Road Patna to Nilambar-Pitambar Pur", "Very prompt service across the border. Fast permit clearance and reasonable charges.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Patna to Lesliganj?", "The highway route is approximately 235 km via Aurangabad and NH-139. Driving duration is roughly 5.5 to 6.5 hours. Total move takes 10 to 12 hours on the same day."),
            ("How do you manage the border crossing between Bihar and Jharkhand?", "Our commercial vehicles have full national permits, e-way bills, and tax clearances for fast border crossing at Hariharganj."),
            ("What are the 2 BHK moving charges from Patna to Lesliganj?", "A standard 2 BHK household relocation costs between ₹13,500 and ₹19,500 based on goods volume, floor heights, and packing specifications."),
            ("Can I ship my motorcycle from Patna to Lesliganj?", "Yes, two-wheelers are securely crated with bubble wrap and secured with ratchet belts inside our closed container truck for ₹2,600 to ₹3,800."),
            ("Do you provide transit insurance for moves from Bihar?", "Yes, comprehensive transit insurance is available to safeguard all valuable furniture, appliances, and personal belongings.")
        ]
    },
    {
        "id": 17,
        "slug": "gaya-to-lesliganj-packers-and-movers",
        "origin": "Gaya",
        "dest": "Lesliganj",
        "title": "Packers and Movers Gaya to Lesliganj | Inbound Inter-State Relocation",
        "desc": "Expert packers and movers from Gaya, Bihar to Lesliganj. 145 km transit via NH-22, Dobhi & Hariharganj, 5-layer packing, household moving, vehicle carrier, door delivery.",
        "keywords": "gaya to lesliganj packers and movers, packers and movers gaya to lesliganj, house shifting gaya to lesliganj, gaya to palamu movers, bihar to jharkhand packers, safe movers gaya",
        "distance": "145 km",
        "duration": "3.5 to 4 hours",
        "route_desc": "NH-22 south from Gaya through Dobhi, turning westward through Hariharganj border into Lesliganj",
        "origin_locality": "Gaya Town, AP Colony, Civil Lines, Rampur, Bodh Gaya Road, Delha, Station Road Gaya",
        "dest_locality": "Lesliganj Main Market, BDO Campus, Thana Chowk, Nilambar-Pitambar Pur, Kundri",
        "pricing_1bhk": "₹6,500 - ₹9,800",
        "pricing_2bhk": "₹9,800 - ₹14,500",
        "pricing_3bhk": "₹14,000 - ₹20,500",
        "pricing_villa": "₹19,000 - ₹28,000",
        "pricing_bike": "₹2,000 - ₹3,000",
        "pricing_car": "₹4,800 - ₹7,500",
        "local_focus": "Railway personnel, traders, and native families relocating from Gaya across the border to Lesliganj block.",
        "reviews": [
            ("Laxman Agrawal", "AP Colony Gaya to Lesliganj Bazar", "Shifted our shop goods and home items from Gaya to Lesliganj. Loaded in the morning and delivered safely by afternoon. Professional moving crew."),
            ("Sarita Kujur", "Civil Lines Gaya to Lesliganj", "Packed our complete 2 BHK apartment with sturdy cartons and air bubble sheets. Zero damage to our glass items."),
            ("Manoj Kumar Verma", "Rampur Gaya to Nilambar-Pitambar Pur", "Honest quotation, polite workers, and sealed container truck. Highly satisfied with Shree Ashirwad Packers.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Gaya to Lesliganj?", "The route covers about 145 km via Dobhi and Hariharganj. Driving duration is approximately 3.5 to 4 hours. Door-to-door relocation takes roughly 6 to 8 hours on the same day."),
            ("Can you pick up from residential colonies across Gaya?", "Yes, our Gaya team manages residential houses and apartment societies across AP Colony, Civil Lines, and Rampur."),
            ("How do you ensure wooden furniture remains scratch-free?", "We wrap all wooden surfaces in thick foam blankets, apply bubble cushioning around carved edges, and seal with tight stretch wrap."),
            ("What are the bike transport charges from Gaya to Lesliganj?", "Two-wheeler shifting costs between ₹2,000 and ₹3,000 including multi-layer packing and transport inside a closed container."),
            ("Is transit insurance provided for inbound moves from Bihar?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 18,
        "slug": "varanasi-to-lesliganj-packers-and-movers",
        "origin": "Varanasi",
        "dest": "Lesliganj",
        "title": "Packers and Movers Varanasi to Lesliganj | Inbound UP Moving",
        "desc": "Professional packers and movers from Varanasi to Lesliganj, Palamu. 240 km express transit via NH-19 GT Road & Sasaram, 5-layer packing, home & commercial shifting, vehicle carrier.",
        "keywords": "varanasi to lesliganj packers and movers, packers and movers varanasi to lesliganj, house shifting varanasi to lesliganj, varanasi to palamu movers, car transport varanasi to lesliganj, safe movers varanasi",
        "distance": "240 km",
        "duration": "5.5 to 6.5 hours",
        "route_desc": "NH-19 GT Road east from Varanasi through Sasaram, turning south via Garhwa Road and Daltonganj into Lesliganj",
        "origin_locality": "Sigra, Lanka, Mahmoorganj, Bhelupur, Cantt, Shivpur, Pandeypur, BHU Campus Varanasi",
        "dest_locality": "Lesliganj Bazar, Nilambar-Pitambar Pur Chowk, BDO Campus, Thana Road, CHC Hospital area, Kundri",
        "pricing_1bhk": "₹9,500 - ₹14,000",
        "pricing_2bhk": "₹14,000 - ₹20,000",
        "pricing_3bhk": "₹19,500 - ₹28,000",
        "pricing_villa": "₹27,000 - ₹39,000",
        "pricing_bike": "₹2,800 - ₹4,200",
        "pricing_car": "₹7,500 - ₹12,000",
        "local_focus": "Returning executives, university alumni, and families shifting household belongings from Varanasi to Lesliganj block.",
        "reviews": [
            ("Prabir Chatterjee", "Sigra Varanasi to Lesliganj", "Exceptional service! They protected our sofa and 55-inch television with multiple layers of bubble wrap. Unloaded at Lesliganj without a blemish."),
            ("Shyamali Roy", "Lanka Varanasi to Lesliganj Bazar", "Smooth transit along NH-19. The vehicle arrived right on schedule, and their crew reassembled our bedroom furniture quickly."),
            ("Ashim Halder", "Cantt Varanasi to Nilambar-Pitambar Pur", "Shifted our 2 BHK apartment and Honda Activa. Flawless execution and reliable customer assistance throughout.")
        ],
        "faqs": [
            ("What is the time required to shift household goods from Varanasi to Lesliganj?", "The highway distance is 240 km. Dedicated container vehicles complete the drive in 5.5 to 6.5 hours. Total move takes roughly 24 hours door-to-door."),
            ("Can you collect goods from congested residential areas across Varanasi?", "Yes, our Varanasi team utilizes feeder vans to navigate narrow city lanes, smoothly transferring cargo to linehaul container trucks."),
            ("How do you ensure wooden furniture remains undamaged?", "We wrap all wooden surfaces in thick foam blankets, apply bubble cushioning around carved edges, and seal with tight stretch wrap to prevent dust and scratches."),
            ("What are the bike transport charges from Varanasi to Lesliganj?", "Two-wheeler shifting costs between ₹2,800 and ₹4,200 based on engine cc and model, including multi-layer packing and transport inside a closed container."),
            ("Is transit insurance provided for inbound moves from Uttar Pradesh?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 19,
        "slug": "delhi-to-lesliganj-packers-and-movers",
        "origin": "Delhi NCR",
        "dest": "Lesliganj",
        "title": "Packers and Movers Delhi to Lesliganj | Long-Distance National Moving",
        "desc": "Trusted packers and movers from Delhi NCR (Delhi, Noida, Gurgaon) to Lesliganj. 1,080 km express transit via Yamuna Expressway & NH-19, 5-layer packing, car carrier, GPS tracking.",
        "keywords": "delhi to lesliganj packers and movers, packers and movers delhi to lesliganj, house shifting delhi to lesliganj, noida to lesliganj movers, gurgaon to palamu packers, car transport delhi to lesliganj, national movers delhi",
        "distance": "1,080 km",
        "duration": "22 to 26 hours",
        "route_desc": "Yamuna Expressway / Agra-Lucknow Expressway to NH-19 GT Road through Kanpur, Prayagraj, Varanasi, Sasaram, turning south into Lesliganj",
        "origin_locality": "Delhi (Dwarka, Rohini, South Delhi), Noida, Greater Noida, Gurgaon, Faridabad",
        "dest_locality": "Lesliganj Main Market, BDO Campus, Thana Chowk, Nilambar-Pitambar Pur, Kundri",
        "pricing_1bhk": "₹17,000 - ₹25,000",
        "pricing_2bhk": "₹24,000 - ₹36,000",
        "pricing_3bhk": "₹34,000 - ₹50,000",
        "pricing_villa": "₹46,000 - ₹72,000",
        "pricing_bike": "₹4,800 - ₹7,200",
        "pricing_car": "₹13,000 - ₹21,000",
        "local_focus": "Returning defense personnel, central government officers, and corporate professionals relocating 1,080 km from Delhi NCR back to Lesliganj.",
        "reviews": [
            ("Subedar R. N. Minz", "Delhi Cantt to Lesliganj", "Retired from defense service and shifted all household goods 1,080 km back to our native home in Lesliganj. Flawless packing and 100% undamaged delivery."),
            ("Amitabh Verma", "Gurgaon Sector 54 to Lesliganj Bazar", "Extremely professional crating of our electronic appliances and furniture. Outstanding interstate service!"),
            ("Seema Kumari", "Dwarka Sector 12 to Nilambar-Pitambar Pur", "Their team handled society gate permissions in Delhi and unloading in Lesliganj flawlessly. Courteous, punctual, and genuine pricing.")
        ],
        "faqs": [
            ("How many days does transit take from Delhi NCR to Lesliganj?", "The route covers 1,080 km. Dedicated container vehicles require 22 to 26 hours of driving time. Consignments are typically delivered within 3 to 4 days of pickup."),
            ("Can you pick up from multiple locations in Delhi NCR (e.g. Gurgaon office + Noida home)?", "Yes, we can organize split pickups across Delhi, Noida, or Gurgaon before locking the container for direct dispatch to Lesliganj."),
            ("How do you protect delicate electronics like 65-inch OLED TVs and sound systems?", "We pack screens with high-density thermocol sheet guards, anti-static bubble film, and custom heavy-duty corrugated wooden crates for fail-safe protection."),
            ("What are the 2 BHK moving charges from Delhi to Lesliganj?", "A standard 2 BHK household relocation costs between ₹24,000 and ₹36,000, covering full export-quality packing, transport, and unloading."),
            ("Are your bills approved for government transfer claims?", "Yes, we provide official GST invoices and bilty notes recognized by all government departments and PSUs.")
        ]
    },
    {
        "id": 20,
        "slug": "kolkata-to-lesliganj-packers-and-movers",
        "origin": "Kolkata",
        "dest": "Lesliganj",
        "title": "Packers and Movers Kolkata to Lesliganj | Inbound Metro Moving",
        "desc": "Expert packers and movers from Kolkata to Lesliganj, Palamu. 545 km transit via NH-16 & Ranchi Ring Road, 5-layer packing, household moving, vehicle parcel, door delivery.",
        "keywords": "kolkata to lesliganj packers and movers, packers and movers kolkata to lesliganj, house shifting kolkata to lesliganj, kolkata to palamu movers, car transport kolkata lesliganj, safe movers kolkata",
        "distance": "545 km",
        "duration": "11.5 to 13 hours",
        "route_desc": "NH-16 through Kharagpur, NH-49 via Baharagora, Ranchi Ring Road, NH-39 through Latehar into Lesliganj",
        "origin_locality": "Salt Lake, New Town, Rajarhat, South City, Behala, Howrah, Jadavpur",
        "dest_locality": "Lesliganj Bazar, Nilambar-Pitambar Pur Chowk, BDO Campus, Thana Road, CHC Hospital area, Kundri",
        "pricing_1bhk": "₹14,000 - ₹20,000",
        "pricing_2bhk": "₹19,000 - ₹27,000",
        "pricing_3bhk": "₹26,000 - ₹37,000",
        "pricing_villa": "₹35,000 - ₹52,000",
        "pricing_bike": "₹3,800 - ₹5,500",
        "pricing_car": "₹11,000 - ₹17,000",
        "local_focus": "Returning professionals, retirees, and families moving from Kolkata back to Lesliganj block in Palamu district.",
        "reviews": [
            ("Dipankar Bannerjee", "Salt Lake Kolkata to Lesliganj", "Shifted our household from Kolkata to Lesliganj. Loaded carefully and delivered safely within 36 hours. Professional moving crew."),
            ("Pritam Mandal", "New Town Kolkata to Lesliganj Bazar", "Packed our complete 2 BHK apartment with sturdy cartons and air bubble sheets. Zero damage to our glass items."),
            ("Sanjoy Roy", "Howrah to Nilambar-Pitambar Pur", "Honest quotation, polite workers, and sealed container truck. Highly satisfied with Shree Ashirwad Packers.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kolkata to Lesliganj?", "The route covers about 545 km via Kharagpur, Ranchi Ring Road, and NH-39. Driving duration is approximately 11.5 to 13 hours. Door-to-door relocation takes roughly 36 to 48 hours."),
            ("Can your crew pack delicate kitchen appliances and glass crockeries in Kolkata?", "Yes, our Kolkata team utilizes dedicated crockery boxes, multi-layer bubble wrap, and thermocol packing for sensitive chinaware and micro-appliances."),
            ("Do you provide car transport from Kolkata to Lesliganj?", "Yes, we transport cars via dedicated car trailers or safely fastened inside closed container trucks with zero road driving between cities."),
            ("What are the 2 BHK shifting charges from Kolkata to Lesliganj?", "Standard 2 BHK relocation ranges between ₹19,000 and ₹27,000, all-inclusive of packing materials, loading, road permits, tolls, and unloading in Lesliganj."),
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
 * Group: Route {r["id"]} - Lesliganj Corridor
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
            "streetAddress": "Main Road, Near Block Development Office & Nilambar-Pitambar Pur Chowk",
            "addressLocality": "Lesliganj (Nilambar-Pitambar Pur), Palamu",
            "addressRegion": "Jharkhand",
            "postalCode": "822118",
            "addressCountry": "IN"
        }},
        "geo": {{
            "@type": "GeoCoordinates",
            "latitude": 24.0300,
            "longitude": 84.2000
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
                Shree Ashirwad Packers and Movers is an IBA-approved logistics provider trusted by block administration offices, banks, rural health clinics, schools, and private enterprises across Palamu district and nationwide.
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
    print(f"Generating {len(ROUTES)} Lesliganj pages...")
    for r in ROUTES:
        path = os.path.join(PAGES_DIR, f"{r['slug']}.php")
        code = generate_page(r)
        with open(path, "w", encoding="utf-8") as f:
            f.write(code)
        print(f"Created: {r['slug']}.php ({len(code)} bytes)")

if __name__ == "__main__":
    main()
