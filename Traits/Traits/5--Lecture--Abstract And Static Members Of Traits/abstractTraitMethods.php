<?php
	trait Chargeable {
		public function charge() {
			echo "I m a Chargeable trait method.........</br>";
		}
		abstract public function sayHello();
	}

	class Toy {}

	class ElectricCarToy extends Toy{
		use Chargeable;
		
		public function sayHello() {
			echo "Hellooooooo.........</br>";
		}
	}
	$o = new ElectricCarToy();
	$o->charge();
	$o->sayHello();


?>

