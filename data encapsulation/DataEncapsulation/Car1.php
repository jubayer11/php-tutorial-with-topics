<?php
class Car   
	 {    
		private $speed;
		public $color = "Silver"; 
		
		public function accelerate($value){
			$this->speed += $value;
			echo "Car speed is ".$this->speed."</br>";
		}
		public function brake(){
			$speed = 0;
			echo "Car is stoped.";
		}
	}   
$carObj = new Car();   
$carObj->accelerate(20);
$carObj->brake(); 

?>