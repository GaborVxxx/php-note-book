<?php
/** Arrays basic **/

$names = array('Jon', 'Jane', 'Doe'); // 1. way to use array function
$names = ['Jon', 'Jane', 'Doe']; // just use syntax []
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9];

echo '<pre>'; // format the log
var_dump($names);
echo '</pre>';

print_r($names); // other printing method...

echo '<br/>';

// positional indexing
echo $names[0];

// add item at position
$numbers[9] = 100;
var_dump($numbers);

echo '<br/>';

// how to add to the end of the array
$numbers[] = 101;
var_dump($numbers);

echo '<br/>';

// update an item in position
$numbers[3] = 250;
var_dump($numbers);

echo '<br/>';

// delete an item from array. NOW this is not re-order the indexing!!!
unset($numbers[2]);
var_dump($numbers);
echo '<br/>';
// manually update the indexing
$numbers = array_values($numbers);
var_dump($numbers);

