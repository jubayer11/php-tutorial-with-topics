<?php
	class Mobile {
	 public $isCharged;
	}

	class Charger {
	 public function charge(Mobile $mobile, $chargingTime ) { 
		echo "Charging mobile for ".$chargingTime." mins</br></br>";
		$mobile->isCharged = true;
	 }
	}
	$time = 10;
	$abc = "chair";
	$mobObj = new Mobile();
	$charger = new Charger();

	$charger->charge($mobObj, $time);
	$charger->charge($abc, $time);
?>