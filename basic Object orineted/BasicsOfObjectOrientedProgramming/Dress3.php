<?php
class Dress{  
	public $color = "red";  // The color of the dress 
	Public $fabric = "linen"; // The fabric of the dress 
	Public $design = "Slim Fit Blazer";//The design of the dress   
	
	Public function displayInfo(){ 
		echo "The info about the dress.</br>"; 
		echo $this->color."</br>"; 
		echo $this->fabric."</br>" ; 
		echo $this->design."</br>"; 
	} 
	Public function helloWorld(){ 
		echo $this->displayInfo(); 
	}
}
$dressObj = new Dress();
$dressObj->helloWorld();
?>




