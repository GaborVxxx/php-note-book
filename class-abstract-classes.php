<?php

/** Abstract Classes */

// Abstract classes allow you to define a common template for a group of related classes.
// You can declare methods in the abstract class without implementing them,
// which forces the derived classes to provide specific implementations.

abstract class Animal {
    // Abstract method (does not have a body)
    abstract protected function makeSound();  // <-- the function is not implemented, but every class inherits from this class need to implement it!

    // Non-abstract method
    public function sleep() {
        echo "Zzz...";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Woof!";
    }
}

class Cat extends Animal {
    public function makeSound() {
        echo "Meow!";
    }
}

// Instantiate objects of the subclasses
$dog = new Dog();
$cat = new Cat();

$dog->makeSound();  // Outputs: Woof!
$cat->makeSound();  // Outputs: Meow!

$dog->sleep();      // Outputs: Zzz...
$cat->sleep();      // Outputs: Zzz...
