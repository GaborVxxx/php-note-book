<?php
/** Optional type declarations **/

// turn it on
declare(strict_types = 1); // now we use strict mode

function sum (int $a, int $b) : int
{
    return $a + $b;
}

echo sum(2, 3);

// there are different types
function displayValue(int|string $value): void {
    echo $value;
}

displayValue('hi');

//Scalar Types

//int: An integer value.
//float: A floating-point number.
//string: A sequence of characters.
//bool: A boolean value (true or false).

//Compound Types

//array: An array.
//object: An instance of a class.
//callable: A valid callback function.

//Special Types

//iterable: A value that can be iterated over (e.g., arrays, objects implementing Traversable).
//mixed: Can be any type. Introduced in PHP 8.0.
//void: Indicates a function does not return a value.
//never: Indicates a function that never returns a value (e.g., it always throws an exception or exits). Introduced in PHP 8.1.

//Class and Interface Types
//Class Name: An instance of a specific class or interface.

//Union Types

//Union Types: Allowing multiple types (e.g., int|string). Introduced in PHP 8.0.

// ...etc.