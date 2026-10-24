import os
import re

PAGES_DIR = r"d:\shreeashirwadpackers\pages"

ROUTES = [
    # Group 1: Senha to Inside Jharkhand (Routes 1–5)
    {
        "id": 1,
        "slug": "senha-to-ranchi-packers-and-movers",
        "origin": "Senha",
        "dest": "Ranchi",
        "title": "Packers and Movers Senha to Ranchi | Fast Capital Relocation",
        "desc": "Trusted packers and movers from Senha, Lohardaga to Ranchi. 85 km express transit via Kuru/NH-143A, 5-layer packing, home shifting, car & bike parcel, full insurance.",
        "keywords": "senha to ranchi packers and movers, packers and movers senha to ranchi, house shifting senha to ranchi, lohardaga to ranchi movers, car transport senha to ranchi, bike parcel senha ranchi, safe movers senha",
        "distance": "85 km",
        "duration": "2 to 2.5 hours",
        "route_desc": "State Highway to Lohardaga connecting to NH-143A via Kuru, Nagjua, Bijupara, and Ratu into Ranchi",
        "origin_locality": "Senha Bazar, BDO Office Road, CHC Hospital area, Jori, Manho, Kandra, Tutlo, Senha Police Station",
        "dest_locality": "Harmu, Morabadi, Bariatu, Doranda, Kanke Road, Lalpur, Hinoo, Ratu Road, Dhurwa, Namkum",
        "pricing_1bhk": "₹5,000 - ₹8,000",
        "pricing_2bhk": "₹8,000 - ₹12,500",
        "pricing_3bhk": "₹12,000 - ₹18,000",
        "pricing_villa": "₹17,000 - ₹26,000",
        "pricing_bike": "₹1,800 - ₹2,800",
        "pricing_car": "₹4,500 - ₹7,000",
        "local_focus": "Government officers from Senha block development office, bauxite mining supervisors, rural school teachers, and families relocating to Ranchi for education and healthcare.",
        "reviews": [
            ("Shashi Bhushan Bhagat", "Senha Bazar to Harmu Ranchi", "Moved our complete family household to Ranchi. The team arrived on time in Senha, packed all our glassware and furniture in bubble sheets, and delivered by 3 PM in Harmu without a single scratch."),
            ("Dr. R. K. Oraon", "Senha CHC to Bariatu Ranchi", "Shifted medical equipment and household goods. Their enclosed container truck protected our items from highway dust. Excellent and courteous staff."),
            ("Pradeep Kumar Sahu", "Manho Senha to Morabadi Ranchi", "Transported my Honda Activa and 2 BHK home items. Delivered on the same day with authentic GST billing for my government allowance claim.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Senha to Ranchi?", "The road distance is approximately 85 km via Lohardaga, Kuru, and NH-143A. Our closed container trucks complete the drive in 2 to 2.5 hours. Total shifting from loading in Senha to setup in Ranchi takes 5 to 7 hours on the same day."),
            ("How do you manage rural road access in Senha block?", "Our fleet includes versatile medium container trucks and feeder vehicles suited for rural roads around Senha, Jori, and Tutlo, ensuring safe pickup from village homes and seamless transfer."),
            ("Do you provide transit insurance for household goods from Senha?", "Yes, we provide 100% comprehensive transit insurance coverage underwritten by government-registered insurers, protecting all household items and electronics."),
            ("What are the standard charges for shifting a 2 BHK home from Senha to Ranchi?", "A standard 2 BHK household relocation costs between ₹8,000 and ₹12,500, covering 5-layer packing, vehicle transit, loading, unloading, and furniture assembly."),
            ("Can you move motorcycles and scooters safely from Senha to Ranchi?", "Yes, two-wheelers are wrapped with scratch-proof bubble film and secured with ratchet belts inside our closed container truck for ₹1,800 to ₹2,800.")
        ]
    },
    {
        "id": 2,
        "slug": "senha-to-lohardaga-packers-and-movers",
        "origin": "Senha",
        "dest": "Lohardaga",
        "title": "Packers and Movers Senha to Lohardaga | Local Shifting Services",
        "desc": "Reliable packers and movers from Senha to Lohardaga town. 12 km local express transit, 5-layer packing, domestic shifting, railway & market transfers, same-day delivery.",
        "keywords": "senha to lohardaga packers and movers, packers and movers senha to lohardaga, house shifting senha to lohardaga, local movers lohardaga district, bauxite belt movers senha, safe packers senha",
        "distance": "12 km",
        "duration": "25 to 35 minutes",
        "route_desc": "Senha - Lohardaga Main Road connecting directly into Lohardaga urban centre and Railway Station Road",
        "origin_locality": "Senha Main Market, BDO Campus, Senha Thana, Jori, Kandra, Manho, Alodi, Bhadren",
        "dest_locality": "Lohardaga Station Road, Powergunj, Court Road, Rana Chowk, Shanti Nagar, Ajay Udyan, Bagru Road",
        "pricing_1bhk": "₹3,200 - ₹5,200",
        "pricing_2bhk": "₹5,000 - ₹7,800",
        "pricing_3bhk": "₹7,500 - ₹11,500",
        "pricing_villa": "₹11,000 - ₹16,500",
        "pricing_bike": "₹1,000 - ₹1,800",
        "pricing_car": "₹2,500 - ₹4,200",
        "local_focus": "Local intra-district household and commercial shifting from Senha rural block to Lohardaga district headquarters, railhead, and market zones.",
        "reviews": [
            ("Gopal Prasad Verma", "Senha to Powergunj Lohardaga", "Shifted our 2 BHK home within the district. The crew arrived at 9 AM, packed everything neatly, and completed unloading by 1 PM. Very reasonable pricing and cooperative laborers."),
            ("Manju Devi", "Senha Thana Road to Shanti Nagar Lohardaga", "Handled our heavy Godrej almirahs and showcase with great care. Zero scratches and quick assembly at our new house."),
            ("Dinesh Kumar Sahu", "Jori Senha to Lohardaga Station Road", "Moved shop stock and household furniture. Prompt service and well-mannered team.")
        ],
        "faqs": [
            ("How long does local shifting take from Senha to Lohardaga town?", "The distance is only 12 km along the main road. Driving time is 25 to 35 minutes. Complete packing, transit, unloading, and furniture assembly are concluded within 3 to 4 hours on the same day."),
            ("What are the rates for a 1 BHK or 2 BHK local move to Lohardaga?", "Local 1 BHK shifting starts from ₹3,200, while a typical 2 BHK household relocation costs between ₹5,000 and ₹7,800 depending on volume and floor elevation."),
            ("Do you supply packing cartons and bubble sheets in Senha?", "Yes, our team brings virgin bubble wrap, 5-ply corrugated boxes, stretch film, and packing tape directly to your doorstep in Senha."),
            ("Can you relocate two-wheelers and scooters locally?", "Yes, two-wheelers are wrapped with protective sheets and transported safely inside our closed truck for ₹1,000 to ₹1,800."),
            ("Is same-day pickup and delivery guaranteed for Senha to Lohardaga moves?", "Yes, 100% guaranteed same-day completion for all intra-district relocations within Lohardaga district.")
        ]
    },
    {
        "id": 3,
        "slug": "senha-to-gumla-packers-and-movers",
        "origin": "Senha",
        "dest": "Gumla",
        "title": "Packers and Movers Senha to Gumla | Safe Inter-District Shifting",
        "desc": "Professional packers and movers from Senha to Gumla. 45 km express transit via Ghaghra, 5-layer packing, household & administrative relocations, car carrier, bike parcel.",
        "keywords": "senha to gumla packers and movers, packers and movers senha to gumla, house shifting senha to gumla, lohardaga to gumla movers, ghaghra packers gumla, safe interdistrict moving senha",
        "distance": "45 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "State Highway corridor south from Senha connecting via Ghaghra or Sisai route into Gumla district headquarters",
        "origin_locality": "Senha Bazar, BDO compound, Senha Thana, Jori, Manho, Kandra, Tutlo",
        "dest_locality": "Gumla Main Road, DSP Road, Piska, Sisai Road, Tower Chowk, Danda More, Kotwali, Vikas Nagar",
        "pricing_1bhk": "₹4,200 - ₹6,800",
        "pricing_2bhk": "₹6,800 - ₹10,500",
        "pricing_3bhk": "₹10,000 - ₹15,000",
        "pricing_villa": "₹14,000 - ₹21,000",
        "pricing_bike": "₹1,500 - ₹2,300",
        "pricing_car": "₹3,500 - ₹5,800",
        "local_focus": "Inter-district government transfers, police personnel, healthcare staff, and trading families moving south across the Lohardaga-Gumla district boundary.",
        "reviews": [
            ("Ashish Kumar Tiwary", "Senha to DSP Road Gumla", "Transferred from Senha block office to Gumla collectorate. Shree Ashirwad provided prompt packing, clean container truck, and official bill that was approved by treasury."),
            ("Sunita Ekka", "Senha Bazar to Tower Chowk Gumla", "Our glass dining set and washing machine were packed with multiple layers of bubble wrap. Delivered intact in 4 hours on the same day."),
            ("Mohan Bhagat", "Jori Senha to Sisai Road Gumla", "Very smooth moving experience. The laborers were respectful, efficient, and reassembled our wooden beds without extra fee.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Senha to Gumla?", "The road distance is approximately 45 km via Ghaghra. Driving time is roughly 1 to 1.5 hours. The full move from pickup to delivery is finished in 4 to 6 hours on the same day."),
            ("How do you protect fragile kitchenware and electronics?", "All chinaware, glassware, and electronics are individually wrapped in air bubble film, placed in double-walled 5-ply cartons, and buffered with thermocol."),
            ("What are the 2 BHK shifting charges from Senha to Gumla?", "A standard 2 BHK household relocation costs between ₹6,800 and ₹10,500 based on volume, floor levels, and packing requirements."),
            ("Can I ship my motorcycle from Senha to Gumla?", "Yes, two-wheelers are securely packed with bubble wrap and lashed with tension belts inside our closed truck for ₹1,500 to ₹2,300."),
            ("Do you provide transit insurance for moves to Gumla?", "Yes, comprehensive transit insurance is provided to cover loss or damage during highway transportation.")
        ]
    },
    {
        "id": 4,
        "slug": "senha-to-latehar-packers-and-movers",
        "origin": "Senha",
        "dest": "Latehar",
        "title": "Packers and Movers Senha to Latehar | Reliable Shifting Services",
        "desc": "Expert packers and movers from Senha to Latehar. 85 km transit via Kuru & Chandwa, 5-layer packing, forest & mining staff transfers, car & bike parcel, full insurance.",
        "keywords": "senha to latehar packers and movers, packers and movers senha to latehar, house shifting senha to latehar, lohardaga to latehar movers, chandwa packers latehar, safe shifting latehar",
        "distance": "85 km",
        "duration": "2 to 2.5 hours",
        "route_desc": "State Highway to Lohardaga and Kuru, joining NH-143B / NH-39 via Chandwa into Latehar district headquarters",
        "origin_locality": "Senha Main Market, BDO Campus, Senha Thana, Jori, Kandra, Manho, Alodi, Bhadren",
        "dest_locality": "Latehar Station Road, Court Compound, Chandwa Road, Main Bazar, Bypass Chowk, Balumath Road",
        "pricing_1bhk": "₹5,200 - ₹8,200",
        "pricing_2bhk": "₹8,200 - ₹12,800",
        "pricing_3bhk": "₹12,000 - ₹18,000",
        "pricing_villa": "₹16,500 - ₹25,000",
        "pricing_bike": "₹1,800 - ₹2,800",
        "pricing_car": "₹4,500 - ₹7,000",
        "local_focus": "Forest department officials, railway engineers, police staff, and mining personnel transferring northward between Lohardaga and Latehar districts.",
        "reviews": [
            ("Binod Kumar Singh", "Senha to Latehar Court Compound", "Shifted our government family quarters to Latehar. The team handled all our furniture and appliances with extreme care. Transparent quotation with zero hidden charges."),
            ("Rupesh Bhagat", "Senha Bazar to Chandwa Latehar", "The 5-layer bubble packaging kept our smart TV and refrigerator 100% safe. Reached on time on the same afternoon."),
            ("Md. Aslam", "Manho Senha to Latehar Station Road", "Very polite crew who placed each carton into its respective room and assembled our master beds without complaint.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Senha to Latehar?", "The route covers about 85 km via Kuru and Chandwa. Driving duration is approximately 2 to 2.5 hours. Total door-to-door relocation is finished within 6 to 8 hours on the same day."),
            ("How do you handle heavy wooden furniture and double-door refrigerators?", "We use heavy-duty lifting straps and apply 5-layer protection: foam wrap, bubble wrap, corrugated sheets, edge protectors, and stretch film."),
            ("What are the rates for a 3 BHK family home relocation?", "Standard 3 BHK moving charges range between ₹12,000 and ₹18,000, covering packing materials, loading, transit, unloading, and basic setup."),
            ("Do you provide bike transport from Senha to Latehar?", "Yes, we crate two-wheelers with protective foam and tie-down belts inside our closed container truck for ₹1,800 to ₹2,800."),
            ("Is an itemized inventory list provided upon loading?", "Yes, our supervisor creates an itemized, numbered inventory list signed by both parties at origin and verified at destination.")
        ]
    },
    {
        "id": 5,
        "slug": "senha-to-jamshedpur-packers-and-movers",
        "origin": "Senha",
        "dest": "Jamshedpur",
        "title": "Packers and Movers Senha to Jamshedpur | Steel City Shifting",
        "desc": "Trusted packers and movers from Senha to Jamshedpur (Tatanagar). 215 km express transit via Ranchi Ring Road & NH-33, 5-layer packing, corporate & home relocations, car carrier.",
        "keywords": "senha to jamshedpur packers and movers, packers and movers senha to jamshedpur, house shifting senha to jamshedpur, lohardaga to tatanagar movers, car transport senha to jamshedpur, tata steel movers",
        "distance": "215 km",
        "duration": "5 to 6 hours",
        "route_desc": "NH-143A to Ranchi bypass, continuing via NH-33 four-lane corridor through Bundu, Tamar, and Chandil into Jamshedpur",
        "origin_locality": "Senha Bazar, BDO compound, Senha Thana, Jori, Manho, Kandra, Tutlo",
        "dest_locality": "Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Mango, Golmuri, Baridih, Jugsalai, Adityapur",
        "pricing_1bhk": "₹8,500 - ₹12,500",
        "pricing_2bhk": "₹12,500 - ₹18,000",
        "pricing_3bhk": "₹17,500 - ₹25,500",
        "pricing_villa": "₹24,000 - ₹36,000",
        "pricing_bike": "₹2,800 - ₹4,200",
        "pricing_car": "₹7,000 - ₹11,000",
        "local_focus": "Industrial professionals, Tata Steel / Tata Motors vendor employees, and students moving from Lohardaga's mining belt to Steel City Jamshedpur.",
        "reviews": [
            ("Amitava Roy", "Senha to Telco Colony Jamshedpur", "Transferred to Tata Motors vendor company in Jamshedpur. Shree Ashirwad loaded in Senha early morning and delivered by evening in Telco. Flawless service!"),
            ("Pawan Kumar Sahu", "Senha Bazar to Bistupur Jamshedpur", "Relocated our 3 BHK flat. The closed container truck kept our goods clean and dry despite heavy rain along NH-33."),
            ("Shobha Kumari", "Jori Senha to Kadma Jamshedpur", "Delicate bone china and LED TV arrived without a blemish. Their crew handled high-rise elevator permissions in Jamshedpur seamlessly.")
        ],
        "faqs": [
            ("How long does moving take between Senha and Jamshedpur?", "The route covers roughly 215 km via Ranchi Ring Road and NH-33. Truck driving time is about 5 to 6 hours. Door-to-door relocation is executed within 24 hours of packing."),
            ("Can you collect goods from rural panchayats in Senha block?", "Yes, we dispatch feeder vehicles to all villages across Senha block, transferring cargo safely into our all-weather container fleet."),
            ("What is the cost of shifting a 2 BHK apartment to Jamshedpur?", "A 2 BHK household move ranges from ₹12,500 to ₹18,000 based on furniture disassembly, inventory count, and floor levels."),
            ("Do you provide car carrier service from Senha to Jamshedpur?", "Yes, we operate enclosed car carriers with hydraulic tie-downs and comprehensive transit insurance to safely relocate hatchbacks, sedans, and SUVs."),
            ("Is unpacking and furniture reassembly included?", "Yes, our comprehensive shifting package includes unloading, placement into specific rooms, bed reassembly, and major furniture positioning.")
        ]
    },
    # Group 2: Inside Jharkhand to Senha (Routes 6–10)
    {
        "id": 6,
        "slug": "ranchi-to-senha-packers-and-movers",
        "origin": "Ranchi",
        "dest": "Senha",
        "title": "Packers and Movers Ranchi to Senha | Express Capital to Senha Shifting",
        "desc": "Premier packers and movers from Ranchi to Senha, Lohardaga. 85 km express transit via NH-143A & Kuru, 5-layer packing, rural posting & family home relocations, car & bike parcel.",
        "keywords": "ranchi to senha packers and movers, packers and movers ranchi to senha, house shifting ranchi to senha, ranchi to lohardaga movers, car transport ranchi to senha, bike parcel ranchi senha, safe movers ranchi",
        "distance": "85 km",
        "duration": "2 to 2.5 hours",
        "route_desc": "NH-143A west from Ranchi through Ratu, Bijupara, and Kuru, continuing via Lohardaga into Senha block",
        "origin_locality": "Harmu, Morabadi, Bariatu, Doranda, Kanke Road, Lalpur, Hinoo, Ratu Road, Dhurwa, Namkum",
        "dest_locality": "Senha Bazar, BDO Office Road, CHC Hospital area, Jori, Manho, Kandra, Tutlo, Senha Police Station",
        "pricing_1bhk": "₹5,000 - ₹8,000",
        "pricing_2bhk": "₹8,000 - ₹12,500",
        "pricing_3bhk": "₹12,000 - ₹18,000",
        "pricing_villa": "₹17,000 - ₹26,000",
        "pricing_bike": "₹1,800 - ₹2,800",
        "pricing_car": "₹4,500 - ₹7,000",
        "local_focus": "Government officers, doctors posted to Senha CHC, bank managers, and families returning to ancestral homes in Senha block from Ranchi.",
        "reviews": [
            ("Dr. Alok Kumar", "Bariatu Ranchi to Senha CHC Hospital", "Posted as medical officer to Senha. Shree Ashirwad packed our Ranchi flat in 2 hours and delivered in Senha the same afternoon. Very professional and polite crew."),
            ("Sangeeta Devi", "Ratu Road Ranchi to Senha Bazar", "Moved our complete 2 BHK furniture. The multi-layer bubble wrap protected our wooden dressing table and showcase perfectly."),
            ("Ramesh Oraon", "Harmu Ranchi to Jori Senha", "Honest quotation with no hidden costs. Unloaded everything into our village home and reassembled our wooden beds.")
        ],
        "faqs": [
            ("What is the travel duration for household moving from Ranchi to Senha?", "The distance is 85 km via NH-143A. Truck transit requires about 2 to 2.5 hours. Complete door-to-door moving is executed in 5 to 7 hours on the same calendar day."),
            ("Can you deliver to remote village areas in Senha block?", "Yes, our drivers are experienced on rural roads connecting Senha, Jori, Manho, and Tutlo, ensuring safe doorstep delivery."),
            ("Do you handle dismantling of modular wardrobes and hydraulic beds in Ranchi?", "Yes, our moving team includes experienced carpenters who dismantle modular furniture in Ranchi and assemble every piece at your Senha residence."),
            ("What is the price of moving a 2 BHK apartment from Ranchi to Senha?", "A standard 2 BHK family relocation costs between ₹8,000 and ₹12,500, inclusive of 5-layer packing, vehicle transit, loading, unloading, and transit insurance."),
            ("Are your invoices eligible for government transfer allowance claims?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved logistics provider. We issue official GST invoices and bilty recognized by state departments.")
        ]
    },
    {
        "id": 7,
        "slug": "lohardaga-to-senha-packers-and-movers",
        "origin": "Lohardaga",
        "dest": "Senha",
        "title": "Packers and Movers Lohardaga to Senha | Local Express Shifting",
        "desc": "Trusted packers and movers from Lohardaga town to Senha. 12 km local express transit, 5-layer packing, household & business shifting, bike parcel, same-day delivery.",
        "keywords": "lohardaga to senha packers and movers, packers and movers lohardaga to senha, house shifting lohardaga to senha, local movers lohardaga district, safe packers lohardaga, household shifting senha",
        "distance": "12 km",
        "duration": "25 to 35 minutes",
        "route_desc": "Lohardaga Main Road south connecting directly into Senha block and Bazar",
        "origin_locality": "Lohardaga Station Road, Powergunj, Court Road, Rana Chowk, Shanti Nagar, Ajay Udyan, Bagru Road",
        "dest_locality": "Senha Main Market, BDO Campus, Senha Thana, Jori, Kandra, Manho, Alodi, Bhadren",
        "pricing_1bhk": "₹3,200 - ₹5,200",
        "pricing_2bhk": "₹5,000 - ₹7,800",
        "pricing_3bhk": "₹7,500 - ₹11,500",
        "pricing_villa": "₹11,000 - ₹16,500",
        "pricing_bike": "₹1,000 - ₹1,800",
        "pricing_car": "₹2,500 - ₹4,200",
        "local_focus": "Local household relocations, retail store setups, and staff transfers from Lohardaga district headquarters to Senha block.",
        "reviews": [
            ("Mukesh Kumar Bhagat", "Court Road Lohardaga to Senha Bazar", "Quick, smooth local shift! Packed at 10 AM in Lohardaga and setup by 2 PM in Senha. Affordable and highly professional."),
            ("Anita Kumari", "Powergunj Lohardaga to Senha Thana", "Shifted our kitchen appliances and sofa set. The packing was thorough and the team was very well behaved."),
            ("Vijay Sahu", "Rana Chowk Lohardaga to Manho Senha", "Very reasonable pricing, prompt truck arrival, and zero damages. Recommended for anyone moving in Lohardaga district.")
        ],
        "faqs": [
            ("How long does local shifting take from Lohardaga town to Senha?", "The distance is only 12 km. Transit time is 25 to 35 minutes. Complete home relocation is accomplished within 3 to 4 hours on the same day."),
            ("What is the cost of moving a 2 BHK home from Lohardaga to Senha?", "A standard 2 BHK move costs between ₹5,000 and ₹7,800, including packing, loading, transport, and unloading."),
            ("Do you provide packing materials in Lohardaga?", "Yes, we bring premium bubble wrap, 5-ply cartons, thermocol sheets, stretch wrap, and tape directly to your home in Lohardaga."),
            ("Can you shift two-wheelers and scooters locally?", "Yes, two-wheelers are wrapped with protective sheets and transported safely inside our closed truck for ₹1,000 to ₹1,800."),
            ("Is same-day pickup and delivery guaranteed?", "Yes, we guarantee same-day pickup, delivery, and basic room setup across all Lohardaga district locations.")
        ]
    },
    {
        "id": 8,
        "slug": "gumla-to-senha-packers-and-movers",
        "origin": "Gumla",
        "dest": "Senha",
        "title": "Packers and Movers Gumla to Senha | Reliable Inter-District Shifting",
        "desc": "Dependable packers and movers from Gumla to Senha, Lohardaga. 45 km express transit via Ghaghra, 5-layer packing, household & administrative relocations, car & bike parcel.",
        "keywords": "gumla to senha packers and movers, packers and movers gumla to senha, house shifting gumla to senha, gumla to lohardaga movers, interdistrict packers gumla, safe movers gumla",
        "distance": "45 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "State Highway corridor north from Gumla via Ghaghra or Sisai route into Senha block",
        "origin_locality": "Gumla Main Road, DSP Road, Piska, Sisai Road, Tower Chowk, Danda More, Kotwali, Vikas Nagar",
        "dest_locality": "Senha Bazar, BDO compound, Senha Thana, Jori, Manho, Kandra, Tutlo",
        "pricing_1bhk": "₹4,200 - ₹6,800",
        "pricing_2bhk": "₹6,800 - ₹10,500",
        "pricing_3bhk": "₹10,000 - ₹15,000",
        "pricing_villa": "₹14,000 - ₹21,000",
        "pricing_bike": "₹1,500 - ₹2,300",
        "pricing_car": "₹3,500 - ₹5,800",
        "local_focus": "Commercial families, teachers, and administrative personnel transferring northward from Gumla into Senha block.",
        "reviews": [
            ("Pankaj Kumar Tiwari", "Gumla Main Road to Senha Bazar", "Moved our complete retail store fittings and 2 BHK home furniture. The team was extremely organized and unloaded everything without a scratch."),
            ("Dr. Archana Kispotta", "Gumla Hospital Road to Senha CHC", "Transferred to Senha. The packers took great care with delicate medical literature, laptop monitors, and glass decor."),
            ("Suresh Bhagat", "Tower Chowk Gumla to Jori Senha", "Punctual truck arrival in Gumla and quick delivery in Jori. Very honest and transparent pricing.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Gumla to Senha?", "The highway route covers approximately 45 km via Ghaghra. Driving duration is roughly 1 to 1.5 hours. The entire move is finished in 4 to 6 hours."),
            ("How do you ensure glassware and kitchenware are safe?", "Kitchen crockery is individually wrapped with shock-absorbing bubble cushioning, placed in double-walled boxes, and buffered with thermocol pellets."),
            ("What are the 2 BHK moving charges from Gumla to Senha?", "A standard 2 BHK household relocation costs between ₹6,800 and ₹10,500 based on goods volume, floor heights, and packing specifications."),
            ("Can I ship my motorcycle from Gumla to Senha?", "Yes, two-wheelers are securely crated with bubble wrap and secured with ratchet belts inside our closed container truck for ₹1,500 to ₹2,300."),
            ("Do you provide transit insurance for inter-district moves?", "Yes, comprehensive transit insurance is available to safeguard all valuable furniture, appliances, and personal belongings.")
        ]
    },
    {
        "id": 9,
        "slug": "latehar-to-senha-packers-and-movers",
        "origin": "Latehar",
        "dest": "Senha",
        "title": "Packers and Movers Latehar to Senha | Safe Shifting Services",
        "desc": "Premier packers and movers from Latehar to Senha. 85 km express transit via Chandwa & Kuru, 5-layer packing, government & forest staff relocations, car carrier, bike parcel.",
        "keywords": "latehar to senha packers and movers, packers and movers latehar to senha, house shifting latehar to senha, latehar to lohardaga movers, safe packers latehar, vehicle transport latehar",
        "distance": "85 km",
        "duration": "2 to 2.5 hours",
        "route_desc": "NH-39 south through Chandwa to Kuru, continuing via Lohardaga into Senha block",
        "origin_locality": "Latehar Station Road, Court Compound, Chandwa Road, Main Bazar, Bypass Chowk, Balumath Road",
        "dest_locality": "Senha Main Market, BDO Campus, Senha Thana, Jori, Kandra, Manho, Alodi, Bhadren",
        "pricing_1bhk": "₹5,200 - ₹8,200",
        "pricing_2bhk": "₹8,200 - ₹12,800",
        "pricing_3bhk": "₹12,000 - ₹18,000",
        "pricing_villa": "₹16,500 - ₹25,000",
        "pricing_bike": "₹1,800 - ₹2,800",
        "pricing_car": "₹4,500 - ₹7,000",
        "local_focus": "Government transfers, forest staff, and railway personnel relocating southward from Latehar to Senha block.",
        "reviews": [
            ("Ratan Kumar Das", "Latehar Station Road to Senha", "Excellent packing and moving execution. Packed in Latehar at 8 AM and unloaded in Senha by 2 PM. Master beds reassembled perfectly."),
            ("Subodh Kumar Jha", "Chandwa Latehar to Jori Senha", "Moved our complete 3 BHK apartment. Closed container truck kept our furniture pristine and dust-free throughout the journey."),
            ("Kamlesh Prasad", "Latehar Court Road to Senha Bazar", "Very reasonable quotation with zero hidden fees. Highly recommend Shree Ashirwad Packers for any move in Jharkhand.")
        ],
        "faqs": [
            ("How long does moving take from Latehar to Senha?", "The highway distance is 85 km via Chandwa and Kuru. Truck travel takes 2 to 2.5 hours. Door-to-door relocation is executed within 6 to 8 hours on the same day."),
            ("How do you handle heavy wooden furniture and double-door refrigerators?", "We use heavy-duty lifting dollies and apply 5-layer protection: foam wrap, bubble wrap, corrugated sheets, edge protectors, and stretch film."),
            ("What are the rates for a 3 BHK family home relocation?", "Standard 3 BHK moving charges range between ₹12,000 and ₹18,000, covering packing materials, loading, transit, unloading, and furniture assembly."),
            ("Do you provide car carrier services from Latehar?", "Yes, we operate hydraulic car carriers and dedicated trailers to transport cars safely with full transit risk insurance."),
            ("Is an itemized inventory list provided upon loading?", "Yes, our supervisor creates an itemized, numbered inventory list signed by both parties at origin and verified at destination.")
        ]
    },
    {
        "id": 10,
        "slug": "jamshedpur-to-senha-packers-and-movers",
        "origin": "Jamshedpur",
        "dest": "Senha",
        "title": "Packers and Movers Jamshedpur to Senha | Steel City to Senha Shifting",
        "desc": "Trusted packers and movers from Jamshedpur (Tatanagar) to Senha, Lohardaga. 215 km express transit via NH-33 & Ranchi Ring Road, 5-layer packing, home shifting, car carrier, bike parcel.",
        "keywords": "jamshedpur to senha packers and movers, packers and movers jamshedpur to senha, house shifting jamshedpur to senha, tatanagar to lohardaga movers, car transport jamshedpur to senha, tata steel movers",
        "distance": "215 km",
        "duration": "5 to 6 hours",
        "route_desc": "NH-33 four-lane corridor from Jamshedpur through Chandil, Tamar, and Bundu, taking Ranchi bypass and NH-143A into Senha",
        "origin_locality": "Bistupur, Sakchi, Kadma, Sonari, Telco Colony, Mango, Golmuri, Baridih, Jugsalai, Adityapur",
        "dest_locality": "Senha Bazar, BDO compound, Senha Thana, Jori, Manho, Kandra, Tutlo",
        "pricing_1bhk": "₹8,500 - ₹12,500",
        "pricing_2bhk": "₹12,500 - ₹18,000",
        "pricing_3bhk": "₹17,500 - ₹25,500",
        "pricing_villa": "₹24,000 - ₹36,000",
        "pricing_bike": "₹2,800 - ₹4,200",
        "pricing_car": "₹7,000 - ₹11,000",
        "local_focus": "Retiring Tata Steel employees, industrial supervisors, and families relocating from Steel City Jamshedpur back to peaceful Senha in Lohardaga.",
        "reviews": [
            ("Devendra Nath Sahu", "Telco Colony Jamshedpur to Senha Bazar", "After retiring from Tata Motors, I moved back to our family house in Senha. Shree Ashirwad handled our 25-year-old wooden furniture with exceptional care."),
            ("Pankaj Kumar Verma", "Bistupur Jamshedpur to Senha", "Moved household items and Hyundai i20 car. The sealed container truck and car trailer delivered on time with zero scratches."),
            ("Neelam Devi", "Kadma Jamshedpur to Jori Senha", "Affordable rates, friendly staff, and on-time delivery. Assembled all our wooden cots and placed heavy items in their rooms.")
        ],
        "faqs": [
            ("What is the road distance and driving duration from Jamshedpur to Senha?", "The road distance is approximately 215 km via NH-33 and Ranchi Ring Road. Commercial truck transit requires about 5 to 6 hours. Total move duration is 24 hours."),
            ("Do you handle high-rise apartment pickups across Jamshedpur?", "Yes, our team handles gated complexes and multi-story apartments in Bistupur, Kadma, Sonari, and Telco with full lift padding and security coordination."),
            ("What are the charges for moving a 2 BHK apartment from Jamshedpur to Senha?", "A standard 2 BHK household relocation costs between ₹12,500 and ₹18,000 based on volume, floor levels, and specialized packing requirements."),
            ("Can you relocate cars and two-wheelers together with household goods?", "Yes, we offer both dedicated vehicle carrier trailers and combined container solutions with wheel locks and protective blankets."),
            ("Are your invoices approved for corporate and Tata company claims?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved firm issuing GST tax invoices and consignment notes fully recognized for company reimbursement.")
        ]
    },
    # Group 3: Senha to Outside Jharkhand (Routes 11–15)
    {
        "id": 11,
        "slug": "senha-to-patna-packers-and-movers",
        "origin": "Senha",
        "dest": "Patna",
        "title": "Packers and Movers Senha to Patna | Inter-State Shifting Services",
        "desc": "Expert packers and movers from Senha to Patna. 360 km transit via Kuru, Chandwa & NH-22/NH-20, 5-layer packing, corporate & home relocations, vehicle carrier, full insurance.",
        "keywords": "senha to patna packers and movers, packers and movers senha to patna, house shifting senha to patna, lohardaga to patna movers, interstate moving ranchi patna, car transport senha to patna, safe movers patna",
        "distance": "360 km",
        "duration": "8 to 9.5 hours",
        "route_desc": "NH-143A north via Kuru, Chandwa, Balumath, Chatra, Dobhi, Gaya, Jehanabad, into Patna",
        "origin_locality": "Senha Bazar, BDO Office Road, CHC Hospital area, Jori, Manho, Kandra, Tutlo, Senha Police Station",
        "dest_locality": "Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur, Rajendra Nagar, Anisabad, Patna City",
        "pricing_1bhk": "₹12,000 - ₹17,000",
        "pricing_2bhk": "₹16,500 - ₹23,500",
        "pricing_3bhk": "₹22,500 - ₹32,000",
        "pricing_villa": "₹30,000 - ₹45,000",
        "pricing_bike": "₹3,200 - ₹4,800",
        "pricing_car": "₹9,000 - ₹14,000",
        "local_focus": "Interstate relocations from Lohardaga's bauxite belt to Bihar's capital, catering to doctors, traders, students, and administrative staff.",
        "reviews": [
            ("Alok Ranjan Singh", "Senha to Boring Road Patna", "Interstate relocation was executed smoothly. The container arrived early next morning and the Patna unloading team set up our entire flat in 3 hours."),
            ("Shyam Sundar Prasad", "Senha Bazar to Kankarbagh Patna", "Shifted our 2 BHK apartment and Maruti Swift. Zero transit damages and authentic GST invoice provided for company claim."),
            ("Dr. Rajeshwar Mehta", "Manho Senha to Bailey Road Patna", "Punctual, disciplined, and very careful with expensive medical books and kitchen appliances. Best packers for Patna route!")
        ],
        "faqs": [
            ("How long does moving take from Senha to Patna?", "The highway distance is 360 km. Truck transit takes 8 to 9.5 hours. Loading on day 1 morning ensures next-morning doorstep delivery in Patna."),
            ("How do you manage inter-state checkposts and tax permits?", "Our commercial trucks operate with valid national permits, e-way bills, and green tax clearances for seamless border clearance."),
            ("What is the cost of shifting a 2 BHK home from Senha to Patna?", "A standard 2 BHK household move ranges between ₹16,500 and ₹23,500, including 5-layer packing, road toll taxes, interstate paperwork, and unloading."),
            ("Can you transport motorcycles and cars safely to Patna?", "Yes, we provide enclosed car carriers and specialized bike crating with tie-downs and comprehensive transit risk insurance."),
            ("Are goods insured during interstate transit to Bihar?", "Yes, we provide 100% comprehensive transit insurance coverage protecting high-value domestic goods, appliances, and vehicles against accidental risks.")
        ]
    },
    {
        "id": 12,
        "slug": "senha-to-kolkata-packers-and-movers",
        "origin": "Senha",
        "dest": "Kolkata",
        "title": "Packers and Movers Senha to Kolkata | Bengal Shifting Services",
        "desc": "Trusted packers and movers from Senha to Kolkata. 470 km express transit via Ranchi Ring Road & NH-16/NH-19, 5-layer packing, home & corporate relocations, car carrier, full insurance.",
        "keywords": "senha to kolkata packers and movers, packers and movers senha to kolkata, house shifting senha to kolkata, lohardaga to kolkata movers, car transport senha to kolkata, interstate movers kolkata",
        "distance": "470 km",
        "duration": "10 to 12 hours",
        "route_desc": "NH-143A to Ranchi Ring Road, continuing via Purulia, Kharagpur, and NH-16 into Kolkata",
        "origin_locality": "Senha Main Market, BDO Campus, Senha Thana, Jori, Kandra, Manho, Alodi, Bhadren",
        "dest_locality": "New Town, Salt Lake (Bidhannagar), Rajarhat, South City, Behala, Howrah, Jadavpur, Ballygunge",
        "pricing_1bhk": "₹13,500 - ₹19,500",
        "pricing_2bhk": "₹18,500 - ₹26,500",
        "pricing_3bhk": "₹25,000 - ₹36,000",
        "pricing_villa": "₹34,000 - ₹50,000",
        "pricing_bike": "₹3,500 - ₹5,200",
        "pricing_car": "₹10,000 - ₹16,000",
        "local_focus": "Business families, mining executives, and professionals relocating from Senha along southern expressways into Kolkata metropolitan areas.",
        "reviews": [
            ("Debashis Mukherjee", "Senha to Salt Lake Sector 2 Kolkata", "Packed in Senha on Friday and delivered at our Salt Lake flat on Sunday morning. The crew managed elevator bookings and society permissions easily."),
            ("Gouranga Chandra Paul", "Senha Bazar to New Town Action Area 1", "Wooden crating for our glass dining table and LCD television was top notch. Complete peace of mind during interstate shifting."),
            ("Swapan Kumar Das", "Jori Senha to Howrah", "Very reasonable charges compared to big national aggregators, with personalized coordination and zero hidden fees.")
        ],
        "faqs": [
            ("What is the timeline for shifting household goods from Senha to Kolkata?", "The distance is 470 km. Dedicated container trucks reach Kolkata in 10 to 12 hours. Goods packed on Day 1 are delivered on Day 2 morning directly to your Kolkata residence."),
            ("How do you manage high-rise apartment deliveries in New Town and Salt Lake?", "Our trained crew is familiar with modern high-rise elevator protocols, security clearances, service lift padding, and designated unloading timeframes across Kolkata societies."),
            ("What are the 2 BHK household moving charges to Kolkata?", "A typical 2 BHK family relocation costs between ₹18,500 and ₹26,500, inclusive of premium 5-layer packing, GST billing, highway tolls, and professional handling."),
            ("Can you relocate four-wheelers safely to Kolkata?", "Yes, we ship sedans and SUVs in closed car carrier trailers equipped with safety ramps and wheel chocks, ensuring spotless delivery."),
            ("Do you provide short-term storage if our Kolkata flat is not ready?", "Yes, we maintain clean, secure, pest-controlled warehouses in Ranchi, Lohardaga, and Kolkata offering short-term storage with 24/7 CCTV surveillance.")
        ]
    },
    {
        "id": 13,
        "slug": "senha-to-delhi-packers-and-movers",
        "origin": "Senha",
        "dest": "Delhi NCR",
        "title": "Packers and Movers Senha to Delhi NCR | National Shifting Services",
        "desc": "Premier packers and movers from Senha to Delhi NCR (Noida, Gurgaon, Faridabad). 1,180 km transit via Kuru, Daltonganj & NH-19 GT Road, 5-layer packing, car carrier, GPS tracking.",
        "keywords": "senha to delhi packers and movers, packers and movers senha to delhi, house shifting senha to delhi, lohardaga to delhi movers, noida movers senha, car transport senha to delhi, national packers movers",
        "distance": "1,180 km",
        "duration": "26 to 32 hours",
        "route_desc": "NH-143A north through Kuru, Tori, Latehar, Daltonganj, connecting to NH-19 (GT Road) at Sasaram, through Varanasi, Agra-Lucknow / Yamuna Expressway into Delhi NCR",
        "origin_locality": "Senha Bazar, BDO compound, Senha Thana, Jori, Manho, Kandra, Tutlo",
        "dest_locality": "Dwarka, Rohini, South Extension, Noida Sectors 50-137, Greater Noida, Gurgaon Golf Course Road, Cyber City, Faridabad",
        "pricing_1bhk": "₹18,000 - ₹26,000",
        "pricing_2bhk": "₹25,000 - ₹38,000",
        "pricing_3bhk": "₹35,000 - ₹52,000",
        "pricing_villa": "₹48,000 - ₹75,000",
        "pricing_bike": "₹5,000 - ₹7,500",
        "pricing_car": "₹14,000 - ₹22,000",
        "local_focus": "National long-haul relocations for defense personnel, PSU managers, and IT professionals transferring from Lohardaga district to national headquarters in Delhi NCR.",
        "reviews": [
            ("Col. Virendra K. Singh", "Senha to Dwarka Sector 12 Delhi", "Flawless defense shifting! 1,180 km journey completed with container seals intact. Zero damage to our furniture and glassware."),
            ("Akhilesh Sharma", "Senha Bazar to Noida Sector 137", "Daily GPS updates provided by the moving coordinator. The Noida unloading team was prompt, polite, and reassembled all our beds effortlessly."),
            ("Pawan Kumar Mehta", "Jori Senha to Gurgaon Cyber City", "Moved our complete 3 BHK apartment and Hyundai Creta. Very competitive pricing, honest commitment, and professional handling.")
        ],
        "faqs": [
            ("How many days does it take to deliver goods from Senha to Delhi NCR?", "The highway distance is approximately 1,180 km. Dedicated container vehicles cover the route in 26 to 32 hours. Delivery is completed within 2 to 3 days from pickup."),
            ("Will my goods be shifted to another truck midway?", "Never. We enforce a strict zero-transshipment policy. Your consignment is loaded into a dedicated sealed container in Senha and opened only at your Delhi NCR doorstep."),
            ("What packing materials are used for long-distance transport to Delhi?", "We utilize multi-layer heavy bubble film, 5-ply export grade corrugated sheets, thermocol cushioning, stretch film, edge corner protectors, and customized wooden crates."),
            ("Can you relocate our car and domestic goods together?", "Yes, we offer both combined vehicle-cum-household moving solutions and dedicated car carriers, ensuring safe pickup in Senha and prompt delivery in Delhi NCR."),
            ("What documents are required for inter-state goods movement to Delhi?", "You will need a copy of your transfer letter or residential identity proof, an itemized packing inventory list (prepared by our team), and a signed insurance declaration form.")
        ]
    },
    {
        "id": 14,
        "slug": "senha-to-rourkela-packers-and-movers",
        "origin": "Senha",
        "dest": "Rourkela",
        "title": "Packers and Movers Senha to Rourkela | Steel Plant Shifting",
        "desc": "Expert packers and movers from Senha to Rourkela, Odisha. 185 km transit via Gumla, Simdega & NH-143, 5-layer packing, SAIL RSP relocations, car carrier, bike parcel, full insurance.",
        "keywords": "senha to rourkela packers and movers, packers and movers senha to rourkela, house shifting senha to rourkela, lohardaga to rourkela movers, sail rsp packers rourkela, car transport senha to rourkela, safe movers rourkela",
        "distance": "185 km",
        "duration": "4 to 4.5 hours",
        "route_desc": "State Highway south to Gumla, continuing via NH-143 through Palkot, Kolebira, Simdega, and Birmitrapur border into Rourkela",
        "origin_locality": "Senha Bazar, BDO Office Road, CHC Hospital area, Jori, Manho, Kandra, Tutlo, Senha Police Station",
        "dest_locality": "Civil Township, Koel Nagar, Chhend Colony, Sector 1 to 21, Panposh, Basanti Colony, Udit Nagar, Raghunathpali",
        "pricing_1bhk": "₹7,500 - ₹11,500",
        "pricing_2bhk": "₹11,500 - ₹16,500",
        "pricing_3bhk": "₹16,000 - ₹23,500",
        "pricing_villa": "₹22,000 - ₹33,000",
        "pricing_bike": "₹2,400 - ₹3,600",
        "pricing_car": "₹6,000 - ₹9,500",
        "local_focus": "Industrial engineers, SAIL Rourkela Steel Plant executives, mining technicians, and business families relocating between Lohardaga bauxite belt and Rourkela steel industrial zone.",
        "reviews": [
            ("Er. Hemant Kumar Sahu", "Senha to Chhend Colony Rourkela", "Transferred to Rourkela Steel Plant. Shree Ashirwad handled our 3 BHK home goods and Hero Passion bike. Arrived on the same evening in pristine condition."),
            ("Sushila Devi", "Senha Bazar to Koel Nagar Rourkela", "Excellent interstate service between Jharkhand and Odisha. Smooth border clearance at Birmitrapur and careful unloading."),
            ("Pramod Minz", "Jori Senha to Sector 4 Rourkela", "IBA approved bill accepted by corporate HR. Very respectful staff and 100% damage-free moving.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Senha to Rourkela?", "The road distance is approximately 185 km via Gumla, Simdega, and NH-143. Closed container trucks reach Rourkela in 4 to 4.5 hours. Total move duration is 7 to 9 hours on the same day."),
            ("How do you manage the Jharkhand-Odisha border checkpost at Birmitrapur?", "Our trucks carry full commercial national permits, e-way bills, and green tax clearances for fast, hassle-free border clearance."),
            ("What are the rates for a 2 BHK home move to Rourkela?", "A standard 2 BHK household relocation costs between ₹11,500 and ₹16,500, covering packing materials, labor, highway tolls, and unloading."),
            ("Can you relocate four-wheelers and bikes safely to Rourkela?", "Yes, we provide dedicated enclosed car carriers and specialized bike crating with tie-downs and full transit risk insurance."),
            ("Is unpacking and furniture setup provided in Rourkela?", "Yes, our team unloads all articles into specific rooms, reassembles beds and modular furniture, and cleans up packing waste.")
        ]
    },
    {
        "id": 15,
        "slug": "senha-to-bangalore-packers-and-movers",
        "origin": "Senha",
        "dest": "Bangalore",
        "title": "Packers and Movers Senha to Bangalore | IT Corridor Relocations",
        "desc": "Top-tier packers and movers from Senha to Bangalore. 1,720 km transit via NH-44 corridor, 5-layer packing, IT professional relocations, car & bike parcel, full insurance.",
        "keywords": "senha to bangalore packers and movers, packers and movers senha to bangalore, house shifting senha to bangalore, lohardaga to bangalore movers, car transport senha to bangalore, it staff shifting bangalore",
        "distance": "1,720 km",
        "duration": "4 to 5 days",
        "route_desc": "State Highway south via Gumla and Simdega to Sambalpur, continuing via Raipur, Nagpur, and NH-44 south via Hyderabad to Bangalore",
        "origin_locality": "Senha Main Market, BDO Campus, Senha Thana, Jori, Kandra, Manho, Alodi, Bhadren",
        "dest_locality": "Whitefield, Electronic City, HSR Layout, Koramangala, Indiranagar, Marathahalli, Bellandur, Sarjapur Road, Hebbal",
        "pricing_1bhk": "₹21,000 - ₹31,000",
        "pricing_2bhk": "₹31,000 - ₹45,000",
        "pricing_3bhk": "₹43,000 - ₹64,000",
        "pricing_villa": "₹58,000 - ₹92,000",
        "pricing_bike": "₹5,800 - ₹8,800",
        "pricing_car": "₹15,500 - ₹25,500",
        "local_focus": "Tech engineers, software developers, and students relocating from Lohardaga district to Karnataka's tech capital.",
        "reviews": [
            ("Ravi Teja", "Senha to Whitefield Bangalore", "Moving 1,720 km from rural Jharkhand to Bangalore seemed challenging, but Shree Ashirwad made it effortless. Dual-monitor workstations and guitar arrived safe and sound in 4 days."),
            ("Sneha Kulkarni", "Senha Bazar to HSR Layout Bangalore", "Everything was packed in high-grade 5-ply cartons. No moisture or dust despite traveling across 5 states. Unpacking team in Bangalore was equally disciplined."),
            ("Santosh Kumar Bhagat", "Jori Senha to Electronic City", "Honest quotation with no surprise charges. Daily GPS updates kept us at peace throughout the inter-state journey.")
        ],
        "faqs": [
            ("How long does it take for household goods to reach Bangalore from Senha?", "The driving distance is about 1,720 km. Standard container transit requires 4 to 5 days, factoring in mandatory highway safety checks and driver rest intervals."),
            ("Do you handle delicate IT work-from-home electronics and monitors?", "Yes, we specialize in corporate IT relocations. Dual monitors, gaming PCs, ergonomic desks, and server units receive anti-static bubble wrapping, customized cushioning, and reinforced cartons."),
            ("Can you deliver to high-rise gated communities in Whitefield or Sarjapur?", "Yes, our Bangalore delivery team handles societies with strict move-in guidelines, preparing gate passes, using padded service elevators, and adhering to designated unloading timeframes."),
            ("What is the cost of shifting a 2 BHK apartment from Senha to Bangalore?", "A 2 BHK household move ranges between ₹31,000 and ₹45,000, which includes 5-layer packing, loading, interstate documentation, highway tolls, unloading, and basic unpacking."),
            ("Are my goods insured during the 1,720 km transit?", "Yes, we provide 100% comprehensive transit insurance policy backed by leading public sector insurance firms.")
        ]
    },
    # Group 4: Outside Jharkhand to Senha (Routes 16–20)
    {
        "id": 16,
        "slug": "patna-to-senha-packers-and-movers",
        "origin": "Patna",
        "dest": "Senha",
        "title": "Packers and Movers Patna to Senha | Safe Inbound Relocation",
        "desc": "Dependable packers and movers from Patna to Senha, Lohardaga. 360 km transit via NH-22/NH-20 & Kuru, 5-layer packing, corporate & home relocations, vehicle parcel, fast delivery.",
        "keywords": "patna to senha packers and movers, packers and movers patna to senha, house shifting patna to senha, patna to lohardaga movers, car transport patna to senha, bike parcel patna senha, safe movers patna",
        "distance": "360 km",
        "duration": "8 to 9.5 hours",
        "route_desc": "NH-22 south through Jehanabad, Gaya, Dobhi, continuing via Chatra, Balumath, Chandwa, Kuru, and Lohardaga into Senha",
        "origin_locality": "Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur Cantt, Rajendra Nagar, Anisabad",
        "dest_locality": "Senha Bazar, BDO compound, Senha Thana, Jori, Manho, Kandra, Tutlo",
        "pricing_1bhk": "₹12,000 - ₹17,000",
        "pricing_2bhk": "₹16,500 - ₹23,500",
        "pricing_3bhk": "₹22,500 - ₹32,000",
        "pricing_villa": "₹30,000 - ₹45,000",
        "pricing_bike": "₹3,200 - ₹4,800",
        "pricing_car": "₹9,000 - ₹14,000",
        "local_focus": "Returning families, doctors, and government officials relocating from Bihar's capital back to ancestral or rural homes in Senha block.",
        "reviews": [
            ("Dr. Arvind K. Sinha", "Bailey Road Patna to Senha CHC Hospital", "As a medical officer taking up charge in Senha, my move needed precision. Shree Ashirwad loaded everything in Patna and delivered next morning without a single broken item."),
            ("Vimla Devi", "Danapur to Senha Bazar", "Our family home was packed in Danapur with heavy corrugated boxes and delivered directly to Senha. Clean, respectful staff and 100% intact glassware."),
            ("Sanjay Kumar Bhagat", "Kankarbagh to Jori Senha", "Fair pricing, excellent customer service, and fast transit through Dobhi and Kuru. Highly satisfied with their professionalism.")
        ],
        "faqs": [
            ("How long does moving take from Patna to Senha?", "The route spans approximately 360 km. Total driving duration is roughly 8 to 9.5 hours. Door-to-door relocation is executed within 24 hours of packing."),
            ("Can your crew pack delicate kitchen appliances and glass crockeries in Patna?", "Yes, our Patna team utilizes dedicated crockery boxes, multi-layer bubble wrap, and thermocol packing for glassware, chinaware, and sensitive micro-appliances."),
            ("Do you provide car transport from Patna to Senha?", "Yes, we transport cars via dedicated car trailers or safely fastened inside closed container trucks with zero road driving between cities."),
            ("What are the 2 BHK shifting charges from Patna to Senha?", "Standard 2 BHK relocation ranges between ₹16,500 and ₹23,500, all-inclusive of packing materials, loading, road permits, tolls, and unloading in Senha."),
            ("Are your bills eligible for government and corporate relocation reimbursement?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved logistics provider. We issue GST invoices, itemized packing lists, and consignment notes fully recognized by banks and corporate HR.")
        ]
    },
    {
        "id": 17,
        "slug": "kolkata-to-senha-packers-and-movers",
        "origin": "Kolkata",
        "dest": "Senha",
        "title": "Packers and Movers Kolkata to Senha | Safe Inbound Relocations",
        "desc": "Professional packers and movers from Kolkata to Senha. 470 km express transit via NH-16/NH-19 & Ranchi Ring Road, 5-layer packing, corporate & home shifting, vehicle carrier.",
        "keywords": "kolkata to senha packers and movers, packers and movers kolkata to senha, house shifting kolkata to senha, kolkata to lohardaga movers, car transport kolkata to senha, bike parcel kolkata senha, safe movers kolkata",
        "distance": "470 km",
        "duration": "10 to 12 hours",
        "route_desc": "NH-16 through Kharagpur, Purulia, Ranchi Ring Road, and NH-143A through Kuru and Lohardaga into Senha",
        "origin_locality": "New Town, Salt Lake (Bidhannagar), Rajarhat, South City, Behala, Howrah, Jadavpur, Ballygunge",
        "dest_locality": "Senha Main Market, BDO Campus, Senha Thana, Jori, Kandra, Manho, Alodi, Bhadren",
        "pricing_1bhk": "₹13,500 - ₹19,500",
        "pricing_2bhk": "₹18,500 - ₹26,500",
        "pricing_3bhk": "₹25,000 - ₹36,000",
        "pricing_villa": "₹34,000 - ₹50,000",
        "pricing_bike": "₹3,500 - ₹5,200",
        "pricing_car": "₹10,000 - ₹16,000",
        "local_focus": "Business executives, mining supervisors, and families moving from Kolkata back to Lohardaga district's Senha block.",
        "reviews": [
            ("Pranab K. Ghosh", "Salt Lake Kolkata to Senha", "Exceptional service! They protected our leather recliners and 65-inch television with multiple layers of bubble wrap. Unloaded at Senha without a blemish."),
            ("Sharmila Paul", "New Town Kolkata to Senha Bazar", "Smooth transit along NH-16. The vehicle arrived right on schedule, and their crew reassembled our bedroom furniture quickly."),
            ("Subhasish Das", "Howrah to Jori Senha", "Shifted our 2 BHK apartment and Maruti Baleno. Flawless execution and reliable customer assistance throughout.")
        ],
        "faqs": [
            ("What is the time required to shift household goods from Kolkata to Senha?", "The highway distance is 470 km. Dedicated container vehicles complete the drive in 10 to 12 hours. Packing is typically completed on day 1 with delivery in Senha on day 2."),
            ("Can you collect goods from gated communities across Kolkata and Howrah?", "Yes, our Kolkata teams handle high-rise societies in New Town, Rajarhat, Salt Lake, and South Kolkata with full adherence to elevator and security protocols."),
            ("How do you ensure antique and expensive wooden furniture remains scratch-free?", "We wrap all wooden surfaces in thick foam blankets, apply bubble cushioning around carved edges, and seal with tight stretch wrap to prevent dust, humidity, or scuffing."),
            ("What are the bike transport charges from Kolkata to Senha?", "Two-wheeler shifting costs between ₹3,500 and ₹5,200 based on engine cc and model, including multi-layer packing and transport inside a closed container."),
            ("Is transit insurance provided for inbound moves from West Bengal?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 18,
        "slug": "delhi-to-senha-packers-and-movers",
        "origin": "Delhi NCR",
        "dest": "Senha",
        "title": "Packers and Movers Delhi to Senha | Long-Distance Shifting",
        "desc": "Trusted packers and movers from Delhi NCR (Delhi, Noida, Gurgaon) to Senha. 1,180 km express transit via Yamuna Expressway & NH-19 GT Road, 5-layer packing, car carrier, GPS tracking.",
        "keywords": "delhi to senha packers and movers, packers and movers delhi to senha, house shifting delhi to senha, noida to senha movers, gurgaon to lohardaga packers, car transport delhi to senha, national movers delhi",
        "distance": "1,180 km",
        "duration": "26 to 32 hours",
        "route_desc": "Yamuna Expressway / Agra-Lucknow Expressway to NH-19 (GT Road) through Varanasi, turning south at Sasaram via Daltonganj, Latehar, Chandwa, Kuru, and Lohardaga into Senha",
        "origin_locality": "Delhi (Dwarka, Rohini, South Delhi), Noida, Greater Noida, Gurgaon (Cyber City, Golf Course Road), Faridabad",
        "dest_locality": "Senha Bazar, BDO compound, Senha Thana, Jori, Manho, Kandra, Tutlo",
        "pricing_1bhk": "₹18,000 - ₹26,000",
        "pricing_2bhk": "₹25,000 - ₹38,000",
        "pricing_3bhk": "₹35,000 - ₹52,000",
        "pricing_villa": "₹48,000 - ₹75,000",
        "pricing_bike": "₹5,000 - ₹7,500",
        "pricing_car": "₹14,000 - ₹22,000",
        "local_focus": "Returning Jharkhand families, defense personnel, and corporate executives relocating from Delhi NCR to Senha.",
        "reviews": [
            ("Rakesh Ranjan", "Noida Sector 62 to Senha", "Moved 1,180 km back to our hometown in Senha. Zero damage to our crockery, TV, or heavy teakwood sofas. Sealed truck arrived with seal intact."),
            ("Manish K. Tiwari", "Gurgaon Cyber City to Senha Bazar", "Extremely professional crating of my WFH computer workstations and high-end audio setup. Outstanding interstate service!"),
            ("Sunita Aggarwal", "Dwarka Sector 10 to Jori Senha", "Their team handled society gate permissions in Delhi and unloading in Senha flawlessly. Courteous, punctual, and genuine pricing.")
        ],
        "faqs": [
            ("How many days does transit take from Delhi NCR to Senha?", "The route covers 1,180 km. Dedicated container vehicles require 26 to 32 hours of driving time. Consignments are typically delivered within 2 to 3 days of pickup."),
            ("Can you pick up from multiple locations in Delhi NCR (e.g. Gurgaon office + Noida home)?", "Yes, we can organize split pickups across Delhi, Noida, or Gurgaon before locking the container for direct dispatch to Senha."),
            ("How do you protect delicate electronics like 65-inch OLED TVs and sound systems?", "We pack screens with high-density thermocol sheet guards, anti-static bubble film, and custom heavy-duty corrugated wooden crates for fail-safe protection."),
            ("What is the cost of shifting a 2 BHK apartment from Delhi to Senha?", "A standard 2 BHK household relocation from Delhi NCR to Senha costs between ₹25,000 and ₹38,000 depending on total volume, packaging level, and insurance coverage."),
            ("Do you provide car parcel service from Gurgaon or Delhi to Senha?", "Yes, we provide dedicated enclosed car carrier trailers that transport your vehicle safely with real-time tracking and zero wear-and-tear.")
        ]
    },
    {
        "id": 19,
        "slug": "rourkela-to-senha-packers-and-movers",
        "origin": "Rourkela",
        "dest": "Senha",
        "title": "Packers and Movers Rourkela to Senha | Steel City to Senha Shifting",
        "desc": "Premier packers and movers from Rourkela, Odisha to Senha. 185 km express transit via NH-143 & Simdega, 5-layer packing, industrial & domestic relocations, car carrier, bike parcel.",
        "keywords": "rourkela to senha packers and movers, packers and movers rourkela to senha, house shifting rourkela to senha, rourkela to lohardaga movers, car transport rourkela to senha, safe packers rourkela",
        "distance": "185 km",
        "duration": "4 to 4.5 hours",
        "route_desc": "NH-143 north from Rourkela through Birmitrapur, Simdega, Kolebira, Palkot, Gumla, and Ghaghra into Senha",
        "origin_locality": "Civil Township, Koel Nagar, Chhend Colony, Sector 1 to 21, Panposh, Basanti Colony, Udit Nagar, Raghunathpali",
        "dest_locality": "Senha Bazar, BDO Office Road, CHC Hospital area, Jori, Manho, Kandra, Tutlo, Senha Police Station",
        "pricing_1bhk": "₹7,500 - ₹11,500",
        "pricing_2bhk": "₹11,500 - ₹16,500",
        "pricing_3bhk": "₹16,000 - ₹23,500",
        "pricing_villa": "₹22,000 - ₹33,000",
        "pricing_bike": "₹2,400 - ₹3,600",
        "pricing_car": "₹6,000 - ₹9,500",
        "local_focus": "Returning families, retired SAIL Rourkela Steel Plant employees, and industrial supervisors relocating from Rourkela into Senha block.",
        "reviews": [
            ("Sanjay Kumar Naik", "Chhend Colony Rourkela to Senha Bazar", "Moved our 3 BHK flat from Rourkela to Senha. The moving crew was punctual, disciplined, and packed every single fragile item with multi-layer bubble wrap."),
            ("Manorama Devi", "Sector 2 Rourkela to Senha", "After retiring from SAIL, we moved to our village in Senha. Everything was unloaded and placed in rooms safely. Very happy with Shree Ashirwad."),
            ("Birendra Bhagat", "Koel Nagar Rourkela to Jori Senha", "Transported household goods and Bajaj Pulsar. Delivered on the same day in exactly 4.5 hours with zero scratches.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Rourkela to Senha?", "The highway route is approximately 185 km via NH-143, Simdega, and Gumla. Driving duration is roughly 4 to 4.5 hours. Total move takes 7 to 9 hours on the same day."),
            ("How do you manage the border crossing between Odisha and Jharkhand?", "Our commercial vehicles have full national permits, e-way bills, and green tax clearances for fast border crossing at Birmitrapur."),
            ("What are the 2 BHK moving charges from Rourkela to Senha?", "A standard 2 BHK household relocation costs between ₹11,500 and ₹16,500 based on goods volume, floor heights, and packing specifications."),
            ("Can I ship my motorcycle from Rourkela to Senha?", "Yes, two-wheelers are securely crated with bubble wrap and secured with ratchet belts inside our closed container truck for ₹2,400 to ₹3,600."),
            ("Do you provide transit insurance for moves from Odisha?", "Yes, comprehensive transit insurance is available to safeguard all valuable furniture, appliances, and personal belongings.")
        ]
    },
    {
        "id": 20,
        "slug": "asansol-to-senha-packers-and-movers",
        "origin": "Asansol",
        "dest": "Senha",
        "title": "Packers and Movers Asansol to Senha | Industrial Belt Shifting",
        "desc": "Trusted packers and movers from Asansol to Senha. 285 km express transit via NH-19 GT Road & Ranchi Ring Road, 5-layer packing, industrial & household moves, car carrier, door-to-door delivery.",
        "keywords": "asansol to senha packers and movers, packers and movers asansol to senha, house shifting asansol to senha, burnpur packers asansol, raniganj movers senha, car transport asansol to senha, safe movers asansol",
        "distance": "285 km",
        "duration": "6.5 to 7.5 hours",
        "route_desc": "NH-19 through Govindpur / Dhanbad, turning via Bokaro, Ramgarh, Ranchi Ring Road, and NH-143A into Senha",
        "origin_locality": "Asansol City, Burnpur (IISCO Steel Plant), Raniganj, Kulti, Ushagram, Sen Raleigh Road, Chelidanga",
        "dest_locality": "Senha Bazar, BDO compound, Senha Thana, Jori, Manho, Kandra, Tutlo",
        "pricing_1bhk": "₹9,500 - ₹14,000",
        "pricing_2bhk": "₹14,000 - ₹20,000",
        "pricing_3bhk": "₹19,500 - ₹28,000",
        "pricing_villa": "₹27,000 - ₹39,000",
        "pricing_bike": "₹2,800 - ₹4,200",
        "pricing_car": "₹7,500 - ₹12,000",
        "local_focus": "IISCO Steel Plant personnel, Eastern Coalfields Limited (ECL) staff, and industrial business owners shifting across the border into Senha block.",
        "reviews": [
            ("Dipankar Bannerjee", "Burnpur Asansol to Senha", "Shifted our 3 BHK quarters from Burnpur to our native village in Senha. The crew was disciplined, fast, and took immense care with our heavy appliances."),
            ("Pritam Mandal", "Raniganj to Senha Bazar", "Next morning delivery within 18 hours total. Their closed container truck kept everything clean and dry. Very satisfied with Shree Ashirwad Packers."),
            ("Sanjoy Roy", "Asansol City to Jori Senha", "IBA-approved bill approved smoothly by our PSU employer. Perfect packing and very polite movers.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Asansol to Senha?", "The route covers about 285 km via Dhanbad, Bokaro, Ranchi Ring Road, and NH-143A. Driving duration is approximately 6.5 to 7.5 hours. Total door-to-door relocation takes roughly 24 hours."),
            ("Do you handle relocations for IISCO Steel Plant employees from Burnpur?", "Yes, we regularly service transfers from Burnpur, Kulti, and Asansol to Lohardaga district, supplying official IBA-approved bills for corporate expense reimbursement."),
            ("How do you ensure heavy machinery or home gym equipment is moved safely?", "We use heavy-duty hydraulic trolleys, specialized moving straps, and wooden skid runners to load and unload heavy appliances and gym machinery without scuffing floors."),
            ("What are the rates for 2 BHK home shifting between Asansol and Senha?", "A standard 2 BHK apartment relocation ranges from ₹14,000 to ₹20,000 based on goods volume, floor elevation, and specialized packing requirements."),
            ("Can you move cars and bikes safely from Asansol?", "Yes, we provide dedicated bike crating and car transport service using closed container vehicles, ensuring complete protection during the 285 km interstate run.")
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
 * Group: Route {r["id"]} - Senha Corridor
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
            "streetAddress": "Main Road, Near Senha Block Office & CHC Hospital",
            "addressLocality": "Senha, Lohardaga",
            "addressRegion": "Jharkhand",
            "postalCode": "835324",
            "addressCountry": "IN"
        }},
        "geo": {{
            "@type": "GeoCoordinates",
            "latitude": 23.3850,
            "longitude": 84.6620
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
                Shree Ashirwad Packers and Movers is an IBA-approved logistics provider trusted by block administration offices, banks, rural health clinics, schools, and private enterprises across Lohardaga district and nationwide.
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
    print(f"Generating {len(ROUTES)} Senha pages...")
    for r in ROUTES:
        path = os.path.join(PAGES_DIR, f"{r['slug']}.php")
        code = generate_page(r)
        with open(path, "w", encoding="utf-8") as f:
            f.write(code)
        print(f"Created: {r['slug']}.php ({len(code)} bytes)")

if __name__ == "__main__":
    main()
