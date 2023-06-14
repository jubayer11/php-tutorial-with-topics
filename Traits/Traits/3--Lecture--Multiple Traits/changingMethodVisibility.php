<?php
	trait Chargeable {
		public function charge() {
			echo "I m a Chargeable trait method.........</br>";
		}
	}

	class Toy {}

	class ElectricCarToy extends Toy{
		use Chargeable{charge as private xyz;}

	}
	$o = new ElectricCarToy();
	$o->charge();

	//calling xyz will generate a fatal error as xyz is considered as private method
    $o->xyz();

?>

