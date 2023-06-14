<?php
class Car{
	public $name;
}


$carObj1 = new Car();
$carObj1->name = "Toyota";

$carObj2 = clone $carObj1;

var_dump($carObj1 === $carObj2);


 


?>


