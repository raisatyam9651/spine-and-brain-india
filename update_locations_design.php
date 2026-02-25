<?php
$states = [
    "Andhra Pradesh",
    "Arunachal Pradesh",
    "Assam",
    "Bihar",
    "Chhattisgarh",
    "Goa",
    "Gujarat",
    "Haryana",
    "Himachal Pradesh",
    "Jharkhand",
    "Karnataka",
    "Kerala",
    "Madhya Pradesh",
    "Maharashtra",
    "Manipur",
    "Meghalaya",
    "Mizoram",
    "Nagaland",
    "Odisha",
    "Punjab",
    "Rajasthan",
    "Sikkim",
    "Tamil Nadu",
    "Telangana",
    "Tripura",
    "Uttarakhand",
    "West Bengal",
    "Delhi",
    "Jammu and Kashmir",
    "Chandigarh",
    "Uttar Pradesh",
    "Ladakh",
    "Puducherry",
    "Hyderabad"
];

$links_html = '<script>
document.getElementById(\'toggleLocations\').addEventListener(\'click\', function() {
    var grid = document.getElementById(\'locationsGrid\');
    var icon = document.getElementById(\'toggleIcon\');
    var text = document.getElementById(\'toggleText\');
    if (grid.style.display === \'none\') {
        grid.style.display = \'grid\';
        text.innerText = \'Hide Locations\';
        icon.innerHTML = \'<polyline points="6 9 12 15 18 9"></polyline>\';
    } else {
        grid.style.display = \'none\';
        text.innerText = \'Show Locations\';
        icon.innerHTML = \'<polyline points="6 15 12 9 18 15"></polyline>\';
    }
});
</script>';

$files = glob("best-neurosurgeon-in-*.php");
$files[] = "index.php";

foreach ($files as $file) {
    $content = file_get_contents($file);

    // Attempt to replace existing locations block
    $pattern = '/<section class="locations-area pb-70">.*?<\/section>\s*(?=<\?php\s+include\s+\'footer\.php\')/is';

    // Also try checking for pt-50 pb-50 replacing logic if script runs twice
    $pattern_new = '/<section class="locations-area pt-50 pb-50" style="background-color: #0f172a;.*?<\/script>\s*(?=<\?php\s+include\s+\'footer\.php\')/is';

    if (preg_match($pattern_new, $content)) {
        $content = preg_replace($pattern_new, $links_html . "\n      ", $content);
        file_put_contents($file, $content);
        echo "Updated (New format) $file\n";
    } elseif (preg_match($pattern, $content)) {
        $content = preg_replace($pattern, $links_html . "\n      ", $content);
        file_put_contents($file, $content);
        echo "Updated (Old format) $file\n";
    } else {
        // Just inject before footer
        $pattern_insert = '/(<\?php\s+include\s+\'footer\.php\')/i';
        $content = preg_replace($pattern_insert, $links_html . "\n      $1", $content);
        file_put_contents($file, $content);
        echo "Injected $file\n";
    }
}

echo "Done.";
?>