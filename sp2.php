<?php

class Car {
	public $color;
	public $model;

	public function__construct($color,$model){
	$this->color = $color;
	$this->model = $model;
}

public function msg(){
return "My car is a " . $this->color . " " . $this->model . "!";
  }
 }

$myCar = new Car("black", "Volvo");
echo $myCar -> msg();

echo "<br>";

$myCar = new Car("red", "Toyoto");
echo $myCar-> msg();

?>