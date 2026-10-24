import json

last_responses = []
with open(r"C:\Users\vikash\.gemini\antigravity-ide\brain\416a1c4e-d6e6-4fbe-be42-02c7f75ec210\.system_generated\logs\transcript_full.jsonl", "r", encoding="utf-8") as f:
    for line in f:
        data = json.loads(line)
        if data.get("type") == "PLANNER_RESPONSE" and data.get("content") and data.get("status") != "CLEARED":
            last_responses.append((data.get("step_index"), data.get("content")))

for idx, c in last_responses[-5:]:
    print(f"=== STEP {idx} ===")
    safe_c = c.encode("ascii", errors="replace").decode("ascii")
    print(safe_c[:1200])
    print("...\n")
