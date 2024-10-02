<?php
// Interfaces in PHP are abstract contracts that define a set of methods that must be implemented by any class that implements them. Interfaces are used to define a common set of methods that can be called on an object without knowing its concrete class.

// Significance of interfaces:

// They provide a way to define a common interface for a group of classes.
// They allow for polymorphism, where objects of different classes can be treated as if they were of the same type.
// They enable loose coupling between classes, making it easier to change or replace implementations.

// Interface: Printable
interface Printable {
    public function printDocument();
}

// Class: Document
class Document implements Printable {
    public function printDocument() {
        echo "Printing a document.";
    }
}

// Class: Image
class Image implements Printable {
    public function printDocument() {
        echo "Printing an image.";
    }
}

$document = new Document();
$document->printDocument(); // Output: Printing a document.

$image = new Image();
$image->printDocument(); // Output: Printing an image.
?>