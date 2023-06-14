<?php
declare(strict_types=1);
include 'strictScalarTypeHinting3.php';

$checker = new ScalarTypeChecker();
$checker->checking("4 weeks", "3.5", 10, "hello");
?>