<?php
class Student 
{ 
	public function __set( $propertyName, $propertyValue )  
	{  
		echo"Property name is $propertyName and its value is $propertyValue";  
	}  
} 
 $stuObj = new Student();  
 $stuObj->grade = "Good Grades";   
?>