<?php
class Student 
{ 
	public function __set( $propertyName, $propertyValue )  
	{  
		echo"Property name is $propertyName and its value is $propertyValue";  
	} 
	 public function __get( $propertyName )  
	 {  
		return "Tim";  
	 }  
} 
 $stuObj = new Student();  
 echo $stuObj->studenName; 
