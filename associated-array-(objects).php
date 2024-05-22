<?php
/** Associative Array **/ // dict, objects..., we name the index of an item in place!!!
/** AKA Objects, but we can add single items to it too! This way it's more like an array, as we can access the items by index **/

$items = [
    'name' => 'Jon',
    'address' => 'xy street 8',
    'hobby' => ['gardening', 'gaming'],
    8,  // access by index !!!
    'deleted'  // access by index !!!
];

echo '<pre>';
var_dump($items);
echo '</pre>';

// access items in obj
$output = $items['name'];
print_r($output);

// add new entry to the object
$items['phone'] = 254878954;

echo '<pre>';
var_dump($items);
echo '</pre>';

// remove item from obj, well it kinda handled as an array, so we use unset()
unset($items['phone']); // in place method

echo '<pre>';
var_dump($items);
echo '</pre>';