<?php

/** functions **/

// side effect only
function helloWorld() {
    echo 'Hello World!';
}

helloWorld();

// return value
function helloWorld2() {
    return 'Hello World2!';
}

$value = helloWorld2();
echo $value;

// use parameters
function add($a, $b) {
    return $a + $b;
}

echo add(2, 3);

// use default values
function add2($a = 2, $b = 3) {
    return $a + $b;
}

echo add2();

// spread operator to have as many argument as we like
function add3(...$args) {
    $total = 0;
    foreach ($args as $arg) {
        $total += $arg;
    }
    return $total;
}

echo add3(2,3,4,5,6);