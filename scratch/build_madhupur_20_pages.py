import os
import re

PAGES_DIR = r"d:\shreeashirwadpackers\pages"

ROUTES = [
    # Group 1: Madhupur to Inside Jharkhand (Routes 1–5)
    {
        "id": 1,
        "slug": "madhupur-to-ranchi-packers-and-movers",
        "origin": "Madhupur",
        "dest": "Ranchi",
        "title": "Packers and Movers Madhupur to Ranchi | Safe Intercity Shifting",
        "desc": "Trusted packers and movers from Madhupur to Ranchi. 215 km express transit via Giridih, Bagodar & NH-20, 5-layer packing, railway employee moves, car & bike parcel, full insurance.",
        "keywords": "madhupur to ranchi packers and movers, packers and movers madhupur to ranchi, house shifting madhupur to ranchi, railway staff shifting madhupur, car transport madhupur ranchi, bike parcel madhupur ranchi, safe movers madhupur",
        "distance": "215 km",
        "duration": "5 to 6 hours",
        "route_desc": "SH-14 south-west to Giridih, connecting through Bagodar onto the four-lane NH-20 corridor via Ramgarh directly into Ranchi capital city",
        "origin_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa, Sapaha, Bakulia, Karon border",
        "dest_locality": "Harmu, Morabadi, Bariatu, Doranda, Kanke Road, Lalpur, Hinoo, Ratu Road, Dhurwa, Namkum, Ashok Nagar, Tatisilwai",
        "pricing_1bhk": "₹7,500 - ₹11,500",
        "pricing_2bhk": "₹11,500 - ₹16,500",
        "pricing_3bhk": "₹16,500 - ₹24,000",
        "pricing_villa": "₹23,000 - ₹35,000",
        "pricing_bike": "₹2,200 - ₹3,500",
        "pricing_car": "₹5,500 - ₹9,500",
        "local_focus": "Eastern Railway (Asansol Division) staff, Madhupur sub-divisional administrative and court officers, healthcare doctors, bank executives (SBI, PNB), and families relocating from Madhupur to Ranchi for higher education and healthcare.",
        "reviews": [
            ("Prabhat Ranjan Tiwary", "Railway Colony Madhupur to Morabadi Ranchi", "Relocated our entire family residence to Ranchi following my administrative posting. The moving crew arrived punctually at our Railway Colony quarter, packed all our wooden wardrobes and appliances with 5-layer bubble protection, and delivered to Morabadi without a single scratch."),
            ("Dr. Subhashish Banerjee", "Station Road Madhupur to Bariatu Ranchi", "Shifted our medical apparatus and home belongings to Ranchi. Their enclosed container truck protected our valuable clinic furniture from highway dust across the 215 km journey through Giridih and Bagodar. Exemplary moving service!"),
            ("Alok Kumar Verma", "Dalmia Koop Madhupur to Harmu Housing Colony Ranchi", "Transported my Royal Enfield motorcycle and 2 BHK household furniture. Delivered on schedule with authentic GST invoices that were smoothly reimbursed by our department accounts office.")
        ],
        "faqs": [
            ("What is the road distance and transit time from Madhupur to Ranchi?", "The road distance is approximately 215 km via Giridih, Bagodar, and NH-20. Our closed container trucks complete the transit in 5 to 6 hours. Total door-to-door shifting—packing, loading, transit, and unloading—is comfortably executed within 24 hours on the same day."),
            ("Do you handle household relocations for Eastern Railway staff from Madhupur?", "Yes, Shree Ashirwad Packers and Movers is an IBA-approved and GST-registered company. We routinely facilitate official relocations for railway officers and loco staff from Madhupur Junction with certified consignment notes, money receipts, and itemized packing lists compliant with railway reimbursement claims."),
            ("How do you protect delicate wooden furniture and temple units during transit?", "All wooden surfaces and carved pooja mandirs are encased in heavy-density shock-absorbent foam padding, multi-layer air bubble film, and tough corrugated edge guards, secured with industrial stretch wrapping to prevent scratches."),
            ("What are the shifting charges for a 2 BHK home from Madhupur to Ranchi?", "A standard 2 BHK household relocation from Madhupur to Ranchi costs between ₹11,500 and ₹16,500, covering premium 5-layer packing materials, container truck freight, skilled loading labor, unloading, and furniture reassembly."),
            ("Can you move two-wheelers and scooters safely from Madhupur to Ranchi?", "Yes, motorcycles and scooters are drained of fuel, wrapped in protective bubble film, and secured with heavy-duty ratchet tie-downs inside our closed container truck for ₹2,200 to ₹3,500.")
        ]
    },
    {
        "id": 2,
        "slug": "madhupur-to-deoghar-packers-and-movers",
        "origin": "Madhupur",
        "dest": "Deoghar",
        "title": "Packers and Movers Madhupur to Deoghar | District HQ Express Shifting",
        "desc": "Top-rated packers and movers from Madhupur to Deoghar. 32 km local express transit via SH-14 & Rohini corridor, 5-layer packing, court & administrative transfers, same-day delivery.",
        "keywords": "madhupur to deoghar packers and movers, packers and movers madhupur to deoghar, house shifting madhupur to deoghar, sub division movers deoghar, safe packers madhupur deoghar, local movers madhupur",
        "distance": "32 km",
        "duration": "45 to 60 minutes",
        "route_desc": "SH-14 northward through Rohini and Jasidih road directly into Deoghar district headquarters, Clock Tower, and VIP Chowk",
        "origin_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa, Sapaha",
        "dest_locality": "Castairs Town, Bilasi Town, Bompas Town, VIP Chowk, Clock Tower, Jasidih, Williams Town, Karnibad, Satsang Nagar",
        "pricing_1bhk": "₹3,800 - ₹5,800",
        "pricing_2bhk": "₹5,800 - ₹8,800",
        "pricing_3bhk": "₹8,800 - ₹13,500",
        "pricing_villa": "₹13,000 - ₹19,500",
        "pricing_bike": "₹1,000 - ₹1,800",
        "pricing_car": "₹2,800 - ₹4,500",
        "local_focus": "Inter-subdivisional transfers between Madhupur sub-division and Deoghar district collectorate, civil court judicial transfers, Jasidih railway personnel moves, and local residential shifts.",
        "reviews": [
            ("Madan Mohan Jha", "Station Road Madhupur to Bilasi Town Deoghar", "Relocated our 2 BHK apartment to Deoghar. The crew arrived at 8:00 AM in Madhupur, packed all our glassware, LED TV, and wooden beds, and finished unloading in Deoghar by 2:00 PM. Highly professional local moving team."),
            ("Sunita Devi", "Gandhi Chowk Madhupur to Castairs Town Deoghar", "Moving our ancestral furniture was executed with extreme caution. The team used thick moving blankets and stretch wrap so nothing got dusty or scratched along the Rohini highway."),
            ("Rameshwar Pandey", "Pathrol Road Madhupur to Satsang Nagar Deoghar", "Very courteous staff and honest pricing with zero hidden charges. Completed reassembly of our almirahs and dining table on the same day.")
        ],
        "faqs": [
            ("How long does local shifting take from Madhupur to Deoghar town?", "The transit distance is only 32 km along SH-14 via Rohini. Driving duration is roughly 45 to 60 minutes. Complete home packing, transit, unloading, and furniture positioning are completed within 4 to 5 hours on the same day."),
            ("What are the rates for a 1 BHK or 2 BHK local move to Deoghar?", "Local 1 BHK shifting starts from ₹3,800, while a typical 2 BHK household relocation costs between ₹5,800 and ₹8,800 depending on goods volume and floor access."),
            ("Do you bring packing supplies directly to Madhupur homes?", "Yes, our moving truck arrives with fresh air bubble wrap, 5-ply corrugated boxes, waterproof stretch film, and heavy adhesive tape directly to your residence in Madhupur."),
            ("Can you relocate two-wheelers locally from Madhupur to Deoghar?", "Yes, bikes and scooters are safely wrapped with scratch-resistant foam covers and transported in our closed vehicle for ₹1,000 to ₹1,800."),
            ("Is same-day pickup and delivery guaranteed between Madhupur and Deoghar?", "Yes, 100% guaranteed same-day completion for all relocations across the Madhupur-Deoghar corridor.")
        ]
    },
    {
        "id": 3,
        "slug": "madhupur-to-dhanbad-packers-and-movers",
        "origin": "Madhupur",
        "dest": "Dhanbad",
        "title": "Packers and Movers Madhupur to Dhanbad | Coal Capital Fast Shifting",
        "desc": "Professional packers and movers from Madhupur to Dhanbad. 95 km express transit via Jamtara & Govindpur/NH-19, 5-layer packing, home shifting, car carrier, bike parcel.",
        "keywords": "madhupur to dhanbad packers and movers, packers and movers madhupur to dhanbad, house shifting madhupur to dhanbad, railway movers dhanbad, car transport madhupur dhanbad, safe movers madhupur",
        "distance": "95 km",
        "duration": "2.5 to 3 hours",
        "route_desc": "SH southward via Jamtara and Govindpur, then joining the four-lane NH-19 corridor directly into Dhanbad Coal City",
        "origin_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "dest_locality": "Bank More, Hirapur, Saraidhela, Steel Gate, Koyla Nagar, Bartand, Dhansar, Park Market, Jagjiwan Nagar, BCCL Townships",
        "pricing_1bhk": "₹5,500 - ₹8,500",
        "pricing_2bhk": "₹8,500 - ₹13,000",
        "pricing_3bhk": "₹13,000 - ₹18,500",
        "pricing_villa": "₹18,000 - ₹26,000",
        "pricing_bike": "₹1,600 - ₹2,500",
        "pricing_car": "₹3,800 - ₹6,000",
        "local_focus": "Railway staff transferring between Asansol and Dhanbad railway divisions, BCCL and ECL mining personnel, business families, and students relocating to Dhanbad coaching and institutional centers.",
        "reviews": [
            ("Sanjay Kumar Singh", "Loco Shed Madhupur to Saraidhela Dhanbad", "Transferred from Madhupur Railway Loco Shed to Dhanbad. Shree Ashirwad Packers took charge of everything from disassembling our wardrobes to packing our 4-door refrigerator. Arrived in Dhanbad within 3 hours. Superb moving experience!"),
            ("Amitava Roy", "Dalmia Koop Madhupur to Bank More Dhanbad", "Our family moved our retail business assets and residence to Dhanbad. Everything arrived intact with no damage. Transparent billing accepted by our firm."),
            ("Pawan Kumar Burnwal", "Station Road Madhupur to Hirapur Dhanbad", "Efficient packing of fragile glass kitchenware and electronics. Courteous workers who cleaned up the wrapping debris after positioning the furniture.")
        ],
        "faqs": [
            ("What is the travel duration for moving goods from Madhupur to Dhanbad?", "The distance is 95 km via Jamtara and Govindpur. Our dedicated container truck covers this corridor in 2.5 to 3 hours. Complete moving from morning packing to evening setup takes 6 to 8 hours."),
            ("Do you provide IBA approved bills for railway employee claims in Dhanbad?", "Yes, we provide 100% genuine IBA-format consignment notes (LR/bilty), GST bills, itemized inventory sheets, and transit insurance policies accepted across Indian Railways and PSU departments."),
            ("How do you ensure crockery and glassware remain intact?", "All glassware and ceramics are individually wrapped with 2 layers of bubble wrap, cushioned with foam fillers inside 5-ply cartons, and prominently labeled 'Fragile'."),
            ("What is the cost of shifting a 2 BHK household from Madhupur to Dhanbad?", "A typical 2 BHK household move costs between ₹8,500 and ₹13,000, including full packing materials, truck freight, loading, unloading, and furniture assembly."),
            ("Can you move cars and bikes from Madhupur to Dhanbad?", "Yes, we transport two-wheelers and passenger cars with zero road drive-wear using dedicated closed container trucks and hydraulic carrier tie-downs.")
        ]
    },
    {
        "id": 4,
        "slug": "madhupur-to-giridih-packers-and-movers",
        "origin": "Madhupur",
        "dest": "Giridih",
        "title": "Packers and Movers Madhupur to Giridih | Express Intercity Relocation",
        "desc": "Dependable packers and movers from Madhupur to Giridih. 45 km transit via Madhupur-Giridih State Highway, 5-layer packing, home shifting, mica & industrial cargo, bike parcel.",
        "keywords": "madhupur to giridih packers and movers, packers and movers madhupur to giridih, house shifting madhupur to giridih, giridih movers madhupur, car bike transport madhupur giridih, safe packers madhupur",
        "distance": "45 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "Madhupur-Giridih State Highway westward across the Usri river basin directly into Giridih town, Makatpur, and Bada Chowk",
        "origin_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "dest_locality": "Makatpur, Bada Chowk, New Barganda, Sirsia, Mohanpur, Pachamba, Hazaribagh Road, Buxidih, Shastri Nagar",
        "pricing_1bhk": "₹4,200 - ₹6,500",
        "pricing_2bhk": "₹6,500 - ₹9,800",
        "pricing_3bhk": "₹9,800 - ₹14,500",
        "pricing_villa": "₹14,000 - ₹21,000",
        "pricing_bike": "₹1,200 - ₹2,000",
        "pricing_car": "₹3,200 - ₹5,000",
        "local_focus": "Local trade and business families, teachers, healthcare professionals, and administrative staff moving between Madhupur sub-division and Giridih district.",
        "reviews": [
            ("Nawal Kishore Prasad", "Gandhi Chowk Madhupur to New Barganda Giridih", "Relocated our 3 BHK home to Giridih. Excellent team coordination, professional packing with sturdy cartons, and prompt delivery on the same afternoon."),
            ("Pooja Kumari", "Railway Colony Madhupur to Makatpur Giridih", "Handled my electronic appliances and double bed with complete care. Reassembled everything at our new house in Makatpur within an hour of arrival."),
            ("Santosh Kumar Singh", "Pathrol Road Madhupur to Pachamba Giridih", "Very reasonable pricing and genuine GST bill provided. Smooth move across the 45 km stretch without any damage.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Madhupur to Giridih?", "The highway distance is approximately 45 km via the Madhupur-Giridih State Highway. Driving duration is roughly 1 to 1.5 hours. Same-day completion is guaranteed within 4 to 5 hours."),
            ("What are the rates for a 2 BHK home move from Madhupur to Giridih?", "A standard 2 BHK household relocation costs between ₹6,500 and ₹9,800 based on goods volume, packaging choices, and floor levels."),
            ("Do you handle heavy wooden wardrobes and double beds?", "Yes, our skilled carpenters dismantle double beds, wardrobes, and modular units in Madhupur and reassemble them securely upon arrival in Giridih."),
            ("Can you transport motorcycles from Madhupur to Giridih?", "Yes, two-wheelers are securely wrapped with bubble cushioning and transported inside closed trucks for ₹1,200 to ₹2,000."),
            ("Is transit insurance available for the Madhupur to Giridih route?", "Yes, comprehensive transit insurance is available to safeguard all valuable furniture, appliances, and personal belongings against road hazards.")
        ]
    },
    {
        "id": 5,
        "slug": "madhupur-to-dumka-packers-and-movers",
        "origin": "Madhupur",
        "dest": "Dumka",
        "title": "Packers and Movers Madhupur to Dumka | Santhal Pargana Divisional Moving",
        "desc": "Trusted packers and movers from Madhupur to Dumka. 70 km express transit via Sarath & Jama, 5-layer packing, government & commissionerate transfers, vehicle transport, same-day delivery.",
        "keywords": "madhupur to dumka packers and movers, packers and movers madhupur to dumka, house shifting madhupur to dumka, commissionerate shifting dumka, safe packers madhupur dumka, bike parcel madhupur dumka",
        "distance": "70 km",
        "duration": "1.5 to 2 hours",
        "route_desc": "Eastward state highway through Sarath, Palojori, and Jama connecting directly into Dumka divisional headquarters, Tin Bazar, and SP College Road",
        "origin_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "dest_locality": "Tin Bazar, Rasikpur, Bandhdih, SP College Road, Kadharbil, Dudhani, Dumka Court area, Gilanpara, Babu Para",
        "pricing_1bhk": "₹5,000 - ₹7,800",
        "pricing_2bhk": "₹7,800 - ₹12,000",
        "pricing_3bhk": "₹12,000 - ₹17,000",
        "pricing_villa": "₹16,500 - ₹24,000",
        "pricing_bike": "₹1,500 - ₹2,400",
        "pricing_car": "₹3,500 - ₹5,500",
        "local_focus": "Santhal Pargana divisional commissionerate transfers, university faculty at Sido Kanhu Murmu University (SKMU), judicial personnel, and police department moves between Madhupur and Dumka.",
        "reviews": [
            ("Birendra Kumar Soren", "Gandhi Chowk Madhupur to Rasikpur Dumka", "Moved our household belongings following my transfer to the Dumka divisional commissionerate. Punctual crew, heavy-duty packing, and smooth same-day delivery."),
            ("Prof. Manas Mukhopadhyay", "Station Road Madhupur to SP College Road Dumka", "Shifted our extensive personal library, antique furniture, and home appliances. Zero scratches, very polite moving supervisors."),
            ("Rajeev Ranjan Pandey", "Dalmia Koop Madhupur to Dudhani Dumka", "Honest quotation with no unexpected extra fees. Delivered our 2 BHK goods and scooty in perfect condition within 6 hours.")
        ],
        "faqs": [
            ("How long does moving take between Madhupur and Dumka?", "The distance is roughly 70 km via Sarath and Jama. Driving duration is 1.5 to 2 hours. Complete household moving is finished within 5 to 6 hours on the same day."),
            ("What are the shifting charges for a 2 BHK home from Madhupur to Dumka?", "A standard 2 BHK household relocation costs between ₹7,800 and ₹12,000 including 5-layer packing, container freight, labor, and unloading."),
            ("Do you provide government claim compliant bills for transfers to Dumka?", "Yes, we provide 100% genuine IBA-format consignment notes, GST invoices, and itemized packing lists accepted by all state government departments in Dumka."),
            ("Can you move two-wheelers alongside household goods?", "Yes, motorcycles and scooters are safely wrapped with foam sheets, secured with ratchet belts, and transported for ₹1,500 to ₹2,400."),
            ("How do you protect mattresses and sofa sets during transit?", "We wrap mattresses and fabric sofas in heavy-duty virgin LDPE stretch wrap followed by waterproof outer tarpaulin covers to prevent any dust or moisture exposure.")
        ]
    },

    # Group 2: Inside Jharkhand to Madhupur (Routes 6–10)
    {
        "id": 6,
        "slug": "ranchi-to-madhupur-packers-and-movers",
        "origin": "Ranchi",
        "dest": "Madhupur",
        "title": "Packers and Movers Ranchi to Madhupur | Capital to Sub-Division Shifting",
        "desc": "Premier packers and movers from Ranchi to Madhupur, Deoghar. 215 km express transit via NH-20, Bagodar & Giridih, 5-layer packing, home shifting, car & bike parcel, full insurance.",
        "keywords": "ranchi to madhupur packers and movers, packers and movers ranchi to madhupur, house shifting ranchi to madhupur, ranchi to deoghar movers, car transport ranchi madhupur, safe movers ranchi",
        "distance": "215 km",
        "duration": "5 to 6 hours",
        "route_desc": "NH-20 north from Ranchi through Ramgarh and Bagodar, turning east at Bagodar through Giridih directly into Madhupur town",
        "origin_locality": "Harmu, Morabadi, Bariatu, Doranda, Kanke Road, Lalpur, Hinoo, Ratu Road, Dhurwa, Namkum, Ashok Nagar",
        "dest_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa, Sapaha",
        "pricing_1bhk": "₹7,500 - ₹11,500",
        "pricing_2bhk": "₹11,500 - ₹16,500",
        "pricing_3bhk": "₹16,500 - ₹24,000",
        "pricing_villa": "₹23,000 - ₹35,000",
        "pricing_bike": "₹2,200 - ₹3,500",
        "pricing_car": "₹5,500 - ₹9,500",
        "local_focus": "Returning families, government officers transferred from Ranchi state secretariat to Madhupur sub-division, railway staff posted to Madhupur Junction, and healthcare professionals.",
        "reviews": [
            ("Deepak Kumar Sinha", "Bariatu Ranchi to Station Road Madhupur", "Shifted back to our ancestral residence in Madhupur. The Ranchi loading team arrived right at 7:30 AM, packed our heavy wooden furniture and kitchen crockeries with great care, and delivered to Madhupur on time."),
            ("Prakash Chandra Ghosh", "Harmu Ranchi to Railway Colony Madhupur", "Relocated on official railway transfer. Everything was transported in a sealed container truck. Delivered without any damage or delay."),
            ("Ananya Sengupta", "Morabadi Ranchi to Dalmia Koop Madhupur", "Excellent experience! Very polite crew, sturdy packing materials, and honest rates. Handled our refrigerator and washing machine flawlessly.")
        ],
        "faqs": [
            ("What is the travel time for goods transport from Ranchi to Madhupur?", "The transit distance is 215 km via Bagodar and Giridih. Our container trucks complete the trip in 5 to 6 hours. Doorstep delivery is completed within 24 hours."),
            ("Do you provide door-to-door unpacking and room placement in Madhupur?", "Yes, our crew unloads all items into designated rooms, reassembles beds and dining tables, and removes unpacked cartons."),
            ("What are the moving charges for a 2 BHK home from Ranchi to Madhupur?", "A standard 2 BHK household relocation costs between ₹11,500 and ₹16,500 including 5-layer packing, container freight, and loading/unloading labor."),
            ("Can I ship my car and bike together from Ranchi to Madhupur?", "Yes, we provide dedicated enclosed carriers and container trucks to transport your passenger car and two-wheeler safely."),
            ("Is transit insurance provided for moves from Ranchi?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 7,
        "slug": "deoghar-to-madhupur-packers-and-movers",
        "origin": "Deoghar",
        "dest": "Madhupur",
        "title": "Packers and Movers Deoghar to Madhupur | District HQ to Sub-Division Move",
        "desc": "Dependable packers and movers from Deoghar to Madhupur. 32 km local express transit via Rohini corridor, 5-layer packing, court & administrative transfers, same-day delivery.",
        "keywords": "deoghar to madhupur packers and movers, packers and movers deoghar to madhupur, house shifting deoghar to madhupur, local movers deoghar madhupur, safe movers deoghar, bike parcel deoghar to madhupur",
        "distance": "32 km",
        "duration": "45 to 60 minutes",
        "route_desc": "SH-14 southward through Jasidih bypass and Rohini corridor directly into Madhupur town and Railway Colony",
        "origin_locality": "Castairs Town, Bilasi Town, Bompas Town, VIP Chowk, Clock Tower, Jasidih, Williams Town, Karnibad, Satsang Nagar",
        "dest_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "pricing_1bhk": "₹3,800 - ₹5,800",
        "pricing_2bhk": "₹5,800 - ₹8,800",
        "pricing_3bhk": "₹8,800 - ₹13,500",
        "pricing_villa": "₹13,000 - ₹19,500",
        "pricing_bike": "₹1,000 - ₹1,800",
        "pricing_car": "₹2,800 - ₹4,500",
        "local_focus": "Government, judicial, and police personnel transferred from Deoghar district headquarters to Madhupur sub-division, railway employees, and residential relocations.",
        "reviews": [
            ("Ajay Kumar Mishra", "Castairs Town Deoghar to Station Road Madhupur", "Shifted our 2 BHK home to Madhupur following an official sub-divisional posting. Quick, disciplined crew, delivered within 4 hours."),
            ("Binod Bihari Lal", "Bilasi Town Deoghar to Dalmia Koop Madhupur", "Very careful packaging of fragile chinaware and our Sony Bravia television. Highly recommended local moving company in Deoghar district."),
            ("Shashi Bhushan Tiwary", "Satsang Nagar Deoghar to Gandhi Chowk Madhupur", "Punctual morning arrival, professional wrapping, and courteous workers. No hidden charges whatsoever.")
        ],
        "faqs": [
            ("How long does moving take from Deoghar to Madhupur?", "Driving duration is roughly 45 to 60 minutes across 32 km. Complete shifting is completed within 4 to 5 hours on the same day."),
            ("What is the cost of shifting a 2 BHK home from Deoghar to Madhupur?", "A standard 2 BHK household move costs between ₹5,800 and ₹8,800 including packing, vehicle transport, loading, and unloading."),
            ("Do you handle double beds and heavy almirahs?", "Yes, our carpenters dismantle beds and wardrobes in Deoghar and assemble them at your new Madhupur home."),
            ("Can you relocate two-wheelers locally from Deoghar to Madhupur?", "Yes, bikes and scooters are safely wrapped and transported inside our closed vehicle for ₹1,000 to ₹1,800."),
            ("Is same-day pickup and delivery guaranteed?", "Yes, 100% guaranteed same-day completion for all moves across Deoghar and Madhupur.")
        ]
    },
    {
        "id": 8,
        "slug": "dhanbad-to-madhupur-packers-and-movers",
        "origin": "Dhanbad",
        "dest": "Madhupur",
        "title": "Packers and Movers Dhanbad to Madhupur | Coal Capital to Madhupur Shifting",
        "desc": "Top-rated packers and movers from Dhanbad to Madhupur. 95 km express transit via Govindpur & Jamtara, 5-layer packing, railway employee moves, car carrier, bike parcel.",
        "keywords": "dhanbad to madhupur packers and movers, packers and movers dhanbad to madhupur, house shifting dhanbad to madhupur, dhanbad to deoghar movers, car transport dhanbad madhupur, safe movers dhanbad",
        "distance": "95 km",
        "duration": "2.5 to 3 hours",
        "route_desc": "NH-19 eastward to Govindpur, then heading north via Jamtara directly into Madhupur town and Railway Colony",
        "origin_locality": "Bank More, Hirapur, Saraidhela, Steel Gate, Koyla Nagar, Bartand, Dhansar, Park Market, Jagjiwan Nagar",
        "dest_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "pricing_1bhk": "₹5,500 - ₹8,500",
        "pricing_2bhk": "₹8,500 - ₹13,000",
        "pricing_3bhk": "₹13,000 - ₹18,500",
        "pricing_villa": "₹18,000 - ₹26,000",
        "pricing_bike": "₹1,600 - ₹2,500",
        "pricing_car": "₹3,800 - ₹6,000",
        "local_focus": "Railway staff transferring from Dhanbad to Madhupur Junction, BCCL/ECL retirees moving to peaceful Madhupur country estates, and business relocations.",
        "reviews": [
            ("Er. S. K. Mukherjee", "Saraidhela Dhanbad to Dalmia Koop Madhupur", "After retiring from BCCL, I shifted back to our family bungalow in Madhupur. Shree Ashirwad handled our 3 BHK goods and Hyundai car with supreme professionalism."),
            ("Ratan Kumar Agarwal", "Bank More Dhanbad to Gandhi Chowk Madhupur", "Shifted our electronics shop stock and domestic furniture. Sealed container truck arrived in pristine condition within 3 hours."),
            ("Praveen Kumar", "Koyla Nagar Dhanbad to Railway Colony Madhupur", "Courteous moving team who took care of every small detail. Reassembled all our Godrej almirahs and wooden beds without extra fee.")
        ],
        "faqs": [
            ("What is the transit time from Dhanbad to Madhupur?", "The highway distance is 95 km via Govindpur and Jamtara. Container vehicles cover the distance in 2.5 to 3 hours. Complete move takes 6 to 8 hours."),
            ("Can you relocate railway staff from Dhanbad to Madhupur with claim bills?", "Yes, we provide 100% IBA-format consignment notes, GST invoices, and itemized packing lists accepted for railway moving claims."),
            ("What is the cost of shifting a 2 BHK home from Dhanbad to Madhupur?", "A standard 2 BHK household relocation costs between ₹8,500 and ₹13,000 including 5-layer packing, container freight, and labor."),
            ("Do you provide car parcel service from Dhanbad to Madhupur?", "Yes, dedicated closed car carriers transport your vehicle safely with real-time tracking and zero road wear."),
            ("Is transit insurance provided for Dhanbad to Madhupur moves?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 9,
        "slug": "giridih-to-madhupur-packers-and-movers",
        "origin": "Giridih",
        "dest": "Madhupur",
        "title": "Packers and Movers Giridih to Madhupur | Fast Inter-District Moving",
        "desc": "Professional packers and movers from Giridih to Madhupur. 45 km transit via Madhupur-Giridih State Highway, 5-layer packing, home shifting, vehicle carrier, same-day delivery.",
        "keywords": "giridih to madhupur packers and movers, packers and movers giridih to madhupur, house shifting giridih to madhupur, giridih to deoghar movers, car transport giridih to madhupur, safe movers giridih",
        "distance": "45 km",
        "duration": "1 to 1.5 hours",
        "route_desc": "Madhupur-Giridih State Highway eastward across the Usri river basin directly into Madhupur town and Station Road",
        "origin_locality": "Makatpur, Bada Chowk, New Barganda, Sirsia, Mohanpur, Pachamba, Hazaribagh Road, Buxidih",
        "dest_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "pricing_1bhk": "₹4,200 - ₹6,500",
        "pricing_2bhk": "₹6,500 - ₹9,800",
        "pricing_3bhk": "₹9,800 - ₹14,500",
        "pricing_villa": "₹14,000 - ₹21,000",
        "pricing_bike": "₹1,200 - ₹2,000",
        "pricing_car": "₹3,200 - ₹5,000",
        "local_focus": "Trade and business families, teachers, healthcare professionals, and administrative staff moving from Giridih to Madhupur sub-division.",
        "reviews": [
            ("Gautam Kumar Barnwal", "Bada Chowk Giridih to Gandhi Chowk Madhupur", "Shifted our retail electronics and home goods. Their crew packed all delicate items securely and delivered to Madhupur on the same morning."),
            ("Dr. Anupama Roy", "New Barganda Giridih to Station Road Madhupur", "Moved our complete family library and medical equipment. The multi-layer bubble wrap and corrugated padding preserved everything without a scratch."),
            ("Mohan Lal Turi", "Makatpur Giridih to Railway Colony Madhupur", "Same day delivery within 4 hours total! The moving staff unloaded, assembled our master beds, and cleaned up packaging materials.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Giridih to Madhupur?", "The distance is 45 km via the Madhupur-Giridih State Highway. Driving duration is 1 to 1.5 hours. Shifting is completed within 4 to 5 hours."),
            ("What are the 2 BHK moving charges from Giridih to Madhupur?", "A standard 2 BHK household relocation costs between ₹6,500 and ₹9,800 based on goods volume, floor heights, and packing specifications."),
            ("Can I ship my motorcycle from Giridih to Madhupur?", "Yes, two-wheelers are securely crated with bubble wrap and secured with ratchet belts inside our closed container truck for ₹1,200 to ₹2,000."),
            ("Do you handle double beds and heavy almirahs?", "Yes, our carpenters dismantle beds and wardrobes in Giridih and assemble them at your new Madhupur home."),
            ("Is transit insurance available for the Giridih to Madhupur route?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 10,
        "slug": "dumka-to-madhupur-packers-and-movers",
        "origin": "Dumka",
        "dest": "Madhupur",
        "title": "Packers and Movers Dumka to Madhupur | Divisional HQ to Sub-Division Move",
        "desc": "Trusted packers and movers from Dumka to Madhupur. 70 km express transit via Jama & Sarath, 5-layer packing, government & judicial transfers, vehicle transport, same-day delivery.",
        "keywords": "dumka to madhupur packers and movers, packers and movers dumka to madhupur, house shifting dumka to madhupur, dumka to deoghar movers, safe movers dumka, bike parcel dumka to madhupur",
        "distance": "70 km",
        "duration": "1.5 to 2 hours",
        "route_desc": "Westward state highway through Jama, Palojori, and Sarath connecting directly into Madhupur town and Railway Colony",
        "origin_locality": "Tin Bazar, Rasikpur, Bandhdih, SP College Road, Kadharbil, Dudhani, Dumka Court area, Gilanpara",
        "dest_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "pricing_1bhk": "₹5,000 - ₹7,800",
        "pricing_2bhk": "₹7,800 - ₹12,000",
        "pricing_3bhk": "₹12,000 - ₹17,000",
        "pricing_villa": "₹16,500 - ₹24,000",
        "pricing_bike": "₹1,500 - ₹2,400",
        "pricing_car": "₹3,500 - ₹5,500",
        "local_focus": "Divisional commissionerate staff, police and judicial personnel, engineering departments, and university faculty moving from Dumka to Madhupur sub-division.",
        "reviews": [
            ("Dharmendra Kumar Marandi", "Dudhani Dumka to Gandhi Chowk Madhupur", "Shifted our household belongings after my official transfer to Madhupur. The moving crew arrived punctually in Dumka and delivered to Madhupur by afternoon."),
            ("Prof. Sujit Sen", "SP College Road Dumka to Station Road Madhupur", "Packed our complete 2 BHK residence with sturdy cartons and air bubble sheets. Zero damage to our glass items."),
            ("Rakesh Ranjan Sah", "Tin Bazar Dumka to Dalmia Koop Madhupur", "Honest quotation, polite workers, and sealed container truck. Highly satisfied with Shree Ashirwad Packers.")
        ],
        "faqs": [
            ("What is the highway distance between Dumka and Madhupur?", "The road distance is approximately 70 km via Jama and Sarath. Container trucks complete the trip in 1.5 to 2 hours."),
            ("What are the rates for a 2 BHK home move from Dumka to Madhupur?", "A standard 2 BHK household relocation costs between ₹7,800 and ₹12,000 including 5-layer packing, container freight, and labor."),
            ("Do you provide government claim compliant bills for transfers from Dumka?", "Yes, we provide 100% genuine IBA-format consignment notes, GST invoices, and itemized packing lists accepted by government departments."),
            ("Can you move two-wheelers alongside household goods?", "Yes, motorcycles and scooters are safely wrapped with foam sheets, secured with ratchet belts, and transported for ₹1,500 to ₹2,400."),
            ("Is same-day pickup and delivery guaranteed between Dumka and Madhupur?", "Yes, 100% guaranteed same-day completion for all moves across Dumka and Madhupur.")
        ]
    },

    # Group 3: Madhupur to Outside Jharkhand (Routes 11–15)
    {
        "id": 11,
        "slug": "madhupur-to-kolkata-packers-and-movers",
        "origin": "Madhupur",
        "dest": "Kolkata",
        "title": "Packers and Movers Madhupur to Kolkata | Metro Interstate Relocation",
        "desc": "Expert packers and movers from Madhupur to Kolkata. 290 km transit via Asansol, Durgapur & NH-19, 5-layer packing, heritage bungalow moves, railway transfers, car & bike parcel.",
        "keywords": "madhupur to kolkata packers and movers, packers and movers madhupur to kolkata, house shifting madhupur to kolkata, hawa badal movers madhupur, railway shifting kolkata madhupur, car transport madhupur kolkata, safe movers madhupur",
        "distance": "290 km",
        "duration": "6 to 7 hours",
        "route_desc": "SH south to Asansol / Chittaranjan, then joining the high-speed NH-19 Durgapur Expressway through Bardhaman into Kolkata and Howrah",
        "origin_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa, Sapaha, Bakulia",
        "dest_locality": "Salt Lake, New Town, Rajarhat, South City, Behala, Howrah, Jadavpur, Ballygunge, Garia, Dum Dum, Alipore",
        "pricing_1bhk": "₹11,500 - ₹16,500",
        "pricing_2bhk": "₹16,500 - ₹23,500",
        "pricing_3bhk": "₹22,500 - ₹32,000",
        "pricing_villa": "₹30,000 - ₹45,000",
        "pricing_bike": "₹3,000 - ₹4,500",
        "pricing_car": "₹8,000 - ₹13,000",
        "local_focus": "Historic 'Hawa Badal' Bengali bungalow owners, heritage holiday home relocations, Eastern Railway headquarters transferees (Fairlie Place / Garden Reach), and students moving to Kolkata universities.",
        "reviews": [
            ("Subrata Mukherjee", "Dalmia Koop Madhupur to Salt Lake Kolkata", "Our family has maintained a country retreat in Madhupur for decades. When shifting valuable antique rosewood furniture and paintings back to our Salt Lake home, Shree Ashirwad provided museum-grade wooden crating and bubble protection. Arrived in Kolkata without a blemish!"),
            ("Debabrata Dasgupta", "Railway Colony Madhupur to New Town Kolkata", "Transferred from Madhupur Junction to Eastern Railway HQ at Fairlie Place. Their IBA bill was sanctioned without query, and their closed container truck ensured zero highway dust."),
            ("Mousumi Roy", "Station Road Madhupur to Ballygunge Kolkata", "Moved our complete 3 BHK residence and Hyundai i20. Both arrived safely in Kolkata within 24 hours. The unloading team in Kolkata reassembled all our beds quickly.")
        ],
        "faqs": [
            ("What is the highway distance and travel time from Madhupur to Kolkata?", "The route covers approximately 290 km via Asansol, Durgapur, and NH-19. Dedicated container trucks complete the drive in 6 to 7 hours. Doorstep delivery is typically concluded within 24 hours of morning loading."),
            ("Do you handle antique furniture and delicate heirloom items from Madhupur retreats?", "Yes, we specialize in antique furniture protection: all vintage timber surfaces are wrapped with high-density foam blankets, double-ply bubble wrap, corner guards, and custom wooden crates where necessary."),
            ("Can you collect goods from country estates and rural bungalows around Madhupur?", "Yes, our feeder vans and medium container trucks navigate village access roads across Dalmia Koop, Pathrol, Bhedwan, and Rohini road without difficulty."),
            ("What are the moving charges for a 2 BHK home from Madhupur to Kolkata?", "A standard 2 BHK household relocation costs between ₹16,500 and ₹23,500 depending on volume, packaging level, and transit insurance choices."),
            ("Do you provide car parcel service from Madhupur to Kolkata?", "Yes, dedicated enclosed car carriers transport your vehicle safely with real-time GPS tracking and zero wear-and-tear.")
        ]
    },
    {
        "id": 12,
        "slug": "madhupur-to-patna-packers-and-movers",
        "origin": "Madhupur",
        "dest": "Patna",
        "title": "Packers and Movers Madhupur to Patna | Interstate Bihar Relocation",
        "desc": "Trusted packers and movers from Madhupur to Patna. 240 km express transit via Jhajha, Jamui & Mokama/NH-31, 5-layer packing, railway employee moves, car carrier, bike parcel.",
        "keywords": "madhupur to patna packers and movers, packers and movers madhupur to patna, house shifting madhupur to patna, railway movers patna madhupur, car transport madhupur patna, safe movers madhupur",
        "distance": "240 km",
        "duration": "5.5 to 6.5 hours",
        "route_desc": "Northward via Jhajha, Jamui, Lakhisarai, Mokama, and NH-31 into Bihar capital city Patna",
        "origin_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "dest_locality": "Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur Cantt, Rajendra Nagar, Anisabad, Fraser Road",
        "pricing_1bhk": "₹9,500 - ₹14,000",
        "pricing_2bhk": "₹14,000 - ₹20,500",
        "pricing_3bhk": "₹19,500 - ₹28,000",
        "pricing_villa": "₹26,000 - ₹39,000",
        "pricing_bike": "₹2,600 - ₹4,000",
        "pricing_car": "₹7,000 - ₹11,500",
        "local_focus": "Central government employees, railway staff moving between East Central Railway (ECR Hajipur/Danapur) and Eastern Railway, healthcare transferees, and family homes shifting to Patna.",
        "reviews": [
            ("Rameshwar Nath Sahay", "Railway Colony Madhupur to Boring Road Patna", "Shifted following my railway transfer to Danapur Division. Punctual loading in Madhupur, sealed container truck, and smooth delivery at our Patna apartment."),
            ("Dr. Rajesh Kumar Jha", "Station Road Madhupur to Bailey Road Patna", "Moved our complete family clinic apparatus and household items. The multi-layer bubble wrap and corrugated padding preserved everything without a scratch."),
            ("Vikas Kumar Singh", "Gandhi Chowk Madhupur to Kankarbagh Patna", "Shifted our 2 BHK apartment and Bajaj Pulsar bike. Flawless execution and reliable customer assistance throughout the move.")
        ],
        "faqs": [
            ("What is the highway distance and travel time from Madhupur to Patna?", "The highway distance is 240 km via Jhajha, Jamui, and Mokama. Dedicated container vehicles complete the drive in 5.5 to 6.5 hours. Total move takes roughly 24 hours door-to-door."),
            ("Do you provide claim compliant bills for railway transfers to Patna?", "Yes, we provide 100% genuine IBA-format consignment notes, GST invoices, and itemized packing lists accepted across East Central Railway and Eastern Railway divisions."),
            ("How do you ensure wooden furniture remains scratch-free?", "We wrap all wooden surfaces in thick foam blankets, apply bubble cushioning around carved edges, and seal with tight stretch wrap to prevent dust, humidity, or scuffing."),
            ("What are the bike transport charges from Madhupur to Patna?", "Two-wheeler shifting costs between ₹2,600 and ₹4,000 based on engine cc and model, including multi-layer packing and transport inside a closed container."),
            ("Is transit insurance provided for moves into Bihar?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 13,
        "slug": "madhupur-to-asansol-packers-and-movers",
        "origin": "Madhupur",
        "dest": "Asansol",
        "title": "Packers and Movers Madhupur to Asansol | Railway Division Relocation",
        "desc": "Professional packers and movers from Madhupur to Asansol. 80 km express transit via Chittaranjan, 5-layer packing, Eastern Railway staff transfers, car & bike parcel, same-day delivery.",
        "keywords": "madhupur to asansol packers and movers, packers and movers madhupur to asansol, house shifting madhupur to asansol, railway divisional movers asansol, car transport madhupur asansol, safe movers madhupur",
        "distance": "80 km",
        "duration": "2 to 2.5 hours",
        "route_desc": "Southward via Chittaranjan, Rupnarayanpur, and Kulti along NH-19 directly into Asansol Railway Divisional headquarters",
        "origin_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "dest_locality": "Asansol Court Area, Burnpur, Ushagram, Sen Raleigh Road, Kalyanpur Satellite Township, Chelidanga, Hutton Road",
        "pricing_1bhk": "₹5,200 - ₹8,200",
        "pricing_2bhk": "₹8,200 - ₹12,500",
        "pricing_3bhk": "₹12,500 - ₹17,500",
        "pricing_villa": "₹17,000 - ₹25,000",
        "pricing_bike": "₹1,500 - ₹2,400",
        "pricing_car": "₹3,500 - ₹5,800",
        "local_focus": "Eastern Railway (Asansol Division) administrative staff, locomotive workshop personnel, engineers, and retail traders moving between Madhupur and Asansol.",
        "reviews": [
            ("Somnath Chakraborty", "Railway Colony Madhupur to Ushagram Asansol", "Moved after being transferred to the Asansol Divisional Railway Manager (DRM) office. Crew loaded our railway quarter in Madhupur by 9 AM and finished setup in Asansol by 3 PM. Flawless service!"),
            ("Abhijit Ghosh", "Station Road Madhupur to Burnpur Asansol", "Shifted our 2 BHK apartment furniture and Maruti Swift car. The closed container protected our goods from highway dust and rain."),
            ("Pramod Kumar Sharma", "Gandhi Chowk Madhupur to Kalyanpur Asansol", "Extremely courteous crew who took care of every small detail. Reassembled all our Godrej almirahs and wooden beds without extra fee.")
        ],
        "faqs": [
            ("How long does moving take between Madhupur and Asansol?", "The road distance is roughly 80 km via Chittaranjan. Driving duration is 2 to 2.5 hours. Same-day completion is 100% guaranteed within 6 to 8 hours."),
            ("What are the shifting charges for a 2 BHK home from Madhupur to Asansol?", "A standard 2 BHK household relocation costs between ₹8,200 and ₹12,500 including 5-layer packing, container freight, and loading/unloading labor."),
            ("Do you provide official bills for Eastern Railway DRM claims?", "Yes, as an IBA-approved and GST-registered moving company, Shree Ashirwad Packers provides stamped consignment notes and tax invoices compliant with railway moving claims."),
            ("Can you move two-wheelers from Madhupur to Asansol?", "Yes, motorcycles and scooters are safely wrapped with bubble cushioning and transported inside closed trucks for ₹1,500 to ₹2,400."),
            ("How do you manage the border crossing between Jharkhand and West Bengal?", "Our commercial vehicles have full national permits, e-way bills, and tax clearances for fast border crossing without delays.")
        ]
    },
    {
        "id": 14,
        "slug": "madhupur-to-delhi-packers-and-movers",
        "origin": "Madhupur",
        "dest": "Delhi",
        "title": "Packers and Movers Madhupur to Delhi NCR | Long-Distance Interstate Moving",
        "desc": "Trusted packers and movers from Madhupur to Delhi NCR (Delhi, Noida, Gurgaon). 1,180 km express transit via NH-19 GT Road, 5-layer packing, car carrier, GPS tracking, door delivery.",
        "keywords": "madhupur to delhi packers and movers, packers and movers madhupur to delhi, house shifting madhupur to delhi, noida movers madhupur, gurgaon packers madhupur, car transport madhupur delhi, national movers madhupur",
        "distance": "1,180 km",
        "duration": "24 to 28 hours",
        "route_desc": "Via Giridih and Bagodar connecting onto NH-19 (GT Road) through Varanasi, Prayagraj, Kanpur, and Agra-Lucknow Expressway directly into Delhi NCR",
        "origin_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "dest_locality": "Delhi (Dwarka, Rohini, South Delhi, Janakpuri), Noida, Greater Noida, Gurgaon (Cyber City, Sohna Road), Faridabad, Ghaziabad",
        "pricing_1bhk": "₹17,000 - ₹25,000",
        "pricing_2bhk": "₹24,000 - ₹36,000",
        "pricing_3bhk": "₹34,000 - ₹50,000",
        "pricing_villa": "₹46,000 - ₹72,000",
        "pricing_bike": "₹4,800 - ₹7,200",
        "pricing_car": "₹13,500 - ₹21,000",
        "local_focus": "Corporate executives, IT professionals, central government officers, and families relocating from Madhupur sub-division to Delhi NCR.",
        "reviews": [
            ("Vivek Vardhan Sinha", "Station Road Madhupur to Noida Sector 62", "Moved 1,180 km to Noida. Zero damage to our crockery, TV, or heavy rosewood sofas. Sealed container truck arrived with seal intact within 3 days. Outstanding service!"),
            ("Anupam K. Jha", "Gandhi Chowk Madhupur to Gurgaon Cyber City", "Extremely professional crating of my WFH computer workstations and high-end audio setup. Outstanding interstate service!"),
            ("Shweta Narang", "Dalmia Koop Madhupur to Dwarka Sector 12 Delhi", "Their team handled loading in Madhupur and society lift permissions in Delhi flawlessly. Courteous, punctual, and genuine pricing.")
        ],
        "faqs": [
            ("How many days does transit take from Madhupur to Delhi NCR?", "The route covers 1,180 km. Dedicated container vehicles require 24 to 28 hours of driving time. Consignments are typically delivered within 2 to 3 days of pickup."),
            ("Can you pick up from rural estates around Madhupur?", "Yes, we organize feeder vehicles to navigate rural lanes before loading onto interstate container trucks for direct dispatch to Delhi NCR."),
            ("How do you protect delicate electronics like 65-inch OLED TVs?", "We pack screens with high-density thermocol sheet guards, anti-static bubble film, and custom heavy-duty corrugated wooden crates for fail-safe protection."),
            ("What is the cost of shifting a 2 BHK apartment from Madhupur to Delhi?", "A standard 2 BHK household relocation from Madhupur to Delhi NCR costs between ₹24,000 and ₹36,000 depending on volume, packaging level, and insurance coverage."),
            ("Do you provide car parcel service from Madhupur to Gurgaon or Delhi?", "Yes, we provide dedicated enclosed car carrier trailers that transport your vehicle safely with real-time tracking and zero wear-and-tear.")
        ]
    },
    {
        "id": 15,
        "slug": "madhupur-to-durgapur-packers-and-movers",
        "origin": "Madhupur",
        "dest": "Durgapur",
        "title": "Packers and Movers Madhupur to Durgapur | Steel City Intercity Moving",
        "desc": "Premier packers and movers from Madhupur to Durgapur. 120 km express transit via Asansol & NH-19, 5-layer packing, SAIL & industrial relocations, car & bike parcel, same-day delivery.",
        "keywords": "madhupur to durgapur packers and movers, packers and movers madhupur to durgapur, house shifting madhupur to durgapur, sail steel city packers durgapur, car transport madhupur durgapur, safe movers madhupur",
        "distance": "120 km",
        "duration": "3 to 3.5 hours",
        "route_desc": "Southward via Chittaranjan, Asansol bypass, and four-lane NH-19 directly into Durgapur Steel City",
        "origin_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "dest_locality": "City Centre, B-Zone, A-Zone, Benachity, Steel Township, Bidhannagar, Andal, Muchipara, Durgapur Barrage area",
        "pricing_1bhk": "₹6,500 - ₹9,800",
        "pricing_2bhk": "₹9,800 - ₹14,500",
        "pricing_3bhk": "₹14,500 - ₹20,500",
        "pricing_villa": "₹20,000 - ₹29,000",
        "pricing_bike": "₹1,800 - ₹2,800",
        "pricing_car": "₹4,200 - ₹6,800",
        "local_focus": "SAIL Durgapur Steel Plant personnel, engineering faculty (NIT Durgapur), medical staff, and industrial employees moving between Madhupur and Durgapur.",
        "reviews": [
            ("Er. Tanmoy Roy", "Station Road Madhupur to City Centre Durgapur", "Shifted our 2 BHK residence to Durgapur. The crew arrived on time in Madhupur, packed all items with care, and finished delivery in Durgapur by late afternoon. Very polite team."),
            ("Debolina Mukherjee", "Dalmia Koop Madhupur to B-Zone Steel Township Durgapur", "Handled our heavy wooden almirahs, showcase, and delicate glassware with great care. Zero scratches and quick assembly at our new home in Durgapur."),
            ("Prashant K. Sen", "Railway Colony Madhupur to Bidhannagar Durgapur", "Honest quotation with no surprise charges. Daily updates kept us at peace throughout the inter-state journey.")
        ],
        "faqs": [
            ("What is the travel time for goods movement from Madhupur to Durgapur?", "The transit distance is 120 km along NH-19 via Asansol. Our closed container trucks complete the drive in roughly 3 to 3.5 hours. Same-day completion is 100% guaranteed."),
            ("What are the rates for a 2 BHK home move from Madhupur to Durgapur?", "A standard 2 BHK household relocation costs between ₹9,800 and ₹14,500 including 5-layer packing, container freight, and labor."),
            ("Do you provide packing and moving assistance for industrial personnel in Durgapur?", "Yes, we are fully experienced in managing residential relocations for SAIL and industrial personnel, providing complete documentation compliant with shifting claims."),
            ("Can you move two-wheelers from Madhupur to Durgapur?", "Yes, motorcycles and scooters are safely wrapped with bubble cushioning and transported inside closed trucks for ₹1,800 to ₹2,800."),
            ("Is transit insurance provided for moves into West Bengal?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },

    # Group 4: Outside Jharkhand to Madhupur (Routes 16–20)
    {
        "id": 16,
        "slug": "kolkata-to-madhupur-packers-and-movers",
        "origin": "Kolkata",
        "dest": "Madhupur",
        "title": "Packers and Movers Kolkata to Madhupur | Metro Inbound Relocation",
        "desc": "Expert packers and movers from Kolkata to Madhupur, Deoghar. 290 km transit via NH-19 & Asansol, 5-layer packing, heritage retreat moving, vehicle carrier, door delivery.",
        "keywords": "kolkata to madhupur packers and movers, packers and movers kolkata to madhupur, house shifting kolkata to madhupur, hawa badal movers kolkata madhupur, car transport kolkata madhupur, safe movers kolkata",
        "distance": "290 km",
        "duration": "6 to 7 hours",
        "route_desc": "NH-19 northwest from Kolkata through Bardhaman, Durgapur, Asansol, then turning north at Chittaranjan into Madhupur sub-division",
        "origin_locality": "Salt Lake, New Town, Rajarhat, South City, Behala, Howrah, Jadavpur, Ballygunge, Garia, Dum Dum",
        "dest_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "pricing_1bhk": "₹11,500 - ₹16,500",
        "pricing_2bhk": "₹16,500 - ₹23,500",
        "pricing_3bhk": "₹22,500 - ₹32,000",
        "pricing_villa": "₹30,000 - ₹45,000",
        "pricing_bike": "₹3,000 - ₹4,500",
        "pricing_car": "₹8,000 - ₹13,000",
        "local_focus": "Returning professionals, retirees, heritage bungalow owners, and families relocating from Kolkata back to their Madhupur country estates.",
        "reviews": [
            ("Indranil Ganguly", "Salt Lake Kolkata to Dalmia Koop Madhupur", "Exceptional service! They protected our leather recliners and 65-inch television with multiple layers of bubble wrap. Unloaded at our Madhupur retreat without a blemish."),
            ("Mousumi Bhattacharya", "Howrah to Station Road Madhupur", "Smooth transit along NH-19. The vehicle arrived right on schedule, and their crew reassembled our bedroom furniture quickly in Madhupur."),
            ("Sourav Pal", "New Town Kolkata to Gandhi Chowk Madhupur", "Shifted our 2 BHK apartment and Maruti Baleno. Flawless execution and reliable customer assistance throughout.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Kolkata to Madhupur?", "The route covers about 290 km via NH-19 and Asansol. Driving duration is approximately 6 to 7 hours. Door-to-door relocation takes roughly 24 hours."),
            ("Can you pick up from high-rise residential colonies across Kolkata?", "Yes, our Kolkata teams handle high-rise societies in New Town, Rajarhat, Salt Lake, and South Kolkata with full adherence to elevator and security protocols."),
            ("How do you ensure wooden furniture remains scratch-free?", "We wrap all wooden surfaces in thick foam blankets, apply bubble cushioning around carved edges, and seal with tight stretch wrap to prevent dust, humidity, or scuffing."),
            ("What are the bike transport charges from Kolkata to Madhupur?", "Two-wheeler shifting costs between ₹3,000 and ₹4,500 based on engine cc and model, including multi-layer packing and transport inside a closed container."),
            ("Is transit insurance provided for inbound moves from West Bengal?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 17,
        "slug": "patna-to-madhupur-packers-and-movers",
        "origin": "Patna",
        "dest": "Madhupur",
        "title": "Packers and Movers Patna to Madhupur | Inbound Bihar Moving",
        "desc": "Professional packers and movers from Patna to Madhupur, Deoghar. 240 km express transit via Mokama & Jamui, 5-layer packing, home shifting, vehicle carrier, safe delivery.",
        "keywords": "patna to madhupur packers and movers, packers and movers patna to madhupur, house shifting patna to madhupur, patna to deoghar movers, car transport patna to madhupur, safe movers patna",
        "distance": "240 km",
        "duration": "5.5 to 6.5 hours",
        "route_desc": "NH-31 east from Patna through Mokama, Lakhisarai, Jamui, and Jhajha connecting directly into Madhupur sub-division",
        "origin_locality": "Kankarbagh, Boring Road, Bailey Road, Patliputra Colony, Danapur Cantt, Rajendra Nagar, Anisabad",
        "dest_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "pricing_1bhk": "₹9,500 - ₹14,000",
        "pricing_2bhk": "₹14,000 - ₹20,500",
        "pricing_3bhk": "₹19,500 - ₹28,000",
        "pricing_villa": "₹26,000 - ₹39,000",
        "pricing_bike": "₹2,600 - ₹4,000",
        "pricing_car": "₹7,000 - ₹11,500",
        "local_focus": "Returning executives, university alumni, and families shifting household belongings from Patna to Madhupur sub-division.",
        "reviews": [
            ("Prabir Chatterjee", "Bailey Road Patna to Madhupur Station Road", "Exceptional service! They protected our sofa and 55-inch television with multiple layers of bubble wrap. Unloaded at Madhupur without a blemish."),
            ("Shyamali Roy", "Kankarbagh Patna to Gandhi Chowk Madhupur", "Smooth transit along NH-31. The vehicle arrived right on schedule, and their crew reassembled our bedroom furniture quickly."),
            ("Ashim Halder", "Danapur Patna to Dalmia Koop Madhupur", "Shifted our 2 BHK apartment and Honda Activa. Flawless execution and reliable customer assistance throughout.")
        ],
        "faqs": [
            ("What is the time required to shift household goods from Patna to Madhupur?", "The highway distance is 240 km. Dedicated container vehicles complete the drive in 5.5 to 6.5 hours. Total move takes roughly 24 hours door-to-door."),
            ("Can you collect goods from residential areas across Patna?", "Yes, our Patna team utilizes feeder vans to navigate city lanes, smoothly transferring cargo to linehaul container trucks."),
            ("How do you ensure wooden furniture remains undamaged?", "We wrap all wooden surfaces in thick foam blankets, apply bubble cushioning around carved edges, and seal with tight stretch wrap to prevent dust and scratches."),
            ("What are the bike transport charges from Patna to Madhupur?", "Two-wheeler shifting costs between ₹2,600 and ₹4,000 based on engine cc and model, including multi-layer packing and transport inside a closed container."),
            ("Is transit insurance provided for moves from Bihar to Jharkhand?", "Yes, comprehensive goods-in-transit insurance is provided to cover loss or physical damage during highway transportation.")
        ]
    },
    {
        "id": 18,
        "slug": "asansol-to-madhupur-packers-and-movers",
        "origin": "Asansol",
        "dest": "Madhupur",
        "title": "Packers and Movers Asansol to Madhupur | Railway Corridor Relocation",
        "desc": "Trusted packers and movers from Asansol to Madhupur. 80 km express transit via Chittaranjan, 5-layer packing, Eastern Railway staff moves, car & bike parcel, same-day delivery.",
        "keywords": "asansol to madhupur packers and movers, packers and movers asansol to madhupur, house shifting asansol to madhupur, railway movers asansol madhupur, car transport asansol to madhupur, safe movers asansol",
        "distance": "80 km",
        "duration": "2 to 2.5 hours",
        "route_desc": "NH-19 north through Kulti and Chittaranjan / Rupnarayanpur directly into Madhupur town and Railway Colony",
        "origin_locality": "Asansol Court Area, Burnpur, Ushagram, Sen Raleigh Road, Kalyanpur Satellite Township, Chelidanga, Hutton Road",
        "dest_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "pricing_1bhk": "₹5,200 - ₹8,200",
        "pricing_2bhk": "₹8,200 - ₹12,500",
        "pricing_3bhk": "₹12,500 - ₹17,500",
        "pricing_villa": "₹17,000 - ₹25,000",
        "pricing_bike": "₹1,500 - ₹2,400",
        "pricing_car": "₹3,500 - ₹5,800",
        "local_focus": "Eastern Railway (Asansol Division) staff, locomotive workshop personnel, engineers, and retail traders shifting between Asansol and Madhupur.",
        "reviews": [
            ("Dipankar Bannerjee", "Ushagram Asansol to Railway Colony Madhupur", "Transferred from Asansol DRM office to Madhupur Junction. The team packed all our goods with great care and delivered to our Madhupur railway quarter within 5 hours."),
            ("Swapan Kumar Das", "Burnpur Asansol to Station Road Madhupur", "Shifted our 2 BHK household furniture and motorcycle. The closed container protected our goods from highway dust and rain."),
            ("Pritam Sen", "Kalyanpur Asansol to Gandhi Chowk Madhupur", "Courteous moving team who took care of every small detail. Reassembled all our Godrej almirahs and wooden beds without extra fee.")
        ],
        "faqs": [
            ("What is the road distance and travel time from Asansol to Madhupur?", "The highway route is approximately 80 km via Chittaranjan. Driving duration is roughly 2 to 2.5 hours. Total move takes 5 to 6 hours on the same day."),
            ("How do you manage the border crossing between West Bengal and Jharkhand?", "Our commercial vehicles have full national permits, e-way bills, and tax clearances for fast border crossing."),
            ("What are the 2 BHK moving charges from Asansol to Madhupur?", "A standard 2 BHK household relocation costs between ₹8,200 and ₹12,500 based on goods volume, floor heights, and packing specifications."),
            ("Can I ship my motorcycle from Asansol to Madhupur?", "Yes, two-wheelers are securely crated with bubble wrap and secured with ratchet belts inside our closed container truck for ₹1,500 to ₹2,400."),
            ("Do you provide transit insurance for moves from West Bengal?", "Yes, comprehensive transit insurance is available to safeguard all valuable furniture, appliances, and personal belongings.")
        ]
    },
    {
        "id": 19,
        "slug": "delhi-to-madhupur-packers-and-movers",
        "origin": "Delhi",
        "dest": "Madhupur",
        "title": "Packers and Movers Delhi to Madhupur | Long-Distance Interstate Shifting",
        "desc": "Premier packers and movers from Delhi NCR to Madhupur, Deoghar. 1,180 km express transit via Yamuna Expressway & NH-19, 5-layer packing, car carrier, door-to-door delivery.",
        "keywords": "delhi to madhupur packers and movers, packers and movers delhi to madhupur, house shifting delhi to madhupur, noida to madhupur movers, gurgaon to madhupur packers, car transport delhi to madhupur, national movers delhi",
        "distance": "1,180 km",
        "duration": "24 to 28 hours",
        "route_desc": "Yamuna Expressway / Agra-Lucknow Expressway to NH-19 (GT Road), turning south at Bagodar through Giridih into Madhupur",
        "origin_locality": "Delhi (Dwarka, Rohini, South Delhi, Janakpuri), Noida, Greater Noida, Gurgaon (Cyber City, Sohna Road), Faridabad",
        "dest_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "pricing_1bhk": "₹17,000 - ₹25,000",
        "pricing_2bhk": "₹24,000 - ₹36,000",
        "pricing_3bhk": "₹34,000 - ₹50,000",
        "pricing_villa": "₹46,000 - ₹72,000",
        "pricing_bike": "₹4,800 - ₹7,200",
        "pricing_car": "₹13,500 - ₹21,000",
        "local_focus": "Returning Jharkhand families, corporate directors, and researchers relocating from Delhi NCR to Madhupur's peaceful residential estates.",
        "reviews": [
            ("Vivek Vardhan", "Noida Sector 62 to Dalmia Koop Madhupur", "Moved 1,180 km back to our ancestral property near Madhupur. Zero damage to our crockery, TV, or heavy rosewood sofas. Sealed truck arrived with seal intact."),
            ("Anupam K. Sinha", "Gurgaon Cyber City to Station Road Madhupur", "Extremely professional crating of my WFH computer workstations and high-end audio setup. Outstanding interstate service!"),
            ("Shweta Narang", "Dwarka Sector 12 to Gandhi Chowk Madhupur", "Their team handled society gate permissions in Delhi and unloading in Madhupur flawlessly. Courteous, punctual, and genuine pricing.")
        ],
        "faqs": [
            ("How many days does transit take from Delhi NCR to Madhupur?", "The route covers 1,180 km. Dedicated container vehicles require 24 to 28 hours of driving time. Consignments are typically delivered within 2 to 3 days of pickup."),
            ("Can you pick up from multiple locations in Delhi NCR?", "Yes, we can organize split pickups across Delhi, Noida, or Gurgaon before locking the container for direct dispatch to Madhupur."),
            ("How do you protect delicate electronics like 65-inch OLED TVs?", "We pack screens with high-density thermocol sheet guards, anti-static bubble film, and custom heavy-duty corrugated wooden crates for fail-safe protection."),
            ("What is the cost of shifting a 2 BHK apartment from Delhi to Madhupur?", "A standard 2 BHK household relocation from Delhi NCR to Madhupur costs between ₹24,000 and ₹36,000 depending on total volume, packaging level, and insurance coverage."),
            ("Do you provide car parcel service from Gurgaon or Delhi to Madhupur?", "Yes, we provide dedicated enclosed car carrier trailers that transport your vehicle safely with real-time tracking and zero wear-and-tear.")
        ]
    },
    {
        "id": 20,
        "slug": "durgapur-to-madhupur-packers-and-movers",
        "origin": "Durgapur",
        "dest": "Madhupur",
        "title": "Packers and Movers Durgapur to Madhupur | Steel City to Madhupur Moving",
        "desc": "Trusted packers and movers from Durgapur to Madhupur. 120 km express transit via NH-19 & Asansol, 5-layer packing, industrial & household moves, car carrier, door-to-door delivery.",
        "keywords": "durgapur to madhupur packers and movers, packers and movers durgapur to madhupur, house shifting durgapur to madhupur, sail steel city movers madhupur, car transport durgapur to madhupur, safe movers durgapur",
        "distance": "120 km",
        "duration": "3 to 3.5 hours",
        "route_desc": "NH-19 through Asansol and Chittaranjan directly into Madhupur town and Railway Colony",
        "origin_locality": "City Centre, B-Zone, A-Zone, Benachity, Steel Township, Bidhannagar, Andal, Muchipara",
        "dest_locality": "Gandhi Chowk, Station Road, Railway Colony, Loco Shed, Dalmia Koop, Pathrol Road, Bhedwan, Lal Garh, Charpa",
        "pricing_1bhk": "₹6,500 - ₹9,800",
        "pricing_2bhk": "₹9,800 - ₹14,500",
        "pricing_3bhk": "₹14,500 - ₹20,500",
        "pricing_villa": "₹20,000 - ₹29,000",
        "pricing_bike": "₹1,800 - ₹2,800",
        "pricing_car": "₹4,200 - ₹6,800",
        "local_focus": "SAIL Durgapur Steel Plant personnel, engineering faculty, medical staff, and industrial employees moving from Durgapur to Madhupur.",
        "reviews": [
            ("Prashant K. Sen", "Bidhannagar Durgapur to Gandhi Chowk Madhupur", "Honest quotation with no surprise charges. Daily updates kept us at peace throughout the inter-state journey. Excellent delivery in Madhupur."),
            ("Snehalata Rao", "City Centre Durgapur to Station Road Madhupur", "Our 3 BHK furniture and Hyundai i20 were transported securely. The Durgapur crew arrived on time and the Madhupur unloading team reassembled all our beds."),
            ("Rakesh N. Nair", "A-Zone Durgapur to Dalmia Koop Madhupur", "Exceptional service! They protected our leather recliners and 55-inch television with multiple layers of bubble wrap. Unloaded at Madhupur without a blemish.")
        ],
        "faqs": [
            ("What is the typical delivery schedule from Durgapur to Madhupur?", "The highway distance is approximately 120 km. Our sealed container trucks complete the journey in 3 to 3.5 hours, ensuring same-day delivery."),
            ("Can you dismantle and reinstall modular beds and wardrobes in Madhupur?", "Yes, our team includes skilled carpenters who dismantle furniture in Durgapur and reassemble every unit upon delivery at your new home in Madhupur."),
            ("How do you safeguard two-wheelers during the journey from Durgapur?", "Two-wheelers are drained of fuel, crated with foam and corrugated wrapping, and lashed with heavy-duty tension belts inside the closed container truck."),
            ("What is the shifting charge for a 2 BHK family home from Durgapur to Madhupur?", "A 2 BHK household move typically ranges between ₹9,800 and ₹14,500, which includes 5-layer packing, loading, highway transit, unloading, and basic unpacking."),
            ("Do you assist with society permissions in Durgapur during pickup?", "Yes, our Durgapur branch team coordinates with your apartment management committee to adhere to moving hours, service lift protection, and security clearances.")
        ]
    }
]

def generate_page(r):
    origin = r["origin"]
    dest = r["dest"]
    slug = r["slug"]
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
 * Group: Route {r["id"]} - Madhupur Corridor
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
        "telephone": "+91-8409531615",
        "priceRange": "{r["pricing_1bhk"]} - {r["pricing_villa"]}",
        "address": {{
            "@type": "PostalAddress",
            "streetAddress": "Station Road, Near Gandhi Chowk",
            "addressLocality": "Madhupur",
            "addressRegion": "Jharkhand",
            "postalCode": "815353",
            "addressCountry": "IN"
        }},
        "geo": {{
            "@type": "GeoCoordinates",
            "latitude": 24.2642,
            "longitude": 86.6475
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
            "telephone": "+91-8409531615",
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
            bottom: 0;
            left: 0;
            width: 60px;
            height: 3px;
            background: #ff5722;
        }}
        .section-header-block.text-center h2::after {{
            left: 50%;
            transform: translateX(-50%);
        }}
        .section-header-block p {{
            font-size: 1.05rem;
            color: #4b5563;
            max-width: 800px;
            line-height: 1.6;
        }}

        /* Feature Cards */
        .feature-box {{
            background: #ffffff;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 26px;
            height: 100%;
            transition: all 0.3s ease;
            box-shadow: 0 2px 8px rgba(0,0,0,0.03);
        }}
        .feature-box:hover {{
            transform: translateY(-3px);
            border-color: #cbd5e1;
            box-shadow: 0 8px 20px rgba(0,0,0,0.06);
        }}
        .feature-icon {{
            font-size: 2rem;
            color: #ff5722;
            margin-bottom: 18px;
        }}
        .feature-box h3 {{
            font-size: 1.25rem;
            font-weight: 700;
            color: #0f223d;
            margin-bottom: 10px;
        }}
        .feature-box p {{
            font-size: 0.95rem;
            color: #4b5563;
            line-height: 1.6;
            margin-bottom: 0;
        }}

        /* Responsive Tariff Table */
        .table-responsive-wrapper {{
            overflow-x: auto;
            border-radius: 8px;
            border: 1px solid #e2e8f0;
            box-shadow: 0 2px 10px rgba(0,0,0,0.02);
            margin-bottom: 25px;
        }}
        .tariff-table {{
            width: 100%;
            border-collapse: collapse;
            background: #ffffff;
            text-align: left;
        }}
        .tariff-table th {{
            background: #0f223d;
            color: #ffffff;
            font-weight: 600;
            padding: 14px 18px;
            font-size: 0.95rem;
        }}
        .tariff-table td {{
            padding: 14px 18px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 0.95rem;
            color: #374151;
        }}
        .tariff-table tr:last-child td {{
            border-bottom: none;
        }}
        .tariff-table tr:nth-child(even) {{
            background: #f8fafc;
        }}
        .rate-highlight {{
            font-weight: 700;
            color: #ff5722;
        }}

        /* Visual Gallery Showcase */
        .visual-card {{
            border-radius: 10px;
            overflow: hidden;
            background: #ffffff;
            border: 1px solid #e2e8f0;
            box-shadow: 0 4px 15px rgba(0,0,0,0.04);
            height: 100%;
            transition: all 0.3s ease;
        }}
        .visual-card:hover {{
            transform: translateY(-3px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.08);
        }}
        .visual-card img {{
            width: 100%;
            height: 200px;
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
                    <span class="hero-meta-badge"><i class="fas fa-route"></i> Highway Corridor: {r["distance"]}</span>
                    <span class="hero-meta-badge"><i class="fas fa-clock"></i> Transit Time: {r["duration"]}</span>
                    <span class="hero-meta-badge"><i class="fas fa-shield-alt"></i> 100% Insured Fleet</span>
                    <span class="hero-meta-badge"><i class="fas fa-file-invoice"></i> IBA Approved Bills</span>
                </div>
                <div class="hero-cta-group">
                    <a href="tel:+918409531615" class="btn-brand-primary"><i class="fas fa-phone-alt"></i> Call +91-8409531615</a>
                    <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn-brand-secondary"><i class="fas fa-calculator"></i> Get Free Moving Quote</a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Route Logistics Profile Section -->
<section class="content-section">
    <div class="container">
        <div class="section-header-block">
            <h2>Logistical Corridor Overview: {origin} to {dest}</h2>
            <p>
                Relocating between {origin} and {dest} requires thorough knowledge of the regional highways, town entry points, and rural road infrastructure. Our dedicated logistics team has operated across this route for years, ensuring scheduled dispatches and timely doorstep deliveries.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-6">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-map-marked-alt"></i></div>
                    <h3>Highway Transit Route</h3>
                    <p>
                        The primary route covers approximately {r["distance"]} along {r["route_desc"]}. Our GPS-equipped, enclosed container vehicles navigate smoothly past major junctions, bypassing city congestion to maintain punctuality.
                    </p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-city"></i></div>
                    <h3>Local Coverage & Neighborhoods</h3>
                    <p>
                        In {origin}, we provide full packing and loading across {r["origin_locality"]}. Upon reaching {dest}, our crew unloads, unpacks, and sets up your furniture in {r["dest_locality"]}.
                    </p>
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
                        <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Doorstep pickup in {origin} and doorstep handover at {dest} ({r["pricing_bike"]})</li>
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
                        <li style="margin-bottom: 8px;"><i class="fas fa-check-circle" style="color: #10b981; margin-right: 8px;"></i> Full all-risk vehicle transit insurance backed by public insurers ({r["pricing_car"]})</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Government, Banking, Railway & Corporate Transfers Section -->
<section class="content-section">
    <div class="container">
        <div class="section-header-block">
            <h2>Government, Railway & Corporate Relocation Documentation</h2>
            <p>
                Our services cater extensively to {r["local_focus"]}. Shree Ashirwad Packers and Movers is an IBA-approved logistics provider trusted by Eastern Railway (Asansol Division) staff, Madhupur sub-divisional administrative officers, judicial court staff, nationalized banks, and private executives.
            </p>
        </div>

        <div class="row g-4 align-items-center">
            <div class="col-lg-6">
                <div class="feature-box">
                    <h3 style="color: #0f223d; margin-bottom: 15px;">100% Audit-Compliant Relocation Documentation</h3>
                    <p style="margin-bottom: 15px;">
                        Whether shifting under official railway transfer orders, court administrative transfers, bank employee transfer policies, or private job relocations, we provide transparent, audit-ready paperwork:
                    </p>
                    <ul style="list-style: none; padding-left: 0; font-size: 0.96rem; color: #4b5563;">
                        <li style="margin-bottom: 10px;"><i class="fas fa-file-invoice-dollar" style="color: #0d6efd; margin-right: 8px;"></i> <strong>GST-Registered Invoices:</strong> Official tax invoices with correct SAC codes and company GSTIN for effortless HR and accounts reimbursement.</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-file-contract" style="color: #0d6efd; margin-right: 8px;"></i> <strong>IBA-Approved Consignment Notes (Bilty):</strong> Legally binding consignment notes detailing origin, destination, vehicle registration, and inventory value.</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-list-check" style="color: #0d6efd; margin-right: 8px;"></i> <strong>Itemized Inventory Sheets:</strong> Numbered packing manifests cross-signed at both pickup and delivery points to verify complete inventory arrival.</li>
                        <li style="margin-bottom: 0;"><i class="fas fa-shield-halved" style="color: #0d6efd; margin-right: 8px;"></i> <strong>Transit Risk Policies:</strong> Genuine third-party transit insurance cover certificates issued prior to vehicle dispatch.</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="feature-box">
                    <h3 style="color: #0f223d; margin-bottom: 15px;">Dedicated Move Coordination & Single Point of Contact</h3>
                    <p style="margin-bottom: 15px;">
                        From your initial site survey in {origin} to key handover and furniture assembly at your new address in {dest}, you are paired with a dedicated relocation coordinator who oversees every milestone:
                    </p>
                    <ul style="list-style: none; padding-left: 0; font-size: 0.96rem; color: #4b5563;">
                        <li style="margin-bottom: 10px;"><i class="fas fa-user-check" style="color: #ff5722; margin-right: 8px;"></i> <strong>Advance Pre-Move Scheduling:</strong> Accurate volume assessment and scheduling of packing teams at {origin}.</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-route" style="color: #ff5722; margin-right: 8px;"></i> <strong>Live GPS Fleet Telemetry:</strong> Real-time journey updates while your closed container vehicle navigates along {r["route_desc"]}.</li>
                        <li style="margin-bottom: 10px;"><i class="fas fa-door-open" style="color: #ff5722; margin-right: 8px;"></i> <strong>Destination Society & Colony Clearances:</strong> Advance paperwork coordination with society managers, security gates, and building RWAs in {dest}.</li>
                        <li style="margin-bottom: 0;"><i class="fas fa-handshake" style="color: #ff5722; margin-right: 8px;"></i> <strong>Zero Hidden Surcharges:</strong> All-inclusive quotations with guaranteed fixed prices and zero loading day surprise fees.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tariff & Pricing Schedule Section -->
<section class="content-section bg-light">
    <div class="container">
        <div class="section-header-block text-center">
            <h2 style="display: inline-block;">Transparent Shifting Tariff: {origin} to {dest}</h2>
            <p style="margin: 0 auto;">
                Clear, upfront price estimates with zero surprise fees. Customized estimates based on household size, vehicle category, and packing material tiers.
            </p>
        </div>

        <div class="table-responsive-wrapper">
            <table class="tariff-table">
                <thead>
                    <tr>
                        <th>Consignment Category</th>
                        <th>Packing Supplies & Labor</th>
                        <th>Dedicated Truck Freight</th>
                        <th>Total Estimated Cost</th>
                        <th>Transit Turnaround</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>1 BHK Complete Shifting</strong></td>
                        <td>₹2,500 - ₹4,000</td>
                        <td>₹3,500 - ₹5,500</td>
                        <td><span class="rate-highlight">{r["pricing_1bhk"]}</span></td>
                        <td>{r["duration"]}</td>
                    </tr>
                    <tr>
                        <td><strong>2 BHK Household Apartment</strong></td>
                        <td>₹4,000 - ₹6,500</td>
                        <td>₹5,500 - ₹8,500</td>
                        <td><span class="rate-highlight">{r["pricing_2bhk"]}</span></td>
                        <td>{r["duration"]}</td>
                    </tr>
                    <tr>
                        <td><strong>3 BHK Family Residence</strong></td>
                        <td>₹6,000 - ₹9,500</td>
                        <td>₹8,000 - ₹13,000</td>
                        <td><span class="rate-highlight">{r["pricing_3bhk"]}</span></td>
                        <td>Same Day / Next Morning</td>
                    </tr>
                    <tr>
                        <td><strong>4 BHK / Large Bungalow Move</strong></td>
                        <td>₹8,500 - ₹13,500</td>
                        <td>₹11,500 - ₹18,500</td>
                        <td><span class="rate-highlight">{r["pricing_villa"]}</span></td>
                        <td>1 to 2 Days</td>
                    </tr>
                    <tr>
                        <td><strong>Two-Wheeler / Bike Parcel</strong></td>
                        <td>₹800 - ₹1,400</td>
                        <td>₹1,200 - ₹2,200</td>
                        <td><span class="rate-highlight">{r["pricing_bike"]}</span></td>
                        <td>{r["duration"]}</td>
                    </tr>
                    <tr>
                        <td><strong>Car / SUV Transport Carrier</strong></td>
                        <td>₹1,500 - ₹2,500</td>
                        <td>₹3,500 - ₹7,000</td>
                        <td><span class="rate-highlight">{r["pricing_car"]}</span></td>
                        <td>1 to 2 Days</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <p style="font-size: 0.9rem; color: #64748b; font-style: italic; text-align: center;">
            * Tariff notes: Exact charges depend on floor level, elevator availability, fragile items volume, and optional transit insurance (1.5% to 3% of declared consignment value).
        </p>
    </div>
</section>

<!-- Comprehensive Shifting Methodology Section -->
<section class="content-section">
    <div class="container">
        <div class="section-header-block text-center">
            <h2 style="display: inline-block;">Our Proven 6-Step Relocation Methodology</h2>
            <p style="margin: 0 auto;">
                Experience an organized, stress-free moving journey managed end-to-end by certified logistics professionals from {origin} to {dest}.
            </p>
        </div>

        <div class="row g-4">
            <div class="col-md-4">
                <div class="feature-box">
                    <div class="feature-icon"><i class="fas fa-clipboard-list"></i></div>
                    <h3>1. Pre-Move Survey & Estimate</h3>
                    <p>
                        We conduct a thorough in-person or video inventory survey in {origin} to assess volume, fragile goods, dismantle requirements, and provide a clear, binding quotation.
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
<section class="content-section bg-light">
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
                        The transit corridor connecting {origin} and {dest} spans approximately {r["distance"]} via {r["route_desc"]}. To avoid peak morning commuter congestion and toll delays, our operations team coordinates early morning departure schedules between 6:30 AM and 8:30 AM.
                    </p>
                    <p style="font-size: 0.96rem; color: #4b5563; line-height: 1.65; margin-bottom: 0;">
                        Our sealed container trucks bypass urban bottlenecks and narrow market corridors through planned ring roads and bypasses, ensuring stable highway cruising speeds and minimal transit vibration for your fragile household possessions.
                    </p>
                </div>
            </div>
            <div class="col-lg-6">
                <div style="background: #ffffff; border: 1px solid #e2e8f0; border-radius: 10px; padding: 25px; height: 100%;">
                    <h3 style="font-size: 1.25rem; font-weight: 700; color: #0f223d; margin-bottom: 15px;">
                        <i class="fas fa-building-user" style="color: #ff5722; margin-right: 8px;"></i> Local Clearances & Doorstep Setup
                    </h3>
                    <p style="font-size: 0.96rem; color: #4b5563; line-height: 1.65; margin-bottom: 15px;">
                        When delivering to residential townships, railway colonies, government quarters, or private residences across {dest}, our coordinators contact local management or ward offices in advance to ensure smooth truck approach and parking clearance.
                    </p>
                    <p style="font-size: 0.96rem; color: #4b5563; line-height: 1.65; margin-bottom: 0;">
                        Whether shifting into modern apartment layouts or individual family houses, our crew is equipped with long-distance carrying dollies and specialized ground sheets to protect your fresh interior flooring.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Verified Customer Reviews Section -->
<section class="content-section">
    <div class="container">
        <div class="section-header-block text-center">
            <h2 style="display: inline-block;">Real Relocation Feedback: {origin} to {dest}</h2>
            <p style="margin: 0 auto;">
                Authentic testimonials from genuine customers who trusted Shree Ashirwad Packers and Movers for their intercity shifting.
            </p>
        </div>

        <div class="row g-4">
{reviews_html_str}
        </div>
    </div>
</section>

<!-- Frequently Asked Questions Section -->
<section class="content-section bg-light">
    <div class="container">
        <div class="section-header-block text-center">
            <h2 style="display: inline-block;">Frequently Asked Questions: {origin} to {dest}</h2>
            <p style="margin: 0 auto;">
                Clear answers to common questions regarding transit times, safety protocols, payment terms, and vehicle parcel options.
            </p>
        </div>

        <div class="faq-accordion">
{faq_html_str}
        </div>
    </div>
</section>

<!-- Call to Action Banner -->
<section class="content-section">
    <div class="container">
        <div class="cta-banner">
            <h2>Ready to Relocate from {origin} to {dest}?</h2>
            <p>
                Experience safe, transparent, and seamless moving with Jharkhand's most trusted relocation specialist. Get your free personalized estimate in under 5 minutes.
            </p>
            <div class="hero-cta-group" style="justify-content: center;">
                <a href="tel:+918409531615" class="btn-brand-primary" style="font-size: 1.1rem; padding: 14px 34px;"><i class="fas fa-phone-alt"></i> Call +91-8409531615</a>
                <a href="<?php echo SITE_BASE_URL; ?>/contact" class="btn-brand-secondary" style="font-size: 1.1rem; padding: 14px 30px;"><i class="fas fa-calendar-check"></i> Book Your Moving Date</a>
            </div>
        </div>
    </div>
</section>

<?php
// Include Site Footer
if (file_exists(__DIR__ . '/../includes/footer.php')) {{
    include_once __DIR__ . '/../includes/footer.php';
}}
?>

<script>
// Local Interactive Accordion for Route FAQ
document.addEventListener('DOMContentLoaded', function() {{
    const faqButtons = document.querySelectorAll('.faq-question');
    faqButtons.forEach(button => {{
        button.addEventListener('click', function() {{
            const answer = this.nextElementSibling;
            const icon = this.querySelector('i');
            
            if (answer.style.display === 'block') {{
                answer.style.display = 'none';
                icon.classList.remove('fa-chevron-up');
                icon.classList.add('fa-chevron-down');
            }} else {{
                document.querySelectorAll('.faq-answer').forEach(el => el.style.display = 'none');
                document.querySelectorAll('.faq-question i').forEach(el => {{
                    el.classList.remove('fa-chevron-up');
                    el.classList.add('fa-chevron-down');
                }});
                answer.style.display = 'block';
                icon.classList.remove('fa-chevron-down');
                icon.classList.add('fa-chevron-up');
            }}
        }});
    }});
}});
</script>

</body>
</html>
"""
    return content

def main():
    print(f"Starting generation of {len(ROUTES)} Madhupur corridor pages...")
    os.makedirs(PAGES_DIR, exist_ok=True)
    
    generated = 0
    for r in ROUTES:
        filepath = os.path.join(PAGES_DIR, f"{r['slug']}.php")
        content = generate_page(r)
        with open(filepath, "w", encoding="utf-8") as f:
            f.write(content)
        generated += 1
        print(f"[{generated}/{len(ROUTES)}] Generated: {r['slug']}.php")

    print(f"\nSuccessfully generated all {generated} pages in {PAGES_DIR}!")

if __name__ == "__main__":
    main()
