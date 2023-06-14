<?php
class Dress{  
	public $color = "red";  // The color of the dress 
	Public $fabric = "linen"; // The fabric of the dress 
	Public $design = "Slim Fit Blazer";//The design of the dress   

	Public function displayInfo(){ 
		echo "The info about the dress."; 
		echo $this->color; 
		echo $this->fabric ; 
		echo $this->design; 
	} 
	
	Public function helloWorld($number1, $number2){ 
		return $number1 + $number2; 
	} 
}
$dressObj = new Dress();
echo $dressObj->helloWorld(20,30);
?>




