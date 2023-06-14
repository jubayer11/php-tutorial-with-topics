<?php
	class Car{
		public $name;
	}

	class A{
		public $name;
	}
	
	$carObj1 = new Car();
	$carObj1->name = "Toyota";
	$objA = new A();
	$objA->name= "Toyota";
	var_dump($carObj1 == $objA);
?>


