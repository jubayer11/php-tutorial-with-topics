<?php
class A{
	public $name = "Class A";
	
	public function printValue(){
		echo $this->name;
	}

}

$objA = new A();

echo $objA->name;
$objA->printValue();
?>
