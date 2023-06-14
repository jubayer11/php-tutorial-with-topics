<?php

class Charger
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function charging()
    {
        echo "Charger name " . $this->name . " Charging........";
    }
}

class Battery
{
}

class Door
{
}

class Window
{
}

class Seat
{
}

class ToyCar
{
    public $carName;
    public $colour;
    public $chargerObj;

    public $batteryObj;
    public $doorObj;
    public $windowObj;
    public $seatObj;

    public function __clone()
    {
        foreach ($this as $key => $value) {
            if (is_object($value)) {
                $this->$key = clone $this->$key;
            }
        }
    }

    public function __construct($name, $colour, $charger)
    {
        $this->carName = $name;
        $this->colour = $colour;
        $this->chargerObj = $charger;
    }

}

$charObj = new Charger("6 Volt Charger.");
$carObj = new ToyCar("Car 1", "Black", $charObj);

$otherCarObj = clone $carObj;

$otherCarObj->carName = "Car2";
$otherCarObj->chargerObj->name = "12 Volt Charger";

print_r($carObj);

echo "</br></br>";

print_r($otherCarObj);


?>