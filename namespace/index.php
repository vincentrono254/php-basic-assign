<?Php
//  A namespace is a named scope that defines a set of identifiers (such as class names, function names, and constants) that are unique within that scope.
//  //importances
//  (a).They allow for better organization by grouping classes that work together to perform a task
// (b).They allow the same name to be used for more than one class


//example 
// Declare a namespace
namespace MyNamespace1;

// Define a class within the namespace
class MyClass1 {
    // Define a method that says hello
    public function sayHello() {
        echo "Hello from MyNamespace1!\n";
    }
}

// Declare another namespace
namespace MyNamespace;

// Define a class within the namespace
class MyClass {
    // Define a method that says hello
    public function sayHello() {
        echo "Hello from MyNamespace!\n";
    }
}

// Declare another namespace
namespace MyNamespace2;

// Define a class within the namespace
class MyClass2 {
    // Define a method that says goodbye
    public function sayGoodbye() {
        echo "Goodbye from MyNamespace2!\n";
    }
}

// Use the namespaces
use MyNamespace1\MyClass1;
use MyNamespace\MyClass;
use MyNamespace2\MyClass2;

// Create instances of the classes
$myObject1 = new MyClass1();
$myObject = new MyClass();
$myObject2 = new MyClass2();

// Call the methods
$myObject1->sayHello(); // Output: Hello from MyNamespace1!
$myObject->sayHello(); // Output: Hello from MyNamespace!
$myObject2->sayGoodbye(); // Output: Goodbye from MyNamespace2!


?>