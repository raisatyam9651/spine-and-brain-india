<?php
$f = "best-neurosurgeon-in-bihar.php";
$c = file_get_contents($f);
echo strpos($c, '<section class="locations-area pb-70">') === false ? 'No loc' : 'Has loc';
echo "\n";
echo strpos($c, "<?php include 'footer.php'; ?>") === false ? 'No foot' : 'Has foot';
