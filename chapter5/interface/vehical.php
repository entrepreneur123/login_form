
<?php
class Vehicle
{
    public $make;
    public $model;
    public $color;
    protected $noOfWheels;
    private $engineNumber;
    public static $counter = 0;

    function __construct($make = 'DefaultMake', $model = 'DefaultModel',
  $color = 'DefaultColor', $wheels = 4, $engineNo = 'XXXXXXXX')
  {
      $this->make = $make;
      $this->model = $model;
      $this->color = $color;
      $this->noOfWheels = $wheels;
      $this->engineNumber = $engineNo;
      self::$counter++;
  }


?>