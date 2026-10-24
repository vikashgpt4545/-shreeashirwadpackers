import glob
import re
import os

files = glob.glob('pages/*.php')
all_includes = set()
broken_files = []

for f in files:
    with open(f, 'r', encoding='utf-8', errors='ignore') as fp:
        lines = fp.readlines()
    for line_idx, line in enumerate(lines, 1):
        if 'require' in line or 'include' in line:
            # check if it references init.php
            if 'init.php' in line:
                broken_files.append((f, line_idx, line.strip()))
            all_includes.add(line.strip())

print(f"Total pages checked: {len(files)}")
print(f"Files referencing init.php: {len(broken_files)}")
for bf in broken_files:
    print(f"  {bf[0]}:{bf[1]} -> {bf[2]}")
