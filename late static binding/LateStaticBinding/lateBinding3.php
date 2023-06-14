<?php
	class A{
		public static $name = "Class A</br>";
		
		public static function printValue(){
			echo self::$name;
		}
		public static function test(){
			self::printValue();
		}
	}
	class B extends A{
		public static function printValue(){
			echo "</br>I m In Class B.";
		}
		public static function test(){
			self::printValue();
		}
	}
	A::test();
	B::test();
?>
