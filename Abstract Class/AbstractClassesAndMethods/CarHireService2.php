<?php
	abstract class Vehicle{
		private $noOfWheels;
		private $color;
		private $fuel;
		private $speed;
				
		public function getNoOfWheels(){
			return $this->noOfWheels;
		}
		public function setNoOfWheels($wheels){
			$this->noOfWheels = $wheels;
			echo "No of Wheels are ". $this->noOfWheels."</br>";
		}
		public function getColor(){
			return $this->color;
		}
		public function setColor($color){
			$this->color = $color;
			echo "Color is ". $this->color."</br>";
		}
		public function getFuel(){
			return $this->fuel;
		}
		public function setFuel($fuel){
			$this->fuel = $fuel;
			echo "Fuel is ". $this->fuel."</br>";
		}
		public function getSpeed(){
			return $this->speed;
		}
		public function setSpeed($speed){
			$this->speed = $speed;
			echo "Speed is ". $this->speed."</br>";
		}
		public function start(){
			echo "vehicle is starting...</br>";
		}
		public function accelerate(){
			echo "vehicle is accelerating...</br>";
		}
		public function brake(){
			echo "vehicle is Stoping...</br>";
		}
	}
	
	abstract class PassengerVehicle extends Vehicle{
			private $passengerSeats;
			
			public function getPassengerSeats(){
				return $this->passengerSeats;
			}
			public function setPassengerSeats($seats){
				return $this->passengerSeats = $seats;
				echo "No of seats are ". $this->passengerSeats."</br>";
			}
		}
		
	abstract class TransportationVehicle extends Vehicle{
			private $noOfDoors;
			private $loadCapacity;
			
			public function getNoOfDoors (){
				return $this->noOfDoors ;
			}
			public function setNoOfDoors($doors){
				return $this->noOfDoors  = $doors;
			}
			public function getLoadCapacity (){
				return $this->loadCapacity ;
			}
			public function setLoadCapacity($loadCapacity){
				return $this->loadCapacity  = $loadCapacity;
			}
		}
		
	class Bike extends PassengerVehicle{
		private $saddleHeight;
		public function getSaddleHeight(){
			return $this->saddleHeight ;
		}
		public function setSaddleHeight($saddleHeight){
			return $this->saddleHeight  = $saddleHeight;
		}
		
		public function doMaintenance(){
			echo "Bike Maintenance.</br>";
		}
	}
	class Car extends PassengerVehicle{
		private $noOfDoors;
		public function getNoOfDoors(){
			return $this->noOfDoors ;
		}
		public function setNoOfDoors($noOfDoors){
			return $this->noOfDoors  = $noOfDoors;
			echo "No of Doors are ". $this->noOfDoors."</br>";
		}
		
		public function doMaintenance(){
			echo "Car Maintenance.</br>";
		}
	}
	class Van extends TransportationVehicle{
		private $noOfBoxes;
		public function getNoOfBoxes(){
			return $this->noOfBoxes ;
		}
		public function setNoOfBoxes($noOfBoxes){
			return $this->noOfBoxes  = $noOfBoxes;
		}
		
		public function doMaintenance(){
			echo "Van Maintenance.</br>";
		}
	}
	class Truck extends TransportationVehicle{
		private $sizeOfContainer;
		public function getSizeOfContainer(){
			return $this->sizeOfContainer ;
		}
		public function setSizeOfContainer($sizeOfContainer){
			return $this->sizeOfContainer  = $sizeOfContainer;
		}
		
		public function doMaintenance(){
			echo "Truck Maintenance.</br>";
		}
	}
	$bikeObj = new Bike();
	$carObj = new Car();
	$vanObj = new Van();
	$truckObj = new Truck();
	
	$bikeObj->doMaintenance();
	$carObj->doMaintenance();
	$vanObj->doMaintenance();
	$truckObj->doMaintenance();
	
	?>