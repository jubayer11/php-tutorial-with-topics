<?php
	class Test  
	{ 
		private $value1; 
		private $value2; 
		function __construct()  
		{ 
			$this->value1 = 100;  
			$this->value2 = "name"; 
		} 
	} 
  $testObj = new Test(); 
  var_export($testObj, false);
 
 
?>