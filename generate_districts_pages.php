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

foreach ($state_districts as $state => $districts) {
    if ($state == "Hyderabad" || $state == "Chandigarh")
        continue;

    $state_slug = strtolower(str_replace(' ', '-', $state));
    $state_file = 'best-neurosurgeon-in-' . $state_slug . '.php';

    if (!file_exists($state_file)) {
        echo "Missing State file: $state_file\n";
        continue;
    }

    $state_content = file_get_contents($state_file);

    // Create the districts grid
    $grid_html = '<section class="locations-area pt-50 pb-50" style="background-color: #0f172a; font-family: -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif;">
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
        $grid_html .= '
            <a href="best-neurosurgeon-in-' . $district_slug . '.php" style="color: #94a3b8; text-decoration: none; font-size: 14px; display: flex; align-items: flex-start; gap: 8px; transition: color 0.2s;" onmouseover="this.style.color=\'#60a5fa\'" onmouseout="this.style.color=\'#94a3b8\'">
                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#2563eb" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; margin-top: 2px;"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                Best Neurosurgeon in ' . $district . '
            </a>';
    }

    $grid_html .= '
        </div>
    </div>
</section>';

    // Remove any existing district grid from state_content if script was run before
    $existing_grid_pattern = '/<section class="locations-area pt-50 pb-50".*?Leading Districts in .*?<\/section>/is';
    $clean_state_content = preg_replace($existing_grid_pattern, '', $state_content);

    // Extract State Block to protect it from text string replacements
    $state_block = '';
    $pattern = '/(<section class="locations-area pt-50 pb-50".*?Serving Patients Across India.*?<\/section>)/is';
    if (preg_match($pattern, $clean_state_content, $matches)) {
        $state_block = $matches[1];
        $clean_state_content = preg_replace($pattern, '%%STATE_BLOCK%%', $clean_state_content);
    } else {
        echo "Failed to find State block in $state_file\n";
        // Fallback: Inject before footer
        $clean_state_content = preg_replace('/<\?php\s+include\s+[\'"]footer\.php[\'"];\s*\?>/is', "%%STATE_BLOCK%%\n<?php include 'footer.php'; ?>", $clean_state_content);
    }

    // 1. Generate district pages
    foreach ($districts as $district) {
        if ($district == $state)
            continue; // safety check
        $district_slug = strtolower(str_replace(' ', '-', $district));
        $district_file = 'best-neurosurgeon-in-' . $district_slug . '.php';

        $district_content = $clean_state_content;

        // Update URL/canonical
        $district_content = str_replace('href="https://spineandbrainindia.com/' . $state_file . '"', 'href="https://spineandbrainindia.com/' . $district_file . '"', $district_content);
        $district_content = str_replace('content="https://spineandbrainindia.com/' . $state_file . '"', 'content="https://spineandbrainindia.com/' . $district_file . '"', $district_content);

        // Replace State with District
        $district_content = str_replace([$state, strtoupper($state), strtolower($state)], [$district, strtoupper($district), strtolower($district)], $district_content);

        // Inject grids back - district grid FIRST, then the state block
        $district_content = str_replace('%%STATE_BLOCK%%', $grid_html . "\n" . $state_block, $district_content);

        file_put_contents($district_file, $district_content);
        echo "Created District Page: $district_file\n";
    }

    // 2. Inject the district grid into the State page and save
    $final_state_content = str_replace('%%STATE_BLOCK%%', $grid_html . "\n" . $state_block, $clean_state_content);
    file_put_contents($state_file, $final_state_content);
    echo "Updated State Page: $state_file\n";
}
echo "Done.";
?>