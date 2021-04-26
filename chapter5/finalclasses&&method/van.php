<?php
require_once 'Car.php';
class van extends Car
{
	public function start()
	{
		$this->engineStatus = True;
		
	}
}



?>