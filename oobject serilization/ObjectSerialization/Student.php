<?php
	Class Student{
		public $name;
		public $id;

		public function printStudentInfo(){
			echo "Student name = ".$this->name."</br>";
			echo "Student id = ".$this->id."</br>";
		}

	}
?>