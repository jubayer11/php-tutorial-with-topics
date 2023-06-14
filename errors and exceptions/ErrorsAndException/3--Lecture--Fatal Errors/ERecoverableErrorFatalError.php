<?php 
	//example of E_RECOVERABLE_ERROR 
	// __toString() method 
	
	Class Test{
		//add this __toString() magic method to get rid of E_RECOVERABLE_ERROR
		/*
		function __toString(){
			return "Object is a string.";
		}
		*/
	}
	$objTest = new Test();
	echo  (string)$objTest;

 ?>