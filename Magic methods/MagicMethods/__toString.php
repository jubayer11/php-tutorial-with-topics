<?php 
	class Test 
	{ 
		public $name; 
		public function __construct($name) 
		{ 
			$this->name= $name; 
		}
		public function __toString()
		{
			$x=1;
			$y=2;
			$z=$x+$y;
			return 'the answer is '.$z;
		}
		
	} 
	 
	$obj = new Test('Tim'); 
	echo $obj; 
?> 
