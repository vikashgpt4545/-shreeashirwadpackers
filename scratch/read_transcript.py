import json

path = r'C:\Users\vikash\.gemini\antigravity-ide\brain\b0b571ae-8e52-45e8-bc4d-9bd3b2816eea\.system_generated\logs\transcript_full.jsonl'
with open(path, 'r', encoding='utf-8') as f:
    for line in f:
        d = json.loads(line)
        if d.get('step_index') == 3321:
            print(d.get('content'))
