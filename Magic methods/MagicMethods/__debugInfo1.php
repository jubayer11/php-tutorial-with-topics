<?php
	class Student 
		{  
		private $id;
		public $name;

		public function __construct( $id, $name)  
		{ 
			$this->id = $id;
			$this->name = $name;   
		} 
		public function __debugInfo() { 
        return [ 
				'Student Id' => $this->id * 2, 
				'Address'=> 'abc' 
			   ]; 
		}
	}  
	$stuObj = new Student( 2, "name");
	var_dump($stuObj);
?>