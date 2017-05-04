<?php
include_once('Fighter.class.php');
class UnholyFactory {
	private $_absorbed;
	public function absorb( $fighter ) {
		if ( $fighter instanceof Fighter)
		{
			if (!isset($this->absorbed) || !in_array($fighter, $this->absorbed))
			{
				$this->absorbed[] = $fighter;
				print( "(Factory absorbed a fighter of type " . $fighter->getName() . ")" . PHP_EOL);
			}
			else {
				print( "(Factory already absorbed a fighter of type " . $fighter->getName() . ")" . PHP_EOL);
			}
		}
		else
			print("(Factory can't absorb this, it's not a fighter)" . PHP_EOL);
	}
	public function fabricate( $fighter_name ) {
		foreach ($this->absorbed as $fighter) {
			if ($fighter->getName() === $fighter_name) {
				print( "(Factory fabricates a fighter of type " . $fighter->getName() . ")" .  PHP_EOL);
				return ($fighter);
			}
		}
		print( "(Factory hasn't absorbed any fighter of type " . $fighter_name . ")" .  PHP_EOL);
		return (NULL);
	}
}
?>
