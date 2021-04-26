<?php

require_once 'AbstractVehicle.php';
require_once 'DriveInterface.php';

 final class Car extends AbstractVehicle implements DriveInterface
{
	public $doors = 4;
	public $passengerCapacity = 5;
	public $steeringWheel = true;
	public $transmission = 'manual';

	private $hasKeyinIgnition = true;

	final public function star()
	{
		if($this->hasKeyinIgnition){
			$this->engineStatus = true;
		}
	}
	public function changeSpeed($speed){
		echo "the car has been acelerated to " . $speed ."kph." .PHP_EOL;
	}
	public function changeGear($gear)
	{
		echo "shifted to gear number" . $gear ."." .PHP_EOL;

	}
}





?>