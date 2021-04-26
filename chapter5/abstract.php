<?php
abstract class Abstractvehical
{
	public $make;
	public $model;
	public $color;
	protected $noOfWheels;
	private $engineNumber;
	public static $counter = 0;
	protected $engineStatus = false;
	function_construct($make = 'DefaultMake',
	$model = 'DefaultModel',
	$color = 'DefaultColor',$wheel = 4,$engineNo = 'XXXXXXX')
	{
		$this->make = $make;
		$this->model = $model;
		$this->color = $color;
		$this->noOfWheels = $wheels;
		$this->engineNumber = $engineNo;
		self::$counter++;


	}
	function getMake()
	{
		return $this->make;
	}
	function getmodel()
	{
		return $this->model;

	}
	function getcolor(){
		return $this->color;
	}
	function getNumberOfWheels()
	{
		return $this->noOfWheels;
	}
	function getEngineNumber()
	{
		return $this->engineNumber;
	}
	function setMake($make)
	{
		$this->make =$make;
	}
	function setModel($model)
	{
		$this->model = $model;
	}
	function setColor($color)
	{
		$this->color = $color;
	}
	function setNumberOfWheels($wheels)
	{
		$this->noOfWheels = $wheels;
	}
	 function setEngineNumber($engineNo)
     {
           $this->engineNumber = $engineNo;
     }
     abstract function start();
     function stop()
     {
           $this->engineStatus = false;
     }
     function getEngineStatus()
     {
          return $this->engineStatus;
     }
}
}

?>