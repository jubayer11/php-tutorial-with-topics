         <?php
	class Mobile {
		public $isCharged;
	}

	class Charger {
		public function charge( $mobile, $chargingTime ) { 
			echo "Charging mobile for ".$chargingTime." mins.";
			$mobile->isCharged = true;
		}
	}
	
	$time = 10;
	$mobObj = new Mobile();
	$charger = new Charger();
	$charger->charge($mobObj, $time);
?>