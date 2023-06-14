<?php
	trait Chargeable {
		public function charge() {
			echo "I m a Chargeable trait method.........</br>";
		}
	}
	trait AnotherTrait {
		public function charge() {
			echo "I m AnotherTrait method.........</br>";
		}
	}
	class Toy {}

	class ElectricCarToy extends Toy{
		use Chargeable, AnotherTrait{
			Chargeable::charge insteadof AnotherTrait;
			AnotherTrait::charge as xyz;
		}

	}
	$o = new ElectricCarToy();
	$o->charge();
	$o->xyz();

?>

