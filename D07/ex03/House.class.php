<?php
abstract class House {
	abstract public function getHouseName();
	abstract public function getHouseMotto();
	abstract public function getHouseSeat();
	public function introduce() {
		print("House " . $this->getHouseName());
		print(" of " . $this->getHouseSeat());
		print(' : "' . $this->getHouseMotto() . '"' . PHP_EOL);
	}
}
?>
