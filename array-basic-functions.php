<?php
/** Array functions, most commonly used. **/
$ids = [10, 23, 56, 5, 89];
$users = ['Sue', 'Jack', 'Steeve', 'Paul'];

// count()
$output = count($ids);
var_dump($output);

// edit in place !!!!!
// sort()
sort($ids);
// rsort()  <-- reverse
rsort($ids);
// array_push()
array_push($ids, 100); // <-- push it as last item in array
// array_pop()
array_pop($ids); // <-- pop the last item
// array_shift
array_shift($ids); // <-- take the first item
// array_unshift()
array_unshift($ids, 1000); // <-- ad it as 1. element
// array_splice()
array_splice($ids, 0, 3, [9, 6, 3]); // <-- replace the items in place

echo '<pre>';
print_r($ids);
echo '</pre>';

// return a new array !!!!!
// array_slice()
$ids2 = array_slice($ids, 0, 2); // <-- take a chunk out of an array
echo '<pre>';
var_dump($ids2);
echo '</pre>';

// array_sum()
$ids3 = array_sum($ids); // <-- add up all items
echo '<pre>';
var_dump($ids3);
echo '</pre>';

// array_search()
$ids4 = 'Item at: ' . array_search(9, $ids); // <-- find item in array at position
echo '<pre>';
var_dump($ids4);
echo '</pre>';

// in_array()
$ids5 = in_array(1000, $ids); // <-- check if an item is in array
echo '<pre>';
var_dump($ids5);
echo '</pre>';

// explode()
$ids6 = explode(',', '56,89,47,4,78,9'); // <-- turn a string in to array, we need to specify what the string get split on.
echo '<pre>';
var_dump($ids6);
echo '</pre>';

// implode()
$ids7 = implode(',', $ids); // <-- turn an array to a string , we can specify what is the items will be separated with
echo '<pre>';
var_dump($ids7);
echo '</pre>';

// array_merge()
$ids8 = array_merge($ids, $users, $ids6);  // <-- merge more arrays together
echo '<pre>';
var_dump($ids8);
echo '</pre>';

/** AND MUCH MORE, this is only the most commonly used ones **/



