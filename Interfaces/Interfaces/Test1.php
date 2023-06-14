<?php
	interface TestInterface{
		public function helloWorld();

	}
	class TestClass implements TestInterface{
		public function helloWorld(){
			echo "This is method implementation......";
		}
	}
?>