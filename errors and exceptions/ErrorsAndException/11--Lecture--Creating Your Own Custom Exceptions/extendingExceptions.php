<?php
	class FileException extends Exception {
		
	  public function fileErrorMessage() {
		//error message
		$errorMsg = 'File error. '.$this->getMessage().
		'</br>Error on line '.$this->getLine().
		' in '.$this->getFile();
		
		return $errorMsg;
	  }
	}

	$file = "C:/folder/testFile12.txt";
	try {
		if ( !file_exists( $file)){
		 throw new FileException("File doesn't exists");
		}
		echo"If file exists this message will be printed.";
	}

	catch(FileException $e) {
	  echo 'Message: ' .$e->fileErrorMessage();
	}
?>