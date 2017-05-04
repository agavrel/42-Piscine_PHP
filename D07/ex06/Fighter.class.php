<?php
abstract class Fighter {
	private $_name;
	abstract public function fight( $target );
	public function getName() {
		return ($this->name);
	}
	public function __construct( $name ) {
		$this->name = $name;
	}
	public function __toString() {
		print ($this->getName());
	}
}
?>
