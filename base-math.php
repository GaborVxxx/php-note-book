<?php
/** The most commonly used math functions and operations **/

$num1= 5;
$num2= 6;

// Basic math stuff

// +
// -
// *
// /
// %

$operation = $num1 + $num2;
$operation = $num1 - $num2;
$operation = $num1 * $num2;
$operation = $num1 / $num2;
$operation = $num1 % $num2;

// Assigment operator
$num3 = 10;
$num3 += 20;
$num3 -= 5;
$num3 /= 2;
$num3 *= 6;
$num3 %= 2;

var_dump($operation);
var_dump($num3);

// Build in php functions
// rand()
$random = rand();
$random = getrandmax();
$random = rand(1, 10);
var_dump($random);

// round()
$round = round(3.6);
var_dump($round);

//ceil()
$output = ceil(4.2);
var_dump($output);

// floor()
$output = floor(4.2);
var_dump($output);

// sqrt()
$output = sqrt(2);
var_dump($output);

// pi()
$output = pi();
var_dump($output);

// abs()
$output = abs(-4.8);
var_dump($output);

// max()
$output = max(1,2,3,4,5); // OR $output = max([1,2,3,4,5]);
var_dump($output);

// min()
$output = min(1,2,3,4,5); // OR $output = max([1,2,3,4,5]);
var_dump($output);

// number_format()
$output = number_format(1254587.26587, 2, '.', ',');
var_dump($output);
