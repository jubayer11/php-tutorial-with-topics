<?php
	class Student 
		{  
		public $name;  

		public function __construct( $name)  
		{ 
			$this->name = $name;   
		}  
		public function __destruct(){
			echo "I am dying...AAAAAAAAA.....";
		}
 
	}  
 
$stuObj = new Student( "Tim");  

unset($stuObj);


?>