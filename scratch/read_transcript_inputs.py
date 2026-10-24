import json

log_file = r"C:\Users\vikash\.gemini\antigravity-ide\brain\cc6ab5f4-567e-475e-84a9-64702d16b12b\.system_generated\logs\transcript.jsonl"
with open(log_file, "r", encoding="utf-8") as f:
    for idx, line in enumerate(f):
        try:
            data = json.loads(line)
            if data.get("source") in ["USER_EXPLICIT", "USER"]:
                print(f"Line {idx} (Step {data.get('step_index')}): {data.get('content')}")
        except Exception as e:
            pass
