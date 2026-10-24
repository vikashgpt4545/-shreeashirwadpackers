import glob
import re

missing = [f for f in glob.glob('pages/*.php') if '<!DOCTYPE' not in open(f, encoding='utf-8', errors='ignore').read() and '<!doctype' not in open(f, encoding='utf-8', errors='ignore').read()]

print(f"Total: {len(missing)}")
for f in sorted(missing):
    with open(f, 'r', encoding='utf-8', errors='ignore') as fp:
        lines = fp.readlines()
    print(f"\n=== {f} ===")
    print("--- TOP 18 LINES ---")
    print("".join(lines[:18]))
    print("--- BOTTOM 8 LINES ---")
    print("".join(lines[-8:]))
