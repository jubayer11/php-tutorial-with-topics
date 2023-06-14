<?php
	function z(){
		throw new exception("This is exception in function z.");
	}
	function y(){
		z();
	}
	function x(){
		y();
	}

	try{
		x();
	}catch(Exception $e){
		var_dump($e->getTrace()); //using var_dump as getTrace returns an array
		
	}
?>