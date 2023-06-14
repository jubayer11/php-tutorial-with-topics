<?php
	//Simple example of user generated error
	$test=2;
	if ($test>1) {
	  trigger_error("Value must be 1 or below");
	}
?>