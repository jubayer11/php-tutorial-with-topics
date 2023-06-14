<?php
	Class Student{
		public $name;
		public $id;
		public $address;
		public $age;
		
		public function printStudentInfo(){
			echo "Student name = ".$this->name."</br>";
			echo "Student id = ".$this->id."</br>";
		}
		
		public function __sleep() {
		 //(Clean up; close database handles, etc)
			return array( "id", "address" );
		}
		

	}
?>