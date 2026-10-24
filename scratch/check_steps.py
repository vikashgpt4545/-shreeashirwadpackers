import json
import sys

sys.stdout.reconfigure(encoding='utf-8')

target_steps = [0, 10, 50, 100, 105, 200, 300, 400, 500, 538]



with open(r"C:\Users\vikash\.gemini\antigravity-ide\brain\cc6ab5f4-567e-475e-84a9-64702d16b12b\.system_generated\logs\transcript.jsonl", "r", encoding="utf-8") as f:
    for idx, line in enumerate(f):
        if idx < 632:
            continue
        if idx > 947:
            break
        d = json.loads(line)
        if d.get("type") == "PLANNER_RESPONSE" and d.get("content"):
            c = d.get("content", "").replace("\n", " ")[:200]
            print(f"[{idx}] Step {d.get('step_index')}: {c}")






