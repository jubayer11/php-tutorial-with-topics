<?php
// page2.php:
  // this is needed for the unserialize to work properly.
  include("Student3.php");

  $s = file_get_contents('store.txt');
  $stuObj = unserialize($s);

  // now use the function printStudentInfo() of the $stuObj object.  
  $stuObj->printStudentInfo();
?>