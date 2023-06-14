<?php
class A{
	public $name = "Class A";
	
	public function printValue(){
		echo $this->name;
	}
	public function test(){
		$this->printValue();
	}
}

class B extends A{
	public function printValue(){
		echo "</br>I m In Class B.";
	}
}


$objA = new A();
$objB = new B();

$objA->test();
$objB->test();

?>
