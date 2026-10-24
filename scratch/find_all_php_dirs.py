import os

for root, dirs, files in os.walk('.'):
    # skip .git, .agents, scratch
    if any(p in root for p in ['.git', '.agents', 'scratch']):
        continue
    php_in_dir = [f for f in files if f.endswith('.php')]
    if php_in_dir:
        print(f"Directory: {root} -> {len(php_in_dir)} php files")
