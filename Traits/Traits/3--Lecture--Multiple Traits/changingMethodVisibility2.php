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
$o->xyz();
?>

