<?php

$a = 0;

function scope1() {
    global $a;
    echo $a;
}
$result = scope1();

function scope2() {
    $b = 1;
    $c = 2;
    echo $b;
}


// function scope3(){
//     echo $c;
// }
// $result = scope3();
