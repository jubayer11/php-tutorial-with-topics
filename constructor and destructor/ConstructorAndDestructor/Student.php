<?php
	class Student 
		{  
		private $firstName;  
		private $lastName; 
		private $age; 
		
		public function __construct( $fName, $lName, $age)  
		{ 
			$this->firstName = $fName;   
			$this->lastName = $lName;   
			$this->age = $age;   
		}  
		
		public function showDetails()  
		{ 
			echo $this->firstName."</br>";   
			echo $this->lastName."</br>";   
			echo $this->age."</br>";   
		}  
	}  
 
	$stuObj = new Student();  
	$stuObj->showDetails();

?>