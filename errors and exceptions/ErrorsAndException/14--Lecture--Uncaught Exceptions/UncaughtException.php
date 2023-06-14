<?php
	class DatabaseException extends Exception { }
	class FileException extends Exception { }
	class CopyFileException extends FileException { }
	
	
	try{
		try{
			throw new FileException("File copy problem");
		}
		catch (CopyFileException $exception) {
			
		} 
		
	}catch(DatabaseException $e){

	}
?>