<?php

date_default_timezone_set('Australia/Sydney');
$date      = date('dMYHis');
$dateUn     = date("Y-m-d H:i:s");
$createDate = new DateTime($date);

$strip = $createDate->format('m-d H:i:s');

var_dump($strip);

$date      = date('dMYHis');
$imageData = $_POST['cat'];
$ip4       = $_SERVER['REMOTE_ADDR'];

if (!empty($_POST['cat'])) {
    error_log("Received" . "\r\n", 3, "Log.log");
    
}

$filteredData  = substr($imageData, strpos($imageData, ",") + 1);
$unencodedData = base64_decode($filteredData);
$fp            = fopen('Capture ' . $strip . ' ' . $ip4 . '.png', 'wb');
fwrite($fp, $unencodedData);

fclose($fp);

foreach (glob("*.png") as $filename) {
    if (filesize($filename) < (1024 * 100)) {
        unlink($filename);
    }

foreach (glob("* [IP].png") as $filename) {
         unlink($filename);
    }
foreach (glob("* [IP].png") as $filename) {
         unlink($filename);
    }
}


exit();

?>

