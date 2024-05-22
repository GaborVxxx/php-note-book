<?php

$num1 = 5;
$num2 = 10;
$num3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

// Implicit conversion
$res = $num1 + $num2;
$res = $num1 + $num3;  // int (string to int) php will convert the string to int
$res = $num3 + $num3;  // php will turn ti to int if its look like an int
$res = $num1 . $num3;  // now we use string method so php will turn the number in to string
//$res = $num1 + $fruit;  // ERROR
$res = $num1 + $bool1; // bool to int ! php take true as value 1 !!! if it's true   <-- 6
$res = $num1 + $bool2; // bool to int ! php take false as value 0 !!! if it's false  <-- 5
$res = $num1 + $null; // null will convert to 0

// Explicit conversion
$res = (string) $num1;
$res = (int) $num3;
$res = (bool) $num3; // true if there is value
$res = (bool) $null; // false if its null

var_dump($res);