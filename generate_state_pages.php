<?php
$states = [
    "Andhra Pradesh", "Arunachal Pradesh", "Assam", "Bihar", "Chhattisgarh", 
    "Goa", "Gujarat", "Haryana", "Himachal Pradesh", "Jharkhand", 
    "Karnataka", "Kerala", "Madhya Pradesh", "Maharashtra", "Manipur", 
    "Meghalaya", "Mizoram", "Nagaland", "Odisha", "Punjab", 
    "Rajasthan", "Sikkim", "Tamil Nadu", "Telangana", "Tripura", 
    "Uttarakhand", "West Bengal", "Delhi", "Jammu and Kashmir", "Chandigarh"
];

$template = file_get_contents('best-neurosurgeon-in-uttar-pradesh.php');

$links_html = '<section class="locations-area pb-70">
    <div class="container">
        <div class="section-title-two mt-5 text-center">
            <h2 class="mb-0">Our Other Locations</h2>
        </div>
        <div class="row mt-5" style="display: flex; flex-wrap: wrap; gap: 10px; justify-content: center;">';

foreach ($states as $state) {
    if (strtolower($state) == 'uttar pradesh') continue;

    $fileName = 'best-neurosurgeon-in-' . strtolower(str_replace(' ', '-', $state)) . '.php';
    
    // Create new content based on UP template
    $newContent = str_replace(['Uttar Pradesh', 'uttar pradesh', 'UP', 'geo.region" content="IN-UP"'], 
                              [$state, strtolower($state), $state, 'geo.region" content="IN"'], 
                              $template);
                              
    file_put_contents($fileName, $newContent);
    echo "Created: $fileName\n";
    
    $links_html .= '
            <div style="flex: 1 1 20%; text-align: center; margin-bottom: 15px;">
                <a href="'.$fileName.'" style="color: #007bff; font-weight: bold; text-decoration: none;">Best Neurosurgeon in '.$state.'</a>
            </div>';
}

$links_html .= '
            <div style="flex: 1 1 20%; text-align: center; margin-bottom: 15px;">
                <a href="best-neurosurgeon-in-uttar-pradesh.php" style="color: #007bff; font-weight: bold; text-decoration: none;">Best Neurosurgeon in Uttar Pradesh</a>
            </div>
        </div>
    </div>
</section>';

file_put_contents('locations_section.html', $links_html);
echo "Finished generating files and links.";
?>
