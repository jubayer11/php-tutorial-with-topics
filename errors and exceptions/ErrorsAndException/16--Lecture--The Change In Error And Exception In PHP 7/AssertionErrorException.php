<?php
	ini_set("assert.exception", 1);
	try{
		$number = 1;

		assert($number == 1);
		
		assert($number == 2);
		echo "This statement will not be printed.";
		
	}catch(AssertionError $e ){
		
		echo $e;
	}

?>