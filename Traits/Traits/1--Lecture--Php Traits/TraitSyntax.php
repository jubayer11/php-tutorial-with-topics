<?php
	trait Chargeable {
		public function charge() {
			echo "I m charging.........</br>";
		}
	}
	class Toy {

	}
	class ElectricCarToy extends Toy{
		use Chargeable;
	}
	$o = new ElectricCarToy();
	$o->charge();



?>

