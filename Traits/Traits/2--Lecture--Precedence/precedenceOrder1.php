<?php
trait Chargeable {
    public function charge() {
		echo "I m a trait method.........</br>";
	}
}
class Toy {
    public function charge() {
        echo 'I m a parent Class method</br> ';
    }
}
class ElectricCarToy extends Toy{
    use Chargeable;
    public function baseClassMethod($var){
		echo"Class own method";
	}
}
$o = new ElectricCarToy();
$o->charge();

?>

