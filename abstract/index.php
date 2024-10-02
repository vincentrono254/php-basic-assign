<?php
// Abstract classes are a fundamental concept in object-oriented programming that allow developers to create a blueprint for other classes to follow. An abstract class is a class that cannot be instantiated on its own and is intended to be inherited by other classes. It provides a way to define a common set of properties and methods that can be shared by multiple classes.

// When to use abstract classes:

// When you want to provide a basic implementation that can be shared by multiple classes.
// When you want to define a common interface for a group of classes.
// When you want to encapsulate shared behavior and properties.

abstract class Vehicle {
    protected $brand;

    public function __construct($brand) {
        $this->brand = $brand;
    }

    abstract public function accelerate();

    public function stop() {
        echo "$this->brand is stopping.";
    }
}

// Concrete class: Car
class Car extends Vehicle {
    public function accelerate() {
        echo "$this->brand is accelerating to 60mph.";
    }
}

// Concrete class: Motorcycle
class Motorcycle extends Vehicle {
    public function accelerate() {
        echo "$this->brand is accelerating to 80mph.";
    }
}

$car = new Car('Toyota');
$car->accelerate(); // Output: Toyota is accelerating to 60mph.
$car->stop(); // Output: Toyota is stopping.

$motorcycle = new Motorcycle('Harley-Davidson');
$motorcycle->accelerate(); // Output: Harley-Davidson is accelerating to 80mph.
$motorcycle->stop(); // Output: Harley-Davidson is stopping.
?>