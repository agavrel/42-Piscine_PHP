<?php
include_once('IFighter.class.php');
class NightsWatch {
	public $fighters;
	public function recruit( $someone ) {
		if ($someone instanceof IFighter)
			$this->fighters[] = $someone;
	}
	public function fight() {
		if (isset($this->fighters))
		{
			foreach ($this->fighters as $fighter) {
				$fighter->fight();
			}
		}
	}
}
?>
