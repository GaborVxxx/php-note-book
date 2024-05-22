<?php
/** Arrow Functions */

// this is only good for 1 liner as we can not use {} to add multiple lines! Similar to Python lambda
$test = fn ($a, $b) => $a + $b;  // we use the "fn" and the far arrow "=>"

echo $test(1, 2);

// call back is good use case
$squaredNumbers = array_map(fn ($num) => $num * $num, [1, 2, 3]);

print_r($squaredNumbers);