<?php
$state_districts = [
    "Andhra Pradesh" => ["Visakhapatnam", "Vijayawada", "Guntur", "Nellore", "Kurnool", "Rajahmundry", "Tirupati", "Kadapa", "Kakinada", "Anantapur"],
    "Arunachal Pradesh" => ["Itanagar", "Tawang", "Pasighat", "Ziro", "Bomdila", "Tezu", "Roing"],
    "Assam" => ["Guwahati", "Silchar", "Dibrugarh", "Jorhat", "Nagaon", "Tinsukia", "Tezpur"],
    "Bihar" => ["Patna", "Gaya", "Bhagalpur", "Muzaffarpur", "Purnia", "Darbhanga", "Ara", "Begusarai", "Katihar", "Chhapra"],
    "Chhattisgarh" => ["Raipur", "Bhilai", "Bilaspur", "Korba", "Rajnandgaon", "Raigarh", "Jagdalpur", "Ambikapur"],
    "Goa" => ["Panaji", "Vasco da Gama", "Margao", "Mapusa", "Ponda"],
    "Gujarat" => ["Ahmedabad", "Surat", "Vadodara", "Rajkot", "Bhavnagar", "Jamnagar", "Junagadh", "Gandhinagar", "Anand", "Navsari"],
    "Haryana" => ["Gurugram", "Faridabad", "Panipat", "Ambala", "Rohtak", "Karnal", "Hisar", "Sonipat", "Panchkula", "Sirsa"],
    "Himachal Pradesh" => ["Shimla", "Manali", "Dharamshala", "Mandi", "Solan", "Kullu", "Chamba", "Palampur"],
    "Jharkhand" => ["Ranchi", "Jamshedpur", "Dhanbad", "Bokaro", "Deoghar", "Hazaribagh", "Giridih", "Ramgarh"],
    "Karnataka" => ["Bengaluru", "Mysuru", "Mangaluru", "Hubballi", "Belagavi", "Kalaburagi", "Davanagere", "Ballari", "Vijayapura", "Shivamogga"],
    "Kerala" => ["Thiruvananthapuram", "Kochi", "Kozhikode", "Kollam", "Thrissur", "Kannur", "Alappuzha", "Kottayam", "Palakkad", "Ernakulam"],
    "Madhya Pradesh" => ["Indore", "Bhopal", "Jabalpur", "Gwalior", "Ujjain", "Sagar", "Rewa", "Satna", "Ratlam", "Singrauli"],
    "Maharashtra" => ["Mumbai", "Pune", "Nagpur", "Thane", "Nashik", "Kalyan", "Aurangabad", "Navi Mumbai", "Solapur", "Mira Bhayandar", "Amravati"],
    "Manipur" => ["Imphal", "Churachandpur", "Ukhrul", "Thoubal", "Kakching"],
    "Meghalaya" => ["Shillong", "Tura", "Nongstoin", "Jowai", "Baghmara"],
    "Mizoram" => ["Aizawl", "Lunglei", "Champhai", "Kolasib", "Serchhip"],
    "Nagaland" => ["Dimapur", "Kohima", "Mokokchung", "Tuensang", "Wokha"],
    "Odisha" => ["Bhubaneswar", "Cuttack", "Rourkela", "Brahmapur", "Sambalpur", "Puri", "Balasore", "Bhadrak", "Baripada"],
    "Punjab" => ["Ludhiana", "Amritsar", "Jalandhar", "Patiala", "Bathinda", "Mohali", "Pathankot", "Moga", "Abohar", "Khanna"],
    "Rajasthan" => ["Jaipur", "Jodhpur", "Kota", "Bikaner", "Ajmer", "Udaipur", "Bhilwara", "Alwar", "Sikar", "Pali"],
    "Sikkim" => ["Gangtok", "Namchi", "Gyalshing", "Mangan"],
    "Tamil Nadu" => ["Chennai", "Coimbatore", "Madurai", "Tiruchirappalli", "Salem", "Tirunelveli", "Erode", "Vellore", "Thoothukudi", "Dindigul"],
    "Telangana" => ["Hyderabad", "Warangal", "Nizamabad", "Karimnagar", "Khammam", "Ramagundam", "Mahabubnagar", "Nalgonda", "Adilabad"],
    "Tripura" => ["Agartala", "Udaipur", "Dharmanagar", "Kailashahar", "Belonia"],
    "Uttarakhand" => ["Dehradun", "Haridwar", "Roorkee", "Haldwani", "Rudrapur", "Rishikesh", "Kashipur"],
    "West Bengal" => ["Kolkata", "Asansol", "Siliguri", "Durgapur", "Howrah", "Darjeeling", "Malda", "Kharagpur", "Haldia", "Burdwan"],
    "Delhi" => ["New Delhi", "South Delhi", "North Delhi", "East Delhi", "West Delhi", "Dwarka", "Rohini", "Vasant Kunj", "Janakpuri"],
    "Jammu and Kashmir" => ["Srinagar", "Jammu", "Anantnag", "Baramulla", "Kathua", "Udhampur", "Sopore"],
    "Chandigarh" => ["Chandigarh"],
    "Uttar Pradesh" => ["Lucknow", "Kanpur", "Ghaziabad", "Agra", "Varanasi", "Meerut", "Prayagraj", "Bareilly", "Aligarh", "Moradabad", "Noida", "Gorakhpur"]
];

$base_file = __DIR__ . '/blood-clot-brain-treatment-in-India.php';
$content = file_get_contents($base_file);

// Clean up existing state block / locations area if re-running
$content = preg_replace('/<section class="locations-area.*?<\/section>/is', '', $content);
$content = str_replace('%%STATE_BLOCK%%', '', $content);

// Create the states grid (for India page)
$states_grid_html = '<section class="locations-area pt-50 pb-50" style="background-color: #0f172a; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif;">
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

foreach ($state_districts as $state => $districts) {
    if ($state == "Hyderabad" || $state == "Chandigarh") continue;
    $state_slug = strtolower(str_replace(' ', '-', $state));
    $states_grid_html .= '
            <a href="blood-clot-brain-treatment-in-' . $state_slug . '.php" style="color: #94a3b8; text-decoration: none; font-size: 14px; display: flex; align-items: flex-start; gap: 8px; transition: color 0.2s;" onmouseover="this.style.color=\'#60a5fa\'" onmouseout="this.style.color=\'#94a3b8\'">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 2px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                Blood Clot Brain Treatment in ' . $state . '
            </a>';
}

$states_grid_html .= '
        </div>
    </div>
</section>
<script>
    document.getElementById("toggleLocations")?.addEventListener("click", function() {
        const grid = document.getElementById("locationsGrid");
        const icon = document.getElementById("toggleIcon");
        const text = document.getElementById("toggleText");
        
        if (grid.style.display === "none") {
            grid.style.display = "grid";
            text.textContent = "Hide Locations";
            icon.innerHTML = \'<polyline points="6 9 12 15 18 9"></polyline>\';
        } else {
            grid.style.display = "none";
            text.textContent = "Show Locations";
            icon.innerHTML = \'<polyline points="6 15 12 9 18 15"></polyline>\';
        }
    });
</script>
';

// Inject %%STATE_BLOCK%% before <!--Call to Action-->
$content = str_replace('<!--Call to Action-->', "%%STATE_BLOCK%%\n<!--Call to Action-->", $content);

// In case the <!--Call to Action--> comment was missing somehow, we fallback
if (strpos($content, '%%STATE_BLOCK%%') === false) {
    $content = str_replace('<section>', "%%STATE_BLOCK%%\n<section>", strrev(preg_replace('/<section>/', strrev("%%STATE_BLOCK%%\n<section>"), strrev($content), 1))); // Last <section>
}

// 1. Save India Page with States Grid
$india_content = str_replace('%%STATE_BLOCK%%', $states_grid_html, $content);
// India page has 'India', so it's fine.
file_put_contents($base_file, $india_content);
echo "Updated Base / India Page.\n";

// Generate State & District Pages
$base_state_content = str_replace('blood-clot-brain-treatment-in-India.php', 'blood-clot-brain-treatment-in-India.php', $content); // No-op, just to ensure consistency

foreach ($state_districts as $state => $districts) {
    if ($state == "Hyderabad" || $state == "Chandigarh") continue;
    
    $state_slug = strtolower(str_replace(' ', '-', $state));
    $state_file_path = __DIR__ . '/blood-clot-brain-treatment-in-' . $state_slug . '.php';
    
    // Replace "India" with State name
    $state_content = $base_state_content;
    
    // Exact match replacements (mind the case)
    $state_content = str_replace('in India', 'in ' . $state, $state_content);
    $state_content = str_replace('in-India', 'in-' . $state_slug, $state_content);
    // Address locs in schema
    $state_content = str_replace('"India"', '"'.$state.'"', $state_content);
    $state_content = str_replace('content="India"', 'content="'.$state.'"', $state_content);
    
    // Special schema replacement if we missed something
    $state_content = preg_replace('/Spine and Brain India - India/is', 'Spine and Brain India - ' . $state, $state_content);
    
    // Build districts grid for this state
    $districts_grid_html = '<section class="locations-area pt-50 pb-50" style="background-color: #0f172a; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif;">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4" style="border-bottom: 1px solid #1e293b; padding-bottom: 15px; flex-wrap: wrap; gap: 15px;">
            <h3 class="mb-0 text-white" style="font-size: 20px; font-weight: 600; display: flex; align-items: center; gap: 10px;">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#3b82f6" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                Leading Districts in ' . $state . '
            </h3>
        </div>
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); gap: 15px 20px;">';

    foreach ($districts as $district) {
        $district_slug = strtolower(str_replace(' ', '-', $district));
        $districts_grid_html .= '
            <a href="blood-clot-brain-treatment-in-' . $district_slug . '.php" style="color: #94a3b8; text-decoration: none; font-size: 14px; display: flex; align-items: flex-start; gap: 8px; transition: color 0.2s;" onmouseover="this.style.color=\'#60a5fa\'" onmouseout="this.style.color=\'#94a3b8\'">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 2px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                Blood Clot Brain Treatment in ' . $district . '
            </a>';
    }
    $districts_grid_html .= '
        </div>
    </div>
</section>';

    // Inject district grid AND state generic block
    $state_final = str_replace('%%STATE_BLOCK%%', $districts_grid_html . "\n" . $states_grid_html, $state_content);
    file_put_contents($state_file_path, $state_final);
    echo "Created State: $state\n";
    
    // Generate District pages
    foreach ($districts as $district) {
        $district_slug = strtolower(str_replace(' ', '-', $district));
        $district_file_path = __DIR__ . '/blood-clot-brain-treatment-in-' . $district_slug . '.php';
        
        $district_content = $state_content;
        
        // Replace State with District
        $district_content = str_replace('in ' . $state, 'in ' . $district, $district_content);
        $district_content = str_replace('in-' . $state_slug, 'in-' . $district_slug, $district_content);
        $district_content = str_replace('"'.$state.'"', '"'.$district.'"', $district_content);
        $district_content = str_replace('content="'.$state.'"', 'content="'.$district.'"', $district_content);
        
        $district_content = preg_replace('/Spine and Brain India - ' . preg_quote($state, '/') . '/is', 'Spine and Brain India - ' . $district, $district_content);
        
        // Inject ONLY state generic block (districts don't have sub-districts)
        $district_final = str_replace('%%STATE_BLOCK%%', $states_grid_html, $district_content);
        file_put_contents($district_file_path, $district_final);
    }
}
echo "Finished all generations.\n";
?>
