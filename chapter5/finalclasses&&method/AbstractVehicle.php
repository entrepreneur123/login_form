<?php
require_once 'PriceTrait.php';
abstract class AbstractVehicle
{
	use PriceTrait;
	public $make;
	public $model;
	public $color;
	protected $noOfWheels;
	private $engineNumber;
	public static $counter = 0;
	protected $engineStatus = False;
	protected $price;

	private $runtimeAttributes = array();
	function __construct($make = 'DefaultMake', $model = 'DefaultModel',$color = 'DefaultColor',$wheel = 4,$engineNo = 'XXXX')
	{
		$this->make = $make;
		$this->model = $model;
		$this->color = $color;
		$this->noOfWheels = $wheels;
		$this->engineNumber = $engineNO;
		self::$counter++
	}
}



?>