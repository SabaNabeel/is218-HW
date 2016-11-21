<?php
// function with 2 optional arguments
function foo($arg1 = '', $arg2 = '') {
 
    echo "arg1: $arg1\n";
    echo "arg2: $arg2\n";
 
}
 
 
foo('hello','world');
/* prints:
arg1: hello
arg2: world
*/
 
foo();
/* prints:
arg1:
arg2:
*/
?>