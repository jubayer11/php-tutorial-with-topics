<?php
class Student {
    public  $name = "John";
	public  $gender = "male";
    private $age = 26;
	
}
 
$obj = new Student();
 
foreach ($obj as $key => $value) {
    print "obj[$key] = $value</br>";
}
?>
