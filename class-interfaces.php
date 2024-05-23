<?php
/** Interfaces */

// Interfaces is a method to enforce some methods and values to be implemented by a class that uses that interface.
// Use the implements to extend the interface.

 interface Base {
     public function getName();
     public function setName($name);
 }

 class MyClass implements Base {
     private $name;

     function __construct($name) {
         $this->name = $name;
     }
     public function getName() {  // <-- we have to implement this...
         return $this->name;
     }
     public function setName($name) { // <-- we have to implement this...
         $this->name = $name;
     }
 }

 $namedClass = new MyClass('Bob');

 var_dump($namedClass->getName());
