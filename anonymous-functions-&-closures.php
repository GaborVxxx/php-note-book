<?php
/** Anonymous Functions & Closures **/ // Lambda functions

// if using lambda function , we need to add a semicolon to the end!
$square = function ($num) {
    return $num * $num;
};

echo $square(2);

// Closures. We can use the "use" method to access variables form different scopes inside functions
function test() {
    $count = 0;

    $counter = function() use (&$count) {
        return ++$count;
    };

    return $counter;
}

$value =  test();
echo $value();