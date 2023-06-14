<?php 
//example of E_DEPRECATED warnings 
	class TestClass {
		function TestClass() {
			echo "Old php 4 style constructor.";
		}
		//add __construct() method to get rid of E_DEPRECATED warning
		/*function __construct() {
			echo "new style constructor.";
		}
		*/
	}
	echo "</br></br> Script is not halted.";
	
?> 
 