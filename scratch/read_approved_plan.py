import json, sys

sys.stdout.reconfigure(encoding='utf-8')
log_file = r"C:\Users\vikash\.gemini\antigravity-ide\brain\cc6ab5f4-567e-475e-84a9-64702d16b12b\.system_generated\logs\transcript.jsonl"
with open(log_file, "r", encoding="utf-8") as f:
    for line in f:
        data = json.loads(line)
        idx = data.get("step_index", 0)
        if 1028 <= idx <= 1045:
            content = data.get("content", "")
            if content:
                print(f"=== STEP {idx} ===")
                print(content[:3000])
