<?php
/** Environment Variables & $GLOBALS */

putenv('MY_VARIABLE=LoveCoding'); // <-- set variable

$variable = getenv('MY_VARIABLE'); // <-- get variable

echo $variable;

/** see all env vars in system **/
//var_dump(getenv()); // <-- with this you can see all the env variables in your system! Be carefully!!!!

/** other way to access global var from inner scope **/
$foo = 'xxx';

function foo() {
    $foo = 'yyy';
    echo $foo; // <-- local
    echo $GLOBALS['foo']; // <-- can access the global var like this!
}

foo();