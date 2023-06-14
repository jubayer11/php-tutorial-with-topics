<?php
trait CloneAble{
	public function __clone(){
		foreach($this as $key=>$value){
			if(is_object($value)){
				$this->$key = clone $this->$key;
			}
			else if (is_array($value)) {
			  $newArray = array();
			  foreach ($value as $arrayKey => $arrayValue) {
				  if(is_object($arrayValue)){
					 $newArray[$arrayKey] = clone $arrayValue;
				  }else{
					 $newArray[$arrayKey] = $arrayValue;
				  }
			  }
			  $this->$key = $newArray;
		    }
		}
	}
}

class Car{
	use CloneAble;
	public $cdPlayerObj;
	public $batteryObj;
	public function __construct($cdPlayerObj, $batteryObj)
	{
		$this->cdPlayerObj = $cdPlayerObj;
		$this->batteryObj = $batteryObj;
	}
}

class CdPlayer{
	use CloneAble;
	public $batteryObj;
	public function __construct($batteryObj)
	{
		$this->batteryObj = $batteryObj;
	}
}

class Battery{}

$batteryObj = new Battery();

$cdPlayerObj = new CdPlayer($batteryObj);
$carObj = new Car($cdPlayerObj, $batteryObj);

$cloneCar = clone $carObj;

$carObjStr = serialize($carObj); 
	
$cloneCar =  unserialize($carObjStr); 

//$cloneCar =  unserialize(serialize($carObj));

var_dump($carObj);
echo "</br>";

var_dump($cloneCar);

?>