<?php
class Student {
    public  $name = "John";
	public  $gender = "male";
    private $age = 26;
	
	public function displayProperties(){
		foreach ($this as $key => $value) {
			print "this[$key] = $value</br>";
		}
	}
}
 
$obj = new Student();
 $obj->displayProperties();

?>
