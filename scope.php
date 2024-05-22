<?php
/** Scope **/
// There is no lexical scope. So the variables from global scope is not accessible in functions and other nested scopes

$globalS = 0;

// this is not working like in JS!
//function test() {
//    echo $globalS;
//}

// pass it as param
function test($globalS) {
    echo $globalS;
};

// declare it as global
function test1() {
    global  $globalS;
    echo $globalS;
};


test($globalS);
test1();

// we can override the global variables in local scope
function test2() {
    global  $globalS;
    $globalS = 'x';  // the override effect the global variable in place!
    echo $globalS;
};

test2();
echo $globalS;