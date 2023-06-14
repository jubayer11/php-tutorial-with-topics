<?php
	// Simple function
	function myCallbackFunction($name) {
		echo $name.'</br>';
	}

	Class TestClass{
		public function testing($callBackFunc, $funcArg){

//			$callBackFunc($funcArg);
			call_user_func($callBackFunc, $funcArg);
			
		}
	}
	$obj = new TestClass();

	$obj->testing('myCallbackFunction', 'callable');

?>