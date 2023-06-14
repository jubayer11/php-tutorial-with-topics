<?php
	class Mobile {
		public $isCharged;
	}
	
	class Charger {
		public function charge(Mobile $mobile, $chargingTime, array $names ) { 
			echo "Charging mobile for ".$chargingTime." mins</br></br>";
			$mobile->isCharged = true;
			foreach($names as $name){
				echo $name. "</br>";
			}
		}
	}
	$time = 10;
	$abc = "chair";
	$mobNames = array("a", "b", "c");
	$mobObj = new Mobile();
	$charger = new Charger();
	$charger->charge($mobObj, $time, $mobNames);
	
?>