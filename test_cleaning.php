<?php

$content = file_get_contents('nerve-graft-surgery-in-delhi.php');

$content = preg_replace('/<!--Open Graph Tags-->.*?<!--Schema Markup-->/is', '<!--Schema Markup-->', $content);

echo "Length after OG replace: " . strlen($content) . "\n";

$content = preg_replace('/<!--Schema Markup-->\s*<script type="application\/ld\+json">\s*\{.*?"@type": "MedicalClinic".*?\}\s*<\/script>/is', '', $content);

echo "Length after Schema replace: " . strlen($content) . "\n";

file_put_contents('test_output.php', $content);

?>