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
  $h=var_export($testObj,true);
  eval($h.";");
 
?>