<?php
	class Test
	{
		private $value1;
		private $value2;
		public function __construct()
		{
			$this->value1 = 100;
			$this->value2 = "name";
		}
		public static function __set_state(array $array) {
			  $tmp = new Test();
			  $tmp->value1 = $array['value1'];
			  $tmp->value2 = "my ".$array['value2'];
			  return $tmp;
		 }
	}
  $testObj = new Test();
  $strCode = var_export($testObj, true);

  eval($strCode.';');
  echo $strCode;
  var_dump($strCode);
?>