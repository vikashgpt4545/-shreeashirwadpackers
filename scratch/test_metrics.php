<?php
$file = $argv[1] ?? '';
if (!file_exists($file)) {
    die("File not found: $file\n");
}
$content = file_get_contents($file);

// Schemas
preg_match_all('/<script type="application\/ld\+json">(.*?)<\/script>/s', $content, $schemas);
$schemaCount = 0;
foreach ($schemas[1] as $s) {
    $json = json_decode($s, true);
    if (isset($json['@graph'])) {
        $schemaCount += count($json['@graph']);
    } else {
        $schemaCount++;
    }
}

// Images
preg_match_all('/<img [^>]*src="([^"]+)"[^>]*alt="([^"]+)"/i', $content, $imgs);
$imgCount = count($imgs[0]);

// Words (visible content only)
$clean = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $content);
$clean = preg_replace('/<\?php.*?\?>/is', '', $clean);
$clean = strip_tags($clean);
$words = str_word_count($clean);

echo "File: " . basename($file) . "\n";
echo "Visible Words: $words\n";
echo "Images: $imgCount\n";
echo "Schemas: $schemaCount\n";
foreach ($imgs[1] as $idx => $src) {
    echo "  Img " . ($idx+1) . ": $src (Alt: " . $imgs[2][$idx] . ")\n";
}
