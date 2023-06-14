<?php
// page1.php:

  include("Student1.php");
  
  $stuObj = new Student;
  $stuObj->name= "Tim";
  $stuObj->id = 10;
  $stuObj->address= "abc";
  $stuObj->age = 20;
  
 $s = serialize($stuObj);

  echo $s;
  
  // store $s somewhere where page2.php can find it.
  file_put_contents('store.txt', $s);


?>