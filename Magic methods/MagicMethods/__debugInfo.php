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
		
	}  
	$stuObj = new Student( 2, "name");
	var_dump($stuObj);
?>