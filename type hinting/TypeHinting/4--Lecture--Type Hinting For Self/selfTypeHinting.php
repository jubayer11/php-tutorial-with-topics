<?php
class A{
	
	public static function checkValue(){
		echo "I m from class A</br>";
	}
	public static function test(self $abc){
		$abc::checkValue(); 
		
	}
}
class B extends A{
	public static function checkValue(){
		echo "I m from class B</br>";
	}
}
$objB = new B();
$objA = new A();
$objB::test($objB);
?>
