<?php
	$file = "C:/folder/testFile.txt";
	try {
		if(!file_exists( $file )  ) {
			throw new Exception("File doesn't exists");
		}
		echo"If file exists this message will be printed.";
	}
	catch(Exception $e) {
	  echo 'Message: ' .$e->getMessage();
	}
?>