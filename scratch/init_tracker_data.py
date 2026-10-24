import json
import re

backlink_txt_path = r"d:\shreeashirwadpackers\BACKLINK_LIST.txt"
tracker_json_path = r"d:\shreeashirwadpackers\backlink_tracker_data.json"

with open(backlink_txt_path, "r", encoding="utf-8") as f:
    content = f.read()

# Parse items like: [ ] 001. https://provenexpert.com/                     (DA: 100)
pattern = re.compile(r"\[\s*\]\s+(\d+)\.\s+(https?://([^/\s]+)/?)\s+\(DA:\s*(\d+)\)")
matches = pattern.findall(content)

sites = []
for m in matches:
    idx = int(m[0])
    full_url = m[1]
    domain = m[2]
    da = int(m[3])
    day = ((idx - 1) // 10) + 1
    
    site_obj = {
        "id": idx,
        "domain": domain,
        "url": full_url,
        "da": da,
        "day": day,
        "batch": day,
        "status": "PENDING",
        "backlink_url": None,
        "website_url_placed": False,
        "gmb_link_placed": False,
        "analysis": {
            "platform_type": "Social Bookmarking / Web 2.0 Directory",
            "website_placement": "Website URL submission field",
            "gmb_placement": "Story description / profile bio link",
            "registration_req": "Email, username, password",
            "verification_type": "Email verification or instant submission",
            "approval_process": "Auto-published or editorial moderation"
        },
        "actions_log": [],
        "notes": ""
    }
    sites.append(site_obj)

# Detailed analysis for Site #1: provenexpert.com
if sites:
    sites[0]["status"] = "IN_PROGRESS"
    sites[0]["analysis"] = {
        "platform_type": "Global Business Reputation & Review Directory (DA 100)",
        "website_placement": "Dedicated 'Company Website' field in Public Profile overview (Creates high-authority brand backlink)",
        "gmb_placement": "ProvenExpert 'External Review Profiles' feature allows direct connection of Google Business Profile (GMB) URL to synchronize star ratings and reviews",
        "registration_req": "Work email / Business email, Company Name (Shree Ashirwad Packers and Movers), City/Postal code, Phone number",
        "verification_type": "Email confirmation link sent to registered email address",
        "approval_process": "Instant publication of basic profile upon clicking email verification link"
    }
    sites[0]["actions_log"] = [
        {
            "step": 1,
            "action": "Platform Anatomy & Capability Inspection",
            "status": "COMPLETED",
            "details": "Verified provenexpert.com allows free business profile with dofollow/high-DA brand link, company address in Ranchi, phone +91 9835565233, and direct Google Review/GMB integration."
        },
        {
            "step": 2,
            "action": "Preparation of Registration & Submission Payload",
            "status": "COMPLETED",
            "details": "Anchored to 'Packers and Movers Ranchi - 9835565233', Target URL: https://shreeashirwadpackers.com/, GMB: https://share.google/0U65Vc4zAVDwVlPfD"
        },
        {
            "step": 3,
            "action": "User Consultation & Approval Phase",
            "status": "AWAITING_USER_APPROVAL",
            "details": "Presenting analysis, registration requirements, and link placement strategy to user for verification and authorization."
        }
    ]
    sites[0]["notes"] = "Ready for execution upon user confirmation. Requires an email address to receive activation link."

dashboard_data = {
    "project_name": "Shree Ashirwad Packers and Movers",
    "homepage_url": "https://shreeashirwadpackers.com/",
    "gmb_url": "https://share.google/0U65Vc4zAVDwVlPfD",
    "primary_anchor": "Packers and Movers Ranchi - 9835565233",
    "primary_keywords": "Packers and Movers Ranchi, household shifting ranchi, packers and movers in ranchi",
    "total_targets": len(sites),
    "active_site_id": 1,
    "last_updated": "2026-10-23T12:45:00+05:30",
    "sites": sites
}

with open(tracker_json_path, "w", encoding="utf-8") as f:
    json.dump(dashboard_data, f, indent=2)

print(f"Successfully created tracker data with {len(sites)} sites. Site #1 marked IN_PROGRESS with analysis!")
