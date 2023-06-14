<?php
class Test
{
    public function __call($methodName, $arguments)
    {
        echo "Calling object method '$methodName' with Arguments("
             . implode(', ', $arguments). ")</br></br>";
    }
	
    public static function __callStatic($methodName, $arguments)
    {
		echo "Static method $methodName is called.";
        if($methodName == "multiply"){	
			$total = 1;
			foreach($arguments as $num){
				$total = $total * $num;
			}
			echo " answer is = $total";
		}else{
			echo " I am not doing anything Hun!!!.";
		}
    }
}
	$obj = new Test;
    $obj->hello(2, 4, 3, 4, 5);
//	Test::Multiply(2, 4, 3, 4, 5);

?>