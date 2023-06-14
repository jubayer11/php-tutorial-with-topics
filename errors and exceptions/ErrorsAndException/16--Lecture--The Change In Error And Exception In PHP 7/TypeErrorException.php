<?php 
	function test(int $x, int $y) {
	  
	}
	
	try{
		echo test('tom','tim');
		 
	} catch (TypeError $e) {
		echo $e->getMessage(), "\n";
	} 

?> 