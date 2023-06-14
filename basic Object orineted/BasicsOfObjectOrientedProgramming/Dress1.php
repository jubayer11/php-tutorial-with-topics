<?php
class Dress{  
	public $color = "red";  // The color of the dress 
	Public $fabric = "linen"; // The fabric of the dress 
	Public $design = "Slim Fit Blazer";//The design of the dress   

}

$dressObj = new Dress();
$dressObj->color = "Black";

$dressObj1 = new Dress();

var_dump($dressObj);
echo "</br></br>";
print_r($dressObj);
?>




