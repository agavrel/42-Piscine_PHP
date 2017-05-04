#!/usr/bin/php
<?php
date_default_timezone_set(UTC);
ini_set('display_errors', 1);
include('House.class.php');

class DrHouse extends House {
	public function diagnose() {
		print("It's not lupus !" . PHP_EOL);
	}
}

$house = new DrHouse();
$house->introduce();

?>

