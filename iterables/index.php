<?php
//An iterable is any value which can be looped through with a foreach() loop.
// Iterables are useful when you need to work with collections of data, such as arrays or objects. 
// Define a class that implements the Iterator interface
class MyIterable implements Iterator {
    // Define a private property to store the data
    private $data = [];

    // Constructor to initialize the data
    public function __construct(array $data) {
        $this->data = $data;
    }

    // Implement the rewind method to reset the iterator
    public function rewind() {
        reset($this->data);
    }

    // Implement the current method to get the current value
    public function current() {
        return current($this->data);
    }

    // Implement the key method to get the current key
    public function key() {
        return key($this->data);
    }

    // Implement the next method to move to the next value
    public function next() {
        next($this->data);
    }

    // Implement the valid method to check if the current value is valid
    public function valid() {
        return key($this->data) !== null;
    }
}

// Create an instance of the MyIterable class
$myIterable = new MyIterable([1, 2, 3, 4, 5]);

// Use a foreach loop to iterate over the data
foreach ($myIterable as $value) {
    echo $value . "\n";
}
// Output:
// 1
// 2
// 3
// 4
// 5
?>