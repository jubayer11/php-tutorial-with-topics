<?php
	class Student 
		{  
		public $name;
		private $id;
		public static $stuCount = 0;
		
		public function __construct( $name, $id)  
		{ 
			self::$stuCount += 1;
			$this->name = $name;   
			$this->id = $id;
		}  

 
	} 
	
echo Student::$stuCount."</br>"; 

$stuObj = new Student( "name1", 1); 
$stuObj = new Student( "name2", 2);
$stuObj = new Student( "name3", 3);
$stuObj = new Student( "name4", 4);
$stuObj = new Student( "name5", 5);
$stuObj = new Student( "name6", 6);
$stuObj = new Student( "name7", 7);
$stuObj = new Student( "name8", 8);
$stuObj = new Student( "name9", 9);
$stuObj = new Student( "name10", 10); 

echo Student::$stuCount;
?>