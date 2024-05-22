<?php
/** Callback Functions **/

$numbers = [1,2,3,4,5,6];

// used as an unnamed function, as a callback to do the task!
$squaredNumbers = array_map(function($number) {
    return $number * $number;
}, $numbers);

print_r($squaredNumbers);