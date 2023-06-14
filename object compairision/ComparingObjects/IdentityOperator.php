<?php
class Car{
	public $name;
	public function __construct($name)
	{
		$this->name = $name;
	}
}

$carObj1 = new Car("Toyota");

//$carObj2 = clone $carObj1;
$carObj2 = $carObj1;

var_dump($carObj1 === $carObj2);


?>


