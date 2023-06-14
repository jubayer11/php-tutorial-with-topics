<?php
	function errorHandler($errno, $errstr,$errorFile,$errorLine) {
		echo "error is $errno and error message is $errstr and file $errorFile and line $errorLine";
		die();
	}

	set_error_handler("errorHandler");

	$fh = fopen('none-existing-file', 'r'); 
	 
?>
