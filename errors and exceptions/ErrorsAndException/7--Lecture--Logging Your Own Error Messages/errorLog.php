<?php

	function errorHandler($errno, $errstr) {

		error_log( "This is Error message." ); 
		
		error_log( "This is Error message.", 1, "ahmejubayer54@gmail.com",
					"Subject: Foo\nFrom: efg@gmail.com" );

		error_log( "This is Error message.\n", 3, "c://custom_errors.log" ); 
		die();
	}

	set_error_handler("errorHandler");

		//example of Warning errors 
		//Try to open a file that doesn't exists 
		$fh = fopen('none-existing-file', 'r'); 
		 
?>
