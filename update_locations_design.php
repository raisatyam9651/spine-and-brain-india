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

$links_html = '<section class="locations-area pt-50 pb-50" style="background-color: #0f172a; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4" style="border-bottom: 1px solid #1e293b; padding-bottom: 15px; flex-wrap: wrap; gap: 15px;">
            <h3 class="mb-0 text-white" style="font-size: 20px; font-weight: 600; display: flex; align-items: center; gap: 10px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                Serving Patients Across India
            </h3>
            <button id="toggleLocations" style="background: transparent; border: 1px solid #4a5568; color: #e2e8f0; padding: 6px 16px; border-radius: 20px; font-size: 14px; cursor: pointer; display: flex; align-items: center; gap: 8px; transition: background 0.2s;" onmouseover="this.style.background=\'#1e293b\'" onmouseout="this.style.background=\'transparent\'">
                <span id="toggleText">Hide Locations</span>
                <svg id="toggleIcon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"></polyline></svg>
            </button>
        </div>
        <div id="locationsGrid" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 15px 20px;">';

foreach ($states as $state) {
    $fileName = 'best-neurosurgeon-in-' . strtolower(str_replace(' ', '-', $state)) . '.php';
    $links_html .= '
            <a href="' . $fileName . '" style="color: #94a3b8; text-decoration: none; font-size: 14px; display: flex; align-items: flex-start; gap: 8px; transition: color 0.2s;" onmouseover="this.style.color=\'#60a5fa\'" onmouseout="this.style.color=\'#94a3b8\'">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 2px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                Best Neurosurgeon in ' . $state . '
            </a>';
}

$links_html .= '
        </div>
    </div>
</section>
<script>
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