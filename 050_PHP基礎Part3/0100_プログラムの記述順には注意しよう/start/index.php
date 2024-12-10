<?php


function counter($step = 1) {
    global $num;
    $num += $step;
    echo $num;
    return $num;
}

counter(3);
$num = 0;