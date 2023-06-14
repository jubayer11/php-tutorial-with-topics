<?php
//examples of user generated error
 trigger_error("User generated notice.", E_USER_NOTICE);
   
 trigger_error("User generated Warning. ", E_USER_WARNING);
  
 trigger_error("User generated Dep Warning.",E_USER_DEPRECATED);
  
 trigger_error("User generated fatal error", E_USER_ERROR);
?>