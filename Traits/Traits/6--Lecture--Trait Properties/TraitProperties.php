<?php
	trait Chargeable {
		public  $x = 'Trait Property';
	}

	class Toy {
		public  $x = 'Trait d Property';
	}

	class ElectricCarToy extends Toy{
		use Chargeable;
		
	}
	$o = new ElectricCarToy();

	echo $o->x;
?>

