<?php 
	try {
		eval('echo "Hi!;');
		
	} catch (ParseError $e) {
		echo $e->getMessage(), "\n";
	}


?> 