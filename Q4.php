<?php

// Base class Vehicle
class Vehicle {
    protected $make;
    protected $model;

    public function __construct($make, $model) {
        $this->make = $make;
        $this->model = $model;
    }

    public function start() {
        return "Starting the vehicle...";
    }

    public function stop() {
        return "Stopping the vehicle...";
    }

    public function getMake() {
        return $this->make;
    }

    public function getModel() {
        return $this->model;
    }
}

// Class Car inherits from Vehicle
class Car extends Vehicle {
    protected $fuelType;

    public function __construct($make, $model, $fuelType) {
        parent::__construct($make, $model);
        $this->fuelType = $fuelType;
    }

    public function accelerate() {
        return "Accelerating the car...";
    }

    public function getFuelType() {
        return $this->fuelType;
    }
}

// Class Bicycle inherits from Vehicle
class Bicycle extends Vehicle {
    protected $numGears;

    public function __construct($make, $model, $numGears) {
        parent::__construct($make, $model);
        $this->numGears = $numGears;
    }

    public function ringBell() {
        return "Ringing the bicycle bell...";
    }

    public function getNumGears() {
        return $this->numGears;
    }
}

// Class ElectricCar inherits from Car
class ElectricCar extends Car {
    protected $batteryCapacity;

    public function __construct($make, $model, $fuelType, $batteryCapacity) {
        parent::__construct($make, $model, $fuelType);
        $this->batteryCapacity = $batteryCapacity;
    }

    public function chargeBattery() {
        return "Charging the electric car battery...";
    }

    public function getBatteryCapacity() {
        return $this->batteryCapacity;
    }
}

// Usage
$car = new Car("Toyota", "Camry", "Petrol");
echo "Car make: " . $car->getMake() . "<br>";
echo "Car model: " . $car->getModel() . "<br>";
echo "Car fuel type: " . $car->getFuelType() . "<br>";
echo $car->start() . "<br>";
echo $car->accelerate() . "<br>";
echo $car->stop() . "<br><br>";

$bicycle = new Bicycle("Giant", "Defy", 21);
echo "Bicycle make: " . $bicycle->getMake() . "<br>";
echo "Bicycle model: " . $bicycle->getModel() . "<br>";
echo "Bicycle number of gears: " . $bicycle->getNumGears() . "<br>";
echo $bicycle->start() . "<br>";
echo $bicycle->ringBell() . "<br>";
echo $bicycle->stop() . "<br><br>";

$electricCar = new ElectricCar("Tesla", "Model S", "Electric", "100 kWh");
echo "Electric car make: " . $electricCar->getMake() . "<br>";
echo "Electric car model: " . $electricCar->getModel() . "<br>";
echo "Electric car fuel type: " . $electricCar->getFuelType() . "<br>";
echo "Electric car battery capacity: " . $electricCar->getBatteryCapacity() . "<br>";
echo $electricCar->start() . "<br>";
echo $electricCar->accelerate() . "<br>";
echo $electricCar->chargeBattery() . "<br>";
echo $electricCar->stop() . "<br>";

?>
