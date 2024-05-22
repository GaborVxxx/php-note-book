<?php
/** Constants **/

// 1. way:
define("HOST", "localhost");

echo HOST;

// 2. way:
const DB = 'some db...';
echo DB;

/** Constants are lexically scoped, accessible anywhere... **/
function test() {
    echo HOST; // my local scope will see the const!
}

test();

/** CAN NOT BE OVERRIDE! **/
define('HOST', 'xxx');  // <-- this will error!