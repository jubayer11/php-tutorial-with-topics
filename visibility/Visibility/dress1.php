<?php
	class Dress{  
		public $color = "red";  // The color of the dress 
		private $fabric = "linen"; // The fabric of the dress 
		private $design = "Slim Fit Blazer";//The design of the dress   

		Public function displayInfo(){ 
			echo "The info about the dress."; 
			echo $this->color."</br>"; 
			echo $this->fabric."</br>" ; 
			echo $this->design."</br>"; 
		} 
		private function helloWorld($number1, $number2){ 
			return $number1 + $number2; 
		} 
	}																																	

	$dressObj = new Dress();

	echo $dressObj->color."</br>";
	$dressObj->displayInfo();
?>




