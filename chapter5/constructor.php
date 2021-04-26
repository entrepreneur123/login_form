<?php
class vehical
{
	public $make = 'DefaultMake';
	public $model = 'DefaultModel';
	public $color = 'Defaultcolor';
	public $noOfWheels = 0;
	public $engineNumber = 'XXXXXXXXXX';
	function getMake()
	{
		return $this->make;
	}
	function getModel()
	{
		return $this->model;
	}
	function getColor()
	{
		return $this->color;
	}
	function getNoOfWheels()
	{
		return $this->noOfWheels
	}
	function getEngineNumber()
    {
       return $this->engineNumber;
    }
    function setMake($make)
    {
       $this->make = $make;
    }
    function setModel($model)
    {
      $this->model = $model;
    }
    function setColor($color)
    {
      $this->color = $color;
    }
    function setNoOfWheels($wheels)
    {
     $this->noOfWheels = $wheels;
    }
    function setEngineNumber($engineNo)
    {
    $this->engineNumber = $engineNo;
    }
}
}
public $make;
public $model;
public $color;
public $noOfWheels;
public $engineNumber;

    function __construct($make = 'DefaultMake', $model = 'DefaultModel', 
  $color = 'DefaultColor', $wheels = 4, $engineNo = 'XXXXXXXX')
    {
       $this->make = $make;
       $this->model = $model;
       $this->color = $color;
       $this->noOfWheels = $wheels;
       $this->engineNumber = $engineNo;
    }

    $object = new Vehicle();
$object->setMake('Honda');
$object->setModel('Civic');
$object->setColor('Red');
$object->setNoOfWheels(4);
$object->setEngineNumber('ABC123456');
echo "Make : " . $object->getMake() . PHP_EOL;
echo "Model : " . $object->getModel() . PHP_EOL;
echo "Color : " . $object->getColor() . PHP_EOL;
echo "No. of wheels : " . $object->getNoOfWheels() . PHP_EOL;
echo "Engine no. : " . $object->getEngineNumber() . PHP_EOL;
$vehicle = new Vehicle();
echo "Make: " . $vehicle->getMake() . PHP_EOL;
echo "Model: " . $vehicle->getModel() . PHP_EOL;
echo "Color: " . $vehicle->getColor() . PHP_EOL;
echo "No of wheels: " . $vehicle->getNoOfWheels() . PHP_EOL;
echo "Engine No: " . $vehicle->getEngineNumber() . PHP_EOL;

$vehicle1 = new Vehicle('Honda', 'Civic', 'Red', 4, '23CJ4567');
echo "Make: " . $vehicle1->getMake() . PHP_EOL;
echo "Model: " . $vehicle1->getModel() . PHP_EOL;
echo "Color: " . $vehicle1->getColor() . PHP_EOL;
echo "No of wheels: " . $vehicle1->getNoOfWheels() . PHP_EOL;
echo "Engine No: " . $vehicle1->getEngineNumber() . PHP_EOL;

?>