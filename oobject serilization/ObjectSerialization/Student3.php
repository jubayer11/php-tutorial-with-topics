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
		 return array_keys( get_object_vars( $this ) );
		}
		
		public function __wakeup() {
		 echo "Hello guys i m back from hibernation....</br>";
		}

	}
	
?>



