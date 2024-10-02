<?php
// Traits in PHP are a way to reuse code in multiple classes. A trait is a collection of methods that can be used by multiple classes. Traits are similar to classes, but they cannot be instantiated on their own and are intended to be used by other classes.Unlike interfaces, traits can provide method implementations, not just method declarations.

// Purpose of traits:

// They provide a way to reuse code in multiple classes.
// They allow for horizontal reuse of code, where a class can use code from multiple traits.
// They enable developers to create a set of reusable functionality that can be mixed into classes.
// Trait: Logger
trait Logger {
    public function log($message) {
        echo "Log: $message";
    }
}

// Class: User
class User {
    use Logger;

    public function __construct($name) {
        $this->name = $name;
    }

    public function login() {
        $this->log("User $this->name logged in.");
    }
}

// Class: Product
class Product {
    use Logger;

    public function __construct($name) {
        $this->name = $name;
    }

    public function purchase() {
        $this->log("Product $this->name purchased.");
    }
}

$user = new User('John');
$user->login(); // Output: Log: User John logged in.

$product = new Product('Book');
$product->purchase(); // Output: Log: Product Book purchased.
?>