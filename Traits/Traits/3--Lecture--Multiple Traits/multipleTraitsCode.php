<?php
	trait Chargeable {
		public function charge() {
			echo "Chargeable trait";
		}
	}
	trait AnotherTrait {
		public function a() {
			echo "AnotherTrait trait";
		}
	}
	class Toy {}

	class ElectricCarToy extends Toy{
		use Chargeable, AnotherTrait;
	}
	$o = new ElectricCarToy();
	$o->charge();
	$o->a();
?>

