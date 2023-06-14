<?php
	class Student{
		private $_extraInfo = array();
		
		public function __set($propertyName,$propertyValue){
			$this->_extraInfo[$propertyName] = $propertyValue;
		}
		
		public function __get($propertyName){
			if ( array_key_exists( $propertyName, $this->_extraInfo ) ) {
				 return $this->_extraInfo[$propertyName];
			} else {
				 return null;
			}
		}
		
		public function __isset($propertyName){
			if(isset($this->_extraInfo[$propertyName])){
				echo "Property \$$propertyName is set.<br/>";		
			} else {
				echo "Property \$$propertyName is not set.<br/>";
			}
		}
		
		public function __unset($propertyName){
			unset($this->_extraInfo[$propertyName]);
			
			echo "\$$propertyName is unset <br/>";
		}
		
	}
	$objStudent = new Student();

	$objStudent->birthCountry = "Germany";
	$objStudent->nationality = "United Kingdom";
	
	echo "Overloaded Property name is \$birthCountry= ";
	echo $objStudent->birthCountry . "</br>";
	
	echo "Overloaded Property name is \$nationality= ";
	echo $objStudent->nationality . "</br></br>";

	
	isset($objStudent->birthCountry);
	isset($objStudent->nationality);
	echo "</br>";
	
	unset($objStudent->birthCountry);
	unset($objStudent->nationality);
	echo "</br>";
	
	isset($objStudent->birthCountry);
	isset($objStudent->nationality);
?>