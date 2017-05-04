#!/usr/bin/php
<?php
date_default_timezone_set(UTC);
ini_set('display_errors', 1);
include('Euron.class.php');
$euron = new Euron();
print($euron->familyMotto . PHP_EOL);
?>
