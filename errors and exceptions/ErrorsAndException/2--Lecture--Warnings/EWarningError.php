<?php 
	//example of Warning errors 
	
	//Try to open a file that doesn't exists 
	$fh = fopen('none-existing-file', 'r'); 
	 
	 
	//Try to divide a variable with 0 
	$a = 10; 
	$c = $a/0 ; 
	
	echo"</br></br>This text will be shown because this is a warning type error. The script execution will not be stopped"; 
	 
 
?> 
 