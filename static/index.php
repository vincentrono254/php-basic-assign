<?php
// static properties and methods are members of a class that can be accessed without creating an instance of the class. This means that they belong to the class itself, rather than instances of the class.

//static properties
// Static properties are variables that are shared by all instances of a class. They are initialized only once, when the class is loaded, and retain their value throughout the execution of the program.
//Static properties are declared with the static keyword:

//static methods.
// Static methods are functions that can be called without creating an instance of a class. They are essentially global functions that are scoped to the class. Static methods are useful when you need to perform an action that is related to the class, but doesn't depend on any instance of the class.

//To call a static method from a child class, use the parent keyword inside the child class.

//use cases include the following;
// (a).Utility classes: Static methods are often used in utility classes that provide a set of related functions, such as string manipulation functions.
// (b).Singleton classes: Static properties and methods are used in singleton classes, where only one instance of the class is allowed.
// (c).Cache management: Static properties can be used to cache data that is expensive to compute, so that it can be reused across multiple instances of a class.
// (d).Logger classes: Static methods can be used in logger classes to provide a global logging mechanism.


//example 
class Calculator {
    // Static property: a constant value
    public static $PI = 3.14;

    // Static method: a utility function
    public static function add($a, $b) {
        return $a + $b;
    }

    // Instance method: depends on the instance
    private $num1;
    private $num2;

    public function __construct($num1, $num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }

    public function multiply() {
        return $this->num1 * $this->num2;
    }
}

// Accessing static property
echo "Static Property: " . Calculator::$PI . "\n";  
// Output: 3.14

// Accessing static method
$result = Calculator::add(2, 3);
echo "Result of static method: " . $result . "\n";  
// Output: 5

// Creating an instance of the class
$calc = new Calculator(4, 5);
echo "Result of instance method: " . $calc->multiply() . "\n";  
// Output: 20
?>