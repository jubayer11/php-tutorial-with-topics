<?php
declare(strict_types=1);
class ScalarTypeChecker {
 public function checking(int $a, float $b, string $c, bool $d ) { 
	echo "Integer is = ".$a."</br>";
	echo "Float is  = ".$b."</br>";
	echo "String is = ".$c."</br>";
	echo "Boolean is = ".$d."</br>";

 }
}
$checker = new ScalarTypeChecker();
$checker->checking("4 weeks", 35, 10, "hello");

?>