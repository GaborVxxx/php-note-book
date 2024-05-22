<?php
/** Multi dimensional arrays **/ // access with indexing just as javascript or python... etc
/** NOTE: in an array if we override the index with a name we only can access the item by the named key index **/

$fruit = [
    ['yellow', 'red'],
    ['green', 'blue'],
    ['purple', ['gray', 'pink']],
    'test' => [0, 1, 2]
];

$output = $fruit[0][0];
$output = $fruit[2][1][0];
$output = $fruit['test'][0];

print_r($output);