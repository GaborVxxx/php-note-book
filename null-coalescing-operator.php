<?php

/** null coalescing operator **/

// ??

$favColor = 'red';
$color = isset($favColor) ? $favColor : 'blue';
echo $color;

$favColor1 = null;
$color1 = $favColor1 ?? 'gray';
echo $color1;
