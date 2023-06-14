<?php
trait Chargeable {
    public function charge() {
		echo "I m a trait method.........</br>";
	}
}
class Toy {

}
class ElectricCarToy extends Toy{
    use Chargeable;
    public function charge() {
        echo 'I m a current Class method</br> ';
    }
}
$o = new ElectricCarToy();
$o->charge();




?>

