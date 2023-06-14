<?php
declare(strict_types=1);
Class Math{
	public static function addition(float $a, float $b) : int {
		  return (int)($a + $b);
	 }
}
echo "</br>". Math::addition(2.7, 4.8);




?>
