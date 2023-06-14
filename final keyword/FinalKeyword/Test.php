<?php

	 class A{
		final public function test(){
			echo "Class A test method.</br>";
		}
	}
	class B extends A{
		public function test(){
			echo "Class B test method.</br>";
		}
	}
?>