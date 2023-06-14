<?php
class Dress   
	 {    
		const SMALL= "Small";   
		const MEDIUM= "Medium";   
		const LARGE= "Large";   
		public $size;   
		public $color = "red";  // The color of the dress   
		Private $fabric = "linen"; // The fabric of the dress   
		Private $design = "Shift Dress"; // The design of the dress    
		Public function displayInfo(){   
			echo "The info about the dress.";   
			echo $this->color;   
			echo $this->fabric ;   
			echo $this->design;
			echo self::MEDIUM;
		}   
		private function helloWorld($number1, $number2){   
			return $number1 + $number2;   
		}   
	}   
   
$dressObj = new Dress();
$dressObj->size = Dress::MEDIUM;
$RESULT = 11 + 011;

echo "$RESULT";

?>