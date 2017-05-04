<?php
include_once('Lannister.class.php');
class Jaime extends Lannister {
	public function sleepWith($who) {
		if ($who instanceof Cersei)
			print("With pleasure, but only in a tower in Winterfell, then." . PHP_EOL);
		else
            parent::sleepWith($who);
	}
}
?>
<?PHP
