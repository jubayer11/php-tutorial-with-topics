<?php
	class DatabaseException extends Exception { }
	class FileException extends Exception { }
	class CopyFileException extends FileException { }
	
	function myExceptionHandler(Exception $exception){
		echo $exception->getMessage();
	}
	set_exception_handler("myExceptionHandler");
	
	try{
		try{
			throw new FileException("File copy problem");
		}
		catch (CopyFileException $exception) {
			
		} 
	}catch(DatabaseException $e){

	}
?>