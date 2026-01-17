<?php

// create class car
class Car {

    // instantiate car variables
    public string $make;
    public string $model;
    public int $year;

    // create function construct
    public function __construct(string $make, string $model, int $year) {

        // set attributes
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    // function displays car info
    public function getInfo(): string {

        // return the car info
        return "Make: {$this->make} Model: {$this->model} Year: {$this->year}";
    }
}

// create car obbject
$car1 = new Car("Toyota", "Corolla", 2020);
// call function get info to car 1 object
echo "<p>". $car1->getInfo(). "</p>";

?>