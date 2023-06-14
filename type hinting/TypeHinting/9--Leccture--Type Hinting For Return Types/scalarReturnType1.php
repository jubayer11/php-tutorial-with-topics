<?php
Class Math{
	public static function addition(float $a, float $b) : int {
		  return ($a + $b);
	 }
}
echo "</br>". Math::addition(2.7, 4.8);

echo "</br>".Math::addition(2, true);

echo "</br>".Math::addition(5,"10 days" );


?>
