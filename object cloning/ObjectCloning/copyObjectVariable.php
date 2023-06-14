<?php
	class Student{
		public $name;
		public function __construct($name)
		{
			$this->name = $name;
		}
	}
	
	$stuObj = new Student("Tim");
	
//	$otherStuObj = $stuObj;
	
	$otherStuObj = clone $stuObj;

	$otherStuObj->name = "Jack";

	var_dump($stuObj);
	echo "</br>";
	var_dump($otherStuObj);
?>



