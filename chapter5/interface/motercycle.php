<?php
require_once 'Vehical.php';
require_once 'Drive.php';

class Motercycle extends Vehical implements Drive
{
	public $noOfWheels = 2;
	public $stroke = 4;

	public $hasKey = true;
	public $hasKicked = true;

	public function start()
	{
		if($this->hasKey && $this->hasKicked){
			$this->engineStatus = true;
		}
	} 

	public function changeSpeed($speed){
		echo "the Motercycle has been acclerated to" . $speed . "kph." . PHP_EOL;
	}
	public function changeGear($gear){
		echo "shifted to gear no" .$gear . ". " . PHP_EOL;
	}
	public function applyBreak()
	{
		echo "All the four breaks in the wheel apply" .PHP_EOL;
	}
}


$Motercycle = new Motercycle('honda','civic','hhhh','4','dhhdjhjh')
$Motercycle->changeSpeed(65);
$Motercycle->applyBreak();
$Motercycle->changeGear(4);



?>