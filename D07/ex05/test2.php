#!/usr/bin/php
<?php
date_default_timezone_set(UTC);
ini_set('display_errors', 1);
include_once('IFighter.class.php');
include_once('NightsWatch.class.php');

class Varys implements IFighter {
	public function pretendToFight() {
		print("* finds someone to fight for him *" . PHP_EOL);
	}
}

$varys = new Varys();
$nw = new NightsWatch();

$nw->recruit($varys);

$nw->fight();

?>

