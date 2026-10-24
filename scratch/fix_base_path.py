import os

files_to_fix = [
    'pages/packers-and-movers-in-ambikapur.php',
    'pages/packers-and-movers-in-champa.php',
    'pages/packers-and-movers-in-dhamtari.php',
    'pages/packers-and-movers-in-jagdalpur.php',
    'pages/packers-and-movers-in-mahasamund.php',
    'pages/packers-and-movers-in-pandri-raipur.php',
    'pages/packers-and-movers-in-rajnandgaon.php',
    'pages/packers-and-movers-in-shankar-nagar-raipur.php'
]

for f in files_to_fix:
    if os.path.exists(f):
        with open(f, 'r', encoding='utf-8') as fp:
            content = fp.read()
        
        new_content = content.replace("include BASE_PATH . '/includes/header.php';", "include __DIR__ . '/../includes/header.php';")
        new_content = new_content.replace("include BASE_PATH . '/includes/footer.php';", "include __DIR__ . '/../includes/footer.php';")
        new_content = new_content.replace("include_once BASE_PATH . '/includes/header.php';", "include __DIR__ . '/../includes/header.php';")
        new_content = new_content.replace("include_once BASE_PATH . '/includes/footer.php';", "include __DIR__ . '/../includes/footer.php';")
        new_content = new_content.replace("require BASE_PATH . '/includes/header.php';", "include __DIR__ . '/../includes/header.php';")
        new_content = new_content.replace("require BASE_PATH . '/includes/footer.php';", "include __DIR__ . '/../includes/footer.php';")
        new_content = new_content.replace("require_once BASE_PATH . '/includes/header.php';", "include __DIR__ . '/../includes/header.php';")
        new_content = new_content.replace("require_once BASE_PATH . '/includes/footer.php';", "include __DIR__ . '/../includes/footer.php';")
        
        with open(f, 'w', encoding='utf-8') as fp:
            fp.write(new_content)
        print(f"Fixed BASE_PATH in: {f}")

print("Done fixing BASE_PATH in all 8 files.")
