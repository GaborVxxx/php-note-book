<?php

/** comparison and operators **/

// ==   /equal to
// ===  /identical to
// !=   / not equal to
// <>   / not equal to
// !==  / not identical to
// <    / less than
// >    / greater than
// <=   / less than or equal
// >=   / greater than or equal

$x = 100; // number
$y = '100'; // string

var_dump($x == $y); // true as we not strict abut type, just as in javascript
var_dump($x === $y); // false as the type is different
var_dump($x != $y);  // false, we're not checking type so php will try to compare
var_dump($x !== $y); // true, we check type as well
var_dump($x <> $y); // != same as <>
// NOTE this operation will try to compare type !!! string vs number...
var_dump($x < $y);
var_dump($x > $y);
var_dump($x <= $y);
var_dump($x >= $y);

echo '<br/>';

// and | &&
// or | ||
// xor  <-- Only true if only 1 is true!!!
// ! <-- reverse

$a = 10;
$b = 20;

var_dump($a == 10 && $b == 20);
var_dump($a == 10 and $b == 20);
var_dump($a == 10 || $b == 20);
var_dump($a == 10 or $b == 20);
var_dump($a == 10 xor $b == 20);
var_dump(!$a == 10 xor $b == 20);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Learn PHP From Scratch</title>
</head>

<body class="bg-gray-100">
<header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold">comparison and operators in html with php</h1>
    </div>
</header>
<div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6">

    </div>
</div>
</body>

</html>
