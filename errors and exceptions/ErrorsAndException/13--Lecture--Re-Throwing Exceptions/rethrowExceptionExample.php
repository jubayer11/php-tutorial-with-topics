<?php
	class FileException extends Exception { }
	
    class CopyFileException extends FileException { }
	
	try{
		try{
			//We try to copy a file
			throw new CopyFileException("File copy problem");
		}
		catch (CopyFileException $exception) {
			throw new FileException("File problem.",0, $exception);
		} 
		echo "This statement will not be printed";
		
	}catch(FileException $e){
		echo "latest Exception ".$e->getMessage();
		echo "</br>previous Exception".$e->getPrevious()->getMessage();
		
	}
?>