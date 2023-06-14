<?php
	trait Charge {
		public function abc() {
			echo "I m a Charge trait method.........</br>";
		}
	}
	trait Able {
		public function xyz() {
			echo "I m a able trait method.........</br>";
		}
	}
	trait Chargeable {
		use Charge, Able;
	}
	class Toy {}

	class ElectricCarToy extends Toy{
		use Chargeable;

	}
	$o = new ElectricCarToy();
	$o->abc();
	$o->xyz();


?>

