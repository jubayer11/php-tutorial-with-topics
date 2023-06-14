<?php
	// Simple function
	function myCallbackFunction($name) {
		echo $name.'</br>';
	}
	// callable Public and static methods
	class MyClass {
		public function myCallbackPubMethod($namePub){
			echo 'Callback public class method.'.$namePub . '</br>';
		}
		public function myCallbackStaticMethod($nameSt) {
			echo 'Callback static class method.</br>'.$nameSt;
		}
	}
	Class TestClass{
		public function testing($callBackFunc, $funcArg){

			$callBackFunc($funcArg);
			call_user_func($callBackFunc, $funcArg);
		}
	}

	$obj = new TestClass();
	$myObj = new MyClass();

//	$obj->testing(array($myObj, 'myCallbackPubMethod'), 'callable');

	//Call static method of MyClass
	$obj->testing(array('MyClass', 'myCallbackStaticMethod'), 'callable');

	//Call static method of MyClass using :: operator
//	$obj->testing('MyClass::myCallbackStaticMethod', 'callable');

	?>