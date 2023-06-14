<?php
	declare(strict_types=1);
	Class Math{
		public static function addition(float $a, float $b) : int {
			  return (int)($a + $b);
		 }
	}
	try{

		echo "</br>".Math::addition(2, true);
		
	} catch (TypeError $e) {
		echo "I got it </br>";
		echo $e->getMessage(), "\n";
	}




?>
