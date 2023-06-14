<?php
	class A{
	 public function __construct(){
		echo "Class A Constructor.</br>";
	 }
	}
	class B extends A{
		public function __construct(){
			parent::__construct();
			echo "Class B Constructor.</br>";
		}
	}
	
	$objB = new B();
?>