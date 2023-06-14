<?php
	trait Chargeable {
		public static $my_static = 'Static Property';
		
		public static function charge() {
			echo"</br>Now Charge is a static method.";
		}
	}
	class Toy {}

	class ElectricCarToy extends Toy{
		use Chargeable;
	}
	$o = new ElectricCarToy();
	$o::$my_static;
	$o::charge();


?>

