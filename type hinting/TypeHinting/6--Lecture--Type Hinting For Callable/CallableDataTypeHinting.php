<?php
	// Simple function
	function myCallbackFunction($name) {
		echo 'Simple Callback function.</br>';
		echo $name.'</br>';
	}

	// callable Public and static methods
	class MyClass {
		public function myCallbackPubMethod($namePub){
			echo 'Callback public class method.</br>';
		}
		static function myCallbackStaticMethod($nameSt) {
			echo 'Callback static class method.</br>';
		}
	}

	Class TestClass{
		public function testing(callable $callBackFunc, $funcArg){
			echo "I am in testing method.";
			$callBackFunc($funcArg);
			call_user_func($callBackFunc, $funcArg);
		}
	}
	$obj = new TestClass();
	$myObj = new MyClass();

	$obj->testing(10, 'callable');
	
	
?>