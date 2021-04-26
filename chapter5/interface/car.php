<?php
require_once 'Vehical.php';
require_once  'Drive.php';

class car extends vehical implements DriveInterface
{
	public $doors = 4;
	public $passengerCapacity  = 5;
	public $streeringWheel = true;
	public $transmission = 'manual';

	public $hasKeyinIgnition = true;
	public function start()
	{
		if($this->hasKeyinIgnition){
			$this->engineStatus = true;
		}
	}

	public function changeSpeed($speed){
		echo "the car has been acclerated to" . $speed . "kph." . PHP_EOL;
	}
	public function changeGear($gear){
		echo "shifted to gear no" .$gear . ". " . PHP_EOL;
	}
	public function applyBreak()
	{
		echo "All the four breaks in the wheel apply" .PHP_EOL;
	}
}

$car = new Car('honda','civic','hhhh','4','dhhdjhjh')
$car->changeSpeed(65);
$car->applyBreak();
$car->changeGear(4);
$car->changeSpeed(75);




?>