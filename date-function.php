<?php
/** Most common date and time functions **/
/*
 - Y = year
 - m = month
 - d = day
 - D = dat of the week short name
 - l = full day of the week name
 - h = hour
 - i = minute
 - s = second
 - a = AM/PM
 */

$output = date('Y'); // just year
$output = date('Y', 936355600); // year from epoc time stamp
$output = date('Y', strtotime('1999-01-01')); // from string
$output = date('m'); // just month
$output = date('D'); // get the day of the week shorthand
$output = date('l'); // day of the week full name
$output = date('Y-m-d'); // fer full date
$output = date('h'); // get hour
$output = date('i'); // get minute
$output = date('s'); // get second
$output = date('a'); // AM/PM
$output = date('Y-m-d h:i:s a'); // full format

var_dump($output);