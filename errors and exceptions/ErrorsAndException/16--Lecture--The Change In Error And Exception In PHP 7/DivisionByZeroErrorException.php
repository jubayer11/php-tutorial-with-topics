<?php 
	try {
		$x = 10;
		$y = 0;
		
		$x%$y;
		//or $x/$y;
	} catch (DivisionByZeroError $e) {
		echo $e->getMessage(), "\n";
	} 

?> 