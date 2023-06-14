<?php
    class DatabaseException extends Exception{

	}
    class FileException extends Exception{

	}
	
    try {
		$x = 1;
		if($x == 1){
			throw new DatabaseException("Database problem");
		}else{
			throw new FileException("File system problem");
		}
		   
    }catch (DatabaseException $exception) {
        echo "Message in catch1: {$exception->getMessage()}\n";
    
	}catch (FileException $exception) {
        echo "Message in catch2: {$exception->getMessage()}\n";
    }
?>