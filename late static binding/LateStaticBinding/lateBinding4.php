<?php
	class A{
		public static $name = "Class A</br>";
		
		public static function printValue(){
			echo static::$name;
		}
		public static function test(){
			static::printValue();
		}
	}
	class B extends A{
		public static function printValue(){
			echo "</br>I m In Class B.";
		}
	}
	A::test();
	B::test();
?>
