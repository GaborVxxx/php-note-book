<?php
/** Most common string operations **/

$output = null;
$string = 'Hello World';

// strlen()
$output = strlen($string);
var_dump($output);

// str_word_count()
$output = str_word_count($string);
var_dump($output);

// strpos()
$output = strpos($string, 'Hello');
var_dump($output);

// get specific character by index
$output = $string[4];
var_dump($output);

// substr() // get substring
$output = substr($string, 2, 5);
var_dump($output);

// str_replace()
$output = str_replace('Hello', 'Szevasz', $string);
var_dump($output);

// strtolower()
$output = strtolower($string);
var_dump($output);

// strtoupper()
$output = strtoupper($string);
var_dump($output);

// ucwords()  <-- capitalise
$output = ucwords($string);
var_dump($output);

// ucfirst()
$output = ucfirst($string);
var_dump($output);

// trim()
$output = trim('    hello    ');
var_dump($output);
