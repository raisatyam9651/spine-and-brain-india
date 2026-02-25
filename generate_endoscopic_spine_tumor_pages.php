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
    "Uttar Pradesh" => ["Lucknow", "Kanpur", "Ghaziabad", "Agra", "Varanasi", "Meerut", "Prayagraj", "Bareilly", "Aligarh", "Moradabad", "Noida", "Gorakhpur"],
    "Ladakh" => ["Leh", "Kargil"],
    "Puducherry" => ["Pondicherry", "Auroville"],
];

$states = array_keys($state_districts);

$india_template = file_get_contents('endoscopic-spine-tumor-surgery-in-india.php');

// Fix typo found in original file CTA section
$india_template = str_replace(
    ['Spinal Stenosis Surgery in India today', 'Spine Tumor Surgery in India today'],
    ['Endoscopic Spine Tumor Surgery in India today', 'Endoscopic Spine Tumor Surgery in India today'],
    $india_template
);
$india_template = str_replace(
    ['Spine Tumor Surgery in India </h3>'],
    ['Endoscopic Spine Tumor Surgery in India </h3>'],
    $india_template
);

// Build the state grid for India page
$india_grid = '<section class="locations-area pt-50 pb-50" style="background-color: #0f172a; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif;">
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
    if ($state == "Chandigarh" || $state == "Hyderabad")
        continue;
    $state_slug = strtolower(str_replace(' ', '-', $state));
    $india_grid .= '
            <a href="endoscopic-spine-tumor-surgery-in-' . $state_slug . '.php" style="color: #94a3b8; text-decoration: none; font-size: 14px; display: flex; align-items: flex-start; gap: 8px; transition: color 0.2s;" onmouseover="this.style.color=\'#60a5fa\'" onmouseout="this.style.color=\'#94a3b8\'">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 2px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                Endoscopic Spine Tumor Surgery in ' . $state . '
            </a>';
}

$india_grid .= '
        </div>
    </div>
</section>
<script>
    document.getElementById("toggleLocations")?.addEventListener("click", function() {
        var grid = document.getElementById("locationsGrid");
        var text = document.getElementById("toggleText");
        var icon = document.getElementById("toggleIcon");
        if (grid.style.display === "none") {
            grid.style.display = "grid";
            text.textContent = "Hide Locations";
            icon.innerHTML = "<polyline points=\'6 9 12 15 18 9\'></polyline>";
        } else {
            grid.style.display = "none";
            text.textContent = "Show Locations";
            icon.innerHTML = "<polyline points=\'6 15 12 9 18 15\'></polyline>";
        }
    });
</script>
';

// Update India page
if (strpos($india_template, 'Serving Patients Across India') === false) {
    $new_india_content = str_replace("<?php include 'footer.php';?>", $india_grid . "\n<?php include 'footer.php';?>", $india_template);
    file_put_contents('endoscopic-spine-tumor-surgery-in-india.php', $new_india_content);
    $india_template = $new_india_content;
    echo "Updated endoscopic-spine-tumor-surgery-in-india.php with state grid\n";
} else {
    // If it already exists, make sure to save the typo fix!
    file_put_contents('endoscopic-spine-tumor-surgery-in-india.php', $india_template);
}

foreach ($state_districts as $state => $districts) {
    if ($state == "Hyderabad" || $state == "Chandigarh")
        continue;
    $state_slug = strtolower(str_replace(' ', '-', $state));
    $state_file = 'endoscopic-spine-tumor-surgery-in-' . $state_slug . '.php';

    // Base state content
    $state_content_base = $india_template;

    // Remove the India grid from the base state template because it's a state page
    $pattern = '/<section\s+class="locations-area[^>]*>(?:(?!<section)[\s\S])*?Serving Patients Across India[\s\S]*?<\/section>\s*(?:<script>\s*document\.getElementById\("toggleLocations"\)[\s\S]*?<\/script>\s*)?/i';
    $state_content_base = preg_replace($pattern, '', $state_content_base);

    // Create the district grid html to append before footer
    $district_grid_html = '<section class="locations-area pt-50 pb-50" style="background-color: #0f172a; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif;">
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
        $district_grid_html .= '
            <a href="endoscopic-spine-tumor-surgery-in-' . $district_slug . '.php" style="color: #94a3b8; text-decoration: none; font-size: 14px; display: flex; align-items: flex-start; gap: 8px; transition: color 0.2s;" onmouseover="this.style.color=\'#60a5fa\'" onmouseout="this.style.color=\'#94a3b8\'">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 2px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                Endoscopic Spine Tumor Surgery in ' . $district . '
            </a>';
    }

    $district_grid_html .= '
        </div>
    </div>
</section>';

    // Generate State Page
    $state_content = str_replace(
        ['in India', 'in india', 'In India', '-in-India', 'endoscopic-spine-tumor-surgery-in-india.php', 'endoscopic-spine-tumor-surgery-in-india"', 'endoscopic-removal-of-spinal-tumors-treatment-in-india"'],
        ["in $state", "in $state_slug", "In $state", "-in-$state_slug", "endoscopic-spine-tumor-surgery-in-$state_slug.php", "endoscopic-spine-tumor-surgery-in-$state_slug\"", "endoscopic-spine-tumor-surgery-in-$state_slug\""],
        $state_content_base
    );
    // Append district grid before footer
    $state_content = str_replace("<?php include 'footer.php';?>", $district_grid_html . "\n<?php include 'footer.php';?>", $state_content);
    file_put_contents($state_file, $state_content);

    // Generate District Pages
    foreach ($districts as $district) {
        $district_slug = strtolower(str_replace(' ', '-', $district));
        $district_file = 'endoscopic-spine-tumor-surgery-in-' . $district_slug . '.php';

        $district_content = str_replace(
            ['in India', 'in india', 'In India', '-in-India', 'endoscopic-spine-tumor-surgery-in-india.php', 'endoscopic-spine-tumor-surgery-in-india"', 'endoscopic-removal-of-spinal-tumors-treatment-in-india"'],
            ["in $district", "in $district_slug", "In $district", "-in-$district_slug", "endoscopic-spine-tumor-surgery-in-$district_slug.php", "endoscopic-spine-tumor-surgery-in-$district_slug\"", "endoscopic-spine-tumor-surgery-in-$district_slug\""],
            $state_content_base
        );
        $district_content = str_replace("<?php include 'footer.php';?>", $district_grid_html . "\n<?php include 'footer.php';?>", $district_content);
        file_put_contents($district_file, $district_content);
    }
}
echo "State and District pages created safely.\n";
?>