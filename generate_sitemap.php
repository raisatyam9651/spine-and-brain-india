<?php
$dir = __DIR__;
$files = glob($dir . '/*.php');
$baseUrl = 'https://spineandbrainindia.com/';
$excludeFiles = [
    'header.php',
    'footer.php',
    'head.php',
    'script.php',
    'service-sidebar.php',
    'cta-form.php',
    'submit.php',
    'submit1.php',
    'test_output.php',
    'test_regex.php',
    'test.php',
    'google-script.php',
    'db.php',
    'db_connect.php',
    'config.php',
    'admin.php',
    'login.php'
];

$date = date('c');

$xml = '<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
';

$xml .= "<url>\n<loc>{$baseUrl}</loc>\n<lastmod>{$date}</lastmod>\n<priority>1.00</priority>\n</url>\n";

foreach ($files as $file) {
    if (is_file($file)) {
        $filename = basename($file);

        // Exclude utility files
        if (in_array($filename, $excludeFiles))
            continue;
        if (strpos($filename, 'generate_') === 0)
            continue;
        if (strpos($filename, 'test_') === 0)
            continue;
        if (strpos($filename, 'add_') === 0)
            continue;
        if (strpos($filename, 'remove_') === 0)
            continue;
        if ($filename == 'index.php')
            continue;

        $slug = str_replace('.php', '', $filename);
        // Replace spaces with hyphens just in case
        $slug = str_replace(' ', '-', $slug);
        // Handle encoded apostrophe if needed, although simple rawurlencode is better
        // Wait, URLs in previous sitemap were like: https://spineandbrainindia.com/alzheimer's-disease
        // So I'll keep them raw or only encode spaces
        $slug = rawurlencode($slug);
        // some characters like single quotes get encoded by rawurlencode but they weren't in the original.
        // So I will just replace URL unsafe characters if needed, or leave it. Actually rawurlencode percent-encodes apostrophes, but they are valid in URLs technically. Let's just str_replace(' ', '%20', $slug) instead, or nothing since our slugs are already hyphenated?
        $slug = str_replace('.php', '', $filename);
        $slug = str_replace(' ', '%20', $slug);

        // Escape for XML
        $loc = htmlspecialchars($baseUrl . $slug, ENT_XML1, 'UTF-8');

        $xml .= "<url>\n<loc>{$loc}</loc>\n<lastmod>{$date}</lastmod>\n<priority>0.80</priority>\n</url>\n";
    }
}

$xml .= '</urlset>';
file_put_contents('sitemap.xml', $xml);
echo "Sitemap generated successfully.";
?>