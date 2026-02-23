<?php
$locations_html = file_get_contents('locations_section.html');

// Add new line characters if necessary
$insert_html = "\n" . $locations_html . "\n\n";

$files = glob("best-neurosurgeon-in-*.php");
$files[] = "index.php";

foreach ($files as $file) {
    $content = file_get_contents($file);
    if (strpos($content, '<section class="locations-area pb-70">') === false) {
        $new_content = str_replace("<?php include 'footer.php'; ?>", $insert_html . "  <?php include 'footer.php'; ?>", $content);
        file_put_contents($file, $new_content);
        echo "Updated $file\n";
    }
}
echo "Done.";
?>
