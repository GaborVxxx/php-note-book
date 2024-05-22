<?php
// string
$string = 'Hello World!';
// number
$number = 5;
// boolean
$bool = false;
// decimal
$decimal = 3.2;
// array
$array = [$string, $number, $bool, $decimal];
//object
$obj = new stdClass();
// null
$null = null;
// resource
$file = fopen('sample.txt', 'r');


var_dump($number); // print with type in to HTML
echo '<br />';
echo getType($number); // print only the type in to HTML
echo '<br />';
var_dump($obj);
echo '<br />';
var_dump($file);