 <?php
	interface Charger{
		public function charge(); 
	}
	class MobileCharger implements Charger{
		public function charge(){
			echo "Charging Mobile.";
		}
	}
	class LaptopCharger implements Charger{
		public function charge(){
			echo "Charging Laptop.";
		}
	}
	class AbcCharger{
			
	}
	class CheckCharger{
		public function checking(Charger $abc){
			$abc->charge();
		}
	}

	$mobCharger = new MobileCharger();
	$lapTopCharger = new LaptopCharger();
	$abcCharger = new AbcCharger();

	$checkChargerObj = new CheckCharger();
	
	$checkChargerObj->checking($mobCharger);
	$checkChargerObj->checking($lapTopCharger);
	$checkChargerObj->checking($abcCharger);
?>